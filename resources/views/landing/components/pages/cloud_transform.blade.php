@extends('landing.layouts.base')
@section('contents')
@php
$fragment = isset($_GET['fragment']) ? $_GET['fragment'] : '';
@endphp
@if($fragment == '')
$fragment = 'pills-home-tab';
@endif
<div class='navigationPane' style="position: absolute; top: 380px !important;" style="backround-color:black;">
  <ul class="nav flex-nowrap widthFitContent width200Percent mx-auto nav-pills align-items-center justify-content-center" id="pills-tab" role="tablist" style="margin-top:-4px;">
    <li class="nav-item">
      <span class="nav-link text-white py-1 px-4" style="font-weight:600; font-size:22px;">Professional IT Services</span>
    </li>


    <li class="nav-item" role="presentation">
      <span class="nav-link @if($fragment == 'pills-home-tab') active @endif text-white py-1 px-4" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="buttn" role="tab" aria-controls="pills-home" aria-selected="true">Cloud
        Transformation</span>
    </li IT Services>
    <li class="nav-item" role="presentation">
      <span class="nav-link @if($fragment == 'pills-profile-tab') active @endif text-white py-1 px-4" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">IT
        Lifecycle Management</span>
    </li>
    <li class="nav-item" role="presentation">
      <span class="nav-link @if($fragment == 'pills-contact-tab') active @endif text-white py-1 px-4" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">IT
        Security Audit</span>
    </li>

  </ul>
</div>

<!-- @include('landing.components.pie-service-header', ['title' => 'cloud']) -->

