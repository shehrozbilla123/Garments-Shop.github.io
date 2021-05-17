@extends('Master.layout')
@section('title', 'Shirt')
@section('content')

    <div class="container mt-5">
        <div class="row mb-5">
            <div class="col-6">
                <img src="{{asset('image/s.JPG')}}" class="img-fluid" style="height: 350px; width: 500px">
            </div>
            <div class="col-6">
                <h3>Dress Shirt</h3>
                 <p class="mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

            <h3 class="mt-5">PKR:700</h3>
                <button class="btn btn-danger mt-5 py-2 px-4">Add to Cart</button>
            </div>
        </div>

        <div class="border" style="height: 300px; margin-top: 100px">
          <ul class="nav nav-tabs" style="height: 50px">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#home">Description</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#menu1">Reviews(0)</a>
            </li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
            <div class="tab-pane container active" id="home">
                <h6 class="mt-3 mb-3">Description</h6>
                Pri quas audiam virtute ut, case utamur fuisset eam ut, iisque accommodare an eam. Reque blandit qui eu, cu vix nonumy volumus. Legendos intellegam id usu, vide oporteat vix eu, id illud principes has. Nam tempor utamur gubergren no.
                <br><br><br>
                Ex soleat habemus usu, te nec eligendi deserunt vituperata. Natum consulatu vel ea, duo cetero repudiare efficiendi cu. Has at quas nonumy facilisis, enim percipitur mei ad. Mazim possim adipisci sea ei, omnium aeterno platonem mei no.
            </div>
            <div class="tab-pane container fade mt-5" id="menu1">
                Pri quas audiam virtute ut, case utamur fuisset eam ut, iisque accommodare an eam. Reque blandit qui eu, cu vix nonumy volumus. Legendos intellegam id usu, vide oporteat vix eu, id illud principes has. Nam tempor utamur gubergren no
                <br><br><br>
                Ex soleat habemus usu, te nec eligendi deserunt vituperata. Natum consulatu vel ea, duo cetero repudiare efficiendi cu. Has at quas nonumy facilisis, enim percipitur mei ad. Mazim possim adipisci sea ei, omnium aeterno platonem mei no.
            </div>
          </div>
        </div>

       <h3 class="mt-5">Related Product</h3>
        <div class="row mt-5">
            <div class="col">
                <img src="{{asset('image/download.JPG')}}" class="img-fluid img2" style="height: 250px">
                <h6 class="text-dark mt-3 text-center">White Pent-Coat</h6>
                <h6 class="text-center text-danger mt-3 a2">
                    Price: <del>2800</del> <span class="text-dark">1400</span>
                </h6>
                <center>
                    <button class="btn btn-warning mt-3 bt1">
                        Add to Cart <i class="fas fa-shopping-cart"></i>
                    </button>
                </center>
            </div>
            <div class="col">
                <img src="{{asset('image/hk.JPEG')}}" class="img-fluid img2" style="height: 250px">
                <h6 class="text-dark mt-3 text-center">New Design-shirt</h6>
                <h6 class="text-center text-danger mt-3 a2">
                    Price: <del>2800</del> <span class="text-dark">1400</span>
                </h6>
                <center>
                    <button class="btn btn-danger mt-3 bt1">
                        Add to Cart <i class="fas fa-shopping-cart"></i>
                    </button>
                </center>
            </div>
            <div class="col">
                <img src="{{asset('image/blll.JPG')}}" class="img-fluid img2" style="height: 250px">
                <h6 class="text-dark mt-3 text-center">Lether-Belt</h6>
                <h6 class="text-center text-danger mt-3 a2">
                    Price: <del>2800</del> <span class="text-dark">1400</span>
                </h6>
                <center>
                    <button class="btn btn-danger mt-3 bt1">
                        Add to Cart <i class="fas fa-shopping-cart"></i>
                    </button>
                </center>

            </div>
            <div class="col">
                <img src="{{asset('image/pp.JPG')}}" class="img-fluid img2" style="height: 250px">
                <h6 class="text-dark mt-3 text-center">Jeans-Pent</h6>
                <h6 class="text-center text-danger mt-3 a2">
                    Price: <del>2800</del> <span class="text-dark">1400</span>
                </h6>
                <center>
                    <button class="btn btn-warning mt-3 bt1">
                        Add to Cart <i class="fas fa-shopping-cart"></i>
                    </button>
                </center>
            </div>
        </div>



    </div>
@endsection
