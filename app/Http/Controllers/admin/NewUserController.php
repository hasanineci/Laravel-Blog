<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class NewUserController extends Controller
{
    public function new_user_GET()
    {
        return view('admin.users.new-user');
    }

    /*
    ** Yeni Kullanıcı Ekleme
    */
    public function new_user_POST(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|unique:users|max:255',
            'email' => 'required|unique:users|max:255',
            'password' => 'required|max:255',
        ]);

        $new = new User();
        $new->name = $request->name;
        $new->about = $request->about;
        $new->jobs = $request->jobs;
        $new->address = $request->address;
        $new->phone = $request->phone;
        $new->email = $request->email;
        $new->password = bcrypt($request->password);
        $new->save();

        return redirect()->back()->with('success', 'Yeni kullanıcı başarılı bir şekilde eklendi.');
    }

    /*
    ** Kullanıcı Güncelleme
    */
    public function users_detail_GET(Request $request)
    {
        $user = User::where('id', $request->id)->first();
        return view('admin.users.new-user', compact('user'));
    }

    public function users_detail_POST(Request $request)
    {
        $update = User::where('id', $request->id)->update([
            "name" => $request->name,
            "about" => $request->about,
            "jobs" => $request->jobs,
            "address" => $request->address,
            "phone" => $request->phone,
            "email" => $request->email,
            "password" => bcrypt($request->password)
        ]);

        return redirect()->back()->with('success', 'Kullanıcı güncelleme başarılı.');
    }

    /*
    ** Kullanıcı Silme
    */
    public function delete(Request $request)
    {
        $deleted = User::where('id', $request->id)->delete();
        return redirect()->back()->with('success', 'Kullanıcı silme başarılı.');
    }
}
