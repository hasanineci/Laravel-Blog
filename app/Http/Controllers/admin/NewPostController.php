<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NewPostController extends Controller
{
    public function new_post_Get()
    {
        return view('admin.new-post');
    }
}
