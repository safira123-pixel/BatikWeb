<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\WorkerController;
use App\Http\Controllers\MemberController;

Route::get('/', [HomepageController::class,'index']);

 Route::group(['prefix' => 'admin'], function() {
    Route::get('/', [AdminController::class, 'index'])->name('admin_dashboard');
  });
  Route::group(['prefix' => 'worker'], function() {
    Route::get('/', [WorkerController::class, 'index'])->name('worker_dashboard');
  });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
