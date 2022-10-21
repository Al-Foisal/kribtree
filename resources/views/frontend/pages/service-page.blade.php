@extends('frontend.layouts.app')

@section('content')
    
    <h1 class="text-center my-4">Service list</h1>

    <div class="row m-4 justify">
        @foreach($Service as $item)
            <div class="col-4 p-3">
                <div class="card">
                    <h5 class="card-head p-2 text-center" style="height: 50px;">{{$item->title}}</h5>        
                    
                    <img src="{{$item->image}}" height="200" class="border round card-img-top" alt="...">
                    <div class="card-body">
                        <h5 >{!! $item->details !!}</h5>
                    </div>
                </div>
            </div>
        @endforeach   
    </div>

    <h1 class="text-center my-4">Real Estate Planning Process</h1>

    <div class="row m-4">
        @foreach($RealEstate as $item)
            <div class="col-4 p-3">
                <div class="card">
                    <h5 class="card-head p-2 text-center">{{$item->title}}</h5>        
                    
                    <img src="{{$item->image}}" height="200" class="border round card-img-top" alt="...">
                    <div class="card-body">
                        <h5 >{!! $item->details !!}</h5>
                    </div>
                </div>
            </div>
        @endforeach   
    </div>


   
@endsection
