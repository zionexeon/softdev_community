@extends('layouts.template')
@section('content')
<div class="container">
    <div data-aos="fade-down" data-aos-duration="1000" data-aos-once="true">
        <div class="row row-cols-1 row-cols-md-1 g-4 mt-4 mb-4">
            <div class="col">
                <div class="card mb-3 border-0">
                    <div class="row g-0">
                        <div class="col-md-5">
                            <img src="{{ $gambar->gambar }}" class="img-fluid rounded-start pt-3"
                                alt="{{ $gambar->judul }}">
                        </div>
                        <div class="col-md-7">
                            <div class="card-body">
                                <h2 class="card-title text-capitalize fw-bold pb-2">{{ $gambar->judul_detail }}</h2>
                                <p class="card-text">{{ $gambar->detail }}</p>
                                <p class="card-text fw-bold fs-5">
                                    Rincian : {{ $gambar->rincian }}
                                </p>
                                <h5 class="card-text">Klien : {{ $gambar->klien }}</h5>
                                <h5 class="card-text">Projek : {{ $gambar->apk }}</h5>
                                <span class="fs-5 card-text">Link : <a href="{{ $gambar->link }}"
                                        class="nav-link link-detail fw-bold" target="_blank">{{ $gambar->link
                                        }}</a></span>
                                <a href="/portfolio" class="btn btn-kembali text-decoration-none mt-3">
                                    <- Kembali</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
