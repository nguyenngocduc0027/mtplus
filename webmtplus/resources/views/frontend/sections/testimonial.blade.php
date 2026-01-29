<!-- Testimonial Section Start -->
<div class="container ptb-120">
    <div class="row">
        <div class="col-xxl-4 col-lg-5 pe-xxl-0 mb-md-30">
            <h6 class="section-subtitle style-two fs-13 ls-1 font-optional fw-semibold position-relative text_primary mb-16"
                data-cue="slideInUp"><img src="/frontend/assets/img/icons/home-icon.svg" alt="Icon">{{ __('common.testimonials') }}</h6>
            <h2 class="section-title style-one fw-normal text-title mb-35" data-cue="slideInUp" data-delay="300">
                <span class="fw-black">{{ app()->getLocale() == 'en' ? 'WHAT OUR CLIENTS SAY ABOUT US' : 'KHÁCH HÀNG NÓI GÌ VỀ CHÚNG TÔI?' }}</span>
            </h2>
            <div class="rating-box style-one d-flex flex-wrap align-items-center round-10 me-xxl-4"
                data-cue="slideInUp">
                <h2 class="fw-black position-relative mb-0">4.8</h2>
                <div>
                    <ul class="rating list-unstyled mb-1">
                        <li><img src="/frontend/assets/img/icons/star.svg" alt="Icon"></li>
                        <li><img src="/frontend/assets/img/icons/star.svg" alt="Icon"></li>
                        <li><img src="/frontend/assets/img/icons/star.svg" alt="Icon"></li>
                        <li><img src="/frontend/assets/img/icons/star.svg" alt="Icon"></li>
                        <li><img src="/frontend/assets/img/icons/star.svg" alt="Icon"></li>
                    </ul>
                    <p class="fs-xxl-18 fw-medium mb-0"><span class="text_primary fw-bold">300+</span>{{ app()->getLocale() == 'en' ? 'Satisfied Customers' : 'Khách hàng hài lòng' }}</p>
                </div>
            </div>
        </div>
        <div class="col-xxl-8 col-lg-7 pe-xl-2" data-cue="slideInUp">
            <div class="testimonial-slider-one style-one swiper position-relative z-1 pt-1">
                <div class="swiper-wrapper">
                    @php
                    // You can add more testimonials here as needed
                    $testimonials = [
                        [
                            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
                            'name' => 'Alice Johnson',
                            'position' => 'CEO, TechCorp'
                        ],
                        [
                            'description' => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.',
                            'name' => 'Michael Smith',
                            'position' => 'Founder, InnovateX'
                        ],
                        [
                            'description' => 'But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth.',
                            'name' => 'Emily Davis',
                            'position' => 'Marketing Director, Creatives Inc.'
                        ],
                        [
                            'description' => 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident.',
                            'name' => 'David Wilson',
                            'position' => 'Product Manager, SolutionsPlus'
                        ]
                    ];
                    @endphp
                    @foreach ($testimonials as $testimonial)
                        <x-ui.item-testimonial
                            :description="$testimonial['description']"
                            :name="$testimonial['name']"
                            :position="$testimonial['position']" />
                    @endforeach
                </div>
                <div class="slider-btn style-one d-flex flex-wrap justify-content-md-end">
                    <button
                        class="prev-btn testimonial-prev border-0 d-flex flex-column align-items-center justify-content-center rounded-circle me-2 z-1"><img
                            src="/frontend/assets/img/icons/left-long-arrow-orange.svg" alt="Icon"></button>
                    <button
                        class="next-btn testimonial-next border-0 d-flex flex-column align-items-center justify-content-center rounded-circle ms-2 z-1"><img
                            src="/frontend/assets/img/icons/right-long-arrow-orange.svg" alt="Icon"></button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial Section End -->
