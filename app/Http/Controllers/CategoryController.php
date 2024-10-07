<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = Category::latest()->paginate(3);
        return view('category.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            "cat_name" => "required|unique:category",
            "cat_pic" => "required"
        ]);

        //pic upload and store in public folder
        $img_name = "cat" . time() . "." . $request->cat_pic->extension();
        $request->cat_pic->move(public_path('img_upload'), $img_name);
        $img_path = "/img_upload/" . $img_name;
        //insert data into database
        $table = new Category();
        $table->cat_name = $request->cat_name;
        $table->cat_pic = $img_path;
        $table->save();
        return redirect('category');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        //
        return view("category.edit", compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $request->validate([
            "cat_name" => "required"
        ]);

        $table = Category::find($category->_id);
        $table->cat_name = $request->cat_name;

        if (isset($request->cat_pic)) {
            $img_name = "cat" . time() . "." . $request->cat_pic->extension();
            $request->cat_pic->move(public_path('img_upload'), $img_name);
            $imgpath = "/img_upload/" . $img_name;
            $table->cat_pic = $imgpath;
        }
        $table->save();
        return redirect('category')->withSuccess("Updated successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        //
        $category->delete();
        return redirect('category')->withSuccess("Deleted successfully");
    }
}
