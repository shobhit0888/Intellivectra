@extends('landing.layouts.base')

@section('contents')

<div class="container-fluid py-5 wow fadeInUp bg-primary" data-wow-delay="0.1s">
  <div class="container">
    <div class="row g-5">
      <div class="col-lg-6">
        <div class="position-relative pb-3">
          <h1>Welcome To <span class="text-primary">IVT</span></h1>
        </div>
        <p class="mb-2 text-justify"><span class="text-primary">At Intelli Vectra Technologies,</span>  we're more than just an IT solutions provider; we're your trusted partner in navigating the ever-changing digital landscape. Our philosophy revolves around adaptability and innovation, ensuring that we deliver solutions tailored perfectly to your needs, without being tied down to specific technologies or vendors.<br><br></p>
        <p class="text-justify">Our client relationships are built on trust, transparency, and a genuine commitment to your best interests. We don't just see you as customers; we see you as partners. With our dedicated team, we use cutting-edge innovation and deep engagement to drive transformative change within your organization.</p>
         <p class="text-justify">Our mission is simple: to provide you with the finest customer experience possible. Our intuitive platform analyzes your needs and delivers solutions that empower your business to thrive in today's digital world.</p>
        
      </div>



      <div class="col-lg-6 about-gradient-p">
        <div class="about-gradient"></div>
        <img class="position-absolute w-100 h-40 rounded wow zoomIn aboutUSImg" data-wow-delay="0.9s"
          src="{{ asset('assets/img/aboutus.jpg')}}" style="width:350px; height:400px; position: relative; top:10%; ">

      </div> 
      <p class="text-justify about-text" style="position: relative; top:25px; left:15px;">But we don't stop there. We're constantly striving to exceed expectations and enhance our services. Our experts are here to guide you every step of the way, ensuring that you not only achieve your goals but surpass them with confidence. In essence, Intelli Vectra Technologies is your catalyst for innovation and success. Together, let's transform the way your business operates. Choose us, and let's embark on this journey together.</p>
    </div>
  </div>
</div>

<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.2s" style="margin-top:-20px;">
  <h1 style="text-align:center;">From Idea to<span class="text-primary"> Reality</span> </h1>
  <div class="container">
    <div class="row g-5">

      <div class="about-jurney d-none d-sm-block">
        <div class="col-lg-12 d-flex aligns-content-center justify-content-center" style="min-height: 680px;">
          <img class="position-absolute h-100 rounded wow zoomIn" style="min-height: 600px;" data-wow-delay="0.9s"
            src="{{ asset('assets/img/about-arrow.svg')}}">
        </div>
        <div class="d-flex flex-row  flex-content-between">
          <div class="d-flex flex-column aligns-content-left flex-content-start">
            <div class="timeline jurney-left-2020">
              <p class="text-justify text-secoundary">IVT embarked on its journey, navigating the digital landscape from
                various locations to pursue of its first project, marking a significant milestone amidst
                uncertainity and challenges.</p>
            </div>
            <div class="timeline jurney-left-2022">
              <p class="text-justify text-secoundary">Securing its first major project in 2022 reinforced IVT's position
                in the industry, showcasing the team's proficiency and dedication to delivering high-quality solutions.
              </p>
            </div>
            <div class="timeline jurney-left-2024">
              <p class="text-justify text-secoundary">IVT's strategic expansion into western India in 2024 underscores
                its commitment to establishing a comprehensive PAN-India presence, ensuring accessibility and exceeding
                client expectations nationwide.</p>
            </div>
          </div>
          <div class="d-flex flex-column aligns-content-right flex-content-end">
            <div class="timeline jurney-right-2021">
              <p class="text-justify text-secoundary">Transitioning to a co-working office in August marked a turning
                point, leading to strategic projects aimed to achieve new heights of success and innovation.</p>
            </div>
            <div class="timeline jurney-right-2023">
              <p class="text-justify text-secoundary">The launch of IVT2.0 in 2023 ushered in a new chapter, introducing
                a modernized office space designed to foster innovation, collaboration, and growth.</p>
            </div>
          </div>
        </div>
      </div>

      <div class="about-jurney d-block d-sm-none">
        <div class="col-lg-12" style="min-height: 680px;">
        <div class="d-flex flex-column aligns-content-left flex-content-start">
            <div class=" jurney-left-2020">
              <p>2020</p>
              <p class="text-justify text-secoundary">IVT embarked on its journey, navigating the digital landscape from
                various locations in pursuit of its first project, marking a significant milestone amidst
                uncertainityand challenges.</p>
            </div>
            <div class=" jurney-right-2021">
            <p>2021</p>
              <p class="text-justify text-secoundary">Transitioning to a co-working office in August marked a turning
                point, leading to strategic projects aimed at achieving new height of success and innovation.</p>
            </div>
            <div class=" jurney-left-2022">
            <p>2022</p>
              <p class="text-justify text-secoundary">Securing its first major project in 2022 reinforced IVT's position
                in the industry, showcasing the team's proficiency and dedication to delivering high-quality solutions.
              </p>
            </div>
            <div class=" jurney-right-2023">
            <p>2023</p>
              <p class="text-justify text-secoundary">The launch of IVT2.0 in 2023 ushered in a new chapter, introducing
                a modernized office space designed to foster innovation, collaboration, and growth.</p>
            </div>
            <div class=" jurney-left-2024">
            <p>2024</p>
              <p class="text-justify text-secoundary">IVT's satragic expansion into western India in 2024 underscores
                its commitment to establishing a comprehensive PAN-India presence, ensuring accessibility and exceeding
                client expections nationwide.</p>
            </div>
          </div>
        </div>
       
      </div>
    </div>
  </div>
