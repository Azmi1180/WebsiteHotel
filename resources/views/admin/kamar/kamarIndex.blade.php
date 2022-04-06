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
    <a href="/admin/kamar/create">
        <button class="btn btn-primary mb-4">Buat Tipe Kamar</button>
    </a>
  <table class="table">
    <thead class="table-dark">
      <tr>
        <th scope="col">Tipe Kamar</th>
        <th scope="col">Jumlah Kamar</th>
        <th scope="col">Yang Tersedia saat ini</th>
        <th scope="col">Harga</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($kamar as $item)
        <tr class="align-middle">
          <td>{{ $item->nama_kamar }}</td>
          <td>{{ $item->jumlah_kamar }}</td>
          <td>{{ $item->ketersediaan }}</td>
          <td>{{ $item->harga }}</td>
          <td>
            <a href="/admin/kamar/edit/{{ $item->id }}" class="float-left">
                <button type="button" class="btn btn-warning btn-sm" style="color: white">Edit</button>
            </a>
            <a href="/admin/kamar/delete/{{ $item->id }}" class="float-left">
                <button type="button" class="btn btn-danger btn-sm">Delete</button>
            </a>


          </td>
        </tr>

      @endforeach
    </tbody>
  </table>
</div>

@endsection
