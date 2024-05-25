<nav class="navbar navbar-expand-lg navbar-light bg-white py-3 sticky-top">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img class="profile-img" src="/frontend/assets/logo.png" width="150px" alt="Logo - {{ config('app.name') }}">
        </a>
        <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="toggler-icon top-bar"></span>
            <span class="toggler-icon mid-bar"></span>
            <span class="toggler-icon bottom-bar"></span>
        </button>
        <div class="collapse navbar-collapse collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 small fw-bolder">
                <li class="nav-item">
                    <a class="nav-link ms-lg-3 text-center text-lg-start {{ Request::is('/') ? 'text-ajl-secondary fw-bold border-bottom border-ajl-secondary border-3' : '' }}"
                        href="/">Home</a>
                </li>
                <li class="nav-item"><a
                        class="nav-link ms-lg-3 text-center text-lg-start {{ Request::is('layanan') ? 'text-ajl-secondary fw-bold border-bottom border-ajl-secondary border-3' : '' }}"
                        href="/layanan">Layanan</a>
                </li>
                <li class="nav-item"><a
                        class="nav-link ms-lg-3 text-center text-lg-start {{ Request::is('tentang') ? 'text-ajl-secondary fw-bold border-bottom border-ajl-secondary border-3' : '' }}"
                        href="/tentang">Tentang</a></li>
                <li class="nav-item"><a
                        class="nav-link ms-lg-3 text-center text-lg-start {{ Request::is('cek-tarif') ? 'text-ajl-secondary fw-bold border-bottom border-ajl-secondary border-3' : '' }}"
                        href="/cek-tarif">Cek Tarif</a>
                </li>
                <li class="nav-item"><a
                        class="nav-link ms-lg-3 text-center text-lg-start {{ Request::is('cabang') ? 'text-ajl-secondary fw-bold border-bottom border-ajl-secondary border-3' : '' }}"
                        href="/cabang">Cabang</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
