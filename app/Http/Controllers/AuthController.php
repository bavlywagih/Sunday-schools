<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'exists:users'],
            'password' => ['required'],
            'remember' => ['boolean']
        ]);

        $user = User::where('name', $validated['name'])->first();

        if ($user->password != $validated['password']) {
            return redirect()->back()->withErrors(['password' => 'The entered password is wrong!']);
        }

        Auth::login($user,  $validated['remember']);

        $username = User::query()->where('name', $validated['name'])->firstOrFail();

        return redirect()->route('index', compact('username'));
    }
    public function loginform(){
        return view('pages/login.login');
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('index');
        }

}
