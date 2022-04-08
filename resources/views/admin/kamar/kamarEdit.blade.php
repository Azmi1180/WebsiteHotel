@extends('layout.admin')


<style>

</style>


@section('admin-content')
<link rel="stylesheet" href="{{ asset('/bootstrap/css/bootstrap.min.css') }}">

<div class="row">

    <div class="col-6">
        <div class="container">
            <h2 class="text- mt-5 pt-3"><b>Buat Kamar</b></h2>
            <div class="card card-brown shadow mt-3 mb-5 rounded-20">
                <div class="card-body p-4">
                    <form action="/admin/kamar/update/{{ $kamar->id }}" method="POST">
                        @csrf
                        <div class="row g-3 align-items-center">
                            <div class="col mb-3">
                                <label for="nama_tipe" class="form-label text-brown">Nama Tipe Kamar</label>
                                <input type="text" class="form-control rounded-10 form-brown text-form-brown" name="nama_kamar" id="nama_kamar" value="{{ $kamar->nama_kamar }}">
                            </div>
                            <div class="col mb-3">
                                <label for="jmlkamar" class="form-label text-brown">Jumlah Kamar</label>
                                <input type="number" class="form-control rounded-10 form-brown text-form-brown" id="jmlkamar" name="jumlah_kamar" value="{{ $kamar->jumlah_kamar }}">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="harga" class="form-label text-brown">Harga Per Malam</label>
                            <input type="text" class="form-control rounded-10 form-brown" id="harga" name="harga" value="{{ $kamar->harga }}">
                        </div>
                        <div class="mb-3">
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" name="deskripsi" style="height: 100px" >{{ $kamar->deskripsi }}</textarea>
                                <label for="floatingTextarea2">Deskripsi Kamar</label>
                              </div>
                        </div>
                        <div class="mb-3">
                            <label for="detail" class="mb-1">Detail Deskripsi</label>
                            <div class="form-floating">
                                <input id="detail" value="{!! $kamar->detail_lengkap !!}" placeholder="detail kamar" type="hidden" name="detail">
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
    </div>
    <div class="col-3">
        <div class="container" style="margin-top: 12 0px">
            <div class="col-md-4 mt-3">
                <div class="profile-img">
                @if(Auth::user()->path)
                    {{-- <img src="{{ url($path1) }}" /> --}}
                @else
                    {{-- <img src="{{ url($path2) }}" /> --}}
                @endif
                    <div class="file btn btn-lg btn-primary">
                        Change Photo
                        <input type="file" name="image"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection


