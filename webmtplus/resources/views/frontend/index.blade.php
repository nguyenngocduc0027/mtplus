<!DOCTYPE html>
<html lang="zxx">
    <head>
        @include('frontend.layout.meta')
        
        <!-- Link of CSS files -->
        <link rel="stylesheet" href="{{asset('frontend/assets/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/assets/css/swiper-bundle.min.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/assets/css/scrollcue.min.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/assets/css/remixicon.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/assets/css/header.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/assets/css/style.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/assets/css/footer.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/assets/css/responsive.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/assets/css/dark-theme.css')}}">
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
                @include('frontend.layout.header')
                <!-- Navbar End -->

                 @yield('content')

                <!-- Footer Section Start -->
                @include('frontend.layout.footer')
                <!-- Footer End -->

            </div>
        </div>
        <!-- Back to Top -->
        <div id="progress-wrap" class="progress-wrap style-one">
            <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
              <path id="progress-path" d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"/>
            </svg>
        </div>

        <!-- Link of JS files -->
        <script src="{{asset('frontend/assets/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('frontend/assets/js/megamenu.js')}}"></script>
        <script src="{{asset('frontend/assets/js/swiper-bundle.min.js')}}"></script>
        <script src="{{asset('frontend/assets/js/fslightbox.js')}}"></script>
        <script src="{{asset('frontend/assets/js/gsap.min.js')}}"></script>
        <script src="{{asset('frontend/assets/js/scrollTrigger.min.js')}}"></script>
        <script src="{{asset('frontend/assets/js/lenis.min.js')}}"></script>
        <script src="{{asset('frontend/assets/js/scrollToPlugin.js')}}"></script>
        <script src="{{asset('frontend/assets/js/SplitText.min.js')}}"></script>
        <script src="{{asset('frontend/assets/js/customEase.js')}}"></script>
        <script src="{{asset('frontend/assets/js/scrollcue.min.js')}}"></script>
        <script src="{{asset('frontend/assets/js/main.js')}}"></script>
    </body>
</html>