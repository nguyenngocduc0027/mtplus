<!DOCTYPE html>
<html lang="vi">

<head>
    <x-layout.head pageTitle="{{ $pageTitle }}" />
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
            <x-layout.header />

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
    <div class="chat-float position-fixed bottom-0 end-0 p-3 d-flex flex-column gap-2">

        <!-- Call -->
        <a href="tel:0901234567" class="btn btn-danger rounded-circle shadow chat-btn" title="Gọi điện">
            <i class="bi bi-telephone-fill"></i>
        </a>

        <!-- Zalo -->
        <a href="https://zalo.me/0901234567" target="_blank" class="btn btn-primary rounded-circle shadow chat-btn zalo"
            title="Chat Zalo">
            Z
        </a>

        <!-- WhatsApp -->
        <a href="https://wa.me/84901234567" target="_blank" class="btn btn-success rounded-circle shadow chat-btn"
            title="Chat WhatsApp">
            <i class="bi bi-whatsapp"></i>
        </a>

        <!-- Messenger -->
        <a href="https://m.me/yourpage" target="_blank" class="btn btn-info rounded-circle shadow chat-btn"
            title="Chat Messenger">
            <i class="bi bi-messenger"></i>
        </a>

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
