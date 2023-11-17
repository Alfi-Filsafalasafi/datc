<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\ArtikelPribadiController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\LinktreeController;
use App\Http\Controllers\Auth\LoginController;

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

Route::get('/', [WelcomeController::class,'index'])->name('welcome');
Route::post('/hubungi_kami',[WelcomeController::class, 'store_hubungi'])->name('hubungi_kami.store');

//admin
Route::get('/login/admin/tim/datc', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login/admin/tim/datc', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/detail/artikel/{id}', [HomeController::class, 'detail_artikel'])->name('detail_artikel');
Route::get('/dibaca/{id}', [HomeController::class, 'dibaca'])->name('dibaca');

Route::get('/artikelwebsite', [ArtikelController::class,'index'])->name('artikel.index');
Route::get('/artikelwebsite/tambah', [ArtikelController::class,'create'])->name('artikel.create');
Route::post('/artikelwebsite/tambah', [ArtikelController::class,'store'])->name('artikel.store');
Route::delete('/artikelwebsite/{id}/hapus', [ArtikelController::class, 'destroy'])->name('artikel.delete');
Route::get('/artikelwebsite/{id}/edit', [ArtikelController::class, 'edit'])->name('artikel.edit');
Route::patch('/artikelwebsite/{id}/edit/update', [ArtikelController::class, 'update'])->name('artikel.update');

//Artikel Pribadi
Route::get('/artikelpribadi', [ArtikelPribadiController::class,'index'])->name('artikel_pribadi.index');
Route::get('/artikelpribadi/tambah', [ArtikelPribadiController::class,'create'])->name('artikel_pribadi.create');
Route::post('/artikelpribadi/tambah', [ArtikelPribadiController::class,'store'])->name('artikel_pribadi.store');
Route::delete('/artikelpribadi/{id}/hapus', [ArtikelPribadiController::class, 'destroy'])->name('artikel_pribadi.delete');
Route::get('/artikelpribadi/{id}/edit', [ArtikelPribadiController::class, 'edit'])->name('artikel_pribadi.edit');
Route::patch('/artikelpribadi/{id}/edit/update', [ArtikelPribadiController::class, 'update'])->name('artikel_pribadi.update');

Route::get('/linktree', [LinktreeController::class,'index'])->name('linktree.index');


Route::fallback(function () {
    return view('errors.404');
});
