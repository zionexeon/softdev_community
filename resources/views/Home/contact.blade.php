@extends('layouts.template')
@section('content')
    <div class="container justify-content-center align-items-center">
        <div id="judul" class="mt-5">
            <h1>Kontak</h1>
        </div>
        <div class="row mt-5 justify-content-center text-center">
            <div class="col-md-4">
                <a href="mailto:ardianto8306@gmail.com" class="text-dark text-decoration-none">
                    <i class="fa-solid fa-envelope fa-4x"></i>
                    <h4 class="text-center mt-2">Email</h4>
                    <h5 class="text-center mt-4 mb-5">example@gmail.com</h5>
                </a>
            </div>
            <div class="col-md-4">
                <a href="telp:088888901970" class="text-dark text-decoration-none">
                    <i class="fa-solid fa-phone fa-4x"></i>
                    <h4 class="text-center mt-2">Phone & WA</h4>
                    <h5 class="text-center mt-4 mb-5">+62 XXX-XXXX-XXXX</h5>
                </a>
            </div>
            <div class="col-md-4">
                <a href="https://goo.gl/maps/2jBDUPrU6AGCWgVC6" target="_blank" class="text-dark text-decoration-none">
                    <i class="fa-solid fa-map-location-dot fa-4x"></i>
                    <h4 class="text-center mt-2">Maps</h4>
                    <h5 class="text-center mt-4">Mekar Laser <span class="badge bg-dark text-white">Cutting Digital</span>
                    </h5>
                </a>
            </div>
        </div>
    </div>
@endsection
