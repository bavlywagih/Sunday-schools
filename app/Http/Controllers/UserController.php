<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class UserController extends Controller
{
    public function users()
    {
        $users = User::all();

        return view('user.user' , compact('users'));
    }
    public function create()
    {

        return view('user.create.create-user');
    }
    public function user(Request $Request)
    {
        dd($Request->role);
        return view('user.create.create-user');
    }
}
