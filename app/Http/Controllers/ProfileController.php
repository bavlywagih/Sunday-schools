<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    public function profile()
    {
        return view('profile/profile');
    }

        public function edit_profile()
    {
        return view('/profile/ProfileEdit');
    }

    public function update_profile(Request $request, $id)
    {
        $request->validate([
            'username' => ['required'],
            'phone' => ['required'],
            'birthday' => ['required'],
        ]);
        DB::table('users')->where('id', $id)->update(['username'  => $request->username , 'phone'  => $request->phone , 'birthday'  => $request->birthday]);
        return redirect(route('profile'));
    }

}
