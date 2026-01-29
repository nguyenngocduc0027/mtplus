<div class="col-xl-4 col-md-6">
    <div class="job-card style-one position-relative img-hover-zoom z-1 round-10 mb-30">
        <div class="job-img position-relative overflow-hidden img-zoom z-1 round-10">
            <img src="/frontend/assets/img/career/career-1.jpg" alt="Image"
                class="position-absolute top-0 start-0 w-100 h-100 transition round-10">
            <img src="/frontend/assets/img/career/career-1.jpg" alt="Image" class="transition round-10">
            <div class="job-salary fs-15 text-title bg-white position-absolute end-0">Salary: <span
                    class="fw-bold">{{ $salary }}</span></div>
        </div>
        <div class="job-info">
            <h3 class="fs-24 fw-bold"><a href="{{ $linkCareer }}" class="text-title link-hover-primary transition">{{ $title }}</a></h3>
            <ul class="job-metainfo list-unstyled">
                <li class="position-relative"><img src="/frontend/assets/img/icons/pin-orange-2.svg"
                        alt="Icon"><span class="fw-medium text-title me-1">Location:</span> {{ $location }}
                </li>
                <li class="position-relative"><img src="/frontend/assets/img/icons/bag-2.svg" alt="Icon"><span
                        class="fw-medium text-title me-1">Type:</span> {{ $type }}</li>
                <li class="position-relative"><img src="/frontend/assets/img/icons/user-2.svg" alt="Icon"><span
                        class="fw-medium text-title me-1">Experience:</span>{{ $experience }}</li>
            </ul>
            <div class="text-center">
                <a href="{{ $linkCareer }}" class="link style-one fw-semibold">Apply Now <img
                        src="/frontend/assets/img/icons/right-arrow-small.svg" alt="Icon"></a>
            </div>
        </div>
    </div>
</div>
