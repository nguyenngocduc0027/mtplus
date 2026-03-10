@extends('frontend.layouts.app')
@props([
    'pageTitle' => __('common.detail_project'),
    'hidden' => true,
    'headerClass' => 'style-four',
    'logo' => '/frontend/assets/img/logo.png',
])
@section('content')
    <x-common.breadcrumb breadcrumbTitle="{{ __('common.detail_project') }}" />
    <!-- Project Single Section Start -->
    <div class="container ptb-120">
        <div class="row">
            <div class="col-12">
                <div class="project-desc position-relative z-1 pt-90">
                    <div class="row">
                        <div class="col-xl-10 offset-xl-1">
                            <h1 class="section-title style-one text-title font-secondary fw-bold mb-30">
                                {{ $project->title }}
                            </h1>
                            <ul class="single-project-metainfo d-flex flex-wrap justify-content-md-between list-unstyled mb-45">
                                <li>
                                    <span class="fw-medium d-block">{{ __('Status') }}</span>
                                    <span class="text-title fw-semibold d-block">{{ $project->status_label }}</span>
                                </li>
                                @if($project->project_type)
                                    <li>
                                        <span class="fw-medium d-block">{{ __('Project Type') }}</span>
                                        <span class="text-title fw-semibold d-block">{{ $project->project_type }}</span>
                                    </li>
                                @endif
                                @if($project->commencement_date)
                                    <li>
                                        <span class="fw-medium d-block">{{ __('Commencement Date') }}</span>
                                        <span class="text-title fw-semibold d-block">{{ $project->commencement_date->format('d F, Y') }}</span>
                                    </li>
                                @endif
                            </ul>
                            <div class="service-desc">
                                @if($project->main_image)
                                    <div class="single-img round-10 mb-35">
                                        <img src="{{ $project->main_image }}" alt="{{ $project->title }}" class="round-10">
                                    </div>
                                @endif
                                <div class="single-para">
                                    @if($project->description)
                                        <h6>{{ __('Project Description') }}</h6>
                                        {!! $project->description !!}
                                    @endif

                                    @if($project->features && count($project->features) > 0)
                                        <ul class="feature-item-list style-two d-flex flex-wrap list-unstyled pe-xxl-5 me-xxl-5">
                                            @foreach($project->features as $feature)
                                                <li class="position-relative text-title fw-medium">{{ $feature }}</li>
                                            @endforeach
                                        </ul>
                                    @endif

                                    @if($project->gallery_images && count($project->gallery_images) > 0)
                                        <div class="row g-3 mt-4">
                                            @foreach($project->gallery_images as $image)
                                                <div class="col-md-6">
                                                    <img src="{{ $image }}" alt="Gallery Image" class="img-fluid round-10">
                                                </div>
                                            @endforeach
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Project Single Section End -->
@endsection
