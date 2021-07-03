<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact_GET()
    {
        $contact = Contact::latest()->first();
        return view('admin.contact.contact', compact('contact'));
    }

    public function contact_POST(Request $request)
    {
        $validated = $request->validate([
            "email" => "required|max:255",
            "phone" => "required|max:255",
            "fax" => "required|max:255",
            "whatsapp_phone" => 'max:255',
            "address" => "required|max:255",
        ]);

        if ( Contact::latest()->first() != null ) {
            $update = Contact::latest()->update([
                "email" => $request->email,
                "phone" => $request->phone,
                "fax" => $request->fax,
                "whatsapp_phone" => $request->whatsapp_phone,
                "address" => $request->address,
            ]);
        }else{
            $insert = new Contact();
            $insert->email = $request->email;
            $insert->phone = $request->phone;
            $insert->fax = $request->fax;
            $insert->whatsapp_phone = $request->whatsapp_phone;
            $insert->address = $request->address;
            $insert->save();
        }

        return redirect()->back()->with('success', 'İşlem Başarılı, iletişim bilgileri güncellendi');
    }
}
