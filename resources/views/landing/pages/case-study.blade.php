
@extends('landing.layouts.base')

@section('contents')

<!-- <div class="container-fluid pt-4 wow fadeInUp bg-primary" data-wow-delay="0.1s">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6">
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
            </div>
            <div class="col-lg-6" >
                <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
                    <div class="form-rounded-serach w-100 box-shadow" >
                        <form action="">
                            <div class="input-group ">
                                <select class="form-control border-0 shadow-none mx-2">
                                    <option selected>Categories</option>
                                </select>
                                {{-- <button class="btn btn-primary rounded-circle btn-sm btn-arrow-icon" >
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M14 2.5a.5.5 0 0 0-.5-.5h-6a.5.5 0 0 0 0 1h4.793L2.146 13.146a.5.5 0 0 0 .708.708L13 3.707V8.5a.5.5 0 0 0 1 0z"/>
                                      </svg>
                                </button> --}}
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->

<div class="container-fluid py-2 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="box-shadow case-content row my-2 text-left py-4">
            <div class="col-lg-6 col-sm-12">
                <div class="card">
                    <img class="card-img-top" src="{{ asset('assets/img/prayagraj.jpg')}}" alt="Card image cap">
                  </div>
            </div>
            <div class="col-lg-6 col-sm-12">
                <h4 class="fw-medium pb-2"> <span class="text-primary"> Smart Classroom </span>Automation Framework</h4>
                <p class="mb-4 text-justify">This was the special purpose vehicle created under the Smart City Mission to deliver several Pan City and Area Based Development Initiatives with a focus on both infrastructure and ICT advancements in the city and at strategic locations.</p>

                <a href="{{ route('case-study-pragraj')}}" class="btn btn-dark rounded-pill py-3 px-5 wow zoomIn" data-wow-delay="0.9s">Know More <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"/>
                  </svg></a>
            </div>

        </div>
    </div>
</div>

<div class="container-fluid py-2 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-3">
        <div class="box-shadow case-content row my-2 text-left py-4">
            <div class="col-lg-6 col-sm-12">
                <div class="card">
                    <img class="card-img-top" src="{{ asset('assets/img/wff.png')}}" alt="Card image cap">
                  </div>
            </div>
            <div class="col-lg-6 col-sm-12">
                <h3 class="pb-2"> <span class="text-primary"> Weather Forecasting</span> Solutions</h3>
                <h5 class="mb-0 pb-1"><strong>Challenge:</strong></h5>
                <p class="mb-4 text-justify">Our Client is producing multiple weather forecast products such as graphical representation and processed data of global and regional weather forecasts based on various models.</p>

                <a href="{{ route('weather-forecast')}}" class="btn btn-dark rounded-pill py-3 px-5 wow zoomIn" data-wow-delay="0.9s">Know More <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"/>
                  </svg></a>
            </div>

        </div>
    </div>
</div>

<!-- <div class="container-fluid py-2 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-3">
        <div class="box-shadow case-content row my-2 text-left py-4">
            <div class="col-lg-6 col-sm-12">
                <div class="card">
                    <img class="card-img-top" src="{{ asset('assets/img/home-5.png')}}" alt="Card image cap">
                  </div>
            </div>
            <div class="col-lg-6 col-sm-12">
                <h3 class="pb-2"> <span class="text-primary"> SmartCityTech</span> Solutions</h3>
                <h5 class="mb-0 pb-1"><strong>Challenge:</strong></h5>
                <p class="mb-4 text-justify">SmartCityTech Solutions pioneers innovative IT services, specializing in the development of integrated command and control solutions for smart cities. With a focus on dynamic data analysis and security, they empower urban environments to make efficient, informed, and coordinated decisions, driving forward the evolution of modern city infrastructure.</p>

                <a href="{{ route('case-study')}}" class="btn btn-dark rounded-pill py-3 px-5 wow zoomIn" data-wow-delay="0.9s">Know More <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"/>
                  </svg></a>
            </div>

        </div>
    </div>
</div> -->

<!-- <div class="container-fluid">
    <div class="container">
        <div class="col-12 wow slideInUp" data-wow-delay="0.1s">
            <nav aria-label="...">
                <ul class="pagination d-flex flex-row justify-content-between">
                    <li class="page-item1 rounded disabled ">
                        <a class="page-link shadow" href="#" tabindex="-1"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-short" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5"/>
                        </svg></a>
                    </li>
                    <div class="d-flex justify-row">
                        <li class="page-item2 rounded"><a class="page-link shadow" href="#">1</a></li>
                        <li class="page-item2 rounded active">
                            <a class="page-link shadow" href="#">2 <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="page-item2 rounded"><a class="page-link shadow" href="#">3</a></li>
                    </div>
                    <li class="page-item1 rounded ">
                        <a class="page-link shadow" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8"/>
                        </svg></a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div> -->



@endsection
