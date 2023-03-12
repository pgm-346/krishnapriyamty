<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\AuthController;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\DepositeController;

use App\Http\Controllers\WithdrawController;

use App\Http\Controllers\TransferController;

use App\Http\Controllers\StatementController;

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


Route::get('/', [AuthController::class, 'index'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post'); 
Route::get('registration', [AuthController::class, 'registration'])->name('register');
Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post'); 
Route::get('dashboard', [AuthController::class, 'dashboard']); 
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::resource('home', HomeController::class); 

Route::resource('deposite', DepositeController::class);

Route::resource('withdarw', WithdrawController::class);

Route::resource('transfer', TransferController::class);

Route::resource('statement', StatementController::class);
