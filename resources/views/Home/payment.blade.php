@extends("layouts.template")
@section('content')
<div id="judul" class="mt-5 mb-3" data-aos="fade-down" data-aos-duration="1000">
    <h1>Pembayaran</h1>
</div>
<div class="container">
    <article class="fs-5 mt-3" data-aos="fade-right" data-aos-duration="1000" data-aos-once="false"
        data-aos-delay="100">
        <p>Metode pembayaran bisa melalui :</p>
    </article>
    <div class="row row-cols-1 row-cols-md-3 g-4 py-3">
        <div class="col">
            <div class="card border-0" data-aos="fade-down" data-aos-duration="1000" data-aos-once="false"
                data-aos-delay="150">
                <img src="/img/bri.png" alt="Bank BRI">
            </div>
        </div>
        <div class="col">
            <div class="card border-0" data-aos="fade-down" data-aos-duration="1000" data-aos-once="false"
                data-aos-delay="150">
                <img src="/img/bca.png" alt="Bank BCA">
            </div>
        </div>
        <div class="col">
            <div class="card border-0" data-aos="fade-down" data-aos-duration="1000" data-aos-once="false"
                data-aos-delay="150">
                <img src="/img/bni.png" alt="Bank BNI">
            </div>
        </div>
        <div class="col">
            <div class="card border-0" data-aos="fade-down" data-aos-duration="1000" data-aos-once="false"
                data-aos-delay="150">
                <img src="/img/mandiri.png" alt="Bank MANDIRI">
            </div>
        </div>
        <div class="col">
            <div class="card border-0" data-aos="fade-down" data-aos-duration="1000" data-aos-once="false"
                data-aos-delay="150">
                <img src="/img/dana.png" alt="DANA">
            </div>
        </div>
        <div class="col">
            <div class="card border-0" data-aos="fade-down" data-aos-duration="1000" data-aos-once="false"
                data-aos-delay="150">
                <img src="/img/paypal.png" alt="PAYPAL">
            </div>
        </div>
    </div>
</div>
@endsection()