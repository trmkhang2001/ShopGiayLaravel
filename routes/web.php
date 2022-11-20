<?php

use App\Http\Controllers\Admin\MainController;
use App\Http\Controllers\Admin\Users\LoginController;
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

Route::get('admin/users/login',[LoginController::class, 'index'])->name('login');
Route::post('admin/users/login/store',[LoginController::class, 'store']);
Route::middleware(['auth'])->group(function () {
    Route::get('admin/main', [MainController::class, 'index'])->name('admin');
});