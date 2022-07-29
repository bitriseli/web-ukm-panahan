<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StrukturController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DaftarController;
use Illuminate\Support\Facades\Route;

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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('beranda');
});

Route::get('/struktur', function () {
    return view('struktur');
});

Route::get('/sejarah', function () {
    return view('sejarah');
});

Route::get('/visimisi', function () {
    return view('visimisi');
});

Route::get('/pengurus', function () {
    return view('pengurus');
});

Route::get('/alumni', function () {
    return view('alumni');
});

Route::get('/agenda', function () {
    return view('agenda');
});

Route::get('/dashboardpeminjaman', function () {
    return view('peminjaman/index2');
});

Route::get('/indexpeminjaman', function () {
    return view('peminjaman/peminjaman/index');
});

Route::get('/indexdaftarbarang', function () {
    return view('peminjaman/daftarbarang/index');
});

Route::get('/daftarbarangcreate', function () {
    return view('peminjaman/daftarbarang/create');
});

Route::get('/peminjamancreate', function () {
    return view('peminjaman/peminjaman/create');
});



Route::get('/pendaftaran', [DaftarController::class, 'guest']);
Route::post('/pendaftaran', [DaftarController::class, 'store']);
Route::resource('/dashboard/pendaftaran', DaftarController::class);

Route::post('/dashboard/manajemen-user/create', [UserController::class, 'store']);
Route::resource('/dashboard/manajemen-user', UserController::class);

Route::get('/info-daftar', function () {
    return view('info-daftar');
});

Route::get('/login', function () {
    return view('login/index');
});

Route::get('/dashboard', [DashboardController::class, 'index']);

Route::get('/dashboard/struktur', [StrukturController::class, 'index']);
Route::get('/dashboard/struktur/create', [StrukturController::class, 'store']);



