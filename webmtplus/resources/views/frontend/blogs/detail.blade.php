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
                    <h2 class="section-title style-one fw-black text-title">Blog Details</h2>
                    <ul class="br-menu list-unstyled">
                        <li><a href="{{route('home')}}"><img src="{{asset('frontend/assets/img/icons/home-icon.svg')}}" alt="Icon">HOME</a></li>
                        <li><a href="{{route('blogs.index')}}">BLOG</a></li>
                        <li>BLOG DETAILS</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End -->

    <!-- Blog Details Start -->
    <div class="container ptb-120">
        <div class="row">
            <div class="col-xl-8">
                <div class="blog-desc">
                    <h1 class="font-secondary mb-2">Avoid These Common Mistakes During Your Home Renovation </h1>
                    <ul class="blog-metainfo list-unstyled mb-20">
                        <li class="fs-15 d-inline-block position-relative">By <a href="posts-by-author.html">Admin</a></li>
                        <li class="fs-15 d-inline-block position-relative">2 Comment</a></li>
                    </ul>
                    <div class="single-img position-relative round-10 mb-35">
                        <img src="{{asset('frontend/assets/img/blog/single-blog-1.jpg')}}" alt="Blog" class="round-10">
                        <a href="#"
                            class="blog-date bg-white text-title position-absolute d-flex flex-column align-items-center justify-content-center round-10"><span
                                class="font-secondary fs-24 fw-black d-block">12</span>Jul</a>
                    </div>
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
                    <div class="row justify-content-center mb-2">
                        <div class="col-md-3 col-6">
                            <div class="feature-card style-one mb-30">
                                <img src="{{asset('frontend/assets/img/features/feature-1.png')}}" alt="Icon">
                                <h3 class="fs-16 font-primary fw-semibold mb-0 pe-xxl-5">Corporate Responsibility</h3>
                            </div>
                        </div>
                        <div class="col-md-3 col-6">
                            <div class="feature-card style-one mb-30">
                                <img src="{{asset('frontend/assets/img/features/feature-2.png')}}" alt="Icon">
                                <h3 class="fs-16 font-primary fw-semibold mb-0 pe-xxl-5">Diversity, Equity & Inclusion</h3>
                            </div>
                        </div>
                        <div class="col-md-3 col-6">
                            <div class="feature-card style-one mb-30">
                                <img src="{{asset('frontend/assets/img/features/feature-3.png')}}" alt="Icon">
                                <h3 class="fs-16 font-primary fw-semibold mb-0 pe-xxl-5">Experts with Team Spirit</h3>
                            </div>
                        </div>
                        <div class="col-md-3 col-6">
                            <div class="feature-card style-one mb-30">
                                <img src="{{asset('frontend/assets/img/features/feature-4.png')}}" alt="Icon">
                                <h3 class="fs-16 font-primary fw-semibold mb-0 pe-xxl-5">Custom Home Builds</h3>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-xxl-8 col-xl-7 col-lg-8 col-md-7 pe-xl-4">
                            <div class="testimonial-card style-two bg-gray round-10 mb-30">
                                <div class="d-flex flex-wrap align-items-center justify-content-between">
                                    <span
                                        class="quote-icon bg_secondary d-flex flex-wrap align-items-center justify-content-center rounded-circle mb-0"><img
                                            src="{{asset('frontend/assets/img/icons/quote-large.svg')}}" alt="Icon"></span>
                                    <ul class="rating list-unstyled mb-0 w-50 text-end">
                                        <li><img src="{{asset('frontend/assets/img/icons/star.svg')}}" alt="Icon"></li>
                                        <li><img src="{{asset('frontend/assets/img/icons/star.svg')}}" alt="Icon"></li>
                                        <li><img src="{{asset('frontend/assets/img/icons/star.svg')}}" alt="Icon"></li>
                                        <li><img src="{{asset('frontend/assets/img/icons/star.svg')}}" alt="Icon"></li>
                                        <li><img src="{{asset('frontend/assets/img/icons/star.svg')}}" alt="Icon"></li>
                                    </ul>
                                </div>
                                <p class="fw-medium text-title">"From the first consultation to final reveal, Renius made
                                    our They truly our ideas and brought with incredible."</p>
                                <h6 class="fs-20 font-primary fw-semibold position-relative text-title mb-1">Chloe Bennett
                                </h6>
                                <span class="fs-15 fw-normal d-block text-para">Relations Manager</span>
                            </div>
                        </div>
                        <div class="col-xxl-4 col-xl-5 col-lg-4 col-md-5 ps-xl-0 ps-lg-4 pe-xl-2">
                            <div class="single-img round-10 mb-30">
                                <img src="{{asset('frontend/assets/img/blog/single-blog-2.jpg')}}" alt="Image" class="round-10">
                            </div>
                        </div>
                    </div>
                    <div class="single-para">
                        <h6>Worker Productivity due to Safety Concerns</h6>
                        <p>begins with a commitment to excellence. From initial planning to final handover, our team works
                            with precision, transparency, and dedication to deliver spaces that serve both function and
                            vision. Backed by years of industry expertise and a deep understanding build as an opportunity
                            to shape communities</p>
                    </div>
                </div>
                <div class="post-metaoption bg-white mb-40 round-15">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div class="post-tag d-flex fle-wrap align-items-center mb-sm-20">
                                <span class="text-title me-3">Tags</span>
                                <ul class="tag-list style-two list-unstyled mb-0">
                                    <li><a href="#">Real Estate</a>,</li>
                                    <li><a href="#">Property</a>,</li>
                                    <li><a href="#">Business</a></li>
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
                    <div class="comment-item-wrap mb-50">
                        <div class="comment-item d-flex flex-wrap">
                            <div class="comment-author-img round-5">
                                <img src="{{asset('frontend/assets/img/blog/avatar-1.jpg')}}" alt="Image" class="round-5">
                            </div>
                            <div class="comment-author-info">
                                <span class="fs-14 d-block mb-8">12 Jul, 2025</span>
                                <h5 class="fs-16 fw-semibold font-primary text-title mb-10">Barret Simpson</h5>
                                <p class="comment-text mb-8">Working with Renius was a game-changer for our commercial
                                    development. Their team was transparent, responsive, and incredibly detail-oriented
                                    throughout the entire process.</p>
                                <a href="#cmt-form" class="reply-btn link style-one fw-medium">Reply</a>
                            </div>
                        </div>
                        <div class="comment-item d-flex flex-wrap reply">
                            <div class="comment-author-img round-5">
                                <img src="{{asset('frontend/assets/img/blog/avatar-2.jpg')}}" alt="Image" class="round-5">
                            </div>
                            <div class="comment-author-info">
                                <span class="fs-14 d-block mb-8">13 Jul, 2025</span>
                                <h5 class="fs-16 fw-semibold font-primary text-title mb-10">Parker Ballinger</h5>
                                <p class="comment-text mb-8">The final result exceeded our expectations—delivered on time
                                    and on budget. We look forward to partnering with them again</p>
                                <a href="#cmt-form" class="reply-btn link style-one fw-medium">Reply</a>
                            </div>
                        </div>
                        <div class="comment-item d-flex flex-wrap">
                            <div class="comment-author-img round-5">
                                <img src="{{asset('frontend/assets/img/blog/avatar-3.jpg')}}" alt="Image" class="round-5">
                            </div>
                            <div class="comment-author-info">
                                <span class="fs-14 d-block mb-8">17 Jul, 2025</span>
                                <h5 class="fs-16 fw-semibold font-primary text-title mb-10">Roan Atkinson</h5>
                                <p class="comment-text mb-8">Renius was a game-changer for our commercial development.
                                    Their team was transparent, responsive, and incredibly detail-oriented throughout the
                                    entire process.</p>
                                <a href="#cmt-form" class="reply-btn link style-one fw-medium">Reply</a>
                            </div>
                        </div>
                    </div>
                    <form action="#" class="comment-form bg-gray form-wrapper round-10" id="cmt-form">
                        <h4 class="fs-20 fw-bold text-title mb-2">Leave A Comment</h2>
                            <p class="mb-25">Your email address will not be published. Required fields are marked</p>
                            <div class="row gx-xl-3">
                                <div class="col-md-6">
                                    <div class="form-group position-relative mb-25">
                                        <input type="text" required
                                            class="w-100 bg-white border-0 outline-0 round-5 text-para"
                                            placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mb-25">
                                        <input type="email" placeholder="Email" required
                                            class="w-100 ht-60 bg-white border-0 outline-0 round-5 text-para">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group mb-25">
                                        <textarea name="messages" id="messages" cols="30" rows="10" placeholder="Comment"
                                            class="w-100 ht-152 bg-white border-0 outline-0 round-5 text-para resize-0"></textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-check checkbox style-one mb-25">
                                        <input class="form-check-input" type="checkbox" id="test_2">
                                        <label class="form-check-label" for="test_2" class="fw-medium">
                                            Save my name, email, and website in this browser for the next time I comment.
                                        </label>
                                    </div>
                                    <div class="col-xl-5 col-md-6">
                                        <button class="btn style-one d-inline-flex flex-wrap align-items-center p-0"><span
                                                class="btn-text d-inline-block fw-semibold position-relative transition">Post
                                                A Comment</span><span
                                                class="btn-icon position-relative d-flex flex-column align-items-center justify-content-center rounded-circle transition"><i
                                                    class="ri-arrow-right-up-line"></i></span></button>
                                    </div>
                                </div>
                            </div>
                    </form>
            </div>
            <div class="col-xl-4">
                <aside class="sidebar mt-lg-50">
                    <div class="sidebar-widget search-widget bg-gray round-10">
                        <form action="#" class="position-relative">
                            <input type="search" placeholder="Search"
                                class="w-100 bg-white border-0 round-10 text-para outline-0">
                            <button class="position-absolute top-0 h-100 bg-transparent border-0"><img
                                    src="{{asset('frontend/assets/img/icons/search-icon.svg')}}" alt="Icon"></button>
                        </form>
                    </div>
                    <div class="sidebar-widget category-widget bg-gray round-10">
                        <h3 class="sidebar-widget-title fs-18 fw-semibold text-title mb-15">Categories</h3>
                        <ul class="list-unstyled mb-0">
                            <li><a href="#" class="position-relative"><img
                                        src="{{asset('frontend/assets/img/icons/circle-arrow.svg')}}" alt="Icon"
                                        class="position-absolute">Building</a></li>
                            <li><a href="#" class="position-relative"><img
                                        src="{{asset('frontend/assets/img/icons/circle-arrow.svg')}}" alt="Icon"
                                        class="position-absolute">Construction</a></li>
                            <li><a href="#" class="position-relative"><img
                                        src="{{asset('frontend/assets/img/icons/circle-arrow.svg')}}" alt="Icon"
                                        class="position-absolute">Real Estate</a></li>
                            <li><a href="#" class="position-relative"><img
                                        src="{{asset('frontend/assets/img/icons/circle-arrow.svg')}}" alt="Icon"
                                        class="position-absolute">Property</a></li>
                            <li><a href="#" class="position-relative"><img
                                        src="{{asset('frontend/assets/img/icons/circle-arrow.svg')}}" alt="Icon"
                                        class="position-absolute">Architectural Design</a></li>
                            <li><a href="#" class="position-relative"><img
                                        src="{{asset('frontend/assets/img/icons/circle-arrow.svg')}}" alt="Icon"
                                        class="position-absolute">Residential</a></li>
                        </ul>
                    </div>
                    <div class="sidebar-widget category-widget bg-gray round-10">
                        <h3 class="sidebar-widget-title fs-18 fw-semibold text-title mb-15">Recent Posts</h3>
                        <div class="rp-post-wrap">
                            <div class="rp-post-card d-flex flex-wrap align-items-center">
                                <div class="rp-post-img">
                                    <img src="{{asset('frontend/assets/img/blog/post-thumb-1.jpg')}}" alt="Post Thumb">
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
                                    <img src="{{asset('frontend/assets/img/blog/post-thumb-2.jpg')}}" alt="Post Thumb">
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
                                    <img src="{{asset('frontend/assets/img/blog/post-thumb-3.jpg')}}" alt="Post Thumb">
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
                            <li><a href="#">Business</a></li>
                            <li><a href="#">Development</a></li>
                            <li><a href="#">Design</a></li>
                            <li><a href="#">Marketing</a></li>
                            <li><a href="#">Real Estate</a></li>
                        </ul>
                    </div>
                </aside>
            </div>
        </div>
    </div>
    <!-- Blog Details End -->
@endsection
