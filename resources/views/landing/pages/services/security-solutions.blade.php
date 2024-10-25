
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
                    <h1> <span class="text-primary"> {{ ucfirst($data['title'])}} Services</span></h1>
                </div>
                <p class="mb-2 text-justify">In an increasingly digital world, ensuring the security of your business assets is paramount.
                    At Intelli Vectra, we offer a comprehensive suite of Security Services designed to safeguard
                    your organisation against cyber threats and risks. From Device Management and Identity &
                    Access Management to Network Security, Third Party Risk Management, Data Protection &
                    GDPR Compliance, and Quality Assurance & Reporting, our offerings are tailored to fortify
                    your defences and protect your valuable data.</p>

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
        <p class="text-justify">Our comprehensive security services cover device management, identity and access
            management, network security, third-party risk management, data protection, and quality
            assurance. We ensure constant monitoring, regulatory compliance, and robust protection to
            safeguard your digital assets and ensure business continuity.</p>
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
                            <p>We maintain round-the-clock vigilance over devices, networks, and user activities.</p>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 text-center px-4 wow fadeInUp" data-wow-delay="0.7s">
                            <img class="ups-img w-50 py-2" data-wow-delay="0.3s" src="{{ asset('assets/img/service-orm-1.svg')}}" >
                            <h5>Step-2</h5>
                            <p>Our streamlined approach ensures swift and effective provisioning of security
                                measures. </p>
                        </div>

                        <div class="col-lg-3 col-md-3 col-sm-6 text-center px-4 wow fadeInUp" data-wow-delay="0.8s">
                            <img class="ups-img w-50 py-2" data-wow-delay="0.3s" src="{{ asset('assets/img/service-orm-3.svg')}}" >
                            <h5>Step-3</h5>
                            <p>We manage regular updates and patches to keep systems resilient against
                                evolving threats.</p>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 text-center px-4 wow fadeInUp" data-wow-delay="0.9s">
                            <img class="ups-img w-50 py-2" data-wow-delay="0.1s"  src="{{ asset('assets/img/service-orm-2.svg')}}" >
                            <h5 class="">Step-4</h5>
                            <p>Our alerting system enables quick escalation and action in response to security
                                incidents.
                                </p>
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
                    <div class="text-left position-relative pb-3 mb-4 mx-auto">
                        <h4 class="text-left text-primary">Key Features of Our Security Services</h4>
                        <ul>
                            <li><strong>24/7 Monitoring </strong>Constant vigilance over your assets.</li>
                            <li><strong>Efficient Deployment </strong>Swift and seamless provisioning.</li>
                            <li><strong>Comprehensive Protection </strong>Covers device, access, and network security.</li>
                            <li><strong>Regulatory Compliance </strong>Ensures adherence to industry standards.</li>
                            <li><strong>Proactive Response </strong>Rapid escalation and action.</li>
                            <li><strong>Continuous Improvement </strong>Regular updates for ongoing effectiveness.</li>
                        </ul>
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
                                        <h5 class="fw-bold">Enhanced security</h5>
                                        <p class="mx-3 text-center m-0 my-3">Proactive protection against cyber threats.
                                        </p>

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
                                        <h5 class="fw-bold">Increased efficiency</h5>
                                        <p class="mx-3 text-center m-0 my-3">Minimised downtime and optimised resources.</p>

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
                                        <h5 class="fw-bold">Regulatory compliance</h5>
                                        <p class="mx-3 text-center m-0 my-3">Mitigated legal risks and enhanced trust.</p>
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
                                        <h5 class="fw-bold">Cost savings</h5>
                                        <p class="mx-3 text-center m-0 my-3"> Reduced financial losses and reputational damage.
                                        </p>

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
                <h6 class="fw-bold">How often are security alerts monitored?</h6>
                <div class="acoord-btn text-right mr-2">

                </div>
            </div>
            <div id="collapseOne" class="collapse " data-parent="#accordionExample">
                <div class="card-body">
                    <p>Security alerts are monitored 24/7 to ensure immediate response to any potential
                        threats.
                        </p>
                </div>
            </div>
        </div>

        <div class="card" >
            <div class="card-header collapsed py-3"  data-toggle="collapse" data-parent="#accordionExample" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true">
                <h6 class="fw-bold">Will deploying security measures disrupt our operations?</h6>
                <div class="acoord-btn text-right mr-2">
                    {{-- <a href="{{ route('career.apply')}}" class="rounded-career-btn mr-2 py-2 px-3 bg-dark mx-2">Apply <i class=" fas fa-arrow-right fw-normal"></i></a> --}}
                    {{-- <span  class="accicon"><i class=" fas fa-angle-down rotate-icon"></i></span> --}}
                </div>
            </div>
            <div id="collapseTwo" class="collapse" data-parent="#accordionExample">
                <div class="card-body">
                    <p>No, our efficient deployment process minimises disruption to your operations while
                        enhancing security.
                        </p>
                </div>
            </div>
        </div>
        <div class="card" >
            <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample" data-target="#collapseThree" aria-expanded="true">
                <h6 class="fw-bold">How do you ensure compliance with industry regulations? </h6>
                <div class="acoord-btn text-right mr-2  pb-3">
                    {{-- <a href="{{ route('career.apply')}}" class="rounded-career-btn mr-2 bg-dark mx-2">Apply <i class=" fas fa-arrow-right fw-normal"></i></a> --}}
                    {{-- <span  class="accicon"><i class=" fas fa-angle-down rotate-icon"></i></span> --}}
                </div>
            </div>
            <div id="collapseThree" class="collapse" data-parent="#accordionExample">
                <div class="card-body">
                    <p>We have robust processes in place to ensure compliance with industry regulations
                        such as HIPAA, HITECH, and GDPR.
                        </p>
                </div>
            </div>
        </div>
        <div class="card" >
            <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample" data-target="#collapseFour" aria-expanded="true">
                <h6 class="fw-bold">What happens if a security incident occurs?</h6>
                <div class="acoord-btn text-right mr-2  pb-3">
                    {{-- <a href="{{ route('career.apply')}}" class="rounded-career-btn mr-2 bg-dark mx-2">Apply <i class=" fas fa-arrow-right fw-normal"></i></a> --}}
                    {{-- <span  class="accicon"><i class="  px-3 fas fa-angle-down rotate-icon"></i></span> --}}
                </div>
            </div>
            <div id="collapseFour" class="collapse" data-parent="#accordionExample">
                <div class="card-body">
                    <p>In the event of a security incident, our team will promptly escalate and respond to
                        mitigate any potential damages.</p>
                </div>
            </div>
        </div>
        <div class="card" >
            <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample" data-target="#collapseFive" aria-expanded="true">
                <h6 class="fw-bold">How can your services help save costs for our business?
                </h6>
                <div class="acoord-btn text-right mr-2  pb-3">
                    {{-- <a href="{{ route('career.apply')}}" class="rounded-career-btn mr-2 bg-dark mx-2">Apply <i class=" fas fa-arrow-right fw-normal"></i></a> --}}
                    {{-- <span  class="accicon"><i class=" fas fa-angle-down rotate-icon"></i></span> --}}
                </div>
            </div>
            <div id="collapseFive" class="collapse" data-parent="#accordionExample">
                <div class="card-body">
                    <p>By proactively managing risks and minimising security incidents, our services help
                        prevent costly disruptions and reputational damage.</p>
                </div>
            </div>
        </div>

    </div>
</div>


@include('landing.components.get-in-touch')


@endsection
