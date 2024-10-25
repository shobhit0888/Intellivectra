
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
                    <h1> <span class="text-primary"> Surveillance Solution</span></h1>
                </div>
                <p class="mb-2 text-justify">At Intelli Vectra Technologies, we cater to forward-thinking facility managers who seek
                    advanced surveillance solutions beyond traditional methods. Our innovative approach goes
                    beyond a static video wall, providing dynamic capabilities to track individuals, establish
                    pursuit pathways, measure occupancy, and monitor workplace health and safety.
                    </p>

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
        <p class="text-justify">We offer surveillance solutions that utilise cutting-edge technology, including CCTV
            integration and IoT-based devices. These solutions are designed to enhance security
            measures and provide actionable insights for efficient facility management.</p>
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
                            <p>Our surveillance devices are seamlessly integrated into your existing
                                infrastructure.
                                </p>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 text-center px-4 wow fadeInUp" data-wow-delay="0.7s">
                            <img class="ups-img w-50 py-2" data-wow-delay="0.3s" src="{{ asset('assets/img/service-orm-1.svg')}}" >
                            <h5>Step-2</h5>
                            <p>Utilising sensors and computer vision, these devices detect activity in real-time </p>
                        </div>

                        <div class="col-lg-3 col-md-3 col-sm-6 text-center px-4 wow fadeInUp" data-wow-delay="0.8s">
                            <img class="ups-img w-50 py-2" data-wow-delay="0.3s" src="{{ asset('assets/img/service-orm-3.svg')}}" >
                            <h5>Step-3</h5>
                            <p>Upon detecting an anomaly, alerts are immediately sent to our monitoring centre.</p>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 text-center px-4 wow fadeInUp" data-wow-delay="0.9s">
                            <img class="ups-img w-50 py-2" data-wow-delay="0.1s"  src="{{ asset('assets/img/service-orm-2.svg')}}" >
                            <h5 class="">Step-4</h5>
                            <p>This allows for swift response and intervention by our trained personnel.</p>
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
                        <h4 class="text-left text-primary">Key Features of IoT-Based Surveillance Solutions</h4>
                        <p class="text-justify mb-0">Surveillance Solutions are transitioning to IoT-based infrastructure from traditional NVR
                            setups. This shift brings advanced features like seamless IoT integration, increased
                            scalability, and real-time insights, revolutionising security and operations management.
                            </p>
                        <p class="text-justify">At Intelli Vectra Technologies, we're committed to staying at the forefront of innovation in the
                            field of surveillance technology. Our team of experts is constantly researching and
                            developing new ways to enhance the capabilities of our surveillance solutions</p>
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
                                        <h5 class="fw-bold">Enhanced Security</h5>
                                        <p class="mx-3 text-center m-0 my-3">Our system offers proactive surveillance, identifying potential
                                            threats and enabling quick response.</p>

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
                                        <h5 class="fw-bold">Improved Efficiency</h5>
                                        <p class="mx-3 text-center m-0 my-3"> By automating surveillance tasks, facility managers can focus
                                            on strategic decision-making rather than manual monitoring.</p>

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
                                        <h5 class="fw-bold">Enhanced Safety</h5>
                                        <p class="mx-3 text-center m-0 my-3">Monitoring workplace health and safety ensures compliance with
                                            regulations and promotes a secure environment for employees.
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
                                        <h5 class="fw-bold">Customizable Solutions</h5>
                                        <p class="mx-3 text-center m-0 my-3">Tailor-made surveillance systems to suit your facility's
                                            unique requirements.</p>

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
                                        <p class="mx-3 text-center m-0 my-3"> Embrace IoT-based solutions for scalability and
                                            adaptability to future needs.
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

    <div class="accordion feature-faq" id="accordionExample" >
        <div class="card"  >
            <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample" data-target="#collapseOne" aria-expanded="true">
                <h6 class="fw-bold">How does the surveillance system differ from traditional CCTV?</h6>
                <div class="acoord-btn text-right mr-2">

                </div>
            </div>
            <div id="collapseOne" class="collapse " data-parent="#accordionExample">
                <div class="card-body">
                    <p>Our surveillance system utilises advanced sensors and computer vision technology
                        for real-time activity detection, proactive alerts, and automated monitoring, enhancing
                        security beyond static video footage.</p>
                </div>
            </div>
        </div>

        <div class="card" >
            <div class="card-header collapsed py-3" data-parent="#accordionExample" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true">
                <h6 class="fw-bold">Can the system be customised to fit specific facility requirements?</h6>
                <div class="acoord-btn text-right mr-2">

                </div>
            </div>
            <div id="collapseTwo" class="collapse" data-parent="#accordionExample">
                <div class="card-body">
                    <p>Yes, our surveillance solutions are highly customizable to meet unique facility needs,
                        including adjusting detection parameters, integrating with existing infrastructure, and
                        implementing specific features.
                        </p>
                </div>
            </div>
        </div>
        <div class="card" >
            <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample" data-target="#collapseThree" aria-expanded="true">
                <h6 class="fw-bold">How secure is the data collected by the surveillance system?</h6>
                <div class="acoord-btn text-right mr-2  pb-3">

                </div>
            </div>
            <div id="collapseThree" class="collapse" data-parent="#accordionExample">
                <div class="card-body">
                    <p>Data security is paramount; we employ robust encryption protocols, industry best
                        practices, secure storage options, and access controls to safeguard collected data.
                        </p>
                </div>
            </div>
        </div>
        <div class="card" >
            <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample" data-target="#collapseFour" aria-expanded="true">
                <h6 class="fw-bold">What type of support and maintenance do you offer for the surveillance
                    system?</h6>
                <div class="acoord-btn text-right mr-2  pb-3">

                </div>
            </div>
            <div id="collapseFour" class="collapse" data-parent="#accordionExample">
                <div class="card-body">
                    <p>We provide comprehensive support, including regular updates, troubleshooting, and
                        proactive monitoring, ensuring optimal system performance and minimal downtime.</p>
                </div>
            </div>
        </div>
        <div class="card" >
            <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample" data-target="#collapseFive" aria-expanded="true">
                <h6 class="fw-bold">Are there any privacy concerns associated with surveillance?
                </h6>
                <div class="acoord-btn text-right mr-2  pb-3">

                </div>
            </div>
            <div id="collapseFive" class="collapse" data-parent="#accordionExample">
                <div class="card-body">
                    <p>Privacy is addressed through anonymization, access controls, transparency in data
                        collection, and compliance with privacy regulations, ensuring privacy protection and
                        legal compliance.
                        </p>
                </div>
            </div>
        </div>

    </div>
</div>


@include('landing.components.get-in-touch')

@endsection
