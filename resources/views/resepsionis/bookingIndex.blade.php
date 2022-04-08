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
    <label for="">Filter by check in</label>
    <div class="d-flex flex-row justify-content-between">
        <form action="/resepsionis/booking/index" method="GET">
            <div class="input-group mb-3" >

                <input type="date" class="form-control" name="start_date">
                <input type="date" class="form-control" name="end_date">
                <button class="btn btn-primary" type="submit">GET</button>
            </div>
        </form>
        <form action="/resepsionis/booking/index" method="GET">
            <div class="input-group mb-3">
                <input placeholder="Search" type="text" class="form-control" name="search">
                <button class="btn btn-primary" type="submit">GET</button>
            </div>
        </form>
    </div>
  <table class="table">
    <thead class="table-dark">
      <tr>
        <th scope="col">Nama</th>
        <th scope="col">No. Telp</th>
        <th scope="col">Check In</th>
        <th scope="col">Check Out</th>
        <th scope="col">Tipe Kamar</th>
        <th scope="col">Jumlah Kamar</th>
        <th scope="col">Total Harga</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($book as $item)
        <tr class="align-middle">
          <td>{{ $item->nama }}</td>
          <td>{{ $item->no_telp }}</td>
          <td>{{ $item->tgl_check_in }}</td>
          <td>{{ $item->tgl_check_out }}</td>
          <td>{{ $item->kamars->nama_kamar }}</td>
          <td>{{ $item->jumlah_kamar }}</td>
          <td>Rp. {{ number_format($item->total_harga, 0, '', '.') }}</td>
          <td>
            <a href="/resepsionis/book/view/{{ $item->id }}" class="float-left">
                <button type="button" class="btn btn-primary btn-sm" style="color: white">Detail</button>
            </a>
            <a href="/resepsionis/book/approve/{{ $item->id }}" class="float-left">
                <button type="button" class="btn btn-success btn-sm" style="color: white">Terima</button>
            </a>
            <a href="/resepsionis/book/tolak/{{ $item->id }}" class="float-left">
                <button type="button" class="btn btn-danger btn-sm">Tolak</button>
            </a>


          </td>
        </tr>

      @endforeach
    </tbody>
  </table>
</div>

@endsection
