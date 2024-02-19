<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
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
    return view('/');
});

Route::group(['middleware' => 'guest'], function () {
    Route::get('/', [AuthController::class, 'login'])->name('login');
    Route::post('/', [AuthController::class, 'loginAction']);
});

Route::group(['middleware' => ['auth', 'checkrole:1,2,3']], function () {
    Route::get('/logout', [AuthController::class, 'logout']);
    Route::post('/redirect', [RedirectController::class, 'cek']);
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
