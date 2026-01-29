<!-- Breadcrumb Section Start -->
<div class="breadcrumb-area position-relative z-1">
    <img src="/frontend/assets/img/breadcrumb/br-line-shape.png" alt="Shape"
        class="br-line-shape position-absolute top-0 start-0 w-100 h-100 z-n1">
    <img src="/frontend/assets/img/breadcrumb/br-shape-1.png" alt="Shape"
        class="br-shape-one position-absolute z-n1 bounce">
    <img src="/frontend/assets/img/breadcrumb/br-shape-2.png" alt="Shape"
        class="br-shape-two position-absolute bottom-0 z-n1 moveHorizontal">
    <div class="container-fluid px-xxl-5">
        <div class="row">
            <div class="col-md-10 offset-md-1 text-center">
                <h2 class="section-title style-one fw-black text-title text-capitalize">{{ $breadcrumbTitle }}</h2>
                <ul class="br-menu list-unstyled">
                    <li class="text-capitalize"><a href="{{ route('home') }}"><img
                                src="/frontend/assets/img/icons/home-icon.svg"
                                alt="Icon">{{ __('common.home') }}</a></li>
                    <li class="text-capitalize">{{ $breadcrumbTitle }}</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Section End -->
