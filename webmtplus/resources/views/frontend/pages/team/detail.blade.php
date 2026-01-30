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
                    <h2 class="section-title style-one fw-black text-title">Team Single</h2>
                    <ul class="br-menu list-unstyled">
                        <li><a href="{{route('home')}}"><img src="{{asset('frontend/assets/img/icons/home-icon.svg')}}" alt="Icon">HOME</a></li>
                        <li><a href="{{route('team.index')}}"><img src="{{asset('frontend/assets/img/icons/home-icon.svg')}}" alt="Icon">TEAM</a></li>
                        <li>TEAM SINGLE</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End -->

    <!-- Team Single Start -->
    <div class="container ptb-120">
        <div class="row mb-30">
            <div class="col-xl-8 pe-xxl-1">
                <div class="single-team-box bg-gray round-10 mb-30">
                    <div class="row align-items-center">
                        <div class="col-md-7">
                            <div class="team-img round-10 mb-sm-20">
                                <img src="{{asset('frontend/assets/img/team/single-team-1.jpg')}}" alt="Image" class="round-10">
                            </div>
                        </div>
                        <div class="col-md-5 ps-xxl-4">
                            <div class="single-team-details d-flex flex-column justify-content-between">
                                <div class="team-member-info">
                                    <h3 class="fs-24 fw-bold mb-1">Michael Harper</h3>
                                    <span>Project Manager</span>
                                    <ul class="single-team-infolist list-unstyled">
                                        <li><span class="fw-semibold text-title">Position:</span> Rental Property Expert
                                        </li>
                                        <li><span class="fw-semibold text-title">Experience:</span> 15+ Years</li>
                                        <li><span class="fw-semibold text-title">Location :</span> New Jersy, New York</li>
                                        <li><span class="fw-semibold text-title">Practice Area :</span> Property Seller</li>
                                    </ul>
                                </div>
                                <div>
                                    <a href="tel:56647768859"
                                        class="btn style-one d-inline-flex flex-wrap align-items-center p-0 mb-30"><span
                                            class="btn-text d-inline-block fw-semibold position-relative transition">Contact
                                            Michael</span></a>
                                    <ul class="social-profile style-three list-unstyled mb-0">
                                        <li><a href="https://www.facebook.com/" target="_blank"
                                                class="d-flex flex-column align-items-center justify-content-center rounded-circle"><i
                                                    class="ri-facebook-fill"></i></a></li>
                                        <li><a href="https://x.com/?lang=en" target="_blank"
                                                class="d-flex flex-column align-items-center justify-content-center rounded-circle"><i
                                                    class="ri-twitter-x-line"></i></a></li>
                                        <li><a href="https://www.instagram.com/" target="_blank"
                                                class="d-flex flex-column align-items-center justify-content-center rounded-circle"><i
                                                    class="ri-instagram-line"></i></a></li>
                                        <li><a href="https://www.linkedin.com/" target="_blank"
                                                class="d-flex flex-column align-items-center justify-content-center rounded-circle"><i
                                                    class="ri-linkedin-fill"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 ps-xxl-4">
                <div class="sidebar mt-lg-50">
                    <div class="sidebar-widget bg-1 style-two round-10">
                        <h3 class="fs-20 fw-bold mb-20">Address</h3>
                        <ul class="contact-list list-unstyled mb-0">
                            <li class="position-relative"><img src="{{asset('frontend/assets/img/icons/pin-orange-2.svg')}}" alt="Iocn"><span
                                    class="text-title fw-medium me-1">Address:</span>  608 Imperial St, Los Angeles, CA
                                90021, USA</li>
                            <li class="position-relative"><img src="{{asset('frontend/assets/img/icons/phone-2.svg')}}" alt="Iocn"><span
                                    class="text-title fw-medium me-1">Phone:</span><a href="tel:56647768859"
                                    class="text-para hover-text-primary">+56 647 768 859</a></li>
                            <li class="position-relative"><img src="{{asset('frontend/assets/img/icons/email-2.svg')}}" alt="Iocn"><span
                                    class="text-title fw-medium me-1">Email:</span><a href="mailto:hello@michaelharper.com"
                                    class="text-para hover-text-primary">hello@michaelharper.com</a></li>
                            <li class="position-relative"><img src="{{asset('frontend/assets/img/icons/fax-2.svg')}}" alt="Iocn"><span
                                    class="text-title fw-medium me-1">Fax:</span>7585869996</li>
                        </ul>
                    </div>
                    <div class="sidebar-widget bg-2 style-two round-10">
                        <h3 class="fs-20 fw-bold mb-20">Experience</h3>
                        <ul class="experience-list list-unstyled mb-0">
                            <li class="position-relative fw-medium"><img src="{{asset('frontend/assets/img/icons/right-arrow-pink.svg')}}"
                                    alt="Icon">Real Estate Sales & Leasing</li>
                            <li class="position-relative fw-medium"><img src="{{asset('frontend/assets/img/icons/right-arrow-pink.svg')}}"
                                    alt="Icon">Civil & Structural Engineering</li>
                            <li class="position-relative fw-medium"><img src="{{asset('frontend/assets/img/icons/right-arrow-pink.svg')}}"
                                    alt="Icon">Construction Management</li>
                            <li class="position-relative fw-medium"><img src="{{asset('frontend/assets/img/icons/right-arrow-pink.svg')}}"
                                    alt="Icon">Architecture & Design (CAD, Revit, BIM)</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-8">
                <div class="team-desc">
                    <div class="single-para mb-30">
                        <h3 class="fs-24 fw-bold">About Me</h3>
                        <p>The founder and master builder behind Renius Home Build Craft. With over two decades of
                            experience in custom home construction, Nathan combines technical expertise with a true passion
                            for craftsmanship leadership ensures that every project meets the highest standards of quality,
                        </p>
                        <p>While his hands-on approach keeps client needs at the heart of every build. From initial
                            consultation to the final walkthrough, Nathan is dedicated to building not just houses—but homes
                            that last for generations.</p>
                    </div>
                    <h6 class="fs-18 fw-semibold text-title mb-20">Areas of expertise</h6>
                    <ul class="feature-list list-unstyled d-flex flex-wrap mb-0 pe-xl-5 me-xl-5">
                        <li class="position-relative text-title fw-medium">Commercial property manager</li>
                        <li class="position-relative text-title fw-medium">Land development specialist</li>
                        <li class="position-relative text-title fw-medium">Leasing Consultant</li>
                        <li class="position-relative text-title fw-medium">Real estate broker</li>
                        <li class="position-relative text-title fw-medium">Investment property advisor</li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="sidebar mt-lg-50">
                    <div class="sidebar-widget bg-gray round-10">
                        <h3 class="fs-20 fw-bold text-title mb-20">Book A Meeting</h3>
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
                </div>
            </div>
        </div>
    </div>
    <!-- Team Single End -->

    <!-- Brand Partner Start -->
       @include('frontend.pages.brand_slider')
    <!-- Brand Partner End -->
@endsection
