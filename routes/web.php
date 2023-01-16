<?php

use Illuminate\Support\Facades\App;
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
    return view('Main/home');
});

Route::get('Main/user', [\App\Http\Controllers\userController::class, 'index'])->name('user');
Route::get('Tambah/TambahUser', [\App\Http\Controllers\userController::class, 'tampilTambahUser'])->name('user.tampilTambahUser');
Route::post('Tambah/tambahUser', [\App\Http\Controllers\userController::class, 'tambahUser'])->name('user.tambahUser');
Route::get('Tambah/{Id}/getEditUser', [\App\Http\Controllers\userController::class, 'getEditUser'])->name('user.getEditUser');
Route::get('Tambah/{Id}/updateUser', [\App\Http\Controllers\userController::class, 'updateUser'])->name('user.updateUser');
Route::delete('Tambah/{Id}/hapusUser', [\App\Http\Controllers\userController::class, 'hapusUser'])->name('user.hapusUser');


Route::get('Main/kegiatan', [\App\Http\Controllers\kegiatanController::class, 'index'])->name('kegiatan');
Route::get('Tambah/TambahKegiatan', [\App\Http\Controllers\kegiatanApprovalController::class, 'tampilTambahKegiatan'])->name('kegiatan.tampilTambahKegiatan');
Route::post('Tambah/tambahKegiatan', [\App\Http\Controllers\kegiatanApprovalController::class, 'tambahKegiatan'])->name('kegiatan.tambahKegiatan');
Route::get('Tambah/{Id}/getEditKegiatan', [\App\Http\Controllers\kegiatanApprovalController::class, 'getEditKegiatan'])->name('kegiatan.getEditKegiatan');
Route::get('Tambah/{Id}/updateKegiatan', [\App\Http\Controllers\kegiatanApprovalController::class, 'updateKegiatan'])->name('kegiatan.updateKegiatan');
Route::delete('Tambah/{Id}/hapusKegiatan', [\App\Http\Controllers\kegiatanApprovalController::class, 'hapusKegiatan'])->name('kegiatan.hapusKegiatan');


Route::get('Main/kegiatanApproval', [\App\Http\Controllers\kegiatanApprovalController::class, 'index'])->name('kegiatanApproval');
Route::get('Tambah/TambahKegiatanApproval', [\App\Http\Controllers\kegiatanDoneController::class, 'tampilTambahKegiatanApproval'])->name('kegiatanApproval.tampilTambahKegiatanApproval');
Route::post('Tambah/tambahKegiatanApproval', [\App\Http\Controllers\kegiatanDoneController::class, 'tambahKegiatanApproval'])->name('kegiatanApproval.tambahKegiatanApproval');
Route::get('Tambah/{Id}/getEditKegiatanApproval', [\App\Http\Controllers\kegiatanDoneController::class, 'getEditKegiatanApproval'])->name('kegiatanApproval.getEditKegiatanApproval');
Route::get('Tambah/{Id}/updateKegiatanApproval', [\App\Http\Controllers\kegiatanDoneController::class, 'updateKegiatanApproval'])->name('kegiatanApproval.updateKegiatanApproval');
Route::delete('Tambah/{Id}/hapusKegiatanApproval', [\App\Http\Controllers\kegiatanDoneController::class, 'hapusKegiatanApproval'])->name('kegiatanApproval.hapusKegiatanApproval');


Route::get('Main/kegiatanDone', [\App\Http\Controllers\kegiatanDoneController::class, 'index'])->name('kegiatanDone');
Route::get('Tambah/TambahKegiatanDone', [\App\Http\Controllers\kegiatanDoneController::class, 'tampilTambahKegiatanDone'])->name('kegiatanDone.tampilTambahKegiatanDone');
Route::post('Tambah/tambahKegiatanDone', [\App\Http\Controllers\kegiatanDoneController::class, 'tambahKegiatanDone'])->name('kegiatanApproval.tambahKegiatanDone');
Route::get('Tambah/{Id}/getEditKegiatanDone', [\App\Http\Controllers\kegiatanDoneController::class, 'getEditKegiatanDone'])->name('kegiatanApproval.getEditKegiatanDone');
Route::get('Tambah/{Id}/updateKegiatanDone', [\App\Http\Controllers\kegiatanDoneController::class, 'updateKegiatanDone'])->name('kegiatanApproval.updateKegiatanDone');
Route::delete('Tambah/{Id}/hapusKegiatanDone', [\App\Http\Controllers\kegiatanDoneController::class, 'hapusKegiatanDone'])->name('kegiatanApproval.hapusKegiatanDone');
