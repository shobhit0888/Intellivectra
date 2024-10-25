@extends('landing.layouts.base')

@section('contents')

@include('landing.components.pages.about-section')

@include('landing.components.pages.approach')

@include('landing.components.pages.services')

@include('landing.components.pages.process')

@include('landing.components.pages.our-usp')


<div class="container-fluid py-2 wow fadeInUp" data-wow-delay="0.1s">
  <div class="container py-3">
    <div class="flex-row justify-content-center">
      <div class="d-flex flex-row justify-content-center">
        <h1><span class="text-primary">Case </span> Study</h1>

      </div>
    </div>
    <div class="box-shadow case-content case__boxes row my-2 text-left py-4">
      <div class="col-lg-6 col-sm-12">
        <div class="card">
          <img class="card-img-top" src="{{ asset('assets/img/prayagraj.jpg')}}" alt="Card image cap"
            style=" border-right: 40px;">
        </div>
      </div>
      <div class="col-lg-6 col-sm-12 case__realtive">
        <h4 class="fw-medium pb-2 pt-4 pt-md-0 mt-4">Smart Classroom Automation Framework</h4>
        {{-- <h6 class="mb-0 pb-1"><strong>Challenge:</strong></h6> --}}
        <p class="mb-4 text-justify">Smart Classroom Automation Framework is the special purpose vehicle created under
          the Smart City Mission to deliver several Pan City and Area Based Development Initiatives with a focus on both
          infrastructure and ICT advancements in the city and at strategic locations.</p>

        <a href="{{ route('case-study-pragraj')}}" class="btn btn-dark rounded-pill py-3 px-5 wow zoomIn"
          data-wow-delay="0.9s">Know More <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
            fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
            <path fill-rule="evenodd"
              d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8" />
          </svg></a>
          <a class="btn text-primary d-flex flex-row justify-content-end upd__seeall" href="{{ route('case-study')}}"> See All <svg
            xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right mt-1"
            viewBox="0 0 16 16">
            <path fill-rule="evenodd"
              d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8" />
          </svg></a>
      </div>
      <div class="col-lg-12 col-sm-12 pr-2">

      </div>
    </div>
  </div>
</div>

<div class="container-fluid py-4 wow fadeInUp bg-primary" data-wow-delay="0.1s">
  <div class="container">
    <div class="flex-column justify-content-center">
      <div class="d-flex align-items-center flex-column justify-content-center">
        <h1><span class="text-primary">Our </span>OEM's</h1>
        <p>Partnering with industry-leading manufacturers to deliver cutting-edge technology solutions tailored to your
          business needs.</p>
      </div>
    </div>

    <div class="row row-line  justify-content-center ">
      <div class="d-flex align-items-center justify-content-center col-md-auto col-md-3 col-6  brand-logo  column-line ">
        <img src="{{ asset('assets/img/brand/b-20.png')}}" class="brand-img pt-3" />
      </div>

      <div class="d-flex align-items-center justify-content-center col-md-3 col-6  brand-logo  column-line ">
        <img src="{{ asset('assets/img/brand/b-1.png')}}" class="brand-img" />
      </div>

      <div class="d-flex align-items-center justify-content-center col-md-3 col-6  brand-logo  column-line ">
        <img src="{{ asset('assets/img/brand/b-2.png')}}" class="brand-img pt-1" />
      </div>

      <div class="d-flex align-items-center justify-content-center col-md-3 col-6  brand-logo column-line_md">
        <img src="{{ asset('assets/img/brand/b-3.png')}}" class="brand-img pt-2" />
      </div>



    </div>

    <div class="d-flex flex-row justify-content-center ">
      <div class="row row-line1   justify-content-center">
      <div class="d-flex align-items-center justify-content-center brand-logo col-md-2 col-6  column-line">
        <img src="{{ asset('assets/img/brand/b5.png')}}" class="brand-img" />
      </div>

      <div class="d-flex align-items-center justify-content-center brand-logo col-md-2 col-6  column-line ">
        <img src="{{ asset('assets/img/brand/roombr.svg')}}" class="brand-img pt-4" />
      </div>

      <div class="d-flex align-items-center justify-content-center brand-logo col-md-2 col-6  column-line ">
        <img src="{{ asset('assets/img/brand/b-10.png')}}" class="brand-img pt-4" />
      </div>

      <div class="d-flex align-items-center justify-content-center brand-logo col-md-3 col-6  column-line ">
        <img src="{{ asset('assets/img/brand/b-19.png')}}" class="brand-img pt-3" />
      </div>

      <div class="d-flex align-items-center justify-content-center brand-logo col-md-3 col-6  column-line_md">
        <img src="{{ asset('assets/img/brand/b-13.png')}}" class="brand-img-big" />
      </div>

      <div class="d-flex align-items-center justify-content-center brand-logo col-md-3 col-6 d-md-none column-line_md">
        <img src="{{ asset('assets/img/brand/b-7.png')}}" class="brand-img pt-2" />
      </div>
      </div>
    </div>

    <div class="d-flex flex-row justify-content-center flex_none">
      <div class="row row-line2   justify-content-center">
