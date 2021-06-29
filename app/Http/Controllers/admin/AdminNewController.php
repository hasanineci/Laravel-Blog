<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminNewController extends Controller
{
    public function admin_new_kategori_GET()
    {
        return view('admin.categories.new-kategori');
    }
}
