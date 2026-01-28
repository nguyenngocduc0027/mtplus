<!-- Feature Section Start -->
<div class="container pb-90">
    <div class="row align-items-end">
        <div class="col-xl-8 offset-xl-2 col-md-10 offset-md-1 text-center px-xxl-5">
            <h6 class="section-subtitle style-two d-inline-block fs-13 ls-1 font-optional fw-semibold position-relative text_primary mb-25 text-uppercase"
                data-cue="slideInUp"><img src="{{ asset('/frontend/assets/img/icons/home-icon.svg') }}" alt="Icon">{{  app()->getLocale() == 'en' ? 'What do We Do?' : 'Chúng tôi làm gì?' }}</h6>
            <h2 class="section-title style-one fw-normal text-title mb-40" data-cue="slideInUp" data-delay="300">
                <span class="fw-bold">{{ app()->getLocale() == 'en'
                ? 'Empowering Business Excellence through Strategic & Core Solutions'
                : 'Chúng tôi giúp doanh nghiệp tối ưu nguồn lực và mở rộng quy mô bằng các giải pháp trọng tâm' }}</span>
            </h2>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-xl-4 col-md-6" data-cue="slideInUp">
            <div class="feature-card style-three position-relative round-20 transition mb-30">
                <div class="br-one position-absolute top-0 start-0"></div>
                <div class="br-two position-absolute bottom-0 start-0"></div>
                <div class="feature-img rounded-circle position-relative z-1 d-block mx-auto">
                    <img src="{{ asset('/frontend/assets/img/features/zigzag-shape.svg') }}" alt="Shape"
                        class="position-absolute top-0 start-0 w-100 h-100 z-1">
                    <img src="{{ asset('/frontend/assets/img/features/feature-img-1.jpg') }}" alt="Image" class="rounded-circle">
                </div>
                <h3 class="fs-24 font-primary fw-black">{{ __('common.investment_consulting') }}</h3>
                <p class="line-2">{{ app()->getLocale() == 'en'
                ? 'Providing smart investment strategies and effective capital management to optimize long-term returns for partners.'
                : 'Cung cấp chiến lược đầu tư thông minh và quản lý nguồn vốn hiệu quả để tối ưu hóa lợi nhuận dài hạn cho đối tác.' }}</p>
                <x-ui.read-more-button href="javascript:void(0)" />
            </div>
        </div>
        <div class="col-xl-4 col-md-6" data-cue="slideInUp">
            <div class="feature-card style-four position-relative z-1 overflow-hidden round-20 mb-30">
                <div class="feature-info">
                    <h3 class="fs-24 font-primary fw-black">{{ __('common.trade_and_distribution') }}</h3>
                    <p class="line-2">{{ app()->getLocale() == 'en'
                ? 'Digitalizing operations and applying advanced technology to enhance productivity and digital competitive advantages for businesses.'
                : 'Số hóa quy trình vận hành và ứng dụng công nghệ tiên tiến nhằm nâng cao năng suất và lợi thế cạnh tranh số cho doanh nghiệp.' }}</p>
                    <x-ui.read-more-button href="javascript:void(0)" />
                </div>
                <img src="{{ asset('/frontend/assets/img/features/feature-img-2.jpg') }}" alt="Image"
                    class="position-absolute bottom-0 start-0 z-n1 transition">
            </div>
        </div>
        <div class="col-xl-4 col-md-6" data-cue="slideInUp">
            <div
                class="feature-card style-five bg-f position-relative overflow-hidden d-flex flex-column align-items-end justify-content-end round-20 z-1 mb-30">
                <div class="feature-info">
                    <h3 class="fs-24 font-primary fw-black text-white">{{ __('common.technology_solution') }}</h3>
                    <p class="text-alto line-2">{{ app()->getLocale() == 'en'
                ? 'We help you find and secure your ideal investment property'
                : 'Chúng tôi giúp chuyên gia tìm dạng và đề xúc tìm dạng nhà đa quy mô' }}
                    </p>
                    <x-ui.read-more-button href="javascript:void(0)" />
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service Section End -->
