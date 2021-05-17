@extends('layouts.app')
@section('content')
    <style>
        header{
            background: url("{{asset('image/man2.jpg')}}")
            no-repeat center;
            height:655px;
            background-size: cover;
        }

        nav{
            background: rgba(0,0,0,0.6);
        }

        .a1:hover{
            text-decoration: none;
        }

        .a2:hover{
            text-decoration: none;
        }

        .m1:hover{
            transform: scale(0.5, 0.2);
        }

        .a5 a{
            text-decoration: none;

        }
        .a4:hover{
            color: orangered;
        }
        .a6:hover{text-decoration: none;
            color: orangered;

        }
        /*
            body{
                background: rgba(57,54,54,1.00);
            }
        */
        .b1{
            background-color: orangered;
            color: white;
        }
        .b1:hover{
            color: white;
        }
        #div1{
            background-color: orangered;
        }

    </style>

    <header class="d-flex align-items-center justify-content-center flex-column">
        <h1 class="text-center text-white font-weight-bold font-italic p-4" style="font-size: 40px; margin-left: 300px">
            Billa Garments<br>Winter Collection 2021
        </h1>
        <span style="margin-left: 300px">
        <button class="btn px-4 py-2 btn-sm b1">Shop Now</button>
        <button class="btn px-4 py-2 ml-2 btn-sm b1">Learn More</button>
    </span>
    </header>


    <div class="container-fluid my-3 py-3" id="div1" data-aos="fade-up"
         data-aos-anchor-placement="top-bottom">
        <div class="row text-center font-italic font-weight-bold text-white">
            <div class="col">FREE SHIPPING<br>on all orders over90$</div>
            <div class="col">CALL US ANYTIME<br>+03096764650</div>
            <div class="col">
                <i class="fas fa-map-marker-alt"></i> OUR LOCATION<br>Baghban Pura,Lahore
            </div>
        </div>
    </div>

    <div class="container my-3">
        <h2 class="font-italic font-weight-bold" style="font-size:30px;">"New Jeans Pents Design 2020"</h2>
        <hr class="mb-3 mt-0 bg-warning" style="margin-left:3%" width="5%">

        <div class="row my-4 text-center text-success" data-aos="fade-up"
             data-aos-anchor-placement="top-bottom">
            <div class="col">
                <img src="{{asset('image/p.jpg')}}" class="img-fluid">
                <h6 class="my-2">jeans Pent</h6>
                <h6>
                    Price: <del>2800</del> <span class="text-dark">1400</span>
                </h6>
                <center>
                    <button class="btn btn-success">
                        Add to Cart <i class="fas fa-shopping-cart"></i>
                    </button>
                </center>
            </div>

            <div class="col">
                <img src="image/4974beb8e68629b36ea6e6d3058fd9d0_350x350.jpg" class="img-fluid">
                <h6 class="my-2">Rough jeans Pent</h6>
                <h6>
                    Price: <del>3000</del> <span class="text-dark"> 1500</span>
                </h6>
                <center>
                    <button class="btn btn-success">
                        Add to Cart <i class="fas fa-shopping-cart"></i>
                    </button>
                </center>
            </div>

            <div class="col">
                <img src="{{asset('image/16df4f20673e315ff955145324ccb3f0.jpg_340x340q80.jpg_.webp')}}" class="img-fluid">
                <h6 class="my-2">Cortton Katrie Pent</h6>
                <h6>
                    Price: <del>2500</del> <span class="text-dark"> 1250</span>
                </h6>
                <center>
                    <button class="btn btn-success">
                        Add to Cart <i class="fas fa-shopping-cart"></i>
                    </button>
                </center>
            </div>

            <div class="col">
                <img src="{{asset('image/f269cf435e3852548bf1161453e8a542.jpg_340x340q80.jpg_.webp')}}" class="img-fluid" >
                <h6 class="my-2">Cortton Pent</h6>
                <h6>
                    Price: <del>2000</del> <span class="text-dark"> 1000</span>
                </h6>
                <center>
                    <button class="btn btn-success">
                        Add to Cart <i class="fas fa-shopping-cart"></i>
                    </button>
                </center>
            </div>
        </div>

        <h2 class="font-italic font-weight-bold mt-5" style="font-size:30px;">"New Shoes Design 2020"</h2>
        <hr class="mb-3 mt-0 bg-warning" style="margin-left:3%" width="5%">

        <div class="row my-4 text-center text-warning" data-aos="fade-up"
             data-aos-anchor-placement="top-bottom">
            <div class="col">
                <img src="{{asset('image/ppo.webp')}}" class="img-fluid">
                <h6 class="my-2">New Desgin White Shoes</h6>
                <h6>
                    Price: <del>10000</del> <span class="text-dark"> 5000</span>
                </h6>
                <center>
                    <button class="btn btn-warning">
                        Add to Cart <i class="fas fa-shopping-cart"></i>
                    </button>
                </center>
            </div>

            <div class="col">
                <img src="{{asset('image/yu.webp')}}" class="img-fluid">
                <h6 class="my-2">New Design Black Shoes </h6>
                <h6>
                    Price: <del>9000</del> <span class="text-dark"> 4500</span>
                </h6>
                <center>
                    <button class="btn btn-warning">
                        Add to Cart <i class="fas fa-shopping-cart"></i>
                    </button>
                </center>
            </div>

            <div class="col">
                <img src="{{asset('image/pp.webp')}}" class="img-fluid">
                <h6 class="my-2">New Black and White Shoes</h6>
                <h6>
                    Price: <del>8000</del> &nbsp;<span class=" text-dark"> 4000</span>
                </h6>
                <center>
                    <button class="btn btn-warning">
                        Add to Cart <i class="fas fa-shopping-cart"></i>
                    </button>
                </center>
            </div>

            <div class="col">
                <img src="{{asset('image/ioi.webp')}}" class="img-fluid" >
                <h6 class="my-2">New Design Brown Shoes</h6>
                <h6>
                    Price: <del>7000</del> <span class="text-dark"> 3500</span>
                </h6>
                <center>
                    <button class="btn btn-warning">
                        Add to Cart <i class="fas fa-shopping-cart"></i>
                    </button>
                </center>
            </div>
        </div>


        <div class="row my-5 text-dark font-italic" data-aos="fade-up"
             data-aos-anchor-placement="top-bottom">
            <div class="col">
                <h4>Boo Tie</h4>
                <hr class="mb-3 mt-0 bg-info" style="margin-left: 0%" width="15%">
            </div>
            <div class="col">
                <h4>Man Caps</h4>
                <hr class="mb-3 mt-0 bg-success" style="margin-left:0%" width="15%">
            </div>
            <div class="col">
                <h4>Leather Belts</h4>
                <hr class="mb-3 mt-0 bg-danger" style="margin-left:0%" width="15%">
            </div>
        </div>

        <div class="row" data-aos="fade-up"
             data-aos-anchor-placement="top-bottom">
            <div class="col">
                <img src="{{asset('image/abbb.jpg')}}" class="img-fluid">
            </div>

            <div class="col px-0 font-weight-bold text-info">
                Boo Tie<br>Price:
                <del class="text-dark">500</del> &nbsp; 250
                <button class="btn btn-info">
                    Add to Cart <i class="fas fa-shopping-cart"></i>
                </button>
            </div>

            <div class="col">
                <img src="{{asset('image/ca.jpg')}}" class="img-fluid">
            </div>

            <div class="col px-0 font-weight-bold text-success">
                Black Cap<br>Price:
                <del class="text-dark">600</del> &nbsp; 300
                <button class="btn btn-success">
                    Add to Cart <i class="fas fa-shopping-cart"></i>
                </button>
            </div>

            <div class="col">
                <img src="{{asset('image/bl.jpg')}}" class="img-fluid">
            </div>

            <div class="col px-0 font-weight-bold text-danger">
                Fits belt<br>Price:
                <del class="text-dark">700</del> &nbsp; 350
                <button class="btn btn-danger">
                    Add to Cart <i class="fas fa-shopping-cart"></i>
                </button>
            </div>
        </div>

        <div class="row my-5" data-aos="fade-up"
             data-aos-anchor-placement="top-bottom">
            <div class="col">
                <img src="{{asset('image/ab.jpg')}}" class="img-fluid">
            </div>

            <div class="col px-0 font-weight-bold text-info">
                Boo Tie<br>Price:
                <del class="text-dark">600</del> &nbsp; 300
                <button class="btn btn-info">
                    Add to Cart <i class="fas fa-shopping-cart"></i>
                </button>
            </div>

            <div class="col">
                <img src="{{asset('image/cc.jpg')}}" class="img-fluid">
            </div>

            <div class="col px-0 font-weight-bold text-success">
                Black Cap<br>Price:
                <del class="text-dark">800</del> &nbsp; 400
                <button class="btn btn-success">
                    Add to Cart <i class="fas fa-shopping-cart"></i>
                </button>
            </div>

            <div class="col">
                <img src="{{asset('image/blll.jpg')}}" class="img-fluid">
            </div>

            <div class="col px-0 font-weight-bold text-danger">
                Fits belt<br>Price:
                <del class="text-dark">900</del> &nbsp; 450
                <button class="btn btn-danger">
                    Add to Cart <i class="fas fa-shopping-cart"></i>
                </button>
            </div>
        </div>

        <div class="row my-5" data-aos="fade-up"
             data-aos-anchor-placement="top-bottom">
            <div class="col">
                <img src="{{asset('image/abb.jpg')}}" class="img-fluid">
            </div>

            <div class="col px-0 font-weight-bold text-info">
                Boo Tie<br>Price:
                <del class="text-dark">400</del> &nbsp; 200
                <button class="btn btn-info">
                    Add to Cart <i class="fas fa-shopping-cart"></i>
                </button>
            </div>

            <div class="col">
                <img src="{{asset('image/cca.jpg')}}" class="img-fluid">
            </div>

            <div class="col px-0 font-weight-bold text-success">
                Black Cap<br>Price:
                <del class="text-dark">700</del> &nbsp; 350
                <button class="btn btn-success">
                    Add to Cart <i class="fas fa-shopping-cart"></i>
                </button>
            </div>

            <div class="col">
                <img src="{{asset('image/bll.jpg')}}" class="img-fluid">
            </div>

            <div class="col px-0 font-weight-bold text-danger">
                Fits belt<br>Price:
                <del class="text-dark">600</del> &nbsp; 300
                <button class="btn btn-danger">
                    Add to Cart <i class="fas fa-shopping-cart"></i>
                </button>
            </div>
        </div>

        <h2 class="text-dark font-italic mt-5 font-weight-bold">
            "New Pent Cort Design 2020"
        </h2>
        <hr class="mb-3 mt-0 bg-danger" style="margin-left:4%" width="5%">

        <div class="row my-4 text-center text-dark" data-aos="fade-up"
             data-aos-anchor-placement="top-bottom">
            <div class="col">
                <img src="{{asset('image/rBVa31-BKjeAIMfWAAEHd7XEBBs407.jpg')}}" class="img-fluid">
                <h6 class="my-2">Two Piece Pent Cort</h6>
                <h6>
                    Price: <del>7000</del> &nbsp;<span class="text-danger"> 3500</span>
                </h6>
                <center>
                    <button class="btn btn-dark">
                        Add to Cart <i class="fas fa-shopping-cart"></i>
                    </button>
                </center>
            </div>

            <div class="col">
                <img src="{{asset('image/product-image-1004965514_800x.jpg')}}" class="img-fluid">
                <h6 class="my-2">Two Piece Pent Cort</h6>
                <h6>
                    Price: <del>6000</del> &nbsp;<span class="text-danger"> 3000</span>
                </h6>
                <center>
                    <button class="btn btn-dark">
                        Add to Cart <i class="fas fa-shopping-cart"></i>
                    </button>
                </center>
            </div>

            <div class="col">
                <img src="{{asset('image/c2ed19a787fb43d78a0385be79aa006d.jpg')}}" class="img-fluid">
                <h6 class="my-2">Three Piece Pent Cort</h6>
                <h6>
                    Price: <del>16000</del> &nbsp; <span class="text-danger">8000</span>
                </h6>
                <center>
                    <button class="btn btn-dark">
                        Add to Cart <i class="fas fa-shopping-cart"></i>
                    </button>
                </center>
            </div>

            <div class="col">
                <img src="{{asset('image/33828-rgegog.jpg')}}" class="img-fluid" >
                <h6 class="my-2">Three Piece Pent Cort</h6>
                <h6>
                    Price: <del>14000</del> &nbsp;<span class="text-danger"> 7000</span>
                </h6>
                <center>
                    <button class="btn btn-dark">
                        Add to Cart <i class="fas fa-shopping-cart"></i>
                    </button>
                </center>
            </div>
        </div>
    </div>

    <div style="background:rgba(219,219,219,1.00)" class="my-5 p-5">
        <h4 class="text-dark font-italic font-weight-bold">
            From The Blog:
        </h4>
        <hr class="mb-3 mt-0 bg-danger" style="margin-left:0%" width="5%">
        <div class="row" data-aos="fade-up"
             data-aos-anchor-placement="top-bottom">
            <div class="col-1 bg-warning">
                <h5 class="my-4 ml-1">12<br>June</h5>
            </div>

            <div class="col">
                <img src="{{asset('image/claudio-schwarz-purzlbaum-PH8GUKG-Do0-unsplash.jpg')}}" class="img-fluid">
            </div>

            <div class="col font-weight-bold">
                New Caps Design<br>What...<br>raibercristain
            </div>

            <div class="col-1 bg-warning">
                <h5 class="my-4 ml-1">12<br>June</h5>
            </div>

            <div class="col">
                <img src="{{asset('image/benjamin-voros-TnNo84AJJ5A-unsplash.jpg')}}" class="img-fluid">
            </div>

            <div class="col font-weight-bold">
                Jaket for the Winter<br>What...<br>raibercristain
            </div>
        </div>
        <hr>

        <div class="row" data-aos="fade-up"
             data-aos-anchor-placement="top-bottom">
            <div class="col-1 bg-warning">
                <h5 class="my-4 ml-1">12<br>June</h5>
            </div>
            <div class="col">
                <img src="{{asset('image/claudio-schwarz-purzlbaum-PH8GUKG-Do0-unsplash.jpg')}}" class="img-fluid">
            </div>
            <div class="col font-weight-bold">
                New Caps Design<br>What...<br>raibercristain
            </div>

            <div class="col-1 bg-warning">
                <h5 class="my-4 ml-1">12<br>June</h5>
            </div>
            <div class="col">
                <img src="{{asset('image/benjamin-voros-TnNo84AJJ5A-unsplash.jpg')}}" class="img-fluid">
            </div>
            <div class="col font-weight-bold">
                Jaket for the Winter<br>What...<br>raibercristain
            </div>
        </div>
    </div>

    <div class="container my-3">
        <h2 class="text-dark font-italic font-weight-bold">
            "New Shirts Design 2020"
        </h2>
        <hr class="mb-3 mt-0 bg-warning" style="margin-left:4%" width="5%">
        <div class="row my-4 text-center text-danger" data-aos="fade-up"
             data-aos-anchor-placement="top-bottom">
            <div class="col">
                <img src="{{asset('image/lk.jpg')}}" class="img-fluid">
                <h6 class="my-2">New Print Shirt</h6>
                <h6>
                    Price: <del>2100</del> &nbsp;<span class="text-dark"> 1050</span>
                </h6>
                <center>
                    <button class="btn btn-danger">
                        Add to Cart <i class="fas fa-shopping-cart"></i>
                    </button>
                </center>
            </div>

            <div class="col">
                <img src="{{asset('image/hskj.webp')}}" class="img-fluid">
                <h6 class="my-2">New Design Shirt</h6>
                <h6>
                    Price: <del>1900</del> &nbsp;<span class="text-dark"> 950</span>
                </h6>
                <center>
                    <button class="btn btn-danger">
                        Add to Cart <i class="fas fa-shopping-cart"></i>
                    </button>
                </center>
            </div>

            <div class="col">
                <img src="{{asset('image/hk.jpeg')}}" class="img-fluid">
                <h6 class="my-2">New Print Shirt</h6>
                <h6>
                    Price: <del>1700</del> &nbsp;<span class="text-dark"> 850</span>
                </h6>
                <center>
                    <button class="btn btn-danger">
                        Add to Cart <i class="fas fa-shopping-cart"></i>
                    </button>
                </center>
            </div>

            <div class="col">
                <img src="{{asset('image/o.jpg')}}" class="img-fluid" >
                <h6 class="my-2">Dress Shirt</h6>
                <h6>
                    Price: <del>1500</del> &nbsp;<span class="text-dark"> 750</span>
                </h6>
                <center>
                    <button class="btn btn-danger">
                        Add to Cart <i class="fas fa-shopping-cart"></i>
                    </button>
                </center>
            </div>
        </div>
    </div>

    <!-- Start WOWSlider.com BODY section --> <!-- add to the <body> of your page -->
    <div id="wowslider-container0" class="my-5">
        <div class="ws_images"><ul>
                <li><img src="{{asset('data0/images/fgh.jpg')}}" alt="New Design Pent Cort 2020" title="New Design Pent Cort 2020" id="wows0_0"/></li>
                <li><img src="{{asset('data0/images/hk.jpg')}}" alt="Good Looking" title="Good Looking" id="wows0_1"/></li>
                <li><img src="{{asset('data0/images/maxresdefault.jpg')}}" alt="Beautiful dressing" title="Beautiful dressing" id="wows0_2"/></li>
                <li><a href="http://wowslider.net"><img src="{{asset('data0/images/wp3646106.jpg')}}" alt="slideshow javascript" title="Legend" id="wows0_3"/></a></li>
                <li><img src="{{asset('data0/images/boot.jpg')}}" alt="Boo Tie" title="Boo Tie" id="wows0_4"/></li>
            </ul></div>
        <div class="ws_bullets"><div>
                <a href="#" title="New Design Pent Cort 2020"><span><img src="data0/tooltips/fgh.jpg" alt="New Design Pent Cort 2020"/>1</span></a>
                <a href="#" title="Good Looking"><span><img src="{{asset('data0/tooltips/hk.jpg')}}" alt="Good Looking"/>2</span></a>
                <a href="#" title="Beautiful dressing"><span><img src="{{asset('data0/tooltips/maxresdefault.jpg')}}" alt="Beautiful dressing"/>3</span></a>
                <a href="#" title="Legend"><span><img src="{{asset('data0/tooltips/wp3646106.jpg')}}" alt="Legend"/>4</span></a>
                <a href="#" title="Boo Tie"><span><img src="{{asset('data0/tooltips/boot.jpg')}}" alt="Boo Tie"/>5</span></a>
            </div></div><div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.net">slider html</a> by WOWSlider.com v9.0</div>
        <div class="ws_shadow"></div>
    </div>
    <script type="text/javascript" src="engine0/wowslider.js"></script>
    <script type="text/javascript" src="engine0/script.js"></script>
    <!-- End WOWSlider.com BODY section -->


@endsection
@section('title', 'Home Page')
@section('navb', 'active')
