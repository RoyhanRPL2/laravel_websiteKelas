<?php

use Illuminate\Support\Facades\Route;
use App\Models\Siswa;
use App\Models\Kelas;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\LoginController;   
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardKelasController;
use App\Http\Controllers\DashboardSiswaController;
use GuzzleHttp\Middleware;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::get('/home', function () {
    return "Hello World";
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/home', function () {
 return view('home');
});

Route::get('/back', function () {
    return view('siswa.all');
});


Route::group(["prefix" => "/siswa"], function () {
    Route::get('/all', [SiswaController::class, 'index'])->name('dashboard.siswa');
    Route::get('/detail/{siswa}', [SiswaController::class, 'show'])->middleware('guest');
    // Route::get('/create', [SiswaController::class, 'create']); 
    // Route::post('/add', [SiswaController::class, 'store']);
    // Route::delete('/delete/{siswa}', [SiswaController::class, 'destroy']);
    // Route::get('/edit/{siswa}', [SiswaController::class, 'edit']);
    // Route::post('/update/{siswa}', [SiswaController::class, 'update']);
});



Route::group(["prefix" => "/kelas"], function () {
    Route::get('/all', [KelasController::class, 'index']);
    Route::get('/detail/{kelas}', [KelasController::class, 'show']);
});




Route::group(["prefix" => "dashboard"], function () {
    Route::get('/index', [DashboardController::class, 'index'])->middleware('auth');
    Route::get('/siswa', [DashboardSiswaController::class, 'index'])->middleware('auth');
    Route::get('/detail/{siswa}', [DashboardSiswaController::class, 'show'])->middleware('auth');
    Route::get('/create', [DashboardSiswaController::class, 'create'])->middleware('auth');
    Route::post('/add', [DashboardSiswaController::class, 'store'])->middleware('auth');
    Route::delete('/delete/{siswa}', [DashboardSiswaController::class, 'destroy'])->middleware('auth');
    Route::get('/edit/{siswa}', [DashboardSiswaController::class, 'edit'])->middleware('auth');
    Route::post('/update/{siswa}', [DashboardSiswaController::class, 'update'])->middleware('auth');
    Route::get('/kelas', [DashboardKelasController::class, 'index'])->middleware('auth');
    Route::get('/kelas/detail/{kelas}', [DashboardKelasController::class, 'show'])->middleware('auth');
});

Route::group(["prefix" => "dashboard"], function () {
    Route::get('/home', function() {
        return view('home');
    })->middleware('auth');
});

Route::group(["prefix" => "register"], function () {
    Route::get('/all', [RegisterController::class, 'index']);
    Route::post('/add', [RegisterController::class, 'store']);
});

Route::group(["prefix" => "login"], function () {
    Route::get('/all', [LoginController::class, 'index'])->name('login')->middleware('guest');
    Route::post('/auth', [LoginController::class, 'auth']);
    Route::post('/logout', [LoginController::class, 'logout']);
});



