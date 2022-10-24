@extends('frontend.layouts.app')

@section('content')
@include('frontend.includes.menu-title')
    <h1 class="text-center my-4">Professional Network</h1>

    <div class="row m-4">
        @foreach($ProfessionalNetwork as $item)
            <div class="col-md-4 p-3">
                <div class="card">
                    <h5 class="card-head p-2 text-center" style="height: 50px;">{{$item->title}}</h5>        
                    
                    <img src="{{$item->image}}" class="border" height="200" alt="...">
                    <div class="card-body">
                        <h5 >{!! $item->details !!}</h5>
                    </div>
                </div>
            </div>
        @endforeach   
    </div>

    <h1 class="text-center my-4">Professional Network Services</h1>

    <div class="row m-4">
        @foreach($ProfessionalNetService as $item)
            <div class="col-md-4 p-3">
                <img src="{{$item->image}}" height="500" class="card-img-top" alt="...">
            </div>
            <div class="col-8 p-3">               
                <h5 >{!! $item->details !!}</h5>
            </div>
        @endforeach   
    </div>
    
@endsection
