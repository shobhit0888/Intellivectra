@extends('landing.layouts.base')
@section('contents')
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
{{-- <div class='navigationPane' style="position: absolute; top: 380px !important;" style="backround-color:black;">
  <ul
    class="nav flex-nowrap widthFitContent width200Percent mx-auto nav-pills align-items-center justify-content-center"
    id="pills-tab" role="tablist" style="margin-top:-4px;">
    <li class="nav-item">
      <span class="nav-link text-white py-1 px-4" style="font-weight:600; font-size:22px;">Professional IT Services</span>
    </li>


    <li class="nav-item" role="presentation">
      <span class="nav-link active text-white py-1 px-4" id="pills-home-tab" data-bs-toggle="pill"
        data-bs-target="#pills-home" type="buttn" role="tab" aria-controls="pills-home" aria-selected="true">Cloud
        Transformation</span>
    </li IT Services>
    <li class="nav-item" role="presentation">
      <span class="nav-link text-white py-1 px-4" id="pills-profile-tab" data-bs-toggle="pill"
        data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">IT
        Lifecycle Management</span>
    </li>
    <li class="nav-item" role="presentation">
      <span class="nav-link text-white py-1 px-4" id="pills-contact-tab" data-bs-toggle="pill"
        data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">IT
        Security Audit Services</span>
    </li>

  </ul>
</div> --}}

@include('landing.components.pie-service-header', ['title' => 'it-security'])

