@extends('backend.master')
@section('title') 
   Agent list
@endsection

@section('content')
   @include('common.alertMessage')

   <div class="content-wrapper p-3">     
      <div class="card border border-danger">  
        <div class="tab-pane fade show active" id="product">          
            <p class="bg-success text-center pb-1">Agent [50]</p>
            <table class="table table-bordered table-striped table-hover text-center">
                <thead class="text-center">
                    <th>No</th>                       
                    <th>Image</th>
                    <th>Name</th>
                    <th>Photo</th>
                    <th>Location</th>
                    <th>Language</th>
                </thead>
            
                <tbody class="text-center">

                    <?php $faker = Faker\Factory::create(); ?>
                    @for($i=0; $i<50; $i++)
                        <tr>
                            <td>{{$i}}</td>   
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
   </div>
@endsection

@section('js')

      {{-- Add product --}}
      <div class="modal fade" id="addProduct" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <h6 class="modal-title pl-2" id="exampleModalLabel">Add product</h6>
                  <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
               </div>
               <div class="modal-body">
                  <form action="{{ url('addProduct') }}" method="post" enctype="multipart/form-data" class="needs-validation" >
                     @csrf                   
                     <div class="form">
                        @php
                           $productCategory = App\Models\ProductCategory::where('status', 1)->orderBy('orderBy')->get();
                        @endphp
                        <div class="form-group">
                           <label for="categoryId">Product category :</label>
                           <select name="categoryId" id="categoryId" class="form-control">
                              <option value="">Select Now</option>  
                                 @foreach($productCategory as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                 @endforeach
                           </select>
                        </div>     
                        <div class="form-group">
                           <label for="name">Product name :</label>
                           <input name="name" class="form-control" id="name" type="text" placeholder="Ex: Submit button, Go button..." required>
                        </div>
                        <div class="form-group">
                           <label for="image">Product Image :</label>
                           <input type="file" class="form-control imageFile" id="image" name="image" required>
                        </div>
                        <div class="form-group">
                           <label for="details">Details :</label>
                           <textarea type="text" class="form-control summernote" id="details" name="details" required></textarea>
                        </div>
                        <div class="form-group">
                           <label for="price">Product price($) :</label>
                           <input name="price" class="form-control" id="price" type="number" placeholder="Ex: 5" required>
                        </div>
                     </div>
                     <div class="modal-footer">
                        <div class="btn-group">
                           <button class="btn btn-sm btn-primary">Save</button>
                           <button class="btn btn-sm btn-secondary" type="button" data-dismiss="modal">Close</button>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>

      {{-- Edit product image --}}
      <div class="modal fade" id="editproduct" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <h6 class="modal-title text-center" id="exampleModalLabel">Edit product image</h6>
                  <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
               </div>
               <div class="modal-body">
                  
               </div>
            </div>
         </div>
      </div>

      <script type="text/javascript"> 
         $(document).ready(function() {
            $.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
            // function starts
            $(".editproduct").click(function(){

               var id = $(this).data('id');

               //alert("first value " + userid + "And second value is " + catid );
               $.ajax({
                  method: "GET", // post does not work
                  url: "{{ url('editproduct') }}",
                     data: {id: id},

                  success:function(response){   
                     $('.modal-body').html(response);
                     // $("div#CityResShow").html(result);
                     $('#editproduct').modal('show');
                  }
               });

            });
         // function ends
         }); 
      </script>

      {{-- Add product category --}}
      <div class="modal fade" id="addProductCategory" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <h6 class="modal-title pl-2" id="exampleModalLabel">Add product category</h6>
                  <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
               </div>
               <div class="modal-body">
                  <form action="{{ url('addProductCategory') }}" method="post" enctype="multipart/form-data" class="needs-validation" >
                     @csrf                   
                     <div class="form">                        
                        <div class="form-group">
                           <label for="name">Category name :</label>
                           <input name="name" class="form-control" id="name" type="text" placeholder="Ex: One's Finances, Financial Goal..." required>
                        </div>
                     </div>
                     <div class="modal-footer">
                        <div class="btn-group">
                           <button class="btn btn-sm btn-primary">Save</button>
                           <button class="btn btn-sm btn-secondary" type="button" data-dismiss="modal">Close</button>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>

@endsection