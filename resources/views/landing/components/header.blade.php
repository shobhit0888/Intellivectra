<!-- Navbar & Carousel Start -->

<div class="topheader container-fluid bg-dark px-5 d-none d-lg-block">
  <div class="row justify-content-end">
    <div class="aligns-content-center justify-content-center">
      <div class="d-inline-flex align-items-center" style="height: 35px;">
        <small class="me-3 text-light mr-3"><i class="fa fa-phone-alt me-2 mr-3"></i>+91-012-4496-0635</small>
        <small class="text-light mr-3"><i class="fa fa-envelope-open me-2 mr-3"></i>info@intellivectra.tech</small>
      </div>
    </div>
  </div>
</div>

<div class="container-fluid position-relative p-0">
  <nav class="navbar navbar-expand-lg navbar-dark px-5 py-4 py-lg-0">
    <a href="{{route('home')}}" class="navbar-brand p-0 ml-4 wh-img">
      <img class="" src="{{ asset('assets/img/logo-wh.png')}}" width="64px" />
    </a>
    <a href="{{route('home')}}" class="navbar-brand p-0 ml-4 dk-img">
      <img class="" src="{{ asset('assets/img/logo.png')}}" width="64px" />
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav" aria-label="Toggle navigation">
      <span class="fa fa-bars"></span>
    </button>
    <div class="collapse navbar-collapse aligns-content-center justify-content-center pt-2" id="main_nav">
      <div class="navbar-nav ms-auto py-0 navbar__head">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item ">
            <a href="{{route('home')}}" class="nav-item nav-link {{ Request::is('/') ? 'active' : ''}} ">Home</a>
          </li>
          <li class="nav-item ">
            <a href="{{route('about')}}" class="nav-link {{ Request::is('about-us') ? 'active' : ''}}">Company</a>
          </li>
          <!-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle {{ str_contains(Request::url(),'services/') ? 'active' : ''}}" id="dropdown1" data-toggle="dropdown" aria-haspopup="true"
                           aria-expanded="false">Services</a>
                        <ul class="dropdown-menu" aria-labelledby="dropdown1">
                            <li class="dropdown-item"><a href="{{ route('services.staffing')}}">Staffing Services</a></li>
                            <li class="dropdown-item"><a href="{{ route('services.consulting')}}">Consulting Services</a></li>
                        </ul>
                    </li> -->



          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Solutions</a>
            <ul class="dropdown-menu mobile-dropdown" aria-labelledby="dropdown2">
              <li class="text-primary">Technologies Solutions <i class="fa-solid fa-chevron-down"></i></li>
              <li><a href="{{route('services.technologySolutions')}}?fragment=pills-home">IT Infrastructure Platform <i class="fa-solid fa-chevron-right"></i></a></li>
              <li><a href="{{route('services.technologySolutions')}}?fragment=pills-profile">IT Security Solutions <i class="fa-solid fa-chevron-right"></i></a></li>
              <li><a href="{{route('services.technologySolutions')}}?fragment=pills-contact">Cloud Solutions <i class="fa-solid fa-chevron-right"></i></a></li>
              <li><a href="{{route('services.technologySolutions')}}?fragment=pills-contact2">Collaboration & Digital Workplace <i class="fa-solid fa-chevron-right"></i></a></li>
              <li><a href="{{route('services.technologySolutions')}}?fragment=pills-profile2">Enterprise Application Modernization <i class="fa-solid fa-chevron-right"></i></a></li>
              <li><a href="{{route('services.technologySolutions')}}?fragment=pills-home2">Consulting & Digital Transformation <i class="fa-solid fa-chevron-right"></i></a></li>
            </ul>
            <ul class="dropdown-menu mega-dropdown" aria-labelledby="dropdown2" style="left: 130%;">
              <!-- <div class="mx-5"> -->
              <div class="row">
                <div class="col-sm-3">
                  <div class="nav flex-column nav-pills">
                    <a class="nav-link active" href="#professional-it-services" aria-selected="true">Technologies Solutions</a>

                  </div>
                </div>
                <!-- jas test -->
                <div class="col-lg-9 col-md-9 col-sm-12">
                  <div class="col-lg-12 col-md-12 col-sm-12 ">
                    <div class="row">
                      <div class="card-test col-md-4 col-sm-4">
                        <img src="{{ asset('assets/img/c 01.png')}}" alt="">
                        <div class="card-content">
                          <p class="card-head">IT Infrastructure Platform</p>
                          <div class="block"></div>
                          <p>Build a resilient foundation tailored to your needs, ensuring seamless operations and scalability.
                          </p>
                          <a href="{{route('services.technologySolutions')}}?fragment=pills-home">
                            <p class="fw-bold">Know More &rarr;</p>
                          </a>
                        </div>
                      </div>

                      <div class="card-test col-md-4  col-sm-4">
                        <img src="{{ asset('assets/img/c 02.png')}}" alt="">
                        <div class="card-content">
                          <p class="card-head">IT Security Solutions</p>
                          <div class="block"></div>
                          <p>Safeguard your digital assets with cutting-edge defenses, protecting against evolving cyber threats and
                            vulnerabilities.</p>
                          <a href="{{route('services.technologySolutions')}}?fragment=pills-profile">
                            <p class="fw-bold">Know More &rarr;</p>
                          </a>
                        </div>
                      </div>

                      <div class="card-test col-md-4  col-sm-4">
                        <img src="{{ asset('assets/img/c 03.png')}}" alt="">
                        <div class="card-content">
                          <p class="card-head">Cloud Solutions</p>
                          <div class="block"></div>
                          <p>Unlock agility & efficiency with customized cloud solutions, enabling scalable & flexible IT resources
                            for your business.
                          </p>
                          <a href="{{route('services.technologySolutions')}}?fragment=pills-contact">
                            <p class="fw-bold">Know More &rarr;</p>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="card-test col-sm-4">
                      <img src="{{ asset('assets/img/c 04.png')}}" alt="">
                      <div class="card-content">
                        <p class="card-head">Collaboration & Digital Workplace</p>
                        <div class="block"></div>
                        <p>Foster collaboration and productivity in the digital realm, optimizing workflows and communication
                          channels.
                        </p>
                        <a href="{{route('services.technologySolutions')}}?fragment=pills-contact2">
                          <p class="fw-bold">Know More &rarr;</p>
                        </a>
                      </div>
                    </div>
                    <div class="card-test col-sm-4">
                      <img src="{{ asset('assets/img/c 05.png')}}" alt="">
                      <div class="card-content">
                        <p class="card-head">Enterprise Application Modernization</p>
                        <div class="block"></div>
                        <p>Revamp legacy systems for enhanced performance and functionality, driving innovation and agility across
                          your organization.</p>
                        <a href="{{route('services.technologySolutions')}}?fragment=pills-profile2">
                          <p class="fw-bold">Know More &rarr;</p>
                        </a>
                      </div>
                    </div>
                    <div class="card-test col-sm-4">
                      <img src="{{ asset('assets/img/c 06.png')}}" alt="">
                      <div class="card-content">
                        <p class="card-head">Consulting & Digital Transformation</p>
                        <div class="block"></div>
                        <p>Expert guidance for digital transformation, leveraging technology to stay ahead in a competitive
                          landscape.
                        </p>
                        <a href="{{route('services.technologySolutions')}}?fragment=pills-home2">
                          <p class="fw-bold">Know More &rarr;</p>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- </div> -->
            </ul>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle {{ str_contains(Request::url(),'solutions/') ? 'active' : ''}}" id="dropdown2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Services</a>
            <ul class="dropdown-menu mobile-dropdown" aria-labelledby="dropdown2">
              <li class="text-primary">Professional IT Services <i class="fa-solid fa-chevron-down"></i></li>
              <li><a href="{{ route('services.cloud') }}?fragment=pills-home-tab">Cloud Transformation <i class="fa-solid fa-chevron-right"></i></a></li>
              <li><a href="{{ route('services.cloud') }}?fragment=pills-profile-tab">IT Lifecycle Management <i class="fa-solid fa-chevron-right"></i></a></li>
              <li><a href="{{ route('services.cloud') }}?fragment=pills-contact-tab">IT Security Audit Services <i class="fa-solid fa-chevron-right"></i></a></li>
              <li class="text-primary">IT Staffing Services <i class="fa-solid fa-chevron-down"></i></li>
              <li><a href="{{route('services.itStaffing')}}?fragment=pills-home">Permanent Hiring <i class="fa-solid fa-chevron-right"></i></a></li>
              <li><a href="{{route('services.itStaffing')}}?fragment=pills-profile">Contract Consultants <i class="fa-solid fa-chevron-right"></i></a></li>
              <li><a href="{{route('services.itStaffing')}}?fragment=pills-contact">Recruitment Outsourcing <i class="fa-solid fa-chevron-right"></i></a></li>
            </ul>
            <ul class="dropdown-menu mega-dropdown" aria-labelledby="dropdown2">
              <div class="mx-5">
                <div class="row">
                  <div class="col-sm-3">
                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                      <a class="nav-link active" id="professional-it-services-tab" data-toggle="pill" href="#professional-it-services" role="tab" aria-controls="professional-it-services" aria-selected="true">Professional IT Services</a>
                      <a class="nav-link" id="it-staffing-services-tab" data-toggle="pill" href="#it-staffing-services" role="tab" aria-controls="it-staffing-services" aria-selected="false">IT Staffing Services</a>

                    </div>
                  </div>
                  <div class="col-sm-9">
                    <div class="tab-content" id="v-pills-tabContent">
                      <div class="tab-pane fade show active" id="professional-it-services" role="tabpanel" aria-labelledby="professional-it-services-tab">
                        <div class="d-flex flex-row justify-content-between wrap">
                          <div class="row">
                            <div class="col-md-4" style="padding-left: 0px;">
                              <div class="card-test">
                                <img src="{{ asset('assets/img/r04.png')}}" alt="">
                                <div class="card-content">
                                  <p class="card-head">Cloud Transformation</p>
                                  <div class="block"></div>
                                  <p class="block-content">Streamlining and transforming businesses into cloud-based solutions for enhanced
                                    scalability and efficiency.
                                  </p>
                                  <a href="{{ route('services.cloud') }}?fragment=pills-home-tab">
                                    <p class="fw-bold">Know More &rarr;</p>
                                  </a>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-4" style="padding-left: 0px;">
                              <div class="card-test">
                                <img src="{{ asset('assets/img/r05.png')}}" alt="">
                                <div class="card-content">
                                  <p class="card-head">IT Lifecycle Management</p>
                                  <div class="block"></div>
                                  <p class="block-content">Comprehensive management of IT infrastructure from planning to retirement, ensuring
                                    optimal performance throughout.</p>
                                  <a href="{{ route('services.cloud') }}?fragment=pills-profile-tab">
                                    <p class="fw-bold">Know More &rarr;</p>
                                  </a>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-4" style="padding-left: 0px;">
                              <div class="card-test">
                                <img src="{{ asset('assets/img/r06.png')}}" alt="">
                                <div class="card-content">
                                  <p class="card-head">IT Security Audit Services</p>
                                  <div class="block"></div>
                                  <p class="block-content">Performing thorough assessments to identify vulnerabilities and fortify digital assets
                                    against cyber threats.
                                  </p>
                                  <a href="{{ route('services.cloud') }}?fragment=pills-contact-tab">
                                    <p class="fw-bold">Know More &rarr;</p>
                                  </a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="tab-pane fade" id="it-staffing-services" role="tabpanel" aria-labelledby="it-staffing-services-tab">
                        <div class="d-flex flex-row justify-content-between wrap">
                          <div class="row">
                            <div class="col-md-4" style="padding-left: 0px;">
                              <div class="card-test">
                                <img src="{{ asset('assets/img/r01.png')}}" alt="">
                                <div class="card-content">
                                  <p class="card-head">Permanent Hiring</p>
                                  <div class="block"></div>
                                  <p class="block-content">Seamless recruitment processes to secure permanent talent perfectly suited to
                                    organizational needs.
                                  </p>
                                  <a href="{{route('services.itStaffing')}}?fragment=pills-home">
                                    <p class="fw-bold">Know More &rarr;</p>
                                  </a>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-4" style="padding-left: 0px;">
                              <div class="card-test">
                                <img src="{{ asset('assets/img/r02.png')}}" alt="">
                                <div class="card-content">
                                  <p class="card-head">Contract Consultants</p>
                                  <div class="block"></div>
                                  <p class="block-content">Get full access of top-tier IT expertise on a flexible basis to support
                                    project-specific requirements.
                                  </p>
                                  <a href="{{route('services.itStaffing')}}?fragment=pills-profile">
                                    <p class="fw-bold">Know More &rarr;</p>
                                  </a>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-4" style="padding-left: 0px;">
                              <div class="card-test">
                                <img src="{{ asset('assets/img/r03.png')}}" alt="">
                                <div class="card-content">
                                  <p class="card-head">Recruitment Outsourcing</p>
                                  <div class="block"></div>
                                  <p class="block-content">Outsourcing of the recruitment process to expert professionals for efficient and
                                    effective candidate selection.
                                  </p>
                                  <a href="{{route('services.itStaffing')}}?fragment=pills-contact">
                                    <p class="fw-bold">Know More &rarr;</p>
                                  </a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                {{-- <div class="row">
                                <div class="c-container">
                                    <div class="card-test">
                                        <img src="{{ asset('assets/img/r04.png')}}" alt="">
                <div class="card-content">
                  <p class="card-head">Cloud Transformation</p>
                  <div class="block"></div>
                  <p>Streamlining and transforming businesses into cloud-based solutions for enhanced scalability and
                    efficiency.
                  </p>
                  <a href="#">
                    <p class="fw-bold">Know More &rarr;</p>
                  </a>
                </div>
              </div>

              <div class="card-test">
                <img src="{{ asset('assets/img/r05.png')}}" alt="">
                <div class="card-content">
                  <p class="card-head">IT Lifecycle Management</p>
                  <div class="block"></div>
                  <p>Comprehensive management of IT infrastructure from planning to retirement, ensuring optimal performance
                    throughout.</p>
                  <a href="{{route('services.data')}}">
                    <p class="fw-bold">Know More &rarr;</p>
                  </a>
                </div>
              </div>


              <div class="card-test">
                <img src="{{ asset('assets/img/r06.png')}}" alt="">
                <div class="card-content">
                  <p class="card-head">IT Security Audit Services</p>
                  <div class="block"></div>
                  <p>Performing thorough assessments to identify vulnerabilities and fortify digital assets against cyber
                    threats.
                  </p>
                  <a href="{{route('services.command')}}">
                    <p class="fw-bold">Know More &rarr;</p>
                  </a>
                </div>
              </div>

              <div class="card-test">
                <img src="{{ asset('assets/img/r01.png')}}" alt="">
                <div class="card-content">
                  <p class="card-head">Permanent Hiring</p>
                  <div class="block"></div>
                  <p>Seamless recruitment processes to secure permanent talent perfectly suited to organizational needs.
                  </p>
                  <a href="{{route('services.staffing')}}">
                    <p class="fw-bold">Know More &rarr;</p>
                  </a>
                </div>
              </div>

              <div class="card-test">
                <img src="{{ asset('assets/img/r02.png')}}" alt="">
                <div class="card-content">
                  <p class="card-head">Contract Consultants</p>
                  <div class="block"></div>
                  <p>Get full access of top-tier IT expertise on a flexible basis to support project-specific requirements.
                  </p>
                  <a href="{{route('services.consulting')}}">
                    <p class="fw-bold">Know More &rarr;</p>
                  </a>
                </div>
              </div>
              <div class="card-test">
                <img src="{{ asset('assets/img/r03.png')}}" alt="">
                <div class="card-content">
                  <p class="card-head">Recruitment Outsourcing</p>
                  <div class="block"></div>
                  <p>Outsourcing of the recruitment process to expert professionals for efficient and effective candidate
                    selection.
                  </p>
                  <a href="{{route('services.staffing')}}">
                    <p class="fw-bold">Know More &rarr;</p>
                  </a>
                </div>
              </div>
      </div>
    </div> --}}
    </ul>
    </li>

    <li class="nav-item">
      <a href="{{ route('blogs')}}" class="nav-item nav-link {{ Request::is('blogs') || str_contains(Request::url(),'blogs') ? 'active' : ''}}">Blogs</a>
    </li>
    <li class="nav-item">
      <a href="{{ route('career')}}" class="nav-item nav-link {{ Request::is('careers') || str_contains(Request::url(),'careers') ? 'active' : ''}}">Career</a>
    </li>
    <li class="nav-item">
      <a href="{{ route('contact')}}" class="nav-item nav-link {{ Request::is('contact-us') ? 'active' : ''}}">Contact
        Us</a>
    </li>
    </ul>
