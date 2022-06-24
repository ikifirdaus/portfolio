@extends('layouts.index')

@section('content')
    {{-- HEADER --}}
    <div class="container section-header">
        @foreach ($home as $key => $item)
        <div class="row">
            <div class="col-lg-6 pt-5 mt-5">
                <h5 class="hero-title" data-aos="zoom-in-up" data-aos-duration="1500" data-aos-delay="100">
                    Welcome to <span>My Website</span>
                </h5>
                <p class="hero-caption mt-3" data-aos="zoom-in-up" data-aos-duration="1600" data-aos-delay="100">
                    {{ $item->deskripsi_home }}
                </p>
                <p class="contact-title font-monospace" data-aos="zoom-in-up" data-aos-duration="1600"
                    data-aos-delay="100">
                    E : {{ $item->email }}
                    <br>
                    T : {{ $item->telephone }}
                </p>
                <a href="{{ url('/download') }}">
                    <button class="btn" type="button" data-aos="zoom-in-up" data-aos-duration="1600"
                    data-aos-delay="100">
                        Download Resume
                    </button>
                </a>
                
            </div>
            <div class="col-sm-12 col-lg-6 text-center">
                <figure class="figure" data-aos="zoom-in" data-aos-duration="1600" data-aos-delay="100">
                    <img src="{{ asset('/uploads/home/'.$item->gambar_home) }}" alt="" class="figure-img img-fluid">
                </figure>
            </div>
        </div>        
        @endforeach        
    </div>
@endsection