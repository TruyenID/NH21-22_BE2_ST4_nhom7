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
//Authenticate
Route::get('/admin.dashboard',[ControllerAdmin::class, 'show_dashboard']);
Route::get('/admin.admin_products',[ControllerAdmin::class, 'show_admin_product']);
Route::get('/admin.adduser',[ControllerAdmin::class, 'show_admin_adduser']);
Route::get('/admin.admin_users',[ControllerAdmin::class, 'show_admin_user']);
Route::get('/admin.admin_manufactures',[ControllerAdmin::class, 'show_admin_manufacture']);
Route::get('/admin.admin_protypes',[ControllerAdmin::class, 'show_admin_protype']);
Route::get('/admin.addproduct',[ControllerAdmin::class, 'show_admin_addproduct']);
Route::get('/admin.addmanufacture',[ControllerAdmin::class, 'show_admin_addmanufacture']);
Route::get('/admin.addprotype',[ControllerAdmin::class, 'show_admin_addprotype']);

Route::post('/admin.dashboard',[ControllerAdmin::class, 'dashboard']);
Route::get('/logout',[ControllerAdmin::class, 'logout']);
Route::post('/saveproduct',[ControllerAdmin::class, 'save_product']);
Route::post('/savemanufacture',[ControllerAdmin::class, 'save_manufacture']);
Route::post('/saveprotype',[ControllerAdmin::class, 'save_protype']);
Route::post('/saveuser',[ControllerAdmin::class, 'save_user']);
Route::DELETE('deleteproduct/{id}',[ProductController::class, 'destroy']);
Route::DELETE('deletemanufacture/{id}',[ControllerAdmin::class, 'destroy_manu']);
Route::DELETE('deleteprotype/{id}',[ControllerAdmin::class, 'destroy_type']);
Route::get('admin_editproduct/{id}',[ProductController::class, 'edit']);
Route::put('update_data/{id}',[ProductController::class, 'update']);
Route::get('admin_editmanufacture/{manu_id}',[ControllerAdmin::class, 'edit_manufacture']);
Route::put('update_datamanu/{manu_id}',[ControllerAdmin::class, 'update_manufacture']);
Route::get('admin_editprotype/{type_id}',[ControllerAdmin::class, 'edit_protype']);
Route::put('update_datatype/{type_id}',[ControllerAdmin::class, 'update_protype']);
Route::get('admin_edituser/{id}',[ControllerAdmin::class, 'edit_user']);
Route::put('update_datuser/{id}',[ControllerAdmin::class, 'update_user']);

//User
Route::get('/{name?}', function () {
    Route::get('/{name?}',[MyController::class, 'index']);
})->middleware(['auth'])->name('index');
require __DIR__.'/auth.php';

Route::get('/{name?}',[MyController::class, 'index']);
