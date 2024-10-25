@extends('landing.layouts.base')

@section('contents')


<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
  <div class="container">
    <div class="row g-5">
      <div class="col-lg-6 col-md-6 col-sm-12 pt-3">
        <div class="" style="min-height: 400px;">
          <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s"
            src="{{ asset('assets/img/service/service-st-1.png')}}">
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12 pl-5">
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
          <div class="p-4 px-5">
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
      <div class="p-4 px-5">
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
  <div class="service-solution" style="height: 300px">
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
            <img class="position-absolute wow zoomIn" data-wow-delay="0.9s"
              src="{{ asset('assets/img/service/offering-1.svg')}}">
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
            <img class="position-absolute wow zoomIn" data-wow-delay="0.9s"
              src="{{ asset('assets/img/service/offering-6.svg')}}">
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
            <img class="position-absolute wow zoomIn" data-wow-delay="0.9s"
              src="{{ asset('assets/img/service/offering-2.svg')}}">
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
                        <img class="position-absolute wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/service/offering-3.svg')}}">
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
      <div class="container-fluid py-4 wow fadeInUp bg-primary ml-5" data-wow-delay="0.4s">
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
      <div class="service-feature bg" style="height: 300px">
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

  <div class="accordion feature-faq feature__feq" id="accordionExample">
    <div class="card">
      <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample"
        data-target="#collapseOne" aria-expanded="true">
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
      <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample"
        data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true">
        <h6 class="fw-bold">How do you ensure the success of consulting projects?
        </h6>
        <div class="acoord-btn text-right mr-2">
          {{-- <a href="{{ route('career.apply')}}" class="rounded-career-btn mr-2 py-2 px-3 bg-dark mx-2">Apply <i
            class=" fas fa-arrow-right fw-normal"></i></a> --}}
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
      <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample"
        data-target="#collapseThree" aria-expanded="true">
        <h6 class="fw-bold">Can you provide examples of your past successful consulting engagements? </h6>
        <div class="acoord-btn text-right mr-2  pb-3">
          {{-- <a href="{{ route('career.apply')}}" class="rounded-career-btn mr-2 bg-dark mx-2">Apply <i
            class=" fas fa-arrow-right fw-normal"></i></a> --}}
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
      <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample"
        data-target="#collapseFour" aria-expanded="true">
        <h6 class="fw-bold">How do you maintain confidentiality and data security during consulting
          engagements?
           </h6>
        <div class="acoord-btn text-right mr-2  pb-3">
          {{-- <a href="{{ route('career.apply')}}" class="rounded-career-btn mr-2 bg-dark mx-2">Apply <i
            class=" fas fa-arrow-right fw-normal"></i></a> --}}
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
      <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample"
        data-target="#collapseFive" aria-expanded="true">
        <h6 class="fw-bold">What sets your consulting services apart from others in the market?</h6>
        <div class="acoord-btn text-right mr-2  pb-3">
          {{-- <a href="{{ route('career.apply')}}" class="rounded-career-btn mr-2 bg-dark mx-2">Apply <i
            class=" fas fa-arrow-right fw-normal"></i></a> --}}
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

@endsection
