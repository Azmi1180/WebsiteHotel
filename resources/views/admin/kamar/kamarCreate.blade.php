@extends('layout.admin')


<style>

</style>


@section('admin-content')
<link rel="stylesheet" href="{{ asset('/bootstrap/css/bootstrap.min.css') }}">

<div class="container">
    <h2 class="text- mt-5 pt-3"><b>Buat Kamar</b></h2>
    <div class="card card-brown shadow mt-3 mb-5 rounded-20">
        <div class="card-body p-4">
            <form action="/admin/kamar/store" method="POST">
                @csrf
                <div class="row g-3 align-items-center">
                    <div class="col mb-3">
                        <label for="nama_tipe" class="form-label text-brown">Nama Tipe Kamar</label>
                        <input type="text" class="form-control rounded-10 form-brown text-form-brown" name="nama_kamar" id="nama_kamar">
                    </div>
                    <div class="col mb-3">
                        <label for="jmlkamar" class="form-label text-brown">Jumlah Kamar</label>
                        <input type="number" class="form-control rounded-10 form-brown text-form-brown" id="jmlkamar" name="jumlah_kamar">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="harga" class="form-label text-brown">Harga Per Malam</label>
                    <input type="text" class="form-control rounded-10 form-brown" id="harga" name="harga">
                </div>
                <div class="mb-3">
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" name="deskripsi" style="height: 100px"></textarea>
                        <label for="floatingTextarea2">Deskripsi Kamar</label>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="detail" class="mb-1">Detail Deskripsi</label>
                    <div class="form-floating">
                        <input id="detail" value="" placeholder="detail kamar" type="hidden" name="content">
                        <trix-editor input="detail"></trix-editor>
                    </div>
                </div>


                <div class="mb-3">
                    <button type="submit" class="btn btn-primary rounded-10">Buat !!</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection


