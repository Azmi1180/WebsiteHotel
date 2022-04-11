@extends('layout.admin')


<style>

</style>


@section('admin-content')
<link rel="stylesheet" href="{{ asset('/bootstrap/css/bootstrap.min.css') }}">

<div class="container">
    <h2 class="text- mt-5 pt-3"><b>Buat Fasilitas</b></h2>
    <div class="card card-brown shadow mt-3 mb-5 rounded-20">
        <div class="card-body p-4">
            <form action="/admin/fasilitas/store" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="col mb-3">
                    <label for="nama_tipe" class="form-label text-brown">Nama Fasilitas</label>
                    <input type="text" class="form-control rounded-10 form-brown text-form-brown" name="nama_fasilitas" id="nama_kamar">
                </div>
                <div class="mb-3">
                    <div class="col-3">
                        <div class="container">
                            <div class="col-md-4 mt-3">
                                <div class="profile-img">
                                    <div class="file btn btn-lg btn-primary">
                                        Change Photo
                                        <input type="file" name="image"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" name="deskripsi" style="height: 100px"></textarea>
                        <label for="floatingTextarea2">Deskripsi Fasilitas</label>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="detail" class="mb-1">Detail Deskripsi</label>
                    <div class="form-floating">
                        <input id="detail" value="" placeholder="detail kamar" type="hidden" name="detail_deskripsi">
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


