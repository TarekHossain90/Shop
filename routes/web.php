<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;



Route::get('/',[HomeController::class,'home']);

Route::get('/home',[AdminController::class,'index']);

Route::post('/contacts',[HomeController::class,'contacts']);

Route::get('/all_message',[AdminController::class,'all_message']);

Route::get('/view_gallary',[AdminController::class,'view_gallary']);

Route::post('/add_gallary',[AdminController::class,'add_gallary']);

Route::get('/delete_gallary/{id}',[AdminController::class,'delete_gallary']);




















































Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
