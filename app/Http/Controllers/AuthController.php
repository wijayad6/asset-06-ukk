<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function loginAction(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (auth()->attempt($credentials))
        {
            $request->session()->regenerate();

            if (auth()->user()->role_id === 1) {
                return redirect()->intended('dashboard_admin');
            }elseif(auth()->user()->role_id === 2) {
                return redirect()->intended('dashboard_petugas');
            }else{
                return redirect()->intended('dashboard_user');
            }
        }

        return back()->with('error', 'email atau password salah');
    }
    public function logout(Request $request)
    {
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
