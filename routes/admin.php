<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', \App\Http\Controllers\admin\Dashboard::Class);

Route::prefix('/image')->name('image')->group(function () {
    Route::get('/index', [\App\Http\Controllers\admin\Image::class, 'index'])->name('index');
    Route::post('/upload', [\App\Http\Controllers\admin\Image::class, 'upload'])->name('upload');
});

Route::prefix('/demo')->group(function () {
    Route::get('/form', function () {
        return view('/demo/form');
    });
});
