<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\About;

class AboutController extends Controller
{
    public function about_Get()
    {
        $about = About::get();
        return view('front.about', compact('about'));
    }
}
