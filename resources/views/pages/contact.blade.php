@extends('layouts.index')

@section('content')
    <!-- HEADER -->
    <div class="container section-header-contact">
        <h1 class="hero-title-contact text-center mt-5 pt-5" data-aos="zoom-in" data-aos-duration="1500"
            data-aos-delay="100">
            Con<span data-aos="zoom-in" data-aos-duration="1800" data-aos-delay="100">tacts</span>
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

    <div class="container section-contacts pb-5">
        <div class="row">
            @foreach ($contact as $key => $item)
            <div class="col-lg-6 pb-4 p-5">
                <div class="card text-center rounded-0">
                    <div class="text-center pt-4 pb-3" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="100">
                        <img src="{{ asset('/uploads/contact/'.$item->gambar) }}" alt="" style="width: 40px; height:40px" class="img-fluid">
                    </div>
                    <p class="card-text pt-2" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="100">{{ $item->title }}</p>
                    <p class="card-caption pt-2 pb-3" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="100">{{ $item->deskripsi }}</p>
                </div>
            </div>
            @endforeach
            
        </div>
    </div>

    <!-- SECTION CONTACT FORM -->
    <div class="container section-contact-form mt-5 pt-3">
        <h5 class="contact-form-title font-monospace mb-3 text-center" data-aos="fade-up" data-aos-duration="1200"
            data-aos-delay="100">
            Contact Form
        </h5>
        <div class="formthree ptb-100 pb-4 pt-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-md-offset-2">

                        @if(Session::has('success')) 
                        <div class="alert alert-success"> 
                            {{ Session::get('success') }} 
                            @php 
                                Session::forget('success'); 
                            @endphp 
                        </div> 
                        @endif 

                        <form action="{{ route('contactForm.store') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group" data-aos="fade-up" data-aos-duration="1200"
                                        data-aos-delay="100"> <label class="sr-only">Name: </label> 
                                        <input type="text"
                                            class="form-control" required="" id="nameSix" placeholder="Your Name" name="name" value="{{ old('name') }}" style="color: #f2f2f2">

                                        @if ($errors->has('name')) 
                                            <span class="text-danger">{{ $errors->first('name') }}</span> 
                                        @endif

                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group" data-aos="fade-up" data-aos-duration="1200"
                                        data-aos-delay="100"> <label class="sr-only">Email: </label> 
                                        <input type="text" 
                                            class="form-control" required="" id="emailSix" placeholder="Email Address" name="email" value="{{ old('email') }}" style="color: #f2f2f2">
                                        
                                        @if ($errors->has('email')) 
                                            <span class="text-danger">{{ $errors->first('email') }}</span> 
                                        @endif 

                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group" data-aos="fade-up" data-aos-duration="1200"
                                        data-aos-delay="100"> <label class="sr-only">Phone: </label> 
                                        <input type="text"
                                            class="form-control" required="" id="nameSix" placeholder="Phone" name="phone" value="{{ old('phone') }}" style="color: #f2f2f2">

                                        @if ($errors->has('phone')) 
                                            <span class="text-danger">{{ $errors->first('phone') }}</span> 
                                        @endif

                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group" data-aos="fade-up" data-aos-duration="1200"
                                        data-aos-delay="100"> <label class="sr-only">Subject: </label> 
                                        <input type="text" 
                                            class="form-control" required="" id="emailSix" placeholder="Subject" name="subject" value="{{ old('subject') }}" style="color: #f2f2f2">
                                        
                                        @if ($errors->has('subject')) 
                                            <span class="text-danger">{{ $errors->first('subject') }}</span> 
                                        @endif 

                                    </div>
                                </div>
                            </div>
                            
                                
                            
                            <div class="form-group pt-4 mb-4" data-aos="fade-up" data-aos-duration="1200"
                                data-aos-delay="100"> <label class="sr-only">Message: </label> 
                                <textarea name="message" class="form-control" required="" rows="7" placeholder="Write Message" style="color: #f2f2f2">{{ old('message') }}
                                </textarea>

                                @if ($errors->has('message')) 
                                    <span class="text-danger">{{ $errors->first('message') }}</span> 
                                @endif 

                            </div> 

                            <div data-aos="fade-up"
                            data-aos-duration="2000" data-aos-delay="100">
                                <button type="submit" class="btn btn-primary">Send Message
                                </button>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection