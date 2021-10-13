<?php

use App\Http\Livewire\Pengguna\Detail;
use App\Http\Livewire\Pengguna\Semua;
use App\Http\Livewire\Pengguna\Sunting;
use App\Http\Livewire\Pengguna\Tambah;
use Illuminate\Support\Facades\Route;

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

Route::get('/', \App\Http\Livewire\Beranda::class)->name('beranda');
Route::get('/tanaman/{slug}', \App\Http\Livewire\Tanaman\Baca::class)->name('tanaman.baca');
Route::get('hasil-pencarian', \App\Http\Livewire\Wiki\HasilPencarian::class)->name('wiki.hasil-pencarian');
Route::get('profile/{id}', \App\Http\Livewire\Auth\Detail::class)->name('auth.detail');

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
     Route::group(['prefix' => 'product'], function () {
          Route::get('semua', \App\Http\Livewire\Product\Semua::class)->name('product.semua');
          Route::get('tambah', \App\Http\Livewire\Product\Tambah::class)->name('product.tambah');
          Route::get('sunting/{slug}', \App\Http\Livewire\Product\Sunting::class)->name('product.sunting');
          Route::get('detail/{slug}', \App\Http\Livewire\Product\Detail::class)->name('product.detail');
     });

     Route::group(['prefix' => 'tanaman'], function () {
          Route::get('semua', \App\Http\Livewire\Tanaman\Semua::class)->name('tanaman.semua');
          Route::get('tambah', \App\Http\Livewire\Tanaman\Tambah::class)->name('tanaman.tambah');
          Route::get('sunting/{slug}', \App\Http\Livewire\Tanaman\Sunting::class)->name('tanaman.sunting');
          Route::get('detail/{slug}', \App\Http\Livewire\Tanaman\Detail::class)->name('tanaman.detail');
     });

     Route::group(['prefix' => 'pengguna'], function () {
          Route::get('semua', Semua::class)->name('pengguna.semua');
          Route::get('tambah', Tambah::class)->name('pengguna.tambah');
          Route::get('sunting/{slug}', Sunting::class)->name('pengguna.sunting');
          Route::get('detail/{slug}', Detail::class)->name('pengguna.detail');
     });

     Route::group(['prefix' => 'statistik'], function () {
          Route::get('semua', App\Http\Livewire\Statistik\Semua::class)->name('statistik.semua');
     });
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
     return view('dashboard');
})->name('dashboard');

Route::group(['prefix' => 'auth'], function () {
     Route::get('register', \App\Http\Livewire\Auth\Register::class)->name('auth.register');
});

Route::get('register', function () {
     return redirect()->route('auth.register');
});
