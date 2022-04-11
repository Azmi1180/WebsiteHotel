

<link rel="stylesheet" href="{{ asset('/bootstrap/css/bootstrap.min.css') }}">
<style>
    * {
        text-decoration: none !important;

    }
    .table-wrapper {
      margin: 5rem;
      width: 1000px;
      display: flex;
      flex-direction: column;
      justify-content: center;
    }
</style>


<div class="container-fluid">
    <div class="row align-items-center vh-100 justify-content-center">
        <div class="table-wrapper">
            <div class="card" style="width: 100%; height: 100%; border: solid 2px rgb(16, 214, 89); margin-bottom:20px">
                <div class="card-body" style="color: rgb(20, 203, 130); font-size : 18px; font-weight:500">
                    Success !!, Anda talah berhasil melakukan pesanan.
                </div>
            </div>
            <div class="card" style="width: 100%; height: 100%; border: solid 1px black;">
                <div class="card-body" >
                <h5 class="card-title"><b>Bukti Resi</b></h5>
                <h6 class="card-subtitle mb-2 text-muted">Nomor Resi : {{ $resi->id  }}</h6>
                <p class="card-text">
                    <div class="d-flex flex-row">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Nama Tamu</li>
                            <li class="list-group-item">No. Telp</li>
                            <li class="list-group-item">Email</li>
                            <li class="list-group-item">NIK</li>
                            <li class="list-group-item">Alamat</li>
                        </ul>
                        <ul class="list-group list-group-flush" style="padding-right: 8rem">
                            <li class="list-group-item">: {{ $resi->nama }}</li>
                            <li class="list-group-item">: {{ $resi->no_telp }}</li>
                            <li class="list-group-item">: {{ $resi->email }}</li>
                            <li class="list-group-item">: {{ $resi->nik }}</li>
                            <li class="list-group-item">: {{ $resi->alamat }}</li>
                        </ul>
                        <ul class="list-group list-group-flush" style="border-left : 2px solid rgba(0, 0, 0, 0.342);">
                            <li class="list-group-item">Tanggal Check IN</li>
                            <li class="list-group-item">Tanggal Check OUT</li>
                            <li class="list-group-item">Lama Menginap</li>
                            <li class="list-group-item">Jumlah Kamar</li>
                            <li class="list-group-item">Jumlah Orang</li>
                            <li class="list-group-item">Tipe Kamar</li>
                        </ul>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">: {{ $resi->tgl_check_in }}</li>
                            <li class="list-group-item">: {{ $resi->tgl_check_out }}</li>
                            <li class="list-group-item">: {{ $days }}</li>
                            <li class="list-group-item">: {{ $resi->jumlah_kamar }}</li>
                            <li class="list-group-item">: {{ $resi->jumlah_orang }}</li>
                            <li class="list-group-item">: {{ $resi->kamars->nama_kamar }}</li>
                        </ul>
                    </div>
                    <li class="list-group-item">Total Harga : Rp. {{ number_format($resi->total_harga, 0, '', '.') }},00</li>
                </p>
                <a href="#" onclick="window.print()" class="card-link btn btn-success">Cetak Resi</a>
                <a href="/" class="card-link btn btn-primary">Kembali ke halaman</a>
                </div>
            </div>
        </div>

    </div>
</div>

