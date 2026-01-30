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
                    <h2 class="section-title style-one fw-black text-title">Blog Right Sidebar</h2>
                    <ul class="br-menu list-unstyled">
                        <li><a href="{{route('home')}}"><img src="{{asset('frontend/assets/img/icons/home-icon.svg')}}" alt="Icon">HOME</a></li>
                        <li>BLOG</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End -->

    <!-- Blog Section Start -->
    <div class="container ptb-120">
        <div class="row">
            <div class="col-xl-8">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="blog-card style-one position-relative mb-30">
                            <div class="blog-img position-relative overflow-hidden round-20">
                                <img src="{{asset('frontend/assets/img/blog/blog-1.jpg')}}" alt="Blog" class="round-20">
                                <a href="#"
                                    class="blog-date bg-white text-title position-absolute d-flex flex-column align-items-center justify-content-center round-10"><span
                                        class="font-secondary fs-24 fw-black d-block">12</span> Jul</a>
                            </div>
                            <ul class="blog-metainfo list-unstyled">
                                <li class="fs-15 d-inline-block position-relative">By <a
                                        href="#">Admin</a></li>
                                <li class="fs-15 d-inline-block position-relative">1 Comment</li>
                            </ul>
                            <h3 class="fs-24 fw-black"><a href="{{route('blogs.detail')}}"
                                    class="text-title link-hover-primary fw-bold transition">Top Kitchen Renovation Tips To
                                    Maximize Space And Style</a></h3>
                            <a href="{{route('blogs.detail')}}" class="link style-one fw-semibold">Read More<img
                                    src="{{asset('frontend/assets/img/icons/right-arrow-small.svg')}}" alt="Icon"></a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="blog-card style-one position-relative mb-30">
                            <div class="blog-img position-relative overflow-hidden round-20">
                                <img src="{{asset('frontend/assets/img/blog/blog-2.jpg')}}" alt="Blog" class="round-20">
                                <a href="#"
                                    class="blog-date bg-white text-title position-absolute d-flex flex-column align-items-center justify-content-center round-10"><span
                                        class="font-secondary fs-24 fw-black d-block">11</span>Jul</a>
                            </div>
                            <ul class="blog-metainfo list-unstyled">
                                <li class="fs-15 d-inline-block position-relative">By <a
                                        href="#">Admin</a></li>
                                <li class="fs-15 d-inline-block position-relative">No Comment</li>
                            </ul>
                            <h3 class="fs-24 fw-black"><a href="{{route('blogs.detail')}}"
                                    class="text-title link-hover-primary fw-bold transition">Outdoor Renovation Trends That
                                    Will Elevate Your Backyard</a></h3>
                            <a href="{{route('blogs.detail')}}" class="link style-one">Read More <img
                                    src="{{asset('frontend/assets/img/icons/right-arrow-small.svg')}}" alt="Icon"></a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="blog-card style-one position-relative mb-30">
                            <div class="blog-img position-relative overflow-hidden round-20">
                                <img src="{{asset('frontend/assets/img/blog/blog-3.jpg')}}" alt="Blog" class="round-20">
                                <a href="#"
                                    class="blog-date bg-white text-title position-absolute d-flex flex-column align-items-center justify-content-center round-10"><span
                                        class="font-secondary fs-24 fw-black d-block">10</span> Jul</a>
                            </div>
                            <ul class="blog-metainfo list-unstyled">
                                <li class="fs-15 d-inline-block position-relative">By <a
                                        href="#">Admin</a></li>
                                <li class="fs-15 d-inline-block position-relative">No Comment</li>
                            </ul>
                            <h3 class="fs-24 fw-black"><a href="{{route('blogs.detail')}}"
                                    class="text-title link-hover-primary fw-bold transition">Avoid These Common Mistakes
                                    During Your Home Renovation</a></h3>
                            <a href="{{route('blogs.detail')}}" class="link style-one fw-semibold">Read More<img
                                    src="{{asset('frontend/assets/img/icons/right-arrow-small.svg')}}" alt="Icon"></a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="blog-card style-one position-relative mb-30">
                            <div class="blog-img position-relative overflow-hidden round-20">
                                <img src="{{asset('frontend/assets/img/blog/blog-4.jpg')}}" alt="Blog" class="round-20">
                                <a href="#"
                                    class="blog-date bg-white text-title position-absolute d-flex flex-column align-items-center justify-content-center round-10"><span
                                        class="font-secondary fs-24 fw-black d-block">09</span> Jul</a>
                            </div>
                            <ul class="blog-metainfo list-unstyled">
                                <li class="fs-15 d-inline-block position-relative">By <a
                                        href="#">Admin</a></li>
                                <li class="fs-15 d-inline-block position-relative">No Comment</li>
                            </ul>
                            <h3 class="fs-24 fw-black"><a href="{{route('blogs.detail')}}"
                                    class="text-title link-hover-primary fw-bold transition">5 Trends Shaping The Future Of
                                    Real Estate Development In 2025</a></h3>
                            <a href="{{route('blogs.detail')}}" class="link style-one fw-semibold">Read More<img
                                    src="{{asset('frontend/assets/img/icons/right-arrow-small.svg')}}" alt="Icon"></a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="blog-card style-one position-relative mb-30">
                            <div class="blog-img position-relative overflow-hidden round-20">
                                <img src="{{asset('frontend/assets/img/blog/blog-5.jpg')}}" alt="Blog" class="round-20">
                                <a href="#"
                                    class="blog-date bg-white text-title position-absolute d-flex flex-column align-items-center justify-content-center round-10"><span
                                        class="font-secondary fs-24 fw-black d-block">08</span> Jul</a>
                            </div>
                            <ul class="blog-metainfo list-unstyled">
                                <li class="fs-15 d-inline-block position-relative">By <a
                                        href="#">Admin</a></li>
                                <li class="fs-15 d-inline-block position-relative">No Comment</li>
                            </ul>
                            <h3 class="fs-24 fw-black"><a href="{{route('blogs.detail')}}"
                                    class="text-title link-hover-primary fw-bold transition">Expect When Partnering With A
                                    Full-Service Construction Group</a></h3>
                            <a href="{{route('blogs.detail')}}" class="link style-one fw-semibold">Read More<img
                                    src="{{asset('frontend/assets/img/icons/right-arrow-small.svg')}}" alt="Icon"></a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="blog-card style-one position-relative mb-30">
                            <div class="blog-img position-relative overflow-hidden round-20">
                                <img src="{{asset('frontend/assets/img/blog/blog-6.jpg')}}" alt="Blog" class="round-20">
                                <a href="#"
                                    class="blog-date bg-white text-title position-absolute d-flex flex-column align-items-center justify-content-center round-10"><span
                                        class="font-secondary fs-24 fw-black d-block">03</span> Jul</a>
                            </div>
                            <ul class="blog-metainfo list-unstyled">
                                <li class="fs-15 d-inline-block position-relative">By <a
                                        href="#">Admin</a></li>
                                <li class="fs-15 d-inline-block position-relative">No Comment</li>
                            </ul>
                            <h3 class="fs-24 fw-black"><a href="{{route('blogs.detail')}}"
                                    class="text-title link-hover-primary fw-bold transition">Inside A Renius Project The
                                    Phases Of Commercial Construction</a></h3>
                            <a href="{{route('blogs.detail')}}" class="link style-one fw-semibold">Read More<img
                                    src="{{asset('frontend/assets/img/icons/right-arrow-small.svg')}}" alt="Icon"></a>
                        </div>
                    </div>
                </div>
                <ul class="page-nav pagination justify-content-center mb-0 mt-lg-4">
                    <li class="page-item">
                        <a class="page-link d-flex flex-column align-items-center justify-content-center rounded-circle"
                            href="blog-right-sidebar.html" aria-label="Previous">
                            <img src="{{asset('frontend/assets/img/icons/left-long-arrow-gray.svg')}}" alt="Icon">
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
                            <img src="{{asset('frontend/assets/img/icons/right-long-arrow-gray.svg')}}" alt="Icon">
                        </a>
                    </li>
                </ul>
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
                            <li><a href="posts-by-category.html" class="position-relative"><img
                                        src="{{asset('frontend/assets/img/icons/circle-arrow.svg')}}" alt="Icon"
                                        class="position-absolute">Building</a></li>
                            <li><a href="posts-by-category.html" class="position-relative"><img
                                        src="{{asset('frontend/assets/img/icons/circle-arrow.svg')}}" alt="Icon"
                                        class="position-absolute">Construction</a></li>
                            <li><a href="posts-by-category.html" class="position-relative"><img
                                        src="{{asset('frontend/assets/img/icons/circle-arrow.svg')}}" alt="Icon"
                                        class="position-absolute">Real Estate</a></li>
                            <li><a href="posts-by-category.html" class="position-relative"><img
                                        src="{{asset('frontend/assets/img/icons/circle-arrow.svg')}}" alt="Icon"
                                        class="position-absolute">Property</a></li>
                            <li><a href="posts-by-category.html" class="position-relative"><img
                                        src="{{asset('frontend/assets/img/icons/circle-arrow.svg')}}" alt="Icon"
                                        class="position-absolute">Architectural Design</a></li>
                            <li><a href="posts-by-category.html" class="position-relative"><img
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
                                    <h5 class="fs-15 fw-bold mb-0"><a href="{{route('blogs.detail')}}"
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
                                    <h5 class="fs-15 fw-bold mb-0"><a href="{{route('blogs.detail')}}"
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
                                    <h5 class="fs-15 fw-bold mb-0"><a href="{{route('blogs.detail')}}"
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
