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
                    <h2 class="section-title style-one fw-black text-title">Services</h2>
                    <ul class="br-menu list-unstyled">
                        <li><a href="{{route('home')}}"><img src="{{asset('frontend/assets/img/icons/home-icon.svg')}}" alt="Icon">HOME</a></li>
                        <li>SERVICES</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End -->

    <!-- Service Section Start -->
    <div class="service-area ptb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-3 col-xl-4 col-md-6">
                    <div class="service-card style-two mb-50">
                        <div class="service-img semiround-left transition">
                            <img src="{{asset('frontend/assets/img/services/service-1.jpg')}}" alt="Service" class="transition">
                        </div>
                        <h3><a href="{{route('services.detail')}}" class="text-title link-hover-primary transition">Custom Home
                                Construction</a></h3>
                        <p class="mb-12">From foundation to finish, we build
                            fully personalized homes match in your vision, budget</p>
                        <a href="{{route('services.detail')}}" class="link style-one fw-semibold">Read More <img
                                src="{{asset('frontend/assets/img/icons/right-arrow-small.svg')}}" alt="Icon"></a>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-4 col-md-6">
                    <div class="service-card style-two mb-50">
                        <div class="service-img rounded-corner transition">
                            <img src="{{asset('frontend/assets/img/services/service-2.jpg')}}" alt="Service" class="transition">
                        </div>
                        <h3><a href="{{route('services.detail')}}" class="text-title link-hover-primary transition">Foundation &
                                Structural Work</a></h3>
                        <p>Expert excavation, concrete pouring, and structural framing to ensure long-lasting</p>
                        <a href="{{route('services.detail')}}" class="link style-one fw-semibold">Read More <img
                                src="{{asset('frontend/assets/img/icons/right-arrow-small.svg')}}" alt="Icon"></a>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-4 col-md-6">
                    <div class="service-card style-two mb-50">
                        <div class="service-img semiround-right transition">
                            <img src="{{asset('frontend/assets/img/services/service-3.jpg')}}" alt="Service" class="transition">
                        </div>
                        <h3><a href="{{route('services.detail')}}" class="text-title link-hover-primary transition">Home Additions &
                                Extensions</a></h3>
                        <p>Expand your living space with professionally built rooms arages or second-story</p>
                        <a href="{{route('services.detail')}}" class="link style-one fw-semibold">Read More <img
                                src="{{asset('frontend/assets/img/icons/right-arrow-small.svg')}}" alt="Icon"></a>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-4 col-md-6">
                    <div class="service-card style-two mb-50">
                        <div class="service-img rounded-circle transition">
                            <img src="{{asset('frontend/assets/img/services/service-4.jpg')}}" alt="Service" class="rounded-circle transition">
                        </div>
                        <h3><a href="{{route('services.detail')}}" class="text-title link-hover-primary transition">Roofing &
                                Exterior Finishing</a></h3>
                        <p>Durable roofing, siding, windows, and exterior details that boost curb appeal</p>
                        <a href="{{route('services.detail')}}" class="link style-one fw-semibold">Read More <img
                                src="{{asset('frontend/assets/img/icons/right-arrow-small.svg')}}" alt="Icon"></a>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-4 col-md-6">
                    <div class="service-card style-two mb-50">
                        <div class="service-img rounded-corner transition">
                            <img src="{{asset('frontend/assets/img/services/service-5.jpg')}}" alt="Service" class="transition">
                        </div>
                        <h3><a href="{{route('services.detail')}}" class="text-title link-hover-primary transition">Architectural
                                Design & Planning</a></h3>
                        <p>This section can be styled in a clean, modern 3-column layout with subtle hover effects </p>
                        <a href="{{route('services.detail')}}" class="link style-one fw-semibold">Read More <img
                                src="{{asset('frontend/assets/img/icons/right-arrow-small.svg')}}" alt="Icon"></a>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-4 col-md-6">
                    <div class="service-card style-two mb-50">
                        <div class="service-img rounded-two transition">
                            <img src="{{asset('frontend/assets/img/services/service-6.jpg')}}" alt="Service" class="transition">
                        </div>
                        <h3><a href="{{route('services.detail')}}" class="text-title link-hover-primary transition">Renovation &
                                Remodeling</a></h3>
                        <p>we provide a full spectrum services that seamlessly of real estate and construction</p>
                        <a href="{{route('services.detail')}}" class="link style-one fw-semibold">Read More <img
                                src="{{asset('frontend/assets/img/icons/right-arrow-small.svg')}}" alt="Icon"></a>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-4 col-md-6">
                    <div class="service-card style-two mb-50">
                        <div class="service-img rounded-circle transition">
                            <img src="{{asset('frontend/assets/img/services/service-7.jpg')}}" alt="Service" class="rounded-circle transition">
                        </div>
                        <h3><a href="{{route('services.detail')}}" class="text-title link-hover-primary transition">Property Sales
                                & Brokerage</a></h3>
                        <p>The construction side, we offer end-to-end solutions including architectural design,</p>
                        <a href="{{route('services.detail')}}" class="link style-one fw-semibold">Read More <img
                                src="{{asset('frontend/assets/img/icons/right-arrow-small.svg')}}" alt="Icon"></a>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-4 col-md-6">
                    <div class="service-card style-two mb-50">
                        <div class="service-img rounded-two transition">
                            <img src="{{asset('frontend/assets/img/services/service-8.jpg')}}" alt="Service" class="transition">
                        </div>
                        <h3><a href="{{route('services.detail')}}" class="text-title link-hover-primary transition">Project
                                Management</a></h3>
                        <p>Real estate with confidence, Renius delivers trusted, timely, and high-quality service</p>
                        <a href="{{route('services.detail')}}" class="link style-one fw-semibold">Read More <img
                                src="{{asset('frontend/assets/img/icons/right-arrow-small.svg')}}" alt="Icon"></a>
                    </div>
                </div>
            </div>
            <ul class="page-nav pagination justify-content-center mb-0 mt-lg-4">
                <li class="page-item">
                    <a class="page-link d-flex flex-column align-items-center justify-content-center rounded-circle"
                        href="{{route('services.index')}}" aria-label="Previous">
                        <img src="{{asset('frontend/assets/img/icons/left-long-arrow-gray.svg')}}" alt="Icon">
                    </a>
                </li>
                <li class="page-item"><a
                        class="page-link d-flex flex-column align-items-center justify-content-center rounded-circle active"
                        href="{{route('services.index')}}">01</a></li>
                <li class="page-item"><a
                        class="page-link d-flex flex-column align-items-center justify-content-center rounded-circle"
                        href="{{route('services.index')}}">02</a></li>
                <li class="page-item"><a
                        class="page-link d-flex flex-column align-items-center justify-content-center rounded-circle"
                        href="{{route('services.index')}}">03</a></li>
                <li class="page-item">
                    <a class="page-link d-flex flex-column align-items-center justify-content-center rounded-circle"
                        href="{{route('services.index')}}" aria-label="Next">
                        <img src="{{asset('frontend/assets/img/icons/right-long-arrow-gray.svg')}}" alt="Icon">
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <!-- Service Section End -->
@endsection
