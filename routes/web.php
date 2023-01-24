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
/*
Route::get('/', function () {
    return view('Main/home');
});
*/
Route::get('/', function () {
    return view('Login/login');
})->middleware('auth');


Route::get('Main/home', [\App\Http\Controllers\homeController::class, 'index'])->name('home');
Route::get('/AboutUs', [\App\Http\Controllers\homeController::class, 'index'])->name('aboutUs');


Route::get('Login/register', [\App\Http\Controllers\registerController::class, 'index'])->name('register');
Route::post('Login/register', [\App\Http\Controllers\registerController::class, 'register'])->name('register.post');
Route::get('Login/login', [\App\Http\Controllers\loginController::class, 'index'])->name('login');
Route::post('Login/login', [\App\Http\Controllers\loginController::class, 'login'])->name('login.post');
Route::get('Login/logout', [\App\Http\Controllers\loginController::class, 'logout'])->name('logout');


Route::get('Main/user', [\App\Http\Controllers\userController::class, 'index'])->name('user');
Route::get('Tambah/TambahUser', [\App\Http\Controllers\userController::class, 'tampilTambahUser'])->name('user.tampilTambahUser');
Route::post('Tambah/TambahUser', [\App\Http\Controllers\userController::class, 'tambahUser'])->name('user.tambahUser');
Route::get('user/{id}/getEditUser', [\App\Http\Controllers\userController::class, 'getEditUser'])->name('user.getEditUser');
Route::delete('user/{id}/hapusUser', [\App\Http\Controllers\userController::class, 'hapusUser'])->name('user.hapusUser');


Route::get('Main/kegiatan', [\App\Http\Controllers\kegiatanController::class, 'index'])->name('kegiatan');
Route::get('Tambah/TambahKegiatan', [\App\Http\Controllers\kegiatanController::class, 'tampilTambahKegiatan'])->name('kegiatan.tampilTambahKegiatan');
Route::post('Tambah/TambahKegiatan', [\App\Http\Controllers\kegiatanController::class, 'tambahKegiatan'])->name('kegiatan.tambahKegiatan');
Route::get('kegiatan/{Id}/getEditKegiatan', [\App\Http\Controllers\kegiatanController::class, 'getEditKegiatan'])->name('kegiatan.getEditKegiatan');
Route::delete('kegiatan/{Id}/hapusKegiatan', [\App\Http\Controllers\kegiatanController::class, 'hapusKegiatan'])->name('kegiatan.hapusKegiatan');


Route::get('Main/kegiatanApproval', [\App\Http\Controllers\kegiatanApprovalController::class, 'index'])->name('kegiatanApproval');
Route::get('Tambah/TambahKegiatanApproval', [\App\Http\Controllers\kegiatanApprovalController::class, 'tampilTambahKegiatanApproval'])->name('kegiatanApproval.tampilTambahKegiatanApproval');
Route::post('Tambah/TambahKegiatanApproval', [\App\Http\Controllers\kegiatanApprovalController::class, 'tambahKegiatanApproval'])->name('kegiatanApproval.tambahKegiatanApproval');
Route::get('kegiatanApproval/{Id}/getEditKegiatanApproval', [\App\Http\Controllers\kegiatanApprovalController::class, 'getEditKegiatanApproval'])->name('kegiatanApproval.getEditKegiatanApproval');
Route::delete('kegiatanApproval/{Id}/hapusKegiatanApproval', [\App\Http\Controllers\kegiatanApprovalController::class, 'hapusKegiatanApproval'])->name('kegiatanApproval.hapusKegiatanApproval');


Route::get('Main/kegiatanDone', [\App\Http\Controllers\kegiatanDoneController::class, 'index'])->name('kegiatanDone');
Route::get('Tambah/TambahKegiatanDone', [\App\Http\Controllers\kegiatanDoneController::class, 'tampilTambahKegiatanDone'])->name('kegiatanDone.tampilTambahKegiatanDone');
Route::post('Tambah/TambahKegiatanDone', [\App\Http\Controllers\kegiatanDoneController::class, 'tambahKegiatanDone'])->name('kegiatanDone.tambahKegiatanDone');
Route::get('kegiatanDone/{Id}/getEditKegiatanDone', [\App\Http\Controllers\kegiatanDoneController::class, 'getEditKegiatanDone'])->name('kegiatanDone.getEditKegiatanDone');
Route::delete('kegiatanDone/{Id}/hapusKegiatanDone', [\App\Http\Controllers\kegiatanDoneController::class, 'hapusKegiatanDone'])->name('kegiatanDone.hapusKegiatanDone');
