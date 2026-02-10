@php
    $servicesSection = \App\Models\HomeServicesSection::where('is_active', true)->first();
@endphp

<!-- Feature Section Start -->
@if($servicesSection)
<div class="container pb-90">
    <div class="row align-items-end">
        <div class="col-xl-8 offset-xl-2 col-md-10 offset-md-1 text-center px-xxl-5">
            <h6 class="section-subtitle style-two d-inline-block fs-13 ls-1 font-optional fw-semibold position-relative text_primary mb-25 text-uppercase"
                data-cue="slideInUp"><img src="{{ asset('/frontend/assets/img/icons/home-icon.svg') }}" alt="Icon">{{ $servicesSection->getSubtitle() }}</h6>
            <h2 class="section-title style-one fw-normal text-title mb-40" data-cue="slideInUp" data-delay="300">
                <span class="fw-bold">{{ $servicesSection->getHeading() }}</span>
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
                    <img src="{{ asset($servicesSection->service_1_image ?? '/frontend/assets/img/features/feature-img-1.jpg') }}" alt="Image" class="rounded-circle w-100 h-100" style="object-fit: cover;">
                </div>
                <h3 class="fs-24 font-primary fw-black">
                    {{ app()->getLocale() == 'en' ? $servicesSection->service_1_title_en : $servicesSection->service_1_title_vi }}
                </h3>
                <p class="line-2">
                    {{ app()->getLocale() == 'en' ? $servicesSection->service_1_desc_en : $servicesSection->service_1_desc_vi }}
                </p>
                <x-ui.read-more-button href="{{ $servicesSection->service_1_url ?? 'javascript:void(0)' }}" />
            </div>
        </div>
        <div class="col-xl-4 col-md-6" data-cue="slideInUp">
            <div class="feature-card style-four position-relative z-1 overflow-hidden round-20 mb-30">
                <div class="feature-info">
                    <h3 class="fs-24 font-primary fw-black">
                        {{ app()->getLocale() == 'en' ? $servicesSection->service_2_title_en : $servicesSection->service_2_title_vi }}
                    </h3>
                    <p class="line-2">
                        {{ app()->getLocale() == 'en' ? $servicesSection->service_2_desc_en : $servicesSection->service_2_desc_vi }}
                    </p>
                    <x-ui.read-more-button href="{{ $servicesSection->service_2_url ?? 'javascript:void(0)' }}" />
                </div>
                <img src="{{ asset($servicesSection->service_2_image ?? '/frontend/assets/img/features/feature-img-2.jpg') }}" alt="Image"
                    class="position-absolute bottom-0 start-0 z-n1 transition w-100 h-100" style="object-fit: cover;">
            </div>
        </div>
        <div class="col-xl-4 col-md-6" data-cue="slideInUp">
            <div style="background-image: url('{{ asset($servicesSection->service_3_image ?? '/frontend/assets/img/backgrounds/feature-bg-3.jpg') }}'); background-size: cover; background-position: center;"
                class="feature-card style-five bg-f position-relative overflow-hidden d-flex flex-column align-items-end justify-content-end round-20 z-1 mb-30">
                <div class="feature-info">
                    <h3 class="fs-24 font-primary fw-black text-white">
                        {{ app()->getLocale() == 'en' ? $servicesSection->service_3_title_en : $servicesSection->service_3_title_vi }}
                    </h3>
                    <p class="text-alto line-2">
                        {{ app()->getLocale() == 'en' ? $servicesSection->service_3_desc_en : $servicesSection->service_3_desc_vi }}
                    </p>
                    <x-ui.read-more-button href="{{ $servicesSection->service_3_url ?? 'javascript:void(0)' }}" />
                </div>
            </div>
        </div>
    </div>
</div>
@endif
<!-- Service Section End -->
