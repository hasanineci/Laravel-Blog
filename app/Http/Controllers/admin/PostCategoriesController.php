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
    
    /*
    ** Post detay
    */
    public function post_detail_GET(Request $request)
    {
        $post = Posts::where('id', $request->id)->first();
        return view('admin.blog-post.new-post', compact('post'));
    }

    public function post_detail_POST(Request $request)
    {
        $update = Posts::where('id', $request->id)->update([
            "title" => $request->title,
            "content" => $request->content,
            "description" => $request->description,
            "status" => $request->status
        ]);
        
        return redirect()->back()->with('success', 'Güncelleme başarılı.');
    }
    
    /*
    ** Post Silme
    */
    public function delete(Request $request)
    {
        $deleted = Posts::where('id', $request->id)->delete();
        return response()->json(1);
    }
}
