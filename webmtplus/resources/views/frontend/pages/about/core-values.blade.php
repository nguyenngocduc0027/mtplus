@extends('frontend.layouts.app')
@props([
    'pageTitle' => __('common.core_values'),
    'hidden' => true,
    'headerClass' => 'style-four',
    'logo' => '/frontend/assets/img/logo.png',
])
@section('content')
    <x-common.breadcrumb breadcrumbTitle="{{ __('common.core_values') }}" />
    <div class="pt-5">
        <x-ui.slide-text sideText1="MTPlus..JSC" sideText2="Metasoft..Ltd" sideText3="Metasoft..Ltd" sideText4="MTPlus..JSC" />
    </div>
    @include('frontend.sections.about')
    <div class="service-area style-one position-relative z-2 pt-120 pb-90 mx-xxl-4 round-40" >
        <div class="container" >
            <div class="row" >
                <div class="col-xl-8 offset-xl-2 col-md-10 offset-md-1 text-center px-xxl-5" >
                    <h6 class="section-subtitle style-one d-inline-block fs-13 ls-1 font-optional fw-semibold position-relative text_primary mb-20"
                        data-cue="slideInUp" data-show="true"
                        style="animation-name: slideInUp; animation-duration: 600ms; animation-timing-function: ease; animation-delay: 0ms; animation-direction: normal; animation-fill-mode: both;">
                        <img src="/frontend/assets/img/icons/star-3.svg" alt="Icon">{{ $coreValuesContent ? $coreValuesContent->getSectionSubtitle() : __('common.core_values') }}</h6>
                    <h2 class="section-title style-one text-title px-xxl-5 mb-40" data-cue="slideInUp" data-delay="300"
                        data-show="true"
                        style="animation-name: slideInUp; animation-duration: 600ms; animation-timing-function: ease; animation-delay: 300ms; animation-direction: normal; animation-fill-mode: both;">
                        <span class="fw-black">{{ $coreValuesContent ? $coreValuesContent->getSectionTitle() : 'Lorem, ipsum dolor sit amet consectetur adipisicing elit.' }}</span></h2>
                </div>
            </div>
        </div>
        <div class="container-fluid" >
            <div class="row justify-content-center" >
                <div class="col-xxl-3 col-xl-4 col-md-6" data-cue="slideInUp"  data-show="true"
                    style="animation-name: slideInUp; animation-duration: 600ms; animation-timing-function: ease; animation-delay: 0ms; animation-direction: normal; animation-fill-mode: both;">
                    <div class="service-card style-one bg-white round-10 mb-30 transition" >
                        <span class="service-counter fw-semibold d-block transition">01</span>
                        <h3 class="fw-semibold"><a href="javaScript:void(0)"
                                class="text-title link-hover-primary transition">{{ $coreValuesContent ? $coreValuesContent->getValueTitle(1) : 'Lorem, ipsum dolor sit' }}</a></h3>
                        <img src="{{ $coreValuesContent && $coreValuesContent->getValueIcon(1) ? (str_starts_with($coreValuesContent->getValueIcon(1), '/') ? asset($coreValuesContent->getValueIcon(1)) : asset('storage/' . $coreValuesContent->getValueIcon(1))) : asset('/frontend/assets/img/services/service-icon-1.png') }}" alt="Icon" class="service-icon d-block">
                        <div class="service-para d-flex flex-wrap align-items-center justify-content-between"
                            >
                            <p class="mb-0">{{ $coreValuesContent ? $coreValuesContent->getValueDescription(1) : 'Lorem, ipsum dolor sit amet consectetur adipisicing elit.' }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-4 col-md-6" data-cue="slideInUp"  data-show="true"
                    style="animation-name: slideInUp; animation-duration: 600ms; animation-timing-function: ease; animation-delay: 180ms; animation-direction: normal; animation-fill-mode: both;">
                    <div class="service-card style-one bg-white round-10 mb-30 transition" >
                        <span class="service-counter fw-semibold d-block transition">02</span>
                        <h3 class="fw-semibold"><a href="javaScript:void(0)"
                                class="text-title link-hover-primary transition">{{ $coreValuesContent ? $coreValuesContent->getValueTitle(2) : 'Lorem, ipsum dolor sit' }}</a></h3>
                        <img src="{{ $coreValuesContent && $coreValuesContent->getValueIcon(2) ? (str_starts_with($coreValuesContent->getValueIcon(2), '/') ? asset($coreValuesContent->getValueIcon(2)) : asset('storage/' . $coreValuesContent->getValueIcon(2))) : asset('/frontend/assets/img/services/service-icon-2.png') }}" alt="Icon" class="service-icon d-block">
                        <div class="service-para d-flex flex-wrap align-items-center justify-content-between"
                            >
                            <p class="mb-0">{{ $coreValuesContent ? $coreValuesContent->getValueDescription(2) : 'Lorem, ipsum dolor sit amet consectetur adipisicing elit.' }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-4 col-md-6" data-cue="slideInUp"  data-show="true"
                    style="animation-name: slideInUp; animation-duration: 600ms; animation-timing-function: ease; animation-delay: 360ms; animation-direction: normal; animation-fill-mode: both;">
                    <div class="service-card style-one bg-white round-10 mb-30 transition" >
                        <span class="service-counter fw-semibold d-block transition">03</span>
                        <h3 class="fw-semibold"><a href="javaScript:void(0)"
                                class="text-title link-hover-primary transition">{{ $coreValuesContent ? $coreValuesContent->getValueTitle(3) : 'Lorem, ipsum dolor sit' }}</a></h3>
                        <img src="{{ $coreValuesContent && $coreValuesContent->getValueIcon(3) ? (str_starts_with($coreValuesContent->getValueIcon(3), '/') ? asset($coreValuesContent->getValueIcon(3)) : asset('storage/' . $coreValuesContent->getValueIcon(3))) : asset('/frontend/assets/img/services/service-icon-3.png') }}" alt="Icon" class="service-icon d-block">
                        <div class="service-para d-flex flex-wrap align-items-center justify-content-between"
                            >
                            <p class="mb-0">{{ $coreValuesContent ? $coreValuesContent->getValueDescription(3) : 'Lorem, ipsum dolor sit amet consectetur adipisicing elit.' }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-4 col-md-6" data-cue="slideInUp"  data-show="true"
                    style="animation-name: slideInUp; animation-duration: 600ms; animation-timing-function: ease; animation-delay: 540ms; animation-direction: normal; animation-fill-mode: both;">
                    <div class="service-card style-one bg-white round-10 mb-30 transition" >
                        <span class="service-counter fw-semibold d-block transition">04</span>
                        <h3 class="fw-semibold"><a href="javaScript:void(0)"
                                class="text-title link-hover-primary transition">{{ $coreValuesContent ? $coreValuesContent->getValueTitle(4) : 'Deck Renovation' }}</a></h3>
                        <img src="{{ $coreValuesContent && $coreValuesContent->getValueIcon(4) ? (str_starts_with($coreValuesContent->getValueIcon(4), '/') ? asset($coreValuesContent->getValueIcon(4)) : asset('storage/' . $coreValuesContent->getValueIcon(4))) : asset('/frontend/assets/img/services/service-icon-4.png') }}" alt="Icon" class="service-icon d-block">
                        <div class="service-para d-flex flex-wrap align-items-center justify-content-between"
                            >
                            <p class="mb-0">{{ $coreValuesContent ? $coreValuesContent->getValueDescription(4) : 'Lorem, ipsum dolor sit amet consectetur adipisicing elit.' }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
