@extends('frontend.layouts.app')

@section('content')
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-2">
                @include('frontend.pages.user.dashboard-nav')
            </div>
            <div class="col-md-10">
                dashboard
            </div>
        </div>
    </div>
@endsection
