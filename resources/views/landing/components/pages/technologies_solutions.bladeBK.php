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
        <img class="w-100 hFull" src="{{ asset('assets/img/service/feature-bg.jpg')}}" alt="Image">
        <div class="w-100 posAbs d-flex flex-column align-items-center justify-content-center">
          <div class="container">
            <div class="p-3 text-left">
              <p class='text-white text-center serviceBannerText'>IT
                <span class='txtYellow'> Infrastructure Platform </span>
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
            <div class="minH400">
              <img class=" w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/service/service-po-1.png')}}">
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12 pl-0 pl-md-5">
            <div class="position-relative pb-3">
              <h1> <span class="text-primary">IT Infrastructure Platform Solutions</span></h1>
            </div>
            <p class="mb-2 text-justify">At Intelli Vectra Technologies, as a part of our technology offerings and solutions related to IT Infrastructure platform, we work on a comprehensive range of technologies to help business gateway of robust, scalable, and secure digital infrastructure. Our platform offers seamless integration, advanced security features, and unparalleled reliability to support your business objectives. With us, you can focus on innovation and growth, knowing that your technology foundation is in capable hands
            </p>

            {{-- <a href="{{ route('about')}}" class="btn btn-dark rounded-pill py-3 px-5 mt-3 wow zoomIn"
            data-wow-delay="0.9s">Know More <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8" />
            </svg></a> --}}
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid py-5 bg-primary wow fadeInUp" data-wow-delay="0.2s">
      <div class="container">
        <div class="text-center position-relative pb-3 mb-4 mx-auto">
          <h1>Our <span class="text-primary"> Offerings</span></h1>
          <p>At Intelli Vectra Technologies, Our comprehensive suite is designed to elevate your digital infrastructure. We provide scalable, secure, and integrated solutions tailored to your business needs. With our expertise, focus on innovation, and commitment to reliability, we empower you to drive success in the digital era.
          </p>
        </div>
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="row">
              <div class="col-md-2">
                <img class=" wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/service/offering-1.svg')}}">
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
                <img class=" wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/service/offering-6.svg')}}">
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
                <img class=" wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/service/offering-1.svg')}}">
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
                <img class=" wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/service/offering-6.svg')}}">
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
                <img class=" wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/service/offering-1.svg')}}">
              </div>
              <div class="col-md-10">
                <h5 class="fw-bold">Database Solutions</h5>
                <p class="text-justify">Our solution offers robust database capabilities, ensuring reliability, security, and scalability for your business-critical information. With streamlined operations and comprehensive support, we empower organizations to harness the full potential of their data assets and drive innovation.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <!--  <div class="container-fluid py-4 wow fadeInUp" data-wow-delay="0.4s">
      <div class="container">
        <div class="text-center position-relative pb-3 mx-auto">
          <h1>How it <span class="text-primary"> Works </span></h1>

        </div>
        <div class="row g-5">

          <div class="col-lg-12 col-md-12" data-wow-delay="0.5s">
            <div class="d-flex flex-row justify-content-center ">
              <div class="row d-flex flex-row justify-content-between">
                <div class="col-lg-3 col-md-3 col-sm-6 text-center px-4 wow fadeInUp" data-wow-delay="0.6s">
                  <img class="ups-img w-50 py-2" data-wow-delay="0.2s" src="{{ asset('assets/img/service-orm-4.svg')}}">
                  <h5>Step-1 </h5>
                  <p>Manage your entire infrastructure from one interface, reducing complexity.</p>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center px-4 wow fadeInUp" data-wow-delay="0.7s">
                  <img class="ups-img w-50 py-2" data-wow-delay="0.3s" src="{{ asset('assets/img/service-orm-1.svg')}}">
                  <h5>Step-2</h5>
                  <p>Automate routine tasks to increase efficiency and reduce errors </p>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-6 text-center px-4 wow fadeInUp" data-wow-delay="0.8s">
                  <img class="ups-img w-50 py-2" data-wow-delay="0.3s" src="{{ asset('assets/img/service-orm-3.svg')}}">
                  <h5>Step-3</h5>
                  <p>Easily scale your infrastructure to meet changing demands.
                  </p>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center px-4 wow fadeInUp" data-wow-delay="0.9s">
                  <img class="ups-img w-50 py-2" data-wow-delay="0.1s" src="{{ asset('assets/img/service-orm-2.svg')}}">
                  <h5 class="">Step-4</h5>
                  <p>Ensure continuous operation with built-in high availability features.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> -->
    <div class="container-fluid py-4 wow fadeInUp" data-wow-delay="0.4s">
      <div class="container">
        <div class="text-center position-relative pb-3 mx-auto">
          <h1><span class="text-primary">Our Process for IT Infrastructure Platform Solutions</span></h1>
          <p>At Intelli Vectra Technologies, Our process begins by understanding business unique needs, then tailor our solutions to fit seamlessly into your existing infrastructure. Through meticulous planning, implementation, and ongoing support, we ensure smooth integration and optimal performance. Our goal is to provide you with a robust, reliable, and scalable IT foundation, allowing you to focus on your core business objectives.

          </p>
        </div>
        <div class="row g-5">

          <div class="col-lg-12 col-md-12" data-wow-delay="0.5s">
            <div class="d-flex flex-row justify-content-center ">
              <div class="row d-flex flex-row justify-content-between">
                <div class="col-lg-3 col-md-3 col-sm-6 text-center px-4 wow fadeInUp" data-wow-delay="0.6s">
                  <img class="ups-img w-50 py-2" data-wow-delay="0.2s" src="{{ asset('assets/img/service-orm-4.svg')}}">
                  <h5>Assessment and Consultation</h5>
                  <p>We begin by thoroughly assessing your existing infrastructure and understanding your unique requirements. This includes evaluating your current IT setup, business goals, and budgetary considerations.</p>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center px-4 wow fadeInUp" data-wow-delay="0.7s">
                  <img class="ups-img w-50 py-2" data-wow-delay="0.3s" src="{{ asset('assets/img/service-orm-1.svg')}}">
                  <h5>Customized Solution Design</h5>
                  <p>Leveraging our expertise in Hyper-Converged Infrastructure (HCI), Enterprise Management Systems, Storage, Network Automation, and Database Solutions, we design a tailored solution that aligns perfectly with your organization's objectives.</p>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-6 text-center px-4 wow fadeInUp" data-wow-delay="0.8s">
                  <img class="ups-img w-50 py-2" data-wow-delay="0.3s" src="{{ asset('assets/img/service-orm-3.svg')}}">
                  <h5>Implementation and Integration</h5>
                  <p> Our experienced team handles the seamless implementation of your chosen solutions, ensuring minimal disruption to your operations. From deploying HCI clusters to setting up enterprise-grade storage systems, we take care of every detail.</p>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center px-4 wow fadeInUp" data-wow-delay="0.9s">
                  <img class="ups-img w-50 py-2" data-wow-delay="0.1s" src="{{ asset('assets/img/service-orm-2.svg')}}">
                  <h5 class="">Optimization and Performance Tuning</h5>
                  <p>Once deployed, we meticulously fine-tune your infrastructure to maximize performance and efficiency. This includes optimizing network configurations, tuning database settings, and fine-tuning storage arrays for optimal output.</p>
                </div>
              </div>
            </div>
            <div class="d-flex flex-row justify-content-center ">
              <div class="row d-flex flex-row justify-content-between">
                <div class="col-lg-3 col-md-3 col-sm-6 text-center px-4 wow fadeInUp" data-wow-delay="0.6s">
                  <img class="ups-img w-50 py-2" data-wow-delay="0.2s" src="{{ asset('assets/img/service-orm-4.svg')}}">
                  <h5>Ongoing Support and Maintenance</h5>
                  <p>Our commitment doesn't end with deployment. We offer continuous support and proactive maintenance services to keep your infrastructure running smoothly. This includes monitoring system health, applying updates, and providing timely assistance whenever needed.</p>
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
          <div class="container-fluid py-4 wow fadeInUp bg-primary ml-0 ml-md-5" data-wow-delay="0.4s">
            <div class="container">
              <div class="text-center position-relative pb-3 mb-4 mx-auto">
                <h4 class="text-left text-primary">Key Features of IT Infrastructure Platform Solutions</h4>
                <p class="text-justify mb-0">Simplified Management
                  Scalability and High Availability
                  Centralized Control for various IT Components
                  Resource Optimization and Compliance Management
                  High Performance and Data Protection
                  Streamlined Operations
                  Self Healing and Policy Driven Automation
                  Advanced Security
                  Performance Optimization
                </p>
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
                        <img class="img-fluid w-50 h-50 p-5" src="{{ asset('assets/img/service-orm-1.svg')}}" alt="">
                      </div>
                      <div class="text-center py-4">
                        <h5 class="fw-bold">Simplicity</h5>
                        <p class="mx-3 text-center m-0 my-3">Our solutions make infrastructure setups straightforward,
                          cutting down on
                          complexity and management tasks for smoother operations.</p>

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
                        <p class="mx-3 text-center m-0 my-3">Increase productivity by automating tasks and optimising
                          resources,
                          freeing up your IT team to innovate and focus on strategic goals.</p>

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
                        <h5 class="fw-bold">Cost Savings</h5>
                        <p class="mx-3 text-center m-0 my-3">: Save both time and money by simplifying operations and
                          eliminating
                          unnecessary complexities, resulting in reduced overhead costs.
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


    @include('landing.components.service-banner')


    <div class="container my-5 ">
      <div class="d-flex flex-column align-items-center justify-content-center py-2 pb-2">
        <h4 class="fw-bold text-primary">FAQ</h4>
      </div>

      <div class="accordion feature-faq" id="accordionExample">
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
        <img class="w-100 hFull" src="{{ asset('assets/img/service/service-bg-1.jpg')}}" alt="Image">
        <div class="w-100 posAbs d-flex flex-column align-items-center justify-content-center">
          <div class="container">
            <div class="p-3 text-left">
              <p class='text-white text-center serviceBannerText'>IT
                <span class='txtYellow'> Security </span>
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
            <div class="minH400">
              <img class=" w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/service/service-po-1.png')}}">
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12 pl-0 pl-md-5">
            <div class="position-relative pb-3">
              <h1> <span class="text-primary">IT Security Solutions</span></h1>
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

    <div class="container-fluid py-5 bg-primary wow fadeInUp" data-wow-delay="0.2s">
      <div class="container">
        <div class="text-center position-relative pb-3 mb-4 mx-auto">
          <h1>Our <span class="text-primary"> Offerings</span></h1>
        </div>
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="row">
              <div class="col-md-2">
                <img class=" wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/service/offering-1.svg')}}">
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
                <img class=" wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/service/offering-6.svg')}}">
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
                <img class=" wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/service/offering-1.svg')}}">
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
                <img class=" wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/service/offering-6.svg')}}">
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
                <img class=" wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/service/offering-1.svg')}}">
              </div>
              <div class="col-md-10">
                <h5 class="fw-bold">Incident Response and Security Monitoring</h5>
                <p class="text-justify"> Our IT Security Solutions provide robust incident response and security monitoring capabilities. With real-time monitoring and rapid response to security incidents, mitigate risks, minimize downtime, and maintain the integrity of your systems.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <!-- <div class="container-fluid py-4 wow fadeInUp" data-wow-delay="0.4s">
      <div class="container">
        <div class="text-center position-relative pb-3 mx-auto">
          <h1>How it <span class="text-primary"> Works </span></h1>

        </div>
        <div class="row g-5">

          <div class="col-lg-12 col-md-12" data-wow-delay="0.5s">
            <div class="d-flex flex-row justify-content-center ">
              <div class="row d-flex flex-row justify-content-between">
                <div class="col-lg-3 col-md-3 col-sm-6 text-center px-4 wow fadeInUp" data-wow-delay="0.6s">
                  <img class="ups-img w-50 py-2" data-wow-delay="0.2s" src="{{ asset('assets/img/service-orm-4.svg')}}">
                  <h5>Step-1 </h5>
                  <p>We maintain round-the-clock vigilance over devices, networks, and user activities.</p>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center px-4 wow fadeInUp" data-wow-delay="0.7s">
                  <img class="ups-img w-50 py-2" data-wow-delay="0.3s" src="{{ asset('assets/img/service-orm-1.svg')}}">
                  <h5>Step-2</h5>
                  <p>Our streamlined approach ensures swift and effective provisioning of security
                    measures. </p>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-6 text-center px-4 wow fadeInUp" data-wow-delay="0.8s">
                  <img class="ups-img w-50 py-2" data-wow-delay="0.3s" src="{{ asset('assets/img/service-orm-3.svg')}}">
                  <h5>Step-3</h5>
                  <p>We manage regular updates and patches to keep systems resilient against
                    evolving threats.</p>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center px-4 wow fadeInUp" data-wow-delay="0.9s">
                  <img class="ups-img w-50 py-2" data-wow-delay="0.1s" src="{{ asset('assets/img/service-orm-2.svg')}}">
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
    </div> -->
    <div class="container-fluid py-4 wow fadeInUp" data-wow-delay="0.4s">
      <div class="container">
        <div class="text-center position-relative pb-3 mx-auto">
          <h1><span class="text-primary">Our Process for IT Security</span></h1>
          <p>At Intelli Vectra, our process is meticulously designed to provide comprehensive protection for your organization's digital assets while minimizing vulnerabilities and mitigating potential cyber risks. Here's how we ensure your IT security.
          </p>
        </div>
        <div class="row g-5">

          <div class="col-lg-12 col-md-12" data-wow-delay="0.5s">
            <div class="d-flex flex-row justify-content-center ">
              <div class="row d-flex flex-row justify-content-between">
                <div class="col-lg-3 col-md-3 col-sm-6 text-center px-4 wow fadeInUp" data-wow-delay="0.6s">
                  <img class="ups-img w-50 py-2" data-wow-delay="0.2s" src="{{ asset('assets/img/service-orm-4.svg')}}">
                  <h5>Assessment and Analysis</h5>
                  <p>Our IT Security Solutions begin with thorough assessment and analysis, identifying vulnerabilities and risks. This enables tailored security plans to protect your organization from cyber threats effectively.</p>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center px-4 wow fadeInUp" data-wow-delay="0.7s">
                  <img class="ups-img w-50 py-2" data-wow-delay="0.3s" src="{{ asset('assets/img/service-orm-1.svg')}}">
                  <h5>Planning and Strategy</h5>
                  <p>Our process for IT Security Solutions involves strategic planning tailored to your organization's needs, selecting appropriate technologies, and developing policies to ensure comprehensive protection against cyber threats.</p>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-6 text-center px-4 wow fadeInUp" data-wow-delay="0.8s">
                  <img class="ups-img w-50 py-2" data-wow-delay="0.3s" src="{{ asset('assets/img/service-orm-3.svg')}}">
                  <h5>Implementation and Deployment</h5>
                  <p>We ensure seamless implementation and deployment of IT Security Solutions, configuring and integrating technologies to protect your infrastructure, data, and users effectively against cyber threats.</p>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center px-4 wow fadeInUp" data-wow-delay="0.9s">
                  <img class="ups-img w-50 py-2" data-wow-delay="0.1s" src="{{ asset('assets/img/service-orm-2.svg')}}">
                  <h5 class="">Monitoring and Maintenance</h5>
                  <p>We provide continuous monitoring and maintenance of IT Security Solutions, ensuring 24/7 protection. Our proactive approach includes optimizing security measures to adapt to evolving threats and maintaining peak performance.</p>
                </div>
              </div>
            </div>
            <div class="d-flex flex-row justify-content-center ">
              <div class="row d-flex flex-row justify-content-between">
                <div class="col-lg-3 col-md-3 col-sm-6 text-center px-4 wow fadeInUp" data-wow-delay="0.6s">
                  <img class="ups-img w-50 py-2" data-wow-delay="0.2s" src="{{ asset('assets/img/service-orm-4.svg')}}">
                  <h5>Incident Response and Recovery</h5>
                  <p>Our process ensures swift incident response and recovery for IT Security Solutions. With established protocols, we minimize the impact of security incidents and quickly restore normal operations.</p>
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
          <div class="container-fluid py-4 wow fadeInUp bg-primary ml-0 ml-md-5" data-wow-delay="0.4s">
            <div class="container">
              <div class="text-left position-relative pb-3 mb-4 mx-auto">
                <h4 class="text-left text-primary">Key features of IT Security Solutions</h4>
                <ul>
                  <li>Advanced antivirus and anti-malware protection
                    Next-generation firewall with intrusion prevention
                    Multi-factor authentication (MFA) for secure access
                    Encryption of data at rest and in transit
                    Network segmentation to limit access
                    Security Information and Event Management (SIEM) for real-time monitoring
                    Incident response planning and rapid response capabilities
                    Regular security assessments and updates
                    User activity monitoring and access control
                    Data loss prevention (DLP) policies and solutions
                  </li>
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

      <div class="accordion feature-faq" id="accordionExample">
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
        <img class="w-100 hFull" src="{{ asset('assets/img/service/service-bg-1.jpg')}}" alt="Image">
        <div class="w-100 posAbs d-flex flex-column align-items-center justify-content-center">
          <div class="container">
            <div class="p-3 text-left">
              <p class='text-white text-center serviceBannerText'>Cloud Solutions
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
            <div class="minH400">
              <img class=" w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/service/service-po-1.png')}}">
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12 pl-0 pl-md-5">
            <div class="position-relative pb-3">
              <h1> <span class="text-primary">Cloud Solution</span></h1>
            </div>
            <p class="mb-2 text-justify">Cloud Solution is also identified as cloud computing or cloud service, which offers IT resources on demand through the internet. With cloud Solution, IT resources can swiftly expand or reduce to meet business demands. Rather than purchasing and maintaining computer products, you can pay to use a cloud service, saving you time, effort and expense by managing them independently. As one of Microsoft's Cloud Solution Providers (CSP), we help streamline the way you purchase and manage Microsoft's cloud solutions. From on-premise infrastructure to the cloud, all of your IT can be covered in one contract, supported by a single point of contact. Microsoft Office 365, Azure and the Enterprise Mobility Suite make it easy to access and use.
            </p>

            {{-- <a href="{{ route('about')}}" class="btn btn-dark rounded-pill py-3 px-5 mt-3 wow zoomIn"
            data-wow-delay="0.9s">Know More <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8" />
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
          <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="row">
              <div class="col-md-2">
                <img class=" wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/service/offering-1.svg')}}">
              </div>
              <div class="col-md-10">
                <h5 class="fw-bold">Seamless Integration</h5>
                <p class="text-justify">Integrate on-premises infrastructure with Azure cloud services for improved agility and cost-effectiveness.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="row">
              <div class="col-md-2 ">
                <img class=" wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/service/offering-6.svg')}}">
              </div>
              <div class="col-md-10">
                <h5 class="fw-bold">Dynamic Scalability</h5>
                <p class="text-justify">Scale computing and storage resources as required to enhance performance and cost-efficiency.
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="row mt-3">
          <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="row">
              <div class="col-md-2">
                <img class=" wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/service/offering-2.svg')}}">
              </div>
              <div class="col-md-10">
                <h5 class="fw-bold">Robust Security Measures</h5>
                <p class="text-justify">Ensure data protection and compliance with rigorous security protocols and certifications.
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="row">
              <div class="col-md-2 ">
                <img class=" wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/service/offering-3.svg')}}">
              </div>
              <div class="col-md-10">
                <h5 class="fw-bold">Streamlined Operations</h5>
                <p class="text-justify">Automate deployment and management tasks to streamline processes and minimize manual intervention.
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="row mt-3">
          <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="row">
              <div class="col-md-2">
                <img class=" wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/service/offering-4.svg')}}">
              </div>
              <div class="col-md-10">
                <h5 class="fw-bold">Actionable Insights</h5>
                <p class="text-justify">Leverage built-in analytics to derive actionable insights from data, empowering informed decision-making.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="row">
              <div class="col-md-2 ">
                <img class=" wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/service/offering-5.svg')}}">
              </div>
              <div class="col-md-10">
                <h5 class="fw-bold">Continuous Operations</h5>
                <p class="text-justify">Ensure uninterrupted service and data protection with high availability and disaster recovery features.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row mt-3">
          <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="row">
              <div class="col-md-2">
                <img class=" wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/service/offering-4.svg')}}">
              </div>
              <div class="col-md-10">
                <h5 class="fw-bold">Cost Optimization</h5>
                <p class="text-justify">Optimize expenditure with cost management tools, providing insights into resource utilization and recommending cost-saving measures.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="row">
              <div class="col-md-2 ">
                <img class=" wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/service/offering-5.svg')}}">
              </div>
              <div class="col-md-10">
                <h5 class="fw-bold">Flexible Licensing</h5>
                <p class="text-justify">Tailor licensing options to meet specific requirements, offering adaptable subscriptions and efficient billing.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row mt-3">
          <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="row">
              <div class="col-md-2">
                <img class=" wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/service/offering-4.svg')}}">
              </div>
              <div class="col-md-10">
                <h5 class="fw-bold">Comprehensive Support</h5>
                <p class="text-justify">Benefit from Microsoft's extensive technical support for CPS solutions, covering deployment, configuration, and ongoing management.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid py-4 wow fadeInUp" data-wow-delay="0.4s">
      <div class="container">
        <div class="text-center position-relative pb-3 mx-auto">
          <h1><span class="text-primary">Our Process Of Cloud Solution</span></h1>
          <p>Explore simplified cloud solution acquisition and adaptable licensing options with Intelli Vectra Technologies. Experience robust IT security, Azure Stack deployment expertise, and personalized cloud services consultation.
          </p>
        </div>
        <div class="row g-5">

          <div class="col-lg-12 col-md-12" data-wow-delay="0.5s">
            <div class="d-flex flex-row justify-content-center ">
              <div class="row d-flex flex-row justify-content-between">
                <div class="col-lg-3 col-md-3 col-sm-6 text-center px-4 wow fadeInUp" data-wow-delay="0.6s">
                  <img class="ups-img w-50 py-2" data-wow-delay="0.2s" src="{{ asset('assets/img/service-orm-4.svg')}}">
                  <h5>Efficient Cloud Solutions Acquisition</h5>
                  <p>Simplify the process of acquiring Microsoft's cloud solutions with Intelli Vectra Technologies. We offer a centralized contact point and consolidate all services into a single contract for simplified management.</p>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center px-4 wow fadeInUp" data-wow-delay="0.7s">
                  <img class="ups-img w-50 py-2" data-wow-delay="0.3s" src="{{ asset('assets/img/service-orm-1.svg')}}">
                  <h5>Tailored Licensing Solutions</h5>
                  <p>Enjoy adaptable licensing options customized to your requirements, ensuring cost-effectiveness while maximizing the benefits of platforms like Azure, Enterprise Mobility and Security, and Office 365.</p>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-6 text-center px-4 wow fadeInUp" data-wow-delay="0.8s">
                  <img class="ups-img w-50 py-2" data-wow-delay="0.3s" src="{{ asset('assets/img/service-orm-3.svg')}}">
                  <h5>Comprehensive IT Security Offerings</h5>
                  <p>Access a wide array of IT security solutions, including email and web firewalls, SIEM, insider threat protection, data leak prevention, and endpoint protection, safeguarding your data and infrastructure.</p>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center px-4 wow fadeInUp" data-wow-delay="0.9s">
                  <img class="ups-img w-50 py-2" data-wow-delay="0.1s" src="{{ asset('assets/img/service-orm-2.svg')}}">
                  <h5 class="">Azure Stack Deployment Services</h5>
                  <p>Deploy Microsoft Azure Stack confidently with assistance from Intelli Vectra Technologies. Our expertise enables you to leverage Azure's advantages while retaining control over your environment.</p>
                </div>
              </div>
            </div>
            <div class="d-flex flex-row justify-content-center ">
              <div class="row d-flex flex-row justify-content-between">
                <div class="col-lg-3 col-md-3 col-sm-6 text-center px-4 wow fadeInUp" data-wow-delay="0.6s">
                  <img class="ups-img w-50 py-2" data-wow-delay="0.2s" src="{{ asset('assets/img/service-orm-4.svg')}}">
                  <h5>Consultation and Support for Cloud Services</h5>
                  <p>Receive consultancy, implementation, management, and support services tailored to your specific needs. From initial planning to ongoing support, we offer comprehensive assistance to address your unique requirements.</p>
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
          <div class="container-fluid py-4 wow fadeInUp bg-primary ml-0 ml-md-5" data-wow-delay="0.4s">
            <div class="container">
              <div class="text-center position-relative pb-3 mb-4 mx-auto">
                <h4 class="text-left text-primary">Our Key Features For Cloud Solution</h4>
                <p class="text-justify mb-0">Streamlined procurement of cloud solutions
                  Flexible licensing choices
                  Comprehensive cybersecurity solutions
                  Proficiency in deploying Azure Stack
                  Tailored consultation for cloud services

                </p>
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
                        <p class="mx-3 text-center m-0 my-3"> Easily adjust resource allocation without requiring
                          substantial upfront
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
                        <p class="mx-3 text-center m-0 my-3">: Select the most suitable cloud platform and deployment model
                          tailored to
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
                        <p class="mx-3 text-center m-0 my-3"> Safeguard your data and applications with comprehensive cloud
                          security
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
                        <p class="mx-3 text-center m-0 my-3"> Enhance operational efficiency through streamlined processes
                          and
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

      <div class="accordion feature-faq" id="accordionExample">
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
        <img class="w-100 hFull" src="{{ asset('assets/img/service/service-bg-1.jpg')}}" alt="Image">
        <div class="w-100 posAbs d-flex flex-column align-items-center justify-content-center">
          <div class="container">
            <div class="p-3 text-left">
              <p class='text-white text-center serviceBannerText'>Consulting
                <span class='txtYellow'>& Digital Transformation</span>
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
            <div class="minH400">
              <img class=" w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/service/service-po-1.png')}}">
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12 pl-0 pl-md-5">
            <div class="position-relative pb-3">
              <h1> <span class="text-primary">Consulting and Digital Transformation Solution</span></h1>
            </div>
            <p class="mb-2 text-justify">At Intelli Vectra Technologies, we offer a Consulting and Digital Transformation solution to analyze the organization's requirements, existing resources and their ability to scale to recommend the right digital processes and the experience transformation guideposts that help them to effectively use the digital technology, tools and platforms.
            </p>

            {{-- <a href="{{ route('about')}}" class="btn btn-dark rounded-pill py-3 px-5 mt-3 wow zoomIn"
            data-wow-delay="0.9s">Know More <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8" />
            </svg></a> --}}
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid py-5 bg-primary wow fadeInUp" data-wow-delay="0.2s">
      <div class="container">
        <div class="text-center position-relative pb-3 mb-4 mx-auto">
          <h1>Our <span class="text-primary"> Offerings</span></h1>
          <p>At Intelli Vectra Technologies, our consulting and digital team specializes in guiding organizations through seamless digital transformations, leveraging cutting-edge technologies and innovative strategies. With expertise in AI, mobility services, business intelligence, and automation, we empower businesses to adapt, innovate, and thrive in today's rapidly evolving digital landscape.</p>
        </div>
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="row">
              <div class="col-md-2">
                <img class=" wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/service/offering-1.svg')}}">
              </div>
              <div class="col-md-10">
                <h5 class="fw-bold">Generative Artificial Intelligence</h5>
                <p class="text-justify"> Intelli Vectra Technologies leverages generative AI to empower diverse applications, from image synthesis to natural language generation. Our cutting-edge solutions harness the power of generative models to create realistic content, revolutionizing industries with innovation.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="row">
              <div class="col-md-2 ">
                <img class=" wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/service/offering-6.svg')}}">
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
                <img class=" wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/service/offering-2.svg')}}">
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
                <img class=" wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/service/offering-3.svg')}}">
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
                <img class=" wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/service/offering-4.svg')}}">
              </div>
              <div class="col-md-10">
                <h5 class="fw-bold">Digital Transformation</h5>
                <p class="text-justify">Intelli Vectra Technologies offers advanced business analytics solutions, providing actionable insights from vast datasets. Leveraging cutting-edge techniques like machine learning and predictive modeling, we empower businesses to make informed decisions and drive growth.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid py-4 wow fadeInUp" data-wow-delay="0.4s">
      <div class="container">
        <div class="text-center position-relative pb-3 mx-auto">
          <h1><span class="text-primary">Our Process for Consulting and Digital Transformation Solutions</span></h1>
          <p>AAt Intelli Vectra Technologies, we have a structured process to guide an organization, for consulting and digital transformation solutions it begins with the assessment of your organization's needs and goals. We then develop a strategic roadmap tailored to your objectives, leveraging advanced technologies such as AI, mobility services, and business intelligence. Through meticulous planning, implementation, and optimization, we guide you through every step of your digital journey, ensuring seamless integration and maximum impact.

          </p>
        </div>
        <div class="row g-5">

          <div class="col-lg-12 col-md-12" data-wow-delay="0.5s">
            <div class="d-flex flex-row justify-content-center ">
              <div class="row d-flex flex-row justify-content-between">
                <div class="col-lg-3 col-md-3 col-sm-6 text-center px-4 wow fadeInUp" data-wow-delay="0.6s">
                  <img class="ups-img w-50 py-2" data-wow-delay="0.2s" src="{{ asset('assets/img/service-orm-4.svg')}}">
                  <h5>Assessment and Analysis</h5>
                  <p>Our comprehensive assessment of the organization's current IT landscape, business processes, and digital maturity level analyze existing data sources and systems to identify opportunities for improvement and areas where AI, mobility services, business intelligence, and automation can add value. Engage stakeholders to understand their pain points, requirements, and expectations for digital transformation.</p>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center px-4 wow fadeInUp" data-wow-delay="0.7s">
                  <img class="ups-img w-50 py-2" data-wow-delay="0.3s" src="{{ asset('assets/img/service-orm-1.svg')}}">
                  <h5>Strategic Planning and Roadmap Development</h5>
                  <p>We prioritize clear digital transformation objectives and align them with the organization's overall strategic goals to develop a roadmap that outlines the steps, timelines, and resource allocations for implementing AI, mobility services, business intelligence, automation, and other digital initiatives. Prioritize initiatives based on their potential impact, feasibility, and alignment with strategic objectives.</p>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-6 text-center px-4 wow fadeInUp" data-wow-delay="0.8s">
                  <img class="ups-img w-50 py-2" data-wow-delay="0.3s" src="{{ asset('assets/img/service-orm-3.svg')}}">
                  <h5> Solution Design and Architecture</h5>
                  <p>Our Team designs the technical architecture and infrastructure required to support AI, mobility services, business intelligence, automation, and other digital transformation initiatives. Evaluate and select AI algorithms, mobility platforms, BI tools, automation frameworks, and other technology solutions that best fit the organization's needs. To ensure interoperability, scalability, security, and compliance considerations are addressed in the solution design.
                  </p>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center px-4 wow fadeInUp" data-wow-delay="0.9s">
                  <img class="ups-img w-50 py-2" data-wow-delay="0.1s" src="{{ asset('assets/img/service-orm-2.svg')}}">
                  <h5 class="">Implementation and Integration:</h5>
                  <p>Our team develop and deploy AI models, mobile applications, BI dashboards, automation workflows, and other digital solutions according to the established roadmap. Integrate new digital solutions with existing systems and data sources, ensuring seamless data flow and interoperability to implement AI algorithms for predictive analytics, machine learning models for process optimization, and automation scripts for routine tasks.</p>
                </div>
              </div>
            </div>
            <div class="d-flex flex-row justify-content-center ">
              <div class="row d-flex flex-row justify-content-between">
                <div class="col-lg-3 col-md-3 col-sm-6 text-center px-4 wow fadeInUp" data-wow-delay="0.6s">
                  <img class="ups-img w-50 py-2" data-wow-delay="0.2s" src="{{ asset('assets/img/service-orm-4.svg')}}">
                  <h5>Reporting and Analytics</h5>
                  <p>Our Digital Team develops BI dashboards and reporting tools to provide stakeholders with actionable insights into AI performance, mobility services usage, business operations, and automation effectiveness. Utilize advanced analytics techniques to analyze data from AI models, mobility services, business intelligence reports, and automation workflows to identify trends, patterns, and opportunities for optimization.</p>
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
          <div class="container-fluid py-4 wow fadeInUp bg-primary ml-0 ml-md-5" data-wow-delay="0.4s">
            <div class="container">
              <div class="text-center position-relative pb-3 mb-4 mx-auto">
                <h4 class="text-left text-primary"> Key Features of Our Consulting and Digital Transformation Solutions</h4>
                <p class="text-justify mb-0">Strategic Planning and Alignment - roadmap for digital transformation
                  Technology Evaluation and Integration
                  Business Process Optimization
                  Data-driven Insights and Analytics
                  Change Management and Training
                  Security and Compliance
                  Continuous Improvement and Innovation
                  Collaboration and Communication

                </p>
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
                        <img class="img-fluid w-50 h-50 p-5" src="{{ asset('assets/img/service-orm-1.svg')}}" alt="">
                      </div>
                      <div class="text-center py-4">
                        <h5 class="fw-bold">Competitive Advantage</h5>
                        <p class="mx-3 text-center m-0 my-3">: Gain a competitive edge in your industry with strategic
                          insights and innovative solutions.
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
                        <h5 class="fw-bold">Performance Improvement</h5>
                        <p class="mx-3 text-center m-0 my-3">Enhance operational efficiency and performance
                          through tailored consulting services.
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
                        <h5 class="fw-bold">Adaptability</h5>
                        <p class="mx-3 text-center m-0 my-3">Navigate change and uncertainty with confidence, knowing you
                          have
                          expert guidance and support.</p>
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
                        <h5 class="fw-bold">Business Growth</h5>
                        <p class="mx-3 text-center m-0 my-3"> Unlock opportunities for growth and expansion with our
                          strategic
                          management advisory and transformational consulting services.</p>

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

      <div class="accordion feature-faq" id="accordionExample">
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
        <img class="w-100 hFull" src="{{ asset('assets/img/service/service-bg-1.jpg')}}" alt="Image">
        <div class="w-100 posAbs d-flex flex-column align-items-center justify-content-center">
          <div class="container">
            <div class="p-3 text-left">
              <p class='text-white text-center serviceBannerText'>Enterprise
                <span class='txtYellow'>Application Modernization</span>
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
            <div class="minH400">
              <img class=" w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/service/service-po-1.png')}}">
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12 pl-0 pl-md-5">
            <div class="position-relative pb-3">
              <h1> <span class="text-primary">Enterprise Application Modernization Solutions</span></h1>
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
    <div class="container-fluid py-5 bg-primary wow fadeInUp" data-wow-delay="0.2s">
      <div class="container">
        <div class="text-center position-relative pb-3 mb-4 mx-auto">
          <h1>Our <span class="text-primary"> Offerings</span></h1>
          <p>At Intelli Vectra Technologies, we offer comprehensive Enterprise Application Modernization solutions tailored to meet the specific needs and challenges of your organization. Our offerings encompass a range of services and strategies designed to modernize your legacy applications, improve performance, and drive business agility.</p>
        </div>
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="row">
              <div class="col-md-2">
                <img class=" wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/service/offering-1.svg')}}">
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
                <img class=" wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/service/offering-6.svg')}}">
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
                <img class=" wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/service/offering-1.svg')}}">
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
                <img class=" wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/service/offering-6.svg')}}">
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
                <img class=" wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/service/offering-1.svg')}}">
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
                <img class=" wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/service/offering-6.svg')}}">
              </div>
              <div class="col-md-10">
                <h5 class="fw-bold">Data Modernization and Analytics</h5>
                <p class="text-justify">We modernize your data infrastructure by migrating data to modern databases and data lakes, implementing data governance practices, and leveraging analytics and machine learning to derive actionable insights. Our data engineers and data scientists help you unlock the value of your data and drive data-driven decision-making.
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="row">
              <div class="col-md-2">
                <img class=" wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/service/offering-1.svg')}}">
              </div>
              <div class="col-md-10">
                <h5 class="fw-bold">User Interface Modernization</h5>
                <p class="text-justify"> We redesign user interfaces with modern UI frameworks, responsive design, and intuitive workflows to enhance user experience and productivity. Our UX/UI designers create engaging and intuitive interfaces that meet the expectations of today's users.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="container-fluid py-4 wow fadeInUp" data-wow-delay="0.4s">
      <div class="container">
        <div class="text-center position-relative pb-3 mx-auto">
          <h1><span class="text-primary">Our Process for Enterprise Application Modernization Solutions hhhh</span></h1>
          <p>At Intelli Vectra Technologies, we have developed a structured process to guide organizations through every stage of the modernization journey. This technical document outlines our process for Enterprise Application Modernization Solutions, including assessment, planning, implementation, and support.

          </p>
        </div>
        <div class="row g-5">

          <div class="col-lg-12 col-md-12" data-wow-delay="0.5s">
            <div class="d-flex flex-row justify-content-center ">
              <div class="row d-flex flex-row justify-content-between">
                <div class="col-lg-3 col-md-3 col-sm-6 text-center px-4 wow fadeInUp" data-wow-delay="0.6s">
                  <img class="ups-img w-50 py-2" data-wow-delay="0.2s" src="{{ asset('assets/img/service-orm-4.svg')}}">
                  <h5>Assessment and Discovery</h5>
                  <p> Our comprehensive assessment identifies legacy applications, evaluates technology stacks, aligns with business goals, and analyzes risks. The outcome is a detailed modernization roadmap tailored to your organization's needs and objectives.</p>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center px-4 wow fadeInUp" data-wow-delay="0.7s">
                  <img class="ups-img w-50 py-2" data-wow-delay="0.3s" src="{{ asset('assets/img/service-orm-1.svg')}}">
                  <h5>Strategy Development</h5>
                  <p>We prioritize modernization efforts, select appropriate technologies, conduct ROI analysis, and define governance processes. Our strategy ensures alignment with business objectives and sets the direction for successful application modernization initiatives.</p>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-6 text-center px-4 wow fadeInUp" data-wow-delay="0.8s">
                  <img class="ups-img w-50 py-2" data-wow-delay="0.3s" src="{{ asset('assets/img/service-orm-3.svg')}}">
                  <h5>Implementation</h5>
                  <p>Our process includes refactoring, cloud migration, API development, and UI modernization. We execute the modernization plan efficiently, leveraging best practices to transform legacy applications into scalable, secure, and user-friendly solutions.</p>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center px-4 wow fadeInUp" data-wow-delay="0.9s">
                  <img class="ups-img w-50 py-2" data-wow-delay="0.1s" src="{{ asset('assets/img/service-orm-2.svg')}}">
                  <h5 class="">Testing and Quality Assurance</h5>
                  <p>We conduct rigorous unit, integration, performance, and security testing to ensure the reliability and security of modernized applications. Our thorough testing process guarantees high-quality outcomes for your enterprise application modernization.</p>
                </div>
              </div>
            </div>
            <div class="d-flex flex-row justify-content-center ">
              <div class="row d-flex flex-row">
                <div class="col-lg-3 col-md-3 col-sm-6 text-center px-4 wow fadeInUp" data-wow-delay="0.6s">
                  <img class="ups-img w-50 py-2" data-wow-delay="0.2s" src="{{ asset('assets/img/service-orm-4.svg')}}">
                  <h5> Deployment and Rollout</h5>
                  <p>We plan and execute smooth deployment of modernized applications, coordinating releases, providing training, and implementing monitoring tools. Our goal is to minimize downtime and disruptions while ensuring successful deployment.</p>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center px-4 wow fadeInUp" data-wow-delay="0.6s">
                  <img class="ups-img w-50 py-2" data-wow-delay="0.2s" src="{{ asset('assets/img/service-orm-4.svg')}}">
                  <h5>Post-Implementation Support</h5>
                  <p>Our ongoing support includes incident management, performance optimization, security updates, and user training. We ensure the continued performance, stability, and security of modernized applications to maximize their benefits for your organization.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-12 my-5 mb-5" style="min-height: 600px">
        <div class="row mb-5">
          <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="container-fluid py-4 wow fadeInUp bg-primary ml-0 ml-md-5" data-wow-delay="0.4s">
              <div class="container">
                <div class="text-center position-relative pb-3 mb-4 mx-auto">
                  <h4 class="text-left text-primary">Key features of Enterprise Application Modernization Solutions</h4>
                  <p class="text-justify mb-0">Cloud migration
                    Microservices architecture
                    Containerization (e.g., Docker, Kubernetes)
                    API enablement
                    DevOps integration
                    Automated testing
                    Scalability and performance optimization
                    Security enhancements
                    Legacy system integration
                    Data management and analytics
                    UX improvement
                    Compliance and governance
                    Cost optimization
                    Monitoring and analytics
                    Documentation and knowledge management


                  </p>
                  <p class="text-justify">By choosing Intelli Vectra Technologies for your data protection needs, you can
                    enjoy a
                    range of benefits, including:
                  </p>
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
                          <p class="mx-3 text-center m-0 my-3">Improved service quality and compliance with industry
                            regulations</p>
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
                          <p class="mx-3 text-center m-0 my-3"> Enhanced long-term data preservation for critical
                            information</p>

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

        <div class="accordion feature-faq" id="accordionExample">
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
                <p>Modernizing legacy applications helps businesses stay competitive, reduce costs, improve agility, enhance security, and deliver better user experiences..</p>
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
          <img class="w-100 hFull" src="{{ asset('assets/img/service/service-bg-1.jpg')}}" alt="Image">
          <div class="w-100 posAbs d-flex flex-column align-items-center justify-content-center">
            <div class="container">
              <div class="p-3 text-left">
                <p class='text-white text-center serviceBannerText'>Collaboration
                  <span class='txtYellow'>& Digital Workplace</span>
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
              <div class="minH400">
                <img class=" w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/service/service-st-1.png')}}">
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 pl-0 pl-md-5">
              <div class="position-relative pb-3">
                <h1> <span class="text-primary"> {{ ucfirst($data['title'])}} Services</span></h1>
              </div>
              <p class="mb-2 text-justify">At Intelli Vectra, we are dedicated to empowering organisations to achieve their
                business
                goals effortlessly through the provision of tailored resources and technology solutions. As a
                premier IT Infrastructure Solution and Staffing Services Organization in India, we are
                committed to supporting our clients in navigating the ever-evolving landscape of technology
                and talent acquisition.
              </p>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-12">
        <div class="row">
          <div class="col-lg-6 staff-left p-3">
            <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.2s">
              <div class="container px-3">
                <div class="p-md-4  p-0">
                  <h2 class="text-white">Our <span class="text-primary"> Commitment to Excellence</span> </h2>
                  <p class="mb-2 text-white text-justify pb-4 mb-4">Driven by a passion for excellence, our staffing team
                    endeavours to match the most talented
                    resources with the greatest tech openings. We are dedicated to supporting cutting-edge
                    technology that drives organisational success and propels our world forward. With a focus
                    on skill, fit, culture, compensation, and beyond, our hiring team ensures the perfect
                    alignment between candidates and opportunities.
                  </p>
                  {{-- <div class="row">
                            <div class="col-md-2" >
                                <img class=" wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/service/offering-1.svg')}}">
                </div>
                <div class="col-md-10">
                  <h5 class="fw-bold text-primary">Permanent Hiring</h5>
                  <p class="text-justify text-white">Tailored solutions for identifying and securing top-tier talent for
                    long-term positions within your organisation.</p>
                </div>
              </div>
              <div class="row">
                <div class="col-md-2">
                  <img class=" wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/service/offering-1.svg')}}">
                </div>
                <div class="col-md-10">
                  <h5 class="fw-bold text-primary">Contract Consultants</h5>
                  <p class="text-justify text-white">Flexible staffing options providing skilled professionals on a
                    temporary basis, handling payroll, benefits, and compliance.</p>
                </div>
              </div> --}}
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 staff-right p-3">
        <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.2s">
          <div class="container px-3">
            <div class="p-md-4  p-0">
              <h2 class="text-white">Expertise and <span class="text-dark"> Services</span> </h2>
              <p class="mb-2 text-white text-justify pb-4 mb-4">Our team comprises seasoned experts in technical staff
                augmentation, professional
                services, and system integration program delivery. Drawing upon extensive experience in
                technical, IT, and engineering program management across diverse industries and verticals,
                we excel in aligning the best resources to meet your specific job requirements.
              </p>
              {{-- <div class="row">
                            <div class="col-md-2" >
                                <img class=" wow zoomIn bg-dark" data-wow-delay="0.9s"  src="{{ asset('assets/img/service/offering-1.svg')}}">
            </div>
            <div class="col-md-10">
              <h5 class="fw-bold text-dark">Permanent Hiring</h5>
              <p class="text-justify text-white">Tailored solutions for identifying and securing top-tier talent for
                long-term positions within your organisation.</p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-2">
              <img class=" wow zoomIn bg-dark" data-wow-delay="0.9s" src="{{ asset('assets/img/service/offering-1.svg')}}">
            </div>
            <div class="col-md-10">
              <h5 class="fw-bold text-dark">Contract Consultants</h5>
              <p class="text-justify text-white">Flexible staffing options providing skilled professionals on a
                temporary basis, handling payroll, benefits, and compliance.</p>
            </div>
          </div> --}}
        </div>
      </div>
    </div>
</div>
</div>


<div class="col-lg-12 mt-3 pt-4 bg-primary" style="min-height: 660px">
  <div class="text-center">
    <h3 class="fw-bold">Recruitment <span class="text-primary"> Solutions and Services</span> </h3>
  </div>
  <div class="service-solution h300">
    <div class="row g-5">
      <div id="service-solution" class="owl-carousel service-solution-carousel">
        <div class="mr-4 wow slideInUp" data-wow-delay="0.1s">
          <div class=" wow slideInUp mx-2 " data-wow-delay="0.3s">
            <div class="staffing-card bg-light overflow-hidden">
              <div class="team-img position-relative overflow-hidden d-flex justify-content-center">
                <img class="img-fluid w-50 h-50 p-5" src="{{ asset('assets/img/service-orm-1.svg')}}" alt="">
              </div>
              <div class="text-center py-4">
                <h5 class="fw-bold">IT Manpower Consultancy</h5>
                <p class="mx-3 text-center m-0 my-3">From workforce planning to end-to-end hiring support,
                  our consultancy solutions cover the entire recruitment spectrum.
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="mr-4 wow slideInUp" data-wow-delay="0.2s">
          <div class="wow slideInUp mx-2" data-wow-delay="0.3s">
            <div class="staffing-card  bg-light overflow-hidden">
              <div class="team-img position-relative overflow-hidden d-flex justify-content-center">
                <img class="img-fluid w-50 p-5" src="{{ asset('assets/img/service-orm-1.svg')}}" alt="">
              </div>
              <div class="text-center py-4">
                <h5 class="fw-bold">Permanent IT Staffing</h5>
                <p class="mx-3 text-center m-0 my-3">We specialise in finding, attracting, and hiring top-tier
                  software and tech talent for permanent positions, enhancing talent retention rates.
                </p>

              </div>
            </div>
          </div>
        </div>

        <div class="mr-4 wow slideInUp" data-wow-delay="0.3s">
          <div class="wow slideInUp mx-2" data-wow-delay="0.3s">
            <div class="staffing-card  bg-light overflow-hidden">
              <div class="team-img position-relative overflow-hidden d-flex justify-content-center">
                <img class="img-fluid w-50 p-5" src="{{ asset('assets/img/service-orm-1.svg')}}" alt="">
              </div>
              <div class="text-center py-4">
                <h5 class="fw-bold">Remote IT Staffing</h5>
                <p class="mx-3 text-center m-0 my-3">Our industry-specific remote staffing approach is tailored to
                  each client's needs, ensuring the selection of the best-suited candidates.
                </p>
              </div>
            </div>
          </div>
        </div>

        <div class="mr-4 wow slideInUp" data-wow-delay="0.2s">
          <div class="wow slideInUp mx-2" data-wow-delay="0.3s">
            <div class="staffing-card  bg-light overflow-hidden">
              <div class="team-img position-relative overflow-hidden d-flex justify-content-center">
                <img class="img-fluid w-50 p-5" src="{{ asset('assets/img/service-orm-1.svg')}}" alt="">
              </div>
              <div class="text-center py-4">
                <h5 class="fw-bold">IT Outsourcing Support </h5>
                <p class="mx-3 text-center m-0 my-3">Leveraging our vast network, we expedite the process of
                  finding the ideal IT talent from India and South Asian countries.
                </p>

              </div>
            </div>
          </div>
        </div>
        <div class="mr-4 wow slideInUp" data-wow-delay="0.2s">
          <div class="wow slideInUp mx-2" data-wow-delay="0.3s">
            <div class="staffing-card  bg-light overflow-hidden">
              <div class="team-img position-relative overflow-hidden d-flex justify-content-center">
                <img class="img-fluid w-50 p-5" src="{{ asset('assets/img/service-orm-1.svg')}}" alt="">
              </div>
              <div class="text-center py-4">
                <h5 class="fw-bold">International IT Recruitment</h5>
                <p class="mx-3 text-center m-0 my-3"> - With expertise in international IT recruitment, we
                  source professionals with precise skill sets and experience.
                </p>

              </div>
            </div>
          </div>
        </div>
        <div class="mr-4 wow slideInUp" data-wow-delay="0.2s">
          <div class="wow slideInUp mx-2" data-wow-delay="0.3s">
            <div class="staffing-card  bg-light overflow-hidden">
              <div class="team-img position-relative overflow-hidden d-flex justify-content-center">
                <img class="img-fluid w-50 p-5" src="{{ asset('assets/img/service-orm-1.svg')}}" alt="">
              </div>
              <div class="text-center py-4">
                <h5 class="fw-bold">Contractual Offshore Recruitment</h5>
                <p class="mx-3 text-center m-0 my-3">Our customizable approaches ensure the
                  successful fulfilment of offshore contractual IT recruitment needs.
                </p>

              </div>
            </div>
          </div>
        </div>
        <div class="mr-4 wow slideInUp" data-wow-delay="0.2s">
          <div class="wow slideInUp mx-2" data-wow-delay="0.3s">
            <div class="staffing-card  bg-light overflow-hidden">
              <div class="team-img position-relative overflow-hidden d-flex justify-content-center">
                <img class="img-fluid w-50 p-5" src="{{ asset('assets/img/service-orm-1.svg')}}" alt="">
              </div>
              <div class="text-center py-4">
                <h5 class="fw-bold">IT Executive Search</h5>
                <p class="mx-3 text-center m-0 my-3"> Let our IT executive search teams assist in filling top
                  leadership positions with outstanding talent.</p>

              </div>
            </div>
          </div>
        </div>
      </div>
      <ol class="carousel-indicators carousel" id="service-solution" data-ride="carousel">
        <li data-target="#service-solution" data-slide-to="0" class="active"></li>
        <li data-target="#service-solution" data-slide-to="1"></li>
        <li data-target="#service-solution" data-slide-to="2"></li>
        <li data-target="#service-solution" data-slide-to="3"></li>
        <li data-target="#service-solution" data-slide-to="4"></li>
      </ol>
    </div>
  </div>
</div>


<div class="col-lg-12 my-5 mb-5 ">
  <div class="text-center">
    <h3 class="fw-bold">Types of <span class="text-primary"> Hiring</span> </h3>
  </div>
  <div class="hiring py-4 my-4">
    <div class="row g-5">
      <div id="hiring" class="  owl-carousel hiring-carousel">
        <div class="mr-4 wow slideInUp" data-wow-delay="0.1s">
          <div class="d-flex flex-column aligns-content-center justify-content-center wow slideInUp mx-2 " data-wow-delay="0.3s">
            {{-- <div class=" overflow-hidden">
                                <img class="img-fluid w-50  p-3" src="{{ asset('assets/img/hiring-1.png')}}" alt="">
          </div>
          --}}

          <div class="d-flex flex-column justify-content-center wow slideInUp " data-wow-delay="0.1s">
            <div class="d-flex flex-row justify-content-center blog-share">
              <img class="img-fluid img-border m-2 w-50  p-3" src="{{ asset('assets/img/hiring-1.png')}}" alt="">
            </div>
            <h5 class="text-center">Onshore</h5>
          </div>
        </div>
      </div>
      <div class="mr-4 wow slideInUp" data-wow-delay="0.2s">
        <div class="wow slideInUp mx-2" data-wow-delay="0.3s">
          <div class="d-flex flex-column justify-content-center wow slideInUp " data-wow-delay="0.1s">
            <div class="d-flex flex-row justify-content-center blog-share">
              <img class="img-fluid img-border m-2 w-50  p-3" src="{{ asset('assets/img/hiring-2.png')}}" alt="">
            </div>
            <h5 class="text-center">Offshore Permanent</h5>
          </div>
        </div>
      </div>

      <div class="mr-4 wow slideInUp" data-wow-delay="0.3s">
        <div class="wow slideInUp mx-2" data-wow-delay="0.3s">
          {{-- <div class="   overflow-hidden">
                                <img class="img-fluid img-border m-2 w-50 p-3" src="{{ asset('assets/img/hiring-3.png')}}"
          alt="">
        </div>
        <h4>Contractual</h4> --}}
        <div class="d-flex flex-column justify-content-center wow slideInUp " data-wow-delay="0.1s">
          <div class="d-flex flex-row justify-content-center blog-share">
            <img class="img-fluid img-border m-2 w-50  p-3" src="{{ asset('assets/img/hiring-3.png')}}" alt="">
          </div>
          <h5 class="text-center">Contractual </h5>
        </div>
      </div>
    </div>

    <div class="mr-4 wow slideInUp" data-wow-delay="0.2s">
      <div class="wow slideInUp mx-2" data-wow-delay="0.3s">

        <div class="d-flex flex-column justify-content-center wow slideInUp " data-wow-delay="0.1s">
          <div class="d-flex flex-row justify-content-center blog-share">
            <img class="img-fluid img-border m-2 w-50  p-3" src="{{ asset('assets/img/hiring-4.png')}}" alt="">
          </div>
          <h5 class="text-center">Remote </h5>
        </div>
      </div>
    </div>
    <div class="mr-4 wow slideInUp" data-wow-delay="0.2s">
      <div class="wow slideInUp mx-2" data-wow-delay="0.3s">
        {{-- <div class="   overflow-hidden">
                                <img class="img-fluid img-border m-2 w-50 p-3" src="{{ asset('assets/img/hiring-1.png')}}"
        alt="">
      </div>
      <h4>Comprehensive</h4> --}}
      <div class="d-flex flex-column justify-content-center wow slideInUp " data-wow-delay="0.1s">
        <div class="d-flex flex-row justify-content-center blog-share">
          <img class="img-fluid img-border m-2 w-50  p-3" src="{{ asset('assets/img/hiring-2.png')}}" alt="">
        </div>
        <h5 class="text-center">Comprehensive </h5>
      </div>
    </div>
  </div>
</div>

</div>

</div>
{{-- <ol class="carousel-indicators carousel" id="hiring" data-ride="carousel">
                <li data-target="#hiring" data-slide-to="0" class="active"></li>
                <li data-target="#hiring" data-slide-to="1"></li>
                <li data-target="#hiring" data-slide-to="2"></li>
                <li data-target="#hiring" data-slide-to="3"></li>
                <li data-target="#hiring" data-slide-to="4"></li>
            </ol> --}}
</div>

<div class="container-fluid py-5 wow fadeInUp bg-primary" data-wow-delay="0.1s">
  <div class="container">
    <div class="row g-5">
      <div class="col-lg-6">
        <div class="card" style="min-height: 300px;">
          <img class=" w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/staffing.png')}}">
        </div>
      </div>
      <div class="col-lg-6">
        <div class="position-relative pb-2">
          <h1 class="fw-fold">Comprehensive <br><span class="text-primary">Staffing Services</span></h1>
        </div>
        <p class="mb-2 text-justify">At Intelli Vectra, we recognize the critical importance of finding the right talent
          for
          organisational success. Therefore, we offer comprehensive staffing services tailored to meet
          your human resource needs effectively. Whether you require permanent hires, contract
          consultants, or recruitment process outsourcing, we have the solutions to support your
          staffing requirements seamlessly.</p>

      </div>

    </div>
  </div>
</div>


<div class="container-fluid py-5  wow fadeInUp" data-wow-delay="0.2s">
  <div class="container">
    <div class="text-center position-relative pb-3 mb-4 mx-auto">
      <h1>Our <span class="text-primary"> Offerings</span></h1>
    </div>
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="row">
          <div class="col-md-2">
            <img class=" wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/service/offering-1.svg')}}">
          </div>
          <div class="col-md-10">
            <h5 class="fw-bold">Permanent Hiring</h5>
            <p class="text-justify">Tailored solutions for identifying and securing top-tier talent for
              long-term positions within your organisation</p>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="row">
          <div class="col-md-2 ">
            <img class=" wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/service/offering-6.svg')}}">
          </div>
          <div class="col-md-10">
            <h5 class="fw-bold">Contract Consultants</h5>
            <p class="text-justify">Flexible staffing options providing skilled professionals on a
              temporary basis, handling payroll, benefits, and compliance.
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="row mt-3">
      <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="row">
          <div class="col-md-2">
            <img class=" wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/service/offering-2.svg')}}">
          </div>
          <div class="col-md-10">
            <h5 class="fw-bold">Recruitment Process Outsourcing (RPO)</h5>
            <p class="text-justify">Comprehensive support in optimising
              recruitment strategies, from project-based to selective recruitment, using
              technology-driven approaches.</p>
          </div>
        </div>
      </div>
      {{-- <div class="col-lg-6 col-md-6 col-sm-12" >
                <div class="row">
                    <div class="col-md-2 " >
                        <img class=" wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/service/offering-3.svg')}}">
    </div>
    <div class="col-md-10">
      <h5 class="fw-bold">Digital Transformation Consulting</h5>
      <p class="text-justify">Recommending digital processes for
        transformation.</p>
    </div>
  </div>
</div> --}}
</div>

</div>
</div>


<div class="container-fluid py-4 wow fadeInUp" data-wow-delay="0.4s">
  <div class="container">
    <div class="text-center position-relative pb-3 mx-auto">
      <h1>How it <span class="text-primary"> Works </span></h1>

    </div>
    <div class="row g-5">

      <div class="col-lg-12 col-md-12" data-wow-delay="0.5s">
        <div class="d-flex flex-row justify-content-center ">
          <div class="row d-flex flex-row justify-content-between">
            <div class="col-lg-3 col-md-3 col-sm-6 text-center px-4 wow fadeInUp" data-wow-delay="0.6s">
              <img class="ups-img w-50 py-2" data-wow-delay="0.2s" src="{{ asset('assets/img/service-orm-4.svg')}}">
              <h5>Step-1 </h5>
              <p>Define roles, find candidates, and present them within three days.
              </p>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 text-center px-4 wow fadeInUp" data-wow-delay="0.7s">
              <img class="ups-img w-50 py-2" data-wow-delay="0.3s" src="{{ asset('assets/img/service-orm-1.svg')}}">
              <h5>Step-2</h5>
              <p>Handle payroll, benefits, and compliance for temporary staff. </p>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-6 text-center px-4 wow fadeInUp" data-wow-delay="0.8s">
              <img class="ups-img w-50 py-2" data-wow-delay="0.3s" src="{{ asset('assets/img/service-orm-3.svg')}}">
              <h5>Step-3</h5>
              <p>Streamline recruitment processes, offer support, and utilise technology.</p>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 text-center px-4 wow fadeInUp" data-wow-delay="0.9s">
              <img class="ups-img w-50 py-2" data-wow-delay="0.1s" src="{{ asset('assets/img/service-orm-2.svg')}}">
              <h5 class="">Step-4</h5>
              <p>Choose full support or specific services based on your requirements.
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
      <div class="container-fluid py-4 wow fadeInUp bg-primary ml-0 ml-md-5" data-wow-delay="0.4s">
        <div class="container">
          <div class="text-center position-relative pb-3 mb-4 mx-auto">
            <h4 class="text-left text-primary">Key Features of Our Consulting Services</h4>
            <p class="text-justify mb-0">Our key features include comprehensive solutions covering evaluation,
              implementation,
              customization, and support for ERP, CRM & BPM applications. We prioritise tailored
              approaches to meet specific business needs, ensuring maximum effectiveness and
              efficiency. Also our expertise in standardisation, optimization, and automation drives
              innovation and competitiveness in business processes.
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-8 col-md-8 col-sm-12">
      <div class="service-feature bg h300">
        <div class="row g-5">
          <div id="service-feature" class="px-5 owl-carousel service-feature-carousel">

            <div class="mr-4 wow slideInUp" data-wow-delay="0.2s">
              <div class="wow slideInUp mx-2" data-wow-delay="0.3s">
                <div class="ser-feature-card  bg-light overflow-hidden">
                  <div class="team-img position-relative overflow-hidden d-flex justify-content-center">
                    <img class="img-fluid w-50 p-5" src="{{ asset('assets/img/service-orm-1.svg')}}" alt="">
                  </div>
                  <div class="text-center py-4">
                    <h5 class="fw-bold">Performance Improvement</h5>
                    <p class="mx-3 text-center m-0 my-3">Enhance operational efficiency and performance
                      through tailored consulting services.
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
                    <h5 class="fw-bold">Adaptability</h5>
                    <p class="mx-3 text-center m-0 my-3">Navigate change and uncertainty with confidence, knowing you
                      have
                      expert guidance and support.</p>
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
                    <h5 class="fw-bold">Business Growth</h5>
                    <p class="mx-3 text-center m-0 my-3"> Unlock opportunities for growth and expansion with our
                      strategic
                      management advisory and transformational consulting services.</p>

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

  <div class="accordion feature-faq" id="accordionExample">
    <div class="card">
      <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample" data-target="#collapseOne" aria-expanded="true">
        <h6 class="fw-bold">What industries do you specialise in?</h6>
        <div class="acoord-btn text-right mr-2">

        </div>
      </div>
      <div id="collapseOne" class="collapse " data-parent="#accordionExample">
        <div class="card-body">
          <p>We have expertise across various industries, including technology, finance, and
            manufacturing, among others.</p>
        </div>
      </div>
    </div>

    <div class="card">
      <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true">
        <h6 class="fw-bold">How do you ensure the success of consulting projects?
        </h6>
        <div class="acoord-btn text-right mr-2">
          {{-- <a href="{{ route('career.apply')}}" class="rounded-career-btn mr-2 py-2 px-3 bg-dark mx-2">Apply <i class=" fas fa-arrow-right fw-normal"></i></a> --}}
          {{-- <span  class="accicon"><i class=" fas fa-angle-down rotate-icon"></i></span> --}}
        </div>
      </div>
      <div id="collapseTwo" class="collapse" data-parent="#accordionExample">
        <div class="card-body">
          <p>We ensure project success through thorough planning, strategic implementation,
            continuous monitoring, and responsive support, tailored to each client's unique
            requirements.</p>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample" data-target="#collapseThree" aria-expanded="true">
        <h6 class="fw-bold">Can you provide examples of your past successful consulting engagements? </h6>
        <div class="acoord-btn text-right mr-2  pb-3">
          {{-- <a href="{{ route('career.apply')}}" class="rounded-career-btn mr-2 bg-dark mx-2">Apply <i class=" fas fa-arrow-right fw-normal"></i></a> --}}
          {{-- <span  class="accicon"><i class=" fas fa-angle-down rotate-icon"></i></span> --}}
        </div>
      </div>
      <div id="collapseThree" class="collapse" data-parent="#accordionExample">
        <div class="card-body">
          <p>Certainly, we have a track record of successful projects. Please feel free to request
            examples for reference</p>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample" data-target="#collapseFour" aria-expanded="true">
        <h6 class="fw-bold">How do you maintain confidentiality and data security during consulting
          engagements?
           </h6>
        <div class="acoord-btn text-right mr-2  pb-3">
          {{-- <a href="{{ route('career.apply')}}" class="rounded-career-btn mr-2 bg-dark mx-2">Apply <i class=" fas fa-arrow-right fw-normal"></i></a> --}}
          {{-- <span  class="accicon"><i class="  px-3 fas fa-angle-down rotate-icon"></i></span> --}}
        </div>
      </div>
      <div id="collapseFour" class="collapse" data-parent="#accordionExample">
        <div class="card-body">
          <p>Confidentiality and data security are paramount to us. We implement stringent
            protocols and industry best practices to safeguard client information throughout the
            consulting process</p>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample" data-target="#collapseFive" aria-expanded="true">
        <h6 class="fw-bold">What sets your consulting services apart from others in the market?</h6>
        <div class="acoord-btn text-right mr-2  pb-3">
          {{-- <a href="{{ route('career.apply')}}" class="rounded-career-btn mr-2 bg-dark mx-2">Apply <i class=" fas fa-arrow-right fw-normal"></i></a> --}}
          {{-- <span  class="accicon"><i class=" fas fa-angle-down rotate-icon"></i></span> --}}
        </div>
      </div>
      <div id="collapseFive" class="collapse" data-parent="#accordionExample">
        <div class="card-body">
          <p>Our consulting services stand out due to our collaborative approach, industry
            expertise, tailored solutions, and commitment to delivering tangible results for our
            clients.</p>
        </div>
      </div>
    </div>

  </div>
</div>


@include('landing.components.get-in-touch')
</div>
@endsection
