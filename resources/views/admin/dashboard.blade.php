@extends('layout.admin')

<style>
    .top-section{
        margin: 1rem;
        display: flex;
        flex-direction: row;
        width: 100%;
    }
    .top-section .card {
        margin: 3rem 1.5rem
    }
    .card{
        /* border: solid 1px black; */
        margin: 0;
        min-height: 150px;
        max-height: 300px;
        width: auto;
        max-width: 350px;
        min-width: 200px;
        background: #FFFFFF;
        box-shadow: 0px 0px 10px 4px rgba(0, 0, 0, 0.25);
        border-radius: 25px;
        padding: 20px
    }

    .card-header-dashboard h3{
        font-family: 'Segoe UI';
        font-weight: 700;
        font-size: 25px;
        text-align: center;
    }

    .card-content {
        margin: 20px auto 0px;
    }

    .card-content .display-data-count{
        font-family: 'Segoe UI';
        font-size: 25px;
        margin: 0;
        padding: 0;
        text-align: center;
    }
</style>
@section('admin-content')
<div class="top-section">
    <div class="card card-dashboard">
        <div class="card-head card-header-dashboard">
            <h3>Kamar Terpakai</h3>
        </div>
        <div class="card-content">
            <h5 class="display-data-count">
                12
            </h5>
        </div>
    </div>

    <div class="card card-dashboard">
        <div class="card-head card-header-dashboard">
            <h3>Kamar Tersedia</h3>
        </div>
        <div class="card-content">
            <h5 class="display-data-count">
                13
            </h5>
        </div>
    </div>

    <div class="card card-dashboard">
        <div class="card-head card-header-dashboard">
            <h3>Total Bayar</h3>
        </div>
        <div class="card-content">
            <h5 class="display-data-count">
                14
            </h5>
        </div>
    </div>

    <div class="card card-dashboard">
        <div class="card-head card-header-dashboard">
            <h3>Total </h3>
        </div>
        <div class="card-content">
            <h5 class="display-data-count">
                12
            </h5>
        </div>
    </div>

    <div class="card card-dashboard">
        <div class="card-head card-header-dashboard">
            <h3>Total Kamar</h3>
        </div>
        <div class="card-content">
            <h5 class="display-data-count">
                12
            </h5>
        </div>
    </div>


</div>
    
@endsection