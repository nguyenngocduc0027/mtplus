<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Link of CSS files -->
    <link rel="stylesheet" href="/frontend/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/frontend/assets/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="/frontend/assets/css/scrollcue.min.css">
    <link rel="stylesheet" href="/frontend/assets/css/remixicon.css">
    <link rel="stylesheet" href="/frontend/assets/css/header.css">
    <link rel="stylesheet" href="/frontend/assets/css/style.css">
    <link rel="stylesheet" href="/frontend/assets/css/footer.css">
    <link rel="stylesheet" href="/frontend/assets/css/responsive.css">
    <link rel="stylesheet" href="/frontend/assets/css/dark-theme.css">

    <title>{{ config('app.name', 'Laravel') }} - Home</title>
    <link rel="icon" type="image/png" href="/frontend/assets/img/favicon.png">
</head>

<body>

    <!--  Preloader Start -->
    <div class="preloader-area" id="preloader">
        <div class="spinner">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!--  Preloader End -->

    <!-- Theme Switcher Start -->
    <div class="switch-theme-mode">
        <label id="switch" class="switch">
            <input type="checkbox" onchange="toggleTheme()" id="slider">
            <span class="slider round"></span>
        </label>
    </div>
    <!-- Theme Switcher End -->

    <!-- Custom Cursor -->
    <div class="cursor"><span class="cursor-text"></span></div>
    <div class="cursor-inner"></div>

    <div id="smooth-wrapper">
        <div id="smooth-content">

            <!-- Navbar Start -->
            <div class="navbar-area style-one position-relative" id="navbar">
                <div class="container-fluid">
                    <div class="navbar-wrapper d-flex justify-content-between align-items-center">
                        <a href="index.html" class="navbar-brand">
                            <img width="120px" src="/frontend/assets/img/logo-white.png" alt="Logo">
                        </a>
                        <div class="menu-area me-auto">
                            <div class="overlay"></div>
                            <nav class="menu">
                                <div class="menu-mobile-header">
                                    <button type="button" class="menu-mobile-arrow bg-transparent border-0"><i
                                            class="ri-arrow-left-s-line"></i></button>
                                    <div class="menu-mobile-title"></div>
                                    <button type="button" class="menu-mobile-close bg-transparent border-0"><i
                                            class="ri-close-line"></i></button>
                                </div>
                                <ul class="menu-section p-0 mb-0 lh-1">
                                    <li class="menu-item-has-children">
                                        <a href="javascript:void(0)" class="active">Home<i class="ri-add-line"></i></a>
                                        <ul class="menu-subs menu-column-1">
                                            <li class="list-item">
                                                <a href="index.html" class="active">Home - Renovation</a>
                                            </li>
                                            <li class="list-item">
                                                <a href="index-2.html">Home - Building Construction</a>
                                            </li>
                                            <li class="list-item">
                                                <a href="index-3.html">Home - Build Craft</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="javascript:void(0)">Pages<i class="ri-add-line"></i></a>
                                        <ul class="menu-subs menu-column-1">
                                            <li><a href="about.html">About Us</a></li>
                                            <li class="menu-item-has-children">
                                                <a href="javascript:void(0)">Services<i class="ri-add-line"></i></a>
                                                <ul class="menu-subs menu-column-1">
                                                    <li><a href="services.html">Services</a></li>
                                                    <li><a href="service-single.html">Service Single</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children">
                                                <a href="javascript:void(0)">Team<i class="ri-add-line"></i></a>
                                                <ul class="menu-subs menu-column-1">
                                                    <li><a href="team.html">Team</a></li>
                                                    <li><a href="team-single.html">Team Single</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children">
                                                <a href="javascript:void(0)">Careers<i class="ri-add-line"></i></a>
                                                <ul class="menu-subs menu-column-1">
                                                    <li><a href="careers.html">Careers</a></li>
                                                    <li><a href="career-single.html">Career Single</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="awards.html">Awards</a></li>
                                            <li><a href="location.html">Location</a></li>
                                            <li><a href="pricing-plan.html">Pricing Plan</a></li>
                                            <li><a href="testimonials.html">Testimonials</a></li>
                                            <li><a href="faq.html">FAQ</a></li>
                                            <li><a href="terms-conditions.html">Terms & Conditions</a></li>
                                            <li><a href="privacy-policy.html">Privacy Policy</a></li>
                                            <li><a href="error-404.html">Error 404</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="javascript:void(0)">Properties<i class="ri-add-line"></i></a>
                                        <ul class="menu-subs menu-column-1">
                                            <li><a href="properties.html">Properties</a></li>
                                            <li><a href="property-single.html">Property Single</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="javascript:void(0)">Projects<i class="ri-add-line"></i></a>
                                        <ul class="menu-subs menu-column-1">
                                            <li><a href="projects.html">Projects</a></li>
                                            <li><a href="project-single.html">Project Single</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="javascript:void(0)">Blog<i class="ri-add-line"></i></a>
                                        <ul class="menu-subs menu-column-1">
                                            <li class="menu-item-has-children"><a href="javascript:void(0)">Blog
                                                    Layout<i class="ri-add-line"></i></a>
                                                <ul class="menu-subs menu-column-1">
                                                    <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                                                    <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
                                                    <li><a href="blog-grid.html">Blog Grid</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children"><a href="javascript:void(0)">Blog
                                                    Details Layout<i class="ri-add-line"></i></a>
                                                <ul class="menu-subs menu-column-1">
                                                    <li><a href="blog-details-left-sidebar.html">Blog Details Left
                                                            Sidebar</a></li>
                                                    <li><a href="blog-details-right-sidebar.html">Blog Details Right
                                                            Sidebar</a></li>
                                                    <li><a href="blog-details-no-sidebar.html">Blog Details No
                                                            Sidebar</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children"><a href="javascript:void(0)">Others<i
                                                        class="ri-add-line"></i></a>
                                                <ul class="menu-subs menu-column-1">
                                                    <li><a href="posts-by-author.html">Posts By Author</a></li>
                                                    <li><a href="posts-by-date.html">Posts By Date</a></li>
                                                    <li><a href="posts-by-category.html">Posts By Category</a></li>
                                                    <li><a href="posts-by-tag.html">Posts By Tag</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.html">Contact Us</a></li>
                                </ul>
                            </nav>
                        </div>
                        <div class="other-options d-flex flex-wrap align-items-center justify-content-end">
                            <div class="option-item d-flex flex-wrap align-items-center">
                                <div class="mobile-options position-relative d-lg-none">
                                    <button class="dropdown-toggle  text-center bg-transparent border-0 p-0 transition"
                                        type="button" data-bs-toggle="dropdown" aria-expanded="true">
                                        <i class="ri-more-fill"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-centered mobile-option-list top-1 border-0"
                                        data-bs-popper="static">
                                        <div class="dropdown-item">
                                            <div
                                                class="contact-link d-flex flex-wrap align-items-center position-relative transition">
                                                <span
                                                    class="contact-icon d-flex flex-column align-items-center justify-content-center rounded-circle transition"><img
                                                        src="/frontend/assets/img/icons/phone.svg" alt="Icon"
                                                        class="transition"></span>
                                                <div>
                                                    <span class="text-white d-block">Call Us:</span>
                                                    <span class="text_primary fw-semibold">+6857 886 960</span>
                                                </div>
                                                <a href="tel:6857886960"
                                                    class="position-absolute top-0 start-0 w-100 h-100"></a>
                                            </div>
                                        </div>
                                        <div class="dropdown-item">
                                            <a href="contact.html"
                                                class="btn style-two d-inline-flex flex-wrap align-items-center p-0"><span
                                                    class="btn-text d-inline-block fw-semibold position-relative transition">Get
                                                    In Touch</span><span
                                                    class="btn-icon position-relative d-flex flex-column align-items-center justify-content-center rounded-circle transition"><img
                                                        src="/frontend/assets/img/icons/up-right-arrow-black.svg"
                                                        alt="Image"></span></a>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="contact-link d-lg-flex flex-wrap align-items-center position-relative d-none transition">
                                    <span
                                        class="contact-icon d-flex flex-column align-items-center justify-content-center rounded-circle transition"><img
                                            src="/frontend/assets/img/icons/phone.svg" alt="Icon"
                                            class="transition"></span>
                                    <div class="d-xl-inline d-none">
                                        <span class="text-white d-block">Call Us:</span>
                                        <span class="text_primary fw-semibold">+6857 886 960</span>
                                    </div>
                                    <a href="tel:6857886960" class="position-absolute top-0 start-0 w-100 h-100"></a>
                                </div>
                            </div>
                            <div class="option-item d-lg-block d-none">
                                <a href="contact.html"
                                    class="btn style-two d-inline-flex flex-wrap align-items-center p-0"><span
                                        class="btn-text d-inline-block fw-semibold position-relative transition">Get In
                                        Touch</span><span
                                        class="btn-icon position-relative d-flex flex-column align-items-center justify-content-center rounded-circle transition"><img
                                            src="/frontend/assets/img/icons/up-right-arrow-black.svg" alt="Image"></span></a>
                            </div>
                            <div class="option-item d-lg-none">
                                <button type="button" class="menu-mobile-trigger">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Navbar End -->

            <!-- Hero Section Start -->
            <div class="hero-area style-one position-relative z-1">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-7 col-lg-7">
                            <div class="hero-content">
                                <h6 class="section-subtitle style-two d-inline-block fs-13 ls-1 font-optional fw-normal position-relative text_secondary mb-12"
                                    data-cue="slideInUp"><img src="/frontend/assets/img/icons/star-2.svg"
                                        alt="Icon">TRANSFORMING HOUSES INTO DREAM HOMES</h6>
                                <h1 class="font-secondary text-white" data-cue="slideInUp" data-delay="300">Expert
                                    <span class="fw-black">Renovation Services</span> Tailored Your Style & Budget!
                                </h1>
                                <p data-cue="slideInUp" data-delay="400">Home renovation is the process of improving
                                    or modernizing a residential property to enhance its functionality, comfort, and
                                    aesthetic.</p>
                                <a href="services.html"
                                    class="btn style-one d-inline-flex flex-wrap align-items-center p-0"
                                    data-cue="slideInUp" data-delay="500"><span
                                        class="btn-text d-inline-block fw-semibold position-relative transition">Our
                                        Services</span><span
                                        class="btn-icon position-relative d-flex flex-column align-items-center justify-content-center rounded-circle transition"><i
                                            class="ri-arrow-right-up-line"></i></span></a>
                            </div>
                            <div class="hero-subcontent d-flex flex-wrap">
                                <div class="hero-thumb round-20">
                                    <img src="/frontend/assets/img/hero/hero-thumb-1.jpg" alt="Image" class="round-20">
                                </div>
                                <div class="hero-thumb-para">
                                    <p class="text-white">Innovate Smart Solution For Your Next Home Renovation</p>
                                    <a href="services.html" class="link style-one fw-semibold">View All Solution<img
                                            src="/frontend/assets/img/icons/right-arrow-small.svg" alt="Icon"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="circle-text-wrap position-relative overflow-hidden z-1 ms-xl-auto"
                                data-cue="slideInUp" data-delay="300">
                                <img src="/frontend/assets/img/hero/circle-text-1.svg" alt="Circle Text"
                                    class="rotate position-relative z-1">
                                <a data-fslightbox="" href="https://www.youtube.com/watch?v=u31qwQUeGuM"
                                    class="play-icon position-absolute d-flex flex-column align-items-center justify-content-center rounded-circle bg_primary z-1"><i
                                        class="ri-play-large-fill"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <img src="/frontend/assets/img/hero/hero-img-1.png" alt="Image" class="hero-img position-absolute end-0"
                    data-cue="slideInRight" data-delay="300">
            </div>
            <!-- Hero Section End -->


            <!-- Category Section Start -->

            <!-- Category Section End -->

            <!-- Move Text Start -->

            <!-- Move Text End -->

            <!-- About Us Section Start -->

            <!-- About Us Section End -->

            <!-- Service Section Start -->

            <!-- Service Section End -->

            <!-- Why Choose Us Section Start -->

            <!-- Why Choose Us Section End -->

            <!-- Project Section Start -->

            <!-- Project Section End -->

            <!-- Move Text Start -->

            <!-- Move Text End -->

            <!-- Testimonial Section Start -->

            <!-- Testimonial Section End -->

            <!-- CTA Section Start -->

            <!-- CTA Section End -->

            <!-- Team Section Start -->

            <!-- Team Section End -->

            <!-- Location Section Start -->

            <!-- Location Section End -->

            <!-- Blog Section Start -->

            <!-- Blog Section End -->

            <!-- Footer Section Start -->

            <!-- Footer End -->

        </div>
    </div>
    <!-- Back to Top -->
    <div id="progress-wrap" class="progress-wrap style-one">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path id="progress-path" d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>

    <!-- Link of JS files -->
    <script src="/frontend/assets/js/bootstrap.bundle.min.js"></script>
    <script src="/frontend/assets/js/megamenu.js"></script>
    <script src="/frontend/assets/js/swiper-bundle.min.js"></script>
    <script src="/frontend/assets/js/fslightbox.js"></script>
    <script src="/frontend/assets/js/gsap.min.js"></script>
    <script src="/frontend/assets/js/scrollTrigger.min.js"></script>
    <script src="/frontend/assets/js/lenis.min.js"></script>
    <script src="/frontend/assets/js/scrollToPlugin.js"></script>
    <script src="/frontend/assets/js/SplitText.min.js"></script>
    <script src="/frontend/assets/js/customEase.js"></script>
    <script src="/frontend/assets/js/scrollcue.min.js"></script>
    <script src="/frontend/assets/js/main.js"></script>
</body>

</html>
