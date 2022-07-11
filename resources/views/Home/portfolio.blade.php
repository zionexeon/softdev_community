@extends('layouts.template')
@section('content')
<div id="judul" class="mt-5 mb-5">
    <h1>Hasil Kerja</h1>
</div>
<div class="container">
    <ul class="nav nav-pills mb-3 justify-content-center align-items-center" id="pills-tab" role="tablist">
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
                <div class="row row-cols-1 row-cols-md-3 g-4 pt-3 pb-4">
                    <div class="col">
                        <div class="card h-100 text-white kartu-hasil">
                            <img src="/img/akrilik.png" class="card-img background-gambar" alt="Akrilik Laser Cutting">
                            <div class="card-img-overlay">
                                <h5 class="card-title">Akrilik Laser Cutting</h5>
                                <p class="card-text">Aplikasi Website</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a longer card with supporting text below as a natural
                                    lead-in
                                    to additional content. This content is a little bit longer.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a longer card with supporting text below as a natural
                                    lead-in
                                    to additional content.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="pills-dekstop" role="tabpanel" aria-labelledby="pills-dekstop-tab" tabindex="0">
            ...</div>
        <div class="tab-pane fade" id="pills-website" role="tabpanel" aria-labelledby="pills-website-tab" tabindex="0">
            ...</div>
        <div class="tab-pane fade" id="pills-iot" role="tabpanel" aria-labelledby="pills-iot-tab" tabindex="0">
            ...</div>
    </div>
</div>
@endsection