<div class="tab-content" id="pills-tabContent">

  <div class="tab-pane fade show @if($fragment == 'pills-home-tab') active @endif" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">

    <div class="carousel-inne">
      <div class="bannerImage">
        <img class="w-100 hFull" src="{{ asset('assets/img/service/cloud-data-storage-rack-concept-glass-cube-cloudscape-digital-metaverse-server-global-network-business-web-database-backup-computer-private-infrastructure-technology.jpg')}}" alt="Image">
        <div class="w-100 posAbs d-flex flex-column align-items-center justify-content-center">
          <div class="container">
            <div class="p-3 text-left">
              <p class='text-white text-center serviceBannerText'>Cloud <span class='txtYellow'> Transformation Services</span>
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
              <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/service/Cloud Transformation Services.png')}}">
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="position-relative pb-3">
              <h1 style="color:black;">Cloud <span class="text-primary">Transformation</span></h1>
            </div>
            <p class="mb-2 text-justify">Cloud transformation services are essential offerings that help businesses migrate their IT infrastructure, applications, and processes to cloud-based environments. These services typically involve a strategic approach to assess current IT landscapes, develop migration strategies, execute migrations, optimize cloud environments, and ensure security and compliance.</p>

            {{-- <a href="{{ route('about')}}" class="btn btn-dark rounded-pill py-3 px-5 mt-3 wow zoomIn"
            data-wow-delay="0.9s">Know More <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8" />
            </svg></a> --}}
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid offering py-5 bg-primary wow fadeInUp" data-wow-delay="0.2s">
      <div class="container offerings">
        <div class="text-center position-relative pb-3 mb-4 mx-auto">
          <h1 style="color:black;">Our <span class="text-primary"> Offerings</span></h1>
        </div>
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="row">
              <div class="col-md-2 col-sm-12">
                <img class="position-absolute wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/service/offering-1.png')}}">
              </div>
              <div class="col-md-10 col-sm-12">
                <h5 class="fw-bold">Cloud Migration Services</h5>
                <p class="text-justify">Our Cloud Migration Services provide seamless transition of workloads to the cloud, ensuring minimal downtime and disruption. With expert assessment, planning, and execution, we optimize your migration strategy for efficiency and success.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="row">
              <div class="col-md-2 ">
                <img class="position-absolute wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/service/offering-2.png')}}" width="50px;">
              </div>
              <div class="col-md-10">
                <h5 class="fw-bold">Cloud Application Modernization</h5>
                <p class="text-justify">Our Cloud Application Modernization service refactors legacy apps, embraces microservices, and utilizes serverless computing to enhance scalability and resilience. We empower your business with cutting-edge cloud-native architectures for agile, future-proof applications.
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="row">
              <div class="col-md-2">
                <img class="position-absolute wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/service/offering-3.png')}}" width="50px;">
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
                <img class="position-absolute wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/service/offering-4.png')}}" width="50px;">
              </div>
              <div class="col-md-10">
                <h5 class="fw-bold">DevOps and Continuous Integration/Continuous Deployment (CI/CD)</h5>
                <p class="text-justify">With our DevOps and CI/CD service, we automate processes, establish CI/CD pipelines, and implement Infrastructure as Code (IaC), enabling rapid deployment, scalability, and reliability of applications on the cloud, fostering a culture of continuous innovation.
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="row">
              <div class="col-md-2">
                <img class="position-absolute wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/service/offering-5.png')}}" width="50px;">
              </div>
              <div class="col-md-10">
                <h5 class="fw-bold">Cloud Managed Services</h5>
                <p class="text-justify"> Our Cloud Managed Services ensure 24/7 monitoring, patch management, and cost governance. With dedicated support and security measures, we optimize your cloud environment for reliability, security, and cost-effectiveness, allowing you to focus on your core business objectives.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12 mt-1">
            <div class="row">
              <div class="col-md-2 ">
                <img class="position-absolute wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/service/Automation.png')}}" width="50px;">
              </div>
              <div class="col-md-10">
                <h5 class="fw-bold">Cloud Security and Compliance</h5>
                <p class="text-justify">Security is paramount in the cloud, and we provide robust solutions to protect your data, applications, and infrastructure from cyber threats. We implement security best practices, encryption, access controls, and compliance measures to ensure your cloud environment remains secure and compliant with industry standards.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container my-5" style="">
      <h1 class="fs-1 text-center" style="color:black;">
        Our <span class="text-primary">Process</span>
      </h1>
      <!-- <div class="text-center fs-5" style="max-width: 800px; margin: auto">
        Explore simplified cloud solution acquisition and adaptable licensing
        options with IVT Technologies. Experience robust IT security,
        Azure Stack deployment expertise, and personalized cloud services
        consultation
      </div> -->
      <div class="row g-3 mt-5">
        <div class="col-lg-4 col-md-6 mt-3">
          <div class="card p-4" style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px">
            <img src="{{ asset('assets/img/service/cloud-trans-process/Assessment and Strategy Development.png')}}" class="card-img-top m-auto w-100 rounded-3  p-1 my-3" alt="azur-image" style="max-width: 70px" />
            <div class="card-body">
              <h5 class="card-title text-center fw-bold fs-5">
                Assessment and Strategy Development
              </h5>
              <p class="card-text">
                Our assessment phase evaluates current IT infrastructure and business goals. Strategy development tailors a migration plan aligning with objectives for efficient cloud transformation.
              </p>

            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-3">
          <div class="card p-4" style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px">
            <img src="{{ asset('assets/img/service/cloud-trans-process/Migration and Deployment.png')}}" class="card-img-top m-auto w-100 rounded-3  p-1 my-3" alt="azur-image" style="max-width: 70px" />
            <div class="card-body">
              <h5 class="card-title text-center fw-bold fs-5">
                Migration and Deployment
              </h5>
              <p class="card-text">
                Migration and deployment involve seamless transition of applications and data to the cloud, ensuring minimal disruption and optimizing performance, scalability, and cost-effectiveness for efficient cloud transformation.
              </p>

            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-3">
          <div class="card p-4" style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px">
            <img src="{{ asset('assets/img/service/cloud-trans-process/Optimization and Governance.png')}}" class="card-img-top m-auto w-100 rounded-3 p-1 my-3" alt="azur-image" style="max-width: 70px" />
            <div class="card-body">
              <h5 class="card-title text-center fw-bold fs-5">
                Optimization and Governance
              </h5>
              <p class="card-text">
                Optimization and governance ensure efficient resource utilization, cost management, and adherence to best practices in cloud environments, maximizing performance and maintaining security for successful cloud transformation.
              </p>

            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-3">
          <div class="card p-4" style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px">
            <img src="{{ asset('assets/img/service/cloud-trans-process/Security and Compliance.png')}}" class="card-img-top m-auto w-100 rounded-3  p-1 my-3" alt="azur-image" style="max-width: 70px" />
            <div class="card-body">
              <h5 class="card-title text-center fw-bold fs-5">
                Security and Compliance
              </h5>
              <p class="card-text">
                Security and compliance measures include encryption, access controls, and regulatory adherence to safeguard data and meet industry standards, ensuring the integrity and protection of cloud environments during transformation.
              </p>

            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-3">
          <div class="card p-4" style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px">
            <img src="{{ asset('assets/img/service/cloud-trans-process/Training and Change Management.png')}}" class="card-img-top m-auto w-100 rounded-3  p-1 my-3" alt="azur-image" style="max-width: 70px" />
            <div class="card-body">
              <h5 class="card-title text-center fw-bold fs-5">
                Training and Change Management
              </h5>
              <p class="card-text">
                Training and change management programs equip teams with the skills needed to embrace cloud technologies, fostering a culture of innovation and ensuring smooth adoption throughout the transformation process.
              </p>

            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-3">
          <div class="card p-4" style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px">
            <img src="{{ asset('assets\img\service\cloud-trans-process\Continuous Support and Optimization.png')}}" class="card-img-top m-auto w-100 rounded-3  p-1 my-3" alt="azur-image" style="max-width: 70px" />
            <div class="card-body">
              <h5 class="card-title text-center fw-bold fs-5">
                Continuous Improvement
              </h5>
              <p class="card-text">
                We believe in continuous improvement and innovation. We regularly review and refine our processes, leveraging feedback from stakeholders and industry best practices to drive continuous evolution and excellence in our cloud transformation services. </p>

            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="col-lg-12 my-5 mb-5" style="min-height: 600px">
      <div class="row mb-5">
        <div class="col-lg-4 col-md-4 col-sm-12">
          <div class="container-fluid py-4 wow fadeInUp bg-primary" data-wow-delay="0.4s">
            <div class="container">
              <div class="position-relative pb-3 mb-4 mx-auto">
                <h4 class="text-left">Key features of <span class="text-primary">Cloud Transformation Services</span></h4>
                <ul style="list-style-type:circle; margin-left:-26px;">
                  <li>Cloud Migration Strategy</li>
                  <li>Automated Migration Tools and Processes</li>
                  <li> DevOps and Continuous Delivery</li>
                  <li>Container Orchestration and Management</li>
                  <li>Security by Design</li>
                  <li>Performance Optimization and Monitoring</li>
                </ul>
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
                        <img class="img-fluid w-50 h-50 p-5" src="{{ asset('assets/img/service/offering-2.png')}}" alt="">
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
                        <img class="img-fluid w-50 p-5" src="{{ asset('assets/img/service/offering-3.png')}}" alt="">
                      </div>
                      <div class="text-center py-4">
                        <h5 class="fw-bold">Automated Migration Tools and Processes</h5>
                        <p class="mx-3 text-center m-0 my-3">Cloud transformation services utilizes automated tools and processes to streamline the migration of workloads to the cloud.</p>

                      </div>
                    </div>
                  </div>
                </div>

                <div class="mr-4 wow slideInUp" data-wow-delay="0.3s">
                  <div class="wow slideInUp mx-2" data-wow-delay="0.3s">
                    <div class="ser-feature-card  bg-light overflow-hidden">
                      <div class="team-img position-relative overflow-hidden d-flex justify-content-center">
                        <img class="img-fluid w-50 p-5" src="{{ asset('assets/img/service/offering-4.png')}}" alt="">
                      </div>
                      <div class="text-center py-4">
                        <h5 class="fw-bold">DevOps and Continuous Delivery</h5>
                        <p class="mx-3 text-center m-0 my-3"> DevOps practices involves integrating development, operations, and quality assurance processes to enable faster and more reliable software delivery.</p>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="mr-4 wow slideInUp" data-wow-delay="0.2s">
                  <div class="wow slideInUp mx-2" data-wow-delay="0.3s">
                    <div class="ser-feature-card  bg-light overflow-hidden">
                      <div class="team-img position-relative overflow-hidden d-flex justify-content-center">
                        <img class="img-fluid w-50 p-5" src="{{ asset('assets/img/service/offering-5.png')}}" alt="">
                      </div>
                      <div class="text-center py-4">
                        <h5 class="fw-bold">Container Orchestration and Management</h5>
                        <p class="mx-3 text-center m-0 my-3">Container orchestration and management facilitates the deployment, scaling, and management of containerized applications.
                        </p>

                      </div>
                    </div>
                  </div>
                </div>
                <div class="mr-4 wow slideInUp" data-wow-delay="0.2s">
                  <div class="wow slideInUp mx-2" data-wow-delay="0.3s">
                    <div class="ser-feature-card  bg-light overflow-hidden">
                      <div class="team-img position-relative overflow-hidden d-flex justify-content-center">
                        <img class="img-fluid w-50 p-5" src="{{ asset('assets/img/service/offering-1.png')}}" alt="">
                      </div>
                      <div class="text-center py-4">
                        <h5 class="fw-bold">Performance Optimization and Monitoring</h5>
                        <p class="mx-3 text-center m-0 my-3">Cloud transformation services ensures that applications perform optimally in the cloud environment with performance optimization.</p>

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
        <b>Benefits of <span style="color:#F19F1F;">Cloud Transformation</span></b>
      </p>

      <div class="row g-5 mt-5 py-12">
        <div class="col-lg-4 col-md-6 mt-4">
          <div class="card p-5" style="background-color: #ECECEC">
            <div class="card-image" style="background-color: #F19F1F">
              <img src="{{ asset('assets/img/Continuous Improvement.png')}}" class="card-img-top m-auto w-100 rounded-3 py-4 px-3 my-1" alt="azur-image" style="max-width: 80px" />
              <div class="triangle-up"></div>
            </div>
            <div class="card-body">
              <h5 class="card-title fw-bold fs-3 mt-3">
                Data Management and Analytics
              </h5>
              <p class="card-text fs-6">
                Cloud platforms provide robust data management features, enabling storage, processing, and analytics. With big data tools, organizations gain insights for informed decision-making.
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
                Cost Efficiency
              </h5>
              <p class="card-text fs-6">
                By migrating to the cloud, organizations can reduce their capital expenditures on hardware and maintenance. Cloud services typically operate on a pay-as-you-go model, allowing businesses to only pay for the resources they consume.
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-4">
          <div class="card p-5" style="background-color: #ECECEC">
            <div class="card-image" style="background-color: #F19F1F">
              <img src="{{ asset('assets/img/Maintenance and Support.png')}}" class="card-img-top m-auto w-100 rounded-3 py-4 px-3 my-1" alt="azur-image" style="max-width: 80px" />
              <div class="triangle-up"></div>
            </div>
            <div class="card-body">
              <h5 class="card-title fw-bold fs-3 mt-3">
                Enhanced Security
              </h5>
              <p class="card-text fs-6">
                Cloud providers offer top-notch security, surpassing on-premises capabilities. Transformation services include robust encryption, threat detection, and compliance certifications for data protection.
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-4">
          <div class="card text-light p-5" style="background-color: #F19F1F">
            <div class="card-image" style="background-color: #ECECEC">
              <img src="{{ asset('assets/img/Retirement and Replacement.png')}}" class="card-img-top m-auto w-100 rounded-3 py-4 px-3 my-1" alt="azur-image" style="max-width: 80px" />
              <div class="triangle-up"></div>
            </div>
            <div class="card-body">
              <h5 class="card-title fw-bold fs-3 mt-3">
                Hybrid Cloud Solutions
              </h5>
              <p class="card-text fs-6">
                Cloud transformation facilitates seamless integration of on-premises and cloud infrastructure, offering scalability and innovation while leveraging existing investments.
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-4">
          <div class="card p-5" style="background-color: #ECECEC">
            <div class="card-image" style="background-color: #F19F1F">
              <img src="{{ asset('assets/img/Monitoring and Optimization.png')}}" class="card-img-top m-auto w-100 rounded-3 py-4 px-3 my-1" alt="azur-image" style="max-width: 80px" />
              <div class="triangle-up"></div>
            </div>
            <div class="card-body">
              <h5 class="card-title fw-bold fs-3 mt-3">
                Automation and DevOps Integration
              </h5>
              <p class="card-text fs-6">
                Cloud transformation services automate tasks like provisioning, deployment, and monitoring, integrating with DevOps for faster software delivery through collaboration.
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-4">
          <div class="card text-light p-5" style="background-color: #F19F1F">
            <div class="card-image" style="background-color: #ECECEC">
              <img src="{{ asset('assets/img/Migration and Deployment.png')}}" class="card-img-top m-auto w-100 rounded-3 py-4 px-3 my-1" alt="azur-image" style="max-width: 80px" />
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
    <div class="container my-5 ">
      <div class="d-flex flex-column align-items-center justify-content-center py-2 pb-2">
        <h4 class="fw-bold text-primary">FAQ</h4>
      </div>

      <div class="accordion feature-faq feature__feq" id="accordionExample">
        <div class="card">
          <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample" data-target="#collapseOne" aria-expanded="true">
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
          <div class="card-header collapsed py-3" data-parent="#accordionExample" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true">
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
          <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample" data-target="#collapseThree" aria-expanded="true">
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
          <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample" data-target="#collapseFour" aria-expanded="true">
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
          <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample" data-target="#collapseFive" aria-expanded="true">
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
          <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample" data-target="#collapseSix" aria-expanded="true">
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
          <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample" data-target="#collapseSeven" aria-expanded="true">
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
          <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample" data-target="#collapseEight" aria-expanded="true">
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
          <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample" data-target="#collapseNine" aria-expanded="true">
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
          <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample" data-target="#collapseTen" aria-expanded="true">
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
  <div class="tab-pane fade show @if($fragment == 'pills-contact-tab') active @endif" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">

    <div class="carousel-inne">
      <div class="bannerImage">
        <img class="w-100 hFull" src="{{ asset('assets/img/service/standard-quality-control-concept-m (1).jpg')}}" alt="Image">
        <div class="w-100 posAbs d-flex flex-column align-items-center justify-content-center">
          <div class="container">
            <div class="p-3 text-left">
              <p class='text-white text-center serviceBannerText'>IT Security<span class='txtYellow'> Audit Services </span>
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
              <h1 style="color:black;">IT Security <span class="text-primary">Audit</span></h1>
            </div>
            <p class="mb-2 text-justify">Our IT security audit services involve assessing an organization's information technology infrastructure, systems, policies, and procedures to identify vulnerabilities, assess risks, and ensure compliance with relevant regulations and industry standards. These audits are crucial for ensuring the confidentiality, integrity, and availability of sensitive data and critical systems.
            </p>

            {{-- <a href="{{ route('about')}}" class="btn btn-dark rounded-pill py-3 px-5 mt-3 wow zoomIn"
            data-wow-delay="0.9s">Know More <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8" />
            </svg></a> --}}
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid py-5 bg-primary offering wow fadeInUp" data-wow-delay="0.2s">
      <div class="container">
        <div class="text-center position-relative pb-3 mb-4 mx-auto">
          <h1 style="color:black;">Our <span class="text-primary"> Offerings</span></h1>
        </div>
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="row">
              <div class="col-md-2">
                <img class="position-absolute wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/service/Risk Assessment.png')}}">
              </div>
              <div class="col-md-10">
                <h5 class="fw-bold">Risk Assessment</h5>
                <p class="text-justify">We employ a systematic approach to identify, analyze, and prioritize potential threats and vulnerabilities. By evaluating the impact and likelihood of each risk, we provide comprehensive insights to safeguard our clients' assets and operations.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="row">
              <div class="col-md-2 ">
                <img class="position-absolute wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/service/Device Management.png')}}" width="50px;">
              </div>
              <div class="col-md-10">
                <h5 class="fw-bold">Device Management</h5>
                <p class="text-justify">We oversee device configuration, patching, and monitoring to mitigate vulnerabilities and ensure compliance. By implementing centralized control and proactive measures, we safeguard client networks from potential security breaches and maintain optimal performance.
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="row">
              <div class="col-md-2">
                <img class="position-absolute wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/service/Identity and Access Management.png')}}" width="50px;">
              </div>
              <div class="col-md-10">
                <h5 class="fw-bold">Identity and Access Management</h5>
                <p class="text-justify">Our IT security audit services include rigorous identity and access management (IAM). We enforce secure user authentication and privilege management, reducing the risk of unauthorized access and enhancing overall system security for our clients.
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="row">
              <div class="col-md-2 ">
                <img class="position-absolute wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/service/Network Security Management.png')}}" width="50px;">
              </div>
              <div class="col-md-10">
                <h5 class="fw-bold">Network Security Management</h5>
                <p class="text-justify"> Our IT security audit services incorporate robust network security management. We analyze network configurations, monitor traffic, and implement firewalls and intrusion detection systems to safeguard against cyber threats and ensure the integrity of client networks.
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="row">
              <div class="col-md-2">
                <img class="position-absolute wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/service/Third Party Risk Management.png')}}" width="50px;">
              </div>
              <div class="col-md-10">
                <h5 class="fw-bold">Third Party Risk Management</h5>
                <p class="text-justify">Our IT security audit services include thorough third-party risk management. We assess vendor relationships, evaluate security controls, and mitigate risks associated with third-party access to safeguard our clients' data and systems from potential breaches.
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="row">
              <div class="col-md-2 ">
                <img class="position-absolute wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/service/Data Protection and GDPR.png')}}" width="50px;">
              </div>
              <div class="col-md-10">
                <h5 class="fw-bold">Data Protection and GDPR</h5>
                <p class="text-justify">Our IT security audit services include robust data protection and GDPR compliance measures. We assess data handling practices, ensure encryption, and implement GDPR requirements to safeguard client data, minimize risks, and maintain regulatory compliance.
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container my-5" style="">
      <h1 class="fs-1 text-center" style="color:black;">
        Our <span class="text-primary">Process</span>
      </h1>

      <div class="row g-3 mt-5">

        <div class="col-lg-4 col-md-6 mt-3">
          <div class="card p-4" style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px">
            <img src="{{ asset('assets/img/service/cloud-trans-process/Audit Planning.png')}}" class="card-img-top m-auto w-100 rounded-3  p-1 my-3" alt="azur-image" style="max-width: 70px" />
            <div class="card-body">
              <h5 class="card-title text-center fw-bold fs-5">
                Audit Planning
              </h5>
              <p class="card-text">
                Our qualified team conducts a risk assessment to identify potential threats, vulnerabilities, and risks to develop a detailed audit plan outlining objectives, methodologies, testing procedures, and timelines and communicate the audit plan to key stakeholders and obtain approval.
              </p>

            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-3">
          <div class="card p-4" style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px">
            <img src="{{ asset('assets/img/service/cloud-trans-process/Identity and Access Management (IAM) Audit.png')}}" class="card-img-top m-auto w-100 rounded-3 p-1 my-3" alt="azur-image" style="max-width: 70px" />
            <div class="card-body">
              <h5 class="card-title text-center fw-bold fs-5">
                Identity and Access Management (IAM) Audit
              </h5>
              <p class="card-text">
                Our team reviews IAM policies, procedures, and controls for user authentication and authorization to assess the effectiveness of access controls, user provisioning, and privileged access management. Evaluate compliance with IAM best practices and regulatory requirements.
              </p>

            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-3">
          <div class="card p-4" style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px">
            <img src="{{ asset('assets/img/service/cloud-trans-process/Security and Compliance.png')}}" class="card-img-top m-auto w-100 rounded-3  p-1 my-3" alt="azur-image" style="max-width: 70px" />
            <div class="card-body">
              <h5 class="card-title text-center fw-bold fs-5">
                Device Management Audit
              </h5>
              <p class="card-text">
                Our team evaluates security measures for hardware devices like computers, servers, mobile devices and IoT devices. We review device inventory, asset management configuration practices to assess endpoint security, mobile device management, IoT device security.
              </p>

            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-3">
          <div class="card p-4" style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px">
            <img src="{{ asset('assets/img/service/cloud-trans-process/Third-Party Risk Management Audit.png')}}" class="card-img-top m-auto w-100 rounded-3  p-1 my-3" alt="azur-image" style="max-width: 70px" />
            <div class="card-body">
              <h5 class="card-title text-center fw-bold fs-5">
                Third-Party Risk Management Audit
              </h5>
              <p class="card-text">
                Our IT Audit Security team evaluates vendor management processes, including selection, due diligence, and contract reviews, to assess vendor risk assessments and data protection measures. We also review contractual agreements with third-party vendors.
              </p>

            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-3">
          <div class="card p-4" style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px">
            <img src="{{ asset('assets/img/service/cloud-trans-process/Data Protection and GDPR Compliance Audit.png')}}" class="card-img-top m-auto w-100 rounded-3  p-1 my-3" alt="azur-image" style="max-width: 70px" />
            <div class="card-body">
              <h5 class="card-title text-center fw-bold fs-5">
                Data Protection and GDPR Compliance Audit
              </h5>
              <p class="card-text">
                Our IT Security team conducts comprehensive vendor management assessments and GDPR compliance reviews. This includes evaluating data protection policies, conducting data inventory exercises, and assessing mechanisms for consent, data subject rights, and security measures.
              </p>

            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-3">
          <div class="card p-4" style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px">
            <img src="{{ asset('assets/img/service/cloud-trans-process/Network Security Management Audit.png')}}" class="card-img-top m-auto w-100 rounded-3  p-1 my-3" alt="azur-image" style="max-width: 70px" />
            <div class="card-body">
              <h5 class="card-title text-center fw-bold fs-5">
                Network Security Management Audit
              </h5>
              <p class="card-text">
                Our team assesses network architecture, segmentation, and perimeter security controls, including firewall configurations and intrusion detection/prevention systems. We also evaluate network device security, VPN configurations, and DoS protection mechanisms.
              </p>

            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="col-lg-12 my-5 mb-5" style="min-height: 600px">
      <div class="row mb-5">
        <div class="col-lg-4 col-md-4 col-sm-12">
          <div class="container-fluid py-4 wow fadeInUp bg-primary" data-wow-delay="0.4s">
            <div class="container">
              <div class="position-relative pb-3 mb-4 mx-auto">
                <h4 class="text-left">Key features of <span class="text-left text-primary">IT Security Audit</span></h4>
                <ul style="list-style-type:circle; margin-left:-26px;">
                  <li>Comprehensive Risk Assessment</li>
                  <li>Regulatory Compliance Evaluation</li>
                  <li>Network and Infrastructure Assessment</li>
                  <li>Application Security Testing</li>
                  <li>Security Policy Review</li>
                  <li>Incident Response Planning</li>
                </ul>
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
                        <img class="img-fluid w-50 h-50 p-5" src="{{ asset('assets/img/service/offering-2.png')}}" alt="">
                      </div>
                      <div class="text-center py-4">
                        <h5 class="fw-bold">Comprehensive Risk Assessment</h5>
                        <p class="mx-3 text-center m-0 my-3">Identify threats, assess vulnerabilities, determine risks, prioritize areas for improvement.
                           </p>

                      </div>
                    </div>
                  </div>
                </div>
                <div class="mr-4 wow slideInUp" data-wow-delay="0.2s">
                  <div class="wow slideInUp mx-2" data-wow-delay="0.3s">
                    <div class="ser-feature-card  bg-light overflow-hidden">
                      <div class="team-img position-relative overflow-hidden d-flex justify-content-center">
                        <img class="img-fluid w-50 p-5" src="{{ asset('assets/img/service/offering-3.png')}}" alt="">
                      </div>
                      <div class="text-center py-4">
                        <h5 class="fw-bold">Regulatory Compliance Evaluation</h5>
                        <p class="mx-3 text-center m-0 my-3">Ensure adherence to GDPR, HIPAA, PCI DSS, SOX, and other regulations.</p>

                      </div>
                    </div>
                  </div>
                </div>

                <div class="mr-4 wow slideInUp" data-wow-delay="0.3s">
                  <div class="wow slideInUp mx-2" data-wow-delay="0.3s">
                    <div class="ser-feature-card  bg-light overflow-hidden">
                      <div class="team-img position-relative overflow-hidden d-flex justify-content-center">
                        <img class="img-fluid w-50 p-5" src="{{ asset('assets/img/service/offering-4.png')}}" alt="">
                      </div>
                      <div class="text-center py-4">
                        <h5 class="fw-bold">Cost Savings</h5>
                        <p class="mx-3 text-center m-0 my-3">Our Team identifying and addressing security risks early on, audits help prevent potential security incidents and data breaches, saving the organization from costly remediation efforts.</p>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="mr-4 wow slideInUp" data-wow-delay="0.2s">
                  <div class="wow slideInUp mx-2" data-wow-delay="0.3s">
                    <div class="ser-feature-card  bg-light overflow-hidden">
                      <div class="team-img position-relative overflow-hidden d-flex justify-content-center">
                        <img class="img-fluid w-50 p-5" src="{{ asset('assets/img/service/offering-5.png')}}" alt="">
                      </div>
                      <div class="text-center py-4">
                        <h5 class="fw-bold">Network and Infrastructure Assessment</h5>
                        <p class="mx-3 text-center m-0 my-3">Analyze routers, firewalls, servers, access controls for vulnerabilities and configurations.

                      </div>
                    </div>
                  </div>
                </div>
                <div class="mr-4 wow slideInUp" data-wow-delay="0.2s">
                  <div class="wow slideInUp mx-2" data-wow-delay="0.3s">
                    <div class="ser-feature-card  bg-light overflow-hidden">
                      <div class="team-img position-relative overflow-hidden d-flex justify-content-center">
                        <img class="img-fluid w-50 p-5" src="{{ asset('assets/img/service/offering-1.png')}}" alt="">
                      </div>
                      <div class="text-center py-4">
                        <h5 class="fw-bold">Application Security Testing</h5>
                        <p class="mx-3 text-center m-0 my-3">Penetration testing, code reviews, and vulnerability assessments for application security.</p>

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
        <b>Benefits of <span style="color:#F19F1F;">IT Security Audit</span></b>
      </p>
      <div class="row g-5 mt-5 py-12">
        <div class="col-lg-4 col-md-6 mt-4">
          <div class="card p-5" style="background-color: #ECECEC">
            <div class="card-image" style="background-color: #F19F1F">
              <img src="{{ asset('assets/img/Continuous Support and Optimization.png')}}" class="card-img-top m-auto w-100 rounded-3 py-4 px-3 my-1" alt="azur-image" style="max-width: 80px" />
              <div class="triangle-up"></div>
            </div>
            <div class="card-body">
              <h5 class="card-title fw-bold fs-3 mt-3">
                Risk Identification and Mitigation
              </h5>
              <p class="card-text fs-6">
                Our audits help identify security risks, vulnerabilities, and gaps in the organization's IT infrastructure, allowing for proactive risk mitigation measures to be implemented.
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
                Prevention of Data Breaches
              </h5>
              <p class="card-text fs-6">
                Our audits help identify weaknesses in data protection measures, enabling the organization to implement safeguards to prevent data breaches and protect sensitive information.
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
                Cost Savings
              </h5>
              <p class="card-text fs-6">
                Our Team identifying and addressing security risks early on, audits help prevent potential security incidents and data breaches, saving the organization from costly remediation efforts.
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
                Improved Incident Response Readiness
              </h5>
              <p class="card-text fs-6">
                Our audits assess the organization's incident response plans, procedures, and capabilities, ensuring that it is prepared to detect, respond to, and recover from security incidents effectively.
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
                Competitive Advantage
              </h5>
              <p class="card-text fs-6">
                Our regular security audits demonstrate a proactive approach to security, which can provide a competitive advantage in the marketplace and enhance customer trust and loyalty.
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-4">
          <div class="card text-light p-5" style="background-color: #F19F1F">
            <div class="card-image" style="background-color: #ECECEC">
              <img src="{{ asset('assets/img/Maintenance and Support.png')}}" class="card-img-top m-auto w-100 rounded-3 py-4 px-3 my-1" alt="azur-image" style="max-width: 80px" />
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
      </div>
    </div>
    <div class="container my-5 ">
      <div class="d-flex flex-column align-items-center justify-content-center py-2 pb-2">
        <h4 class="fw-bold text-primary">FAQ</h4>
      </div>

      <div class="accordion feature-faq feature__feq" id="accordionExample">
        <div class="card">
          <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample" data-target="#collapseOne" aria-expanded="true">
            <h6 class="fw-bold">What is an IT Security Audit ? </h6>
            <div class="acoord-btn text-right mr-2">

            </div>
          </div>
          <div id="collapseOne" class="collapse " data-parent="#accordionExample">
            <div class="card-body">
              <p>An IT security audit is a systematic evaluation of an organization's IT infrastructure, systems, policies, and controls to identify security risks, vulnerabilities, and compliance gaps. It aims to assess the effectiveness of security measures and ensure alignment with industry standards and regulatory requirements.</p>
            </div>
          </div>
        </div>

        <div class="card">
          <div class="card-header collapsed py-3" data-parent="#accordionExample" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true">
            <h6 class="fw-bold">What are the Objectives of IT Security Audit ?
            </h6>
            <div class="acoord-btn text-right mr-2">

            </div>
          </div>
          <div id="collapseTwo" class="collapse" data-parent="#accordionExample">
            <div class="card-body">
              <p>Where conducting an IT security audit helps organizations find and assess the vulnerabilities existing within their IT networks, connected devices, and applications. It gives you the opportunity to fix security loopholes and achieve compliance.
              </p>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample" data-target="#collapseThree" aria-expanded="true">
            <h6 class="fw-bold">How often should an organization conduct an IT security audit?
            </h6>
            <div class="acoord-btn text-right mr-2  pb-3">

            </div>
          </div>
          <div id="collapseThree" class="collapse" data-parent="#accordionExample">
            <div class="card-body">
              <p>The Process of IT security audit testing whether your organization's information systems are adhering to a set of internal or external criteria regulating data security, network security, and infrastructure security.</p>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample" data-target="#collapseFour" aria-expanded="true">
            <h6 class="fw-bold"> What are the deliverables of an IT security audit ?
               </h6>
            <div class="acoord-btn text-right mr-2  pb-3">

            </div>
          </div>
          <div id="collapseFour" class="collapse" data-parent="#accordionExample">
            <div class="card-body">
              <p>The deliverables of an IT security audit usually include an audit report summarizing findings, observations, and recommendations, documentation of audit procedures and evidence, executive summaries for management and key stakeholders, and presentations or briefings to communicate audit results.</p>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample" data-target="#collapseFive" aria-expanded="true">
            <h6 class="fw-bold"> How can organizations benefit from IT security audit services?</h6>
            <div class="acoord-btn text-right mr-2  pb-3">

            </div>
          </div>
          <div id="collapseFive" class="collapse" data-parent="#accordionExample">
            <div class="card-body">
              <p>They can help organizations identify vulnerabilities in their systems, processes, and policies. Audits can assess the security posture of an organization and help identify areas where improvements are needed.</p>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample" data-target="#collapseSix" aria-expanded="true">
            <h6 class="fw-bold">What areas does an IT security audit cover?</h6>
            <div class="acoord-btn text-right mr-2  pb-3">

            </div>
          </div>
          <div id="collapseSix" class="collapse" data-parent="#accordionExample">
            <div class="card-body">
              <p>An IT security audit typically covers various areas, including network security, endpoint security, access controls, identity and access management (IAM), data protection, compliance with regulatory requirements (such as GDPR, HIPAA, PCI DSS), incident response readiness, vendor risk management, and security awareness training.</p>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample" data-target="#collapseSeven" aria-expanded="true">
            <h6 class="fw-bold"> Why is an IT security audit important?
            </h6>
            <div class="acoord-btn text-right mr-2  pb-3">

            </div>
          </div>
          <div id="collapseSeven" class="collapse" data-parent="#accordionExample">
            <div class="card-body">
              <p>An IT security audit is important for identifying and addressing security risks, ensuring compliance with regulatory requirements, and strengthening the organization's overall security posture. It helps prevent data breaches, mitigate cyber threats, and protect sensitive information from unauthorized access or disclosure.
              </p>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample" data-target="#collapseEight" aria-expanded="true">
            <h6 class="fw-bold"> What are the benefits of IT security audit service?
            </h6>
            <div class="acoord-btn text-right mr-2  pb-3">

            </div>
          </div>
          <div id="collapseEight" class="collapse" data-parent="#accordionExample">
            <div class="card-body">
              <p>IT security audit services offer numerous benefits, including enhanced security posture, regulatory compliance assurance, effective risk mitigation, improved incident response readiness, data protection and privacy compliance.
              </p>
            </div>
          </div>
        </div>



      </div>
    </div>

    @include('landing.components.get-in-touch')

  </div>
  <div class="tab-pane fade show @if($fragment == 'pills-profile-tab') active @endif" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">

    <div class="carousel-inne">
      <div class="bannerImage">
        <img class="w-100 hFull" src="{{ asset('assets/img/service/service-po-1.jpg')}}" alt="Image">
        <div class="w-100 posAbs d-flex flex-column align-items-center justify-content-center">
          <div class="container">
            <div class="p-3 text-left">
              <p class='text-white text-center serviceBannerText'>IT Lifecycle
                <span class='txtYellow'> Management Services</span>
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
              <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/service/IT Lifecycle Management Services.png')}}">
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="position-relative pb-3">
              <h1 style="color:black;">IT Lifecycle <span class="text-primary"> Management</span></h1>
            </div>
            <p class="mb-2 text-justify">Our IT Lifecycle Management solution streamlines asset discovery,
              configuration management, change control, and performance monitoring.
              It optimizes IT operations, ensures compliance, and reduces costs throughout
              the lifecycle of IT assets.</p>

            {{-- <a href="{{ route('about')}}" class="btn btn-dark rounded-pill py-3 px-5 mt-3 wow zoomIn"
            data-wow-delay="0.9s">Know More <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8" />
            </svg></a> --}}
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid py-5 bg-primary offering wow fadeInUp" data-wow-delay="0.2s">
      <div class="container">
        <div class="text-center position-relative pb-3 mb-4 mx-auto">
          <h1 style="color:black;">Our <span class="text-primary"> Offerings</span></h1>
        </div>
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="row">
              <div class="col-md-2">
                <img class="position-absolute wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/service/Asset Discovery and Inventory.png')}}">
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
                <img class="position-absolute wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/service/Configuration Management.png')}}">
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
                <img class="position-absolute wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/service/Change Management.png')}}">
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
                <img class="position-absolute wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/service/Incident and Problem Management.png')}}">
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
                <img class="position-absolute wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/service/Patch Management.png')}}">
              </div>
              <div class="col-md-10">
                <h5 class="fw-bold">Patch Management</h5>
                <p class="text-justify"> Automates the deployment of security patches and updates across
                  the IT infrastructure. Ensures systems are up-to-date and protected against
                  vulnerabilities, reducing the risk of cyber threats.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="row">
              <div class="col-md-2 ">
                <img class="position-absolute wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/service/Asset Lifecycle Tracking.png')}}">
              </div>
              <div class="col-md-10">
                <h5 class="fw-bold">Asset Lifecycle Tracking</h5>
                <p class="text-justify">Manages the entire lifecycle of IT assets from procurement to
                  retirement. Optimizes asset utilization, tracks warranty and support contracts,
                  and facilitates end-of-life disposal in compliance with environmental regulations.</p>
              </div>
            </div>
          </div>

        </div>




      </div>
    </div>

    <div class="container-fluid py-4 wow fadeInUp" data-wow-delay="0.4s">
      <div class="container">
        <div class="text-center position-relative mx-auto">
          <h1 style="color:black;">Our <span class="text-primary">Process</span></h1>
        </div>

        <div class="row g-3 mt-5">
          <div class="col-lg-4 col-md-6 mt-3">
            <div class="card p-4" style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px">
              <img src="{{ asset('assets/img/service/cloud-trans-process/Assessment.png')}}" class="card-img-top m-auto w-100 rounded-3  p-1 my-3" alt="azur-image" style="max-width: 70px" />
              <div class="card-body">
                <h5 class="card-title text-center fw-bolder fs-5">
                  Assessment
                </h5>
                <p class="card-text">
                  We conduct a comprehensive evaluation of your organization's existing IT infrastructure to pinpoint specific needs and challenges.
                </p>

              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-3">
            <div class="card p-4" style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px">
              <img src="{{ asset('assets/img/service/cloud-trans-process/Planning and Strategy.png')}}" class="card-img-top m-auto w-100 rounded-3  p-1 my-3" alt="azur-image" style="max-width: 70px" />
              <div class="card-body">
                <h5 class="card-title text-center fw-bolder fs-5">
                  Planning and Strategy
                </h5>
                <p class="card-text">
                  Based on the assessment results, we formulate a tailored plan and strategy to effectively manage the IT lifecycle, aligning with your business objectives.
                </p>

              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-3">
            <div class="card p-4" style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px">
              <img src="{{ asset('assets/img/service/cloud-trans-process/Procurement and Deployment.png')}}" class="card-img-top m-auto w-100 rounded-3 p-1 my-3" alt="azur-image" style="max-width: 70px" />
              <div class="card-body">
                <h5 class="card-title text-center fw-bolder fs-5">
                  Procurement and Deployment
                </h5>
                <p class="card-text">
                  Our team assists in the procurement of essential hardware and software, ensuring efficient deployment and integration within your organization.
                </p>

              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-3">
            <div class="card p-4" style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px">
              <img src="{{ asset('assets/img/service/cloud-trans-process/Maintenance and Support.png')}}" class="card-img-top m-auto w-100 rounded-3  p-1 my-3" alt="azur-image" style="max-width: 70px" />
              <div class="card-body">
                <h5 class="card-title text-center fw-bolder fs-5">
                  Maintenance and Support
                </h5>
                <p class="card-text">
                  We provide ongoing maintenance and technical support to guarantee the smooth functioning of your IT systems and promptly address any issues that arise.
                </p>

              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-3">
            <div class="card p-4" style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px">
              <img src="{{ asset('assets/img/service/cloud-trans-process/Monitoring and Optimization.png')}}" class="card-img-top m-auto w-100 rounded-3  p-1 my-3" alt="azur-image" style="max-width: 70px" />
              <div class="card-body">
                <h5 class="card-title text-center fw-bolder fs-5">
                  Monitoring and Optimization
                </h5>
                <p class="card-text">
                  Continuously monitoring your IT systems, we identify areas for improvement and optimize performance to enhance overall efficiency.
                </p>

              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-3">
            <div class="card p-4" style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px">
              <img src="{{ asset('assets/img/service/cloud-trans-process/Retirement and Replacement.png')}}" class="card-img-top m-auto w-100 rounded-3  p-1 my-3" alt="azur-image" style="max-width: 70px" />
              <div class="card-body">
                <h5 class="card-title text-center fw-bolder fs-5">
                  Retirement and Replacement
                </h5>
                <p class="card-text">
                  When necessary, we manage the retirement or replacement of outdated IT assets, ensuring compliance with regulations and minimizing disruptions.
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
          <div class="container-fluid py-4 wow fadeInUp bg-primary" data-wow-delay="0.4s">
            <div class="container">
              <div class="position-relative pb-3 mb-4 mx-auto">
                <h4 class="text-left ">Key Features of <span class="text-primary">IT Lifecycle Management Services</span></h4>

                <ul>
                  <li>Asset discovery and inventory</li>
                  <li>Procurement and Vendor Management</li>
                  <li>service/offering-1.png</li>
                  <li>Performance Monitoring and Optimization</li>
                  <li>Security and Compliance Management</li>
                  <li>End-of-Life and Decommissioning Services</li>
                </ul>
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
                        <img class="img-fluid w-50 h-50 p-5" src="{{ asset('assets/img/service/offering-5.png')}}" alt="">
                      </div>
                      <div class="text-center py-4">
                        <h5 class="fw-bold">Asset Discovery and Inventory Management</h5>
                        <p class="mx-3 text-center m-0 my-3">Automated asset discovery, inventory management, and optimization for an efficient IT lifecycle.
                        </p>

                      </div>
                    </div>
                  </div>
                </div>
                <div class="mr-4 wow slideInUp" data-wow-delay="0.2s">
                  <div class="wow slideInUp mx-2" data-wow-delay="0.3s">
                    <div class="ser-feature-card  bg-light overflow-hidden">
                      <div class="team-img position-relative overflow-hidden d-flex justify-content-center">
                        <img class="img-fluid w-50 p-5" src="{{ asset('assets/img/service/offering-4.png')}}" alt="">
                      </div>
                      <div class="text-center py-4">
                        <h5 class="fw-bold">Procurement and Vendor Management</h5>
                        <p class="mx-3 text-center m-0 my-3">Efficient procurement, vendor selection, and management ensure cost-effective IT lifecycle operations.
                        </p>

                      </div>
                    </div>
                  </div>
                </div>

                <div class="mr-4 wow slideInUp" data-wow-delay="0.3s">
                  <div class="wow slideInUp mx-2" data-wow-delay="0.3s">
                    <div class="ser-feature-card  bg-light overflow-hidden">
                      <div class="team-img position-relative overflow-hidden d-flex justify-content-center">
                        <img class="img-fluid w-50 p-5" src="{{ asset('assets/img/service/offering-3.png')}}" alt="">
                      </div>
                      <div class="text-center py-4">
                        <h5 class="fw-bold">Configuration and Deployment Automation</h5>
                        <p class="mx-3 text-center m-0 my-3">Automate IT lifecycle management service configuration and deployment for seamless operations.
                        </p>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="mr-4 wow slideInUp" data-wow-delay="0.2s">
                  <div class="wow slideInUp mx-2" data-wow-delay="0.3s">
                    <div class="ser-feature-card  bg-light overflow-hidden">
                      <div class="team-img position-relative overflow-hidden d-flex justify-content-center">
                        <img class="img-fluid w-50 p-5" src="{{ asset('assets/img/service/offering-2.png')}}" alt="">
                      </div>
                      <div class="text-center py-4">
                        <h5 class="fw-bold">Performance Monitoring and Optimization</h5>
                        <p class="mx-3 text-center m-0 my-3"> Optimize IT lifecycle management service with performance monitoring for enhanced efficiency.
                        </p>

                      </div>
                    </div>
                  </div>
                </div>
                <div class="mr-4 wow slideInUp" data-wow-delay="0.2s">
                  <div class="wow slideInUp mx-2" data-wow-delay="0.3s">
                    <div class="ser-feature-card  bg-light overflow-hidden">
                      <div class="team-img position-relative overflow-hidden d-flex justify-content-center">
                        <img class="img-fluid w-50 p-5" src="{{ asset('assets/img/service/offering-1.png')}}" alt="">
                      </div>
                      <div class="text-center py-4">
                        <h5 class="fw-bold">Security and Compliance Management</h5>
                        <p class="mx-3 text-center m-0 my-3">Ensure IT lifecycle management service compliance and security through robust management tools.</p>

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
        <b>Benefits of <span style="color:#F19F1F;"> IT Lifecycle Management
          </span></b>
      </p>
      <div class="row g-5 mt-5 py-12">
        <div class="col-lg-4 col-md-6 mt-4">
          <div class="card p-5" style="background-color: #ECECEC">
            <div class="card-image" style="background-color: #F19F1F">
              <img src="{{ asset('assets/img/image 5.png')}}" class="card-img-top m-auto w-100 rounded-3 py-4 px-3 my-1" alt="azur-image" style="max-width: 80px" />
              <div class="triangle-up"></div>
            </div>
            <div class="card-body">
              <h5 class="card-title fw-bold fs-3 mt-3">
                Cost Efficiency
              </h5>
              <p class="card-text fs-6">
                IT Lifecycle Management (ITLM) optimizes spending by extending the lifespan of IT assets and maximizing their utilization, ensuring maximum value from investments and cost savings.
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-4">
          <div class="card p-5 text-light" style="background-color: #F19F1F">
            <div class="card-image" style="background-color: #ECECEC">
              <img src="{{ asset('assets/img/Network Security Management Audit.png')}}" class="card-img-top m-auto w-100 rounded-3 py-4 px-3 my-1" alt="azur-image" style="max-width: 80px" />
              <div class="triangle-up"></div>
            </div>
            <div class="card-body">
              <h5 class="card-title fw-bold fs-3 mt-3">
                Security and Compliance
              </h5>
              <p class="card-text fs-6">
                Regular updates and maintenance through ITLM enhance system security, minimizing cyber threats and ensuring compliance with industry regulations to protect data and operations.
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-4">
          <div class="card p-5" style="background-color: #ECECEC">
            <div class="card-image" style="background-color: #F19F1F">
              <img src="{{ asset('assets/img/Preliminary Assessment.png')}}" class="card-img-top m-auto w-100 rounded-3 py-4 px-3 my-1" alt="azur-image" style="max-width: 80px" />
              <div class="triangle-up"></div>
            </div>
            <div class="card-body">
              <h5 class="card-title fw-bold fs-3 mt-3">
                Increased Productivity
              </h5>
              <p class="card-text fs-6">
                With ITLM ensuring smooth technology functioning, teams focus on core tasks without disruptions, boosting productivity and satisfaction.
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-4">
          <div class="card text-light p-5" style="background-color: #F19F1F">
            <div class="card-image" style="background-color: #ECECEC">
              <img src="{{ asset('assets/img/Continuous Improvement.png')}}" class="card-img-top m-auto w-100 rounded-3 py-4 px-3 my-1" alt="azur-image" style="max-width: 80px" />
              <div class="triangle-up"></div>
            </div>
            <div class="card-body">
              <h5 class="card-title fw-bold fs-3 mt-3">
                Adaptability and Growth
              </h5>
              <p class="card-text fs-6">
                ITLM enables scalable IT environments to meet evolving business needs, facilitating seamless expansion and innovation for staying competitive.
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
                Alignment with Business Objectives
              </h5>
              <p class="card-text fs-6">
                By aligning technology with strategic goals, ITLM enhances overall efficiency and performance, contributing to business success and growth.
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

    <div class="container my-5 ">
      <div class="d-flex flex-column align-items-center justify-content-center py-2 pb-2">
        <p class="fw-bold text-primary" style="font-size:35px;">FAQ</p>
      </div>

      <div class="accordion feature-faq feature__feq" id="accordionExample">
        <div class="card">
          <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample" data-target="#collapseOne" aria-expanded="true">
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
          <div class="card-header collapsed py-3" data-parent="#accordionExample" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true">
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
          <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample" data-target="#collapseThree" aria-expanded="true">
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
          <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample" data-target="#collapseFour" aria-expanded="true">
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
          <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample" data-target="#collapseFive" aria-expanded="true">
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
          <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample" data-target="#collapseSix" aria-expanded="true">
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
          <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample" data-target="#collapseSeven" aria-expanded="true">
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
          <div class="card-header collapsed py-3" data-toggle="collapse" data-parent="#accordionExample" data-target="#collapseEight" aria-expanded="true">
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
</div>


@endsection
