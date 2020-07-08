<?php

namespace App\Http\Controllers;

use App\Services\LoginService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    protected $loginService;
    public function __construct(LoginService $loginService)
    {
        $this->loginService = $loginService;
    }

    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function formLogin()
    {
        return view('admin.login');
    }

    public function login( Request $request)
    {
        if (!$this->loginService->login($request)) {
            return back();
        }
        return view('admin.dashboard');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
