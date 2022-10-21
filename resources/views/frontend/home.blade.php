@extends('frontend.layouts.app')

@section('content')

    <video autoplay muted loop id="myVideo">
        <source src="{{asset('images/home.mp4')}}" type="video/mp4">
    </video>
    <h1 class="centered">KRIBTREE</h1>
    
    @include('frontend.includes.menu-title')
   
    @foreach($Home as $item)
        <div class="box">
            <img src="{{$item->image}}" alt="{{$item->title}}" style="width:100%; height:600px;">
            <div class="text">
                <h1>{!!$item->title!!}</h1>
                <a href="{{$item->link}}" class="btn btn-warning">{{$item->buttonName}}</a>
            </div>
        </div>
    @endforeach
   
@endsection
