@extends('layout.client')

<style>

    * {
        text-decoration: none;
    }
    .top-fasilitas{
        /* background-image: url('{{ asset('img/kamar_topwrapper.png') }}'); */
        display: flex;
        justify-content: center;
        background-color: #009B97;
        /* height: 400px; */
    }

    .top-wrapper-fasilitas {
        /* height: 500px;
        width: 100%;
        display: flex;
        flex-direction: row;
        margin-top: 100px; */
    }

    .card-fasilitas{
        min-height: 560px;
        background: #FDFDFD;
        filter: drop-shadow(0px 0px 10px rgba(0, 0, 0, 0.25));
        display: flex;
        flex-direction: row;
        border-radius: 5px;
        margin-bottom: 5rem;
    }

    .card-fasilitas > * {
        color: black;
    }

    .side-card{
        margin: 1rem;
    }

    .side-card .judul-kamar {
        font-size: 28px;
        margin-bottom: 10px;
    }

    .side-card .kamar-deskripsi {
        width: 85%;
        font-size: 18px;
    }

    .harga{
        font-size: 20px;
        /* position: absolute; */
    }

    .kamar-deskripsi-jumlah {
        position: absolute;
        font-size: 16px;
        top: 90%;
    }

    .side-book {
        background: #FDFDFD;
        filter: drop-shadow(0px 0px 10px rgba(0, 0, 0, 0.25));
    }

    .side-book-content{
        margin: 15px;
    }

    .judul-book-kamar{
        font-size: 28px;
        margin-bottom: 4vh;
    }

    .button-section{
        margin-top: 20vh;
        width: 100%;
        display: flex;
        justify-content: center;
    }

    .book-button {
        color: white;
        /* padding: 18px 80px; */
        padding: 2vh 0vw;
        background-color: #009B97;
        text-align: center;
        width: 100%;
    }

    .deskripsi-detail-kamar {
        font-size: 2vh;
        margin: 2.4rem;
        width: 800vh;
    }

    .card-title {
        width: 500px;
        height: 15vh;
        background: #FDFDFD;
        filter: drop-shadow(0px 0px 10px rgba(0, 0, 0, 0.25));
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
        border-radius: 20px;
        position: relative;
        bottom: 8vh;

    }

    .title-top-wrapper {
        font-size: 38px;
    }

    .flex-title {
        display: flex;
        flex-direction: column;
        align-items: center;
    }
</style>


@section('content')


<div class="container" >
    <div class="top-fasilitas">
        <div class="top-wrapper-fasilitas">
            <div class="fasilitas-top-wrapper">
                <img src="{{ asset('img/kamar_topwrapper.png') }}" alt="" width="100%">
            </div>
            {{-- {{Auth::user()->nama;}} --}}
        </div>
            {{-- <form action="/logout" method="post">
                @csrf

                <button type="submit">Logout</button>
            </form> --}}
    </div>
    <div class="flex-title">
        <div class="card-title title-top-wrapper">
            Detail Kamar
        </div>
    </div>

</div>

<div class="container container-flex" style="height: 870px;">
    <div class="mid-wrapper extremewidth" style="margin-top: 1rem;">
        <div class="card-fasilitas">
            {{-- <img src="{{ asset('img/kamar/kamar_1.png') }}" alt="" class="gambar-kamar" width="35%"> --}}
            <div class="side-book">
                <img src="{{ asset('img/kamar/kamar_1.png') }}" alt="" width="100%"  class="content-book">
                <div class="side-book-content">
                    <div class="judul-book-kamar">
                        {{ $kamar->nama_kamar }}
                    </div>
                    <div class="harga">
                        Rp. {{ number_format($kamar->harga, 0, '', '.') }},00 / malam
                    </div>
                    <div class="button-section">
                        <a href="/form/book/{{ $kamar->id }}" class="book-button">
                            Book This Room
                        </a>
                    </div>

                </div>
            </div>

            <div class="deskripsi-detail-kamar">
                {!! $kamar->detail_lengkap !!}

                <div class="kamar-deskripsi-jumlah">
                    Jumlah Kamar Yang Tersedia : {{ $kamar->ketersediaan }}
                </div>
            </div>
        </div>

    </div>
</div>


@endsection
