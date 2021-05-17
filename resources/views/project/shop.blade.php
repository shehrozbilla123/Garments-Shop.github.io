@extends('layouts.app')
@section('title', 'shop')
@section('naveb', 'active')
@section('content')


    <style>
        .b1{
            background-color: orangered;
            color: white;
        }
        .a2{
            color: black;
        }
        .a2:hover, .img2:hover .a2{
            text-decoration: none;
            color: red;
        }

    </style>


    <div class="container">
        <div class="row" data-aos="fade-up"
             data-aos-anchor-placement="top-bottom">

            <div class="col-4 mt-5 mb-5">
                <input type="text" placeholder="  Search Product..." style="width: 100%" class="py-2">
                <button class="btn btn-sm mt-1 px-3 py-2 b1">Search</button>
                <h4 class="mt-5 mb-2">Filter by Price</h4>
                <progress class="w-100 bg-light"></progress>
                <button class="btn btn-sm mt-2 px-3 py-2 b1 font-weight-bold">Filter</button>

                <h4 class="mt-5" data-aos="fade-up"
                    data-aos-anchor-placement="top-bottom">Products</h4>

                <div class="row mb-3 mt-5 img2" data-aos="fade-up"
                     data-aos-anchor-placement="top-bottom">

                    <div class="col mt-2">
                        <a href="/DressShirt" class="font-weight-bold a2">
                            Dress-Shirt
                        </a>
                        <br>
                        <span class="font-weight-bold">RS:1000</span>
                    </div>

                    <div class="col">
                        <a href="/DressShirt">
                            <img src="{{asset('image/s.JPG')}}" class="img-fluid w-25 h-100 a2">
                        </a>
                    </div>
                </div>

                <div class="row mb-3 img2" data-aos="fade-up"
                     data-aos-anchor-placement="top-bottom">
                    <div class="col mt-2">
                        <a href="" class="font-weight-bold a2">Black-Shoes
                        </a>
                        <br>
                        <span class="font-weight-bold">RS:800</span>
                    </div>

                    <div class="col">
                        <a href="" class="a2">
                            <img src="{{asset('image/hjh.JPG')}}" class="img-fluid w-25 h-100 a2">
                        </a>
                    </div>
                </div>


                <div class="row mb-3 img2" data-aos="fade-up"
                     data-aos-anchor-placement="top-bottom">
                    <div class="col mt-2">
                        <a href="/Cap" class="font-weight-bold a2">Black-Cap
                        </a><br>
                        <span class="font-weight-bold">RS:400</span>
                    </div>

                    <div class="col">
                        <a href="/Cap" class="a2">
                            <img src="{{asset('image/ca.JPG')}}" class="img-fluid w-25 h-100 a2">
                        </a>
                    </div>

                </div>


                <div class="row mb-3 img2" data-aos="fade-up"
                     data-aos-anchor-placement="top-bottom">
                    <div class="col mt-2">
                        <a href="" class="font-weight-bold a2">Lether-Belt
                        </a><br>
                        <span class="font-weight-bold">RS:500</span>
                    </div>

                    <div class="col">

                        <a href="">
                            <img src="{{asset('image/blll.JPG')}}" class="img-fluid w-25 h-100 a2">
                        </a>
                    </div>

                </div>


                <div class="row img2" data-aos="fade-up"
                     data-aos-anchor-placement="top-bottom">
                    <div class="col mt-2">
                        <a href="" class="font-weight-bold a2">Jeans-Pent
                        </a>
                        <br>
                        <span class="font-weight-bold">RS:1100</span>
                    </div>

                    <div class="col">
                        <a href="" class="a2">
                            <img src="{{asset('image/pp.JPG')}}" class="img-fluid w-25 h-100 a2">
                        </a>
                    </div>
                </div>


                <h4 class="mt-5" data-aos="fade-up"
                    data-aos-anchor-placement="top-bottom">Top rated products</h4>

                <div class="row mb-3 mt-5 img2" data-aos="fade-up"
                     data-aos-anchor-placement="top-bottom">
                    <div class="col mt-2">
                        <a href="" class="font-weight-bold a2">New Design Shirt
                        </a>
                        <br>
                        <span class="font-weight-bold">RS:1300</span>
                    </div>

                    <div class="col">
                        <a href="">
                            <img src="{{asset('image/lk.JPG')}}" class="img-fluid w-25 h-100 a2">
                        </a>
                    </div>
                </div>

                <div class="row mb-3 img2" data-aos="fade-up"
                     data-aos-anchor-placement="top-bottom">
                    <div class="col mt-2">
                        <a href="" class="font-weight-bold a2">Jeans Pent
                        </a><br>
                        <span class="font-weight-bold">RS:1500</span>
                    </div>

                    <div class="col">
                        <a href="" class="a2">
                            <img src="{{asset('image/p.JPG')}}" class="img-fluid w-25 h-100 a2">
                        </a>
                    </div>
                </div>


                <div class="row mb-3 img2" data-aos="fade-up"
                     data-aos-anchor-placement="top-bottom">
                    <div class="col mt-2">
                        <a href="" class="font-weight-bold a2">Brown Shoes
                        </a>
                        <br>
                        <span class="font-weight-bold">RS:4000</span>

                    </div>

                    <div class="col">
                        <a href="">
                            <img src="{{asset('image/ioi.webp')}}" class="img-fluid w-25 h-100 a2">
                        </a>
                    </div>

                </div>


                <div class="row mb-3 img2" data-aos="fade-up"
                     data-aos-anchor-placement="top-bottom">
                    <div class="col mt-2">
                        <a href="" class="font-weight-bold a2">New Design Belt
                        </a>
                        <br>
                        <span class="font-weight-bold">RS:800</span>
                    </div>

                    <div class="col">
                        <a href="">
                            <img src="{{asset('image/bl.JPG')}}" class="img-fluid w-25 h-100 a2">
                        </a>
                    </div>

                </div>


                <div class="row img2" data-aos="fade-up"
                     data-aos-anchor-placement="top-bottom">
                    <div class="col mt-2">
                        <a href="" class="font-weight-bold a2">New Cap
                        </a>
                        <br>
                        <span class="font-weight-bold">RS:500</span>
                    </div>

                    <div class="col">
                        <a href="" class="a2">
                            <img src="{{asset('image/ca.JPG')}}" class="img-fluid w-25 h-100">
                        </a>
                    </div>
                </div>
            </div>




            <div class="col-8">

                <div class="row" data-aos="fade-up"
                     data-aos-anchor-placement="top-bottom">
                    <div class="col-3">
                        <h1 class="text-dark mt-5 mb-5">Shop</h1>
                    </div>
                    <div class="col mt-5">

                        <div class="row mt-2">
                            <div class="col-5 mt-2">
                                Showing 1–12 of 22 results
                            </div>
                            <div class="col">
                                <select class="form-control w-75 ">
                                    <option>Default Sorting</option>
                                    <option>Sort by Popularity</option>
                                    <option>Sort by average rating</option>
                                    <option>Sort by latest</option>
                                    <option>Sort by Price:Low to Heigh</option>
                                    <option>Sort by Price:Heigh to Low</option>
                                </select>
                            </div>
                        </div>


                    </div>
                </div>

                <div class="row div1 row-cols-3 mb-5" data-aos="fade-up"
                     data-aos-anchor-placement="top-bottom">
                    @foreach($Product as $p)
                    <div class="col mb-5">
                        <img src="{{asset('storage/'.$p->image)}}" class="img-fluid" style="height: 250px">
                        <h6 class="text-dark mt-3 text-center">{{$p->description}}</h6>
                        <h6 class="text-center text-danger mt-2">
                            Price: <del>{{$p->price}}</del> <span class="text-dark">{{$p->discountPrice}}</span>
                        </h6>
                        <center>
                            <button class="btn mt-3 b1">
                                Add to Cart <i class="fas fa-shopping-cart"></i>
                            </button>
                        </center>
                    </div>
                    @endforeach

                </div>
            </div>

            </div>
        </div>
    </div>
@endsection
