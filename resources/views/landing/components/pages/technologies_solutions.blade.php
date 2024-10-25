@extends('landing.layouts.base')
@section('contents')
@php
$fragment = request()->query('fragment', 'pills-home');
@endphp

<div class='navigationPane2' style="position: absolute; top: 380px !important;">
  <ul class="nav flex-nowrap widthFitContent  mx-auto nav-pills align-items-center justify-content-center" id="pills-tab" role="tablist">

    <li class="nav-item" role="presentation" style="width: 280px">
      <span class="nav-link @if($fragment == 'pills-home') active @endif text-white py-1 px-4" id="pills-home-tab2" data-bs-toggle="pill" data-bs-target="#pills-home" type="buttn" role="tab" aria-controls="pills-home" aria-selected="true">IT
        Infrastructure Platform</span>
    </li IT Services>
    <li class="nav-item" role="presentation" style="width: 150px">
      <span class="nav-link @if($fragment == 'pills-profile') active @endif  text-white py-1 px-4" id="pills-profile-tab2" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">IT
        Security

      </span>
    </li>
    <li class="nav-item" role="presentation" style="width: 180px">
      <span class="nav-link @if($fragment == 'pills-contact') active @endif text-white py-1 px-4" id="pills-contact-tab2" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Cloud Solutions</span>
    </li>

    <li class="nav-item" role="presentation" style="width: 350px">
      <span class="nav-link @if($fragment == 'pills-home2') active @endif text-white py-1 px-4" id="pills-home2-tab2" data-bs-toggle="pill" data-bs-target="#pills-home2" type="buttn" role="tab" aria-controls="pills-home2" aria-selected="true">Consulting
        & Digital Transformation</span>
    </li IT Services>
    <li class="nav-item" role="presentation" style="width: 365px">
      <span class="nav-link @if($fragment == 'pills-profile2') active @endif  text-white py-1 px-4" id="pills-profile2-tab2" data-bs-toggle="pill" data-bs-target="#pills-profile2" type="button" role="tab" aria-controls="pills-profile2" aria-selected="false">Enterprise Application Modernization

      </span>
    </li>
    <li class="nav-item" role="presentation" style="width: 365px">
      <span class="nav-link @if($fragment == 'pills-contact2') active @endif text-white py-1 px-4" id="pills-contact2-tab2" data-bs-toggle="pill" data-bs-target="#pills-contact2" type="button" role="tab" aria-controls="pills-contact2" aria-selected="false">Collaboration & Digital Workplace</span>
    </li>

  </ul>
</div>

