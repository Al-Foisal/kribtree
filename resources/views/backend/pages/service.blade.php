@extends('backend.master')
@section('title') 
   Service page
@endsection

@section('content')
   @include('common.alertMessage')
   <div class="content-wrapper p-3">
      <div class="btn-group mb-2" role="group" aria-label="Basic example"> 
         <button class="btn btn-sm btn-success text-light" data-toggle="modal" data-original-title="test" data-target="#addService">Add Service</button>
         <button class="btn btn-sm btn-primary text-light" data-toggle="modal" data-original-title="test" data-target="#addRealEstate">Add Real Estate</button>
      </div>

      <div class="card border border-danger">
         <div class="card-header p-1">
            <ul class="nav nav-pills" id="tabMenu">
               <li class="nav-item">
                  <a class="nav-link active btn-sm py-1 m-1" data-toggle="pill" href="#service">Service [{{$Service->count()}}]</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link btn-sm py-1 m-1" data-toggle="pill" href="#realEstate">Real Estate [{{$RealEstate->count()}}]</a>
               </li>
            </ul>
         </div>

         <div class="card-body p-1">
            <div class="tab-content" id="pills-tabContent">

               <div class="tab-pane fade show active" id="service">
                  <p class="bg-success text-center mb-2">Service [{{$Service->count()}}]</p>                 
                  <table class="table table-bordered table-striped table-hover text-center">
                     <thead class="text-center">
                        <th>No</th>                           
                        <th>Title</th>
                        <th>Image</th>
                        <th>Details</th>
                        <th>Order By</th>
                        <th>Publication-status</th>
                        <th>Action</th>
                     </thead>
                     <tbody class="text-center">
                        @foreach($Service as $item)
                           <tr>
                              <td width="5%">{{$loop->iteration}}</td>                              
                              <td>{!!$item->title!!}</td>
                              <td width="5%" class="p-1">
                                 <img class="rounded" src="{{$item->image}}" width="120" height="100">
                              </td>
                              <td>               
                                 {!! Str::limit(strip_tags($item->details), 100) !!}                                 
                              </td>
                              <td width="8%">
                                 <div class="btn-group">
                                    <button type="button" class="btn dropdown-toggle" data-toggle="dropdown">
                                       <i class="far fa-check-circle"></i>
                                       {{$item->orderBy}}
                                    </button>
                                    <div class="dropdown-menu">
                                       @for($i=1; $i <= $Service->count(); $i++)                                          
                                          <a href="{{ url('orderBy', ['services', $item->id, $i, 'service'])}}" 
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
                                 <input type="checkbox" class="js-switch status"
                                    data-model="services" 
                                    data-field="status"
                                    data-id="{{ $item->id }}" 
                                    data-tab="service"

                                    {{ $item->status == 1 ? 'checked' : '' }}
                                 />
                              </td>
                              <td width="8%">
                                 <div class="btn-group" role="group" aria-label="Basic example">
                                    <a class="btn btn-sm btn-success text-light editService" data-toggle="modal" data-target="#editService" data-id="{{$item->id}}">Edit</a>                                    
                                    <a class="btn btn-sm btn-danger text-light" href="{{ url('delete', ['services', $item->id, 'service'])}}" onclick="return confirm('Are you want to delete this?')">Delete</a>
                                 </div>
                              </td>
                           </tr> 
                        @endforeach                                            
                     </tbody>
                  </table>
               </div>

               <div class="tab-pane fade show" id="realEstate">
                  <p class="bg-success text-center mb-2">Real Estate [{{$RealEstate->count()}}]</p>                 
                  <table class="table table-bordered table-striped table-hover text-center">
                     <thead class="text-center">
                        <th>No</th>                           
                        <th>Title</th>
                        <th>Image</th>
                        <th>Details</th>
                        <th>Order By</th>
                        <th>Publication-status</th>
                        <th>Action</th>
                     </thead>
                     <tbody class="text-center">
                        @foreach($RealEstate as $item)
                           <tr>
                              <td width="5%">{{$loop->iteration}}</td>                              
                              <td>{!!$item->title!!}</td>
                              <td width="5%" class="p-1">
                                 <img class="rounded" src="{{$item->image}}" width="120" height="100">
                              </td>
                              <td> {!! Str::limit(strip_tags($item->details), 100) !!} </td>
                              <td width="8%">
                                 <div class="btn-group">
                                    <button type="button" class="btn dropdown-toggle" data-toggle="dropdown">
                                       <i class="far fa-check-circle"></i>
                                       {{$item->orderBy}}
                                    </button>
                                    <div class="dropdown-menu">
                                       @for($i=1; $i <= $RealEstate->count(); $i++)                                          
                                          <a href="{{ url('orderBy', ['real_estates', $item->id, $i, 'realEstate'])}}" 
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
                                 <input type="checkbox" class="js-switch status"
                                    data-model="real_estates" 
                                    data-field="status"
                                    data-id="{{ $item->id }}" 
                                    data-tab="realEstate"

                                    {{ $item->status == 1 ? 'checked' : '' }}
                                 />
                              </td>
                              <td width="8%">
                                 <div class="btn-group" role="group" aria-label="Basic example">
                                    <a class="btn btn-sm btn-success text-light editRealEstate" data-toggle="modal" data-target="#editRealEstate" data-id="{{$item->id}}">Edit</a>                                    
                                    <a class="btn btn-sm btn-danger text-light" href="{{ url('delete', ['real_estates', $item->id, 'realEstate'])}}" onclick="return confirm('Are you want to delete this?')">Delete</a>
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
{{-- Service --}}

   {{-- Add service --}}
   <div class="modal fade" id="addService" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
         <div class="modal-content">
            <div class="modal-header">
               <h6 class="modal-title pl-2" id="exampleModalLabel">Add service</h6>
               <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
               <form action="{{ url('addService') }}" method="post" enctype="multipart/form-data" class="needs-validation" >
                  @csrf         
                  <div class="form-group">
                     <label for="title">Service title :</label>
                     <input name="title" class="form-control" id="title" type="text" placeholder="Ex: This title" required>
                  </div>
                              
                  <div class="form-group">
                     <label for="image">Service image :</label>
                     <input type="file" class="form-control imageFile" id="image" name="image" required>
                  </div>

                  <div class="form-group">
                     <label for="details">Service details :</label>
                     <textarea type="text" class="form-control summernote" id="details" name="details" required></textarea>
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
   
   {{-- Edit service --}}
   <div class="modal fade" id="editService" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
         <div class="modal-content">
            <div class="modal-header">
               <h6 class="modal-title pl-2" id="exampleModalLabel">Edit service</h6>
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
         $(".editService").click(function(){
            var id = $(this).data('id');
            $.ajax({
               method: "GET", // post does not work
               url: "{{ url('editService') }}",
               data: {id: id},

               success:function(response){   
                  $('.modal-body').html(response);
                  $('#editService').modal('show');
               }
            });
         });
      }); 
   </script>


