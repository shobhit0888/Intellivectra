
@extends('landing.layouts.base')

@section('contents')

<div class="container-fluid pt-2 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container pt-2 py-4">
        <div class="text-center position-relative mx-auto">
            <h1 ><span class="text-primary"> Smart Classroom</span> Automation Framework</h1>
            <div class="para1 "> <p class="mb-0 text-justify " >This was the special purpose vehicle created under the Smart City Mission to deliver several Pan City and Area Based Development Initiatives with a focus on both infrastructure and ICT advancements in the city and at strategic locations.
            This will help the students to learn effectively, engage themselves to different kind of platforms for learning (Online/Offline/Digital Media Web content etc.).
            </p>
            <p class="mb-0 text-justify ">The video-based learning platform would help in developing the education for students more engaging and interactive. The content and assignment are delivered online to standardize the teaching delivery. 
            </p>
        </div>
        </div>
    </div>
</div>



<div class="container-fluid py-5 wow fadeInUp bg-primary" data-wow-delay="0.1s">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6">
                <h1 class="text-left">Solution Provided by IVT </h1>
                <ol class="ol-test">
                    <li>Integrated Blended Classroom Solutions</li>
                        <div class="position-relative pt-1" style="margin-bottom: -13px;">
                        <b><p>Integrated Single Box Device: - </p> </b>
                        </div>
                        <ul class="test1">
                            <li>Short Throw High-Definition Full HD LED Projection system,</li>
                            <li>High Speed Computing for superior Performance,</li>
                            <li>Inbuilt cameras and software for Live Streaming video recording, and inbuilt speakers and microphones for audio capture,</li>
                            <li>Class recording software for remedial classes,</li>
                            <li>Live streaming and 2-way communication software</li>
                        </ul>
                    <li>Installation testing commissioning and project management</li>
                    <li>Operation Maintenance & Support for complete Smart School Infrastructure for 5 Years</li>
                    <li>Networking Cost for 5 Years for 4 School</li>

                </ol>
                <p>IVT has helped client to build a robust IT solution to enhance the academic performance of the students.</p>

            </div>

            <div class="col-lg-6" >
                <div class="case-gradient" style="position:relative; top: 10%; left: 35%;">
               <!-- <div class="oem-gradient-right" >
                    </div> -->
                    <img class="position-absolute  rounded wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/prayagraj.jpg')}}" style="object-fit:cover; margin-top:35px; width:500px; height:300px;position:relative; right: 10%; ">
            </div>
            </div>

            <!-- <div class="col-lg-6" >
                <div class="card" style="min-height: 300px; position:relative; top: 20%; left: 20%;">
                    <img class="position-absolute  rounded wow zoomIn" data-wow-delay="0.9s" src="{{ asset('assets/img/prayagraj.jpg')}}" style="object-fit:cover; margin-top:35px; width:500px; height:300px">
                </div>
            </div> -->
        </div>
    </div>
</div>


@include('landing.components.get-in-touch')

@endsection
