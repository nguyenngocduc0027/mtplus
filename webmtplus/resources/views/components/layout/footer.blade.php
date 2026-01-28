<!-- Footer Section Start -->
<footer class="footer-area style-one bg-optional position-relative z-1 pt-120">
    <div class="container container-footer">
        <div class="row justify-content-between pb-4">
            <div class="col-lg-3 col-md-6">
                <div class="footer-widget mb-30" data-cue="slideInUp">
                    <img width="240" src="{{ asset('frontend/assets/img/logo-white-l.png') }}" alt="Logo">
                    <h4 class="footer-widget-title position-relative fs-24 font-primary fw-bold text-white mt-3 text-uppercase">{{ app()->getLocale() == 'en' ? 'MT Plus Trading and Service Joint Stock Company' : 'Công ty cổ phần thương mại và dịch vụ mt plus' }}</h4>
                    <p class="text-alto mb-30 line-3">
                        {{ app()->getLocale() == 'en'
                        ? 'MT Plus provides reliable trade and service solutions, driven by transparency and long-term value for sustainable growth.'
                        : 'MT Plus cung cấp giải pháp thương mại, dịch vụ tin cậy, lấy sự minh bạch và giá trị thực làm nền tảng phát triển.' }}
                    </p>
                </div>
            </div>
            <div class="col-lg-2 col-md-6 ps-xxl-5">
                <div class="footer-widget mb-30" data-cue="slideInUp">
                    <h4 class="footer-widget-title position-relative fs-20 font-primary fw-bold text-white">{{ __('common.quick_links') }}</h4>
                    <ul class="footer-menu style-one list-unstyled mb-0">
                        <li><a href="javascript:void(0)">{{ __('common.service') }}</a></li>
                        <li><a href="javascript:void(0)">{{ __('common.project') }}</a></li>
                        <li><a href="javascript:void(0)">{{ __('common.news') }}</a></li>
                        <li><a href="javascript:void(0)">{{ __('common.team') }}</a></li>
                        <li><a href="javascript:void(0)">{{ __('common.company_profile') }}</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-6 ps-xxl-5">
                <div class="footer-widget mb-30" data-cue="slideInUp">
                    <h4 class="footer-widget-title position-relative fs-20 font-primary fw-bold text-white">{{ __('common.explore') }}</h4>
                    <ul class="footer-menu style-one list-unstyled mb-0">
                        <li><a href="javascript:void(0)">{{ __('common.privacy_policy') }}</a></li>
                        <li><a href="javascript:void(0)">{{ __('common.terms_of_service') }}</a></li>
                        <li><a href="javascript:void(0)">{{ __('common.faq') }}</a></li>
                        <li><a href="javascript:void(0)">{{ __('common.testimonials') }}</a></li>
                        <li><a href="javascript:void(0)">{{ __('common.career') }}</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-6 ps-xxl-5">
                <div class="footer-widget mb-30 ps-xxl-4" data-cue="slideInUp">
                    <h4 class="footer-widget-title position-relative fs-20 font-primary fw-bold text-white">{{ __('common.company') }}</h4>
                    <ul class="footer-menu style-one list-unstyled mb-0">
                        <li><a href="javascript:void(0)">{{ __('common.areas_of_operation') }}</a></li>
                        <li><a href="javascript:void(0)">{{ __('common.mission') }}</a></li>
                        <li><a href="javascript:void(0)">{{ __('common.vision') }}</a></li>
                        <li><a href="javascript:void(0)">{{ __('common.core_values') }}</a></li>
                        <li><a href="javascript:void(0)">{{ __('common.capabilities_and_experience') }}</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 ps-xxl-5">
                <div class="footer-widget mb-30 ps-xxl-5" data-cue="slideInUp">
                    <h4 class="footer-widget-title position-relative fs-20 font-primary fw-bold text-white">{{ __('common.contact_info') }}</h4>
                    <ul class="contact-info-list list-unstyled mb-0">
                        <li><span class="fw-bold text-white me-1">{{ __('common.address') }}: </span>30-32 Ngõ 12 Khuất Duy Tiến, Thanh Xuân, Hà Nội</li>
                        <li><span class="fw-bold text-white me-1">{{ __('common.email') }}:</span><a href="mailto:contact@mtplus.com">contact@mtplus.com</a></li>
                        <li><span class="fw-bold text-white me-1">{{ __('common.phone') }}:</span><a href="tel:96768678869">+96 76867 8869</a></li>
                        <li><span class="fw-bold text-white me-1">{{ __('common.tax_code') }}:</span><a href="javascript:void(0)">0123456789</a></li>
                        <li><span class="fw-bold text-white me-1">{{ __('common.issued_by') }}:</span>{{ env('APP_NAME') }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="footer-large-text font-optional fw-black round-10">
                    @php
                        $arr_name = env('APP_NAME');
                        $name_length = strlen($arr_name);
                        for ($i = 0; $i < $name_length; $i++) {
                            echo '<span>' . $arr_name[$i] . '</span>';
                        }
                    @endphp
                </div>
            </div>
            <div class="col-md-5">
                <div
                    class="social-share d-flex flex-wrap align-items-center justify-content-md-start justify-content-center mb-sm-10">
                    <span class="text-alto fw-semibold me-2">{{ __('common.follow_us') }}: </span>
                    <ul class="social-profile style-two list-unstyled mb-0">
                        <li><a href="https://www.facebook.com/" target="_blank"
                                class="d-flex flex-column align-items-center justify-content-center rounded-circle"><i
                                    class="ri-facebook-fill"></i></a></li>
                        <li><a href="https://x.com/?lang=en" target="_blank"
                                class="d-flex flex-column align-items-center justify-content-center rounded-circle"><i
                                    class="ri-twitter-x-line"></i></a></li>
                        <li><a href="https://www.instagram.com/" target="_blank"
                                class="d-flex flex-column align-items-center justify-content-center rounded-circle"><i
                                    class="ri-instagram-line"></i></a></li>
                        <li><a href="https://www.linkedin.com/" target="_blank"
                                class="d-flex flex-column align-items-center justify-content-center rounded-circle"><i
                                    class="ri-linkedin-fill"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-7 text-md-end text-center">
                <p class="copyright-text mb-0 text-white"><i class="ri-copyright-line"></i><span
                        class="text_secondary fw-medium"> {{ date('Y') }} - {{ env('APP_NAME') }} </span>{{ __('common.is_proudly_owned_by') }} <a
                        href="https://metasoftware.vn/" class="link style-three fw-medium">Metasoft</a></p>
            </div>
        </div>
    </div>
</footer>
<!-- Footer End -->
