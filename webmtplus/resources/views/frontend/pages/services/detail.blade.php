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
                    <h2 class="section-title style-one fw-black text-title">Service Single</h2>
                    <ul class="br-menu list-unstyled">
                        <li><a href="{{route('home')}}"><img src="{{asset('frontend/assets/img/icons/home-icon.svg')}}" alt="Icon">HOME</a></li>
                        <li><a href="{{route('services.index')}}"><img src="{{asset('frontend/assets/img/icons/home-icon.svg')}}" alt="Icon">SERVICES</a>
                        </li>
                        <li>SERVICE SINGLE</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End -->

    <!-- Service Details Start -->
    <div class="container ptb-120">
        <div class="row">
            <div class="col-xl-8 pe-xxl-4">
                <div class="service-desc">
                    <div class="single-img round-10 mb-35">
                        <img src="{{asset('frontend/assets/img/services/single-service-1.jpg')}}" alt="Image" class="round-10">
                    </div>
                    <div class="single-para">
                        <h1 class="font-secondary">Property Sales & Brokerage</h1>
                        <p>On the construction side, we offer end-to-end solutions including architectural design, general
                            contracting, renovations, and complete project management. Whether you’re looking to build from
                            the ground up, renovate an existing structure, or invest in real estate with confidence, </p>
                        <p>Renius delivers trusted, timely, and high-quality service tailored to your needs.</p>
                    </div>
                    <div class="single-para">
                        <h6>Overview & Challenge</h6>
                        <p>We start by developing preliminary design concepts that explore various spatial arrangements,
                            circulation patterns, and architectural styles</p>
                    </div>
                    <div class="row justify-content-center mb-2">
                        <div class="col-md-3 col-6">
                            <div class="feature-card style-one mb-30">
                                <img src="{{asset('frontend/assets/img/features/feature-1.png')}}" alt="Icon">
                                <h3 class="fs-16 font-primary fw-semibold mb-0 pe-xxl-5">Corporate Responsibility</h3>
                            </div>
                        </div>
                        <div class="col-md-3 col-6">
                            <div class="feature-card style-one mb-30">
                                <img src="{{asset('frontend/assets/img/features/feature-2.png')}}" alt="Icon">
                                <h3 class="fs-16 font-primary fw-semibold mb-0 pe-xxl-5">Diversity, Equity & Inclusion</h3>
                            </div>
                        </div>
                        <div class="col-md-3 col-6">
                            <div class="feature-card style-one mb-30">
                                <img src="{{asset('frontend/assets/img/features/feature-3.png')}}" alt="Icon">
                                <h3 class="fs-16 font-primary fw-semibold mb-0 pe-xxl-5">Experts with Team Spirit</h3>
                            </div>
                        </div>
                        <div class="col-md-3 col-6">
                            <div class="feature-card style-one mb-30">
                                <img src="{{asset('frontend/assets/img/features/feature-4.png')}}" alt="Icon">
                                <h3 class="fs-16 font-primary fw-semibold mb-0 pe-xxl-5">Custom Home Builds</h3>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-xxl-8 col-xl-7 col-lg-8 col-md-7 pe-xl-4">
                            <div class="testimonial-card style-two bg-gray round-10 mb-30">
                                <div class="d-flex flex-wrap align-items-center justify-content-between">
                                    <span
                                        class="quote-icon bg_secondary d-flex flex-wrap align-items-center justify-content-center rounded-circle mb-0"><img
                                            src="{{asset('frontend/assets/img/icons/quote-large.svg')}}" alt="Icon"></span>
                                    <ul class="rating list-unstyled mb-0 w-50 text-end">
                                        <li><img src="{{asset('frontend/assets/img/icons/star.svg')}}" alt="Icon"></li>
                                        <li><img src="{{asset('frontend/assets/img/icons/star.svg')}}" alt="Icon"></li>
                                        <li><img src="{{asset('frontend/assets/img/icons/star.svg')}}" alt="Icon"></li>
                                        <li><img src="{{asset('frontend/assets/img/icons/star.svg')}}" alt="Icon"></li>
                                        <li><img src="{{asset('frontend/assets/img/icons/star.svg')}}" alt="Icon"></li>
                                        <li><img src="{{asset('frontend/assets/img/icons/star.svg')}}" alt="Icon"></li>
                                    </ul>
                                </div>
                                <p class="fw-medium text-title">"From the first consultation to final reveal, Renius made
                                    our They truly our ideas and brought with incredible."</p>
                                <h6 class="fs-20 font-primary fw-semibold position-relative text-title mb-1">Chloe Bennett
                                </h6>
                                <span class="fs-15 fw-normal d-block text-para">Relations Manager</span>
                            </div>
                        </div>
                        <div class="col-xxl-4 col-xl-5 col-lg-4 col-md-5 ps-xl-0 ps-lg-4 pe-xl-2">
                            <div class="single-img round-10 mb-30">
                                <img src="{{asset('frontend/assets/img/blog/single-blog-2.jpg')}}" alt="Image" class="round-10">
                            </div>
                        </div>
                    </div>
                    <div class="single-para">
                        <h6>Services Offered</h6>
                        <ul class="feature-item-list style-one list-unstyled">
                            <li class="position-relative"><span class="text-title fw-semibold me-1"> Conceptual Design
                                    :</span>We start by developing preliminary design concepts that explore various spatial
                                arrangements, circulation patterns, and architectural styles. These initial concepts serve
                                as the foundation.</li>
                            <li class="position-relative"><span class="text-title fw-semibold me-1">Schematic Design
                                    :</span>Building upon the approved concept, we develop sech- Matic drawings that
                                articulate the overall form, massing, and spatial organization of the project.</li>
                            <li class="position-relative"><span class="text-title fw-semibold me-1">Design Development
                                    :</span>During this phase, we delve into the details, refining the design and
                                incorporating structural, mechanical, and electrical considerations. We produce detailed
                                drawings.</li>
                        </ul>
                    </div>
                    <div class="single-para">
                        <h6 class="mb-4">Popular Questions</h6>
                        <div class="accordion style-one" id="accordionExample_one">
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
                                        <p class="fs-xx-14">Renovations, and complete project management. Whether you’re
                                            looking to build from the ground renovate an existing structure, or invest in
                                            real estate with confidence, Renius delivers trusted.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item collapsed" data-bs-toggle="collapse"
                                data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive"
                                role="button">
                                <div class="accordion-header" id="headingFive">
                                    <div class="accordion-button">
                                        <span class="accord-arrow">
                                            <i class="ri-arrow-down-s-fill plus"></i>
                                            <i class="ri-arrow-up-s-fill minus"></i>
                                        </span>
                                        Are your services available outside the city?
                                    </div>
                                </div>
                                <div id="collapseFive" class="accordion-collapse collapse " aria-labelledby="headingFive"
                                    data-bs-parent="#accordionExample_one">
                                    <div class="accordion-body">
                                        <p class="fs-xx-14">Renovations, and complete project management. Whether you’re
                                            looking to build from the ground renovate an existing structure, or invest in
                                            real estate with confidence, Renius delivers trusted.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item collapsed" data-bs-toggle="collapse" data-bs-target="#collapseSix"
                                aria-expanded="false" aria-controls="collapseSix" role="button">
                                <div class="accordion-header" id="headingSix">
                                    <div class="accordion-button">
                                        <span class="accord-arrow">
                                            <i class="ri-arrow-down-s-fill plus"></i>
                                            <i class="ri-arrow-up-s-fill minus"></i>
                                        </span>
                                        Do you manage properties for landlords or investors?
                                    </div>
                                </div>
                                <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                                    data-bs-parent="#accordionExample_one">
                                    <div class="accordion-body">
                                        <p class="fs-xx-14">Renovations, and complete project management. Whether you’re
                                            looking to build from the ground renovate an existing structure, or invest in
                                            real estate with confidence, Renius delivers trusted.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 ps-xxl-4">
                <aside class="sidebar mt-lg-50">
                    <div class="sidebar-widget search-widget bg-gray round-10">
                        <form action="#" class="position-relative">
                            <input type="search" placeholder="Search"
                                class="w-100 bg-white border-0 round-10 text-para outline-0">
                            <button class="position-absolute top-0 h-100 bg-transparent border-0"><img
                                    src="{{asset('frontend/assets/img/icons/search-icon.svg')}}" alt="Icon"></button>
                        </form>
                    </div>
                    <div class="sidebar-widget category-widget bg-gray round-10">
                        <h3 class="sidebar-widget-title fs-18 fw-semibold text-title mb-15">Service List</h3>
                        <ul class="list-unstyled mb-0">






                            <li><a href="#" class="position-relative"><img
                                        src="{{asset('frontend/assets/img/icons/circle-arrow.svg')}}" alt="Icon"
                                        class="position-absolute">Renovation & Remodeling</a></li>
                            <li><a href="#" class="position-relative"><img
                                        src="{{asset('frontend/assets/img/icons/circle-arrow.svg')}}" alt="Icon"
                                        class="position-absolute">Property Sales & Brokerage</a></li>
                            <li><a href="#" class="position-relative"><img
                                        src="{{asset('frontend/assets/img/icons/circle-arrow.svg')}}" alt="Icon"
                                        class="position-absolute">Real Estate Investment Consulting</a></li>
                            <li><a href="#" class="position-relative"><img
                                        src="{{asset('frontend/assets/img/icons/circle-arrow.svg')}}" alt="Icon"
                                        class="position-absolute">Property Management</a></li>
                            <li><a href="#" class="position-relative"><img
                                        src="{{asset('frontend/assets/img/icons/circle-arrow.svg')}}" alt="Icon"
                                        class="position-absolute">Architectural Design & Planning</a></li>
                            <li><a href="#" class="position-relative"><img
                                        src="{{asset('frontend/assets/img/icons/circle-arrow.svg')}}" alt="Icon"
                                        class="position-absolute">General Construction</a></li>
                        </ul>
                    </div>
                    <div class="sidebar-widget category-widget bg-gray round-10">
                        <h3 class="sidebar-widget-title fs-18 fw-semibold text-title mb-15">Book A Visit</h3>
                        <form action="#" class="form-wrapper style-one">
                            <div class="form-group mb-12">
                                <input type="text" class="w-100 ht-50 bg-white border-0 outline-0 round-5 text-para"
                                    placeholder="Name">
                            </div>
                            <div class="form-group mb-12">
                                <input type="text" class="w-100 ht-50 bg-white border-0 outline-0 round-5 text-para"
                                    placeholder="Email">
                            </div>
                            <div class="form-group mb-12">
                                <input type="text" class="w-100 ht-50 bg-white border-0 outline-0 round-5 text-para"
                                    placeholder="Real Estate">
                            </div>
                            <div class="form-group mb-12">
                                <textarea class="w-100 ht-50 bg-white border-0 outline-0 round-5 text-para" placeholder="Message"></textarea>
                            </div>
                            <button class="btn style-one d-block w-100"><span
                                    class="btn-text d-block w-100 fw-semibold position-relative transition">Submit
                                    Message</span></button>
                        </form>
                    </div>
                </aside>
            </div>
        </div>
    </div>
    <!-- Service Details End -->
@endsection
