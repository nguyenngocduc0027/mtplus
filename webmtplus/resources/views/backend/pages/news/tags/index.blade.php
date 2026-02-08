@extends('backend.layouts.app')
@props(['pageTitle' => __('admin.news_tags.all_tags')])
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
                        {{ __('admin.news_tags.total_tags') }} <span class="text-primary">({{ $tags->total() }})</span>
                    </li>
                </ul>
            </div>

            <a href="{{ route('admin.news.tags.create') }}" class="text-primary fs-16 text-decoration-none">
                + {{ __('admin.news_tags.add_tag') }}
            </a>
        </div>

        <div class="default-table-area mx-minus-1 table-product-list">
            <div class="table-responsive">
                <table class="table align-middle">
                    <thead>
                        <tr>
                            <th scope="col" class="fw-medium ps-20">{{ __('admin.news_tags.name') }}</th>
                            <th scope="col" class="fw-medium">{{ __('admin.news_tags.slug') }}</th>
                            <th scope="col" class="fw-medium">{{ __('admin.news_tags.news_count') }}</th>
                            <th scope="col" class="fw-medium">{{ __('admin.news_tags.created_at') }}</th>
                            <th scope="col" class="fw-medium">{{ __('admin.news_tags.actions') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($tags as $tag)
                            <tr>
                                <td class="text-body ps-20">
                                    <div>
                                        <div class="fs-16 fw-medium">{{ $tag->name_vi }}</div>
                                        <small class="text-muted">{{ $tag->name_en }}</small>
                                    </div>
                                </td>
                                <td class="text-body">
                                    <code>{{ $tag->slug }}</code>
                                </td>
                                <td class="text-body">
                                    <span class="badge bg-info">{{ $tag->news_count }} {{ __('admin.news_tags.news') }}</span>
                                </td>
                                <td class="text-body">
                                    {{ $tag->created_at->format('d/m/Y') }}
                                </td>
                                <td>
                                    <div class="d-flex justify-content-end" style="gap: 12px;">
                                        <a href="{{ route('admin.news.tags.edit', $tag->id) }}" class="bg-transparent p-0 border-0 hover-text-success" data-bs-toggle="tooltip" data-bs-title="{{ __('admin.news_tags.edit') }}">
                                            <i class="material-symbols-outlined fs-16 fw-normal text-body">edit</i>
                                        </a>
                                        <form action="{{ route('admin.news.tags.destroy', $tag->id) }}" method="POST" class="delete-form d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="bg-transparent p-0 border-0 hover-text-danger" data-bs-toggle="tooltip" data-bs-title="{{ __('admin.news_tags.delete') }}">
                                                <i class="material-symbols-outlined fs-16 fw-normal text-body">delete</i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center py-5">
                                    <i class="ri-price-tag-3-line fs-48 text-secondary mb-3 d-block"></i>
                                    <p class="text-secondary mb-0">
                                        {{ __('admin.news_tags.no_tags') }}
                                        <a href="{{ route('admin.news.tags.create') }}" class="text-primary">{{ __('admin.news_tags.add_tag') }}</a>
                                    </p>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

        @if($tags->hasPages())
            <div class="p-20 pt-0">
                {{ $tags->links() }}
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
                    title: '{{ __('admin.news_tags.success_title') }}',
                    text: '{{ session('success') }}',
                    confirmButtonText: '{{ __('admin.news_tags.ok_button') }}',
                    confirmButtonColor: '#3085d6',
                    timer: 3000,
                    timerProgressBar: true
                });
            @endif

            @if(session('error'))
                Swal.fire({
                    icon: 'error',
                    title: '{{ __('admin.news_tags.error_title') }}',
                    text: '{{ session('error') }}',
                    confirmButtonText: '{{ __('admin.news_tags.ok_button') }}',
                    confirmButtonColor: '#d33'
                });
            @endif
        });

        // Delete confirmation
        document.querySelectorAll('.delete-form').forEach(form => {
            form.addEventListener('submit', function(e) {
                e.preventDefault();
                Swal.fire({
                    title: '{{ __('admin.news_tags.confirm_delete_title') }}',
                    text: '{{ __('admin.news_tags.confirm_delete_text') }}',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#3085d6',
                    confirmButtonText: '{{ __('admin.news_tags.confirm_delete_button') }}',
                    cancelButtonText: '{{ __('admin.news_tags.cancel_button') }}'
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