<div class="tab-content" id="pills-tabContent">

  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">

    <div class="carousel-inne">
      <div class="bannerImage">
        <img class="w-100 hFull" src="{{ asset('assets/img/service/feature-bg.jpg')}}" alt="Image">
        <div class="w-100 posAbs d-flex flex-column align-items-center justify-content-center">
          <div class="container">
            <div class="p-3 text-left">
              <p class='text-white text-center serviceBannerText'>Cloud <span class='txtYellow'> Transformation </span>
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
            <div class="" style="min-height: 400px;">
              <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s"
                src="{{ asset('assets/img/service/service-po-1.png')}}">
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12 pl-5">
            <div class="position-relative pb-3">
              <h1> <span class="text-primary">Cloud Transformation Services</span></h1>
            </div>
            <p class="mb-2 text-justify">Cloud transformation services are essential offerings that help businesses migrate their IT infrastructure, applications, and processes to cloud-based environments. These services typically involve a strategic approach to assess current IT landscapes, develop migration strategies, execute migrations, optimize cloud environments, and ensure security and compliance.</p>

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
                <img class="position-absolute wow zoomIn" data-wow-delay="0.9s"
                  src="{{ asset('assets/img/service/offering-1.png')}}">
              </div>
              <div class="col-md-10">
                <h5 class="fw-bold">Cloud Migration Services</h5>
                <p class="text-justify">Our Cloud Migration Services provide seamless transition of workloads to the cloud, ensuring minimal downtime and disruption. With expert assessment, planning, and execution, we optimize your migration strategy for efficiency and success.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="row">
              <div class="col-md-2 ">
                <img class="position-absolute wow zoomIn" data-wow-delay="0.9s"
                  src="{{ asset('assets/img/service/offering-2.png')}}" width="50px;">
              </div>
              <div class="col-md-10">
                <h5 class="fw-bold">Cloud Application Modernization</h5>
                <p class="text-justify">Our Cloud Application Modernization service refactors legacy apps, embraces microservices, and utilizes serverless computing to enhance scalability and resilience. We empower your business with cutting-edge cloud-native architectures for agile, future-proof applications.
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
                  src="{{ asset('assets/img/service/offering-3.png')}}" width="50px;">
              </div>
              <div class="col-md-10">
                <h5 class="fw-bold">Cloud Infrastructure Optimization</h5>
                <p class="text-justify">Through cost analysis, performance tuning, and robust security measures, our Cloud Infrastructure Optimization service ensures your cloud environment is finely tuned for efficiency, reliability, and compliance, maximizing the value of your cloud investment.
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="row">
              <div class="col-md-2 ">
                <img class="position-absolute wow zoomIn" data-wow-delay="0.9s"
                  src="{{ asset('assets/img/service/offering-4.png')}}" width="50px;">
              </div>
              <div class="col-md-10">
                <h5 class="fw-bold">DevOps and Continuous Integration/Continuous Deployment (CI/CD)</h5>
                <p class="text-justify">With our DevOps and CI/CD service, we automate processes, establish CI/CD pipelines, and implement Infrastructure as Code (IaC), enabling rapid deployment, scalability, and reliability of applications on the cloud, fostering a culture of continuous innovation.
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="row mt-3">
            <div class="col-lg-6 col-md-6 col-sm-12" >
                <div class="row">
                    <div class="col-md-2" >
                        <img class="position-absolute wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/service/offering-5.png')}}" width="50px;">
      </div>
      <div class="col-md-10">
        <h5 class="fw-bold">Cloud Managed Services</h5>
        <p class="text-justify"> Our Cloud Managed Services ensure 24/7 monitoring, patch management, and cost governance. With dedicated support and security measures, we optimize your cloud environment for reliability, security, and cost-effectiveness, allowing you to focus on your core business objectives.</p>
      </div>
    </div>
  </div>
  <!-- <div class="col-lg-6 col-md-6 col-sm-12">
    <div class="row">
      <div class="col-md-2 ">
        <img class="position-absolute wow zoomIn" data-wow-delay="0.9s"
          src="{{ asset('assets/img/service/offering-5.svg')}}">
      </div>
      <div class="col-md-10">
        <h5 class="fw-bold">On-Demand Consulting</h5>
        <p class="text-justify">Efficient resource management for project demands.</p>
      </div>
    </div>
  </div> -->
 </div>
 </div>
 </div>

 <div class="container my-5">
      <h1 class="fs-1 text-center">
        OUR <span class="text-warning">PROCESS</span>
      </h1>
      <div class="text-center fs-5" style="max-width: 800px; margin: auto">
        Explore simplified cloud solution acquisition and adaptable licensing
        options with Intelli Vectra Technologies. Experience robust IT security,
        Azure Stack deployment expertise, and personalized cloud services
        consultation
      </div>
      <div class="row g-3 mt-5">
        <div class="col-lg-4 col-md-6">
          <div
            class="card p-4"
            style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px"
          >
            <img
              src="assets/image/azure-logo.png"
              class="card-img-top m-auto w-100 rounded-3 bg-dark p-1 my-3"
              alt="azur-image"
              style="max-width: 70px"
            />
            <div class="card-body">
              <h5 class="card-title text-center fw-bolder fs-5">
                Azure Stack Deployment Services
              </h5>
              <p class="card-text">
                Deploy Microsoft Azure Stack confidently with assistance from
                Intelli Vectra Technologies <br />
                ......
              </p>
              <a
                href="#"
                class="btn btn-dark text-white p-0 px-2 fs-3 float-end rounded-circle"
                ><i class="fa-solid fa-plus"></i
              ></a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div
            class="card p-4"
            style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px"
          >
            <img
              src="assets/image/azure-logo.png"
              class="card-img-top m-auto w-100 rounded-3 bg-dark p-1 my-3"
              alt="azur-image"
              style="max-width: 70px"
            />
            <div class="card-body">
              <h5 class="card-title text-center fw-bolder fs-5">
                Azure Stack Deployment Services
              </h5>
              <p class="card-text">
                Deploy Microsoft Azure Stack confidently with assistance from
                Intelli Vectra Technologies <br />
                ......
              </p>
              <a
                href="#"
                class="btn btn-dark text-white p-0 px-2 fs-3 float-end rounded-circle"
                ><i class="fa-solid fa-plus"></i
              ></a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div
            class="card p-4"
            style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px"
          >
            <img
              src="assets/image/azure-logo.png"
              class="card-img-top m-auto w-100 rounded-3 bg-dark p-1 my-3"
              alt="azur-image"
              style="max-width: 70px"
            />
            <div class="card-body">
              <h5 class="card-title text-center fw-bolder fs-5">
                Azure Stack Deployment Services
              </h5>
              <p class="card-text">
                Deploy Microsoft Azure Stack confidently with assistance from
                Intelli Vectra Technologies <br />
                ......
              </p>
              <a
                href="#"
                class="btn btn-dark text-white p-0 px-2 fs-3 float-end rounded-circle"
                ><i class="fa-solid fa-plus"></i
              ></a>
            </div>
          </div>
        </div>
      </div>
    </div>
 <!-- <div class="container-fluid py-4 wow fadeInUp" data-wow-delay="0.4s">
  <div class="container">
    <div class="text-center position-relative pb-3 mx-auto">
      <h1 class="text-primary">Our Process for Cloud Transformation Services</h1>
     <p>Our cloud transformation services provide a comprehensive suite of solutions tailored to drive your organization's journey to the cloud, enabling agility, scalability, and innovation.
  </p>
    </div>
    <div class="row g-5">

      <div class="col-lg-12 col-md-12" data-wow-delay="0.5s">
        <div class="d-flex flex-row justify-content-center ">
          <div class="row d-flex flex-row justify-content-between">
            <div class="col-lg-3 col-md-3 col-sm-6 text-center px-4 wow fadeInUp" data-wow-delay="0.6s">
              <img class="ups-img w-50 py-2" data-wow-delay="0.2s" src="{{ asset('assets/img/service-orm-4.svg')}}">
              <h5>Assessment and Strategy Development</h5>
              <p>Our assessment phase evaluates current IT infrastructure and business goals. Strategy development tailors a migration plan aligning with objectives for efficient cloud transformation.</p>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 text-center px-4 wow fadeInUp" data-wow-delay="0.7s">
              <img class="ups-img w-50 py-2" data-wow-delay="0.3s" src="{{ asset('assets/img/service-orm-1.svg')}}">
              <h5>Migration and Deployment</h5>
              <p>Migration and deployment involve seamless transition of applications and data to the cloud, ensuring minimal disruption and optimizing performance, scalability, and cost-effectiveness for efficient cloud transformation. </p>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-6 text-center px-4 wow fadeInUp" data-wow-delay="0.8s">
              <img class="ups-img w-50 py-2" data-wow-delay="0.3s" src="{{ asset('assets/img/service-orm-3.svg')}}">
              <h5>Optimization and Governance</h5>
              <p>Optimization and governance ensure efficient resource utilization, cost management, and adherence to best practices in cloud environments, maximizing performance and maintaining security for successful cloud transformation.</p>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 text-center px-4 wow fadeInUp" data-wow-delay="0.9s">
              <img class="ups-img w-50 py-2" data-wow-delay="0.1s" src="{{ asset('assets/img/service-orm-2.svg')}}">
              <h5 class="">Security and Compliance</h5>
              <p>Security and compliance measures include encryption, access controls, and regulatory adherence to safeguard data and meet industry standards, ensuring the integrity and protection of cloud environments during transformation.</p>
            </div>
          </div>
        </div>
        <div class="d-flex flex-row justify-content-center ">
          <div class="row d-flex flex-row justify-content-between">
            <div class="col-lg-3 col-md-3 col-sm-6 text-center px-4 wow fadeInUp" data-wow-delay="0.6s">
              <img class="ups-img w-50 py-2" data-wow-delay="0.2s" src="{{ asset('assets/img/service-orm-4.svg')}}">
              <h5>Training and Change Management</h5>
              <p>Training and change management programs equip teams with the skills needed to embrace cloud technologies, fostering a culture of innovation and ensuring smooth adoption throughout the transformation process.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
 </div> -->


 <div class="col-lg-12 my-5 mb-5" style="min-height: 600px">
  <div class="row mb-5">
    <div class="col-lg-4 col-md-4 col-sm-12">
      <div class="container-fluid py-4 wow fadeInUp bg-primary ml-5" data-wow-delay="0.4s">
        <div class="container">
          <div class="text-center position-relative pb-3 mb-4 mx-auto">
            <h4 class="text-left text-primary">Key features of Cloud Transformation Services</h4>
            <p class="text-justify mb-0">Infrastructure migration
            Scalability
            Cost optimization
            Security
            Automation
            DevOps integration
            Cloud-native development
            Data management
            Hybrid cloud solutions

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
 <div class="container my-5">
      <h2 class="fs-1 text-center">
        Benefits of Our
        <span style="color: #be7f16">IT Security Audit Services</span>
      </h2>
      <div class="row g-5 mt-5 py-12">
        <div class="col-lg-4 col-md-6">
          <div class="card p-5" style="background-color: #cccccc">
            <div class="card-image" style="background-color: #be7f16">
              <img
                src="{{ asset('assets/img/image 5.png')}}"
                class="card-img-top m-auto w-100 rounded-3 py-4 px-3 my-1"
                alt="azur-image"
                style="max-width: 80px"
              />
              <div class="triangle-up"></div>
            </div>
            <div class="card-body">
              <h5 class="card-title fw-bolder fs-3 mt-3">
                Seamless Communication
              </h5>
              <p class="card-text fs-6">
                Digital workplace fosters effective collaboration across diverse
                locations and time zones, enhancing communication among teams.
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="card p-5 text-light" style="background-color: #be7f16">
            <div class="card-image" style="background-color: #cccccc">
              <img
                src="{{ asset('assets/img/image 5.png')}}"
                class="card-img-top m-auto w-100 rounded-3 py-4 px-3 my-1"
                alt="azur-image"
                style="max-width: 80px"
              />
              <div class="triangle-up"></div>
            </div>
            <div class="card-body">
              <h5 class="card-title fw-bolder fs-3 mt-3">
                Seamless Communication
              </h5>
              <p class="card-text fs-6">
                Digital workplace fosters effective collaboration across diverse
                locations and time zones, enhancing communication among teams.
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="card p-5" style="background-color: #cccccc">
            <div class="card-image" style="background-color: #be7f16">
              <img
                src="{{ asset('assets/img/image 5.png')}}"
                class="card-img-top m-auto w-100 rounded-3 py-4 px-3 my-1"
                alt="azur-image"
                style="max-width: 80px"
              />
              <div class="triangle-up"></div>
            </div>
            <div class="card-body">
              <h5 class="card-title fw-bolder fs-3 mt-3">
                Seamless Communication
              </h5>
              <p class="card-text fs-6">
                Digital workplace fosters effective collaboration across diverse
                locations and time zones, enhancing communication among teams.
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="card text-light p-5" style="background-color: #be7f16">
            <div class="card-image" style="background-color: #cccccc">
              <img
                src="{{ asset('assets/img/image 5.png')}}"
                class="card-img-top m-auto w-100 rounded-3 py-4 px-3 my-1"
                alt="azur-image"
                style="max-width: 80px"
              />
              <div class="triangle-up"></div>
            </div>
            <div class="card-body">
              <h5 class="card-title fw-bolder fs-3 mt-3">
                Seamless Communication
              </h5>
              <p class="card-text fs-6">
                Digital workplace fosters effective collaboration across diverse
                locations and time zones, enhancing communication among teams.
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="card p-5" style="background-color: #cccccc">
            <div class="card-image" style="background-color: #be7f16">
              <img
                src="{{ asset('assets/img/image 5.png')}}"
                class="card-img-top m-auto w-100 rounded-3 py-4 px-3 my-1"
                alt="azur-image"
                style="max-width: 80px"
              />
              <div class="triangle-up"></div>
            </div>
            <div class="card-body">
              <h5 class="card-title fw-bolder fs-3 mt-3">
                Seamless Communication
              </h5>
              <p class="card-text fs-6">
                Digital workplace fosters effective collaboration across diverse
                locations and time zones, enhancing communication among teams.
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="card text-light p-5" style="background-color: #be7f16">
            <div class="card-image" style="background-color: #cccccc">
              <img
                src="{{ asset('assets/img/image 5.png')}}"
                class="card-img-top m-auto w-100 rounded-3 py-4 px-3 my-1"
                alt="azur-image"
                style="max-width: 80px"
              />
              <div class="triangle-up"></div>
            </div>
            <div class="card-body">
              <h5 class="card-title fw-bolder fs-3 mt-3">
                Seamless Communication
              </h5>
              <p class="card-text fs-6">
                Digital workplace fosters effective collaboration across diverse
                locations and time zones, enhancing communication among teams.
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="card p-5" style="background-color: #cccccc">
            <div class="card-image" style="background-color: #be7f16">
              <img
                src="{{ asset('assets/img/image 5.png')}}"
                class="card-img-top m-auto w-100 rounded-3 py-4 px-3 my-1"
                alt="azur-image"
                style="max-width: 80px"
              />
              <div class="triangle-up"></div>
            </div>
            <div class="card-body">
              <h5 class="card-title fw-bolder fs-3 mt-3">
                Seamless Communication
              </h5>
              <p class="card-text fs-6">
                Digital workplace fosters effective collaboration across diverse
                locations and time zones, enhancing communication among teams.
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="card text-light p-5" style="background-color: #be7f16">
            <div class="card-image" style="background-color: #cccccc">
              <img
                src="{{ asset('assets/img/image 5.png')}}"
                class="card-img-top m-auto w-100 rounded-3 py-4 px-3 my-1"
                alt="azur-image"
                style="max-width: 80px"
              />
              <div class="triangle-up"></div>
            </div>
            <div class="card-body">
              <h5 class="card-title fw-bolder fs-3 mt-3">
                Seamless Communication
              </h5>
              <p class="card-text fs-6">
                Digital workplace fosters effective collaboration across diverse
                locations and time zones, enhancing communication among teams.
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="card p-5" style="background-color: #cccccc">
            <div class="card-image" style="background-color: #be7f16">
              <img
                src="{{ asset('assets/img/image 5.png')}}"
                class="card-img-top m-auto w-100 rounded-3 py-4 px-3 my-1"
                alt="azur-image"
                style="max-width: 80px"
              />
              <div class="triangle-up"></div>
            </div>
            <div class="card-body">
              <h5 class="card-title fw-bolder fs-3 mt-3">
                Seamless Communication
              </h5>
              <p class="card-text fs-6">
                Digital workplace fosters effective collaboration across diverse
                locations and time zones, enhancing communication among teams.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
 <div class="container my-5 ">
  <div class="d-flex flex-column align-items-center justify-content-center py-2 pb-2">
    <h4 class="fw-bold text-primary">FAQs</h4>
  </div>

  <div class="accordion feature-faq feature-faq" id="accordionExample">
    <div class="card">
      <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample"
        data-target="#collapseOne" aria-expanded="true">
        <h6 class="fw-bold">What is cloud transformation?</h6>
        <div class="acoord-btn text-right mr-2">

        </div>
      </div>
      <div id="collapseOne" class="collapse " data-parent="#accordionExample">
        <div class="card-body">
          <p>Cloud transformation refers to the process of migrating IT infrastructure, applications, and services from on-premises environments to cloud-based platforms. It involves adopting cloud technologies and services to modernize operations and improve efficiency.</p>
        </div>
      </div>
    </div>

    <div class="card">
      <div class="card-header collapsed py-3" data-parent="#accordionExample" data-toggle="collapse"
        data-target="#collapseTwo" aria-expanded="true">
        <h6 class="fw-bold">Why should my business consider cloud transformation?
        </h6>
        <div class="acoord-btn text-right mr-2">

        </div>
      </div>
      <div id="collapseTwo" class="collapse" data-parent="#accordionExample">
        <div class="card-body">
          <p>Cloud transformation offers numerous benefits, including scalability, cost efficiency, enhanced security, agility, and access to advanced technologies. It allows businesses to stay competitive, innovate faster, and adapt to changing market demands more effectively.
          </p>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample"
        data-target="#collapseThree" aria-expanded="true">
        <h6 class="fw-bold">What are the key steps involved in cloud transformation?
        </h6>
        <div class="acoord-btn text-right mr-2  pb-3">

        </div>
      </div>
      <div id="collapseThree" class="collapse" data-parent="#accordionExample">
        <div class="card-body">
          <p>The key steps in cloud transformation typically include assessment and planning, migration of workloads and data to the cloud, optimization of cloud resources, implementation of security measures, integration with existing systems, and ongoing monitoring and optimization.</p>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample"
        data-target="#collapseFour" aria-expanded="true">
        <h6 class="fw-bold"> Is cloud transformation suitable for all types of businesses?
           </h6>
        <div class="acoord-btn text-right mr-2  pb-3">

        </div>
      </div>
      <div id="collapseFour" class="collapse" data-parent="#accordionExample">
        <div class="card-body">
          <p>Cloud transformation can benefit businesses of all sizes and industries. However, the suitability depends on factors such as existing IT infrastructure, regulatory requirements, and business goals. A thorough assessment is essential to determine the best approach for each organization.</p>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample"
        data-target="#collapseFive" aria-expanded="true">
        <h6 class="fw-bold">How does cloud transformation impact IT infrastructure and operations?</h6>
        <div class="acoord-btn text-right mr-2  pb-3">

        </div>
      </div>
      <div id="collapseFive" class="collapse" data-parent="#accordionExample">
        <div class="card-body">
          <p>Cloud transformation often leads to a shift from traditional IT infrastructure to cloud-based services. This may involve decommissioning on-premises servers, adopting cloud-native technologies, and embracing DevOps practices for streamlined operations and faster delivery of services.</p>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample"
        data-target="#collapseSix" aria-expanded="true">
        <h6 class="fw-bold">What are the security considerations in cloud transformation?</h6>
        <div class="acoord-btn text-right mr-2  pb-3">

        </div>
      </div>
      <div id="collapseSix" class="collapse" data-parent="#accordionExample">
        <div class="card-body">
          <p>Security is a critical aspect of cloud transformation. It involves implementing robust identity and access management, encryption, network security, and compliance measures to protect data and applications in the cloud. Cloud providers offer various security features, but organizations must also take responsibility for securing their assets.</p>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample"
        data-target="#collapseSeven" aria-expanded="true">
        <h6 class="fw-bold">How does cloud transformation affect data management and governance?</h6>
        <div class="acoord-btn text-right mr-2  pb-3">

        </div>
      </div>
      <div id="collapseSeven" class="collapse" data-parent="#accordionExample">
        <div class="card-body">
          <p>Cloud transformation can improve data management by providing scalable storage solutions, advanced analytics tools, and easier access to data. However, organizations must establish proper data governance policies to ensure data integrity, privacy, and regulatory compliance.</p>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample"
        data-target="#collapseEight" aria-expanded="true">
        <h6 class="fw-bold"> What are the cost implications of cloud transformation?</h6>
        <div class="acoord-btn text-right mr-2  pb-3">

        </div>
      </div>
      <div id="collapseEight" class="collapse" data-parent="#accordionExample">
        <div class="card-body">
          <p>While cloud transformation can lead to cost savings through reduced capital expenditures and pay-as-you-go pricing models, it's essential to consider factors such as migration costs, ongoing operational expenses, and potential optimization opportunities. Proper planning and monitoring are necessary to optimize costs effectively.</p>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample"
        data-target="#collapseNine" aria-expanded="true">
        <h6 class="fw-bold">How does cloud transformation enable innovation?</h6>
        <div class="acoord-btn text-right mr-2  pb-3">

        </div>
      </div>
      <div id="collapseNine" class="collapse" data-parent="#accordionExample">
        <div class="card-body">
          <p>Cloud transformation enables innovation by providing access to cutting-edge technologies such as artificial intelligence, machine learning, Internet of Things (IoT), and big data analytics. It allows businesses to experiment, iterate, and deploy new ideas more rapidly, driving continuous innovation.</p>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample"
        data-target="#collapseTen" aria-expanded="true">
        <h6 class="fw-bold"> What support is available for organizations undergoing cloud transformation?</h6>
        <div class="acoord-btn text-right mr-2  pb-3">

        </div>
      </div>
      <div id="collapseTen" class="collapse" data-parent="#accordionExample">
        <div class="card-body">
          <p>Many cloud service providers offer support services, including migration assistance, training, and ongoing technical support. Additionally, organizations can seek help from cloud consultants,</p>
        </div>
      </div>
    </div>

  </div>
 </div>

  @include('landing.components.get-in-touch')

