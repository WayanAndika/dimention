<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view("pages/main/register", [
            "title" => "Halaman Sign Up"
        ]);
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => "required|max:100",
            'email' => "required|email:dns|unique:users",
            'password' => 'required|min:9|max:250',
            'confirm-password' => 'required|same:password'
        ]);
        $validatedData["password"] = bcrypt($validatedData["password"]);
        User::create($validatedData);

        $request->session()->flash("success", "Registrasi Berhasil! Silahkan Login");
        return redirect("/sign-in");
    }
}
