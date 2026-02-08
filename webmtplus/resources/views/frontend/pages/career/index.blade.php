@extends('frontend.layouts.app')
@props([
    'pageTitle' => __('common.career'),
    'hidden' => true,
    'headerClass' => 'style-four',
    'logo' => '/frontend/assets/img/logo.png',
])
@section('content')
    <x-common.breadcrumb breadcrumbTitle="{{ __('common.career') }}" />
    <!-- Career Section Start -->
    <div class="container ptb-120">
        <div class="row justify-content-center">
            @forelse ($careers as $career)
                <x-ui.item-career
                    :title="$career->title"
                    :location="$career->location ?? ''"
                    :type="$career->job_type_label"
                    :experience="$career->experience_required ?? ''"
                    :salary="$career->salary_display ?? ''"
                    :image="$career->image"
                    :linkCareer="route('detail-career', $career->slug)"
                />
            @empty
                <div class="col-12 text-center py-5">
                    <p class="text-muted">{{ __('common.no_careers_available') }}</p>
                </div>
            @endforelse
        </div>

        @if($careers->hasPages())
            <div class="d-flex justify-content-center mt-5">
                {{ $careers->links() }}
            </div>
        @endif
    </div>
    <!-- Career Section End -->
@endsection
