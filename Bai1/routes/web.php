<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NhanVienController;
use App\Http\Controllers\TestController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
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
Route::get('/anh',function(){

    return url()->previous();
    
});
//example methods
Route::get('/unicode', function (Request $req) {
    return $req->flash();
})->name('home');
Route::get('/', function(){
    return response('Hello World', 200)
                  ->header('Content-Type', 'text/plain');
});
Route::get('/fileupload',[HomeController::class,'LoadForm']);
Route::post('/fileupload',[HomeController::class,'HandleForm'])->name('form');

Route::get('/unicode', function () {
    return view('form');
});
Route::get('/dashboard', function(){
    return view('dashboard');
})->name('login');
// Route::post('/unicode',function(){
//     return "<h1>POST</h1>";
// });
// Route::put('/unicode', function(){
//     return "<h1>PUT</h1>";
// });
// Route::delete('/unicode', function(){
//     return "<h1>Delete</h1>";
// });
// Route::patch('/unicode', function(){
//     return "<h1>Patch</h1>";
// });
// Route::options('/unicode', function(){
//     return "<h1>Options</h1>";
// });

// Route::get('/form', function () {
//     return "<h1>Home</h1>";
// })->name('home');


//match
// Route::match(['post','get','put','patch'],'/unicode',function(Request $req){
//     return $req->method();
// });


// ani: nhan req all method
// Route::any('/unicode',function(Request $req){
//     return $req->fullUrl();
// });

 //redirect
//  Route::redirect('/unicode','/form',302);

//view
// Route::view('/unicode','form');

//prefix group
// Route::prefix('admin')->middleware(['test'])->group(function(){
//     Route::get('/form', function () {
//         return view('form');
//     });
//     Route::get('/unicode', function () {
//         return view('welcome');
//     })->withoutMiddleware('test'); 
// });

//get tham so
//dấu ? có ý nghĩa là k bắt buộc
// Route::get('/sinhvien/{thamso1?}-{thamso?}',function( $thamso1='', $thamso=''){
//     return $thamso1.$thamso;
// });

// //chuyen qua controller
// //Route::get('url','duong dan controller@action')
// Route::get('/','App\Http\Controllers\HomeController@index')->name('home');
// //c2: Route::get('url',['ten duong dan','action'])
// use App\Http\Controllers\HomeController;
// Route::get('url',[HomeController::class,'index']);
// //or
// Route::get('url',['App\Http\Controllers\HomeController','index']);

Route::resource('/test',TestController::class);