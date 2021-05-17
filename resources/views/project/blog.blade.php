@extends('layouts.app')
@section('title', 'Blog')
@section('navc', 'active')
@section('content')

    <style>
        a{
            color: black;
        }
        .bt1{
            color: white;
            background-color: orangered;
        }
    </style>



    <div class="container">
        <h1 class="mt-5 mb-3">BILLA DEMO</h1>
        <div class="row">
            <div class="col-8">
                <img src="{{asset('image/fgfg.JPG')}}" class="img-fluid">
                <h2 class="mt-3">
                    <span class="px-3 py-1 bg-light">12 <br>Jan</span>
                    PentCoat For The Soul. What Color Is Yours?</h2>

                <div class="mt-5">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </div>
                <span>
                By  <a href="">raibercristian</a>
                 / <a href="">Comments</a>
              </span>
                <div>
                    <button class="btn py-2 px-4 mb-5 mt-2 bt1">Read More</button>
                </div>


                <img src="{{asset('image/bllll.JPG')}}" class="img-fluid">
                <h2 class="mt-3">
                    <span class="px-3 py-1 bg-light">12 <br>Jan</span>
                    Belts For The Soul. What Color Is Yours?</h2>
                <div class="mt-5">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </div>
                <span>
                By  <a href="">raibercristian</a>
                 / <a href="">Comments</a>
              </span>
                <div>
                    <button class="btn py-2 px-4 mt-2 mb-5 bt1">Read More</button>
                </div>



                <img src="{{asset('image/shirt.JPG')}}" class="img-fluid mt-5">
                <h2 class="mt-3">
                    <span class="px-3 py-1 bg-light">12 <br>Jan</span>
                    Shirts For The Soul. What Color Is Yours?</h2>
                <div class="mt-5">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </div>
                <span>
                    By  <a href="">raibercristian</a>
                      / <a href="">Comments</a>
                  </span>
                <div>
                    <button class="btn py-2 px-4 mb-5 mt-2 bt1">Read More</button>
                </div>


                <img src="{{asset('image/pee.JPG')}}" class="img-fluid mt-5" style="height: 12%; width: 100%">
                <h2 class="mt-3">
                    <span class="px-3 py-1 bg-light">12 <br>Jan</span>
                    Pents For The Soul. What Color Is Yours?</h2>
                <div class="mt-5">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </div>
                <span>
                By  <a href="">raibercristian</a>
                 / <a href="">Comments</a>
              </span>
                <div>
                    <button class="btn py-2 px-4 mt-2 bt1">Read More</button>
                </div>
            </div>




            <div class="col-4">
                <input type="text" placeholder="  Search..." style="width: 350px">
                {{--              <i class="fa fa-search"></i>--}}

                <img src="{{asset('image/clander.png')}}" class="img-fluid mt-5" style="height: 300px; width: 400px">

                <h3 class="mt-5 mb-5">Recent Posts</h3>
                <div>
                    <a href="">
                        > Jackets For The Soul. What Color Is Yours?</a>
                </div>

                <div>
                    <a href="">
                        > Best Fabrics For Your Dream Dress!
                    </a>
                </div>
                <div>
                    <a href="">
                        > Long Legs? No Longer A Myth! Check it out!
                    </a>
                </div>
                <div>
                    <a href="">
                        > Latest Trends For Autumn Are Here!
                    </a>
                </div>


                <h3 class="mt-5 mb-5">Categories</h3>
                <div>
                    <a href="">
                        > Fashion
                    </a>
                </div>



                <h3 class="mt-5 mb-5">Meta</h3>
                <div>
                    <a href="">
                        > Log in
                    </a>
                </div>

                <div>
                    <a href="">
                        > Enteries feed
                    </a>
                </div>

                <div>
                    <a href="">
                        > Commentes feed
                    </a>
                </div>

                <div>
                    <a href="">
                        > WordPress.org
                    </a>
                </div>

            </div>
        </div>
    </div>
@endsection
