@extends('frontend.layouts.app')


@section('content')
{{-- @include('frontend.includes.menu-title') --}}
<div class="">
    <img src="{{asset($info->image)}}" style="width:100%; height:600px;">     
</div>

<div class="centered">
    <h2 class="text-center">
        {{ $info->title }}
    </h2>
</div>

<div class="container mt-5">
    <div class="row">

        {!! $info->details !!}

    </div>
</div>
    

@endsection
