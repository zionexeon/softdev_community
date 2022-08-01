@extends('layouts.template')
@section('content')
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
    <div class="carousel-inner">
        <div class="carousel-item drk active">
            <div id="carousel-gambar">
                <img src="/img/programmer1.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption caption1 fs-4">
                    <p class="text-uppercase">Selamat datang di softdev community</p>
                    <p class="text-capitalize">Teknologi yang lebih baik, masa depan yang lebih baik</p>
                </div>
            </div>
        </div>
        <div class="carousel-item drk">
            <div id="carousel-gambar">
                <img src="/img/programmer2.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption caption2 fs-4">
                    <p class="text-uppercase">Tersedia Jasa Pembuatan Aplikasi</p>
                    <p class="text-capitalize">Aplikasi anda siap mendunia</p>
                </div>
            </div>
        </div>
        <div class="carousel-item drk">
            <div id="carousel-gambar">
                <img src="/img/programmer3.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption caption3 fs-4">
                    <p class="text-uppercase">Pelayanan terbaik harga terjangkau</p>
                    <p class="text-capitalize">Cocok untuk semua kalangan</p>
                </div>
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
        <div class="card border-0 mb-4 mt-4">
            <div class="row g-0" data-aos="fade-right" data-aos-duration="1000" data-aos-once="false">
                <div class="col-md-8">
                    <div class="card-body pb-4">
                        <h1 class="card-title fw-bold pb-3">Apa itu SoftDev Community ??</h1>
                        <p class="card-text">{{ $slug }}</p>
                        <a href="/about" class="btn btn-more text-decoration-none">Lebih Lanjut..</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <img src="/img/SoftDev Logo 2.png" style="max-width: 400px; min-width: 100%;" class="card-img-top"
                        alt="SoftDev Community">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <article class="pb-3 text-center" data-aos="fade-down" data-aos-duration="1000" data-aos-once="false">
        <h1 class="text-capitalize fw-bold">Pesan Aplikasi</h1>
        <p class="fs-6">Pilih beberapa layanan kami berikut ini</p>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col mb-3 pb-5">
                <div class="card kartu-pesanan">
                    <div class="card-body text-center">
                        <i class="fa-solid fa-book fa-5x pb-3 pt-3"></i>
                        <h4 class="fw-bold">Tugas Sekolah</h4>
                        <p class="card-text fs-5">Kami akan mengerjakan aplikasi untuk tugas sekolah kamu, jangan
                            khawatir
                            kami akan memberikan file .zip</p>
                    </div>
                </div>
                <center><a href="https://wa.me/6285875015516?text=Saya%20mau%20pesan%20tugas%20sekolah"
                        class="btn btn-pesanan text-decoration-none mt-3 mb-3">Pesan Sekarang</a></center>
            </div>
            <div class="col mb-3 pb-5">
                <div class="card kartu-pesanan">
                    <div class="card-body text-center">
                        <i class="fa-solid fa-book-open fa-5x pt-3 pb-3"></i>
                        <h4 class="fw-bold">Tugas Kuliah</h4>
                        <p class="card-text fs-5">Kami juga melayani joki tugas aplikasi kuliah loh! tersedia file.zip
                        </p>
                    </div>
                </div>
                <center><a href="https://wa.me/6285875015516?text=Saya%20mau%20pesan%20tugas%20kuliah"
                        class="btn btn-pesanan text-decoration-none mt-3 mb-3">Pesan Sekarang</a></center>
            </div>
            <div class="col mb-3 pb-5">
                <div class="card kartu-pesanan">
                    <div class="card-body text-center">
                        <i class="fa-solid fa-briefcase fa-5x pt-3 pb-3"></i>
                        <h4 class="fw-bold">Website Bisnis</h4>
                        <p class="card-text fs-5">Kami akan membuatkan aplikasi untuk bisnis kamu. Cukup jelaskan
                            mengenai
                            bisnis kamu dan aplikasi impianmu maka VOILLA! kami akan membuatnya untuk kamu.</p>
                    </div>
                </div>
                <center><a href="https://wa.me/6285875015516?text=Saya%20mau%20pesan%20website%20bisnis"
                        class="btn btn-pesanan text-decoration-none mt-3 mb-3">Pesan Sekarang</a></center>
            </div>
        </div>
    </article>
