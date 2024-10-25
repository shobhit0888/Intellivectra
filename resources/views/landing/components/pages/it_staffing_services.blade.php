@extends('landing.layouts.base')
@section('contents')
@php
$fragment = isset($_GET['fragment']) ? $_GET['fragment'] : '';
@endphp
@if($fragment == '')
$fragment = 'pills-home-tab2';
@endif

<div class='navigationPane'>
  <ul class="nav flex-nowrap widthFitContent width200Percent mx-auto nav-pills align-items-center justify-content-center" id="pills-tab" role="tablist">
    <li class="nav-item">
      <span class="nav-link text-white py-1 px-4" style="font-weight:600; font-size:22px;">IT Staffing Services</span>
    </li>
    <li class="nav-item" role="presentation">
      <span class="nav-link @if($fragment == 'pills-home') active @endif text-white py-1 px-4" id="pills-home-tab2" data-bs-toggle="pill" data-bs-target="#pills-home" type="buttn" role="tab" aria-controls="pills-home" aria-selected="true">Permanent
        Hiring</span>
    </li IT Services>
    <li class="nav-item" role="presentation">
      <span class="nav-link @if($fragment == 'pills-profile') active @endif text-white py-1 px-4" id="pills-profile-tab2" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Contract Consultants

      </span>
    </li>
    <li class="nav-item" role="presentation">
      <span class="nav-link @if($fragment == 'pills-contact') active @endif text-white py-1 px-4" id="pills-contact-tab2" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Recruitment Outsourcing</span>
    </li>

  </ul>
</div>