</div>

<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" style="margin-top:-100px;" id="our_team">
  <div class="container py-5">
    <div class="text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 660px;">
      <img src="{{ asset('assets\img\Frame 16.svg')}}" alt="" style="width:50px; height:50px;">
      <h1 class="fw-boldtext-uppercase">Meet our <span class="text-primary">Leaders</span></h1>
      <p class="mb-0">Welcome to the team! We are a group of passionate individuals working together to achieve our
        goals.
        Get to know the faces behind our success.</p>
    </div>
    <div class="main-ceo row">
      <img class='col-md-5' src="{{ asset('assets/img/leaders/manas-sinha-CEO.jpeg')}}" alt="">
      <div class="main-text col-md-7 p-4">
        <p style="font-weight: 600; font-size: 36px; color:#000000; text-align:center; line-height: 1">Dr. MANAS<span style="color:#F2A024;"> SINHA</span></p>
        <p style="color:#383838; text-align:center;">Founder, CEO & MD</p>
        <div class="social" style="position:relative; top:-46px; left:190px; width:30px; height:30px;">
                <ul>
                  <li class="mt-3">
                    <a href="https://www.linkedin.com/in/manassinha?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=ios_app" style="background-color:#4186E0;"><i class="fab fa-linkedin-in icon" ></i></a>
                  </li>
                </ul>
         </div>
        <p style=" margin-top:20px;" class="text-md-left text-center ">An experienced IT professional with extensive experience across the globe for over 30+ years including that in IBM which entailed stints in Sales, Product Management, Branding, Technology, Business Development and Training portfolio. He has been awarded an Honorary Doctorate of Philosophy (PhD) in Innovation & Technology by Maryland State University, USA. He has taken a new initiative to create a difference in the IT Solutions & Services sector, especially in the Government & Enterprise space through a dynamic and innovative approach with the introduction of new technologies related to Cyber Security, Business Digitization, Hyperconverged Infrastructure, Hybrid Cloud, Application Modernization and in the complex systems automation area.
        </p>
        
      </div>
    </div>
      </div>
    </div>
  </div>
</div>
</div>


@endsection