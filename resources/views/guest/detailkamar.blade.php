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
                        Chill Deluxe
                    </div>
                    <div class="harga">
                        Rp. 580.000,00/malam
                    </div>
                    <div class="button-section">
                        <a href="book/form/" class="book-button">
                            Book This Room
                        </a>
                    </div>
                    
                </div>
            </div>

            <div class="deskripsi-detail-kamar">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deserunt, cum. Nihil, debitis eum, voluptatem officia cumque reprehenderit aut quos dolore soluta, iure quisquam laudantium consequatur laborum maxime omnis vero? In ut eaque nemo perspiciatis excepturi a quasi error sit facilis. Minus, natus dignissimos ipsa voluptatibus fugit in ullam architecto est, totam recusandae quibusdam at doloribus reiciendis. Temporibus cupiditate quibusdam dolorem libero sapiente consectetur perspiciatis molestiae quod, laudantium ratione ad. Alias repellat autem rem, animi tenetur omnis, soluta laudantium est iure adipisci nemo aperiam itaque ratione corporis totam, quas nostrum quidem maiores assumenda officia delectus similique! Reiciendis, dicta! Aut, ullam qui.

                <div class="kamar-deskripsi-jumlah">
                    Jumlah Kamar Yang Tersedia : 20
                </div>
            </div>
        </div>

    </div>
</div>


@endsection