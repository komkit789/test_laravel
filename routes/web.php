<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('blog',[AdminController::class,'index'])->name('blog');
Route::get('about',[AdminController::class,'about'])->name('about');



