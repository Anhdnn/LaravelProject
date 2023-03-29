<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

Route::prefix('book')->middleware(['auth'])->group(function(){
        Route::get('/index', [BookController::class,'index']);
        Route::get('/view',[BookController::class],'view' ); 
    });
// Route::prefix('book')->group(function(){
//     Route::get('/index', [BookController::class,'index']);
//     Route::get('/view',[BookController::class],'view' ); 
// });