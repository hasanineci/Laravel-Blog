<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Posts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class NewPostController extends Controller
{
    public function new_post_Get()
    {
        return view('admin.blog-post.new-post');
    }

    public function new_POST(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|unique:posts|max:255',
            'image' => 'image|mimes:jpeg,png,jpg,svg|max:4096'
        ]);

        $new = new Posts();
        $new->title = $request->title;
        $new->url = Str::slug($request->title);
        $new->description = $request->description;
        $new->content = $request->content;
        $new->status = $request->status;
        $new->user_id = Auth::user()->id;
        $new->save();

        return redirect()->back()->with('success', 'İşlem başarılı, yeni blog yazısı paylaşıldı.');
    }
}
