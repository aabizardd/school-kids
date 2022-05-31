<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PendaftaranController;
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

Route::get('/', [HomeController::class, 'index']);
Route::controller(PendaftaranController::class)->group(function () {
    Route::get('/pendaftaran', 'index');
    Route::post('/register', 'store');
});

Route::controller(AdminController::class)->group(function () {
    Route::get('/admin', 'index');
    Route::get('/admin/export-excel/{kelas}', 'export_excel');
    Route::get('/admin/detail-murid/{id}', 'show');
    Route::get('/admin/edit-murid/{id}', 'edit');
    Route::get('/admin/download/{filename}', 'downloadFile');
    Route::post('/admin/update-murid/{id}', 'update');
    Route::get('/admin/delete-murid/{id}', 'destroy');
});
Route::controller(AuthController::class)->group(function () {
    Route::get('/admin/login', 'index')->name('login');
    Route::post('/admin/login', 'actionLogin');
    Route::get('/admin/logout', 'actionLogout');
});
