@extends('frontend.layouts.app')

@section('content')
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-2">
                @include('frontend.pages.user.dashboard-nav')
            </div>
            <div class="col-md-10">
                <div class="card mb-5">
                    <div class="card-header">
                        <h1>Your profile</h1>
                    </div>
                </div>
                <form action="{{ route('user.updateProfile') }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-12">

                            <div class="mb-3">
                                <label for="name" class="form-label">Full name:</label>
                                <input type="text" class="form-control" id="name" name="name"
                                    value="{{ auth()->user()->name }}" required>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mb-3 row">
                                <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="text" readonly class="form-control-plaintext" id="staticEmail"
                                        value="{{ auth()->user()->email }}">
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mb-3">
                                <label for="phone" class="form-label">Phone:</label>
                                <input type="text" class="form-control" id="phone" name="phone"
                                    value="{{ auth()->user()->phone }}">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mb-3">
                                <label for="address" class="form-label">Address</label>
                                <textarea class="form-control" id="address" rows="3" name="address">{{ auth()->user()->address }}</textarea>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
