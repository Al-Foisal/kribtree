
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="csrf-token" content="{{ csrf_token() }}">
   {{-- <meta http-equiv="refresh" content="2" /> --}}

   <title>@yield('title')</title>

   <meta name="viewport" content="width=device-width, initial-scale=1">
   {{--  AdminLTE v3.1.0
         Bootstrap v4.6.0  --}}
   <link rel="stylesheet" href="{{ asset('backend/css/adminlte.min.css') }}">
   <link rel="stylesheet" href="{{ asset('backend/css/fontawesome.css') }}">
   <link rel="stylesheet" href="{{ asset('backend/css/sidebar.css') }}" >
   <link rel="stylesheet" href="{{ asset('backend/css/OverlayScrollbars.min.css') }}">
   <link rel="stylesheet" href="{{ asset('backend/css/responsive.css') }}">

   <!-- summernote -->
   <link href="{{ asset('common') }}/summernote/summernote.css" rel="stylesheet">
   
   <!-- Datepicker -->
   <link rel="stylesheet" href="{{ asset('common')}}/css/datepicker.min.css">

   {{-- dataTables --}}
   <link rel="stylesheet" href="{{ asset('common/css/dataTables.min.css') }}">
   
   <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Rubik:wght@300&display=swap">
   
   {{-- switchery --}}
   <link rel="stylesheet" href="{{ asset('common/switchery/switchery.min.css') }}">
   <link rel="stylesheet" href="{{ asset('common/toastr/toastr.min.css') }}">


   {{-- Custom css --}}
   <link rel="stylesheet" href="{{ asset('backend/css/style.css') }}">