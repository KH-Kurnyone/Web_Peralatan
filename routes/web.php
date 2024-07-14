<?php

use App\Http\Controllers\LoginController;
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

// Route::get('/', function () {
//     return view('auth.login');
// });
Route::get('/',[LoginController::class,'index']);
Route::post('/loginwebsite',[LoginController::class,'login']);
Route::post('/logoutwebsite',[LoginController::class,'logout']);

Route::get('/register', function () {
    return view('auth.register');
});

Route::get('/dashboard', function () {
    return view('page.dashboard.index');
});

Route::get('/mentoring_peralatan', function () {
    return view('page.mentoring_peralatan.index');
});

Route::get('/data_peralatan', function () {
    return view('page.data_peralatan.index');
});

Route::get('/data_ruangan', function () {
    return view('page.data_ruangan.index');
});


Route::get('/perawatan_peralatan', function () {
    return view('page.perawatan_peralatan.index');
});
Route::get('/perawatan_peralatan/add', function () {
    return view('page.perawatan_peralatan.add');
});
Route::get('/perawatan_peralatan/edit', function () {
    return view('page.perawatan_peralatan.edit');
});


Route::get('/pengajuan_peralatan', function () {
    return view('page.pengajuan_peralatan.index');
});
Route::get('/pengajuan_peralatan/add', function () {
    return view('page.pengajuan_peralatan.add');
});
Route::get('/pengajuan_peralatan/edit', function () {
    return view('page.pengajuan_peralatan.edit');
});


Route::get('/penjadwalan_perawatan', function () {
    return view('page.penjadwalan_perawatan.index');
});
Route::get('/penjadwalan_perawatan/add', function () {
    return view('page.penjadwalan_perawatan.add');
});
Route::get('/penjadwalan_perawatan/edit', function () {
    return view('page.penjadwalan_perawatan.edit');
});


Route::get('/penambahan_peralatan', function () {
    return view('page.penambahan_peralatan.index');
});
Route::get('/penambahan_peralatan/add', function () {
    return view('page.penambahan_peralatan.add');
});
Route::get('/penambahan_peralatan/edit', function () {
    return view('page.penambahan_peralatan.edit');
});

Route::get('/stok_peralatan', function () {
    return view('page.stok_peralatan.index');
});
Route::get('/stok_peralatan/add', function () {
    return view('page.stok_peralatan.add');
});
Route::get('/stok_peralatan/edit', function () {
    return view('page.stok_peralatan.edit');
});

Route::get('/laporan_perawatan_peralatan', function () {
    return view('page.laporan.perawatan_peralatan.index');
});

Route::get('/laporan_pengajuan_peralatan', function () {
    return view('page.laporan.pengajuan_peralatan.index');
});

Route::get('/laporan_penambahan_peralatan', function () {
    return view('page.laporan.penambahan_peralatan.index');
});