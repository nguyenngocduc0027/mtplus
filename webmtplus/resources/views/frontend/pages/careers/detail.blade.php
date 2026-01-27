@extends('frontend.index')
@section('content')
    <!-- Breadcrumb Section Start -->
    <div class="breadcrumb-area position-relative z-1">
        <img src="{{ asset('frontend/assets/img/breadcrumb/br-line-shape.png') }}" alt="Shape"
            class="br-line-shape position-absolute top-0 start-0 w-100 h-100 z-n1">
        <img src="{{ asset('frontend/assets/img/breadcrumb/br-shape-1.png') }}" alt="Shape" class="br-shape-one position-absolute z-n1 bounce">
        <img src="{{ asset('frontend/assets/img/breadcrumb/br-shape-2.png') }}" alt="Shape"
            class="br-shape-two position-absolute bottom-0 z-n1 moveHorizontal">
        <div class="container-fluid px-xxl-5">
            <div class="row">
                <div class="col-md-10 offset-md-1 text-center">
                    <h2 class="section-title style-one fw-black text-title">Career Single</h2>
                    <ul class="br-menu list-unstyled">
                        <li><a href="{{ route('home') }}"><img src="{{ asset('frontend/assets/img/icons/home-icon.svg') }}" alt="Icon">HOME</a></li>
                        <li><a href="{{ route('careers.index') }}"><img src="{{ asset('frontend/assets/img/icons/home-icon.svg') }}" alt="Icon">CAREERS</a></li>
                        <li>CAREER SINGLE</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End -->

    <!-- Career Single Start -->
    <div class="container ptb-120">
        <div class="row">
            <div class="col-xl-8 pe-xxl-4">
                <div class="job-desc">
                    <div class="single-img round-10 position-relative">
                        <img src="{{ asset('frontend/assets/img/career/single-career.jpg') }}" alt="Image" class="round-10">
                        <div class="job-salary fs-15 text-title position-absolute end-0">Salary: <span
                                class="fw-bold">50K</span></div>
                    </div>
                    <div class="single-job-title position-relative z-1 bg-white round-10">
                        <h1 class="fs-24 fw-bold text-title">Construction Project Manager</h1>
                        <ul class="job-metainfo list-unstyled">
                            <li class="position-relative"><img src="{{ asset('frontend/assets/img/icons/pin-orange-2.svg') }}" alt="Icon"><span
                                    class="fw-medium text-title me-1">Location:</span>East Verdan</li>
                            <li class="position-relative"><img src="{{ asset('frontend/assets/img/icons/bag-2.svg') }}" alt="Icon"><span
                                    class="fw-medium text-title me-1">Type:</span> Full-Time</li>
                            <li class="position-relative"><img src="{{ asset('frontend/assets/img/icons/user-2.svg') }}" alt="Icon"><span
                                    class="fw-medium text-title me-1">Experience:</span>2+ Years</li>
                        </ul>
                    </div>
                    <div class="single-para">
                        <h6 class="fs-20 fw-bold">Job Description</h6>
                        <p>Renius Real Estate & Construction Group, we believe in building more than just properties—we
                            build careers with purpose. Whether you're a seasoned engineer, an aspiring architect, or a
                            driven real estate professional, Renius offers a platform for growth, leadership, and
                            innovation.</p>
                    </div>
                    <div class="single-para">
                        <h6 class="fs-20 fw-bold mb-15">Responsibilities:</h6>
                        <ul class="feature-list style-two list-unstyled mb-0">
                            <li class="position-relative">Assist clients in buying, selling, or renting properties.</li>
                            <li class="position-relative"> Conduct property evaluations and market research.</li>
                            <li class="position-relative">Collaborate with other team members to achieve sales goals.</li>
                            <li class="position-relative">Ensure compliance with industry standards and legal requirements.
                            </li>
                            <li class="position-relative">Maintain strong client relationships and address inquiries
                                promptly.</li>
                        </ul>
                    </div>
                    <div class="single-para">
                        <h6 class="fs-20 fw-bold mb-15">Qualifications:</h6>
                        <ul class="feature-list style-two list-unstyled mb-0">
                            <li class="position-relative">Bachelor’s degree in or equivalent experience.</li>
                            <li class="position-relative">10 years of experience</li>
                            <li class="position-relative">Strong skills in communication, negotiation, customer service</li>
                            <li class="position-relative">Proficiency in specific tools/software, if needed</li>
                            <li class="position-relative">Knowledge of industry-specific standards or regulations</li>
                        </ul>
                    </div>
                    <div class="single-para">
                        <h6 class="fs-20 fw-bold mb-15">What We Offer:</h6>
                        <ul class="feature-list style-two list-unstyled mb-30">
                            <li class="position-relative">Competitive salary and bonus structure.</li>
                            <li class="position-relative">Opportunities for career growth and development.</li>
                            <li class="position-relative">Comprehensive health and wellness benefits.</li>
                            <li class="position-relative">Flexible work environment.</li>
                            <li class="position-relative">Supportive and inclusive company culture.</li>
                        </ul>
                        <button class="btn style-one d-inline-flex flex-wrap align-items-center p-0"><span
                                class="btn-text d-inline-block fw-semibold position-relative transition">Apply For This
                                job</span><span
                                class="btn-icon position-relative d-flex flex-column align-items-center justify-content-center rounded-circle transition"><i
                                    class="ri-arrow-right-up-line"></i></span></button>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 ps-xxl-5">
                <div class="sidebar me-xxl-3 mt-lg-50">
                    <div class="sidebar-widget bg-gray round-10 p-0">
                        <ul class="job-brief list-unstyled">
                            <li>
                                <span class="text-title fw-semibold d-block mb-1 lh-1">Deadline For Job Application</span>
                                May 12, 2025
                            </li>
                            <li>
                                <span class="text-title fw-semibold d-block mb-1 lh-1">Salary Range</span>
                                ANNUALLY - $20,000 - $60,000
                            </li>
                            <li>
                                <span class="text-title fw-semibold d-block mb-3 lh-1">Get Directions</span>
                                <img src="{{ asset('frontend/assets/img/map-2.jpg') }}" alt="Image" class="round-10">
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Career Single End -->
@endsection
