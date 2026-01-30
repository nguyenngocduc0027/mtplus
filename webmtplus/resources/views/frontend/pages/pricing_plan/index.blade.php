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
                    <h2 class="section-title style-one fw-black text-title">Pricing Plan</h2>
                    <ul class="br-menu list-unstyled">
                        <li><a href="{{route('home')}}"><img src="{{asset('frontend/assets/img/icons/home-icon.svg')}}" alt="Icon">HOME</a></li>
                        <li>PRICING PLAN</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End -->

    <!-- Pricing Plan Section Start -->
    <div class="container pt-120 pb-90">
        <div class="row justify-content-center">
            <div class="col-xxl-3 col-xl-4 col-md-6">
                <div class="pricing-card style-one bg-gray round-10 mb-30">
                    <div class="pricing-header">
                        <span class="fs-13 fw-semibold font-optional ls-1 d-block">BASIC PACKAGE</span>
                        <h3 class="fs-24 font-secondary fw-black text-title">FREE</h3>
                    </div>
                    <ul class="pricing-features list-unstyled">
                        <li class="position-relative"><img src="{{asset('frontend/assets/img/icons/check-2.svg')}}" alt="Icon">60-min expert
                            consultation</li>
                        <li class="position-relative"><img src="{{asset('frontend/assets/img/icons/check-2.svg')}}" alt="Icon">Site or
                            property evaluation</li>
                        <li class="position-relative"><img src="{{asset('frontend/assets/img/icons/check-2.svg')}}" alt="Icon">Budget and
                            feasibility advice</li>
                        <li class="position-relative"><img src="{{asset('frontend/assets/img/icons/check-2.svg')}}" alt="Icon">Construction &
                            real estate</li>
                        <li class="position-relative"><img src="{{asset('frontend/assets/img/icons/check-2.svg')}}" alt="Icon">12 months
                            duration</li>
                        <li class="position-relative"><img src="{{asset('frontend/assets/img/icons/check-2.svg')}}" alt="Icon">4 properties
                            included</li>
                    </ul>
                    <a href="contact.html" class="btn style-two d-inline-flex flex-wrap align-items-center p-0"><span
                            class="btn-text d-inline-block fw-semibold position-relative transition">Get Started
                            Now</span><span
                            class="btn-icon position-relative d-flex flex-column align-items-center justify-content-center rounded-circle transition"><img
                                src="{{asset('frontend/assets/img/icons/up-right-arrow-black.svg')}}" alt="Image"></span></a>
                </div>
            </div>
            <div class="col-xxl-3 col-xl-4 col-md-6">
                <div class="pricing-card style-one bg-gray round-10 mb-30">
                    <div class="pricing-header">
                        <span class="fs-13 fw-semibold font-optional ls-1 d-block">STANDARD</span>
                        <h3 class="fs-24 font-secondary fw-black text-title">$220 <span
                                class="fs-16 fw-normal font-primary text-para position-relative">/Month</span></h3>
                    </div>
                    <ul class="pricing-features list-unstyled">
                        <li class="position-relative"><img src="{{asset('frontend/assets/img/icons/check-2.svg')}}" alt="Icon">60-min expert
                            consultation</li>
                        <li class="position-relative"><img src="{{asset('frontend/assets/img/icons/check-2.svg')}}" alt="Icon">Site or
                            property evaluation</li>
                        <li class="position-relative"><img src="{{asset('frontend/assets/img/icons/check-2.svg')}}" alt="Icon">Budget and
                            feasibility advice</li>
                        <li class="position-relative"><img src="{{asset('frontend/assets/img/icons/check-2.svg')}}" alt="Icon">Construction &
                            real estate</li>
                        <li class="position-relative"><img src="{{asset('frontend/assets/img/icons/check-2.svg')}}" alt="Icon">12 months
                            duration</li>
                        <li class="position-relative"><img src="{{asset('frontend/assets/img/icons/check-2.svg')}}" alt="Icon">4 properties
                            included</li>
                    </ul>
                    <a href="contact.html" class="btn style-two d-inline-flex flex-wrap align-items-center p-0"><span
                            class="btn-text d-inline-block fw-semibold position-relative transition">Get Started
                            Now</span><span
                            class="btn-icon position-relative d-flex flex-column align-items-center justify-content-center rounded-circle transition"><img
                                src="{{asset('frontend/assets/img/icons/up-right-arrow-black.svg')}}" alt="Image"></span></a>
                </div>
            </div>
            <div class="col-xxl-3 col-xl-4 col-md-6">
                <div class="pricing-card style-one bg-gray round-10 mb-30">
                    <span class="featured d-inline-block bg_primary text-white position-absolute fw-medium">Popular</span>
                    <div class="pricing-header">
                        <span class="fs-13 fw-semibold font-optional ls-1 d-block">STANDARD PLUS</span>
                        <h3 class="fs-24 font-secondary fw-black text-title">$320 <span
                                class="fs-16 fw-normal font-primary text-para position-relative">/Month</span></h3>
                    </div>
                    <ul class="pricing-features list-unstyled">
                        <li class="position-relative"><img src="{{asset('frontend/assets/img/icons/check-2.svg')}}" alt="Icon">60-min expert
                            consultation</li>
                        <li class="position-relative"><img src="{{asset('frontend/assets/img/icons/check-2.svg')}}" alt="Icon">Site or
                            property evaluation</li>
                        <li class="position-relative"><img src="{{asset('frontend/assets/img/icons/check-2.svg')}}" alt="Icon">Budget and
                            feasibility advice</li>
                        <li class="position-relative"><img src="{{asset('frontend/assets/img/icons/check-2.svg')}}" alt="Icon">Construction &
                            real estate</li>
                        <li class="position-relative"><img src="{{asset('frontend/assets/img/icons/check-2.svg')}}" alt="Icon">12 months
                            duration</li>
                        <li class="position-relative"><img src="{{asset('frontend/assets/img/icons/check-2.svg')}}" alt="Icon">4 properties
                            included</li>
                    </ul>
                    <a href="contact.html" class="btn style-two d-inline-flex flex-wrap align-items-center p-0"><span
                            class="btn-text d-inline-block fw-semibold position-relative transition">Get Started
                            Now</span><span
                            class="btn-icon position-relative d-flex flex-column align-items-center justify-content-center rounded-circle transition"><img
                                src="{{asset('frontend/assets/img/icons/up-right-arrow-black.svg')}}" alt="Image"></span></a>
                </div>
            </div>
            <div class="col-xxl-3 col-xl-4 col-md-6">
                <div class="pricing-card style-one bg-gray round-10 mb-30">
                    <div class="pricing-header">
                        <span class="fs-13 fw-semibold font-optional ls-1 d-block">ADVANCED</span>
                        <h3 class="fs-24 font-secondary fw-black text-title">$420 <span
                                class="fs-16 fw-normal font-primary text-para position-relative">/Month</span></h3>
                    </div>
                    <ul class="pricing-features list-unstyled">
                        <li class="position-relative"><img src="{{asset('frontend/assets/img/icons/check-2.svg')}}" alt="Icon">60-min
                            expert consultation</li>
                        <li class="position-relative"><img src="{{asset('frontend/assets/img/icons/check-2.svg')}}" alt="Icon">Site or
                            property evaluation</li>
                        <li class="position-relative"><img src="{{asset('frontend/assets/img/icons/check-2.svg')}}" alt="Icon">Budget and
                            feasibility advice</li>
                        <li class="position-relative"><img src="{{asset('frontend/assets/img/icons/check-2.svg')}}" alt="Icon">Construction
                            & real estate</li>
                        <li class="position-relative"><img src="{{asset('frontend/assets/img/icons/check-2.svg')}}" alt="Icon">12 months
                            duration</li>
                        <li class="position-relative"><img src="{{asset('frontend/assets/img/icons/check-2.svg')}}" alt="Icon">4 properties
                            included</li>
                    </ul>
                    <a href="contact.html" class="btn style-two d-inline-flex flex-wrap align-items-center p-0"><span
                            class="btn-text d-inline-block fw-semibold position-relative transition">Get Started
                            Now</span><span
                            class="btn-icon position-relative d-flex flex-column align-items-center justify-content-center rounded-circle transition"><img
                                src="{{asset('frontend/assets/img/icons/up-right-arrow-black.svg')}}" alt="Image"></span></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Pricing Plan Section End -->

    <!-- Why Choose Us Section Start -->
    <div class="wh-area style-two bg-mystic ptb-120 round-45 mx-xxl-4 mx-2">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xxl-6 col-xl-6 col-lg-7 pe-xxl-0">
                    <div class="wh-content mb-md-30">
                        <h6
                            class="section-subtitle style-two d-inline-block text-center fs-13 ls-1 font-optional fw-semibold position-relative text_primary mb-16">
                            <img src="{{asset('frontend/assets/img/icons/home-icon.svg')}}" alt="Icon">WHY CHOOSE US</h6>
                        <h2 class="section-title style-one fw-normal text-title mb-20">Experienced <span
                                class="fw-black">Builders Committed To Quality and Customer</span> Satisfaction Always</h2>
                        <p class="pe-xxl-5 me-xxl-5 mb-1">Renius means partnering with team that values customer
                            satisfaction above all else. We bring years of experience and a proven</p>
                        <div class="row pe-xxl-5 gx-xxl-5 mb-35">
                            <div class="col-md-6">
                                <div class="feature-item">
                                    <span
                                        class="feature-icon position-absolute bg_secondary d-flex flex-column align-items-center justify-content-center rounded-circle"><img
                                            src="{{asset('frontend/assets/img/icons/house-thing.svg')}}" alt="Icon"></span>
                                    <h6 class="fs-16 fw-semibold mb-0">Decades Of Hands-On Building Experience</h6>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="feature-item">
                                    <span
                                        class="feature-icon position-absolute bg_secondary d-flex flex-column align-items-center justify-content-center rounded-circle"><img
                                            src="{{asset('frontend/assets/img/icons/mailbox.svg')}}" alt="Icon"></span>
                                    <h6 class="fs-16 fw-semibold mb-0">On-Time, On-Budget Guarantee</h6>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="feature-item">
                                    <span
                                        class="feature-icon position-absolute bg_secondary d-flex flex-column align-items-center justify-content-center rounded-circle"><img
                                            src="{{asset('frontend/assets/img/icons/antennas.svg')}}" alt="Icon"></span>
                                    <h6 class="fs-16 fw-semibold mb-0">Superior Craftmanship & Materials</h6>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="feature-item">
                                    <span
                                        class="feature-icon position-absolute bg_secondary d-flex flex-column align-items-center justify-content-center rounded-circle"><img
                                            src="{{asset('frontend/assets/img/icons/skyline.svg')}}" alt="Icon"></span>
                                    <h6 class="fs-16 fw-semibold mb-0">Fully Licensed, Insured & Safety Compliant</h6>
                                </div>
                            </div>
                        </div>
                        <a href="about.html"
                            class="btn style-one d-inline-flex flex-wrap align-items-center p-0 mt-1"><span
                                class="btn-text d-inline-block fw-semibold position-relative transition">More About
                                Us</span><span
                                class="btn-icon position-relative d-flex flex-column align-items-center justify-content-center rounded-circle transition"><i
                                    class="ri-arrow-right-up-line"></i></span></a>
                        <div class="ceo-message-wrap d-flex flex-wrap align-items-center">
                            <div class="ceo-avatar ">
                                <img src="{{asset('frontend/assets/img/about/ceo.jpg')}}" alt="Image" class="round-10">
                            </div>
                            <div class="ceo-message">
                                <p class="text-title">"Renius delivered on every promise. The crew was professional, the
                                    timeline custom home turned out exactly envisioned."</p>
                                <h6 class="position-relative fs-16 font-primary fw-bold text-title ">Natalie R.<span
                                        class="fw-normal text-para ms-2">Denver, CEO</span></h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-5 offset-xxl-1 col-xl-6 col-lg-5">
                    <div class="wh-img-wrap position-relative">
                        <img src="{{asset('frontend/assets/img/about/wh-img-1.jpg')}}" alt="Image" class="wh-img round-10">
                        <img src="{{asset('frontend/assets/img/about/wh-thumb-1.jpg')}}" alt="Image"
                            class="wh-thumb move-bottom position-absolute top-0 end-0 round-10">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Why Choose Us Section End -->

    <!-- Brand Partner Start -->
    @include('frontend.pages.brand_slider')

    <!-- Brand Partner End --
@endsection
