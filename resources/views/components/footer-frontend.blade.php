<footer class="bg-dark py-5">
    <div class="container text-white">
        <div class="row">
            <div class="col-12 text-center text-lg-start mb-3">
                <img class="profile-img" src="/frontend/assets/logo.png" width="200px"
                    alt="Logo - {{ config('app.name') }}">
            </div>
            <div class="col-lg-4 mb-3">
                <h5 class="fw-bold text-ajl-secondary mb-3">Hubungi Kami</h5>
                <div class="text-white list-group">
                    <a href="https://www.linkedin.com/company/ajl-logistikindonesia/"
                        class="mb-2 d-flex align-items-center text-decoration-none text-white">
                        <img src="{{ asset('frontend/assets/linkedin.svg') }}" width="16px" class="me-3"
                            alt="icon linkedin">
                        <span>PT. AJL Logistik Indonesia</span>
                    </a>
                    <a href="https://www.instagram.com/ajllogistikindonesia/"
                        class="mb-2 d-flex align-items-center text-decoration-none text-white">
                        <img src="{{ asset('frontend/assets/instagram.svg') }}" width="16px" class="me-3"
                            alt="icon instagram">
                        <span>@ajllogistikindonesia</span>
                    </a>
                    <a href="https://www.facebook.com/profile.php?id=100090841991361&mibextid=ZbWKwL
                    "
                        class="mb-2 d-flex align-items-center text-decoration-none text-white">
                        <img src="{{ asset('frontend/assets/facebook.svg') }}" width="16px" class="me-3"
                            alt="icon facebook">
                        <span>PT. AJL Logistik Indonesia</span>
                    </a>
                    <div class="mb-2 d-flex align-items-center">
                        <i class="bi bi-envelope-fill  me-3"></i>
                        <span>info@ajllogistik.com</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-3">
                <h5 class="fw-bold text-ajl-secondary mb-3">Kantor</h5>
                <div class="text-white list-group">
                    <div class="mb-2 d-flex align-items-start">
                        <i class="bi bi-geo-alt-fill  me-3"></i>
                        <span>Ruko Ifolia Blok HY 47, Kota Harapan Indah No.45, Pusaka Rakyat, Kec. Tarumajaya,
                            Kabupaten Bekasi, Jawa Barat 17214</span>
                    </div>
                    <div class="mb-2 d-flex align-items-center">
                        <img src="{{ asset('frontend/assets/whatsapp.svg') }}" width="16px" class="me-3"
                            alt="icon whatsapp">
                        <span>+62 812-1232-6177 </span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-3">
                <h5 class="fw-bold text-ajl-secondary mb-3">Map</h5>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.8082968887084!2d106.98566140874395!3d-6.156424293804954!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698be496434f93%3A0xc74569ff2655f0ea!2sPT.%20AJL%20Logistik%20Indonesia!5e0!3m2!1sen!2sus!4v1716637101484!5m2!1sen!2sus"
                    width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div
                class="col-12 d-flex flex-column flex-lg-row justify-content-center justify-content-lg-between mt-3 gap-2">
                <div class="text-center text-lg-start">
                    Copyright © 2018 {{ config('app.name') }}
                </div>
                <div class="d-flex flex-column flex-lg-row text-center text-lg-start gap-2">
                    <div>
                        +62 812-1232-6177
                    </div>
                    <div>
                        marketing@ajllogistik.com
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
