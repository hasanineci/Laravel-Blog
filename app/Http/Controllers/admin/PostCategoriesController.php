<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Posts;
use Illuminate\Http\Request;

class PostCategoriesController extends Controller
{
    public function postCategories_Get()
    {
        $posts = Posts::orderBy('created_at', 'DESC')->paginate(10);
        return view('admin.blog-post.posts', compact('posts'));
    }
}
