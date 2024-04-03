<?php

use App\Http\Controllers\admin\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\ProfileController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// login //
Route::get('/', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'login'])->name('login');

Route::group(['middleware' => ['admin']], function () {
    // logout 
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
    Route::post('/updateProfile', [ProfileController::class, 'updateProfile'])->name('updateProfile');
    Route::post('/updateImage', [ProfileController::class, 'updateImage'])->name('updateImage');
    Route::post('/updatePassword', [ProfileController::class, 'updatePassword'])->name('updatePassword');

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});
