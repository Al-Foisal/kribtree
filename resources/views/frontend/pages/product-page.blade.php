@extends('frontend.layouts.app')

@section('content')
{{-- @include('frontend.includes.menu-title') --}}
    @foreach ($ProductCategory as $category)
        <h1 class="text-center my-4">{{ $category->name }}</h1>
        @php
            $product = App\Models\Product::where('categoryId', $category->id)
                ->where('status', 1)
                ->orderBy('orderBy')
                ->get();
        @endphp

        <div class="row m-4 justify">
            @foreach ($product as $item)
                <div class="col-md-3 p-3">
                    <div class="card">
                        <img src="{{ $item->image }}" height="200" class="border round card-img-top thumbnail"
                            alt="...">
                        <div class="card-body">
                            <h5 class="text-center">{!! $item->name !!}</h5>

                            <div class="d-flex justify-content-between">
                                <span>Service price</span><span>${!! $item->price !!}</span>
                            </div>
                            <br>
                            <div class="d-flex justify-content-between">
                                <a type="button" class="btn btn-outline-primary btn-sm btn-block">More info</a>
                                <a onclick="add_to_cart({{ $item->id }})" type="button"
                                    class="btn btn-outline-secondary btn-sm">Add to cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endforeach

    <script>
        function add_to_cart(product_id) {
            $(document).ready(function(e) {


                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    method: 'POST',

                    url: "{{ asset('/') }}add-to-cart",
                    data: {
                        id: product_id,
                    },
                    cache: false,
                    success: function(response) {
                        //  window.location.reload();
                        if (response.status === 'success') {


                            const Toast = Swal.mixin({
                                toast: true,
                                position: 'top-end',
                                showConfirmButton: false,
                                timer: 3000,
                                timerProgressBar: true,
                                didOpen: (toast) => {
                                    toast.addEventListener('mouseenter', Swal.stopTimer)
                                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                                }
                            })

                            Toast.fire({
                                icon: 'success',
                                title: 'Product added to cart successfully'
                            })


                            $('.total_cart_items').html(response.cart_count);

                        }

                    },
                    async: false,
                    error: function(error) {

                    }
                })
            })
        }
    </script>
@endsection