<div class="tab-content" id="pills-tabContent">

  <div class="tab-pane fade @if($fragment == 'pills-home') show active @endif" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab2" tabindex="0">

    <div class="carousel-inne">
      <div class="bannerImage">
        <img class="w-100 hFull" src="{{ asset('assets/img/service/big-data-processing.jpg')}}" alt="Image">
        <div class="w-100 posAbs d-flex flex-column align-items-center justify-content-center">
          <div class="container">
            <div class="p-3 text-left">
              <p class='text-white text-center serviceBannerText'>IT Infrastructure
                <span class='txtYellow'> Platform Solutions</span>
              </p>
              <p class='text-center text-white'></p>
            </div>
          </div>
        </div>

      </div>
    </div>


    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
      <div class="container">
        <div class="row g-5">
          <div class="col-lg-6 col-md-6 col-sm-12 pt-3">
            <div class="img-content">
              <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/service/it infrastructure platform solutions.png')}}">
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="position-relative pb-3">
              <h1 style="color:black;">IT Infrastructure <span class="text-primary">Platform</span></h1>
            </div>
            <p class="mb-2 text-justify">At IVT, as a part of our technology offerings and solutions related to IT Infrastructure platform, we work on a comprehensive range of technologies to help business gateway of robust, scalable, and secure digital infrastructure. Our platform offers seamless integration, advanced security features, and unparalleled reliability to support your business objectives. With us, you can focus on innovation and growth, knowing that your technology foundation is in capable hands.
            </p>

            {{-- <a href="{{ route('about')}}" class="btn btn-dark rounded-pill py-3 px-5 mt-3 wow zoomIn"
            data-wow-delay="0.9s">Know More <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8" />
            </svg></a> --}}
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid bg-primary wow fadeInUp" data-wow-delay="0.2s">
      <div class="container offerings">
        <div class="text-center position-relative pb-3 mb-4 mx-auto">
          <h1 style="color:black;">Our <span class="text-primary"> Offerings</span></h1>
          <!-- <p>At IVT, Our comprehensive suite is designed to elevate your digital infrastructure. We provide scalable, secure, and integrated solutions tailored to your business needs. With our expertise, focus on innovation, and commitment to reliability, we empower you to drive success in the digital era. -->
          </p>
        </div>
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="row">
              <div class="col-md-2">
                <img class=" wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/service/Hyper Converged Infrastructure Solutions.png')}}">
              </div>
              <div class="col-md-10">
                <h5 class="fw-bold">Hyper Converged Infrastructure Solutions</h5>
                <p class="text-justify">We provide a Hyper converged infrastructure (HCI) is a combination of servers and storage into a distributed infrastructure platform with intelligent software to create flexible building blocks that replace legacy infrastructure consisting of separate servers, storage networks, and storage arrays with enhancing competitiveness and performance.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="row">
              <div class="col-md-2 ">
                <img class=" wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/service/Enterprise Management System Solutions.png')}}">
              </div>
              <div class="col-md-10">
                <h5 class="fw-bold">Enterprise Management System Solutions</h5>
                <p class="text-justify">We offer an Enterprise Management System that supports complex IT infrastructures without needing many hands from IT professionals. The system is easy to use because it comes in one package. It is an ideal tool that helps organizations streamline operations, leading to enhanced collaboration and efficiency and cost reduction.
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="row">
              <div class="col-md-2">
                <img class=" wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/service/Storage Solutions.png')}}">
              </div>
              <div class="col-md-10">
                <h5 class="fw-bold">Storage Solutions</h5>
                <p class="text-justify"> It is like a subset of IT infrastructure that encompasses storage disks and arrays, networking to connect storage hardware to the larger IT infrastructure, and the software that enables storage administrators to manage storage and data intelligence solutions with AI advantage.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="row">
              <div class="col-md-2 ">
                <img class=" wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/service/Network Automation Solutions.png')}}">
              </div>
              <div class="col-md-10">
                <h5 class="fw-bold">Network Automation Solutions</h5>
                <p class="text-justify">Our Network Infrastructure Automation solutions automates tasks, minimizes errors, and enhances network flexibility. With advanced orchestration and seamless integration, we empower businesses to optimize operations and embrace digital transformation effortlessly.
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="row">
              <div class="col-md-2">
                <img class=" wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/service/Database Solutions.png')}}">
              </div>
              <div class="col-md-10">
                <h5 class="fw-bold">Database Solutions</h5>
                <p class="text-justify">Our solution offers robust database capabilities, ensuring reliability, security, and scalability for your business-critical information. With streamlined operations and comprehensive support, we empower organizations to harness the full potential of their data assets and drive innovation.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="row">
              <div class="col-md-2 ">
                <img class=" wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/service/Mobility Services.png')}}">
              </div>
              <div class="col-md-10">
                <h5 class="fw-bold">Virtualization</h5>
                <p class="text-justify">We offer virtualization solutions that enable you to optimize resource utilization, improve agility, and reduce costs. Our virtualization services cover server virtualization, desktop virtualization, and network virtualization. By virtualizing your IT infrastructure, you can achieve greater efficiency and responsiveness while streamlining management and maintenance tasks.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>



    <div class="container-fluid py-4 bg-primary wow fadeInUp" data-wow-delay="0.4s">
      <div class="container">
        <div class="text-center position-relative pb-3 mx-auto">
          <h1 style="color:black">Our <span class="text-primary">Process</span></h1>
          <!-- <p>At IVT, Our process begins by understanding business unique needs, then tailor our solutions to fit seamlessly into your existing infrastructure. Through meticulous planning, implementation, and ongoing support, we ensure smooth integration and optimal performance. Our goal is to provide you with a robust, reliable, and scalable IT foundation, allowing you to focus on your core business objectives.

          </p> -->
        </div>

        <div class="row g-3">
          <div class="col-lg-4 col-md-6 mt-3">
            <div class="card p-4" style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px">
              <img src="{{ asset('assets/img/service/cloud-trans-process/Assessment and Consultation.png')}}" class="card-img-top m-auto w-100 rounded-3  p-1 my-3" alt="azur-image" style="max-width: 70px" />
              <div class="card-body">
                <h5 class="card-title text-center fw-bold fs-5">
                  Assessment and Consultation
                </h5>
                <p class="card-text">
                  We begin by thoroughly assessing your existing infrastructure and understanding your unique requirements. This includes evaluating your current IT setup, business goals, and budgetary considerations.
                </p>

              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-3">
            <div class="card p-4" style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px">
              <img src="{{ asset('assets/img/service/cloud-trans-process/Customized Solution Design.png')}}" class="card-img-top m-auto w-100 rounded-3  p-1 my-3" alt="azur-image" style="max-width: 70px" />
              <div class="card-body">
                <h5 class="card-title text-center fw-bold fs-5">
                  Customized Solution Design
                </h5>
                <p class="card-text">
                  Leveraging our expertise in Hyper-Converged Infrastructure (HCI), Enterprise Management Systems, Storage, Network Automation, and Database Solutions, we design a tailored solution that aligns perfectly with your organization's objectives.
                </p>

              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-3">
            <div class="card p-4" style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px">
              <img src="{{ asset('assets/img/service/cloud-trans-process/Implementation and Integration.png')}}" class="card-img-top m-auto w-100 rounded-3 p-1 my-3" alt="azur-image" style="max-width: 70px" />
              <div class="card-body">
                <h5 class="card-title text-center fw-bold fs-5">
                  Implementation and Integration
                </h5>
                <p class="card-text">
                  Our experienced team handles the seamless implementation of your chosen solutions, ensuring minimal disruption to your operations. From deploying HCI clusters to setting up enterprise-grade storage systems, we take care of every detail.
                </p>

              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-3">
            <div class="card p-4" style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px">
              <img src="{{ asset('assets/img/service/cloud-trans-process/Optimization and Performance Tuning.png')}}" class="card-img-top m-auto w-100 rounded-3  p-1 my-3" alt="azur-image" style="max-width: 70px" />
              <div class="card-body">
                <h5 class="card-title text-center fw-bold fs-5">
                  Optimization and Performance Tuning
                </h5>
                <p class="card-text">
                  Once deployed, we meticulously fine-tune your infrastructure to maximize performance and efficiency. This includes optimizing network configurations, tuning database settings, and fine-tuning storage arrays for optimal output.
                </p>

              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-3">
            <div class="card p-4" style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px">
              <img src="{{ asset('assets/img/service/cloud-trans-process/Ongoing Support and Maintenance.png')}}" class="card-img-top m-auto w-100 rounded-3  p-1 my-3" alt="azur-image" style="max-width: 70px" />
              <div class="card-body">
                <h5 class="card-title text-center fw-bold fs-5">
                  Ongoing Support and Maintenance
                </h5>
                <p class="card-text">
                  Our commitment doesn't end with deployment. We offer continuous support and proactive maintenance services to keep your infrastructure running smoothly. This includes monitoring system health, applying updates, and providing timely assistance whenever needed.
                </p>

              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-3">
            <div class="card p-4" style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px">
              <img src="{{ asset('assets/img/service/Strategy Development.png')}}" class="card-img-top m-auto w-100 rounded-3  p-1 my-3" alt="azur-image" style="max-width: 70px" />
              <div class="card-body">
                <h5 class="card-title text-center fw-bold fs-5">
                Continuous Improvement and Innovation
                </h5>
                <p class="card-text">
                At IVT, continuous improvement and innovation are integral. We actively research emerging technologies, foster collaboration, and refine our processes to deliver cutting-edge IT infrastructure solutions. Our commitment ensures clients stay ahead in a rapidly evolving digital landscape.
                </p>

              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
    <div class="col-lg-12 my-5 mb-5 p-0" style="min-height: 600px">
          <div class="row mb-5">
            <div class="col-lg-4 col-md-4 col-sm-12">
              <div class="container-fluid py-4 bg-primary wow fadeInUp bg-primary ml-0 ml-md-5" data-wow-delay="0.4s">
                <div class="container">
                  <div class="text-left position-relative pb-3 mb-4 mx-auto">
                    <h4 class="text-left">Key Features of <span class="text-primary">IT Infrastructure Platform Solutions</span></h4>

                    <ul>
                      <li>Scalability</li>
                      <li>High Availability and Fault Tolerance</li>
                      <li>Security</li>
                      <li>Automation and Orchestration</li>
                      <li>Flexibility and Compatibility</li>
                      <li>Performance Optimization</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-12">
              <div class="service-feature bg h300">
                <div class="row g-5">
                  <div id="service-feature" class="px-5 owl-carousel service-feature-carousel">
                    <div class="mr-4 wow slideInUp" data-wow-delay="0.1s">
                      <div class=" wow slideInUp mx-2 " data-wow-delay="0.3s">
                        <div class="ser-feature-card bg-light overflow-hidden">
                          <div class="team-img position-relative overflow-hidden d-flex justify-content-center">
                            <img class="img-fluid w-50 h-50 p-5" src="{{ asset('assets/img/easy.png')}}" alt="">
                          </div>
                          <div class="text-center py-4">
                            <h5 class="fw-bold">Scalability</h5>
                            <p class="mx-3 text-center m-0 my-3"> Scalability allows systems to handle growing workloads. It includes horizontal, vertical and auto scaling.</p>

                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="mr-4 wow slideInUp" data-wow-delay="0.2s">
                      <div class="wow slideInUp mx-2" data-wow-delay="0.3s">
                        <div class="ser-feature-card  bg-light overflow-hidden">
                          <div class="team-img position-relative overflow-hidden d-flex justify-content-center">
                            <img class="img-fluid w-50 p-5" src="{{ asset('assets/img/effi.png')}}" alt="">
                          </div>
                          <div class="text-center py-4">
                            <h5 class="fw-bold">High Availability and Fault Tolerance</h5>
                            <p class="mx-3 text-center m-0 my-3">High Availability and Fault Tolerance ensures continuous operation by minimizing downtime.</p>

                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="mr-4 wow slideInUp" data-wow-delay="0.3s">
                      <div class="wow slideInUp mx-2" data-wow-delay="0.3s">
                        <div class="ser-feature-card  bg-light overflow-hidden">
                          <div class="team-img position-relative overflow-hidden d-flex justify-content-center">
                            <img class="img-fluid w-50 p-5" src="{{ asset('assets/img/ceff.png')}}" alt="">
                          </div>
                          <div class="text-center py-4">
                            <h5 class="fw-bold">Security</h5>
                            <p class="mx-3 text-center m-0 my-3">Security safeguardes data and prevents unauthorized access by encryption, firewalls,etc.
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="mr-4 wow slideInUp" data-wow-delay="0.3s">
                      <div class="wow slideInUp mx-2" data-wow-delay="0.3s">
                        <div class="ser-feature-card  bg-light overflow-hidden">
                          <div class="team-img position-relative overflow-hidden d-flex justify-content-center">
                            <img class="img-fluid w-50 p-5" src="{{ asset('assets/img/service/offering-1.svg')}}" alt="">
                          </div>
                          <div class="text-center py-4">
                            <h5 class="fw-bold">Flexibility and Compatibility</h5>
                            <p class="mx-3 text-center m-0 my-3">Flexibility and Compatibility enables seamless integration and adaptability to diverse environments.
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="mr-4 wow slideInUp" data-wow-delay="0.3s">
                      <div class="wow slideInUp mx-2" data-wow-delay="0.3s">
                        <div class="ser-feature-card  bg-light overflow-hidden">
                          <div class="team-img position-relative overflow-hidden d-flex justify-content-center">
                            <img class="img-fluid w-50 p-5" src="{{ asset('assets/img/service/offering-2.svg')}}" alt="">
                          </div>
                          <div class="text-center py-4">
                            <h5 class="fw-bold">Performance Optimization</h5>
                            <p class="mx-3 text-center m-0 my-3">Performance Optimization ensures efficient resource utilization and responsiveness.
                            </p>
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

    <div class="container my-5">
      <p class="fs-1 text-center" style="font-size:35px;">
        <b>Benefits of <span style="color:#F19F1F;"> IT Infrastructure Platform
          </span></b>
      </p>
      <div class="row g-5 mt-5 py-12">
        <div class="col-lg-4 col-md-6 mt-4">
          <div class="card p-5" style="background-color: #ECECEC">
            <div class="card-image" style="background-color: #F19F1F">
              <img src="{{ asset('assets/img/Consultation and Support for Cloud Services.png')}}" class="card-img-top m-auto w-100 rounded-3 py-4 px-3 my-1" alt="azur-image" style="max-width: 80px" />
              <div class="triangle-up"></div>
            </div>
            <div class="card-body">
              <h5 class="card-title fw-bold fs-3 mt-3">
                Simplified Management
              </h5>
              <p class="card-text fs-6">
                Integration of various components into a unified platform streamlines management tasks, reducing complexity and administrative overhead.
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-4">
          <div class="card p-5 text-light" style="background-color: #F19F1F">
            <div class="card-image" style="background-color: #ECECEC">
              <img src="{{ asset('assets/img/Continuous Support and Optimization.png')}}" class="card-img-top m-auto w-100 rounded-3 py-4 px-3 my-1" alt="azur-image" style="max-width: 80px" />
              <div class="triangle-up"></div>
            </div>
            <div class="card-body">
              <h5 class="card-title fw-bold fs-3 mt-3">
                Enhanced Performance
              </h5>
              <p class="card-text fs-6">
                High-performance components and optimized configurations deliver superior performance, ensuring fast and responsive access to applications and data.
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-4">
          <div class="card p-5" style="background-color: #ECECEC">
            <div class="card-image" style="background-color: #F19F1F">
              <img src="{{ asset('assets/img/image 5.png')}}" class="card-img-top m-auto w-100 rounded-3 py-4 px-3 my-1" alt="azur-image" style="max-width: 80px" />
              <div class="triangle-up"></div>
            </div>
            <div class="card-body">
              <h5 class="card-title fw-bold fs-3 mt-3">
                Agility and Flexibility
              </h5>
              <p class="card-text fs-6">
                Automated provisioning and deployment enable rapid adaptation to changing business needs, empowering organizations to innovate and respond quickly to market dynamics.
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-4">
          <div class="card text-light p-5" style="background-color: #F19F1F">
            <div class="card-image" style="background-color: #ECECEC">
              <img src="{{ asset('assets/img/Comprehensive IT Security Offerings.png')}}" class="card-img-top m-auto w-100 rounded-3 py-4 px-3 my-1" alt="azur-image" style="max-width: 80px" />
              <div class="triangle-up"></div>
            </div>
            <div class="card-body">
              <h5 class="card-title fw-bold fs-3 mt-3">
                Comprehensive Security
              </h5>
              <p class="card-text fs-6">
                Robust security features such as encryption, access controls, and threat detection safeguard data and infrastructure against cyber threats, ensuring compliance with regulatory requirements.
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-4">
          <div class="card p-5" style="background-color: #ECECEC">
            <div class="card-image" style="background-color: #F19F1F">
              <img src="{{ asset('assets/img/image 5.png')}}" class="card-img-top m-auto w-100 rounded-3 py-4 px-3 my-1" alt="azur-image" style="max-width: 80px" />
              <div class="triangle-up"></div>
            </div>
            <div class="card-body">
              <h5 class="card-title fw-bold fs-3 mt-3">
                Competitive Advantage
              </h5>
              <p class="card-text fs-6">
                Gain a competitive edge in your industry with strategic insights and innovative solutions.
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-4">
          <div class="card text-light p-5" style="background-color: #F19F1F">
            <div class="card-image" style="background-color: #ECECEC">
              <img src="{{ asset('assets/img/Optimization and Governance.png')}}" class="card-img-top m-auto w-100 rounded-3 py-4 px-3 my-1" alt="azur-image" style="max-width: 80px" />
              <div class="triangle-up"></div>
            </div>
            <div class="card-body">
              <h5 class="card-title fw-bold fs-3 mt-3">
                Business Continuity
              </h5>
              <p class="card-text fs-6">
                Advanced data protection and disaster recovery capabilities ensure business continuity by minimizing data loss and downtime in the event of disasters or disruptions.
              </p>
            </div>
          </div>
        </div>

      </div>
    </div>

    {{--@include('landing.components.service-banner')--}}


    <div class="container my-5 ">
      <div class="d-flex flex-column align-items-center justify-content-center py-2 pb-2">
        <h4 class="fw-bold text-primary">FAQ</h4>
      </div>

      <div class="accordion feature-faq feature__feq" id="accordionExample">
        <div class="card">
          <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample" data-target="#collapseOne" aria-expanded="true">
            <h6 class="fw-bold">What is an IT Infrastructure Platform Solution?
            </h6>
            <div class="acoord-btn text-right mr-2">

            </div>
          </div>
          <div id="collapseOne" class="collapse " data-parent="#accordionExample">
            <div class="card-body">
              <p>An IT Infrastructure Platform Solution is a comprehensive suite of technologies and services designed to provide organizations with the necessary infrastructure to support their IT operations. It includes components such as servers, storage, networking, virtualization, and management tools.</p>
            </div>
          </div>
        </div>

        <div class="card">
          <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true">
            <h6 class="fw-bold">What components are typically included in an IT Infrastructure Platform Solution?</h6>
            <div class="acoord-btn text-right mr-2">
              {{-- <a href="{{ route('career.apply')}}" class="rounded-career-btn mr-2 py-2 px-3 bg-dark mx-2">Apply <i class=" fas fa-arrow-right fw-normal"></i></a> --}}
              {{-- <span  class="accicon"><i class=" fas fa-angle-down rotate-icon"></i></span> --}}
            </div>
          </div>
          <div id="collapseTwo" class="collapse" data-parent="#accordionExample">
            <div class="card-body">
              <p>Components of an IT Infrastructure Platform Solution may include Hyper-Converged Infrastructure (HCI), Enterprise Management Systems, Storage Solutions, Network Automation Solutions, Database Solutions, and more. These components work together to provide a robust and integrated infrastructure environment.
              </p>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample" data-target="#collapseThree" aria-expanded="true">
            <h6 class="fw-bold">What factors should I consider when choosing an IT Infrastructure Platform Solution for my organization?
               </h6>
            <div class="acoord-btn text-right mr-2  pb-3">
              {{-- <a href="{{ route('career.apply')}}" class="rounded-career-btn mr-2 bg-dark mx-2">Apply <i class=" fas fa-arrow-right fw-normal"></i></a> --}}
              {{-- <span  class="accicon"><i class=" fas fa-angle-down rotate-icon"></i></span> --}}
            </div>
          </div>
          <div id="collapseThree" class="collapse" data-parent="#accordionExample">
            <div class="card-body">
              <p>When choosing an IT Infrastructure Platform Solution, it's essential to consider factors such as scalability, reliability, security, performance, ease of management, vendor support, and compatibility with existing systems and applications. It's also important to align the solution with your organization's specific business goals and requirements.</p>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample" data-target="#collapseFour" aria-expanded="true">
            <h6 class="fw-bold">How can an IT Infrastructure Platform Solution help my organization stay competitive?</h6>
            <div class="acoord-btn text-right mr-2  pb-3">
              {{-- <a href="{{ route('career.apply')}}" class="rounded-career-btn mr-2 bg-dark mx-2">Apply <i class=" fas fa-arrow-right fw-normal"></i></a> --}}
              {{-- <span  class="accicon"><i class="  px-3 fas fa-angle-down rotate-icon"></i></span> --}}
            </div>
          </div>
          <div id="collapseFour" class="collapse" data-parent="#accordionExample">
            <div class="card-body">
              <p>By providing a scalable, reliable, and secure IT infrastructure, an IT Infrastructure Platform Solution enables organizations to innovate, respond quickly to market changes, and deliver high-quality services to customers. It also helps organizations optimize resource utilization and reduce operational costs.</p>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample" data-target="#collapseFive" aria-expanded="true">
            <h6 class="fw-bold">What are the benefits of implementing an IT Infrastructure Platform Solution?</h6>
            <div class="acoord-btn text-right mr-2  pb-3">
              {{-- <a href="{{ route('career.apply')}}" class="rounded-career-btn mr-2 bg-dark mx-2">Apply <i class=" fas fa-arrow-right fw-normal"></i></a> --}}
              {{-- <span  class="accicon"><i class=" fas fa-angle-down rotate-icon"></i></span> --}}
            </div>
          </div>
          <div id="collapseFive" class="collapse" data-parent="#accordionExample">
            <div class="card-body">
              <p>Implementing an IT Infrastructure Platform Solution offers several benefits, including improved efficiency, scalability, reliability, security, and cost savings. It streamlines IT operations, enhances performance, and enables organizations to adapt quickly to changing business needs.
              </p>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample" data-target="#collapseSix" aria-expanded="true">
            <h6 class="fw-bold">How can I ensure seamless integration of these solutions into my existing infrastructure?</h6>
            <div class="acoord-btn text-right mr-2  pb-3">
              {{-- <a href="{{ route('career.apply')}}" class="rounded-career-btn mr-2 bg-dark mx-2">Apply <i class=" fas fa-arrow-right fw-normal"></i></a> --}}
              {{-- <span  class="accicon"><i class=" fas fa-angle-down rotate-icon"></i></span> --}}
            </div>
          </div>
          <div id="collapseSix" class="collapse" data-parent="#accordionExample">
            <div class="card-body">
              <p>Our team of experts provides comprehensive assessment, planning, and implementation services to ensure seamless integration of IT Infrastructure Platform Solutions into your existing environment. We tailor the solutions to fit your specific needs and minimize disruption to your operations.
              </p>
            </div>
          </div>
          <div class="card">
            <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample" data-target="#collapseSeven" aria-expanded="true">
              <h6 class="fw-bold">What is a Network Automation Solution, and how does it simplify network management?</h6>
              <div class="acoord-btn text-right mr-2  pb-3">
                {{-- <a href="{{ route('career.apply')}}" class="rounded-career-btn mr-2 bg-dark mx-2">Apply <i class=" fas fa-arrow-right fw-normal"></i></a> --}}
                {{-- <span  class="accicon"><i class=" fas fa-angle-down rotate-icon"></i></span> --}}
              </div>
            </div>
            <div id="collapseSeven" class="collapse" data-parent="#accordionExample">
              <div class="card-body">
                <p>Network Automation Solution automates provisioning, configuration, and management of network devices. It streamlines operations, reduces manual errors, and enhances agility, enabling organizations to adapt quickly to changing networking requirements.
                </p>
              </div>
            </div>
            <div class="card">
              <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample" data-target="#collapseEight" aria-expanded="true">
                <h6 class="fw-bold">How does Storage Solution contribute to data management and business continuity?</h6>
                <div class="acoord-btn text-right mr-2  pb-3">
                  {{-- <a href="{{ route('career.apply')}}" class="rounded-career-btn mr-2 bg-dark mx-2">Apply <i class=" fas fa-arrow-right fw-normal"></i></a> --}}
                  {{-- <span  class="accicon"><i class=" fas fa-angle-down rotate-icon"></i></span> --}}
                </div>
              </div>
              <div id="collapseEight" class="collapse" data-parent="#accordionExample">
                <div class="card-body">
                  <p>Storage Solution offers high-performance storage arrays with advanced features such as data deduplication, replication, and encryption. It ensures reliable data storage, backup, and recovery, enhancing data management and enabling business continuity.
                  </p>
                </div>
              </div>
              <div class="card">
                <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample" data-target="#collapseNine" aria-expanded="true">
                  <h6 class="fw-bold">What is Hyper-Converged Infrastructure (HCI), and how does it benefit my organization?</h6>
                  <div class="acoord-btn text-right mr-2  pb-3">
                    {{-- <a href="{{ route('career.apply')}}" class="rounded-career-btn mr-2 bg-dark mx-2">Apply <i class=" fas fa-arrow-right fw-normal"></i></a> --}}
                    {{-- <span  class="accicon"><i class=" fas fa-angle-down rotate-icon"></i></span> --}}
                  </div>
                </div>
                <div id="collapseNine" class="collapse" data-parent="#accordionExample">
                  <div class="card-body">
                    <p>HCI integrated compute, storage, and networking into a single, software-defined platform. It simplifies management, reduces hardware footprint, and enhances scalability and agility, leading to cost savings and improved efficiency.
                    </p>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample" data-target="#collapseTen" aria-expanded="true">
                    <h6 class="fw-bold">What ongoing support and maintenance services are available for an IT Infrastructure Platform Solution?</h6>
                    <div class="acoord-btn text-right mr-2  pb-3">
                      {{-- <a href="{{ route('career.apply')}}" class="rounded-career-btn mr-2 bg-dark mx-2">Apply <i class=" fas fa-arrow-right fw-normal"></i></a> --}}
                      {{-- <span  class="accicon"><i class=" fas fa-angle-down rotate-icon"></i></span> --}}
                    </div>
                  </div>
                  <div id="collapseTen" class="collapse" data-parent="#accordionExample">
                    <div class="card-body">
                      <p>Ongoing support and maintenance services for an IT Infrastructure Platform Solution may include regular software updates, proactive monitoring, troubleshooting assistance, and access to technical support resources. These services help ensure the continued performance and reliability of the infrastructure environment.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    @include('landing.components.get-in-touch')

  </div>

  <div class="tab-pane fade @if($fragment == 'pills-profile') show active @endif" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab2" tabindex="0">

    <div class="carousel-inne">
      <div class="bannerImage">
        <img class="w-100 hFull" src="{{ asset('assets/img/service/banner_iss.jpg')}}" alt="Image">
        <div class="w-100 posAbs d-flex flex-column align-items-center justify-content-center">
          <div class="container">
            <div class="p-3 text-left">
              <p class='text-white text-center serviceBannerText'>IT
                <span class='txtYellow'> Security Solutions</span>
              </p>
              <p class='text-center text-white'></p>
            </div>
          </div>
        </div>

      </div>
    </div>

    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
      <div class="container">
        <div class="row g-5">
          <div class="col-lg-6 col-md-6 col-sm-12 pt-3">
            <div class="img-content">
              <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/service/IT Security Audit Services.png')}}">
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="position-relative pb-3">
              <h1>IT Security <span class="text-primary"> Solutions</span></h1>
            </div>
            <p class="mb-2 text-justify">Our comprehensive suite of offerings provides a multi-faceted approach to safeguarding your organization's digital assets from a wide array of cyber threats. Explore our solutions below to fortify your defenses and protect your business with confidence.</p>

            {{-- <a href="{{ route('about')}}" class="btn btn-dark rounded-pill py-3 px-5 mt-3 wow zoomIn"
            data-wow-delay="0.9s">Know More <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8" />
            </svg></a> --}}
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid bg-primary wow fadeInUp" data-wow-delay="0.2s">
      <div class="container">
        <div class="text-center position-relative pb-3 mb-4 mx-auto">
          <h1>Our <span class="text-primary"> Offerings</span></h1>
        </div>
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="row">
              <div class="col-md-2">
                <img class=" wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/service/Threat Detection and Prevention.png')}}">
              </div>
              <div class="col-md-10">
                <h5 class="fw-bold">Threat Detection and Prevention</h5>
                <p class="text-justify">Our IT Security Solutions offer advanced threat detection and prevention, identifying and neutralizing malware, ransomware, and phishing attacks before they breach your systems. Ensure comprehensive protection for your organization against data loss and financial damage.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="row">
              <div class="col-md-2 ">
                <img class=" wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/service/Network Security.png')}}">
              </div>
              <div class="col-md-10">
                <h5 class="fw-bold">Network Security</h5>
                <p class="text-justify">Our IT Security Solutions provide robust network security, including next-generation firewalls and intrusion detection systems, ensuring protection against unauthorized access and advanced cyber threats. Safeguard your organization's data and infrastructure with confidence.
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="row">
              <div class="col-md-2">
                <img class=" wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/service/Identity and Access Management (IAM).png')}}">
              </div>
              <div class="col-md-10">
                <h5 class="fw-bold">Identity and Access Management (IAM)</h5>
                <p class="text-justify">Our IT Security Solutions offer comprehensive identity and access management, featuring single sign-on, multi-factor authentication, and role-based access control. Ensure secure access to resources while minimizing the risk of unauthorized activities.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="row">
              <div class="col-md-2 ">
                <img class=" wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/service/Data Protection and Encryption.png')}}">
              </div>
              <div class="col-md-10">
                <h5 class="fw-bold">Data Protection and Encryption</h5>
                <p class="text-justify">Our IT Security Solutions include data protection and encryption features to safeguard sensitive information. With encryption at rest and in transit, ensure the confidentiality and integrity of your data, reducing the risk of unauthorized access.
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="row">
              <div class="col-md-2">
                <img class=" wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/service/Incident Response and Security Monitoring.png')}}">
              </div>
              <div class="col-md-10">
                <h5 class="fw-bold">Incident Response and Security Monitoring</h5>
                <p class="text-justify"> Our IT Security Solutions provide robust incident response and security monitoring capabilities. With real-time monitoring and rapid response to security incidents, mitigate risks, minimize downtime, and maintain the integrity of your systems.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="row">
              <div class="col-md-2 ">
                <img class=" wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/service/Database Solutions.png')}}">
              </div>
              <div class="col-md-10">
                <h5 class="fw-bold">Security Consulting and Advisory</h5>
                <p class="text-justify">IVT offers strategic security consulting and advisory services to help organizations develop robust cybersecurity strategies, roadmaps, and architectures aligned with their business objectives. Our consulting services cover areas such as security risk assessments, security program development, etc.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid py-4 bg-primary wow fadeInUp" data-wow-delay="0.4s">
      <div class="container">
        <div class="text-center position-relative pb-3 mx-auto">
          <h1 style="color:black;">Our <span class="text-primary">Process</span></h1>
          <!-- <p>At IVT, our process is meticulously designed to provide comprehensive protection for your organization's digital assets while minimizing vulnerabilities and mitigating potential cyber risks. Here's how we ensure your IT security.
          </p> -->
        </div>
        <div class="row g-3">
          <div class="col-lg-4 col-md-6 mt-3">
            <div class="card p-4" style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px">
              <img src="{{ asset('assets/img/service/cloud-trans-process/Assessment and Analysis.png')}}" class="card-img-top m-auto w-100 rounded-3  p-1 my-3" alt="azur-image" style="max-width: 70px" />
              <div class="card-body">
                <h5 class="card-title text-center fw-bold fs-5">
                  Assessment and Analysis
                </h5>
                <p class="card-text">
                  Our IT Security Solutions begin with thorough assessment and analysis, identifying vulnerabilities and risks. This enables tailored security plans to protect your organization from cyber threats effectively.
                </p>

              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-3">
            <div class="card p-4" style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px">
              <img src="{{ asset('assets/img/service/cloud-trans-process/Planning and Strategy.png')}}" class="card-img-top m-auto w-100 rounded-3  p-1 my-3" alt="azur-image" style="max-width: 70px" />
              <div class="card-body">
                <h5 class="card-title text-center fw-bold fs-5">
                  Planning and Strategy
                </h5>
                <p class="card-text">
                  Our process for IT Security Solutions involves strategic planning tailored to your organization's needs, selecting appropriate technologies, and developing policies to ensure comprehensive protection against cyber threats.
                </p>

              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-3">
            <div class="card p-4" style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px">
              <img src="{{ asset('assets/img/service/cloud-trans-process/Implementation and Deployment.png')}}" class="card-img-top m-auto w-100 rounded-3 p-1 my-3" alt="azur-image" style="max-width: 70px" />
              <div class="card-body">
                <h5 class="card-title text-center fw-bold fs-5">
                  Implementation and Deployment
                </h5>
                <p class="card-text">
                  We ensure seamless implementation and deployment of IT Security Solutions, configuring and integrating technologies to protect your infrastructure, data, and users effectively against cyber threats.
                </p>

              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-3">
            <div class="card p-4" style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px">
              <img src="{{ asset('assets/img/service/cloud-trans-process/Monitoring and Maintenance.png')}}" class="card-img-top m-auto w-100 rounded-3  p-1 my-3" alt="azur-image" style="max-width: 70px" />
              <div class="card-body">
                <h5 class="card-title text-center fw-bold fs-5">
                  Monitoring and Maintenance
                </h5>
                <p class="card-text">
                  We provide continuous monitoring and maintenance of IT Security Solutions, ensuring 24/7 protection. Our proactive approach includes optimizing security measures to adapt to evolving threats and maintaining peak performance.
                </p>

              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-3">
            <div class="card p-4" style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px">
              <img src="{{ asset('assets/img/service/cloud-trans-process/Incident Response and Recovery.png')}}" class="card-img-top m-auto w-100 rounded-3  p-1 my-3" alt="azur-image" style="max-width: 70px" />
              <div class="card-body">
                <h5 class="card-title text-center fw-bold fs-5">
                  Incident Response and Recovery
                </h5>
                <p class="card-text">
                  Our process ensures swift incident response and recovery for IT Security Solutions. With established protocols, we minimize the impact of security incidents and quickly restore normal operations.
                </p>

              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-3">
            <div class="card p-4" style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px">
              <img src="{{ asset('assets/img/service/cloud-trans-process/Assessment and Analysis.png')}}" class="card-img-top m-auto w-100 rounded-3  p-1 my-3" alt="azur-image" style="max-width: 70px" />
              <div class="card-body">
                <h5 class="card-title text-center fw-bold fs-5">
                  Assessment and Analysis
                </h5>
                <p class="card-text">
                  Our IT Security Solutions begin with thorough assessment and analysis, identifying vulnerabilities and risks. This enables tailored security plans to protect your organization from cyber threats effectively.
                </p>

              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
    <div class="col-lg-12 my-5 mb-5 p-0" style="min-height: 600px">
          <div class="row mb-5">
            <div class="col-lg-4 col-md-4 col-sm-12">
              <div class="container-fluid py-4 bg-primary wow fadeInUp bg-primary ml-0 ml-md-5" data-wow-delay="0.4s">
                <div class="container">
                  <div class="text-left position-relative pb-3 mb-4 mx-auto">
                    <h4 class="text-left">Key features of <span class="text-primary">IT Security Solutions</span></h4>
                    <ul>

                      <li>Firewalls</li>
                      <li>Encryption</li>
                      <li>Intrusion Detection Systems (IDS)</li>
                      <li>Multi-factor Authentication (MFA)</li>
                      <li>Vulnerability Scanning</li>
                      <li>Security Information and Event Management (SIEM)</li>

                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-12">
              <div class="service-feature bg h300">
                <div class="row g-5">
                  <div id="service-feature" class="px-5 owl-carousel service-feature-carousel">
                    <div class="mr-4 wow slideInUp" data-wow-delay="0.1s">
                      <div class=" wow slideInUp mx-2 " data-wow-delay="0.3s">
                        <div class="ser-feature-card bg-light overflow-hidden">
                          <div class="team-img position-relative overflow-hidden d-flex justify-content-center">
                            <img class="img-fluid w-50 h-50 p-5" src="{{ asset('assets/img/service/offering-1.svg')}}" alt="">
                          </div>
                          <div class="text-center py-4">
                            <h5 class="fw-bold">Firewalls</h5>
                            <p class="mx-3 text-center m-0 my-3">Firewalls are vital in IT security solutions, acting as network barriers to unauthorized access.
                            </p>

                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="mr-4 wow slideInUp" data-wow-delay="0.2s">
                      <div class="wow slideInUp mx-2" data-wow-delay="0.3s">
                        <div class="ser-feature-card  bg-light overflow-hidden">
                          <div class="team-img position-relative overflow-hidden d-flex justify-content-center">
                            <img class="img-fluid w-50 p-5" src="{{ asset('assets/img/service/offering-4.svg')}}" alt="">
                          </div>
                          <div class="text-center py-4">
                            <h5 class="fw-bold">Encryption</h5>
                            <p class="mx-3 text-center m-0 my-3">Encryption ensures data confidentiality by encoding information into an unreadable format.</p>

                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="mr-4 wow slideInUp" data-wow-delay="0.3s">
                      <div class="wow slideInUp mx-2" data-wow-delay="0.3s">
                        <div class="ser-feature-card  bg-light overflow-hidden">
                          <div class="team-img position-relative overflow-hidden d-flex justify-content-center">
                            <img class="img-fluid w-50 p-5" src="{{ asset('assets/img/service/offering-1.svg')}}" alt="">
                          </div>
                          <div class="text-center py-4">
                            <h5 class="fw-bold">Intrusion Detection Systems (IDS)</h5>
                            <p class="mx-3 text-center m-0 my-3">Intrusion Detection Systems (IDS) continuously monitors network traffic for suspicious activities or anomalies.</p>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="mr-4 wow slideInUp" data-wow-delay="0.2s">
                      <div class="wow slideInUp mx-2" data-wow-delay="0.3s">
                        <div class="ser-feature-card  bg-light overflow-hidden">
                          <div class="team-img position-relative overflow-hidden d-flex justify-content-center">
                            <img class="img-fluid w-50 p-5" src="{{ asset('assets/img/service/offering-6.svg')}}" alt="">
                          </div>
                          <div class="text-center py-4">
                            <h5 class="fw-bold">Multi-factor Authentication (MFA)</h5>
                            <p class="mx-3 text-center m-0 my-3">Multi-factor Authentication (MFA) adds layers of verification beyond passwords.
                            </p>

                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="mr-4 wow slideInUp" data-wow-delay="0.2s">
                      <div class="wow slideInUp mx-2" data-wow-delay="0.3s">
                        <div class="ser-feature-card  bg-light overflow-hidden">
                          <div class="team-img position-relative overflow-hidden d-flex justify-content-center">
                            <img class="img-fluid w-50 p-5" src="{{ asset('assets/img/service/offering-2.svg')}}" alt="">
                          </div>
                          <div class="text-center py-4">
                            <h5 class="fw-bold">Vulnerability Scanning</h5>
                            <p class="mx-3 text-center m-0 my-3">Vulnerability Scanning identifies weaknesses in systems and applications.
                            </p>

                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="mr-4 wow slideInUp" data-wow-delay="0.2s">
                      <div class="wow slideInUp mx-2" data-wow-delay="0.3s">
                        <div class="ser-feature-card  bg-light overflow-hidden">
                          <div class="team-img position-relative overflow-hidden d-flex justify-content-center">
                            <img class="img-fluid w-50 p-5" src="{{ asset('assets/img/service/offering-3.svg')}}" alt="">
                          </div>
                          <div class="text-center py-4">
                            <h5 class="fw-bold">Security Information and Event Management (SIEM)</h5>
                            <p class="mx-3 text-center m-0 my-3">Security Information and Event Management (SIEM) provides centralized monitoring and analysis of security events.
                            </p>

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


    <div class="container my-5">
      <p class="fs-1 text-center" style="font-size:35px;">
        <b>Benefits of <span style="color:#F19F1F;">IT Security Solutions</span></b>
      </p>
      <div class="row g-5 mt-5 py-12">
        <div class="col-lg-4 col-md-6 mt-4">
          <div class="card p-5" style="background-color: #ECECEC">
            <div class="card-image" style="background-color: #F19F1F">
              <img src="{{ asset('assets/img/Comprehensive IT Security Offerings.png')}}" class="card-img-top m-auto w-100 rounded-3 py-4 px-3 my-1" alt="azur-image" style="max-width: 80px" />
              <div class="triangle-up"></div>
            </div>
            <div class="card-body">
              <h5 class="card-title fw-bold fs-3 mt-3">
                Protection Against Cyber Threats
              </h5>
              <p class="card-text fs-6">
                IT security solutions safeguard your organization from a wide range of cyber threats, including malware, ransomware, phishing attacks, and data breaches.
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-4">
          <div class="card text-light p-5" style="background-color: #F19F1F">
            <div class="card-image" style="background-color: #ECECEC">
              <img src="{{ asset('assets/img/Security and Compliance.png')}}" class="card-img-top m-auto w-100 rounded-3 py-4 px-3 my-1" alt="azur-image" style="max-width: 80px" />
              <div class="triangle-up"></div>
            </div>
            <div class="card-body">
              <h5 class="card-title fw-bold fs-3 mt-3">
                Data Confidentiality and Integrity
              </h5>
              <p class="card-text fs-6">
                By encrypting data and implementing access controls, IT security solutions ensure the confidentiality and integrity of your sensitive information, preventing unauthorized access or modification.
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-4">
          <div class="card p-5" style="background-color: #ECECEC">
            <div class="card-image" style="background-color: #F19F1F">
              <img src="{{ asset('assets/img/Optimization and Governance.png')}}" class="card-img-top m-auto w-100 rounded-3 py-4 px-3 my-1" alt="azur-image" style="max-width: 80px" />
              <div class="triangle-up"></div>
            </div>
            <div class="card-body">
              <h5 class="card-title fw-bold fs-3 mt-3">
                Regulatory Compliance
              </h5>
              <p class="card-text fs-6">
                Compliance with industry regulations and data protection laws is easier to achieve with IT security solutions in place, reducing the risk of fines and legal liabilities.
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-4">
          <div class="card text-light p-5" style="background-color: #F19F1F">
            <div class="card-image" style="background-color: #ECECEC">
              <img src="{{ asset('assets/img/Continuous Support and Optimization.png')}}" class="card-img-top m-auto w-100 rounded-3 py-4 px-3 my-1" alt="azur-image" style="max-width: 80px" />
              <div class="triangle-up"></div>
            </div>
            <div class="card-body">
              <h5 class="card-title fw-bold fs-3 mt-3">
                Improved Productivity
              </h5>
              <p class="card-text fs-6">
                With robust security measures in place, employees can work confidently knowing that their digital environment is protected, leading to increased productivity and efficiency.
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-4">
          <div class="card p-5" style="background-color: #ECECEC">
            <div class="card-image" style="background-color: #F19F1F">
              <img src="{{ asset('assets/img/image 5.png')}}" class="card-img-top m-auto w-100 rounded-3 py-4 px-3 my-1" alt="azur-image" style="max-width: 80px" />
              <div class="triangle-up"></div>
            </div>
            <div class="card-body">
              <h5 class="card-title fw-bold fs-3 mt-3">
                Cost Savings
              </h5>
              <p class="card-text fs-6">
                Investing in IT security solutions can ultimately save costs associated with data breaches, regulatory penalties, and lost productivity due to downtime.
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-4">
          <div class="card text-light p-5" style="background-color: #F19F1F">
            <div class="card-image" style="background-color: #ECECEC">
              <img src="{{ asset('assets/img/solution design.png')}}" class="card-img-top m-auto w-100 rounded-3 py-4 px-3 my-1" alt="azur-image" style="max-width: 80px" />
              <div class="triangle-up"></div>
            </div>
            <div class="card-body">
              <h5 class="card-title fw-bold fs-3 mt-3">
                Competitive Advantage
              </h5>
              <p class="card-text fs-6">
                Demonstrating a commitment to robust security can give your organization a competitive edge, as customers and partners prioritize working with businesses that prioritize cybersecurity.
              </p>
            </div>
          </div>
        </div>

      </div>
    </div>


    {{--@include('landing.components.service-banner')--}}


    <div class="container my-5 ">
      <div class="d-flex flex-column align-items-center justify-content-center py-2 pb-2">
        <h4 class="fw-bold text-primary">FAQ</h4>
      </div>

      <div class="accordion feature-faq feature__feq" id="accordionExample">
        <div class="card">
          <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample" data-target="#collapseOne" aria-expanded="true">
            <h6 class="fw-bold">What are IT security solutions?</h6>
            <div class="acoord-btn text-right mr-2">

            </div>
          </div>
          <div id="collapseOne" class="collapse " data-parent="#accordionExample">
            <div class="card-body">
              <p>IT security solutions encompass a range of technologies and practices designed to protect digital assets, including networks, devices, data, and applications, from cyber threats.
              </p>
            </div>
          </div>
        </div>

        <div class="card">
          <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true">
            <h6 class="fw-bold">Why are IT security solutions important for businesses?</h6>
            <div class="acoord-btn text-right mr-2">
              {{-- <a href="{{ route('career.apply')}}" class="rounded-career-btn mr-2 py-2 px-3 bg-dark mx-2">Apply <i class=" fas fa-arrow-right fw-normal"></i></a> --}}
              {{-- <span  class="accicon"><i class=" fas fa-angle-down rotate-icon"></i></span> --}}
            </div>
          </div>
          <div id="collapseTwo" class="collapse" data-parent="#accordionExample">
            <div class="card-body">
              <p>IT security solutions are essential for businesses to safeguard their sensitive information, maintain regulatory compliance, prevent financial losses due to data breaches, and protect their reputation from cyberattacks.
              </p>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample" data-target="#collapseThree" aria-expanded="true">
            <h6 class="fw-bold"> What types of threats do IT security solutions protect against?</h6>
            <div class="acoord-btn text-right mr-2  pb-3">
              {{-- <a href="{{ route('career.apply')}}" class="rounded-career-btn mr-2 bg-dark mx-2">Apply <i class=" fas fa-arrow-right fw-normal"></i></a> --}}
              {{-- <span  class="accicon"><i class=" fas fa-angle-down rotate-icon"></i></span> --}}
            </div>
          </div>
          <div id="collapseThree" class="collapse" data-parent="#accordionExample">
            <div class="card-body">
              <p>IT security solutions protect against a wide range of threats, including malware, viruses, ransomware, phishing attacks, insider threats, unauthorized access, and data breaches.
              </p>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample" data-target="#collapseFour" aria-expanded="true">
            <h6 class="fw-bold">What are the key components of an IT security solution?</h6>
            <div class="acoord-btn text-right mr-2  pb-3">
              {{-- <a href="{{ route('career.apply')}}" class="rounded-career-btn mr-2 bg-dark mx-2">Apply <i class=" fas fa-arrow-right fw-normal"></i></a> --}}
              {{-- <span  class="accicon"><i class="  px-3 fas fa-angle-down rotate-icon"></i></span> --}}
            </div>
          </div>
          <div id="collapseFour" class="collapse" data-parent="#accordionExample">
            <div class="card-body">
              <p>Key components of IT security solutions include antivirus and anti-malware software, firewalls, intrusion detection and prevention systems (IDPS), encryption technologies, multi-factor authentication (MFA), and security monitoring tools such as Security Information and Event Management (SIEM) systems.</p>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample" data-target="#collapseFive" aria-expanded="true">
            <h6 class="fw-bold">How can IT security solutions help with regulatory compliance?
            </h6>
            <div class="acoord-btn text-right mr-2  pb-3">
              {{-- <a href="{{ route('career.apply')}}" class="rounded-career-btn mr-2 bg-dark mx-2">Apply <i class=" fas fa-arrow-right fw-normal"></i></a> --}}
              {{-- <span  class="accicon"><i class=" fas fa-angle-down rotate-icon"></i></span> --}}
            </div>
          </div>
          <div id="collapseFive" class="collapse" data-parent="#accordionExample">
            <div class="card-body">
              <p>IT security solutions can assist businesses in meeting regulatory requirements by implementing measures such as data encryption, access controls, audit trails, and incident response plans that align with industry standards and regulations like GDPR, HIPAA, and PCI-DSS.</p>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample" data-target="#collapseSix" aria-expanded="true">
            <h6 class="fw-bold">What is the role of user training in IT security solutions?
            </h6>
            <div class="acoord-btn text-right mr-2  pb-3">
              {{-- <a href="{{ route('career.apply')}}" class="rounded-career-btn mr-2 bg-dark mx-2">Apply <i class=" fas fa-arrow-right fw-normal"></i></a> --}}
              {{-- <span  class="accicon"><i class=" fas fa-angle-down rotate-icon"></i></span> --}}
            </div>
          </div>
          <div id="collapseSix" class="collapse" data-parent="#accordionExample">
            <div class="card-body">
              <p>User training is crucial in IT security to raise awareness about common cyber threats, teach best practices for password management, email security, and safe browsing habits, and help employees recognize and report suspicious activities.</p>
            </div>
          </div>
          <div class="card">
            <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample" data-target="#collapseSeven" aria-expanded="true">
              <h6 class="fw-bold">How can businesses determine the right IT security solutions for their needs?
              </h6>
              <div class="acoord-btn text-right mr-2  pb-3">
                {{-- <a href="{{ route('career.apply')}}" class="rounded-career-btn mr-2 bg-dark mx-2">Apply <i class=" fas fa-arrow-right fw-normal"></i></a> --}}
                {{-- <span  class="accicon"><i class=" fas fa-angle-down rotate-icon"></i></span> --}}
              </div>
            </div>
            <div id="collapseSeven" class="collapse" data-parent="#accordionExample">
              <div class="card-body">
                <p>Businesses should conduct a comprehensive risk assessment to identify their vulnerabilities and security requirements. Based on the assessment, they can choose IT security solutions that address their specific needs, budget, and compliance requirements.</p>
              </div>
            </div>
            <div class="card">
              <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample" data-target="#collapseEight" aria-expanded="true">
                <h6 class="fw-bold">How often should IT security solutions be updated?
                </h6>
                <div class="acoord-btn text-right mr-2  pb-3">
                  {{-- <a href="{{ route('career.apply')}}" class="rounded-career-btn mr-2 bg-dark mx-2">Apply <i class=" fas fa-arrow-right fw-normal"></i></a> --}}
                  {{-- <span  class="accicon"><i class=" fas fa-angle-down rotate-icon"></i></span> --}}
                </div>
              </div>
              <div id="collapseEight" class="collapse" data-parent="#accordionExample">
                <div class="card-body">
                  <p>IT security solutions should be updated regularly to protect against new and evolving threats. Updates should include security patches, software updates, and configuration changes to ensure maximum protection.</p>
                </div>
              </div>
              <div class="card">
                <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample" data-target="#collapseNine" aria-expanded="true">
                  <h6 class="fw-bold">What is the difference between on-premises and cloud-based IT security solutions?
                  </h6>
                  <div class="acoord-btn text-right mr-2  pb-3">
                    {{-- <a href="{{ route('career.apply')}}" class="rounded-career-btn mr-2 bg-dark mx-2">Apply <i class=" fas fa-arrow-right fw-normal"></i></a> --}}
                    {{-- <span  class="accicon"><i class=" fas fa-angle-down rotate-icon"></i></span> --}}
                  </div>
                </div>
                <div id="collapseNine" class="collapse" data-parent="#accordionExample">
                  <div class="card-body">
                    <p>On-premises IT security solutions are hosted and managed within the organization's own infrastructure, providing full control and customization. Cloud-based IT security solutions are hosted and managed by a third-party provider, offering scalability, accessibility, and reduced maintenance overhead.</p>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample" data-target="#collapseTen" aria-expanded="true">
                    <h6 class="fw-bold">How can businesses measure the effectiveness of their IT security solutions?
                    </h6>
                    <div class="acoord-btn text-right mr-2  pb-3">
                      {{-- <a href="{{ route('career.apply')}}" class="rounded-career-btn mr-2 bg-dark mx-2">Apply <i class=" fas fa-arrow-right fw-normal"></i></a> --}}
                      {{-- <span  class="accicon"><i class=" fas fa-angle-down rotate-icon"></i></span> --}}
                    </div>
                  </div>
                  <div id="collapseTen" class="collapse" data-parent="#accordionExample">
                    <div class="card-body">
                      <p>Businesses can measure the effectiveness of their IT security solutions through regular security assessments, penetration testing, monitoring of security metrics (such as incident response time and threat detection rate), and by evaluating the impact of security incidents on their operations.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    @include('landing.components.get-in-touch')
  </div>

  <div class="tab-pane fade @if($fragment == 'pills-contact') show active @endif" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab2" tabindex="0">
    <div class="carousel-inne">
      <div class="bannerImage">
        <img class="w-100 hFull" src="{{ asset('assets/img/service/saas-concept-collage (1).jpg')}}" alt="Image">
        <div class="w-100 posAbs d-flex flex-column align-items-center justify-content-center">
          <div class="container">
            <div class="p-3 text-left">
              <p class='text-white text-center serviceBannerText'>Cloud
                <span class='txtYellow'>Solutions</span>
              </p>
              <p class='text-center text-white'></p>
            </div>
          </div>
        </div>

      </div>
    </div>

    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
      <div class="container">
        <div class="row g-5">
          <div class="col-lg-6 col-md-6 col-sm-12 pt-3">
            <div class="img-content">
              <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/service/cloud solutions.png')}}">
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="position-relative pb-3">
              <h1> <span class="text-primary">Cloud Solutions</span></h1>
            </div>
            <p class="mb-2 text-justify">IVT delivers comprehensive cloud solutions, optimizing infrastructure, security, and cost management. With expertise in multi-cloud, AI/ML, and hybrid deployments, we empower businesses to innovate and thrive in the digital age.
            </p>

            {{-- <a href="{{ route('about')}}" class="btn btn-dark rounded-pill py-3 px-5 mt-3 wow zoomIn"
            data-wow-delay="0.9s">Know More <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8" />
            </svg></a> --}}
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid bg-primary wow fadeInUp" data-wow-delay="0.2s">
      <div class="container">
        <div class="text-center position-relative pb-3 mb-4 mx-auto">
          <h1 style="color:black;">Our <span class="text-primary"> Offerings</span></h1>
          <!-- <p>IVT stands at the forefront of this transformation, offering cutting-edge cloud solutions designed to empower businesses across various industries. We provide a comprehensive suite of offerings tailored to meet the diverse needs of modern enterprises.</p> -->
        </div>
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="row">
              <div class="col-md-2">
                <img class=" wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/service/Seamless Integration.png')}}">
              </div>
              <div class="col-md-10">
                <h5 class="fw-bold">Cloud Infrastructure Management</h5>
                <p class="text-justify">We provide robust Cloud Infrastructure Management, optimizing performance, security, and scalability across AWS, Azure, and GCP. Our services ensure cost-effective resource utilization and seamless operations for businesses of all sizes.
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="row">
              <div class="col-md-2 ">
                <img class=" wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/service/Dynamic Scalability.png')}}">
              </div>
              <div class="col-md-10">
                <h5 class="fw-bold">Cloud-native Development</h5>
                <p class="text-justify">We specialize in Cloud-native Development, leveraging Docker, Kubernetes, and microservices architecture for rapid application deployment. With DevOps integration and AI/ML capabilities, we enable agile, scalable, and innovative solutions for modern businesses.
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="row mt-3">
          <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="row">
              <div class="col-md-2">
                <img class=" wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/service/Robust Security Measures.png')}}">
              </div>
              <div class="col-md-10">
                <h5 class="fw-bold">Data Analytics and AI/ML</h5>
                <p class="text-justify">We excel in Data Analytics and AI/ML, harnessing cloud-based platforms for big data processing and predictive analytics. With advanced AI/ML algorithms, we empower businesses to derive actionable insights and drive informed decision-making.
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="row">
              <div class="col-md-2 ">
                <img class=" wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/service/Streamlined_Operations.png')}}">
              </div>
              <div class="col-md-10">
                <h5 class="fw-bold">Multi-Cloud and Hybrid Cloud Solutions</h5>
                <p class="text-justify">We offer Multi-Cloud and Hybrid Cloud Solutions, seamlessly integrating public and private clouds for enhanced flexibility and resilience. Our expertise ensures optimized workload management and robust disaster recovery across diverse cloud environments.
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="row mt-3">
          <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="row">
              <div class="col-md-2">
                <img class=" wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/service/Actionable Insights.png')}}">
              </div>
              <div class="col-md-10">
                <h5 class="fw-bold">Cloud Security and Compliance</h5>
                <p class="text-justify">We deliver comprehensive Cloud Security and Compliance solutions, ensuring data protection and regulatory adherence across cloud environments. With IAM, encryption, and threat detection, we safeguard businesses from cyber threats and maintain regulatory compliance.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="row">
              <div class="col-md-2 ">
                <img class=" wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/service/Continuous Operations.png')}}">
              </div>
              <div class="col-md-10">
                <h5 class="fw-bold">Cloud Cost Optimization</h5>
                <p class="text-justify">IVT provides Cloud Cost Optimization solutions, optimizing spending and maximizing ROI for businesses. With cost visibility, governance, and continuous optimization, we ensure efficient cloud resource utilization and financial management.</p>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>

    <div class="container-fluid bg-primary py-4 wow fadeInUp" data-wow-delay="0.4s">
      <div class="container">
        <div class="text-center position-relative pb-3 mx-auto">
          <h1 style="color:black;">Our <span class="text-primary">Process</span></h1>
          <!-- <p>Explore simplified cloud solution acquisition and adaptable licensing options with IVT. Experience robust IT security, Azure Stack deployment expertise, and personalized cloud services consultation.
          </p> -->
        </div>
        <div class="row g-3">
          <div class="col-lg-4 col-md-6 mt-3">
            <div class="card p-4" style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px">
              <img src="{{ asset('assets/img/service/cloud-trans-process/Assessment and Strategy Development.png')}}" class="card-img-top m-auto w-100 rounded-3  p-1 my-3" alt="azur-image" style="max-width: 70px" />
              <div class="card-body">
                <h5 class="card-title text-center fw-bold fs-5">
                  Assessment and Analysis
                </h5>
                <p class="card-text">
                  We begin by conducting a thorough assessment of the client's current infrastructure, applications, and business requirements. Our team analyzes workload patterns, performance metrics, security posture, and compliance needs to identify areas for improvement and optimization.
                </p>

              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-3">
            <div class="card p-4" style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px">
              <img src="{{ asset('assets/img/service/cloud-trans-process/Efficient Cloud Solutions Acquisition.png')}}" class="card-img-top m-auto w-100 rounded-3  p-1 my-3" alt="azur-image" style="max-width: 70px" />
              <div class="card-body">
                <h5 class="card-title text-center fw-bold fs-5">
                Strategy and Planning
                </h5>
                <p class="card-text">
                Based on the assessment findings, we collaborate closely with the client to develop a customized cloud strategy aligned with their business objectives. We define clear goals, migration priorities, and timelines, considering factors such as cost, scalability, security, and compliance.

