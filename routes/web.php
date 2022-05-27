<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\PageController@index');

Route::get('/', function () {
    return view('main');
});

Route::get('/graph', function () {
    return view('graphicCard');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('graphicCard');


