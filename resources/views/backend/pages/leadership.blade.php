@extends('backend.master')
@section('title') 
   Leadership
@endsection

@section('content')
   @include('common.alertMessage')
   <div class="content-wrapper p-3">
      <div class="btn-group mb-2" role="group" aria-label="Basic example"> 
         <button class="btn btn-sm btn-info text-light" data-toggle="modal" data-original-title="test" data-target="#addLeadership">Add leadership link</button>
      </div>

      <div class="card border border-danger">
         <div class="card-body p-1">
            <p class="bg-info text-center pb-1">Leadership link [{{$Leadership->count()}}]</p>
            <table class="table table-bordered table-striped table-hover">
               <thead class="text-center">
                  <th>No</th>                           
                  <th>Title</th>
                  <th>Url</th>
                  <th>Order By</th>
                  <th>Status</th>
                  <th>Action</th>
               </thead>
               <tbody>
                  @foreach($Leadership as $item)
                     <tr>
                        <td width="7%">{{$loop->iteration}}</td>
                        <td>
                           <a href='{{ url($item->url) }}' target="_blank">{!! $item->title !!}</a>
                        </td>
                        <td> {{ $item->url }} </td>
                        <td width="8%">
                           <div class="btn-group">
                              <button type="button" class="btn dropdown-toggle" data-toggle="dropdown">
                                 <i class="far fa-check-circle"></i>
                                 {{$item->orderBy}}
                              </button>
                              <div class="dropdown-menu">
                                 @for($i=1; $i <= $Leadership->count(); $i++)                                          
                                    <a href="{{ url('orderBy', ['leaderships', $item->id, $i, 'useful'])}}"
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
                              <a href="{{ url('itemStatus', [$item->id, 'leaderships', 'useful'])}}" class="btn px-1 btn-sm btn-success" title="Click for inactive">Active</a>
                           @else
                              <a href="{{ url('itemStatus', [$item->id, 'leaderships', 'useful'])}}" class="btn px-1 btn-sm btn-danger" title="Click for active">Inactive</a>
                           @endif
                        </td>
                        <td width="15%">
                           <div class="btn-group" role="group" aria-label="Basic example">
                              {{-- <a class="btn btn-sm btn-success text-light" data-toggle="modal" data-target="#edituseful" data-id="{{$item->id}}" data-name="{{$item->socialName}}" data-url="{{$item->socialUrl}}" data-tab="useful">Edit</a> --}}
                              
                              <a class="btn btn-sm btn-danger text-light" href="{{ url('itemDelete', [$item->id, 'leaderships', 'useful'])}}" onclick="return confirm('Are you want to delete this?')">Delete</a>
                           </div>
                        </td>
                     </tr> 
                  @endforeach                                        
               </tbody>
            </table>
         </div>            
      </div>
   </div>
@endsection

@section('js')

   {{-- Add social site --}}
      <div class="modal fade" id="addLeadership" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <h6 class="modal-title text-center" id="exampleModalLabel">Add leadership link</h6>
                  <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
               </div>
               <div class="modal-body">
                  <form action="{{ url('addLeadership') }}" method="post" enctype="multipart/form-data" class="needs-validation" >
                     @csrf
                     <div class="form-group">
                        <label for="title">Leadership link name :</label>
                        <input name="title" class="form-control" id="title" type="text" placeholder="Ex: Who we are? what we do?..." required>
                     </div>             
                     <div class="form">
                        <div class="form-group">
                           <label for="url" class="mb-2">Leadership link URL :</label>
                           <input type="text" id="url" class="form-control" name="url" placeholder="Example : www.blog.com" required>
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

   {{-- Edit social site --}}
      <div class="modal fade" id="edituseful" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <h6 class="modal-title text-center" id="exampleModalLabel">Edit social site</h6>
                  <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
               </div>
               <div class="modal-body">
                  <form action="{{ url('edituseful') }}" method="post" enctype="multipart/form-data" class="needs-validation" >
                     @csrf                   
                     <div class="form">
                        <input name="id" id="id" hidden>
                        <input name="tab" id="tab" hidden>
                        <div class="form-group">
                           <label for="socialName" class="mb-2">Social site name :</label>
                           <input type="text" id="socialName" class="form-control" name="socialName" placeholder="Example : Facebook, Instagram..." required>
                        </div>
                        <div class="form-group">
                           <label for="socialUrl" class="mb-2">Social site URL :</label>
                           <input type="text" id="socialUrl" class="form-control" name="socialUrl" placeholder="Example : www.facebook.com/userName" required>
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

      <script type="text/javascript">
         $('#edituseful').on('show.bs.modal', function (event) {
            console.log('Model Opened')
            var button = $(event.relatedTarget)

            var id = button.data('id')
            var socialName = button.data('name')
            var socialUrl = button.data('url')
            var tab = button.data('tab') 
            
            var modal = $(this)
            
            modal.find('.modal-body #id').val(id);
            modal.find('.modal-body #socialName').val(socialName);
            modal.find('.modal-body #socialUrl').val(socialUrl);
            modal.find('.modal-body #tab').val(tab);
         })
      </script>

@endsection