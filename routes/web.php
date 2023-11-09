<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtikelController;
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
Route::get('/dibaca/{id}', [HomeController::class, 'dibaca'])->name('dibaca');

Route::get('/artikel', [ArtikelController::class,'index'])->name('artikel.index');
Route::get('/artikel/tambah', [ArtikelController::class,'create'])->name('artikel.create');
Route::post('/artikel/tambah', [ArtikelController::class,'store'])->name('artikel.store');
Route::delete('/artikel/{id}/hapus', [ArtikelController::class, 'destroy'])->name('artikel.delete');
Route::get('/artikel/{id}/edit', [ArtikelController::class, 'edit'])->name('artikel.edit');
Route::patch('/artikel/{id}/edit/update', [ArtikelController::class, 'update'])->name('artikel.update');

Route::get('/linktree', [LinktreeController::class,'index'])->name('linktree.index');


Route::fallback(function () {
    return view('errors.404');
});
