@extends('backend.layouts.app')
@props(['pageTitle' => __('admin.news_categories.all_categories')])
@section('content-backend')
    <div class="d-flex justify-content-between align-items-center flex-wrap gap-2 mb-4 mt-1">
        <h3 class="mb-0">{{ $pageTitle }}</h3>
        <x-admin.ui.breadcrumb :pageTitle="$pageTitle" />
    </div>

    <div class="card bg-white rounded-10 border border-white mb-4">
        <div class="d-flex justify-content-between align-items-center flex-wrap gap-3 p-20">
            <div class="d-flex flex-wrap gap-2 gap-xxl-5 align-items-center">
                <ul class="p-0 mb-0 list-unstyled d-flex align-items-center flex-wrap" style="gap: 20px;">
                    <li class="fs-16">
                        {{ __('admin.news_categories.total_categories') }} <span class="text-primary">({{ $categories->total() }})</span>
                    </li>
                </ul>
            </div>

            <a href="{{ route('admin.news.categories.create') }}" class="text-primary fs-16 text-decoration-none">
                + {{ __('admin.news_categories.add_category') }}
            </a>
        </div>

        <div class="default-table-area mx-minus-1 table-product-list">
            <div class="table-responsive">
                <table class="table align-middle">
                    <thead>
                        <tr>
                            <th scope="col" class="fw-medium ps-20">{{ __('admin.news_categories.name') }}</th>
                            <th scope="col" class="fw-medium">{{ __('admin.news_categories.slug') }}</th>
                            <th scope="col" class="fw-medium">{{ __('admin.news_categories.icon') }}</th>
                            <th scope="col" class="fw-medium">{{ __('admin.news_categories.order') }}</th>
                            <th scope="col" class="fw-medium">{{ __('admin.news_categories.news_count') }}</th>
                            <th scope="col" class="fw-medium">{{ __('admin.news_categories.status') }}</th>
                            <th scope="col" class="fw-medium">{{ __('admin.news_categories.actions') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($categories as $category)
                            <tr>
                                <td class="text-body ps-20">
                                    <div>
                                        <div class="fs-16 fw-medium">{{ $category->name_vi }}</div>
                                        <small class="text-muted">{{ $category->name_en }}</small>
                                    </div>
                                </td>
                                <td class="text-body">
                                    <code>{{ $category->slug }}</code>
                                </td>
                                <td class="text-body">
                                    @if($category->icon)
                                        <img src="{{ $category->icon }}" style="width: 40px; height: 40px; object-fit: contain;" alt="{{ $category->name }}">
                                    @else
                                        <span class="text-muted">-</span>
                                    @endif
                                </td>
                                <td class="text-body">
                                    <span class="badge bg-secondary">{{ $category->order }}</span>
                                </td>
                                <td class="text-body">
                                    <span class="badge bg-info">{{ $category->news_count }} {{ __('admin.news_categories.news') }}</span>
                                </td>
                                <td class="text-body">
                                    @if($category->is_active)
                                        <span class="badge bg-success">{{ __('admin.news_categories.active') }}</span>
                                    @else
                                        <span class="badge bg-secondary">{{ __('admin.news_categories.inactive') }}</span>
                                    @endif
                                </td>
                                <td>
                                    <div class="d-flex justify-content-end" style="gap: 12px;">
                                        <a href="{{ route('admin.news.categories.edit', $category->id) }}" class="bg-transparent p-0 border-0 hover-text-success" data-bs-toggle="tooltip" data-bs-title="{{ __('admin.news_categories.edit') }}">
                                            <i class="material-symbols-outlined fs-16 fw-normal text-body">edit</i>
                                        </a>
                                        <form action="{{ route('admin.news.categories.destroy', $category->id) }}" method="POST" class="delete-form d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="bg-transparent p-0 border-0 hover-text-danger" data-bs-toggle="tooltip" data-bs-title="{{ __('admin.news_categories.delete') }}">
                                                <i class="material-symbols-outlined fs-16 fw-normal text-body">delete</i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="text-center py-5">
                                    <i class="ri-folder-line fs-48 text-secondary mb-3 d-block"></i>
                                    <p class="text-secondary mb-0">
                                        {{ __('admin.news_categories.no_categories') }}
                                        <a href="{{ route('admin.news.categories.create') }}" class="text-primary">{{ __('admin.news_categories.add_category') }}</a>
                                    </p>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

        @if($categories->hasPages())
            <div class="d-flex justify-content-center justify-content-sm-between align-items-center text-center flex-wrap gap-2 showing-wrap pt-15 p-20">
                <div>
                    {{ __('admin.news_categories.showing') }} {{ $categories->firstItem() ?? 0 }} {{ __('admin.news_categories.to') }} {{ $categories->lastItem() ?? 0 }}
                    {{ __('admin.news_categories.of') }} {{ $categories->total() }} {{ __('admin.news_categories.entries') }}
                </div>
                <div>
                    {{ $categories->links('pagination::bootstrap-4') }}
                </div>
            </div>
        @endif
    </div>
@endsection

@push('scripts')
    <script>
        // Success/Error messages
        document.addEventListener('DOMContentLoaded', function() {
            @if(session('success'))
                Swal.fire({
                    icon: 'success',
                    title: '{{ __('admin.news_categories.success_title') }}',
                    text: '{{ session('success') }}',
                    confirmButtonText: '{{ __('admin.news_categories.ok_button') }}',
                    confirmButtonColor: '#3085d6',
                    timer: 3000,
                    timerProgressBar: true
                });
            @endif

            @if(session('error'))
                Swal.fire({
                    icon: 'error',
                    title: '{{ __('admin.news_categories.error_title') }}',
                    text: '{{ session('error') }}',
                    confirmButtonText: '{{ __('admin.news_categories.ok_button') }}',
                    confirmButtonColor: '#d33'
                });
            @endif
        });

        // Delete confirmation
        document.querySelectorAll('.delete-form').forEach(form => {
            form.addEventListener('submit', function(e) {
                e.preventDefault();
                Swal.fire({
                    title: '{{ __('admin.news_categories.confirm_delete_title') }}',
                    text: '{{ __('admin.news_categories.confirm_delete_text') }}',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#3085d6',
                    confirmButtonText: '{{ __('admin.news_categories.confirm_delete_button') }}',
                    cancelButtonText: '{{ __('admin.news_categories.cancel_button') }}'
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
