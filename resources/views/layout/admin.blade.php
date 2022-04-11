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
    @yield('style')


</head>
<body id="page-top">

    <div class="wrapper">

        <div class="sidebar">
            <h2>1O1 Hotel</h2>
            <ul>
                <li><a href="/admin/dashboard">Home</a></li>

                @if (Auth::user()->role == 'resepsionis')
                    <li><a href="/resepsionis/booking/index"></i>Daftar Booking</a></li>
                @endif

                @if (Auth::user()->role == 'admin')
                    {{-- <li><a href="#"></i>Table User</a></li> --}}
                    <li><a href="/resepsionis/booking/index"></i>Daftar Booking</a></li>
                    <li><a href="/admin/kamar/index"></i>Table Kamar</a></li>
                    <li><a href="/admin/fasilitas/index"></i>Table Fasilitas</a></li>
                    <li><a href="/admin/kamarfasilitas/index"></i>Fasilitas Kamar</a></li>
                @endif

            </ul>
            <div class="logout">
                <form action="/logout" method="POST">
                    @csrf
                    <button type="submit">
                        Logout
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