</div>
</div>
<div class="text-end text-lg-end mr-4 social-icons">
  <div class="d-inline-flex align-items-center" style="height: 45px; margin-left:4px;">
    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2 mr-2 box-shadow" href="https://www.linkedin.com/company/intelli-vectra-technologies/"><i class="fab fa-linkedin-in fw-normal" style="color: #0077b5 ;"></i></a>
    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2 box-shadow" href="https://twitter.com/intellivectra?lang=en"><svg class="ml-2 mt-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 912 912">
        <path d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z" />
      </svg></a>
  </div>
</div>
</nav>
</div>




<!-- <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-dark px-5 py-4 py-lg-0">
            <a href="{{route('home')}}" class="navbar-brand p-0 ml-4 wh-img">
                <img class="" src="{{ asset('assets/img/logo-wh.png')}}" width="64px"/>
            </a>
            <a href="{{route('home')}}" class="navbar-brand p-0 ml-4 dk-img">
                <img class="" src="{{ asset('assets/img/logo.png')}}" width="64px"/>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav" aria-label="Toggle navigation">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse aligns-content-center justify-content-center pt-2" id="main_nav" >
                <div class="navbar-nav ms-auto py-0">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item ">
                            <a href="{{route('home')}}" class="nav-item nav-link {{ Request::is('/') ? 'active' : ''}} ">Home</a>
                        </li>
                        <li class="nav-item ">
                            <a href="{{route('about')}}" class="nav-link {{ Request::is('about-us') ? 'active' : ''}}" >Company</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle {{ str_contains(Request::url(),'services/') ? 'active' : ''}}" id="dropdown2" data-toggle="dropdown" aria-haspopup="true"
                               aria-expanded="false">Services & Solutions</a>
                            <ul class="dropdown-menu" aria-labelledby="dropdown2">
                                <li class="dropdown-item"><a href="{{ route('services.staffing')}}">Staffing Services</a></li>
                                <li class="dropdown-item dropdown">
                                    <a class="dropdown-toggle" id="dropdown2-1" data-toggle="dropdown" aria-haspopup="true"
                                       aria-expanded="false">Professional Services</a>
                                    <ul class="dropdown-menu" aria-labelledby="dropdown2-1">
                                        <li class="dropdown-item"><a href="{{ route('services.consulting')}}">Consulting Services</a></li>
                                        <li class="dropdown-item dropdown">
                                            <a class="dropdown-toggle" id="dropdown2-1-1" data-toggle="dropdown"
                                               aria-haspopup="true" aria-expanded="false">Platform and Operations</a>
                                            <ul class="dropdown-menu" aria-labelledby="dropdown2-1-1">
                                                <li class="dropdown-item"><a href="#">Cloud services and solutions</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown-item dropdown">
                                            <a class="dropdown-toggle" id="dropdown2-1-1" data-toggle="dropdown"
                                               aria-haspopup="true" aria-expanded="false">Enterprise Application Services</a>
                                            <ul class="dropdown-menu" aria-labelledby="dropdown2-1-1">
                                                <li class="dropdown-item"><a href="{{ route('services.backup')}}">Backup and archieve solutions</a></li>
                                                <li class="dropdown-item"><a href="{{ route('services.data')}}">Data management solutions</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown-item dropdown">
                                            <a class="dropdown-toggle" id="dropdown2-1-1" data-toggle="dropdown"
                                               aria-haspopup="true" aria-expanded="false">Digital Services</a>
                                            <ul class="dropdown-menu" aria-labelledby="dropdown2-1-1">
                                                <li class="dropdown-item"><a href="{{ route('services.survillence')}}">Surveillance solutions</a></li>
                                                <li class="dropdown-item"><a href="{{ route('services.command')}}">Command and control solutions</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown-item dropdown">
                                            <a class="dropdown-toggle" id="dropdown2-1-2" data-toggle="dropdown"
                                               aria-haspopup="true" aria-expanded="false">Security Services</a>
                                            <ul class="dropdown-menu" aria-labelledby="dropdown2-1-2">
                                                <li class="dropdown-item"><a href="{{ route('services.security')}}">Security solutions</a></li>
                                                <li class="dropdown-item"><a href="{{ route('services.infrastucture')}}">Infrastructure solutions</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('blogs')}}" class="nav-item nav-link {{ Request::is('blogs') || str_contains(Request::url(),'blogs') ? 'active' : ''}}">Blogs</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('career')}}" class="nav-item nav-link {{ Request::is('careers') || str_contains(Request::url(),'careers') ? 'active' : ''}}">Career</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('contact')}}" class="nav-item nav-link {{ Request::is('contact-us') ? 'active' : ''}}">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="text-end text-lg-end mr-4 social-icons">
                <div class="d-inline-flex align-items-center" style="height: 45px; margin-left:4px;">
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2 mr-2 box-shadow" href=""><i class="fab fa-linkedin-in fw-normal" style="color: #0077b5 ;"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2 box-shadow" href=""><svg class="ml-2 mt-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 912 912"><path d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z"/></svg></a>
                </div>
            </div>
        </nav> -->

