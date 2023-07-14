<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\HomeController;

use App\Http\Controllers\ProductController;

use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class,'index'])->name('home');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
   
    Route::get('/dashboard', [DashboardController::class,'index'])->name('dashboard');

    Route::get('/product/create', [ProductController::class,'create'])->name('product.create');
    Route::post('/product/store', [ProductController::class,'store'])->name('product.store');
    Route::get('/product/manage', [ProductController::class,'index'])->name('product.manage');
    Route::get('/product/edit/{id}', [ProductController::class,'edit'])->name('edit');
    Route::get('/product/delete/{id}', [ProductController::class,'destroy'])->name('destroy');

    Route::post('/email/store', [EmailController::class,'store'])->name('email.store');
    Route::get('/email/manage', [EmailController::class,'index'])->name('email.manage');

});
