@extends('layouts.app')

@section('title','Pengelolaan - AeroSmash Sport')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h3 class="fw-bold">Pengelolaan Produk</h3>
    <div>
        <a href="{{ route('dashboard', ['username' => $username]) }}" class="btn btn-sm btn-secondary">Kembali</a>
    </div>
</div>

<table class="table table-striped table-bordered">
    <thead class="table-primary">
        <tr>
            <th>#</th>
            <th>Nama Produk</th>
            <th>Harga (Rp)</th>
            <th>Stok</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($products as $p)
        <tr>
            <td>{{ $p['id'] }}</td>
            <td>{{ $p['nama'] }}</td>
            <td>{{ number_format($p['harga'],0,',','.') }}</td>
            <td>{{ $p['stok'] }}</td>
            <td>
                <button class="btn btn-sm btn-primary" disabled>Ubah</button>
                <button class="btn btn-sm btn-danger" disabled>Hapus</button>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<div class="row mt-4">
    @foreach($products as $p)
    <div class="col-md-4 mb-3">
        <div class="card shadow-sm card-blue">
            <div class="card-body">
                <h5 class="card-title">{{ $p['nama'] }}</h5>
                <p class="card-text">
                    Harga: Rp {{ number_format($p['harga'],0,',','.') }}<br>
                    Stok: {{ $p['stok'] }}
                </p>
                <a href="#" class="btn btn-primary btn-sm" disabled>Detail</a>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection
