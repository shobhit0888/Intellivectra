
@extends('landing.layouts.base')

@section('contents')


<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 col-md-6 col-sm-12 pt-3" >
                <div class="" style="min-height: 400px;">
                    <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/service/service-po-1.png')}}">
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 pl-5">
                <div class="position-relative pb-3">
                    <h1> <span class="text-primary"> Command & Control Solutions</span></h1>
                </div>
                <p class="mb-2 text-justify">Cyviz's cutting-edge technology, in partnership with Intelli Vectra's expertise, introduces
                    Roombr – the world's first Walltop Computer. This partnership aims to revolutionise
                    communication and collaboration, bringing simplicity and efficiency to command centres
                    worldwide. Intelli Vectra's deep understanding of command centre operations and Cyviz's
                    innovative technology combine seamlessly to deliver Roombr, setting a new standard for
                    communication and collaboration in command centres globally.</p>

                {{-- <a href="{{ route('about')}}" class="btn btn-dark rounded-pill py-3 px-5 mt-3 wow zoomIn" data-wow-delay="0.9s">Know More <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"/>
                  </svg></a> --}}
            </div>
        </div>
    </div>
</div>

<div class="container-fluid py-5 bg-primary wow fadeInUp" data-wow-delay="0.2s">
    <div class="container">
        <div class="text-center position-relative pb-3 mb-4 mx-auto">
            <h1>Our <span class="text-primary"> Offerings</span></h1>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12" >
                <div class="row">
                    <div class="col-md-2" >
                        <img class="position-absolute wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/service/offering-1.svg')}}">
                    </div>
                    <div class="col-md-10" >
                        <h5 class="fw-bold">Advanced technology</h5>
                        <p class="text-justify">Advanced technology solutions tailored for command and control environments.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12" >
                <div class="row">
                    <div class="col-md-2 " >
                        <img class="position-absolute wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/service/offering-6.svg')}}">
                    </div>
                    <div class="col-md-10" >
                        <h5 class="fw-bold">Roombr</h5>
                        <p class="text-justify">The world's first Walltop Computer, transforming communication and
                            collaboration.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-lg-6 col-md-6 col-sm-12" >
                <div class="row">
                    <div class="col-md-2" >
                        <img class="position-absolute wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/service/offering-2.svg')}}">
                    </div>
                    <div class="col-md-10" >
                        <h5 class="fw-bold">Integration of Cyviz's</h5>
                        <p class="text-justify">Integration of Cyviz's innovation with Intelli Vectra's command centre expertise.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12" >
                <div class="row">
                    <div class="col-md-2 " >
                        <img class="position-absolute wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/service/offering-3.svg')}}">
                    </div>
                    <div class="col-md-10" >
                        <h5 class="fw-bold">Emphasis</h5>
                        <p class="text-justify">Emphasis on simplicity and efficiency to boost productivity and decision-making.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-lg-6 col-md-6 col-sm-12" >
                <div class="row">
                    <div class="col-md-2" >
                        <img class="position-absolute wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/service/offering-4.svg')}}">
                    </div>
                    <div class="col-md-10" >
                        <h5 class="fw-bold">Comprehensive support</h5>
                        <p class="text-justify">Comprehensive support services for seamless deployment and ongoing assistance.
                        </p>
                    </div>
                </div>
            </div>
            {{-- <div class="col-lg-6 col-md-6 col-sm-12" >
                <div class="row">
                    <div class="col-md-2 " >
                        <img class="position-absolute wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/service/offering-5.svg')}}">
                    </div>
                    <div class="col-md-10" >
                        <h5 class="fw-bold">On-Demand Consulting</h5>
                        <p class="text-justify">Efficient resource management for project demands.</p>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
</div>


<div class="container-fluid py-4 wow fadeInUp" data-wow-delay="0.4s" >
    <div class="container">
        <div class="text-center position-relative pb-3 mx-auto">
            <h1 >How it <span class="text-primary"> Works </span></h1>

        </div>
        <div class="row g-5">

            <div class="col-lg-12 col-md-12" data-wow-delay="0.5s">
                <div class="d-flex flex-row justify-content-center ">
                    <div class="row d-flex flex-row justify-content-between">
                        <div class="col-lg-3 col-md-3 col-sm-6 text-center px-4 wow fadeInUp" data-wow-delay="0.6s">
                            <img class="ups-img w-50 py-2" data-wow-delay="0.2s" src="{{ asset('assets/img/service-orm-4.svg')}}" >
                            <h5>Step-1 </h5>
                            <p>We seamlessly integrate data from various sources for analysis.
                            </p>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 text-center px-4 wow fadeInUp" data-wow-delay="0.7s">
                            <img class="ups-img w-50 py-2" data-wow-delay="0.3s" src="{{ asset('assets/img/service-orm-1.svg')}}" >
                            <h5>Step-2</h5>
                            <p>We analyse large datasets in real-time, offering actionable insights.
                             </p>
                        </div>

                        <div class="col-lg-3 col-md-3 col-sm-6 text-center px-4 wow fadeInUp" data-wow-delay="0.8s">
                            <img class="ups-img w-50 py-2" data-wow-delay="0.3s" src="{{ asset('assets/img/service-orm-3.svg')}}" >
                            <h5>Step-3</h5>
                            <p>Our intelligent algorithms prioritise concerns, aiding informed decisions.</p>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 text-center px-4 wow fadeInUp" data-wow-delay="0.9s">
                            <img class="ups-img w-50 py-2" data-wow-delay="0.1s"  src="{{ asset('assets/img/service-orm-2.svg')}}" >
                            <h5 class="">Step-4</h5>
                            <p>We ensure network security, minimising risks for infrastructure integrity.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="col-lg-12 my-5 mb-5" style="min-height: 600px">
    <div class="row mb-5">
        <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="container-fluid py-4 wow fadeInUp bg-primary ml-5" data-wow-delay="0.4s" >
                <div class="container">
                    <div class="text-center position-relative pb-3 mb-4 mx-auto">
                        <h4 class="text-left text-primary">Key Features of Our Command & Control Solutions</h4>
                        <p class="text-justify mb-0">Our Command & Control Solutions excel in seamless data integration, dynamic analysis,
                            coordinated decision-making, and robust security measures. With our platform, data from
                            various sources is seamlessly integrated and analysed in real-time, empowering
                            stakeholders to make informed decisions efficiently. Additionally, our focus on security
                            ensures the integrity of our infrastructure, minimising risks and enhancing overall reliability.</p>
                        <p class="text-justify">The partnership between Intelli Vectra and Cyviz brings significant benefits:</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-8 col-md-8 col-sm-12">
            <div class="service-feature bg" style="height: 300px">
                <div class="row g-5">
                    <div id="service-feature" class="px-5 owl-carousel service-feature-carousel">
                        <div class="mr-4 wow slideInUp" data-wow-delay="0.1s">
                            <div class=" wow slideInUp mx-2 " data-wow-delay="0.3s">
                                <div class="ser-feature-card bg-light overflow-hidden">
                                    <div class="team-img position-relative overflow-hidden d-flex justify-content-center">
                                        <img class="img-fluid w-50 h-50 p-5" src="{{ asset('assets/img/service-orm-1.svg')}}" alt="">
                                    </div>
                                    <div class="text-center py-4">
                                        <h5 class="fw-bold">Enhanced Communication</h5>
                                        <p class="mx-3 text-center m-0 my-3">Overcome geographical barriers for seamless
                                            collaboration worldwide </p>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mr-4 wow slideInUp" data-wow-delay="0.2s">
                            <div class="wow slideInUp mx-2" data-wow-delay="0.3s">
                                <div class="ser-feature-card  bg-light overflow-hidden">
                                    <div class="team-img position-relative overflow-hidden d-flex justify-content-center">
                                        <img class="img-fluid w-50 p-5" src="{{ asset('assets/img/service-orm-1.svg')}}" alt="">
                                    </div>
                                    <div class="text-center py-4">
                                        <h5 class="fw-bold">Increased Efficiency</h5>
                                        <p class="mx-3 text-center m-0 my-3">Expedite decision-making with real-time data sharing, leading
                                            to faster responses.</p>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mr-4 wow slideInUp" data-wow-delay="0.3s">
                            <div class="wow slideInUp mx-2" data-wow-delay="0.3s">
                                <div class="ser-feature-card  bg-light overflow-hidden">
                                    <div class="team-img position-relative overflow-hidden d-flex justify-content-center">
                                        <img class="img-fluid w-50 p-5" src="{{ asset('assets/img/service-orm-1.svg')}}" alt="">
                                    </div>
                                    <div class="text-center py-4">
                                        <h5 class="fw-bold">Improved Productivity</h5>
                                        <p class="mx-3 text-center m-0 my-3">Foster teamwork and innovation, enhancing overall
                                            productivity.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mr-4 wow slideInUp" data-wow-delay="0.2s">
                            <div class="wow slideInUp mx-2" data-wow-delay="0.3s">
                                <div class="ser-feature-card  bg-light overflow-hidden">
                                    <div class="team-img position-relative overflow-hidden d-flex justify-content-center">
                                        <img class="img-fluid w-50 p-5" src="{{ asset('assets/img/service-orm-1.svg')}}" alt="">
                                    </div>
                                    <div class="text-center py-4">
                                        <h5 class="fw-bold">Cost-Effective Solutions</h5>
                                        <p class="mx-3 text-center m-0 my-3"> Reduce operational costs by minimising traditional
                                            meeting and travel expenses.</p>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mr-4 wow slideInUp" data-wow-delay="0.2s">
                            <div class="wow slideInUp mx-2" data-wow-delay="0.3s">
                                <div class="ser-feature-card  bg-light overflow-hidden">
                                    <div class="team-img position-relative overflow-hidden d-flex justify-content-center">
                                        <img class="img-fluid w-50 p-5" src="{{ asset('assets/img/service-orm-1.svg')}}" alt="">
                                    </div>
                                    <div class="text-center py-4">
                                        <h5 class="fw-bold">Future-Proof Technology</h5>
                                        <p class="mx-3 text-center m-0 my-3">  Stay ahead with innovative solutions adaptable to
                                            evolving work dynamics.</p>

                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- <ol class="carousel-indicators">
                            <li data-target="#blogs" data-slide-to="0" class="active"></li>
                            <li data-target="#blogs" data-slide-to="1"></li>
                            <li data-target="#blogs" data-slide-to="2"></li>
                        </ol> --}}
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>


