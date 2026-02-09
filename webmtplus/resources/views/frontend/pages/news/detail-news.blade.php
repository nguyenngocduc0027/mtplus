@extends('frontend.layouts.app')
@props([
    'pageTitle' => $news->meta_title ?? $news->title,
    'hidden' => true,
    'headerClass' => 'style-four',
    'logo' => '/frontend/assets/img/logo.png',
])
@section('content')
    <x-common.breadcrumb breadcrumbTitle="{{ $news->title }}" />
    <!-- Blog Details Start -->
    <div class="container ptb-120">
        <div class="row">
            <div class="col-xl-8">
                <div class="blog-desc">
                    <!-- Featured Image -->
                   <div class="d-flex justify-content-center">
                     @if ($news->featured_image)
                        <img src="{{ $news->featured_image }}" class="img-fluid rounded mb-4" alt="{{ $news->title }}">
                    @endif
                   </div>

                    <h1 class="font-secondary mb-2">{{ $news->title }}</h1>
                    <ul class="blog-metainfo list-unstyled mb-20">
                        <li class="fs-15 d-inline-block position-relative">
                            <i class="ri-calendar-line me-1"></i>
                            {{ $news->published_at ? $news->published_at->format('d M, Y') : '' }}
                        </li>
                        <li class="fs-15 d-inline-block position-relative">
                            <i class="ri-user-line me-1"></i>
                            By <a href="javascript:void(0)">{{ $news->author_name }}</a>
                        </li>
                        @if ($news->category)
                            <li class="fs-15 d-inline-block position-relative">
                                <i class="ri-folder-line me-1"></i>
                                <a
                                    href="{{ route('news', ['category' => $news->category->slug]) }}">{{ $news->category->name }}</a>
                            </li>
                        @endif
                        <li class="fs-15 d-inline-block position-relative">
                            <i class="ri-eye-line me-1"></i>
                            {{ $news->view_count }} {{ __('common.views') }}
                        </li>
                    </ul>

                    <!-- Excerpt -->
                    @if ($news->excerpt)
                        <div class="alert alert-info mb-4">
                            <p class="mb-0">{{ $news->excerpt }}</p>
                        </div>
                    @endif

                    <!-- Content -->
                    <div class="single-para">
                        {!! $news->content !!}
                    </div>
                </div>

                <!-- Tags & Share -->
                <div class="post-metaoption bg-white mb-40 round-15">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            @if ($news->tags->count() > 0)
                                <div class="post-tag d-flex flex-wrap align-items-center mb-sm-20">
                                    <span class="text-title me-3">{{ __('common.tags') }}</span>
                                    <ul class="tag-list style-two list-unstyled mb-0">
                                        @foreach ($news->tags as $tag)
                                            <li>
                                                <a
                                                    href="{{ route('news', ['tag' => $tag->slug]) }}">{{ $tag->name }}</a>
                                                @if (!$loop->last)
                                                    ,
                                                @endif
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        </div>
                        <div class="col-md-6">
                            <div class="post-share d-flex flex-wrap align-items-center justify-content-md-end">
                                <span class="text-para fw-semibold me-2">{{ __('common.share') }}:</span>
                                <ul class="social-profile style-one list-unstyled mb-0">
                                    <li><a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(url()->current()) }}"
                                            target="_blank"
                                            class="d-flex flex-column align-items-center justify-content-center rounded-circle"><i
                                                class="ri-facebook-fill"></i></a></li>
                                    <li><a href="https://twitter.com/intent/tweet?url={{ urlencode(url()->current()) }}&text={{ urlencode($news->title) }}"
                                            target="_blank"
                                            class="d-flex flex-column align-items-center justify-content-center rounded-circle"><i
                                                class="ri-twitter-x-line"></i></a></li>
                                    <li><a href="https://www.linkedin.com/sharing/share-offsite/?url={{ urlencode(url()->current()) }}"
                                            target="_blank"
                                            class="d-flex flex-column align-items-center justify-content-center rounded-circle"><i
                                                class="ri-linkedin-fill"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Facebook Comments Section -->
                @if($news->allow_comments)
                    <h4 class="fs-20 fw-bold text-title mb-25">{{ __('common.comments') }}</h4>
                    <div class="comments-area mb-40">
                        <div class="fb-comments"
                             data-href="{{ url()->current() }}"
                             data-width="100%"
                             data-numposts="10"
                             data-order-by="social"
                             data-colorscheme="light">
                        </div>
                    </div>
                @endif



                <!-- Related News -->
                @if ($relatedNews->count() > 0)
                    <h4 class="fs-20 fw-bold text-title mb-25">{{ __('common.related_news') }}</h4>
                    <div class="row">
                        @foreach ($relatedNews as $related)
                            <div class="col-md-4 mb-4">
                                <div class="card h-100">
                                    @if ($related->featured_image)
                                        <img src="{{ $related->featured_image }}" class="card-img-top"
                                            alt="{{ $related->title }}">
                                    @endif
                                    <div class="card-body">
                                        <h6 class="card-title">
                                            <a href="{{ route('detail-news', $related->slug) }}"
                                                class="text-decoration-none">
                                                {{ $related->title }}
                                            </a>
                                        </h6>
                                        @if ($related->excerpt)
                                            <p class="card-text small text-muted">{{ Str::limit($related->excerpt, 80) }}
                                            </p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>
            <x-ui.sidebar-news :categories="$categories" :tags="$tags" :featuredNews="$featuredNews" />
        </div>
    </div>
    <!-- Blog Details End -->
@endsection
