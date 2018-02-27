<?php

namespace App\Http\Controllers;

use App\Categories;
use Illuminate\Http\Request;

class categoryController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('admin.adminCategory.createCategories');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $categories = new Categories;
        $categories->cat_name=$request->input('cname');
        $categories->cat_role=$request->input('crole');
        $categories->save();
        return redirect('adminCategory/show')->with('success', 'Categories Submitted');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function show(Categories $categories)
    {
        $categories = Categories::all();
        return view('admin.adminCategory.manageCategories', ['categories'=>$categories]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Categories $categories)
    {
        $categories = Categories::find($request->id);
        return view('admin.adminCategory.editCategories', ['categories'=>$categories]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Categories $categories)
    {
        $dataArray = array(
          "cat_name"=>$request->input('cname'),
          "cat_role"=>$request->input('crole'),
        );
        $categories = Categories::where('id', $request->id)->update($dataArray);
        return redirect('adminCategory/show')->with('success', 'Record Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Categories $categories)
    {
        $categories = Categories::where('id', $request->id)->delete();
        return redirect('adminCategory/show')->with('success', 'Record Deleted');
    }
}
