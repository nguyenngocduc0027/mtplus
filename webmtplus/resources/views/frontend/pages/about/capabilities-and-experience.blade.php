@extends('frontend.layouts.app')
@props([
    'pageTitle' => __('common.capabilities_and_experience'),
    'hidden' => true,
    'headerClass' => 'style-four',
    'logo' => '/frontend/assets/img/logo.png',
])
@section('content')
    <x-common.breadcrumb breadcrumbTitle="{{ __('common.capabilities_and_experience') }}" />
    <div class="pt-5">
        <x-ui.slide-text sideText1="MTPlus..JSC" sideText2="Metasoft..Ltd" sideText3="Metasoft..Ltd" sideText4="MTPlus..JSC" />
    </div>
    @include('frontend.sections.about')
    <div class="container pt-120 pb-90" >
        <div class="row" >
            <div class="col-xl-6" >
                <h2 class="section-title style-one fw-normal text-title mb-40" data-cue="slideInUp" data-delay="300"
                    data-show="true"
                    style="animation-name: slideInUp; animation-duration: 600ms; animation-timing-function: ease; animation-delay: 300ms; animation-direction: normal; animation-fill-mode: both;">
                    {!! $capabilitiesContent ? $capabilitiesContent->getSection1Title() : 'Genuine Partner In Every Aspect Of Development' !!}</h2>
            </div>
        </div>
        <div class="row justify-content-center" >
            @for ($i = 1; $i <= 4; $i++)
                @php
                    $delay = ($i - 1) * 180;
                    $paddingClass = $i > 1 ? 'ps-xxl-5' : '';
                @endphp
                <div class="col-xl-3 col-lg-4 col-md-6 {{ $paddingClass }}" data-cue="slideInUp"  data-show="true"
                    style="animation-name: slideInUp; animation-duration: 600ms; animation-timing-function: ease; animation-delay: {{ $delay }}ms; animation-direction: normal; animation-fill-mode: both;">
                    <div class="feature-card style-one mb-30" >
                        @if($capabilitiesContent && $capabilitiesContent->getFeatureIcon($i))
                            <img src="{{ asset($capabilitiesContent->getFeatureIcon($i)) }}" alt="Icon"
                                style="width: 80px; height: 80px; object-fit: contain;">
                        @endif
                        <h3 class="fs-24 fw-semibold">{{ $capabilitiesContent ? $capabilitiesContent->getFeatureTitle($i) : '' }}</h3>
                        <p class="pe-xxl-4 pe-1 mb-0">{{ $capabilitiesContent ? $capabilitiesContent->getFeatureDescription($i) : '' }}</p>
                    </div>
                </div>
            @endfor
        </div>
    </div>
    <div class="wh-area style-three bg-optional ptb-120 round-20" >
        <div class="container" >
            <div class="row align-items-center" >
                <div class="col-lg-6 pe-xxl-5 mb-md-30" >
                    <div class="wh-img-wrap position-relative pe-xxl-4" data-cue="slideInUp"
                        data-show="true"
                        style="animation-name: slideInUp; animation-duration: 600ms; animation-timing-function: ease; animation-delay: 0ms; animation-direction: normal; animation-fill-mode: both;">
                        @if($capabilitiesContent && $capabilitiesContent->main_image_path)
                            <img src="{{ asset($capabilitiesContent->main_image_path) }}" alt="Image"
                                class="wh-img round-10 w-100"
                                style="height: 500px; object-fit: cover; object-position: center;">
                        @endif
                        @if($capabilitiesContent && $capabilitiesContent->thumbnail_image_path)
                            <img src="{{ asset($capabilitiesContent->thumbnail_image_path) }}" alt="Image"
                                class="wh-thumb move-right round-10 position-absolute start-0 bottom-0"
                                style="translate: none; rotate: none; scale: none; transform: translate(70%, 0%); width: 250px; height: 200px; object-fit: cover; object-position: center;">
                        @endif
                    </div>
                </div>
                <div class="col-lg-6" >
                    <div class="wh-content ps-xxl-2" >
                        <h2 class="section-title style-one fw-normal text-white" data-cue="slideInUp" data-delay="400"
                            data-show="true"
                            style="animation-name: slideInUp; animation-duration: 600ms; animation-timing-function: ease; animation-delay: 400ms; animation-direction: normal; animation-fill-mode: both;">
                            {!! $capabilitiesContent ? $capabilitiesContent->getSection3Title() : 'Personalized Building Experience Tailored to Your Vision' !!}</h2>
                        <p class="text-alto mb-28" data-cue="slideInUp" data-delay="400" data-show="true"
                            style="animation-name: slideInUp; animation-duration: 600ms; animation-timing-function: ease; animation-delay: 400ms; animation-direction: normal; animation-fill-mode: both;">
                            {{ $capabilitiesContent ? $capabilitiesContent->getSection3Description() : 'Renius means partnering with team that values customer satisfaction above all else. We bring years of experience and a proven' }}</p>
                        <div class="progressbar-wrap" >
                            @for ($j = 1; $j <= 3; $j++)
                                @php
                                    $percentage = $capabilitiesContent ? $capabilitiesContent->getProgressPercentage($j) : 0;
                                @endphp
                                <div class="progress-item" >
                                    <div class="progress-title d-flex flex-wrap align-items-center justify-content-between">
                                        <h3 class="fs-16 fw-semibold text-white mb-0">{{ $capabilitiesContent ? $capabilitiesContent->getProgressTitle($j) : '' }}</h3>
                                        <span class="fs-16 fw-semibold text-white">{{ $percentage }}%</span>
                                    </div>
                                    <div class="progress" >
                                        <div class="progress-bar" role="progressbar" aria-valuenow="{{ $percentage }}" aria-valuemin="0"
                                            aria-valuemax="100" style="max-width: {{ $percentage }}%" >
                                        </div>
                                    </div>
                                </div>
                            @endfor
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
