@extends('frontend.layouts.app')
@props([
    'pageTitle' => $member->name,
    'hidden' => true,
    'headerClass' => 'style-four',
    'logo' => '/frontend/assets/img/logo.png',
])
@section('content')
    <x-common.breadcrumb breadcrumbTitle="{{ $member->name }}" />

    <!-- Team Member Detail Start -->
    <div class="about-area style-one position-relative z-1 ptb-120">
        <div class="container">
            <div class="row align-items-center">
                <!-- Member Photo -->
                <div class="col-xxl-5 col-lg-5">
                    <div class="about-img-wrap position-relative z-1 mb-md-30">
                        <img src="{{ $member->photo }}" alt="{{ $member->name }}"
                             class="d-block tilt-img mx-auto object-fit-cover rounded-3">
                        <img src="/frontend/assets/img/about/shape-1.png" alt="Shape"
                            class="about-shape position-absolute top-0 z-n1">
                    </div>
                </div>

                <!-- Member Info -->
                <div class="col-xxl-6 offset-xxl-1 col-lg-7 ps-xxl-3 ps-xl-4">
                    <div class="about-content position-relative">
                        @if($member->is_featured)
                            <span class="badge bg-warning text-dark mb-3 fs-14">
                                <i class="ri-vip-crown-line"></i> CEO
                            </span>
                        @endif

                        <h5 class="style-two fs-16 ls-1 font-optional fw-bold text_primary mb-20">
                            {{ $member->getPosition() }}
                        </h5>

                        <h2 class="section-title style-one fw-normal text-title mb-3">{{ $member->name }}</h2>

                        @if($member->getDetailedPosition())
                            <p class="fs-18 text-muted mb-3">{{ $member->getDetailedPosition() }}</p>
                        @endif

                        @if($member->experience_years)
                            <div class="d-flex align-items-center mb-3">
                                <i class="ri-time-line fs-20 text_primary me-2"></i>
                                <span class="fw-semibold">{{ $member->experience_years }} {{ __('common.years_experience') }}</span>
                            </div>
                        @endif

                        @if($member->getLocation())
                            <div class="d-flex align-items-center mb-3">
                                <i class="ri-map-pin-line fs-20 text_primary me-2"></i>
                                <span>{{ $member->getLocation() }}</span>
                            </div>
                        @endif

                        @if($member->getBio())
                            <p class="mb-28">{{ $member->getBio() }}</p>
                        @endif

                        <!-- Experience List -->
                        @if($member->getExperienceList())
                            <div class="row gx-xxl-45">
                                @foreach($member->getExperienceList() as $experience)
                                    <div class="col-sm-6 mb-2">
                                        <div class="feature-item position-relative">
                                            <img src="/frontend/assets/img/about/feature-icon-{{ ($loop->index % 4) + 1 }}.png"
                                                 alt="Icon" class="feature-icon">
                                            <h3 class="fs-16 fw-semibold mt-2">{{ $experience }}</h3>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @endif

                        <!-- Social Links -->
                        <ul class="social-profile style-two list-unstyled mb-0 mt-4">
                            @if($member->facebook_url)
                                <li><a href="{{ $member->facebook_url }}" target="_blank"
                                        class="d-flex flex-column align-items-center justify-content-center rounded-circle">
                                        <i class="ri-facebook-fill"></i></a>
                                </li>
                            @endif
                            @if($member->twitter_url)
                                <li><a href="{{ $member->twitter_url }}" target="_blank"
                                        class="d-flex flex-column align-items-center justify-content-center rounded-circle">
                                        <i class="ri-twitter-x-line"></i></a>
                                </li>
                            @endif
                            @if($member->linkedin_url)
                                <li><a href="{{ $member->linkedin_url }}" target="_blank"
                                        class="d-flex flex-column align-items-center justify-content-center rounded-circle">
                                        <i class="ri-linkedin-fill"></i></a>
                                </li>
                            @endif
                            @if($member->instagram_url)
                                <li><a href="{{ $member->instagram_url }}" target="_blank"
                                        class="d-flex flex-column align-items-center justify-content-center rounded-circle">
                                        <i class="ri-instagram-line"></i></a>
                                </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team Member Detail End -->

    <!-- Detailed Bio & Info Section -->
    @if($member->getDetailedBio() || $member->getSpecialties() || $member->getFieldOfActivity())
        <div class="container pb-120">
            <div class="row">
                <div class="col-xl-8 pe-xxl-4">
                    <!-- Detailed Biography -->
                    @if($member->getDetailedBio())
                        <div class="single-para mb-4">
                            <h6 class="fs-20 fw-bold mb-3">{{ __('common.about') }} {{ $member->name }}</h6>
                            <p>{{ $member->getDetailedBio() }}</p>
                        </div>
                    @endif

                    <!-- Specialties -->
                    @if($member->getSpecialties())
                        <div class="single-para mb-4">
                            <h6 class="fs-20 fw-bold mb-15">{{ __('common.specialties') }}</h6>
                            <ul class="feature-list style-two list-unstyled mb-0">
                                @foreach($member->getSpecialties() as $specialty)
                                    <li class="position-relative">{{ $specialty }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <!-- Field of Activity -->
                    @if($member->getFieldOfActivity())
                        <div class="single-para mb-4">
                            <h6 class="fs-20 fw-bold mb-3">{{ __('common.field_of_activity') }}</h6>
                            <p>{{ $member->getFieldOfActivity() }}</p>
                        </div>
                    @endif
                </div>

                <!-- Contact Info Sidebar -->
                <div class="col-xl-4 ps-xxl-4">
                    <div class="job-info bg-light round-10 p-4">
                        <h6 class="fs-18 fw-bold mb-3">{{ __('common.contact_information') }}</h6>

                        @if($member->phone)
                            <div class="mb-3">
                                <div class="d-flex align-items-start">
                                    <i class="ri-phone-line fs-20 text_primary me-2 mt-1"></i>
                                    <div>
                                        <span class="d-block fw-semibold text-title mb-1">{{ __('common.phone') }}</span>
                                        <a href="tel:{{ $member->phone }}" class="text-body">{{ $member->phone }}</a>
                                    </div>
                                </div>
                            </div>
                        @endif

                        @if($member->email)
                            <div class="mb-3">
                                <div class="d-flex align-items-start">
                                    <i class="ri-mail-line fs-20 text_primary me-2 mt-1"></i>
                                    <div>
                                        <span class="d-block fw-semibold text-title mb-1">{{ __('common.email') }}</span>
                                        <a href="mailto:{{ $member->email }}" class="text-body text-break">{{ $member->email }}</a>
                                    </div>
                                </div>
                            </div>
                        @endif

                        @if($member->fax)
                            <div class="mb-3">
                                <div class="d-flex align-items-start">
                                    <i class="ri-printer-line fs-20 text_primary me-2 mt-1"></i>
                                    <div>
                                        <span class="d-block fw-semibold text-title mb-1">{{ __('common.fax') }}</span>
                                        <span class="text-body">{{ $member->fax }}</span>
                                    </div>
                                </div>
                            </div>
                        @endif

                        @if($member->address)
                            <div class="mb-0">
                                <div class="d-flex align-items-start">
                                    <i class="ri-map-pin-line fs-20 text_primary me-2 mt-1"></i>
                                    <div>
                                        <span class="d-block fw-semibold text-title mb-1">{{ __('common.address') }}</span>
                                        <span class="text-body">{{ $member->address }}</span>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>

                    <!-- Back to Team Button -->
                    <div class="mt-4">
                        <a href="{{ route('team') }}" class="btn btn-primary w-100">
                            <i class="ri-arrow-left-line me-2"></i>{{ __('common.back_to_team') }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    @endif
    <!-- Detailed Bio & Info Section End -->
@endsection
