@extends('frontend.layouts.app')

@section('content')
    {{-- @include('frontend.includes.menu-title') --}}
    <h1 class="text-center my-4">Kribtree video</h1>


    <div class="row m-4 justify">
        @foreach ($video as $item)
            <div class="col-md-3 p-3">
                <div class="card">
                    {{-- <img src="{{ $item->image }}" height="200" class="border round card-img-top thumbnail"
                            alt="..."> --}}
                    <video height="200" controls>
                        <source src="{{ asset($item->video) }}" type="video/mp4">
                    </video>
                    <div class="card-body">
                        <h5 class="text-center">{!! $item->title !!}</h5>

                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