</div>
<div class="container">
    <article class="pb-3 text-center article-pelayanan" data-aos="fade-down" data-aos-duration="1000"
        data-aos-delay="250" data-aos-once="false">
        <h1 class="text-capitalize fw-bold">Pelayanan SoftDev Community</h1>
        <p class="fs-6">Berikut merupakan beberapa layanan kami, untuk kamu yang tersayang.</p>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card kartu-pelayanan mb-3">
                    <div class="card-body text-center">
                        <i class="fa-solid fa-sack-dollar fa-5x p-3"></i>
                        <h4 class="fw-bold">Harga Terjangkau</h4>
                        <p class="card-text fs-5">Kami memberikan pelayanan yang terjamin dan lebih terjangkau dari jasa
                            pembuat aplikasi lainnya.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card kartu-pelayanan mb-3">
                    <div class="card-body text-center">
                        <i class="fa-solid fa-handshake-simple fa-5x p-3"></i>
                        <h4 class="fw-bold">Terpercaya</h4>
                        <p class="card-text fs-5">Kami memastikan bahwa kami dapat dipercaya, dan akan menyelesaikan
                            aplikasi
                            sesuai dengan keinginan kamu.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card kartu-pelayanan mb-3">
                    <div class="card-body text-center">
                        <i class="fa-solid fa-laptop-code fa-5x p-3"></i>
                        <h4 class="fw-bold">Tanggung Jawab</h4>
                        <p class="card-text fs-5">Kami memastikan bahwa tidak ada kelalean dalam menyelesaikan aplikasi
                            sesuai dengan keinginan kamu.</p>
                    </div>
                </div>
            </div>
        </div>
        <center class="mt-3">
            <div data-aos="fade-down" data-aos-duration="1000" data-aos-once="false">
                <a href="https://wa.me/6285875015516?text=Saya%20mau%20tanya%20tanya%20terlebih%20dahulu"
                    class="btn btn-more text-decoration-none pt-3 pb-3">Mau Tanya - Tanya Dulu</a>
            </div>
        </center>
    </article>
</div>
<div class="container">
    <article class="pb-3 mt-5 text-center" data-aos="fade-down" data-aos-duration="1000" data-aos-once="false">
        <h1 class="text-capitalize fw-bold">Percaya kami</h1>
    </article>
    <div class="row justify-content-center row-cols-1 row-cols-md-2 g-4">
        <div class="col">
            <div class="card border-0">
                <img src="/img/tech.gif" class="card-img-top" alt="" style="max-width: 400px; min-width: 100%;"
                    class="mb-3" data-aos="fade-up" data-aos-duration="1000" data-aos-once="false" data-aos-delay="200">
            </div>
        </div>
        <div class="col">
            <article>
                <p class="text-center fs-5 mt-3" data-aos="fade-down" data-aos-duration="1000" data-aos-once="false"
                    data-aos-delay="250">
                    Kami akan menyelesaikan aplikasi kamu sesuai ekspekstasi dan deadline, karena kamu penting.
                    <b>Softdevcommunity</b>
                    merupakan tempat tercocok untuk kamu pilih sebagai jasa pembuatan aplikasi, dengan harga yang lebih
                    miring dan
                    cocok untuk kantong pelajar/mahasiswa serta bisnis yang baru dimulai. Kami berusaha menyediakan yang
                    terbaik untuk kamu, hanya di <a href="https://softdev.akriliklasercutting.com"
                        class="text-decoration-none link-website2">softdevcommunity.com</a>
                </p>
                <center>
                    <div data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300" data-aos-once="false"
                        class="mb-3">
                        <a href="/testimoni" class="btn btn-more text-decoration-none pt-3 pb-3">Lebih Lanjut..</a>
                    </div>
                </center>
            </article>
        </div>
    </div>
</div>
<div class="container">
    <article class="pb-3 mt-5 text-center" data-aos="fade-down" data-aos-duration="1000" data-aos-once="false">
        <h1 class="text-capitalize fw-bold">Mitra Kami</h1>
    </article>
    <div class="row justify-content-center row-cols-1 row-cols-md-2 g-4">
        <center>
            <div class="col">
                <div class="card border-0 mb-3">
                    <img src="/img/Mekar Laser Logo 2.png" class="card-img-top" alt=""
                        style="max-width: 550px; min-width: 100%;" class="mb-5 mt-4" data-aos="fade-up"
                        data-aos-duration="1000" data-aos-once="false" data-aos-delay="200">
                </div>
            </div>
        </center>
    </div>
</div>
@endsection