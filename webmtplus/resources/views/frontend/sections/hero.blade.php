@php
    $heroSection = \App\Models\HomeHeroSection::where('is_active', true)->first();
@endphp

@if($heroSection)
<!-- Hero Section Start -->
<div class="hero-area style-one position-relative z-1">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-7 col-lg-7">
                <div class="hero-content">
                    <h6 class="section-subtitle style-two d-inline-block fs-13 ls-1 font-optional fw-normal position-relative text_secondary mb-12 text-uppercase"
                        data-cue="slideInUp">
                        <img src="{{ asset('/frontend/assets/img/icons/star-2.svg') }}" alt="Icon">
                        {{ $heroSection->getSubtitle() }}
                    </h6>
                    <h1 class="font-secondary text-white text-uppercase fw-bold" data-cue="slideInUp" data-delay="300">
                        {{ $heroSection->getHeading() }}
                    </h1>
                    <p data-cue="slideInUp" data-delay="400" class="line-2">
                        {{ $heroSection->getDescription() }}
                    </p>
                    <x-ui.learn-more-button :href="$heroSection->learn_more_url" />
                </div>
                <div class="hero-subcontent d-flex flex-wrap">
                    <div class="hero-thumb round-20">
                        <img src="{{ asset($heroSection->hero_slide_image) }}" alt="Image" class="round-20" style="width: 325px; height: 254px; object-fit: cover;">
                    </div>
                    <div class="hero-thumb-para">
                        <p class="text-white">{{ $heroSection->getThumbPara() }}</p>
                        <x-ui.read-more-button :href="$heroSection->read_more_url" />
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="circle-text-wrap position-relative overflow-hidden z-1 ms-xl-auto" data-cue="slideInUp"
                    data-delay="300">
                    <img src="{{ asset('/frontend/assets/img/hero/circle-text-1.svg') }}" alt="Circle Text"
                        class="rotate position-relative z-1">
                    <a data-fslightbox="" href="{{ $heroSection->video_url }}"
                        class="play-icon position-absolute d-flex flex-column align-items-center justify-content-center rounded-circle bg_primary z-1">
                        <i class="ri-play-large-fill"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <img src="{{ asset($heroSection->hero_main_image) }}" alt="Image" class="hero-img position-absolute end-0"
        data-cue="slideInRight" data-delay="300">
</div>
<!-- Hero Section End -->
@endif
