<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NhanVienController;
use App\Http\Controllers\TestController;


Route::prefix('nhanvien')->group( function(){
    Route::get('/',[NhanVienController::class, 'GetAllNV']);
    Route::get('/view',[NhanVienController::class, 'GetNV']);
    Route::get('/add',[NhanVienController::class, 'GetViewAdd']);
    Route::post('/add',[NhanVienController::class, 'AddNV']);
    Route::get('/test',[NhanVienController::class, 'TestAdd']);


});
Route::get('/test',function(){
    $data = [
        'users'=>[
            'ngoc anh1',
            'ngoc anh2',
            'ngoc anh3'
        ]
    ];
    return view('test',$data);
});

