<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TransactionController;

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

Route::get('/dashboard/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/dashboard/login', [LoginController::class, 'authenticate']);
Route::post('/dashboard/logout', [LogoutController::class, 'logout']);
Route::resource('/dashboard/book', BookController::class)->middleware('auth');
Route::resource('/', BookController::class)->middleware('auth');
Route::resource('/dashboard/category', CategoryController::class)->middleware('auth');
Route::resource('/dashboard/member', MemberController::class)->middleware('auth');
Route::resource('/dashboard/transaction', TransactionController::class)->middleware('auth');