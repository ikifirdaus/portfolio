{{-- NAVBAR --}}
<nav class="navbar navbar-expand-lg navbar-light pt-4">
    <div class="container">
        <a href="{{ url('/') }}" class="navbar-brand" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
            Rizki Firdaussahlan
        </a>

        <!-- HUMBURGER MENU -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- MENU -->
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="{{ url('/') }}" class="nav-link active mx-2" data-aos="fade-up" data-aos-duration="1000"
                        data-aos-delay="100">H o m e</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('pages.resume') }}" class="nav-link mx-2" data-aos="fade-up" data-aos-duration="1100"
                        data-aos-delay="100">R e s u m e</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('pages.portfolio') }}" class="nav-link mx-2" data-aos="fade-up" data-aos-duration="1200"
                        data-aos-delay="100">P o r t f o l i o</a>
                </li>
                <!-- <li class="nav-item">
                    <a href="#" class="nav-link mx-2" data-aos="fade-up" data-aos-duration="1300"
                        data-aos-delay="100">B l o g</a>
                </li> -->
                <li class="nav-item">
                    <a href="{{ route('pages.contact') }}" class="nav-link mx-2" data-aos="fade-up" data-aos-duration="1400"
                        data-aos-delay="100">C o n t a c t s</a>
                </li>
            </ul>
        </div>
    </div>
</nav>