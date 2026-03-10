@extends('backend.layouts.app')
@props(['pageTitle' => __('admin.news.all_news')])
@section('content-backend')
    <div class="d-flex justify-content-between align-items-center flex-wrap gap-2 mb-4 mt-1">
        <h3 class="mb-0">{{ $pageTitle }}</h3>
        <x-admin.ui.breadcrumb :pageTitle="$pageTitle" />
    </div>

    <div class="card bg-white rounded-10 border border-white mb-4">
        <div class="d-flex justify-content-between align-items-center flex-wrap gap-3 p-20">
            <div class="d-flex flex-wrap gap-2 gap-xxl-5 align-items-center">
                <form class="table-src-form position-relative m-0" method="GET">
                    <input type="text" name="search" class="form-control w-340" placeholder="{{ __('admin.news.search_placeholder') }}" value="{{ request('search') }}">
                    <button type="submit" class="src-btn position-absolute top-50 start-0 translate-middle-y bg-transparent p-0 border-0">
                        <span class="material-symbols-outlined">search</span>
                    </button>
                </form>

                <div class="d-flex gap-2">
                    <select name="category" class="form-select form-control" onchange="this.form.submit()" form="filterForm">
                        <option value="">{{ __('admin.news.all_categories') }}</option>
                        @foreach($categories as $cat)
                            <option value="{{ $cat->id }}" {{ request('category') == $cat->id ? 'selected' : '' }}>
                                {{ $cat->name }}
                            </option>
                        @endforeach
                    </select>

                    <select name="status" class="form-select form-control" onchange="this.form.submit()" form="filterForm">
                        <option value="">{{ __('admin.news.all_status') }}</option>
                        <option value="published" {{ request('status') == 'published' ? 'selected' : '' }}>{{ __('admin.news.status_published') }}</option>
                        <option value="draft" {{ request('status') == 'draft' ? 'selected' : '' }}>{{ __('admin.news.status_draft') }}</option>
                        <option value="scheduled" {{ request('status') == 'scheduled' ? 'selected' : '' }}>{{ __('admin.news.status_scheduled') }}</option>
                        <option value="archived" {{ request('status') == 'archived' ? 'selected' : '' }}>{{ __('admin.news.status_archived') }}</option>
                    </select>
                </div>

                <form id="filterForm" method="GET" class="d-none"></form>

                <ul class="p-0 mb-0 list-unstyled d-flex align-items-center flex-wrap" style="gap: 20px;">
                    <li class="fs-16">
                        {{ __('admin.news.total_news') }} <span class="text-primary">({{ $news->total() }})</span>
                    </li>
                </ul>
            </div>

            <a href="{{ route('admin.news.create') }}" class="text-primary fs-16 text-decoration-none">
                + {{ __('admin.news.add_news') }}
            </a>
        </div>

        <div class="default-table-area mx-minus-1 table-product-list">
            <div class="table-responsive">
                <table class="table align-middle">
                    <thead>
                        <tr>
                            <th scope="col" class="fw-medium ps-20">{{ __('admin.news.title') }}</th>
                            <th scope="col" class="fw-medium">{{ __('admin.news.category') }}</th>
                            <th scope="col" class="fw-medium">{{ __('admin.news.status') }}</th>
                            <th scope="col" class="fw-medium">{{ __('admin.news.stats') }}</th>
                            <th scope="col" class="fw-medium">{{ __('admin.news.published_date') }}</th>
                            <th scope="col" class="fw-medium">{{ __('admin.news.actions') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($news as $item)
                            <tr>
                                <td class="text-body ps-20">
                                    <div class="d-flex align-items-center">
                                        <a href="{{ route('admin.news.show', $item->slug) }}" class="flex-shrink-0">
                                            @if($item->thumbnail)
                                                <img src="{{ $item->thumbnail }}" style="width: 60px; height: 60px; object-fit: cover;" class="rounded" alt="{{ $item->title_vi }}">
                                            @else
                                                <div style="width: 60px; height: 60px;" class="rounded bg-light d-flex align-items-center justify-content-center">
                                                    <i class="material-symbols-outlined text-secondary">article</i>
                                                </div>
                                            @endif
                                        </a>
                                        <div class="flex-grow-1 ms-12">
                                            <a href="{{ route('admin.news.show', $item->slug) }}" class="fs-16 text-secondary text-decoration-none hover-text fw-medium d-block">
                                                {{ $item->title_vi }}
                                            </a>
                                            <span class="fs-13 text-body">{{ $item->title_en }}</span>
                                            <div class="mt-1">
                                                @if($item->is_featured)
                                                    <span class="badge bg-warning text-dark">
                                                        <i class="ri-star-fill"></i> {{ __('admin.news.featured') }}
                                                    </span>
                                                @endif
                                                @if($item->is_trending)
                                                    <span class="badge bg-danger">
                                                        <i class="ri-fire-fill"></i> {{ __('admin.news.trending') }}
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-body">
                                    @if($item->category)
                                        <span class="badge bg-info">{{ $item->category->name }}</span>
                                    @else
                                        <span class="text-muted">-</span>
                                    @endif
                                </td>
                                <td class="text-body">
                                    @if($item->status === 'published')
                                        <span class="badge bg-success">{{ __('admin.news.status_published') }}</span>
                                    @elseif($item->status === 'draft')
                                        <span class="badge bg-secondary">{{ __('admin.news.status_draft') }}</span>
                                    @elseif($item->status === 'scheduled')
                                        <span class="badge bg-warning">{{ __('admin.news.status_scheduled') }}</span>
                                    @else
                                        <span class="badge bg-dark">{{ __('admin.news.status_archived') }}</span>
                                    @endif
                                    @if(!$item->is_active)
                                        <span class="badge bg-secondary ms-1">{{ __('admin.news.hidden') }}</span>
                                    @endif
                                </td>
                                <td class="text-body">
                                    <small class="d-block">
                                        <i class="ri-eye-line"></i> {{ $item->view_count }}
                                        <i class="ri-message-2-line ms-2"></i> {{ $item->comment_count }}
                                    </small>
                                </td>
                                <td class="text-body">
                                    {{ $item->published_at ? $item->published_at->format('d/m/Y') : '-' }}
                                </td>
                                <td>
                                    <div class="d-flex justify-content-end" style="gap: 12px;">
                                        <a href="{{ route('admin.news.show', $item->slug) }}" class="bg-transparent p-0 border-0" data-bs-toggle="tooltip" data-bs-title="{{ __('admin.news.view') }}">
                                            <i class="material-symbols-outlined fs-16 fw-normal text-primary">visibility</i>
                                        </a>
                                        <a href="{{ route('admin.news.edit', $item->slug) }}" class="bg-transparent p-0 border-0 hover-text-success" data-bs-toggle="tooltip" data-bs-title="{{ __('admin.news.edit') }}">
                                            <i class="material-symbols-outlined fs-16 fw-normal text-body">edit</i>
                                        </a>
                                        <form action="{{ route('admin.news.destroy', $item->slug) }}" method="POST" class="delete-form d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="bg-transparent p-0 border-0 hover-text-danger" data-bs-toggle="tooltip" data-bs-title="{{ __('admin.news.delete') }}">
                                                <i class="material-symbols-outlined fs-16 fw-normal text-body">delete</i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center py-5">
                                    <i class="ri-article-line fs-48 text-secondary mb-3 d-block"></i>
                                    <p class="text-secondary mb-0">
                                        {{ __('admin.news.no_news') }}
                                        <a href="{{ route('admin.news.create') }}" class="text-primary">{{ __('admin.news.add_news') }}</a>
                                    </p>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

        @if($news->hasPages())
            <div class="d-flex justify-content-center justify-content-sm-between align-items-center text-center flex-wrap gap-2 showing-wrap pt-15 p-20">
                <div>
                    {{ __('admin.news.showing') }} {{ $news->firstItem() ?? 0 }} {{ __('admin.news.to') }} {{ $news->lastItem() ?? 0 }}
                    {{ __('admin.news.of') }} {{ $news->total() }} {{ __('admin.news.entries') }}
                </div>
                <div>
                    {{ $news->appends(request()->query())->links('pagination::bootstrap-4') }}
                </div>
            </div>
        @endif
    </div>
@endsection

@push('scripts')
    <script>
        // Success/Error messages
        document.addEventListener('DOMContentLoaded', function() {
            const urlParams = new URLSearchParams(window.location.search);
            const successMessage = urlParams.get('success') || '{{ session('success') }}';

            if (successMessage && successMessage !== '') {
                Swal.fire({
                    icon: 'success',
                    title: '{{ __('admin.news.success_title') }}',
                    text: successMessage,
                    confirmButtonText: '{{ __('admin.news.ok_button') }}',
                    confirmButtonColor: '#3085d6',
                    timer: 3000,
                    timerProgressBar: true
                });

                if (urlParams.has('success')) {
                    const newUrl = window.location.pathname;
                    window.history.replaceState({}, document.title, newUrl);
                }
            }

            @if(session('error'))
                Swal.fire({
                    icon: 'error',
                    title: '{{ __('admin.news.error_title') }}',
                    text: '{{ session('error') }}',
                    confirmButtonText: '{{ __('admin.news.ok_button') }}',
                    confirmButtonColor: '#d33'
                });
            @endif

            @if($errors->any())
                Swal.fire({
                    icon: 'error',
                    title: '{{ __('admin.news.validation_error_title') }}',
                    html: '<ul style="text-align: left;">@foreach($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul>',
                    confirmButtonText: '{{ __('admin.news.ok_button') }}',
                    confirmButtonColor: '#d33'
                });
            @endif
        });

        // Delete confirmation
        document.querySelectorAll('.delete-form').forEach(form => {
            form.addEventListener('submit', function(e) {
                e.preventDefault();
                Swal.fire({
                    title: '{{ __('admin.news.confirm_delete_title') }}',
                    text: '{{ __('admin.news.confirm_delete_text') }}',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#3085d6',
                    confirmButtonText: '{{ __('admin.news.confirm_delete_button') }}',
                    cancelButtonText: '{{ __('admin.news.cancel_button') }}'
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
