<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'INVOURTORY') }}</title>

    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}" defer></script>   --}}

    <!-- Fonts -->
    {{-- <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"> --}}
    {{-- <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet"> --}}


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">

    <style>

    </style>
</head>
<body id="page-top" style="display: flex; flex-direction: column; justify-content : space-between; min-height:100%;">
    @include('component.navbar')

    <div class="main">
      @yield('content')
    </div>

    @include('component.footer')

    @yield('script')

    <script>
        // When the user scrolls down 80px from the top of the document, resize the navbar's padding and the logo's font size
        window.onscroll = function() {scrollFunction()};

        function scrollFunction() {
        if (window.scrollY > 80) {
            console.log("haha")
        //   if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
            console.log(document.getElementById("navbar"));
            document.getElementById("navbar").style.padding = "3vh";
            document.getElementById("navbar").style.background = "#00000075";
            document.getElementById("logo-wrapper-img").style = "25px";
          } else {
            document.getElementById("navbar").style.background = "#009B9775";
            document.getElementById("navbar").style.padding = "5vh 4vh";
            document.getElementById("logo").style.fontSize = "35px";
          }
        }

      </script>

</body>
</html>
