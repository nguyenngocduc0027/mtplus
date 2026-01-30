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
                    <h2 class="section-title style-one fw-black text-title">Projects</h2>
                    <ul class="br-menu list-unstyled">
                        <li><a href="{{route('home')}}"><img src="{{asset('frontend/assets/img/icons/home-icon.svg')}}" alt="Icon">HOME</a></li>
                        <li>PROJECTS</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End -->

    <!-- Project Section Start -->
    <div class="container ptb-120">
        <div class="project-filter-box style-one d-flex flex-wrap align-items-end round-10 mb-40">
            <div class="form-group mb-20">
                <label class="fs-14 fw-semibold text-title d-block mb-1">Project Status</label>
                <select class="w-100 ht-48 border-0 bg-gray outline-0">
                    <option value="1">Under Construction</option>
                    <option value="2">Completed</option>
                </select>
            </div>
            <div class="form-group mb-20">
                <label class="fs-14 fw-semibold text-title d-block mb-1">Project Type</label>
                <select class="w-100 ht-48 border-0 bg-gray outline-0">
                    <option value="1">Residential</option>
                    <option value="2">Commercial</option>
                    <option value="3">Public</option>
                </select>
            </div>
            <div class="form-group mb-20">
                <label class="fs-14 fw-semibold text-title d-block mb-1">Location</label>
                <select class="w-100 ht-48 border-0 bg-gray outline-0">
                    <option value="1">All City</option>
                    <option value="2">Florida</option>
                    <option value="3">California</option>
                    <option value="4">New York</option>
                </select>
            </div>
            <div class="form-group mb-20">
                <label class="fs-14 fw-semibold text-title d-block mb-1">Project Budget</label>
                <select class="w-100 ht-48 border-0 bg-gray outline-0">
                    <option value="1">$10 - $15K</option>
                    <option value="2">$15 - $25K</option>
                    <option value="3">$20 - $35K</option>
                </select>
            </div>
            <div class="form-group mb-20">
                <button class="btn style-two d-block w-100 p-0"><span
                        class="btn-text d-block w-100 fw-semibold position-relative transition">Search
                        Projects</span></button>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-xl-4 col-md-6">
                <div class="project-card style-four bg-1 position-relative overflow-hidden z-1 round-10 mb-45">
                    <span class="project-status transition">Under Construction</span>
                    <span class="project-counter text-center font-secondary fw-semibold d-block lh-1 transition">01</span>
                    <div class="project-title d-flex flex-wrap align-items-center justify-content-between">
                        <h3 class="fs-24 fw-semibold mb-0"><a href="{{route('projects.detail')}}"
                                class="text-title hover-text-primary transition">Greenview Apartments</a></h3>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="project-card style-four bg-2 position-relative overflow-hidden z-1 round-10 mb-45">
                    <span class="project-status transition">Completed</span>
                    <span class="project-counter text-center font-secondary fw-semibold d-block lh-1 transition">02</span>
                    <div class="project-title d-flex flex-wrap align-items-center justify-content-between">
                        <h3 class="fs-24 fw-semibold mb-0"><a href="{{route('projects.detail')}}"
                                class="text-title hover-text-primary transition">Premier Office Tower</a></h3>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="project-card style-four bg-3 position-relative overflow-hidden z-1 round-10 mb-45">
                    <span class="project-status transition">Under Construction</span>
                    <span class="project-counter text-center font-secondary fw-semibold d-block lh-1 transition">03</span>
                    <div class="project-title d-flex flex-wrap align-items-center justify-content-between">
                        <h3 class="fs-24 fw-semibold mb-0"><a href="{{route('projects.detail')}}"
                                class="text-title hover-text-primary transition">Urban height Residence</a></h3>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="project-card style-four bg-4 position-relative overflow-hidden z-1 round-10 mb-45">
                    <span class="project-status transition">Completed</span>
                    <span class="project-counter text-center font-secondary fw-semibold d-block lh-1 transition">04</span>
                    <div class="project-title d-flex flex-wrap align-items-center justify-content-between">
                        <h3 class="fs-24 fw-semibold mb-0"><a href="{{route('projects.detail')}}"
                                class="text-title hover-text-primary transition">Hitech Eco Tower</a></h3>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="project-card style-four bg-1 position-relative overflow-hidden z-1 round-10 mb-45">
                    <span class="project-status transition">Under Construction</span>
                    <span class="project-counter text-center font-secondary fw-semibold d-block lh-1 transition">05</span>
                    <div class="project-title d-flex flex-wrap align-items-center justify-content-between">
                        <h3 class="fs-24 fw-semibold mb-0"><a href="{{route('projects.detail')}}"
                                class="text-title hover-text-primary transition">St. Height Residence</a></h3>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="project-card style-four bg-2 position-relative overflow-hidden z-1 round-10 mb-45">
                    <span class="project-status transition">Completed</span>
                    <span class="project-counter text-center font-secondary fw-semibold d-block lh-1 transition">06</span>
                    <div class="project-title d-flex flex-wrap align-items-center justify-content-between">
                        <h3 class="fs-24 fw-semibold mb-0"><a href="{{route('projects.detail')}}"
                                class="text-title hover-text-primary transition">Turkin Tower</a></h3>
                    </div>
                </div>
            </div>
        </div>
        <ul class="page-nav pagination justify-content-center mb-0 mt-lg-4">
            <li class="page-item">
                <a class="page-link d-flex flex-column align-items-center justify-content-center rounded-circle"
                    href="{{route('projects.index')}}" aria-label="Previous">
                    <img src="{{asset('frontend/assets/img/icons/left-long-arrow-gray.svg')}}" alt="Icon">
                </a>
            </li>
            <li class="page-item"><a
                    class="page-link d-flex flex-column align-items-center justify-content-center rounded-circle active"
                    href="{{route('projects.index')}}">01</a></li>
            <li class="page-item"><a
                    class="page-link d-flex flex-column align-items-center justify-content-center rounded-circle"
                    href="{{route('projects.index')}}">02</a></li>
            <li class="page-item"><a
                    class="page-link d-flex flex-column align-items-center justify-content-center rounded-circle"
                    href="{{route('projects.index')}}">03</a></li>
            <li class="page-item">
                <a class="page-link d-flex flex-column align-items-center justify-content-center rounded-circle"
                    href="{{route('projects.index')}}" aria-label="Next">
                    <img src="{{asset('frontend/assets/img/icons/right-long-arrow-gray.svg')}}" alt="Icon">
                </a>
            </li>
        </ul>
    </div>

    <!-- Project Section End -->
@endsection
