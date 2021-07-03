<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\about;
use Illuminate\Http\Request;

class AdminAboutController extends Controller
{
    public function admin_about_GET()
    {
        $about_text = about::where('id', 1)->first();
        $about_vizyon = about::where('id', 2)->first();
        $about_misyon = about::where('id', 3)->first();
        return view('admin.about.about', compact('about_text', 'about_vizyon', 'about_misyon'));
    }

    public function admin_about_POST(Request $request)
    {
        $update = about::where('id', 1)->update([
            "content" => $request->about_text
        ]);
        $update = about::where('id', 2)->update([
            "content" => $request->about_misyon
        ]);
        $update = about::where('id', 3)->update([
            "content" => $request->about_vizyon
        ]);

        return redirect()->back()->with('success', 'İşlem başarılı, hakkımızda sayfası güncellendi.');
    }
}
