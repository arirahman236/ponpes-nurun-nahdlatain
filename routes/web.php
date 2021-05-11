<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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
    return view('welcome');
});

Auth::routes();

Route::middleware(['auth','ceklevel:admin'])->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'home'])->name('home');
    Route::get('/kategori', [App\Http\Controllers\HomeController::class, 'kategori'])->name('kategori');
    Route::get('/user', [App\Http\Controllers\HomeController::class, 'user'])->name('user');
    Route::get('/berita', [App\Http\Controllers\HomeController::class, 'berita'])->name('berita');
    Route::get('/gallery', [App\Http\Controllers\HomeController::class, 'gallery'])->name('gallery');
    Route::get('/about', [App\Http\Controllers\HomeController::class, 'about'])->name('about');
});
Route::middleware(['auth','ceklevel:admin,user'])->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'home'])->name('home');
    Route::get('/berita', [App\Http\Controllers\HomeController::class, 'berita'])->name('berita');
    Route::get('/gallery', [App\Http\Controllers\HomeController::class, 'gallery'])->name('gallery');
    Route::get('/about', [App\Http\Controllers\HomeController::class, 'about'])->name('about');
});

//kategori
Route::post('/kategori', [App\Http\Controllers\HomeController::class,'store_kategori'] )->name('kategoris.store');
Route::get('/kategori/{kategori}/edit', [App\Http\Controllers\HomeController::class,'edit_kategori'] )->name('kategoris.edit');
Route::patch('/kategori/{kategori}', [App\Http\Controllers\HomeController::class,'update_kategori'] )->name('kategoris.update');
Route::delete('/kategori/{kategori}', [App\Http\Controllers\HomeController::class,'destroy_kategori'] )->name('kategoris.destroy');

//user
Route::post('/user', [App\Http\Controllers\HomeController::class,'store_user'] )->name('users.store');
Route::get('/user/{user}/edit', [App\Http\Controllers\HomeController::class,'edit_user'] )->name('users.edit');
Route::patch('/user/{user}', [App\Http\Controllers\HomeController::class,'update_user'] )->name('users.update');
Route::delete('/user/{user}', [App\Http\Controllers\HomeController::class,'destroy_user'] )->name('users.destroy');

//berita
Route::post('/berita', [App\Http\Controllers\HomeController::class,'store_berita'] )->name('beritas.store');
Route::get('/berita/{berita}/edit', [App\Http\Controllers\HomeController::class,'edit_berita'] )->name('beritas.edit');
Route::patch('/berita/{berita}', [App\Http\Controllers\HomeController::class,'update_berita'] )->name('beritas.update');
Route::delete('/berita/{berita}', [App\Http\Controllers\HomeController::class,'destroy_berita'] )->name('beritas.destroy');

//gallery
Route::post('/gallery', [App\Http\Controllers\HomeController::class,'store_gallery'] )->name('gallerys.store');
Route::get('/gallery/{gallery}/edit', [App\Http\Controllers\HomeController::class,'edit_gallery'] )->name('gallerys.edit');
Route::patch('/gallery/{gallery}', [App\Http\Controllers\HomeController::class,'update_gallery'] )->name('gallerys.update');
Route::delete('/gallery/{gallery}', [App\Http\Controllers\HomeController::class,'destroy_gallery'] )->name('gallerys.destroy');

//about
Route::post('/about', [App\Http\Controllers\HomeController::class,'store_about'] )->name('abouts.store');
Route::get('/about/{about}/edit', [App\Http\Controllers\HomeController::class,'edit_about'] )->name('abouts.edit');
Route::patch('/about/{about}', [App\Http\Controllers\HomeController::class,'update_about'] )->name('abouts.update');
Route::delete('/about/{about}', [App\Http\Controllers\HomeController::class,'destroy_about'] )->name('abouts.destroy');
