<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Package;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = Package::paginate(3);
        return view('package.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $categories = Category::all();
        return view('package.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            "category" => "required",
            "package_name" => "required|unique:package",
            "package_desc" => "required",
            "package_price" => "required | min:1",
            "package_discount" => "required | min:0",
            "package_pic" => "required | file",
            "route" => "required",
            "duration" => "required",
            "detail_desc" => "required"
        ]);

        $imgname = "package_" . time() . "." . $request->package_pic->extension();
        $request->package_pic->move(public_path('img_upload'), $imgname);
        $imgpath = "/img_upload/" . $imgname;

        $table = new Package();
        $table->package_name = $request->package_name;
        $table->package_desc = $request->package_desc;
        $table->package_price = $request->package_price;
        $table->package_discount = $request->package_discount;
        $table->package_pic = $imgpath;
        $table->route = $request->route;
        $table->duration = $request->duration;
        $table->detail_desc = $request->detail_desc;
        $table->category = $request->category;
        $table->save();
        return redirect('/package');
    }

    /**
     * Display the specified resource.
     */
    public function show(Package $package)
    {
        return view('package.show', compact('package'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Package $package)
    {
        //
        $categories = Category::all();
        return view('package.edit', compact('package', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Package $package)
    {
        $request->validate([
            "category" => "required",
            "package_name" => "required",
            "package_desc" => "required",
            "package_price" => "required | min:1",
            "package_discount" => "required | min:0",
            "route" => "required",
            "duration" => "required",
            "detail_desc" => "required"
        ]);

        $table = Package::find($package->_id);

        if (isset($request->package_pic)) {
            $imgname = "package_" . time() . "." . $request->package_pic->extension();
            $request->package_pic->move(public_path('img_upload'), $imgname);
            $imgpath = "/img_upload/" . $imgname;
            $table->package_pic = $imgpath;
        }

        $table->package_name = $request->package_name;
        $table->package_desc = $request->package_desc;
        $table->package_price = $request->package_price;
        $table->package_discount = $request->package_discount;
        $table->route = $request->route;
        $table->duration = $request->duration;
        $table->detail_desc = $request->detail_desc;
        $table->category = $request->category;
        $table->save();
        return redirect('/package');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Package $package)
    {
        //
        $package->delete();
        return redirect('package')->withSuccess("Deleted successfully");
    }
}
