<?php

namespace App\Http\Controllers;

use App\Product;
use App\Categories;
use Illuminate\Http\Request;

class productController extends Controller
{
  /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $categories = Categories::all();
       return view('admin.adminProduct.createProduct', ['categories'=>$categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Product $product)
    {
        $product = new Product;
        $product->cat_id = $request->input('cname');
        $product->pro_name = $request->input('pname');
        $product->pro_price = $request->input('pprice');
        $product->pro_quantity = $request->input('pquantity');
        $product->pro_discount = $request->input('pdiscount');
        $product->pro_description = $request->input('pdescription');
        $product->save();
        return redirect('adminProduct/show')->with('success', 'Product Adeed');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        $product = Product::all();
        return view('admin.adminProduct.manageProduct', ['product'=>$product]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Product $product)
    {
        $delete = Product::where('id', $request->id)->delete();
        return redirect('adminProduct/show')->with('success', 'product deleted');
    }
}
