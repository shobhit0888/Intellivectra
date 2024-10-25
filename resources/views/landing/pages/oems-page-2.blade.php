@extends('landing.layouts.base')

@section('contents')
    <div class="container-fluid pt-md-5 pb-md-5  pt-3 pb-4 wow fadeInUp bg-primary" data-wow-delay="0.1s">
        <div class="container ">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 order-md-1">
                    <div class="d-flex flex-row justify-content-start">
                        {{-- <h4 class="pb-2 fw-bold"><span class="text-primary">  Disk Archive Corporation </span></h4> --}}
                        <div class="oems-b">
                            <img alt="oems disk" style="width: 250px;" src="{{ asset('assets/img/brand/b-10.png') }}"
                                class="" />
                        </div>
                    </div>
                    <div class="d-flex flex-column justify-content-center mt-3">
                        <ul class="nav nav-pills nav-fill mb-3" id="pills-tab" role="tablist">
                            <li class="oems-card nav-item mb-2" role="presentation">

                                <a class=" active" id="pills-introduction-infotrend-tab" data-bs-toggle="pill"
                                    href="#pills-introduction-infotrend" role="tab"
                                    aria-controls="pills-introduction-infotrend" aria-selected="true">
                                    <div class="oem-titile-tab">
                                        <h5 class="fw-bold pb-1 text-primary right-titile">Introduction</h5>
                                    </div>
                                </a>

                            </li>
                            <li class="oems-card nav-item mb-2" role="presentation">
                                <a class=" " id="pills-benifits-infotrend-tab" data-bs-toggle="pill"
                                    href="#pills-benifits-infotrend" role="tab" aria-controls="pills-benifits-infotrend"
                                    aria-selected="false">
                                    <div class="oem-titile-tab">
                                        <h5 class="fw-bold pb-1 text-primary right-titile">Benefits</h5>
                                    </div>
                                </a>

                            </li>
                            <li class="oems-card nav-item mb-2" role="presentation">
                                <a class="" id="pills-journey-infotrend-tab" data-bs-toggle="pill"
                                    href="#pills-journey-infotrend" role="tab" aria-controls="pills-journey-infotrend"
                                    aria-selected="false">
                                    <div class="oem-titile-tab">
                                        <h5 class="fw-bold pb-1 text-primary right-titile">Achievement</h5>
                                    </div>
                                </a>
                            </li>
                        </ul>

                    </div>
                    <div class="tab-content pt-2" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-introduction-infotrend" role="tabpanel"
                            aria-labelledby="pills-introduction-infotrend-tab">

                            <p class="mb-4 text-justify">With a rich history spanning over 30 years, Infortrend Technology
                                is a leading
                                provider of
                                enterprise data storage solutions. Founded in 1993 and publicly listed on the Taiwan Stock
                                Exchange since 2002, Infortrend has established itself as a reputable and reliable player in
                                the industry. Headquartered in Taipei, Taiwan, with a workforce of 500 employees worldwide,
                                Infortrend operates with a commitment to delivering high-quality products and services to
                                its
                                global customer base.</p>
                            <h4>Product Offerings</h4>
                            <p class="text-justify">Infortrend offers a wide range of storage solutions tailored to meet the
                                diverse
                                needs of
                                businesses, from small and medium-sized enterprises (SMBs) to large enterprises. Their
                                product lines include ibm-out NAS systems, unified storage solutions, SAN storage,
                                storage servers, and AI storage appliances. With a variety of form factors and
                                communication interfaces available, Infortrend ensures complete compatibility with various
                                enterprise applications, offering flexibility and scalability.</p>

                        </div>
                        <div class="tab-pane fade" id="pills-benifits-infotrend" role="tabpanel"
                            aria-labelledby="pills-benifits-infotrend-tab">
                            <p class="mt-2 mb-3">
                                Benefits of Choosing Infortrend:
                            </p>
                            <ul style="margin-left:-26px;">
                                <li><strong>Comprehensive Solutions:</strong> Tailored storage solutions for businesses of
                                    all sizes
                                    and industries.</li>
                                <li><strong>Reliability and Performance:</strong>High-performance systems with top
                                    reliability.</li>
                                <li><strong>Global Service and Support:</strong> Worldwide presence for seamless
                                    installation and
                                    maintenance.</li>

                            </ul>
                            <h4>Technology Advantages:
                            </h4>
                            <p>Infortrend excels in hardware design and firmware integration, prioritising
                                price-performance,
                                efficiency, and reliability. Their streamlined firmware architecture optimises data
                                processing
                                for various applications, while Intelligent Drive Recovery (IDR) technology enhances data
                                integrity and minimises downtime, ensuring system reliability.</p>

                        </div>
                        <div class="tab-pane fade" id="pills-journey-infotrend" role="tabpanel"
                            aria-labelledby="pills-journey-infotrend-tab">
                            <p class="mt-2 mb-3 text-justify">
                                Infortrend is committed to providing exceptional service and support to its customers
                                globally.
                                With regional branch offices in key locations such as the USA, UK, Germany, China, and
                                Japan, as well as a network of channel partners, they offer professional services and
                                round-the-clock assistance.

                            </p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 order-md-2">
                    <div class="oem-gradient-right">
                    </div>
                    <img alt="oems disk" src="{{ asset('assets/img/oems/infortrend.png') }}" class="oem-img-right" />
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid pt-md-5 pb-md-5  pt-5 pb-4 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container ">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 order-2 order-md-1">
                    <div class="oem-gradient-left">
                    </div>
                    <img alt="oems disk" src="{{ asset('assets/img/oems/dellf.png') }}" class="oem-img-left" />
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 order-1 order-md-2">
                    <div class="d-flex flex-row justify-content-md-end  justify-content-start">
                        {{-- <h4 class="pb-2 fw-bold"><span class="text-primary">  dell  </span></h4> --}}
                        <div class="oems-b">
                            <img alt="oems disk" style="width: 200px; margin-top:-40px;"
                                src="{{ asset('assets/img/brand/b-11.png') }}" class="" />
                        </div>
                    </div>
                    <div class="d-flex flex-column justify-content-center mt-3">
                        <ul class="nav nav-pills nav-fill mb-3" id="pills-tab" role="tablist">
                            <li class="oems-card nav-item mb-2" role="presentation">

                                <a class=" active" data-bs-toggle="pill" href="#pills-introduction-dell" role="tab"
                                    aria-controls="pills-introduction-dell" aria-selected="true">
                                    <div class="oem-titile-tab">
                                        <h5 class="fw-bold pb-1 text-primary left-titile">Introduction</h5>
                                    </div>
                                </a>

                            </li>
                            <li class="oems-card nav-item mb-2" role="presentation">
                                <a class=" " data-bs-toggle="pill" href="#pills-benifits-dell" role="tab"
                                    aria-controls="pills-benifits-dell" aria-selected="false">
                                    <div class="oem-titile-tab">
                                        <h5 class="fw-bold pb-1 text-primary left-titile">Benefits</h5>
                                    </div>
                                </a>

                            </li>
                            <li class="oems-card nav-item mb-2" role="presentation">
                                <a class="" data-bs-toggle="pill" href="#pills-journey-dell" role="tab"
                                    aria-controls="pills-journey-dell" aria-selected="false">
                                    <div class="oem-titile-tab">
                                        <h5 class="fw-bold pb-1 text-primary left-titile">Achievement</h5>
                                    </div>
                                </a>
                            </li>
                        </ul>

                    </div>
                    <div class="tab-content pt-2" id="pills-tabContent">
                        <div class="tab-pane fade show active " id="pills-introduction-dell" role="tabpanel"
                            aria-labelledby="pills-introduction-dell-tab">

                            <p class="mb-4 text-justify">Dell Technologies is revolutionising data management and
                                infrastructure
                                solutions,
                                empowering businesses to innovate and thrive in today's digital landscape. Leveraging
                                intelligent technology, Dell offers a comprehensive range of devices, servers, storage
                                solutions, and as-a-service options to drive continuous innovation and enhance productivity.

                            </p>
                            <p class="text-justify">Their approach to data management is centred around delivering simple
                                and consistent
                                cloud experiences, AI-based laptops, proactive storage solutions, and automated servers.
                                By prioritising security, scalability, and efficiency, Dell enables organisations to
                                accelerate
                                from ideation to implementation rapidly.</p>
                        </div>
                        <div class="tab-pane fade mt-2 pt-3" id="pills-benifits-dell" role="tabpanel"
                            aria-labelledby="pills-benifits-dell-tab">
                            <p class="mt-2 mb-3 text-justify">Dell has innovated data management solutions with devices
                                made from
                                reclaimed materials,
                                incorporating built-in security features. Their PowerEdge servers, powered by Intel Xeon
                                Scalable processors, provide scalable performance for evolving compute needs.
                                Additionally, PowerStore storage allows proactive monitoring and predictive analysis,
                                enhancing issue resolution and capacity planning.
                            </p>
                            <p>
                                Key Benefits of choosing Dell are -
                            </p>
                            <ul style="margin-left:-26px;">
                                <li><strong>Enhanced Security:</strong> Dell devices feature built-in intruder protection
                                    and
                                    auto-dimming for heightened privacy.
                                </li>
                                <li><strong>Scalable Performance:</strong>Dell PowerEdge servers offer scalable performance
                                    with
                                    Intel Xeon Scalable processors.

                                </li>
                                <li><strong>Proactive Issue Resolution:</strong>PowerStore storage enables proactive
                                    monitoring and
                                    faster issue resolution.</li>
                                <li><strong>Sustainability:</strong>Dell's devices promote sustainability with reclaimed
                                    materials.</li>
                                <li><strong>Efficient Capacity Planning:</strong>PowerStore storage facilitates accurate
                                    capacity
                                    planning for optimised resources.</li>

                            </ul>

                        </div>
                        <div class="tab-pane fade mt-2 pt-3" id="pills-journey-dell" role="tabpanel"
                            aria-labelledby="pills-journey-dell-tab">
                            <p class="mt-2 mb-3 text-justify">
                                In terms of achievements, Dell has received recognition for its innovative products and
                                commitment to sustainability. Awards such as the TechTarget Storage Products of the Year
                                highlight Dell's excellence in product development, while their sustainability goals
                                demonstrate a dedication to ethical practices and environmental stewardship.
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid pt-md-5 pb-md-5  pt-5 pb-4   wow fadeInUp bg-primary" data-wow-delay="0.1s">
        <div class="container ">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 order-md-1">
                    <div class="d-flex flex-row justify-content-between">
                        {{-- <h4 class="pb-2 fw-bold"><span class="text-primary">  ibm Computing </span></h4> --}}
                        <div class="oems-b">
                            <img alt="oems disk" style="width: 250px; margin-top:-20px;"
                                src="{{ asset('assets/img/brand/b-13.png') }}" class="" />
                        </div>
                    </div>
                    <div class="d-flex flex-column justify-content-center mt-3">
                        <ul class="nav nav-pills nav-fill mb-3" id="pills-tab" role="tablist">
                            <li class="oems-card nav-item mb-2" role="presentation">

                                <a class=" active" data-toggle="pill" href="#pills-introduction-ibm" role="tab"
                                    aria-controls="pills-introduction-ibm" aria-selected="true">
                                    <div class="oem-titile-tab">
                                        <h5 class="fw-bold pb-1 text-primary right-titile">Introduction</h5>
                                    </div>
                                </a>

                            </li>
                            <li class="oems-card nav-item mb-2" role="presentation">
                                <a class=" " data-toggle="pill" href="#pills-benifits-ibm" role="tab"
                                    aria-controls="pills-benifits-ibm" aria-selected="false">
                                    <div class="oem-titile-tab">
                                        <h5 class="fw-bold pb-1 text-primary right-titile">Benefits</h5>
                                    </div>
                                </a>

                            </li>
                            <li class="oems-card nav-item mb-2" role="presentation">
                                <a class="" data-toggle="pill" href="#pills-journey-ibm" role="tab"
                                    aria-controls="pills-journey-ibm" aria-selected="false">
                                    <div class="oem-titile-tab">
                                        <h5 class="fw-bold pb-1 text-primary right-titile">Achievement</h5>
                                    </div>
                                </a>
                            </li>
                        </ul>

                    </div>
                    <div class="tab-content pt-2" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-introduction-ibm" role="tabpanel"
                            aria-labelledby="pills-introduction-ibm-tab">
                            <p class="mb-4 text-justify"> IBM is a global leader in technology, renowned for its innovative
                                solutions
                                that empower
                                businesses to thrive in today's digital landscape. With a rich history spanning decades, IBM
                                continues to push the boundaries of what's possible, driving progress and transformation
                                across industries worldwide.
                            </p>
                            <p class="text-justify">Over the years, IBM has established itself as a pioneer in data
                                management, cloud
                                computing, artificial intelligence, and other transformative technologies. Through strategic
                                partnerships and continuous innovation, IBM has developed robust data management
                                solutions that empower organisations to unlock the full potential of their data assets,
                                driving
                                business growth and innovation.

                            </p>
                        </div>
                        <div class="tab-pane fade" id="pills-benifits-ibm" role="tabpanel"
                            aria-labelledby="pills-benifits-ibm-tab">
                            <p class="mt-2 mb-3">
                                Key benefits of choosing IBM are -
                            </p>
                            <ul style="margin-left:-26px;">
                                <li><strong>Enhanced Scalability:</strong> IBM provides scalable solutions for evolving
                                    business needs,
                                    ensuring seamless growth.</li>
                                <li><strong>Improved Efficiency:</strong>Streamlined data management processes and enhanced
                                    automation boost organisational efficiency.
                                </li>
                                <li><strong>Enhanced Security:</strong>IBM solutions offer built-in governance and security
                                    features,
                                    ensuring data privacy and protection.</li>
                                <li><strong>Accelerated Innovation:</strong> IBM's advanced analytics, AI, and cloud
                                    computing drive
                                    faster innovation for businesses.
                                </li>
                                <li><strong>Cost Savings:</strong>IBM optimises data management, reducing complexity and
                                    operational costs for greater ROI.
                                </li>
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="pills-journey-ibm" role="tabpanel"
                            aria-labelledby="pills-journey-ibm-tab">
                            <p class="mt-2 mb-3 text-justify">
                                IBM's leadership in technology is affirmed by its recognition in industry reports like The
                                Forrester Wave™ for Data Management for Analytics. Moreover, successful implementations
                                with renowned clients highlight tangible benefits such as increased scalability, reduced
                                costs, and improved performance. These achievements underscore IBM's commitment to
                                delivering impactful solutions that drive business growth and efficiency through optimised
                                data management.


                            </p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 order-md-2">
                    <div class="oem-gradient-right">
                    </div>
                    <img alt="oems disk" src="{{ asset('assets/img/ibm1.png') }}" class="oem-img-right" />
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid pt-md-5 pb-md-5  pt-3 pb-4 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container ">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 order-2 order-md-1">
                    <div class="oem-gradient-left">
                    </div>
                    <img alt="oems disk" src="{{ asset('assets/img/oems/couchbase.jpg') }}" class="oem-img-left" />
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 order-1 order-md-2">
                    <div class="d-flex flex-row justify-content-md-end  justify-content-start">
                        {{-- <h4 class="pb-2 fw-bold"><span class="text-primary">  couchbase  </span></h4> --}}
                        <div class="oems-b">
                            <img alt="oems disk" style="width: 200px;" src="{{ asset('assets/img/brand/b-17.png') }}"
                                class="" />
                        </div>
                    </div>
                    <div class="d-flex flex-column justify-content-center mt-3">

                        <ul class="nav nav-pills nav-fill mb-3" id="pills-tab" role="tablist">
                            <li class="oems-card nav-item mb-2" role="presentation">

                                <a class=" active" data-toggle="pill" href="#pills-introduction-couchbase"
                                    role="tab" aria-controls="pills-introduction-couchbase" aria-selected="true">
                                    <div class="oem-titile-tab">
                                        <h5 class="fw-bold pb-1 text-primary left-titile">Introduction</h5>
                                    </div>
                                </a>

                            </li>
                            <li class="oems-card nav-item mb-2" role="presentation">
                                <a class=" " data-toggle="pill" href="#pills-benifits-couchbase" role="tab"
                                    aria-controls="pills-benifits-couchbase" aria-selected="false">
                                    <div class="oem-titile-tab">
                                        <h5 class="fw-bold pb-1 text-primary left-titile">Benefits</h5>
                                    </div>
                                </a>

                            </li>
                            <li class="oems-card nav-item mb-2" role="presentation">
                                <a class="" data-toggle="pill" href="#pills-journey-couchbase" role="tab"
                                    aria-controls="pills-journey-couchbase" aria-selected="false">
                                    <div class="oem-titile-tab">
                                        <h5 class="fw-bold pb-1 text-primary left-titile">Achievement</h5>
                                    </div>
                                </a>
                            </li>
                        </ul>

                    </div>
                    <div class="tab-content pt-2" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-introduction-couchbase" role="tabpanel"
                            aria-labelledby="pills-introduction-couchbase-tab">

                            <p class="mb-4 text-justify">Couchbase, a leading provider of distributed NoSQL cloud
                                databases, stands out
                                for its
                                unmatched versatility, performance, scalability, and financial value for cloud, mobile, AI,
                                and
                                edge computing applications. With Couchbase Capella now featuring generative AI coding
                                assistance, developers can enhance their productivity further.
                            </p>
                            <p class="text-justify">Over the years, Couchbase has demonstrated impressive memory-first
                                performance for
                                critical applications while allowing for workload performance tuning, which significantly
                                reduces operating costs. The platform's developer-friendly approach and versatility without
                                complexity make it a preferred choice for modern applications with diverse data access
                                patterns.</p>
                        </div>
                        <div class="tab-pane fade" id="pills-benifits-couchbase" role="tabpanel"
                            aria-labelledby="pills-benifits-couchbase-tab">
                            <p class="mt-2 mb-3">
                                Key Benefits of using CouchBase’s services are -
                            </p>
                            <ul style="margin-left:-26px;">
                                <li><strong>Versatile Solutions:</strong> ICouchbase offers a comprehensive suite of cloud
                                    applications
                                    and infrastructure that cater to various business needs, ensuring flexibility and
                                    scalability.</li>

                                <li><strong>Enhanced Performance and Security:</strong> With Couchbase Cloud, users benefit
                                    from
                                    enhanced performance and robust security measures, ensuring data and
                                    applications are safeguarded at all times.
                                </li>
                                <li><strong>Cost Efficiency:</strong>Couchbase's offerings are designed to optimise costs,
                                    allowing
                                    businesses to reduce operating expenses while maximising productivity and
                                    performance.
                                </li>
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="pills-journey-couchbase" role="tabpanel"
                            aria-labelledby="pills-journey-couchbase-tab">
                            <p class="mt-2 mb-3 text-justify">
                                Couchbase's commitment to continuous innovation is evident through its integration of
                                traditional and generative AI in Fusion Cloud Applications, empowering businesses to
                                leverage AI capabilities effectively.

                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="container-fluid pt-md-5 pb-md-5  pt-4 pb-4 wow fadeInUp bg-primary" data-wow-delay="0.1s">
        <div class="container ">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 order-md-1">
                    <div class="d-flex flex-row justify-content-between">
                        {{-- <h4 class="pb-2 fw-bold"><span class="text-primary">  ibm Computing </span></h4> --}}
                        <div class="oems-b">
                            <img alt="oems disk" style="width: 250px;" src="{{ asset('assets/img/brand/b-18.png') }}"
                                class="" />
                        </div>
                    </div>
                    <div class="d-flex flex-column justify-content-center mt-3">
                        <ul class="nav nav-pills nav-fill" id="pills-tab" role="tablist">
                            <li class="oems-card nav-item" role="presentation">

                                <a class=" active" data-toggle="pill" href="#pills-introduction-piconets" role="tab"
                                    aria-controls="pills-introduction-piconets" aria-selected="true">
                                    <div class="oem-titile-tab">
                                        <h5 class="fw-bold pb-1 text-primary right-titile">Introduction</h5>
                                    </div>
                                </a>

                            </li>
                            <li class="oems-card nav-item" role="presentation">
                                <a class=" " data-toggle="pill" href="#pills-benifits-piconets" role="tab"
                                    aria-controls="pills-benifits-piconets" aria-selected="false">
                                    <div class="oem-titile-tab">
                                        <h5 class="fw-bold pb-1 text-primary right-titile">Benefits</h5>
                                    </div>
                                </a>

                            </li>
                            <li class="oems-card nav-item" role="presentation">
                                <a class="" data-toggle="pill" href="#pills-journey-piconets" role="tab"
                                    aria-controls="pills-journey-piconets" aria-selected="false">
                                    <div class="oem-titile-tab">
                                        <h5 class="fw-bold pb-1 text-primary right-titile">Achievement</h5>
                                    </div>
                                </a>
                            </li>
                        </ul>

                    </div>
                    <div class="tab-content pt-2" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-introduction-piconets" role="tabpanel"
                            aria-labelledby="pills-introduction-piconets-tab">

                            <p class="mb-4 text-justify"> picoNETS, established in 2017, is dedicated to enhancing the
                                internet
                                experience for users
                                worldwide through Deep Edge Caching and Content Delivery Network (CDN) solutions.
                                Their vision revolves around providing superior Quality of Service (QoS) to internet-enabled
                                businesses and services by bringing content closer to end-users.
                            </p>
                            <p class="text-justify">With a steadfast commitment to optimising content delivery and
                                software, picoNETS
                                has
                                emerged as a frontrunner in the industry. Their deployment of Deep Edge CDNs within
                                Telcos and ISPs, coupled with partnerships with major global video streaming companies,
                                has resulted in solutions demonstrating up to 14 times faster performance on 5G networks.
                            </p>
                        </div>
                        <div class="tab-pane fade" id="pills-benifits-piconets" role="tabpanel"
                            aria-labelledby="pills-benifits-piconets-tab">
                            <p class="mt-2 mb-3">
                                Benefits of Choosing picoNETS solutions include:
                            </p>
                            <ul style="margin-left:-26px;">
                                <li><strong>Higher Performance:</strong> Achieve significantly better performance than
                                    traditional
                                    CDNs, ensuring ultra-low latency and buffer-free experiences for users.</li>
                                <li><strong>Enhanced Security:</strong> With token-based authentication and secure content
                                    delivery,
                                    content partners can ensure the safety of their data.</li>
                                <li><strong>Real-time Analytics:</strong>Gain insights into content popularity in real-time,
                                    allowing for
                                    customization and optimization of content delivery strategies.</li>

                            </ul>
                        </div>
                        <div class="tab-pane fade" id="pills-journey-piconets" role="tabpanel"
                            aria-labelledby="pills-journey-piconets-tab">
                            <p class="mt-2 mb-3 text-justify">
                                Backed by a highly experienced team possessing over four decades of combined expertise
                                across various domains, including product development and sales, picoNETS stands poised
                                to drive innovation in the CDN space. Their cutting-edge offerings, such as picoCDN for
                                high-performance content delivery and Transcoding as a Service, cater to a wide range of
                                needs, ensuring seamless and efficient delivery of digital content.

                            </p>
                            {{-- <p class="text-justify">
                                piconets Computing is delivering cutting-edge solutions that simplify IT infrastructure, enhance
                                performance, and reduce costs for organisations worldwide. With the comprehensive suite of
                                products and services, customers can confidently navigate the complexities of modern IT
                                environments while unlocking the full potential of edge computing
                            </p> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 order-md-2">
                    <div class="oem-gradient-right">
                    </div>
                    <img alt="oems disk" src="{{ asset('assets/img/oems/piconet.jpg') }}" class="oem-img-right" />
                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid pt-md-5 pb-md-5  pt-2  pb-4 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container ">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 order-2 order-md-1">
                    <div class="oem-gradient-left">
                    </div>
                    <img alt="oems disk" src="{{ asset('assets/img/oems/redhat.jpg') }}" class="oem-img-left" />
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 order-1 order-md-2">
                    <div class="d-flex flex-row justify-content-md-end  justify-content-start">
                        {{-- <h4 class="pb-2 fw-bold"><span class="text-primary">  redhat  </span></h4> --}}
                        <div class="oems-b">
                            <img alt="oems disk" style="width: 200px;" src="{{ asset('assets/img/brand/b-19.png') }}"
                                class="" />
                        </div>
                    </div>
                    <div class="d-flex flex-column justify-content-center mt-3">

                        <ul class="nav nav-pills nav-fill " id="pills-tab" role="tablist">
                            <li class="oems-card nav-item" role="presentation">

                                <a class=" active" data-toggle="pill" href="#pills-introduction-redhat" role="tab"
                                    aria-controls="pills-introduction-redhat" aria-selected="true">
                                    <div class="oem-titile-tab">
                                        <h5 class="fw-bold pb-1 text-primary left-titile">Introduction</h5>
                                    </div>
                                </a>

                            </li>
                            <li class="oems-card nav-item " role="presentation">
                                <a class=" " data-toggle="pill" href="#pills-benifits-redhat" role="tab"
                                    aria-controls="pills-benifits-redhat" aria-selected="false">
                                    <div class="oem-titile-tab">
                                        <h5 class="fw-bold pb-1 text-primary left-titile">Benefits</h5>
                                    </div>
                                </a>

                            </li>
                            <li class="oems-card nav-item" role="presentation">
                                <a class="" data-toggle="pill" href="#pills-journey-redhat" role="tab"
                                    aria-controls="pills-journey-redhat" aria-selected="false">
                                    <div class="oem-titile-tab">
                                        <h5 class="fw-bold pb-1 text-primary left-titile">Achievement</h5>
                                    </div>
                                </a>
                            </li>
                        </ul>

                    </div>
                    <div class="tab-content pt-2" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-introduction-redhat" role="tabpanel"
                            aria-labelledby="pills-introduction-redhat-tab">

                            <p class="mb-4 text-justify">Red Hat, an open-source software solutions company, has been
                                instrumental in
                                revolutionising IT infrastructure with its flagship product, Red Hat Enterprise Linux. Over
                                the
                                years, the company has expanded its portfolio to include hybrid cloud infrastructure,
                                middleware, agile integration, cloud-native application development, and management and
                                automation solutions. By championing open technology, Red Hat has facilitated seamless
                                collaboration across platforms and environments, from datacenters to network edges, thus
                                empowering enterprises to build flexible and powerful IT infrastructure solutions.</p>
                            <p class="text-justify">With a legacy spanning more than 25 years, Red Hat has garnered the
                                trust of over
                                90% of
                                Fortune 500 companies, a testament to its unparalleled expertise and reliability. Notably,
                                in
                                2019, Red Hat made history with IBM's acquisition, marking the largest software acquisition
                                to date. This strategic partnership with IBM further strengthens Red Hat's commitment to
                                providing customers with freedom, choice, and flexibility in their IT operations
                                .</p>

                        </div>
                        <div class="tab-pane fade" id="pills-benifits-redhat" role="tabpanel"
                            aria-labelledby="pills-benifits-redhat-tab">
                            <p class="mt-2 mb-3">
                                Benefits of using Red Hat services include -
                            </p>
                            <ul style="margin-left:-26px;">
                                <li><strong>Versatile Solutions:</strong> Red Hat offers a wide range of solutions, from
                                    hybrid cloud
                                    infrastructure to automation, catering to diverse IT needs.
                                </li>

                                <li><strong>Trusted Provider:</strong> With over 25 years of experience, Red Hat is relied
                                    upon by more
                                    than 90% of Fortune 500 companies for its enterprise open-source solutions.
                                </li>
                                <li><strong>Innovation with Open Source:</strong>Red Hat fosters innovation through open
                                    technology,
                                    providing transparent and responsible solutions that drive flexibility and agility.
                                </li>
                                <li><strong>Simplified Operations:</strong>Red Hat's solutions streamline operations,
                                    enhance
                                    productivity, and reduce complexity for businesses.
                                </li>
                                <li><strong>Security and Stability:</strong>Red Hat prioritises security, stability, and
                                    reliability in
                                    its
                                    solutions, ensuring confidence in IT infrastructure.
                                </li>
                                <li><strong>Collaborative Development:</strong>Red Hat collaborates with open-source
                                    communities to
                                    develop secure, stable, and innovative technologies, pushing technological
                                    boundaries.</li>
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="pills-journey-redhat" role="tabpanel"
                            aria-labelledby="pills-journey-redhat-tab">
                            <p class="mt-2 mb-3 text-justify">
                                Also, redhat's unmatched support sets it apart in the industry. Each customer is assigned a
                                dedicated Level 2 Customer Support Engineer, ensuring personalised and expert
                                assistance. With support teams located worldwide and proactive health status monitoring,
                                redhat prioritises customer satisfaction and strives to provide exceptional service.

                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid pt-md-5 pb-md-5  pt-2  pb-4 mb-4 wow fadeInUp bg-primary" data-wow-delay="0.1s">
        <div class="container ">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 order-md-1">
                    <div class="d-flex flex-row justify-content-between">
                        {{-- <h4 class="pb-2 fw-bold"><span class="text-primary">  ibm Computing </span></h4> --}}
                        <div class="oems-b">
                            <img alt="oems disk" style="width: 200px;" src="{{ asset('assets/img/brand/roombr.svg') }}"
                                class="" />
                        </div>
                    </div>
                    <div class="d-flex flex-column justify-content-center mt-3">
                        <ul class="nav nav-pills nav-fill" id="pills-tab" role="tablist">
                            <li class="oems-card nav-item" role="presentation">

                                <a class=" active" data-toggle="pill" href="#pills-introduction-roombr" role="tab"
                                    aria-controls="pills-introduction-roombr" aria-selected="true">
                                    <div class="oem-titile-tab">
                                        <h5 class="fw-bold pb-1 text-primary right-titile">Introduction</h5>
                                    </div>
                                </a>

                            </li>
                            <li class="oems-card nav-item" role="presentation">
                                <a class=" " data-toggle="pill" href="#pills-benifits-roombr" role="tab"
                                    aria-controls="pills-benifits-roombr" aria-selected="false">
                                    <div class="oem-titile-tab">
                                        <h5 class="fw-bold pb-1 text-primary right-titile">Benefits</h5>
                                    </div>
                                </a>

                            </li>
                            <li class="oems-card nav-item" role="presentation">
                                <a class="" data-toggle="pill" href="#pills-journey-roombr" role="tab"
                                    aria-controls="pills-journey-roombr" aria-selected="false">
                                    <div s class="oem-titile-tab">
                                        <h5 class="fw-bold pb-1 text-primary right-titile">Achievement</h5>
                                    </div>
                                </a>
                            </li>
                        </ul>

                    </div>
                    <div class="tab-content pt-2" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-introduction-roombr" role="tabpanel"
                            aria-labelledby="pills-introduction-roombr-tab">
                            <p class="mb-4 text-justify"> In the world of technological innovation, Roombr stands at the
                                forefront,
                                revolutionising the
                                landscape of virtual collaboration with its groundbreaking Walltop Computer technology. As
                                the pioneer in this domain, Roombr has redefined the way we interact, collaborate, and
                                create in virtual environments.

                            </p>
                            <p class="text-justify">By integrating computing and projection systems, Roombr transforms any
                                wall into a
                                life-sized interactive screen, offering a truly immersive experience. Gone are the days of
                                2D
                                interactions; with Roombr, users step into a lifelike 3D computing environment, where
                                virtual
                                meetings and collaborations transcend the limitations of traditional video-conferencing.
                            </p>
                        </div>
                        <div class="tab-pane fade" id="pills-benifits-roombr" role="tabpanel"
                            aria-labelledby="pills-benifits-roombr-tab">
                            <p class="mt-2 mb-3">
                                Benefits of using Roombr include:
                            </p>
                            <ul style="margin-left:-26px;">
                                <li><strong>Immersive Collaboration:</strong> Experience lifelike 3D virtual meetings and
                                    collaborative
                                    sessions.</li>
                                <li><strong>Global Connectivity:</strong> Connect with colleagues worldwide, turning any
                                    room into a
                                    shared workspace.</li>
                                <li><strong>Seamless Integration:</strong>Intuitively combine hardware and software for
                                    effortless
                                    virtual collaboration.
                                </li>
                                <li><strong>High Performance:</strong>Enjoy powerful hardware specs for exceptional
                                    audiovisual
                                    quality.</li>
                                <li><strong>Efficient Workflow:</strong>Streamline collaboration with easy recording,
                                    archiving, and
                                    post-session discussion features.</li>

                            </ul>
                        </div>
                        <div class="tab-pane fade" id="pills-journey-roombr" role="tabpanel"
                            aria-labelledby="pills-journey-roombr-tab">
                            <p class="mt-2 mb-3 text-justify">
                                The journey of Roombr has been marked by relentless innovation and a commitment to
                                enhancing user experience. From the development of hardware to complement software
                                applications, Roombr ensures that virtual collaboration is as seamless and lifelike as
                                possible. With its state-of-the-art specifications, including a powerful Intel i5 10th
                                Generation
                                processor, integrated Harman Kardon speakers, and advanced IR technology for
                                interactivity, Roombr sets a new standard for performance and functionality.

                            </p>
                            {{-- <p class="text-justify">
                                roombr Computing is delivering cutting-edge solutions that simplify IT infrastructure, enhance
                                performance, and reduce costs for organisations worldwide. With the comprehensive suite of
                                products and services, customers can confidently navigate the complexities of modern IT
                                environments while unlocking the full potential of edge computing
                            </p> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 order-md-2">
                    <div class="oem-gradient-right">
                    </div>
                    <img alt="oems disk" src="{{ asset('assets/img/oems/roombr.jpg') }}" class="oem-img-right" />
                </div>
            </div>
        </div>
    </div>

    <div class="container ">
        <div class="col-12 wow slideInUp" data-wow-delay="0.1s">
            <nav aria-label="...">
                <ul class="pagination d-flex flex-row justify-content-between pagina__update">
                    <li class="page-item1 rounded disabled ">
                        <a class="page-link shadow" href="{{ route('oems') }}" tabindex="-1"><svg
                                xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-arrow-left-short" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5" />
                            </svg></a>
                    </li>
                    <div class="d-flex justify-row">
                        <li class="page-item2 rounded"><a class="page-link shadow" href="{{ route('oems') }}">1</a></li>
                        <li class="page-item2 rounded active disabled">
                            <a class="page-link shadow " href="">2 <span class="sr-only">(current)</span></a>
                        </li>
                    </div>
                    <li class="page-item1 rounded ">
                        <a class="page-link shadow" href="{{ route('oems-page2') }}"><svg
                                xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8" />
                            </svg></a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>


    @include('landing.components.get-in-touch')
@endsection
