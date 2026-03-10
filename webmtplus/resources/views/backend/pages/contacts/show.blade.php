@extends('backend.layouts.app')
@props(['pageTitle' => __('admin.contacts.contact_details')])

@push('styles')
<style>
    .contact-detail-page {
        animation: fadeIn 0.3s ease-in;
    }
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(10px); }
        to { opacity: 1; transform: translateY(0); }
    }
    .status-badge {
        padding: 8px 16px;
        border-radius: 20px;
        font-weight: 600;
        font-size: 13px;
        display: inline-flex;
        align-items: center;
        gap: 6px;
        box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    }
    .status-badge.status-new {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
    }
    .status-badge.status-read {
        background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
        color: white;
    }
    .status-badge.status-replied {
        background: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%);
        color: white;
    }
    .status-badge.status-archived {
        background: linear-gradient(135deg, #a8a8a8 0%, #7f7f7f 100%);
        color: white;
    }
    .main-card {
        background: white;
        box-shadow: 0 4px 20px rgba(0,0,0,0.08);
        border: none !important;
        transition: all 0.3s ease;
    }
    .main-card:hover {
        box-shadow: 0 8px 30px rgba(0,0,0,0.12);
    }
    .message-box {
        background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
        border-left: 4px solid #667eea;
        padding: 20px;
        border-radius: 12px;
        line-height: 1.8;
        font-size: 15px;
    }
    .info-item {
        display: flex;
        align-items: center;
        gap: 10px;
        padding: 8px 0;
        transition: all 0.2s ease;
    }
    .info-item:hover {
        transform: translateX(5px);
    }
    .info-item i {
        width: 36px;
        height: 36px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 10px;
        font-size: 18px;
    }
    .info-item.user i { background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; }
    .info-item.email i { background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%); color: white; }
    .info-item.time i { background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%); color: white; }
    .action-btn {
        border-radius: 10px;
        padding: 10px 20px;
        font-weight: 600;
        transition: all 0.3s ease;
        border: none;
        box-shadow: 0 4px 12px rgba(0,0,0,0.15);
    }
    .action-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(0,0,0,0.2);
    }
    .action-btn.btn-primary {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    }
    .action-btn.btn-danger {
        background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
    }
    .sidebar-card {
        border: none !important;
        box-shadow: 0 2px 12px rgba(0,0,0,0.08);
        transition: all 0.3s ease;
        overflow: hidden;
    }
    .card-body{
        background: white;
    }
    .sidebar-card:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 20px rgba(0,0,0,0.12);
    }
    .sidebar-card .card-header {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        border: none;
        padding: 15px 20px;
        font-weight: 700;
        font-size: 14px;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }
    .timeline-item {
        position: relative;
        padding-left: 45px;
        padding-bottom: 20px;
    }
    .timeline-item::before {
        content: '';
        position: absolute;
        left: 16px;
        top: 10px;
        bottom: -10px;
        width: 2px;
        background: linear-gradient(to bottom, #667eea, #764ba2);
    }
    .timeline-item:last-child::before { display: none; }
    .timeline-icon {
        position: absolute;
        left: 0;
        top: 0;
        width: 32px;
        height: 32px;
        border-radius: 50%;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 14px;
        box-shadow: 0 2px 8px rgba(102, 126, 234, 0.4);
    }
    .custom-select {
        border: 2px solid #e0e0e0;
        border-radius: 10px;
        padding: 12px;
        font-weight: 600;
        transition: all 0.3s ease;
        cursor: pointer;
    }
    .custom-select:focus {
        border-color: #667eea;
        box-shadow: 0 0 0 0.2rem rgba(102, 126, 234, 0.25);
    }
</style>
@endpush

@section('content-backend')
    <div class="contact-detail-page">
        <!-- Header -->
        <div class="d-flex justify-content-between align-items-center flex-wrap gap-3 mb-4 mt-1">
            <div>
                <h3 class="mb-1 fw-bold">{{ __('admin.contacts.view_contact') }}</h3>
                <p class="text-muted mb-0 fs-14">{{ __('admin.contacts.contact_details') }}</p>
            </div>
            <x-admin.ui.breadcrumb :pageTitle="__('admin.contacts.view_contact')" />
        </div>

        <div class="row">
            <!-- Main Content -->
            <div class="col-lg-8 mb-4">
                <div class="card main-card rounded-10">
                    <div class="card-body p-4">
                        <!-- Status & Actions -->
                        <div class="d-flex justify-content-between align-items-center mb-4 flex-wrap gap-3">
                            <div>
                                @if($contact->status === 'new')
                                    <span class="status-badge status-new">
                                        <i class="ri-star-fill"></i> {{ __('admin.contacts.status_new') }}
                                    </span>
                                @elseif($contact->status === 'read')
                                    <span class="status-badge status-read">
                                        <i class="ri-eye-fill"></i> {{ __('admin.contacts.status_read') }}
                                    </span>
                                @elseif($contact->status === 'replied')
                                    <span class="status-badge status-replied">
                                        <i class="ri-check-double-fill"></i> {{ __('admin.contacts.status_replied') }}
                                    </span>
                                @else
                                    <span class="status-badge status-archived">
                                        <i class="ri-inbox-archive-fill"></i> {{ __('admin.contacts.status_archived') }}
                                    </span>
                                @endif
                            </div>

                            <div class="d-flex gap-2">
                                <a href="mailto:{{ $contact->email }}" class="action-btn btn btn-primary">
                                    <i class="ri-mail-send-line me-1"></i> {{ __('admin.contacts.reply_via_email') }}
                                </a>
                                <button type="button" class="action-btn btn btn-danger" id="delete-btn">
                                    <i class="ri-delete-bin-line me-1"></i> {{ __('admin.contacts.delete') }}
                                </button>
                            </div>
                        </div>

                        <hr class="my-4">

                        <!-- Subject -->
                        <div class="mb-4">
                            <h4 class="mb-3 fw-bold" style="color: #2d3748;">{{ $contact->subject }}</h4>
                            <div class="d-flex flex-column gap-2">
                                <div class="info-item user">
                                    <i class="ri-user-fill"></i>
                                    <span class="fw-semibold">{{ $contact->name }}</span>
                                </div>
                                <div class="info-item email">
                                    <i class="ri-mail-fill"></i>
                                    <a href="mailto:{{ $contact->email }}" class="text-decoration-none">{{ $contact->email }}</a>
                                </div>
                                <div class="info-item time">
                                    <i class="ri-time-fill"></i>
                                    <span class="text-muted">{{ $contact->created_at->format('d/m/Y H:i') }} ({{ $contact->created_at->diffForHumans() }})</span>
                                </div>
                            </div>
                        </div>

                        <hr class="my-4">

                        <!-- Message Content -->
                        <div class="mb-4">
                            <h6 class="text-muted mb-3 text-uppercase fw-bold" style="font-size: 12px; letter-spacing: 1px;">
                                <i class="ri-message-3-fill me-2"></i>{{ __('admin.contacts.message') }}
                            </h6>
                            <div class="message-box">
                                {!! nl2br(e($contact->message)) !!}
                            </div>
                        </div>

                        <!-- Terms Accepted -->
                        <div class="d-flex align-items-center gap-2 p-3 rounded-10" style="background: #f8f9fa;">
                            <span class="text-muted fw-semibold">{{ __('admin.contacts.terms_accepted') }}:</span>
                            @if($contact->terms_accepted)
                                <span class="badge bg-success px-3 py-2" style="font-size: 13px;">
                                    <i class="ri-checkbox-circle-fill me-1"></i> {{ __('admin.contacts.yes') }}
                                </span>
                            @else
                                <span class="badge bg-danger px-3 py-2" style="font-size: 13px;">
                                    <i class="ri-close-circle-fill me-1"></i> {{ __('admin.contacts.no') }}
                                </span>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

        <!-- Sidebar -->
        <div class="col-lg-4">
            <!-- Status Management -->
            <div class="card sidebar-card rounded-10 mb-4">
                <div class="card-header">
                    <i class="ri-settings-3-fill me-2"></i>{{ __('admin.contacts.status_management') }}
                </div>
                <div class="card-body p-3">
                    <form action="{{ route('admin.contacts.update-status', $contact) }}" method="POST" id="status-form">
                        @csrf
                        @method('PUT')
                        <select name="status" class="form-select custom-select" id="status-select">
                            <option value="new" {{ $contact->status === 'new' ? 'selected' : '' }}>
                                🌟 {{ __('admin.contacts.status_new') }}
                            </option>
                            <option value="read" {{ $contact->status === 'read' ? 'selected' : '' }}>
                                👁️ {{ __('admin.contacts.status_read') }}
                            </option>
                            <option value="replied" {{ $contact->status === 'replied' ? 'selected' : '' }}>
                                ✅ {{ __('admin.contacts.status_replied') }}
                            </option>
                            <option value="archived" {{ $contact->status === 'archived' ? 'selected' : '' }}>
                                📦 {{ __('admin.contacts.status_archived') }}
                            </option>
                        </select>
                    </form>
                    <small class="text-muted d-block mt-2 text-center">
                        <i class="ri-information-line"></i> Thay đổi sẽ tự động lưu
                    </small>
                </div>
            </div>

            <!-- Contact Information -->
            <div class="card sidebar-card rounded-10 mb-4">
                <div class="card-header">
                    <i class="ri-user-3-fill me-2"></i>{{ __('admin.contacts.sender_info') }}
                </div>
                <div class="card-body p-3">
                    <div class="mb-3 p-3 rounded-10" style="background: #f8f9fa;">
                        <div class="d-flex align-items-center gap-2 mb-1">
                            <i class="ri-user-fill" style="color: #667eea;"></i>
                            <small class="text-muted text-uppercase fw-bold" style="font-size: 10px; letter-spacing: 0.5px;">{{ __('admin.contacts.name') }}</small>
                        </div>
                        <strong class="d-block">{{ $contact->name }}</strong>
                    </div>

                    <div class="mb-3 p-3 rounded-10" style="background: #f8f9fa;">
                        <div class="d-flex align-items-center gap-2 mb-1">
                            <i class="ri-mail-fill" style="color: #f5576c;"></i>
                            <small class="text-muted text-uppercase fw-bold" style="font-size: 10px; letter-spacing: 0.5px;">{{ __('admin.contacts.email') }}</small>
                        </div>
                        <a href="mailto:{{ $contact->email }}" class="text-decoration-none fw-semibold">{{ $contact->email }}</a>
                    </div>

                    @if($contact->ip_address)
                        <div class="p-3 rounded-10" style="background: #f8f9fa;">
                            <div class="d-flex align-items-center gap-2 mb-1">
                                <i class="ri-global-fill" style="color: #4facfe;"></i>
                                <small class="text-muted text-uppercase fw-bold" style="font-size: 10px; letter-spacing: 0.5px;">{{ __('admin.contacts.ip_address') }}</small>
                            </div>
                            <code class="d-block p-2 rounded" style="background: white; border: 1px solid #e0e0e0;">{{ $contact->ip_address }}</code>
                        </div>
                    @endif
                </div>
            </div>

            <!-- Timeline -->
            <div class="card sidebar-card rounded-10 mb-4">
                <div class="card-header">
                    <i class="ri-time-fill me-2"></i>{{ __('admin.contacts.timeline') }}
                </div>
                <div class="card-body p-3">
                    <div class="timeline-item">
                        <div class="timeline-icon">
                            <i class="ri-mail-add-fill"></i>
                        </div>
                        <small class="text-muted text-uppercase fw-bold d-block" style="font-size: 10px; letter-spacing: 0.5px;">{{ __('admin.contacts.received_at') }}</small>
                        <strong class="d-block">{{ $contact->created_at->format('d/m/Y H:i:s') }}</strong>
                        <span class="text-muted fs-12">{{ $contact->created_at->diffForHumans() }}</span>
                    </div>

                    @if($contact->read_at)
                        <div class="timeline-item">
                            <div class="timeline-icon">
                                <i class="ri-eye-fill"></i>
                            </div>
                            <small class="text-muted text-uppercase fw-bold d-block" style="font-size: 10px; letter-spacing: 0.5px;">{{ __('admin.contacts.read_at') }}</small>
                            <strong class="d-block">{{ $contact->read_at->format('d/m/Y H:i:s') }}</strong>
                            <span class="text-muted fs-12">{{ $contact->read_at->diffForHumans() }}</span>
                        </div>
                    @endif

                    <div class="timeline-item">
                        <div class="timeline-icon">
                            <i class="ri-refresh-fill"></i>
                        </div>
                        <small class="text-muted text-uppercase fw-bold d-block" style="font-size: 10px; letter-spacing: 0.5px;">{{ __('admin.contacts.last_updated') }}</small>
                        <strong class="d-block">{{ $contact->updated_at->format('d/m/Y H:i:s') }}</strong>
                    </div>
                </div>
            </div>

            <!-- Quick Actions -->
            <div class="card sidebar-card rounded-10 mb-4">
                <div class="card-header">
                    <i class="ri-flashlight-fill me-2"></i>{{ __('admin.contacts.quick_actions') }}
                </div>
                <div class="card-body p-3">
                    <a href="{{ route('admin.contacts.index') }}" class="btn w-100 mb-2 fw-semibold" style="background: linear-gradient(135deg, #a8a8a8 0%, #7f7f7f 100%); color: white; border-radius: 10px; padding: 12px;">
                        <i class="ri-arrow-left-line me-1"></i> {{ __('admin.contacts.back_to_list') }}
                    </a>

                    <a href="mailto:{{ $contact->email }}" class="btn w-100 mb-2 fw-semibold" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; border-radius: 10px; padding: 12px;">
                        <i class="ri-mail-send-line me-1"></i> {{ __('admin.contacts.reply_via_email') }}
                    </a>

                    <button type="button" class="btn w-100 fw-semibold" id="delete-btn-sidebar" style="background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%); color: white; border-radius: 10px; padding: 12px;">
                        <i class="ri-delete-bin-line me-1"></i> {{ __('admin.contacts.delete') }}
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    // Auto-update status when changed
    const statusSelect = document.getElementById('status-select');
    const statusForm = document.getElementById('status-form');

    if (statusSelect && statusForm) {
        statusSelect.addEventListener('change', function() {
            const selectedStatus = this.value;
            const formAction = statusForm.action;

            // Create FormData and ensure _method is included
            const formData = new FormData();
            formData.append('_token', '{{ csrf_token() }}');
            formData.append('_method', 'PUT');
            formData.append('status', selectedStatus);

            console.log('Updating status to:', selectedStatus);
            console.log('Form action URL:', formAction);
            console.log('FormData entries:');
            for (let pair of formData.entries()) {
                console.log(pair[0] + ': ' + pair[1]);
            }

            Swal.fire({
                title: '{{ __("admin.contacts.updating") }}',
                allowOutsideClick: false,
                didOpen: () => {
                    Swal.showLoading();
                }
            });

            fetch(formAction, {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    'Accept': 'application/json',
                    'X-Requested-With': 'XMLHttpRequest'
                },
                body: formData
            })
            .then(response => {
                console.log('Response status:', response.status);
                console.log('Response headers:', response.headers.get('content-type'));

                if (!response.ok) {
                    return response.text().then(text => {
                        console.error('Error response body:', text.substring(0, 500));
                        throw new Error('Server returned status ' + response.status);
                    });
                }

                const contentType = response.headers.get('content-type');
                if (contentType && contentType.includes('application/json')) {
                    return response.json();
                } else {
                    return response.text().then(text => {
                        console.error('Expected JSON but got:', text.substring(0, 500));
                        throw new Error('Server returned HTML instead of JSON');
                    });
                }
            })
            .then(data => {
                console.log('Response data:', data);
                if (data.success) {
                    Swal.fire({
                        icon: 'success',
                        title: '{{ __("admin.contacts.success") }}',
                        text: data.message || 'Status updated successfully',
                        confirmButtonColor: '#28a745',
                        timer: 1500,
                        showConfirmButton: false
                    }).then(() => {
                        // Reload page to update status badge
                        location.reload();
                    });
                } else {
                    throw new Error(data.message || 'Update failed');
                }
            })
            .catch(error => {
                console.error('Error updating status:', error);
                Swal.fire({
                    icon: 'error',
                    title: 'Lỗi',
                    text: error.message || 'Không thể cập nhật trạng thái',
                    confirmButtonColor: '#d33',
                });
                // Reset select to previous value
                statusSelect.value = '{{ $contact->status }}';
            });
        });
    } else {
        console.error('Status select or form not found');
    }

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
