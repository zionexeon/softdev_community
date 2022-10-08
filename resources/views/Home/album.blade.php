@extends("layouts.template")
@section("content")
<div class="container">
    <div id="judul" class="mt-5" data-aos="fade-down" data-aos-duration="1000">
        <h1>Album Kegiatan</h1>
    </div>
    <div class="container" data-aos="fade-down" data-aos-duration="1000" data-aos-once="false" data-aos-delay="100">
        <div class="row row-cols-1 row-cols-md-3 g-4 ">
            @foreach ($teams as $team)
            <div class="col">
                <div class="card border-0">
                    <a href="{{ asset('img/'.$team->gambar) }}" class="glightbox">
                        <img src="{{$team->gambar}}" alt="" style="max-width: 400px; min-width: 100%;"
                            class="mb-3 mt-4">
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
