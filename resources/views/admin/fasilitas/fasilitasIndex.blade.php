@extends('layout.admin')

<link rel="stylesheet" href="{{ asset('/bootstrap/css/bootstrap.min.css') }}">
<style>
    * {
        text-decoration: none !important;

    }
    .table-wrapper {
      margin: 5rem;
      width: 1000px;
      /* min-height: 720px; */
      display: flex;
      flex-direction: column;
      justify-content: center;
    }
</style>


@section('admin-content')





<div class="table-wrapper">
    <a href="/admin/fasilitas/create">
        <button class="btn btn-primary mb-4">Buat Fasilitas</button>
    </a>
  <table class="table">
    <thead class="table-dark">
      <tr>
        <th scope="col">Nama Fasilitas</th>
        <th scope="col">Deskripsi</th>
        <th scope="col">Detail Deskripsi</th>
        <th scope="col">Gambar</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($fasilitas as $item)
        <tr class="align-middle">
          <td>{{ $item->nama_fasilitas }}</td>
          <td>{{ $item->deskripsi }}</td>
          <td>{{ $item->detail_deskripsi }}</td>
          @if ($item->file_path != null)
          <td><img width="150px" src="{{ url('public/Image/'.$item->file_path) }}"></td>
          @else
          <td>tidak ada gambar</td>
          @endif
          <td>
            <a href="/admin/fasilitas/edit/{{ $item->id }}" class="float-left">
                <button type="button" class="btn btn-warning btn-sm" style="color: white">Edit</button>
            </a>
            <a href="/admin/fasilitas/destroy/{{ $item->id }}" class="float-left">
                <button type="button" class="btn btn-danger btn-sm">Delete</button>
            </a>


          </td>
        </tr>

      @endforeach
    </tbody>
  </table>
</div>

@endsection
