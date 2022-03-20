<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Models\User;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;

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

Route::get('/', [IndexController::class, 'login']);
Route::post('/', [IndexController::class, 'authenticate']);
Route::get('/login', [IndexController::class, 'login']);
Route::get('/logout', [IndexController::class, 'logout']);
Route::get('/dashboard', [IndexController::class, 'dashboard']);
Route::get('/user', [IndexController::class, 'user']);
Route::get('/candidate', [IndexController::class, 'candidate']);
Route::get('/vote', [IndexController::class, 'vote']);
