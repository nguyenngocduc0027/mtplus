@extends('frontend.layouts.app')
@props([
    'pageTitle' => $service->getTitle(),
    'hidden' => true,
    'headerClass' => 'style-four',
    'logo' => '/frontend/assets/img/logo.png',
])
@section('content')
    <x-common.breadcrumb breadcrumbTitle="{{ $service->getTitle() }}" />

    <!-- Service Detail Section Start -->
    <div class="container ptb-120">
        <div class="row">
            <div class="col-12">
                <div class="service-detail-wrapper position-relative z-1">
                    <div class="row">
                        <div class="col-xl-10 offset-xl-1">
                            @if($service->icon_path)
                                <div class="service-icon-wrapper text-center mb-4">
                                    <img src="{{ asset($service->icon_path) }}"
                                         alt="{{ $service->getTitle() }}"
                                         class="service-detail-icon"
                                         style="max-width: 150px; height: auto;">
                                </div>
                            @endif

                            <div class="service-desc">
                                {!! $service->getContent() !!}
                            </div>

                            @if($service->getShortDescription())
                                <div class="service-summary bg-light p-4 rounded-3 mt-5">
                                    <h5 class="mb-3">{{ __('common.summary') }}</h5>
                                    <p class="mb-0">{{ $service->getShortDescription() }}</p>
                                </div>
                            @endif

                            <!-- Back Button -->
                            <div class="text-center mt-5">
                                <a href="{{ route('services.index') }}" class="btn style-one d-inline-flex flex-wrap align-items-center p-0">
                                    <span class="btn-text d-inline-block fw-semibold position-relative transition">
                                        {{ __('common.back_to_services') }}
                                    </span>
                                    <span class="btn-icon position-relative d-flex flex-column align-items-center justify-content-center rounded-circle transition">
                                        <img src="{{ asset('frontend/assets/img/icons/up-right-arrow-black.svg') }}" alt="Icon">
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service Detail Section End -->

    @push('styles')
    <style>
        .service-detail-icon {
            filter: drop-shadow(0 4px 8px rgba(0, 0, 0, 0.1));
        }

        .service-desc h1,
        .service-desc h2,
        .service-desc h3,
        .service-desc h4,
        .service-desc h5,
        .service-desc h6 {
            margin-top: 2rem;
            margin-bottom: 1rem;
        }

        .service-desc p {
            margin-bottom: 1rem;
            line-height: 1.8;
        }

        .service-desc ul {
            margin-bottom: 1.5rem;
        }

        .service-desc img {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
            margin: 2rem 0;
        }

        .service-summary {
            border-left: 4px solid var(--bs-primary);
        }
    </style>
    @endpush
@endsection
