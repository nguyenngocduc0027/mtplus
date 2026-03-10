@extends('frontend.layouts.app')
@props([
    'pageTitle' => __('common.areas_of_operation'),
    'hidden' => true,
    'headerClass' => 'style-four',
    'logo' => '/frontend/assets/img/logo.png',
])
@section('content')
    <x-common.breadcrumb breadcrumbTitle="{{ __('common.areas_of_operation') }}" />
    <div class="pt-5">
        <x-ui.slide-text sideText1="MTPlus..JSC" sideText2="Metasoft..Ltd" sideText3="Metasoft..Ltd" sideText4="MTPlus..JSC" />
    </div>

    <!-- Areas of Operation Sections Start -->
    @foreach($sections as $section)
        <div class="about-area style-one pb-120">
            <div class="container">
                <div class="row align-items-center">
                    @if($section->image_layout == 'left')
                        <!-- Image Left Layout -->
                        <div class="col-xl-5 col-lg-6">
                            <div class="about-img-wrap position-relative pe-xxl-4 mb-md-30">
                                <img src="{{ $section->main_image_path ? asset($section->main_image_path) : asset('/frontend/assets/img/about/about-img-1.jpg') }}"
                                    alt="{{ $section->getTitle() }}"
                                    class="about-img round-30 tilt-img" style="width: 571px; height: 688px; object-fit: cover;">
                                <img src="{{ $section->thumbnail_image_path ? asset($section->thumbnail_image_path) : asset('/frontend/assets/img/about/about-bg-1.jpg') }}"
                                    alt="Thumbnail"
                                    style="width: 164px; height: 170px; object-fit: cover;"
                                    class="about-thumb move-bottom position-absolute">
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-6 ps-xxl-4">
                            <div class="about-content">
                                <h6 class="section-subtitle style-one d-inline-block fs-13 ls-1 font-optional fw-semibold position-relative text_primary mb-20 text-uppercase"
                                    data-cue="slideInUp">
                                    <img src="{{ asset('/frontend/assets/img/icons/star-2.svg') }}" alt="Icon">
                                    {{ $section->getSubtitle() }}
                                </h6>
                                <h2 class="section-title style-one text-title line-3" data-cue="slideInUp" data-delay="300">
                                    <span class="fw-black">{{ $section->getTitle() }}</span>
                                </h2>
                                <div class="about-subcontent" data-cue="slideInUp" data-delay="400">
                                    <p class="pe-xxl-5 line-5">{{ $section->getDescription() }}</p>
                                    <div class="row justify-content-start">
                                        @foreach($section->getCards() as $index => $card)
                                            @if($card)
                                                <div class="col-xl-12 col-lg-12 col-md-12">
                                                    <div class="counter-card style-one bg-{{ ($index % 3) + 1 }} position-relative z-1 round-10"
                                                        data-cue="slideInUp">
                                                        <img src="{{ asset('/frontend/assets/img/about/star-group.png') }}" alt="Icon"
                                                            class="position-absolute card-shape z-1">
                                                        <p class="fw-medium d-block mb-0 text-secondary">{{ $card }}</p>
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                    <div class="mt-3">
                                        @if ($hidden == false)
                                            <x-ui.learn-more-button href="{{ route('areas-of-operation') }}" />
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    @else
                        <!-- Image Right Layout -->
                        <div class="col-xl-7 col-lg-6 ps-xxl-4">
                            <div class="about-content">
                                <h6 class="section-subtitle style-one d-inline-block fs-13 ls-1 font-optional fw-semibold position-relative text_primary mb-20 text-uppercase"
                                    data-cue="slideInUp">
                                    <img src="{{ asset('/frontend/assets/img/icons/star-2.svg') }}" alt="Icon">
                                    {{ $section->getSubtitle() }}
                                </h6>
                                <h2 class="section-title style-one text-title line-3" data-cue="slideInUp" data-delay="300">
                                    <span class="fw-black">{{ $section->getTitle() }}</span>
                                </h2>
                                <div class="about-subcontent" data-cue="slideInUp" data-delay="400">
                                    <p class="pe-xxl-5 line-5">{{ $section->getDescription() }}</p>
                                    <div class="row justify-content-start">
                                        @foreach($section->getCards() as $index => $card)
                                            @if($card)
                                                <div class="col-xl-12 col-lg-12 col-md-12">
                                                    <div class="counter-card style-one bg-{{ ($index % 3) + 1 }} position-relative z-1 round-10"
                                                        data-cue="slideInUp">
                                                        <img src="{{ asset('/frontend/assets/img/about/star-group.png') }}" alt="Icon"
                                                            class="position-absolute card-shape z-1">
                                                        <p class="fw-medium d-block mb-0 text-secondary">{{ $card }}</p>
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                    <div class="mt-3">
                                        @if ($hidden == false)
                                            <x-ui.learn-more-button href="{{ route('areas-of-operation') }}" />
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-6">
                            <div class="about-img-wrap position-relative pe-xxl-4 mb-md-30">
                                <img src="{{ $section->main_image_path ? asset($section->main_image_path) : asset('/frontend/assets/img/about/about-img-1.jpg') }}"
                                    alt="{{ $section->getTitle() }}"
                                    class="about-img round-30 tilt-img" style="width: 571px; height: 688px; object-fit: cover;">
                                <img src="{{ $section->thumbnail_image_path ? asset($section->thumbnail_image_path) : asset('/frontend/assets/img/about/about-bg-1.jpg') }}"
                                    alt="Thumbnail"
                                    style="width: 164px; height: 170px; object-fit: cover;"
                                    class="about-thumb move-bottom position-absolute">
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    @endforeach
    <!-- Areas of Operation Sections End -->
@endsection
