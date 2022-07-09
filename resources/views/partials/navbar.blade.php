<nav class="navbar navbar-expand-lg background-navbar">
    <div class="container p-2">
        <a class="navbar-brand fw-bold fs-4" href="/">
            <img src="/img/SoftDev Logo 3.png" alt="" width="200px">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto fw-bold align-items-center">
                <li class="nav-item">
                    <a class="nav-link {{ $title === 'HOME' ? 'active text-danger fade-in' : '' }}" href="/">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $title === 'ABOUT' ? 'active text-danger fade-in' : '' }}"
                        href="/about">Tentang</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $title === 'PORTFOLIO' ? 'active text-danger fade-in' : '' }}"
                        href="portfolio">Hasil Kerja</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $title === 'CONTACT' ? 'active text-danger fade-in' : '' }}"
                        href="/contact">Kontak Kami</a>
                </li>
            </ul>
        </div>
    </div>
</nav>