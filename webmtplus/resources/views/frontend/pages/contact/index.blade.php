@extends('frontend.layouts.app')
@props([
    'pageTitle' => __('common.contact'),
    'hidden' => true,
    'headerClass' => 'style-four',
    'logo' => '/frontend/assets/img/logo.png',
])
@section('content')
    <x-common.breadcrumb breadcrumbTitle="{{ __('common.contact') }}" />

    <!-- Contact Section Start -->
    <div class="container ptb-120">
        <div class="row justify-content-center pb-90">
            <div class="col-xl-4">
                <div class="contact-card style-one bg-gray d-flex flex-wrap align-items-center round-30 mb-30">
                    <div
                        class="contact-icon bg_secondary d-flex flex-column align-items-center justify-content-center rounded-circle transition">
                        <img src="/frontend/assets/img/icons/phone-black.svg" alt="Icon" class="transition">
                    </div>
                    <div class="contact-info">
                        <span class="font-optional fs-13 fw-bold d-block text-title ls-1">PHONE NUMBER</span>
                        <a href="tel:67475867869202" class="text-para hover-text-primary transition">+674 7586 7869 202</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="contact-card style-one bg-gray d-flex flex-wrap align-items-center round-30 mb-30">
                    <div
                        class="contact-icon bg_secondary d-flex flex-column align-items-center justify-content-center rounded-circle transition">
                        <img src="/frontend/assets/img/icons/mail-black.svg" alt="Icon" class="transition">
                    </div>
                    <div class="contact-info">
                        <span class="font-optional fs-13 fw-bold d-block text-title ls-1">EMAIL</span>
                        <a href="mailto:hello@renius.com"
                            class="text-para hover-text-primary transition">hello@renius.com</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="contact-card style-one bg-gray d-flex flex-wrap align-items-center round-30 mb-30">
                    <div
                        class="contact-icon bg_secondary d-flex flex-column align-items-center justify-content-center rounded-circle transition">
                        <img src="/frontend/assets/img/icons/pin-black.svg" alt="Icon" class="transition">
                    </div>
                    <div class="contact-info">
                        <span>401 Broadway, 24th Floor, London</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="row align-items-lg-start align-items-center">
            <div class="location-box style-one bg-white round-10" data-cue="slideInUp" data-show="true"
                style="animation-name: slideInUp; animation-duration: 600ms; animation-timing-function: ease; animation-delay: 0ms; animation-direction: normal; animation-fill-mode: both;">
                <div class="row">
                    <div class="col-xxl-6 col-xl-6 col-lg-6 mb-md-20">
                        <p class="fw-semibold text-title text-title mb-20">
                            Đừng ngần ngại liên hệ với đội ngũ chuyên gia của chúng tôi để bắt đầu kế hoạch bứt phá tương
                            lai ngay hôm nay.
                        </p>
                        <!-- Wrapper container -->
                        <div class="col-lg-12 mb-md-20">
                            <form action="{{ route('contact.submit') }}" method="POST" class="comment-form form-wrapper round-10 p-0 mb-50" id="contact-form" novalidate>
                                @csrf
                                <div class="row gx-xl-3">
                                    <div class="col-md-6">
                                        <div class="form-group position-relative mb-25">
                                            <input type="text" name="name" id="name"
                                                class="w-100 ht-50 bg-gray border-0 outline-0 round-5 text-para"
                                                placeholder="{{ __('common.name') }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-25">
                                            <input type="email" name="email" id="email" placeholder="{{ __('common.email') }}"
                                                class="w-100 ht-50 bg-gray border-0 outline-0 round-5 text-para">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group mb-25">
                                            <input type="text" name="subject" id="subject" placeholder="{{ __('common.subject') }}"
                                                class="w-100 ht-50 bg-gray border-0 outline-0 round-5 text-para">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group mb-25">
                                            <textarea name="message" id="message" cols="30" rows="10" placeholder="{{ __('common.message') }}"
                                                class="w-100 ht-152 bg-gray border-0 outline-0 round-5 text-para resize-0"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-check checkbox style-one mb-25">
                                            <input class="form-check-input" type="checkbox" name="terms_accepted" id="terms_accepted" value="1">
                                            <label class="form-check-label" for="terms_accepted">
                                                {{ __('common.accept_terms') }}
                                            </label>
                                        </div>
                                        <div class="col-xl-5 col-md-6">
                                            <button type="submit"
                                                class="btn style-one d-inline-flex flex-wrap align-items-center p-0"><span
                                                    class="btn-text d-inline-block fw-semibold position-relative transition">{{ __('common.send_message') }}</span><span
                                                    class="btn-icon position-relative d-flex flex-column align-items-center justify-content-center rounded-circle transition"><i
                                                        class="ri-arrow-right-up-line"></i></span></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-xxl-6 col-xl-6 col-lg-6">
                        <div id="iframe-map" class="map-wrap round-10">
                            <div class="map-wrap">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4418.547012515451!2d105.80019557584068!3d20.993992088970764!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab24c5621439%3A0xed7a32c6a7340f8e!2zQ8O0bmcgVHkgVE5ISCBHaeG6o2kgUGjDoXAgQ8O0bmcgTmdo4buHIE1ldGFTb2Z0!5e1!3m2!1svi!2s!4v1769661751238!5m2!1svi!2s"
                                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Details End -->

    <style>
        /* Red border for invalid inputs */
        input.is-invalid,
        textarea.is-invalid {
            border: 2px solid #dc3545 !important;
            background-color: #fff8f8 !important;
        }

        input.is-invalid:focus,
        textarea.is-invalid:focus {
            border: 2px solid #dc3545 !important;
            outline: none !important;
            box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.25) !important;
        }

        .form-check-input.is-invalid {
            border: 2px solid #dc3545 !important;
            background-color: #fff8f8 !important;
        }

        .form-check-input.is-invalid:focus {
            border: 2px solid #dc3545 !important;
            box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.25) !important;
        }

        /* Toast Notification */
        .toast-notification {
            position: fixed;
            top: 20px;
            right: 20px;
            min-width: 300px;
            max-width: 400px;
            background: white;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.15);
            padding: 16px 20px;
            z-index: 9999;
            animation: slideInRight 0.3s ease-out;
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .toast-notification.toast-error {
            border-left: 4px solid #dc3545;
        }

        .toast-notification.toast-success {
            border-left: 4px solid #28a745;
        }

        .toast-notification.toast-warning {
            border-left: 4px solid #ffc107;
        }

        .toast-icon {
            font-size: 24px;
            flex-shrink: 0;
        }

        .toast-content {
            flex-grow: 1;
        }

        .toast-title {
            font-weight: 600;
            margin-bottom: 4px;
            font-size: 14px;
        }

        .toast-message {
            font-size: 13px;
            color: #666;
            margin: 0;
        }

        .toast-close {
            background: none;
            border: none;
            font-size: 20px;
            color: #999;
            cursor: pointer;
            padding: 0;
            margin-left: 8px;
            line-height: 1;
        }

        .toast-close:hover {
            color: #333;
        }

        @keyframes slideInRight {
            from {
                transform: translateX(400px);
                opacity: 0;
            }
            to {
                transform: translateX(0);
                opacity: 1;
            }
        }

        @keyframes slideOutRight {
            from {
                transform: translateX(0);
                opacity: 1;
            }
            to {
                transform: translateX(400px);
                opacity: 0;
            }
        }

        .toast-notification.hiding {
            animation: slideOutRight 0.3s ease-out forwards;
        }
    </style>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        // Toast Notification Function
        function showToast(type, title, message, duration = 4000) {
            // Remove any existing toasts
            const existingToasts = document.querySelectorAll('.toast-notification');
            existingToasts.forEach(toast => toast.remove());

            // Create toast element
            const toast = document.createElement('div');
            toast.className = `toast-notification toast-${type}`;

            // Icon based on type
            let icon = '';
            if (type === 'error') {
                icon = '<i class="ri-error-warning-line" style="color: #dc3545;"></i>';
            } else if (type === 'success') {
                icon = '<i class="ri-checkbox-circle-line" style="color: #28a745;"></i>';
            } else if (type === 'warning') {
                icon = '<i class="ri-alert-line" style="color: #ffc107;"></i>';
            }

            toast.innerHTML = `
                <div class="toast-icon">${icon}</div>
                <div class="toast-content">
                    <div class="toast-title">${title}</div>
                    <p class="toast-message">${message}</p>
                </div>
                <button class="toast-close" onclick="this.parentElement.remove()">&times;</button>
            `;

            document.body.appendChild(toast);

            // Auto remove after duration
            setTimeout(() => {
                toast.classList.add('hiding');
                setTimeout(() => toast.remove(), 300);
            }, duration);
        }

        document.addEventListener('DOMContentLoaded', function() {
            const contactForm = document.getElementById('contact-form');

            // Form fields
            const nameInput = document.getElementById('name');
            const emailInput = document.getElementById('email');
            const subjectInput = document.getElementById('subject');
            const messageInput = document.getElementById('message');
            const termsCheckbox = document.getElementById('terms_accepted');

            // Clear red border on input change
            [nameInput, emailInput, subjectInput, messageInput].forEach(field => {
                field.addEventListener('input', function() {
                    this.classList.remove('is-invalid');
                });
            });

            // Clear red border on checkbox change
            termsCheckbox.addEventListener('change', function() {
                this.classList.remove('is-invalid');
            });

            // Validate email format
            function isValidEmail(email) {
                const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                return re.test(email);
            }

            contactForm.addEventListener('submit', function(e) {
                e.preventDefault();

                // Reset all red borders
                [nameInput, emailInput, subjectInput, messageInput, termsCheckbox].forEach(field => {
                    field.classList.remove('is-invalid');
                });

                let isValid = true;
                let firstInvalidField = null;
                let errorMessages = [];

                // Validate name
                if (!nameInput.value.trim()) {
                    nameInput.classList.add('is-invalid');
                    errorMessages.push('{{ __("common.validation.name_required") }}');
                    isValid = false;
                    if (!firstInvalidField) firstInvalidField = nameInput;
                }

                // Validate email
                if (!emailInput.value.trim()) {
                    emailInput.classList.add('is-invalid');
                    errorMessages.push('{{ __("common.validation.email_required") }}');
                    isValid = false;
                    if (!firstInvalidField) firstInvalidField = emailInput;
                } else if (!isValidEmail(emailInput.value.trim())) {
                    emailInput.classList.add('is-invalid');
                    errorMessages.push('{{ __("common.validation.email_invalid") }}');
                    isValid = false;
                    if (!firstInvalidField) firstInvalidField = emailInput;
                }

                // Validate subject
                if (!subjectInput.value.trim()) {
                    subjectInput.classList.add('is-invalid');
                    errorMessages.push('{{ __("common.validation.subject_required") }}');
                    isValid = false;
                    if (!firstInvalidField) firstInvalidField = subjectInput;
                }

                // Validate message
                if (!messageInput.value.trim()) {
                    messageInput.classList.add('is-invalid');
                    errorMessages.push('{{ __("common.validation.message_required") }}');
                    isValid = false;
                    if (!firstInvalidField) firstInvalidField = messageInput;
                }

                // Validate terms
                if (!termsCheckbox.checked) {
                    termsCheckbox.classList.add('is-invalid');
                    errorMessages.push('{{ __("common.validation.terms_required") }}');
                    isValid = false;
                    if (!firstInvalidField) firstInvalidField = termsCheckbox;
                }

                // If not valid, show toast error and focus first invalid field
                if (!isValid) {
                    if (firstInvalidField) {
                        firstInvalidField.focus();
                    }

                    // Show first error message in toast
                    showToast(
                        'error',
                        '{{ __("common.error") }}',
                        errorMessages[0] || '{{ __("common.validation.fill_required_fields") }}'
                    );
                    return;
                }

                // Get form data
                const formData = new FormData(this);

                // Show loading
                Swal.fire({
                    title: '{{ __("common.please_wait") }}',
                    text: '{{ __("common.sending_message") }}',
                    allowOutsideClick: false,
                    allowEscapeKey: false,
                    didOpen: () => {
                        Swal.showLoading();
                    }
                });

                // Submit form via Fetch API
                fetch('{{ route("contact.submit") }}', {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                        'Accept': 'application/json',
                    },
                    body: formData
                })
                .then(async response => {
                    const data = await response.json();

                    // Close loading
                    Swal.close();

                    if (response.ok && data.success) {
                        // Show success toast
                        showToast(
                            'success',
                            '{{ __("common.success") }}',
                            data.message
                        );

                        // Reset form
                        contactForm.reset();

                        // Reset all red borders
                        [nameInput, emailInput, subjectInput, messageInput, termsCheckbox].forEach(field => {
                            field.classList.remove('is-invalid');
                        });
                    } else {
                        // Validation errors from server
                        if (data.errors) {
                            // Add red border to invalid fields
                            Object.keys(data.errors).forEach(fieldName => {
                                const field = document.getElementById(fieldName);
                                if (field) {
                                    field.classList.add('is-invalid');
                                }
                            });

                            // Show toast with first error message
                            const firstError = Object.values(data.errors)[0][0];
                            showToast(
                                'error',
                                '{{ __("common.validation_error") }}',
                                firstError || '{{ __("common.validation.fill_required_fields") }}'
                            );
                        } else {
                            showToast(
                                'error',
                                '{{ __("common.error") }}',
                                data.message || '{{ __("common.contact_error") }}'
                            );
                        }
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    Swal.close();
                    showToast(
                        'error',
                        '{{ __("common.error") }}',
                        '{{ __("common.contact_error") }}'
                    );
                });
            });
        });
    </script>
@endsection
