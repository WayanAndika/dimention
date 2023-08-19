<?php

use Illuminate\Support\Facades\Route;
use App\Models\Coba;
use App\Models\Peminjaman;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view("pages/main/home");
});
Route::get('/about-us', function () {
    return view("pages/main/aboutUs");
});
Route::get('/sign-in', function () {
    return view("pages/main/login");
});
Route::get('/sign-up', function () {
    return view("pages/main/register");
});
Route::get('/peminjaman', function () {
    $peminjaman = new Peminjaman();
    return view("pages/peminjaman/index", [
        "pinjam" => Peminjaman::all()
    ]);
});
Route::get('/{id}', function ($id) {
    dd(Coba::find($id));
});
