@extends('frontend.layouts.app')
@props([
    'pageTitle' => __('common.technology_solution'),
    'hidden' => true,
    'headerClass' => 'style-four',
    'logo' => '/frontend/assets/img/logo.png',
])
@section('content')
    <x-common.breadcrumb breadcrumbTitle="{{ __('common.technology_solution') }}" />
    <!-- Service Details Start -->
    <div class="container ptb-120">
        <div class="row">
            <div class="col-xl-12 pe-xxl-4">
                <div class="service-desc">
                    <div class="single-para">
                        <h1 class="font-secondary">Property Sales & Brokerage</h1>
                        <p>On the construction side, we offer end-to-end solutions including architectural design, general
                            contracting, renovations, and complete project management. Whether you’re looking to build from
                            the ground up, renovate an existing structure, or invest in real estate with confidence, </p>
                        <p>Renius delivers trusted, timely, and high-quality service tailored to your needs.</p>
                    </div>
                    <div class="single-para">
                        <h6>Overview & Challenge</h6>
                        <p>We start by developing preliminary design concepts that explore various spatial arrangements,
                            circulation patterns, and architectural styles</p>
                    </div>
                    <div class="row justify-content-center mb-2">
                        <div class="col-md-3 col-6">
                            <div class="feature-card style-one mb-30">
                                <img src="/frontend/assets/img/features/feature-1.png" alt="Icon">
                                <h3 class="fs-16 font-primary fw-semibold mb-0 pe-xxl-5">Corporate Responsibility</h3>
                            </div>
                        </div>
                        <div class="col-md-3 col-6">
                            <div class="feature-card style-one mb-30">
                                <img src="/frontend/assets/img/features/feature-2.png" alt="Icon">
                                <h3 class="fs-16 font-primary fw-semibold mb-0 pe-xxl-5">Diversity, Equity & Inclusion</h3>
                            </div>
                        </div>
                        <div class="col-md-3 col-6">
                            <div class="feature-card style-one mb-30">
                                <img src="/frontend/assets/img/features/feature-3.png" alt="Icon">
                                <h3 class="fs-16 font-primary fw-semibold mb-0 pe-xxl-5">Experts with Team Spirit</h3>
                            </div>
                        </div>
                        <div class="col-md-3 col-6">
                            <div class="feature-card style-one mb-30">
                                <img src="/frontend/assets/img/features/feature-4.png" alt="Icon">
                                <h3 class="fs-16 font-primary fw-semibold mb-0 pe-xxl-5">Custom Home Builds</h3>
                            </div>
                        </div>
                    </div>

                    <div class="single-para">
                        <h6>Services Offered</h6>
                        <ul class="feature-item-list style-one list-unstyled">
                            <li class="position-relative"><span class="text-title fw-semibold me-1"> Conceptual Design
                                    :</span>We start by developing preliminary design concepts that explore various spatial
                                arrangements, circulation patterns, and architectural styles. These initial concepts serve
                                as the foundation.</li>
                            <li class="position-relative"><span class="text-title fw-semibold me-1">Schematic Design
                                    :</span>Building upon the approved concept, we develop sech- Matic drawings that
                                articulate the overall form, massing, and spatial organization of the project.</li>
                            <li class="position-relative"><span class="text-title fw-semibold me-1">Design Development
                                    :</span>During this phase, we delve into the details, refining the design and
                                incorporating structural, mechanical, and electrical considerations. We produce detailed
                                drawings.</li>
                            <li class="position-relative"><span class="text-title fw-semibold me-1"> Conceptual Design
                                    :</span>We start by developing preliminary design concepts that explore various spatial
                                arrangements, circulation patterns, and architectural styles. These initial concepts serve
                                as the foundation.</li>
                            <li class="position-relative"><span class="text-title fw-semibold me-1">Schematic Design
                                    :</span>Building upon the approved concept, we develop sech- Matic drawings that
                                articulate the overall form, massing, and spatial organization of the project.</li>
                            <li class="position-relative"><span class="text-title fw-semibold me-1">Design Development
                                    :</span>During this phase, we delve into the details, refining the design and
                                incorporating structural, mechanical, and electrical considerations. We produce detailed
                                drawings.</li>
                            <li class="position-relative"><span class="text-title fw-semibold me-1"> Conceptual Design
                                    :</span>We start by developing preliminary design concepts that explore various spatial
                                arrangements, circulation patterns, and architectural styles. These initial concepts serve
                                as the foundation.</li>
                            <li class="position-relative"><span class="text-title fw-semibold me-1">Schematic Design
                                    :</span>Building upon the approved concept, we develop sech- Matic drawings that
                                articulate the overall form, massing, and spatial organization of the project.</li>
                            <li class="position-relative"><span class="text-title fw-semibold me-1">Design Development
                                    :</span>During this phase, we delve into the details, refining the design and
                                incorporating structural, mechanical, and electrical considerations. We produce detailed
                                drawings.</li>
                            <li class="position-relative"><span class="text-title fw-semibold me-1"> Conceptual Design
                                    :</span>We start by developing preliminary design concepts that explore various spatial
                                arrangements, circulation patterns, and architectural styles. These initial concepts serve
                                as the foundation.</li>
                            <li class="position-relative"><span class="text-title fw-semibold me-1">Schematic Design
                                    :</span>Building upon the approved concept, we develop sech- Matic drawings that
                                articulate the overall form, massing, and spatial organization of the project.</li>
                            <li class="position-relative"><span class="text-title fw-semibold me-1">Design Development
                                    :</span>During this phase, we delve into the details, refining the design and
                                incorporating structural, mechanical, and electrical considerations. We produce detailed
                                drawings.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service Details End -->
@endsection
