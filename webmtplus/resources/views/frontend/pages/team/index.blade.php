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
                    <h2 class="section-title style-one fw-black text-title">Team</h2>
                    <ul class="br-menu list-unstyled">
                        <li><a href="{{route('home')}}"><img src="{{asset('frontend/assets/img/icons/home-icon.svg')}}" alt="Icon">HOME</a></li>
                        <li>TEAM</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End -->

    <!-- Team Section Start -->
    <div class="team-area style-one position-relative ptb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6">
                    <div class="team-card style-one img-hover-zoom mb-45">
                        <div class="team-img round-10 img-zoom position-relative overflow-hidden">
                            <img src="{{asset('frontend/assets/img/team/team-1.jpg')}}" alt="Image"
                                class="position-absolute top-0 bottom-0 start-0 end-0 z-1 round-10 transition">
                            <img src="{{asset('frontend/assets/img/team/team-1.jpg')}}" alt="Image" class="round-10 transition">
                        </div>
                        <div class="team-info d-flex flex-wrap justify-content-between">
                            <div>
                                <h3 class="fw-bold mb-1"><a href="{{route('team.detail')}}"
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
                <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6">
                    <div class="team-card style-one img-hover-zoom mb-45">
                        <div class="team-img round-10 img-zoom position-relative overflow-hidden">
                            <img src="{{asset('frontend/assets/img/team/team-2.jpg')}}" alt="Image"
                                class="position-absolute top-0 bottom-0 start-0 end-0 z-1 round-10 transition">
                            <img src="{{asset('frontend/assets/img/team/team-2.jpg')}}" alt="Image" class="round-10 transition">
                        </div>
                        <div class="team-info d-flex flex-wrap justify-content-between">
                            <div>
                                <h3 class="fw-bold mb-1"><a href="{{route('team.detail')}}"
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
                <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6">
                    <div class="team-card style-one img-hover-zoom mb-45">
                        <div class="team-img round-10 img-zoom position-relative overflow-hidden">
                            <img src="{{asset('frontend/assets/img/team/team-3.jpg')}}" alt="Image"
                                class="position-absolute top-0 bottom-0 start-0 end-0 z-1 round-10 transition">
                            <img src="{{asset('frontend/assets/img/team/team-3.jpg')}}" alt="Image" class="round-10 transition">
                        </div>
                        <div class="team-info d-flex flex-wrap justify-content-between">
                            <div>
                                <h3 class="fw-bold mb-1"><a href="{{route('team.detail')}}"
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
                <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6">
                    <div class="team-card style-one img-hover-zoom mb-45">
                        <div class="team-img round-10 img-zoom position-relative overflow-hidden">
                            <img src="{{asset('frontend/assets/img/team/team-4.jpg')}}" alt="Image"
                                class="position-absolute top-0 bottom-0 start-0 end-0 z-1 round-10 transition">
                            <img src="{{asset('frontend/assets/img/team/team-4.jpg')}}" alt="Image" class="round-10 transition">
                        </div>
                        <div class="team-info d-flex flex-wrap justify-content-between">
                            <div>
                                <h3 class="fw-bold mb-1"><a href="{{route('team.detail')}}"
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
                <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6">
                    <div class="team-card style-one img-hover-zoom mb-45">
                        <div class="team-img round-10 img-zoom position-relative overflow-hidden">
                            <img src="{{asset('frontend/assets/img/team/team-5.jpg')}}" alt="Image"
                                class="position-absolute top-0 bottom-0 start-0 end-0 z-1 round-10 transition">
                            <img src="{{asset('frontend/assets/img/team/team-5.jpg')}}" alt="Image" class="round-10 transition">
                        </div>
                        <div class="team-info d-flex flex-wrap justify-content-between">
                            <div>
                                <h3 class="fw-bold mb-1"><a href="{{route('team.detail')}}"
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
                <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6">
                    <div class="team-card style-one img-hover-zoom mb-45">
                        <div class="team-img round-10 img-zoom position-relative overflow-hidden">
                            <img src="{{asset('frontend/assets/img/team/team-6.jpg')}}" alt="Image"
                                class="position-absolute top-0 bottom-0 start-0 end-0 z-1 round-10 transition">
                            <img src="{{asset('frontend/assets/img/team/team-6.jpg')}}" alt="Image" class="round-10 transition">
                        </div>
                        <div class="team-info d-flex flex-wrap justify-content-between">
                            <div>
                                <h3 class="fw-bold mb-1"><a href="{{route('team.detail')}}"
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
                <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6">
                    <div class="team-card style-one img-hover-zoom mb-45">
                        <div class="team-img round-10 img-zoom position-relative overflow-hidden">
                            <img src="{{asset('frontend/assets/img/team/team-7.jpg')}}" alt="Image"
                                class="position-absolute top-0 bottom-0 start-0 end-0 z-1 round-10 transition">
                            <img src="{{asset('frontend/assets/img/team/team-7.jpg')}}" alt="Image" class="round-10 transition">
                        </div>
                        <div class="team-info d-flex flex-wrap justify-content-between">
                            <div>
                                <h3 class="fw-bold mb-1"><a href="{{route('team.detail')}}"
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
                <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6">
                    <div class="team-card style-one img-hover-zoom mb-45">
                        <div class="team-img round-10 img-zoom position-relative overflow-hidden">
                            <img src="{{asset('frontend/assets/img/team/team-8.jpg')}}" alt="Image"
                                class="position-absolute top-0 bottom-0 start-0 end-0 z-1 round-10 transition">
                            <img src="{{asset('frontend/assets/img/team/team-8.jpg')}}" alt="Image" class="round-10 transition">
                        </div>
                        <div class="team-info d-flex flex-wrap justify-content-between">
                            <div>
                                <h3 class="fw-bold mb-1"><a href="{{route('team.detail')}}"
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
            <ul class="page-nav pagination justify-content-center mb-0 mt-lg-4">
                <li class="page-item">
                    <a class="page-link d-flex flex-column align-items-center justify-content-center rounded-circle"
                        href="{{route('team.index')}}" aria-label="Previous">
                        <img src="{{asset('frontend/assets/img/icons/left-long-arrow-gray.svg')}}" alt="Icon">
                    </a>
                </li>
                <li class="page-item"><a
                        class="page-link d-flex flex-column align-items-center justify-content-center rounded-circle active"
                        href="{{route('team.index')}}">01</a></li>
                <li class="page-item"><a
                        class="page-link d-flex flex-column align-items-center justify-content-center rounded-circle"
                        href="{{route('team.index')}}">02</a></li>
                <li class="page-item"><a
                        class="page-link d-flex flex-column align-items-center justify-content-center rounded-circle"
                        href="{{route('team.index')}}">03</a></li>
                <li class="page-item">
                    <a class="page-link d-flex flex-column align-items-center justify-content-center rounded-circle"
                        href="{{route('team.index')}}" aria-label="Next">
                        <img src="{{asset('frontend/assets/img/icons/right-long-arrow-gray.svg')}}" alt="Icon">
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <!-- Team Section End -->

    <!-- Brand Partner Start -->
    @include('frontend.pages.brand_slider')
    <!-- Brand Partner End -->
@endsection
