<!-- Brand Partner Start -->
<div class="brand-slider swiper ptb-120">
    <div class="swiper-wrapper align-items-center">
        @foreach ($array as $logo)
            <div class="swiper-slide">
                <div class="brand-logo">
                    <img src="{{asset($logo)}}" alt="Brand Logo" class="d-block mx-auto">
                </div>
            </div>
        @endforeach
    </div>
</div>
<!-- Brand Partner End -->
