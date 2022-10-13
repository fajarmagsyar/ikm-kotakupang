<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function loginPage()
    {
        return view('admin.login');
    }
    public function auth(Request $request)
    {
        $credentials = $request->validate([
            'mail' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect('/admn/dashboard');
        }

        return back()->with('error', 'Username atau password anda salah, pastikan data yang anda masukkan sudah benar!');
    }
}
