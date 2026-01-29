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
            <div class="col-xl-4 order-xl-1 order-2">
                <aside class="sidebar mt-lg-50">
                    <div class="sidebar-widget search-widget bg-gray round-10">
                        <form action="#" class="position-relative">
                            <input type="search" placeholder="Search"
                                class="w-100 bg-white border-0 round-10 text-para outline-0">
                            <button class="position-absolute top-0 h-100 bg-transparent border-0"><img
                                    src="/frontend/assets/img/icons/search-icon.svg" alt="Icon"></button>
                        </form>
                    </div>
                    <div class="sidebar-widget category-widget bg-gray round-10">
                        <h3 class="sidebar-widget-title fs-18 fw-semibold text-title mb-15">Categories</h3>
                        <ul class="list-unstyled mb-0">
                            <li><a href="javaScript:void(0);" class="position-relative"><img
                                        src="/frontend/assets/img/icons/circle-arrow.svg" alt="Icon"
                                        class="position-absolute">Category 1</a></li>
                            
                        </ul>
                    </div>
                    <div class="sidebar-widget category-widget bg-gray round-10">
                        <h3 class="sidebar-widget-title fs-18 fw-semibold text-title mb-15">Recent Posts</h3>
                        <div class="rp-post-wrap">
                            <div class="rp-post-card d-flex flex-wrap align-items-center">
                                <div class="rp-post-img">
                                    <img src="/frontend/assets/img/blog/post-thumb-1.jpg" alt="Post Thumb">
                                </div>
                                <div class="rp-post-info">
                                    <a href="posts-by-date.html"
                                        class="fs-15 fw-medium text_primary link-hover-primary d-block mb-1">19 Jul,
                                        2025</a>
                                    <h5 class="fs-15 fw-bold mb-0"><a href="blog-details-right-sidebar.html"
                                            class="text-title hover-text-primary transition">From Blueprint To Reality How
                                            Renius Delivers Complex</a></h5>
                                </div>
                            </div>
                            <div class="rp-post-card d-flex flex-wrap align-items-center">
                                <div class="rp-post-img">
                                    <img src="/frontend/assets/img/blog/post-thumb-2.jpg" alt="Post Thumb">
                                </div>
                                <div class="rp-post-info">
                                    <a href="posts-by-date.html"
                                        class="fs-15 fw-medium text_primary link-hover-primary d-block mb-1">16 Jul,
                                        2025</a>
                                    <h5 class="fs-15 fw-bold mb-0"><a href="blog-details-right-sidebar.html"
                                            class="text-title hover-text-primary transition">5 Trends Shaping The Future
                                            Real Estate In 2025</a></h5>
                                </div>
                            </div>
                            <div class="rp-post-card d-flex flex-wrap align-items-center">
                                <div class="rp-post-img">
                                    <img src="/frontend/assets/img/blog/post-thumb-3.jpg" alt="Post Thumb">
                                </div>
                                <div class="rp-post-info">
                                    <a href="posts-by-date.html"
                                        class="fs-15 fw-medium text_primary link-hover-primary d-block mb-1">10 May,
                                        2025</a>
                                    <h5 class="fs-15 fw-bold mb-0"><a href="blog-details-right-sidebar.html"
                                            class="text-title hover-text-primary transition">The Phases Of Commercial
                                            Construction Explained</a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar-widget tags-widget bg-gray round-10">
                        <h3 class="sidebar-widget-title fs-18 fw-semibold text-title mb-15">Tags</h3>
                        <ul class="list-unstyled mb-0">
                            <li><a href="posts-by-tag.html">Business</a></li>
                            <li><a href="posts-by-tag.html">Development</a></li>
                            <li><a href="posts-by-tag.html">Design</a></li>
                            <li><a href="posts-by-tag.html">Marketing</a></li>
                            <li><a href="posts-by-tag.html">Real Estate</a></li>
                        </ul>
                    </div>
                </aside>
            </div>
            <div class="col-xl-8 order-xl-2 order-1">
                <div class="row justify-content-center">
                    @php
                        $newsItems = [
                            [
                                'image' => 'frontend/assets/img/blog/blog-1.jpg',
                                'linkNews' => 'blog-details-right-sidebar.html',
                                'date' => '12',
                                'month' => 'Jul',
                                'author' => 'Admin',
                                'linkAuthor' => 'javaScript:void(0)',
                                'title' => 'Top Kitchen Renovation Tips To Maximize Space And Style',
                            ],
                            [
                                'image' => 'frontend/assets/img/blog/blog-2.jpg',
                                'linkNews' => 'blog-details-right-sidebar.html',
                                'date' => '11',
                                'month' => 'Jul',
                                'author' => 'Admin',
                                'linkAuthor' => 'javaScript:void(0)',
                                'title' => 'Outdoor Renovation Trends That Will Elevate Your Backyard',
                            ],
                            [
                                'image' => 'frontend/assets/img/blog/blog-3.jpg',
                                'linkNews' => 'blog-details-right-sidebar.html',
                                'date' => '10',
                                'month' => 'Jul',
                                'author' => 'Admin',
                                'linkAuthor' => 'javaScript:void(0)',
                                'title' => 'Avoid These Common Mistakes During Your Home Renovation',
                            ],
                            [
                                'image' => 'frontend/assets/img/blog/blog-4.jpg',
                                'linkNews' => 'blog-details-right-sidebar.html',
                                'date' => '09',
                                'month' => 'Jul',
                                'author' => 'Admin',
                                'linkAuthor' => 'javaScript:void(0)',
                                'title' => '5 Trends Shaping The Future Of Real Estate Development In 2025',
                            ],
                            [
                                'image' => 'frontend/assets/img/blog/blog-5.jpg',
                                'linkNews' => 'blog-details-right-sidebar.html',
                                'date' => '08',
                                'month' => 'Jul',
                                'author' => 'Admin',
                                'linkAuthor' => 'javaScript:void(0)',
                                'title' => 'Expect When Partnering With A Full-Service Construction Group',
                            ],
                            [
                                'image' => 'frontend/assets/img/blog/blog-6.jpg',
                                'linkNews' => 'blog-details-right-sidebar.html',
                                'date' => '03',
                                'month' => 'Jul',
                                'author' => 'Admin',
                                'linkAuthor' => 'javaScript:void(0)',
                                'title' => 'Inside A Renius Project The Phases Of Commercial Construction',
                            ],
                        ];
                    @endphp
                    @foreach ($newsItems as $news)
                        <x-ui.news-item-news
                            :image="$news['image']"
                            :linkNews="$news['linkNews']"
                            :date="$news['date']"
                            :month="$news['month']"
                            :author="$news['author']"
                            :linkAuthor="$news['linkAuthor']"
                            :title="$news['title']"
                        />
                    @endforeach
                </div>
                {{-- <ul class="page-nav pagination justify-content-center mb-0 mt-lg-4">
                    <li class="page-item">
                        <a class="page-link d-flex flex-column align-items-center justify-content-center rounded-circle"
                            href="blog-right-sidebar.html" aria-label="Previous">
                            <img src="/frontend/assets/img/icons/left-long-arrow-gray.svg" alt="Icon">
                        </a>
                    </li>
                    <li class="page-item"><a
                            class="page-link d-flex flex-column align-items-center justify-content-center rounded-circle active"
                            href="blog-right-sidebar.html">01</a></li>
                    <li class="page-item"><a
                            class="page-link d-flex flex-column align-items-center justify-content-center rounded-circle"
                            href="blog-right-sidebar.html">02</a></li>
                    <li class="page-item"><a
                            class="page-link d-flex flex-column align-items-center justify-content-center rounded-circle"
                            href="blog-right-sidebar.html">03</a></li>
                    <li class="page-item">
                        <a class="page-link d-flex flex-column align-items-center justify-content-center rounded-circle"
                            href="blog-right-sidebar.html" aria-label="Next">
                            <img src="/frontend/assets/img/icons/right-long-arrow-gray.svg" alt="Icon">
                        </a>
                    </li>
                </ul> --}}
            </div>
        </div>
    </div>
    <!-- Blog Details End -->
@endsection
