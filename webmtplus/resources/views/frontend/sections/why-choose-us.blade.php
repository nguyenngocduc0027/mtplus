<!-- Why Choose Us Section Start -->
<div class="wh-area style-two bg-gray ptb-120 round-45 mx-xxl-5 mx-2 position-relative z-2">

    <div class="container">
        <div class="row align-items-center">
            <div class="col-xxl-6 col-xl-6 col-lg-7 pe-xxl-0">
                <div class="wh-content mb-md-30">
                    <h6 class="section-subtitle style-two d-inline-block text-center fs-13 ls-1 font-optional fw-semibold position-relative text_primary mb-16 text-uppercase"
                        data-cue="slideInUp"><img src="{{ asset('/frontend/assets/img/icons/home-icon.svg') }}" alt="Icon">{{ app()->getLocale() == 'en' ? 'Why Choose Us' : 'Tại sao chọn chúng tôi' }}</h6>
                    <h2 class="section-title style-one fw-normal text-title mb-20" data-cue="slideInUp" data-delay="300">
                        <span class="fw-black">{{ app()->getLocale() == 'en' ? 'YOUR TRUSTED PARTNER FOR SUSTAINABLE GROWTH' : 'ĐỐI TÁC TIN CẬY CHO SỰ PHÁT TRIỂN BỀN VỮNG' }}</span>
                    </h2>
                    <p class="pe-xxl-5 me-xxl-5 mb-1 line-3" data-cue="slideInUp" data-delay="400">
                        {{ app()->getLocale() == 'en'
                        ? 'With a commitment to excellence and a passion for innovation, we deliver tailored solutions that drive success and create lasting value for our clients.'
                        : 'Với cam kết về sự xuất sắc và đam mê đổi mới, chúng tôi cung cấp các giải pháp được thiết kế riêng nhằm thúc đẩy thành công và tạo ra giá trị lâu dài cho khách hàng của mình.' }}
                    </p>
                    <div class="row pe-xxl-5 gx-xxl-5 mb-35">
                        <div class="col-md-6" data-cue="slideInUp">
                            <div class="feature-item">
                                <span
                                    class="feature-icon position-absolute bg_secondary d-flex flex-column align-items-center justify-content-center rounded-circle"><img
                                        src="{{ asset('/frontend/assets/img/icons/house-thing.svg') }}" alt="Icon"></span>
                                <h6 class="fs-16 fw-semibold mb-0">{{ app()->getLocale() == 'en' ? 'Transparency and strong professional ethics' : 'Minh bạch và đạo đức nghề nghiệp vững chắc' }}</h6>
                            </div>
                        </div>
                        <div class="col-md-6" data-cue="slideInUp">
                            <div class="feature-item">
                                <span
                                    class="feature-icon position-absolute bg_secondary d-flex flex-column align-items-center justify-content-center rounded-circle"><img
                                        src="{{ asset('/frontend/assets/img/icons/mailbox.svg') }}" alt="Icon"></span>
                                <h6 class="fs-16 fw-semibold mb-0">{{ app()->getLocale() == 'en' ? 'A team of experts with in-depth market knowledge' : 'Đội ngũ chuyên gia am hiểu thị trường' }}</h6>
                            </div>
                        </div>
                        <div class="col-md-6" data-cue="slideInUp">
                            <div class="feature-item">
                                <span
                                    class="feature-icon position-absolute bg_secondary d-flex flex-column align-items-center justify-content-center rounded-circle"><img
                                        src="{{ asset('/frontend/assets/img/icons/antennas.svg') }}" alt="Icon"></span>
                                <h6 class="fs-16 fw-semibold mb-0">{{ app()->getLocale() == 'en' ? 'Standardization, ensuring consistency and effectiveness' : 'Chuẩn hóa, đảm bảo tính nhất quán và hiệu quả' }}</h6>
                            </div>
                        </div>
                        <div class="col-md-6" data-cue="slideInUp">
                            <div class="feature-item">
                                <span
                                    class="feature-icon position-absolute bg_secondary d-flex flex-column align-items-center justify-content-center rounded-circle"><img
                                        src="{{ asset('/frontend/assets/img/icons/skyline.svg') }}" alt="Icon"></span>
                                <h6 class="fs-16 fw-semibold mb-0">{{ app()->getLocale() == 'en' ? 'Building real value and sustainable partnerships.' : 'Xây dựng giá trị thực và hợp tác bền vững' }}</h6>
                            </div>
                        </div>
                    </div>
                    <x-ui.learn-more-button href="javascript:void(0)" />
                    <div class="ceo-message-wrap d-flex flex-wrap align-items-center">
                        <div class="ceo-avatar ">
                            <img src="{{ asset('/frontend/assets/img/about/ceo.jpg') }}" alt="Image" class="round-10" style="width: 97px; height: 104px; object-fit: cover;">
                        </div>
                        <div class="ceo-message">
                            <p class="text-title line-3">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."</p>
                            <h6 class="position-relative fs-16 font-primary fw-bold text-title ">Edge Yu.<span
                                    class="fw-normal text-para ms-2">Director, CEO</span></h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-5 offset-xxl-1 col-xl-6 col-lg-5">
                <div class="wh-img-wrap position-relative">
                    <img src="{{ asset('/frontend/assets/img/about/wh-img-1.jpg') }}" alt="Image" class="wh-img tilt-img round-10" style="width: 570px; height: 597px; object-fit: cover;">
                    <img src="{{ asset('/frontend/assets/img/about/wh-img-1.jpg') }}" alt="Image"
                        class="wh-thumb position-absolute top-0 end-0 round-10 move-bottom" style="width: 262px; height: 213px; object-fit: cover;">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Why Choose Us Section End -->
