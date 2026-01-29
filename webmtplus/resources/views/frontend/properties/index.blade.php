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
                    <h2 class="section-title style-one fw-black text-title">Properties</h2>
                    <ul class="br-menu list-unstyled">
                        <li><a href="{{route('home')}}"><img src="{{asset('frontend/assets/img/icons/home-icon.svg')}}" alt="Icon">HOME</a></li>
                        <li>PROPERTIES</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End -->

    <!-- Property Section Start -->
    <div class="container ptb-120">
        <div class="property-filter-box d-flex flex-wrap align-items-end bg-gray round-10 mb-40">
            <div class="form-group mb-20">
                <label class="fs-14 fw-semibold text-title d-block mb-1">Property Type</label>
                <select class="w-100 ht-48 border-0 bg-white outline-0">
                    <option value="1">Villa</option>
                    <option value="2">Apartment</option>
                    <option value="3">Condominium</option>
                </select>
            </div>
            <div class="form-group mb-20">
                <label class="fs-14 fw-semibold text-title d-block mb-1">Location</label>
                <select class="w-100 ht-48 border-0 bg-white outline-0">
                    <option value="1">All City</option>
                    <option value="2">Florida</option>
                    <option value="3">California</option>
                    <option value="4">New York</option>
                </select>
            </div>
            <div class="form-group mb-20">
                <label class="fs-14 fw-semibold text-title d-block mb-1">Max Price</label>
                <input type="text" class="w-100 ht-48 border-0 bg-white text-para outline-0" placeholder="$1000">
            </div>
            <div class="form-group mb-20">
                <label class="fs-14 fw-semibold text-title d-block mb-1">Property Size</label>
                <select class="w-100 ht-48 border-0 bg-white outline-0">
                    <option value="1">1000 - 1200 Sqft</option>
                    <option value="2">1000 - 1400 Sqft</option>
                    <option value="3">1200 - 1600 Sqft</option>
                </select>
            </div>
            <div class="form-group mb-20">
                <label class="fs-14 fw-semibold text-title d-block mb-1">Property Category</label>
                <select class="w-100 ht-48 border-0 bg-white outline-0">
                    <option value="1">For Sale</option>
                    <option value="2">For Rent</option>
                </select>
            </div>
            <div class="form-group mb-20">
                <button class="btn style-two d-block w-100 p-0"><span
                        class="btn-text d-block w-100 fw-semibold position-relative transition">Search
                        Property</span></button>
            </div>
        </div>
        <div class="row justify-content-center gx-xxl-25">
            <div class="col-xl-4 col-md-6">
                <div class="property-card style-one img-hover-zoom mb-45">
                    <div class="property-img img-zoom position-relative overflow-hidden z-1 round-10">
                        <img src="{{asset('frontend/assets/img/properties/property-1.jpg')}}" alt="Image"
                            class="position-absolute top-0 bottom-0 start-0 end-0 z-1 round-10">
                        <img src="{{asset('frontend/assets/img/properties/property-1.jpg')}}" alt="Image" class="round-10">
                        <div class="property-price position-absolute end-0 bg_primary text-white z-1"><span
                                class="fw-bold">$546</span>/Month</div>
                        <a href="{{route('properties.detail')}}" class="position-absolute top-0 start-0 w-100 h-100"></a>
                    </div>
                    <h3 class="fs-24 fw-semibold mb-15"><a href="{{route('properties.detail')}}"
                            class="text-title link-hover-primary transition">Loft In Mid-City Paradise</a></h3>
                    <p class="position-relative mb-0"><img src="{{asset('frontend/assets/img/icons/pin.svg')}}" alt="Icon">20 Cooper Square,
                        New York, USA</p>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="property-card style-one img-hover-zoom mb-45">
                    <div class="property-img img-zoom position-relative overflow-hidden z-1 round-10">
                        <img src="{{asset('frontend/assets/img/properties/property-2.jpg')}}" alt="Image"
                            class="position-absolute top-0 bottom-0 start-0 end-0 z-1 round-10">
                        <img src="{{asset('frontend/assets/img/properties/property-2.jpg')}}" alt="Image" class="round-10">
                        <div class="property-price position-absolute end-0 bg_primary text-white z-1"><span
                                class="fw-bold">$345</span>/Month</div>
                        <a href="{{route('properties.detail')}}" class="position-absolute top-0 start-0 w-100 h-100"></a>
                    </div>
                    <h3 class="fs-24 fw-semibold mb-15"><a href="{{route('properties.detail')}}"
                            class="text-title link-hover-primary transition">Central House Villa</a></h3>
                    <p class="position-relative mb-0"><img src="{{asset('frontend/assets/img/icons/pin.svg')}}" alt="Icon">721 Broadway, New
                        York, NY 10003, USA</p>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="property-card style-one img-hover-zoom mb-45">
                    <div class="property-img img-zoom position-relative overflow-hidden z-1 round-10">
                        <img src="{{asset('frontend/assets/img/properties/property-3.jpg')}}" alt="Image"
                            class="position-absolute top-0 bottom-0 start-0 end-0 z-1 round-10">
                        <img src="{{asset('frontend/assets/img/properties/property-3.jpg')}}" alt="Image" class="round-10">
                        <div class="property-price position-absolute end-0 bg_primary text-white z-1"><span
                                class="fw-bold">$867</span>/Month</div>
                        <a href="{{route('properties.detail')}}" class="position-absolute top-0 start-0 w-100 h-100"></a>
                    </div>
                    <h3 class="fs-24 fw-semibold mb-15"><a href="{{route('properties.detail')}}"
                            class="text-title link-hover-primary transition">Sinomen Plant Palace</a></h3>
                    <p class="position-relative mb-0"><img src="{{asset('frontend/assets/img/icons/pin.svg')}}" alt="Icon">371 7th Ave, New
                        York, NY 10001</p>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="property-card style-one img-hover-zoom mb-45">
                    <div class="property-img img-zoom position-relative overflow-hidden z-1 round-10">
                        <img src="{{asset('frontend/assets/img/properties/property-4.jpg')}}" alt="Image"
                            class="position-absolute top-0 bottom-0 start-0 end-0 z-1 round-10">
                        <img src="{{asset('frontend/assets/img/properties/property-4.jpg')}}" alt="Image" class="round-10">
                        <div class="property-price position-absolute end-0 bg_primary text-white z-1"><span
                                class="fw-bold">$500</span>/Month</div>
                        <a href="{{route('properties.detail')}}" class="position-absolute top-0 start-0 w-100 h-100"></a>
                    </div>
                    <h3 class="fs-24 fw-semibold mb-15"><a href="{{route('properties.detail')}}"
                            class="text-title link-hover-primary transition">Elite Garden Residence</a></h3>
                    <p class="position-relative mb-0"><img src="{{asset('frontend/assets/img/icons/pin.svg')}}" alt="Icon">33 3rd Ave, New
                        York, NY 10003, USA</p>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="property-card style-one img-hover-zoom mb-45">
                    <div class="property-img img-zoom position-relative overflow-hidden z-1 round-10">
                        <img src="{{asset('frontend/assets/img/properties/property-5.jpg')}}" alt="Image"
                            class="position-absolute top-0 bottom-0 start-0 end-0 z-1 round-10">
                        <img src="{{asset('frontend/assets/img/properties/property-5.jpg')}}" alt="Image" class="round-10">
                        <div class="property-price position-absolute end-0 bg_primary text-white z-1"><span
                                class="fw-bold">$444</span>/Month</div>
                        <a href="{{route('properties.detail')}}" class="position-absolute top-0 start-0 w-100 h-100"></a>
                    </div>
                    <h3 class="fs-24 fw-semibold mb-15"><a href="{{route('properties.detail')}}"
                            class="text-title link-hover-primary transition">Suburban Family Residence</a></h3>
                    <p class="position-relative mb-0"><img src="{{asset('frontend/assets/img/icons/pin.svg')}}" alt="Icon">838 Broadway,
                        New York, NY 10003, USA</p>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="property-card style-one img-hover-zoom mb-45">
                    <div class="property-img img-zoom position-relative overflow-hidden z-1 round-10">
                        <img src="{{asset('frontend/assets/img/properties/property-6.jpg')}}" alt="Image"
                            class="position-absolute top-0 bottom-0 start-0 end-0 z-1 round-10">
                        <img src="{{asset('frontend/assets/img/properties/property-6.jpg')}}" alt="Image" class="round-10">
                        <div class="property-price position-absolute end-0 bg_primary text-white z-1"><span
                                class="fw-bold">$346</span>/Month</div>
                        <a href="{{route('properties.detail')}}" class="position-absolute top-0 start-0 w-100 h-100"></a>
                    </div>
                    <h3 class="fs-24 fw-semibold mb-15"><a href="{{route('properties.detail')}}"
                            class="text-title link-hover-primary transition">Penthouse Near Downtown</a></h3>
                    <p class="position-relative mb-0"><img src="{{asset('frontend/assets/img/icons/pin.svg')}}" alt="Icon">1 E 2nd St, New
                        York, NY 10003, USA</p>
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
    <!-- Property Section End --
@endsection
