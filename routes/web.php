<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\BilikController;
use App\Http\Controllers\CutiController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HartaController;
use App\Http\Controllers\IklanJawatanController;
use App\Http\Controllers\KakitanganController;
use App\Http\Controllers\KenderaanController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\LatihanController;
use App\Http\Controllers\MesyuaratController;
use App\Http\Controllers\NotifikasiController;
use App\Http\Controllers\PerkhidmatanController;
use App\Http\Controllers\PermohonanController;
use App\Http\Controllers\TemudugaController;
use App\Http\Controllers\UserController;
use App\Models\permohonan;
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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

Route::resource('/dashboard', DashboardController::class);
require __DIR__.'/auth.php';

//user
Route::resource('/user',UserController::class);
Route::resource('/RegisteredUser',RegisteredUserController::class);
Route::get('/kehadiran', [UserController::class, 'kehadiran']);
Route::get('/tatatertib', [UserController::class, 'tatatertib']);

// Route::get(/RegisteredUser/index',RegisteredUserController::create);

//temuduga
Route::resource('/temuduga',TemudugaController::class);
// Route::get('/temuduga', 'TemudugaController@index1');

//iklan jawatan
Route::resource('/iklanJawatan',IklanJawatanController::class);

//permohonan
Route::resource('/permohonan',PermohonanController::class);

Route::get('/permohonan/lulus/{id}', [PermohonanController::class, 'lulus'])->name('permohonan.lulus');
Route::get('/permohonan/ditolak/{id}', [PermohonanController::class, 'ditolak'])->name('permohonan.ditolak');

//laporan
Route::resource('/laporan',LaporanController::class);

//kakitangan
Route::resource('/kakitangan',KakitanganController::class);

//perkhidmatan
Route::resource('/perkhidmatan',PerkhidmatanController::class);

//notifikasi
Route::resource('/notifikasi',NotifikasiController::class);

//harta
Route::resource('/harta',HartaController::class);

//cuti
Route::resource('/cuti',CutiController::class);
Route::get('/cuti/lulus/{id}', [CutiController::class, 'lulus'])->name('cuti.lulus');
Route::get('/cuti/ditolak/{id}', [CutiController::class, 'ditolak'])->name('cuti.ditolak');

//EKenderaan
Route::resource('/kenderaan',KenderaanController::class);
Route::get('/kenderaan/lulus/{id}', [KenderaanController::class, 'lulus'])->name('kenderaan.lulus');
Route::get('/kenderaan/ditolak/{id}', [KenderaanController::class, 'ditolak'])->name('kenderaan.ditolak');

//EBIlik
Route::resource('/bilik',BilikController::class);
Route::get('/bilik/lulus/{id}', [BilikController::class, 'lulus'])->name('bilik.lulus');
Route::get('/bilik/ditolak/{id}', [BilikController::class, 'ditolak'])->name('bilik.ditolak');

//mesyuarat
Route::resource('/mesyuarat',MesyuaratController::class);

//latihan
Route::resource('/latihan',LatihanController::class);

