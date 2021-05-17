@extends('layouts.app')
@section('title', 'Contact-Us')
@section('nava', 'active')
@section('content')

    <div class="container">
        <h1 class="mb-5 mt-5">Contact-us</h1>

        <div class="row mb-5">
            <div class="col-5">
                <p>Pri quas audiam virtute ut, case utamur fuisset eam ut, iisque accommodare an eam. Reque blandit qui eu, cu vix nonumy volumus. Legendos intellegam id usu, vide oporteat vix eu, id illud principes has. Nam tempor utamur gubergren n </p>
            </div>
            <div class="col-3">
                <div class="row">
                    <div class="col-1 mt-2">  <i class="fas fa-mobile fa-2x"></i></div>
                    <div class="col"> <span class="font-weight-bold">
                Give Us A CALL</span> <br>
                        03096764650</div>
                </div>

            </div>

            <div class="col-4">

                <div class="row">
                    <div class="col-1 mt-2">  <i class="fas fa-map-marker fa-2x"></i></div>
                    <div class="col"> <span class="font-weight-bold">
                OUR LOCATION</span> <br>
                        Pakistani Bazar Near,Baghbanpura Bazar <br>
                        03096764650</div>
                </div>
            </div>
        </div>





        <div class="row">

            <div class="col-5">
                <form action="" class="container mb-5">
                    <label class="font-weight-bold text-dark">Full Name:</label>
                    <input type="text" placeholder="Full Name..." class="form-control">

                    <label class="text-dark font-weight-bold">Phone Number:</label>
                    <input type="number" placeholder="Phone Number..." class="form-control">

                    <label class="text-dark font-weight-bold">Email:</label>
                    <input type="email" placeholder="Email..." class="form-control">

                    <label class="font-weight-bold text-dark">Remarks:</label>
                    <textarea type="text" placeholder="Type Message" class="form-control" rows="3" style="resize: none"></textarea>

                    <button class="btn mt-3" style="color: white; background-color: orangered">Send Massege</button>
                </form>

            </div>

            <div class="col-7 mt-2">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6797.676078709917!2d74.36975577305057!3d31.58348896507791!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39191ac38818005f%3A0xe1612460de0fb770!2sBaghbanpura%2C%20Lahore%2C%20Punjab%2054000%2C%20Pakistan!5e0!3m2!1sen!2s!4v1611842640347!5m2!1sen!2s" width="650" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
        </div>
    </div>
@endsection

