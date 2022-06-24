@extends('layouts.index')

@section('content')
    <!-- HEADER -->
    <div class="container section-header-resume">
        <h1 class="hero-title-resume text-center mt-5 pt-5" data-aos="zoom-in" data-aos-duration="1500"
            data-aos-delay="100">
            Res<span data-aos="zoom-in" data-aos-duration="1800" data-aos-delay="100">ume</span>
        </h1>
    </div>

    <div class="container text-center pb-4">
        <div class="vr" style="height: 100px;" data-aos="zoom-in" data-aos-duration="1500" data-aos-delay="100"></div>
    </div>

    <!-- BTN SCROLL DOWN -->
    <div class="container text-center pb-3">
        <a href="#" style="color: #FD5D5D;" id="topBtn">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-chevron-expand btn-scroll" viewBox="0 0 16 16" data-aos="fade-up" data-aos-duration="1600"
                data-aos-delay="100">
                <path fill-rule="evenodd"
                    d="M3.646 9.146a.5.5 0 0 1 .708 0L8 12.793l3.646-3.647a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 0-.708zm0-2.292a.5.5 0 0 0 .708 0L8 3.207l3.646 3.647a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 0 0 0 .708z" />
            </svg>
        </a>
    </div>

    <!-- ABOUT ME -->
    <div class="container section-about-me pt-5">
        @foreach ($profile as $key => $item)
        <div class="row">
            <div class="col-lg-4 text-center mb-4">
                <img src="{{ asset('/uploads/profile/'.$item->gambar_profile) }}" alt="" class="img-fluid" data-aos="zoom-in"
                    data-aos-duration="1000" data-aos-delay="100">
            </div>
            <div class="col-lg-8">
                <div class="caption-me" data-aos="zoom-in" data-aos-duration="1100" data-aos-delay="100">
                    {{ $item->deskripsi_profile }}
                    <div class="row mt-4 text-me">
                        <div class="col">
                            <p>Age <span>{{ $item->age }}</span></p>
                            <p>Full time remote <span>{{ $item->freelance }}</span></p>
                            <p>Phone <span>{{ $item->telephone }}</span></p>
                            <a href="{{ url('/download') }}">
                                <button class="btn btn-outline-danger mt-3" type="button">Download Resume
                                </button>
                            </a>
                            
                        </div>
                        <div class="col">
                            <p>Residence <span>{{ $item->residence }}</span></p>
                            <p>Address <span>{{ $item->address }}</span></p>
                            <p>Email <span>{{ $item->email }}</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <!-- SERVICES -->
    <div class="container-fluid section-services mt-5">
        <h5 class="services-title text-center font-monospace" data-aos="zoom-in" data-aos-duration="1200"
        data-aos-delay="100">
        Services
        </h5>
        <div class="row justify-content-evenly pt-5">
            @foreach ($services as $key => $item)
            <div class="col-lg-3 col-sm-12 mb-4">
                <div class="card text-center" data-aos="zoom-in" data-aos-duration="1200" data-aos-delay="100">
                    <div class="card-header">
                        <img src="{{ asset('/uploads/services/'.$item->gambar_icon) }}" alt="" class="card-image img-fluid">
                    </div>
                    <div class="card-body">
                        <p class="card-title">{{ $item->title }}</p>
                        <p class="card-text">{{ $item->deskripsi }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <!-- EXPERIENCE & EDUCATION -->
    <div class="container-fluid section-experience mt-5 mb-3">
        <h5 class="experience-title text-center font-monospace" data-aos="zoom-in" data-aos-duration="1200"
            data-aos-delay="100">
            Experience & Education
        </h5>
        <div class="container mt-4">
            <div class="row justify-content-evenly">
                <div class="col-lg-4 col-sm-12">
                    <div class="card-experience-education">
                        <p class="hero-title p-2" data-aos="zoom-in" data-aos-duration="1200" data-aos-delay="100">
                            Experience
                        </p>
                        @foreach ($experience as $key => $item)
                        <div class="card card-text text-center p-4" data-aos="zoom-in" data-aos-duration="1200"
                            data-aos-delay="100">
                            <div class="experience-year pb-1">{{ $item->tanggal }}</div>
                            <div class="experience-text pb-2">{{ $item->title }}</div>
                            <div class="experience-caption pb-2">{{ $item->deskripsi }}</div>
                        </div>
                    <div class="pt-5"></div>
                    @endforeach
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12">
                    <div class="card-experience-education">
                        <p class="hero-title p-2" data-aos="zoom-in" data-aos-duration="1200" data-aos-delay="100">
                            Education
                        </p>
                        @foreach ($education as $key => $item)
                        <div class="card card-text text-center p-4" data-aos="zoom-in" data-aos-duration="1200"
                        data-aos-delay="100">
                        <div class="education-year pb-1">{{ $item->tanggal }}</div>
                        <div class="education-text pb-2">{{ $item->title }}</div>
                        <div class="education-caption pb-2">{{ $item->deskripsi }}</div>
                    </div>
                    <div class="pt-5"></div>
                    @endforeach
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- LANGUAGE -->
    <div class="container-fluid section-language mt-5 mb-3">
        <h5 class="language-title text-center font-monospace" data-aos="zoom-in" data-aos-duration="1200"
            data-aos-delay="100">
            Language Skills
        </h5>
        <hr class="mt-1">
        <div class="container d-flex justify-content-center">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6" data-aos="zoom-in" data-aos-duration="1200" data-aos-delay="100">
                    <div class="progress blue"> <span class="progress-left"> <span class="progress-bar"></span>
                        </span> <span class="progress-right"> <span class="progress-bar"></span> </span>
                        <div class="progress-value">95%</div>
                    </div>
                    <p class="hero-title text-center">
                        Indonesia
                    </p>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6" data-aos="zoom-in" data-aos-duration="1200" data-aos-delay="100">
                    <div class="progress yellow"> <span class="progress-left"> <span class="progress-bar"></span>
                        </span>
                        <span class="progress-right"> <span class="progress-bar"></span> </span>
                        <div class="progress-value">75%</div>
                    </div>
                    <p class="hero-title text-center">
                        English
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- CODING SKILLS -->
    <div class="container-fluid section-coding-skills mb-3">
        <h5 class="coding-skills-title text-center font-monospace" data-aos="zoom-in" data-aos-duration="1200"
            data-aos-delay="100">
            Coding Skills
        </h5>
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="card shadow">
                        <div class="card-body m-5 pb-4">
                            <div class="coding-skills-caption" data-aos="zoom-in" data-aos-duration="1200"
                                data-aos-delay="100">HTML/CSS</div>
                            <div class="progress" data-aos="zoom-in" data-aos-duration="1200" data-aos-delay="100">
                                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                                    style="width: 85%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">85%
                                </div>
                            </div>
                            <br>
                            <div class="coding-skills-caption" data-aos="zoom-in" data-aos-duration="1200"
                                data-aos-delay="100">Javascript</div>
                            <div class="progress" data-aos="zoom-in" data-aos-duration="1200" data-aos-delay="100">
                                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                                    style="width: 75%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">75%
                                </div>
                            </div>
                            <br>
                            <div class="coding-skills-caption" data-aos="zoom-in" data-aos-duration="1200"
                                data-aos-delay="100">PHP/MySQL</div>
                            <div class="progress" data-aos="zoom-in" data-aos-duration="1200" data-aos-delay="100">
                                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                                    style="width: 80%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">80%
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid section-knowledge mt-5">
        <h5 class="knowledge-title text-center font-monospace" data-aos="zoom-in" data-aos-duration="1200"
            data-aos-delay="100">
            Knowledge
        </h5>
        <hr>
        <div class="container mt-3 p-2">
            <div class="row pb-3 mb-3">
                @foreach ($knowledge as $key=> $item)
                <div class="col-lg-6 col-sm-12">
                    <p class="knowledge-caption" data-aos="zoom-in" data-aos-duration="1200" data-aos-delay="100">
                        <i class="bi bi-check-lg"></i>
                        {{ $item->deskripsi }}
                    </p>
                </div>
                @endforeach
            </div>
        </div>
    </div>    
@endsection