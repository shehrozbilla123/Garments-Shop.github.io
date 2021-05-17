<?php

namespace App\Http\Controllers\admin;

use App\Brand;
use App\Category;
use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Product = Product::all();
        return view('multiauth::product.index', compact('Product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Category = Category::all();
        $Brand = Brand::all();
        $product = new Product();
        return view('multiauth::product.create', compact('Brand','Category','product'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){

    $p = Product::create($this->my_validate());
        $this->ImageStore($p);
    return redirect('admin/product/index');

    }
    private function ImageStore($product){
        if (request()->has('image')){
            $product->update(['image' => \request()->image->store('uploads','public')]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $Product)
    {

        return view('multiauth::product.show',compact('Product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $Category = Category::all();
        $Brand = Brand::all();
        return view('multiauth::product.edit',compact('product','Brand','Category'));
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
        $product->update($this->my_validate());
        $this->ImageStore($product);
        return redirect('/admin/product/index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect('admin/product/index');
    }

    private function my_validate(){
     return  request()->validate([
         'name'=>"required",
         'description'=> "required",
         'price'=> "required",
         'image'=> "required|max:5000",
         'discountPercentage'=> "required",
         'discountPrice'=> "required",
         'brand_id'=> "required",
         'category_id' => "required",
     ]);
    }
}

