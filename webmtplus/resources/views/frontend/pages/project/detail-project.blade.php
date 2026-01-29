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
                            <h1 class="section-title style-one text-title font-secondary fw-bold mb-30">Commercial &
                                Residential Building</h1>
                            <ul
                                class="single-project-metainfo d-flex flex-wrap justify-content-md-between list-unstyled mb-45">
                                <li>
                                    <span class="fw-medium d-block">Status</span>
                                    <span class="text-title fw-semibold d-block">Completed</span>
                                </li>
                                <li>
                                    <span class="fw-medium d-block">Project Type</span>
                                    <span class="text-title fw-semibold d-block">Building</span>
                                </li>
                                <li>
                                    <span class="fw-medium d-block">Commencement Date</span>
                                    <span class="text-title fw-semibold d-block">28 May, 2024</span>
                                </li>
                            </ul>
                            <div class="service-desc">
                                <div class="single-img round-10 mb-35">
                                    <img src="/frontend/assets/img/project/single-project-1.jpg" alt="Image"
                                        class="round-10">
                                </div>
                                <div class="single-para">
                                    <h6>Project Description</h6>
                                    <p>Renius Real Estate & Construction Group, every project tells a story of vision,
                                        precision, and impact. From luxury residential towers to expansive commercial hubs
                                        and infrastructure developments, our portfolio reflects a deep commitment to
                                        quality, innovation, and client satisfaction. Each build is carefully planned and
                                        expertly executed to meet the highest standards</p>
                                    <ul
                                        class="feature-item-list style-two d-flex flex-wrap list-unstyled pe-xxl-5 me-xxl-5">
                                        <li class="position-relative text-title fw-medium">Conceptualisation And Ideation
                                        </li>
                                        <li class="position-relative text-title fw-medium">Material Selection And
                                            Sustainability</li>
                                        <li class="position-relative text-title fw-medium">Detailed Design Development</li>
                                        <li class="position-relative text-title fw-medium">Building Code Compliance and
                                            Safety</li>
                                        <li class="position-relative text-title fw-medium">Sustainability Environmental
                                            Considerations</li>
                                        <li class="position-relative text-title fw-medium">Final Construction Documents</li>
                                    </ul>
                                    <p>In addition to residential and commercial projects, our portfolio also includes
                                        community developments that focus on enhancing local engagement. One notable project
                                        is a vibrant community center designed to host events and activities, fostering a
                                        sense of belonging among residents. Our team worked diligently to ensure the
                                        facility was both functional and inviting, incorporating outdoor spaces for
                                        recreation.</p>
                                    <p>In addition to residential and commercial projects, our portfolio also includes
                                        community developments that focus on enhancing local engagement. One notable project
                                        is a vibrant community center designed to host events and activities, fostering a
                                        sense of belonging among residents. Our team worked diligently to ensure the
                                        facility was both functional and inviting, incorporating outdoor spaces for
                                        recreation.</p>
                                    <p>In addition to residential and commercial projects, our portfolio also includes
                                        community developments that focus on enhancing local engagement. One notable project
                                        is a vibrant community center designed to host events and activities, fostering a
                                        sense of belonging among residents. Our team worked diligently to ensure the
                                        facility was both functional and inviting, incorporating outdoor spaces for
                                        recreation.</p>
                                    <p>In addition to residential and commercial projects, our portfolio also includes
                                        community developments that focus on enhancing local engagement. One notable project
                                        is a vibrant community center designed to host events and activities, fostering a
                                        sense of belonging among residents. Our team worked diligently to ensure the
                                        facility was both functional and inviting, incorporating outdoor spaces for
                                        recreation.</p>
                                    <p>In addition to residential and commercial projects, our portfolio also includes
                                        community developments that focus on enhancing local engagement. One notable project
                                        is a vibrant community center designed to host events and activities, fostering a
                                        sense of belonging among residents. Our team worked diligently to ensure the
                                        facility was both functional and inviting, incorporating outdoor spaces for
                                        recreation.</p>
                                    <p>In addition to residential and commercial projects, our portfolio also includes
                                        community developments that focus on enhancing local engagement. One notable project
                                        is a vibrant community center designed to host events and activities, fostering a
                                        sense of belonging among residents. Our team worked diligently to ensure the
                                        facility was both functional and inviting, incorporating outdoor spaces for
                                        recreation.</p>
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
