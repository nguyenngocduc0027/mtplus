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
                    <h2 class="section-title style-one fw-black text-title">About Us</h2>
                    <ul class="br-menu list-unstyled">
                        <li><a href="{{route('home')}}"><img src="{{asset('frontend/assets/img/icons/home-icon.svg')}}" alt="Icon">HOME</a></li>
                        <li>ABOUT US</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End -->

    <!-- About Us Section Start -->
    <div class="about-area style-one ptb-120">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-5 col-lg-6">
                    <div class="about-img-wrap position-relative pe-xxl-4 mb-md-30">
                        <img src="{{asset('frontend/assets/img/about/about-img-1.jpg')}}" alt="Image" class="about-img round-30 tilt-img">
                        <img src="{{asset('frontend/assets/img/about/about-thumb.jpg')}}" alt="Image"
                            class="about-thumb move-bottom position-absolute">
                    </div>
                </div>
                <div class="col-xl-7 col-lg-6 ps-xxl-4">
                    <div class="about-content">
                        <h6 class="section-subtitle style-one d-inline-block fs-13 ls-1 font-optional fw-semibold position-relative text_primary mb-20"
                            data-cue="slideInUp"><img src="{{asset('frontend/assets/img/icons/star-3.svg')}}" alt="Icon">ABOUT US</h6>
                        <h2 class="section-title style-one text-title" data-cue="slideInUp" data-delay="300">At <span
                                class="fw-black">Renius our commitment to<span class="d-inline-block mx-2"><img
                                        src="{{asset('frontend/assets/img/about/about-thumb-2.jpg')}}" alt="Image"></span>real estate is
                                unwavering.</span> Backed by years of expertise and a contemporary approach</h2>
                        <div class="about-subcontent" data-cue="slideInUp" data-delay="400">
                            <p class="pe-xxl-5">Home renovation is the process of improving or modernizing a residential
                                property to enhance its functionality, comfort, and aesthetic It can involve anything from
                                small interior.</p>
                            <div class="row justify-content-center">
                                <div class="col-xl-4 col-lg-6 col-md-6">
                                    <div class="counter-card style-one bg-1 position-relative z-1 round-10">
                                        <img src="{{asset('frontend/assets/img/about/star-group.png')}}" alt="Icon"
                                            class="position-absolute card-shape z-1">
                                        <h6 class="fs-12 font-primary fw-semibold text-title ls-1">GLOBAL REACH</h6>
                                        <h4 class="font-secondary fw-black fs-36 text-title"><span
                                                class="counter ls-1 transition">85</span>+</h4>
                                        <p class="fw-medium d-block mb-0">Offices Worldwide</p>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6">
                                    <div class="counter-card style-one bg-2 position-relative z-1 round-10">
                                        <img src="{{asset('frontend/assets/img/about/star-group.png')}}" alt="Icon"
                                            class="position-absolute card-shape z-1">
                                        <h6 class="fs-12 font-primary fw-semibold text-title ls-1">LOCAL EXPERTISE</h6>
                                        <h4 class="font-secondary fw-black fs-36 text-title"><span
                                                class="counter ls-1 transition">3000</span>+</h4>
                                        <p class="fw-medium d-block mb-0">Employees</p>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6">
                                    <div class="counter-card style-one bg-3 position-relative z-1 round-10">
                                        <img src="{{asset('frontend/assets/img/about/star-group.png')}}" alt="Icon"
                                            class="position-absolute card-shape z-1">
                                        <h6 class="fs-12 font-primary fw-semibold text-title ls-1">OUR IMPACT</h6>
                                        <h4 class="font-secondary fw-black fs-36 text-title"><span
                                                class="counter ls-1 transition">3</span>K+</h4>
                                        <p class="fw-medium d-block mb-0">Projects Done</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Us Section End -->

    <!-- Feature Section Start -->
    <div class="feature-area style-four position-relative z-1 pt-120 pb-90 mx-xxl-4">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <h6
                        class="section-subtitle style-two fs-13 ls-1 font-optional fw-semibold position-relative text_primary mb-20">
                        <img src="{{asset('frontend/assets/img/icons/home-icon.svg')}}" alt="Icon">OUR FEATURES</h6>
                    <h2 class="section-title style-one fw-normal text-title mb-40">Geniune <span class="fw-black">Partner In
                            Every Aspect</span> Of Development</h2>
                </div>
            </div>
            <div class="row justify-content-center pb-90">
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="feature-card style-one mb-30">
                        <img src="{{asset('frontend/assets/img/features/feature-1.png')}}" alt="Icon">
                        <h3 class="fs-24 fw-semibold">Project Management</h3>
                        <p class="pe-xxl-4 pe-1 mb-0">We handle everything from permits to final walkthrough communication
                            every step of the way</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 ps-xxl-5">
                    <div class="feature-card style-one mb-30">
                        <img src="{{asset('frontend/assets/img/features/feature-2.png')}}" alt="Icon">
                        <h3 class="fs-24 fw-semibold">Skilled Team</h3>
                        <p class="pe-xxl-4 pe-1 mb-0">Experienced professionals committed to precision and safety goal is
                            zero incidents</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 ps-xxl-5">
                    <div class="feature-card style-one mb-30">
                        <img src="{{asset('frontend/assets/img/features/feature-3.png')}}" alt="Icon">
                        <h3 class="fs-24 fw-semibold">Premium Materials</h3>
                        <p class="pe-xxl-4 pe-1 mb-0">Only top-grade materials used for lasting strength and styleOur goal
                            is zero incidents</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 ps-xxl-5">
                    <div class="feature-card style-one mb-30">
                        <img src="{{asset('frontend/assets/img/features/feature-4.png')}}" alt="Icon">
                        <h3 class="fs-24 fw-semibold">Custom Home Builds</h3>
                        <p class="pe-xxl-4 pe-1 mb-0">Tailored designs built from the ground match your vision Reliable
                            timelines with clear</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6">
                    <div class="feature-card style-six d-flex flex-wrap align-items-center bg-white round-10 mb-30">
                        <div class="feature-img round-10">
                            <img src="{{asset('frontend/assets/img/about/about-img-4.jpg')}}" alt="Image" class="round-10">
                        </div>
                        <div class="feature-info">
                            <h6 class="fs-20 fw-bold text-title">Mission</h6>
                            <p>To build beautiful, lasting homes with unmatched craftsmanship</p>
                            <ul class="feature-list list-unstyled mb-0">
                                <li class="position-relative text-title fw-medium"><img src="{{asset('frontend/assets/img/icons/check-2.svg')}}"
                                        alt="Icon">Commercial Services</li>
                                <li class="position-relative text-title fw-medium"><img src="{{asset('frontend/assets/img/icons/check-2.svg')}}"
                                        alt="Icon">Residential Services</li>
                                <li class="position-relative text-title fw-medium"><img src="{{asset('frontend/assets/img/icons/check-2.svg')}}"
                                        alt="Icon">Construction Services</li>
                                <li class="position-relative text-title fw-medium"><img src="{{asset('frontend/assets/img/icons/check-2.svg')}}"
                                        alt="Icon">Industrial Services</li>
                                <li class="position-relative text-title fw-medium"><img src="{{asset('frontend/assets/img/icons/check-2.svg')}}"
                                        alt="Icon">Home Renovation</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="feature-card style-six d-flex flex-wrap align-items-center bg-white round-10 mb-30">
                        <div class="feature-img round-10">
                            <img src="{{asset('frontend/assets/img/about/about-img-5.jpg')}}" alt="Image" class="round-10">
                        </div>
                        <div class="feature-info">
                            <h6 class="fs-20 fw-bold text-title">Vission</h6>
                            <p>To be the most trusted name in custom home building redefining craftsmanship</p>
                            <ul class="feature-list list-unstyled mb-0">
                                <li class="position-relative text-title fw-medium"><img src="{{asset('frontend/assets/img/icons/check-2.svg')}}"
                                        alt="Icon">Home Craftsmanship</li>
                                <li class="position-relative text-title fw-medium"><img src="{{asset('frontend/assets/img/icons/check-2.svg')}}"
                                        alt="Icon">Experiences For Every Client</li>
                                <li class="position-relative text-title fw-medium"><img src="{{asset('frontend/assets/img/icons/check-2.svg')}}"
                                        alt="Icon">Smart Building Solutions</li>
                                <li class="position-relative text-title fw-medium"><img src="{{asset('frontend/assets/img/icons/check-2.svg')}}"
                                        alt="Icon">Trust And Transparency</li>
                                <li class="position-relative text-title fw-medium"><img src="{{asset('frontend/assets/img/icons/check-2.svg')}}"
                                        alt="Icon">Endure For Generations</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature Section End -->

    <!-- Team Section Start -->
    <div class="team-area style-one position-relative pb-120">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 offset-xl-2 col-md-10 offset-md-1 text-center px-xxl-5">
                    <h6 class="section-subtitle style-one d-inline-block fs-13 ls-1 font-optional fw-semibold position-relative text_primary mb-20"
                        data-cue="slideInUp"><img src="{{asset('frontend/assets/img/icons/star-3.svg')}}" alt="Icon">MEET THE TEAM</h6>
                    <h2 class="section-title style-one text-title px-xxl-5 mb-40" data-cue="slideInUp" data-delay="300">
                        Trusted <span class="fw-black">Professionals Who Treat Your</span> Home Like Their Own</h2>
                </div>
            </div>
            <div class="team-slider-one swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="team-card style-one img-hover-zoom">
                            <div class="team-img round-10 img-zoom position-relative overflow-hidden">
                                <img src="{{asset('frontend/assets/img/team/team-1.jpg')}}" alt="Image"
                                    class="position-absolute top-0 bottom-0 start-0 end-0 z-1 round-10 transition">
                                <img src="{{asset('frontend/assets/img/team/team-1.jpg')}}" alt="Image" class="round-10 transition">
                            </div>
                            <div class="team-info d-flex flex-wrap justify-content-between">
                                <div>
                                    <h3 class="fw-bold mb-1"><a href="team-single.html"
                                            class="text-title link-hover-primary transition">Michael Harper</a></h3>
                                    <span>Project Manager</span>
                                </div>
                                <ul class="social-profile style-two list-unstyled mb-0">
                                    <li><a href="https://www.facebook.com"
                                            class="d-flex flex-column align-items-center justify-content-center rounded-circle"><i
                                                class="ri-facebook-fill"></i></a></li>
                                    <li><a href="https://x.com/"
                                            class="d-flex flex-column align-items-center justify-content-center rounded-circle"><i
                                                class="ri-twitter-x-line"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="team-card style-one img-hover-zoom">
                            <div class="team-img round-10 img-zoom position-relative overflow-hidden">
                                <img src="{{asset('frontend/assets/img/team/team-2.jpg')}}" alt="Image"
                                    class="position-absolute top-0 bottom-0 start-0 end-0 z-1 round-10 transition">
                                <img src="{{asset('frontend/assets/img/team/team-2.jpg')}}" alt="Image" class="round-10 transition">
                            </div>
                            <div class="team-info d-flex flex-wrap justify-content-between">
                                <div>
                                    <h3 class="fw-bold mb-1"><a href="team-single.html"
                                            class="text-title link-hover-primary transition">Samantha Cruz</a></h3>
                                    <span>Interior Designer</span>
                                </div>
                                <ul class="social-profile style-two list-unstyled mb-0">
                                    <li><a href="https://www.facebook.com"
                                            class="d-flex flex-column align-items-center justify-content-center rounded-circle"><i
                                                class="ri-facebook-fill"></i></a></li>
                                    <li><a href="https://x.com/"
                                            class="d-flex flex-column align-items-center justify-content-center rounded-circle"><i
                                                class="ri-twitter-x-line"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="team-card style-one img-hover-zoom">
                            <div class="team-img round-10 img-zoom position-relative overflow-hidden">
                                <img src="{{asset('frontend/assets/img/team/team-3.jpg')}}" alt="Image"
                                    class="position-absolute top-0 bottom-0 start-0 end-0 z-1 round-10 transition">
                                <img src="{{asset('frontend/assets/img/team/team-3.jpg')}}" alt="Image" class="round-10 transition">
                            </div>
                            <div class="team-info d-flex flex-wrap justify-content-between">
                                <div>
                                    <h3 class="fw-bold mb-1"><a href="team-single.html"
                                            class="text-title link-hover-primary transition">David Linwood</a></h3>
                                    <span>Head Of Construction</span>
                                </div>
                                <ul class="social-profile style-two list-unstyled mb-0">
                                    <li><a href="https://www.facebook.com"
                                            class="d-flex flex-column align-items-center justify-content-center rounded-circle"><i
                                                class="ri-facebook-fill"></i></a></li>
                                    <li><a href="https://x.com/"
                                            class="d-flex flex-column align-items-center justify-content-center rounded-circle"><i
                                                class="ri-twitter-x-line"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="team-card style-one img-hover-zoom">
                            <div class="team-img round-10 img-zoom position-relative overflow-hidden">
                                <img src="{{asset('frontend/assets/img/team/team-4.jpg')}}" alt="Image"
                                    class="position-absolute top-0 bottom-0 start-0 end-0 z-1 round-10 transition">
                                <img src="{{asset('frontend/assets/img/team/team-4.jpg')}}" alt="Image" class="round-10 transition">
                            </div>
                            <div class="team-info d-flex flex-wrap justify-content-between">
                                <div>
                                    <h3 class="fw-bold mb-1"><a href="team-single.html"
                                            class="text-title link-hover-primary transition">Jared Collins</a></h3>
                                    <span>Electrical Engineer</span>
                                </div>
                                <ul class="social-profile style-two list-unstyled mb-0">
                                    <li><a href="https://www.facebook.com"
                                            class="d-flex flex-column align-items-center justify-content-center rounded-circle"><i
                                                class="ri-facebook-fill"></i></a></li>
                                    <li><a href="https://x.com/"
                                            class="d-flex flex-column align-items-center justify-content-center rounded-circle"><i
                                                class="ri-twitter-x-line"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="team-card style-one img-hover-zoom">
                            <div class="team-img round-10 img-zoom position-relative overflow-hidden">
                                <img src="{{asset('frontend/assets/img/team/team-5.jpg')}}" alt="Image"
                                    class="position-absolute top-0 bottom-0 start-0 end-0 z-1 round-10 transition">
                                <img src="{{asset('frontend/assets/img/team/team-5.jpg')}}" alt="Image" class="round-10 transition">
                            </div>
                            <div class="team-info d-flex flex-wrap justify-content-between">
                                <div>
                                    <h3 class="fw-bold mb-1"><a href="team-single.html"
                                            class="text-title link-hover-primary transition">Joanne Underwood</a></h3>
                                    <span>Lead Architect</span>
                                </div>
                                <ul class="social-profile style-two list-unstyled mb-0">
                                    <li><a href="https://www.facebook.com"
                                            class="d-flex flex-column align-items-center justify-content-center rounded-circle"><i
                                                class="ri-facebook-fill"></i></a></li>
                                    <li><a href="https://x.com/"
                                            class="d-flex flex-column align-items-center justify-content-center rounded-circle"><i
                                                class="ri-twitter-x-line"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="team-card style-one img-hover-zoom">
                            <div class="team-img round-10 img-zoom position-relative overflow-hidden">
                                <img src="{{asset('frontend/assets/img/team/team-6.jpg')}}" alt="Image"
                                    class="position-absolute top-0 bottom-0 start-0 end-0 z-1 round-10 transition">
                                <img src="{{asset('frontend/assets/img/team/team-6.jpg')}}" alt="Image" class="round-10 transition">
                            </div>
                            <div class="team-info d-flex flex-wrap justify-content-between">
                                <div>
                                    <h3 class="fw-bold mb-1"><a href="team-single.html"
                                            class="text-title link-hover-primary transition">Jhon Sharp</a></h3>
                                    <span>Master Builder</span>
                                </div>
                                <ul class="social-profile style-two list-unstyled mb-0">
                                    <li><a href="https://www.facebook.com"
                                            class="d-flex flex-column align-items-center justify-content-center rounded-circle"><i
                                                class="ri-facebook-fill"></i></a></li>
                                    <li><a href="https://x.com/"
                                            class="d-flex flex-column align-items-center justify-content-center rounded-circle"><i
                                                class="ri-twitter-x-line"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="team-card style-one img-hover-zoom">
                            <div class="team-img round-10 img-zoom position-relative overflow-hidden">
                                <img src="{{asset('frontend/assets/img/team/team-7.jpg')}}" alt="Image"
                                    class="position-absolute top-0 bottom-0 start-0 end-0 z-1 round-10 transition">
                                <img src="{{asset('frontend/assets/img/team/team-7.jpg')}}" alt="Image" class="round-10 transition">
                            </div>
                            <div class="team-info d-flex flex-wrap justify-content-between">
                                <div>
                                    <h3 class="fw-bold mb-1"><a href="team-single.html"
                                            class="text-title link-hover-primary transition">Megan Skinner</a></h3>
                                    <span>Interior Designer</span>
                                </div>
                                <ul class="social-profile style-two list-unstyled mb-0">
                                    <li><a href="https://www.facebook.com"
                                            class="d-flex flex-column align-items-center justify-content-center rounded-circle"><i
                                                class="ri-facebook-fill"></i></a></li>
                                    <li><a href="https://x.com/"
                                            class="d-flex flex-column align-items-center justify-content-center rounded-circle"><i
                                                class="ri-twitter-x-line"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="team-card style-one img-hover-zoom">
                            <div class="team-img round-10 img-zoom position-relative overflow-hidden">
                                <img src="{{asset('frontend/assets/img/team/team-8.jpg')}}" alt="Image"
                                    class="position-absolute top-0 bottom-0 start-0 end-0 z-1 round-10 transition">
                                <img src="{{asset('frontend/assets/img/team/team-8.jpg')}}" alt="Image" class="round-10 transition">
                            </div>
                            <div class="team-info d-flex flex-wrap justify-content-between">
                                <div>
                                    <h3 class="fw-bold mb-1"><a href="team-single.html"
                                            class="text-title link-hover-primary transition">Audrey Hudson</a></h3>
                                    <span>Supervisor</span>
                                </div>
                                <ul class="social-profile style-two list-unstyled mb-0">
                                    <li><a href="https://www.facebook.com"
                                            class="d-flex flex-column align-items-center justify-content-center rounded-circle"><i
                                                class="ri-facebook-fill"></i></a></li>
                                    <li><a href="https://x.com/"
                                            class="d-flex flex-column align-items-center justify-content-center rounded-circle"><i
                                                class="ri-twitter-x-line"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="slider-btn style-one d-flex flex-wrap justify-content-md-end">
            <button
                class="prev-btn team-prev border-0 d-flex flex-column align-items-center justify-content-center rounded-circle me-2 z-1"><img
                    src="{{asset('frontend/assets/img/icons/left-long-arrow-orange.svg')}}" alt="Icon"></button>
            <button
                class="next-btn team-next border-0 d-flex flex-column align-items-center justify-content-center rounded-circle ms-2 z-1"><img
                    src="{{asset('frontend/assets/img/icons/right-long-arrow-orange.svg')}}" alt="Icon"></button>
        </div>
    </div>
    <!-- Team Section End -->

    <!-- CTA Section Start -->
    <div class="cta-area style-one bg-f position-relative overflow-hidden z-1 mx-xxl-4 mx-2 round-40">
        <img src="{{asset('frontend/assets/img/cta/shape-1.png')}}" alt="Shape" class="section-shape position-absolute bottom-0 end-0 z-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-7 mb-sm-20">
                    <h2 class="section-title style-two fw-normal text-white mb-0">Let’s Build Your <span
                            class="fw-black">Dream Home Today</span> – Contact Us For A Consultation!</h2>
                </div>
                <div class="col-lg-6 col-md-5">
                    <div
                        class="circle-text-wrap position-relative bg_primary rounded-circle overflow-hidden z-1 ms-md-auto me-md-0 ms-auto me-auto">
                        <img src="{{asset('frontend/assets/img/cta/circle-text.png')}}" alt="Circle Text"
                            class="rotate position-relative z-1 d-block mx-auto">
                        <img src="{{asset('frontend/assets/img/icons/up-right-arrow-white-small.svg')}}" alt="Icon"
                            class="arrow-icon position-absolute z-n1">
                        <a href="contact.html" class="position-absolute top-0 start-0 w-100 h-100 z-1"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- CTA Section End -->

    <!-- Move Text Start -->
    <div class="move-text-wrapper overflow-hidden pt-120 mb-120">
        <div class="move-text style-two position-relative z-1">
            <ul class="list-unstyled mb-0">
                <li class="position-relative font-secondary">SATISFACTION-FIRST APPROACH</li>
                <li class="position-relative font-secondary">PROJECT TIMELINE GUARANTEE </li>
                <li class="position-relative font-secondary">LICENSED & INSURED EXPERTS</li>
                <li class="position-relative font-secondary">SATISFACTION-FIRST APPROACH</li>
                <li class="position-relative font-secondary">PROJECT TIMELINE GUARANTEE </li>
                <li class="position-relative font-secondary">LICENSED & INSURED EXPERTS</li>
            </ul>
        </div>
    </div>
    <!-- Move Text End -->

    <!-- Testimonial Section Start -->
    <div class="container pb-120">
        <div class="row">
            <div class="col-xxl-7 col-lg-7 order-xl-1 order-lg-1 order-2 pe-xl-2">
                <div class="testimonial-slider-one style-two swiper position-relative z-1 pt-1">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="testimonial-card style-two">
                                <span
                                    class="quote-icon bg_secondary d-flex flex-wrap align-items-center justify-content-center rounded-circle"><img
                                        src="{{asset('frontend/assets/img/icons/quote-large.svg')}}" alt="Icon"></span>
                                <p class="fw-medium text-title">"From the first consultation to the final reveal, Renius
                                    made our exciting. They truly listened to our ideas and brought them to life with
                                    incredible attention to detail."</p>
                                <h6 class="fs-20 font-primary fw-semibold position-relative text-title mb-0">Ramu
                                    Biharilal<span class="fs-15 fw-normal d-block text-para mt-2">Manager</span></h6>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonial-card style-two">
                                <span
                                    class="quote-icon bg_secondary d-flex flex-wrap align-items-center justify-content-center rounded-circle"><img
                                        src="{{asset('frontend/assets/img/icons/quote-large.svg')}}" alt="Icon"></span>
                                <p class="fw-medium text-title">"They truly listened to our ideas and brought them to life
                                    with incredible attention to detail.From the first consultation to the final reveal,
                                    Renius made our exciting."</p>
                                <h6 class="fs-20 font-primary fw-semibold position-relative text-title mb-0">Jhon
                                    Richards<span class="fs-15 fw-normal text-para ms-2">Entreprenuer</span></h6>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonial-card style-two">
                                <span
                                    class="quote-icon bg_secondary d-flex flex-wrap align-items-center justify-content-center rounded-circle"><img
                                        src="{{asset('frontend/assets/img/icons/quote-large.svg')}}" alt="Icon"></span>
                                <p class="fw-medium text-title">"Awosome services from first consultation to the final
                                    reveal, Renius made us amazed. They truly listened to our ideas and brought them live
                                    with incredible attention to detail."</p>
                                <h6 class="fs-20 font-primary fw-semibold position-relative text-title mb-0">Emily
                                    Watson<span class="fs-15 fw-normal text-para ms-2">Teacher</span></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-5 col-lg-5 order-xl-2 order-lg-2 order-1 ps-xxl-5 mb-md-30">
                <h6
                    class="section-subtitle style-one fs-13 ls-1 font-optional fw-semibold position-relative text_primary mb-16">
                    <img src="{{asset('frontend/assets/img/icons/star-3.svg')}}" alt="Icon">TESTIMONIALS</h6>
                <h2 class="section-title style-one fw-normal text-title mb-35">Reliable, <span
                        class="fw-black">Professional, And Truly Cared About</span> Every Detail</h2>
                <div class="testimonial-bg-wrap d-flex flex-wrap align-items-end justify-content-between">
                    <div class="testimonial-bg round-10"><img src="{{asset('frontend/assets/img/clients/testimonial-bg.jpg')}}" alt="Image"
                            class="round-10"></div>
                    <div class="slider-btn style-one d-flex flex-wrap justify-content-md-end">
                        <button
                            class="prev-btn testimonial-prev border-0 d-flex flex-column align-items-center justify-content-center rounded-circle me-2 z-1"><img
                                src="{{asset('frontend/assets/img/icons/left-long-arrow-orange.svg')}}" alt="Icon"></button>
                        <button
                            class="next-btn testimonial-next border-0 d-flex flex-column align-items-center justify-content-center rounded-circle ms-2 z-1"><img
                                src="{{asset('frontend/assets/img/icons/right-long-arrow-orange.svg')}}" alt="Icon"></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial Section End -->

    <!-- Why Choose Us Section Start -->
    <div class="wh-area style-two bg-gray ptb-120 round-45 mx-xxl-4 mx-2">
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
                            class="wh-thumb position-absolute top-0 end-0 round-10">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Why Choose Us Section End -->

    <!-- Brand Partner Start -->
    @include('frontend.pages.brand_slider')
    <!-- Brand Partner End -->
@endsection
