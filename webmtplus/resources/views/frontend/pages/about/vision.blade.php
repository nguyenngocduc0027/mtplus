@extends('frontend.layouts.app')
@props([
    'pageTitle' => __('common.vision'),
    'hidden' => true,
    'headerClass' => 'style-four',
    'logo' => '/frontend/assets/img/logo.png',
])
@section('content')
    <x-common.breadcrumb breadcrumbTitle="{{ __('common.vision') }}" />
    <div class="pt-5">
        <x-ui.slide-text sideText1="MTPlus..JSC" sideText2="Metasoft..Ltd" sideText3="Metasoft..Ltd" sideText4="MTPlus..JSC" />
    </div>
    @include('frontend.sections.about')
    <div class="feature-area style-three position-relative z-2 pt-120">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 offset-xl-2 col-md-10 offset-md-1 text-center">
                    <h6 class="section-subtitle style-two d-inline-block fs-13 ls-1 font-optional fw-semibold position-relative text_primary mb-20"
                        data-cue="slideInUp" data-show="true"
                        style="animation-name: slideInUp; animation-duration: 600ms; animation-timing-function: ease; animation-delay: 0ms; animation-direction: normal; animation-fill-mode: both;">
                        <img src="/frontend/assets/img/icons/home-icon.svg" alt="Icon">{{ __('common.vision') }}
                    </h6>
                    <h2 class="section-title style-one fw-normal text-title px-xxl-5 mb-40" data-cue="slideInUp"
                        data-delay="300" data-show="true"
                        style="animation-name: slideInUp; animation-duration: 600ms; animation-timing-function: ease; animation-delay: 300ms; animation-direction: normal; animation-fill-mode: both;">
                        {{ $visionContent ? $visionContent->getTitle() : 'Lorem ipsum dolor sit amet consectetur adipisicing elit.' }}</h2>
                </div>
            </div>
            <div class="tab-content feature-tab-content" data-cue="slideInUp" data-show="true"
                style="animation-name: slideInUp; animation-duration: 600ms; animation-timing-function: ease; animation-delay: 0ms; animation-direction: normal; animation-fill-mode: both;">
                <div class="row">
                    <div class="col-xxl-5 col-lg-6 pe-xxl-0">
                        <div class="feature-content mb-md-30">
                            <p class="mb-35 line-5">{{ $visionContent ? $visionContent->getDescription() : 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quasi perferendis repudiandae iure natus est necessitatibus minus nostrum sit libero, eum odit ad culpa voluptates, dolorum amet? Magnam expedita repudiandae assumenda. Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati, voluptatum? Ea qui quam et porro ducimus quaerat non. Et assumenda hic facilis dolorum illo voluptate? Laboriosam explicabo eveniet ipsam quam!' }}</p>
                            <ul class="feature-timeline list-unstyled mb-0 w-75 pe-xxl-5">
                                @if($visionContent)
                                    @foreach($visionContent->getTimelines() as $index => $timeline)
                                        <li class="position-relative fs-xxl-18 fw-medium text-title line-3"><span
                                                class="d-flex flex-column align-items-center justify-content-center rounded-circle text_primary bg-white fs-15 fw-semibold text_primary">{{ sprintf('%02d', $index + 1) }}</span>
                                            {{ $timeline }}</li>
                                    @endforeach
                                @else
                                    <li class="position-relative fs-xxl-18 fw-medium text-title line-3"><span
                                            class="d-flex flex-column align-items-center justify-content-center rounded-circle text_primary bg-white fs-15 fw-semibold text_primary">01</span>
                                        Lorem ipsum dolor sit, amet consectetur adipisicing elit</li>
                                    <li class="position-relative fs-xxl-18 fw-medium text-title line-3"><span
                                            class="d-flex flex-column align-items-center justify-content-center rounded-circle text_primary bg-white fs-15 fw-semibold text_primary">02</span>
                                        Lorem ipsum dolor sit, amet consectetur adipisicing elit</li>
                                    <li class="position-relative fs-xxl-18 fw-medium text-title line-3"><span
                                            class="d-flex flex-column align-items-center justify-content-center rounded-circle text_primary bg-white fs-15 fw-semibold text_primary">03</span>
                                        Lorem ipsum dolor sit, amet consectetur adipisicing elit</li>
                                    <li class="position-relative fs-xxl-18 fw-medium text-title line-3"><span
                                            class="d-flex flex-column align-items-center justify-content-center rounded-circle text_primary bg-white fs-15 fw-semibold text_primary">04</span>
                                        Lorem ipsum dolor sit, amet consectetur adipisicing elit</li>
                                @endif
                            </ul>
                        </div>
                    </div>
                    <div class="col-xxl-7 col-lg-6 ps-xxl-5">
                        <div class="feature-img-wrap position-relative z-1">
                            <img src="{{ $visionContent && $visionContent->image_path ? asset($visionContent->image_path) : '/frontend/assets/img/about/feature-img-5.jpg' }}" alt="Image" class="round-20">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
