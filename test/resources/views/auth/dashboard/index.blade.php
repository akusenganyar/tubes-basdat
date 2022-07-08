@extends('dashboard')

@section('content')
<div class="col-md-9 col-lg-10 main bg-light">
    <h1 class="display-2 hidden-xs-down">
        Overview
    </h1>
    <hr>
    <div class="row mb-3">
        <div class="col-xl-3 col-lg-6">
            <div class="card card-inverse card-primary">
                <div class="card-block bg-primary p-2">
                    <h6 class="text-uppercase">Akun</h6>
                    <h1 class="display-1">{{ $user }}</h1>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6">
            <div class="card card-inverse card-secondary">
                <div class="card-block bg-secondary p-2">
                    <h6 class="text-uppercase">Data Penumpang</h6>
                    <h1 class="display-1">{{ $data_penumpang }}</h1>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6">
            <div class="card card-inverse card-success">
                <div class="card-block bg-success p-2">
                    <h6 class="text-uppercase">Pemesanan</h6>
                    <h1 class="display-1">{{ $pemesanan }}</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-xl-3 col-lg-6">
            <div class="card card-inverse card-danger">
                <div class="card-block bg-danger p-2">
                    <h6 class="text-uppercase">Penerbangan</h6>
                    <h1 class="display-1">{{ $penerbangan }}</h1>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6">
            <div class="card card-inverse card-warning">
                <div class="card-block bg-warning p-2">
                    <h6 class="text-uppercase">Perhotelan</h6>
                    <h1 class="display-1">{{ $perhotelan }}</h1>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6">
            <div class="card card-inverse card-info">
                <div class="card-block bg-info p-2">
                    <h6 class="text-uppercase">Tiket</h6>
                    <h1 class="display-1">{{ $tiket }}</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-xl-3 col-lg-6">
            <div class="card card-inverse card-dark">
                <div class="card-block bg-dark p-2">
                    <h6 class="text-uppercase text-light">Pembayaran</h6>
                    <h1 class="display-1 text-light">{{ $pembayaran }}</h1>
                </div>
            </div>
        </div>
    </div>
    <!--/row-->
</div>
@endsection
