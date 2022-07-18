@extends('layouts.template')
@section('content')
<div class="container">
    <div class="row row-cols-1 g-4 mt-4">
        <div class="card mb-3 border-0">
            <div class="row g-0">
                <div class="col-md-5 justify-content-center mb-4">
                    <img src="/img/{{ $gambar->gambar }}" class="img-fluid rounded-start pt-3"
                        alt="Akrilik Laser Cutting">
                </div>
                <div class="col-md-7 mb-4">
                    <div class="card-body">
                        <h2 class="card-title text-capitalize fw-bold pb-2">{{ $gambar->judul_detail }}</h2>
                        <p class="card-text">{{ $gambar->detail }}</p>
                        <p class="card-text fw-bold fs-5">
                            Rincian : {{ $gambar->rincian }}
                        </p>
                        <h5 class="card-text">Klien : {{ $gambar->klien }}</h5>
                        <h5 class="card-text">Projek : {{ $gambar->apk }}</h5>
                        <a href="/portfolio" class="btn btn-kembali text-decoration-none mt-3">
                            <- Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection