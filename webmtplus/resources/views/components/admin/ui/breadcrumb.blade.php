<nav aria-label="breadcrumb">
    <ol class="breadcrumb align-items-center mb-0 lh-1">
        <li class="breadcrumb-item">
            <a href="{{ route('dashboard') }}" class="d-flex align-items-center text-decoration-none">
                <i class="ri-home-8-line fs-15 text-primary me-1"></i>
                <span class="text-body fs-14 hover">{{ __('admin.dashboard.title') }}</span>
            </a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">
            <span class="text-secondary">{{ $pageTitle }}</span>
        </li>
    </ol>
</nav>
