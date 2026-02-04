<!-- Team Section Start -->
@if(isset($teamSection) && $teamSection->is_active)
<div class="team-area style-one position-relative ptb-120">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 offset-xl-2 col-md-10 offset-md-1 text-center px-xxl-5">
                <h6 class="section-subtitle style-one d-inline-block fs-13 ls-1 font-optional fw-semibold position-relative text_primary mb-20"
                    data-cue="slideInUp"><img src="/frontend/assets/img/icons/star-3.svg"
                        alt="Icon">{{ $teamSection->getSubtitle() }}</h6>
                <h2 class="section-title style-one text-title px-xxl-5 mb-40" data-cue="slideInUp" data-delay="300">
                    <span class="fw-black">{{ $teamSection->getHeading() }}</span>
                </h2>
            </div>
        </div>
@else
<div class="team-area style-one position-relative ptb-120">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 offset-xl-2 col-md-10 offset-md-1 text-center px-xxl-5">
                <h6 class="section-subtitle style-one d-inline-block fs-13 ls-1 font-optional fw-semibold position-relative text_primary mb-20"
                    data-cue="slideInUp"><img src="/frontend/assets/img/icons/star-3.svg"
                        alt="Icon">{{ __('common.meet_our_team') }}</h6>
                <h2 class="section-title style-one text-title px-xxl-5 mb-40" data-cue="slideInUp" data-delay="300">
                    <span
                        class="fw-black">{{ app()->getLocale() == 'en' ? 'DEDICATED & EXPERIENCED EXPERT TEAM' : 'ĐỘI NGŨ CHUYÊN GIA TẬN TÂM & GIÀU KINH NGHIỆM' }}</span>
                </h2>
            </div>
        </div>
@endif
        <div class="team-slider-one swiper" data-cue="slideInUp">
            <div class="swiper-wrapper">
                @php
                    // Example team members data
                    $teamMembers = [
                        [
                            'image' => '/frontend/assets/img/team/team-1.jpg',
                            'image2' => '/frontend/assets/img/team/team-2.jpg',
                            'name' => 'Michael Harper',
                            'position' => 'Project Manager',
                            'facebook' => 'https://www.facebook.com',
                            'twitter' => 'https://x.com/',
                        ],
                        [
                            'image' => '/frontend/assets/img/team/team-2.jpg',
                            'image2' => '/frontend/assets/img/team/team-3.jpg',
                            'name' => 'Sarah Johnson',
                            'position' => 'Lead Designer',
                            'facebook' => 'https://www.facebook.com',
                            'twitter' => 'https://x.com/',
                        ],
                        [
                            'image' => '/frontend/assets/img/team/team-3.jpg',
                            'image2' => '/frontend/assets/img/team/team-4.jpg',
                            'name' => 'David Williams',
                            'position' => 'Senior Developer',
                            'facebook' => 'https://www.facebook.com',
                            'twitter' => 'https://x.com/',
                        ],
                        [
                            'image' => '/frontend/assets/img/team/team-4.jpg',
                            'image2' => '/frontend/assets/img/team/team-1.jpg',
                            'name' => 'Emily Brown',
                            'position' => 'Marketing Specialist',
                            'facebook' => 'https://www.facebook.com',
                            'twitter' => 'https://x.com/',
                        ],
                        [
                            'image' => '/frontend/assets/img/team/team-2.jpg',
                            'image2' => '/frontend/assets/img/team/team-3.jpg',
                            'name' => 'Sarah Johnson',
                            'position' => 'Lead Designer',
                            'facebook' => 'https://www.facebook.com',
                            'twitter' => 'https://x.com/',
                        ],
                    ];
                @endphp
                @foreach ($teamMembers as $member)
                    <div class="swiper-slide">
                        <x-ui.member-team :image="$member['image']" :image2="$member['image2']" :name="$member['name']" :position="$member['position']"
                        :facebook="$member['facebook']" :twitter="$member['twitter']" />
                    </div>
            @endforeach
        </div>
    </div>
</div>
<div class="slider-btn style-one d-flex flex-wrap justify-content-md-end">
    <button
        class="prev-btn team-prev border-0 d-flex flex-column align-items-center justify-content-center rounded-circle me-2 z-1"><img
            src="/frontend/assets/img/icons/left-long-arrow-orange.svg" alt="Icon"></button>
    <button
        class="next-btn team-next border-0 d-flex flex-column align-items-center justify-content-center rounded-circle ms-2 z-1"><img
            src="/frontend/assets/img/icons/right-long-arrow-orange.svg" alt="Icon"></button>
</div>
</div>
<!-- Team Section End -->
