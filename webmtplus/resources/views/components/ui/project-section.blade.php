<div class="swiper-slide">
    <div class="project-card style-one d-flex flex-wrap align-items-center">
        <div class="project-img position-relative z-1 round-10">
            <img src="{{ asset($image) }}" alt="Image" class="round-10" style="width: 570px; height: 635px; object-fit: cover;">
            <a href="project-single.html"
                class="circle-text-wrap position-absolute d-flex flex-column align-items-center justify-content-center rounded-circle transition">
                <img src="{{ asset('/frontend/assets/img/project/circle-text.png') }}" alt="Circle text"
                    class="d-block mx-auto rotate">
                <img src="{{ asset('/frontend/assets/img/icons/up-right-arrow-yellow.svg') }}" alt="Icon"
                    class="circle-text-icon position-absolute">
            </a>
        </div>
        <div class="project-info">
            <span class="project-counter font-secondary fw-black d-block">{{ $counter }}</span>
            <h3 class="fw-bold"><a href="project-single.html" class="text-title link-hover-primary transition">{{ $title }}</a></h3>
            <p class="position-relative mb-0"><img src="{{ asset('/frontend/assets/img/icons/pin-pink.svg') }}"
                    alt="Icon">{{ $subtitle }}</p>
        </div>
    </div>
</div>
