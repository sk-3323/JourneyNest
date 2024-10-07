<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Package;
use App\Models\User;
use Illuminate\Http\Request;
use PDO;

class BookController extends Controller
{
    //
    public function getCartItem()
    {
        $user = session()->get('user');
        if ($user != null) {
            $total_amount = Book::where('status', 0)
                ->where('uid', $user->_id)->sum('total_amount');

            $address = $user->address;

            $data = Book::where('status', 0)
                ->where('uid', $user->_id)->get();

            return view('cart', compact('data', 'total_amount', 'address'));
        } else {
            return redirect("login")->withSuccess("Login to continue....");
        }
    }

    public function addToCart($id)
    {
        $user = session()->get('user');
        if ($user != null) {
            $package = Package::where('_id', $id)->first();
            $b = new Book();
            $b->pid = $id;
            $b->uid = $user->_id;
            $b->pic = $package->package_pic;
            $b->pname = $package->package_name;
            $b->price = (int) $package->package_price;
            $b->total_amount = (int) $package->package_price + ($package->package_price * 0.18);
            $b->status = 0;
            $b->date = date('mm:dd:yyyy hh:mm:ss');
            $b->save();

            return back()->withSuccess('Package Added');
        } else {
            return redirect('login')->withSuccess('Please login');
        }
    }

    public function removeCart($id)
    {
        $book = Book::where('_id', $id)->delete();
        return redirect('cart');
    }

    public function orders()
    {
        $data = Book::where('status', 1)->get();
        return view('order', compact('data'));
    }

    public function confirmBook()
    {
        $user = session()->get('user');
        Book::where('uid', $user->_id)->where('status', 0)->update(['status' => 1]);
        return redirect('cart')->withSuccess('Order Placed Successfully');
    }

    public function checkout()
    {
        $user = session()->get('user');
        $uid = $user->_id;
        $data = Book::where('status', 1)->where('uid', $uid)->get();
        return view('checkout', compact('data'));
    }
}
