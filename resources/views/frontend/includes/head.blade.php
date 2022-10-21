   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   {{-- <meta http-equiv="refresh" content="3" /> --}}

   <!-- CSRF Token -->
   <meta name="csrf-token" content="{{ csrf_token() }}">
   <title>{{ config('app.name', 'KRIBTREE') }}</title>
   <link rel="icon" href="{{ asset('#') }}" type="image/icon type">

   <!-- Fonts -->
   <link rel="dns-prefetch" href="//fonts.gstatic.com">
   <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
   
   <!-- Styles -->
      {{-- botman --}}
   <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/chat.min.css') }}">
   <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/bootstrap.min.css') }}">
   
   <link rel="stylesheet" href="{{ asset('frontend/css/dataTables.min.css') }}">
   <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/style.css') }}">

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"/>

   {{-- <link rel="preconnect" href="https://fonts.googleapis.com"> --}}
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Cinzel&display=swap" rel="stylesheet">
   <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
   
   