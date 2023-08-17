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
    return view("pages/home/index");
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
