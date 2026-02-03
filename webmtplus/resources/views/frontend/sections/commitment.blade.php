@php
    $commitmentSection = \App\Models\HomeCommitmentSection::where('is_active', true)->first();
@endphp

<!-- Why Choose Us Section Start -->
@if($commitmentSection)
<div class="wh-area style-one position-relative z-1 ptb-120">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-md-30">
                <div class="wh-content">
                    <h6 class="section-subtitle style-one d-inline-block fs-13 ls-1 font-optional fw-semibold position-relative text_secondary mb-20"
                        data-cue="slideInUp"><img src="{{ asset('/frontend/assets/img/icons/star-5.svg') }}" alt="Icon">{{ $commitmentSection->getSubtitle() }}</h6>
                    <h2 class="section-title style-one text-white mb-12" data-cue="slideInUp" data-delay="300">
                        <span class="fw-black">{{ $commitmentSection->getHeading() }}</span>
                    </h2>
                    <p class="pe-xxl-5 me-xxl-5 mb-25 line-3" data-cue="slideInUp">{{ $commitmentSection->getDescription() }}</p>
                    <div class="row gx-md-5 pe-xxl-5 me-xxl-4">
                        <div class="col-md-6" data-cue="slideInUp">
                            <div class="feature-item d-flex flex-wrap align-items-center mb-35">
                                <img src="{{ asset($commitmentSection->feature_1_icon ?? '/frontend/assets/img/about/feature-icon-5.png') }}" alt="Icon">
                                <h3 class="fs-18 fw-semibold text-alto mb-0">
                                    {{ app()->getLocale() == 'en' ? $commitmentSection->feature_1_title_en : $commitmentSection->feature_1_title_vi }}
                                </h3>
                            </div>
                        </div>
                        <div class="col-md-6" data-cue="slideInUp">
                            <div class="feature-item d-flex flex-wrap align-items-center mb-35">
                                <img src="{{ asset($commitmentSection->feature_2_icon ?? '/frontend/assets/img/about/feature-icon-6.png') }}" alt="Icon">
                                <h3 class="fs-18 fw-semibold text-alto mb-0">
                                    {{ app()->getLocale() == 'en' ? $commitmentSection->feature_2_title_en : $commitmentSection->feature_2_title_vi }}
                                </h3>
                            </div>
                        </div>
                        <div class="col-md-6" data-cue="slideInUp">
                            <div class="feature-item d-flex flex-wrap align-items-center mb-35">
                                <img src="{{ asset($commitmentSection->feature_3_icon ?? '/frontend/assets/img/about/feature-icon-7.png') }}" alt="Icon">
                                <h3 class="fs-18 fw-semibold text-alto mb-0">
                                    {{ app()->getLocale() == 'en' ? $commitmentSection->feature_3_title_en : $commitmentSection->feature_3_title_vi }}
                                </h3>
                            </div>
                        </div>
                        <div class="col-md-6" data-cue="slideInUp">
                            <div class="feature-item d-flex flex-wrap align-items-center mb-35">
                                <img src="{{ asset($commitmentSection->feature_4_icon ?? '/frontend/assets/img/about/feature-icon-8.png') }}" alt="Icon">
                                <h3 class="fs-18 fw-semibold text-alto mb-0">
                                    {{ app()->getLocale() == 'en' ? $commitmentSection->feature_4_title_en : $commitmentSection->feature_4_title_vi }}
                                </h3>
                            </div>
                        </div>
                    </div>
                    <x-ui.learn-more-button href="{{ $commitmentSection->button_url ?? 'javascript:void(0)' }}" />
                </div>
            </div>
            <div class="col-lg-6">
                <div class="wh-img-wrap position-relative z-1" data-cue="slideInUp">
                    <img src="{{ asset($commitmentSection->main_image ?? '/frontend/assets/img/about/wh-img-3.jpg') }}" alt="Image" class="wh-img d-block mx-auto round-10" style="width: 412px; height: 473px; object-fit: cover;">
                    <img src="{{ asset($commitmentSection->thumb_image ?? '/frontend/assets/img/about/wh-thumb-3.jpg') }}" alt="Image" style="width: 259px; height: 172px; object-fit: cover;"
                        class="wh-thumb position-absolute start-0 bottom-0 round-10 move-top">
                    <div
                        class="rating-box position-absolute end-0 text-center d-flex flex-column align-items-center justify-content-center round-10 move-left">
                        <h2 class="font-secondary fw-black position-relative text-white mb-0">{{ $commitmentSection->rating_score ?? '4.8' }}</h2>
                        <div>
                            <ul class="rating list-unstyled">
                                <li><img src="{{ asset('/frontend/assets/img/icons/star.svg') }}" alt="Icon"></li>
                                <li><img src="{{ asset('/frontend/assets/img/icons/star.svg') }}" alt="Icon"></li>
                                <li><img src="{{ asset('/frontend/assets/img/icons/star.svg') }}" alt="Icon"></li>
                                <li><img src="{{ asset('/frontend/assets/img/icons/star.svg') }}" alt="Icon"></li>
                                <li><img src="{{ asset('/frontend/assets/img/icons/star.svg') }}" alt="Icon"></li>
                            </ul>
                            <p class="fs-xxl-18 fw-medium text-alto mb-0"><span class="text-white fw-bold">{{ $commitmentSection->customer_count ?? '300+' }}</span>
                                {{ $commitmentSection->getCustomerText() }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
<!-- Why Choose Us Section End -->