{{-- RealEstate --}}

   {{-- Add realEstate --}}
   <div class="modal fade" id="addRealEstate" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
         <div class="modal-content">
            <div class="modal-header">
               <h6 class="modal-title pl-2" id="exampleModalLabel">Add real estate</h6>
               <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
               <form action="{{ url('addRealEstate') }}" method="post" enctype="multipart/form-data" class="needs-validation" >
                  @csrf         
                  <div class="form-group">
                     <label for="title">Real estate title :</label>
                     <input name="title" class="form-control" id="title" type="text" placeholder="Ex: This title" required>
                  </div>
                              
                  <div class="form-group">
                     <label for="image">Real estate image :</label>
                     <input type="file" class="form-control imageFile" id="image" name="image" required>
                  </div>

                  <div class="form-group">
                     <label for="details">Real estate details :</label>
                     <textarea type="text" class="form-control summernote" id="details" name="details" required></textarea>
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
   
   {{-- Edit service --}}
   <div class="modal fade" id="editRealEstate" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
         <div class="modal-content">
            <div class="modal-header">
               <h6 class="modal-title pl-2" id="exampleModalLabel">Edit real estate</h6>
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
         $(".editRealEstate").click(function(){
            var id = $(this).data('id');
            $.ajax({
               method: "GET", // post does not work
               url: "{{ url('editRealEstate') }}",
               data: {id: id},

               success:function(response){   
                  $('.modal-body').html(response);
                  $('#editRealEstate').modal('show');
               }
            });
         });
      }); 
   </script>
@endsection