<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Category;
use App\Product;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    function index() {
        return view('project.frontendpage');
    }

    function Contact() {
        return view('project.Contact us');
    }

    function shop() {
        $Product = Product::all();
        return view('project.shop',compact('Product'));
    }

    function blog() {
        return view('project.blog');
    }


    function PentCoat() {
        return view('blog.PentCoat');
    }


    function Belts() {
        return view('blog.Belts');
    }


    function Pents() {
        return view('blog.Pent');
    }

    function shirts() {
        return view('blog.Shirts');
    }
    function DressShirt() {
        return view('ShopPages.Shirt');
    }
    function Cap() {
        return view('ShopPages.Cap');
    }
}
