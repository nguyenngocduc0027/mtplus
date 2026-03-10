@extends('frontend.layouts.app')
@props([
    'pageTitle' => __('common.project'),
    'hidden' => true,
    'headerClass' => 'style-four',
    'logo' => '/frontend/assets/img/logo.png',
])
@section('content')
    <x-common.breadcrumb breadcrumbTitle="{{ __('common.project') }}" />
    <!-- Project Section Start -->
    <div class="container ptb-120">
        <div class="row justify-content-center">
            @forelse ($projects as $project)
                <x-ui.item-project
                    :nameProject="$project->title"
                    :counter="$project->project_number"
                    :status="$project->status_label"
                    :linkProject="route('detail-project', $project->slug)"
                    :imageProject="$project->main_image ?? '/frontend/assets/img/project/project-placeholder.jpg'" />
            @empty
                <div class="col-12 text-center py-5">
                    <p class="text-muted">{{ __('Không có dự án nào') }}</p>
                </div>
            @endforelse
        </div>

        @if($projects->hasPages())
            <div class="row mt-5">
                <div class="col-12">
                    {{ $projects->links() }}
                </div>
            </div>
        @endif
    </div>

    <!-- Project Section End -->
@endsection
