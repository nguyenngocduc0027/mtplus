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
                    <h2 class="section-title style-one fw-black text-title">Testimonials</h2>
                    <ul class="br-menu list-unstyled">
                        <li><a href="{{route('home')}}"><img src="{{asset('frontend/assets/img/icons/home-icon.svg')}}" alt="Icon">HOME</a></li>
                        <li>TESTIMONIALS</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End -->

    <!-- Testimonial Section Start -->
    <div class="container ptb-120">
        <div class="row">
            <div class="col-md-6">
                <div class="testimonial-card style-one bg-gray round-10 mb-30">
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
                        </ul>
                    </div>
                    <p class="fw-medium text-title">"From the first consultation to final reveal, Renius made our They truly
                        our ideas and brought with incredible."</p>
                    <h6 class="fs-20 font-primary fw-semibold position-relative text-title mb-1">Chloe Bennett</h6>
                    <span class="fs-15 fw-normal d-block text-para">Relations Manager</span>
                </div>
            </div>
            <div class="col-md-6">
                <div class="testimonial-card style-one bg-gray round-10 mb-30">
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
                        </ul>
                    </div>
                    <p class="fw-medium text-title">"Working with Renius felt like working with family. They genuinely cared
                        about our vision and built us a home that feels"</p>
                    <h6 class="fs-20 font-primary fw-semibold position-relative text-title mb-1">Ramu biharilal</h6>
                    <span class="fs-15 fw-normal d-block text-para">Founder</span>
                </div>
            </div>
            <div class="col-md-6">
                <div class="testimonial-card style-one bg-gray round-10 mb-30">
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
                        </ul>
                    </div>
                    <p class="fw-medium text-title">"This was our third home build, and it was by far the best experience.
                        Renius is different — in the best way."</p>
                    <h6 class="fs-20 font-primary fw-semibold position-relative text-title mb-1">Sienna Brooks</h6>
                    <span class="fs-15 fw-normal d-block text-para">Interior Designer</span>
                </div>
            </div>
            <div class="col-md-6">
                <div class="testimonial-card style-one bg-gray round-10 mb-30">
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
                        </ul>
                    </div>
                    <p class="fw-medium text-title">"Renius Home Build Craft exceeded our expectations. From the first
                        design meeting to the final walkthrough, dreamed"</p>
                    <h6 class="fs-20 font-primary fw-semibold position-relative text-title mb-1">Leo Ramirez</h6>
                    <span class="fs-15 fw-normal d-block text-para">Construction Supervisor</span>
                </div>
            </div>
            <div class="col-md-6">
                <div class="testimonial-card style-one bg-gray round-10 mb-30">
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
                        </ul>
                    </div>
                    <p class="fw-medium text-title">"Renius brought our vision to life with unmatched attention to detail.
                        The team was organized, respectful, and always”</p>
                    <h6 class="fs-20 font-primary fw-semibold position-relative text-title mb-1">Nathan Chloe</h6>
                    <span class="fs-15 fw-normal d-block text-para">Lead Architect</span>
                </div>
            </div>
            <div class="col-md-6">
                <div class="testimonial-card style-one bg-gray round-10 mb-30">
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
                        </ul>
                    </div>
                    <p class="fw-medium text-title">"We loved how transparent and honest they were. The project was
                        delivered exactly as promised."</p>
                    <h6 class="fs-20 font-primary fw-semibold position-relative text-title mb-1">Victor Lane</h6>
                    <span class="fs-15 fw-normal d-block text-para">Project Manager</span>
                </div>
            </div>
        </div>
        <ul class="page-nav pagination justify-content-center mb-0 mt-lg-4">
            <li class="page-item">
                <a class="page-link d-flex flex-column align-items-center justify-content-center rounded-circle"
                    href="#" aria-label="Previous">
                    <img src="{{asset('frontend/assets/img/icons/left-long-arrow-gray.svg')}}" alt="Icon">
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
                    <img src="{{asset('frontend/assets/img/icons/right-long-arrow-gray.svg')}}" alt="Icon">
                </a>
            </li>
        </ul>
    </div>
    <!-- Testimonial Section End -->
@endsection
