<?php

namespace App\Http\Controllers;

use App\Category;
use App\CategoryModel;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public $timestamps = false;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Category::all();
        return view('category.index',compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("category.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=new Category();
        $data->name=$request->get('name');
        $data->description=$request->get('description');
        $data->save();
        return redirect()->route('category.index')->with('status','Category is added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CategoryModel  $categoryModel
     * @return \Illuminate\Http\Response
     */
    public function show(CategoryModel $categoryModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CategoryModel  $categoryModel
     * @return \Illuminate\Http\Response
     */
    public function edit($categoryModel)
    {
        $datas = CategoryModel::find($categoryModel);
        $datas=$categoryModel;
        //return view('category.edit',compact('data'));
        dd($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CategoryModel  $categoryModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CategoryModel $categoryModel)
    {
        $category->name=$request->get('name');
        $category->description=$request->get('description');
        $category->save();
        return redirect()->route('category.index')->with('status','category data is changed');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CategoryModel  $categoryModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(CategoryModel $categoryModel)
    {
        //
    }
}
