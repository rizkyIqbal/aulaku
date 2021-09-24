<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TambahController;
use App\Http\Controllers\PemesananController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\EditProfileController;
use App\Http\Controllers\PencarianController;
use App\Http\Controllers\HistoryController;
use GuzzleHttp\Promise\Create;

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
//     return view('home/home');
// });
Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('/cari', [App\Http\Controllers\HomeController::class, 'handleIndex']);
Route::get('/pencarian', [App\Http\Controllers\PencarianController::class, 'index']);
Route::get('/history', [App\Http\Controllers\HistoryController::class, 'index']);
Route::resource('/detail', DetailController::class);
Route::resource('/profile', EditProfileController::class);
// Route::get('/cari', 'HomeController@handleIndex');
Route::resource('/pemesanan', PemesananController::class);
// Route::get('/pemesanan', [App\Http\Controllers\PemesananController::class, 'index']);
Route::get('/login', function () {
    return view('auth/login');
});
// Route::get('/tambah', function () {
//     return view('home/tambah');
// });

// Route::post('/tambahpost', [App\Http\Controllers\TambahController::class, 'index'])->name('tambahpost');
// Route::get('/tambahpost', [TambahController::class, 'create'])->name('tambahpost');;
// Route::post('/tambahpost', 'TambahController@store')->name('tambahpost');;
Route::resource('/tambah', TambahController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
