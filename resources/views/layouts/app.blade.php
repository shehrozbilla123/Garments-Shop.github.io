<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script src="js/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Start WOWSlider.com HEAD section --> <!-- add to the <head> of your page -->
    <link rel="stylesheet" type="text/css" href="engine0/style.css"/>
    <!--script type="text/javascript" src="engine0/jquery.js"></script-->
    <!-- End WOWSlider.com HEAD section -->
    <style>
        #li1{
            background-color: orangered;
        }

        .a1{
            color: white;
        }
        .a1:hover{
            color: orangered;
        }
        a:hover{
            text-decoration: none;
            color: orangered;
        }

        .b2:hover{
            border: solid orangered;
            background-color:orangered;
        }

        .c1:hover{
            background-color: blue;
        }
        .c2:hover{
            background-color: deepskyblue;
        }
        .c3:hover{
            background-color: red;
        }
        .c4:hover{
            background-color: deeppink;
        }


    </style>

</head>
<body>
<nav class="navbar navbar-expand-lg bg-dark">
            <span class="text-white ml-5">
                <i class="fas fa-envelope mr-2"></i> ShehrozImran127@gmail.com
            </span>
    <button class="navbar-toggler" data-toggle="collapse" data-target="#nav"><i class="fas fa-bars"></i></button>
    <div class="navbar-collapse collapse" id="nav">
        <ul class="navbar-nav ml-auto mr-5">

            <li class="nav-item mt-2">
                <input type="text" placeholder="search..." class="bg-dark a1" style="width: 230px"><span class="fa fa-search ml-n4 text-white"></span>
            </li>

            <li class="nav-item bg-dark px-3 py-2 h-25 mt-lg-n2 border-left ml-5">
                <a href="" class="nav-link a1">
                    <i class="fa fa-user mr-1"></i>Account</a>
            </li>

            <li class="nav-item px-4 py-2 mt-lg-n2 ml-3" style="height: 50px">
                <a href="" class="nav-link text-white" >Add to Cart $</a>
            </li>

        </ul>
    </div>
</nav>
<div class="bg-dark">
    <a href="" class="navbar-brand">
        <img src="{{asset('image/bii.jpg')}}" style="width: 120px; margin-left: 100px">
    </a>
</div>

<nav class="navbar bg-dark navbar-expand-sm" style="height: 100px">
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#mynav"><i class="fas fa-bars"></i></button>
    <div class="">
        <hr class="bg-white" style="width: 1100px; margin-left: 100px">
        <div class="navbar-collapse collapse" id="mynav">
            <ul class="navbar-nav p-1" style="margin-left:105px">
                <li class="nav-item" @yield('nava')>
                    <a href="/" class="nav-link mr-3 a1">Home</a>
                </li>

                <li class="nav-item" @yield('navb')>
                    <a href="shop" class="nav-link mr-3 a1">shop</a>
                </li>

                <li class="nav-item" @yield('navc')>
                    <a href="blog" class="nav-link mr-3 a1">Blog</a>
                </li>

                <li class="nav-item" @yield('navd')>
                    <a href="Contact-us" class="nav-link mr-3 a1">Contact-Us</a>
                </li>

            </ul>
        </div>
    </div>
</nav>

<div>
    @yield('content')
</div>

<div class="bg-dark container-fluid px-5 pt-5 pb-2 mt-5">
    <div class="row text-white font-weight-bold">
        <div class="col">
            <h6>Meta</h6>
            <hr class="bg-white my-n1 ml-0" style="width: 7%">
        </div>
        <div class="col">
            <h6>Resent Post</h6>
            <hr class="bg-white my-n1 ml-0" style="width: 7%">
        </div>
        <div class="col">
            <h6>About</h6>
            <hr class="bg-white my-n1 ml-0" style="width: 7%">
        </div>
        <div class="col">
            <h6>Tags</h6>
            <hr class="bg-white my-n1 ml-0" style="width: 7%">
        </div>
    </div>
    <div class="row my-5">
        <div class="col">
            <a href="#" class="text-white a1 d-block mb-2">> log in</a>
            <a href="#" class="text-white a1 d-block mb-2">> Enteries feed</a>
            <a href="#" class="text-white a1 d-block mb-2">> Comment feed</a>
            <a href="#" class="text-white a1 d-block">> WordPress.org</a>
        </div>

        <div class="col">
            <div class="row mb-4">
                <div class="col-5">
                    <img src="{{asset('image/benjamin-voros-TnNo84AJJ5A-unsplash.jpg')}}" class="img-fluid">
                </div>
                <div class="col">
                    <a href="#" class="text-white a2">
                        Jackets For The Soul. What Color Is Yours?
                    </a>
                </div>
            </div>

            <div class="row mb-4">
                <div class="col-5">
                    <img src="{{asset('image/ccc.webp')}}" class="img-fluid">
                </div>
                <div class="col">
                    <a href="#" class="text-white a2">
                        Best New cap Design 2020
                    </a>
                </div>
            </div>

            <div class="row mb-4">
                <div class="col-5">
                    <img src="{{asset('image/benjamin-voros-TnNo84AJJ5A-unsplash.jpg')}}" class="img-fluid">
                </div>
                <div class="col">
                    <a href="#" class="text-white a2 d-block">
                        Jackets For The Soul. What Color Is Yours?
                    </a>
                </div>
            </div>

            <div class="row">
                <div class="col-5">
                    <img src="{{asset('image/ccc.webp')}}" class="img-fluid">
                </div>
                <div class="col">
                    <a href="" class="text-white a2 d-block">
                        Best New cap Design 2020
                    </a>
                </div>
            </div>
        </div>

        <div class="col text-white">
            <h6 class="mb-4">Pri quas audiam virtute ut, case utamur fuisset eam ut, iisque accommodare an eam.</h6>
            <h6>Reque blandit qui eu, cu vix nonumy volumus. Legendos intellegam id usu, vide oporteat vix eu, id illud principes has. Nam tempor utamur gubergren no.</h6>
        </div>

        <div class="col">
            <a href="" class="border py-2 px-2 mb-5 text-white b2">Winter</a>
            <a href="" class="border py-2 px-2 mb-5 text-white ml-2 b2">Fashion</a>
            <a href="/PentCoat" class="border py-2 px-2 mb-5 text-white ml-2 b2">Pent-Coat</a><br><br>
            <a href="/Belts" class="border py-2 px-2 text-white b2">Belts</a>
            <a href="/Shirts" class="border py-2 px-2 text-white ml-2 b2">Dress-Shirts</a>
            <a href="/Pents" class="border py-2 px-2 text-white ml-2 b2">Jeans-Pents</a>
        </div>
    </div>
</div>
<div class="bg-dark">
    <div class="container">
        <div class="row">
            <div class="col">
                <a href="https://facebook.com">
                    <i class="fab fa-facebook text-white c1"></i>
                </a>
                <a href="https://twitter.com">
                    <i class="fab fa-twitter text-white ml-4 c2"></i>
                </a>
                <a href="https://youtube.com">
                    <i class="fab fa-youtube text-white ml-4 c3"></i>
                </a>
                <a href="https://instagram.com">
                    <i class="fab fa-instagram text-white ml-4 c4"></i>
                </a>
            </div>
            <div class="col">
                <h6 class="text-white">Copyright © 2021 | Theme: Billa | Powered by Laravel...</h6>
            </div>
        </div>
    </div>
</div>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script>
    $(document).ready(function () {
        setTimeout(() => {
            AOS.init();
        }, 120)
    })
</script>
</body>
</html>

