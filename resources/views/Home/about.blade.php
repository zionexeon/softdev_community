@extends('layouts.template')
@section('content')
<div id="judul" class="mt-5 mb-5">
    <h1>Tentang SoftDev Community</h1>
</div>
<div class="container">
    <article class="text-justify">
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
    </article>
    <div class="row">
        <div class="col-md-6 p-3">
            <img src="/img/team.jpeg" alt="Team" width="540px">
        </div>
        <div class="col-md-6 p-3">
            <article>
                <p class="fs-5">Perhatikan gambar berikut.</p>
                <p>Itu adalah sebuah gambar dari anggota SoftDev Community yang sedang mengerjakan sebuah project
                    aplikasi website dari client kita.</p>
            </article>
        </div>
    </div>
</div>
<div class="container">
    <article class="text-center justify-content-center align-items-center pt-3">
        <h1 class="text-capitalize fw-bold">Pelayanan SoftDev Community</h1>
        <p class="fs-6">Berikut merupakan beberapa layanan kami, untuk kamu yang tersayang.</p>
    </article>
    <div class="row p-4">
        <div class="col-md-4">
            <div class="card kartu-pelayanan">
                <div class="card-body text-center">
                    <i class="fa-solid fa-sack-dollar fa-5x p-3"></i>
                    <h4 class="fw-bold">Harga Teman</h4>
                    <p class="card-text fs-5">Kami memberikan pelayanan yang terjamin dan lebih terjagkau dari jasa
                        pembuat
                        website lainnya.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card kartu-pelayanan">
                <div class="card-body text-center">
                    <i class="fa-solid fa-handshake-simple fa-5x p-3"></i>
                    <h4 class="fw-bold">Terpercaya</h4>
                    <p class="card-text fs-5">Kami memastikan bahwa kami dapat dpercaya, dan akan menyelesaikan website
                        sesuai dengan keinginan kamu.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card kartu-pelayanan">
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