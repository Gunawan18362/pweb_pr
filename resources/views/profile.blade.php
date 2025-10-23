@extends('layouts.app')

@section('title','Profile - AeroSmash Store')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card shadow-sm card-blue">
            <div class="card-body">
                <h4 class="fw-bold">Profile: {{ $profile['nama'] }}</h4>
                <p><strong>Email:</strong> {{ $profile['email'] }}</p>
                <a href="{{ route('dashboard', ['username' => $profile['nama']]) }}" class="btn btn-primary">
                    Kembali ke Dashboard
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