</div>

<div class="tab-pane fade show" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">

  <div class="carousel-inne">
    <div class="bannerImage">
      <img class="w-100 hFull" src="{{ asset('assets/img/service/service-po-1.jpg')}}" alt="Image">
      <div class="w-100 posAbs d-flex flex-column align-items-center justify-content-center">
        <div class="container">
          <div class="p-3 text-left">
            <p class='text-white text-center serviceBannerText'>IT
              <span class='txtYellow'> Lifecycle Management </span>
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
          <div class="" style="min-height: 400px;">
            <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s"
              src="{{ asset('assets/img/service/service-po-1.png')}}">
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 pl-5">
          <div class="position-relative pb-3">
            <h1> <span class="text-primary">IT Lifecycle Management Services</span></h1>
          </div>
          <p class="mb-2 text-justify">Our IT Lifecycle Management solution streamlines asset discovery,
            configuration management, change control, and performance monitoring.
             It optimizes IT operations, ensures compliance, and reduces costs throughout
             the lifecycle of IT assets.</p>

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
              <img class="position-absolute wow zoomIn" data-wow-delay="0.9s"
                src="{{ asset('assets/img/service/it/asset')}}">
            </div>
            <div class="col-md-10">
              <h5 class="fw-bold">Asset Discovery and Inventory</h5>
              <p class="text-justify">Utilizing advanced scanning techniques, our system identifies
                 and catalogs all IT assets within the organization's infrastructure. Provides
                 real-time visibility into hardware, software, and virtual assets,
                 including their specifications, configurations, and relationships.</p>
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
              <h5 class="fw-bold">Configuration Management</h5>
              <p class="text-justify">Tracks changes in configuration items (CIs) across the IT
                 environment to ensure consistency and compliance with organizational
                 standards.Enables efficient management of configurations through version
                  control and rollback capabilities.</p>
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
              <h5 class="fw-bold">Change Management</h5>
              <p class="text-justify"> Facilitates controlled changes to IT systems, minimizing disruption
                and risk. Implements workflows for change requests, approvals, and implementation,
                 ensuring accountability and compliance with regulatory requirements.
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
          <div class="row">
            <div class="col-md-2 ">
              <img class="position-absolute wow zoomIn" data-wow-delay="0.9s"
                src="{{ asset('assets/img/service/offering-3.svg')}}">
            </div>
            <div class="col-md-10">
              <h5 class="fw-bold">Incident and Problem Management</h5>
              <p class="text-justify">Enables timely resolution of incidents and problems through
                automated ticketing, prioritization, and escalation mechanisms. Provides root
                 cause analysis to prevent recurring issues and improve system reliability.
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
                src="{{ asset('assets/img/service/offering-4.svg')}}">
            </div>
            <div class="col-md-10">
              <h5 class="fw-bold">Patch Management</h5>
              <p class="text-justify"> Automates the deployment of security patches and updates across
                the IT infrastructure. Ensures systems are up-to-date and protected against
                vulnerabilities, reducing the risk of cyber threats.</p>
            </div>
          </div>
        </div>
      <div class="col-lg-6 col-md-6 col-sm-12" >
                <div class="row">
                    <div class="col-md-2 " >
                        <img class="position-absolute wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/service/offering-5.svg')}}">
      </div>
      <div class="col-md-10">
        <h5 class="fw-bold">Asset Lifecycle Tracking</h5>
        <p class="text-justify">Manages the entire lifecycle of IT assets from procurement to
          retirement. Optimizes asset utilization, tracks warranty and support contracts,
          and facilitates end-of-life disposal in compliance with environmental regulations.</p>
      </div>
    </div>
  </div>
  <div class="col-lg-6 col-md-6 col-sm-12" >
            <div class="row">
                <div class="col-md-2 " >
                    <img class="position-absolute wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/service/offering-5.svg')}}">
  </div>
      <div class="col-md-10">
        <h5 class="fw-bold">Performance Monitoring and Reporting</h5>
        <p class="text-justify"> Monitors the performance of IT assets and infrastructure components
           in real-time. Generates comprehensive reports and analytics to assess performance,
           utilization, and compliance metrics.</p>
      </div>
