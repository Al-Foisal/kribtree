   
@if(isset($Home))
   <form action="{{ url('editHome2') }}" method="post" enctype="multipart/form-data" class="needs-validation" >
      @csrf                   
      <div class="form">
         <div class="form-group row">
            <input  name="id" value="{{$Home->id}}" hidden>
            <input  name="oldImage" value="{{$Home->image}}" hidden>
            <div class="col-4">
               <label for="old">Present image :</label>
               <img class="rounded" src="{{$Home->image}}" width="150" height="80">
            </div>
            <div class="col-8">
               <label for="image">Upload new image :</label>
               <input type="file" class="form-control col imageFile" id="image" name="image">
            </div>
         </div>

         <div class="form-group">
            <label for="title">Title :</label>
            <textarea type="text" class="form-control summernote" id="title" name="title" required>{{$Home->title}}</textarea>
         </div>

         <div class="form-group">
            <label for="buttonName">Button name :</label>
            <input name="buttonName" class="form-control" id="buttonName" type="text" value="{{$Home->buttonName}}" placeholder="Ex: Submit button, Go button..." required>
         </div>
         <div class="form-group">
            <label for="link">Button link :</label>
            <input name="link" class="form-control" id="link" type="text" value="{{$Home->link}}" placeholder="https://www.name.com" required>
         </div>
      </div>
      <div class="modal-footer">
         <div class="btn-group">
            <button class="btn btn-sm btn-primary">Edit now</button>
            <button class="btn btn-sm btn-secondary" type="button" data-dismiss="modal">Close</button>
         </div>
      </div>
   </form>   
@endif

@if(isset($Service))
   <form action="{{ url('editService2') }}" method="post" enctype="multipart/form-data" class="needs-validation" >
      @csrf    
      <div class="form-group row">
         <input  name="id" value="{{$Service->id}}" hidden>
         <input  name="oldImage" value="{{$Service->image}}" hidden>
         <div class="col-4">
            <label for="old">Present image :</label>
            <img class="rounded" src="{{$Service->image}}" width="150" height="80">
         </div>
         <div class="col-8">
            <label for="image">Upload new image :</label>
            <input type="file" class="form-control col imageFile" id="image" name="image">
         </div>
      </div>

      <div class="form-group">
         <label for="title">Service title :</label>
         <input type="text" name="title" id="title" class="form-control" value="{{$Service->title}}" placeholder="Ex: This is title name..." required>
      </div>

      <div class="form-group">
         <label for="details">Service details :</label>
         <textarea type="text" class="form-control summernote" id="details" name="details" required>{{$Service->details}}</textarea>
      </div>

      <div class="modal-footer">
         <div class="btn-group">
            <button class="btn btn-sm btn-primary">Edit now</button>
            <button class="btn btn-sm btn-secondary" type="button" data-dismiss="modal">Close</button>
         </div>
      </div>
   </form> 
@endif

@if(isset($RealEstate))
   <form action="{{ url('editRealEstate2') }}" method="post" enctype="multipart/form-data" class="needs-validation" >
      @csrf    
      <div class="form-group row">
         <input  name="id" value="{{$RealEstate->id}}" hidden>
         <input  name="oldImage" value="{{$RealEstate->image}}" hidden>
         <div class="col-4">
            <label for="old">Present image :</label>
            <img class="rounded" src="{{$RealEstate->image}}" width="150" height="80">
         </div>
         <div class="col-8">
            <label for="image">Upload new image :</label>
            <input type="file" class="form-control col imageFile" id="image" name="image">
         </div>
      </div>

      <div class="form-group">
         <label for="title">Real-estate title :</label>
         <input type="text" name="title" id="title" class="form-control" value="{{$RealEstate->title}}" placeholder="Ex: This is title name..." required>
      </div>

      <div class="form-group">
         <label for="details">Real-estate details :</label>
         <textarea type="text" class="form-control summernote" id="details" name="details" required>{{$RealEstate->details}}</textarea>
      </div>

      <div class="modal-footer">
         <div class="btn-group">
            <button class="btn btn-sm btn-primary">Edit now</button>
            <button class="btn btn-sm btn-secondary" type="button" data-dismiss="modal">Close</button>
         </div>
      </div>
   </form> 
@endif

@if(isset($ProfessionalNetwork))
   <form action="{{ url('editProfessionalNetwork2') }}" method="post" enctype="multipart/form-data" class="needs-validation" >
      @csrf    
      <div class="form-group row">
         <input name="id" value="{{$ProfessionalNetwork->id}}" hidden>
         <input name="oldImage" value="{{$ProfessionalNetwork->image}}" hidden>
         <div class="col-4">
            <label for="old">Present image :</label>
            <img class="rounded" src="{{$ProfessionalNetwork->image}}" width="150" height="80">
         </div>
         <div class="col-8">
            <label for="image">Upload new image :</label>
            <input type="file" class="form-control col imageFile" id="image" name="image">
         </div>
      </div>

      <div class="form-group">
         <label for="title">Professional network title :</label>
         <input type="text" name="title" id="title" class="form-control" value="{{$ProfessionalNetwork->title}}" placeholder="Ex: This is title name..." required>
      </div>

      <div class="form-group">
         <label for="details">Professional network details :</label>
         <textarea type="text" class="form-control summernote" id="details" name="details" required>{{$ProfessionalNetwork->details}}</textarea>
      </div>

      <div class="modal-footer">
         <div class="btn-group">
            <button class="btn btn-sm btn-primary">Edit now</button>
            <button class="btn btn-sm btn-secondary" type="button" data-dismiss="modal">Close</button>
         </div>
      </div>
   </form> 
@endif

@if(isset($ProfessionalNetService))
   <form action="{{ url('editProfessionalNetService2') }}" method="post" enctype="multipart/form-data" class="needs-validation" >
      @csrf    
      <div class="form-group row">
         <input name="id" value="{{$ProfessionalNetService->id}}" hidden>
         <input name="oldImage" value="{{$ProfessionalNetService->image}}" hidden>
         <div class="col-4">
            <label for="old">Present image :</label>
            <img class="rounded" src="{{$ProfessionalNetService->image}}" width="150" height="80">
         </div>
         <div class="col-8">
            <label for="image">Upload new image :</label>
            <input type="file" class="form-control col imageFile" id="image" name="image">
         </div>
      </div>

      <div class="form-group">
         <label for="details">Professional network nervice details :</label>
         <textarea type="text" class="form-control summernote" id="details" name="details" required>{{$ProfessionalNetService->details}}</textarea>
      </div>

      <div class="modal-footer">
         <div class="btn-group">
            <button class="btn btn-sm btn-primary">Edit now</button>
            <button class="btn btn-sm btn-secondary" type="button" data-dismiss="modal">Close</button>
         </div>
      </div>
   </form> 
@endif

<!-- summernote -->
<script src="{{ asset('/') }}summernote/summernote.min.js"></script>
<link rel="stylesheet" href="{{ asset('/')}}css/datepicker.min.css">
<script src="{{ asset('/') }}js/datepicker.min.js"></script>

<script type="text/javascript">
   $(document).ready(function() {
     $('.summernote').summernote();
   });

   $(".datepicker").datepicker({
      format: "yyyy-MM",
      startView: "months", 
      minViewMode: "months"
   });
</script>
