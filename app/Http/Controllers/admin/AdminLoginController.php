<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminLoginController extends Controller
{
    public function admin_login_GET()
    {
        return view('admin.auth.login');
    }
}
