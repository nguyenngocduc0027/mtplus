<!-- Blog Section Start -->
<div class="blog-area position-relative z-1 round-20">
    <div class="container pb-90">
        <div class="row">
            <div class="col-xl-8 offset-xl-2 col-md-10 offset-md-1 text-center">
                <h6 class="section-subtitle style-two d-inline-block fs-13 ls-1 font-optional fw-semibold position-relative text_primary mb-25"
                    data-cue="slideInUp"><img src="/frontend/assets/img/icons/star-3.svg" alt="Icon">{{ __('common.news') }}</h6>
                <h2 class="section-title style-one text-center text-title px-xxl-5 mb-40" data-cue="slideInUp"
                    data-delay="300">
                    <span class="fw-black">{{ app()->getLocale() == 'en' ? 'NEWS & STRATEGIC PERSPECTIVES' : 'TIN TỨC & GÓC NHÌN CHIẾN LƯỢC' }}</span>
                </h2>
            </div>
        </div>
        <div class="row gx-xxl-25 justify-content-center">
            @php
                // Example static data; replace with dynamic data as needed
                $newsItems = [
                    [
                        'image' => 'frontend/assets/img/blog/blog-1.jpg',
                        'date' => '12',
                        'month' => 'Jul',
                        'author' => 'Admin',
                        'title' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                        'linkNews' => 'javaScript:void(0)',
                        'linkAuthor' => 'javaScript:void(0)',
                    ],
                    [
                        'image' => 'frontend/assets/img/blog/blog-2.jpg',
                        'date' => '16',
                        'month' => 'Jul',
                        'author' => 'Admin',
                        'title' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                        'linkNews' => 'javaScript:void(0)',
                        'linkAuthor' => 'javaScript:void(0)',
                    ],
                    [
                        'image' => 'frontend/assets/img/blog/blog-3.jpg',
                        'date' => '19',
                        'month' => 'Jul',
                        'author' => 'Admin',
                        'title' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                        'linkNews' => 'javaScript:void(0)',
                        'linkAuthor' => 'javaScript:void(0)',
                    ],
                ];
            @endphp
            @foreach ($newsItems as $item)
                <x-ui.item-news
                    :image="$item['image']"
                    :date="$item['date']"
                    :month="$item['month']"
                    :author="$item['author']"
                    :title="$item['title']"
                    :linkNews="$item['linkNews']"
                    :linkAuthor="$item['linkAuthor']"
                />
            @endforeach
        </div>
    </div>
</div>
<!-- Blog Section End -->
