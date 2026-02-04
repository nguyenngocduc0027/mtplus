<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <!-- Links Of CSS File -->
    <link rel="stylesheet" href="/backend/assets/css/sidebar-menu.css">
    <link rel="stylesheet" href="/backend/assets/css/simplebar.css">
    <link rel="stylesheet" href="/backend/assets/css/prism.css">
    <link rel="stylesheet" href="/backend/assets/css/quill.snow.css">
    <link rel="stylesheet" href="/backend/assets/css/remixicon.css">
    <link rel="stylesheet" href="/backend/assets/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="/backend/assets/css/jsvectormap.min.css">
    <link rel="stylesheet" href="/backend/assets/css/style.css">

    <!-- Toastify -->
    <script src="https://cdn.jsdelivr.net/npm/toastify-js"></script>

    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @stack('styles')

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="/uploads/favicon.png">

    <!-- Title -->
    <title>{{ config('app.name') }} - {{ $pageTitle }}</title>
</head>

<body class="bg-body-bg">

    <!-- Start Preloader Area -->
    <div class="preloader" id="preloader">
        <div class="preloader">
            <div class="waviy position-relative">
                @php
                    $letters = config('app.name');
                @endphp
                @for ($i = 0; $i < strlen($letters); $i++)
                    <span class="d-inline-block">{{ $letters[$i] }}</span>
                @endfor
            </div>
        </div>
    </div>
    <!-- End Preloader Area -->

    <x-admin.layouts.sidebar />

    <!-- Start Main Content Area -->
    <div class="container-fluid">
        <div class="main-content d-flex flex-column">
            <x-admin.layouts.header />

            <div class="main-content-container overflow-hidden">
                @yield('content-backend')
            </div>

            <div class="flex-grow-1"></div>

            <x-admin.layouts.footer />
        </div>
    </div>
    <!-- Start Main Content Area -->

    <!-- Link Of JS File -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">

    <script src="/backend/assets/js/bootstrap.bundle.min.js"></script>
    <script src="/backend/assets/js/sidebar-menu.js"></script>
    <script src="/backend/assets/js/quill.min.js"></script>
    <script src="/backend/assets/js/data-table.js"></script>
    <script src="/backend/assets/js/prism.js"></script>
    <script src="/backend/assets/js/clipboard.min.js"></script>
    <script src="/backend/assets/js/simplebar.min.js"></script>
    <script src="/backend/assets/js/apexcharts.min.js"></script>
    <script src="/backend/assets/js/echarts.min.js"></script>
    <script src="/backend/assets/js/swiper-bundle.min.js"></script>
    <script src="/backend/assets/js/fullcalendar.main.js"></script>
    <script src="/backend/assets/js/jsvectormap.min.js"></script>
    <script src="/backend/assets/js/world-merc.js"></script>
    <script src="/backend/assets/js/custom/apexcharts.js"></script>
    <script src="/backend/assets/js/custom/echarts.js"></script>
    <script src="/backend/assets/js/custom/maps.js"></script>
    <script src="/backend/assets/js/custom/custom.js"></script>

    @stack('scripts')
    <script src="{{ asset('backend/tinymce/tinymce.min.js') }}"></script>
  <script type="text/javascript">
      tinymce.init({
          selector: '#tyni, #tyni-vi, #tyni-en',
          plugins: 'advlist autolink lists link charmap preview anchor table image',
          toolbar: 'undo redo | formatselect | ' +
              'bold italic backcolor | alignleft aligncenter ' +
              'alignright alignjustify | bullist numlist outdent indent | ' +
              'removeformat | help | table | link image',
          images_upload_url: "{{url('/admin/upload-image')}}",
          relative_urls: false,
          document_base_url: "{{ url('/') }}",
          automatic_uploads: true,

      })
  </script>
</body>

</html>