<div class="d-flex align-items-center justify-content-center brand-logo col-md-3 col-6   column-line  ">
  <img src="{{ asset('assets/img/brand/b-11.png')}}" class="brand-img-big pt-3" />
</div>
<div class="d-flex align-items-center justify-content-center brand-logo col-md-3 col-6  column-line ">
  <img src="{{ asset('assets/img/brand/b-17.png')}}" class="brand-img pt-3" />
</div>

<div class="d-flex align-items-center justify-content-center brand-logo col-md-3 col-12 column-line_md1  column-line ">
  <img src="{{ asset('assets/img/brand/b-18.png')}}" class="brand-img pt-4" />
</div>

<div class=" align-items-center justify-content-center brand-logo col-md-3 col-6  d-md-block  d-none ">
  <img src="{{ asset('assets/img/brand/b-7.png')}}" class="brand-img pt-4" />
</div>

      </div>
    </div>

    <div class="col-lg-12 p-2 text-right">
      <a class="btn text-primary arrw__update" href="{{route('oems')}}"> See All <svg
          xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right"
          viewBox="0 0 16 16">
          <path fill-rule="evenodd"
            d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8" />
        </svg></a>
    </div>
  </div>
</div>

<div class="container-fluid py-4 wow fadeInUp" data-wow-delay="0.1s">
  <div class="container">
    <div class="case-content p-4 row box-shadow box__cconnnn">
      <div class="col-lg-6 col-md-6 col-sm-12 my-2">
        <img class="card-img-top case-content-img" src="{{ asset('assets/img/home-6.png')}}" alt="Card image cap">
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12 text-left">
        <h1>Get <span class="text-primary"> Expert’s Advice </span></h1>
        <p class="mb-4 text-justify">Get the expertise from our professionals for personalised advice crafted to address
          your unique business needs. Access industry-leading insights and unique solutions customised to propel your
          business forward.</p>

        <a href="https://calendly.com/info-1zw9/30min" class="btn btn-primary rounded-pill py-3 px-5 wow zoomIn orange__btn"
          data-wow-delay="0.9s">Schedule a call <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
            fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
            <path fill-rule="evenodd"
              d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8" />
          </svg></a>
      </div>
    </div>
  </div>
</div>

