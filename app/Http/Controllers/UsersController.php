<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use App\Models\Package;
use App\Models\User;
use App\Models\Users;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    //
    public function indexLogin()
    {
        return view('login');
    }

    public function indexRegister()
    {
        return view('register');
    }

    public function register(Request $request)
    {
        $request->validate([
            "username" => "required|max:15|unique:user",
            "password" => "required|min:6",
            "conpassword" => "required|same:password",
            "fullname" => "required",
            "email" => "required|email|unique:user",
            "address" => "required",
            "mobileno" => "required|digits:10|numeric"
        ]);

        $table = new Users();
        $table->username = $request->username;
        $table->fullname = $request->fullname;
        $table->email = $request->email;
        $table->password = $request->password;
        $table->address = $request->address;
        $table->mobileno = $request->mobileno;
        $table->save();
        return redirect('login');
    }

    public function login(Request $request)
    {
        if (strcmp($request->username, "admin") == 0 && strcmp($request->password, "admin") == 0) {
            return redirect('/admin');
        } else {
            $data = Users::where("username", $request->username)
                ->where("password", $request->password)
                ->first();
            if ($data == null) {
                return redirect('login')->withSuccess("Invalid username or password");
            } else {
                session()->put("user", $data);
                return redirect("/");
            }
        }
    }

    public function logout()
    {
        session()->flush();
    }

    public function getAllUser()
    {
        $users = Users::all();
        return view('adminuser', compact('users'));
    }

    public function home()
    {
        $dests = Category::get();
        $package = Package::get();
        return view('home', compact('dests', 'package'));
    }
    public function search(Request $request)
    {
        $package = Package::where('package_name', 'LIKE', $request->search . '%')->get();
        return view('explore', compact('package'));
    }

    public function explore()
    {
        $dests = Category::get();
        $package = Package::get();
        return view('explore', compact('dests', 'package'));
    }

    public function showPackage($id)
    {
        $package = Package::where('_id', $id)->first();
        return view('packageDetail', compact('package'));
    }

    public function showDestinationWise($cat_name)
    {
        $package = Package::where('category', $cat_name)->get();
        return view('destinationWise', compact('package', 'cat_name'));
    }


    public function totalsForAdmin()
    {
        $c_count = Category::count();
        $p_count = Package::count();
        $o_count = Book::where('status', 1)->count();
        $u_count = Users::count();
        $revenue = Book::where('status', 1)->sum('total_amount');
        $orders = Book::where('status', 1)->latest()->get();
        $user = Users::get();
        return view('adminhome', compact('c_count', 'p_count', 'o_count', 'u_count', 'revenue', 'orders', 'user'));
    }
}
