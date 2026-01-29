<!-- Location Section Start -->
<div class="location-area style-one position-relative z-1 mx-xxl-4 ptb-120">
    <div class="container">
        <div class="row align-items-end mb-40">
            <div class="col-xxl-12 col-md-8 mb-sm-20">
                <h6 class="section-subtitle style-one d-inline-block fs-13 ls-1 font-optional fw-semibold position-relative text_primary mb-20"
                    data-cue="slideInUp"><img src="/frontend/assets/img/icons/star-3.svg"
                        alt="Icon">{{ __('common.contact') }}
                </h6>
                <h2 class="section-title style-one text-title mb-0" data-cue="slideInUp" data-delay="300">
                    <span
                        class="fw-black">{{ app()->getLocale() == 'en' ? 'CONNECT WITH MT PLUS – WHERE OPPORTUNITIES BEGIN' : 'KẾT NỐI CÙNG MT PLUS – KHỞI ĐẦU MỌI CƠ HỘI' }}</span>
                </h2>
            </div>
        </div>
        <div class="location-box style-one bg-white round-10" data-cue="slideInUp">
            <div class="row">
                <div class="col-xxl-6 col-xl-6 col-lg-6 mb-md-20">
                    <p class="fw-semibold text-title text-title mb-20">
                        {{ app()->getLocale() == 'en'
                            ? "Don't hesitate to contact our expert team to start your future breakthrough plan today."
                            : 'Đừng ngần ngại liên hệ với đội ngũ chuyên gia của chúng tôi để bắt đầu kế hoạch bứt phá tương lai ngay hôm nay.' }}
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
                                                class="btn-text d-inline-block fw-semibold position-relative transition">{{ __('common.send_message') }}</span><span
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
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4418.547012515451!2d105.80019557584068!3d20.993992088970764!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab24c5621439%3A0xed7a32c6a7340f8e!2zQ8O0bmcgVHkgVE5ISCBHaeG6o2kgUGjDoXAgQ8O0bmcgTmdo4buHIE1ldGFTb2Z0!5e1!3m2!1svi!2s!4v1769661751238!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Location Section End -->
