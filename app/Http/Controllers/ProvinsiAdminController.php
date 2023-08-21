<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProvinsiAdminController extends Controller
{
    public function index()
    {
        $auth = Auth::user();

        if ($auth->is_admin) {
            return view("pages/admin/index", [
                "title" => "Halaman Provinsi | Admin"
            ]);
        }
        return redirect('/');
    }
    public function tambah(Request $request)
    {
        return view("pages/admin/create", [
            "title" => "Halaman Tambah Provinsi | Admin"
        ]);
    }
}
