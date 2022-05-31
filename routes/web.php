<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
Route::get('/graph', function () {
    return view('graphicCard');
});

Auth::routes();

Route::get('/', [HomeController::class, 'index']);

Route::get('/redirect',[HomeController::class, 'redirect']);

Route::get('/product', [AdminController::class, 'product']);
Route::post('/uploadproduct', [AdminController::class, 'uploadproduct']);
