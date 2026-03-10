@props([
    'categories' => [],
    'tags' => [],
    'featuredNews' => [],
])

<div class="col-xl-4">
    <aside class="sidebar mt-lg-50">
        <!-- Search Widget -->
        <div class="sidebar-widget search-widget bg-gray round-10">
            <form action="{{ route('news') }}" method="GET" class="position-relative">
                <input type="search" name="search" placeholder="{{ __('common.search') }}" value="{{ request('search') }}" class="w-100 bg-white border-0 round-10 text-para outline-0">
                <button type="submit" class="position-absolute top-0 h-100 bg-transparent border-0">
                    <img src="/frontend/assets/img/icons/search-icon.svg" alt="Icon">
                </button>
            </form>
        </div>

        <!-- Categories Widget -->
        @if($categories && count($categories) > 0)
            <div class="sidebar-widget category-widget bg-gray round-10">
                <h3 class="sidebar-widget-title fs-18 fw-semibold text-title mb-15">{{ __('common.categories') }}</h3>
                <ul class="list-unstyled mb-0">
                    @foreach ($categories as $category)
                        <li>
                            <a href="{{ route('news', ['category' => $category->slug]) }}" class="position-relative">
                                <img src="/frontend/assets/img/icons/circle-arrow.svg" alt="Icon" class="position-absolute">
                                {{ $category->name }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Recent Posts Widget -->
        @if($featuredNews && count($featuredNews) > 0)
            <div class="sidebar-widget category-widget bg-gray round-10">
                <h3 class="sidebar-widget-title fs-18 fw-semibold text-title mb-15">{{ __('common.recent_posts') }}</h3>
                <div class="rp-post-wrap">
                    @foreach ($featuredNews as $post)
                        <div class="rp-post-card d-flex flex-wrap align-items-center">
                            <div class="rp-post-img" style="width: 80px; height: 80px; overflow: hidden; border-radius: 8px; flex-shrink: 0;">
                                @if($post->featured_image)
                                    <img src="{{ $post->featured_image }}" alt="{{ $post->title }}"
                                        style="width: 100%; height: 100%; object-fit: cover; object-position: center;">
                                @else
                                    <img src="/frontend/assets/img/blog/post-thumb-1.jpg" alt="{{ $post->title }}"
                                        style="width: 100%; height: 100%; object-fit: cover; object-position: center;">
                                @endif
                            </div>
                            <div class="rp-post-info">
                                <a href="{{ route('detail-news', $post->slug) }}" class="fs-15 fw-medium text_primary link-hover-primary d-block mb-1">
                                    {{ $post->published_at ? $post->published_at->format('d M, Y') : '' }}
                                </a>
                                <h5 class="fs-15 fw-bold mb-0">
                                    <a href="{{ route('detail-news', $post->slug) }}" class="text-title hover-text-primary transition">
                                        {{ Str::limit($post->title, 50) }}
                                    </a>
                                </h5>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif

        <!-- Tags Widget -->
        @if($tags && count($tags) > 0)
            <div class="sidebar-widget tags-widget bg-gray round-10">
                <h3 class="sidebar-widget-title fs-18 fw-semibold text-title mb-15">{{ __('common.tags') }}</h3>
                <ul class="list-unstyled mb-0">
                    @foreach($tags as $tag)
                        <li>
                            <a href="{{ route('news', ['tag' => $tag->slug]) }}">{{ $tag->name }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        @endif
    </aside>
</div>
