@php
    $whyChooseSection = \App\Models\HomeWhyChooseSection::where('is_active', true)->first();
@endphp

<!-- Why Choose Us Section Start -->
@if($whyChooseSection)
<div class="wh-area style-two bg-gray ptb-120 round-45 mx-xxl-5 mx-2 position-relative z-2">

    <div class="container">
        <div class="row align-items-center">
            <div class="col-xxl-6 col-xl-6 col-lg-7 pe-xxl-0">
                <div class="wh-content mb-md-30">
                    <h6 class="section-subtitle style-two d-inline-block text-center fs-13 ls-1 font-optional fw-semibold position-relative text_primary mb-16 text-uppercase"
                        data-cue="slideInUp"><img src="{{ asset('/frontend/assets/img/icons/home-icon.svg') }}" alt="Icon">{{ $whyChooseSection->getSubtitle() }}</h6>
                    <h2 class="section-title style-one fw-normal text-title mb-20" data-cue="slideInUp" data-delay="300">
                        <span class="fw-black">{{ $whyChooseSection->getHeading() }}</span>
                    </h2>
                    <p class="pe-xxl-5 me-xxl-5 mb-1 line-3" data-cue="slideInUp" data-delay="400">
                        {{ $whyChooseSection->getDescription() }}
                    </p>
                    <div class="row pe-xxl-5 gx-xxl-5 mb-35">
                        <div class="col-md-6" data-cue="slideInUp">
                            <div class="feature-item">
                                <span
                                    class="feature-icon position-absolute bg_secondary d-flex flex-column align-items-center justify-content-center rounded-circle"><img
                                        src="{{ asset($whyChooseSection->feature_1_icon ?? '/frontend/assets/img/icons/house-thing.svg') }}" alt="Icon"></span>
                                <h6 class="fs-16 fw-semibold mb-0">
                                    {{ app()->getLocale() == 'en' ? $whyChooseSection->feature_1_title_en : $whyChooseSection->feature_1_title_vi }}
                                </h6>
                            </div>
                        </div>
                        <div class="col-md-6" data-cue="slideInUp">
                            <div class="feature-item">
                                <span
                                    class="feature-icon position-absolute bg_secondary d-flex flex-column align-items-center justify-content-center rounded-circle"><img
                                        src="{{ asset($whyChooseSection->feature_2_icon ?? '/frontend/assets/img/icons/mailbox.svg') }}" alt="Icon"></span>
                                <h6 class="fs-16 fw-semibold mb-0">
                                    {{ app()->getLocale() == 'en' ? $whyChooseSection->feature_2_title_en : $whyChooseSection->feature_2_title_vi }}
                                </h6>
                            </div>
                        </div>
                        <div class="col-md-6" data-cue="slideInUp">
                            <div class="feature-item">
                                <span
                                    class="feature-icon position-absolute bg_secondary d-flex flex-column align-items-center justify-content-center rounded-circle"><img
                                        src="{{ asset($whyChooseSection->feature_3_icon ?? '/frontend/assets/img/icons/antennas.svg') }}" alt="Icon"></span>
                                <h6 class="fs-16 fw-semibold mb-0">
                                    {{ app()->getLocale() == 'en' ? $whyChooseSection->feature_3_title_en : $whyChooseSection->feature_3_title_vi }}
                                </h6>
                            </div>
                        </div>
                        <div class="col-md-6" data-cue="slideInUp">
                            <div class="feature-item">
                                <span
                                    class="feature-icon position-absolute bg_secondary d-flex flex-column align-items-center justify-content-center rounded-circle"><img
                                        src="{{ asset($whyChooseSection->feature_4_icon ?? '/frontend/assets/img/icons/skyline.svg') }}" alt="Icon"></span>
                                <h6 class="fs-16 fw-semibold mb-0">
                                    {{ app()->getLocale() == 'en' ? $whyChooseSection->feature_4_title_en : $whyChooseSection->feature_4_title_vi }}
                                </h6>
                            </div>
                        </div>
                    </div>
                    <x-ui.learn-more-button href="{{ $whyChooseSection->button_url ?? 'javascript:void(0)' }}" />
                    <div class="ceo-message-wrap d-flex flex-wrap align-items-center">
                        <div class="ceo-avatar ">
                            <img src="{{ asset($whyChooseSection->ceo_avatar ?? '/frontend/assets/img/about/ceo.jpg') }}" alt="Image" class="round-10" style="width: 97px; height: 104px; object-fit: cover;">
                        </div>
                        <div class="ceo-message">
                            <p class="text-title line-3">{{ $whyChooseSection->getCeoQuote() }}</p>
                            <h6 class="position-relative fs-16 font-primary fw-bold text-title ">{{ $whyChooseSection->ceo_name }}<span
                                    class="fw-normal text-para ms-2">{{ $whyChooseSection->getCeoPosition() }}</span></h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-5 offset-xxl-1 col-xl-6 col-lg-5">
                <div class="wh-img-wrap position-relative">
                    <img src="{{ asset($whyChooseSection->main_image ?? '/frontend/assets/img/about/wh-img-1.jpg') }}" alt="Image" class="wh-img tilt-img round-10" style="width: 570px; height: 597px; object-fit: cover;">
                    <img src="{{ asset($whyChooseSection->thumb_image ?? '/frontend/assets/img/about/wh-img-1.jpg') }}" alt="Image"
                        class="wh-thumb position-absolute top-0 end-0 round-10 move-bottom" style="width: 262px; height: 213px; object-fit: cover;">
                </div>
            </div>
        </div>
    </div>
</div>
@endif
<!-- Why Choose Us Section End -->
