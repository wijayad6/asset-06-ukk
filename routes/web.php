<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\RedirectController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('login');
});

Route::group(['middleware' => 'guest'], function () {
    Route::get('/', [AuthController::class, 'login'])->name('login');
    Route::post('/', [AuthController::class, 'loginAction']);
});

Route::group(['middleware' => ['auth', 'checkrole:1,2,3']], function () {
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('/redirect', [RedirectController::class, 'cek']);
});

Route::group(['middleware' => ['auth', 'checkrole:1']], function () {
    Route::get('dashboard_admin', [AdminController::class, 'index'])->name('dashboard_admin');
});

Route::group(['middleware' => ['auth', 'checkrole:2']], function () {
    Route::get('dashboard_petugas', [PetugasController::class, 'index'])->name('dashboard_petugas');
});

Route::group(['middleware' => ['auth', 'checkrole:3']], function () {
    Route::get('dashboard_user', [UserController::class, 'index'])->name('dashboard_user');
});

Route::controller(AuthController::class)->group(function () {
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerSave')->name('register.save');

    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAction')->name('login.action');

    Route::get('logout', 'logout')->middleware('auth')->name('logout');
});

Route::controller(BukuController::class)->prefix('buku')->group(function () {
    Route::get('', 'index')->name('buku');
    Route::get('create', 'create')->name('buku.create');
    Route::post('store', 'store')->name('buku.store');
    Route::get('show/{buku_id}', 'show')->name('buku.show');
    Route::get('edit/{buku_id}', 'edit')->name('buku.edit');
    Route::put('edit/{buku_id}', 'update')->name('buku.update');
    Route::get('destroy/{buku_id}', 'destroy')->name('buku.destroy');
});
Route::controller(PeminjamanController::class)->prefix('pinjam')->group(function () {
    Route::get('', 'index')->name('pinjam');
    Route::get('pinjam_pdf', 'cetak_pdf')->name('pinjam.cetak_pdf');
    Route::get('create', 'create')->name('pinjam.create');
    Route::post('store', 'store')->name('pinjam.store');
    Route::get('show/{peminjaman_id}', 'show')->name('pinjam.show');
    Route::get('edit/{peminjaman_id}', 'edit')->name('pinjam.edit');
    Route::put('edit/{peminjaman_id}', 'update')->name('pinjam.update');
    Route::get('destroy/{peminjaman_id}', 'destroy')->name('pinjam.destroy');
});
