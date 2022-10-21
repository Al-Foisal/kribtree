@extends('backend.master')
@section('title') 
   Home side
@endsection

@section('content')
   @include('common.alertMessage')

   <div class="content-wrapper p-3">
      <div class="btn-group mb-2" role="group" aria-label="Basic example"> 
         <button class="btn btn-sm btn-success text-light" data-toggle="modal" data-original-title="test" data-target="#addImage">Add New Slide</button>
         <button class="btn btn-sm btn-primary text-light hide" data-toggle="modal" data-original-title="test" data-target="#addVideo">Add video</button>
      </div>

      <div class="card border border-danger">

         <div class="card-header p-1 hide">
            <ul class="nav nav-pills" id="tabMenu">
               <li class="nav-item">
                  <a class="nav-link active btn-sm py-1 m-1" data-toggle="pill" href="#image">Image [{{$Home->count()}}]</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link btn-sm py-1 m-1" data-toggle="pill" href="#video">Video [{{$Home->count()}}]</a>
               </li>
            </ul>
         </div>

         <div class="card-body p-1">
            <div class="tab-content" id="pills-tabContent">

               <div class="tab-pane fade show active" id="image">
                  <p class="bg-success text-center pb-1">Home slide image [{{$Home->count()}}]</p>              
                  <table class="table table-bordered table-striped table-hover text-center">
                     <thead class="text-center">
                        <th>No</th>                           
                        <th>Image</th>
                        <th>Title</th>
                        <th>Button name</th>
                        <th>Button link</th>
                        <th>Order By</th>
                        <th>Status</th>
                        <th>Action</th>
                     </thead>
                     <tbody class="text-center">
                        @foreach($Home as $item)
                           <tr>
                              <td width="5%">{{$loop->iteration}}</td>                              
                              <td class="p-2"><img src="{{$item->image}}" width="120" height="100"></td>
                              <td>{!!$item->title!!}</td>
                              <td>{!!$item->buttonName!!}</td>
                              <td>{!!$item->link!!}</td>
                              <td width="8%">
                                 <div class="btn-group">
                                    <button type="button" class="btn dropdown-toggle" data-toggle="dropdown">
                                       <i class="far fa-check-circle"></i>
                                       {{$item->orderBy}}
                                    </button>
                                    <div class="dropdown-menu">
                                       @for($i=1; $i <= $Home->count(); $i++)                                          
                                          <a href="{{ url('orderBy', ['homes', $item->id, $i, 'tabName'])}}"
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
                                    <a href="{{ url('itemStatus', [$item->id, 'homes', 'tabName']) }}" class="btn px-1 btn-sm btn-success" title="Click for inactive">Active</a>
                                 @else
                                    <a href="{{ url('itemStatus', [$item->id, 'homes', 'tabName']) }}" class="btn px-1 btn-sm btn-danger" title="Click for active">Inactive</a>
                                 @endif
                              </td>
                              <td width="8%">
                                 <div class="btn-group" role="group" aria-label="Basic example">
                                    <a class="btn btn-sm btn-success text-light editHome" data-toggle="modal" data-target="#editHome" data-id="{{$item->id}}">Edit</a>
                                    
                                    <a class="btn btn-sm btn-danger text-light" href="{{ url('itemDelete', [$item->id, 'homes', 'tabName'])}}" onclick="return confirm('Are you want to delete this?')">Delete</a>
                                 </div>
                              </td>
                           </tr> 
                        @endforeach                                            
                     </tbody>
                  </table>
               </div>

               <div class="tab-pane fade show" id="video">
                  <p class="bg-success text-center pb-1">Video slide image [{{$Home->count()}}]</p>              
                  <table class="table table-bordered table-striped table-hover text-center">
                     <thead class="text-center">
                        <th>No</th>                           
                        <th>Image</th>
                        <th>Title</th>
                        <th>Button name</th>
                        <th>Button link</th>
                        <th>Order By</th>
                        <th>Status</th>
                        <th>Action</th>
                     </thead>
                     <tbody class="text-center">
                        @foreach($Home as $item)
                           <tr>
                              <td width="5%">{{$loop->iteration}}</td>                              
                              <td class="p-2"><img src="{{$item->image}}" width="120" height="100"></td>
                              <td>{!!$item->title!!}</td>
                              <td>{!!$item->buttonName!!}</td>
                              <td>{!!$item->link!!}</td>
                              <td width="8%">
                                 <div class="btn-group">
                                    <button type="button" class="btn dropdown-toggle" data-toggle="dropdown">
                                       <i class="far fa-check-circle"></i>
                                       {{$item->orderBy}}
                                    </button>
                                    <div class="dropdown-menu">
                                       @for($i=1; $i <= $Home->count(); $i++)                                          
                                          <a href="{{ url('orderBy', ['homes', $item->id, $i, 'tabName'])}}"
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
                                    <a href="{{ url('itemStatus', [$item->id, 'homes', 'tabName']) }}" class="btn px-1 btn-sm btn-success" title="Click for inactive">Active</a>
                                 @else
                                    <a href="{{ url('itemStatus', [$item->id, 'homes', 'tabName']) }}" class="btn px-1 btn-sm btn-danger" title="Click for active">Inactive</a>
                                 @endif
                              </td>
                              <td width="8%">
                                 <div class="btn-group" role="group" aria-label="Basic example">
                                    <a class="btn btn-sm btn-success text-light editHome" data-toggle="modal" data-target="#editHome" data-id="{{$item->id}}">Edit</a>
                                    
                                    <a class="btn btn-sm btn-danger text-light" href="{{ url('itemDelete', [$item->id, 'homes', 'tabName'])}}" onclick="return confirm('Are you want to delete this?')">Delete</a>
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

      {{-- Add image --}}
      <div class="modal fade" id="addImage" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <h6 class="modal-title pl-2" id="exampleModalLabel">Add Image</h6>
                  <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
               </div>
               <div class="modal-body">
                  <form action="{{ url('addHome') }}" method="post" enctype="multipart/form-data" class="needs-validation" >
                     @csrf                   
                     <div class="form">
                        <div class="form-group">
                           <label for="image">Background Image :</label>
                           <input type="file" class="form-control imageFile" id="image" name="image" required>
                        </div>
                        <div class="form-group">
                           <label for="title">Title :</label>
                           <textarea type="text" class="form-control summernote" id="title" name="title" required></textarea>
                        </div>
                        <div class="form-group">
                           <label for="buttonName">Button name :</label>
                           <input name="buttonName" class="form-control" id="buttonName" type="text" placeholder="Ex: Submit button, Go button..." required>
                        </div>
                        <div class="form-group">
                           <label for="link">Button link :</label>
                           <input name="link" class="form-control" id="link" type="text" placeholder="https://www.name.com" required>
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

      {{-- edit home image --}}
      <div class="modal fade" id="editHome" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <h6 class="modal-title text-center" id="exampleModalLabel">Edit home image</h6>
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
            $(".editHome").click(function(){

               var id = $(this).data('id');

               //alert("first value " + userid + "And second value is " + catid );
               $.ajax({
                  method: "GET", // post does not work
                  url: "{{ url('editHome') }}",
                     data: {id: id},

                  success:function(response){   
                     $('.modal-body').html(response);
                     // $("div#CityResShow").html(result);
                     $('#editHome').modal('show');
                  }
               });

            });
         // function ends
         }); 
      </script>  
            
      {{-- Add video --}}
      <div class="modal fade" id="addVideo" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <h6 class="modal-title pl-2" id="exampleModalLabel">Add video</h6>
                  <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
               </div>
               <div class="modal-body">
                  <form action="{{ url('addVideo') }}" method="post" enctype="multipart/form-data" class="needs-validation" >
                     @csrf                   
                     <div class="form">
                        <div class="form-group">
                           <label for="image">Background video :</label>
                           <input type="file" class="form-control imageFile" id="image" name="image" required>
                        </div>
                        <div class="form-group">
                           <label for="title">Title :</label>
                           <textarea type="text" class="form-control summernote" id="title" name="title" required></textarea>
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