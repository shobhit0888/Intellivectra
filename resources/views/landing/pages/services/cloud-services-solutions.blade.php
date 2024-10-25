
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
                    <h1> <span class="text-primary"> Cloud Services And Solution</span></h1>
                </div>
                <p class="mb-2 text-justify">At Intelli Vectra, we offer comprehensive Cloud Services and Solutions tailored to meet the
                    diverse needs of businesses. From consulting and designing to building, optimising, and
                    managing cloud environments, including deployments on AWS and Microsoft Azure, we
                    provide end-to-end cloud solutions to empower your organisation's digital transformation
                    journey.

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
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12" >
                <div class="row">
                    <div class="col-md-2" >
                        <img class="position-absolute wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/service/offering-1.png')}}">
                    </div>
                    <div class="col-md-10" >
                        <h5 class="fw-bold">Consulting</h5>
                        <p class="text-justify">Gain expert insights to leverage cloud computing benefits.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12" >
                <div class="row">
                    <div class="col-md-2 " >
                        <img class="position-absolute wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/service/offering-6.svg')}}">
                    </div>
                    <div class="col-md-10" >
                        <h5 class="fw-bold">Design and Deployment</h5>
                        <p class="text-justify">Customised cloud solutions for any environment.
                        </p>
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
                        <h5 class="fw-bold">Migration and Scaling</h5>
                        <p class="text-justify">Seamless migration and adaptable scaling options.
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
                        <h5 class="fw-bold">Managed Services</h5>
                        <p class="text-justify">Efficient and secure cloud infrastructure management.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="row mt-3">
            <div class="col-lg-6 col-md-6 col-sm-12" >
                <div class="row">
                    <div class="col-md-2" >
                        <img class="position-absolute wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/service/offering-4.svg')}}">
                    </div>
                    <div class="col-md-10" >
                        <h5 class="fw-bold">Organisation Transformation</h5>
                        <p class="text-justify">Driving change with behavioural analytics</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12" >
                <div class="row">
                    <div class="col-md-2 " >
                        <img class="position-absolute wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/service/offering-5.svg')}}">
                    </div>
                    <div class="col-md-10" >
                        <h5 class="fw-bold">On-Demand Consulting</h5>
                        <p class="text-justify">Efficient resource management for project demands.</p>
                    </div>
                </div>
            </div>
        </div> --}}
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
                            <p>We start by understanding your business requirements and objectives to tailor the
                                cloud solution accordingly.</p>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 text-center px-4 wow fadeInUp" data-wow-delay="0.7s">
                            <img class="ups-img w-50 py-2" data-wow-delay="0.3s" src="{{ asset('assets/img/service-orm-1.svg')}}" >
                            <h5>Step-2</h5>
                            <p>Our experts design and deploy the cloud infrastructure, ensuring scalability,
                                reliability, and security. </p>
                        </div>

                        <div class="col-lg-3 col-md-3 col-sm-6 text-center px-4 wow fadeInUp" data-wow-delay="0.8s">
                            <img class="ups-img w-50 py-2" data-wow-delay="0.3s" src="{{ asset('assets/img/service-orm-3.svg')}}" >
                            <h5>Step-3</h5>
                            <p>We assist in migrating your applications to the cloud and provide scaling options
                                for flexible resource allocation</p>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 text-center px-4 wow fadeInUp" data-wow-delay="0.9s">
                            <img class="ups-img w-50 py-2" data-wow-delay="0.1s"  src="{{ asset('assets/img/service-orm-2.svg')}}" >
                            <h5 class="">Step-4</h5>
                            <p>Our team manages and monitors your cloud environment, ensuring optimal
                                performance and security.</p>
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
                        <h4 class="text-left text-primary">Key Features of  Our Cloud Services and Solution</h4>
                        <p class="text-justify mb-0">Key features include end-to-end cloud services, ensuring flexibility, scalability, and robust
                            security. Our managed cloud services relieve you of infrastructure management, enabling
                            you to focus on core business activities.
                        </p>
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
                                        <h5 class="fw-bold">Cost Efficiency</h5>
                                        <p class="mx-3 text-center m-0 my-3">Reduce expenses linked to infrastructure maintenance by
                                            leveraging managed cloud services.
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
                                        <h5 class="fw-bold">Scalability</h5>
                                        <p class="mx-3 text-center m-0 my-3"> Easily adjust resource allocation without requiring substantial upfront
                                            investment.</p>

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
                                        <h5 class="fw-bold">Flexibility</h5>
                                        <p class="mx-3 text-center m-0 my-3">: Select the most suitable cloud platform and deployment model tailored to
                                            your business needs.</p>
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
                                        <h5 class="fw-bold">Security</h5>
                                        <p class="mx-3 text-center m-0 my-3"> Safeguard your data and applications with comprehensive cloud security
                                            measures.
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
                                        <h5 class="fw-bold">Efficiency</h5>
                                        <p class="mx-3 text-center m-0 my-3">  Enhance operational efficiency through streamlined processes and
                                            expertly managed cloud services.</p>

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
        <div class="card">
            <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample" data-target="#collapseOne" aria-expanded="true">
                <h6 class="fw-bold">What types of cloud environments do you support?</h6>
                <div class="acoord-btn text-right mr-2">

                </div>
            </div>
            <div id="collapseOne" class="collapse " data-parent="#accordionExample">
                <div class="card-body">
                    <p>We support public, private, and hybrid cloud environments, catering to diverse
                        business needs.</p>
                </div>
            </div>
        </div>

        <div class="card" >
            <div class="card-header collapsed py-3" data-parent="#accordionExample" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true">
                <h6 class="fw-bold">How do you ensure the security of cloud infrastructure?
                </h6>
                <div class="acoord-btn text-right mr-2">

                </div>
            </div>
            <div id="collapseTwo" class="collapse" data-parent="#accordionExample">
                <div class="card-body">
                    <p>We implement industry-leading security measures and adhere to best practices to
                        ensure the security of your data and applications in the cloud.
                        </p>
                </div>
            </div>
        </div>
        <div class="card" >
            <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample" data-target="#collapseThree" aria-expanded="true">
                <h6 class="fw-bold">Can you assist with migrating existing applications to the cloud?
                </h6>
                <div class="acoord-btn text-right mr-2  pb-3">

                </div>
            </div>
            <div id="collapseThree" class="collapse" data-parent="#accordionExample">
                <div class="card-body">
                    <p>Yes, we offer migration services to seamlessly transition your applications to the
                        cloud while minimising disruptions.</p>
                </div>
            </div>
        </div>
        <div class="card" >
            <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample" data-target="#collapseFour" aria-expanded="true">
                <h6 class="fw-bold">What level of control do I have over my cloud infrastructure?
                     </h6>
                <div class="acoord-btn text-right mr-2  pb-3">

                </div>
            </div>
            <div id="collapseFour" class="collapse" data-parent="#accordionExample">
                <div class="card-body">
                    <p>You have full control over your cloud infrastructure, with options to scale resources
                        and manage configurations according to your requirements.</p>
                </div>
            </div>
        </div>
        <div class="card" >
            <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample" data-target="#collapseFive" aria-expanded="true">
                <h6 class="fw-bold">How do you handle data backups and disaster recovery in the cloud?</h6>
                <div class="acoord-btn text-right mr-2  pb-3">

                </div>
            </div>
            <div id="collapseFive" class="collapse" data-parent="#accordionExample">
                <div class="card-body">
                    <p>We implement robust backup and disaster recovery strategies to ensure the integrity
                        and availability of your data in the cloud, minimizing the risk of data loss or downtime.</p>
                </div>
            </div>
        </div>

    </div>
</div>


@include('landing.components.get-in-touch')
@endsection
