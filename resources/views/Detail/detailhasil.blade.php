@extends('layouts.template')
@section('content')
<div class="container">
    <div class="row row-cols-1 g-4 mt-4">
        <div class="card mb-3 border-0">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="{{ $gambar }}" class="img-fluid rounded-start" alt="Akrilik Laser Cutting">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h2 class="card-title text-capitalize fw-bold pb-3">Aplikasi website Akrilik Laser Cutting</h2>
                        <p class="card-text">Aplikasi website profil perusahaan CV.Mekar Laser dengan nama Akrilik Laser
                            Cutting</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection