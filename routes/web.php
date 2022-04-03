<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VoteController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\CandidateController;
use App\Http\Controllers\DashboardController;

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

Route::middleware('guest')->group(function () {
  Route::get('/', [IndexController::class, 'login'])->name('login');
  Route::post('/', [IndexController::class, 'authenticate']);
});

Route::middleware('auth')->group(function () {
  Route::get('/logout', [IndexController::class, 'logout']);

  Route::middleware('role:admin')->group(function () {
    Route::prefix('dashboard')->group(function () {
      Route::controller(DashboardController::class)->group(function () {
        Route::get('/', 'index');
        Route::get('/get', 'get');
        Route::get('/countdown', 'countdown');
      });
    });

    Route::prefix('user')->group(function () {
      Route::controller(UserController::class)->group(function () {
        Route::get('/', 'index');
        Route::get('/get/{param}', 'get');
        Route::get('/clear_vote/{user}', 'clear_vote');
      });
    });
  });

  Route::prefix('candidate')->group(function () {
    Route::controller(CandidateController::class)->group(function () {
      Route::middleware('role:admin')->group(function () {
        Route::get('/', 'index');
        Route::post('/update_candidate/{candidate}', 'update_candidate');
        Route::post('/update_vimi/{candidate}', 'update_vimi');
      });

      Route::get('/get/{candidate}', 'get');
    });
  });

  Route::prefix('vote')->group(function () {
    Route::middleware('role:siswa,guru,staff')->group(function () {
      Route::controller(VoteController::class)->group(function () {
        Route::get('/', 'index');
        Route::get('voting/{user}/{candidate}', 'voting');
      });
    });
  });
});
