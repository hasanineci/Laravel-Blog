<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\kategori;

class PostController extends Controller
{
    public function post_Get()
    {
        
        $kategori =kategori::get();
        return view('front.post', compact('kategori'));
    }
}
