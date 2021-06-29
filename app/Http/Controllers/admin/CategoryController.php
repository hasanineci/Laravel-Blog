<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\kategori;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function category_GET()
    {
        $kategori = kategori::get();
        return view('admin.categories.category', compact('kategori'));
    }
}
