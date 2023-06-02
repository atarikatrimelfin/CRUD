<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MhsController;

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


Route::get('add', [MhsController::class, 'create'])->name('mahasiswa.create');
Route::post('store', [MhsController::class, 'store'])->name('mahasiswa.store');
Route::get('/', [MhsController::class, 'index'])->name('mahasiswa.index');
Route::get('edit/{id}', [MhsController::class, 'edit'])->name('mahasiswa.edit');
Route::post('update/{id}', [MhsController::class,'update'])->name('mahasiswa.update');
Route::post('delete/{id}', [MhsController::class,'delete'])->name('mahasiswa.delete');

