<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StrudentController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\TransaksiController;
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
    return view('layouts.app');
});

Route::get('add',[StrudentController::class,'index']);
Route::post('save',[StrudentController::class,'save'])->name('student.save'); 
Route::get('karyawan',[KaryawanController::class,'index']);
Route::post('karyawan/save',[KaryawanController::class,'store'])->name('karyawan-save');
Route::resource('transaksi',TransaksiController::class);