@extends('backend.master')
@section('title')
    Home side Edit
@endsection

@section('content')
    @include('common.alertMessage')

    <div class="content-wrapper p-3">
        <div class="card">
            <div class="card-body">
                Update home information
            </div>
        </div>

        <div class="card border ">


            <div class="card-body p-1">
                <div class="tab-content" id="pills-tabContent">

                    <form action="{{ url('editHome2') }}" method="post" enctype="multipart/form-data">
                        @csrf                   
                        <div class="form">
                           <div class="form-group row">
                              <input  name="id" value="{{$Home->id}}" hidden>
                              <input  name="oldImage" value="{{$Home->image}}" hidden>
                              <div class="col-4">
                                 <label for="old">Present image :</label>
                                 <img class="rounded" src="{{asset($Home->image)}}" width="150" height="80">
                              </div>
                              <div class="col-8">
                                 <label for="image">Upload new image :</label>
                                 <input type="file" class="form-control col imageFile" id="image" name="image">
                              </div>
                           </div>
                  
                           <div class="form-group">
                              <label for="title">Title :</label>
                              <textarea type="text" class="form-control" id="title" name="title" required>{{$Home->title}}</textarea>
                           </div>
                  
                           <div class="form-group">
                              <label for="buttonName">Button name :</label>
                              <input name="buttonName" class="form-control" id="buttonName" type="text" value="{{$Home->buttonName}}" placeholder="Ex: Submit button, Go button..." required>
                           </div>
                           <div class="form-group">
                              <label for="link">Button link (keep empty if details):</label>
                              <input name="link" class="form-control" id="link" type="text" value="{{$Home->link}}" placeholder="https://www.name.com">
                           </div>
                           <div class="form-group">
                              <label for="details">Details :</label>
                              <textarea type="text" class="form-control summernote" id="details" name="details" required>{!! $Home->details !!}</textarea>
                           </div>
                        </div>
                        <div class="modal-footer">
                           <div class="btn-group">
                              <button class="btn btn-sm btn-primary">Edit now</button>
                           </div>
                        </div>
                     </form>  

                </div>
            </div>
        </div>
    </div>
@endsection


