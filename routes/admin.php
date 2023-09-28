<?php

use App\Http\Controllers\DASHBOARDController;
use App\Http\Controllers\DashboardController as ControllersDashboardController;
use App\Http\Controllers\SchoolClassController;

use Illuminate\Support\Facades\Route;


Route::prefix('/dashboard')->name('dashoboard.')->group(function () {
    Route::get('',[ControllersDashboardController::class,'index']);


    Route::get('/school-class',[SchoolClassController::class,'index'])->name('class');


});
