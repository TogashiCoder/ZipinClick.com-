<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Frontend\HomeController;
use Illuminate\Support\Facades\Route;



Route::get('/',[HomeController::class, 'index'])->name('home');


Route::Group(['middleware'=>['auth','verified']], function () {
    Route::get('dashboard',[DashboardController::class, 'index'])->name('dashboard');
});





require __DIR__.'/auth.php';
