@extends('frontend.layouts.app')

<style>    
    .whoWeAre .input-box-search .form-control {
        height: 40px;
        background-color: #fff;
        border-color: darkturquoise;
    }
    .whoWeAre .input-box-search i {
        position: absolute;
        right: 6px;
        top: 6px;
        color: gray;
    }
    .whoWeAre .fa-search{ font-size: 1.8rem; }

    .whoWeAre2 div{ margin: 50px 0px;}
    .whoWeAre2 div .title{ font-size: 16px; }
    .whoWeAre2 div a{ border-radius: unset; }    
</style>

@section('content')

    <div class="box">
        <img src="{{asset('images/who-we-are/who-we-are.jpg')}}" style="width:100%; height:600px;">     
    </div>
    
    <div class="centered whoWeAre">
        <h2 class="text-center">Find it. Sell it. Own it.</h2>
        <div class="input-box-search" style="width: 600px;">
            <input type="text" class="form-control">
            <i class="fa fa-search"></i>
        </div>
    </div>

    <div class="row justify-content-center whoWeAre2">

        <div class="col-md-3 text-center border border-primary rounded p-4 mx-3">
            <img class="rounded" src="{{asset('images/who-we-are/buy.jpg')}}" style="width:180; height:120px;">           
            <h3 class="my-4">Buy a home</h3>
            <p class="title">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo unde fuga perspiciatis et possimus.</p>
            <a href="{{route('buy')}}" class="btn btn-outline-primary fw-bold">Browse homes</a>
        </div>  

        <div class="col-md-3 text-center border border-primary rounded p-4 mx-3">
            <img class="rounded" src="{{asset('images/who-we-are/sell.jpg')}}" style="width:180; height:120px;">           
            <h3 class="my-4">Sell a home</h3>
            <p class="title">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo unde fuga perspiciatis et possimus.</p>
            <a href="{{route('buy')}}" class="btn btn-outline-primary fw-bold">See your options</a>
        </div>  

        <div class="col-md-3 text-center border border-primary rounded p-4 mx-3">
            <img class="rounded" src="{{asset('images/who-we-are/rent.jpg')}}" style="width:180; height:120px;">           
            <h3 class="my-4">Rent a home</h3>
            <p class="title">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo unde fuga perspiciatis et possimus.</p>
            <a href="{{route('buy')}}" class="btn btn-outline-primary fw-bold">Find rentals</a>
        </div>

    </div>
    

@endsection
