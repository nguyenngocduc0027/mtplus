@extends('frontend.layouts.app')
@props([
    'pageTitle' => __('common.news'),
    'hidden' => true,
    'headerClass' => 'style-four',
    'logo' => '/frontend/assets/img/logo.png',
])
@section('content')
    <x-common.breadcrumb breadcrumbTitle="{{ __('common.news') }}" />
    <!-- Blog Section Start -->
    <div class="container ptb-120">
        <div class="row">
            <div class="col-xl-8">
                <div class="row justify-content-center">
                    @forelse ($news as $item)
                        <x-ui.news-item-news
                            :image="$item->featured_image"
                            :linkNews="route('detail-news', $item->slug)"
                            :date="$item->published_at ? $item->published_at->format('d') : date('d')"
                            :month="$item->published_at ? $item->published_at->format('M') : date('M')"
                            :author="$item->author_name"
                            :linkAuthor="'javascript:void(0)'"
                            :title="$item->title"
                        />
                    @empty
                        <div class="col-12">
                            <div class="text-center py-5">
                                <i class="ri-article-line" style="font-size: 48px; color: #ccc;"></i>
                                <p class="text-muted mt-3">{{ __('common.no_news_found') }}</p>
                            </div>
                        </div>
                    @endforelse
                </div>

                <!-- Pagination -->
                @if($news->hasPages())
                    <div class="mt-4">
                        {{ $news->appends(request()->query())->links() }}
                    </div>
                @endif
            </div>
            <x-ui.sidebar-news :categories="$categories" :tags="$tags" :featuredNews="$featuredNews" />
        </div>
    </div>
    <!-- Blog Details End -->
@endsection
