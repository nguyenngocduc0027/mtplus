@extends('auth.layouts.app')
@props(['pageTitle' => __('auth.content.login')])
@push('styles')
@endpush
@section('content-auth')
    <div class="m-lg-auto my-auto w-930 py-4">
        <div class="card bg-white border rounded-10 border-white py-100 px-130">
            <div class="p-md-5 p-4 p-lg-0">
                <div class="text-center mb-4">
                    <img width="100px" src="{{ asset('uploads/logo-o-l.png') }}" alt="" class="pb-2">
                    <h3 class="fs-26 fw-medium" style="margin-bottom: 6px;">{{ __('auth.content.login') }}</h3>
                    <p class="fs-16 text-secondary lh-1-8">{{ __('auth.content.dont_account') }} <a href="sign-up.html"
                            class="text-primary text-decoration-none">{{ __('auth.content.register') }}</a></p>
                </div>

                <form id="login-form">
                    @csrf
                    <div class="mb-20">
                        <label class="label fs-16 mb-2">{{ __('auth.content.email_address') }}</label>
                        <div class="form-floating">
                            <input type="email" class="form-control" id="email" name="email"
                                placeholder="{{ __('auth.content.enter_email') }}">
                            <label for="email">{{ __('auth.content.enter_email') }}</label>
                        </div>
                    </div>
                    <div class="mb-20">
                        <label class="label fs-16 mb-2">{{ __('auth.content.password') }}</label>
                        <div class="form-group" id="password-show-hide">
                            <div class="password-wrapper position-relative password-container">
                                <input type="password" class="form-control text-secondary password" id="password"
                                    name="password" placeholder="{{ __('auth.content.enter_password') }}">
                                <i style="color: #A9A9C8; font-size: 22px; right: 15px;"
                                    class="ri-eye-off-line password-toggle-icon translate-middle-y top-50 position-absolute cursor text-secondary"
                                    aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                    <div class="mb-20">
                        <div class="d-flex justify-content-between align-items-center flex-wrap gap-1">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="1" id="rememberMe"
                                    name="remember">
                                <label class="form-check-label fs-16" for="rememberMe">
                                    {{ __('auth.content.remember_me') }}
                                </label>
                            </div>
                            <a href="javascript:void(0)"
                                class="fs-16 text-primary fw-normal text-decoration-none">{{ __('auth.content.forgot_password') }}</a>
                        </div>
                    </div>

                    <div class="mb-4">
                        <button type="submit" class="btn btn-primary fw-normal text-white w-100"
                            style="padding-top: 18px; padding-bottom: 18px;">{{ __('auth.content.login') }}</button>
                    </div>

                    <div class="position-relative text-center z-1 mb-12">
                        <span
                            class="fs-16 bg-white px-4 text-secondary card d-inline-block border-0">{{ __('auth.content.or_login_with') }}</span>
                        <span class="d-block border-bottom border-2 position-absolute w-100 z-n1" style="top: 13px;"></span>
                    </div>

                    <ul class="p-0 mb-0 list-unstyled d-flex justify-content-center" style="gap: 10px;">
                        <li>
                            <a href="https://www.facebook.com/" target="_blank"
                                class="d-inline-block rounded-circle text-decoration-none text-center text-white transition-y fs-16"
                                style="width: 30px; height: 30px; line-height: 30px; background-color: #3a559f;">
                                <i class="ri-facebook-fill"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.twitter.com/" target="_blank"
                                class="d-inline-block rounded-circle text-decoration-none text-center text-white transition-y fs-16"
                                style="width: 30px; height: 30px; line-height: 30px; background-color: #0f1419;">
                                <i class="ri-twitter-x-line"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.google.com/" target="_blank"
                                class="d-inline-block rounded-circle text-decoration-none text-center text-white transition-y fs-16"
                                style="width: 30px; height: 30px; line-height: 30px; background-color: #e02f2f;">
                                <i class="ri-google-fill"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.linkedin.com/" target="_blank"
                                class="d-inline-block rounded-circle text-decoration-none text-center text-white transition-y fs-16"
                                style="width: 30px; height: 30px; line-height: 30px; background-color: #007ab9;">
                                <i class="ri-linkedin-fill"></i>
                            </a>
                        </li>
                    </ul>
                </form>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script>
        document.getElementById('login-form').addEventListener('submit', function(e) {
            e.preventDefault();

            const form = this;
            const formData = new FormData(form);

            fetch("{{ route('login') }}", {
                    method: "POST",
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                        'Accept': 'application/json',
                    },
                    body: formData
                })
                .then(async response => {
                    const data = await response.json();
                    if (!response.ok) throw data;
                    return data;
                })
                .then(data => {
                    Swal.fire({
                        icon: 'success',
                        title: data.title || '{{ __('auth.login_success') }}',
                        text: data.message,
                        timer: 1500,
                        showConfirmButton: false
                    }).then(() => {
                        window.location.href = data.redirect;
                    });
                })
                .catch(error => {
                    Toastify({
                        text: error.message || '{{ __('auth.login_failed') }}',
                        duration: 3000,
                        gravity: "top",
                        position: "right",
                        backgroundColor: "#dc3545",
                        close: true
                    }).showToast();
                });
        });
    </script>
@endpush
