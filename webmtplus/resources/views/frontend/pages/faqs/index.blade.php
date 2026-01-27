@extends('frontend.index')
@section('content')
    <!-- Breadcrumb Section Start -->
    <div class="breadcrumb-area position-relative z-1">
        <img src="{{asset('frontend/assets/img/breadcrumb/br-line-shape.png')}}" alt="Shape"
            class="br-line-shape position-absolute top-0 start-0 w-100 h-100 z-n1">
        <img src="{{asset('frontend/assets/img/breadcrumb/br-shape-1.png')}}" alt="Shape" class="br-shape-one position-absolute z-n1 bounce">
        <img src="{{asset('frontend/assets/img/breadcrumb/br-shape-2.png')}}" alt="Shape"
            class="br-shape-two position-absolute bottom-0 z-n1 moveHorizontal">
        <div class="container-fluid px-xxl-5">
            <div class="row">
                <div class="col-md-10 offset-md-1 text-center">
                    <h2 class="section-title style-one fw-black text-title">Faq</h2>
                    <ul class="br-menu list-unstyled">
                        <li><a href="{{route('home')}}"><img src="{{asset('frontend/assets/img/icons/home-icon.svg')}}" alt="Icon">HOME</a></li>
                        <li>FAQ</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End -->

    <!-- FAQ Section Start -->
    <div class="container ptb-120">
        <div class="row">
            <div class="col-xl-8 offset-xl-2">
                <div class="accordion style-one" id="accordionExample_one">
                    <div class="accordion-item" data-bs-toggle="collapse" data-bs-target="#collapseFour"
                        aria-expanded="true" aria-controls="collapseFour" role="button">
                        <div class="accordion-header" id="headingFour">
                            <div class="accordion-button">
                                <span class="accord-arrow">
                                    <i class="ri-arrow-down-s-fill plus"></i>
                                    <i class="ri-arrow-up-s-fill minus"></i>
                                </span>
                                01 . Can I Consult You Before Buying Land Or Property?
                            </div>
                        </div>
                        <div id="collapseFour" class="accordion-collapse collapse show" aria-labelledby="headingFour"
                            data-bs-parent="#accordionExample_one">
                            <div class="accordion-body">
                                <p class="fs-xx-14">Renovations, and complete project management. Whether you’re looking to
                                    build from the ground renovate an existing structure, or invest in real estate with
                                    confidence, Renius delivers trusted.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item collapsed" data-bs-toggle="collapse" data-bs-target="#collapseFive"
                        aria-expanded="false" aria-controls="collapseFive" role="button">
                        <div class="accordion-header" id="headingFive">
                            <div class="accordion-button">
                                <span class="accord-arrow">
                                    <i class="ri-arrow-down-s-fill plus"></i>
                                    <i class="ri-arrow-up-s-fill minus"></i>
                                </span>
                                02 . Are Your Services Available Outside The City?
                            </div>
                        </div>
                        <div id="collapseFive" class="accordion-collapse collapse " aria-labelledby="headingFive"
                            data-bs-parent="#accordionExample_one">
                            <div class="accordion-body">
                                <p class="fs-xx-14">Renovations, and complete project management. Whether you’re looking to
                                    build from the ground renovate an existing structure, or invest in real estate with
                                    confidence, Renius delivers trusted.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item collapsed" data-bs-toggle="collapse" data-bs-target="#collapseSix"
                        aria-expanded="false" aria-controls="collapseSix" role="button">
                        <div class="accordion-header" id="headingSix">
                            <div class="accordion-button">
                                <span class="accord-arrow">
                                    <i class="ri-arrow-down-s-fill plus"></i>
                                    <i class="ri-arrow-up-s-fill minus"></i>
                                </span>
                                03 . Do You Manage Properties For Landlords Or Investors?
                            </div>
                        </div>
                        <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                            data-bs-parent="#accordionExample_one">
                            <div class="accordion-body">
                                <p class="fs-xx-14">Renovations, and complete project management. Whether you’re looking to
                                    build from the ground renovate an existing structure, or invest in real estate with
                                    confidence, Renius delivers trusted.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item collapsed" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                        aria-expanded="false" aria-controls="collapseOne" role="button">
                        <div class="accordion-header" id="headingOne">
                            <div class="accordion-button">
                                <span class="accord-arrow">
                                    <i class="ri-arrow-down-s-fill plus"></i>
                                    <i class="ri-arrow-up-s-fill minus"></i>
                                </span>
                                04 . What Types Of Properties Do You Handle?
                            </div>
                        </div>
                        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample_one">
                            <div class="accordion-body">
                                <p class="fs-xx-14">Renovations, and complete project management. Whether you’re looking to
                                    build from the ground renovate an existing structure, or invest in real estate with
                                    confidence, Renius delivers trusted.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item collapsed" data-bs-toggle="collapse" data-bs-target="#collapse_2"
                        aria-expanded="false" aria-controls="collapse_2" role="button">
                        <div class="accordion-header" id="heading_2">
                            <div class="accordion-button">
                                <span class="accord-arrow">
                                    <i class="ri-arrow-down-s-fill plus"></i>
                                    <i class="ri-arrow-up-s-fill minus"></i>
                                </span>
                                05 . Do You Offer Custom Home Construction?
                            </div>
                        </div>
                        <div id="collapse_2" class="accordion-collapse collapse" aria-labelledby="heading_2"
                            data-bs-parent="#accordionExample_one">
                            <div class="accordion-body">
                                <p class="fs-xx-14">Renovations, and complete project management. Whether you’re looking to
                                    build from the ground renovate an existing structure, or invest in real estate with
                                    confidence, Renius delivers trusted.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item collapsed" data-bs-toggle="collapse" data-bs-target="#collapse_3"
                        aria-expanded="false" aria-controls="collapse_3" role="button">
                        <div class="accordion-header" id="heading_3">
                            <div class="accordion-button">
                                <span class="accord-arrow">
                                    <i class="ri-arrow-down-s-fill plus"></i>
                                    <i class="ri-arrow-up-s-fill minus"></i>
                                </span>
                                06 . How Long Does A Construction Project Usually Take?
                            </div>
                        </div>
                        <div id="collapse_3" class="accordion-collapse collapse" aria-labelledby="heading_3"
                            data-bs-parent="#accordionExample_one">
                            <div class="accordion-body">
                                <p class="fs-xx-14">Renovations, and complete project management. Whether you’re looking to
                                    build from the ground renovate an existing structure, or invest in real estate with
                                    confidence, Renius delivers trusted.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item collapsed" data-bs-toggle="collapse" data-bs-target="#collapse_30"
                        aria-expanded="false" aria-controls="collapse_30" role="button">
                        <div class="accordion-header" id="heading_30">
                            <div class="accordion-button">
                                <span class="accord-arrow">
                                    <i class="ri-arrow-down-s-fill plus"></i>
                                    <i class="ri-arrow-up-s-fill minus"></i>
                                </span>
                                07 . Is Your Pricing Flexible Or Fixed?
                            </div>
                        </div>
                        <div id="collapse_30" class="accordion-collapse collapse" aria-labelledby="heading_30"
                            data-bs-parent="#accordionExample_one">
                            <div class="accordion-body">
                                <p class="fs-xx-14">Renovations, and complete project management. Whether you’re looking to
                                    build from the ground renovate an existing structure, or invest in real estate with
                                    confidence, Renius delivers trusted.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item collapsed" data-bs-toggle="collapse" data-bs-target="#collapse_4"
                        aria-expanded="false" aria-controls="collapse_4" role="button">
                        <div class="accordion-header" id="heading_4">
                            <div class="accordion-button">
                                <span class="accord-arrow">
                                    <i class="ri-arrow-down-s-fill plus"></i>
                                    <i class="ri-arrow-up-s-fill minus"></i>
                                </span>
                                08 . How Long Does A Typical Construction Project Take?
                            </div>
                        </div>
                        <div id="collapse_4" class="accordion-collapse collapse" aria-labelledby="heading_4"
                            data-bs-parent="#accordionExample_one">
                            <div class="accordion-body">
                                <p class="fs-xx-14">Renovations, and complete project management. Whether you’re looking to
                                    build from the ground renovate an existing structure, or invest in real estate with
                                    confidence, Renius delivers trusted.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item collapsed" data-bs-toggle="collapse" data-bs-target="#collapse_5"
                        aria-expanded="false" aria-controls="collapse_5" role="button">
                        <div class="accordion-header" id="heading_5">
                            <div class="accordion-button">
                                <span class="accord-arrow">
                                    <i class="ri-arrow-down-s-fill plus"></i>
                                    <i class="ri-arrow-up-s-fill minus"></i>
                                </span>
                                09 . Is Your Pricing Fixed Or Customized?
                            </div>
                        </div>
                        <div id="collapse_5" class="accordion-collapse collapse" aria-labelledby="heading_5"
                            data-bs-parent="#accordionExample_one">
                            <div class="accordion-body">
                                <p class="fs-xx-14">Renovations, and complete project management. Whether you’re looking to
                                    build from the ground renovate an existing structure, or invest in real estate with
                                    confidence, Renius delivers trusted.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- FAQ Section End -->
@endsection
