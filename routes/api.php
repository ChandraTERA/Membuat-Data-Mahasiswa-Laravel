<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('tampilin', [UploadFotoController::class, 'index'])->name('tampilin.index');

Route::get('layouts/create', [UploadFotoController::class, 'create'])->name('upload.create'); 
Route::post('store', [UploadFotoController::class, 'store'])->name('upload.store');
Route::get('layouts/edit/{id}', [UploadFotoController::class, 'edit'])->name('upload.edit');
// Route::get('edit/{id}', [UploadFotoController::class, 'edit'])->name('upload.edit');
Route::post('layouts/update/{id}', [UploadFotoController::class, 'update'])->name('upload.update');
Route::delete('hapus/{id}', [UploadFotoController::class, 'destroy'])->name('hapus.destroy');
Route::get('show/{id}', [UploadFotoController::class, 'show'])->name('upload.show');