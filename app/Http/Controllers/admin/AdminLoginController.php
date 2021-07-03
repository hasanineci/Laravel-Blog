<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
    public function admin_login_GET()
    {
        return view('admin.auth.login');
    }
    public function admin_login_POST(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if ( Auth::attempt($credentials) ) {
            // Authentication passed...
            return redirect()->intended('dashboard');
        }

        return redirect()->back()->with('error', 'E-Posta adresi veya şifre hatalı.');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/admin');
    }
}
