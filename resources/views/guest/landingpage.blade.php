@extends('layout.client')

@section('style')
<style>





</style>

@section('content')
{{-- <section>
</section> --}}
{{--
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        * {
            margin: 0;
        }
        .container{
            margin
        }
    </style>
</head>
<body> --}}
    {{-- @include('component.navbar') --}}
    <div class="container">
        <div class="top">
            <div class="top-wrapper extremewidth">
                <div class="text-wrapper">
                    <h2 class="top-header-text">Our Room is Your Playground</h2>

                    <div class="descriptive-text">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit illum optio aspernatur voluptatem?</p>
                    </div>
                </div>

                <div class="image-wrapper">
                    <img class="top-image-1" src="{{ asset("img/landingtop3.png") }}" alt="">
                    <img class="top-image-2" src="{{ asset("img/landingtop1.png") }}" alt="">
                    <img class="top-image-3" src="{{ asset("img/landingtop2.png") }}" alt="">
                </div>
                {{-- {{Auth::user()->nama;}} --}}
            </div>
                {{-- <form action="/logout" method="post">
                    @csrf

                    <button type="submit">Logout</button>
                </form> --}}
        </div>
    </div>
    <div class="container container-flex">
        <div class="mid-wrapper extremewidth">
            <div class="section-about" id="tentang">
                <div class="mid-text-wrapper">
                    <div class="mid-header-text">
                        Tentang Kami
                    </div>
                    <div class="mid-descriptive-text" style="color: black">
                        perator grafis dan tipografi mengetahui hal ini dengan baik,
                        pada kenyataannya semua profesi yang berhubungan dengan alam semesta komunikasi memiliki hubungan yang stabil dengan kata-kata ini,
                        tetapi apa itu? Lorem ipsum adalah teks dummy tanpa arti.
                        Ini adalah urutan kata Latin yang, sebagaimana posisinya,
                        tidak membentuk kalimat dengan pengertian yang utuh, tetapi memberikan kehidupan pada teks uji
                        yang berguna untuk mengisi ruang-ruang yang selanjutnya akan ditempati dari teks ad hoc yang disusun oleh para profesional komunikasi.
                    </div>
                </div>
                <div class="mid-img-wrapper">
                    <img class="mid-about-img1" src="{{ asset('img/mid-tentang1.png') }}" alt="">
                    <img class="mid-about-img2" src="{{ asset('img/mid-tentang2.png') }}" alt="">
                </div>
            </div>
            <div class="section-fasilitas">
                <div class="fasilitas-text-wrapper">
                    <div class="mid-header-text">
                        Fasilitas
                    </div>
                    <div class="mid-descriptive-text" style="color: black">
                        Ini adalah urutan kata Latin yang, sebagaimana posisinya,
                        tidak membentuk kalimat dengan pengertian yang utuh, tetapi memberikan kehidupan pada teks uji
                        yang berguna untuk mengisi ruang-ruang yang selanjutnya akan ditempati dari teks ad hoc yang disusun oleh para profesional komunikasi.
                    </div>
                </div>
                <div class="fasilitas-img-wrapper">
                    <div class="img-fasilitas fasilitas-1">
                        <a href="/kamar">
                            <img src="{{ asset('img/fasilitas1.png') }}" alt="">
                        </a>
                    </div>
                    <div class="img-fasilitas fasilitas-2">
                        <a href="/kamar">
                            <img src="{{ asset('img/fasilitas2.png') }}" alt="">
                        </a>
                    </div>
                    <div class="img-fasilitas fasilitas-3">
                        <a href="/kamar">
                            <img src="{{ asset('img/fasilitas3.png') }}" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

        {{-- <div class="container container-flex">
            <div class="form-checkin">
                <div class="card-checkin">
                    <div class="card-head">
                        Pesan Sekarang
                    </div>
                    <div class="card-main">
                        <div class="input-checkin">
                            <input type="datetime" name="checkin" id="">

                        </div>
                        <div class="input-checkout">
                            Check Out
                        </div>
                        <div class="button-continue">
                            Continue
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}





@endsection
