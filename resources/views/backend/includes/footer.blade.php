
   <!-- jQuery -->
   <script src="{{ asset('backend/js/jquery.min.js') }}"></script>

   <!-- Bootstrap v4.6.0 -->
   <script src="{{ asset('backend/js/bootstrap.bundle.min.js') }}"></script>

   <!-- overlayScrollbars -->
   <script src="{{ asset('backend/js/jquery.overlayScrollbars.min.js') }}"></script>
   
   <!-- AdminLTE App -->
   <script src="{{ asset('backend/js/adminlte.min.js') }}"></script>
   
   {{-- Pushmenu --}}
   <script src="{{ asset('backend/js/custom.js') }}"></script>
   
   {{-- dataTables --}}
   <script src="{{ asset('common/js/dataTables.min.js') }}"></script>

   <!-- summernote -->
   <script src="{{ asset('common') }}/summernote/summernote.min.js"></script>
  
   <!-- Datepicker -->
   <script src="{{ asset('common') }}/js/datepicker.min.js"></script>
   
   <script type="text/javascript">
   
      // if ($(window).width() > 992) {
        $(window).scroll(function(){
           if ($(this).scrollTop() > 0) { //default: 40
              $('#navbar_top').addClass("fixed-top");
              // add padding top to show content behind navbar
              $('body').css('padding-top', $('.navbar').outerHeight() + 'px');
            }else{
              $('#navbar_top').removeClass("fixed-top");
               // remove padding top from body
              $('body').css('padding-top', '0');
            }   
        });
      // } // end
   
      $(document).ready(function(){
         $('.table').DataTable();
      });

      window.setTimeout(function(){
         $(".alert").fadeTo(500, 0).slideUp(500, function(){
            $(this).remove(); 
         });
      }, 5000);

      $(document).ready(function(){
        $('.summernote').summernote();
      });    
      
      //redirect to specific tab
      $(document).ready(function(){
         $('#tabMenu a[href="#{{ old('tab') }}"]').tab('show')
      });

      $(".datepicker").datepicker({
         format: "MM-yyyy",
         startView: "months", 
         minViewMode: "months"
      });
   </script>

{{-- switchery[Publication-status(on-off)] --}}
<script src="{{ asset('common/switchery/switchery.min.js') }}"></script>

<script>   
   let elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));
   elems.forEach(function(html) {
      let switchery = new Switchery(html,  { size: 'small' });
   });
</script>

{{-- switchery toastr [Alert message(on-off)] --}}
<script src="{{ asset('common/toastr/toastr.min.js') }}"></script>
<script>
   // Status change
   $(document).ready(function(){
      $('.status').change(function () {
         let model = $(this).data('model');
         let field = $(this).data('field');
         let id = $(this).data('id');
         let tab = $(this).data('tab');
         $.ajax({
            type: "GET",
            dataType: "json",
            url: '{{ route('status') }}',
            data: {'model': model, 'field': field, 'id': id, 'tab': tab},
            success: function (data) {
               toastr.options.closeButton = true;
               toastr.options.closeMethod = 'fadeOut';
               toastr.options.closeDuration = 100;
               toastr.success(data.message);
            }
         });
      });
   });
</script>
