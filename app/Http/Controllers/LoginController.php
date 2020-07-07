<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function formLogin()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $user = [
            'name' => $request->email,
            'password' => $request->password
        ];

        if (Auth::attempt($user)) {
            return back();
        } else {
            return view('admin.dashboard');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
