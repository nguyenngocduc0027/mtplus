<!-- Awards Section Start -->
@if(isset($awardsSection) && $awardsSection->is_active)
<div class="container pt-120 pb-90">
    <div class="row">
        <div class="col-xxl-6 offset-xl-3 col-xl-8 offset-xl-2 col-md-10 offset-md-1 text-center">
            <h6 class="section-subtitle style-two d-inline-block fs-13 ls-1 font-optional fw-semibold position-relative text_primary mb-25"
                data-cue="slideInUp"><img src="/frontend/assets/img/icons/star-3.svg" alt="Icon">{{ $awardsSection->getSubtitle() }}</h6>
            <h2 class="section-title style-one text-center text-title mb-40" data-cue="slideInUp" data-delay="300">
                <span class="fw-black">{{ $awardsSection->getHeading() }}</span>
            </h2>
        </div>
    </div>
@else
<div class="container pt-120 pb-90">
    <div class="row">
        <div class="col-xxl-6 offset-xl-3 col-xl-8 offset-xl-2 col-md-10 offset-md-1 text-center">
            <h6 class="section-subtitle style-two d-inline-block fs-13 ls-1 font-optional fw-semibold position-relative text_primary mb-25"
                data-cue="slideInUp"><img src="/frontend/assets/img/icons/star-3.svg" alt="Icon">{{ __('common.our_awards') }}</h6>
            <h2 class="section-title style-one text-center text-title mb-40" data-cue="slideInUp" data-delay="300">
                <span class="fw-black">{{ app()->getLocale() == 'en' ? 'AWARDS & RECOGNITION EVIDENCE OF EXCELLENCE' : 'GIẢI THƯỞNG & SỰ CÔNG NHẬN MINH CHỨNG CHO CHẤT LƯỢNG' }}</span>
            </h2>
        </div>
    </div>
@endif
    <div class="row justify-content-center">
        @if(isset($awardsSection))
            @php
                $awards = $awardsSection->getAwards();
            @endphp
            @if(count($awards) > 0)
                @foreach ($awards as $award)
                    <x-ui.item-award :icon="asset($award['icon'])" :year="$award['year']" :title="$award['title']" />
                @endforeach
            @else
                @php
                    $defaultAwards = [
                        [
                            'icon' => '/frontend/assets/img/badges/badge-1.svg',
                            'year' => '2021',
                            'title' => 'Top Real Estate Agency',
                        ],
                        [
                            'icon' => '/frontend/assets/img/badges/badge-2.svg',
                            'year' => '2022',
                            'title' => 'Innovative Property Solutions',
                        ],
                        [
                            'icon' => '/frontend/assets/img/badges/badge-3.svg',
                            'year' => '2019',
                            'title' => 'Best Property Management',
                        ],
                        [
                            'icon' => '/frontend/assets/img/badges/badge-4.svg',
                            'year' => '2023',
                            'title' => 'Excellence in Customer Service',
                        ],
                        [
                            'icon' => '/frontend/assets/img/badges/badge-5.svg',
                            'year' => '2024',
                            'title' => 'Top Real Estate Consultant',
                        ],
                    ];
                @endphp
                @foreach ($defaultAwards as $award)
                    <x-ui.item-award :icon="$award['icon']" :year="$award['year']" :title="$award['title']" />
                @endforeach
            @endif
        @else
            @php
                $defaultAwards = [
                    [
                        'icon' => '/frontend/assets/img/badges/badge-1.svg',
                        'year' => '2021',
                        'title' => 'Top Real Estate Agency',
                    ],
                    [
                        'icon' => '/frontend/assets/img/badges/badge-2.svg',
                        'year' => '2022',
                        'title' => 'Innovative Property Solutions',
                    ],
                    [
                        'icon' => '/frontend/assets/img/badges/badge-3.svg',
                        'year' => '2019',
                        'title' => 'Best Property Management',
                    ],
                    [
                        'icon' => '/frontend/assets/img/badges/badge-4.svg',
                        'year' => '2023',
                        'title' => 'Excellence in Customer Service',
                    ],
                    [
                        'icon' => '/frontend/assets/img/badges/badge-5.svg',
                        'year' => '2024',
                        'title' => 'Top Real Estate Consultant',
                    ],
                ];
            @endphp
            @foreach ($defaultAwards as $award)
                <x-ui.item-award :icon="$award['icon']" :year="$award['year']" :title="$award['title']" />
            @endforeach
        @endif
    </div>
</div>
<!-- Awards Section End -->
