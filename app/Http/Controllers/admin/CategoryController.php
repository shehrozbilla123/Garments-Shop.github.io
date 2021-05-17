<?php

namespace App\Http\Controllers\admin;

use App\Brand;
use App\Category;
use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index()
    {

    }


    public function create()
    {
        $category = new Category();
        return view('multiauth::category.create', compact('category'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        $data = request()->validate([
//            'name'=>'required|unique:categories'
//        ]);


//        $Category = new Category();
//        $Category->name = request('name');
//        $Category->save();
//
//        $Category = Category::all();
//        return view('multiauth::category.index', compact('Category'));
//
//        Category::create($data);
//        session()->flash('save', 'Category is Add!!!');
//        return back();


        $c = Category::create($this->my_validate());
        $this->ImageStore($c);
        return redirect('admin/category/index');

    }
    private function ImageStore($category){
        if (request()->has('image')){
            $category->update(['image' => \request()->image->store('uploads','public')]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        return view('multiauth::category.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('multiauth::product.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {

        $category->update($this->my_validate());
        $this->ImageStore($category);
        return redirect('/admin/category/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect('admin/category/index');
    }
    private function my_validate(){
        return  request()->validate([
            'name'=>"required",
            'description'=> "required",
            'price'=> "required",
            'image'=> "required|max:5000",
            'discountPercentage'=> "required",
            'discountPrice'=> "required",
            ]);
    }
}
