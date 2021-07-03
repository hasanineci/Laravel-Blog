<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function users_GET()
    {
        $user = User::get();
        return view('admin.users.users', compact('user'));
    }
}
