<?php

use App\Http\Controllers\KiderController;
use Illuminate\Support\Facades\Route;

Route::prefix('kider')->name('kider.')->group(function(){

    Route::get('/',[KiderController::class,'index'])->name('index');

    Route::get('about',[KiderController::class,'about'])->name('about');

    Route::get('appointment',[KiderController::class,'appointment'])->name('appointment');

    Route::get('call-to-action',[KiderController::class,'call_to_action'])->name('call_to_action');

    Route::get('classes',[KiderController::class,'classes'])->name('classes');

    Route::get('facility',[KiderController::class,'facility'])->name('facility');

    Route::get('team',[KiderController::class,'team'])->name('team');

    Route::get('testimonial',[KiderController::class,'testimonial'])->name('testimonial');

    Route::get('contact',[KiderController::class,'contact'])->name('contact');

    Route::get('error',[KiderController::class,'error'])->name('error');

});
