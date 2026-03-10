@extends('frontend.layouts.app')
@props([
    'pageTitle' => __('common.mission'),
    'hidden' => true,
    'headerClass' => 'style-four',
    'logo' => '/frontend/assets/img/logo.png',
])
@section('content')
    <x-common.breadcrumb breadcrumbTitle="{{ __('common.mission') }}" />
    <div class="pt-5">
        <x-ui.slide-text sideText1="MTPlus..JSC" sideText2="Metasoft..Ltd" sideText3="Metasoft..Ltd" sideText4="MTPlus..JSC" />
    </div>
    @include('frontend.sections.about')
    <div class="about-area style-two overflow-hidden bg-optional round-30">
        <div class="container-fluid style-one">
            <div class="row">
                <div class="ps-0 col-xxl-7 col-lg-6 pe-xxl-5">
                    <div class="about-bg bg-f" @if($missionContent && $missionContent->background_image_path) style="background-image: url('{{ asset($missionContent->background_image_path) }}');" @endif></div>
                </div>
                <div class="col-xxl-5 col-lg-6 ps-xxl-0 pe-xxl-1">
                    <div class="about-content">
                        <h6 class="section-subtitle style-two fs-13 ls-1 font-optional fw-semibold position-relative text_primary mb-16"
                            data-cue="slideInUp" data-show="true"
                            style="animation-name: slideInUp; animation-duration: 600ms; animation-timing-function: ease; animation-delay: 0ms; animation-direction: normal; animation-fill-mode: both;">
                            <img src="/frontend/assets/img/icons/home-icon.svg" alt="Icon">{{ __('common.mission') }}
                        </h6>
                        <h2 class="section-title style-one fw-normal text-white mb-20" data-cue="slideInUp" data-delay="300"
                            data-show="true"
                            style="animation-name: slideInUp; animation-duration: 600ms; animation-timing-function: ease; animation-delay: 300ms; animation-direction: normal; animation-fill-mode: both;">
                            {{ $missionContent ? $missionContent->getTitle() : 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.' }}</h2>
                        <p class="text-offwhite line-10" data-cue="slideInUp" data-delay="400" data-show="true"
                            style="animation-name: slideInUp; animation-duration: 600ms; animation-timing-function: ease; animation-delay: 400ms; animation-direction: normal; animation-fill-mode: both;">
                            {{ $missionContent ? $missionContent->getDescription() : 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Harum pariatur dicta voluptates labore, autem laborum, nesciunt id expedita ipsum libero perspiciatis omnis possimus praesentium? Quas necessitatibus reprehenderit neque ullam iure.' }}</p>
                        <ul class="feature-list style-one list-unstyled d-flex flex-wrap" data-cue="slideInUp"
                            data-delay="500" data-show="true"
                            style="animation-name: slideInUp; animation-duration: 600ms; animation-timing-function: ease; animation-delay: 500ms; animation-direction: normal; animation-fill-mode: both;">
                            @if($missionContent && count($missionContent->getFeatures()) > 0)
                                @foreach($missionContent->getFeatures() as $feature)
                                    <li class="position-relative fw-medium text-white"><span
                                            class="position-absolute start-0 d-flex flex-column align-items-center justify-content-center rounded-circle text-white fw-semibold"><img
                                                src="/frontend/assets/img/icons/check.svg" alt="Icon"></span>{{ $feature }}</li>
                                @endforeach
                            @else
                                <li class="position-relative fw-medium text-white"><span
                                        class="position-absolute start-0 d-flex flex-column align-items-center justify-content-center rounded-circle text-white fw-semibold"><img
                                            src="/frontend/assets/img/icons/check.svg" alt="Icon"></span>Licensed, Insured, And
                                    Safety-Focused</li>
                                <li class="position-relative fw-medium text-white"><span
                                        class="position-absolute start-0 d-flex flex-column align-items-center justify-content-center rounded-circle text-white fw-semibold"><img
                                            src="/frontend/assets/img/icons/check.svg" alt="Icon"></span> 10 Years Of Industry
                                    Experience</li>
                                <li class="position-relative fw-medium text-white"><span
                                        class="position-absolute start-0 d-flex flex-column align-items-center justify-content-center rounded-circle text-white fw-semibold"><img
                                            src="/frontend/assets/img/icons/check.svg" alt="Icon"></span>Client-Centered Approach</li>
                                <li class="position-relative fw-medium text-white"><span
                                        class="position-absolute start-0 d-flex flex-column align-items-center justify-content-center rounded-circle text-white fw-semibold"><img
                                            src="/frontend/assets/img/icons/check.svg" alt="Icon"></span>End-to-End Project Management
                                </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