<div class="tab-content" id="pills-tabContent">

  <div class="tab-pane fade @if($fragment == 'pills-home') show active @endif" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab2" tabindex="0">

    <div class="carousel-inne">
      <div class="bannerImage">
        <img class="w-100 hFull" src="{{ asset('assets/img/service/portrait-cheerful-man-pointing-speech-bubble-with-hiring-ad-making-job-employment-offer-positive-male-recruiter-advertising-hr-work-application-opportunity-with-text-message.jpg')}}" alt="Image">
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

      <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
          <div class="row g-5">
            <div class="col-lg-6 col-md-6 col-sm-12 pt-3">
              <div class="img-content">
                <img class=" w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/service/Permanent Hiring.png')}}">
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
              <div class="position-relative pb-3">
                <h1 style="color:black;"> Permanent<span class="text-primary"> Hiring</span></h1>
              </div>
              <p class="mb-2 text-justify">Permanent hiring involves recruiting full-time employees to fill long-term positions within an organization. It entails sourcing, screening, and selecting candidates who will become integral members of the team, providing stability and continuity to the business.</p>
            </div>
          </div>
        </div>
      </div>

      <div class="container-fluid py-5  wow fadeInUp" data-wow-delay="0.2s" style="background-color:#FFFAF1;">
        <div class="container offerings">
          <div class="text-center position-relative pb-3 mb-4 mx-auto">
            <h1  style="color:black;">Our <span class="text-primary"> Offerings</span></h1>
          </div>
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
              <div class="row">
                <div class="col-md-2">
                  <img class=" wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/service/Comprehensive Talent Acquisition Process.png')}}">
                </div>
                <div class="col-md-10">
                  <h5 class="fw-bold">Comprehensive Talent Acquisition Process</h5>
                  <p class="text-justify"> IVT offers a meticulous talent acquisition process tailored for permanent hiring in IT staffing services. Our process encompasses candidate sourcing, screening, interviewing, and selection, ensuring high-quality placements for our clients.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
              <div class="row">
                <div class="col-md-2 ">
                  <img class=" wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/service/Advanced Candidate Screening Techniques.png')}}">
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
                  <img class=" wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/service/Extensive Candidate Database.png')}}">
                </div>
                <div class="col-md-10">
                  <h5 class="fw-bold">Extensive Candidate Database</h5>
                  <p class="text-justify">We maintain an extensive database of qualified IT professionals, continuously updated with new talent. This database allows us to quickly match client requirements with suitable candidates, expediting the hiring process.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
              <div class="row">
                <div class="col-md-2 ">
                  <img class="wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/service/Customized Recruitment Solutions.png')}}">
                </div>
                <div class="col-md-10">
                  <h5 class="fw-bold">Customized Recruitment Solutions</h5>
                  <p class="text-justify">IVT provides customized recruitment solutions tailored to each client's specific needs. Whether the requirement is for niche skill sets or volume hiring, we adapt our strategies to deliver optimal results</p>
                </div>
              </div>
            </div>
          </div>
          <div class="row mt-3">
            <div class="col-lg-6 col-md-6 col-sm-12">
              <div class="row">
                <div class="col-md-2">
                  <img class=" wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/service/Industry-Specific Expertise.png')}}">
                </div>
                <div class="col-md-10">
                  <h5 class="fw-bold">Industry-Specific Expertise</h5>
                  <p class="text-justify">Our team possesses deep industry-specific expertise across various IT domains, including software development, cybersecurity, cloud computing, and more. This expertise enables us to understand the unique challenges and requirements of each IT role, facilitating accurate candidate assessments.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
              <div class="row">
                <div class="col-md-2 ">
                  <img class=" wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/service/Transparent Communication and Reporting.png')}}">
                </div>
                <div class="col-md-10">
                  <h5 class="fw-bold">Transparent Communication and Reporting</h5>
                  <p class="text-justify">We prioritize transparent communication with our clients throughout the hiring process. Regular updates and detailed reporting ensure that clients are informed about the progress and status of their recruitment initiatives.</p>
                </div>
              </div>
            </div>
          </div>
          <!-- <div class="row mt-3">
            <div class="col-lg-6 col-md-6 col-sm-12">
              <div class="row">
                <div class="col-md-2">
                  <img class=" wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/service/Focus on Quality and Long-Term Fit.png')}}">
                </div>
                <div class="col-md-10">
                  <h5 class="fw-bold">Focus on Quality and Long-Term Fit</h5>
                  <p class="text-justify">Intelli Vectra's Technologies primary focus is on delivering quality hires that align with our clients' long-term objectives. We emphasize not only technical proficiency but also cultural fit and potential for long-term success within the client's organization.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
              <div class="row">
                <div class="col-md-2 ">
                  <img class="position-absolute wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/service/Post-Placement Support and Follow-Up.png')}}">
                </div>
                <div class="col-md-10">
                  <h5 class="fw-bold">Post-Placement Support and Follow-Up</h5>
                  <p class="text-justify">Our commitment to client satisfaction extends beyond the recruitment process. We provide post-placement support and follow-up to ensure a smooth transition for the hired candidates and address any concerns that may arise.</p>
                </div>
              </div>
            </div>
          </div> -->
          <!-- <div class="row mt-3">
            <div class="col-lg-6 col-md-6 col-sm-12">
              <div class="row">
                <div class="col-md-2">
                  <img class=" wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/service/Continuous Improvement and Adaptation.png')}}">
                </div>
                <div class="col-md-10">
                  <h5 class="fw-bold">Continuous Improvement and Adaptation</h5>
                  <p class="text-justify"> IVT is dedicated to continuous improvement and adaptation to evolving industry trends and client needs. We regularly review and refine our processes to maintain high standards of service delivery and client satisfaction.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
              <div class="row">
                <div class="col-md-2 ">
                  <img class="position-absolute wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/service/Compliance and Legal Adherence.png')}}">
                </div>
                <div class="col-md-10">
                  <h5 class="fw-bold">Compliance and Legal Adherence</h5>
                  <p class="text-justify">Our permanent hiring solutions adhere to all relevant legal and compliance requirements, including labor laws, data protection regulations, and industry standards. Clients can trust IVT to manage the recruitment process with integrity and professionalism, mitigating any potential risks.</p>
                </div>
              </div>
            </div>
          </div> -->
        </div>
      </div>



      <div class="container-fluid py-4 wow fadeInUp" data-wow-delay="0.4s">
        <div class="container">
          <div class="text-center position-relative pb-3 mx-auto">
            <h1 style="color:black;">Our <span class="text-primary">Process</span></h1>
            <!-- <p>Our process for permanent IT hiring includes thorough client needs analysis, talent sourcing from multiple channels, comprehensive candidate screening, client presentations, interview coordination, offer negotiation, and onboarding support. This ensures successful placements tailored to client requirements. The details are given below
            </p> -->
          </div>
          <div class="row g-3">
            <div class="col-lg-4 col-md-6 mt-3">
              <div class="card p-4" style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px">
                <img src="{{ asset('assets/img/service/cloud-trans-process/Understanding Client Needs.png')}}" class="card-img-top m-auto w-100 rounded-3  p-1 my-3" alt="azur-image" style="max-width: 70px" />
                <div class="card-body">
                  <h5 class="card-title text-center fw-bold fs-5">
                    Understanding Client Needs
                  </h5>
                  <p class="card-text">
                    To effectively meet client requirements in permanent hiring, it's essential to identify technical skills, experience levels, and cultural fit. Close collaboration with clients ensures precise alignment with their organizational goals and work environment.
                  </p>

                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 mt-3">
              <div class="card p-4" style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px">
                <img src="{{ asset('assets/img/service/cloud-trans-process/Talent Sourcing.png')}}" class="card-img-top m-auto w-100 rounded-3  p-1 my-3" alt="azur-image" style="max-width: 70px" />
                <div class="card-body">
                  <h5 class="card-title text-center fw-bold fs-5">
                    Talent Sourcing
                  </h5>
                  <p class="card-text">
                    Talent sourcing for permanent hiring involves leveraging internal databases, job boards, networking, and social media to identify qualified candidates. This multifaceted approach ensures a diverse pool of talent for client placements
                  </p>

                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 mt-3">
              <div class="card p-4" style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px">
                <img src="{{ asset('assets/img/service/cloud-trans-process/Candidate Screening.png')}}" class="card-img-top m-auto w-100 rounded-3 p-1 my-3" alt="azur-image" style="max-width: 70px" />
                <div class="card-body">
                  <h5 class="card-title text-center fw-bold fs-5">
                    Candidate Screening
                  </h5>
                  <p class="card-text">
                    Candidate screening in IT staffing involves rigorous resume review, technical assessments, behavioral interviews, and reference checks. This comprehensive process ensures the selection of highly qualified candidates who meet client requirements.
                  </p>

                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 mt-3">
              <div class="card p-4" style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px">
                <img src="{{ asset('assets/img/service/cloud-trans-process/Client Presentation.png')}}" class="card-img-top m-auto w-100 rounded-3  p-1 my-3" alt="azur-image" style="max-width: 70px" />
                <div class="card-body">
                  <h5 class="card-title text-center fw-bold fs-5">
                    Client Presentation
                  </h5>
                  <p class="card-text">
                    Presentation to the client in IT staffing includes detailed candidate profiles, assessment results, and cultural fit analysis. This comprehensive overview enables clients to make informed decisions aligned with their company's needs and culture
                  </p>

                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 mt-3">
              <div class="card p-4" style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px">
                <img src="{{ asset('assets/img/service/cloud-trans-process/Interview Coordination.png')}}" class="card-img-top m-auto w-100 rounded-3  p-1 my-3" alt="azur-image" style="max-width: 70px" />
                <div class="card-body">
                  <h5 class="card-title text-center fw-bold fs-5">
                    Interview Coordination
                  </h5>
                  <p class="card-text">
                    Interview coordination in IT staffing involves scheduling, preparation, and feedback gathering between clients and candidates. This ensures a smooth and efficient process, facilitating informed decisions and constructive feedback loops for continuous improvement.
                  </p>

                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 mt-3">
              <div class="card p-4" style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px">
                <img src="{{ asset('assets/img/service/cloud-trans-process/Offer Negotiation.png')}}" class="card-img-top m-auto w-100 rounded-3  p-1 my-3" alt="azur-image" style="max-width: 70px" />
                <div class="card-body">
                  <h5 class="card-title text-center fw-bold fs-5">
                    Offer Negotiation
                  </h5>
                  <p class="card-text">
                    Offer negotiation in IT staffing services involves presenting job offers, facilitating discussions on salary and benefits, and ensuring mutual agreement between clients and candidates. This ensures a successful placement aligned with both parties' expectations.
                  </p>

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
                <div class="position-relative pb-3 mb-4 mx-auto">
                  <h4 class="text-left ">Key features of <span class="text-primary">Permanent Hiring</span> </h4>
                  <ul>
                    <li>Customized Talent Search</li>
                    <li>Extensive Candidate Screening</li>
                    <li>Industry-Specific Expertise</li>
                    <li>Candidate Pipeline Management</li>
                    <li>Salary Benchmarking and Negotiation</li>
                    <li>Post-Placement Support</li>
                  </ul>
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
                          <img class="img-fluid w-50 p-5" src="{{ asset('assets/img/service/Continuous Improvement and Adaptation.png')}}" alt="">
                        </div>
                        <div class="text-center py-4">
                          <h5 class="fw-bold">Customized Talent Search</h5>
                          <p class="mx-3 text-center m-0 my-3">Tailored recruitment strategies based on client needs, including skill set, experience, and culture fit.
                          </p>

                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="mr-4 wow slideInUp" data-wow-delay="0.3s">
                    <div class="wow slideInUp mx-2" data-wow-delay="0.3s">
                      <div class="ser-feature-card  bg-light overflow-hidden">
                        <div class="team-img position-relative overflow-hidden d-flex justify-content-center">
                          <img class="img-fluid w-50 p-5" src="{{ asset('assets/img/service/Post-Placement Support and Follow-Up.png')}}" alt="">
                        </div>
                        <div class="text-center py-4">
                          <h5 class="fw-bold">Extensive Candidate Screening</h5>
                          <p class="mx-3 text-center m-0 my-3"> Rigorous screening processes, including technical assessments, interviews, and background checks.</p>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="mr-4 wow slideInUp" data-wow-delay="0.2s">
                    <div class="wow slideInUp mx-2" data-wow-delay="0.3s">
                      <div class="ser-feature-card  bg-light overflow-hidden">
                        <div class="team-img position-relative overflow-hidden d-flex justify-content-center">
                          <img class="img-fluid w-50 p-5" src="{{ asset('assets/img/service/Comprehensive Talent Acquisition Process.png')}}" alt="">
                        </div>
                        <div class="text-center py-4">
                          <h5 class="fw-bold">Post-Placement Support</h5>
                          <p class="mx-3 text-center m-0 my-3"> Ensuring successful onboarding, follow-up, and support to facilitate candidate retention and client satisfaction.</p>

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

      <div class="container my-5">
        <p class="fs-1 text-center" style="font-size:35px;">
          <b>Benefits of <span style="color:#F19F1F;">Permanent Hiring</span></b>
        </p>
        <div class="row g-5 mt-5 py-12">
          <div class="col-lg-4 col-md-6 mt-4">
            <div class="card p-5" style="background-color: #ECECEC">
              <div class="card-image" style="background-color: #F19F1F">
                <img src="{{ asset('assets/img/Strategy Development.png')}}" class="card-img-top m-auto w-100 rounded-3 py-4 px-3 my-1" alt="azur-image" style="max-width: 80px" />
                <div class="triangle-up"></div>
              </div>
              <div class="card-body">
                <h5 class="card-title fw-bold fs-3 mt-3">
                Long-Term Stability
                </h5>
                <p class="card-text fs-6">
                Permanent hires provide stability to IT teams, reducing turnover and ensuring continuity in projects and operations

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
                Investment in Talent
                </h5>
                <p class="card-text fs-6">
                Hiring permanent employees allows for investment in talent development and retention, leading to a skilled and motivated workforce.
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
                  Time Savings

                </h5>
                <p class="card-text fs-6">
                  Accelerates the hiring process by leveraging specialized resources and technologies for quicker candidate sourcing and selection.
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
                  Access to Talent
                </h5>
                <p class="card-text fs-6">
                  Expands access to a wider pool of qualified candidates through dedicated recruitment efforts and industry networks.

                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-4">
            <div class="card p-5" style="background-color: #ECECEC">
              <div class="card-image" style="background-color: #F19F1F">
                <img src="{{ asset('assets/img/Assessment and Discovery.png')}}" class="card-img-top m-auto w-100 rounded-3 py-4 px-3 my-1" alt="azur-image" style="max-width: 80px" />
                <div class="triangle-up"></div>
              </div>
              <div class="card-body">
                <h5 class="card-title fw-bold fs-3 mt-3">
                  Expertise and Best Practices
                </h5>
                <p class="card-text fs-6">
                  Benefits from the expertise of RPO providers who bring in-depth knowledge, experience, and industry best practices to the recruitment process.
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-4">
            <div class="card text-light p-5" style="background-color: #F19F1F">
              <div class="card-image" style="background-color: #ECECEC">
                <img src="{{ asset('assets/img/Consultation and Support for Cloud Services.png')}}" class="card-img-top m-auto w-100 rounded-3 py-4 px-3 my-1" alt="azur-image" style="max-width: 80px" />
                <div class="triangle-up"></div>
              </div>
              <div class="card-body">
                <h5 class="card-title fw-bold fs-3 mt-3">
                  Enhanced Candidate Experience

                </h5>
                <p class="card-text fs-6">
                  Improves the overall candidate experience through streamlined processes, timely communication, and personalized interactions
                </p>
              </div>
            </div>
          </div>
          <!-- <div class="col-lg-4 col-md-6 mt-4">
            <div class="card p-5" style="background-color: #ECECEC">
              <div class="card-image" style="background-color: #F19F1F">
                <img src="{{ asset('assets/img/Tailored Licensing Solutions.png')}}" class="card-img-top m-auto w-100 rounded-3 py-4 px-3 my-1" alt="azur-image" style="max-width: 80px" />
                <div class="triangle-up"></div>
              </div>
              <div class="card-body">
                <h5 class="card-title fw-bold fs-3 mt-3">
                  Focus on Core Activities
                </h5>
                <p class="card-text fs-6">
                  Allows internal HR teams to focus on strategic initiatives and core business activities while RPO providers handle recruitment tasks.
                </p>
              </div>
            </div>
          </div> -->
          <!-- <div class="col-lg-4 col-md-6 mt-4">
            <div class="card text-light p-5" style="background-color: #F19F1F">
              <div class="card-image" style="background-color: #ECECEC">
                <img src="{{ asset('assets/img/Training and Change Management.png')}}" class="card-img-top m-auto w-100 rounded-3 py-4 px-3 my-1" alt="azur-image" style="max-width: 80px" />
                <div class="triangle-up"></div>
              </div>
              <div class="card-body">
                <h5 class="card-title fw-bold fs-3 mt-3">
                  Flexibility
                </h5>
                <p class="card-text fs-6">
                  Offers flexible solutions tailored to meet specific organizational requirements and objectives.
                </p>
              </div>
            </div>
          </div> -->
          <!-- <div class="col-lg-4 col-md-6 mt-4">
            <div class="card p-5" style="background-color: #ECECEC">
              <div class="card-image" style="background-color: #F19F1F">
                <img src="{{ asset('assets/img/Comprehensive IT Security Offerings.png')}}" class="card-img-top m-auto w-100 rounded-3 py-4 px-3 my-1" alt="azur-image" style="max-width: 80px" />
                <div class="triangle-up"></div>
              </div>
              <div class="card-body">
                <h5 class="card-title fw-bold fs-3 mt-3">
                  Risk Mitigation

                </h5>
                <p class="card-text fs-6">
                  Reduces risks associated with compliance, legal issues, and misalignment with industry standards through expert guidance and oversight.
                </p>
              </div>
            </div>
          </div> -->

        </div>
      </div>




      <div class="container my-5 ">
        <div class="d-flex flex-column align-items-center justify-content-center py-2 pb-2">
          <h4 class="fw-bold text-primary">FAQ</h4>
        </div>

        <div class="accordion feature-faq staffing__feq" id="accordionExample">
          <div class="card">
            <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample" data-target="#collapseOne" aria-expanded="true">
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
            <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true">
              <h6 class="fw-bold"> What are the benefits of permanent hiring compared to temporary or contract staffing?

              </h6>
              <div class="acoord-btn text-right mr-2">
                {{-- <a href="{{ route('career.apply')}}" class="rounded-career-btn mr-2 py-2 px-3 bg-dark mx-2">Apply <i class=" fas fa-arrow-right fw-normal"></i></a> --}}
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
            <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample" data-target="#collapseThree" aria-expanded="true">
              <h6 class="fw-bold">How does permanent hiring process differ from temporary or contract staffing? </h6>
              <div class="acoord-btn text-right mr-2  pb-3">
                {{-- <a href="{{ route('career.apply')}}" class="rounded-career-btn mr-2 bg-dark mx-2">Apply <i class=" fas fa-arrow-right fw-normal"></i></a> --}}
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
            <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample" data-target="#collapseFour" aria-expanded="true">
              <h6 class="fw-bold">What steps are involved in the permanent hiring process?
                 </h6>
              <div class="acoord-btn text-right mr-2  pb-3">
                {{-- <a href="{{ route('career.apply')}}" class="rounded-career-btn mr-2 bg-dark mx-2">Apply <i class=" fas fa-arrow-right fw-normal"></i></a> --}}
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
            <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample" data-target="#collapseFive" aria-expanded="true">
              <h6 class="fw-bold">How long does the permanent hiring process usually take?</h6>
              <div class="acoord-btn text-right mr-2  pb-3">
                {{-- <a href="{{ route('career.apply')}}" class="rounded-career-btn mr-2 bg-dark mx-2">Apply <i class=" fas fa-arrow-right fw-normal"></i></a> --}}
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
            <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample" data-target="#collapseSix" aria-expanded="true">
              <h6 class="fw-bold"> What strategies can be used to attract top talent for permanent positions?</h6>
              <div class="acoord-btn text-right mr-2  pb-3">
                {{-- <a href="{{ route('career.apply')}}" class="rounded-career-btn mr-2 bg-dark mx-2">Apply <i class=" fas fa-arrow-right fw-normal"></i></a> --}}
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
            <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample" data-target="#collapseSeven" aria-expanded="true">
              <h6 class="fw-bold">How can permanent hiring help in achieving diversity and inclusion goals?</h6>
              <div class="acoord-btn text-right mr-2  pb-3">
                {{-- <a href="{{ route('career.apply')}}" class="rounded-career-btn mr-2 bg-dark mx-2">Apply <i class=" fas fa-arrow-right fw-normal"></i></a> --}}
                {{-- <span  class="accicon"><i class=" fas fa-angle-down rotate-icon"></i></span> --}}
              </div>
            </div>
            <div id="collapseSeven" class="collapse" data-parent="#accordionExample">
              <div class="card-body">
                <p>Permanent hiring allows organizations to focus on diversity and inclusion initiatives by proactively seeking candidates from underrepresented groups and creating an inclusive workplace culture.
                </p>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample" data-target="#collapseEight" aria-expanded="true">
              <h6 class="fw-bold">What role does technology play in the permanent hiring process?</h6>
              <div class="acoord-btn text-right mr-2  pb-3">
                {{-- <a href="{{ route('career.apply')}}" class="rounded-career-btn mr-2 bg-dark mx-2">Apply <i class=" fas fa-arrow-right fw-normal"></i></a> --}}
                {{-- <span  class="accicon"><i class=" fas fa-angle-down rotate-icon"></i></span> --}}
              </div>
            </div>
            <div id="collapseEight" class="collapse" data-parent="#accordionExample">
              <div class="card-body">
                <p>Technology is used for candidate sourcing, applicant tracking, skill assessments, and video interviewing, streamlining the hiring process and improving efficiency.
                </p>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample" data-target="#collapseNine" aria-expanded="true">
              <h6 class="fw-bold"> How do you ensure a good cultural fit with permanent hires?</h6>
              <div class="acoord-btn text-right mr-2  pb-3">
                {{-- <a href="{{ route('career.apply')}}" class="rounded-career-btn mr-2 bg-dark mx-2">Apply <i class=" fas fa-arrow-right fw-normal"></i></a> --}}
                {{-- <span  class="accicon"><i class=" fas fa-angle-down rotate-icon"></i></span> --}}
              </div>
            </div>
            <div id="collapseNine" class="collapse" data-parent="#accordionExample">
              <div class="card-body">
                <p>Cultural fit can be assessed through behavioral interviews, reference checks, and involving key team members in the hiring process to evaluate compatibility with the organization's values and work environment.
                </p>
              </div>
            </div>

          </div>
          <div class="card">
            <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample" data-target="#collapseTen" aria-expanded="true">
              <h6 class="fw-bold">What support is provided after a permanent hire is made?</h6>
              <div class="acoord-btn text-right mr-2  pb-3">
                {{-- <a href="{{ route('career.apply')}}" class="rounded-career-btn mr-2 bg-dark mx-2">Apply <i class=" fas fa-arrow-right fw-normal"></i></a> --}}
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

      @include('landing.components.get-in-touch')

    </div>
  </div>

  <div class="tab-pane fade @if($fragment == 'pills-profile') show active @endif" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab2" tabindex="0">

    <div class="carousel-inne">
      <div class="bannerImage">
        <img class="w-100 hFull" src="{{ asset('assets/img/service/cc.jpg')}}" alt="Image">
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
            <div class="img-content">
              <img class=" w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/service/Contracted Consultants.png')}}">
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12 pl-1 pl-md-5 ">
            <div class="position-relative pb-3">
              <h1 style="color:black;"> Contract<span class="text-primary"> Consultants </span></h1>
            </div>
            <p class="mb-2 text-justify">At IVT,Programs for Contract Consultants will take over all payroll duties and functions. Screening and recruiting services are included. Employee benefits include medical, dental, vision, life insurance, and paid time off. The employee's hourly wage will be agreed upon in advance, so there will be no surprise. Complying with all federal, state, and local regulations.

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
          <h1  style="color:black;">Our <span class="text-primary"> Offerings</span></h1>
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
                <h5 class="fw-bold">Cost-Effectiveness</h5>
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

          <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="row">
              <div class="col-md-2 ">
                <img class=" wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/service/Business Intelligence.png')}}">
              </div>
              <div class="col-md-10">
                <h5 class="fw-bold">Legal and Administrative Support</h5>
                <p class="text-justify">Assist with contract negotiations, legal documentation, and administrative tasks to streamline processes for consultants.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="container-fluid py-4 wow fadeInUp" data-wow-delay="0.4s">
      <div class="container">
        <div class="text-center position-relative pb-3 mx-auto">
          <h1 style="color:black;">Our <span class="text-primary">Process</span></h1>
          <!-- <p>Our expert consultants bring extensive experience and specialized knowledge to drive success in projects ranging from strategy development to process optimization. With flexible engagements and objective guidance, we help you achieve your goals efficiently and effectively.
          </p> -->
        </div>
        <div class="row g-3 mt-4">
          <div class="col-lg-4 col-md-6">
            <div class="card p-4" style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px">
              <img src="{{ asset('assets/img/service/cloud-trans-process/Needs Assessment.png')}}" class="card-img-top m-auto w-100 rounded-3  p-1 my-3" alt="azur-image" style="max-width: 70px" />
              <div class="card-body">
                <h5 class="card-title text-center fw-bold fs-5">
                  Needs Assessment
                </h5>
                <p class="card-text">
                  We start by understanding your requirements and the specific challenges or projects you need assistance and provide the best service.
                </p>

              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="card p-4" style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px">
              <img src="{{ asset('assets/img/service/cloud-trans-process/Consultant Selection.png')}}" class="card-img-top m-auto w-100 rounded-3  p-1 my-3" alt="azur-image" style="max-width: 70px" />
              <div class="card-body">
                <h5 class="card-title text-center fw-bold fs-5">
                  Consultant Selection
                </h5>
                <p class="card-text">
                  Based on business needs, we carefully select consultants with the right expertise and experience to meet your objectives. Engagement Planning: We work closely with you to define the scope of work, timelines, and deliverables for the consulting engagement.
                </p>

              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="card p-4" style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px">
              <img src="{{ asset('assets/img/service/cloud-trans-process/Engagement Planning.png')}}" class="card-img-top m-auto w-100 rounded-3 p-1 my-3" alt="azur-image" style="max-width: 70px" />
              <div class="card-body">
                <h5 class="card-title text-center fw-bold fs-5">
                  Engagement Planning
                </h5>
                <p class="card-text">
                  We work closely with you to define the scope of work, timelines, and deliverables for the consulting engagement.
                </p>

              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-3">
            <div class="card p-4" style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px">
              <img src="{{ asset('assets/img/service/cloud-trans-process/Project Execution.png')}}" class="card-img-top m-auto w-100 rounded-3  p-1 my-3" alt="azur-image" style="max-width: 70px" />
              <div class="card-body">
                <h5 class="card-title text-center fw-bold fs-5">
                  Project Execution
                </h5>
                <p class="card-text">
                  Our consultants work diligently to execute the project plan, leveraging their skills and knowledge to deliver high-quality results.
                </p>

              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-3">
            <div class="card p-4" style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px">
              <img src="{{ asset('assets/img/service/cloud-trans-process/Monitoring and Support.png')}}" class="card-img-top m-auto w-100 rounded-3  p-1 my-3" alt="azur-image" style="max-width: 70px" />
              <div class="card-body">
                <h5 class="card-title text-center fw-bold fs-5">
                  Monitoring and Support
                </h5>
                <p class="card-text">
                  Throughout the engagement, we provide ongoing support and monitor progress to ensure that the project stays on track and meets your expectations.
                </p>

              </div>
            </div>

          </div>
          <div class="col-lg-4 col-md-6 mt-3">
            <div class="card p-4" style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px">
              <img src="{{ asset('assets/img/service/cloud-trans-process/Feedback and Evaluation.png')}}" class="card-img-top m-auto w-100 rounded-3  p-1 my-3" alt="azur-image" style="max-width: 70px" />
              <div class="card-body">
                <h5 class="card-title text-center fw-bold fs-5">
                  Feedback and Evaluation
                </h5>
                <p class="card-text">
                  After the project is completed, we gather feedback from both you and the consultants to evaluate the outcomes and identify any areas for improvement.
                </p>

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
                <div class="text position-relative pb-3 mb-4 mx-auto">
                  <h4 class="text-left">Key Features For Our <span class="text-primary">Contract Consultants</span></h4>

                  <ul>
                    <li>Specialized Skill Match</li>
                    <li>Flexibility and Scalability</li>
                    <li>Rapid Deployment</li>
                    <li>Continuous Performance Monitoring</li>
                    <li>Scalability and Adaptability</li>
                    <li>Knowledge Transfer and Documentation</li>
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
                          <img class="img-fluid w-50 h-50 p-5" src="{{ asset('assets/img/service/offering-3.svg')}}" alt="">
                        </div>
                        <div class="text-center py-4">
                          <h5 class="fw-bold">Specialized Skill Match</h5>
                          <p class="mx-3 text-center m-0 my-3"> Matching client needs with consultants possessing specialized skills and experience in diverse IT domains.

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
                          <h5 class="fw-bold">Flexible Engagement Models</h5>
                          <p class="mx-3 text-center m-0 my-3">Offering flexible contract options such as short-term, long-term, project-based, or part-time engagements.
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
                          <h5 class="fw-bold">Rapid Deployment</h5>
                          <p class="mx-3 text-center m-0 my-3">Quickly deploying consultants to client projects, minimizing downtime and accelerating project timelines.</p>
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
                          <h5 class="fw-bold">Continuous Performance Monitoring</h5>
                          <p class="mx-3 text-center m-0 my-3">Regular performance evaluations, feedback mechanisms, and quality assurance to ensure consultant effectiveness.</p>

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
      <div class="container my-5">
        <p class="fs-1 text-center" style="font-size:35px;">
          <b>Benefits of <span style="color:#F19F1F;">Contract Consultants
            </span></b>
        </p>
        <div class="row g-5 mt-5 py-12">
          <div class="col-lg-4 col-md-6 mt-4">
            <div class="card p-5" style="background-color: #ECECEC">
              <div class="card-image" style="background-color: #F19F1F">
                <img src="{{ asset('assets/img/Implementation.png')}}" class="card-img-top m-auto w-100 rounded-3 py-4 px-3 my-1" alt="azur-image" style="max-width: 80px" />
                <div class="triangle-up"></div>
              </div>
              <div class="card-body">
                <h5 class="card-title fw-bold fs-3 mt-3">
                  Greater Flexibility
                </h5>
                <p class="card-text fs-6">
                  Organizations can engage Contract Consultants on a project-by-project basis, allowing for flexibility in resource allocation and cost management.
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-4">
            <div class="card p-5 text-light" style="background-color: #F19F1F">
              <div class="card-image" style="background-color: #ECECEC">
                <img src="{{ asset('assets/img/Consultation and Support for Cloud Services.png')}}" class="card-img-top m-auto w-100 rounded-3 py-4 px-3 my-1" alt="azur-image" style="max-width: 80px" />
                <div class="triangle-up"></div>
              </div>
              <div class="card-body">
                <h5 class="card-title fw-bold fs-3 mt-3">
                  Access to Talent
                </h5>
                <p class="card-text fs-6">
                  Organizations can access a diverse pool of talent by engaging Contract Consultants, tapping into a range of skills and experiences that may not be available internally.
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
                  Reduced Training Costs
                </h5>
                <p class="card-text fs-6">
                  Since Contract Consultants typically possess extensive experience in their respective fields, organizations can save on training costs compared to hiring and training new full-time employees.
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
                  Objectivity
                </h5>
                <p class="card-text fs-6">
                  Contract Consultants provide an external perspective on IT projects, bringing fresh insights and ideas without being influenced by internal biases or politics.
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
                  Risk Mitigation
                </h5>
                <p class="card-text fs-6">
                  Contract Consultants often work under defined contracts with clear deliverables and timelines, reducing the risk associated with project delays or performance issues.
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-4">
            <div class="card text-light p-5" style="background-color: #F19F1F">
              <div class="card-image" style="background-color: #ECECEC">
                <img src="{{ asset('assets/img/Efficient Cloud Solutions Acquisition.png')}}" class="card-img-top m-auto w-100 rounded-3 py-4 px-3 my-1" alt="azur-image" style="max-width: 80px" />
                <div class="triangle-up"></div>
              </div>
              <div class="card-body">
                <h5 class="card-title fw-bold fs-3 mt-3">
                  Cloud-Native Development
                </h5>
                <p class="card-text fs-6">
                  Cloud-native development focuses on building applications specifically for cloud environments. Leveraging cloud-native technologies like containers and serverless computing, businesses can develop more scalable, resilient, and cost-effective applications.
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

        <div class="accordion feature-faq staffing__feq" id="accordionExample">

          <div class="card">
            <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample" data-target="#collapseOne" aria-expanded="true">
              <h6 class="fw-bold">What are Contract Consultants in IT staffing services?</h6>
              <div class="acoord-btn text-right mr-2">

              </div>
            </div>
            <div id="collapseOne" class="collapse " data-parent="#accordionExample">
              <div class="card-body">
                <p>Contract Consultants in IT staffing services are professionals or firms hired temporarily to fulfill specific roles or projects within an organization's IT department. They bring specialized skills and expertise to address particular needs or challenges.</p>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true">
              <h6 class="fw-bold">How do Contract Consultants differ from permanent IT staff?
              </h6>
              <div class="acoord-btn text-right mr-2">
                {{-- <a href="{{ route('career.apply')}}" class="rounded-career-btn mr-2 py-2 px-3 bg-dark mx-2">Apply <i class=" fas fa-arrow-right fw-normal"></i></a> --}}
                {{-- <span  class="accicon"><i class=" fas fa-angle-down rotate-icon"></i></span> --}}
              </div>
            </div>
            <div id="collapseTwo" class="collapse" data-parent="#accordionExample">
              <div class="card-body">
                <p>Contract Consultants are hired on a temporary basis to fulfill specific roles or projects, whereas permanent IT staff are employed full-time by the organization. Contract Consultants provide flexibility, specialized skills, and expertise without the long-term commitment of permanent employment.</p>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample" data-target="#collapseThree" aria-expanded="true">
              <h6 class="fw-bold">What are the advantages of utilizing Contract Consultants for IT staffing needs?</h6>
              <div class="acoord-btn text-right mr-2  pb-3">
                {{-- <a href="{{ route('career.apply')}}" class="rounded-career-btn mr-2 bg-dark mx-2">Apply <i class=" fas fa-arrow-right fw-normal"></i></a> --}}
                {{-- <span  class="accicon"><i class=" fas fa-angle-down rotate-icon"></i></span> --}}
              </div>
            </div>
            <div id="collapseThree" class="collapse" data-parent="#accordionExample">
              <div class="card-body">
                <p>Hiring Contract Consultants for IT staffing needs offers benefits such as access to specialized expertise, flexibility in resource allocation, cost-effectiveness, scalability, and the ability to meet short-term project requirements without long-term staffing commitments.</p>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample" data-target="#collapseFour" aria-expanded="true">
              <h6 class="fw-bold">How can organizations ensure effective collaboration with Contract Consultants in IT staffing services?
                 </h6>
              <div class="acoord-btn text-right mr-2  pb-3">
                {{-- <a href="{{ route('career.apply')}}" class="rounded-career-btn mr-2 bg-dark mx-2">Apply <i class=" fas fa-arrow-right fw-normal"></i></a> --}}
                {{-- <span  class="accicon"><i class="  px-3 fas fa-angle-down rotate-icon"></i></span> --}}
              </div>
            </div>
            <div id="collapseFour" class="collapse" data-parent="#accordionExample">
              <div class="card-body">
                <p>Effective collaboration with Contract Consultants in IT staffing services involves clear communication, defining project expectations and deliverables, providing necessary resources and support, establishing regular progress updates and feedback mechanisms, and fostering a collaborative working relationship.</p>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample" data-target="#collapseFive" aria-expanded="true">
              <h6 class="fw-bold">What types of IT staffing services do Contract Consultants provide?</h6>
              <div class="acoord-btn text-right mr-2  pb-3">
                {{-- <a href="{{ route('career.apply')}}" class="rounded-career-btn mr-2 bg-dark mx-2">Apply <i class=" fas fa-arrow-right fw-normal"></i></a> --}}
                {{-- <span  class="accicon"><i class=" fas fa-angle-down rotate-icon"></i></span> --}}
              </div>
            </div>
            <div id="collapseFive" class="collapse" data-parent="#accordionExample">
              <div class="card-body">
                <p>Contract Consultants offer a wide array of IT staffing services, including software development, system administration, network engineering, cybersecurity, database management, IT project management, and technical support, among others</p>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample" data-target="#collapseSix" aria-expanded="true">
              <h6 class="fw-bold">What should organizations consider when engaging Contract Consultants?</h6>
              <div class="acoord-btn text-right mr-2  pb-3">
                {{-- <a href="{{ route('career.apply')}}" class="rounded-career-btn mr-2 bg-dark mx-2">Apply <i class=" fas fa-arrow-right fw-normal"></i></a> --}}
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
            <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample" data-target="#collapseSeven" aria-expanded="true">
              <h6 class="fw-bold">What are the benefits of hiring Contract Consultants?</h6>
              <div class="acoord-btn text-right mr-2  pb-3">
                {{-- <a href="{{ route('career.apply')}}" class="rounded-career-btn mr-2 bg-dark mx-2">Apply <i class=" fas fa-arrow-right fw-normal"></i></a> --}}
                {{-- <span  class="accicon"><i class=" fas fa-angle-down rotate-icon"></i></span> --}}
              </div>
            </div>
            <div id="collapseSeven" class="collapse" data-parent="#accordionExample">
              <div class="card-body">
                <p>Hiring Contract Consultants provides organizations with access to specialized expertise, flexibility in staffing, cost-effectiveness, objective perspectives, and scalability. Contract Consultants can also accelerate project timelines, mitigate risks, and transfer knowledge to internal teams.</p>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample" data-target="#collapseEight" aria-expanded="true">
              <h6 class="fw-bold">What happens after the contracted consulting engagement ends?</h6>
              <div class="acoord-btn text-right mr-2  pb-3">
                {{-- <a href="{{ route('career.apply')}}" class="rounded-career-btn mr-2 bg-dark mx-2">Apply <i class=" fas fa-arrow-right fw-normal"></i></a> --}}
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
  </div>

  <div class="tab-pane fade @if($fragment == 'pills-contact') show active @endif" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab2" tabindex="0">
    <div class="carousel-inne">
      <div class="bannerImage">
        <img class="w-100 hFull" src="{{ asset('assets/img/service/rpo.png')}}" alt="Image">
        <div class="w-100 posAbs d-flex flex-column align-items-center justify-content-center">
          <div class="container">
            <div class="p-3 text-left">
              <p class='text-white text-center serviceBannerText'>Recruitment
                <span class='txtYellow'>Process Outsourcing</span>
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
              <img class=" w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/service/Recruitment process outsourcing.png')}}">
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12 pl-1 pl-md-5 ">
            <div class="position-relative pb-3">
              <h1 style="color:black;"> Recruitment<span class="text-primary"> Process outsourcing</span></h1>
            </div>
            <p class="mb-2 text-justify">Recruitment Process Outsourcing (RPO) is a practice where a company transfers all or part of its recruitment processes to an external service provider. This can include tasks such as sourcing candidates, screening resumes, conducting interviews, and even making job offers on behalf of the company. RPO can help organizations streamline their recruitment processes, improve efficiency, and reduce costs.
            </p>
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid py-5  wow fadeInUp" data-wow-delay="0.2s" style="background:#FEFBF5;">
      <div class="container">
        <div class="text-center position-relative pb-3 mb-4 mx-auto">
          <h1 style="color:black;">Our <span class="text-primary"> Offerings</span></h1>
        </div>

        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="row">
              <div class="col-md-2">
                <img class=" wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/service/Sourcing Candidates.png')}}">
              </div>
              <div class="col-md-10">
                <h5 class="fw-bold">Sourcing Candidates</h5>
                <p class="text-justify"> Leveraging diverse channels to attract top talent
                  Conducting candidate searches based on specific job requirements</p>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="row">
              <div class="col-md-2 ">
                <img class=" wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/service/Screening and Assessment.png')}}">
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
                <img class=" wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/service/Interview Coordination.png')}}">
              </div>
              <div class="col-md-10">
                <h5 class="fw-bold">Interview Coordination</h5>
                <p class="text-justify"> Scheduling and coordinating interviews with candidates
                  Providing feedback and facilitating communication throughout the interview process</p>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="row">
              <div class="col-md-2">
                <img class=" wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/service/Offer Management.png')}}">
              </div>
              <div class="col-md-10">
                <h5 class="fw-bold">Offer Management</h5>
                <p class="text-justify"> Managing job offers and negotiations with selected candidates
                  Ensuring a smooth transition from selection to onboarding</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row mt-3">
          <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="row">
              <div class="col-md-2">
                <img class=" wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/service/Compliance and Reporting.png')}}">
              </div>
              <div class="col-md-10">
                <h5 class="fw-bold">Compliance and Reporting</h5>
                <p class="text-justify">Ensuring all recruitment processes adhere to legal and regulatory requirements
                  Providing detailed reports and analytics on recruitment activities</p>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="row">
              <div class="col-md-2">
                <img class=" wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/service/Candidate Experience Enhancement.png')}}">
              </div>
              <div class="col-md-10">
                <h5 class="fw-bold">Candidate Experience Enhancement</h5>
                <p class="text-justify">Focusing on creating a positive candidate experience throughout the recruitment process
                  Implementing strategies to improve candidate satisfaction and engagement</p>
              </div>
            </div>
          </div>
        </div>
        <!-- <div class="row mt-3">
          <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="row">
              <div class="col-md-2">
                <img class=" wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/service/Customized Solutions.png')}}">
              </div>
              <div class="col-md-10">
                <h5 class="fw-bold">Customized Solutions</h5>
                <p class="text-justify">Tailoring RPO services to meet specific organizational needs
                  Offering flexible solutions based on unique recruitment challenges and goals</p>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="row">
              <div class="col-md-2 ">
                <img class="position-absolute wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/service/Continuous Improvement.png')}}">
              </div>
              <div class="col-md-10">
                <h5 class="fw-bold">Continuous Improvement</h5>
                <p class="text-justify">Implementing feedback mechanisms to enhance recruitment processes over time
                  Constantly evaluating and refining strategies for better outcomes</p>
              </div>
            </div>
          </div>
        </div> -->
        <!-- <div class="row mt-3">
          <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="row">
              <div class="col-md-2">
                <img class=" wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/service/Technology Integration.png')}}">
              </div>
              <div class="col-md-10">
                <h5 class="fw-bold">Technology Integration</h5>
                <p class="text-justify">Utilizing innovative recruitment technologies for efficiency and effectiveness
                  Integrating AI tools, applicant tracking systems, and other tech solutions for optimized results</p>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="row">
              <div class="col-md-2 ">
                <img class="position-absolute wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/service/Dedicated Support.png')}}">
              </div>
              <div class="col-md-10">
                <h5 class="fw-bold">Dedicated Support</h5>
                <p class="text-justify">Providing dedicated support and expertise throughout the recruitment lifecycle
                  Offering personalized services to ensure a seamless recruitment experience</p>
              </div>
            </div>
          </div>
        </div> -->
      </div>
    </div>

    <div class="container-fluid py-4 wow fadeInUp" data-wow-delay="0.4s">
      <div class="container">
        <div class="text-center position-relative pb-3 mx-auto">
          <h1 style="color:black;">Our <span class="text-primary">Process</span></h1>
        </div>
        <div class="row g-3 mt-1">
          <div class="col-lg-4 col-md-6 mt-3">
            <div class="card p-4" style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px">
              <img src="{{ asset('assets/img/service/cloud-trans-process/Assessment and Strategy Development.png')}}" class="card-img-top m-auto w-100 rounded-3  p-1 my-3" alt="azur-image" style="max-width: 70px" />
              <div class="card-body">
                <h5 class="card-title text-center fw-bold fs-5">
                  Initial Consultation
                </h5>
                <p class="card-text">
                  Understanding client requirements and recruitment challenges Identifying key objectives and goals for the RPO engagement .
                </p>

              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-3">
            <div class="card p-4" style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px">
              <img src="{{ asset('assets/img/service/cloud-trans-process/Migration and Deployment.png')}}" class="card-img-top m-auto w-100 rounded-3  p-1 my-3" alt="azur-image" style="max-width: 70px" />
              <div class="card-body">
                <h5 class="card-title text-center fw-bold fs-5">
                  Customization and Planning
                </h5>
                <p class="card-text">
                  Tailoring RPO solutions to align with client-specific needs Developing a detailed recruitment strategy and timeline
                </p>

              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-3">
            <div class="card p-4" style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px">
              <img src="{{ asset('assets/img/service/cloud-trans-process/Optimization and Governance.png')}}" class="card-img-top m-auto w-100 rounded-3 p-1 my-3" alt="azur-image" style="max-width: 70px" />
              <div class="card-body">
                <h5 class="card-title text-center fw-bold fs-5">
                  Candidate Sourcing
                </h5>
                <p class="card-text">
                  Utilizing various channels to attract a diverse pool of candidates Implementing targeted sourcing strategies based on job specifications
                </p>

              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-3">
            <div class="card p-4" style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px">
              <img src="{{ asset('assets/img/service/cloud-trans-process/Security and Compliance.png')}}" class="card-img-top m-auto w-100 rounded-3  p-1 my-3" alt="azur-image" style="max-width: 70px" />
              <div class="card-body">
                <h5 class="card-title text-center fw-bold fs-5">
                  Screening and Shortlisting
                </h5>
                <p class="card-text">
                  Reviewing resumes, conducting initial screenings, and assessing candidate qualifications Shortlisting candidates based on predetermined criteria and client preferences
                </p>

              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-3">
            <div class="card p-4" style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px">
              <img src="{{ asset('assets/img/service/cloud-trans-process/Training and Change Management.png')}}" class="card-img-top m-auto w-100 rounded-3  p-1 my-3" alt="azur-image" style="max-width: 70px" />
              <div class="card-body">
                <h5 class="card-title text-center fw-bold fs-5">
                  Interview Coordination
                </h5>
                <p class="card-text">
                  Scheduling and coordinating interviews between candidates and hiring managers Facilitating communication and feedback throughout the interview process .
                </p>

              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-3">
            <div class="card p-4" style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px">
              <img src="{{ asset('assets/img/service/cloud-trans-process/Training and Change Management.png')}}" class="card-img-top m-auto w-100 rounded-3  p-1 my-3" alt="azur-image" style="max-width: 70px" />
              <div class="card-body">
                <h5 class="card-title text-center fw-bold fs-5">
                  Offer Management
                </h5>
                <p class="card-text">
                  Managing job offers, negotiations, and onboarding processes Ensuring a smooth transition for selected candidates into the organization.
                </p>

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
              <div class="position-relative pb-3 mb-4 mx-auto">
                <h4 class="text-left ">Key features of <span class="text-primary"> Recruitment process outsourcing</span></h4>

                <ul>
                  <li>Dedicated IT Recruitment Team</li>
                  <li>Scalable and Flexible Solutions</li>
                  <li>Advanced Candidate Sourcing Techniques</li>
                  <li>Comprehensive Screening and Assessment</li>
                  <li>Streamlined Recruitment Workflow</li>
                  <li>Data-Driven Insights and Analytics</li>
                </ul>
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
                        <img class="img-fluid w-50 p-5" src="{{ asset('assets/img/service/offering-1.svg')}}" alt="">
                      </div>
                      <div class="text-center py-4">
                        <h5 class="fw-bold">Dedicated IT Recruitment Team</h5>
                        <p class="mx-3 text-center m-0 my-3">A specialized team of recruiters with deep knowledge of the IT industry, technology trends, and talent landscape.

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
                        <h5 class="fw-bold">Scalable and Flexible Solutions</h5>
                        <p class="mx-3 text-center m-0 my-3"> Flexible engagement models that can scale up or down based on fluctuating hiring needs and project demands.
