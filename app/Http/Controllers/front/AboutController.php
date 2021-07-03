<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\kategori;

class AboutController extends Controller
{
    public function about_Get()
    {
        $about = About::get();
        $kategori =kategori::get();
        return view('front.about', compact('about', 'kategori'));
    }
}
