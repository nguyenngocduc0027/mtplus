<!-- Project Section Start -->
@if(isset($projectSection) && $projectSection->is_active)
<div class="container pt-120">
    <div class="row">
        <div class="col-xl-8 offset-xl-2 col-md-10 offset-md-1 text-center px-xxl-5">
            <h6 class="section-subtitle style-one d-inline-block fs-13 ls-1 font-optional fw-semibold position-relative text_primary mb-20"
                data-cue="slideInUp"><img src="{{ asset('/frontend/assets/img/icons/star-3.svg') }}" alt="Icon">{{ $projectSection->getSubtitle() }}</h6>
            <h2 class="section-title style-one text-title px-xxl-5 mb-40" data-cue="slideInUp" data-delay="300">
                <span class="fw-black">{{ $projectSection->getHeading() }}</span>
            </h2>
        </div>
    </div>
</div>
@else
<div class="container pt-120">
    <div class="row">
        <div class="col-xl-8 offset-xl-2 col-md-10 offset-md-1 text-center px-xxl-5">
            <h6 class="section-subtitle style-one d-inline-block fs-13 ls-1 font-optional fw-semibold position-relative text_primary mb-20"
                data-cue="slideInUp"><img src="{{ asset('/frontend/assets/img/icons/star-3.svg') }}" alt="Icon">{{ __('common.our_projects') }}</h6>
            <h2 class="section-title style-one text-title px-xxl-5 mb-40" data-cue="slideInUp" data-delay="300">
                <span class="fw-black">{{ app()->getLocale() == 'en' ? 'FEATURED PROJECTS – CREATING REAL VALUE' : 'DỰ ÁN TIÊU BIỂU – KIẾN TẠO GIÁ TRỊ THỰC' }}</span>
            </h2>
        </div>
    </div>
</div>
@endif
<div class="project-slider-one swiper pb-120" data-cue="slideInUp">
    <div class="swiper-wrapper">
        @php
        $projects = [
            [
                'image' => 'project-1.jpg',
                'title' => 'Project Alpha',
                'subtitle' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.",
            ],
            [
                'image' => 'project-2.jpg',
                'title' => 'Project Beta',
                'subtitle' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.",
            ],
            [
                'image' => 'project-3.jpg',
                'title' => 'Project Gamma',
                'subtitle' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.",
            ],
        ];
        @endphp
        @foreach ($projects as $index => $project)
            <x-ui.project-section
                :counter="str_pad($index + 1, 2, '0', STR_PAD_LEFT)"
                :image="'/frontend/assets/img/project/' . $project['image']"
                :title="$project['title']"
                :subtitle="$project['subtitle']"
            />
        @endforeach
    </div>
</div>
<!-- Project Section End -->
