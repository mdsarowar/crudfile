<?php

use Illuminate\Support\Facades\Route;
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

//Route::get('/',[ProductController::class,'index'])->name('add-product');
Route::get('/',[ProductController::class,'js'])->name('js');
Route::get('/add_product',[ProductController::class,'index'])->name('add_product');
Route::post('/new-product',[ProductController::class,'newProduct'])->name('new-product');
Route::get('/manage_product',[ProductController::class,'manageProduct'])->name('manage_product');
Route::get('/delete_product/{id}',[ProductController::class,'deleteProduct'])->name('delete_product');
