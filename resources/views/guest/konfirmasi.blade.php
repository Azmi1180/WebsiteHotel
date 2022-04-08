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
        /* filter: drop-shadow(0px 0px 10px rgba(0, 0, 0, 0.25));    */
        border-right: dashed 1px rgba(0, 0, 0, 0.255);
    }

    .side-book-content{
        margin: 15px;
    }

    .judul-book-kamar{
        font-size: 28px;
        margin-bottom: 4vh;
    }

    .button-section{
        /* position: fixed; */
        margin-top: 2vh;
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
        width: 100%;
    }

    .card-title {
        width: 500px;
        height: 15vh;
        background: #FDFDFD;
        /* filter: drop-shadow(0px 0px 10px rgba(0, 0, 0, 0.25)); */
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

    .side-book-content form label{
        margin-right: 10px;
    }

    .form-personal{
        display: flex;
        flex-direction: column;
    }

    .form-personal .title {
        font-size: 34px;
        font-weight: 500;
        margin-bottom: 20px;
    }

    .form-personal .form-content {

    }

    .flex-d-col {
        display: flex;
        flex-direction: column;
    }

    .flex-d-row {
        display: flex;
        flex-direction: row;
    }

    .max-width{
        width: 100%;
    }

    input {
        margin-top: 1rem;
        max-width: 1080px;
        border: solid 1px black;
        border-radius: 5px;
        padding: 4px 6px;
    }

    .catatan-textarea {
        width: 600px;
        height: 200px;
        resize: none;
        padding: 10px;

        font-size: 14px;
    }

    select {
        margin-top: 1rem;
        height: 40px;
    }

</style>


@section('content')


<div class="container" style="min-height: 200px">
    <div class="top-fasilitas">
        <div class="top-wrapper-fasilitas">
            <div class="fasilitas-top-wrapper" style="height: 14vh">
                {{-- <img src="{{ asset('img/kamar_topwrapper.png') }}" alt="" width="100%"> --}}
            </div>
            {{-- {{Auth::user()->nama;}} --}}
        </div>
            {{-- <form action="/logout" method="post">
                @csrf

                <button type="submit">Logout</button>
            </form> --}}
    </div>
</div>

<form action="/send/data/book" method="POST">
@csrf
<div class="container container-flex" style="height: 870px;">
    <div class="mid-wrapper extremewidth" style="margin-top: 1rem;">
        <div class="card-fasilitas">
            {{-- <img src="{{ asset('img/kamar/kamar_1.png') }}" alt="" class="gambar-kamar" width="35%"> --}}
            <div class="side-book">
                <img src="{{ asset('img/kamar/kamar_1.png') }}" alt="" width="100%"  class="content-book">
                <div class="side-book-content">
                    <div class="form-content">
                        <div class="flex-d-row max-width" style="">
                            <div class="flex-d-col">
                                <label for="nama">Check In</label>
                                <input type="date" name="checkin" id="nama" style="width:200px">
                            </div>
                            <div class="flex-d-col" style="margin-left: 2rem">
                                <label for="nik">Check Out</label>
                                <input type="date" name="checkout" id="nik" style="width:200px">
                            </div>
                        </div>
                        <br>
                        <div class="flex-d-row max-width" style="">
                            <div class="flex-d-col">
                                <label for="jumlah-kamar">Jumlah Kamar</label>
                                <input type="number" name="jumlah_kamar" id="jumlah_kamar">
                            </div>
                            <div class="flex-d-col" style="margin-left: 2rem">
                                <label for="jumlah-orang">Jumlah Orang</label>
                                <input type="number" name="jumlah_orang" id="jumlah-orang">
                            </div>
                        </div>
                        <br>
                        <div class="flex-d-col">
                            <label for="jumlah-orang">Tipe Kamar</label>
                            <select name="id_kamar" id="jumlah-orang">

                                <option value="null" disabled selected>Pilih Kamar</option>
                                @foreach ($kamar as $list)
                                    <option value="{{ $list->id }}" {{ $idkamar == $list->id ? "selected" : "" }}>
                                        <h4>{{ $list->nama_kamar }} ||</h4>
                                        <h5>Harga Rp. {{ number_format($list->harga, 0, '', '.') }},00 / malam</h5>
                                        <h5>|| Tersedia {{ $list->ketersediaan }} kamar</h5>
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>



                </div>
            </div>

            <div class="deskripsi-detail-kamar">
                {{-- {!! $kamar->detail_lengkap !!} --}}
                <div class="form-personal">
                    <div class="title">
                        Personal Data
                    </div>

                    <div class="form-content">
                        <div class="flex-d-row max-width" style="">
                            <div class="flex-d-col">
                                <label for="nama">Nama Lengkap Tamu</label>
                                <input type="text" name="nama" id="nama" style="width:300px">
                            </div>
                            <div class="flex-d-col" style="margin-left: 2rem">
                                <label for="nik">NIK</label>
                                <input type="number" name="nik" id="nik" style="width:270px">
                            </div>
                        </div>

                        <br>

                        <div class="flex-d-row max-width" style="">
                            <div class="flex-d-col">
                                <label for="no-telp">Nomor Telepon</label>
                                <input type="number" name="no_telp" id="no-telp" style="width:200px">
                            </div>
                            <div class="flex-d-col" style="margin-left: 2rem">
                                <label for="email">Email</label>
                                <input type="email" name="email" id="email" style="width:370px">
                            </div>
                        </div>
                        <br>
                        <div class="flex-d-col">
                            <label for="alamat">Alamat Rumah</label>
                            <input type="text" name="alamat" id="alamat" style="width:600px">
                        </div>
                        <br>
                        <div class="flex-d-col">
                            <label for="alamat">Catatan / Keterangan Tambahan</label>
                            <textarea class="catatan-textarea" name="catatan" id="catatan" style=""></textarea>
                        </div>
                        <br>
                        <br>
                    </div>
                </div>
                <div class="button-section">

                    <a class="book-button" style="cursor: pointer">
                        <button type="submit" style="background: none; border:none; font-size:18px; color:white;">
                            Reservasi Kamar Ini
                        </button>
                    </a>
                </div>
            </div>
        </div>

    </div>
</div>
</form>


@endsection
