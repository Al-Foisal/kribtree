@extends('frontend.layouts.app')

@section('content')
    <?php $faker = Faker\Factory::create(); ?>
    <style>
        tr td { vertical-align: middle;}
    </style>
    <div class="row m-4 justify-content-center">
        <h1 class="text-center">Agent finder</h1>
        <div class="col-10 p-3">  
            <table class="table table-success table-striped table-bordered">
                <thead  class="table-primary text-center">
                    <th>Photo</th>    
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Location</th>
                    <th>Language</th>
                </thead>
                <tbody class="text-center">
                    @for($i=0; $i<50; $i++)
                        <tr>
                            <td class="p-2">
                                <img src="{{asset('images/default.jpg')}}" width="120" height="100">
                            </td>
                            <td>{{$faker->name}}</td>                              
                            <td>{{$faker->e164PhoneNumber}}</td>                              
                            <td>{{$faker->state}}</td>                              
                            <td>{{$faker->locale}}</td>                              
                        </tr> 
                    @endfor                                           
                </tbody>
            </table>
        </div>
    </div>    
@endsection
