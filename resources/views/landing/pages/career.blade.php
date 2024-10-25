
@extends('landing.layouts.base')

@section('contents')

    <!-- <div class="container-fluid py-5 wow fadeInUp bg-primary" data-wow-delay="0.1s">
        <div class="container">
            <div class="career-box-title pt-3 mx-0 mx-md-5" >
                <div class="d-flex  flex-column flex-md-row  align-items-center justify-content-between pb-3">
                    <div class="text-left ml-0 ml-md-4">
                        <h6 class="fw-bold text-primary pl-2">Find Open Jobs</h6>
                        <input class="title-box" placeholder="Search by job title/ref. code"></input>
                    </div>
                    <div class="text-left">
                        <h6 class="fw-bold text-primary pl-2">Located in</h6>
                        <input class="title-box" placeholder="Office, data center, or remote locations"></input>
                    </div>
                    <div class="d-flex align-items-center justify-content-center">
                        <button class="btn btn-primary btn-sm cereer-search-btn mr-3" >
                            <span class="input-start-icon"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
                                </svg></span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" style="margin-top:-30px;">
        <div class="container">
            <h1 class="text-center" style="color:black;">IVT <span class="text-primary">Careers</span></h1>
            <p class="text-justify">
                At Intelli Vectra Technologies, we are committed to developing a culture that is innovative, collaborative, and growth-oriented. We're excited that you're considering joining our team as we continue to push boundaries, drive change, and make a positive impact in the world.

                Here, you'll find more than just a job you'll find opportunities to thrive, grow your skills, and contribute to meaningful projects that shape the future. Whether you're a seasoned professional or just starting your career journey, we have a place for you. Check out our current openings, learn more about our company, and see why Intelli Vectra can be the ideal fit for you. We're dedicated to helping our employees realise their full potential by encouraging their talents and providing them with the necessary support.</p>
        </div>
    </div>


    <div class="container">
        <div class="accordion" id="accordionExample">
            <div class="card">
                <div class="card-career p-3" >
                    <div data-toggle="collapse" data-target="#collapseOne" aria-expanded="true">
                        <img src="{{ asset('assets/img/car-1.png')}}" class="rounded-circle mr-4" alt="Cinque Terre" width="64" height="60" > <span class="title">Lead Generation </span>
                    </div>

                    <div class="acoord-btn text-right mr-2 pb-3 ">
                        <a href="{{ route('career.apply')}}" class="rounded-career-btn mr-2 py-2 px-3 bg-dark mx-2">Apply <i class=" fas fa-arrow-right fw-normal"></i></a>
                        {{-- <span  class="accicon"><i class=" rounded-career-arrow py-2 px-3 fas fa-angle-down rotate-icon"></i></span> --}}
                    </div>
                </div>
                <div id="collapseOne" class="collapse " data-parent="#accordionExample">
                    <div class="card-body">

                        <h6 class="fw-bold">Job Type: Remote</h6>
                        <h6 class="fw-bold">Location: Bangalore, INDIA</h6>
                        <h6 class="fw-bold">Responsibilities</h6>
                        <ul>
                            <li>Conduct lead generation, prospecting, and qualifying potential new clients.</li>
                            <li>Research companies to create strategic communication plans.</li>
                            <li>Proactively schedule calls with perspective clients via phone and email (including cold calling).</li>
                            <li>Educate prospective clients on the IVT product offerings and services.</li>
                            <li>Shadow and partner with Sales Managers with a goal of supporting their monthly and annual revenue targets.</li>
                            <li>Interact with other sales, marketing, and project delivery staff to collaboratively determine customer needs. </li>
                            <li>Respond to requests from customers as needed in courteous and professional manner.</li>
                            <li>Help Sales manager with backend support and communication related to client servicing. </li>
                        </ul>

                        <h6 class="fw-bold">Requirements and skills</h6>
                        <ul>
                            <li>Inside/telephone sales experience</li>
                            <li>Strong communications skills</li>
                            <li>Outgoing and friendly; able to quickly build professional rapport with individuals through various communications channels such as telephone and email and in person meetings.</li>
                            <li>A minimum of 2 years in a professional selling role, a past exposure to IT industry product and services will be an added advantage.</li>
                            <li>Sales-oriented and goal-oriented, self-starting, and able to work without constant supervision.</li>
                            <li>Proven ability to get results and meet commitments.</li>
                            <li>Ability to work individually and in a team.</li>
                            <li>Previous experience in solution selling will be a plus.</li>
                        </ul>

                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-career p-3">
                    <div  data-toggle="collapse" data-target="#collapseThree" aria-expanded="true">
                        <img src="{{ asset('assets/img/car-2.png')}}" class="rounded-circle mr-4" alt="Cinque Terre" width="64" height="60" > <span class="title">L1 Support Engineer (On-site) </span>
                    </div>

                    <div class="acoord-btn text-right mr-2  pb-3">
                        <a href="{{ route('career.apply')}}" class="rounded-career-btn mr-2 py-2 px-3 bg-dark mx-2">Apply <i class=" fas fa-arrow-right fw-normal"></i></a>
                        {{-- <span  class="accicon"><i class=" rounded-career-arrow py-2 px-3 fas fa-angle-down rotate-icon"></i></span> --}}
                    </div>
                </div>
                <div id="collapseThree" class="collapse" data-parent="#accordionExample">
                    <div class="card-body">
                        <h6 class="fw-bold">Company: Intelli Vectra Technologies Private Limited, Dubai  </h6>
                        <h6 class="fw-bold">Location: Dubai, UAE </h6>
                        <h6 class="fw-bold">Language: English, Arabic and French </h6>
                        <h6 class="fw-bold">Job Description</h6>
                        <ul>
                            <li>Proficient knowledge and understanding of Desktop software and hardware technologies. </li>
                            <li>Troubleshooting issues on Windows Clients (End user machines) </li>
                            <li>Experience with Service management tool – ex – Service now.</li>
                            <li>Should have good expertise on EUC tools, remote support tools, MS office and outlook. </li>
                            <li>Preferable to have a good understanding of Lync, VPN, and mobile device support.</li>
                            <li>Should be aware of ITIL process of Incident, Change, Problem, Service Request, and related activities like spare and buffer stock management.</li>
                            <li>Proven work experience as a Desktop Support Engineer, Technical Support Engineer, or similar role</li>
                            <li>Hands-on experience with Windows/Linux/Mac OS environments</li>
                            <li>Working knowledge of office automation products and computer peripherals, like printers and scanners</li>
                            <li>Knowledge of network security practices and anti-virus programs </li>
                            <li>Customer-oriented attitude. </li>
                        </ul>
                        <h6 class="fw-bold">Skills Required:</h6>
                        <ul>
                            <li>Good to have – knowledge in AD and smart hands and feet support.</li>
                            <li>Good to have – knowledge and experience of supporting MAC devices and tablets.</li>
                            <li>Excellent problem-solving and multitasking skills</li>
                        </ul>
                        <h6 class="fw-bold">Preferred Qualifications: </h6>
                        <ul>
                            <li>Bachelor’s degree in computer science, IT, or information systems, or equivalent experience. </li>
                        </ul>
                        <h6 class="fw-bold">Benefits: </h6>
                        <ul>
                            <li><strong>Visa Formalities and Airfare:</strong> Company will handle all necessary visa formalities for employees traveling between Dubai and India initially. </li>
                            <li><strong>Initial Accommodation:</strong> Upon arrival in Dubai, Company will cover the cost of accommodation in a hotel for one week to help employees settle in.</li>
                            <li><strong>Assistance with Finding Accommodation:</strong> IVT will assist employees in finding suitable accommodation near their workplace in Dubai, easing their transition to the new location.</li>
                            <li><strong>Medical Insurance: </strong>Company will provide comprehensive medical insurance coverage for employees during their stay in Dubai, ensuring their health and wellbeing are taken care of.  </li>
                            <li><strong>Round-Trip Ticket: </strong> Company will provide employees with a round-trip ticket from Dubai to India and back, allowing them to visit their family at home. This benefit includes one month of paid leave to spend with their families.  </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-career p-3">
                    <div  data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true">
                        <img src="{{ asset('assets/img/car-3.png')}}" class="rounded-circle mr-4" alt="Cinque Terre" width="64" height="60" > <span class="title">L2 Support Engineer (On-site) </span>
                    </div>

                    <div class="acoord-btn text-right mr-2  pb-3">
                        <a href="{{ route('career.apply')}}" class="rounded-career-btn mr-2 py-2 px-3 bg-dark mx-2 arrow__carrer">Apply <i class=" fas fa-arrow-right fw-normal"></i></a>
                        {{-- <span  class="accicon"><i class=" rounded-career-arrow py-2 px-3 fas fa-angle-down rotate-icon"></i></span> --}}
                    </div>
                </div>
                <div id="collapseTwo" class="collapse" data-parent="#accordionExample">
                    <div class="card-body">

                        <h6 class="fw-bold">Company: Intelli Vectra Technologies Private Limited, Dubai  </h6>
                        <h6 class="fw-bold">Location: Dubai, UAE </h6>
                        <h6 class="fw-bold">Job Description</h6>
                        <ul>
                            <li>Proficient knowledge and understanding of Desktop software and hardware technologies</li>
                            <li>Troubleshooting issues on Windows Clients (End user machines) </li>
                            <li>Experience with Service management tool – ex – Service now. </li>
                            <li>Should have good expertise on EUC tools, remote support tools, MS office and outlook. </li>
                            <li>Preferable to have a good understanding of Lync, VPN, and mobile device support.</li>
                            <li>Should be aware of ITIL process of Incident, Change, Problem, Service Request, and related activities like spare and buffer stock management.  </li>
                            <li>Proven work experience as a Desktop Support Engineer, Technical Support Engineer, or similar role .</li>
                            <li>Hands-on experience with Windows/Linux/Mac OS environments.</li>
                            <li>Working knowledge of office automation products and computer peripherals, like printers and scanners </li>
                            <li>Knowledge of network security practices and anti-virus programs </li>
                            <li>Customer-oriented attitude.</li>
                            <li>Hands-on experience with Windows/Linux/Mac OS environments </li>
                            <li>Working knowledge of office automation products and computer peripherals, like printers and scanners </li>
                            <li>Knowledge of network security practices and anti-virus programs </li>
                            <li>Telephonic support to End Users and co-ordination with Vendors, Client Problem
                                Management </li>
                            <li>Proactive monitoring & Perform documented Escalation process. </li>
                            <li>Troubleshooting on Application Support (Off Shelf or Customized) </li>
                            <li>Troubleshooting on Printers & MFDs </li>
                            <li>Troubleshooting on VPN software and Collaboration tools </li>
                            <li>Troubleshooting on Password Reset tools and Remote-Control tools. </li>
                            <li>Troubleshooting of MS Windows & Office, Desktops, Laptops, iPAD Peripherals and
                                Networking</li>
                            <li>Troubleshooting Application and Workplace IT & Communications & Collaboration
                                Support</li>
                            <li>Interaction with internal and external stakeholders. </li>
                            <li>Strong knowledge of Microsoft based operating systems with emphasis on Windows 7, Windows 10 and Office 2013.</li>
                        </ul>

                        <h6 class="fw-bold"> Skills Required:</h6>
                        <ul>
                            <li>Good to have – knowledge in AD and smart hands and feet support. </li>
                            <li>Good to have – knowledge and experience of supporting MAC devices and tablets </li>
                            <li>Excellent problem-solving and multitasking skills </li>
                        </ul>

                        <h6 class="fw-bold">Preferred Qualifications:</h6>
                        <ul>
                            <li>Bachelor's Degree in computer science, IT, or information systems, or equivalent experience. </li>
                        </ul>

                        <h6 class="fw-bold">Benefits:</h6>
                        <ul>
                            <li><strong>Visa Formalities and Airfare :</strong> Company will handle all necessary visa formalities for employees traveling between Dubai and India initially. </li>
                            <li><strong>Initial Accommodation : </strong>Upon arrival in Dubai, Company will cover the cost of accommodation in a hotel for one week to help employees settle in.  </li>
                            <li><strong>Assistance with Finding Accommodation : </strong> Company will assist employees in finding suitable accommodation near their workplace in Dubai, easing their transition to the new location.  </li>
                            <li><strong>Medical Insurance :</strong>Company will provide comprehensive medical insurance coverage for employees during their stay in Dubai, ensuring their health and wellbeing are taken care of.  </li>
                            <li><strong>Round-Trip Ticket :</strong> Company will provide employees with a round-trip ticket from Dubai to India and back, allowing them to visit their family at home. This benefit includes one month of paid leave to spend with their families.  </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="container-fluid pt-2 wow fadeInUp" data-wow-delay="0.3s">
        <div class="container py-4">
            <div class="text-center position-relative mx-auto">
                <h1>Contact<span class="text-primary"> Us</span> </h1>
                <p class="mb-0">Connect with Us Today to Enhance Efficiency and Drive Growth Together.</p>
            </div>
            <div class="row g-5">
                <div class="col-lg-12 py-4" data-wow-delay="0.9s">
                    <div class="row justify-content-center">
                        <div class="col-lg-3 col-md-6 col-sm-12 mb-2">
                            <div class="card contact-card d-flex align-items-start flex-column justify-content-start ">
                                <div class="d-flex align-items-center flex-row justify-content-start pb-2">
                                    <img src="{{asset('assets/img/phone.png')}}">
                                    <div class="">
                                        <p style="margin-bottom: 0px">24*7 Services</p>
                                        <h6 class="text-primary contact-text">Call Us On</h6>
                                    </div>
                                </div>
                                <h6 class="contact-items">Tel: +91-012-4496-0635</h6>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 mb-2">
                            <div class="card contact-card d-flex align-items-start flex-column justify-content-start">
                                <div class="d-flex align-items-center flex-row justify-content-start pb-2">
                                    <img class="pr-2" src="{{asset('assets/img/email.png')}}">
                                    <div class="">
                                        <p style="margin-bottom: 0px">Mail</p>
                                        <h6 class="text-primary contact-text">Mail Address</h6>
                                    </div>
                                </div>
                                <h6 class="contact-items">info@intellivectra.tech</h6>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 mb-2">
                            <div class="card contact-card d-flex align-items-start flex-column justify-content-start">
                                <div class="d-flex align-items-center flex-row justify-content-start pb-2">
                                    <img class="pr-2" src="{{asset('assets/img/location.png')}}">
                                    <div class="">
                                        <p style="margin-bottom: 0px">Location</p>
                                        <h6 class="text-primary contact-text">Visit Us At</h6>
                                    </div>
                                </div>
                                <h6 class="contact-items">2nd Floor, Plot No. 29, Maruti Industrial Area, Sector-18, Gurugram–122015 (Haryana).</h6>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 mb-2">
                            <div class="card contact-card d-flex align-items-start flex-column justify-content-start">
                                <div class="d-flex align-items-center flex-row justify-content-start pb-2">
                                    <img class="pr-2" src="{{asset('assets/img/time.png')}}">
                                    <div class="">
                                        <p style="margin-bottom: 0px">Office Hours</p>
                                        <h6 class="text-primary contact-text">Opening Time</h6>
                                    </div>
                                </div>
                                <h6 class="contact-items">Mon - Fri : 9am - 8pm <br><span style="color:red;">Sat - Sun (Closed)</span></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
