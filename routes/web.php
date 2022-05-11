<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;
use App\Http\Controllers\ControllerAdmin;
use App\Http\Controllers\ProductController  ;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
require __DIR__.'/auth.php';

Route::get('/shop',[ControllerAdmin::class, 'getProtype']);

Route::get('/{name?}',[MyController::class, 'index']);


Route::get('/addproduct',[ControllerAdmin::class, 'add_product']);
Route::post('/saveproduct',[ControllerAdmin::class, 'save_product']);
Route::get('/addproduct',[ControllerAdmin::class, 'getAllManu']);
Route::get('/addproduct',[ControllerAdmin::class, 'getProtype']);
Route::DELETE('delete/{id}',[ProductController::class, 'destroy']);


