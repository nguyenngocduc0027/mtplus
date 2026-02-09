@extends('backend.layouts.app')
@props(['pageTitle' => __('admin.contacts.contact_details')])
@section('content-backend')
    <div class="d-flex justify-content-between align-items-center flex-wrap gap-2 mb-4 mt-1">
        <h3 class="mb-0">{{ __('admin.contacts.view_contact') }}</h3>
        <x-admin.ui.breadcrumb :pageTitle="__('admin.contacts.view_contact')" />
    </div>

    <div class="row">
        <!-- Main Content -->
        <div class="col-lg-8">
            <div class="card bg-white rounded-10 border border-white mb-4">
                <div class="card-body p-20">
                    <!-- Status & Actions -->
                    <div class="d-flex justify-content-between align-items-start mb-4">
                        <div>
                            @if($contact->status === 'new')
                                <span class="badge bg-primary">{{ __('admin.contacts.status_new') }}</span>
                            @elseif($contact->status === 'read')
                                <span class="badge bg-info">{{ __('admin.contacts.status_read') }}</span>
                            @elseif($contact->status === 'replied')
                                <span class="badge bg-success">{{ __('admin.contacts.status_replied') }}</span>
                            @else
                                <span class="badge bg-secondary">{{ __('admin.contacts.status_archived') }}</span>
                            @endif
                        </div>

                        <div class="btn-group">
                            <a href="mailto:{{ $contact->email }}" class="btn btn-sm btn-primary">
                                <i class="ri-mail-line"></i> {{ __('admin.contacts.reply_via_email') }}
                            </a>
                            <button type="button" class="btn btn-sm btn-danger" id="delete-btn">
                                <i class="ri-delete-bin-line"></i> {{ __('admin.contacts.delete') }}
                            </button>
                        </div>
                    </div>

                    <!-- Subject -->
                    <div class="mb-4">
                        <h4 class="mb-2">{{ $contact->subject }}</h4>
                        <div class="d-flex gap-3 text-muted fs-14">
                            <span>
                                <i class="ri-user-line"></i> {{ $contact->name }}
                            </span>
                            <span>
                                <i class="ri-mail-line"></i> {{ $contact->email }}
                            </span>
                            <span>
                                <i class="ri-time-line"></i> {{ $contact->created_at->format('d/m/Y H:i') }}
                            </span>
                        </div>
                    </div>

                    <hr>

                    <!-- Message Content -->
                    <div class="mb-4">
                        <h6 class="text-muted mb-2">{{ __('admin.contacts.message') }}</h6>
                        <div class="p-3 bg-light rounded">
                            {!! nl2br(e($contact->message)) !!}
                        </div>
                    </div>

                    <!-- Terms Accepted -->
                    <div class="mb-3">
                        <span class="text-muted">{{ __('admin.contacts.terms_accepted') }}:</span>
                        @if($contact->terms_accepted)
                            <span class="badge bg-success ms-2">
                                <i class="ri-checkbox-circle-line"></i> {{ __('admin.contacts.yes') }}
                            </span>
                        @else
                            <span class="badge bg-danger ms-2">
                                <i class="ri-close-circle-line"></i> {{ __('admin.contacts.no') }}
                            </span>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        <!-- Sidebar -->
        <div class="col-lg-4">
            <!-- Status Management -->
            <div class="card bg-white rounded-10 border border-white mb-4">
                <div class="card-body p-20">
                    <h6 class="fw-bold mb-3">{{ __('admin.contacts.status_management') }}</h6>

                    <form action="{{ route('admin.contacts.update-status', $contact) }}" method="POST" id="status-form">
                        @csrf
                        @method('PUT')
                        <select name="status" class="form-select" id="status-select">
                            <option value="new" {{ $contact->status === 'new' ? 'selected' : '' }}>
                                {{ __('admin.contacts.status_new') }}
                            </option>
                            <option value="read" {{ $contact->status === 'read' ? 'selected' : '' }}>
                                {{ __('admin.contacts.status_read') }}
                            </option>
                            <option value="replied" {{ $contact->status === 'replied' ? 'selected' : '' }}>
                                {{ __('admin.contacts.status_replied') }}
                            </option>
                            <option value="archived" {{ $contact->status === 'archived' ? 'selected' : '' }}>
                                {{ __('admin.contacts.status_archived') }}
                            </option>
                        </select>
                    </form>
                </div>
            </div>

            <!-- Contact Information -->
            <div class="card bg-white rounded-10 border border-white mb-4">
                <div class="card-body p-20">
                    <h6 class="fw-bold mb-3">{{ __('admin.contacts.sender_info') }}</h6>

                    <div class="mb-3">
                        <small class="text-muted d-block">{{ __('admin.contacts.name') }}</small>
                        <strong>{{ $contact->name }}</strong>
                    </div>

                    <div class="mb-3">
                        <small class="text-muted d-block">{{ __('admin.contacts.email') }}</small>
                        <a href="mailto:{{ $contact->email }}">{{ $contact->email }}</a>
                    </div>

                    @if($contact->ip_address)
                        <div class="mb-3">
                            <small class="text-muted d-block">{{ __('admin.contacts.ip_address') }}</small>
                            <code>{{ $contact->ip_address }}</code>
                        </div>
                    @endif
                </div>
            </div>

            <!-- Timeline -->
            <div class="card bg-white rounded-10 border border-white mb-4">
                <div class="card-body p-20">
                    <h6 class="fw-bold mb-3">{{ __('admin.contacts.timeline') }}</h6>

                    <div class="mb-3">
                        <small class="text-muted d-block">{{ __('admin.contacts.received_at') }}</small>
                        <strong>{{ $contact->created_at->format('d/m/Y H:i:s') }}</strong>
                        <div class="text-muted fs-12">{{ $contact->created_at->diffForHumans() }}</div>
                    </div>

                    @if($contact->read_at)
                        <div class="mb-3">
                            <small class="text-muted d-block">{{ __('admin.contacts.read_at') }}</small>
                            <strong>{{ $contact->read_at->format('d/m/Y H:i:s') }}</strong>
                            <div class="text-muted fs-12">{{ $contact->read_at->diffForHumans() }}</div>
                        </div>
                    @endif

                    <div class="mb-0">
                        <small class="text-muted d-block">{{ __('admin.contacts.last_updated') }}</small>
                        <strong>{{ $contact->updated_at->format('d/m/Y H:i:s') }}</strong>
                    </div>
                </div>
            </div>

            <!-- Quick Actions -->
            <div class="card bg-white rounded-10 border border-white mb-4">
                <div class="card-body p-20">
                    <h6 class="fw-bold mb-3">{{ __('admin.contacts.quick_actions') }}</h6>

                    <a href="{{ route('admin.contacts.index') }}" class="btn btn-secondary w-100 mb-2">
                        <i class="ri-arrow-left-line"></i> {{ __('admin.contacts.back_to_list') }}
                    </a>

                    <a href="mailto:{{ $contact->email }}" class="btn btn-primary w-100 mb-2">
                        <i class="ri-mail-line"></i> {{ __('admin.contacts.reply_via_email') }}
                    </a>

                    <button type="button" class="btn btn-danger w-100" id="delete-btn-sidebar">
                        <i class="ri-delete-bin-line"></i> {{ __('admin.contacts.delete') }}
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
<script>
    // Auto-update status when changed
    document.getElementById('status-select')?.addEventListener('change', function() {
        const form = document.getElementById('status-form');
        const formData = new FormData(form);

        Swal.fire({
            title: '{{ __("admin.contacts.updating") }}',
            allowOutsideClick: false,
            didOpen: () => {
                Swal.showLoading();
            }
        });

        fetch(form.action, {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}',
                'Accept': 'application/json',
            },
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                Swal.fire({
                    icon: 'success',
                    title: '{{ __("admin.contacts.success") }}',
                    text: data.message,
                    confirmButtonColor: '#28a745',
                    timer: 1500
                });
            }
        })
        .catch(error => {
            Swal.fire({
                icon: 'error',
                title: '{{ __("admin.contacts.error") }}',
                text: '{{ __("admin.contacts.update_failed") }}',
                confirmButtonColor: '#d33',
            });
        });
    });

    // Delete contact
    function deleteContact() {
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
                form.action = '{{ route("admin.contacts.destroy", $contact) }}';

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
    }

    document.getElementById('delete-btn')?.addEventListener('click', deleteContact);
    document.getElementById('delete-btn-sidebar')?.addEventListener('click', deleteContact);
</script>
@endpush
