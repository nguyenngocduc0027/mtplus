<!-- Hero Section Start -->
<div class="hero-area style-one position-relative z-1">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-7 col-lg-7">
                <div class="hero-content">
                    <h6 class="section-subtitle style-two d-inline-block fs-13 ls-1 font-optional fw-normal position-relative text_secondary mb-12 text-uppercase"
                        data-cue="slideInUp"><img src="{{ asset('/frontend/assets/img/icons/star-2.svg') }}" alt="Icon"> {{ app()->getLocale() == 'en'
                        ? 'Creating opportunities - breaking through to the future.'
                        : 'khởi nguồn cơ hội - bứt phá tương lai' }}</h6>
                    <h1 class="font-secondary text-white text-uppercase fw-bold" data-cue="slideInUp" data-delay="300">{{ app()->getLocale() == 'en'
                    ? 'EXPERT TRADING & SERVICE SOLUTIONS TAILORED FOR SUCCESS!'
                    : 'Cung cấp GIẢI PHÁP THƯƠNG MẠI & DỊCH VỤ TẬN TÂM - TỐI ƯU!' }}</h1>
                    <p data-cue="slideInUp" data-delay="400" class="line-2">{{ app()->getLocale() == 'en'
                    ? 'We provide comprehensive business solutions based on transparency and expertise, creating long-term value and sustainable growth for your business.'
                    : 'Chúng tôi cung cấp các giải pháp kinh doanh toàn diện dựa trên nền tảng minh bạch và chuyên môn cao, nhằm tạo ra giá trị bền vững cho doanh nghiệp của bạn.' }}</p>
                    <x-ui.learn-more-button href="javascript:void(0)" />
                </div>
                <div class="hero-subcontent d-flex flex-wrap">
                    <div class="hero-thumb round-20">
                        <img src="{{ asset('/frontend/assets/img/hero/hero-slide-1.jpg') }}" alt="Image" class="round-20" style="width: 325px; height: 254px; object-fit: cover;">
                    </div>
                    <div class="hero-thumb-para">
                        <p class="text-white">{{ app()->getLocale() == 'en'
                        ? 'Innovative Solutions For Your Sustainable Business Growth.'
                        : 'Giải pháp thông minh cho sự phát triển bền vững của doanh nghiệp.' }}</p>
                        <x-ui.read-more-button href="javascript:void(0)" />
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="circle-text-wrap position-relative overflow-hidden z-1 ms-xl-auto" data-cue="slideInUp"
                    data-delay="300">
                    <img src="{{ asset('/frontend/assets/img/hero/circle-text-1.svg') }}" alt="Circle Text"
                        class="rotate position-relative z-1">
                    <a data-fslightbox="" href="https://www.youtube.com/watch?v=FlUIhTFuDes&list=RDFlUIhTFuDes&start_radio=1"
                        class="play-icon position-absolute d-flex flex-column align-items-center justify-content-center rounded-circle bg_primary z-1"><i
                            class="ri-play-large-fill"></i></a>
                </div>
            </div>
        </div>
    </div>
    <img src="{{ asset('/frontend/assets/img/hero/hero-img-1.png') }}" alt="Image" class="hero-img position-absolute end-0"
        data-cue="slideInRight" data-delay="300">
</div>
<!-- Hero Section End -->
