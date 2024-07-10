<?php

use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', [App\Http\Controllers\PortfolioController::class, 'index']);

Auth::routes();
Route::resource(
  '/projects', App\Http\Controllers\ProjectController::class
);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
