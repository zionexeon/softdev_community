@extends('layouts.template')
@section('content')
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
    <div class="carousel-inner">
        <div class="carousel-item drk active">
            <div id="carousel-gambar">
                <img src="/img/programmer1.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption caption1">
                    <p class="text-uppercase">Selamat datang di softdev community</p>
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
<div class="container">
    <div class="row">
        <div class="card mb-3 pt-5 border-0">
            <div class="row g-0">
                <div class="col-md-8">
                    <div class="card-body" data-aos="fade-right" data-aos-duration="1000" data-aos-once="false">
                        <h1 class="card-title fw-bold pb-3">Apa itu SoftDev Community ??</h1>
                        <p class="card-text">{{ $slug }}</p>
                        <a href="/about" class="btn btn-more text-decoration-none">Lebih Lanjut..</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <img src="/img/SoftDev Logo 2.png" class="img-fluid rounded-start" alt="SoftDev Community"
                        data-aos="fade-left" data-aos-duration="1000" data-aos-delay="100" data-aos-once="false">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container mt-3">
    <article class="text-center justify-content-center align-items-center" data-aos="fade-down" data-aos-duration="1000"
        data-aos-once="false">
        <h1 class="text-capitalize fw-bold">Pelayanan SoftDev Community</h1>
        <p class="fs-6">Berikut merupakan beberapa layanan kami, untuk kamu yang tersayang.</p>
    </article>
    <div class="row pt-3 pb-3">
        <div class="col-md-4 mb-3">
            <div class="card kartu-pelayanan" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="100"
                data-aos-once="false">
                <div class="card-body text-center">
                    <i class="fa-solid fa-sack-dollar fa-5x p-3"></i>
                    <h4 class="fw-bold">Harga Teman</h4>
                    <p class="card-text fs-5">Kami memberikan pelayanan yang terjamin dan lebih terjagkau dari jasa
                        pembuat
                        website lainnya.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card kartu-pelayanan" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="150"
                data-aos-once="false">
                <div class="card-body text-center">
                    <i class="fa-solid fa-handshake-simple fa-5x p-3"></i>
                    <h4 class="fw-bold">Terpercaya</h4>
                    <p class="card-text fs-5">Kami memastikan bahwa kami dapat dpercaya, dan akan menyelesaikan website
                        sesuai dengan keinginan kamu.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card kartu-pelayanan" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200"
                data-aos-once="false">
                <div class="card-body text-center">
                    <i class="fa-solid fa-laptop-code fa-5x p-3"></i>
                    <h4 class="fw-bold">Tanggung Jawab</h4>
                    <p class="card-text fs-5">Kami memastikan bahwa tidak ada kelalean dalam menyelesaikan aplikasi
                        sesuai dengan keinginan kamu.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection