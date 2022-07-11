@extends('layouts.template')
@section('content')
<div id="judul" class="mt-5 mb-4" data-aos="fade-down" data-aos-duration="1000">
    <h1>Tentang SoftDev Community</h1>
</div>
<div class="container">
    <article class="pt-2">
        <div data-aos="fade-right" data-aos-duration="1000" data-aos-delay="100">
            <p><b>Soft Dev Community</b> adalah sebuah komunitas yang berfokus dalam bidang IT seperti dalam pembuatan
                aplikasi web,
                dekstop, prototype IOT, dan lain sebagainnya. Komunitas ini terdiri dari beberapa orang
                didalamnya
                yang sebagian besar lulusan dari SMK NEGERI 1 PURBALINGGA. <b>SoftDev Community</b> ini dibentuk untuk
                menghasilkan
                sebuah
                karya
                yang bisa menghasilkan
                sesuatu yang berguna bagi masyarakat. Kami disini hadir untuk memberikan inovasi dengan teknologi
                terbarukan.
                Teknologi yang dibuat serta dikembangkan
                dengan teknologi masa kini.</p>
        </div>
    </article>
    <div class="row">
        <div class="col-md">
            <div class="card mt-3 mb-5 border-0" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="150"
                data-aos-once="true">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="/img/team.jpeg" class="img-fluid" alt="Team">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h3 class="card-title fw-bold">Perhatikan gambar berikut ini</h3>
                            <p class="card-text">Ini adalah salah satu contoh kegiatan dari anggota SoftDev Community
                                yang sedang mengerjakan sebuah project dari client kita.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <article class="text-center justify-content-center align-items-center mb-5">
        <div data-aos="fade-down" data-aos-duration="1000" data-aos-delay="100" data-aos-once="false">
            <h1 class="text-capitalize fw-bold">Pelayanan SoftDev Community</h1>
            <p class="fs-6">Berikut merupakan beberapa layanan kami, untuk kamu yang tersayang.</p>
        </div>
    </article>
    <div class="row mb-4 row-cols-1 row-cols-md-3 g-4">
        <div class="col mb-3">
            <div class="card kartu-pelayanan" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="150"
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
        <div class="col mb-3">
            <div class="card kartu-pelayanan" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="200"
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
        <div class="col mb-3">
            <div class="card kartu-pelayanan" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="250"
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
    <center class="pb-4">
        <div data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300" data-aos-once="false">
            <a href="https://wa.me/6281548806114?text=Saya%20mau%20tanya%20tanya%20terlebih%20dahulu"
                class="btn btn-more text-decoration-none pt-3 pb-3">Mau Tanya - Tanya Dulu</a>
        </div>
    </center>
</div>
@endsection