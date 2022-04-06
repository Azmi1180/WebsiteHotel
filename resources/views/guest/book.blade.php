@extends('layout.client ')


<style>
    
</style>





@section('content')
<link rel="stylesheet" href="{{ asset('/bootstrap/css/bootstrap.min.css') }}">

<div class="container">
    <h2 class="text-center mt-5 pt-3 text-brown"><b>Form Pemesanan</b></h2>
    <div class="card card-brown shadow mt-3 mb-5 rounded-20">
        <div class="card-body p-4">
            <form>
                <div class="row g-3 align-items-center">
                    <div class="col mb-3">
                        <label for="tglcin" class="form-label text-brown">Tanggal Check In</label>
                        <input type="date" class="form-control rounded-10 form-brown text-form-brown" id="tglcin">
                    </div>
                    <div class="col mb-3">
                        <label for="tglcout" class="form-label text-brown">Tanggal Check Out</label>
                        <input type="date" class="form-control rounded-10 form-brown text-form-brown" id="tglcout">
                    </div>
                    <div class="col mb-3">
                        <label for="jmlkamar" class="form-label text-brown">Jumlah Kamar</label>
                        <input type="number" class="form-control rounded-10 form-brown text-form-brown" id="jmlkamar">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="nama_pemesan" class="form-label text-brown">Nama Pemesan</label>
                    <input type="text" class="form-control rounded-10 form-brown" id="nama_pemesan">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label text-brown">Email</label>
                    <input type="email" class="form-control rounded-10 form-brown" id="email">
                </div>
                <div class="mb-3">
                    <label for="no_telp" class="form-label text-brown">Nomor Telepon</label>
                    <input type="number" class="form-control rounded-10 form-brown" id="no_telp">
                </div>
                <div class="mb-3">
                    <label for="nama_tamu" class="form-label text-brown">Nama Tamu</label>
                    <input type="text" class="form-control rounded-10 form-brown" id="nama_tamu">
                </div>
                <div class="mb-3">
                    <label for="tipe_kamar" class="form-label text-brown">Tipe Kamar</label>
                    <select class="form-select rounded-10 form-brown text-form-brown"
                        aria-label="Default select example">
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <button type="submit" class="btn bg-brown text-white float-end rounded-10 mt-4">Konfirmasi
                    Pemesanan</button>
            </form>
        </div>
    </div>
</div>

@endsection


