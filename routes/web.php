<?php

use App\Http\Controllers\AdminController;
use App\Models\Transportasi;
use App\Models\DataPemesanan;
use App\Models\DataPenumpang;
use App\Models\TypeTransportasi;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RutesController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\TransportasiController;
use App\Http\Controllers\DataPemesananController;
use App\Http\Controllers\DataPenumpangController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\SesiController;
use App\Http\Controllers\TypeTransportasiController;
use App\Http\Controllers\ValidasiController;
use App\Models\Rutes;

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

Route::get('/admin', function () {
    return view('layouts/main');
});

Route::get('/pemesanan', function () {
    return view('pengguna/pemesanan',['dtrute'=>Rutes::all(), 'dtpenumpang'=>DataPenumpang::all()]);
});

Route::get('/datapetugas', function () {
    return view('admin/datapetugas');
});

Route::get('/', function () {
    return view('pengguna/main');
});

Route::get('/transportasi', function () {
    return view('admin/transportasi', [
    ]);
});

Route::get('/laporan', function () {
    return view('admin/laporan', [
        "title" => "Laporan"
    ]);
});

// Route::get('/verifikasi', function () {
//     return view('admin/verifikasi', [
//         "title" => "Verifikasi dan Validasi"
//     ]);
// });
// 
Route::resource('/datapetugas', PetugasController::class);
Route::resource('/transportasi', TransportasiController::class);
Route::resource('/rutes', RutesController::class);
Route::resource('/typetransportasi', TypeTransportasiController::class);
Route::resource('/datapenumpang', DataPenumpangController::class);
Route::resource('/datapemesanan', DataPemesananController::class);
Route::resource('/validasi', ValidasiController::class);
Route::resource('/cetakdatapemesanan', ValidasiController::class,);
// Route::get('/validasi/view/pdf', [ValidasiController::class, 'view_pdf']);

// Report PDF
//Route::get('donwloadpdf', [ValidasiController::class, 'donwloadpdf']);
Route::get('cetak', [LaporanController::class,'bentot']);

//Login
// Route::get('/', [SesiController::class, 'index']);
// Route::post('/', [SesiController::class, 'login']);     
Route::get('/admin', [AdminController::class, 'index']);
Route::get('/admin/admin', [AdminController::class, 'admin']);
Route::get('/admin/penumpang', [AdminController::class, 'penumpang']);

//logout
Route::get('/logout', [SesiController::class, 'logout']);
Route::get('/admin/logout', [SesiController::class, 'logout']);
