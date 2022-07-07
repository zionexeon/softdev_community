@extends('layouts.template')
@section('content')
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
        <div class="carousel-inner">
            <div class="carousel-item drk active">
                <div id="carousel-gambar">
                    <img src="/img/programmer1.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption caption1">
                        <p class="text-uppercase">Selamat datang di focus project</p>
                        <p class="text-capitalize">Teknologi yang lebih baik, masa depan yang lebih baik</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item drk">
                <div id="carousel-gambar">
                    <img src="/img/programmer2.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption caption2">
                        <p class="text-uppercase">Tersedia Jasa Pembuatan Aplikasi</p>
                        <p class="text-capitalize">Aplikasi anda siap mendunia</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item drk">
                <div id="carousel-gambar">
                    <img src="/img/programmer3.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="background-header">
        <div class="container pt-5">
            <div class="row align-items-center">
                <div class="mb-3">
                    <div class="row g-0">
                        <div class="col-md-8">
                            <div class="card-body">
                                <h2 class="card-title fw-bold pb-3 pt-4">Apa itu Focus / FCS Project ??</h2>
                                <p class="card-text">{{ $slug }}</p>
                                <a href="/about" class="btn btn-dark text-decoration-none">Lebih Lanjut..</a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <img src="/img/Community.png" class="img-fluid rounded-start" alt="FCS Project">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
