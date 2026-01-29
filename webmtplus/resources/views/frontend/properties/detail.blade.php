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
                    <h2 class="section-title style-one fw-black text-title">Property Single</h2>
                    <ul class="br-menu list-unstyled">
                        <li><a href="{{route('home')}}"><img src="{{asset('frontend/assets/img/icons/home-icon.svg')}}" alt="Icon">HOME</a></li>
                        <li><a href="{{route('properties.index')}}">PROPERTIES</a></li>
                        <li>PROPERTY SINGLE</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End -->

    <!-- Property Details Start -->
    <div class="container ptb-120">
        <div class="row">
            <div class="col-xl-8">
                <div class="property-desc">
                    <div class="row align-items-center mb-30">
                        <div class="col-lg-7 col-md-8 mb-sm-20">
                            <h1 class="font-secondary fw-black mb-0">Loft In Mid-City Paradise</h1>
                        </div>
                        <div class="col-lg-5 col-md-4 text-md-end">
                            <p class="fw-medium position-relative text-title mb-0"><img
                                    src="{{asset('frontend/assets/img/icons/pin-orange.svg')}}" alt="Icon"
                                    class="position-relative top-n2 me-1">200 Terrace, London</p>
                        </div>
                    </div>
                    <p>Indulge in luxury living at our penthouse near downtown, where sophistication meets convenience. With
                        breathtaking views and contemporary design.</p>
                    <div class="single-img position-relative round-10 mb-35">
                        <img src="{{asset('frontend/assets/img/properties/single-property-1.jpg')}}" alt="Image" class="round-10">
                        <div class="property-price position-absolute end-0 bg_primary text-white z-1"><span
                                class="fw-bold">$546</span>/Month</div>
                    </div>
                    <div class="single-para">
                        <h6>About Property</h6>
                        <p>A property deed is a written legal document that transfers ownership of a property from one party
                            to another. It includes essential details such as the names of the current and new owners, a
                            legal description of the property, and the date of the transfer. Deeds are signed by the current
                            owner and typically require witnesses and a notary public to ensure their validity.</p>
                        <ul class="feature-item-list style-one list-unstyled">
                            <li class="position-relative"><span class="text-title fw-semibold">Warranty Deed:</span>
                                Guarantees that the seller owns the property free and clear and has the legal right to sell
                                it. Provides the highest level of protection to the buyer.</li>
                            <li class="position-relative"><span class="text-title fw-semibold">Quitclaim
                                    Deed:</span> Transfers the seller's interest in the property without making any
                                guarantees about the title. Often used in situations where the transfer is between family
                                members or in less formal transactions.</li>
                            <li class="position-relative"><span class="text-title fw-semibold">Grant Deed: </span>Similar to
                                a warranty deed but may not provide as much protection. It implies that the property has not
                                been sold to anyone else</li>
                        </ul>
                    </div>
                    <div class="single-para">
                        <h6>Property Video</h6>
                        <div class="single-property-video position-relative z-1 round-10 mt-4">
                            <a data-fslightbox="" href="https://www.youtube.com/watch?v=u31qwQUeGuM"
                                class="play-icon position-absolute d-flex flex-column align-items-center justify-content-center rounded-circle bg_primary"><i
                                    class="ri-play-large-fill"></i></a>
                        </div>
                    </div>
                    <div class="single-para">
                        <h6>Property Amenities</h6>
                        <ul class="single-property-amenities d-flex flex-wrap  justify-content-between list-unstyled mb-0">
                            <li class="position-relative">7 Bedrooms</li>
                            <li class="position-relative">Gym for all</li>
                            <li class="position-relative">Air Conditioning</li>
                            <li class="position-relative">3 Garage</li>
                            <li class="position-relative">CC Camera</li>
                            <li class="position-relative">Internet</li>
                            <li class="position-relative">Security System</li>
                            <li class="position-relative">Swimming Pool</li>
                            <li class="position-relative">Dishwasher</li>
                            <li class="position-relative">Clinic</li>
                            <li class="position-relative">Fencing</li>
                            <li class="position-relative">Supermarket</li>
                            <li class="position-relative">Outdoor Kitchen</li>
                            <li class="position-relative">Refrigerator</li>
                            <li class="position-relative">Indoor Game</li>
                        </ul>
                    </div>
                    <div class="single-para">
                        <h6>Location</h6>
                        <div class="single-img round-10">
                            <img src="{{asset('frontend/assets/img/properties/single-property-3.jpg')}}" alt="Image" class="round-10">
                        </div>
                    </div>
                    <form action="#" class="comment-form style-two bg-gray form-wrapper style-one round-10">
                        <h4 class="fs-20 fw-bold text-title mb-20">Be the first to review “Affordable Green Villa House”
                            </h2>
                            <div class="form-group position-relative mb-15">
                                <input type="text" required
                                    class="w-100 ht-50 bg-white border-0 outline-0 round-5 text-para"
                                    placeholder="Review Title">
                            </div>
                            <div class="form-group mb-15">
                                <span class="fw-medium d-block text-title">Your rating</span>
                                <div class="add-star-rating d-flex flex-wrap justify-content-start mt-1">
                                    <input type="radio" id="star5" name="rating" value="5"><label
                                        for="star5"></label>
                                    <input type="radio" id="star4" name="rating" value="4"><label
                                        for="star4"></label>
                                    <input type="radio" id="star3" name="rating" value="3"><label
                                        for="star3"></label>
                                    <input type="radio" id="star2" name="rating" value="2"><label
                                        for="star2"></label>
                                    <input type="radio" id="star1" name="rating" value="1"><label
                                        for="star1"></label>
                                </div>
                            </div>
                            <div class="form-group mb-15">
                                <input type="email" placeholder="Email" required
                                    class="w-100 ht-50 bg-white border-0 outline-0 round-5 text-para">
                            </div>
                            <div class="form-group mb-15">
                                <textarea name="messages" id="messages" cols="30" rows="10" placeholder="Your review"
                                    class="w-100 ht-152 bg-white border-0 outline-0 round-5 text-para resize-0"></textarea>
                            </div>
                            <div class="form-check checkbox style-one mb-25">
                                <input class="form-check-input" type="checkbox" id="test_2">
                                <label class="form-check-label" for="test_2" class="fw-medium">
                                    Save my name, email, and website in this browser for the next time I comment.
                                </label>
                            </div>
                            <button class="btn style-one d-inline-flex flex-wrap align-items-center p-0"><span
                                    class="btn-text d-inline-block fw-semibold position-relative transition">Submit
                                    Review</span><span
                                    class="btn-icon position-relative d-flex flex-column align-items-center justify-content-center rounded-circle transition"><i
                                        class="ri-arrow-right-up-line"></i></span></button>
                    </form>
                </div>
            </div>
            <div class="col-xl-4">
                <aside class="sidebar mt-lg-50">
                    <div class="sidebar-widget bg-gray round-10">
                        <h3 class="sidebar-widget-title fs-20 fw-semibold text-title border-0 pb-0 mb-15"><img
                                src="{{asset('frontend/assets/img/icons/floor-plan.svg')}}" alt="Icon" class="position-relative">Room Plan
                        </h3>
                        <p>Additional amenities include features: two-car garage, energy systems,</p>
                        <ul class="property-info-list list-unstyled">
                            <li class="d-flex flex-wrap align-items-center justify-content-between">
                                <span>Total area</span>
                                <span><b class="fw-semibold text-title me-1">158</b>Sq ft</span>
                            </li>
                            <li class="d-flex flex-wrap align-items-center justify-content-between">
                                <span>Bedroom</span>
                                <span><b class="fw-semibold text-title me-1">18</b>Sq ft</span>
                            </li>
                            <li class="d-flex flex-wrap align-items-center justify-content-between">
                                <span>Bathroom</span>
                                <span><b class="fw-semibold text-title me-1">22</b>Sq ft</span>
                            </li>
                            <li class="d-flex flex-wrap align-items-center justify-content-between">
                                <span>Kitchen</span>
                                <span><b class="fw-semibold text-title me-1">21</b>Sq ft</span>
                            </li>
                            <li class="d-flex flex-wrap align-items-center justify-content-between">
                                <span>Livingroom</span>
                                <span><b class="fw-semibold text-title me-1">41</b>Sq ft</span>
                            </li>
                            <li class="d-flex flex-wrap align-items-center justify-content-between">
                                <span>Windows</span>
                                <span>3</span>
                            </li>
                        </ul>
                    </div>
                    <div class="sidebar-widget category-widget bg-gray round-10">
                        <h3 class="sidebar-widget-title fs-18 fw-semibold text-title mb-15">Book A Visit</h3>
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
                    <div class="sidebar-widget tags-widget bg-gray round-10">
                        <h3 class="sidebar-widget-title fs-18 fw-semibold text-title mb-15">Featured properties</h3>
                        <div class="rp-post-wrap mb-20">
                            <div class="rp-post-card d-flex flex-wrap align-items-center">
                                <div class="rp-post-img">
                                    <img src="{{asset('frontend/assets/img/properties/property-thumb-1.jpg')}}" alt="Post Thumb">
                                </div>
                                <div class="rp-post-info">
                                    <h5 class="fs-15 fw-bold mb-1"><a href="{{route('properties.detail')}}"
                                            class="text-title hover-text-primary transition">Affordable Urban Room</a></h5>
                                    <span class="position-relative d-block mb-1"><i class="ri-map-pin-2-line"></i>40
                                        Journal Square , NJ, USA</span>
                                    <p class="mb-0">Price: <b class="text_primary fw-semibold">$15.000</b></p>
                                </div>
                            </div>
                            <div class="rp-post-card d-flex flex-wrap align-items-center">
                                <div class="rp-post-img">
                                    <img src="{{asset('frontend/assets/img/properties/property-thumb-2.jpg')}}" alt="Post Thumb">
                                </div>
                                <div class="rp-post-info">
                                    <h5 class="fs-15 fw-bold mb-0"><a href="{{route('properties.detail')}}"
                                            class="text-title hover-text-primary transition">Northwest Office Space</a>
                                    </h5>
                                    <span class="position-relative d-block mb-1"><i class="ri-map-pin-2-line"></i>14th
                                        Street, Florida, USA</span>
                                    <p class="mb-0">Price: <b class="text_primary fw-semibold">$34.000</b></p>
                                </div>
                            </div>
                            <div class="rp-post-card d-flex flex-wrap align-items-center">
                                <div class="rp-post-img">
                                    <img src="{{asset('frontend/assets/img/properties/property-thumb-3.jpg')}}" alt="Post Thumb">
                                </div>
                                <div class="rp-post-info">
                                    <h5 class="fs-15 fw-bold mb-0"><a href="{{route('properties.detail')}}"
                                            class="text-title hover-text-primary transition">Diamond Manco Apartment</a>
                                    </h5>
                                    <span class="position-relative d-block mb-1"><i class="ri-map-pin-2-line"></i>3rd Ave,
                                        New York, USA</span>
                                    <p class="mb-0">Price: <b class="text_primary fw-semibold">$25.000</b></p>
                                </div>
                            </div>
                        </div>
                        <a href="{{route('properties.index')}}" class="link style-one fw-semibold">View All Properties <img
                                src="{{asset('frontend/assets/img/icons/right-long-arrow-orange.svg')}}" alt="icon"></a>
                    </div>
                </aside>
            </div>
        </div>
    </div>
    <!-- Property Details End -->
@endsection
