<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\MyController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/{name?}',[MyController::class, 'index']);
// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/test', function () {
//     return view('test');
// });
// Route::get('/EXE', function () {
//     return view('index');
// });
// Route::get('/trangchu', function () {
//     return view('trangchu');
// });
// Route::get('/gioithieu', function () {
//     return view('gioithieu');
// });
// Route::get('/lienhe', function () {
//     return view('lienhe');
// });
// Route::get('/ban', function () {
//     return view('ban');
// });
// Route::get('/ghe', function () {
//     return view('ghe');
// });
// Route::get('/{name?}', function ($name= "trangchu") {
//     //echo "Xin chao ".$name;
//     return view($name);
// });
// Route::get('rp/{name}', function ($name) {
//     echo "Xin chao ".$name;
// })->where('name', '[A-Za-z]+');
// Route::get('op/{name}', function ($name="demo") {
//     echo "Xin chao ".$name;
// });

// Route::get('/user/{id}/{name}', function ($id, $name) {
//     echo "Xin chao ".$id.$name;  
// })->where('id', '[0-9]+')->where('name', '[A-Za-z]+');;; 

// Route::get('/user/{name}', function ($name) {
//     echo "Xin chao ".$name;
// })->whereAlphaNumeric('name');
 
// Route::get('/user/{id}', function ($id) {
//     echo "Xin chao ".$id;
// })->where('id', '[0-9]+');
// Route::get('/{name?}', function ($name="index") {
//     return view($name);
// });
// Route::resourse('/product',ProductController::class);

// Route::get('/product',[ProductController::Class,'index']);
// Route::get('/product/create',[ProductController::Class,'create']);
// Route::post('/product',[ProductController::Class,'store']);
// Route::get('/product/{id}',[ProductController::Class,'show']);
// Route::get('/product/{id}/edit',[ProductController::Class,'edit']);
// Route::patch('/product/{id}',[ProductController::Class,'update']);
// Route::delete('/product/{id}',[ProductController::Class,'destroy']);