</p>

              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-3">
            <div class="card p-4" style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px">
              <img src="{{ asset('assets/img/service/cloud-trans-process/Tailored Licensing Solutions.png')}}" class="card-img-top m-auto w-100 rounded-3  p-1 my-3" alt="azur-image" style="max-width: 70px" />
              <div class="card-body">
                <h5 class="card-title text-center fw-bold fs-5">
                Design and Architecture                </h5>
                <p class="card-text">
                Our experienced architects design the optimal cloud architecture, selecting appropriate cloud platforms, services, and deployment models to meet the client's requirements. We focus on scalability, reliability, security, and performance, ensuring that the architecture supports current and future needs.
                </p>

              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-3">
            <div class="card p-4" style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px">
              <img src="{{ asset('assets/img/service/cloud-trans-process/Comprehensive IT Security Offerings.png')}}" class="card-img-top m-auto w-100 rounded-3 p-1 my-3" alt="azur-image" style="max-width: 70px" />
              <div class="card-body">
                <h5 class="card-title text-center fw-bold fs-5">
                Implementation and Migration
                </h5>
                <p class="card-text">
                With the architecture in place, we execute the leveraging industry best practices & automation tools to minimize downtime. Our team manages the migration process meticulously, ensuring data integrity, application compatibility and smooth transition to the cloud environment.
                </p>

              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-3">
            <div class="card p-4" style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px">
              <img src="{{ asset('assets/img/service/cloud-trans-process/Azure Stack Deployment Services.png')}}" class="card-img-top m-auto w-100 rounded-3  p-1 my-3" alt="azur-image" style="max-width: 70px" />
              <div class="card-body">
                <h5 class="card-title text-center fw-bold fs-5">
                Optimization and Continuous Improvement
                </h5>
                <p class="card-text">
                Once migrated, we continuously monitor and optimize the cloud environment to ensure optimal performance, cost efficiency, and security. We implement proactive measures such as right-sizing instances, optimizing resource utilization, and implementing cost-saving strategies.                </p>

              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-3">
            <div class="card p-4" style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px">
              <img src="{{ asset('assets/img/service/cloud-trans-process/Consultation and Support for Cloud Services.png')}}" class="card-img-top m-auto w-100 rounded-3  p-1 my-3" alt="azur-image" style="max-width: 70px" />
              <div class="card-body">
                <h5 class="card-title text-center fw-bold fs-5">
                Security and Compliance
                </h5>
                <p class="card-text">
                Security is a top priority throughout the process. We implement robust security measures, including encryption, access controls, and threat detection, to protect data and assets in the cloud. Compliance with industry regulations and standards is ensured through rigorous controls and regular audits.
                </p>

              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
    <div class="col-lg-12 my-5 mb-5 p-0" style="min-height: 600px">
          <div class="row mb-5">
            <div class="col-lg-4 col-md-4 col-sm-12">
              <div class="container-fluid py-4 bg-primary wow fadeInUp bg-primary ml-0 ml-md-5" data-wow-delay="0.4s">
                <div class="container">
                  <div class=" position-relative pb-3 mb-4 mx-auto">
                    <h4 class="text-left">Our Key Features For <span class="text-primary"> Cloud Solution</span></h4>

                    <ul>
                      <li>Scalability</li>
                      <li>Flexibility</li>
                      <li>Cost-effectiveness</li>
                      <li>Elasticity</li>
                      <li>TAPI Integration</li>
                      <li>Global Reach</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-12">
              <div class="service-feature bg h300">
                <div class="row g-5">
                  <div id="service-feature" class="px-5 owl-carousel service-feature-carousel">
                    <div class="mr-4 wow slideInUp" data-wow-delay="0.1s">
                      <div class=" wow slideInUp mx-2 " data-wow-delay="0.3s">
                        <div class="ser-feature-card bg-light overflow-hidden">
                          <div class="team-img position-relative overflow-hidden d-flex justify-content-center">
                            <img class="img-fluid w-50 h-50 p-5" src="{{ asset('assets/img/ceff.png')}}" alt="">
                          </div>
                          <div class="text-center py-4">
                            <h5 class="fw-bold">Cost Efficiency</h5>
                            <p class="mx-3 text-center m-0 my-3">Cost-effectiveness offers pay-as-you-go pricing models, eliminating upfront hardware costs, and optimizing resource utilization.</p>

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
                            <p class="mx-3 text-center m-0 my-3"> Scalability allowes resources to be easily scaled up or down to meet changing demands.</p>

                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="mr-4 wow slideInUp" data-wow-delay="0.3s">
                      <div class="wow slideInUp mx-2" data-wow-delay="0.3s">
                        <div class="ser-feature-card  bg-light overflow-hidden">
                          <div class="team-img position-relative overflow-hidden d-flex justify-content-center">
                            <img class="img-fluid w-50 p-5" src="{{ asset('assets/img/easy.png')}}" alt="">
                          </div>
                          <div class="text-center py-4">
                            <h5 class="fw-bold">Flexibility</h5>
                            <p class="mx-3 text-center m-0 my-3">Flexibility allowes for dynamic scaling, resource allocation, and adaptation to changing demands.</p>
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
                            <h5 class="fw-bold">Elasticity</h5>
                            <p class="mx-3 text-center m-0 my-3">Elasticity enables dynamic scaling of resources based on demand fluctuations.
                            </p>

                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="mr-4 wow slideInUp" data-wow-delay="0.2s">
                      <div class="wow slideInUp mx-2" data-wow-delay="0.3s">
                        <div class="ser-feature-card  bg-light overflow-hidden">
                          <div class="team-img position-relative overflow-hidden d-flex justify-content-center">
                            <img class="img-fluid w-50 p-5" src="{{ asset('assets/img/effi.png')}}" alt="">
                          </div>
                          <div class="text-center py-4">
                            <h5 class="fw-bold">API Integration</h5>
                            <p class="mx-3 text-center m-0 my-3">API integration facilitates seamless communication and interoperability between applications and services.</p>

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


    <div class="container my-5">
      <p class="fs-1 text-center" style="font-size:35px;">
        <b>Benefits of <span style="color:#F19F1F;">Cloud Solutions</span></b>
      </p>
      <div class="row g-5 mt-5 py-12">
        <div class="col-lg-4 col-md-6 mt-4">
          <div class="card p-5" style="background-color: #ECECEC">
            <div class="card-image" style="background-color: #F19F1F">
              <img src="{{ asset('assets/img/Implementation and Integration.png')}}" class="card-img-top m-auto w-100 rounded-3 py-4 px-3 my-1" alt="azur-image" style="max-width: 80px" />
              <div class="triangle-up"></div>
            </div>
            <div class="card-body">
              <h5 class="card-title fw-bold fs-3 mt-3">
                Reliability
              </h5>
              <p class="card-text fs-6">
                Cloud providers offer high availability and redundancy, ensuring minimal downtime and reliable access to services through distributed infrastructure.
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-4">
          <div class="card p-5 text-light" style="background-color: #F19F1F">
            <div class="card-image" style="background-color: #ECECEC">
              <img src="{{ asset('assets/img/image 5.png')}}" class="card-img-top m-auto w-100 rounded-3 py-4 px-3 my-1" alt="azur-image" style="max-width: 80px" />
              <div class="triangle-up"></div>
            </div>
            <div class="card-body">
              <h5 class="card-title fw-bold fs-3 mt-3">
                Security
              </h5>
              <p class="card-text fs-6">
                Implement robust security measures such as encryption, access controls, and threat detection, protecting data and applications from unauthorized access and cyber threats.
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-4">
          <div class="card p-5" style="background-color: #ECECEC">
            <div class="card-image" style="background-color: #F19F1F">
              <img src="{{ asset('assets/img/Post-Implementation Support.png')}}" class="card-img-top m-auto w-100 rounded-3 py-4 px-3 my-1" alt="azur-image" style="max-width: 80px" />
              <div class="triangle-up"></div>
            </div>
            <div class="card-body">
              <h5 class="card-title fw-bold fs-3 mt-3">
                Accessibility
              </h5>
              <p class="card-text fs-6">
                Access cloud services from anywhere with an internet connection, enabling remote work, collaboration, and business continuity.
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-4">
          <div class="card text-light p-5" style="background-color: #F19F1F">
            <div class="card-image" style="background-color: #ECECEC">
              <img src="{{ asset('assets/img/Assessment and Consultation.png')}}" class="card-img-top m-auto w-100 rounded-3 py-4 px-3 my-1" alt="azur-image" style="max-width: 80px" />
              <div class="triangle-up"></div>
            </div>
            <div class="card-body">
              <h5 class="card-title fw-bold fs-3 mt-3">
                Automation
              </h5>
              <p class="card-text fs-6">
                Automate repetitive tasks such as provisioning, scaling, and monitoring, improving efficiency and freeing up IT resources for more strategic initiatives.
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-4">
          <div class="card p-5" style="background-color: #ECECEC">
            <div class="card-image" style="background-color: #F19F1F">
              <img src="{{ asset('assets/img/Comprehensive IT Security Offerings.png')}}" class="card-img-top m-auto w-100 rounded-3 py-4 px-3 my-1" alt="azur-image" style="max-width: 80px" />
              <div class="triangle-up"></div>
            </div>
            <div class="card-body">
              <h5 class="card-title fw-bold fs-3 mt-3">
                Disaster Recovery
              </h5>
              <p class="card-text fs-6">
                Implement backup and disaster recovery solutions to protect against data loss and ensure business continuity in the event of a disaster.
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-4">
          <div class="card text-light p-5" style="background-color: #F19F1F">
            <div class="card-image" style="background-color: #ECECEC">
              <img src="{{ asset('assets/img/Implementation and Integration.png')}}" class="card-img-top m-auto w-100 rounded-3 py-4 px-3 my-1" alt="azur-image" style="max-width: 80px" />
              <div class="triangle-up"></div>
            </div>
            <div class="card-body">
              <h5 class="card-title fw-bold fs-3 mt-3">
                Innovation
              </h5>
              <p class="card-text fs-6">
                Cloud solutions enable rapid deployment of new services and applications, fostering innovation and enabling businesses to stay competitive in the market.
              </p>
            </div>
          </div>
        </div>



      </div>
    </div>

    {{--@include('landing.components.service-banner')--}}


    <div class="container my-5 ">
      <div class="d-flex flex-column align-items-center justify-content-center py-2 pb-2">
        <h4 class="fw-bold text-primary">FAQ</h4>
      </div>

      <div class="accordion feature-faq feature__feq" id="accordionExample">
        <div class="card">
          <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample" data-target="#collapseOne" aria-expanded="true">
            <h6 class="fw-bold">What are cloud solutions?</h6>
            <div class="acoord-btn text-right mr-2">

            </div>
          </div>
          <div id="collapseOne" class="collapse " data-parent="#accordionExample">
            <div class="card-body">
              <p> Cloud solutions encompass services and resources delivered online, granting users access to computing power, storage, and applications without relying on on-site infrastructure.</p>
            </div>
          </div>
        </div>

        <div class="card">
          <div class="card-header collapsed py-3" data-parent="#accordionExample" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true">
            <h6 class="fw-bold">What are the benefits of using cloud solutions?
            </h6>
            <div class="acoord-btn text-right mr-2">

            </div>
          </div>
          <div id="collapseTwo" class="collapse" data-parent="#accordionExample">
            <div class="card-body">
              <p>Cloud solutions provide scalability, cost efficiency, accessibility, enhanced collaboration, reliability, security, automatic updates, global reach, environmental sustainability, innovation, agility, and a competitive edge.
              </p>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample" data-target="#collapseThree" aria-expanded="true">
            <h6 class="fw-bold">What types of cloud solutions are available?
            </h6>
            <div class="acoord-btn text-right mr-2  pb-3">

            </div>
          </div>
          <div id="collapseThree" class="collapse" data-parent="#accordionExample">
            <div class="card-body">
              <p>Cloud solutions are typically categorized as public, private, or hybrid. Public clouds serve multiple users over the internet, while private clouds cater to single organizations. Hybrid clouds blend features of both.</p>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample" data-target="#collapseFour" aria-expanded="true">
            <h6 class="fw-bold">How do cloud solutions ensure data security?
               </h6>
            <div class="acoord-btn text-right mr-2  pb-3">

            </div>
          </div>
          <div id="collapseFour" class="collapse" data-parent="#accordionExample">
            <div class="card-body">
              <p>Cloud providers implement robust security measures like data encryption, access controls, regular audits, and compliance certifications. Additionally, they offer built-in backup and disaster recovery for data protection.</p>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample" data-target="#collapseFive" aria-expanded="true">
            <h6 class="fw-bold">Can cloud solutions be customized to suit specific business needs?</h6>
            <div class="acoord-btn text-right mr-2  pb-3">

            </div>
          </div>
          <div id="collapseFive" class="collapse" data-parent="#accordionExample">
            <div class="card-body">
              <p> Yes, cloud solutions can be tailored to meet diverse business requirements. Providers offer a variety of services and deployment options, enabling organizations to align their cloud environments with their objectives.</p>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample" data-target="#collapseSix" aria-expanded="true">
            <h6 class="fw-bold">How does scalability work in cloud solutions?</h6>
            <div class="acoord-btn text-right mr-2  pb-3">

            </div>
          </div>
          <div id="collapseSix" class="collapse" data-parent="#accordionExample">
            <div class="card-body">
              <p>Cloud solutions facilitate dynamic resource scaling based on demand, allowing businesses to adjust resources without major upfront investments. This flexibility supports growth and workload fluctuations.</p>
            </div>
          </div>
          <div class="card">
            <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample" data-target="#collapseSeven" aria-expanded="true">
              <h6 class="fw-bold">What are the considerations for migrating to cloud solutions?</h6>
              <div class="acoord-btn text-right mr-2  pb-3">

              </div>
            </div>
            <div id="collapseSeven" class="collapse" data-parent="#accordionExample">
              <div class="card-body">
                <p> Migrating to cloud solutions involves evaluating current IT infrastructure, security needs, costs, migration strategies, and staff readiness to ensure a smooth transition.</p>
              </div>
            </div>
            <div class="card">
              <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample" data-target="#collapseEight" aria-expanded="true">
                <h6 class="fw-bold">Are cloud solutions suitable for small businesses?</h6>
                <div class="acoord-btn text-right mr-2  pb-3">

                </div>
              </div>
              <div id="collapseEight" class="collapse" data-parent="#accordionExample">
                <div class="card-body">
                  <p>Yes, cloud solutions are ideal for small businesses due to their affordability, scalability, accessibility, and flexibility, empowering them to compete with larger enterprises.</p>
                </div>
              </div>
              <div class="card">
                <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample" data-target="#collapseNine" aria-expanded="true">
                  <h6 class="fw-bold">How does data backup and recovery work in cloud solutions?</h6>
                  <div class="acoord-btn text-right mr-2  pb-3">

                  </div>
                </div>
                <div id="collapseNine" class="collapse" data-parent="#accordionExample">
                  <div class="card-body">
                    <p>Cloud solutions offer built-in backup and disaster recovery capabilities, storing data redundantly across multiple geographically dispersed data centers to minimize the risk of data loss.</p>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample" data-target="#collapseTen" aria-expanded="true">
                    <h6 class="fw-bold">What are some common misconceptions about cloud solutions?</h6>
                    <div class="acoord-btn text-right mr-2  pb-3">

                    </div>
                  </div>
                  <div id="collapseTen" class="collapse" data-parent="#accordionExample">
                    <div class="card-body">
                      <p> Common misconceptions include concerns about security, privacy, and performance. However, cloud providers prioritize security, compliance, and reliability, offering robust solutions to address these concerns and ensure a positive user experience.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    @include('landing.components.get-in-touch')
  </div>


  <div class="tab-pane fade @if($fragment == 'pills-home2') show active @endif" id="pills-home2" role="tabpanel" aria-labelledby="pills-home2-tab2" tabindex="0">
    <div class="carousel-inne">
      <div class="bannerImage">
        <img class="w-100 hFull" src="{{ asset('assets/img/service/aerial-view-business-team.jpg')}}" alt="Image">
        <div class="w-100 posAbs d-flex flex-column align-items-center justify-content-center">
          <div class="container">
            <div class="p-3 text-left">
              <p class='text-white text-center serviceBannerText'>Consulting
                <span class='txtYellow'>& Digital Transformation Solutions</span>
              </p>
              <p class='text-center text-white'></p>
            </div>
          </div>
        </div>

      </div>
    </div>

    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
      <div class="container">
        <div class="row g-5">
          <div class="col-lg-6 col-md-6 col-sm-12 pt-3">
            <div class="img-content">
              <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/service/Consulting and Digital Transformation Solution.png')}}">
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="position-relative pb-3">
              <h1 style="color:black;"> Consulting and Digital <span class="text-primary">Transformation</span></h1>
            </div>
            <p class="mb-2 text-justify">At IVT, we offer a Consulting and Digital Transformation solution to analyze the organization's requirements, existing resources and their ability to scale to recommend the right digital processes and the experience transformation guideposts that help them to effectively use the digital technology, tools and platforms.
            </p>

            {{-- <a href="{{ route('about')}}" class="btn btn-dark rounded-pill py-3 px-5 mt-3 wow zoomIn"
            data-wow-delay="0.9s">Know More <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8" />
            </svg></a> --}}
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid bg-primary wow fadeInUp" data-wow-delay="0.2s">
      <div class="container">
        <div class="text-center position-relative pb-3 mb-4 mx-auto">
          <h1 style="color:black;">Our <span class="text-primary"> Offerings</span></h1>
          <!-- <p>At IVT, our consulting and digital team specializes in guiding organizations through seamless digital transformations, leveraging cutting-edge technologies and innovative strategies. With expertise in AI, mobility services, business intelligence, and automation, we empower businesses to adapt, innovate, and thrive in today's rapidly evolving digital landscape.</p> -->
        </div>
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="row">
              <div class="col-md-2">
                <img class=" wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/service/Generative Artificial Intelligence.png')}}">
              </div>
              <div class="col-md-10">
                <h5 class="fw-bold">Generative Artificial Intelligence</h5>
                <p class="text-justify"> IVT leverages generative AI to empower diverse applications, from image synthesis to natural language generation. Our cutting-edge solutions harness the power of generative models to create realistic content, revolutionizing industries with innovation.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="row">
              <div class="col-md-2 ">
                <img class=" wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/service/Mobility Services.png')}}">
              </div>
              <div class="col-md-10">
                <h5 class="fw-bold">Mobility Services</h5>
                <p class="text-justify">We integrate cutting-edge technologies to optimize fleet management, improve user experiences, and enhance operational efficiency. From IoT-driven insights to seamless mobile applications, our tailored solutions empower organizations to stay competitive and agile in the rapidly evolving mobility landscape.
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="row mt-3">
          <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="row">
              <div class="col-md-2">
                <img class=" wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/service/Business Intelligence.png')}}">
              </div>
              <div class="col-md-10">
                <h5 class="fw-bold">Business Intelligence</h5>
                <p class="text-justify">Our Business Intelligence Services (BI) enables organizations to leverage data effectively for strategic decision-making and innovation. We Provide Data Warehouse Modernization, Data Mining and Discovery, Data Governance and Visualization Data, Cleansing and Aggregation, Master Data Management, Decision Support System, Intelligent Analytics.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="row">
              <div class="col-md-2 ">
                <img class=" wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/service/Automation.png')}}">
              </div>
              <div class="col-md-10">
                <h5 class="fw-bold">Automation</h5>
                <p class="text-justify">We streamline processes, increase efficiency, and reduce costs through intelligent automation, including RPA and AI-driven workflows. From automating repetitive tasks to optimizing complex workflows, our solutions empower organizations to drive innovation and achieve sustainable growth in today's competitive landscape.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row mt-3">
          <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="row">
              <div class="col-md-2">
                <img class=" wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/service/Digital Transformation.png')}}">
              </div>
              <div class="col-md-10">
                <h5 class="fw-bold">Digital Transformation</h5>
                <p class="text-justify"> We lead organizations through every stage of their digital journey, leveraging cutting-edge technologies like AI, IoT, and cloud computing. From strategy development to implementation, we ensure seamless transitions, enhanced customer experiences, and sustained growth in today's rapidly evolving digital landscape.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="row">
              <div class="col-md-2 ">
                <img class=" wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/service/Business Analytics.png')}}">
              </div>
              <div class="col-md-10">
                <h5 class="fw-bold">Business Analytics</h5>
                <p class="text-justify">Intelli Vectra Technologies offers advanced business analytics solutions, providing actionable insights from vast datasets. Leveraging cutting-edge techniques like machine learning and predictive modeling, we empower businesses to make informed decisions and drive growth.</p>
              </div>
            </div>
          </div>
        </div>


      </div>
    </div>

    <div class="container-fluid py-4 bg-primary wow fadeInUp" data-wow-delay="0.4s">
      <div class="container">
        <div class="text-center position-relative pb-3 mx-auto">
          <h1 style="color:black;">Our <span class="text-primary">Process</span></h1>
          <!-- <p>AAt IVT, we have a structured process to guide an organization, for consulting and digital transformation solutions it begins with the assessment of your organization's needs and goals. We then develop a strategic roadmap tailored to your objectives, leveraging advanced technologies such as AI, mobility services, and business intelligence. Through meticulous planning, implementation, and optimization, we guide you through every step of your digital journey, ensuring seamless integration and maximum impact.

          </p> -->
        </div>
        <div class="row g-3">
          <div class="col-lg-4 col-md-6 mt-3">
            <div class="card p-4" style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px">
              <img src="{{ asset('assets/img/service/cloud-trans-process/Assessment and Strategy Development.png')}}" class="card-img-top m-auto w-100 rounded-3  p-1 my-3" alt="azur-image" style="max-width: 70px" />
              <div class="card-body">
                <h5 class="card-title text-center fw-bold fs-5">
                  Assessment and Analysis
                </h5>
                <p class="card-text">
                  Our comprehensive assessment of the organization's current IT landscape, business processes, and digital maturity level analyze existing data sources and systems to identify opportunities for improvement and areas where AI, mobility services, business intelligence, and automation can add value.
                </p>

              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-3">
            <div class="card p-4" style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px">
              <img src="{{ asset('assets/img/service/cloud-trans-process/Migration and Deployment.png')}}" class="card-img-top m-auto w-100 rounded-3  p-1 my-3" alt="azur-image" style="max-width: 70px" />
              <div class="card-body">
                <h5 class="card-title text-center fw-bold fs-5">
                  Strategic Planning and Roadmap Development
                </h5>
                <p class="card-text">
                  We prioritize clear digital transformation objectives and align them with the organization's overall strategic goals to develop a roadmap that outlines the steps, timelines, and resource allocations for implementing AI, mobility services, business intelligence, automation, and other digital initiatives.
                </p>

              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-3">
            <div class="card p-4" style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px">
              <img src="{{ asset('assets/img/service/cloud-trans-process/Optimization and Governance.png')}}" class="card-img-top m-auto w-100 rounded-3 p-1 my-3" alt="azur-image" style="max-width: 70px" />
              <div class="card-body">
                <h5 class="card-title text-center fw-bold fs-5">
                  Solution Design and Architecture
                </h5>
                <p class="card-text">
                  Our Team designs the technical architecture and infrastructure required to support AI, mobility services, business intelligence, automation, and other digital transformation initiatives.
                </p>

              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-3">
            <div class="card p-4" style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px">
              <img src="{{ asset('assets/img/service/cloud-trans-process/Security and Compliance.png')}}" class="card-img-top m-auto w-100 rounded-3  p-1 my-3" alt="azur-image" style="max-width: 70px" />
              <div class="card-body">
                <h5 class="card-title text-center fw-bold fs-5">
                  Implementation and Integration
                </h5>
                <p class="card-text">
                  Our team develop and deploy AI models, mobile applications, BI dashboards, automation workflows, and other digital solutions according to the established roadmap.
                </p>

              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-3">
            <div class="card p-4" style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px">
              <img src="{{ asset('assets/img/service/cloud-trans-process/Training and Change Management.png')}}" class="card-img-top m-auto w-100 rounded-3  p-1 my-3" alt="azur-image" style="max-width: 70px" />
              <div class="card-body">
                <h5 class="card-title text-center fw-bold fs-5">
                  Reporting and Analytics
                </h5>
                <p class="card-text">
                  Our Digital Team develops BI dashboards and reporting tools to provide stakeholders with actionable insights into AI performance, business operations, and automation effectiveness.
                </p>

              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-3">
            <div class="card p-4" style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px">
              <img src="{{ asset('assets/img/service/cloud-trans-process/Migration and Deployment.png')}}" class="card-img-top m-auto w-100 rounded-3  p-1 my-3" alt="azur-image" style="max-width: 70px" />
              <div class="card-body">
                <h5 class="card-title text-center fw-bold fs-5">
                  Optimization and Assessment
                </h5>
                <p class="card-text">
                  Our Digital Team develops seamless transition of applications and data to the cloud, ensuring minimal disruption and optimizing performance, scalability, and cost-effectiveness for efficient business operations.
                </p>

              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
    <div class="col-lg-12 my-5 mb-5 p-0" style="min-height: 600px">
          <div class="row mb-5">
            <div class="col-lg-4 col-md-4 col-sm-12">
              <div class="container-fluid py-4 bg-primary wow fadeInUp bg-primary ml-0 ml-md-5" data-wow-delay="0.4s">
                <div class="container">
                  <div class="position-relative pb-3 mb-4 mx-auto">
                    <h4 class="text-left" style="color:black;"> Key Features of Our <span class="text-primary">Consulting and Digital Transformation</span></h4>
                    <ul>
                      <li>Strategic Planning and Roadmapping</li>
                      <li>Technology Evaluation and Adoption</li>
                      <li>Change Management and Organizational Culture</li>
                      <li>Data-driven Insights and Analytics</li>
                      <li>Agile and Iterative Approach</li>
                      <li>Cybersecurity and Risk Management</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-12">
              <div class="service-feature bg h300">
                <div class="row g-5">
                  <div id="service-feature" class="px-5 owl-carousel service-feature-carousel">
                    <div class="mr-4 wow slideInUp" data-wow-delay="0.1s">
                      <div class=" wow slideInUp mx-2 " data-wow-delay="0.3s">
                        <div class="ser-feature-card bg-light overflow-hidden">
                          <div class="team-img position-relative overflow-hidden d-flex justify-content-center">
                            <img class="img-fluid w-50 h-50 p-5" src="{{ asset('assets/img/service/Business Intelligence.png')}}" alt="">
                          </div>
                          <div class="text-center py-4">
                            <h5 class="fw-bold">Cybersecurity and Risk Management</h5>
                            <p class="mx-3 text-center m-0 my-3">Consulting and transformation solutions conducts risk assessments, implements robust security measures, and ensures compliance with regulations.
                               </p>

                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="mr-4 wow slideInUp" data-wow-delay="0.2s">
                      <div class="wow slideInUp mx-2" data-wow-delay="0.3s">
                        <div class="ser-feature-card  bg-light overflow-hidden">
                          <div class="team-img position-relative overflow-hidden d-flex justify-content-center">
                            <img class="img-fluid w-50 p-5" src="{{ asset('assets/img/service/Mobility Services.png')}}" alt="">
                          </div>
                          <div class="text-center py-4">
                            <h5 class="fw-bold">Strategic Planning and Roadmapping</h5>
                            <p class="mx-3 text-center m-0 my-3">This involves conducting comprehensive assessments of the current state of the organization, its goals, challenges, and opportunities.
                            </p>

                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="mr-4 wow slideInUp" data-wow-delay="0.3s">
                      <div class="wow slideInUp mx-2" data-wow-delay="0.3s">
                        <div class="ser-feature-card  bg-light overflow-hidden">
                          <div class="team-img position-relative overflow-hidden d-flex justify-content-center">
                            <img class="img-fluid w-50 p-5" src="{{ asset('assets/img/service/Generative Artificial Intelligence.png')}}" alt="">
                          </div>
                          <div class="text-center py-4">
                            <h5 class="fw-bold">Technology Evaluation and Adoption</h5>
                            <p class="mx-3 text-center m-0 my-3">Effective solutions help organizations evaluate emerging technologies and determine their suitability for specific use cases.</p>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="mr-4 wow slideInUp" data-wow-delay="0.2s">
                      <div class="wow slideInUp mx-2" data-wow-delay="0.3s">
                        <div class="ser-feature-card  bg-light overflow-hidden">
                          <div class="team-img position-relative overflow-hidden d-flex justify-content-center">
                            <img class="img-fluid w-50 p-5" src="{{ asset('assets/img/service/Digital Transformation.png')}}" alt="">
                          </div>
                          <div class="text-center py-4">
                            <h5 class="fw-bold">Change Management and Organizational Culture</h5>
                            <p class="mx-3 text-center m-0 my-3"> Digital transformation requires a cultural shift within the organization by fostering a culture of innovation, collaboration, and adaptability.</p>
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


    <div class="container my-5">
      <p class="fs-1 text-center" style="font-size:35px;">
        <b>Benefits of <span style="color:#F19F1F;">Consulting and Digital Transformation</span></b>
      </p>
      <div class="row g-5 mt-5 py-12">
        <div class="col-lg-4 col-md-6 mt-4">
          <div class="card p-5" style="background-color: #ECECEC">
            <div class="card-image" style="background-color: #F19F1F">
              <img src="{{ asset('assets/img/Consultation and Support for Cloud Services.png')}}" class="card-img-top m-auto w-100 rounded-3 py-4 px-3 my-1" alt="azur-image" style="max-width: 80px" />
              <div class="triangle-up"></div>
            </div>
            <div class="card-body">
              <h5 class="card-title fw-bold fs-3 mt-3">
                Competitive Advantage
              </h5>
              <p class="card-text fs-6">
                Elevate your competitive advantage with our consulting and digital transformation services. Implement innovative strategies, technologies, and insights to outperform competitors and lead your industry.
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-4">
          <div class="card p-5 text-light" style="background-color: #F19F1F">
            <div class="card-image" style="background-color: #ECECEC">
              <img src="{{ asset('assets/img/Assessment and Consultation.png')}}" class="card-img-top m-auto w-100 rounded-3 py-4 px-3 my-1" alt="azur-image" style="max-width: 80px" />
              <div class="triangle-up"></div>
            </div>
            <div class="card-body">
              <h5 class="card-title fw-bold fs-3 mt-3">
                Improved management of resources
              </h5>
              <p class="card-text fs-6">
                Information & resources are consolidated into a suite of tools for business through digital transformation. It consolidates company resources & reduces overlap between vendors rather than using dispersed software & databases.

              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-4">
          <div class="card p-5" style="background-color: #ECECEC">
            <div class="card-image" style="background-color: #F19F1F">
              <img src="{{ asset('assets/img/image 5.png')}}" class="card-img-top m-auto w-100 rounded-3 py-4 px-3 my-1" alt="azur-image" style="max-width: 80px" />
              <div class="triangle-up"></div>
            </div>
            <div class="card-body">
              <h5 class="card-title fw-bold fs-3 mt-3">
                Reduction in costs
              </h5>
              <p class="card-text fs-6">
                Optimize costs with our consulting and digital transformation services. Implement efficient processes, automate tasks, and streamline operations for significant savings and improved profitability.
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-4">
          <div class="card text-light p-5" style="background-color: #F19F1F">
            <div class="card-image" style="background-color: #ECECEC">
              <img src="{{ asset('assets/img/Tailored Licensing Solutions.png')}}" class="card-img-top m-auto w-100 rounded-3 py-4 px-3 my-1" alt="azur-image" style="max-width: 80px" />
              <div class="triangle-up"></div>
            </div>
            <div class="card-body">
              <h5 class="card-title fw-bold fs-3 mt-3">
                Data-Driven Insights
              </h5>
              <p class="card-text fs-6">
                Gain actionable insights with our consulting and digital transformation services. Leverage data-driven strategies for informed decision-making, enhanced performance, and sustainable competitive advantage.
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-4">
          <div class="card p-5" style="background-color: #ECECEC">
            <div class="card-image" style="background-color: #F19F1F">
              <img src="{{ asset('assets/img/Continuous Support and Optimization.png')}}" class="card-img-top m-auto w-100 rounded-3 py-4 px-3 my-1" alt="azur-image" style="max-width: 80px" />
              <div class="triangle-up"></div>
            </div>
            <div class="card-body">
              <h5 class="card-title fw-bold fs-3 mt-3">
                Efficiency and Productivity
              </h5>
              <p class="card-text fs-6">
                Maximize efficiency and productivity through our consulting and digital transformation services. Harness cutting-edge solutions for streamlined operations and accelerated growth.
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-4">
          <div class="card text-light p-5" style="background-color: #F19F1F">
            <div class="card-image" style="background-color: #ECECEC">
              <img src="{{ asset('assets/img/Optimization and Performance Tuning.png')}}" class="card-img-top m-auto w-100 rounded-3 py-4 px-3 my-1" alt="azur-image" style="max-width: 80px" />
              <div class="triangle-up"></div>
            </div>
            <div class="card-body">
              <h5 class="card-title fw-bold fs-3 mt-3">
                Agility and Adaptability
              </h5>
              <p class="card-text fs-6">
                Consulting and Digital transformation solutions make organizations more agile and adaptable to change, allowing them to respond quickly to market dynamics, emerging trends, and competitive threats.

              </p>
            </div>
          </div>
        </div>


      </div>
    </div>

    {{--@include('landing.components.service-banner')--}}


    <div class="container my-5 ">
      <div class="d-flex flex-column align-items-center justify-content-center py-2 pb-2">
        <h4 class="fw-bold text-primary">FAQ</h4>
      </div>

      <div class="accordion feature-faq feature__feq" id="accordionExample">
        <div class="card">
          <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample" data-target="#collapseOne" aria-expanded="true">
            <h6 class="fw-bold">What is digital transformation, and why is it important for businesses?</h6>
            <div class="acoord-btn text-right mr-2">

            </div>
          </div>
          <div id="collapseOne" class="collapse " data-parent="#accordionExample">
            <div class="card-body">
              <p>Digital transformation is the process by which companies embed technologies across their businesses to drive fundamental change. The benefits are increased efficiency, greater business agility and, ultimately, the unlocking of new value for employees, customers and shareholders.</p>
            </div>
          </div>
        </div>

        <div class="card">
          <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true">
            <h6 class="fw-bold">What are the key components of a successful digital transformation strategy?
            </h6>
            <div class="acoord-btn text-right mr-2">
              {{-- <a href="{{ route('career.apply')}}" class="rounded-career-btn mr-2 py-2 px-3 bg-dark mx-2">Apply <i class=" fas fa-arrow-right fw-normal"></i></a> --}}
              {{-- <span  class="accicon"><i class=" fas fa-angle-down rotate-icon"></i></span> --}}
            </div>
          </div>
          <div id="collapseTwo" class="collapse" data-parent="#accordionExample">
            <div class="card-body">
              <p>Key components typically include a clear vision and strategy, strong leadership and commitment, technology adoption, organizational culture change, and a focus on business experience.</p>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample" data-target="#collapseThree" aria-expanded="true">
            <h6 class="fw-bold">What is the timeline for digital transformation?</h6>
            <div class="acoord-btn text-right mr-2  pb-3">
              {{-- <a href="{{ route('career.apply')}}" class="rounded-career-btn mr-2 bg-dark mx-2">Apply <i class=" fas fa-arrow-right fw-normal"></i></a> --}}
              {{-- <span  class="accicon"><i class=" fas fa-angle-down rotate-icon"></i></span> --}}
            </div>
          </div>
          <div id="collapseThree" class="collapse" data-parent="#accordionExample">
            <div class="card-body">
              <p>It depends on the size of the organization to implement digital transformations. The technology's user-friendliness, leadership buy-in, and company culture are important for successful implementation.</p>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample" data-target="#collapseFour" aria-expanded="true">
            <h6 class="fw-bold"> What are the potential benefits of implementing mobility services in our digital transformation strategy?
               </h6>
            <div class="acoord-btn text-right mr-2  pb-3">
              {{-- <a href="{{ route('career.apply')}}" class="rounded-career-btn mr-2 bg-dark mx-2">Apply <i class=" fas fa-arrow-right fw-normal"></i></a> --}}
              {{-- <span  class="accicon"><i class="  px-3 fas fa-angle-down rotate-icon"></i></span> --}}
            </div>
          </div>
          <div id="collapseFour" class="collapse" data-parent="#accordionExample">
            <div class="card-body">
              <p>Mobility services enable organizations to enhance employee productivity, improve customer engagement, and access real-time data from anywhere. They can also enable innovative business models and streamline operations.</p>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample" data-target="#collapseFive" aria-expanded="true">
            <h6 class="fw-bold"> How can we overcome the challenges of digital transformation?</h6>
            <div class="acoord-btn text-right mr-2  pb-3">
              {{-- <a href="{{ route('career.apply')}}" class="rounded-career-btn mr-2 bg-dark mx-2">Apply <i class=" fas fa-arrow-right fw-normal"></i></a> --}}
              {{-- <span  class="accicon"><i class=" fas fa-angle-down rotate-icon"></i></span> --}}
            </div>
          </div>
          <div id="collapseFive" class="collapse" data-parent="#accordionExample">
            <div class="card-body">
              <p>Overcoming the challenges of digital transformation requires a strategic, holistic approach. Organizations must prioritize cultural change, invest in talent development, and carefully manage technological, regulatory, and financial aspects.</p>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample" data-target="#collapseSix" aria-expanded="true">
            <h6 class="fw-bold">What are the typical components of a digital transformation strategy?</h6>
            <div class="acoord-btn text-right mr-2  pb-3">
              {{-- <a href="{{ route('career.apply')}}" class="rounded-career-btn mr-2 bg-dark mx-2">Apply <i class=" fas fa-arrow-right fw-normal"></i></a> --}}
              {{-- <span  class="accicon"><i class=" fas fa-angle-down rotate-icon"></i></span> --}}
            </div>
          </div>
          <div id="collapseSix" class="collapse" data-parent="#accordionExample">
            <div class="card-body">
              <p>A digital transformation strategy usually includes elements such as adopting new technologies, optimizing business processes, enhancing customer experiences, and fostering a culture of innovation within the organization.</p>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample" data-target="#collapseSeven" aria-expanded="true">
            <h6 class="fw-bold">How can consulting services help with digital transformation initiatives?</h6>
            <div class="acoord-btn text-right mr-2  pb-3">
              {{-- <a href="{{ route('career.apply')}}" class="rounded-career-btn mr-2 bg-dark mx-2">Apply <i class=" fas fa-arrow-right fw-normal"></i></a> --}}
              {{-- <span  class="accicon"><i class=" fas fa-angle-down rotate-icon"></i></span> --}}
            </div>
          </div>
          <div id="collapseSeven" class="collapse" data-parent="#accordionExample">
            <div class="card-body">
              <p>Consulting services provide expertise, guidance, and support throughout the digital transformation journey. Consultants help organizations assess their current state, define digital transformation goals, develop strategies, and implement solutions to achieve desired outcomes.</p>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample" data-target="#collapseEight" aria-expanded="true">
            <h6 class="fw-bold">How can digital transformation improve operational efficiency?</h6>
            <div class="acoord-btn text-right mr-2  pb-3">
              {{-- <a href="{{ route('career.apply')}}" class="rounded-career-btn mr-2 bg-dark mx-2">Apply <i class=" fas fa-arrow-right fw-normal"></i></a> --}}
              {{-- <span  class="accicon"><i class=" fas fa-angle-down rotate-icon"></i></span> --}}
            </div>
          </div>
          <div id="collapseEight" class="collapse" data-parent="#accordionExample">
            <div class="card-body">
              <p>Digital transformation can streamline processes, automate repetitive tasks, and optimize resource allocation, leading to improved efficiency and productivity across the organization. By digitizing workflows and leveraging technology solutions, businesses can eliminate bottlenecks and drive cost savings.</p>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample" data-target="#collapseNine" aria-expanded="true">
            <h6 class="fw-bold">What are the risks associated with digital transformation, and how can they be mitigated?</h6>
            <div class="acoord-btn text-right mr-2  pb-3">
              {{-- <a href="{{ route('career.apply')}}" class="rounded-career-btn mr-2 bg-dark mx-2">Apply <i class=" fas fa-arrow-right fw-normal"></i></a> --}}
              {{-- <span  class="accicon"><i class=" fas fa-angle-down rotate-icon"></i></span> --}}
            </div>
          </div>
          <div id="collapseNine" class="collapse" data-parent="#accordionExample">
            <div class="card-body">
              <p>Risks of digital transformation include cybersecurity threats, data privacy concerns, and resistance to change from employees. These risks can be mitigated through robust security measures, compliance with regulations, employee training, and effective change management strategies.</p>
            </div>
          </div>
        </div>
      </div>
    </div>


    @include('landing.components.get-in-touch')
  </div>


  <div class="tab-pane fade @if($fragment == 'pills-profile2') show active @endif" id="pills-profile2" role="tabpanel" aria-labelledby="pills-profile2-tab2" tabindex="0">
    <div class="carousel-inne">
      <div class="bannerImage">
        <img class="w-100 hFull" src="{{ asset('assets/img/service/standard-quality-control-concept-m.jpg')}}" alt="Image">
        <div class="w-100 posAbs d-flex flex-column align-items-center justify-content-center">
          <div class="container">
            <div class="p-3 text-left">
              <p class='text-white text-center serviceBannerText'>Enterprise
                <span class='txtYellow'>Application Modernization Solutions</span>
              </p>
              <p class='text-center text-white'></p>
            </div>
          </div>
        </div>

      </div>
    </div>

    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
      <div class="container">
        <div class="row g-5">
          <div class="col-lg-6 col-md-6 col-sm-12 pt-3">
            <div class="img-content">
              <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/service/Enterprise Application Modernization Solutions.png')}}">
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="position-relative pb-3">
              <h1 style="color:black;">Enterprise Application <span class="text-primary">Modernization</span></h1>
            </div>
            <p class="mb-2 text-justify">Enterprise Application Modernization is the process of updating and transforming legacy applications to meet current business needs, enhance performance, and improve scalability, security, and efficiency. In today's rapidly evolving digital landscape, businesses are increasingly recognizing the importance of modernizing their applications to stay competitive, reduce operational costs, and leverage emerging technologies.</p>

            {{-- <a href="{{ route('about')}}" class="btn btn-dark rounded-pill py-3 px-5 mt-3 wow zoomIn"
            data-wow-delay="0.9s">Know More <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8" />
            </svg></a> --}}
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid bg-primary wow fadeInUp" data-wow-delay="0.2s">
      <div class="container">
        <div class="text-center position-relative pb-3 mb-4 mx-auto">
          <h1 style="color:black;">Our <span class="text-primary"> Offerings</span></h1>
          <!-- <p>At IVT, we offer comprehensive Enterprise Application Modernization solutions tailored to meet the specific needs and challenges of your organization. Our offerings encompass a range of services and strategies designed to modernize your legacy applications, improve performance, and drive business agility.</p> -->
        </div>
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="row">
              <div class="col-md-2">
                <img class=" wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/service/Application Assessment and Strategy Development.png')}}">
              </div>
              <div class="col-md-10">
                <h5 class="fw-bold"> Application Assessment and Strategy Development</h5>
                <p class="text-justify">We conduct a thorough assessment of your existing applications, infrastructure, and business objectives to develop a customized modernization roadmap. Our experts identify legacy systems, analyze their dependencies, and prioritize modernization efforts based on business value and technical complexity.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="row">
              <div class="col-md-2 ">
                <img class=" wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/service/Refactoring and Replatforming.png')}}">
              </div>
              <div class="col-md-10">
                <h5 class="fw-bold">Refactoring and Replatforming</h5>
                <p class="text-justify">We refactor legacy codebases, optimize performance, and modernize architectures to improve scalability, flexibility, and maintainability. Our team helps you replatform applications to modern environments, leveraging cloud platforms, containerization, and microservices architecture for increased agility and cost savings.
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="row">
              <div class="col-md-2">
                <img class=" wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/service/Cloud Migration and Optimization.png')}}">
              </div>
              <div class="col-md-10">
                <h5 class="fw-bold">Cloud Migration and Optimization</h5>
                <p class="text-justify"> We facilitate the migration of your applications to cloud environments, enabling you to leverage the scalability, reliability, and cost-efficiency of cloud computing. Our cloud optimization services ensure that your applications are running efficiently and cost-effectively, utilizing cloud-native services and best practices.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="row">
              <div class="col-md-2 ">
                <img class=" wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/service/API Development and Integration.png')}}">
              </div>
              <div class="col-md-10">
                <h5 class="fw-bold">API Development and Integration</h5>
                <p class="text-justify">We adopt an API-first approach to expose functionality as reusable APIs, enabling seamless integration with other systems and supporting the development of new applications and services. Our API management solutions ensure security, scalability, and reliability of your API ecosystem.
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="row">
              <div class="col-md-2">
                <img class=" wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/service/DevOps and Continuous Delivery.png')}}">
              </div>
              <div class="col-md-10">
                <h5 class="fw-bold">DevOps and Continuous Delivery</h5>
                <p class="text-justify">We implement DevOps practices and continuous delivery pipelines to automate software delivery processes, reduce time-to-market, and improve collaboration between development and operations teams. Our DevOps experts help you establish robust CI/CD pipelines, infrastructure as code, and automated testing frameworks.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="row">
              <div class="col-md-2 ">
                <img class=" wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/service/Data Modernization and Analytics.png')}}">
              </div>
              <div class="col-md-10">
                <h5 class="fw-bold">Data Modernization and Analytics</h5>
                <p class="text-justify">We modernize your data infrastructure by migrating data to modern databases and data lakes, implementing data governance practices, and leveraging analytics and machine learning to derive actionable insights. Our data engineers and data scientists help you unlock the value of your data and drive data-driven decision-making.
                </p>
              </div>
            </div>
          </div>
        </div>
        <!-- <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="row">
              <div class="col-md-2">
                <img class=" wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/service/User Interface Modernization.png')}}">
              </div>
              <div class="col-md-10">
                <h5 class="fw-bold">User Interface Modernization</h5>
                <p class="text-justify"> We redesign user interfaces with modern UI frameworks, responsive design, and intuitive workflows to enhance user experience and productivity. Our UX/UI designers create engaging and intuitive interfaces that meet the expectations of today's users.</p>
              </div>
            </div>
          </div>
        </div> -->
      </div>
    </div>


    <div class="container-fluid py-4 bg-primary wow fadeInUp" data-wow-delay="0.4s">
      <div class="container">
        <div class="text-center position-relative pb-3 mx-auto">
          <h1 style="color:black;">Our<span class="text-primary"> Process</span></h1>
          <!-- <p>At IVT, we have developed a structured process to guide organizations through every stage of the modernization journey. This technical document outlines our process for Enterprise Application Modernization Solutions, including assessment, planning, implementation, and support.

          </p> -->
        </div>

        <div class="row g-3 mt-4">
          <div class="col-lg-4 col-md-6 mt-3">
            <div class="card p-4" style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px">
              <img src="{{ asset('assets/img/service/Strategy Development.png')}}" class="card-img-top m-auto w-100 rounded-3  p-1 my-3" alt="azur-image" style="max-width: 70px" />
              <div class="card-body">
                <h5 class="card-title text-center fw-bold fs-5">
                  Strategy Development
                </h5>
                <p class="card-text">
                  We prioritize modernization efforts, select appropriate technologies, conduct ROI analysis, and define governance processes. Our strategy ensures alignment with business objectives and sets the direction for successful application modernization initiatives.
                </p>

              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-3">
            <div class="card p-4" style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px">
              <img src="{{ asset('assets/img/service/Implementation.png')}}" class="card-img-top m-auto w-100 rounded-3  p-1 my-3" alt="azur-image" style="max-width: 70px" />
              <div class="card-body">
                <h5 class="card-title text-center fw-bold fs-5">
                  Implementation
                </h5>
                <p class="card-text">
                  Our process includes refactoring, cloud migration, API development, and UI modernization. We execute the modernization plan efficiently, leveraging best practices to transform legacy applications into scalable, secure, and user-friendly solutions.
                </p>

              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-3">
            <div class="card p-4" style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px">
              <img src="{{ asset('assets/img/service/Testing and Quality Assurance.png')}}" class="card-img-top m-auto w-100 rounded-3 p-1 my-3" alt="azur-image" style="max-width: 70px" />
              <div class="card-body">
                <h5 class="card-title text-center fw-bold fs-5">
                  Testing and Quality Assurance
                </h5>
                <p class="card-text">
                  We conduct rigorous unit, integration, performance, and security testing to ensure the reliability and security of modernized applications. Our thorough testing process guarantees high-quality outcomes for your enterprise application modernization.
                </p>

              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-3">
            <div class="card p-4" style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px">
              <img src="{{ asset('assets/img/service/Deployment and Rollout.png')}}" class="card-img-top m-auto w-100 rounded-3  p-1 my-3" alt="azur-image" style="max-width: 70px" />
              <div class="card-body">
                <h5 class="card-title text-center fw-bold fs-5">
                  Deployment and Rollout
                </h5>
                <p class="card-text">
                  We plan and execute smooth deployment of modernized applications, coordinating releases, providing training, and implementing monitoring tools. Our goal is to minimize downtime and disruptions while ensuring successful deployment.
                </p>

              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-3">
            <div class="card p-4" style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px">
              <img src="{{ asset('assets/img/service/Post-Implementation Support.png')}}" class="card-img-top m-auto w-100 rounded-3  p-1 my-3" alt="azur-image" style="max-width: 70px" />
              <div class="card-body">
                <h5 class="card-title text-center fw-bold fs-5">
                  Post-Implementation Support
                </h5>
                <p class="card-text">
                  Our ongoing support includes incident management, performance optimization, security updates, and user training. We ensure the continued performance, stability, and security of modernized applications to maximize their benefits for your organization.
                </p>

              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-3">
            <div class="card p-4" style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px">
              <img src="{{ asset('assets/img/service/Assessment and Discovery.png')}}" class="card-img-top m-auto w-100 rounded-3  p-1 my-3" alt="azur-image" style="max-width: 70px" />
              <div class="card-body">
                <h5 class="card-title text-center fw-bold fs-5">
                  Assessment and Discovery
                </h5>
                <p class="card-text">
                  Our comprehensive assessment identifies legacy applications, evaluates technology stacks, aligns with business goals, and analyzes risks. The outcome is a detailed modernization roadmap tailored to your organization's needs and objectives.
                </p>

              </div>
            </div>
          </div>
        </div>

      </div>
      <div class="col-lg-12 my-5 mb-5 p-0" style="min-height: 600px">
        <div class="row mb-5">
          <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="container-fluid py-4 bg-primary wow fadeInUp bg-primary ml-0 ml-md-5" data-wow-delay="0.4s">
              <div class="container">
                <div class="position-relative pb-3 mb-4 mx-auto">
                  <h4 class="text-left">Key features of <span class="text-primary">Enterprise Application Modernization Solutions</span></h4>
                  <ul>
                    <li>Cloud Migration Capabilities</li>
                    <li>Microservices Architecture</li>
                    <li>Containerization and Orchestration</li>
                    <li>API-Driven Integration</li>
                    <li>DevOps and Continuous Integration/Continuous Deployment (CI/CD)</li>
                    <li>Advanced Security Measures</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-8 col-md-8 col-sm-12">
            <div class="service-feature bg h300">
              <div class="row g-5">

                <div id="service-feature" class="px-5 owl-carousel service-feature-carousel">
                  <div class="mr-4 wow slideInUp" data-wow-delay="0.1s">
                    <div class=" wow slideInUp mx-2 " data-wow-delay="0.3s">
                      <div class="ser-feature-card bg-light overflow-hidden">
                        <div class="team-img position-relative overflow-hidden d-flex justify-content-center">
                          <img class="img-fluid w-50 h-50 p-5" src="{{ asset('assets/img/service/Cloud Migration and Optimization.png')}}" alt="">
                        </div>
                        <div class="text-center py-4">
                          <h5 class="fw-bold">Cloud Migration Capabilities</h5>
                          <p class="mx-3 text-center m-0 my-3">Modernization solutions facilitates seamless migration of applications to cloud environments.
                             </p>

                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="mr-4 wow slideInUp" data-wow-delay="0.2s">
                    <div class="wow slideInUp mx-2" data-wow-delay="0.3s">
                      <div class="ser-feature-card  bg-light overflow-hidden">
                        <div class="team-img position-relative overflow-hidden d-flex justify-content-center">
                          <img class="img-fluid w-50 p-5" src="{{ asset('assets/img//service/Data Modernization and Analytics.png')}}" alt="">
                        </div>
                        <div class="text-center py-4">
                          <h5 class="fw-bold">Microservices Architecture</h5>
                          <p class="mx-3 text-center m-0 my-3">Adopting a microservices architecture allows applications to be broken down into smaller, loosely coupled services.
                          </p>

                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="mr-4 wow slideInUp" data-wow-delay="0.3s">
                    <div class="wow slideInUp mx-2" data-wow-delay="0.3s">
                      <div class="ser-feature-card  bg-light overflow-hidden">
                        <div class="team-img position-relative overflow-hidden d-flex justify-content-center">
                          <img class="img-fluid w-50 p-5" src="{{ asset('assets/img//service/Refactoring and Replatforming.png')}}" alt="">
                        </div>
                        <div class="text-center py-4">
                          <h5 class="fw-bold">Containerization and Orchestration</h5>
                          <p class="mx-3 text-center m-0 my-3">Containerization, using technologies like Docker, along with orchestration tools such as Kubernetes, is crucial for modernizing applications.</p>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="mr-4 wow slideInUp" data-wow-delay="0.2s">
                    <div class="wow slideInUp mx-2" data-wow-delay="0.3s">
                      <div class="ser-feature-card  bg-light overflow-hidden">
                        <div class="team-img position-relative overflow-hidden d-flex justify-content-center">
                          <img class="img-fluid w-50 p-5" src="{{ asset('assets/img//service/API Development and Integration.png')}}" alt="">
                        </div>
                        <div class="text-center py-4">
                          <h5 class="fw-bold">API-Driven Integration</h5>
                          <p class="mx-3 text-center m-0 my-3">Effective modernization solutions prioritize API-driven integration, enabling seamless communication and data exchange.</p>

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

      <div class="container my-5">
        <p class="fs-1 text-center" style="font-size:35px;">
          <b>Benefits of <span style="color:#F19F1F;">Enterprise Application Modernization</span></b>
        </p>

        <div class="row g-5 mt-5 py-12">
          <div class="col-lg-4 col-md-6 mt-4">
            <div class="card p-5" style="background-color: #ECECEC">
              <div class="card-image" style="background-color: #F19F1F">
                <img src="{{ asset('assets/img/Assessment and Discovery.png')}}" class="card-img-top m-auto w-100 rounded-3 py-4 px-3 my-1" alt="azur-image" style="max-width: 80px" />
                <div class="triangle-up"></div>
              </div>
              <div class="card-body">
                <h5 class="card-title fw-bold fs-3 mt-3">
                Reduced Downtime

                </h5>
                <p class="card-text fs-6">
                By modernizing applications and infrastructure, businesses can minimize downtime due to maintenance, upgrades, or system failures. High availability and fault tolerance mechanisms ensure continuous operation.

                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-4">
            <div class="card p-5 text-light" style="background-color: #F19F1F">
              <div class="card-image" style="background-color: #ECECEC">
                <img src="{{ asset('assets/img/image 5.png')}}" class="card-img-top m-auto w-100 rounded-3 py-4 px-3 my-1" alt="azur-image" style="max-width: 80px" />
                <div class="triangle-up"></div>
              </div>
              <div class="card-body">
                <h5 class="card-title fw-bold fs-3 mt-3">
                  Cost Reduction
                </h5>
                <p class="card-text fs-6">
                  Modernization can lead to significant cost savings by optimizing resource utilization, reducing maintenance efforts, and leveraging cloud-based solutions that offer pay-as-you-go pricing models.
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-4">
            <div class="card p-5" style="background-color: #ECECEC">
              <div class="card-image" style="background-color: #F19F1F">
                <img src="{{ asset('assets/img/Implementation.png')}}" class="card-img-top m-auto w-100 rounded-3 py-4 px-3 my-1" alt="azur-image" style="max-width: 80px" />
                <div class="triangle-up"></div>
              </div>
              <div class="card-body">
                <h5 class="card-title fw-bold fs-3 mt-3">
                  Enhanced Scalability
                </h5>
                <p class="card-text fs-6">
                  Modernized applications are designed to scale dynamically, allowing businesses to handle increased workloads without major infrastructure investments. This scalability ensures consistent performance under varying demand conditions.
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-4">
            <div class="card text-light p-5" style="background-color: #F19F1F">
              <div class="card-image" style="background-color: #ECECEC">
                <img src="{{ asset('assets/img/Continuous Support and Optimization.png')}}" class="card-img-top m-auto w-100 rounded-3 py-4 px-3 my-1" alt="azur-image" style="max-width: 80px" />
                <div class="triangle-up"></div>
              </div>
              <div class="card-body">
                <h5 class="card-title fw-bold fs-3 mt-3">
                  Increased Productivity
                </h5>
                <p class="card-text fs-6">
                  Streamlined development processes, automated workflows, and improved collaboration through DevOps practices boost productivity among development teams. Developers can focus more on innovation and less on maintenance.
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-4">
            <div class="card p-5" style="background-color: #ECECEC">
              <div class="card-image" style="background-color: #F19F1F">
                <img src="{{ asset('assets/img/Implementation and Integration.png')}}" class="card-img-top m-auto w-100 rounded-3 py-4 px-3 my-1" alt="azur-image" style="max-width: 80px" />
                <div class="triangle-up"></div>
              </div>
              <div class="card-body">
                <h5 class="card-title fw-bold fs-3 mt-3">
                  Better User Experience
                </h5>
                <p class="card-text fs-6">
                  Modernized applications typically offer improved user interfaces, faster response times, and personalized features, leading to higher user satisfaction and increased adoption rates.
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-4">
            <div class="card text-light p-5" style="background-color: #F19F1F">
              <div class="card-image" style="background-color: #ECECEC">
                <img src="{{ asset('assets/img/Comprehensive IT Security Offerings.png')}}" class="card-img-top m-auto w-100 rounded-3 py-4 px-3 my-1" alt="azur-image" style="max-width: 80px" />
                <div class="triangle-up"></div>
              </div>
              <div class="card-body">
                <h5 class="card-title fw-bold fs-3 mt-3">
                Improved Agility
                </h5>
                <p class="card-text fs-6">
                Modernized applications are more agile and adaptable to changing business needs. They enable faster development cycles, easier integration of new features, and quicker responses to market demands.

