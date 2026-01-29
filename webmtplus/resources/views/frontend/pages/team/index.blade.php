@extends('frontend.layouts.app')
@props([
    'pageTitle' => __('common.team'),
    'hidden' => true,
    'headerClass' => 'style-four',
    'logo' => '/frontend/assets/img/logo.png',
])
@section('content')
    <x-common.breadcrumb breadcrumbTitle="{{ __('common.team') }}" />

    <!-- About Section Start -->
    <div class="about-area style-one position-relative z-1 ptb-120">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xxl-5 col-lg-5">
                    <div class="about-img-wrap position-relative z-1 mb-md-30">
                        <img src="/frontend/assets/img/team/team-1.jpg" alt="Image" class="d-block tilt-img mx-auto object-fit-cover">
                        <img src="/frontend/assets/img/about/shape-1.png" alt="Shape"
                            class="about-shape position-absolute top-0 z-n1">
                    </div>
                </div>
                <div class="col-xxl-6 offset-xxl-1 col-lg-7 ps-xxl-3 ps-xl-4">
                    <div class="about-content position-relative">
                        <h5 class="style-two fs-16 ls-1 font-optional fw-bold text_primary mb-20">CEO, Founder</h5>
                        <h2 class="section-title style-one fw-normal text-title">John Doe</h2>
                        <p class="mb-28">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nostrum, temporibus
                            dolore debitis earum eveniet possimus labore, hic eius tempora consectetur est, incidunt
                            explicabo distinctio ipsam vel modi totam saepe eum.</p>
                        <div class="row gx-xxl-45">
                            <div class="col-sm-6 mb-2">
                                <div class="feature-item position-relative">
                                    <img src="/frontend/assets/img/about/feature-icon-1.png" alt="Icon"
                                        class="feature-icon">
                                    <h3 class="fs-16 fw-semibold mt-2">Decades Of Construction Experience</h3>
                                </div>
                            </div>
                            <div class="col-sm-6 mb-2">
                                <div class="feature-item position-relative">
                                    <img src="/frontend/assets/img/about/feature-icon-2.png" alt="Icon"
                                        class="feature-icon">
                                    <h3 class="fs-16 fw-semibold mt-2">Craftsmanship Meets Modern Innovation</h3>
                                </div>
                            </div>
                            <div class="col-sm-6 mb-2">
                                <div class="feature-item position-relative">
                                    <img src="/frontend/assets/img/about/feature-icon-3.png" alt="Icon"
                                        class="feature-icon">
                                    <h3 class="fs-16 fw-semibold mt-2">Built To Last With Quality Materials</h3>
                                </div>
                            </div>
                            <div class="col-sm-6 mb-2">
                                <div class="feature-item position-relative">
                                    <img src="/frontend/assets/img/about/feature-icon-4.png" alt="Icon"
                                        class="feature-icon">
                                    <h3 class="fs-16 fw-semibold mt-2">Trusted By Homeowners Across</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Section End -->

    <!-- Team Section Start -->
    <div class="team-area style-one position-relative ptb-20">
        <div class="container">
            <div class="row justify-content-center">
                @for ($i = 1; $i <= 4; $i++)
                    <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6">
                        <div class="team-card style-one img-hover-zoom mb-45">
                            <div class="team-img round-10 img-zoom position-relative overflow-hidden">
                                <img src="/frontend/assets/img/team/team-1.jpg" alt="Image"
                                    class="position-absolute top-0 bottom-0 start-0 end-0 z-1 round-10 transition object-fit-cover">
                                <img src="/frontend/assets/img/team/team-1.jpg" alt="Image" class="round-10 transition">
                            </div>
                            <div class="team-info d-flex flex-wrap justify-content-between">
                                <div>
                                    <h3 class="fw-bold mb-1"><a href="javaScript:void(0)"
                                            class="text-title link-hover-primary transition">Michael Harper</a></h3>
                                    <span>Project Manager</span>
                                </div>
                                <ul class="social-profile style-two list-unstyled mb-0">
                                    <li><a href="https://www.facebook.com"
                                            class="d-flex flex-column align-items-center justify-content-center rounded-circle"><i
                                                class="ri-facebook-fill"></i></a></li>
                                    <li><a href="https://x.com/"
                                            class="d-flex flex-column align-items-center justify-content-center rounded-circle"><i
                                                class="ri-twitter-x-line"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </div>
    <!-- Team Section End -->
@endsection
