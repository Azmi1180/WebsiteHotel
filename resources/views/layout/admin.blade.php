<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sidebar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/trix.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('/css/bootssidebars.css') }}"> --}}
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
    {{-- <script src="https://kit.fontawesome.com/a076d05399.js"></script> --}}
    {{-- <style>
        /* body{
            background-color:
        } */
        html {
            overflow-x: hidden;
        }
        .sidebar {
            width: 200px;
            padding: 30px 0px;
            position: fixed;
        }

        .wrapper{
            display: flex;
            position: relative;
            flex-direction: row;
        }

        .main_content{
            width: 100%;
            /* margin-left: 200px; */
            background-color: aquamarine;
            position: absolute;
            left: 200px;

        }

        .main_content .header{
            padding: 20px;
            background: #fff;
            color: #717171;
            border-bottom: 1px solid #e0e4e8;
        }

        .main_content .info{
            margin: 20px;
            color: #717171;
            line-height: 25px;
        }

        .main_content .info div{
            margin-bottom: 20px;
        }
    </style> --}}

    @yield('style')


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



</head>
<body id="page-top">

    <div class="wrapper">

        <div class="sidebar">
            <h2>1O1 Hotel</h2>
            <ul>
                <li><a href="#">Home</a></li>

                @if (Auth::user()->role == 'resepsionis')
                    <li><a href="/resepsionis/booking/index"></i>Daftar Booking</a></li>
                @endif

                @if (Auth::user()->role == 'admin')
                    <li><a href="#"></i>Table User</a></li>
                    <li><a href="/admin/kamar/index"></i>Table Kamar</a></li>
                    <li><a href="#"></i>Edit Fasilitas</a></li>
                @endif

            </ul>
            <div class="logout">
                <form action="/logout" method="POST">
                    @csrf
                    <button type="submit">
                        <a type="submit">Logout</a>
                    </button>
                </form>
            </div>
            {{-- <ul>
                <li><a href="#"></i>Logout</a></li>
            </ul> --}}

        </div>


        <div class="main_content">
            @yield('admin-content')

        </div>

    </div>



    @yield('script')

    <script src="{{ asset('/bootstrap/js/bootstrap.bundle.js') }}"></script>
</body>
</html>
    <script src="{{ asset('js/trix.js') }}"></script>
    <script>

    (function () {
    'use strict'
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    tooltipTriggerList.forEach(function (tooltipTriggerEl) {
        new bootstrap.Tooltip(tooltipTriggerEl)
    })
    })()
    </script>



