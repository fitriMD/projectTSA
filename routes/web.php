<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\AdminController;

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

Route::get('/home', [HomeController::class, 'index']);
Route::get('/about', [AboutController::class, 'index']);
Route::get('/berita', [BeritaController::class, 'index']);
Route::get('/contact', [ContactController::class, 'index']);


// halaman admin
Route::get('/admin', [AdminController::class, 'home']);
// ->middleware('auth')
Route::get('/beritaAdmin', [AdminController::class, 'index'])->name('admin.berita.index')->middleware('auth');
Route::get('/berita-create','App\Http\Controllers\AdminController@create')->name('berita.create')->middleware('auth');
Route::post('/berita-create','App\Http\Controllers\AdminController@store')->name('berita.create')->middleware('auth');
Route::get('/beritaShow-{id}','App\Http\Controllers\AdminController@show')->name('berita.show')->middleware('auth');
Route::get('/beritaEdit-{id}','App\Http\Controllers\AdminController@edit')->name('berita.edit')->middleware('auth');
Route::post('beritaEdit-{id}','App\Http\Controllers\AdminController@update')->name('berita.edit')->middleware('auth');
Route::get('/beritaDelete-{id}','App\Http\Controllers\AdminController@destroy')->name('berita.delete')->middleware('auth');

// Route::get('/layanan', [LayananController::class, 'index']);
Route::get('/layanankk', [LayananController::class, 'kk']);
Route::get('/layananktp', [LayananController::class, 'ktp']);
Auth::routes();

Route::get('/layananAdmin', [AdminController::class, 'indexLayanan'])->name('admin.layanan.index')->middleware('auth');
Route::get('/layanan-create','App\Http\Controllers\AdminController@createLayanan')->name('layanan.create')->middleware('auth');
Route::post('/layanan-create','App\Http\Controllers\AdminController@storeLayanan')->name('layanan.create')->middleware('auth');
Route::get('/layananShow-{id}','App\Http\Controllers\AdminController@showLayanan')->name('layanan.show')->middleware('auth');
Route::get('/layananEdit-{id}','App\Http\Controllers\AdminController@editLayanan')->name('layanan.edit')->middleware('auth');
Route::post('layananEdit-{id}','App\Http\Controllers\AdminController@updateLayanan')->name('layanan.edit')->middleware('auth');
Route::get('/layananDelete-{id}','App\Http\Controllers\AdminController@destroyLayanan')->name('layanan.delete')->middleware('auth');


// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
