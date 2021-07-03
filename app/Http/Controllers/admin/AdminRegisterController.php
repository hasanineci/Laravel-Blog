<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminRegisterController extends Controller
{
    public function admin_register_GET()
    {
        return view('admin.auth.register');
    }
}
