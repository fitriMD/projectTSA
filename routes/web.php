<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LayananController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Auth::routes();

Route::get('/', [HomeController::class, 'index']);

Route::get('/about', [AboutController::class, 'index']);

Route::get('/berita', [BeritaController::class, 'index']);

Route::get('/contact', [ContactController::class, 'index']);

Route::get('/layanan', [LayananController::class, 'index']);