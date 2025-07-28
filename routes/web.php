<?php

use App\Http\Controllers\UploadFotoController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('tampilin', [UploadFotoController::class, 'index'])->name('tampilin.index');

// Route::get('layouts/create', [UploadFotoController::class, 'create'])->name('layouts.create'); 
// Route::post('store', [UploadFotoController::class, 'store'])->name('upload.store');
// Route::get('layouts/edit/{id}', [UploadFotoController::class, 'edit'])->name('upload.edit');
// // Route::get('edit/{id}', [UploadFotoController::class, 'edit'])->name('upload.edit');
// Route::post('layouts/update/{id}', [UploadFotoController::class, 'update'])->name('upload.update');
// Route::delete('hapus/{id}', [UploadFotoController::class, 'destroy'])->name('hapus.destroy');
// Route::get('show/{id}', [UploadFotoController::class, 'show'])->name('upload.show');


Route::get('layouts/create', [UploadFotoController::class, 'create'])->name('layouts.create'); 
Route::post('store', [UploadFotoController::class, 'store'])->name('update.store');
Route::get('layouts/edit/{id}', [UploadFotoController::class, 'edit'])->name('update.edit');
Route::post('layouts/update/{id}', [UploadFotoController::class, 'update'])->name('upload.update');
Route::delete('hapus/{id}', [UploadFotoController::class, 'destroy'])->name('hapus.destroy');
Route::get('show/{id}', [UploadFotoController::class, 'show'])->name('upload.show');


// Route::match(['get', 'post'], 'simpan', [UploadFotoController::class, 'store'])->name('simpan.store');



// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// require __DIR__.'/auth.php';


// Route::get('/index', []'UserController@index')->name('user');
