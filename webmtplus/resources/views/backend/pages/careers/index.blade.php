@extends('backend.layouts.app')
@props(['pageTitle' => __('admin.careers.all_careers')])
@section('content-backend')
    <div class="d-flex justify-content-between align-items-center flex-wrap gap-2 mb-4 mt-1">
        <h3 class="mb-0">{{ $pageTitle }}</h3>
        <x-admin.ui.breadcrumb :pageTitle="$pageTitle" />
    </div>

    <div class="card bg-white rounded-10 border border-white mb-4">
        <div class="d-flex justify-content-between align-items-center flex-wrap gap-3 p-20">
            <div class="d-flex flex-wrap gap-2 gap-xxl-5 align-items-center">
                <form class="table-src-form position-relative m-0">
                    <input type="text" class="form-control w-340" placeholder="{{ __('admin.careers.search_placeholder') }}" id="searchInput">
                    <div class="src-btn position-absolute top-50 start-0 translate-middle-y bg-transparent p-0 border-0">
                        <span class="material-symbols-outlined">search</span>
                    </div>
                </form>
                <ul class="p-0 mb-0 list-unstyled d-flex align-items-center flex-wrap" style="gap: 20px;">
                    <li class="fs-16">
                        {{ __('admin.careers.total_careers') }} <span class="text-primary">({{ $careers->total() }})</span>
                    </li>
                    <li class="fs-16">
                        {{ __('admin.careers.active_careers') }} <span class="text-primary">({{ \App\Models\Career::active()->count() }})</span>
                    </li>
                    <li class="fs-16">
                        {{ __('admin.careers.open_positions') }} <span class="text-primary">({{ \App\Models\Career::active()->open()->count() }})</span>
                    </li>
                </ul>
            </div>

            <a href="{{ route('admin.careers.create') }}" class="text-primary fs-16 text-decoration-none">
                + {{ __('admin.careers.add_career') }}
            </a>
        </div>

        <div class="default-table-area mx-minus-1 table-product-list">
            <div class="table-responsive">
                <table class="table align-middle" id="careersTable">
                    <thead>
                        <tr>
                            <th scope="col" class="fw-medium ps-20">{{ __('admin.careers.job_title') }}</th>
                            <th scope="col" class="fw-medium">{{ __('admin.careers.location') }}</th>
                            <th scope="col" class="fw-medium">{{ __('admin.careers.job_type') }}</th>
                            <th scope="col" class="fw-medium">{{ __('admin.careers.experience') }}</th>
                            <th scope="col" class="fw-medium">{{ __('admin.careers.deadline') }}</th>
                            <th scope="col" class="fw-medium">{{ __('admin.careers.visibility') }}</th>
                            <th scope="col" class="fw-medium">{{ __('admin.careers.actions') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($careers as $career)
                            <tr class="career-row"
                                data-search="{{ strtolower($career->title_vi . ' ' . $career->title_en . ' ' . ($career->location_vi ?? '') . ' ' . $career->job_type) }}">
                                <td class="text-body ps-20">
                                    <div class="d-flex align-items-center">
                                        <a href="{{ route('admin.careers.show', $career->slug) }}" class="flex-shrink-0">
                                            @if($career->image)
                                                <img src="{{ $career->image }}" style="width: 50px; height: 50px; object-fit: cover;" class="rounded" alt="{{ $career->title_vi }}">
                                            @else
                                                <div style="width: 50px; height: 50px;" class="rounded bg-light d-flex align-items-center justify-content-center">
                                                    <i class="material-symbols-outlined text-secondary">work</i>
                                                </div>
                                            @endif
                                        </a>
                                        <div class="flex-grow-1 ms-12">
                                            <a href="{{ route('admin.careers.show', $career->slug) }}" class="fs-16 text-secondary text-decoration-none hover-text fw-medium d-block">
                                                {{ $career->title_vi }}
                                            </a>
                                            <span class="fs-13 text-body">{{ $career->title_en }}</span>
                                            @if($career->is_featured)
                                                <span class="badge bg-warning text-dark ms-2">
                                                    <i class="ri-star-fill"></i> {{ __('admin.careers.featured') }}
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </td>
                                <td class="text-body">{{ $career->location_vi ?? '-' }}</td>
                                <td class="text-body">
                                    <span class="badge bg-info">{{ $career->job_type_label }}</span>
                                </td>
                                <td class="text-body">{{ $career->experience_required ?? '-' }}</td>
                                <td class="text-body">
                                    @if($career->application_deadline)
                                        @if($career->is_open)
                                            <span class="badge bg-success">{{ $career->application_deadline->format('d/m/Y') }}</span>
                                        @else
                                            <span class="badge bg-danger">{{ __('admin.careers.expired') }}</span>
                                        @endif
                                    @else
                                        <span class="badge bg-secondary">{{ __('admin.careers.no_deadline') }}</span>
                                    @endif
                                </td>
                                <td class="text-body">
                                    @if($career->is_active)
                                        <span class="badge bg-success">{{ __('admin.careers.visible') }}</span>
                                    @else
                                        <span class="badge bg-secondary">{{ __('admin.careers.hidden') }}</span>
                                    @endif
                                </td>
                                <td>
                                    <div class="d-flex justify-content-end" style="gap: 12px;">
                                        <a href="{{ route('admin.careers.show', $career->slug) }}" class="bg-transparent p-0 border-0" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="{{ __('admin.careers.view') }}">
                                            <i class="material-symbols-outlined fs-16 fw-normal text-primary">visibility</i>
                                        </a>
                                        <a href="{{ route('admin.careers.edit', $career->slug) }}" class="bg-transparent p-0 border-0 hover-text-success" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="{{ __('admin.careers.edit') }}">
                                            <i class="material-symbols-outlined fs-16 fw-normal text-body">edit</i>
                                        </a>
                                        <form action="{{ route('admin.careers.destroy', $career->slug) }}" method="POST" class="delete-form d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="bg-transparent p-0 border-0 hover-text-danger" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="{{ __('admin.careers.delete') }}">
                                                <i class="material-symbols-outlined fs-16 fw-normal text-body">delete</i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="text-center py-5">
                                    <i class="ri-briefcase-line fs-48 text-secondary mb-3 d-block"></i>
                                    <p class="text-secondary mb-0">
                                        {{ __('admin.careers.no_careers') }}
                                        <a href="{{ route('admin.careers.create') }}" class="text-primary">{{ __('admin.careers.add_career') }}</a>
                                    </p>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

        @if($careers->hasPages())
            <div class="d-flex justify-content-center justify-content-sm-between align-items-center text-center flex-wrap gap-2 showing-wrap pt-15 p-20">
                <div>
                    {{ __('admin.careers.showing') }} {{ $careers->firstItem() ?? 0 }} {{ __('admin.careers.to') }} {{ $careers->lastItem() ?? 0 }}
                    {{ __('admin.careers.of') }} {{ $careers->total() }} {{ __('admin.careers.entries') }}
                </div>
                <div>
                    {{ $careers->links('pagination::bootstrap-4') }}
                </div>
            </div>
        @endif
    </div>
@endsection

@push('scripts')
    <script>
        // Check for success message from URL parameter or session
        document.addEventListener('DOMContentLoaded', function() {
            const urlParams = new URLSearchParams(window.location.search);
            const successMessage = urlParams.get('success') || '{{ session('success') }}';

            if (successMessage && successMessage !== '') {
                Swal.fire({
                    icon: 'success',
                    title: '{{ __('admin.careers.success_title') }}',
                    text: successMessage,
                    confirmButtonText: '{{ __('admin.careers.ok_button') }}',
                    confirmButtonColor: '#3085d6',
                    timer: 3000,
                    timerProgressBar: true
                });

                // Clean URL by removing success parameter
                if (urlParams.has('success')) {
                    const newUrl = window.location.pathname;
                    window.history.replaceState({}, document.title, newUrl);
                }
            }

            // Check for error message
            @if(session('error'))
                Swal.fire({
                    icon: 'error',
                    title: '{{ __('admin.careers.error_title') }}',
                    text: '{{ session('error') }}',
                    confirmButtonText: '{{ __('admin.careers.ok_button') }}',
                    confirmButtonColor: '#d33'
                });
            @endif

            // Check for validation errors
            @if($errors->any())
                Swal.fire({
                    icon: 'error',
                    title: '{{ __('admin.careers.validation_error_title') }}',
                    html: '<ul style="text-align: left;">@foreach($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul>',
                    confirmButtonText: '{{ __('admin.careers.ok_button') }}',
                    confirmButtonColor: '#d33'
                });
            @endif
        });

        // Search functionality
        document.getElementById('searchInput').addEventListener('keyup', function(e) {
            const searchTerm = e.target.value.toLowerCase();
            const rows = document.querySelectorAll('.career-row');

            rows.forEach(row => {
                const searchData = row.dataset.search;
                if (searchData.includes(searchTerm)) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });
        });

        // Delete confirmation with SweetAlert
        document.querySelectorAll('.delete-form').forEach(form => {
            form.addEventListener('submit', function(e) {
                e.preventDefault();
                Swal.fire({
                    title: '{{ __('admin.careers.confirm_delete_title') }}',
                    text: '{{ __('admin.careers.confirm_delete_text') }}',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#3085d6',
                    confirmButtonText: '{{ __('admin.careers.confirm_delete_button') }}',
                    cancelButtonText: '{{ __('admin.careers.cancel_button') }}'
                }).then((result) => {
                    if (result.isConfirmed) {
                        this.submit();
                    }
                });
            });
        });

        // Initialize tooltips
        const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]');
        const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl));
    </script>
@endpush
