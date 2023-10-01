<?php

use App\Http\Controllers\DASHBOARDController;
use App\Http\Controllers\DashboardController as ControllersDashboardController;
<<<<<<< HEAD
use App\Http\Controllers\SchoolClassController;
use App\Http\Controllers\TESTEMONIALController;
use App\Http\Controllers\TestemonialsController;
use App\Models\TESTEMONIAL;
=======
use App\Http\Controllers\POPULARTEACHERController;
use App\Http\Controllers\SchoolClassController;
use App\Http\Controllers\TestemonialsController;
>>>>>>> origin/master
use Illuminate\Support\Facades\Route;


Route::prefix('/dashboard')->name('dashoboard.')->group(function () {
    Route::get('',[ControllersDashboardController::class,'index']);


    Route::get('/school-class',[SchoolClassController::class,'index'])->name('class');
    Route::get('/class/create', [SchoolClassController::class, 'create'])->name('class.create');
    Route::post('/class/store', [SchoolClassController::class, 'store'])->name('class.store');
    Route::get('/class/fetch', [SchoolClassController::class, 'fetchAll'])->name('class.fetchAll');
    Route::resource('class',SchoolClassController::class);
<<<<<<< HEAD
   
   // Route::resource('testemonial',TestemonialsController::class);
   Route::get('testemonial',[TestemonialsController::class,'index'])->name('testemonial.index');

   Route::post('testemonial/store',[TestemonialsController::class,'store'])->name('testemonial.store');

=======


    Route::get('testemonial',[TestemonialsController::class,'index'])->name('testemonial.index');
    Route::post('testemonial/store',[TestemonialsController::class,'store'])->name('testemonial.store');



   Route::resource('testemonial',TestemonialsController::class);


   Route::resource('popularteacher',POPULARTEACHERController::class);
>>>>>>> origin/master

});
