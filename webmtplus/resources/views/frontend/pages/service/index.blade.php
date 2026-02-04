@extends('frontend.layouts.app')
@props([
    'pageTitle' => __('common.service'),
    'hidden' => true,
    'headerClass' => 'style-four',
    'logo' => '/frontend/assets/img/logo.png',
])

@push('styles')
<style>
    html {
        scroll-behavior: smooth;
        scroll-padding-top: 100px;
    }
    .service-section {
        scroll-margin-top: 100px;
    }
    .service-divider {
        border-top: 2px solid #e9ecef;
        margin: 60px 0;
    }
</style>
@endpush

@section('content')
    <x-common.breadcrumb breadcrumbTitle="{{ __('common.service') }}" />

    <!-- Services Start -->
    <div class="container ptb-120">
        @if(isset($service))
            
                <div class="row service-section" id="service-{{ $service->slug }}">
                    <div class="col-xl-12 pe-xxl-4">
                        <div class="service-desc">
                            {!! $service->getContent() !!}
                        </div>
                    </div>
                </div>
            
        @else
            <div class="row">
                <div class="col-12">
                    <div class="text-center py-5">
                        <i class="ri-service-line" style="font-size: 64px; color: #ddd;"></i>
                        <p class="text-muted mt-3">
                            {{ app()->getLocale() == 'en' ? 'No services available at the moment.' : 'Hiện tại chưa có dịch vụ nào.' }}
                        </p>
                    </div>
                </div>
            </div>
        @endif
    </div>
    <!-- Services End -->
@endsection
