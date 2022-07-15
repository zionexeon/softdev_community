@extends('layouts.template')
@section('content')
    {{-- <div class="container">
    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
                <img src="..." class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="..." class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="..." class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div> --}}

    <div class="container">
        <h1 class="text-center mt-5">Testimonial</h1>
        <div id="carouselExampleDark2" class="carousel carousel-dark slide mt-5 mb-5" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                    <div class="bg-transparent">
                        <img src="/img/testimonial/testimonial-1.jpg" class="d-block testimonial-img" alt="..."
                            style="max-height: 15rem; margin:auto">
                        <div class="card-body text-center mt-4">
                            <h5 class="card-title">Andi</h5>
                            <h6><i class="fa-solid fa-quote-left"></i>Some representative placeholder content for the first
                                slide.<i class="fa-solid fa-quote-right"></i></h6>
                        </div>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <div class="bg-transparent">
                        <img src="/img/testimonial/testimonial-2.jpg" class="d-block testimonial-img" alt="..."
                            style="max-height: 15rem; margin:auto">
                        <div class="card-body text-center mt-4">
                            <h5 class="card-title">Mei-Mei</h5>
                            <h6><i class="fa-solid fa-quote-left"></i>Some representative placeholder content for the first
                                slide.<i class="fa-solid fa-quote-right"></i></h6>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="bg-transparent">
                        <img src="/img/testimonial/testimonial-3.jpg" class="d-block testimonial-img" alt="..."
                            style="max-height: 15rem; margin:auto">
                        <div class="card-body text-center mt-4">
                            <h5 class="card-title">Susanti</h5>
                            <h6><i class="fa-solid fa-quote-left"></i>Some representative placeholder content for the first
                                slide.<i class="fa-solid fa-quote-right"></i></h6>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark2"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon icon-left" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark2"
                data-bs-slide="next">
                <span class="carousel-control-next-icon icon-next" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
@endsection()
