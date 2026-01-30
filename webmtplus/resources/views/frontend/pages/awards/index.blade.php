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
                    <h2 class="section-title style-one fw-black text-title">Awards</h2>
                    <ul class="br-menu list-unstyled">
                        <li><a href="{{route('home')}}"><img src="{{asset('frontend/assets/img/icons/home-icon.svg')}}" alt="Icon">HOME</a></li>
                        <li>AWARDS</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End -->

    <!-- Awards Section Start -->
    <div class="container pt-120 pb-90">
        <div class="row">
            <div class="col-xxl-6 offset-xl-3 col-xl-8 offset-xl-2 col-md-10 offset-md-1 text-center">
                <h6
                    class="section-subtitle style-two d-inline-block fs-13 ls-1 font-optional fw-semibold position-relative text_primary mb-25">
                    <img src="{{asset('frontend/assets/img/icons/star-3.svg')}}" alt="Icon">OUR AWARDS IN THE WORLD</h6>
                <h2 class="section-title style-one text-center text-title mb-40">Award-Winning <span
                        class="fw-black">Craftsmanship Trusted By</span> Homeowners</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-xl-4 col-md-6">
                <div class="award-card style-one d-flex flex-wrap align-items-center mb-30 transition">
                    <div
                        class="award-badge bg_secondary d-flex flex-column align-items-center justify-content-center rounded-circle">
                        <img src="{{asset('frontend/assets/img/badges/badge-1.svg')}}" alt="Icon"></div>
                    <div class="award-title">
                        <span class="fs-15 fw-semibold d-block mb-1 text_primary">2020</span>
                        <h5 class="fs-20 fw-semibold text-title mb-0">Top Commercial Design</h5>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="award-card style-one d-flex flex-wrap align-items-center mb-30 transition">
                    <div
                        class="award-badge bg_secondary d-flex flex-column align-items-center justify-content-center rounded-circle">
                        <img src="{{asset('frontend/assets/img/badges/badge-2.svg')}}" alt="Icon"></div>
                    <div class="award-title">
                        <span class="fs-15 fw-semibold d-block mb-1 text_primary">2016</span>
                        <h5 class="fs-20 fw-semibold text-title mb-0">Property Manager of Year</h5>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="award-card style-one d-flex flex-wrap align-items-center mb-30 transition">
                    <div
                        class="award-badge bg_secondary d-flex flex-column align-items-center justify-content-center rounded-circle">
                        <img src="{{asset('frontend/assets/img/badges/badge-3.svg')}}" alt="Icon"></div>
                    <div class="award-title">
                        <span class="fs-15 fw-semibold d-block mb-1 text_primary">2020</span>
                        <h5 class="fs-20 fw-semibold text-title mb-0">Best Real Estate Consultant</h5>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="award-card style-one d-flex flex-wrap align-items-center mb-30 transition">
                    <div
                        class="award-badge bg_secondary d-flex flex-column align-items-center justify-content-center rounded-circle">
                        <img src="{{asset('frontend/assets/img/badges/badge-4.svg')}}" alt="Icon"></div>
                    <div class="award-title">
                        <span class="fs-15 fw-semibold d-block mb-1 text_primary">2025</span>
                        <h5 class="fs-20 fw-semibold text-title mb-0">Real Estate Superbrand</h5>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="award-card style-one d-flex flex-wrap align-items-center mb-30 transition">
                    <div
                        class="award-badge bg_secondary d-flex flex-column align-items-center justify-content-center rounded-circle">
                        <img src="{{asset('frontend/assets/img/badges/badge-5.svg')}}" alt="Icon"></div>
                    <div class="award-title">
                        <span class="fs-15 fw-semibold d-block mb-1 text_primary">2023</span>
                        <h5 class="fs-20 fw-semibold text-title mb-0">Best Residential Design</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Awards Section End -->

    <!-- CTA Section Start -->
    <div class="cta-area style-four bg-f position-relative overflow-hidden mx-xxl-4 z-1">
        <img src="{{asset('frontend/assets/img/cta/shape-1.png')}}" alt="Shape" class="section-shape position-absolute bottom-0 end-0 z-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-7 mb-sm-20">
                    <h2 class="section-title style-two fw-normal text-white mb-0">Let’s Build Your <span
                            class="fw-black">Dream Home Today</span> – Contact Us For A Consultation!</h2>
                </div>
                <div class="col-lg-6 col-md-5">
                    <div
                        class="circle-text-wrap position-relative bg-transparent rounded-circle overflow-hidden z-1 ms-md-auto me-md-0 ms-auto me-auto">
                        <img src="{{asset('frontend/assets/img/cta/circle-text.png')}}" alt="Circle Text"
                            class="rotate position-relative z-2 d-block mx-auto">
                        <img src="{{asset('frontend/assets/img/icons/up-right-arrow-white-small.svg')}}" alt="Icon"
                            class="arrow-icon position-absolute z-n1">
                        <a href="{{route('contact')}}" class="position-absolute top-0 start-0 w-100 h-100 z-2"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- CTA Section End -->

    <!-- Our Feature Section Start -->
    <div class="feature-area style-three position-relative z-2 pt-120">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 offset-xl-2 col-md-10 offset-md-1 text-center">
                    <h6
                        class="section-subtitle style-two d-inline-block fs-13 ls-1 font-optional fw-semibold position-relative text_primary mb-20">
                        <img src="{{asset('frontend/assets/img/icons/home-icon.svg')}}" alt="Icon">FEATURES</h6>
                    <h2 class="section-title style-one fw-normal text-title px-xxl-5 mb-40">Precision <span
                            class="fw-black">Craftsmanship In Every Detail</span> Of Your Custom Home</h2>
                </div>
            </div>
            <ul class="nav nav-tabs list-unstyled feature-tablist d-flex flex-wrap align-items-center justify-content-between mb-40"
                role="tablist">
                <li class="nav-item border-0">
                    <button class="nav-link border-0 active" data-bs-toggle="tab" data-bs-target="#tab_1" type="button"
                        role="tab">Precision Craftsmanship</button>
                </li>
                <li class="nav-item border-0">
                    <button class="nav-link border-0" data-bs-toggle="tab" data-bs-target="#tab_2" type="button"
                        role="tab">Personalized Build Experience</button>
                </li>
                <li class="nav-item border-0">
                    <button class="nav-link border-0" data-bs-toggle="tab" data-bs-target="#tab_3" type="button"
                        role="tab">Timeless Modern Techniques</button>
                </li>
                <li class="nav-item border-0">
                    <button class="nav-link border-0" data-bs-toggle="tab" data-bs-target="#tab_4" type="button"
                        role="tab">Sustainable Building Practices</button>
                </li>
            </ul>
            <div class="tab-content feature-tab-content">
                <div class="tab-pane fade show active" id="tab_1" role="tabpanel">
                    <div class="row">
                        <div class="col-xxl-5 col-lg-6 pe-xxl-0">
                            <div class="feature-content mb-md-30">
                                <p class="mb-35">Renius Home Build Craft, we believe the difference is in the details. Our
                                    decades of hands-on experience to every ensuring your home not only beautiful but built
                                    to last. </p>
                                <ul class="feature-timeline list-unstyled mb-0 w-75 pe-xxl-5">
                                    <li class="position-relative fs-xxl-18 fw-medium text-title"><span
                                            class="d-flex flex-column align-items-center justify-content-center rounded-circle text_primary bg-white fs-15 fw-semibold text_primary">01</span>Hand-Finished
                                        Details in Every Room</li>
                                    <li class="position-relative fs-xxl-18 fw-medium text-title"><span
                                            class="d-flex flex-column align-items-center justify-content-center rounded-circle text_primary bg-white fs-15 fw-semibold text_primary">02</span>Custom
                                        Woodwork and Architectural Features</li>
                                    <li class="position-relative fs-xxl-18 fw-medium text-title"><span
                                            class="d-flex flex-column align-items-center justify-content-center rounded-circle text_primary bg-white fs-15 fw-semibold text_primary">03</span>Millimeter-Accurate
                                        Measurements and Layouts</li>
                                    <li class="position-relative fs-xxl-18 fw-medium text-title"><span
                                            class="d-flex flex-column align-items-center justify-content-center rounded-circle text_primary bg-white fs-15 fw-semibold text_primary">04</span>Skilled
                                        Artisans With Years of Experience</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xxl-7 col-lg-6 ps-xxl-5">
                            <div class="feature-img-wrap position-relative z-1">
                                <img src="{{asset('frontend/assets/img/about/feature-img-2.jpg')}}" alt="Image" class="round-20">
                                <div
                                    class="exp-box bg-white round-10 position-absolute d-flex flex-column align-items-center justify-content-center start-0 z-1">
                                    <span
                                        class="fav-icon d-flex flex-column align-items-center justify-content-center rounded-circle bg_secondary"><img
                                            src="{{asset('frontend/assets/img/about/fav-icon.png')}}" alt="Icon"></span>
                                    <h6 class="fs-13 fw-semibold text-para ls-1 text-center mb-0"><span
                                            class="font-secondary fw-black text-title d-block ls-0">25</span>YEARS OF
                                        EXPERIENCE</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="tab_2" role="tabpanel">
                    <div class="row">
                        <div class="col-xxl-5 col-lg-6 pe-xxl-0">
                            <div class="feature-content mb-md-30">
                                <p class="mb-35">Renius Home Build Craft, we believe the difference is in the details. Our
                                    decades of hands-on experience to every ensuring your home not only beautiful but built
                                    to last. </p>
                                <ul class="feature-timeline list-unstyled mb-0 w-75 pe-xxl-5">
                                    <li class="position-relative fs-xxl-18 fw-medium text-title"><span
                                            class="d-flex flex-column align-items-center justify-content-center rounded-circle text_primary bg-white fs-15 fw-semibold text_primary">01</span>Hand-Finished
                                        Details in Every Room</li>
                                    <li class="position-relative fs-xxl-18 fw-medium text-title"><span
                                            class="d-flex flex-column align-items-center justify-content-center rounded-circle text_primary bg-white fs-15 fw-semibold text_primary">02</span>Custom
                                        Woodwork and Architectural Features</li>
                                    <li class="position-relative fs-xxl-18 fw-medium text-title"><span
                                            class="d-flex flex-column align-items-center justify-content-center rounded-circle text_primary bg-white fs-15 fw-semibold text_primary">03</span>Millimeter-Accurate
                                        Measurements and Layouts</li>
                                    <li class="position-relative fs-xxl-18 fw-medium text-title"><span
                                            class="d-flex flex-column align-items-center justify-content-center rounded-circle text_primary bg-white fs-15 fw-semibold text_primary">04</span>Skilled
                                        Artisans With Years of Experience</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xxl-7 col-lg-6 ps-xxl-5">
                            <div class="feature-img-wrap position-relative z-1">
                                <img src="{{asset('frontend/assets/img/about/feature-img-1.jpg')}}" alt="Image" class="round-20">
                                <div
                                    class="exp-box bg-white round-10 position-absolute d-flex flex-column align-items-center justify-content-center start-0 z-1">
                                    <span
                                        class="fav-icon d-flex flex-column align-items-center justify-content-center rounded-circle bg_secondary"><img
                                            src="{{asset('frontend/assets/img/about/fav-icon.png')}}" alt="Icon"></span>
                                    <h6 class="fs-13 fw-semibold text-para ls-1 text-center mb-0"><span
                                            class="font-secondary fw-black text-title d-block ls-0">25</span>YEARS OF
                                        EXPERIENCE</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="tab_3" role="tabpanel">
                    <div class="row">
                        <div class="col-xxl-5 col-lg-6 pe-xxl-0">
                            <div class="feature-content mb-md-30">
                                <p class="mb-35">Renius Home Build Craft, we believe the difference is in the details. Our
                                    decades of hands-on experience to every ensuring your home not only beautiful but built
                                    to last. </p>
                                <ul class="feature-timeline list-unstyled mb-0 w-75 pe-xxl-5">
                                    <li class="position-relative fs-xxl-18 fw-medium text-title"><span
                                            class="d-flex flex-column align-items-center justify-content-center rounded-circle text_primary bg-white fs-15 fw-semibold text_primary">01</span>Hand-Finished
                                        Details in Every Room</li>
                                    <li class="position-relative fs-xxl-18 fw-medium text-title"><span
                                            class="d-flex flex-column align-items-center justify-content-center rounded-circle text_primary bg-white fs-15 fw-semibold text_primary">02</span>Custom
                                        Woodwork and Architectural Features</li>
                                    <li class="position-relative fs-xxl-18 fw-medium text-title"><span
                                            class="d-flex flex-column align-items-center justify-content-center rounded-circle text_primary bg-white fs-15 fw-semibold text_primary">03</span>Millimeter-Accurate
                                        Measurements and Layouts</li>
                                    <li class="position-relative fs-xxl-18 fw-medium text-title"><span
                                            class="d-flex flex-column align-items-center justify-content-center rounded-circle text_primary bg-white fs-15 fw-semibold text_primary">04</span>Skilled
                                        Artisans With Years of Experience</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xxl-7 col-lg-6 ps-xxl-5">
                            <div class="feature-img-wrap position-relative z-1">
                                <img src="{{asset('frontend/assets/img/about/feature-img-4.jpg')}}" alt="Image" class="round-20">
                                <div
                                    class="exp-box bg-white round-10 position-absolute d-flex flex-column align-items-center justify-content-center start-0 z-1">
                                    <span
                                        class="fav-icon d-flex flex-column align-items-center justify-content-center rounded-circle bg_secondary"><img
                                            src="{{asset('frontend/assets/img/about/fav-icon.png')}}" alt="Icon"></span>
                                    <h6 class="fs-13 fw-semibold text-para ls-1 text-center mb-0"><span
                                            class="font-secondary fw-black text-title d-block ls-0">25</span>YEARS OF
                                        EXPERIENCE</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="tab_4" role="tabpanel">
                    <div class="row">
                        <div class="col-xxl-5 col-lg-6 pe-xxl-0">
                            <div class="feature-content mb-md-30">
                                <p class="mb-35">Renius Home Build Craft, we believe the difference is in the details. Our
                                    decades of hands-on experience to every ensuring your home not only beautiful but built
                                    to last. </p>
                                <ul class="feature-timeline list-unstyled mb-0 w-75 pe-xxl-5">
                                    <li class="position-relative fs-xxl-18 fw-medium text-title"><span
                                            class="d-flex flex-column align-items-center justify-content-center rounded-circle text_primary bg-white fs-15 fw-semibold text_primary">01</span>Hand-Finished
                                        Details in Every Room</li>
                                    <li class="position-relative fs-xxl-18 fw-medium text-title"><span
                                            class="d-flex flex-column align-items-center justify-content-center rounded-circle text_primary bg-white fs-15 fw-semibold text_primary">02</span>Custom
                                        Woodwork and Architectural Features</li>
                                    <li class="position-relative fs-xxl-18 fw-medium text-title"><span
                                            class="d-flex flex-column align-items-center justify-content-center rounded-circle text_primary bg-white fs-15 fw-semibold text_primary">03</span>Millimeter-Accurate
                                        Measurements and Layouts</li>
                                    <li class="position-relative fs-xxl-18 fw-medium text-title"><span
                                            class="d-flex flex-column align-items-center justify-content-center rounded-circle text_primary bg-white fs-15 fw-semibold text_primary">04</span>Skilled
                                        Artisans With Years of Experience</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xxl-7 col-lg-6 ps-xxl-5">
                            <div class="feature-img-wrap position-relative z-1">
                                <img src="{{asset('frontend/assets/img/about/feature-img-5.jpg')}}" alt="Image" class="round-20">
                                <div
                                    class="exp-box bg-white round-10 position-absolute d-flex flex-column align-items-center justify-content-center start-0 z-1">
                                    <span
                                        class="fav-icon d-flex flex-column align-items-center justify-content-center rounded-circle bg_secondary"><img
                                            src="{{asset('frontend/assets/img/about/fav-icon.png')}}" alt="Icon"></span>
                                    <h6 class="fs-13 fw-semibold text-para ls-1 text-center mb-0"><span
                                            class="font-secondary fw-black text-title d-block ls-0">25</span>YEARS OF
                                        EXPERIENCE</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Our Feature Section End -->

    <!-- Brand Partner Start -->
       @include('frontend.pages.brand_slider')
    <!-- Brand Partner End -->
@endsection
