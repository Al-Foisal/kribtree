@extends('backend.master')
@section('title') 
Professional-network page
@endsection

@section('content')
   @include('common.alertMessage')
   <div class="content-wrapper p-3">
      <div class="btn-group mb-2" role="group" aria-label="Basic example">        
         <button class="btn btn-sm btn-success text-light" data-toggle="modal" data-original-title="test" data-target="#addProfessionalNetwork">Add Professional Network</button>
         <button class="btn btn-sm btn-primary text-light" data-toggle="modal" data-original-title="test" data-target="#addProfessionalNetService">Add Professional Network Service</button>
      </div>
      
      <div class="card border border-danger">
         <div class="card-header p-1">
            <ul class="nav nav-pills" id="tabMenu">
               <li class="nav-item">
                  <a class="nav-link active btn-sm py-1 m-1" data-toggle="pill" href="#professionalNetwork">Professional Network [{{$ProfessionalNetwork->count()}}]</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link btn-sm py-1 m-1" data-toggle="pill" href="#professionalNetService">Professional Network Services [{{$ProfessionalNetService->count()}}]</a>
               </li>
            </ul>
         </div>

         <div class="card-body p-1">
            <div class="tab-content" id="pills-tabContent">

               <div class="tab-pane fade show active" id="professionalNetwork">
                  <p class="bg-success text-center mb-2">Professional Network [{{$ProfessionalNetwork->count()}}]</p>                 
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
                        @foreach($ProfessionalNetwork as $item)
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
                                       @for($i=1; $i <= $ProfessionalNetwork->count(); $i++)                                          
                                          <a href="{{ url('orderBy', ['professional_networks', $item->id, $i, 'professionalNetwork'])}}" 
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
                                    data-model="professional_networks" 
                                    data-field="status"
                                    data-id="{{ $item->id }}" 
                                    data-tab="professionalNetwork"

                                    {{ $item->status == 1 ? 'checked' : '' }}
                                 />
                              </td>
                              <td width="8%">
                                 <div class="btn-group" role="group" aria-label="Basic example">
                                    <a class="btn btn-sm btn-success text-light editProfessionalNetwork" data-toggle="modal" data-target="#editProfessionalNetwork" data-id="{{$item->id}}">Edit</a>                                    
                                    <a class="btn btn-sm btn-danger text-light" href="{{ url('delete', ['professional_networks', $item->id, 'professionalNetwork'])}}" onclick="return confirm('Are you want to delete this?')">Delete</a>
                                 </div>
                              </td>
                           </tr> 
                        @endforeach                                            
                     </tbody>
                  </table>
               </div>

               <div class="tab-pane fade show" id="professionalNetService">
                  <p class="bg-success text-center mb-2">Professional Network Services [{{$ProfessionalNetService->count()}}]</p>                 
                  <table class="table table-bordered table-striped table-hover text-center">
                     <thead class="text-center">
                        <th>No</th>
                        <th>Image</th>
                        <th>Details</th>
                        <th>Order By</th>
                        <th>Publication-status</th>
                        <th>Action</th>
                     </thead>
                     <tbody class="text-center">
                        @foreach($ProfessionalNetService as $item)
                           <tr>
                              <td width="5%">{{$loop->iteration}}</td>
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
                                       @for($i=1; $i <= $ProfessionalNetService->count(); $i++)                                          
                                          <a href="{{ url('orderBy', ['professional_net_services', $item->id, $i, 'professionalNetService'])}}" 
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
                                    data-model="professional_net_services" 
                                    data-field="status"
                                    data-id="{{ $item->id }}" 
                                    data-tab="professionalNetService"

                                    {{ $item->status == 1 ? 'checked' : '' }}
                                 />
                              </td>
                              <td width="8%">
                                 <div class="btn-group" role="group" aria-label="Basic example">
                                    <a class="btn btn-sm btn-success text-light editProfessionalNetService" data-toggle="modal" data-target="#editProfessionalNetService" data-id="{{$item->id}}">Edit</a>                                    
                                    <a class="btn btn-sm btn-danger text-light" href="{{ url('delete', ['professional_net_services', $item->id, 'professionalNetService'])}}" onclick="return confirm('Are you want to delete this?')">Delete</a>
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
{{-- Professional Network --}}

   {{-- Add Professional Network --}}
   <div class="modal fade" id="addProfessionalNetwork" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
         <div class="modal-content">
            <div class="modal-header">
               <h6 class="modal-title pl-2" id="exampleModalLabel">Add professional network</h6>
               <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
               <form action="{{ url('addProfessionalNetwork') }}" method="post" enctype="multipart/form-data" class="needs-validation" >
                  @csrf         
                  <div class="form-group">
                     <label for="title">Professional network title :</label>
                     <input name="title" class="form-control" id="title" type="text" placeholder="Ex: This title" required>
                  </div>
                              
                  <div class="form-group">
                     <label for="image">Professional network image :</label>
                     <input type="file" class="form-control imageFile" id="image" name="image" required>
                  </div>

                  <div class="form-group">
                     <label for="details">Professional network details :</label>
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
   
   {{-- Edit Professional Network --}}
   <div class="modal fade" id="editProfessionalNetwork" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
         <div class="modal-content">
            <div class="modal-header">
               <h6 class="modal-title pl-2" id="exampleModalLabel">Edit professional network</h6>
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
         $(".editProfessionalNetwork").click(function(){
            var id = $(this).data('id');
            $.ajax({
               method: "GET", // post does not work
               url: "{{ url('editProfessionalNetwork') }}",
               data: {id: id},

               success:function(response){   
                  $('.modal-body').html(response);
                  $('#editProfessionalNetwork').modal('show');
               }
            });
         });
      }); 
   </script>


{{-- Professional Network Service --}}

   {{-- Add Professional Network Service --}}
   <div class="modal fade" id="addProfessionalNetService" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
         <div class="modal-content">
            <div class="modal-header">
               <h6 class="modal-title pl-2" id="exampleModalLabel">Add professional network service</h6>
               <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
               <form action="{{ url('addProfessionalNetService') }}" method="post" enctype="multipart/form-data" class="needs-validation" >
                  @csrf                                  
                  <div class="form-group">
                     <label for="image">Professional network service image :</label>
                     <input type="file" class="form-control imageFile" id="image" name="image" required>
                  </div>

                  <div class="form-group">
                     <label for="details">Professional network service details :</label>
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
   
   {{-- Edit Professional Network Service --}}
   <div class="modal fade" id="editProfessionalNetService" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
         <div class="modal-content">
            <div class="modal-header">
               <h6 class="modal-title pl-2" id="exampleModalLabel">Edit professional network service</h6>
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
         $(".editProfessionalNetService").click(function(){
            var id = $(this).data('id');
            $.ajax({
               method: "GET", // post does not work
               url: "{{ url('editProfessionalNetService') }}",
               data: {id: id},

               success:function(response){   
                  $('.modal-body').html(response);
                  $('#editProfessionalNetService').modal('show');
               }
            });
         });
      }); 
   </script>

@endsection
