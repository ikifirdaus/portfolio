@extends('layouts.index')

@section('content')
    <!-- HEADER -->
    <div class="container section-header-portfolio">
        <h1 class="hero-title-portfolio text-center mt-5 pt-5" data-aos="zoom-in" data-aos-duration="1500"
            data-aos-delay="100">
            Port<span data-aos="zoom-in" data-aos-duration="1800" data-aos-delay="100">folio</span>
        </h1>
    </div>

    <div class="container text-center pb-4">
        <div class="vr" style="height: 100px;" data-aos="zoom-in" data-aos-duration="1500" data-aos-delay="100"></div>
    </div>

    <!-- BTN SCROLL DOWN -->
    <div class="container text-center pb-5">
        <a href="#" style="color: #FD5D5D;" id="topBtn">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-chevron-expand btn-scroll" viewBox="0 0 16 16" data-aos="fade-up" data-aos-duration="1600"
                data-aos-delay="100">
                <path fill-rule="evenodd"
                    d="M3.646 9.146a.5.5 0 0 1 .708 0L8 12.793l3.646-3.647a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 0-.708zm0-2.292a.5.5 0 0 0 .708 0L8 3.207l3.646 3.647a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 0 0 0 .708z" />
            </svg>
        </a>
    </div>

    <!-- SECTION WORKS -->
    <div class="container-fluid section-works">
        <div class="container pt-5 pb-5">
            <div class="row align-items-center">
                @foreach ($portfolio as $key => $item)
                <div class="col-lg-5 col-sm-12 flex-shrink-0 mb-3">
                    <img src="{{ asset('/uploads/portfolio/'.$item->gambar) }}" alt=""
                        class="img-fluid rounded mx-auto img-thumbnail shadow" data-aos="fade-up"
                        data-aos-duration="1200" data-aos-delay="100">
                </div>
                <div class="col-lg-7 col-sm-12 flex-grow-1 ">
                    <p class="date-works" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="100">
                        {{ $item->tanggal }}
                    </p>
                    <h5 class="works-title" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="100">
                        {{ $item->title }}
                    </h5>
                    <p class="works-caption" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="100">
                        {{ $item->deskripsi_singkat }}
                    </p>
                </div>
                <hr class="mt-2 mb-4">
                @endforeach
            </div>
        </div>
    </div>    
@endsection