<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NewUserController extends Controller
{
    public function new_user_GET()
    {
        return view('admin.users.new-user');
    }
}
