<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class authController extends Controller
{
    public function login()
    {
    	return view('auth/login');
    }
    public function postLogin(Request $request)
    {
    	$credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect(route('home'))->with('alert', 'Login berhasil');
        }
        return back()->withErrors([
            'email' => 'Email / Password salah.',
        ]);
    }
    public function logout(Request $request)
    {
    	Auth::logout();
    	$request->session()->invalidate();
        $request->session()->regenerateToken();
    	return redirect(route('login'));
    }
}
