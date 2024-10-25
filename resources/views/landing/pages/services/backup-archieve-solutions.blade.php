
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
                    <h1> <span class="text-primary"> BackUp & Archive Solutions</span></h1>
                </div>
                <p class="mb-2 text-justify">At Intelli Vectra Technologies, we understand the importance of keeping your data safe and
                    accessible. That's why we offer revolutionary solutions designed to protect, manage, and
                    archive your valuable information. Our goal is to make data management easy, efficient, and
                    cost-effective, so you can focus on what matters most – running your business.</p>

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
        <p class="text-justify">Intelli Vectra Technologies provides a comprehensive suite of data protection tools tailored to
            meet the needs of modern businesses. From backup and archiving to searching and
            analysing data, our solutions are designed to streamline your workflow and enhance
            operational efficiency. Partnering with companies like Disk Archive Corporation, known for
            their 13 years of innovation in enterprise-class archives, ensures that we deliver the highest
            quality products to our customers.
            </p>
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
                            <p>Manage all your data from one easy-to-use platform, whether it's in the cloud or
                                on-premises.</p>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 text-center px-4 wow fadeInUp" data-wow-delay="0.7s">
                            <img class="ups-img w-50 py-2" data-wow-delay="0.3s" src="{{ asset('assets/img/service-orm-1.svg')}}" >
                            <h5>Step-2</h5>
                            <p>Partnering with experts like Disk Archive ensures top-notch security and constant
                                access to your data. </p>
                        </div>

                        <div class="col-lg-3 col-md-3 col-sm-6 text-center px-4 wow fadeInUp" data-wow-delay="0.8s">
                            <img class="ups-img w-50 py-2" data-wow-delay="0.3s" src="{{ asset('assets/img/service-orm-3.svg')}}" >
                            <h5>Step-3</h5>
                            <p>Easily recover from unexpected events while staying compliant with regulations.</p>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 text-center px-4 wow fadeInUp" data-wow-delay="0.9s">
                            <img class="ups-img w-50 py-2" data-wow-delay="0.1s"  src="{{ asset('assets/img/service-orm-2.svg')}}" >
                            <h5 class="">Step-4</h5>
                            <p>Our solutions grow with your data needs, providing high performance without
                                breaking the bank.
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
                    <div class="text-center position-relative pb-3 mb-4 mx-auto">
                        <h4 class="text-left text-primary">Key Features of  Our BackUp & Archive Solutions</h4>
                        <p class="text-justify mb-0">Our backup and archive solution, powered by Commvault® Backup & Recovery, offers a
                            unified interface for seamless data management across diverse environments. Partnering
                            with industry leaders like Disk Archive Corporation guarantees top-notch security and
                            uninterrupted access to your data. With simplified disaster recovery mechanisms and
                            adherence to regulatory standards, we ensure data integrity and compliance. Our scalable
                            solutions adapt to your evolving data needs, delivering high performance without
                            compromising efficiency or cost-effectiveness.

                        </p>
                        <p class="text-justify">By choosing Intelli Vectra Technologies for your data protection needs, you can enjoy a
                            range of benefits, including:
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
                                        {{-- <h5 class="fw-bold">Cost Efficiency</h5> --}}
                                        <p class="mx-3 text-center m-0 my-3">Increased operational efficiency and cost savings
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
                                        {{-- <h5 class="fw-bold">Scalability</h5> --}}
                                        <p class="mx-3 text-center m-0 my-3"> Reduced risk of data loss and downtime.
                                        </p>

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
                                        {{-- <h5 class="fw-bold">Flexibility</h5> --}}
                                        <p class="mx-3 text-center m-0 my-3">Improved service quality and compliance with industry regulations</p>
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
                                        {{-- <h5 class="fw-bold">Security</h5> --}}
                                        <p class="mx-3 text-center m-0 my-3"> Enhanced long-term data preservation for critical information</p>

                                    </div>
                                </div>
                            </div>
                        </div>
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
                <h6 class="fw-bold">What industries do you cater to with your backup and archive solutions?
                </h6>
                <div class="acoord-btn text-right mr-2">

                </div>
            </div>
            <div id="collapseOne" class="collapse " data-parent="#accordionExample">
                <div class="card-body">
                    <p>We serve a diverse range of industries, including broadcast and media companies,
                        content producers, distributors, and film archives.</p>
                </div>
            </div>
        </div>

        <div class="card" >
            <div class="card-header collapsed py-3" data-parent="#accordionExample" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true">
                <h6 class="fw-bold">How does partnering with Disk Archive Corporation benefit your customers?</h6>
                <div class="acoord-btn text-right mr-2">

                </div>
            </div>
            <div id="collapseTwo" class="collapse" data-parent="#accordionExample">
                <div class="card-body">
                    <p>Partnering with Disk Archive Corporation allows us to offer enterprise-class archives
                        with high availability and security, ensuring our customers' data is always protected.</p>
                </div>
            </div>
        </div>
        <div class="card" >
            <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample" data-target="#collapseThree" aria-expanded="true">
                <h6 class="fw-bold">Can your solutions accommodate large data volumes?</h6>
                <div class="acoord-btn text-right mr-2  pb-3">

                </div>
            </div>
            <div id="collapseThree" class="collapse" data-parent="#accordionExample">
                <div class="card-body">
                    <p>Yes, our solutions are designed to handle huge data archiving with low cost and high
                        performance, making them suitable for businesses of all sizes.</p>
                </div>
            </div>
        </div>
        <div class="card" >
            <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample" data-target="#collapseFour" aria-expanded="true">
                <h6 class="fw-bold">How do you ensure compliance with regulatory standards?</h6>
                <div class="acoord-btn text-right mr-2  pb-3">

                </div>
            </div>
            <div id="collapseFour" class="collapse" data-parent="#accordionExample">
                <div class="card-body">
                    <p>Our solutions are designed to meet industry-specific compliance requirements,
                        helping our customers adhere to data protection regulations and standards.</p>
                </div>
            </div>
        </div>
        <div class="card" >
            <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample" data-target="#collapseFive" aria-expanded="true">
                <h6 class="fw-bold">Is your backup and recovery solution easy to use?</h6>
                <div class="acoord-btn text-right mr-2  pb-3">

                </div>
            </div>
            <div id="collapseFive" class="collapse" data-parent="#accordionExample">
                <div class="card-body">
                    <p>Yes, our user-friendly interface and intuitive features make it easy for your team to
                        manage data backups, recoveries, and archives with minimal training.
                        </p>
                </div>
            </div>
        </div>

    </div>
</div>


@include('landing.components.get-in-touch')

@endsection
