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

    .kamar-deskripsi .harga{
        font-size: 24px;
        position: absolute;
        top: 70%;
    }

    .kamar-deskripsi-jumlah {
        position: absolute;
        font-size: 16px;
        top: 83%;
    }


</style>


@section('content')


<div class="container">
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
</div>

<div class="container container-flex">
    <div class="mid-wrapper extremewidth">
        @foreach ($kamar as $list)
        <a href="/kamar/detail/{{ $list->id }}" class="card-fasilitas">
            <img src="{{ asset('img/kamar/kamar_1.png') }}" alt="" class="gambar-kamar" width="35%">
            <div class="side-card">
                <div class="judul-kamar">
                    {{-- {{ $list->nama_kamar }} --}}
                </div>
                <div class="kamar-deskripsi">
                    {{ $list->deskripsi }}
                    <div class="harga">
                        Rp. {{ number_format($list->harga, 0, '', '.') }},00 / malam
                    </div>
                    <div class="kamar-deskripsi-jumlah">
                        Jumlah Kamar Yang Tersedia  : {{ $list->ketersediaan }}
                    </div>
                </div>

            </div>
        </a>
        @endforeach

    </div>
</div>


@endsection
