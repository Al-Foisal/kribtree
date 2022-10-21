@extends('backend.master')
@section('title') 
   Product
@endsection

@section('content')
   @include('common.alertMessage')

   <div class="content-wrapper p-3">
      <div class="btn-group mb-2" role="group" aria-label="Basic example"> 
         <button class="btn btn-sm btn-success text-light" data-toggle="modal" data-original-title="test" data-target="#addProduct">Add new product</button>
         <button class="btn btn-sm btn-primary text-light" data-toggle="modal" data-original-title="test" data-target="#addProductCategory">Add product category</button>
      </div>

      <div class="card border border-danger">
         <div class="card-header p-1">
            <ul class="nav nav-pills" id="tabMenu">
               <li class="nav-item">
                  <a class="nav-link active btn-sm py-1 m-1" data-toggle="pill" href="#product">Product [{{$Product->count()}}]</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link btn-sm py-1 m-1" data-toggle="pill" href="#productCategory">Category [{{$ProductCategory->count()}}]</a>
               </li>
            </ul>
         </div>

         <div class="card-body p-1">
            <div class="tab-content" id="pills-tabContent">

               <div class="tab-pane fade show active" id="product">          
                  <p class="bg-success text-center pb-1">Product image [{{$Product->count()}}]</p>
                  <table class="table table-bordered table-striped table-hover text-center">
                     <thead class="text-center">
                        <th>No</th>    
                        <th>Category</th>                       
                        <th>Image</th>
                        <th>Name</th>
                        <th>Details</th>
                        <th>Price</th>
                        <th>Order By</th>
                        <th>Publication-status</th>
                        <th>Action</th>
                     </thead>
                  
                     <tbody class="text-center">
                        @foreach($Product as $item)
                           <tr>
                              <td width="5%">{{$loop->iteration}}</td>                              
                              <td>{{$item->productCategory->name}}</td>                              
                              <td class="p-2"><img src="{{$item->image}}" width="120" height="100"></td>
                              <td>{!!$item->name!!}</td>
                              <td> {{ Str::limit(strip_tags($item->details), 50) }}
                              <td>${!!$item->price!!}</td>
                              <td width="8%">
                                 <div class="btn-group">
                                    <button type="button" class="btn dropdown-toggle" data-toggle="dropdown">
                                       <i class="far fa-check-circle"></i>
                                       {{$item->orderBy}}
                                    </button>
                                    <div class="dropdown-menu">
                                       @for($i=1; $i <= $Product->count(); $i++)                                          
                                          <a href="{{ url('orderBy', ['products', $item->id, $i, 'tabName'])}}"
                                             class="{{$i==$item->orderBy ? 'bg-info text-white disabled pl-2' : 'text-center'}} dropdown-item">
                                             @if($i==$item->orderBy)
                                                <i class="far fa-check-circle"></i>
                                             @endif
                                             {{$i}}
                                          </a>
                                       @endfor
                                    </div>
                                 </div>
                              </td>
                              <td width="8%">
                                 @if($item->status == 1)
                                    <a href="{{ url('itemStatus', [$item->id, 'products', 'tabName']) }}" class="btn px-1 btn-sm btn-success" title="Click for inactive">Active</a>
                                 @else
                                    <a href="{{ url('itemStatus', [$item->id, 'products', 'tabName']) }}" class="btn px-1 btn-sm btn-danger" title="Click for active">Inactive</a>
                                 @endif
                              </td>
                              <td width="8%">
                                 <div class="btn-group" role="group" aria-label="Basic example">
                                    <a class="btn btn-sm btn-success text-light editproduct" data-toggle="modal" data-target="#editproduct" data-id="{{$item->id}}">Edit</a>
                                    
                                    <a class="btn btn-sm btn-danger text-light" href="{{ url('itemDelete', [$item->id, 'products', 'tabName'])}}" onclick="return confirm('Are you want to delete this?')">Delete</a>
                                 </div>
                              </td>
                           </tr> 
                        @endforeach                                            
                     </tbody>
                  </table>
               </div>

               <div class="tab-pane fade show" id="productCategory">
                  <p class="bg-success text-center pb-1">Product category [{{$ProductCategory->count()}}]</p>
                  <table class="table table-bordered table-striped table-hover text-center">
                     <thead class="text-center">
                        <th>No</th>   
                        <th>Category name</th>
                        <th>Order By</th>
                        <th>Publication-status</th>
                        <th>Action</th>
                     </thead>
                  
                     <tbody class="text-center">
                        @foreach($ProductCategory as $item)
                           <tr>
                              <td width="5%">{{$loop->iteration}}</td>
                              <td>{!!$item->name!!}</td>
                              <td width="10%">
                                 <div class="btn-group">
                                    <button type="button" class="btn dropdown-toggle" data-toggle="dropdown">
                                       <i class="far fa-check-circle"></i>
                                       {{$item->orderBy}}
                                    </button>
                                    <div class="dropdown-menu">
                                       @for($i=1; $i <= $ProductCategory->count(); $i++)                                          
                                          <a href="{{ url('orderBy', ['product_categories', $item->id, $i, 'productCategory'])}}"
                                             class="{{$i==$item->orderBy ? 'bg-info text-white disabled pl-2' : 'text-center'}} dropdown-item">
                                             @if($i==$item->orderBy)
                                                <i class="far fa-check-circle"></i>
                                             @endif
                                             {{$i}}
                                          </a>
                                       @endfor
                                    </div>
                                 </div>
                              </td>
                              <td width="15%">
                                 <input type="checkbox" class="js-switch status"
                                    data-model="product_categories" 
                                    data-field="status"
                                    data-id="{{ $item->id }}" 
                                    data-tab="productCategory"

                                    {{ $item->status == 1 ? 'checked' : '' }}
                                 />
                              </td>
                              <td width="8%">
                                 <div class="btn-group" role="group" aria-label="Basic example">
                                    <a class="btn btn-sm btn-success text-light editProductCategory" data-toggle="modal" data-target="#editProductCategory" data-id="{{$item->id}}">Edit</a>                                    
                                    <a class="btn btn-sm btn-danger text-light" href="{{ url('delete', ['product_categories', $item->id, 'productCategory'])}}" onclick="return confirm('Are you want to delete this?')">Delete</a>
                                 </div>
                              </td>
                           </tr> 
                        @endforeach                                            
                     </tbody>
                  </table>
               </div>

            </div>
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