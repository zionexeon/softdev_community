<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }} | SOFTDEV COMMUNITY</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" type="text/css" href="/fontawesome/css/all.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="icon" href="/img/SoftDev Logo.png">
</head>

<body>
    @include('partials.navbar')
    @yield('content')
    <footer class="footer-48201">

        <div class="container">
            <div class="row">
                <div class="col-md-4 pr-md-5">
                    <a href="/" class="footer-site-logo d-block mb-4 text-decoration-none fw-bold">Soft Dev
                        Community</a>
                    <p>Teknologi yang lebih baik, masa depan yang lebih baik</p>
                </div>
                <div class="col-md">
                    <ul class="list-unstyled nav-links">
                        <li><a href="/">Beranda</a></li>
                        <li><a href="/about">Tentang</a></li>
                        <li><a href="/portfolio">Hasil Kerja</a></li>
                        <li><a href="/contact">Kontak</a></li>
                    </ul>
                </div>
                <div class="col-md">
                    <ul class="list-unstyled nav-links">
                        <li><a href="#">Klien</a></li>
                        <li><a href="/team">Tim</a></li>
                        <li><a href="#">Riwayat Kerja</a></li>
                        <li><a href="/testimoni">Testimoni</a></li>
                    </ul>
                </div>
                <div class="col-md">
                    <ul class="list-unstyled nav-links">
                        <li><a href="/kebijakan">Kebijakan pribadi</a></li>
                        <li><a href="/syarat">Syarat &amp; Kententuan</a></li>
                        <li><a href="/mitra">Mitra</a></li>
                    </ul>
                </div>
                <div class="col-md text-md-center">
                    <p class=""><a href="/contact" class="btn btn-tertiary">Kontak Kami</a></p>
                </div>
            </div>

            <div class="row ">
                <div class="col-12 text-center">
                    <div class="copyright mt-5 pt-5">
                        <p class="fs-5"><small>&copy; 2022 Seluruh Hak Cipta <a href="#"
                                    class="text-decoration-none link-website"><b>Softdevcommunity.com</b></a></small>
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/gsap.min.js"></script>
    <script>
        AOS.init();
    </script>
    <script src="/js/animation.js"></script>
</body>

</html>