<!-- Blog Start -->
<div class="container-fluid py-2 wow fadeInUp bg-primary" data-wow-delay="0.1s">
  <div class="container py-3">
    <div class="flex-row justify-content-center">
      <div class="d-flex flex-row mb-2 justify-content-center">
        <h1 class="fw-bold"> <span class="text-primary">Latest </span>Blogs</h1>
      </div>
    </div>

    <div class="row g-5">
      <div class="col-lg-12">
        <div class="row g-5">
          <div id="blogs" class="owl-carousel blogs-carousel">
            @if (isset($blogs))
            @foreach ($blogs as $blog)
            <div class="mr-4 wow slideInUp" data-wow-delay="0.1s">
              <div class="">
                <div class="blog-item bg-light rounded overflow-hidden">
                  <div class="blog-img position-relative overflow-hidden">
                    @if ($blog->image)
                    <img class="img-fluid w-100" src="{{ $blog->image->url}}" alt="{{ $blog->title}}"
                      style="height:300px;">
                    @else
                    <img class="img-fluid w-100" src="{{ asset('assets/img/blog/blog-1.png')}}" alt="">
                    @endif

                    <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4"
                      href=""></a>
                  </div>
                  <div class="p-4">
                    <div class="d-flex mb-3 blog-post">
                      <small class="me-3  mr-2"><i class="far fa-user text-primary me-2  pr-2"></i>Admin</small>
                      <small class="mr-2"><i
                          class="far fa-calendar-alt text-primary me-2 pr-2"></i>{{ date('D, d M Y', strtotime($blog->created_at))}}</small>
                      <small><i
                          class="far fa-bookmark text-primary me-2 pr-2"></i>{{ $blog->category ? $blog->category->name : ''}}</small>
                    </div>
                    <h4 class="mb-3 text-left blog-title">{{ Str::limit(ucfirst($blog->title), 25) }}</h4>
                    <p class="blog-small-desc">{{ Str::limit(ucfirst($blog->small_desc), 230) }}</p>
                    <a class="text-primary blog-link"
                      href="{{ route('blogs-details', ['category' => $blog->category ? $blog->category->slug : 'nil', 'slug' => $blog->slug != '' ? $blog->slug : Str::slug($blog->title)])}}">Read
                      More <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-arrow-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                          d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8" />
                      </svg></a>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
            @endif
            {{-- <div class="mr-4 wow slideInUp" data-wow-delay="0.1s">
                                    <div class="">
                                        <div class="blog-item bg-light rounded overflow-hidden">
                                            <div class="blog-img position-relative overflow-hidden">
                                                <img class="img-fluid w-100" src="{{ asset('assets/img/blog/blog-1.png')}}"
            alt="">
            <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href=""></a>
          </div>
          <div class="p-4">
            <div class="d-flex mb-3">
              <small class="me-3  mr-2"><i class="far fa-user text-primary me-2  pr-2"></i>John Doe</small>
              <small class="mr-2"><i class="far fa-calendar-alt text-primary me-2 pr-2"></i>01 Mar, 2024</small>
              <small><i class="far fa-bookmark text-primary me-2 pr-2"></i>Enterprise Application Services</small>
            </div>
            <h4 class="mb-3 text-left blog-title">Driving growth with the power of Custom Staffing Services</h4>
            <p class="text-justify">In the competitive business world, the ability to acquire and retain top talent is
              crucial for any organization to achieve its goals. At Intelli Vectra staffing services organization, we
              are dedicated to ..</p>
            <a class="text-primary blog-link" href="{{ route('blogs', 'consultaing-service')}}">Read More <svg
                xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right"
                viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                  d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8" />
              </svg></a>
          </div>
        </div>
      </div>
    </div>
    <div class="mr-4 wow slideInUp" data-wow-delay="0.2s">
      <div class="">
        <div class="blog-item bg-light rounded overflow-hidden">
          <div class="blog-img position-relative overflow-hidden">
            <img class="img-fluid w-100" src="{{ asset('assets/img/blog/blog-1.png')}}" alt="">
            <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href=""></a>
          </div>
          <div class="p-4">
            <div class="d-flex mb-3">
              <small class="me-3  mr-2"><i class="far fa-user text-primary me-2  pr-2"></i>John Doe</small>
              <small class="mr-2"><i class="far fa-calendar-alt text-primary me-2 pr-2"></i>01 Mar, 2024</small>
              <small><i class="far fa-bookmark text-primary me-2 pr-2"></i>Enterprise Application Services</small>
            </div>
            <h4 class="mb-3 text-left blog-title">Shield your Organization with Cyber Security Services</h4>
            <p class="text-justify">IIn recent times, one of the most concerning things in today's digital era is
              security, security concerns for organizations of all sizes and industries. With the drastic changes in
              cyber threats, organizations.. </p>
            <a class="text-primary blog-link" href="{{ route('blogs', 'consultaing-service')}}">Read More <svg
                xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right"
                viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                  d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8" />
              </svg></a>
          </div>
        </div>
      </div>
    </div>
    <div class="mr-4 wow slideInUp" data-wow-delay="0.3s">
      <div class="">
        <div class="blog-item bg-light rounded overflow-hidden">
          <div class="blog-img position-relative overflow-hidden">
            <img class="img-fluid w-100" src="{{ asset('assets/img/blog/blog-1.png')}}" alt="">
            <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href=""></a>
          </div>
          <div class="p-4">
            <div class="d-flex mb-3">
              <small class="me-3  mr-2"><i class="far fa-user text-primary me-2  pr-2"></i>John Doe</small>
              <small class="mr-2"><i class="far fa-calendar-alt text-primary me-2 pr-2"></i>01 Mar, 2024</small>
              <small><i class="far fa-bookmark text-primary me-2 pr-2"></i>Enterprise Application Services</small>
            </div>
            <h4 class="mb-3 text-left blog-title">Revolutionizing Operations with the Digital Services</h4>
            <p class="text-justify">In this digital world, organizations are increasingly turning to digital services to
              stay competitive and adapt to changes in market dynamics. Digital transformation services play a crucial
              role in helping businesses..</p>
            <a class="text-primary blog-link" href="{{ route('blogs', 'consultaing-service')}}">Read More <svg
                xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right"
                viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                  d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8" />
              </svg></a>
          </div>
        </div>
      </div>
    </div>
    <div class="mr-4 wow slideInUp" data-wow-delay="0.4s">
      <div class="">
        <div class="blog-item bg-light rounded overflow-hidden">
          <div class="blog-img position-relative overflow-hidden">
            <img class="img-fluid w-100" src="{{ asset('assets/img/blog/blog-1.png')}}" alt="">
            <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href=""></a>
          </div>
          <div class="p-4">
            <div class="d-flex mb-3">
              <small class="me-3  mr-2"><i class="far fa-user text-primary me-2  pr-2"></i>John Doe</small>
              <small class="mr-2"><i class="far fa-calendar-alt text-primary me-2 pr-2"></i>01 Mar, 2024</small>
              <small><i class="far fa-bookmark text-primary me-2 pr-2"></i>Enterprise Application Services</small>
            </div>
            <h4 class="mb-3 text-left blog-title">The Role of Surveillance Solutions in Modern Security</h4>
            <p class="text-justify">Wherever we go it is all about the safety and security of us. Surveillance solutions
              play a vital role and provide organizations with the tools and technologies that are needed to.. </p>
            <a class="text-primary blog-link" href="{{ route('blogs', 'consultaing-service')}}">Read More <svg
                xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right"
                viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                  d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8" />
              </svg></a>
          </div>
        </div>
      </div>
    </div>
    <div class="mr-4 wow slideInUp" data-wow-delay="0.5s">
      <div class="">
        <div class="blog-item bg-light rounded overflow-hidden">
          <div class="blog-img position-relative overflow-hidden">
            <img class="img-fluid w-100" src="{{ asset('assets/img/blog/blog-1.png')}}" alt="">
            <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href=""></a>
          </div>
          <div class="p-4">
            <div class="d-flex mb-3">
              <small class="me-3  mr-2"><i class="far fa-user text-primary me-2  pr-2"></i>John Doe</small>
              <small class="mr-2"><i class="far fa-calendar-alt text-primary me-2 pr-2"></i>01 Mar, 2024</small>
              <small><i class="far fa-bookmark text-primary me-2 pr-2"></i>Enterprise Application Services</small>
            </div>
            <h4 class="mb-3 text-left blog-title">Safeguarding Business Continuity with Backup and Archive Solutions
            </h4>
            <p class="text-justify">Protecting data and applications no matter where they are to avoid costly business
              interruptions or to meet compliance requirements. The data is King. From important documents and
              business..</p>
            <a class="text-primary blog-link" href="{{ route('blogs', 'consultaing-service')}}">Read More <svg
                xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right"
                viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                  d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8" />
              </svg></a>
          </div>
        </div>
      </div>
    </div>
    <div class="mr-4 wow slideInUp" data-wow-delay="0.6s">
      <div class="">
        <div class="blog-item bg-light rounded overflow-hidden">
          <div class="blog-img position-relative overflow-hidden">
            <img class="img-fluid w-100" src="{{ asset('assets/img/blog/blog-1.png')}}" alt="">
            <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href=""></a>
          </div>
          <div class="p-4">
            <div class="d-flex mb-3">
              <small class="me-3  mr-2"><i class="far fa-user text-primary me-2  pr-2"></i>John Doe</small>
              <small class="mr-2"><i class="far fa-calendar-alt text-primary me-2 pr-2"></i>01 Mar, 2024</small>
              <small><i class="far fa-bookmark text-primary me-2 pr-2"></i>Enterprise Application Services</small>
            </div>
            <h4 class="mb-3 text-left blog-title">Unlocking Business Potential through Infrastructure Solutions</h4>
            <p class="text-justify">Infrastructure solutions help businesses to escalate the technological landscape
              enduring with the world of digital and cloud. Investing in IT infrastructure solutions is mandatory. </p>
            <a class="text-primary blog-link" href="{{ route('blogs', 'consultaing-service')}}">Read More <svg
                xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right"
                viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                  d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8" />
              </svg></a>
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
<div class="col-lg-12 p-2 text-right">
  <a class="btn text-primary arrw__update" href="{{route('blogs')}}"> See All <svg
      xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right"
      viewBox="0 0 16 16">
      <path fill-rule="evenodd"
        d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8" />
    </svg></a>
</div>
</div>

</div>

</div>

{{-- <div class="wow fadeInUp" data-wow-delay="0.1s">
            <div class="container py-5 mb-5">
                <div class="bg-white">
                    <div class="owl-carousel vendor-carousel">

                    </div>
                </div>
            </div>
        </div> --}}
<!-- Blog End -->

<div class="container-fluid wow fadeInUp my-4 mb-4 get__boxes" data-wow-delay="0.1s">
  <div class="container">
    <div class="mt-5 box-shadow ">
      <div class="row " style='justify-content: space-evenly'>
      <div class="col-lg-6 col-md-6 col-sm-12 d-flex flex-column align-items-center justify-content-center position-relative">
        <img class="card-img-top getin-content-img" style="width: 80%" src="{{ asset('assets/img/expeImg.jpg') }}" alt="Card image cap">
        <div class="position-absolute top-50 start-50 translate-middle text-center" style="z-index: 1; color: white; font-size: 24px;"><h3 style="font-weight: 600 !important; color:#000;" class="experience_advice">Experience <span class="text-primary">Center</span></h3></div>
      </div>
        <div class="col-lg-6 col-md-6 col-sm-12 outerBigDiv">
          <div class='innerBigDiv'>
            <h1 class="" style="font-weight: 600; text-align:start !important"> <span class="text-primary "
                style=' color: black !important'> Cyviz
              </span>Experience Centre</h1>
            <p class='cstmImg3' width="400">
              The Cyviz Experience Centre, in collaboration with Intelli Vectra Technologies, presents advanced solutions for collaborative visualization and control room operations. This partnership seamlessly integrates Cyviz's cutting-edge display systems with Intelli Vectra's intelligent control and monitoring technologies, revolutionizing command and control operations.
              </p>
            <!-- <img class="card-img-top getin-content-img cstmImg2" src="{{ asset('assets/img/expeImg2.jpg')}}"
              alt="Card image cap"> -->
              <iframe width="100%" height="280" src="https://www.youtube.com/embed/HxNc6_wvVhU" frameborder="0" allowfullscreen style="margin-bottom: 20px;"></iframe>
           <!--  <a href="#" class="btn btn-primary rounded-pill py-3 px-5 my-3 wow zoomIn" data-wow-delay="0.9s"
              style="visibility: visible; animation-delay: 0.9s; animation-name: zoomIn;">Know more <svg
                xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right"
                viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                  d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8">
                </path>
              </svg></a> -->
          </div>
        </div>

      </div>
    </div>
  </div>
</div>


@include('landing.components.get-in-touch')



@endsection
