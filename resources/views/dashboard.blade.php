@extends('layouts.app')

@section('title','Dashboard - AeroSmash Store')

@section('content')
<div class="row">
    <div class="col-12 mb-3">
        <div class="d-flex justify-content-between align-items-center">
            <h2 class="fw-bold">Selamat datang, {{ $username }}!</h2>
            <div>
                <a href="{{ route('pengelolaan', ['username' => $username]) }}" class="btn btn-outline-primary">
                    Lihat Produk
                </a>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card mb-3 card-blue shadow-sm">
            <div class="card-body">
                <h5>Total Produk</h5>
                <p class="display-6 fw-bold">5</p>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card mb-3 card-blue shadow-sm">
            <div class="card-body">
                <h5>Stok Tersedia</h5>
                <p class="display-6 fw-bold">145</p>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card mb-3 card-blue shadow-sm">
            <div class="card-body">
                <h5>Penjualan</h5>
                <p class="display-6 fw-bold">—</p>
            </div>
        </div>
    </div>
</div>
@endsection
