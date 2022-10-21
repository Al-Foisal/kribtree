@extends('layouts.app')

@section('content')  



    {{-- 1st section --}}    
    <video autoplay muted loop id="myVideo">
        <source src="public/images/home2.mp4" type="video/mp4">
        </video>
        <h1 class="centered">This is title name</h1>
        

    

    <div class="box">
    	<img src="public/images/1.jpg" alt="Flying Kites" style="width:100%; height:600px;">
        <div class="text">
            <h1>We are IA</h1>
            <button type="button" class="btn btn-warning">Who we are</button>
        </div>
    </div>

    <div class="box">
    	<img src="public/images/2.jpg" alt="Flying Kites" style="width:100%; height:600px;">
        <div class="text">
            <h1> We Know Environments</h1>
            <button type="button" class="btn btn-warning">What we do</button>
        </div>
    </div>

    <div class="box">
    	<img src="public/images/3.jpg" alt="Flying Kites" style="width:100%; height:600px;">
        <div class="text">
            <h1>We Solve the Right Problems.</h1>
            <button type="button" class="btn btn-warning">HOW WE DO IT</button>
        </div>
    </div>

    <div class="box">
    	<img src="public/images/4.jpg" alt="Flying Kites" style="width:100%; height:600px;">
        <div class="text">
            <h1>See Our Press.</h1>
            <button type="button" class="btn btn-warning">WHAT THEY'RE SAYING</button>
        </div>
    </div>

    <div class="box">
    	<img src="public/images/2.jpg" alt="Flying Kites" style="width:100%; height:600px;">
        <div class="text">
            <h1>Read Our Blog.</h1>
            <button type="button" class="btn btn-warning">WHAT WE'RE SAYING</button>
        </div>
    </div>

    
   
@endsection



