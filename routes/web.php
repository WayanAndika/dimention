<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdminProvinsiController;
use App\Models\Provinsi;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\EventListener\ProfilerListener;
use Symfony\Component\HttpKernel\Profiler\Profile;

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
Route::post("/provinsi/admin/delete/{id}", function ($id) {
    $post = Provinsi::find($id);
    $post->delete();
    return redirect("/provinsi/admin")->with("success", "Hapus Data Berhasil");
});
Route::get("/provinsi/admin/edit/{id}", function ($id) {
    $content = Provinsi::find($id);
    return view("pages.admin.edit", [
        "title" => "Halaman Edit Provinsi | Admin",
        "content" => $content
    ]);
});
Route::post("/provinsi/admin/edit/{id}", function ($id, Request $request) {
    $provinsi = Provinsi::find($id);
    $rules = [
        "deskripsi" => "required"
    ];
    if ($request->nama != $provinsi->nama) {
        $rules["nama"] = "required|unique:provinsis";
    }
    $validatedData = $request->validate($rules);
    Provinsi::where("id", $provinsi->id)
        ->update($validatedData);
    return redirect("/provinsi/admin")->with("success", "Edit Data Berhasil");
});
Route::resource('/provinsi/admin', AdminController::class)->middleware("auth");
