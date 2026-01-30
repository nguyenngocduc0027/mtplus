@extends('frontend.index')
@section('content')
    <!-- Breadcrumb Section Start -->
    <div class="breadcrumb-area position-relative z-1">
        <img src="{{asset('frontend/assets/img/breadcrumb/br-line-shape.png')}}" alt="Shape"
            class="br-line-shape position-absolute top-0 start-0 w-100 h-100 z-n1">
        <img src="{{asset('frontend/assets/img/breadcrumb/br-shape-1.png')}}" alt="Shape" class="br-shape-one position-absolute z-n1 bounce">
        <img src="{{asset('frontend/assets/img/breadcrumb/br-shape-2.png')}}" alt="Shape"
            class="br-shape-two position-absolute bottom-0 z-n1 moveHorizontal">
        <div class="container-fluid px-xxl-5">
            <div class="row">
                <div class="col-md-10 offset-md-1 text-center">
                    <h2 class="section-title style-one fw-black text-title">Project Single</h2>
                    <ul class="br-menu list-unstyled">
                        <li><a href="{{route('home')}}"><img src="{{asset('frontend/assets/img/icons/home-icon.svg')}}" alt="Icon">HOME</a></li>
                        <li><a href="{{route('projects.index')}}"><img src="{{asset('frontend/assets/img/icons/home-icon.svg')}}" alt="Icon">PROJECTS</a>
                        </li>
                        <li>PROJECT SINGLE</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End -->

    <!-- Project Single Section Start -->
    <div class="container ptb-120">
        <div class="row">
            <div class="col-12">
                <div class="project-desc position-relative z-1 pt-90">
                    <div class="row">
                        <div class="col-xl-10 offset-xl-1">
                            <h1 class="section-title style-one text-title font-secondary fw-bold mb-30">Commercial &
                                Residential Building</h1>
                            <ul
                                class="single-project-metainfo d-flex flex-wrap justify-content-md-between list-unstyled mb-45">
                                <li>
                                    <span class="fw-medium d-block">Status</span>
                                    <span class="text-title fw-semibold d-block">Completed</span>
                                </li>
                                <li>
                                    <span class="fw-medium d-block">Project Type</span>
                                    <span class="text-title fw-semibold d-block">Building</span>
                                </li>
                                <li>
                                    <span class="fw-medium d-block">Project Area</span>
                                    <span class="text-title fw-semibold d-block">26,346.74 Sq. Ft.</span>
                                </li>
                                <li>
                                    <span class="fw-medium d-block">Commencement Date</span>
                                    <span class="text-title fw-semibold d-block">28 May, 2024</span>
                                </li>
                                <li>
                                    <span class="fw-medium d-block">Price Range</span>
                                    <span class="text-title fw-semibold d-block">$600k – $1.9M</span>
                                </li>
                            </ul>
                            <div class="service-desc">
                                <div class="single-img round-10 mb-35">
                                    <img src="assets/img/project/single-project-1.jpg" alt="Image" class="round-10">
                                </div>
                                <div class="single-para">
                                    <h6>Project Description</h6>
                                    <p>Renius Real Estate & Construction Group, every project tells a story of vision,
                                        precision, and impact. From luxury residential towers to expansive commercial hubs
                                        and infrastructure developments, our portfolio reflects a deep commitment to
                                        quality, innovation, and client satisfaction. Each build is carefully planned and
                                        expertly executed to meet the highest standards</p>
                                    <ul
                                        class="feature-item-list style-two d-flex flex-wrap list-unstyled pe-xxl-5 me-xxl-5">
                                        <li class="position-relative text-title fw-medium">Conceptualisation And Ideation
                                        </li>
                                        <li class="position-relative text-title fw-medium">Material Selection And
                                            Sustainability</li>
                                        <li class="position-relative text-title fw-medium">Detailed Design Development</li>
                                        <li class="position-relative text-title fw-medium">Building Code Compliance and
                                            Safety</li>
                                        <li class="position-relative text-title fw-medium">Sustainability Environmental
                                            Considerations</li>
                                        <li class="position-relative text-title fw-medium">Final Construction Documents</li>
                                    </ul>
                                </div>
                                <div class="single-para">
                                    <div class="row">
                                        <div class="col-md-6 pe-xxl-0">
                                            <div class="single-img round-10 mb-35">
                                                <img src="{{asset('frontend/assets/img/project/single-project-2.jpg')}}" alt="Image"
                                                    class="round-10">
                                            </div>
                                        </div>
                                        <div class="col-md-6 ps-xxl-4">
                                            <div class="project-highlight-box round-10 mb-35">
                                                <h6 class="mb-3">Post-Construction Evaluation</h6>
                                                <p>Our dedication to quality and customer satisfaction is evident in every
                                                    project we undertake. We invite you to explore our portfolio and see how
                                                    renius can </p>
                                                <p>Transform your vision into reality, creating spaces that inspire and
                                                    endure. we are committed to craftingthat reflect.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <p>In addition to residential and commercial projects, our portfolio also includes
                                        community developments that focus on enhancing local engagement. One notable project
                                        is a vibrant community center designed to host events and activities, fostering a
                                        sense of belonging among residents. Our team worked diligently to ensure the
                                        facility was both functional and inviting, incorporating outdoor spaces for
                                        recreation.</p>
                                </div>
                                <div class="single-para">
                                    <h6 class="mb-4">Popular Questions</h6>
                                    <div class="accordion style-one mb-50" id="accordionExample_one">
                                        <div class="accordion-item" data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                            aria-expanded="true" aria-controls="collapseFour" role="button">
                                            <div class="accordion-header" id="headingFour">
                                                <div class="accordion-button">
                                                    <span class="accord-arrow">
                                                        <i class="ri-arrow-down-s-fill plus"></i>
                                                        <i class="ri-arrow-up-s-fill minus"></i>
                                                    </span>
                                                    Can I consult you before buying land or property?
                                                </div>
                                            </div>
                                            <div id="collapseFour" class="accordion-collapse collapse show"
                                                aria-labelledby="headingFour" data-bs-parent="#accordionExample_one">
                                                <div class="accordion-body">
                                                    <p class="fs-xx-14">Renovations, and complete project management.
                                                        Whether you’re looking to build from the ground renovate an existing
                                                        structure, or invest in real estate with confidence, Renius delivers
                                                        trusted.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item collapsed" data-bs-toggle="collapse"
                                            data-bs-target="#collapseFive" aria-expanded="false"
                                            aria-controls="collapseFive" role="button">
                                            <div class="accordion-header" id="headingFive">
                                                <div class="accordion-button">
                                                    <span class="accord-arrow">
                                                        <i class="ri-arrow-down-s-fill plus"></i>
                                                        <i class="ri-arrow-up-s-fill minus"></i>
                                                    </span>
                                                    Are your services available outside the city?
                                                </div>
                                            </div>
                                            <div id="collapseFive" class="accordion-collapse collapse "
                                                aria-labelledby="headingFive" data-bs-parent="#accordionExample_one">
                                                <div class="accordion-body">
                                                    <p class="fs-xx-14">Renovations, and complete project management.
                                                        Whether you’re looking to build from the ground renovate an existing
                                                        structure, or invest in real estate with confidence, Renius delivers
                                                        trusted.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item collapsed" data-bs-toggle="collapse"
                                            data-bs-target="#collapseSix" aria-expanded="false"
                                            aria-controls="collapseSix" role="button">
                                            <div class="accordion-header" id="headingSix">
                                                <div class="accordion-button">
                                                    <span class="accord-arrow">
                                                        <i class="ri-arrow-down-s-fill plus"></i>
                                                        <i class="ri-arrow-up-s-fill minus"></i>
                                                    </span>
                                                    Do you manage properties for landlords or investors?
                                                </div>
                                            </div>
                                            <div id="collapseSix" class="accordion-collapse collapse"
                                                aria-labelledby="headingSix" data-bs-parent="#accordionExample_one">
                                                <div class="accordion-body">
                                                    <p class="fs-xx-14">Renovations, and complete project management.
                                                        Whether you’re looking to build from the ground renovate an existing
                                                        structure, or invest in real estate with confidence, Renius delivers
                                                        trusted.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="project-pagination d-flex flex-wrap align-items-center justify-content-between mt-4">
                                <a class="prev-project text-para hover-text-primary transition position-relative w-50"
                                    href="{{route('projects.detail')}}">
                                    <img src="{{asset('frontend/assets/img/icons/left-arrow.svg')}}" alt="Icon"
                                        class="position-relative me-3">Prev Project
                                </a>
                                <a class="next-project text-para hover-text-primary transition position-relative w-50 text-end"
                                    href="{{route('projects.detail')}}">
                                    Next Project<img src="{{asset('frontend/assets/img/icons/right-arrow-5.svg')}}" alt="Icon"
                                        class="position-relative ms-3">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Project Single Section End -->
@endsection
