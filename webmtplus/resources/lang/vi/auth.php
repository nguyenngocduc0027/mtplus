<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Auth Page Content
    |--------------------------------------------------------------------------
    */
    'content' => [
        'login'           => 'Đăng nhập',
        'register'        => 'Đăng ký',
        'logout' => 'Đăng xuất',
        'confirm_logout' => 'Đăng xuất?',
        'confirm_logout_text' => 'Bạn có chắc chắn muốn đăng xuất?',
        'cancel' => 'Hủy',
        'dont_account'    => 'Chưa có tài khoản?',
        'email_address'   => 'Địa chỉ email',
        'enter_email'     => 'Nhập địa chỉ email *',
        'password'        => 'Mật khẩu',
        'enter_password'  => 'Nhập mật khẩu *',
        'remember_me'     => 'Ghi nhớ đăng nhập',
        'forgot_password' => 'Quên mật khẩu?',
        'or_login_with'   => 'Hoặc đăng nhập với',
    ],

    /*
    |--------------------------------------------------------------------------
    | Auth Messages (Swal / Toast / API)
    |--------------------------------------------------------------------------
    */

    'login_success' => 'Đăng nhập thành công.',
    'logout_success' => 'Đăng xuất thành công.',

    'failed' => 'Thông tin đăng nhập không chính xác.',
    'invalid_credentials' => 'Thông tin đăng nhập không chính xác.',
    'validation_error' => 'Dữ liệu không hợp lệ.',
    'unauthorized'     => 'Bạn không có quyền truy cập.',
    'session_expired'  => 'Phiên đăng nhập đã hết hạn. Vui lòng đăng nhập lại.',

    /*
    |--------------------------------------------------------------------------
    | Validation Messages
    |--------------------------------------------------------------------------
    */
    'email_required'    => 'Vui lòng nhập email.',
    'email_invalid'     => 'Email không đúng định dạng.',
    'password_required' => 'Vui lòng nhập mật khẩu.',

    /*
    |--------------------------------------------------------------------------
    | Throttle
    |--------------------------------------------------------------------------
    */
    'throttle' => 'Quá nhiều lần đăng nhập thất bại. Vui lòng thử lại sau :seconds giây.',
];
