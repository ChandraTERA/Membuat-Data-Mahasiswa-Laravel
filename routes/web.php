<?php

use App\Http\Controllers\UploadFotoController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
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
    return view('/public/AdminLTE/index.html');
});

Route::get('tampilin', [UploadFotoController::class, 'index'])->name('tampilin.index');

Route::get('layouts/create', [UploadFotoController::class, 'create'])->name('upload.create'); 
Route::post('store', [UploadFotoController::class, 'store'])->name('upload.store');
Route::get('layouts/edit/{id}', [UploadFotoController::class, 'edit'])->name('upload.edit');
// Route::get('edit/{id}', [UploadFotoController::class, 'edit'])->name('upload.edit');
Route::post('layouts/update/{id}', [UploadFotoController::class, 'update'])->name('upload.update');
Route::delete('hapus/{id}', [UploadFotoController::class, 'destroy'])->name('hapus.destroy');
Route::get('show/{id}', [UploadFotoController::class, 'show'])->name('upload.show');

// Authentication Routes Login...
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login-success', [LoginController::class, 'loginPost'])->name('login-success');
// $this->post('login', 'Auth\LoginController@login');
// $this->post('logout', 'Auth\LoginController@logout')->name('logout');


Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

// Registration Routes...
// Routeget('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
// Route::get('registered', [RegisterController::class, 'showRegisterForm'])->name('registered');
// Route::post('registerForm', [RegisterController::class, 'registerInput'])->name('registerForm');

Route::get('register', [RegisterController::class, 'register'])->name('register');
Route::post('register-success', [RegisterController::class, 'registerPost'])->name('register-success');


// $this->post('register', 'Auth\RegisterController@register');

// // Password Reset Routes...
// $this->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm');
// $this->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
// $this->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm');
// $this->post('password/reset', 'Auth\ResetPasswordController@reset');





// Route::match(['get', 'post'], 'simpan', [UploadFotoController::class, 'store'])->name('simpan.store');

// Dashboard

// Route::get('user', 'UserController@index')->name('user');

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