</div>
</div>
</div>


<div class="container-fluid py-4 wow fadeInUp" data-wow-delay="0.4s">
  <div class="container">
    <div class="text-center position-relative pb-3 mx-auto">
      <h1>Our Processes<span class="text-primary">for IT Lifecycle Management Services/span></h1>
    <p>Intelli Vectra's IT lifecycle management process comprises comprehensive assessment,
      strategic planning, efficient procurement and deployment, proactive maintenance and
      support, continuous monitoring and optimization, meticulous retirement and replacement,
      and regular evaluation and feedback to ensure ongoing improvement. which involves</p>
    </div>
    <div class="row g-5">

      <div class="col-lg-12 col-md-12" data-wow-delay="0.5s">
        <div class="d-flex flex-row justify-content-center ">
          <div class="row d-flex flex-row justify-content-between">
            <div class="col-lg-3 col-md-3 col-sm-6 text-center px-4 wow fadeInUp" data-wow-delay="0.6s">
              <img class="ups-img w-50 py-2" data-wow-delay="0.2s" src="{{ asset('assets/img/service-orm-4.svg')}}">
              <h5>Assessment</h5>
              <p> We conduct a comprehensive evaluation of your organization's
          existing IT infrastructure to pinpoint specific needs and challenges.
          </p>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 text-center px-4 wow fadeInUp" data-wow-delay="0.7s">
              <img class="ups-img w-50 py-2" data-wow-delay="0.3s" src="{{ asset('assets/img/service-orm-1.svg')}}">
              <h5>Planning and Strategy</h5>
              <p> Based on the assessment results, we formulate a
            tailored plan and strategy to effectively manage the IT lifecycle, aligning
            with your business objectives.
            </p>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-6 text-center px-4 wow fadeInUp" data-wow-delay="0.8s">
              <img class="ups-img w-50 py-2" data-wow-delay="0.3s" src="{{ asset('assets/img/service-orm-3.svg')}}">
              <h5>Procurement and Deployment</h5>
              <p>Our team assists in the procurement of essential
            hardware and software, ensuring efficient deployment and integration within
            your organization.
           </p>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 text-center px-4 wow fadeInUp" data-wow-delay="0.9s">
              <img class="ups-img w-50 py-2" data-wow-delay="0.1s" src="{{ asset('assets/img/service-orm-2.svg')}}">
              <h5 class="">Maintenance and Support</h5>
              <p>We provide ongoing maintenance and technical support
              to guarantee the smooth functioning of your IT systems and promptly address any
              issues that arise.
              </p>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 text-center px-4 wow fadeInUp" data-wow-delay="0.6s">
              <img class="ups-img w-50 py-2" data-wow-delay="0.2s" src="{{ asset('assets/img/service-orm-4.svg')}}">
              <h5>Monitoring and Optimization</h5>
              <p>Continuously monitoring your IT systems, we identify
              areas for improvement and optimize performance to enhance overall efficiency.
            </p>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 text-center px-4 wow fadeInUp" data-wow-delay="0.7s">
              <img class="ups-img w-50 py-2" data-wow-delay="0.3s" src="{{ asset('assets/img/service-orm-1.svg')}}">
              <h5>Retirement and Replacement</h5>
              <p>When necessary, we manage the retirement or
              replacement of outdated IT assets, ensuring compliance with regulations and
              minimizing disruptions.
            </p>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-6 text-center px-4 wow fadeInUp" data-wow-delay="0.8s">
              <img class="ups-img w-50 py-2" data-wow-delay="0.3s" src="{{ asset('assets/img/service-orm-3.svg')}}">
              <h5>Evaluation and Feedback</h5>
              <p>We conduct periodic evaluations to gauge the
            effectiveness of our IT lifecycle management strategies, gathering feedback for
            continuous improvement.
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
            <h4 class="text-left text-primary">Key Features of IT Lifecycle Management Services</h4>
            <p class="text-justify mb-0"> Asset discovery and inventory
                                         Configuration management
                                         Change management
                                         Incident and problem management
                                         Patch management
                                         Asset lifecycle tracking
                                         Performance monitoring and reporting
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
                    <p class="mx-3 text-center m-0 my-3">Lower operational costs thanks to optimised server usage
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
                    <p class="mx-3 text-center m-0 my-3"> Reduced risks with reliable backup and security measures in
                      place
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
                    <p class="mx-3 text-center m-0 my-3">Enhanced data protection for your organisation's valuable
                      information</p>
                  </div>
                </div>
              </div>
            </div>

            {{-- <div class="mr-4 wow slideInUp" data-wow-delay="0.2s">
                            <div class="wow slideInUp mx-2" data-wow-delay="0.3s">
                                <div class="ser-feature-card  bg-light overflow-hidden">
                                    <div class="team-img position-relative overflow-hidden d-flex justify-content-center">
                                        <img class="img-fluid w-50 p-5" src="{{ asset('assets/img/service-orm-1.svg')}}"
            alt="">
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
            <p class="mx-3 text-center m-0 my-3"> Enhance operational efficiency through streamlined processes and
              expertly managed cloud services.</p>

          </div>
        </div>
      </div>
    </div> --}}

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

