<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\kategori;

class ContactController extends Controller
{
    public function contact_Get()
    {
        $contact = Contact::get();
        return view('front.contact', compact('contact'));
    }
}
