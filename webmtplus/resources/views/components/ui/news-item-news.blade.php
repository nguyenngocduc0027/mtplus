<div class="col-md-6">
    <div class="blog-card style-one position-relative mb-30">
        <div class="blog-img position-relative overflow-hidden round-20">
            <img src="{{ asset($image) }}" alt="Blog" class="round-20">
            <a href="{{ $linkNews }}"
                class="blog-date bg-white text-title position-absolute d-flex flex-column align-items-center justify-content-center round-10"><span
                    class="font-secondary fs-24 fw-black d-block">{{ $date }}</span>{{ $month }}</a>
        </div>
        <ul class="blog-metainfo list-unstyled">
            <li class="fs-15 d-inline-block position-relative">By <a href="{{ $linkAuthor }}">{{ $author }}</a></li>
            <li class="fs-15 d-inline-block position-relative">No Comment</li>
        </ul>
        <h3 class="fs-24 fw-black"><a href="{{ $linkNews }}"
                class="text-title link-hover-primary fw-bold transition line-2">{{ $title }}</a></h3>
        <x-ui.read-more-button href="{{ $linkNews }}" />
    </div>
</div>
