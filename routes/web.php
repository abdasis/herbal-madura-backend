<?php

use App\Http\Controllers\PrintTanamanController;
use App\Http\Livewire\Auth\Register;
use App\Http\Livewire\Beranda;
use App\Http\Livewire\Dashboard;
use App\Http\Livewire\HalamanUtama;
use App\Http\Livewire\Pengguna\DaftarPengguna;
use App\Http\Livewire\Pengguna\Detail;
use App\Http\Livewire\Pengguna\Semua;
use App\Http\Livewire\Pengguna\Sunting;
use App\Http\Livewire\Pengguna\Tambah;
use App\Http\Livewire\Product\Baca;
use App\Http\Livewire\Tentang;
use App\Http\Livewire\Wiki\HasilPencarian;
use App\Http\Livewire\Wiki\SuntingArtikel;
use App\Http\Livewire\Wiki\TambahArtikel;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

Route::get('/', Beranda::class)->name('beranda');
Route::get('/tanaman/{slug}', \App\Http\Livewire\Tanaman\Baca::class)->name('tanaman.baca');
Route::get('/tanaman/print/{slug}', [PrintTanamanController::class, 'print'])->name('tanaman.print');
Route::get('/produk/{slug}', Baca::class)->name('produk.baca');
Route::get('tanaman', HasilPencarian::class)->name('wiki.hasil-pencarian');
Route::get('profile/{id}', \App\Http\Livewire\Auth\Detail::class)->name('auth.detail')->middleware('auth');
Route::get('profile/{id}/update', \App\Http\Livewire\Auth\Sunting::class)->name('auth.sunting')->middleware('auth');
Route::get('daftar-kontributor', DaftarPengguna::class)->name('kontributor');
Route::get('halaman-utama', HalamanUtama::class)->name('halaman-utama');
Route::get('kirim-artikel', TambahArtikel::class)->name('wiki.tambah-artikel')->middleware('auth');
Route::get('revisi-artikel/{slug}', SuntingArtikel::class)->name('wiki.sunting-artikel')->middleware('auth');
Route::get('tentang', Tentang::class)->name('tentang');

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::group(['prefix' => 'Produk'], function () {
        Route::get('/', \App\Http\Livewire\Product\Semua::class)->name('product.semua');
        Route::get('tambah', \App\Http\Livewire\Product\Tambah::class)->name('product.tambah');
        Route::get('sunting/{id}', \App\Http\Livewire\Product\Sunting::class)->name('product.sunting');
        Route::get('detail/{slug}', \App\Http\Livewire\Product\Detail::class)->name('product.detail');
    });

    Route::group(['prefix' => 'tanaman'], function () {
        Route::get('/', \App\Http\Livewire\Tanaman\Semua::class)->name('tanaman.semua');
        Route::get('tambah', \App\Http\Livewire\Tanaman\Tambah::class)->name('tanaman.tambah');
        Route::get('sunting/{slug}', \App\Http\Livewire\Tanaman\Sunting::class)->name('tanaman.sunting');
        Route::get('detail/{slug}', \App\Http\Livewire\Tanaman\Detail::class)->name('tanaman.detail');
    });

    Route::group(['prefix' => 'pengguna'], function () {
        Route::get('semua', Semua::class)->name('pengguna.semua');
        Route::get('tambah', Tambah::class)->name('pengguna.tambah');
        Route::get('sunting/{id}', Sunting::class)->name('pengguna.sunting');
        Route::get('detail/{id}', Detail::class)->name('pengguna.detail');
    });

    Route::group(['prefix' => 'statistik'], function () {
        Route::get('semua', App\Http\Livewire\Statistik\Semua::class)->name('statistik.semua');
    });
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', Dashboard::class)->name('dashboard');

Route::group(['prefix' => 'auth'], function () {
    Route::get('register', Register::class)->name('auth.register');
});

/*route untuk reset password*/
Route::get('/forgot-password', function () {
    return view('auth.forgot-password');
})->middleware('guest')->name('password.request');

/*handle resetting password*/
Route::post('/forgot-password', function (Request $request) {
    $request->validate(['email' => 'required|email']);

    $status = Password::sendResetLink(
        $request->only('email')
    );

    return $status === Password::RESET_LINK_SENT
        ? back()->with(['status' => __($status)])
        : back()->withErrors(['email' => __($status)]);
})->middleware('guest')->name('password.email');

Route::get('keluar', function () {
    Auth::logout();
    return redirect()->route('login');
})->name('kelaur');
Route::get('register', function () {
    return redirect()->route('auth.register');
});
