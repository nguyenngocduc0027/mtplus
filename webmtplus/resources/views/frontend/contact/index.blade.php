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
                    <h2 class="section-title style-one fw-black text-title">Contact Us</h2>
                    <ul class="br-menu list-unstyled">
                        <li><a href="{{route('home')}}"><img src="{{asset('frontend/assets/img/icons/home-icon.svg')}}" alt="Icon">HOME</a></li>
                        <li>CONTACT US</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End -->

    <!-- Contact Section Start -->
    <div class="container ptb-120">
        <div class="row justify-content-center pb-90">
            <div class="col-xl-4">
                <div class="contact-card style-one bg-gray d-flex flex-wrap align-items-center round-30 mb-30">
                    <div
                        class="contact-icon bg_secondary d-flex flex-column align-items-center justify-content-center rounded-circle transition">
                        <img src="{{asset('frontend/assets/img/icons/phone-black.svg')}}" alt="Icon" class="transition"></div>
                    <div class="contact-info">
                        <span class="font-optional fs-13 fw-bold d-block text-title ls-1">PHONE NUMBER</span>
                        <a href="tel:67475867869202" class="text-para hover-text-primary transition">+674 7586 7869 202</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="contact-card style-one bg-gray d-flex flex-wrap align-items-center round-30 mb-30">
                    <div
                        class="contact-icon bg_secondary d-flex flex-column align-items-center justify-content-center rounded-circle transition">
                        <img src="{{asset('frontend/assets/img/icons/mail-black.svg')}}" alt="Icon" class="transition"></div>
                    <div class="contact-info">
                        <span class="font-optional fs-13 fw-bold d-block text-title ls-1">EMAIL</span>
                        <a href="mailto:hello@renius.com"
                            class="text-para hover-text-primary transition">hello@renius.com</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="contact-card style-one bg-gray d-flex flex-wrap align-items-center round-30 mb-30">
                    <div
                        class="contact-icon bg_secondary d-flex flex-column align-items-center justify-content-center rounded-circle transition">
                        <img src="{{asset('frontend/assets/img/icons/pin-black.svg')}}" alt="Icon" class="transition"></div>
                    <div class="contact-info">
                        <span class="font-optional fs-13 fw-bold d-block text-title ls-1">LOCATION</span>
                        <span>401 Broadway, 24th Floor, London</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="row align-items-lg-start align-items-center">
            <div class="col-lg-6 mb-md-20">
                <h2 class="section-title style-one text-title mb-30">Contact <span class="fw-black">Renius Today And Take
                        The First</span> Step Forward</h2>
                <form action="#" class="comment-form form-wrapper round-10 p-0 mb-50" id="cmt-form">
                    <div class="row gx-xl-3">
                        <div class="col-md-6">
                            <div class="form-group position-relative mb-25">
                                <input type="text" required
                                    class="w-100 ht-50 bg-gray border-0 outline-0 round-5 text-para" placeholder="Name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-25">
                                <input type="email" placeholder="Email" required
                                    class="w-100 ht-50 bg-gray border-0 outline-0 round-5 text-para">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group mb-25">
                                <input type="text" placeholder="Subject" required
                                    class="w-100 ht-50 bg-gray border-0 outline-0 round-5 text-para">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group mb-25">
                                <textarea name="messages" id="messages" cols="30" rows="10" placeholder="Comment"
                                    class="w-100 ht-152 bg-gray border-0 outline-0 round-5 text-para resize-0"></textarea>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-check checkbox style-one mb-25">
                                <input class="form-check-input" type="checkbox" id="test_2">
                                <label class="form-check-label" for="test_2" class="fw-medium">
                                    Accept Terms of Services and Privacy Policy
                                </label>
                            </div>
                            <div class="col-xl-5 col-md-6">
                                <button class="btn style-one d-inline-flex flex-wrap align-items-center p-0"><span
                                        class="btn-text d-inline-block fw-semibold position-relative transition">Send
                                        Message</span><span
                                        class="btn-icon position-relative d-flex flex-column align-items-center justify-content-center rounded-circle transition"><i
                                            class="ri-arrow-right-up-line"></i></span></button>
                            </div>
                        </div>
                    </div>
                </form>
                <img src="{{asset('frontend/assets/img/contact-img.png')}}" alt="Image" class="d-block mx-auto">
            </div>
            <div class="col-lg-6 ps-xxl-5">
                <div class="comp-map round-20">
                    <img src="{{asset('frontend/assets/img/map-3.jpg')}}" alt="Image" class="round-20 w-100">
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Details End -->
@endsection