<div class="container my-5 ">
  <div class="d-flex flex-column align-items-center justify-content-center py-2 pb-2">
    <h4 class="fw-bold text-primary">FAQ</h4>
  </div>

  <div class="accordion feature-faq feature-faq" id="accordionExample">
    <div class="card">
      <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample"
        data-target="#collapseOne" aria-expanded="true">
        <h6 class="fw-bold">What is IT Lifecycle Management (ITLM)?</h6>
        <div class="acoord-btn text-right mr-2">

        </div>
      </div>
      <div id="collapseOne" class="collapse " data-parent="#accordionExample">
        <div class="card-body">
          <p>IT Lifecycle Management is a systematic approach to managing the entire
             lifespan of IT assets within an organization, from acquisition to retirement or disposal. </p>
        </div>
      </div>
    </div>

    <div class="card">
      <div class="card-header collapsed py-3" data-parent="#accordionExample" data-toggle="collapse"
        data-target="#collapseTwo" aria-expanded="true">
        <h6 class="fw-bold">Why is IT Lifecycle Management important?
        </h6>
        <div class="acoord-btn text-right mr-2">

        </div>
      </div>
      <div id="collapseTwo" class="collapse" data-parent="#accordionExample">
        <div class="card-body">
          <p>ITLM ensures efficient planning, deployment, maintenance, and retirement of IT
            assets, leading to cost savings, improved security, enhanced productivity, and strategic
            alignment with business goals.
