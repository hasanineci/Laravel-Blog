<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\about;
use Illuminate\Http\Request;

class AdminAboutController extends Controller
{
    public function admin_about_GET()
    {
        $about = about::get();
        return view('admin.about.about', compact('about'));
    }
}
