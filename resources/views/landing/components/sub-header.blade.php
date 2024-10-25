
@php
    $colortitle ='';
    $whitetitle = '';
    $subheading = '';
    $img =asset('assets/img/about-bg.jpg');
@endphp
    @if (isset($type))
        @if ($type == 'about')
            @php
                $whitetitle = 'Us';
                $colortitle = 'About';
                $subheading = '';
                $img = asset('assets/img/about-bg.jpg');
            @endphp
        @elseif ($type == 'contact')
            @php
                $whitetitle = 'Us';
                $colortitle = 'Contact';
                $subheading = "";
                $img = asset('assets/img/contact-bg.png');
            @endphp
        @elseif ($type == 'blogs')
            @php
                $whitetitle = 'Blogs';
                $colortitle = 'Our';
                $subheading = "";
                $img = asset('assets/img/blog-bg.jpg');
            @endphp
         @elseif ($type == 'blogs-details')
            @php
                $whitetitle = $blog->title;
                $colortitle = '';
                $subheading = $blog->title;
                $img = $blog->banner ? asset($blog->banner->url) : asset('assets/img/blog-bg.jpg');
            @endphp
        @elseif ($type == 'case-study')
            @php
               $whitetitle = 'Study';
                $colortitle = 'Case';
                $subheading = "";
                $img = asset('assets/img/case-study-bg.jpg');
            @endphp
        @elseif ($type == 'prayagraj')
            @php
                $whitetitle = 'Automation Framework';
                $colortitle = 'Smart Classroom';
                $subheading = "";
                $img = asset('assets/img/case-study-bg.jpg');
            @endphp
        @elseif ($type == 'weather-forecast')
            @php
                $whitetitle = 'Forecasting';
                $colortitle = 'Weather';
                $subheading = "";
                $img = asset('assets/img/case-study-bg.jpg');
            @endphp
        @elseif ($type == 'career')
            @php
                $whitetitle = '';
                $colortitle = 'career';
                $subheading = "";
                $img = asset('assets/img/career-bg.png');
            @endphp
        @elseif ($type == 'career-apply')
            @php
                $whitetitle = '';
                $colortitle = 'career';
                $subheading = "";
                $img = asset('assets/img/career-bg.png');
            @endphp



        @elseif ($type == 'services-staffing')
            @php
                $whitetitle = 'services';
                $colortitle = 'staffing';
                $subheading = "";
                $img = asset('assets/img/service-bg.jpg');
            @endphp
        @elseif ($type == 'services-consulting')
            @php
                $whitetitle = 'services';
                $colortitle = 'consulting';
                $subheading = "Customized consulting, connecting talent and opportunities for mutual success.";
                $img = asset('assets/img/service/service-bg-7.jpg');
            @endphp
        @elseif ($type == 'services-cloud')
            @php
                $whitetitle = 'services';
                $colortitle = 'cloud';
                $subheading = "";
                $img = asset('assets/img/service/service-bg-18.jpg');
            @endphp
        @elseif ($type == 'services-backup')
            @php
                $whitetitle = 'services';
                $colortitle = 'backup';
                $subheading = "";
                $img = asset('assets/img/service/service-bg-6.jpg');
            @endphp
        @elseif ($type == 'services-data')
            @php
                $whitetitle = 'services';
                $colortitle = 'data';
                $subheading = "";
                $img = asset('assets/img/service/service-bg-8.jpg');
            @endphp
        @elseif ($type == 'services-survillence')
            @php
                $whitetitle = 'services';
                $colortitle = 'survillence';
                $subheading = "";
                $img = asset('assets/img/service/service-bg-4.jpg');
            @endphp
        @elseif ($type == 'services-command')
            @php
                $whitetitle = 'services';
                $colortitle = 'command';
                $subheading = "";
                $img = asset('assets/img/service/service-bg-2.jpg');
            @endphp
        @elseif ($type == 'services-security')
            @php
                $whitetitle = 'services';
                $colortitle = 'security';
                $subheading = "";
                $img = asset('assets/img/service/service-bg-12.jpg');
            @endphp
        @elseif ($type == 'services-infrastucture')
            @php
                $whitetitle = 'services';
                $colortitle = 'infrastucture';
                $subheading = "";
                $img = asset('assets/img/service/service-bg-15.jpg');
            @endphp




        @elseif ($type == 'oems')
            @php
                $whitetitle = 'OEMs';
                $colortitle = 'Our';
                $subheading = "";
                $img =  asset('assets/img/oem-bg.jpg');
            @endphp
         @elseif ($type == 'oems-page2')
            @php
                $whitetitle = 'OEMs';
                $colortitle = 'Our';
                $subheading = "";
                $img =  asset('assets/img/oem-bg.jpg');
            @endphp
         @elseif ($type == 'privacy')
            @php
                $whitetitle = 'policy';
                $colortitle = ' Privacy';
                $subheading = "";
                $img = asset('assets/img/privacy-bg.jpg');
            @endphp
        @elseif ($type == 'term')
            @php
                $whitetitle = 'And Conditions';
                $colortitle = 'Terms';
                $subheading = "";
                $img = asset('assets/img/privacy-bg.jpg');
            @endphp
        @endif
    @endif



    @if (isset($sub_type))
    <div class="carousel-inner" >
        <div class="carousel-item active">
            <img class="w-100" src="{{ $img }}" alt="Image">
            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                <div class="container">
                    <div class="bg p-5">
                        <h1 class="text-white text-center">{{ ucfirst($whitetitle)}}</h1>
                        <p class="text-white text-center">{{ ucfirst($subheading)}}</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
    @else
        <div class="carousel-inner" >
            <div class="carousel-item active">
                <img class="w-100" src="{{ $img }}" alt="Image">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="container">
                        <div class="p-3 text-center">
                            <h2 class="fw-bold text-primary mb-md-1 animated slideInDown">{{ ucfirst($colortitle)}}<span class="text-white mb-md-4 animated zoomIn">{{' ' . ucfirst($whitetitle)}}</span></h2>
                            @if ($type == 'blogs-details')
                                {{-- <p class="blog-slug text-primary"> <a href="{{ route('home')}}">Home</a> - <a href="{{ route('blogs')}}">Blogs</a> - <a href="{{ route('blogs')}}">{{$blog->category ? $blog->category->name :''}}</a> - {{ ucfirst($subheading)}}</p> --}}
                            @else
                                <p>{{ ucfirst($subheading)}}</p>
                            @endif


                            {{-- <div class="form-rounded input-form-bg w-50" style="max-width: 300px;">
                                <form action="">
                                    <div class="input-group ">
                                        <div class="input-group-prepend">
                                            <span class="input-start-icon"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                                                <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z"/>
                                            </svg></span>
                                        </div>
                                        <input type="text" class="form-control border-0 p-3 input-form-bg"  placeholder="Your Email" style="max-width: 300px;">
                                        <button class="btn btn-primary rounded-circle btn-sm btn-arrow-icon" >
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up-right" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M14 2.5a.5.5 0 0 0-.5-.5h-6a.5.5 0 0 0 0 1h4.793L2.146 13.146a.5.5 0 0 0 .708.708L13 3.707V8.5a.5.5 0 0 0 1 0z"/>
                                            </svg>
                                        </button>
                                    </div>
                                </form>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif


