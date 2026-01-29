<!DOCTYPE html>
<html lang="zxx">
@include('admin.meta')

<body class="bg-body-bg">



    <div class="container-fluid">
        <div class="main-content d-flex flex-column p-0">
            <div class="m-lg-auto my-auto w-930 py-4">
                <div class="card bg-white border rounded-10 border-white py-100 px-130">
                    <div class="p-md-5 p-4 p-lg-0">
                        <div class="text-center mb-4">
                            <h3 class="fs-26 fw-medium" style="margin-bottom: 6px;">Sign In</h3>
                            <p class="fs-16 text-secondary lh-1-8">Don’t have an account yet? <a href="sign-up.html"
                                    class="text-primary text-decoration-none">Sign Up</a></p>
                        </div>
 @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="mb-20">
                                <label class="label fs-16 mb-2">Email Address</label>
                                <div class="form-floating">
                                    <input type="email" class="form-control" d="email" name="email"
                                        placeholder="Enter email address *" autofocus>
                                    <label for="floatingInput1">Enter email address *</label>
                                </div>
                            </div>
                            <div class="mb-20">
                                <label class="label fs-16 mb-2">Your Password</label>
                                <div class="form-group" id="password-show-hide">
                                    <div class="password-wrapper position-relative password-container">
                                        <input type="password" class="form-control text-secondary password"
                                            id="password" name="password" placeholder="Enter password *">
                                        <i style="color: #A9A9C8; font-size: 22px; right: 15px;"
                                            class="ri-eye-off-line password-toggle-icon translate-middle-y top-50 position-absolute cursor text-secondary"
                                            aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-20">
                                <div class="d-flex justify-content-between align-items-center flex-wrap gap-1">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="flexCheckDefault">
                                        <label class="form-check-label fs-16" for="flexCheckDefault">
                                            Remember me
                                        </label>
                                    </div>
                                   
                                </div>
                            </div>

                            <div class="mb-4">
                                <button type="submit" class="btn btn-primary fw-normal text-white w-100"
                                    style="padding-top: 18px; padding-bottom: 18px;">Sign In</button>
                            </div>


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Link Of JS File -->
    @include('admin.js')
</body>

</html>
