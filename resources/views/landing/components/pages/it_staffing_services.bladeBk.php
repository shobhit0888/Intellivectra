@extends('landing.layouts.base')
@section('contents')
@php
$fragment = isset($_GET['fragment']) ? $_GET['fragment'] : '';
@endphp
@if($fragment == '')
$fragment = 'pills-home-tab2';
@endif
<!-- <div class="carousel-inne" >
    <div class="bannerImage">
        <img class="w-100 hFull" src="{{ asset('assets/img/service/feature-bg.jpg')}}" alt="Image">
        <div class="w-100 posAbs d-flex flex-column align-items-center justify-content-center">
            <div class="container">
                <div class="p-3 text-left">
                    <p class='text-white text-center serviceBannerText'>Cloud <span class='txtYellow'> Transformation </span></p>
                      <p class='text-center text-white'></p>
                </div>
            </div>
        </div>
    </div>
</div> -->
<div class='navigationPane'>
  <ul
    class="nav flex-nowrap widthFitContent width200Percent mx-auto nav-pills align-items-center justify-content-center"
    id="pills-tab" role="tablist">
    <li class="nav-item">
      <span class="nav-link text-white py-1 px-4" style="font-weight:600; font-size:22px;">IT Staffing Services</span>
    </li>
    <li class="nav-item" role="presentation">
      <span class="nav-link @if($fragment == 'pills-home') active @endif text-white py-1 px-4" id="pills-home-tab2" data-bs-toggle="pill"
        data-bs-target="#pills-home" type="buttn" role="tab" aria-controls="pills-home" aria-selected="true">Permanent
        Hiring</span>
    </li IT Services>
    <li class="nav-item" role="presentation">
      <span class="nav-link @if($fragment == 'pills-profile') active @endif text-white py-1 px-4" id="pills-profile-tab2" data-bs-toggle="pill"
        data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
        aria-selected="false">Contract Consultants

      </span>
    </li>
    <li class="nav-item" role="presentation">
      <span class="nav-link @if($fragment == 'pills-contact') active @endif text-white py-1 px-4" id="pills-contact-tab2" data-bs-toggle="pill"
        data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact"
        aria-selected="false">Recruitment Outsourcing</span>
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
              <p class='text-white text-center serviceBannerText'>Permanent
                <span class='txtYellow'> Hiring </span>
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
              <img class=" w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s"
                src="{{ asset('assets/img/service/service-st-1.png')}}">
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12 pl-1 pl-md-5 ">
            <div class="position-relative pb-3">
              <h1> <span class="text-primary">Permanent Hiring</span></h1>
            </div>
            <p class="mb-2 text-justify">Permanent hiring involves recruiting full-time employees to fill long-term positions within an organization. It entails sourcing, screening, and selecting candidates who will become integral members of the team, providing stability and continuity to the business.</p>
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-12">
      <div class="row">
        <div class="col-lg-6 staff-left p-3">
          <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.2s">
            <div class="container px-3">
              <div class="p-0 p-md-4 ">
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
                                <img class="position-absolute wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/service/offering-1.svg')}}">
              </div>
              <div class="col-md-10">
                <h5 class="fw-bold text-primary">Permanent Hiring</h5>
                <p class="text-justify text-white">Tailored solutions for identifying and securing top-tier talent for
                  long-term positions within your organisation.</p>
              </div>
            </div>
            <div class="row">
              <div class="col-md-2">
                <img class="position-absolute wow zoomIn" data-wow-delay="0.9s"
                  src="{{ asset('assets/img/service/offering-1.svg')}}">
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
          <div class="p-0 p-md-4 ">
            <h2 class="text-white">Expertise and <span class="text-dark"> Services</span> </h2>
            <p class="mb-2 text-white text-justify pb-4 mb-4">Our team comprises seasoned experts in technical staff
              augmentation, professional
              services, and system integration program delivery. Drawing upon extensive experience in
              technical, IT, and engineering program management across diverse industries and verticals,
              we excel in aligning the best resources to meet your specific job requirements.
            </p>
            {{-- <div class="row">
                            <div class="col-md-2" >
                                <img class="position-absolute wow zoomIn bg-dark" data-wow-delay="0.9s"  src="{{ asset('assets/img/service/offering-1.svg')}}">
          </div>
          <div class="col-md-10">
            <h5 class="fw-bold text-dark">Permanent Hiring</h5>
            <p class="text-justify text-white">Tailored solutions for identifying and securing top-tier talent for
              long-term positions within your organisation.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-2">
            <img class="position-absolute wow zoomIn bg-dark" data-wow-delay="0.9s"
              src="{{ asset('assets/img/service/offering-1.svg')}}">
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
          <div class="d-flex flex-column aligns-content-center justify-content-center wow slideInUp mx-2 "
            data-wow-delay="0.3s">
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
          <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s"
            src="{{ asset('assets/img/staffing.png')}}">
        </div>
      </div>
      <div class="col-lg-6">
        <div class="position-relative pb-2">
          <h1 class="fw-fold">Comprehensive <br><span class="text-primary">Staffing Services</span></h1>
        </div>
        <p class="mb-2 text-justify">At Intelli Vectra Technologies, we recognize the critical importance of finding the right talent
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
            <h5 class="fw-bold">Comprehensive Talent Acquisition Process</h5>
            <p class="text-justify"> Intelli Vectra Technologies offers a meticulous talent acquisition process tailored for permanent hiring in IT staffing services. Our process encompasses candidate sourcing, screening, interviewing, and selection, ensuring high-quality placements for our clients.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="row">
          <div class="col-md-2 ">
            <img class=" wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/service/offering-6.svg')}}">
          </div>
          <div class="col-md-10">
            <h5 class="fw-bold">Advanced Candidate Screening Techniques</h5>
            <p class="text-justify">Leveraging cutting-edge technology and industry expertise, we employ advanced candidate screening techniques. Our screening methods include technical assessments, behavioral interviews, and competency evaluations to identify the best-fit candidates for each role.
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
            <h5 class="fw-bold">Extensive Candidate Database</h5>
            <p class="text-justify">We maintain an extensive database of qualified IT professionals, continuously updated with new talent. This database allows us to quickly match client requirements with suitable candidates, expediting the hiring process.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12" >
                <div class="row">
                    <div class="col-md-2 " >
                        <img class="position-absolute wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/service/offering-3.svg')}}">
    </div>
    <div class="col-md-10">
      <h5 class="fw-bold">Customized Recruitment Solutions</h5>
      <p class="text-justify">Intelli Vectra Technologies provides customized recruitment solutions tailored to each client's specific needs. Whether the requirement is for niche skill sets or volume hiring, we adapt our strategies to deliver optimal results</p>
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
            <h5 class="fw-bold">Industry-Specific Expertise</h5>
            <p class="text-justify">Our team possesses deep industry-specific expertise across various IT domains, including software development, cybersecurity, cloud computing, and more. This expertise enables us to understand the unique challenges and requirements of each IT role, facilitating accurate candidate assessments.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12" >
                <div class="row">
                    <div class="col-md-2 " >
                        <img class="position-absolute wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/service/offering-3.svg')}}">
    </div>
    <div class="col-md-10">
      <h5 class="fw-bold">Transparent Communication and Reporting</h5>
      <p class="text-justify">We prioritize transparent communication with our clients throughout the hiring process. Regular updates and detailed reporting ensure that clients are informed about the progress and status of their recruitment initiatives.</p>
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
            <h5 class="fw-bold">Focus on Quality and Long-Term Fit</h5>
            <p class="text-justify">Intelli Vectra's Technologies primary focus is on delivering quality hires that align with our clients' long-term objectives. We emphasize not only technical proficiency but also cultural fit and potential for long-term success within the client's organization.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12" >
                <div class="row">
                    <div class="col-md-2 " >
                        <img class="position-absolute wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/service/offering-3.svg')}}">
    </div>
    <div class="col-md-10">
      <h5 class="fw-bold">Post-Placement Support and Follow-Up</h5>
      <p class="text-justify">Our commitment to client satisfaction extends beyond the recruitment process. We provide post-placement support and follow-up to ensure a smooth transition for the hired candidates and address any concerns that may arise.</p>
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
            <h5 class="fw-bold">Continuous Improvement and Adaptation</h5>
            <p class="text-justify"> Intelli Vectra Technologies is dedicated to continuous improvement and adaptation to evolving industry trends and client needs. We regularly review and refine our processes to maintain high standards of service delivery and client satisfaction.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12" >
                <div class="row">
                    <div class="col-md-2 " >
                        <img class="position-absolute wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/service/offering-3.svg')}}">
    </div>
    <div class="col-md-10">
      <h5 class="fw-bold">Compliance and Legal Adherence</h5>
      <p class="text-justify">Our permanent hiring solutions adhere to all relevant legal and compliance requirements, including labor laws, data protection regulations, and industry standards. Clients can trust Intelli Vectra to manage the recruitment process with integrity and professionalism, mitigating any potential risks.</p>
    </div>
  </div>
</div> 
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
<div class="container-fluid py-4 wow fadeInUp" data-wow-delay="0.4s">
  <div class="container">
    <div class="text-center position-relative pb-3 mx-auto">
      <h1><span class="text-primary">Our Process</span></h1>
     <p>Our process for permanent IT hiring includes thorough client needs analysis, talent sourcing from multiple channels, comprehensive candidate screening, client presentations, interview coordination, offer negotiation, and onboarding support. This ensures successful placements tailored to client requirements. The details are given below
  </p>
    </div>
    <div class="row g-5">

      <div class="col-lg-12 col-md-12" data-wow-delay="0.5s">
        <div class="d-flex flex-row justify-content-center ">
          <div class="row d-flex flex-row justify-content-between">
            <div class="col-lg-3 col-md-3 col-sm-6 text-center px-4 wow fadeInUp" data-wow-delay="0.6s">
              <img class="ups-img w-50 py-2" data-wow-delay="0.2s" src="{{ asset('assets/img/service-orm-4.svg')}}">
              <h5>Understanding Client Needs</h5>
              <p>To effectively meet client requirements in permanent hiring, it's essential to identify technical skills, experience levels, and cultural fit. Close collaboration with clients ensures precise alignment with their organizational goals and work environment.</p>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 text-center px-4 wow fadeInUp" data-wow-delay="0.7s">
              <img class="ups-img w-50 py-2" data-wow-delay="0.3s" src="{{ asset('assets/img/service-orm-1.svg')}}">
              <h5>Talent Sourcing</h5>
              <p>Talent sourcing for permanent hiring involves leveraging internal databases, job boards, networking, and social media to identify qualified candidates. This multifaceted approach ensures a diverse pool of talent for client placements</p>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-6 text-center px-4 wow fadeInUp" data-wow-delay="0.8s">
              <img class="ups-img w-50 py-2" data-wow-delay="0.3s" src="{{ asset('assets/img/service-orm-3.svg')}}">
              <h5>Candidate Screening</h5>
              <p>Candidate screening in IT staffing involves rigorous resume review, technical assessments, behavioral interviews, and reference checks. This comprehensive process ensures the selection of highly qualified candidates who meet client requirements.</p>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 text-center px-4 wow fadeInUp" data-wow-delay="0.9s">
              <img class="ups-img w-50 py-2" data-wow-delay="0.1s" src="{{ asset('assets/img/service-orm-2.svg')}}">
              <h5 class="">Client Presentation</h5>
              <p>Presentation to the client in IT staffing includes detailed candidate profiles, assessment results, and cultural fit analysis. This comprehensive overview enables clients to make informed decisions aligned with their company's needs and culture</p>
            </div>
          </div>
        </div>
      <div class="d-flex flex-row justify-content-center ">
          <div class="row d-flex flex-row justify-content-between">
            <div class="col-lg-3 col-md-3 col-sm-6 text-center px-4 wow fadeInUp" data-wow-delay="0.6s">
              <img class="ups-img w-50 py-2" data-wow-delay="0.2s" src="{{ asset('assets/img/service-orm-4.svg')}}">
              <h5>Interview Coordination</h5>
              <p>Interview coordination in IT staffing involves scheduling, preparation, and feedback gathering between clients and candidates. This ensures a smooth and efficient process, facilitating informed decisions and constructive feedback loops for continuous improvement.</p>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 text-center px-4 wow fadeInUp" data-wow-delay="0.7s">
              <img class="ups-img w-50 py-2" data-wow-delay="0.3s" src="{{ asset('assets/img/service-orm-1.svg')}}">
              <h5>Offer Negotiation</h5>
              <p>Offer negotiation in IT staffing services involves presenting job offers, facilitating discussions on salary and benefits, and ensuring mutual agreement between clients and candidates. This ensures a successful placement aligned with both parties' expectations.</p>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-6 text-center px-4 wow fadeInUp" data-wow-delay="0.8s">
              <img class="ups-img w-50 py-2" data-wow-delay="0.3s" src="{{ asset('assets/img/service-orm-3.svg')}}">
              <h5>Onboarding Support</h5>
              <p>Onboarding support in IT staffing includes paperwork assistance, transition guidance, and follow-up to ensure a smooth integration of the candidate into the client's team. This fosters a positive experience and enhances long-term retention</p>
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
      <div class="container-fluid py-4 wow fadeInUp bg-primary ml-0 ml-md-5 " data-wow-delay="0.4s">
        <div class="container">
          <div class="text-center position-relative pb-3 mb-4 mx-auto">
            <h4 class="text-left text-primary">Key features of Permanent Hiring</h4>
            <p class="text-justify mb-0">Comprehensive talent acquisition process.
            Advanced candidate screening techniques.
            Extensive candidate database.
            Customized recruitment solutions.
            Industry-specific expertise.
            Transparent communication and reporting.
            Focus on quality and long-term fit.
            Post-placement support and follow-up.
            Continuous improvement and adaptation.
            Compliance and legal adherence.

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
      <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample"
        data-target="#collapseOne" aria-expanded="true">
        <h6 class="fw-bold">What is permanent hiring in IT staffing services?</h6>
        <div class="acoord-btn text-right mr-2">

        </div>
      </div>
      <div id="collapseOne" class="collapse " data-parent="#accordionExample">
        <div class="card-body">
          <p>Permanent hiring involves recruiting full-time employees to fill long-term positions within an organization's IT department.</p>
        </div>
      </div>
    </div>

    <div class="card">
      <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample"
        data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true">
        <h6 class="fw-bold"> What are the benefits of permanent hiring compared to temporary or contract staffing?

        </h6>
        <div class="acoord-btn text-right mr-2">
          {{-- <a href="{{ route('career.apply')}}" class="rounded-career-btn mr-2 py-2 px-3 bg-dark mx-2">Apply <i
            class=" fas fa-arrow-right fw-normal"></i></a> --}}
          {{-- <span  class="accicon"><i class=" fas fa-angle-down rotate-icon"></i></span> --}}
        </div>
      </div>
      <div id="collapseTwo" class="collapse" data-parent="#accordionExample">
        <div class="card-body">
          <p>Permanent hiring offers stability, investment in talent, cultural fit, ownership, cost savings, knowledge retention, reduced recruitment burden, career progression, and better integration.</p>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample"
        data-target="#collapseThree" aria-expanded="true">
        <h6 class="fw-bold">How does permanent hiring process differ from temporary or contract staffing? </h6>
        <div class="acoord-btn text-right mr-2  pb-3">
          {{-- <a href="{{ route('career.apply')}}" class="rounded-career-btn mr-2 bg-dark mx-2">Apply <i
            class=" fas fa-arrow-right fw-normal"></i></a> --}}
          {{-- <span  class="accicon"><i class=" fas fa-angle-down rotate-icon"></i></span> --}}
        </div>
      </div>
      <div id="collapseThree" class="collapse" data-parent="#accordionExample">
        <div class="card-body">
          <p>Permanent hiring involves a more extensive screening process, focusing on long-term fit and cultural alignment, while temporary or contract staffing may prioritize immediate skill match and short-term needs.
</p>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample"
        data-target="#collapseFour" aria-expanded="true">
        <h6 class="fw-bold">What steps are involved in the permanent hiring process?
           </h6>
        <div class="acoord-btn text-right mr-2  pb-3">
          {{-- <a href="{{ route('career.apply')}}" class="rounded-career-btn mr-2 bg-dark mx-2">Apply <i
            class=" fas fa-arrow-right fw-normal"></i></a> --}}
          {{-- <span  class="accicon"><i class="  px-3 fas fa-angle-down rotate-icon"></i></span> --}}
        </div>
      </div>
      <div id="collapseFour" class="collapse" data-parent="#accordionExample">
        <div class="card-body">
          <p>The process typically includes job profiling, sourcing candidates, screening resumes, conducting interviews, skill assessments, reference checks, negotiation, and onboarding</p>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample"
        data-target="#collapseFive" aria-expanded="true">
        <h6 class="fw-bold">How long does the permanent hiring process usually take?</h6>
        <div class="acoord-btn text-right mr-2  pb-3">
          {{-- <a href="{{ route('career.apply')}}" class="rounded-career-btn mr-2 bg-dark mx-2">Apply <i
            class=" fas fa-arrow-right fw-normal"></i></a> --}}
          {{-- <span  class="accicon"><i class=" fas fa-angle-down rotate-icon"></i></span> --}}
        </div>
      </div>
      <div id="collapseFive" class="collapse" data-parent="#accordionExample">
        <div class="card-body">
          <p>The timeline varies depending on factors such as the availability of qualified candidates, the complexity of the role, and the organization's hiring process. It can range from several weeks to a few months.
        </p>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample"
        data-target="#collapseSix" aria-expanded="true">
        <h6 class="fw-bold"> What strategies can be used to attract top talent for permanent positions?</h6>
        <div class="acoord-btn text-right mr-2  pb-3">
          {{-- <a href="{{ route('career.apply')}}" class="rounded-career-btn mr-2 bg-dark mx-2">Apply <i
            class=" fas fa-arrow-right fw-normal"></i></a> --}}
          {{-- <span  class="accicon"><i class=" fas fa-angle-down rotate-icon"></i></span> --}}
        </div>
      </div>
      <div id="collapseSix" class="collapse" data-parent="#accordionExample">
        <div class="card-body">
          <p>Strategies may include employer branding, offering competitive salaries and benefits, providing opportunities for career growth, maintaining a positive work culture, and leveraging professional networks and recruitment channels.
        </p>
        </div>
      </div>
    </div>
     <div class="card">
      <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample"
        data-target="#collapseSeven" aria-expanded="true">
        <h6 class="fw-bold">How can permanent hiring help in achieving diversity and inclusion goals?</h6>
        <div class="acoord-btn text-right mr-2  pb-3">
          {{-- <a href="{{ route('career.apply')}}" class="rounded-career-btn mr-2 bg-dark mx-2">Apply <i
            class=" fas fa-arrow-right fw-normal"></i></a> --}}
          {{-- <span  class="accicon"><i class=" fas fa-angle-down rotate-icon"></i></span> --}}
        </div>
      </div>
      <div id="collapseSeven" class="collapse" data-parent="#accordionExample">
        <div class="card-body">
          <p>Permanent hiring allows organizations to focus on diversity and inclusion initiatives by proactively seeking candidates from underrepresented groups and creating an inclusive workplace culture.
        </p>
        </div>
      </div>
      <div class="card">
      <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample"
        data-target="#collapseEight" aria-expanded="true">
        <h6 class="fw-bold">What role does technology play in the permanent hiring process?</h6>
        <div class="acoord-btn text-right mr-2  pb-3">
          {{-- <a href="{{ route('career.apply')}}" class="rounded-career-btn mr-2 bg-dark mx-2">Apply <i
            class=" fas fa-arrow-right fw-normal"></i></a> --}}
          {{-- <span  class="accicon"><i class=" fas fa-angle-down rotate-icon"></i></span> --}}
        </div>
      </div>
      <div id="collapseEight" class="collapse" data-parent="#accordionExample">
        <div class="card-body">
          <p>Technology is used for candidate sourcing, applicant tracking, skill assessments, and video interviewing, streamlining the hiring process and improving efficiency.
        </p>
        </div>
      </div>
      <div class="card">
      <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample"
        data-target="#collapseNine" aria-expanded="true">
        <h6 class="fw-bold"> How do you ensure a good cultural fit with permanent hires?</h6>
        <div class="acoord-btn text-right mr-2  pb-3">
          {{-- <a href="{{ route('career.apply')}}" class="rounded-career-btn mr-2 bg-dark mx-2">Apply <i
            class=" fas fa-arrow-right fw-normal"></i></a> --}}
          {{-- <span  class="accicon"><i class=" fas fa-angle-down rotate-icon"></i></span> --}}
        </div>
      </div>
      <div id="collapseNine" class="collapse" data-parent="#accordionExample">
        <div class="card-body">
          <p>Cultural fit can be assessed through behavioral interviews, reference checks, and involving key team members in the hiring process to evaluate compatibility with the organization's values and work environment.
        </p>
        </div>
      </div>
      <div class="card">
      <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample"
        data-target="#collapseTen" aria-expanded="true">
        <h6 class="fw-bold">What support is provided after a permanent hire is made?</h6>
        <div class="acoord-btn text-right mr-2  pb-3">
          {{-- <a href="{{ route('career.apply')}}" class="rounded-career-btn mr-2 bg-dark mx-2">Apply <i
            class=" fas fa-arrow-right fw-normal"></i></a> --}}
          {{-- <span  class="accicon"><i class=" fas fa-angle-down rotate-icon"></i></span> --}}
        </div>
      </div>
      <div id="collapseTen" class="collapse" data-parent="#accordionExample">
        <div class="card-body">
          <p>Post-placement support may include onboarding programs, performance evaluations, career development opportunities, and ongoing communication to ensure the employee's success and integration into the team.
        </p>
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
            <p class='text-white text-center serviceBannerText'>Contract
              <span class='txtYellow'> Consultants </span>
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
            <img class=" w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s"
              src="{{ asset('assets/img/service/service-po-1.png')}}">
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 pl-1 pl-md-5 ">
          <div class="position-relative pb-3">
            <h1> <span class="text-primary">Contracted Consultants </span></h1>
          </div>
          <p class="mb-2 text-justify">At Intelli Vectra Technologies,Programs for Contracted Consultants  will take over all payroll duties and functions. Screening and recruiting services are included. Employee benefits include medical, dental, vision, life insurance, and paid time off. The employee's hourly wage will be agreed upon in advance, so there will be no surprise. Complying with all federal, state, and local regulations.

          </p>

          {{-- <a href="{{ route('about')}}" class="btn btn-dark rounded-pill py-3 px-5 mt-3 wow zoomIn"
          data-wow-delay="0.9s">Know More <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
            fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
            <path fill-rule="evenodd"
              d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8" />
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
              <h5 class="fw-bold">Temporary Arrangement</h5>
              <p class="text-justify">Our Consultants are usually brought in for a finite period, often for the duration of a particular project or to provide ongoing support for a defined period.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
          <div class="row">
            <div class="col-md-2 ">
              <img class=" wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/service/offering-6.svg')}}">
            </div>
            <div class="col-md-10">
              <h5 class="fw-bold">External Perspective</h5>
              <p class="text-justify">One of the key benefits of hiring consultants is their ability to provide an outside perspective. They bring fresh ideas, best practices, and insights from their experiences working with other clients.

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
              <h5 class="fw-bold">Objective Advice</h5>
              <p class="text-justify">Our Consultants are not permanent employees of the organization, they can offer unbiased and objective advice without being influenced by internal politics or conflicts of interest.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
          <div class="row">
            <div class="col-md-2 ">
              <img class=" wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/service/offering-3.svg')}}">
            </div>
            <div class="col-md-10">
              <h5 class="fw-bold">Cost-Effectiveness:</h5>
              <p class="text-justify">While hiring consultants may seem expensive upfront, it can be cost-effective in the long run, especially for short-term projects where hiring full-time employees might not be justified.</p>
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
              <h5 class="fw-bold">Specific Projects or Needs</h5>
              <p class="text-justify">We provide consultants to address specific challenges or opportunities, such as implementing a new system, restructuring operations, conducting market research, or developing a strategic plan</p>
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
                <p>Collaborating closely with clients to craft a clear vision for success</p>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-6 text-center px-4 wow fadeInUp" data-wow-delay="0.7s">
                <img class="ups-img w-50 py-2" data-wow-delay="0.3s" src="{{ asset('assets/img/service-orm-1.svg')}}">
                <h5>Step-2</h5>
                <p>Implementing customised solutions for specific needs and opportunities. </p>
              </div>

              <div class="col-lg-3 col-md-3 col-sm-6 text-center px-4 wow fadeInUp" data-wow-delay="0.8s">
                <img class="ups-img w-50 py-2" data-wow-delay="0.3s" src="{{ asset('assets/img/service-orm-3.svg')}}">
                <h5>Step-3</h5>
                <p>Providing expert insights and hands-on assistance throughout. Continuous Step</p>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-6 text-center px-4 wow fadeInUp" data-wow-delay="0.9s">
                <img class="ups-img w-50 py-2" data-wow-delay="0.1s" src="{{ asset('assets/img/service-orm-2.svg')}}">
                <h5 class="">Step-4</h5>
                <p>Constantly monitoring and refining strategies for alignment with evolving goals. </p>
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
      <h1><span class="text-primary">Our Process For Contracted Consultants </span></h1>
     <p>Our expert consultants bring extensive experience and specialized knowledge to drive success in projects ranging from strategy development to process optimization. With flexible engagements and objective guidance, we help you achieve your goals efficiently and effectively.
  </p>
    </div>
    <div class="row g-5">

      <div class="col-lg-12 col-md-12" data-wow-delay="0.5s">
        <div class="d-flex flex-row justify-content-center ">
          <div class="row d-flex flex-row justify-content-between">
            <div class="col-lg-3 col-md-3 col-sm-6 text-center px-4 wow fadeInUp" data-wow-delay="0.6s">
              <img class="ups-img w-50 py-2" data-wow-delay="0.2s" src="{{ asset('assets/img/service-orm-4.svg')}}">
              <h5>Needs Assessment</h5>
              <p>We start by understanding your requirements and the specific challenges or projects you need assistance and provide the best service.</p>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 text-center px-4 wow fadeInUp" data-wow-delay="0.7s">
              <img class="ups-img w-50 py-2" data-wow-delay="0.3s" src="{{ asset('assets/img/service-orm-1.svg')}}">
              <h5>Consultant Selection</h5>
              <p>Based on business needs, we carefully select consultants with the right expertise and experience to meet your objectives.
Engagement Planning: We work closely with you to define the scope of work, timelines, and deliverables for the consulting engagement.</p>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-6 text-center px-4 wow fadeInUp" data-wow-delay="0.8s">
              <img class="ups-img w-50 py-2" data-wow-delay="0.3s" src="{{ asset('assets/img/service-orm-3.svg')}}">
              <h5>Engagement Planning</h5>
              <p>We work closely with you to define the scope of work, timelines, and deliverables for the consulting engagement.</p>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 text-center px-4 wow fadeInUp" data-wow-delay="0.9s">
              <img class="ups-img w-50 py-2" data-wow-delay="0.1s" src="{{ asset('assets/img/service-orm-2.svg')}}">
              <h5 class="">Project Execution</h5>
              <p>Our consultants work diligently to execute the project plan, leveraging their skills and knowledge to deliver high-quality results.</p>
            </div>
          </div>
        </div>
      <div class="d-flex flex-row justify-content-center ">
          <div class="row d-flex flex-row">
            <div class="col-lg-3 col-md-3 col-sm-6 text-center px-4 wow fadeInUp" data-wow-delay="0.6s">
              <img class="ups-img w-50 py-2" data-wow-delay="0.2s" src="{{ asset('assets/img/service-orm-4.svg')}}">
              <h5>Monitoring and Support</h5>
              <p>Throughout the engagement, we provide ongoing support and monitor progress to ensure that the project stays on track and meets your expectations.</p>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 text-center px-4 wow fadeInUp" data-wow-delay="0.7s">
              <img class="ups-img w-50 py-2" data-wow-delay="0.3s" src="{{ asset('assets/img/service-orm-1.svg')}}">
              <h5>Feedback and Evaluation</h5>
              <p>After the project is completed, we gather feedback from both you and the consultants to evaluate the outcomes and identify any areas for improvement.</p>
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
        <div class="container-fluid py-4 wow fadeInUp bg-primary ml-0 ml-md-5 " data-wow-delay="0.4s">
          <div class="container">
            <div class="text-center position-relative pb-3 mb-4 mx-auto">
              <h4 class="text-left text-primary">Key Features For Our Contracted Consultants</h4>
              <p class="text-justify mb-0">Specialized Expertise
              Flexibility and Scalability
              Customized Solutions
              Objective Perspective
              Cost-Effectiveness
              Efficiency and Knowledge Transfer

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
        <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample"
          data-target="#collapseOne" aria-expanded="true">
          <h6 class="fw-bold">What are contracted consultants in IT staffing services?</h6>
          <div class="acoord-btn text-right mr-2">

          </div>
        </div>
        <div id="collapseOne" class="collapse " data-parent="#accordionExample">
          <div class="card-body">
            <p>Contracted consultants in IT staffing services are professionals or firms hired temporarily to fulfill specific roles or projects within an organization's IT department. They bring specialized skills and expertise to address particular needs or challenges.</p>
          </div>
        </div>
      </div>

      <div class="card">
        <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample"
          data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true">
          <h6 class="fw-bold">How do contracted consultants differ from permanent IT staff?
          </h6>
          <div class="acoord-btn text-right mr-2">
            {{-- <a href="{{ route('career.apply')}}" class="rounded-career-btn mr-2 py-2 px-3 bg-dark mx-2">Apply <i
              class=" fas fa-arrow-right fw-normal"></i></a> --}}
            {{-- <span  class="accicon"><i class=" fas fa-angle-down rotate-icon"></i></span> --}}
          </div>
        </div>
        <div id="collapseTwo" class="collapse" data-parent="#accordionExample">
          <div class="card-body">
            <p>Contracted consultants are hired on a temporary basis to fulfill specific roles or projects, whereas permanent IT staff are employed full-time by the organization. Contracted consultants provide flexibility, specialized skills, and expertise without the long-term commitment of permanent employment.</p>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample"
          data-target="#collapseThree" aria-expanded="true">
          <h6 class="fw-bold">What are the advantages of utilizing contracted consultants for IT staffing needs?</h6>
          <div class="acoord-btn text-right mr-2  pb-3">
            {{-- <a href="{{ route('career.apply')}}" class="rounded-career-btn mr-2 bg-dark mx-2">Apply <i
              class=" fas fa-arrow-right fw-normal"></i></a> --}}
            {{-- <span  class="accicon"><i class=" fas fa-angle-down rotate-icon"></i></span> --}}
          </div>
        </div>
        <div id="collapseThree" class="collapse" data-parent="#accordionExample">
          <div class="card-body">
            <p>Hiring contracted consultants for IT staffing needs offers benefits such as access to specialized expertise, flexibility in resource allocation, cost-effectiveness, scalability, and the ability to meet short-term project requirements without long-term staffing commitments.</p>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample"
          data-target="#collapseFour" aria-expanded="true">
          <h6 class="fw-bold">How can organizations ensure effective collaboration with contracted consultants in IT staffing services?
             </h6>
          <div class="acoord-btn text-right mr-2  pb-3">
            {{-- <a href="{{ route('career.apply')}}" class="rounded-career-btn mr-2 bg-dark mx-2">Apply <i
              class=" fas fa-arrow-right fw-normal"></i></a> --}}
            {{-- <span  class="accicon"><i class="  px-3 fas fa-angle-down rotate-icon"></i></span> --}}
          </div>
        </div>
        <div id="collapseFour" class="collapse" data-parent="#accordionExample">
          <div class="card-body">
            <p>Effective collaboration with contracted consultants in IT staffing services involves clear communication, defining project expectations and deliverables, providing necessary resources and support, establishing regular progress updates and feedback mechanisms, and fostering a collaborative working relationship.</p>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample"
          data-target="#collapseFive" aria-expanded="true">
          <h6 class="fw-bold">What types of IT staffing services do contracted consultants provide?</h6>
          <div class="acoord-btn text-right mr-2  pb-3">
            {{-- <a href="{{ route('career.apply')}}" class="rounded-career-btn mr-2 bg-dark mx-2">Apply <i
              class=" fas fa-arrow-right fw-normal"></i></a> --}}
            {{-- <span  class="accicon"><i class=" fas fa-angle-down rotate-icon"></i></span> --}}
          </div>
        </div>
        <div id="collapseFive" class="collapse" data-parent="#accordionExample">
          <div class="card-body">
            <p>Contracted consultants offer a wide array of IT staffing services, including software development, system administration, network engineering, cybersecurity, database management, IT project management, and technical support, among others</p>
          </div>
        </div>
      </div>
       <div class="card">
        <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample"
          data-target="#collapseSix" aria-expanded="true">
          <h6 class="fw-bold">What should organizations consider when engaging contracted consultants?</h6>
          <div class="acoord-btn text-right mr-2  pb-3">
            {{-- <a href="{{ route('career.apply')}}" class="rounded-career-btn mr-2 bg-dark mx-2">Apply <i
              class=" fas fa-arrow-right fw-normal"></i></a> --}}
            {{-- <span  class="accicon"><i class=" fas fa-angle-down rotate-icon"></i></span> --}}
          </div>
        </div>
        <div id="collapseSix" class="collapse" data-parent="#accordionExample">
          <div class="card-body">
            <p>Organizations should consider factors such as the consultant's expertise, track record, availability, communication style, contractual terms, project scope, budget, and expectations for deliverables and outcomes.</p>
          </div>
        </div>
      </div>
       <div class="card">
        <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample"
          data-target="#collapseSeven" aria-expanded="true">
          <h6 class="fw-bold">What are the benefits of hiring contracted consultants?</h6>
          <div class="acoord-btn text-right mr-2  pb-3">
            {{-- <a href="{{ route('career.apply')}}" class="rounded-career-btn mr-2 bg-dark mx-2">Apply <i
              class=" fas fa-arrow-right fw-normal"></i></a> --}}
            {{-- <span  class="accicon"><i class=" fas fa-angle-down rotate-icon"></i></span> --}}
          </div>
        </div>
        <div id="collapseSeven" class="collapse" data-parent="#accordionExample">
          <div class="card-body">
            <p>Hiring contracted consultants provides organizations with access to specialized expertise, flexibility in staffing, cost-effectiveness, objective perspectives, and scalability. Contracted consultants can also accelerate project timelines, mitigate risks, and transfer knowledge to internal teams.</p>
          </div>
        </div>
      </div>
       <div class="card">
        <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample"
          data-target="#collapseEight" aria-expanded="true">
          <h6 class="fw-bold">What happens after the contracted consulting engagement ends?</h6>
          <div class="acoord-btn text-right mr-2  pb-3">
            {{-- <a href="{{ route('career.apply')}}" class="rounded-career-btn mr-2 bg-dark mx-2">Apply <i
              class=" fas fa-arrow-right fw-normal"></i></a> --}}
            {{-- <span  class="accicon"><i class=" fas fa-angle-down rotate-icon"></i></span> --}}
          </div>
        </div>
        <div id="collapseEight" class="collapse" data-parent="#accordionExample">
          <div class="card-body">
            <p>After the consulting engagement ends, organizations may conduct a project review, gather feedback from stakeholders, assess outcomes and deliverables, and determine any follow-up actions or opportunities for future collaboration.</p>
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
            <p class='text-white text-center serviceBannerText'>Recruitment
              <span class='txtYellow'>Outsourcing</span>
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
            <img class=" w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s"
              src="{{ asset('assets/img/service/service-st-1.png')}}">
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 pl-1 pl-md-5 ">
          <div class="position-relative pb-3">
            <h1> <span class="text-primary">Recruitment process outsourcing</span></h1>
          </div>
          <p class="mb-2 text-justify">Recruitment Process Outsourcing (RPO) is a practice where a company transfers all or part of its recruitment processes to an external service provider. This can include tasks such as sourcing candidates, screening resumes, conducting interviews, and even making job offers on behalf of the company. RPO can help organizations streamline their recruitment processes, improve efficiency, and reduce costs.
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
            <div class="p-0 p-md-4 ">
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
                                <img class="position-absolute wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/service/offering-1.svg')}}">
            </div>
            <div class="col-md-10">
              <h5 class="fw-bold text-primary">Permanent Hiring</h5>
              <p class="text-justify text-white">Tailored solutions for identifying and securing top-tier talent for
                long-term positions within your organisation.</p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-2">
              <img class="position-absolute wow zoomIn" data-wow-delay="0.9s"
                src="{{ asset('assets/img/service/offering-1.svg')}}">
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
        <div class="p-0 p-md-4 ">
          <h2 class="text-white">Expertise and <span class="text-dark"> Services</span> </h2>
          <p class="mb-2 text-white text-justify pb-4 mb-4">Our team comprises seasoned experts in technical staff
            augmentation, professional
            services, and system integration program delivery. Drawing upon extensive experience in
            technical, IT, and engineering program management across diverse industries and verticals,
            we excel in aligning the best resources to meet your specific job requirements.
          </p>
          {{-- <div class="row">
                            <div class="col-md-2" >
                                <img class="position-absolute wow zoomIn bg-dark" data-wow-delay="0.9s"  src="{{ asset('assets/img/service/offering-1.svg')}}">
        </div>
        <div class="col-md-10">
          <h5 class="fw-bold text-dark">Permanent Hiring</h5>
          <p class="text-justify text-white">Tailored solutions for identifying and securing top-tier talent for
            long-term positions within your organisation.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-2">
          <img class="position-absolute wow zoomIn bg-dark" data-wow-delay="0.9s"
            src="{{ asset('assets/img/service/offering-1.svg')}}">
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
          <div class="d-flex flex-column aligns-content-center justify-content-center wow slideInUp mx-2 "
            data-wow-delay="0.3s">
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
          <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s"
            src="{{ asset('assets/img/staffing.png')}}">
        </div>
      </div>
      <div class="col-lg-6">
        <div class="position-relative pb-2">
          <h1 class="fw-fold">Comprehensive <br><span class="text-primary">Staffing Services</span></h1>
        </div>
        <p class="mb-2 text-justify">At Intelli Vectra Technologies, we recognize the critical importance of finding the right talent
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
            <h5 class="fw-bold">Sourcing Candidates</h5>
            <p class="text-justify">  Leveraging diverse channels to attract top talent
      Conducting candidate searches based on specific job requirements</p>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="row">
          <div class="col-md-2 ">
            <img class=" wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/service/offering-6.svg')}}">
          </div>
          <div class="col-md-10">
            <h5 class="fw-bold">Screening and Assessment</h5>
            <p class="text-justify">Reviewing resumes and applications
       Conducting initial assessments and screenings to identify qualified candidates
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
            <h5 class="fw-bold">Interview Coordination</h5>
            <p class="text-justify"> Scheduling and coordinating interviews with candidates
       Providing feedback and facilitating communication throughout the interview process</p>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12" >
                <div class="row">
                    <div class="col-md-2 " >
                        <img class="position-absolute wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/service/offering-3.svg')}}">
    </div>
    <div class="col-md-10">
      <h5 class="fw-bold">Offer Management</h5>
      <p class="text-justify">Managing job offers and negotiations with selected candidates
       Ensuring a smooth transition from selection to onboarding</p>
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
            <h5 class="fw-bold">Compliance and Reporting</h5>
            <p class="text-justify">Ensuring all recruitment processes adhere to legal and regulatory requirements
     Providing detailed reports and analytics on recruitment activities</p>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12" >
                <div class="row">
                    <div class="col-md-2 " >
                        <img class="position-absolute wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/service/offering-3.svg')}}">
    </div>
    <div class="col-md-10">
      <h5 class="fw-bold">Candidate Experience Enhancement</h5>
      <p class="text-justify">Focusing on creating a positive candidate experience throughout the recruitment process
    Implementing strategies to improve candidate satisfaction and engagement</p>
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
            <h5 class="fw-bold">Customized Solutions</h5>
            <p class="text-justify">Tailoring RPO services to meet specific organizational needs
Offering flexible solutions based on unique recruitment challenges and goals</p>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12" >
                <div class="row">
                    <div class="col-md-2 " >
                        <img class="position-absolute wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/service/offering-3.svg')}}">
    </div>
    <div class="col-md-10">
      <h5 class="fw-bold">Continuous Improvement</h5>
      <p class="text-justify">Implementing feedback mechanisms to enhance recruitment processes over time
Constantly evaluating and refining strategies for better outcomes</p>
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
            <h5 class="fw-bold">Technology Integration</h5>
            <p class="text-justify">Utilizing innovative recruitment technologies for efficiency and effectiveness
Integrating AI tools, applicant tracking systems, and other tech solutions for optimized results</p>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12" >
                <div class="row">
                    <div class="col-md-2 " >
                        <img class="position-absolute wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/service/offering-3.svg')}}">
    </div>
    <div class="col-md-10">
      <h5 class="fw-bold">Dedicated Support</h5>
      <p class="text-justify">Providing dedicated support and expertise throughout the recruitment lifecycle
Offering personalized services to ensure a seamless recruitment experience</p>
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
</div> -->
<div class="container-fluid py-4 wow fadeInUp" data-wow-delay="0.4s">
  <div class="container">
    <div class="text-center position-relative pb-3 mx-auto">
      <h1><span class="text-primary">Our Process for Recruitment process outsourcing</span></h1>
    </div>
    <div class="row g-5">

      <div class="col-lg-12 col-md-12" data-wow-delay="0.5s">
        <div class="d-flex flex-row justify-content-center ">
          <div class="row d-flex flex-row justify-content-between">
            <div class="col-lg-3 col-md-3 col-sm-6 text-center px-4 wow fadeInUp" data-wow-delay="0.6s">
              <img class="ups-img w-50 py-2" data-wow-delay="0.2s" src="{{ asset('assets/img/service-orm-4.svg')}}">
              <h5>Initial Consultation</h5>
              <p>Understanding client requirements and recruitment challenges
            Identifying key objectives and goals for the RPO engagement
            .</p>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 text-center px-4 wow fadeInUp" data-wow-delay="0.7s">
              <img class="ups-img w-50 py-2" data-wow-delay="0.3s" src="{{ asset('assets/img/service-orm-1.svg')}}">
              <h5> Customization and Planning</h5>
              <p>Tailoring RPO solutions to align with client-specific needs
              Developing a detailed recruitment strategy and timeline
              </p>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-6 text-center px-4 wow fadeInUp" data-wow-delay="0.8s">
              <img class="ups-img w-50 py-2" data-wow-delay="0.3s" src="{{ asset('assets/img/service-orm-3.svg')}}">
              <h5>Candidate Sourcing</h5>
              <p>Utilizing various channels to attract a diverse pool of candidates
          Implementing targeted sourcing strategies based on job specifications
          .</p>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 text-center px-4 wow fadeInUp" data-wow-delay="0.9s">
              <img class="ups-img w-50 py-2" data-wow-delay="0.1s" src="{{ asset('assets/img/service-orm-2.svg')}}">
              <h5 class="">Screening and Shortlisting</h5>
              <p>Reviewing resumes, conducting initial screenings, and assessing candidate qualifications
            Shortlisting candidates based on predetermined criteria and client preferences
            </p>
            </div>
          </div>
        </div>
      <div class="d-flex flex-row justify-content-center ">
          <div class="row d-flex flex-row justify-content-between">
            <div class="col-lg-3 col-md-3 col-sm-6 text-center px-4 wow fadeInUp" data-wow-delay="0.6s">
              <img class="ups-img w-50 py-2" data-wow-delay="0.2s" src="{{ asset('assets/img/service-orm-4.svg')}}">
              <h5>Interview Coordination</h5>
              <p>Scheduling and coordinating interviews between candidates and hiring managers
          Facilitating communication and feedback throughout the interview process
          .</p>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 text-center px-4 wow fadeInUp" data-wow-delay="0.7s">
              <img class="ups-img w-50 py-2" data-wow-delay="0.3s" src="{{ asset('assets/img/service-orm-1.svg')}}">
              <h5>Offer Management</h5>
              <p>Managing job offers, negotiations, and onboarding processes
          Ensuring a smooth transition for selected candidates into the organization
          .</p>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-6 text-center px-4 wow fadeInUp" data-wow-delay="0.8s">
              <img class="ups-img w-50 py-2" data-wow-delay="0.3s" src="{{ asset('assets/img/service-orm-3.svg')}}">
              <h5>Compliance and Reporting</h5>
              <p>Ensuring all recruitment activities comply with legal and regulatory standards
            Providing regular reports and analytics to track recruitment performance.
            </p>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 text-center px-4 wow fadeInUp" data-wow-delay="0.8s">
              <img class="ups-img w-50 py-2" data-wow-delay="0.3s" src="{{ asset('assets/img/service-orm-3.svg')}}">
              <h5>Continuous Improvement</h5>
              <p>Collecting feedback from stakeholders to identify areas for enhancement
                Implementing iterative improvements to optimize recruitment processes
                .</p>
            </div>
          </div>
        </div>
         <div class="d-flex flex-row justify-content-center ">
          <div class="row d-flex flex-row">
            <div class="col-lg-3 col-md-3 col-sm-6 text-center px-4 wow fadeInUp" data-wow-delay="0.6s">
              <img class="ups-img w-50 py-2" data-wow-delay="0.2s" src="{{ asset('assets/img/service-orm-4.svg')}}">
              <h5>Technology Integration</h5>
              <p>Leveraging recruitment technologies for enhanced efficiency and effectiveness
Integrating AI tools, applicant tracking systems, and analytics for data-driven decisions
          .</p>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 text-center px-4 wow fadeInUp" data-wow-delay="0.7s">
              <img class="ups-img w-50 py-2" data-wow-delay="0.3s" src="{{ asset('assets/img/service-orm-1.svg')}}">
              <h5>Client Collaboration and Feedback</h5>
              <p>Engaging with clients throughout the process to ensure alignment with expectations
Seeking feedback to continuously refine and improve RPO services
          .</p>
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
      <div class="container-fluid py-4 wow fadeInUp bg-primary ml-0 ml-md-5 " data-wow-delay="0.4s">
        <div class="container">
          <div class="text-center position-relative pb-3 mb-4 mx-auto">
            <h4 class="text-left text-primary">Key features of Recruitment process outsourcing</h4>
            <p class="text-justify mb-0">End-to-End Recruitment Services
                Scalability
                Cost Efficiency
                Access to Talent Pool
                Streamlined Processes
                Employer Branding
                Flexibility and Customization
                Data-Driven Insights
                Compliance and Risk Management
                Focus on Core Business Functions.
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
      <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample"
        data-target="#collapseOne" aria-expanded="true">
        <h6 class="fw-bold">What is Recruitment Process Outsourcing (RPO)?<h6>
        <div class="acoord-btn text-right mr-2">

        </div>
      </div>
      <div id="collapseOne" class="collapse " data-parent="#accordionExample">
        <div class="card-body">
          <p>RPO is a practice where an organization transfers some or all of its recruitment processes to an external service provider to streamline hiring operations.</p>
        </div>
      </div>
    </div>

    <div class="card">
      <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample"
        data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true">
        <h6 class="fw-bold">How does RPO differ from traditional recruitment methods?
        <div class="acoord-btn text-right mr-2">
          {{-- <a href="{{ route('career.apply')}}" class="rounded-career-btn mr-2 py-2 px-3 bg-dark mx-2">Apply <i
            class=" fas fa-arrow-right fw-normal"></i></a> --}}
          {{-- <span  class="accicon"><i class=" fas fa-angle-down rotate-icon"></i></span> --}}
        </div>
      </div>
      <div id="collapseTwo" class="collapse" data-parent="#accordionExample">
        <div class="card-body">
          <p>RPO involves delegating recruitment tasks to a specialized external provider, whereas traditional methods rely on in-house HR teams to manage the entire hiring process.</p>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample"
        data-target="#collapseThree" aria-expanded="true">
        <h6 class="fw-bold">What are the typical services offered in RPO engagements? </h6>
        <div class="acoord-btn text-right mr-2  pb-3">
          {{-- <a href="{{ route('career.apply')}}" class="rounded-career-btn mr-2 bg-dark mx-2">Apply <i
            class=" fas fa-arrow-right fw-normal"></i></a> --}}
          {{-- <span  class="accicon"><i class=" fas fa-angle-down rotate-icon"></i></span> --}}
        </div>
      </div>
      <div id="collapseThree" class="collapse" data-parent="#accordionExample">
        <div class="card-body">
          <p>RPO services can include candidate sourcing, screening, interviewing, offer management, compliance, and reporting, among others.</p>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample"
        data-target="#collapseFour" aria-expanded="true">
        <h6 class="fw-bold">What are the benefits of implementing RPO in an organization?
           </h6>
        <div class="acoord-btn text-right mr-2  pb-3">
          {{-- <a href="{{ route('career.apply')}}" class="rounded-career-btn mr-2 bg-dark mx-2">Apply <i
            class=" fas fa-arrow-right fw-normal"></i></a> --}}
          {{-- <span  class="accicon"><i class="  px-3 fas fa-angle-down rotate-icon"></i></span> --}}
        </div>
      </div>
      <div id="collapseFour" class="collapse" data-parent="#accordionExample">
        <div class="card-body">
          <p>Benefits include cost savings, time efficiency, access to a wider talent pool, scalability, expertise, improved candidate experience, and the ability to focus on core business activities.</p>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample"
        data-target="#collapseFive" aria-expanded="true">
        <h6 class="fw-bold">How is data security and confidentiality maintained in RPO processes?</h6>
        <div class="acoord-btn text-right mr-2  pb-3">
          {{-- <a href="{{ route('career.apply')}}" class="rounded-career-btn mr-2 bg-dark mx-2">Apply <i
            class=" fas fa-arrow-right fw-normal"></i></a> --}}
          {{-- <span  class="accicon"><i class=" fas fa-angle-down rotate-icon"></i></span> --}}
        </div>
      </div>
      <div id="collapseFive" class="collapse" data-parent="#accordionExample">
        <div class="card-body">
          <p>RPO providers adhere to strict data security protocols, including encryption, secure networks, access controls, and confidentiality agreements to safeguard sensitive information.</p>
        </div>
      </div>
    </div>
 <div class="card">
      <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample"
        data-target="#collapseSix" aria-expanded="true">
        <h6 class="fw-bold">Can RPO solutions be customized to suit specific organizational needs?</h6>
        <div class="acoord-btn text-right mr-2  pb-3">
          {{-- <a href="{{ route('career.apply')}}" class="rounded-career-btn mr-2 bg-dark mx-2">Apply <i
            class=" fas fa-arrow-right fw-normal"></i></a> --}}
          {{-- <span  class="accicon"><i class=" fas fa-angle-down rotate-icon"></i></span> --}}
        </div>
      </div>
      <div id="collapseSix" class="collapse" data-parent="#accordionExample">
        <div class="card-body">
          <p>Yes, RPO services can be tailored to meet unique requirements, ensuring that the solutions align with the organization's goals and preferences.</p>
        </div>
      </div>
       <div class="card">
      <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample"
        data-target="#collapseSeven" aria-expanded="true">
        <h6 class="fw-bold">What industries can benefit from RPO services?</h6>
        <div class="acoord-btn text-right mr-2  pb-3">
          {{-- <a href="{{ route('career.apply')}}" class="rounded-career-btn mr-2 bg-dark mx-2">Apply <i
            class=" fas fa-arrow-right fw-normal"></i></a> --}}
          {{-- <span  class="accicon"><i class=" fas fa-angle-down rotate-icon"></i></span> --}}
        </div>
      </div>
      <div id="collapseSeven" class="collapse" data-parent="#accordionExample">
        <div class="card-body">
          <p>Virtually any industry can benefit from RPO, including IT, healthcare, finance, manufacturing, and more, as long as there is a need for efficient and effective recruitment processes.</p>
        </div>
      </div>
       <div class="card">
      <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample"
        data-target="#collapseEight" aria-expanded="true">
        <h6 class="fw-bold">How does RPO help in reducing time-to-fill and improving quality of hires?</h6>
        <div class="acoord-btn text-right mr-2  pb-3">
          {{-- <a href="{{ route('career.apply')}}" class="rounded-career-btn mr-2 bg-dark mx-2">Apply <i
            class=" fas fa-arrow-right fw-normal"></i></a> --}}
          {{-- <span  class="accicon"><i class=" fas fa-angle-down rotate-icon"></i></span> --}}
        </div>
      </div>
      <div id="collapseEight" class="collapse" data-parent="#accordionExample">
        <div class="card-body">
          <p>RPO providers leverage technology, expertise, and industry insights to streamline processes, identify top talent, and expedite the hiring cycle, leading to faster placements and better-quality hires.</p>
        </div>
      </div>
    </div>
    </div>
    </div>
  </div>
</div>

@include('landing.components.get-in-touch')
</div>
@endsection