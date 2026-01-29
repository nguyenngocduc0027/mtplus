<div class="col-xl-4">
    <aside class="sidebar mt-lg-50">
        <div class="sidebar-widget search-widget bg-gray round-10">
            <form action="#" class="position-relative">
                <input type="search" placeholder="Search" class="w-100 bg-white border-0 round-10 text-para outline-0">
                <button class="position-absolute top-0 h-100 bg-transparent border-0"><img
                        src="/frontend/assets/img/icons/search-icon.svg" alt="Icon"></button>
            </form>
        </div>
        {{-- <img src="/frontend/assets/img/icons/circle-arrow.svg" alt="Icon" class="position-absolute"> --}}
        <div class="sidebar-widget category-widget bg-gray round-10">
            <h3 class="sidebar-widget-title fs-18 fw-semibold text-title mb-15">Categories</h3>
            <ul class="list-unstyled mb-0">
                @php
                    $categories = [
                        [
                            'name' => 'Building',
                            'url' => '#',
                        ],
                        [
                            'name' => 'Architecture',
                            'url' => '#',
                        ],
                        [
                            'name' => 'Interior Design',
                            'url' => '#',
                        ],
                        [
                            'name' => 'Construction',
                            'url' => '#',
                        ],
                        [
                            'name' => 'Real Estate',
                            'url' => '#',
                        ],
                    ];
                @endphp
                @foreach ($categories as $category)
                    <li><a href="{{ $category['url'] }}" class="position-relative"><img
                                src="/frontend/assets/img/icons/circle-arrow.svg" alt="Icon"
                                class="position-absolute">{{ $category['name'] }}</a></li>
                @endforeach
            </ul>
        </div>
        <div class="sidebar-widget category-widget bg-gray round-10">
            <h3 class="sidebar-widget-title fs-18 fw-semibold text-title mb-15">Recent Posts</h3>
            <div class="rp-post-wrap">
                @php
                    $recentPosts = [
                        [
                            'date' => '19 Jul, 2025',
                            'title' => 'From Blueprint To Reality How Renius Delivers Complex',
                            'postUrl' => route('detail-news'),
                            'dateUrl' => route('detail-news'),
                            'image' => '/frontend/assets/img/blog/post-thumb-1.jpg',
                        ],
                        [
                            'date' => '15 Jun, 2025',
                            'title' => 'Innovative Architectural Designs for Modern Living Spaces',
                            'postUrl' => route('detail-news'),
                            'dateUrl' => route('detail-news'),
                            'image' => '/frontend/assets/img/blog/post-thumb-2.jpg',
                        ],
                        [
                            'date' => '10 May, 2025',
                            'title' => 'Sustainable Building Practices in Today’s Construction Industry',
                            'postUrl' => route('detail-news'),
                            'dateUrl' => route('detail-news'),
                            'image' => '/frontend/assets/img/blog/post-thumb-3.jpg',
                        ],
                        [
                            'date' => '05 Apr, 2025',
                            'title' => 'The Future of Urban Development: Trends to Watch',
                            'postUrl' => route('detail-news'),
                            'dateUrl' => route('detail-news'),
                            'image' => '/frontend/assets/img/blog/post-thumb-3.jpg',
                        ],
                        [
                            'date' => '28 Mar, 2025',
                            'title' => 'Maximizing Space: Innovative Interior Design Solutions',
                            'postUrl' => route('detail-news'),
                            'dateUrl' => route('detail-news'),
                            'image' => '/frontend/assets/img/blog/post-thumb-2.jpg',
                        ],
                    ];
                @endphp
                @foreach ( $recentPosts as $post )
                    <div class="rp-post-card d-flex flex-wrap align-items-center">
                        <div class="rp-post-img">
                            <img src="{{ $post['image'] }}" alt="Post Thumb">
                        </div>
                        <div class="rp-post-info">
                            <a href="{{ $post['dateUrl'] }}"
                                class="fs-15 fw-medium text_primary link-hover-primary d-block mb-1">{{ $post['date'] }}</a>
                            <h5 class="fs-15 fw-bold mb-0"><a href="{{ $post['postUrl'] }}"
                                    class="text-title hover-text-primary transition">{{ $post['title'] }}</a></h5>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="sidebar-widget tags-widget bg-gray round-10">
            <h3 class="sidebar-widget-title fs-18 fw-semibold text-title mb-15">Tags</h3>
            <ul class="list-unstyled mb-0">
                <li><a href="posts-by-tag.html">Business</a></li>
                <li><a href="posts-by-tag.html">Development</a></li>
                <li><a href="posts-by-tag.html">Design</a></li>
                <li><a href="posts-by-tag.html">Marketing</a></li>
                <li><a href="posts-by-tag.html">Real Estate</a></li>
            </ul>
        </div>
    </aside>
</div>
