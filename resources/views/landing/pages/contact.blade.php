
@extends('landing.layouts.base')

@section('contents')



    <div class="container-fluid pt-2 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-4">
            <div class="text-center position-relative mx-auto">
                <h1> Let’s start<span class="text-primary"> a conversation</span> </h1> 
                <p class="mb-0">Connect with Us Today to Enhance Efficiency and Drive Growth Together.</p>
            </div>
            <div class="row g-5">
                <div class="col-lg-12 py-4" data-wow-delay="0.9s">
                    <div class="row justify-content-center">
                        <div class="col-lg-3 col-md-6 col-sm-12 mb-2">
                            <div class="card contact-card d-flex align-items-start flex-column justify-content-start ">
                                <div class="d-flex align-items-center flex-row justify-content-start pb-2">
                                    <img src="{{asset('assets/img/phone.png')}}">
                                    <div class="">
                                        <p style="margin-bottom: 0px">24*7 Services</p>
                                        <h6 class="text-primary contact-text">Call Us On</h6>
                                    </div>
                                </div>
                                <h6 class="contact-items">Tel: +91-012-4496-0635</h6>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 mb-2">
                            <div class="card contact-card d-flex align-items-start flex-column justify-content-start">
                                <div class="d-flex align-items-center flex-row justify-content-start pb-2">
                                    <img class="pr-2" src="{{asset('assets/img/email.png')}}">
                                    <div class="">
                                        <p style="margin-bottom: 0px">Mail</p>
                                        <h6 class="text-primary contact-text">Mail Address</h6>
                                    </div>
                                </div>
                                <h6 class="contact-items">info@intellivectra.tech</h6>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 mb-2">
                            <div class="card contact-card d-flex align-items-start flex-column justify-content-start">
                                <div class="d-flex align-items-center flex-row justify-content-start pb-2">
                                    <img class="pr-2" src="{{asset('assets/img/location.png')}}">
                                    <div class="">
                                        <p style="margin-bottom: 0px">Location</p>
                                        <h6 class="text-primary contact-text">Visit Us At</h6>
                                    </div>
                                </div>
                                <h6 class="contact-items">2nd Floor, Plot No. 29, Maruti Industrial Area, Sector-18, Gurugram–122015 (Haryana).</h6>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 mb-2">
                            <div class="card contact-card d-flex align-items-start flex-column justify-content-start">
                                <div class="d-flex align-items-center flex-row justify-content-start pb-2">
                                    <img class="pr-2" src="{{asset('assets/img/time.png')}}">
                                    <div class="">
                                        <p style="margin-bottom: 0px">Office Hours</p>
                                        <h6 class="text-primary contact-text">Opening Time</h6>
                                    </div>
                                </div>
                                <h6 class="contact-items">Mon - Fri : 9am - 8pm <br><span style="color:red;">Sat - Sun (Closed)</span></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid py-5 wow fadeInUp bg-primary" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 col-md-6 col-sm-12" style="min-height: 380px;">
                    <div class="position-relative h-100">
                        {{-- <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/contact-1.jpg')}}" style="object-fit: cover;"> --}}

                        <div class="six-columns bottom-padding-20">
                            <div class="contact-content">
                            <h1 data-animation-child class="text-trans-none blue-text word-spacing-15 xxlarge-title">
                            <span
                                class="txt-rotate text-primary"
                                data-period="300"
                                data-rotate='[ "Hello", "नमस्ते", "Bonjour", "Halo", "Hola", "Ciao" ]'>
                                </span>
                            </h1>
                            <p class="pt-2">Let's chat over a cup of coffee or tea or . . . anything  <br class="hidden-phone" />else you would prefer!</p>
                            <hr class="mt-2" style="width: 25%; float:left;"/>
                            <h3 class="pt-5 blog-title">We are open for great ideas <br class="hidden-phone" />(almost) every day!</h3>
                            <h3 class="pt-2 blog-title">Drop us an email at:</>
                            <p class="p-style-large"><a class="blue-text" href="mailto:info@intellivectra.tech">info@intellivectra.tech</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="container">
                        <div class="position-relative px-3">
                            <h1><span class="text-primary">Get in</span> Touch With Us !</h1>
                            <p>Fill up the Form and our team will get back to within 24 hrs</p>
                        </div>
                        <div class="container-fluid py-2 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="row">

                                <form id="gettouch" method="post" action="{{ route('getInTouch')}}" class="getin-touch">
                                    @csrf
                                    <div class="row g-3">
                                        <div class="col-md-12">
                                            <input type="text" name="first_name" id="first_name" class="form-control border border-warning form-input-rounded input-form " placeholder="First Name*" >
                                            <p class="ml-3 text-danger fw-bold text-left" id="first_name_error"></p>

                                        </div>
                                        <div class="col-md-12">
                                            <input type="text" name="last_name" id="last_name" class="form-control border border-warning form-input-rounded input-form" placeholder="Last Name*" >
                                            <p class="ml-3 text-danger fw-bold text-left" id="last_name_error"></p>
                                        </div>
                                        <div class="col-md-12">
                                            <input type="email"  name="email" id="email"class="form-control border border-warning form-input-rounded input-form" placeholder="name@example.com*" >
                                            <p class="ml-3 text-danger fw-bold text-left" id="email_error"></p>
                                        </div>
                                        <div class="col-12">
                                            <input type="number" name="mobile" id="mobile" class="form-control border border-warning form-input-rounded input-form" placeholder="+91-0000-000-000*" >
                                            <p class="ml-3 text-danger fw-bold text-left" id="mobile_error"></p>
                                        </div>
                                        <div class="col-12">
                                            <textarea type="text" name="message" rows="6" id="message" class="form-control border border-warning form-input-textarea input-form" placeholder="Message" ></textarea>
                                            <p class="ml-3 text-danger fw-bold text-left" id="message_error"></p>
                                        </div>

                                        {{-- <div class="col-12">
                                            <img src="{{ captcha_src() }}" alt="captcha">
                                            <input type="text" name="captcha" id="captcha" class="form-control border border-warning form-input-rounded input-form" placeholder="Please enter Captcha Here*">
                                            <p class="ml-3 text-danger fw-bold text-left" id="captcha_error"></p>
                                        </div> --}}

                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-md-6 d-flex align-items-center justify-content-center captcha">
                                                    <span style="margin-bottom:5px;">{!! captcha_img('math') !!}</span>
                                                    <button type="button" class="btn btn-success btn-refresh" style="margin-bottom:5px;"><i class="fa fa-refresh"></i></button>
                                                    {{-- <img src="{{ captcha_src('math') }}" alt="captcha" class=" " style="margin-bottom:5px;"> --}}
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="text" name="captcha" id="captcha" class=" form-control border border-warning form-input-rounded input-form" placeholder="Please enter Captcha Here*">
                                                    <p class="ml-3 text-danger fw-bold text-left" id="captcha_error"></p>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        {{-- <div class="col-12">
                                            <div class="row">
                                                <div class="col-md-6 d-flex align-items-center justify-content-center ">
                                                    <img src="{{ captcha_src() }}" alt="captcha" class=" " style="margin-bottom:5px;">
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="text" name="captcha" id="captcha" class=" form-control border border-warning form-input-rounded input-form" placeholder="Please enter Captcha Here*">
                                                    <p class="ml-3 text-danger fw-bold text-left" id="captcha_error"></p>
                                                </div>
                                            </div>
                                        </div> --}}

                                        <div class="col-12 col-12 d-flex flex-column align-items-center justify-content-center">
                                            <button class="btn btn-dark form-input-rounded ml-3 mt-2 px-4 text-center btn-submit" type="submit">Submit  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"/>
                                                    </svg>
                                            </button>

                                        </div>
                                        <div class="col-12 d-flex flex-column align-items-center justify-content-center">
                                            <div class="spinner-border text-warning text-center" role="status" style="display: none;">
                                                <span class="sr-only">Loading...</span>
                                            </div>
                                        </div>


                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>

    <div class="container-fluid py-5 my-4 wow fadeInUp" data-wow-delay="0.3s"  >
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-4 col-md-4 col-sm-12 py-4 px-4" >
                    <div class="d-flex align-items-center flex-column justify-content-center" >
                        <img class="rounded wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/contact-3.png')}}" style="object-fit: cover;">
                        <div class="d-flex align-items-center flex-column justify-content-cente w-100 py-3">
                            <h4 class="contact-text"><span class="text-primary">Delhi NCR</span></h4>
                            <p class="text-center text-justify" style="color:black;">2nd Floor, Plot No. 29, Maruti Industrial Area, Sector-18, Gurugram–122015, Haryana</p>
                        </div>
                        <a class="link-map text-primary" href="https://www.google.com/maps/dir/25.6170256,85.116814/Intelli+Vectra+Technologies/@26.787533,75.8239746,6z/data=!3m1!4b1!4m9!4m8!1m1!4e1!1m5!1m1!1s0x390d1930ce6b42f9:0xb39219cee9e1d009!2m2!1d77.0743589!2d28.490693?entry=ttu" target="_blank"><i class="bi bi-geo-alt text-primary me-2 mr-2"></i> Get Direction</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 py-4 px-4">
                    <div class="d-flex align-items-center flex-column justify-content-center">
                        <img class="rounded wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/contact-2.png')}}" style="object-fit: cover;">
                        <div class="d-flex align-items-center flex-column justify-content-cente w-100 py-3">
                            <h4 class="contact-text"><span class="text-primary">Dubai, UAE</span></h4>

                            <p class="text-center text-justify"  style="color:black;">Office #1111, Clover Bay Tower, Business Bay, PO Box: 283426, Dubai, UAE</p>
                        </div>
                        <a class="link-map text-primary mt-4" href="https://maps.app.goo.gl/91mdqZL9617oJdke7" target="_blank"><i class="bi bi-geo-alt text-primary me-2 mr-2"></i> Get Direction</a>


                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 py-4 px-4">
                    <div class="d-flex align-items-center flex-column justify-content-center">
                        <img class="rounded wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/gateway-of-india-1.png')}}" style="object-fit: cover;">
                        <div class="d-flex align-items-center flex-column justify-content-cente w-100 py-3">
                            <h4 class="contact-text"><span class="text-primary" >Mumbai, Maharastra </span></h4>

                            <p class="text-center text-justify"  style="color:black;">Coming Soon</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
