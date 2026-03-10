@extends('frontend.layouts.app')
@props([
    'pageTitle' => __('common.career_detail'),
    'hidden' => true,
    'headerClass' => 'style-four',
    'logo' => '/frontend/assets/img/logo.png',
])
@section('content')
    <x-common.breadcrumb breadcrumbTitle="{{ __('common.career_detail') }}" />

    <!-- Career Single Start -->
    <div class="container ptb-120">
        <div class="row">
            <div class="col-xl-8 pe-xxl-4">
                <div class="job-desc">
                    @if($career->image)
                        <div class="single-img round-10 position-relative">
                            <img src="{{ $career->image }}" alt="{{ $career->title }}" class="round-10">
                            @if($career->salary_display)
                                <div class="job-salary fs-15 text-title position-absolute end-0">{{ __('common.salary') }}: <span
                                        class="fw-bold">{{ $career->salary_display }}</span></div>
                            @endif
                        </div>
                    @endif

                    <div class="single-job-title position-relative z-1 bg-white round-10">
                        <h1 class="fs-24 fw-bold text-title">{{ $career->title }}</h1>
                        <ul class="job-metainfo list-unstyled">
                            @if($career->location)
                                <li class="position-relative">
                                    <img src="/frontend/assets/img/icons/pin-orange-2.svg" alt="Icon">
                                    <span class="fw-medium text-title me-1">{{ __('common.location') }}:</span>{{ $career->location }}
                                </li>
                            @endif
                            <li class="position-relative">
                                <img src="/frontend/assets/img/icons/bag-2.svg" alt="Icon">
                                <span class="fw-medium text-title me-1">{{ __('common.type') }}:</span> {{ $career->job_type_label }}
                            </li>
                            @if($career->experience_required)
                                <li class="position-relative">
                                    <img src="/frontend/assets/img/icons/user-2.svg" alt="Icon">
                                    <span class="fw-medium text-title me-1">{{ __('common.experience') }}:</span>{{ $career->experience_required }}
                                </li>
                            @endif
                        </ul>
                    </div>

                    @if($career->description)
                        <div class="single-para">
                            <h6 class="fs-20 fw-bold">{{ __('common.job_description') }}</h6>
                            <p>{{ $career->description }}</p>
                        </div>
                    @endif

                    @if($career->responsibilities && is_array($career->responsibilities) && count($career->responsibilities) > 0)
                        <div class="single-para">
                            <h6 class="fs-20 fw-bold mb-15">{{ __('common.responsibilities') }}:</h6>
                            <ul class="feature-list style-two list-unstyled mb-0">
                                @foreach($career->responsibilities as $responsibility)
                                    <li class="position-relative">{{ $responsibility }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    @if($career->qualifications && is_array($career->qualifications) && count($career->qualifications) > 0)
                        <div class="single-para">
                            <h6 class="fs-20 fw-bold mb-15">{{ __('common.qualifications') }}:</h6>
                            <ul class="feature-list style-two list-unstyled mb-0">
                                @foreach($career->qualifications as $qualification)
                                    <li class="position-relative">{{ $qualification }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    @if($career->benefits && is_array($career->benefits) && count($career->benefits) > 0)
                        <div class="single-para">
                            <h6 class="fs-20 fw-bold mb-15">{{ __('common.what_we_offer') }}:</h6>
                            <ul class="feature-list style-two list-unstyled mb-30">
                                @foreach($career->benefits as $benefit)
                                    <li class="position-relative">{{ $benefit }}</li>
                                @endforeach
                            </ul>

                            @if($career->application_email || $career->application_url)
                                @if($career->application_url)
                                    <a href="{{ $career->application_url }}" target="_blank" class="btn style-one d-inline-flex flex-wrap align-items-center p-0">
                                        <span class="btn-text d-inline-block fw-semibold position-relative transition">{{ __('common.apply_for_this_job') }}</span>
                                        <span class="btn-icon position-relative d-flex flex-column align-items-center justify-content-center rounded-circle transition">
                                            <i class="ri-arrow-right-up-line"></i>
                                        </span>
                                    </a>
                                @elseif($career->application_email)
                                    <a href="mailto:{{ $career->application_email }}" class="btn style-one d-inline-flex flex-wrap align-items-center p-0">
                                        <span class="btn-text d-inline-block fw-semibold position-relative transition">{{ __('common.apply_for_this_job') }}</span>
                                        <span class="btn-icon position-relative d-flex flex-column align-items-center justify-content-center rounded-circle transition">
                                            <i class="ri-arrow-right-up-line"></i>
                                        </span>
                                    </a>
                                @endif
                            @endif
                        </div>
                    @endif
                </div>
            </div>

            <div class="col-xl-4 ps-xxl-5">
                <div class="sidebar me-xxl-3 mt-lg-50">
                    <div class="sidebar-widget bg-gray round-10 p-0">
                        <ul class="job-brief list-unstyled">
                            @if($career->application_deadline)
                                <li>
                                    <span class="text-title fw-semibold d-block mb-1 lh-1">{{ __('common.deadline_for_application') }}</span>
                                    {{ $career->application_deadline->format('M d, Y') }}
                                    @if(!$career->is_open)
                                        <span class="badge bg-danger ms-2">{{ __('admin.careers.expired') }}</span>
                                    @endif
                                </li>
                            @endif

                            @if($career->salary_min || $career->salary_max)
                                <li>
                                    <span class="text-title fw-semibold d-block mb-1 lh-1">{{ __('common.salary_range') }}</span>
                                    {{ strtoupper($career->salary_period) }} -
                                    {{ number_format($career->salary_min, 0, ',', '.') }}
                                    @if($career->salary_max)
                                        - {{ number_format($career->salary_max, 0, ',', '.') }}
                                    @endif
                                    {{ $career->salary_currency }}
                                </li>
                            @endif

                            @if($career->positions_available)
                                <li>
                                    <span class="text-title fw-semibold d-block mb-1 lh-1">{{ __('common.positions_available') }}</span>
                                    {{ $career->positions_available }} {{ $career->positions_available > 1 ? __('common.positions') : __('common.position') }}
                                </li>
                            @endif

                            @if($career->department)
                                <li>
                                    <span class="text-title fw-semibold d-block mb-1 lh-1">{{ __('common.department') }}</span>
                                    {{ $career->department }}
                                </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Career Single End -->
@endsection
