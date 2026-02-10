<!DOCTYPE html>
<html lang="vi">

<head>
    <x-layout.head pageTitle="{{ $pageTitle }}" />
</head>

<body>
    <!-- Facebook SDK -->
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous"
            src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v18.0&appId=4234539646821029"
            nonce="YOUR_NONCE">
    </script>

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


    <!-- Custom Cursor -->
    <div class="cursor"><span class="cursor-text"></span></div>
    <div class="cursor-inner"></div>

    <div id="smooth-wrapper">
        <div id="smooth-content">
            <x-layout.header :headerClass="$headerClass" :logo="$logo" />

            <main>
                @yield('content')
            </main>

            <x-layout.footer />
        </div>
    </div>
    <!-- Back to Top -->
    <div id="progress-wrap" class="progress-wrap style-one">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path id="progress-path" d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>

    <!-- Floating Chat Buttons -->
    <x-ui.floating-chat-button messenger="metasoftware.vn" phone="0854980968" telegram="metasoftware_vn" />


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
