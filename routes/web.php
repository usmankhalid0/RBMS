<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\web\UserController;
use App\Http\Controllers\web\ProductController;
use App\Http\Controllers\web\RoleController;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('user', UserController::class);
Route::resource('products', ProductController::class);
Route::resource('role', RoleController::class);