@include('landing.components.service-banner')


<div class="container my-5 ">
    <div class="d-flex flex-column align-items-center justify-content-center py-2 pb-2">
        <h4 class="fw-bold text-primary">FAQ</h4>
    </div>

    <div class="accordion feature-faq feature__feq" id="accordionExample" >
        <div class="card"  >
            <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample" data-target="#collapseOne" aria-expanded="true">
                <h6 class="fw-bold">Can Command & Control Solutions integrate with existing systems?</h6>
                <div class="acoord-btn text-right mr-2">

                </div>
            </div>
            <div id="collapseOne" class="collapse " data-parent="#accordionExample">
                <div class="card-body">
                    <p>Yes, our solutions are designed for seamless integration with various existing
                        systems.
                        </p>
                </div>
            </div>
        </div>

        <div class="card" >
            <div class="card-header collapsed py-3"  data-toggle="collapse" data-parent="#accordionExample" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true">
                <h6 class="fw-bold">How secure is the data transmission within Command & Control Solutions?
                </h6>
                <div class="acoord-btn text-right mr-2">
                    {{-- <a href="{{ route('career.apply')}}" class="rounded-career-btn mr-2 py-2 px-3 bg-dark mx-2">Apply <i class=" fas fa-arrow-right fw-normal"></i></a> --}}
                    {{-- <span  class="accicon"><i class=" fas fa-angle-down rotate-icon"></i></span> --}}
                </div>
            </div>
            <div id="collapseTwo" class="collapse" data-parent="#accordionExample">
                <div class="card-body">
                    <p>Data transmission is highly secure, with robust encryption protocols ensuring
                        protection at all times.
                        </p>
                </div>
            </div>
        </div>
        <div class="card" >
            <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample" data-target="#collapseThree" aria-expanded="true">
                <h6 class="fw-bold">Is Command & Control Solutions scalable for different organisational sizes? </h6>
                <div class="acoord-btn text-right mr-2  pb-3">
                    {{-- <a href="{{ route('career.apply')}}" class="rounded-career-btn mr-2 bg-dark mx-2">Apply <i class=" fas fa-arrow-right fw-normal"></i></a> --}}
                    {{-- <span  class="accicon"><i class=" fas fa-angle-down rotate-icon"></i></span> --}}
                </div>
            </div>
            <div id="collapseThree" class="collapse" data-parent="#accordionExample">
                <div class="card-body">
                    <p>Absolutely, our solutions are scalable and can cater to the needs of organisations of
                        all sizes.
                        </p>
                </div>
            </div>
        </div>
        <div class="card" >
            <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample" data-target="#collapseFour" aria-expanded="true">
                <h6 class="fw-bold">What support services are available for Command & Control Solutions?</h6>
                <div class="acoord-btn text-right mr-2  pb-3">
                    {{-- <a href="{{ route('career.apply')}}" class="rounded-career-btn mr-2 bg-dark mx-2">Apply <i class=" fas fa-arrow-right fw-normal"></i></a> --}}
                    {{-- <span  class="accicon"><i class="  px-3 fas fa-angle-down rotate-icon"></i></span> --}}
                </div>
            </div>
            <div id="collapseFour" class="collapse" data-parent="#accordionExample">
                <div class="card-body">
                    <p>We offer comprehensive support services, including installation assistance and
                        ongoing technical support.
                        </p>
                </div>
            </div>
        </div>
        <div class="card" >
            <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample" data-target="#collapseFive" aria-expanded="true">
                <h6 class="fw-bold">How do Command & Control Solutions facilitate decision-making processes?</h6>
                <div class="acoord-btn text-right mr-2  pb-3">
                    {{-- <a href="{{ route('career.apply')}}" class="rounded-career-btn mr-2 bg-dark mx-2">Apply <i class=" fas fa-arrow-right fw-normal"></i></a> --}}
                    {{-- <span  class="accicon"><i class=" fas fa-angle-down rotate-icon"></i></span> --}}
                </div>
            </div>
            <div id="collapseFive" class="collapse" data-parent="#accordionExample">
                <div class="card-body">
                    <p>Our solutions enable expedited decision-making through real-time data sharing and
                        analysis.</p>
                </div>
            </div>
        </div>

    </div>
</div>


@include('landing.components.get-in-touch')
@endsection
