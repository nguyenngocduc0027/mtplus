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
                    @php
                        $newsItems = [
                            [
                                'image' => 'frontend/assets/img/blog/blog-1.jpg',
                                'linkNews' => route('detail-news'),
                                'date' => '12',
                                'month' => 'Jul',
                                'author' => 'Admin',
                                'linkAuthor' => 'javaScript:void(0)',
                                'title' => 'Top Kitchen Renovation Tips To Maximize Space And Style',
                            ],
                            [
                                'image' => 'frontend/assets/img/blog/blog-2.jpg',
                                'linkNews' => route('detail-news'),
                                'date' => '11',
                                'month' => 'Jul',
                                'author' => 'Admin',
                                'linkAuthor' => 'javaScript:void(0)',
                                'title' => 'Outdoor Renovation Trends That Will Elevate Your Backyard',
                            ],
                            [
                                'image' => 'frontend/assets/img/blog/blog-3.jpg',
                                'linkNews' => route('detail-news'),
                                'date' => '10',
                                'month' => 'Jul',
                                'author' => 'Admin',
                                'linkAuthor' => 'javaScript:void(0)',
                                'title' => 'Avoid These Common Mistakes During Your Home Renovation',
                            ],
                            [
                                'image' => 'frontend/assets/img/blog/blog-4.jpg',
                                'linkNews' => route('detail-news'),
                                'date' => '09',
                                'month' => 'Jul',
                                'author' => 'Admin',
                                'linkAuthor' => 'javaScript:void(0)',
                                'title' => '5 Trends Shaping The Future Of Real Estate Development In 2025',
                            ],
                            [
                                'image' => 'frontend/assets/img/blog/blog-5.jpg',
                                'linkNews' => route('detail-news'),
                                'date' => '08',
                                'month' => 'Jul',
                                'author' => 'Admin',
                                'linkAuthor' => 'javaScript:void(0)',
                                'title' => 'Expect When Partnering With A Full-Service Construction Group',
                            ],
                            [
                                'image' => 'frontend/assets/img/blog/blog-6.jpg',
                                'linkNews' => route('detail-news'),
                                'date' => '03',
                                'month' => 'Jul',
                                'author' => 'Admin',
                                'linkAuthor' => 'javaScript:void(0)',
                                'title' => 'Inside A Renius Project The Phases Of Commercial Construction',
                            ],
                        ];
                    @endphp
                    @foreach ($newsItems as $news)
                        <x-ui.news-item-news :image="$news['image']" :linkNews="$news['linkNews']" :date="$news['date']" :month="$news['month']"
                            :author="$news['author']" :linkAuthor="$news['linkAuthor']" :title="$news['title']" />
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
            <x-ui.sidebar-news />
        </div>
    </div>
    <!-- Blog Details End -->
@endsection
