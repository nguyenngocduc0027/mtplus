<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        // if the user is already authenticated, redirect to dashboard
        if (Auth::check()) {
            return redirect()->route('dashboard');
        }
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $validator = validator(
            $request->all(),
            [
                'email'    => ['required', 'email'],
                'password' => ['required'],
            ],
            [
                'email.required'    => __('auth.email_required'),
                'email.email'       => __('auth.email_invalid'),
                'password.required' => __('auth.password_required'),
            ]
        );

        if ($validator->fails()) {
            return response()->json([
                'status'  => 'error',
                'title'   => __('auth.validation_error'),
                'message' => $validator->errors()->first(),
            ], 422);
        }

        if (!Auth::attempt(
            $request->only('email', 'password'),
            $request->boolean('remember_me')
        )) {
            return response()->json([
                'status'  => 'error',
                'title'   => __('auth.failed'),
                'message' => __('auth.invalid_credentials'),
            ], 401);
        }

        $request->session()->regenerate();

        return response()->json([
            'status'   => 'success',
            'title'    => __('auth.login_success'),
            'message'  => __('auth.login_success'),
            'redirect' => route('dashboard'),
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return response()->json([
            'status'  => 'success',
            'title'   => __('auth.logout_success'),
            'message' => __('auth.logout_success'),
            'redirect' => route('login.form'),
        ]);
    }
}
