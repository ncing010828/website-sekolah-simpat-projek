<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegistrasiSiswaController;
use App\Http\Controllers\Auth\LoginController;

Route::get('/', function () {
    return view('welcome');
});

// LOGIN
Route::get('/login', [LoginController::class, 'showLogin'])
    ->name('login');

Route::post('/login', [LoginController::class, 'login'])
    ->name('login.proses');

Route::post('/logout', [LoginController::class, 'logout'])
    ->name('logout');

// REGISTRASI SISWA
Route::get('/registrasi-siswa', function () {
    return view('auth.registrasi-siswa');
})->name('registrasi.siswa');

Route::post('/cek-nisn', [RegistrasiSiswaController::class, 'cekNisn'])
    ->name('registrasi.siswa.cek');

Route::post('/registrasi-siswa', [RegistrasiSiswaController::class, 'store'])
    ->name('registrasi.siswa.store');

// DASHBOARD ADMIN
Route::get('/admin/dashboard', function () {
    return 'Dashboard Admin SIMPATI';
})->name('admin.dashboard');

// DASHBOARD GURU
Route::get('/guru/dashboard', function () {
    return 'Dashboard Guru SIMPATI';
})->name('guru.dashboard');

// DASHBOARD SISWA
Route::get('/siswa/dashboard', function () {
    return 'Dashboard Siswa SIMPATI';
})->name('siswa.dashboard');