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
    <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center align-items-center">
        <div class="col">
            <img src="/img/bri.png" alt="Bank BRI" style="width: 300px;" data-aos="fade-up" data-aos-duration="1000"
                data-aos-once="false" data-aos-delay="150">
        </div>
        <div class="col">
            <img src="/img/bni.png" alt="Bank BNI" style="width: 300px;" data-aos="fade-up" data-aos-duration="1000"
                data-aos-once="false" data-aos-delay="150">
        </div>
        <div class="col">
            <img src="/img/bca.png" alt="Bank BCA" style="width: 300px;" data-aos="fade-up" data-aos-duration="1000"
                data-aos-once="false" data-aos-delay="150">
        </div>
        <div class="col">
            <img src="/img/mandiri.png" alt="Bank MANDIRI" style="width: 300px;" data-aos="fade-up"
                data-aos-duration="1000" data-aos-once="false" data-aos-delay="150">
        </div>
        <div class="col">
            <img src="/img/dana.png" alt="DANA" style="width: 300px;" data-aos="fade-up" data-aos-duration="1000"
                data-aos-once="false" data-aos-delay="150">
        </div>
        <div class="col">
            <img src="/img/paypal.png" alt="PAYPAL" style="width: 300px;" data-aos="fade-up" data-aos-duration="1000"
                data-aos-once="false" data-aos-delay="150">
        </div>
    </div>
</div>
@endsection()