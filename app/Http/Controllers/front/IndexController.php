<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\kategori;
use App\Models\Posts;

class IndexController extends Controller
{
    public function index()
    {
        $posts = Posts::orderBy('created_at', 'DESC')->where('status', 'active')->paginate(10);
        $kategori =kategori::get();
        return view('front.homepage', compact('posts'), compact('kategori'));
    }
}
