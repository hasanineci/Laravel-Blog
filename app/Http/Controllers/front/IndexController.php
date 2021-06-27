<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Posts;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $posts = Posts::orderBy('created_at', 'DESC')->where('status', 'active')->paginate(1);
        return view('front.homepage', compact('posts'));
    }
}
