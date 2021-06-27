<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\kategori;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact_Get()
    {
        $kategori =kategori::get();
        return view('front.contact', compact('kategori'));
    }
}