@if (Request::is('/'))
@include('landing.components.hero-section')
@elseif (Request::is('about-us'))
@include('landing.components.sub-header',['type' => 'about'])
@elseif (Request::is('contact-us'))
@include('landing.components.sub-header',['type' => 'contact'])
@elseif (Request::is('blogs'))
@include('landing.components.sub-header',['type' => 'blogs'])
@elseif (Request::is('blogs/*'))
@include('landing.components.sub-header',['type' => 'blogs-details'])
@elseif (Request::is('case-study'))
@include('landing.components.sub-header',['type' => 'case-study'])
@elseif (Request::is('careers'))
@include('landing.components.sub-header',['type' => 'career'])
@elseif (Request::is('careers/apply'))
@include('landing.components.sub-header',['type' => 'career-apply'])

@elseif (Request::is('services/staffing'))
@include('landing.components.sub-header',['type' => 'services-staffing','sub_type' => 'professional-it-services'])
@elseif (Request::is('services/consulting'))
@include('landing.components.sub-header',['type' => 'services-consulting','sub_type' => 'professional-it-services'])
@elseif (Request::is('services/cloud'))
@include('landing.components.sub-header',['type' => 'services-cloud','sub_type' => 'professional-it-services'])
@elseif (Request::is('services/backup'))
@include('landing.components.sub-header',['type' => 'services-backup','sub_type' => 'professional-it-services'])
@elseif (Request::is('services/data'))
@include('landing.components.sub-header',['type' => 'services-data','sub_type' => 'it-staffing-services'])
@elseif (Request::is('services/survillence'))
@include('landing.components.sub-header',['type' => 'services-survillence','sub_type' => 'it-staffing-services'])
@elseif (Request::is('services/command'))
@include('landing.components.sub-header',['type' => 'services-command','sub_type' => 'it-staffing-services'])
@elseif (Request::is('services/security'))
@include('landing.components.sub-header',['type' => 'services-security','sub_type' => 'it-staffing-services'])
@elseif (Request::is('services/infrastucture'))
@include('landing.components.sub-header',['type' => 'services-infrastucture','sub_type' => 'it-staffing-services'])




@elseif (Request::is('oems'))
@include('landing.components.sub-header',['type' => 'oems'])
@elseif (Request::is('oems/page-2'))
@include('landing.components.sub-header',['type' => 'oems-page2'])
@elseif (Request::is('privacy-policy'))
@include('landing.components.sub-header',['type' => 'privacy'])
@elseif (Request::is('term-condition'))
@include('landing.components.sub-header',['type' => 'term'])
@elseif (Request::is('case-study/prayagraj-smart'))
@include('landing.components.sub-header',['type' => 'prayagraj'])
@elseif (Request::is('case-study/weather-forecast'))
@include('landing.components.sub-header',['type' => 'weather-forecast'])
@endif



<!-- </div> -->
<!-- Navbar & Carousel End -->
