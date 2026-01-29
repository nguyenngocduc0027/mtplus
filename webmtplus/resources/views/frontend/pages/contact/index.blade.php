@extends('frontend.layouts.app')
@props([
    'pageTitle' => __('common.contact'),
    'hidden' => true,
    'headerClass' => 'style-four',
    'logo' => '/frontend/assets/img/logo.png',
])
@section('content')
    <x-common.breadcrumb breadcrumbTitle="{{ __('common.contact') }}" />

    <!-- Contact Section Start -->
    <div class="container ptb-120">
        <div class="row justify-content-center pb-90">
            <div class="col-xl-4">
                <div class="contact-card style-one bg-gray d-flex flex-wrap align-items-center round-30 mb-30">
                    <div
                        class="contact-icon bg_secondary d-flex flex-column align-items-center justify-content-center rounded-circle transition">
                        <img src="/frontend/assets/img/icons/phone-black.svg" alt="Icon" class="transition">
                    </div>
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
                        <img src="/frontend/assets/img/icons/mail-black.svg" alt="Icon" class="transition">
                    </div>
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
                        <img src="/frontend/assets/img/icons/pin-black.svg" alt="Icon" class="transition">
                    </div>
                    <div class="contact-info">
                        <span>401 Broadway, 24th Floor, London</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="row align-items-lg-start align-items-center">
            <div class="location-box style-one bg-white round-10" data-cue="slideInUp" data-show="true"
                style="animation-name: slideInUp; animation-duration: 600ms; animation-timing-function: ease; animation-delay: 0ms; animation-direction: normal; animation-fill-mode: both;">
                <div class="row">
                    <div class="col-xxl-6 col-xl-6 col-lg-6 mb-md-20">
                        <p class="fw-semibold text-title text-title mb-20">
                            Đừng ngần ngại liên hệ với đội ngũ chuyên gia của chúng tôi để bắt đầu kế hoạch bứt phá tương
                            lai ngay hôm nay.
                        </p>
                        <!-- Wrapper container -->
                        <div class="col-lg-12 mb-md-20">
                            <form action="#" class="comment-form form-wrapper round-10 p-0 mb-50" id="cmt-form">
                                <div class="row gx-xl-3">
                                    <div class="col-md-6">
                                        <div class="form-group position-relative mb-25">
                                            <input type="text" required=""
                                                class="w-100 ht-50 bg-gray border-0 outline-0 round-5 text-para"
                                                placeholder="Name">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-25">
                                            <input type="email" placeholder="Email" required=""
                                                class="w-100 ht-50 bg-gray border-0 outline-0 round-5 text-para">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group mb-25">
                                            <input type="text" placeholder="Subject" required=""
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
                                            <label class="form-check-label" for="test_2">
                                                Accept Terms of Services and Privacy Policy
                                            </label>
                                        </div>
                                        <div class="col-xl-5 col-md-6">
                                            <button
                                                class="btn style-one d-inline-flex flex-wrap align-items-center p-0"><span
                                                    class="btn-text d-inline-block fw-semibold position-relative transition">Gửi
                                                    tin nhắn</span><span
                                                    class="btn-icon position-relative d-flex flex-column align-items-center justify-content-center rounded-circle transition"><i
                                                        class="ri-arrow-right-up-line"></i></span></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-xxl-6 col-xl-6 col-lg-6">
                        <div id="iframe-map" class="map-wrap round-10">
                            <div class="map-wrap">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4418.547012515451!2d105.80019557584068!3d20.993992088970764!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab24c5621439%3A0xed7a32c6a7340f8e!2zQ8O0bmcgVHkgVE5ISCBHaeG6o2kgUGjDoXAgQ8O0bmcgTmdo4buHIE1ldGFTb2Z0!5e1!3m2!1svi!2s!4v1769661751238!5m2!1svi!2s"
                                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Details End -->
@endsection
