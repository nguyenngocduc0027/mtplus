@extends('frontend.layouts.app')
@props([
    'pageTitle' => __('common.detail_news'),
    'hidden' => true,
    'headerClass' => 'style-four',
    'logo' => '/frontend/assets/img/logo.png',
])
@section('content')
    <x-common.breadcrumb breadcrumbTitle="{{ __('common.detail_news') }}" />
    <!-- Blog Details Start -->
    <div class="container ptb-120">
        <div class="row">
            <div class="col-xl-8">
                <div class="blog-desc">
                    <h1 class="font-secondary mb-2">Avoid These Common Mistakes During Your Home Renovation </h1>
                    <ul class="blog-metainfo list-unstyled mb-20">
                        <li class="fs-15 d-inline-block position-relative">By <a href="javaScript:void(0)">Admin</a></li>
                        <li class="fs-15 d-inline-block position-relative">2 Comment</a></li>
                    </ul>
                    <div class="single-para">
                        <h6>How Weather Can Impact a Construction Project</h6>
                        <p>Renius Real Estate & Construction Group, we believe knowledge empowers better decisions—whether
                            you're investing in property, managing a build, or exploring industry trends. Our blog is a
                            dedicated space where we share expert insights, project highlights, </p>
                        <p>market updates, and thought leadership on real estate and construction. Whether you're a client,
                            partner, or industry professional, you'll find valuable content</p>
                    </div>
                    <div class="single-para">
                        <h6>Overview & Challenge</h6>
                        <p>We start by developing preliminary design concepts that explore various spatial arrangements,
                            circulation patterns, and architectural styles</p>
                    </div>
                </div>
                <div class="post-metaoption bg-white mb-40 round-15">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div class="post-tag d-flex fle-wrap align-items-center mb-sm-20">
                                <span class="text-title me-3">Tags</span>
                                <ul class="tag-list style-two list-unstyled mb-0">
                                    <li><a href="posts-by-tag.html">Real Estate</a>,</li>
                                    <li><a href="posts-by-tag.html">Property</a>,</li>
                                    <li><a href="posts-by-tag.html">Business</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="post-share d-flex flex-wrap align-items-center justify-content-md-end">
                                <span class="text-para fw-semibold me-2">Share:</span>
                                <ul class="social-profile style-one list-unstyled mb-0">
                                    <li><a href="https://www.facebook.com/" target="_blank"
                                            class="d-flex flex-column align-items-center justify-content-center rounded-circle"><i
                                                class="ri-facebook-fill"></i></a></li>
                                    <li><a href="https://x.com/?lang=en" target="_blank"
                                            class="d-flex flex-column align-items-center justify-content-center rounded-circle"><i
                                                class="ri-twitter-x-line"></i></a></li>
                                    <li><a href="https://www.instagram.com/" target="_blank"
                                            class="d-flex flex-column align-items-center justify-content-center rounded-circle"><i
                                                class="ri-instagram-line"></i></a></li>
                                    <li><a href="https://www.linkedin.com/" target="_blank"
                                            class="d-flex flex-column align-items-center justify-content-center rounded-circle"><i
                                                class="ri-linkedin-fill"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <h4 class="fs-20 fw-bold text-title mb-25">Comments (03)</h2>

            </div>
            <x-ui.sidebar-news />
        </div>
    </div>
    <!-- Blog Details End -->
@endsection
