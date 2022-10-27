@extends('backend.master')
@section('title')
    Home side Add
@endsection

@section('content')
    @include('common.alertMessage')

    <div class="content-wrapper p-3">
        <div class="card">
            <div class="card-body">
                Add home information
            </div>
        </div>

        <div class="card border ">


            <div class="card-body p-1">
                <div class="tab-content" id="pills-tabContent">

                    <form action="{{ url('addHome') }}" method="post" enctype="multipart/form-data" class="needs-validation">
                        @csrf
                        <div class="form">
                            <div class="form-group">
                                <label for="image">Background Image :</label>
                                <input type="file" class="form-control imageFile" id="image" name="image" required>
                            </div>
                            <div class="form-group">
                                <label for="title">Title :</label>
                                <input type="text" class="form-control" id="title" name="title" required>
                            </div>
                            <div class="form-group">
                                <label for="buttonName">Button name :</label>
                                <input name="buttonName" class="form-control" id="buttonName" type="text"
                                    placeholder="Ex: Submit button, Go button..." required>
                            </div>
                            <div class="form-group">
                                <label for="link">Button link :</label>
                                <input name="link" class="form-control" id="link" type="text"
                                    placeholder="https://www.name.com">
                            </div>

                            <div class="form-group">
                                <label for="details">Details :</label>
                                <textarea type="text" class="form-control summernote" id="details" name="details"></textarea>
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
