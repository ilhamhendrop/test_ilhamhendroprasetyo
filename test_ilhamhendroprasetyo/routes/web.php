<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ObatController;
use App\Http\Controllers\UserController;
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

Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');
Route::get('/login', [LoginController::class, 'index'])->name('login.index');
Route::post('/login/post', [LoginController::class, 'store_login'])->name('login.store');

Route::get('/dashboad/user', [UserController::class, 'index'])->name('user.index');
   Route::post('/dashboard/user/store', [UserController::class, 'store_user'])->name('user.create');
   Route::get('/dashboard/user/{user}/edit', [UserController::class, 'edit_user'])->name('user.edit');
   Route::patch('/dashboard/user/{user}edit', [UserController::class, 'update_user'])->name('user.update');
   Route::get('/dashboard/user/{user}/edit/password', [UserController::class, 'edit_user_password'])->name('user.edit.password');
   Route::patch('/dashboard/user/{user}/edit/password', [UserController::class, 'update_user_password'])->name('user.update.password');
   Route::delete('/dashboard/user/{user}/delete', [UserController::class, 'delete_user'])->name('user.delete');

   Route::get('/dashboard/obat', [ObatController::class, 'index'])->name('obat.index');
   Route::post('/dashboard/obat/create', [ObatController::class, 'store_obat'])->name('obat.create');
   Route::get('/dashboard/obat/{obat}/edit', [ObatController::class, 'edit_obat'])->name('obat.edit');
   Route::patch('/dashboard/obat/{obat}', [ObatController::class, 'update_obat'])->name('obat.update');
   Route::delete('/dashboard/obat/{obat}/delete', [ObatController::class, 'delete_obat'])->name('obat.delete');
