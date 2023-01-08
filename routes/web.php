<?php

use Illuminate\Support\Facades\Route;
use App\Models\Siswa;
use App\Models\Kelas;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\LoginController;   
use App\Http\Controllers\RegisterController;

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



Route::group(["prefix" => "/siswa"], function () {
    Route::get('/all', [SiswaController::class, 'index']);
    Route::get('/detail/{siswa}', [SiswaController::class, 'show']);
    Route::get('/create', [SiswaController::class, 'create']); 
    Route::post('/add', [SiswaController::class, 'store']);
    Route::delete('/delete/{siswa}', [SiswaController::class, 'destroy']);
    Route::get('/edit/{siswa}', [SiswaController::class, 'edit']);
    Route::post('/update/{siswa}', [SiswaController::class, 'update']);
});



Route::group(["prefix" => "/kelas"], function () {
    Route::get('/all', [KelasController::class, 'index']);
    Route::get('/detail/{kelas}', [KelasController::class, 'show']);
});

Route::group(["prefix" => "/login"], function () {
    Route::get('/all', [LoginController::class, 'index']);
    Route::get('/detail/{logins}', [LoginController::class, 'show']);
});

Route::group(["prefix" => "/register"], function () {
    Route::get('/all', [RegisterController::class, 'index']);
    Route::get('/create', [RegisterController::class, 'create']);
    Route::post('/add', [RegisterController::class, 'store']);
    Route::get('/detail/{register}', [RegisterController::class, 'show']);
});


