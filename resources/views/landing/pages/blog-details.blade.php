@extends('landing.layouts.base')

@section('contents')
    <div class="container-fluid font__manage py-5 wow fadeInUp" id="blog-share-data-details" data-wow-delay="0.1s">
        <div class="container">
            <div class="row">
                <!-- Blog list Start -->
                <div class="col-lg-12">
                    <div class="row mx-5 px-4">
                        <div class="col-md-12 wow slideInUp py-4" data-wow-delay="0.1s">
                            <div class="">
                                <div class="blog-item overflow-hidden" id="blog-share-data">
                                    <div class="blog-img position-relative overflow-hidden">
                                        {{-- <img class="img-fluid w-100" src="{{ asset('assets/img/blog/blog-1.png')}}" alt="">
                                    <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href=""></a> --}}
                                    </div>
                                    <h3 class="mb-3 text-left blog-title text-primary">{{ $blog->title }}</h3>
                                    <div class="d-flex mb-3 pb-2">
                                        <small class="me-3  mr-4"><i
                                                class="far fa-user text-primary me-2  pr-2"></i>Admin</small>
                                        <small class="mr-4"><i
                                                class="far fa-calendar-alt text-primary me-2 pr-2"></i>{{ date('D, d M Y', strtotime($blog->created_at)) }}</small>
                                        <small><i
                                                class="far fa-bookmark text-primary me-2 pr-2"></i>{{ $blog->category ? $blog->category->name : '' }}</small>
                                    </div>
                                    @if ($blog->image)
                                        <img class="img-fluid w-100 pb-3" style="width: 468px; border-radius:10px;"
                                            src="{{ $blog->image->url }}" alt="">
                                    @else
                                        <img class="img-fluid w-100 pb-3" src="{{ asset('assets/img/blog/blog-1.png') }}"
                                            alt="">
                                    @endif

                                    <div style="">
                                        {!! $blog->description !!}
                                    </div>
                                </div>

                                <div class="mx-5 px-3 p-2 mt-3">
                                    <div class="d-flex flex-column justify-content-center wow slideInUp mt-4"
                                        data-wow-delay="0.1s">
                                        <div class="d-flex flex-row justify-content-center mt-5 blog-share  ">
                                            <a class="btn box-shadow btn-rounded share__links text-primary"
                                                href="javascript:void(0)" >Share </a>
                                        </div>
                                        <div class="social-link d-flex flex-row justify-content-center text-left pt-3">
                                            <a class="btn box-shadow btn-rounded me-2 mr-2" href="javascript:void(0)"
                                                onclick="copyToClipboard('blog-share-data')"><i
                                                    class="fas fa-link fw-normal"></i></a>
                                            <a class="btn box-shadow btn-rounded me-2 mr-2" href="javascript:void(0)"
                                                onclick="socialshare('{{ Request::url() }}','twitter')"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-twitter-x" viewBox="0 0 16 16">
                                                    <path
                                                        d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z" />
                                                </svg></a>
                                            <a class="btn box-shadow btn-rounded me-2 mr-2" href="javascript:void(0)"
                                                onclick="socialshare('{{ Request::url() }}','facebook')"><i
                                                    class="fab fa-facebook-f fw-normal"></i></a>
                                            <a class="btn box-shadow btn-rounded me-2 mr-2" href="javascript:void(0)"
                                                onclick="socialshare('{{ Request::url() }}','linkedin')"><i
                                                    class="fab fa-linkedin-in fw-normal"></i></a>
                                            <a class="btn box-shadow btn-rounded" href="javascript:void(0)"
                                                onclick="socialshare('{{ Request::url() }}','email')"><i
                                                    class="fas fa-envelope fw-normal"></i></a>


                                        </div>
                                        <p class="text-center mt-3 fw-bold" id="copy-message"></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Blog list End -->

                <!-- Sidebar Start -->
                {{-- <div class="col-lg-4">
                <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
                    <div class="form-rounded-serach w-100 box-shadow" >
                        <form action="">
                            <div class="input-group ">
                                <div class="input-group-prepend">
                                    <span class="input-start-icon w-100"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
                                      </svg></span>
                                </div>
                                <input type="search" class="form-control border-0 p-3 shadow-none"   placeholder="Search">
                                <button class="btn btn-primary rounded-circle btn-sm btn-arrow-icon" >
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M14 2.5a.5.5 0 0 0-.5-.5h-6a.5.5 0 0 0 0 1h4.793L2.146 13.146a.5.5 0 0 0 .708.708L13 3.707V8.5a.5.5 0 0 0 1 0z"/>
                                      </svg>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="box-shadow px-3 p-2 ">
                    <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
                        <div class="form-rounded-serach mb-2 mt-2 p-2 box-shadow">
                            <h6 class="mb-0 text-left pl-3" style="color:#a5a8aa;">Categories</h6>
                        </div>
                        <div class="link-animated d-flex flex-column justify-content-left text-left">
                            <a class="bg-dark rounded-blog-category py-2 px-3 mb-2 {{ ($blog->category ? Str::title($blog->category->name) : '') =='Consulting Services' ? 'active' :''  }} " href="{{ route('blogs','consulting-service')}}">Consulting Services</a>
                            <a class="bg-dark rounded-blog-category py-2 px-3 mb-2 {{ ($blog->category ? Str::title($blog->category->name) : '') =='Platform And Operation Services' ? 'active' :''  }}" href="{{ route('blogs','platform-and-operation-service')}}">Platform And Operation Services</a>
                            <a class="bg-dark rounded-blog-category py-2 px-3 mb-2 {{ ($blog->category ? Str::title($blog->category->name) : '') =='Enterprise Application Services' ? 'active' :''  }}" href="{{ route('blogs','enterprise-application-service')}}">Enterprise Application Services</a>
                            <a class="bg-dark rounded-blog-category py-2 px-3 mb-2 {{ ($blog->category ? Str::title($blog->category->name) : '') =='Digital Services' ? 'active' :''  }}" href="{{ route('blogs','digital-service')}}">Digital Services</a>
                            <a class="bg-dark rounded-blog-category py-2 px-3 mb-2 {{ ($blog->category ? Str::title($blog->category->name) : '') =='Staffing Services' ? 'active' :''  }}" href="{{ route('blogs','staffing-service')}}">Staffing Services</a>

                            <a class="bg-dark rounded-blog-category py-2 px-3 mb-2 {{ ($blog->category ? Str::title($blog->category->name) : '') =='Professional Services' ? 'active' :''  }}" href="{{ route('blogs','professional-service')}}">Professional Services</a>
                        </div>
                    </div>
                </div>
            </div> --}}
                <!-- Sidebar End -->
            </div>
        </div>
    </div>

    <script>
        function socialshare(url, social_type) {
            const title = '{{ $blog->title }}';
            const desc = '{{ $blog->small_description }}';

            if (social_type == 'facebook') {
                shareOnFacebook(url, title, desc);
            } else if (social_type == 'twitter') {
                shareOnTwitter(url, title, desc);
            } else if (social_type == 'email') {
                emailBlog(url, title, desc);
            } else if (social_type == 'linkedin') {
                shareOnLinkedin(url, title, desc);
            }
        }
    </script>
@endsection
