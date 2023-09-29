<?php

use App\Http\Controllers\DASHBOARDController;
use App\Http\Controllers\DashboardController as ControllersDashboardController;
use App\Http\Controllers\SchoolClassController;

use Illuminate\Support\Facades\Route;


Route::prefix('/dashboard')->name('dashoboard.')->group(function () {
    Route::get('',[ControllersDashboardController::class,'index']);


    Route::get('/school-class',[SchoolClassController::class,'index'])->name('class');
    Route::get('/class/create', [SchoolClassController::class, 'create'])->name('class.create');
    Route::post('/class/store', [SchoolClassController::class, 'store'])->name('class.store');
    Route::get('/class/fetch', [SchoolClassController::class, 'fetchAll'])->name('class.fetchAll');
    Route::resource('class',SchoolClassController::class);


});
