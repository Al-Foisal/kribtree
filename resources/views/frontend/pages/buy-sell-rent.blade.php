@extends('frontend.layouts.app')

@section('content')

<h1 class="text-center my-4">Sell house</h1>
<?php $faker = Faker\Factory::create(); ?>
    
    <div class="row m-4 justify">
        @foreach($Product as $item)
            @if ($loop->iteration < 10)            
                <div class="col-3 p-3">                
                    <div class="card">  
                        <img src="{{$item->image}}" height="200" class="border round card-img-top thumbnail" alt="...">
                        <div class="card-body">
                            <h5>$<?= rand(10000, 200000);?></h5>
                            <b>
                                <span>
                                    <?= rand(1, 7);?> bds;
                                    <?= rand(2, 5);?> ba; 
                                    <?= rand(1000, 2000);?> sqft - House for rent
                                </span>                        
                            </b> <br>
                            <span>Address : {{ Str::limit(strip_tags($faker->address), 50) }}</span>
                        </div>  
                    </div>
                </div>
            @endif
        @endforeach   
    </div>

@endsection
