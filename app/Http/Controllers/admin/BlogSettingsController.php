<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogSettingsController extends Controller
{
    public function blog_settings_GET()
    {
        return view('admin.settings.blog-settings');
    }
}
