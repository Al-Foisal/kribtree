<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('frontend.includes.head')
    </head>
    <body>     
        @include('frontend.includes.header')     

        @yield('content')
        
        @include('frontend.includes.modal')
        @include('frontend.includes.footer')
   </body>
</html>
