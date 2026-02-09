@extends('backend.layouts.app')
@props(['pageTitle' => __('admin.contacts.all_contacts')])
@section('content-backend')
    <div class="d-flex justify-content-between align-items-center flex-wrap gap-2 mb-4 mt-1">
        <h3 class="mb-0">{{ $pageTitle }}</h3>
        <x-admin.ui.breadcrumb :pageTitle="$pageTitle" />
    </div>

    <div class="card bg-white rounded-10 border border-white mb-4">
        <div class="d-flex justify-content-between align-items-center flex-wrap gap-3 p-20">
            <div class="d-flex flex-wrap gap-2 gap-xxl-5 align-items-center">
                <form class="table-src-form position-relative m-0" method="GET">
                    <input type="text" name="search" class="form-control w-340"
                           placeholder="{{ __('admin.contacts.search') }}"
                           value="{{ request('search') }}">
                    <button type="submit" class="src-btn position-absolute top-50 start-0 translate-middle-y bg-transparent p-0 border-0">
                        <span class="material-symbols-outlined">search</span>
                    </button>
                </form>

                <div class="d-flex gap-2">
                    <select name="status" class="form-select form-control" style="width: 146px" onchange="this.form.submit()" form="filterForm">
                        <option value="">{{ __('admin.contacts.all_status') }}</option>
                        <option value="new" {{ request('status') == 'new' ? 'selected' : '' }}>
                            {{ __('admin.contacts.status_new') }} ({{ $newCount }})
                        </option>
                        <option value="read" {{ request('status') == 'read' ? 'selected' : '' }}>
                            {{ __('admin.contacts.status_read') }} ({{ $readCount }})
                        </option>
                        <option value="replied" {{ request('status') == 'replied' ? 'selected' : '' }}>
                            {{ __('admin.contacts.status_replied') }}
                        </option>
                        <option value="archived" {{ request('status') == 'archived' ? 'selected' : '' }}>
                            {{ __('admin.contacts.status_archived') }}
                        </option>
                    </select>
                </div>

                <form id="filterForm" method="GET" class="d-none"></form>

                <ul class="p-0 mb-0 list-unstyled d-flex align-items-center flex-wrap" style="gap: 20px;">
                    <li class="fs-16">
                        {{ __('admin.contacts.total') }} <span class="text-primary">({{ $contacts->total() }})</span>
                    </li>
                    @if($newCount > 0)
                        <li class="fs-16">
                            <span class="badge bg-danger">{{ $newCount }} {{ __('admin.contacts.new') }}</span>
                        </li>
                    @endif
                </ul>
            </div>

            <!-- Bulk Actions -->
            <div class="d-none" id="bulk-actions">
                <button type="button" class="btn btn-danger btn-sm" id="bulk-delete-btn">
                    <i class="ri-delete-bin-line"></i> {{ __('admin.contacts.delete_selected') }}
                </button>
            </div>
        </div>

        <div class="default-table-area mx-minus-1">
            <div class="table-responsive">
                <table class="table align-middle">
                    <thead>
                        <tr>
                            <th scope="col" class="fw-medium ps-20" width="30">
                                <input type="checkbox" id="select-all" class="form-check-input">
                            </th>
                            <th scope="col" class="fw-medium">{{ __('admin.contacts.sender') }}</th>
                            <th scope="col" class="fw-medium">{{ __('admin.contacts.subject') }}</th>
                            <th scope="col" class="fw-medium">{{ __('admin.contacts.status') }}</th>
                            <th scope="col" class="fw-medium">{{ __('admin.contacts.date') }}</th>
                            <th scope="col" class="fw-medium">{{ __('admin.contacts.actions') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($contacts as $contact)
                            <tr class="{{ $contact->status === 'new' ? 'table-info' : '' }}">
                                <td class="ps-20">
                                    <input type="checkbox" class="form-check-input contact-checkbox" value="{{ $contact->id }}">
                                </td>
                                <td class="text-body">
                                    <div class="flex-grow-1">
                                        <a href="{{ route('admin.contacts.show', $contact) }}"
                                           class="fs-16 text-secondary text-decoration-none hover-text fw-medium d-block">
                                            {{ $contact->name }}
                                            @if($contact->status === 'new')
                                                <span class="badge bg-danger ms-2">{{ __('admin.contacts.new') }}</span>
                                            @endif
                                        </a>
                                        <span class="fs-14 text-body">{{ $contact->email }}</span>
                                    </div>
                                </td>
                                <td class="text-body">{{ Str::limit($contact->subject, 50) }}</td>
                                <td>
                                    @if($contact->status === 'new')
                                        <span class="badge bg-primary">{{ __('admin.contacts.status_new') }}</span>
                                    @elseif($contact->status === 'read')
                                        <span class="badge bg-info">{{ __('admin.contacts.status_read') }}</span>
                                    @elseif($contact->status === 'replied')
                                        <span class="badge bg-success">{{ __('admin.contacts.status_replied') }}</span>
                                    @else
                                        <span class="badge bg-secondary">{{ __('admin.contacts.status_archived') }}</span>
                                    @endif
                                </td>
                                <td class="text-body">
                                    <span class="d-block">{{ $contact->created_at->format('d/m/Y') }}</span>
                                    <span class="fs-12 text-muted">{{ $contact->created_at->format('H:i') }}</span>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center gap-1">
                                        <a href="{{ route('admin.contacts.show', $contact) }}"
                                           class="p-11 text-body d-flex align-items-center bg-body-bg radius-2 hover-bg-primary-opacity hover-text-primary bg-info bg-opacity-10 fw-semibold text-decoration-none"
                                           data-bs-toggle="tooltip"
                                           title="{{ __('admin.contacts.view') }}">
                                            <span class="material-symbols-outlined fs-20">visibility</span>
                                        </a>
                                        <button type="button"
                                                class="p-11 text-body d-flex align-items-center bg-body-bg radius-2 hover-bg-danger-opacity hover-text-danger bg-danger bg-opacity-10 fw-semibold border-0 delete-btn"
                                                data-id="{{ $contact->id }}"
                                                data-bs-toggle="tooltip"
                                                title="{{ __('admin.contacts.delete') }}">
                                            <span class="material-symbols-outlined fs-20">delete</span>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center py-4">
                                    <div class="text-center">
                                        <i class="material-symbols-outlined fs-48 text-muted">mail</i>
                                        <p class="text-muted mt-2">{{ __('admin.contacts.no_contacts') }}</p>
                                    </div>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <!-- Pagination -->
            @if($contacts->hasPages())
                <div class="pagination-area d-md-flex justify-content-between align-items-center p-20 border-top">
                    <div class="showing-result-text fs-14">
                        {{ __('admin.contacts.showing') }} {{ $contacts->firstItem() ?? 0 }}
                        {{ __('admin.contacts.to') }} {{ $contacts->lastItem() ?? 0 }}
                        {{ __('admin.contacts.of') }} {{ $contacts->total() }}
                        {{ __('admin.contacts.entries') }}
                    </div>
                    {{ $contacts->links() }}
                </div>
            @endif
        </div>
    </div>
@endsection

@push('scripts')
<script>
    // Select all checkboxes
    document.getElementById('select-all')?.addEventListener('change', function() {
        const checkboxes = document.querySelectorAll('.contact-checkbox');
        checkboxes.forEach(cb => cb.checked = this.checked);
        toggleBulkActions();
    });

    // Individual checkbox change
    document.querySelectorAll('.contact-checkbox').forEach(cb => {
        cb.addEventListener('change', toggleBulkActions);
    });

    function toggleBulkActions() {
        const checkedBoxes = document.querySelectorAll('.contact-checkbox:checked');
        const bulkActions = document.getElementById('bulk-actions');
        if (checkedBoxes.length > 0) {
            bulkActions.classList.remove('d-none');
        } else {
            bulkActions.classList.add('d-none');
        }
    }

    // Single delete
    document.querySelectorAll('.delete-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            const contactId = this.dataset.id;

            Swal.fire({
                title: '{{ __("admin.contacts.confirm_delete") }}',
                text: '{{ __("admin.contacts.delete_warning") }}',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: '{{ __("admin.contacts.yes_delete") }}',
                cancelButtonText: '{{ __("admin.contacts.cancel") }}'
            }).then((result) => {
                if (result.isConfirmed) {
                    const form = document.createElement('form');
                    form.method = 'POST';
                    form.action = `/admin/contacts/${contactId}`;

                    const csrfInput = document.createElement('input');
                    csrfInput.type = 'hidden';
                    csrfInput.name = '_token';
                    csrfInput.value = '{{ csrf_token() }}';

                    const methodInput = document.createElement('input');
                    methodInput.type = 'hidden';
                    methodInput.name = '_method';
                    methodInput.value = 'DELETE';

                    form.appendChild(csrfInput);
                    form.appendChild(methodInput);
                    document.body.appendChild(form);
                    form.submit();
                }
            });
        });
    });

    // Bulk delete
    document.getElementById('bulk-delete-btn')?.addEventListener('click', function() {
        const checkedBoxes = document.querySelectorAll('.contact-checkbox:checked');
        const ids = Array.from(checkedBoxes).map(cb => cb.value);

        if (ids.length === 0) return;

        Swal.fire({
            title: '{{ __("admin.contacts.confirm_bulk_delete") }}',
            text: `{{ __("admin.contacts.bulk_delete_warning") }} ${ids.length} {{ __("admin.contacts.contacts") }}?`,
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: '{{ __("admin.contacts.yes_delete") }}',
            cancelButtonText: '{{ __("admin.contacts.cancel") }}'
        }).then((result) => {
            if (result.isConfirmed) {
                fetch('{{ route("admin.contacts.bulk-delete") }}', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify({ ids: ids })
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        Swal.fire({
                            icon: 'success',
                            title: '{{ __("admin.contacts.deleted") }}',
                            text: data.message,
                            confirmButtonColor: '#28a745',
                        }).then(() => {
                            window.location.reload();
                        });
                    }
                });
            }
        });
    });

    // Success/Error messages
    @if(session('success'))
        Swal.fire({
            icon: 'success',
            title: '{{ __("admin.contacts.success") }}',
            text: '{{ session("success") }}',
            confirmButtonColor: '#28a745',
        });
    @endif

    @if(session('error'))
        Swal.fire({
            icon: 'error',
            title: '{{ __("admin.contacts.error") }}',
            text: '{{ session("error") }}',
            confirmButtonColor: '#d33',
        });
    @endif
</script>
@endpush
