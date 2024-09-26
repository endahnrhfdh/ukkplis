<?php

use App\Http\Controllers\SiswaController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of t-hem will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');

//Route::get('biodata', [SiswaController::class, 'biodataku']);

Route::get('/login',[LoginController::class,'ShowLoginForm'])->name('sesi.login');
Route::get('/sesi',[LoginController::class,'login'])->name('login.submit');
Route::post('/logout', [LoginController::class, 'ShowLoginForm'])->name('logout');


Route::get('/siswa/input',[SiswaController::class,'input'])->name('siswa.input');
Route::post('/siswa/klik', [SiswaController::class, 'klik'])->name('siswa.klik');
Route::get('/siswa/submit', [SiswaController::class, 'submit'])->name('siswa.submit');
Route::post('/siswa/store', [SiswaController::class, 'store'])->name('siswa.store');
Route::get('/siswa/create', [SiswaController::class, 'create'])->name('siswa.create');
Route::get('/siswa/{siswa}/edit', [SiswaController::class, 'edit'])->name('siswa.edit');
Route::post('/siswa/{siswa}', [SiswaController::class, 'update'])->name('siswa.update');
Route::delete('/siswa/destroy/{id}',[SiswaController::class,'destroy'])->name('siswa.destroy');

Route::get('siswa',[SiswaController::class, 'index'])->name('siswa');