</p>
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
                        <h5 class="fw-bold">Advanced Candidate Sourcing Techniques</h5>
                        <p class="mx-3 text-center m-0 my-3">Utilization of advanced sourcing techniques, including AI-driven candidate matching, talent mapping, and passive candidate outreach.</p>

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
    <div class="container my-5">
      <p class="fs-1 text-center" style="font-size:35px;">
        <b>Benefits of <span style="color:#F19F1F;">Recruitment process outsourcing </span></b>
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
                Access to Talent
              </h5>
              <p class="card-text fs-6">
                Expands access to a wider pool of qualified candidates through dedicated recruitment efforts and industry networks.
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-4">
          <div class="card p-5" style="background-color: #F19F1F">
            <div class="card-image" style="background-color: #ECECEC">
              <img src="{{ asset('assets/img/Post-Implementation Support.png')}}" class="card-img-top m-auto w-100 rounded-3 py-4 px-3 my-1" alt="azur-image" style="max-width: 80px" />
              <div class="triangle-up"></div>
            </div>
            <div class="card-body">
              <h5 class="card-title fw-bold fs-3 mt-3">
                Time Savings
              </h5>
              <p class="card-text fs-6">
                Accelerates the hiring process by leveraging specialized resources and technologies for quicker candidate sourcing and selection.
                .
              </p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 mt-4">
          <div class="card p-5" style="background-color: #ECECEC">
            <div class="card-image" style="background-color: #F19F1F">
              <img src="{{ asset('assets/img/User Training and Adoption.png')}}" class="card-img-top m-auto w-100 rounded-3 py-4 px-3 my-1" alt="azur-image" style="max-width: 80px" />
              <div class="triangle-up"></div>
            </div>
            <div class="card-body">
              <h5 class="card-title fw-bold fs-3 mt-3">
                Expertise and Best Practices
              </h5>
              <p class="card-text fs-6">
                Benefits from the expertise of RPO providers who bring in-depth knowledge, experience, and industry best practices to the recruitment process.
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
                Enhanced Candidate Experience
              </h5>
              <p class="card-text fs-6">
                Improves the overall candidate experience through streamlined processes, timely communication, and personalized interactions.
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-4">
          <div class="card p-5" style="background-color: #ECECEC">
            <div class="card-image" style="background-color: #F19F1F">
              <img src="{{ asset('assets/img/Customized Solution Design.png')}}" class="card-img-top m-auto w-100 rounded-3 py-4 px-3 my-1" alt="azur-image" style="max-width: 80px" />
              <div class="triangle-up"></div>
            </div>
            <div class="card-body">
              <h5 class="card-title fw-bold fs-3 mt-3">
                Focus on Core Activities
              </h5>
              <p class="card-text fs-6">
                Allows internal HR teams to focus on strategic initiatives and core business activities while RPO providers handle recruitment tasks.
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
                Continuous Improvement
              </h5>
              <p class="card-text fs-6">
                Encourages ongoing optimization of recruitment processes based on data-driven insights and feedback, leading to improved outcomes over time.
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

      <div class="accordion feature-faq staffing__feq" id="accordionExample">
        <div class="card">
          <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample" data-target="#collapseOne" aria-expanded="true">
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
          <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true">
            <h6 class="fw-bold">How does RPO differ from traditional recruitment methods?
              <div class="acoord-btn text-right mr-2">
                {{-- <a href="{{ route('career.apply')}}" class="rounded-career-btn mr-2 py-2 px-3 bg-dark mx-2">Apply <i class=" fas fa-arrow-right fw-normal"></i></a> --}}
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
          <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample" data-target="#collapseThree" aria-expanded="true">
            <h6 class="fw-bold">What are the typical services offered in RPO engagements? </h6>
            <div class="acoord-btn text-right mr-2  pb-3">
              {{-- <a href="{{ route('career.apply')}}" class="rounded-career-btn mr-2 bg-dark mx-2">Apply <i class=" fas fa-arrow-right fw-normal"></i></a> --}}
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
          <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample" data-target="#collapseFour" aria-expanded="true">
            <h6 class="fw-bold">What are the benefits of implementing RPO in an organization?
               </h6>
            <div class="acoord-btn text-right mr-2  pb-3">
              {{-- <a href="{{ route('career.apply')}}" class="rounded-career-btn mr-2 bg-dark mx-2">Apply <i class=" fas fa-arrow-right fw-normal"></i></a> --}}
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
          <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample" data-target="#collapseFive" aria-expanded="true">
            <h6 class="fw-bold">How is data security and confidentiality maintained in RPO processes?</h6>
            <div class="acoord-btn text-right mr-2  pb-3">
              {{-- <a href="{{ route('career.apply')}}" class="rounded-career-btn mr-2 bg-dark mx-2">Apply <i class=" fas fa-arrow-right fw-normal"></i></a> --}}
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
          <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample" data-target="#collapseSix" aria-expanded="true">
            <h6 class="fw-bold">Can RPO solutions be customized to suit specific organizational needs?</h6>
            <div class="acoord-btn text-right mr-2  pb-3">
              {{-- <a href="{{ route('career.apply')}}" class="rounded-career-btn mr-2 bg-dark mx-2">Apply <i class=" fas fa-arrow-right fw-normal"></i></a> --}}
              {{-- <span  class="accicon"><i class=" fas fa-angle-down rotate-icon"></i></span> --}}
            </div>
          </div>
          <div id="collapseSix" class="collapse" data-parent="#accordionExample">
            <div class="card-body">
              <p>Yes, RPO services can be tailored to meet unique requirements, ensuring that the solutions align with the organization's goals and preferences.</p>
            </div>
          </div>
        </div>
        <div class="card">
            <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample" data-target="#collapseSeven" aria-expanded="true">
              <h6 class="fw-bold">What industries can benefit from RPO services?</h6>
              <div class="acoord-btn text-right mr-2  pb-3">
                {{-- <a href="{{ route('career.apply')}}" class="rounded-career-btn mr-2 bg-dark mx-2">Apply <i class=" fas fa-arrow-right fw-normal"></i></a> --}}
                {{-- <span  class="accicon"><i class=" fas fa-angle-down rotate-icon"></i></span> --}}
              </div>
            </div>
            <div id="collapseSeven" class="collapse" data-parent="#accordionExample">
              <div class="card-body">
                <p>Virtually any industry can benefit from RPO, including IT, healthcare, finance, manufacturing, and more, as long as there is a need for efficient and effective recruitment processes.</p>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample" data-target="#collapseEight" aria-expanded="true">
              <h6 class="fw-bold">How does RPO help in reducing time-to-fill and improving quality of hires?</h6>
              <div class="acoord-btn text-right mr-2  pb-3">
                {{-- <a href="{{ route('career.apply')}}" class="rounded-career-btn mr-2 bg-dark mx-2">Apply <i class=" fas fa-arrow-right fw-normal"></i></a> --}}
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



{{--@include('landing.components.get-in-touch') --}}
</div>
@endsection
