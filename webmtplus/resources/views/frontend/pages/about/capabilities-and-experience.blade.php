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
                    Geniune <span class="fw-black">Partner In Every Aspect</span> Of Development</h2>
            </div>
        </div>
        <div class="row justify-content-center" >
            <div class="col-xl-3 col-lg-4 col-md-6" data-cue="slideInUp"  data-show="true"
                style="animation-name: slideInUp; animation-duration: 600ms; animation-timing-function: ease; animation-delay: 0ms; animation-direction: normal; animation-fill-mode: both;">
                <div class="feature-card style-one mb-30" >
                    <img src="/frontend/assets/img/features/feature-1.png" alt="Icon">
                    <h3 class="fs-24 fw-semibold">Project Management</h3>
                    <p class="pe-xxl-4 pe-1 mb-0">We handle everything from permits to final walkthrough communication every
                        step of the way</p>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 ps-xxl-5" data-cue="slideInUp"  data-show="true"
                style="animation-name: slideInUp; animation-duration: 600ms; animation-timing-function: ease; animation-delay: 180ms; animation-direction: normal; animation-fill-mode: both;">
                <div class="feature-card style-one mb-30" >
                    <img src="/frontend/assets/img/features/feature-2.png" alt="Icon">
                    <h3 class="fs-24 fw-semibold">Skilled Team</h3>
                    <p class="pe-xxl-4 pe-1 mb-0">Experienced professionals committed to precision and safety goal is zero
                        incidents</p>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 ps-xxl-5" data-cue="slideInUp"  data-show="true"
                style="animation-name: slideInUp; animation-duration: 600ms; animation-timing-function: ease; animation-delay: 360ms; animation-direction: normal; animation-fill-mode: both;">
                <div class="feature-card style-one mb-30" >
                    <img src="/frontend/assets/img/features/feature-3.png" alt="Icon">
                    <h3 class="fs-24 fw-semibold">Premium Materials</h3>
                    <p class="pe-xxl-4 pe-1 mb-0">Only top-grade materials used for lasting strength and styleOur goal is
                        zero incidents</p>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 ps-xxl-5" data-cue="slideInUp"  data-show="true"
                style="animation-name: slideInUp; animation-duration: 600ms; animation-timing-function: ease; animation-delay: 540ms; animation-direction: normal; animation-fill-mode: both;">
                <div class="feature-card style-one mb-30" >
                    <img src="/frontend/assets/img/features/feature-4.png" alt="Icon">
                    <h3 class="fs-24 fw-semibold">Custom Home Builds</h3>
                    <p class="pe-xxl-4 pe-1 mb-0">Tailored designs built from the ground match your vision Reliable
                        timelines with clear</p>
                </div>
            </div>
        </div>
    </div>
    <div class="wh-area style-three bg-optional ptb-120 round-20" >
        <div class="container" >
            <div class="row align-items-center" >
                <div class="col-lg-6 pe-xxl-5 mb-md-30" >
                    <div class="wh-img-wrap position-relative pe-xxl-4" data-cue="slideInUp"
                        data-show="true"
                        style="animation-name: slideInUp; animation-duration: 600ms; animation-timing-function: ease; animation-delay: 0ms; animation-direction: normal; animation-fill-mode: both;">
                        <img src="/frontend/assets/img/about/wh-img-2.jpg" alt="Image" class="wh-img round-10">
                        <img src="/frontend/assets/img/about/wh-thumb-2.jpg" alt="Image"
                            class="wh-thumb move-right round-10 position-absolute start-0 bottom-0"
                            style="translate: none; rotate: none; scale: none; transform: translate(70%, 0%);">
                    </div>
                </div>
                <div class="col-lg-6" >
                    <div class="wh-content ps-xxl-2" >
                        <h2 class="section-title style-one fw-normal text-white" data-cue="slideInUp" data-delay="400"
                            data-show="true"
                            style="animation-name: slideInUp; animation-duration: 600ms; animation-timing-function: ease; animation-delay: 400ms; animation-direction: normal; animation-fill-mode: both;">
                            Personalized <span class="fw-black">Building Experience Tailored</span> to Your Vision</h2>
                        <p class="text-alto mb-28" data-cue="slideInUp" data-delay="400" data-show="true"
                            style="animation-name: slideInUp; animation-duration: 600ms; animation-timing-function: ease; animation-delay: 400ms; animation-direction: normal; animation-fill-mode: both;">
                            Renius means partnering with team that values customer satisfaction above all else. We bring
                            years of experience and a proven</p>
                        <div class="progressbar-wrap" >
                            <div class="progress-item" >
                                <div class="progress-title d-flex flex-wrap align-items-center justify-content-between"
                                    >
                                    <h3 class="fs-16 fw-semibold text-white mb-0">Apartment Interior Design</h3>
                                    <span class="fs-16 fw-semibold text-white">70%</span>
                                </div>
                                <div class="progress" >
                                    <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0"
                                        aria-valuemax="100" style="max-width: 70%" >
                                    </div>
                                </div>
                            </div>
                            <div class="progress-item" >
                                <div class="progress-title d-flex flex-wrap align-items-center justify-content-between"
                                    >
                                    <h3 class="fs-16 fw-semibold text-white mb-0">Architecture Design</h3>
                                    <span class="fs-16 fw-semibold text-white">80%</span>
                                </div>
                                <div class="progress" >
                                    <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0"
                                        aria-valuemax="100" style="max-width: 80%" >
                                    </div>
                                </div>
                            </div>
                            <div class="progress-item" >
                                <div class="progress-title d-flex flex-wrap align-items-center justify-content-between"
                                    >
                                    <h3 class="fs-16 fw-semibold text-white mb-0">Construction Build</h3>
                                    <span class="fs-16 fw-semibold text-white">90%</span>
                                </div>
                                <div class="progress" >
                                    <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0"
                                        aria-valuemax="100" style="max-width: 90%" >
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