</p>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample"
        data-target="#collapseThree" aria-expanded="true">
        <h6 class="fw-bold">What are the key stages of IT Lifecycle Management?</h6>
        <div class="acoord-btn text-right mr-2  pb-3">

        </div>
      </div>
      <div id="collapseThree" class="collapse" data-parent="#accordionExample">
        <div class="card-body">
          <p>The key stages include assessment, planning and strategy, procurement and deployment,
             maintenance and support, monitoring and optimization, retirement and
             replacement, and evaluation and feedback.</p>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample"
        data-target="#collapseFour" aria-expanded="true">
        <h6 class="fw-bold">How does ITLM help organizations save costs?
           </h6>
        <div class="acoord-btn text-right mr-2  pb-3">

        </div>
      </div>
      <div id="collapseFour" class="collapse" data-parent="#accordionExample">
        <div class="card-body">
          <p>ITLM helps organizations save costs by optimizing spending, extending the
             lifespan of IT assets, and avoiding unnecessary expenses through careful planning and maintenance.
          </p>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample"
        data-target="#collapseFive" aria-expanded="true">
        <h6 class="fw-bold">How does ITLM enhance security and compliance?</h6>
        <div class="acoord-btn text-right mr-2  pb-3">

        </div>
      </div>
      <div id="collapseFive" class="collapse" data-parent="#accordionExample">
        <div class="card-body">
          <p>ITLM enhances security and compliance by ensuring regular updates and maintenance
             of IT systems, minimizing vulnerabilities to cyber threats, and ensuring adherence
             to industry regulations.
          </p>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample"
        data-target="#collapseSix" aria-expanded="true">
        <h6 class="fw-bold">How does ITLM contribute to increased productivity?</h6>
        <div class="acoord-btn text-right mr-2  pb-3">

        </div>
      </div>
      <div id="collapseSix" class="collapse" data-parent="#accordionExample">
        <div class="card-body">
          <p>ITLM contributes to increased productivity by ensuring smooth functioning of
            technology, minimizing disruptions caused by technical issues, and allowing
            teams to focus on core tasks.
          </p>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample"
        data-target="#collapseSeven" aria-expanded="true">
        <h6 class="fw-bold">How does ITLM support adaptability and growth?</h6>
        <div class="acoord-btn text-right mr-2  pb-3">

        </div>
      </div>
      <div id="collapseSeven" class="collapse" data-parent="#accordionExample">
        <div class="card-body">
          <p>ITLM supports adaptability and growth by enabling scalable IT environments
             that can meet evolving business needs, facilitating seamless expansion and innovation.
          </p>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample"
        data-target="#collapseEight" aria-expanded="true">
        <h6 class="fw-bold">How does ITLM align with business objectives?</h6>
        <div class="acoord-btn text-right mr-2  pb-3">

        </div>
      </div>
      <div id="collapseEight" class="collapse" data-parent="#accordionExample">
        <div class="card-body">
          <p>ITLM aligns with business objectives by ensuring that technology supports and
             enhances overall business strategies, contributing to improved efficiency, performance, and success.
          </p>
        </div>
      </div>
    </div>
  </div>
@include('landing.components.get-in-touch')
</div>
</div>
@endsection