</p>
              </div>
            </div>
          </div>


        </div>
      </div>

      {{--@include('landing.components.service-banner')--}}


      <div class="container my-5 ">
        <div class="d-flex flex-column align-items-center justify-content-center py-2 pb-2">
          <h4 class="fw-bold text-primary">FAQ</h4>
        </div>

        <div class="accordion feature-faq feature__feq" id="accordionExample">
          <div class="card">
            <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample" data-target="#collapseOne" aria-expanded="true">
              <h6 class="fw-bold">What is enterprise application modernization?
              </h6>
              <div class="acoord-btn text-right mr-2">

              </div>
            </div>
            <div id="collapseOne" class="collapse " data-parent="#accordionExample">
              <div class="card-body">
                <p>Enterprise application modernization is the process of updating, optimizing, and transforming existing software applications to meet current business needs, improve performance, and leverage modern technologies.</p>
              </div>
            </div>
          </div>

          <div class="card">
            <div class="card-header collapsed py-3" data-parent="#accordionExample" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true">
              <h6 class="fw-bold">Why is modernizing legacy applications important for businesses?</h6>
              <div class="acoord-btn text-right mr-2">

              </div>
            </div>
            <div id="collapseTwo" class="collapse" data-parent="#accordionExample">
              <div class="card-body">
                <p>Modernizing legacy applications helps businesses stay competitive, reduce costs, improve agility, enhance security, and deliver better user experiences.</p>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample" data-target="#collapseThree" aria-expanded="true">
              <h6 class="fw-bold">What are the key benefits of modernizing enterprise applications?</h6>
              <div class="acoord-btn text-right mr-2  pb-3">

              </div>
            </div>
            <div id="collapseThree" class="collapse" data-parent="#accordionExample">
              <div class="card-body">
                <p>Key benefits include improved agility, cost reduction, enhanced scalability and performance, better security, and increased productivity.</p>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample" data-target="#collapseFour" aria-expanded="true">
              <h6 class="fw-bold">How does cloud migration fit into application modernization?</h6>
              <div class="acoord-btn text-right mr-2  pb-3">

              </div>
            </div>
            <div id="collapseFour" class="collapse" data-parent="#accordionExample">
              <div class="card-body">
                <p>Cloud migration is a key component of application modernization, enabling scalability, flexibility, and cost-efficiency by moving applications and infrastructure to cloud platforms.</p>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample" data-target="#collapseFive" aria-expanded="true">
              <h6 class="fw-bold">What is microservices architecture, and how does it impact modernization?</h6>
              <div class="acoord-btn text-right mr-2  pb-3">

              </div>
            </div>
            <div id="collapseFive" class="collapse" data-parent="#accordionExample">
              <div class="card-body">
                <p>Microservices architecture breaks down monolithic applications into smaller, independent services, making them easier to maintain, scale, and deploy, which aligns well with modernization goals.
                </p>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample" data-target="#collapseSix" aria-expanded="true">
              <h6 class="fw-bold">What role does containerization play in application modernization?</h6>
              <div class="acoord-btn text-right mr-2  pb-3">

              </div>
            </div>
            <div id="collapseSix" class="collapse" data-parent="#accordionExample">
              <div class="card-body">
                <p>Containerization, using technologies like Docker and Kubernetes, enhances portability, scalability, and resource utilization, making applications more suitable for modern cloud environments.
                </p>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample" data-target="#collapseSeven" aria-expanded="true">
              <h6 class="fw-bold">How can modernization improve scalability and performance?</h6>
              <div class="acoord-btn text-right mr-2  pb-3">

              </div>
            </div>
            <div id="collapseSeven" class="collapse" data-parent="#accordionExample">
              <div class="card-body">
                <p>Modernization optimizes applications for scalability and performance by leveraging cloud resources, microservices architecture, and containerization, allowing them to handle growing workloads more efficiently.
                </p>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample" data-target="#collapseEight" aria-expanded="true">
              <h6 class="fw-bold">What security challenges does application modernization address?</h6>
              <div class="acoord-btn text-right mr-2  pb-3">

              </div>
            </div>
            <div id="collapseEight" class="collapse" data-parent="#accordionExample">
              <div class="card-body">
                <p>Application modernization addresses security challenges by implementing encryption, access controls, authentication, and threat detection measures to protect against cyber threats and data breaches.
                </p>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample" data-target="#collapseNine" aria-expanded="true">
              <h6 class="fw-bold">How can legacy system integration be achieved during modernization?</h6>
              <div class="acoord-btn text-right mr-2  pb-3">

              </div>
            </div>
            <div id="collapseNine" class="collapse" data-parent="#accordionExample">
              <div class="card-body">
                <p>Modernization solutions facilitate the integration of legacy systems with modernized applications through APIs, middleware, and data transformation tools, ensuring seamless interoperability.
                </p>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample" data-target="#collapseTen" aria-expanded="true">
              <h6 class="fw-bold">What strategies are used for data management and analytics in modernized applications?</h6>
              <div class="acoord-btn text-right mr-2  pb-3">

              </div>
            </div>
            <div id="collapseTen" class="collapse" data-parent="#accordionExample">
              <div class="card-body">
                <p>Modernized applications employ strategies such as data migration, warehousing, real-time analytics, and machine learning to manage and derive insights from data more effectively.
                </p>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample" data-target="#collapseEleven" aria-expanded="true">
              <h6 class="fw-bold">How does modernization impact user experience and customer satisfaction?</h6>
              <div class="acoord-btn text-right mr-2  pb-3">

              </div>
            </div>
            <div id="collapseEleven" class="collapse" data-parent="#accordionExample">
              <div class="card-body">
                <p>Modernization enhances user experience by improving interfaces, responsiveness, and personalization, leading to higher satisfaction and adoption rates among users.
                </p>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample" data-target="#collapseTwelve" aria-expanded="true">
              <h6 class="fw-bold">What compliance considerations should be taken into account during modernization?</h6>
              <div class="acoord-btn text-right mr-2  pb-3">

              </div>
            </div>
            <div id="collapseTwelve" class="collapse" data-parent="#accordionExample">
              <div class="card-body">
                <p>Compliance considerations include implementing security measures, audit trails, and access controls to ensure adherence to regulatory requirements and internal policies.
                </p>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample" data-target="#collapseThirteen" aria-expanded="true">
              <h6 class="fw-bold">How can modernization help optimize costs and ROI?</h6>
              <div class="acoord-btn text-right mr-2  pb-3">

              </div>
            </div>
            <div id="collapseThirteen" class="collapse" data-parent="#accordionExample">
              <div class="card-body">
                <p>Modernization optimizes costs by leveraging cloud resources efficiently, automating processes, and reducing maintenance overhead, resulting in better ROI and cost predictability.
                </p>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample" data-target="#collapseForteen" aria-expanded="true">
              <h6 class="fw-bold">What tools and methodologies are used in DevOps integration for modernization?</h6>
              <div class="acoord-btn text-right mr-2  pb-3">

              </div>
            </div>
            <div id="collapseForteen" class="collapse" data-parent="#accordionExample">
              <div class="card-body">
                <p>DevOps integration involves using tools like Jenkins, GitLab, and Ansible along with practices such as continuous integration, delivery, and deployment to streamline development and operations workflows.
                </p>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample" data-target="#collapseFifteen" aria-expanded="true">
              <h6 class="fw-bold">What monitoring and maintenance practices are involved in managing modernized applications?</h6>
              <div class="acoord-btn text-right mr-2  pb-3">

              </div>
            </div>
            <div id="collapseFifteen" class="collapse" data-parent="#accordionExample">
              <div class="card-body">
                <p>Monitoring and maintenance practices include real-time monitoring, automated alerts, performance tuning, and regular updates to ensure the smooth operation of modernized applications.
                </p>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample" data-target="#collapseSixteen" aria-expanded="true">
              <h6 class="fw-bold">How is knowledge transfer and documentation managed during the modernization process?</h6>
              <div class="acoord-btn text-right mr-2  pb-3">

              </div>
            </div>
            <div id="collapseSixteen" class="collapse" data-parent="#accordionExample">
              <div class="card-body">
                <p>Knowledge transfer and documentation are managed through comprehensive documentation, training sessions, and collaboration tools to ensure that teams have the necessary information and skills to maintain modernized applications.
                </p>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample" data-target="#collapseSeventeen" aria-expanded="true">
              <h6 class="fw-bold">What are common challenges organizations face during application modernization?</h6>
              <div class="acoord-btn text-right mr-2  pb-3">

              </div>
            </div>
            <div id="collapseSeventeen" class="collapse" data-parent="#accordionExample">
              <div class="card-body">
                <p>Common challenges include legacy system complexity, cultural resistance to change, skills gaps, and ensuring compatibility and interoperability with existing systems.
                </p>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample" data-target="#collapseEighteen" aria-expanded="true">
              <h6 class="fw-bold">How long does it typically take to modernize an enterprise application?</h6>
              <div class="acoord-btn text-right mr-2  pb-3">

              </div>
            </div>
            <div id="collapseEighteen" class="collapse" data-parent="#accordionExample">
              <div class="card-body">
                <p>The time to modernize an enterprise application can vary depending on factors such as the size and complexity of the application, the chosen modernization approach, and the availability of resources. It may range from several months to a year or more.
                </p>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample" data-target="#collapseNineteen" aria-expanded="true">
              <h6 class="fw-bold">What are some successful use cases or case studies of application modernization?</h6>
              <div class="acoord-btn text-right mr-2  pb-3">

              </div>
            </div>
            <div id="collapseNineteen" class="collapse" data-parent="#accordionExample">
              <div class="card-body">
                <p>Successful use cases include companies that have improved agility, reduced costs, and enhanced customer experiences through application modernization. Examples include Netflix, Amazon, and Capital One.
                </p>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample" data-target="#collapseTwenty" aria-expanded="true">
              <h6 class="fw-bold">How can we measure the success of an application modernization initiative?</h6>
              <div class="acoord-btn text-right mr-2  pb-3">

              </div>
            </div>
            <div id="collapseTwenty" class="collapse" data-parent="#accordionExample">
              <div class="card-body">
                <p>Success can be measured by factors such as improved performance, reduced downtime, increased user satisfaction, cost savings, and the achievement of business goals outlined in the modernization strategy. Regular monitoring of key metrics and feedback from stakeholders can help assess progress and success.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>

      @include('landing.components.get-in-touch')

    </div>

  </div>

  <div class="tab-pane fade @if($fragment == 'pills-contact2') show active @endif" id="pills-contact2" role="tabpanel" aria-labelledby="pills-contact2-tab2" tabindex="0">

    <div class="carousel-inne">
      <div class="bannerImage">
        <img class="w-100 hFull" src="{{ asset('assets/img/service/business-concept-with-team-close-up.jpg')}}" alt="Image">
        <div class="w-100 posAbs d-flex flex-column align-items-center justify-content-center">
          <div class="container">
            <div class="p-3 text-left">
              <p class='text-white text-center serviceBannerText'>Collaboration & Digital
                <span class='txtYellow'> Workplace Solutions</span>
              </p>
              <p class='text-center text-white'></p>
            </div>
          </div>
        </div>

      </div>
    </div>

    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
      <div class="container">
        <div class="row g-5">
          <div class="col-lg-6 col-md-6 col-sm-12 pt-3">
            <div class="img-content">
              <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/service/COLLABORATION AND DIGITAL WORKPLACE SOLUTION.png')}}">
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="position-relative pb-3">
              <h1 style="color:black;"> Collaboration & <span class="text-primary">Digital Workplace
                </span></h1>
            </div>
            <p class="mb-2 text-justify">We provide collaboration and digital workplace solutions aimed at enhancing communication and productivity within organizations. Through features such as interactive displays and virtual platforms, we facilitate seamless teamwork across physical and digital environments. These solutions promote creativity, optimize workflows, and facilitate informed decision-making to drive business growth.
            </p>

            {{-- <a href="{{ route('about')}}" class="btn btn-dark rounded-pill py-3 px-5 mt-3 wow zoomIn"
            data-wow-delay="0.9s">Know More <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8" />
            </svg></a> --}}
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid bg-primary wow fadeInUp" data-wow-delay="0.2s">
      <div class="container">
        <div class="text-center position-relative pb-3 mb-4 mx-auto">
          <h1 style="color:black;">Our <span class="text-primary"> Offerings</span></h1>
        </div>
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="row">
              <div class="col-md-2">
                <img class=" wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/service/Immersive Visualization Tools.png')}}">
              </div>
              <div class="col-md-10">
                <h5 class="fw-bold">Immersive Visualization Tools</h5>
                <p class="text-justify">Enhance data analysis, presentations, and decision-making processes with cutting-edge visualization solutions. These tools significantly boost engagement and understanding.
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="row">
              <div class="col-md-2 ">
                <img class=" wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/service/Interactive Displays.png')}}">
              </div>
              <div class="col-md-10">
                <h5 class="fw-bold">Interactive Displays</h5>
                <p class="text-justify">Transform meetings, workshops, and training sessions with real-time collaboration solutions. These displays facilitate seamless engagement and interaction.
                </p>
              </div>
            </div>
          </div>
        </div>
        <!-- <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="row">
              <div class="col-md-2">
                <img class=" wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/service/Virtual Collaboration Platforms.png')}}">
              </div>
              <div class="col-md-10">
                <h5 class="fw-bold">Virtual Collaboration Platforms</h5>
                <p class="text-justify">Enable effective remote collaboration through the integration of virtual collaboration platforms. Features such as video conferencing, screen sharing, and document collaboration enhance teamwork.
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="row">
              <div class="col-md-2 ">
                <img class=" wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/service/Digital Whiteboarding Solutions.png')}}">
              </div>
              <div class="col-md-10">
                <h5 class="fw-bold">Digital Whiteboarding Solutions</h5>
                <p class="text-justify">Foster digital brainstorming and collaboration with whiteboarding solutions. These solutions offer multimedia support and real-time collaboration features, emulating traditional whiteboard experiences.
              </div>
            </div>
          </div>
        </div> -->
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="row">
              <div class="col-md-2">
                <img class=" wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/service/Virtual Collaboration Platforms.png')}}">
              </div>
              <div class="col-md-10">
                <h5 class="fw-bold">Virtual Collaboration Platforms</h5>
                <p class="text-justify">Enable effective remote collaboration through the integration of virtual collaboration platforms. Features such as video conferencing, screen sharing, and document collaboration enhance teamwork.
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="row">
              <div class="col-md-2 ">
                <img class=" wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/service/Digital Whiteboarding Solutions.png')}}">
              </div>
              <div class="col-md-10">
                <h5 class="fw-bold">Digital Whiteboarding Solutions</h5>
                <p class="text-justify">Foster digital brainstorming and collaboration with whiteboarding solutions. These solutions offer multimedia support and real-time collaboration features, emulating traditional whiteboard experiences.
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="row">
              <div class="col-md-2">
                <img class=" wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/service/Room and Space Design Services.png')}}">
              </div>
              <div class="col-md-10">
                <h5 class="fw-bold">Room and Space Design Services</h5>
                <p class="text-justify">Optimize physical environments for collaboration with consulting services. Utilizing this technology, services include assessment, planning, and tailored solutions implementation for enhanced collaboration.
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="row">
              <div class="col-md-2 ">
                <img class=" wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/service/Training and Support.png')}}">
              </div>
              <div class="col-md-10">
                <h5 class="fw-bold">Training and Support</h5>
                <p class="text-justify">Maximize the benefits of collaboration and digital workplace solutions with comprehensive services. Offerings encompass user training, technical support, and ongoing maintenance to ensure seamless implementation and usage.
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>

    <div class="container-fluid py-4 bg-primary wow fadeInUp" data-wow-delay="0.4s" style="margin-top:-30px;">
      <div class="container">
        <div class="text-center position-relative pb-3 mx-auto">
          <h1 style="color:black;">Our <span class="text-primary">Process</span></h1>
          <!-- <p>IVT's Collaboration and Digital Workplace Solutions offer a comprehensive suite of tools and processes to enhance productivity and streamline communication across organizations. Here's an overview of our key processes:
          </p> -->
        </div>
        <div class="row g-3 mt-3">
          <div class="col-lg-4 col-md-6 mt-3">
            <div class="card p-4" style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px">
              <img src="{{ asset('assets/img/service/cloud-trans-process/Needs Assessment.png')}}" class="card-img-top m-auto w-100 rounded-3  p-1 my-3" alt="azur-image" style="max-width: 70px" />
              <div class="card-body">
                <h5 class="card-title text-center fw-bold fs-5">
                  Needs Assessment
                </h5>
                <p class="card-text">
                  We conduct a thorough analysis of the organization's requirements, considering factors such as team structure, communication preferences, and workflow dynamics.
                </p>

              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-3">
            <div class="card p-4" style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px">
              <img src="{{ asset('assets/img/service/cloud-trans-process/Solution Design.png')}}" class="card-img-top m-auto w-100 rounded-3  p-1 my-3" alt="azur-image" style="max-width: 70px" />
              <div class="card-body">
                <h5 class="card-title text-center fw-bold fs-5">
                  Solution Design
                </h5>
                <p class="card-text">
                  Our experts design tailored solutions leveraging cutting-edge technologies and platforms, ensuring seamless integration with existing systems and scalability for future needs.
                </p>

              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-3">
            <div class="card p-4" style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px">
              <img src="{{ asset('assets/img/service/cloud-trans-process/Implementation and Integration.png')}}" class="card-img-top m-auto w-100 rounded-3 p-1 my-3" alt="azur-image" style="max-width: 70px" />
              <div class="card-body">
                <h5 class="card-title text-center fw-bold fs-5">
                  Implementation and Integration
                </h5>
                <p class="card-text">
                  We manage the deployment of collaboration tools and digital workplace solutions, ensuring smooth integration with existing IT infrastructure and workflows.
                </p>

              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-3">
            <div class="card p-4" style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px">
              <img src="{{ asset('assets/img/service/cloud-trans-process/User Training and Adoption.png')}}" class="card-img-top m-auto w-100 rounded-3  p-1 my-3" alt="azur-image" style="max-width: 70px" />
              <div class="card-body">
                <h5 class="card-title text-center fw-bold fs-5">
                  User Training and Adoption
                </h5>
                <p class="card-text">
                  We provide comprehensive training programs to equip users with the necessary skills to utilize the tools effectively, driving high adoption rates and maximizing ROI.

                </p>

              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-3">
            <div class="card p-4" style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px">
              <img src="{{ asset('assets/img/service/cloud-trans-process/Continuous Support and Optimization.png')}}" class="card-img-top m-auto w-100 rounded-3  p-1 my-3" alt="azur-image" style="max-width: 70px" />
              <div class="card-body">
                <h5 class="card-title text-center fw-bold fs-5">
                  Continuous Support and Optimization
                </h5>
                <p class="card-text">
                  Our support team offers ongoing assistance to address any issues and optimize the performance of collaboration tools and digital workplace solutions.
                </p>

              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-3">
            <div class="card p-4" style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px">
              <img src="{{ asset('assets/img/service/Deployment and Rollout.png')}}" class="card-img-top m-auto w-100 rounded-3  p-1 my-3" alt="azur-image" style="max-width: 70px" />
              <div class="card-body">
                <h5 class="card-title text-center fw-bold fs-5">
                Deployment
                </h5>
                <p class="card-text">
                Our deployment approach is carefully planned to minimize downtime and ensure a smooth transition for users. We provide comprehensive support during the go-live phase to address any issues and optimize user adoption.
                </p>

              </div>
            </div>
          </div>

        </div>

      </div>
    </div>
    <div class="col-lg-12 my-5 mb-5 p-0" style="min-height: 600px">
      <div class="row mb-5">
        <div class="col-lg-4 col-md-4 col-sm-12">
          <div class="container-fluid py-4 bg-primary wow fadeInUp bg-primary ml-0 ml-md-5" data-wow-delay="0.4s">
            <div class="container">
              <div class="text-left position-relative pb-3 mb-4 mx-auto">
                <h4 class="text-left" style="color:black;">Key features of <span class="text-primary">Collaboration & Digital Workplace </span></h4>
                <ul>
                  <li>Unified Communication Tools</li>
                  <li>Document Collaboration and Management</li>
                  <li>Project Management Integration</li>
                  <li>Collaborative Workspace Customization</li>
                  <li>Knowledge Sharing and Collaboration Analytics</li>
                  <li>Security and Compliance Features</li>

                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-8 col-md-8 col-sm-12">
          <div class="service-feature bg h300">
            <div class="row g-5">
              <div id="service-feature" class="px-5 owl-carousel service-feature-carousel">
                <div class="mr-4 wow slideInUp" data-wow-delay="0.1s">
                  <div class=" wow slideInUp mx-2 " data-wow-delay="0.3s">
                    <div class="ser-feature-card bg-light overflow-hidden">
                      <div class="team-img position-relative overflow-hidden d-flex justify-content-center">
                        <img class="img-fluid w-50 h-50 p-5" src="{{ asset('assets/img/service/offering-1.svg')}}" alt="">
                      </div>
                      <div class="text-center py-4">
                        <h5 class="fw-bold"> Unified Communication Tools</h5>
                        <p class="mx-3 text-center m-0 my-3">It facilitates seamless communication, enhancing team collaboration and productivity across geographically dispersed teams.
                        </p>

                      </div>
                    </div>
                  </div>
                </div>
                <div class="mr-4 wow slideInUp" data-wow-delay="0.2s">
                  <div class="wow slideInUp mx-2" data-wow-delay="0.3s">
                    <div class="ser-feature-card  bg-light overflow-hidden">
                      <div class="team-img position-relative overflow-hidden d-flex justify-content-center">
                        <img class="img-fluid w-50 p-5" src="{{ asset('assets/img/service/offering-3.svg')}}" alt="">
                      </div>
                      <div class="text-center py-4">
                        <h5 class="fw-bold">Collaborative Workspace Customization</h5>
                        <p class="mx-3 text-center m-0 my-3">It allows users to create tailored workspaces with customizable layouts, widgets, and integrations.</p>

                      </div>
                    </div>
                  </div>
                </div>

                <div class="mr-4 wow slideInUp" data-wow-delay="0.3s">
                  <div class="wow slideInUp mx-2" data-wow-delay="0.3s">
                    <div class="ser-feature-card  bg-light overflow-hidden">
                      <div class="team-img position-relative overflow-hidden d-flex justify-content-center">
                        <img class="img-fluid w-50 p-5" src="{{ asset('assets/img/service/offering-4.svg')}}" alt="">
                      </div>
                      <div class="text-center py-4">
                        <h5 class="fw-bold">Knowledge Sharing and Collaboration Analytics</h5>
                        <p class="mx-3 text-center m-0 my-3"> It enables centralized knowledge bases and provide insights into team performance.</p>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="mr-4 wow slideInUp" data-wow-delay="0.2s">
                  <div class="wow slideInUp mx-2" data-wow-delay="0.3s">
                    <div class="ser-feature-card  bg-light overflow-hidden">
                      <div class="team-img position-relative overflow-hidden d-flex justify-content-center">
                        <img class="img-fluid w-50 p-5" src="{{ asset('assets/img/service/offering-5.svg')}}" alt="">
                      </div>
                      <div class="text-center py-4">
                        <h5 class="fw-bold">Security and Compliance Features</h5>
                        <p class="mx-3 text-center m-0 my-3"> It offers end-to-end encryption, access controls, and compliance support.
                        </p>

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


    <div class="container my-5">
      <p class="fs-1 text-center" style="font-size:35px;">
        <b>Benefits of <span style="color:#F19F1F;">Collaboration & Digital Workplace
          </span></b>
      </p>
      <div class="row g-5 mt-5 py-12">
        <div class="col-lg-4 col-md-6 mt-4">
          <div class="card p-5" style="background-color: #ECECEC">
            <div class="card-image" style="background-color: #F19F1F">
              <img src="{{ asset('assets/img/User Training and Adoption.png')}}" class="card-img-top m-auto w-100 rounded-3 py-4 px-3 my-1" alt="azur-image" style="max-width: 80px" />
              <div class="triangle-up"></div>
            </div>
            <div class="card-body">
              <h5 class="card-title fw-bold fs-3 mt-3">
                Seamless Communication
              </h5>
              <p class="card-text fs-6">
                Digital workplace fosters effective collaboration across diverse locations and time zones, enhancing communication among teams.
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-4">
          <div class="card text-light p-5" style="background-color: #F19F1F">
            <div class="card-image" style="background-color: #ECECEC">
              <img src="{{ asset('assets/img/Continuous Support and Optimization.png')}}" class="card-img-top m-auto w-100 rounded-3 py-4 px-3 my-1" alt="azur-image" style="max-width: 80px" />
              <div class="triangle-up"></div>
            </div>
            <div class="card-body">
              <h5 class="card-title fw-bold fs-3 mt-3">
                Enhanced Productivity
              </h5>
              <p class="card-text fs-6">
                Collaboration and digital solution boosts productivity by providing easy access to resources, enabling efficient task completion for team members
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-4">
          <div class="card p-5" style="background-color: #ECECEC">
            <div class="card-image" style="background-color: #F19F1F">
              <img src="{{ asset('assets/img/Optimization and Governance.png')}}" class="card-img-top m-auto w-100 rounded-3 py-4 px-3 my-1" alt="azur-image" style="max-width: 80px" />
              <div class="triangle-up"></div>
            </div>
            <div class="card-body">
              <h5 class="card-title fw-bold fs-3 mt-3">
                Real-Time Collaboration
              </h5>
              <p class="card-text fs-6">
                Our platform enables real-time collaboration, allowing teams to work together on projects, share ideas, and make swift decisions.
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-4">
          <div class="card text-light p-5" style="background-color: #F19F1F">
            <div class="card-image" style="background-color: #ECECEC">
              <img src="{{ asset('assets/img/Needs Assessment.png')}}" class="card-img-top m-auto w-100 rounded-3 py-4 px-3 my-1" alt="azur-image" style="max-width: 80px" />
              <div class="triangle-up"></div>
            </div>
            <div class="card-body">
              <h5 class="card-title fw-bold fs-3 mt-3">
                Flexible Mobility
              </h5>
              <p class="card-text fs-6">
                With our digital workplace, employees can work from anywhere, anytime, using various devices, promoting organizational flexibility and mobility.

              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-4">
          <div class="card p-5" style="background-color: #ECECEC">
            <div class="card-image" style="background-color: #F19F1F">
              <img src="{{ asset('assets/img/Comprehensive IT Security Offerings.png')}}" class="card-img-top m-auto w-100 rounded-3 py-4 px-3 my-1" alt="azur-image" style="max-width: 80px" />
              <div class="triangle-up"></div>
            </div>
            <div class="card-body">
              <h5 class="card-title fw-bold fs-3 mt-3">
                Robust Data Security
              </h5>
              <p class="card-text fs-6">
                We ensure data security, safeguarding sensitive information and meeting compliance standards, instilling confidence in organizations and clients.
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-4">
          <div class="card text-light p-5" style="background-color: #F19F1F">
            <div class="card-image" style="background-color: #ECECEC">
              <img src="{{ asset('assets/img/Testing and Quality Assurance.png')}}" class="card-img-top m-auto w-100 rounded-3 py-4 px-3 my-1" alt="azur-image" style="max-width: 80px" />
              <div class="triangle-up"></div>
            </div>
            <div class="card-body">
              <h5 class="card-title fw-bold fs-3 mt-3">
                Streamlined Workflow
              </h5>
              <p class="card-text fs-6">
                Collaboration and digital solution streamlines workflows, reducing manual tasks and administrative burdens, enhancing efficiency and minimizing errors.

              </p>
            </div>
          </div>
        </div>

      </div>
    </div>


    {{-- {{--@include('landing.components.service-banner')--}}--}}


    <div class="container my-5 ">
      <div class="d-flex flex-column align-items-center justify-content-center py-2 pb-2">
        <h4 class="fw-bold text-primary">FAQ</h4>
      </div>

      <div class="accordion feature-faq feature__feq" id="accordionExample">
        <div class="card">
          <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample" data-target="#collapseOne" aria-expanded="true">
            <h6 class="fw-bold">What are collaboration and digital workplace solutions?
            </h6>
            <div class="acoord-btn text-right mr-2">

            </div>
          </div>
          <div id="collapseOne" class="collapse " data-parent="#accordionExample">
            <div class="card-body">
              <p> Collaboration and digital solution is a comprehensive platform designed to boost communication, collaboration, and productivity within organizations by offering digital workplace tools and resources.

              </p>
            </div>
          </div>
        </div>

        <div class="card">
          <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true">
            <h6 class="fw-bold"> How does collaboration and digital solutions facilitate collaboration among remote teams?
            </h6>
            <div class="acoord-btn text-right mr-2">
              {{-- <a href="{{ route('career.apply')}}" class="rounded-career-btn mr-2 py-2 px-3 bg-dark mx-2">Apply <i class=" fas fa-arrow-right fw-normal"></i></a> --}}
              {{-- <span  class="accicon"><i class=" fas fa-angle-down rotate-icon"></i></span> --}}
            </div>
          </div>
          <div id="collapseTwo" class="collapse" data-parent="#accordionExample">
            <div class="card-body">
              <p>Collaboration and digital solution enables real-time communication and collaboration among remote teams through features like video conferencing, document sharing, and virtual workspace environments.

              </p>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample" data-target="#collapseThree" aria-expanded="true">
            <h6 class="fw-bold"> What are the key benefits of using collaboration and digital workplace solutions?
            </h6>
            <div class="acoord-btn text-right mr-2  pb-3">
              {{-- <a href="{{ route('career.apply')}}" class="rounded-career-btn mr-2 bg-dark mx-2">Apply <i class=" fas fa-arrow-right fw-normal"></i></a> --}}
              {{-- <span  class="accicon"><i class=" fas fa-angle-down rotate-icon"></i></span> --}}
            </div>
          </div>
          <div id="collapseThree" class="collapse" data-parent="#accordionExample">
            <div class="card-body">
              <p>The benefits include enhanced communication, improved productivity, streamlined collaboration processes, flexibility for remote work, robust data security measures, simplified workflow management, informed decision-making, scalability, enhanced employee experience, and cost efficiency.

              </p>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample" data-target="#collapseFour" aria-expanded="true">
            <h6 class="fw-bold">Is collaboration and digital solutions suitable for businesses of all sizes?</h6>
            <div class="acoord-btn text-right mr-2  pb-3">
              {{-- <a href="{{ route('career.apply')}}" class="rounded-career-btn mr-2 bg-dark mx-2">Apply <i class=" fas fa-arrow-right fw-normal"></i></a> --}}
              {{-- <span  class="accicon"><i class="  px-3 fas fa-angle-down rotate-icon"></i></span> --}}
            </div>
          </div>
          <div id="collapseFour" class="collapse" data-parent="#accordionExample">
            <div class="card-body">
              <p>Yes, Cyviz's solution is crafted to meet the needs of businesses of all sizes, providing scalability and flexibility to adapt to varying organizational requirements.
              </p>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample" data-target="#collapseFive" aria-expanded="true">
            <h6 class="fw-bold">How does collaboration and digital solutions ensure data security within its collaboration and digital workplace solution?

            </h6>
            <div class="acoord-btn text-right mr-2  pb-3">
              {{-- <a href="{{ route('career.apply')}}" class="rounded-career-btn mr-2 bg-dark mx-2">Apply <i class=" fas fa-arrow-right fw-normal"></i></a> --}}
              {{-- <span  class="accicon"><i class=" fas fa-angle-down rotate-icon"></i></span> --}}
            </div>
          </div>
          <div id="collapseFive" class="collapse" data-parent="#accordionExample">
            <div class="card-body">
              <p>Collaboration and digital solutions ensure data security by implementing robust encryption measures, access controls, regular security audits, and compliance standards to safeguard sensitive information and maintain data integrity. </p>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample" data-target="#collapseSix" aria-expanded="true">
            <h6 class="fw-bold">Can collaboration and digital solutions integrate with existing collaboration tools and platforms?

            </h6>
            <div class="acoord-btn text-right mr-2  pb-3">
              {{-- <a href="{{ route('career.apply')}}" class="rounded-career-btn mr-2 bg-dark mx-2">Apply <i class=" fas fa-arrow-right fw-normal"></i></a> --}}
              {{-- <span  class="accicon"><i class=" fas fa-angle-down rotate-icon"></i></span> --}}
            </div>
          </div>
          <div id="collapseSix" class="collapse" data-parent="#accordionExample">
            <div class="card-body">
              <p>Yes, Collaboration and digital solutions seamlessly integrate with existing collaboration tools and platforms, allowing organizations to leverage their current infrastructure while enhancing capabilities with Cyviz's features.
              </p>
            </div>
          </div>
          <div class="card">
            <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample" data-target="#collapseSeven" aria-expanded="true">
              <h6 class="fw-bold">What kind of support does collaboration and digital solutions provide for organizations implementing its collaboration and digital workplace solution?
              </h6>
              <div class="acoord-btn text-right mr-2  pb-3">
                {{-- <a href="{{ route('career.apply')}}" class="rounded-career-btn mr-2 bg-dark mx-2">Apply <i class=" fas fa-arrow-right fw-normal"></i></a> --}}
                {{-- <span  class="accicon"><i class=" fas fa-angle-down rotate-icon"></i></span> --}}
              </div>
            </div>
            <div id="collapseSeven" class="collapse" data-parent="#accordionExample">
              <div class="card-body">
                <p>Collaboration and digital solutions offer comprehensive support services, including implementation assistance, training sessions, technical support, and ongoing maintenance to ensure smooth adoption and optimal performance of the solution.
                </p>
              </div>
            </div>
            <div class="card">
              <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample" data-target="#collapseEight" aria-expanded="true">
                <h6 class="fw-bold">How does collaboration and digital workplace solutions contribute to organizational growth and success?

                </h6>
                <div class="acoord-btn text-right mr-2  pb-3">
                  {{-- <a href="{{ route('career.apply')}}" class="rounded-career-btn mr-2 bg-dark mx-2">Apply <i class=" fas fa-arrow-right fw-normal"></i></a> --}}
                  {{-- <span  class="accicon"><i class=" fas fa-angle-down rotate-icon"></i></span> --}}
                </div>
              </div>
              <div id="collapseEight" class="collapse" data-parent="#accordionExample">
                <div class="card-body">
                  <p>Collaboration and digital solutions drive collaboration, innovation, and efficiency within organizations, resulting in improved decision-making, enhanced employee engagement, streamlined workflows, and ultimately, better business outcomes and sustained growth.</p>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>


    @include('landing.components.get-in-touch')
  </div>
</div>



@endsection
