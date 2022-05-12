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

Route::get('/{name?}',[MyController::class, 'index']);
Route::post('/saveproduct',[ControllerAdmin::class, 'save_product']);
Route::post('/savemanufacture',[ControllerAdmin::class, 'save_manufacture']);
Route::post('/saveprotype',[ControllerAdmin::class, 'save_protype']);
Route::post('/saveuser',[ControllerAdmin::class, 'save_user']);
Route::DELETE('delete/{id}',[ProductController::class, 'destroy']);
Route::get('admin_editproduct/{id}',[ProductController::class, 'edit']);
Route::put('update_data/{id}',[ProductController::class, 'edit']);
