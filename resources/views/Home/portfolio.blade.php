@extends('layouts.template')
@section('content')
<div id="judul" class="mt-5 mb-5" data-aos="fade-down" data-aos-duration="1000" data-aos-once="false">
    <h1>Hasil Kerja</h1>
</div>
<div class="container">
    <ul class="nav nav-pills mb-3 justify-content-center align-items-center" id="pills-tab" role="tablist"
        data-aos="fade-down" data-aos-duration="1000" data-aos-delay="100" data-aos-once="false">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="pills-all-tab" data-bs-toggle="pill" data-bs-target="#pills-all"
                type="button" role="tab" aria-controls="pills-all" aria-selected="true">All</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-dekstop-tab" data-bs-toggle="pill" data-bs-target="#pills-dekstop"
                type="button" role="tab" aria-controls="pills-dekstop" aria-selected="false">Aplikasi Dekstop</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-website-tab" data-bs-toggle="pill" data-bs-target="#pills-website"
                type="button" role="tab" aria-controls="pills-website" aria-selected="false">Aplikasi Website</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-iot-tab" data-bs-toggle="pill" data-bs-target="#pills-iot" type="button"
                role="tab" aria-controls="pills-iot" aria-selected="false">IOT</button>
        </li>
    </ul>
    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-all" role="tabpanel" aria-labelledby="pills-all-tab"
            tabindex="0">
            <div class="container">
                <div class="row row-cols-1 row-cols-md-3 g-4 pt-3 pb-4" data-aos="fade-down" data-aos-duration="1000"
                    data-aos-delay="150" data-aos-once="false">
                    <div class="col">
                        <a href="/detail">
                            <div class="card kartu-hasil text-white border-0">
                                <img src="/img/akrilik.png" class="image" alt="Akrilik Laser Cutting">
                                <div class="card-img-overlay">
                                    <h5 class="card-title">Akrilik Laser Cutting</h5>
                                    <span class="card-text fs-6">Aplikasi Website</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col">
                        <a href="">
                            <div class="card kartu-hasil text-white border-0">
                                <img src="/img/bimahelm.png" class="card-img" alt="Bima Helm">
                                <div class="card-img-overlay">
                                    <h5 class="card-title">Bima Helm</h5>
                                    <span class="card-text fs-6">Aplikasi Website</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col">
                        <a href="">
                            <div class="card kartu-hasil text-white border-0">
                                <img src="/img/iot.png" class="card-img" alt="IOT">
                                <div class="card-img-overlay">
                                    <h5 class="card-title">IOT Arduino</h5>
                                    <span class="card-text fs-6">IOT</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="pills-dekstop" role="tabpanel" aria-labelledby="pills-dekstop-tab" tabindex="0">
            ...</div>
        <div class="tab-pane fade" id="pills-website" role="tabpanel" aria-labelledby="pills-website-tab" tabindex="0">
            <div class="container">
                <div class="row row-cols-1 row-cols-md-3 g-4 pt-3 pb-4" data-aos="fade-down" data-aos-duration="1000"
                    data-aos-delay="150" data-aos-once="false">
                    <div class="col">
                        <a href="">
                            <div class="card kartu-hasil text-white border-0">
                                <img src="/img/akrilik.png" class="image" alt="Akrilik Laser Cutting">
                                <div class="card-img-overlay">
                                    <h5 class="card-title">Akrilik Laser Cutting</h5>
                                    <span class="card-text fs-6">Aplikasi Website</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col">
                        <a href="">
                            <div class="card kartu-hasil text-white border-0">
                                <img src="/img/bimahelm.png" class="card-img" alt="Bima Helm">
                                <div class="card-img-overlay">
                                    <h5 class="card-title">Bima Helm</h5>
                                    <span class="card-text fs-6">Aplikasi Website</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="pills-iot" role="tabpanel" aria-labelledby="pills-iot-tab" tabindex="0">
            <div class="container">
                <div class="row row-cols-1 row-cols-md-3 g-4 pt-3 pb-4" data-aos="fade-down" data-aos-duration="1000"
                    data-aos-delay="150" data-aos-once="false">
                    <div class="col">
                        <a href="">
                            <div class="card kartu-hasil text-white border-0">
                                <img src="/img/iot.png" class="card-img" alt="IOT">
                                <div class="card-img-overlay">
                                    <h5 class="card-title">IOT Arduino</h5>
                                    <span class="card-text fs-6">IOT</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection