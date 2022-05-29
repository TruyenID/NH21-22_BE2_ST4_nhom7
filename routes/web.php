<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\MyController;
use App\Http\Controllers\ControllerAdmin;
use App\Http\Controllers\ProductController;

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
// Hiển thị product
Route::get('/admin.admin_products',[ControllerAdmin::class, 'show_admin_product']);
// Hiển Thị Câu Hỏi
Route::get('/admin.admin_question',[ControllerAdmin::class, 'show_admin_question']);
// Thêm User
Route::get('/admin.adduser',[ControllerAdmin::class, 'show_admin_adduser']);
// Hiển Thị User
Route::get('/admin.admin_users',[ControllerAdmin::class, 'show_admin_user']);
// Hiển Thị Admin
Route::get('/admin.admin',[ControllerAdmin::class, 'show_admin']);
// Hiển Thị manufactures
Route::get('/admin.admin_manufactures',[ControllerAdmin::class, 'show_admin_manufacture']);
// Hiển Thị protypes
Route::get('/admin.admin_protypes',[ControllerAdmin::class, 'show_admin_protype']);
// Hiển Thị Sản phẩm
Route::get('/admin.addproduct',[ControllerAdmin::class, 'show_admin_addproduct']);
// Thêm Manufacture
Route::get('/admin.addmanufacture',[ControllerAdmin::class, 'show_admin_addmanufacture']);
// THêm protype
Route::get('/admin.addprotype',[ControllerAdmin::class, 'show_admin_addprotype']);
//Hiển thị giao diện chính 
Route::post('/admin.dashboard',[ControllerAdmin::class, 'dashboard']);
//Hiển thị giao diện Đơn hàng 
Route::get('/admin.admin_billings',[ControllerAdmin::class, 'show_admin_billing']);
//Hiển thị Review_Ratings
Route::get('/admin.admin_reviewRating',[ControllerAdmin::class, 'show_admin_review_ratings']);
// Logout trang admin
Route::get('/logout',[ControllerAdmin::class, 'logout']);

Route::post('/saveproduct',[ControllerAdmin::class, 'save_product']);
Route::post('/savemanufacture',[ControllerAdmin::class, 'save_manufacture']);
Route::post('/saveprotype',[ControllerAdmin::class, 'save_protype']);
Route::post('/saveuser',[ControllerAdmin::class, 'save_user']);
Route::post('/saveadmin',[ControllerAdmin::class, 'save_admin']);

Route::DELETE('deletequestion/{id}',[ControllerAdmin::class, 'destroy_question']);
Route::DELETE('deletebilling/{id}',[ControllerAdmin::class, 'destroy_billing']);
Route::DELETE('deleteadmin/{id}',[ControllerAdmin::class, 'destroy_admin']);
Route::DELETE('deleteuser/{id}',[ControllerAdmin::class, 'destroy_user']);
Route::DELETE('deleteproduct/{id}',[ProductController::class, 'destroy']);
Route::DELETE('deletemanufacture/{id}',[ControllerAdmin::class, 'destroy_manu']);
Route::DELETE('deleteprotype/{id}',[ControllerAdmin::class, 'destroy_type']);
Route::DELETE('deletereview-rating/{id}',[ControllerAdmin::class, 'destroy_review_ratings(']);

Route::get('admin_editproduct/{id}',[ProductController::class, 'edit']);
Route::put('update_data/{id}',[ProductController::class, 'edit']);
Route::get('/single-product/{id}/{type_id}', [MyController::class, 'show']);
Route::put('update_data/{id}',[ProductController::class, 'update']);
Route::get('admin_editmanufacture/{manu_id}',[ControllerAdmin::class, 'edit_manufacture']);
Route::put('update_datamanu/{manu_id}',[ControllerAdmin::class, 'update_manufacture']);
Route::get('admin_editprotype/{type_id}',[ControllerAdmin::class, 'edit_protype']);
Route::put('update_datatype/{type_id}',[ControllerAdmin::class, 'update_protype']);
Route::get('admin_edituser/{id}',[ControllerAdmin::class, 'edit_user']);
Route::put('update_datuser/{id}',[ControllerAdmin::class, 'update_user']);

//User
Route::get('shop/{id}',[MyController::class, 'getProtypes'])->name('getprotypes');
Route::get('shop',[MyController::class, 'show_shop']);
Route::get('/{name?}', function () {
    Route::get('/{name?}',[MyController::class, 'index']);
})->middleware(['auth'])->name('index');
require __DIR__.'/auth.php';

Route::get('/single-product/{id}/{type_id}', [MyController::class, 'show']);

//Cart
// Route::post('/savecart',[MyController::class, 'save_cart']);
// Route::get('/cart',[MyController::class, 'show_cart']);
// Route::post('/add-cart-ajax',[MyController::class, 'add_cart_ajax']);
Route::get('product/add-to-cart/{id}',[MyController::class, 'add_cart_ajax'])->name('addToCart');
Route::get('/cart',[MyController::class, 'show_cart'])->name('showcart');
Route::get('/cart/update',[MyController::class, 'update_cart'])->name('updatecart');
//Delete Cart
Route::get('/cart/delete',[MyController::class, 'delete_cart'])->name('deletecart');

Route::get('/{name?}',[MyController::class, 'index']);
// Place Order
Route::post('/saveplace',[MyController::class, 'save_placeOrder']);
 
#Manage Review
Route::post('/review-store',[PostController::class, 'reviewstore'])->name('review.store');
///Question
Route::post('/savequestion',[MyController::class, 'save_question']);

