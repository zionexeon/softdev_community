@extends('layouts.template')
@section('content')
<div class="container justify-content-center align-items-center">
    <div id="judul" class="mt-5" data-aos="fade-down" data-aos-duration="1000" data-aos-once="false">
        <h1>Kontak</h1>
    </div>
    <div class="row row-cols-1 row-cols-md-3 mt-5">
        <div class="col-md-4 mb-3 pb-5" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="100"
            data-aos-once="false">
            <a href="mailto:softdevcom22@gmail.com" target="_blank" class="nav-link">
                <div class="card kartu-kontak">
                    <div class="card-body text-center">
                        <i class="fa-solid fa-envelope fa-5x pt-3 pb-3"></i>
                        <h4 class="fw-bold">Email</h4>
                        <h5 class="card-text">softdevcom22@gmail.com</h5>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-4 mb-3 pb-5" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="150"
            data-aos-once="false">
            <a href="https://wa.me/6285875015516?text=Saya%20mau%20pesan" target="_blank" class="nav-link">
                <div class="card kartu-kontak">
                    <div class="card-body text-center">
                        <i class="fa-solid fa-phone fa-5x pt-3 pb-3"></i>
                        <h4 class="fw-bold">Telepon / WA</h4>
                        <h5 class="card-text">+62 858-7501-5516</h5>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-4 mb-3 pb-5" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200"
            data-aos-once="false">
            <a href="https://goo.gl/maps/C1iC1HiQgF6yLKBQ8" target="_blank" class="nav-link">
                <div class="card kartu-kontak">
                    <div class="card-body text-center">
                        <i class="fa-solid fa-map-location-dot fa-5x pt-3 pb-3"></i>
                        <h4 class="fw-bold">Peta</h4>
                        <h5 class="card-text">SoftDev Community</h5>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>
@endsection