<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\kategori;
use App\Models\Posts;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function post_Get()
    {
        return view('front.post');
    }
    
    public function post_detail_GET(Request $request)
    {
        $post = Posts::where('url', $request->url)->firstOrFail();
        return view('front.post', compact('post'));
    }
}
