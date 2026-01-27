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
                    <h2 class="section-title style-one fw-black text-title">Careers</h2>
                    <ul class="br-menu list-unstyled">
                        <li><a href="{{ route('home') }}"><img src="{{ asset('frontend/assets/img/icons/home-icon.svg') }}" alt="Icon">HOME</a></li>
                        <li>CAREERS</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
   
    <!-- Breadcrumb Section End -->

    <!-- Career Section Start -->
    <div class="container ptb-120">
        <div class="row justify-content-center">
            <div class="col-xl-4 col-md-6">
                <div class="job-card style-one position-relative img-hover-zoom z-1 round-10 mb-30">
                    <div class="job-img position-relative overflow-hidden img-zoom z-1 round-10">
                        <img src="{{ asset('frontend/assets/img/career/career-1.jpg') }}" alt="Image"
                            class="position-absolute top-0 start-0 w-100 h-100 transition round-10">
                        <img src="{{ asset('frontend/assets/img/career/career-1.jpg') }}" alt="Image" class="transition round-10">
                        <div class="job-salary fs-15 text-title bg-white position-absolute end-0">Salary: <span
                                class="fw-bold">50K</span></div>
                    </div>
                    <div class="job-info">
                        <h3 class="fs-24 fw-bold"><a href="{{route('careers.detail')}}"
                                class="text-title link-hover-primary transition">Real Estate Sales Associates</a></h3>
                        <ul class="job-metainfo list-unstyled">
                            <li class="position-relative"><img src="{{ asset('frontend/assets/img/icons/pin-orange-2.svg') }}" alt="Icon"><span
                                    class="fw-medium text-title me-1">Location:</span> Lagos, Nigeria</li>
                            <li class="position-relative"><img src="{{ asset('frontend/assets/img/icons/bag-2.svg') }}" alt="Icon"><span
                                    class="fw-medium text-title me-1">Type:</span> Full-Time</li>
                            <li class="position-relative"><img src="{{ asset('frontend/assets/img/icons/user-2.svg') }}" alt="Icon"><span
                                    class="fw-medium text-title me-1">Experience:</span>4+ Years</li>
                        </ul>
                        <div class="text-center">
                            <a href="{{route('careers.detail')}}" class="link style-one fw-semibold">Apply Now <img
                                    src="{{ asset('frontend/assets/img/icons/right-arrow-small.svg') }}" alt="Icon"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="job-card style-one position-relative img-hover-zoom z-1 round-10 mb-30">
                    <div class="job-img position-relative overflow-hidden img-zoom z-1 round-10">
                        <img src="{{ asset('frontend/assets/img/career/career-2.jpg') }}" alt="Image"
                            class="position-absolute top-0 start-0 w-100 h-100 transition round-10">
                        <img src="{{ asset('frontend/assets/img/career/career-2.jpg') }}" alt="Image" class="transition round-10">
                        <div class="job-salary fs-15 text-title bg-white position-absolute end-0">Salary: <span
                                class="fw-bold">30K</span></div>
                    </div>
                    <div class="job-info">
                        <h3 class="fs-24 fw-bold"><a href="{{route('careers.detail')}}"
                                class="text-title link-hover-primary transition">Construction Project Manager</a></h3>
                        <ul class="job-metainfo list-unstyled">
                            <li class="position-relative"><img src="{{ asset('frontend/assets/img/icons/pin-orange-2.svg') }}" alt="Icon"><span
                                    class="fw-medium text-title me-1">Location:</span>East Verdan</li>
                            <li class="position-relative"><img src="{{ asset('frontend/assets/img/icons/bag-2.svg') }}" alt="Icon"><span
                                    class="fw-medium text-title me-1">Type:</span> Full-Time</li>
                            <li class="position-relative"><img src="{{ asset('frontend/assets/img/icons/user-2.svg') }}" alt="Icon"><span
                                    class="fw-medium text-title me-1">Experience:</span>2+ Years</li>
                        </ul>
                        <div class="text-center">
                            <a href="{{route('careers.detail')}}" class="link style-one fw-semibold">Apply Now <img
                                    src="{{ asset('frontend/assets/img/icons/right-arrow-small.svg') }}" alt="Icon"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="job-card style-one position-relative img-hover-zoom z-1 round-10 mb-30">
                    <div class="job-img position-relative overflow-hidden img-zoom z-1 round-10">
                        <img src="{{ asset('frontend/assets/img/career/career-3.jpg') }}" alt="Image"
                            class="position-absolute top-0 start-0 w-100 h-100 transition round-10">
                        <img src="{{ asset('frontend/assets/img/career/career-3.jpg') }}" alt="Image" class="transition round-10">
                        <div class="job-salary fs-15 text-title bg-white position-absolute end-0">Salary: <span
                                class="fw-bold">45K</span></div>
                    </div>
                    <div class="job-info">
                        <h3 class="fs-24 fw-bold"><a href="{{route('careers.detail')}}"
                                class="text-title link-hover-primary transition">Architectural Assistant</a></h3>
                        <ul class="job-metainfo list-unstyled">
                            <li class="position-relative"><img src="{{ asset('frontend/assets/img/icons/pin-orange-2.svg') }}"
                                    alt="Icon"><span class="fw-medium text-title me-1">Location:</span>Trinovia</li>
                            <li class="position-relative"><img src="{{ asset('frontend/assets/img/icons/bag-2.svg') }}" alt="Icon"><span
                                    class="fw-medium text-title me-1">Type:</span> Full-Time</li>
                            <li class="position-relative"><img src="{{ asset('frontend/assets/img/icons/user-2.svg') }}" alt="Icon"><span
                                    class="fw-medium text-title me-1">Experience:</span>5+ Years</li>
                        </ul>
                        <div class="text-center">
                            <a href="{{route('careers.detail')}}" class="link style-one fw-semibold">Apply Now <img
                                    src="{{ asset('frontend/assets/img/icons/right-arrow-small.svg') }}" alt="Icon"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="job-card style-one position-relative img-hover-zoom z-1 round-10 mb-30">
                    <div class="job-img position-relative overflow-hidden img-zoom z-1 round-10">
                        <img src="{{ asset('frontend/assets/img/career/career-4.jpg') }}" alt="Image"
                            class="position-absolute top-0 start-0 w-100 h-100 transition round-10">
                        <img src="{{ asset('frontend/assets/img/career/career-4.jpg') }}" alt="Image" class="transition round-10">
                        <div class="job-salary fs-15 text-title bg-white position-absolute end-0">Salary: <span
                                class="fw-bold">50K</span></div>
                    </div>
                    <div class="job-info">
                        <h3 class="fs-24 fw-bold"><a href="{{route('careers.detail')}}"
                                class="text-title link-hover-primary transition">Property Manager</a></h3>
                        <ul class="job-metainfo list-unstyled">
                            <li class="position-relative"><img src="{{ asset('frontend/assets/img/icons/pin-orange-2.svg') }}"
                                    alt="Icon"><span class="fw-medium text-title me-1">Location:</span>Graventhia</li>
                            <li class="position-relative"><img src="{{ asset('frontend/assets/img/icons/bag-2.svg') }}" alt="Icon"><span
                                    class="fw-medium text-title me-1">Type:</span> Full-Time</li>
                            <li class="position-relative"><img src="{{ asset('frontend/assets/img/icons/user-2.svg') }}" alt="Icon"><span
                                    class="fw-medium text-title me-1">Experience:</span>4+ Years</li>
                        </ul>
                        <div class="text-center">
                            <a href="{{route('careers.detail')}}" class="link style-one fw-semibold">Apply Now <img
                                    src="{{ asset('frontend/assets/img/icons/right-arrow-small.svg') }}" alt="Icon"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="job-card style-one position-relative img-hover-zoom z-1 round-10 mb-30">
                    <div class="job-img position-relative overflow-hidden img-zoom z-1 round-10">
                        <img src="{{ asset('frontend/assets/img/career/career-5.jpg') }}" alt="Image"
                            class="position-absolute top-0 start-0 w-100 h-100 transition round-10">
                        <img src="{{ asset('frontend/assets/img/career/career-5.jpg') }}" alt="Image" class="transition round-10">
                        <div class="job-salary fs-15 text-title bg-white position-absolute end-0">Salary: <span
                                class="fw-bold">25K</span></div>
                    </div>
                    <div class="job-info">
                        <h3 class="fs-24 fw-bold"><a href="{{route('careers.detail')}}"
                                class="text-title link-hover-primary transition">Construction Officer</a></h3>
                        <ul class="job-metainfo list-unstyled">
                            <li class="position-relative"><img src="{{ asset('frontend/assets/img/icons/pin-orange-2.svg') }}"
                                    alt="Icon"><span class="fw-medium text-title me-1">Location:</span>Celovoria</li>
                            <li class="position-relative"><img src="{{ asset('frontend/assets/img/icons/bag-2.svg') }}" alt="Icon"><span
                                    class="fw-medium text-title me-1">Type:</span> Full-Time</li>
                            <li class="position-relative"><img src="{{ asset('frontend/assets/img/icons/user-2.svg') }}" alt="Icon"><span
                                    class="fw-medium text-title me-1">Experience:</span>3+ Years</li>
                        </ul>
                        <div class="text-center">
                            <a href="{{route('careers.detail')}}" class="link style-one fw-semibold">Apply Now <img
                                    src="{{ asset('frontend/assets/img/icons/right-arrow-small.svg') }}" alt="Icon"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="job-card style-one position-relative img-hover-zoom z-1 round-10 mb-30">
                    <div class="job-img position-relative overflow-hidden img-zoom z-1 round-10">
                        <img src="{{ asset('frontend/assets/img/career/career-6.jpg') }}" alt="Image"
                            class="position-absolute top-0 start-0 w-100 h-100 transition round-10">
                        <img src="{{ asset('frontend/assets/img/career/career-6.jpg') }}" alt="Image" class="transition round-10">
                        <div class="job-salary fs-15 text-title bg-white position-absolute end-0">Salary: <span
                                class="fw-bold">20K</span></div>
                    </div>
                    <div class="job-info">
                        <h3 class="fs-24 fw-bold"><a href="{{route('careers.detail')}}"
                                class="text-title link-hover-primary transition">Client Relationship Officer</a></h3>
                        <ul class="job-metainfo list-unstyled">
                            <li class="position-relative"><img src="{{ asset('frontend/assets/img/icons/pin-orange-2.svg') }}"
                                    alt="Icon"><span class="fw-medium text-title me-1">Location:</span>Korvacia</li>
                            <li class="position-relative"><img src="{{ asset('frontend/assets/img/icons/bag-2.svg') }}" alt="Icon"><span
                                    class="fw-medium text-title me-1">Type:</span> Full-Time</li>
                            <li class="position-relative"><img src="{{ asset('frontend/assets/img/icons/user-2.svg') }}" alt="Icon"><span
                                    class="fw-medium text-title me-1">Experience:</span>3+ Years</li>
                        </ul>
                        <div class="text-center">
                            <a href="{{route('careers.detail')}}" class="link style-one fw-semibold">Apply Now <img
                                    src="{{ asset('frontend/assets/img/icons/right-arrow-small.svg') }}" alt="Icon"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <ul class="page-nav pagination justify-content-center mb-0 mt-lg-5">
            <li class="page-item">
                <a class="page-link d-flex flex-column align-items-center justify-content-center rounded-circle"
                    href="#" aria-label="Previous">
                    <img src="{{ asset('frontend/assets/img/icons/left-long-arrow-gray.svg') }}" alt="Icon">
                </a>
            </li>
            <li class="page-item"><a
                    class="page-link d-flex flex-column align-items-center justify-content-center rounded-circle active"
                    href="#">01</a></li>
            <li class="page-item"><a
                    class="page-link d-flex flex-column align-items-center justify-content-center rounded-circle"
                    href="#">02</a></li>
            <li class="page-item"><a
                    class="page-link d-flex flex-column align-items-center justify-content-center rounded-circle"
                    href="#">03</a></li>
            <li class="page-item">
                <a class="page-link d-flex flex-column align-items-center justify-content-center rounded-circle"
                    href="#" aria-label="Next">
                    <img src="{{ asset('frontend/assets/img/icons/right-long-arrow-gray.svg') }}" alt="Icon">
                </a>
            </li>
        </ul>
    </div>
    <!-- Career Section End -->
@endsection
