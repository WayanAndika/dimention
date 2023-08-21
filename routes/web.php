<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ProvinsiAdminController;
use App\Models\Provinsi;
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
    return view("pages/main/home", [
        "title" => "Halaman Home"
    ]);
});
Route::get('/about-us', function () {
    return view("pages/main/aboutUs", [
        "title" => "Halaman About Us"
    ]);
});
Route::get('/sign-in', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/sign-in', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);
// Register
Route::get('/sign-up', [RegisterController::class, 'index']);
Route::post('/sign-up', [RegisterController::class, 'store']);

// Provinsi
Route::get('/provinsi', function () {
    return view("pages/provinsi/index", [
        "title" => "Halaman Provinsi",
        "provinsi" => Provinsi::all()
    ]);
});
Route::get('/blog', function () {
    return view("pages/provinsi/blog", [
        "title" => "Halaman Blog"
    ]);
});



// admin router
Route::get('/provinsi/admin', [ProvinsiAdminController::class, 'index'])->middleware('auth');
Route::get('/provinsi/admin/create', [ProvinsiAdminController::class, 'tambah'])->middleware('auth');
