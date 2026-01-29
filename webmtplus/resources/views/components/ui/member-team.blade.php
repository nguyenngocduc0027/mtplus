    <div class="team-card style-one img-hover-zoom">
        <div class="team-img round-10 img-zoom position-relative overflow-hidden">
            <img src="{{ asset($image) }}" alt="Image"
                class="position-absolute top-0 bottom-0 start-0 end-0 z-1 round-10 transition">
            <img src="{{ asset($image2) }}" alt="Image" class="round-10 transition">
        </div>
        <div class="team-info d-flex flex-wrap justify-content-between">
            <div>
                <h3 class="fw-bold mb-1"><a href="team-single.html"
                        class="text-title link-hover-primary transition">{{ $name }}</a></h3>
                <span>{{ $position }}</span>
            </div>
            <ul class="social-profile style-two list-unstyled mb-0">
                <li><a href="{{ $facebook }}" target="_blank"
                        class="d-flex flex-column align-items-center justify-content-center rounded-circle"><i
                            class="ri-facebook-fill"></i></a></li>
                <li><a href="{{ $twitter }}" target="_blank"
                        class="d-flex flex-column align-items-center justify-content-center rounded-circle"><i
                            class="ri-twitter-x-line"></i></a></li>
            </ul>
        </div>
    </div>
