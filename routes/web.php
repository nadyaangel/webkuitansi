<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PembelianController;
use App\Http\Controllers\KuitansiConntroller;
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
Route::post('/saveInvoice', [PembelianController::class, 'processForm']);
Route::get('/pembelian/{id}/detail', [PembelianController::class, 'showDetail'])->name('detailPembelian');
Route::get('/pembelian/{id}/print', [PembelianController::class, 'printInvoice'])->name('printInvoice');
Route::get('/kuitansi/form', [KuitansiConntroller::class, 'showForm'])->name('kuitansiform');
Route::post('/kuitansi/generate', [KuitansiConntroller::class, 'generateKuitansi'])->name('kuitansi.generate');
Route::get('/kuitansi/{id}', [KuitansiConntroller::class, 'showDetail'])->name('kuitansi.detail');
Route::get('/kuitansi/{id}/print', [KuitansiConntroller::class, 'printKuitansi'])->name('printKuitansi');