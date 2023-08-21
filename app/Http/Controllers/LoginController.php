<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view("pages/main/login", [
            "title" => "Halaman Sign In"
        ]);
    }
    public function authenticate(Request $request)
    {
        $validatedData = $request->validate([
            "email" => "required|email:dns",
            "password" => "required"
        ]);

        if (Auth::attempt($validatedData)) {
            $request->session()->regenerate();

            return redirect()->intended('/');
        }

        return back()->with('loginErr', "Proses Login Gagal! Silahkan Mengulang");
    }


    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
