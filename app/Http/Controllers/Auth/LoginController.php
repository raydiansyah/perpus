<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credential = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if(Auth::attempt($credential)){
            $request->session()->regenerate();

            //fungsi intended adalah halaman tujuan yang tertahan karena belum ada session
            return redirect()->intended(route('books.index'));
        }

        return back()->withErrors([
            'email' => 'Email atau password salah',
        ])->onlyInput('email');


    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}
