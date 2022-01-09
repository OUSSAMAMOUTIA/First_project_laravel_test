<?php

use App\Http\Controllers\ProductController;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Route;

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

Route::resource('products',ProductController::class);
Route::get('product/soft/delete/{id}','App\Http\Controllers\ProductController@softDelete')->name('soft.delete');
Route::get('product/trash','App\Http\Controllers\ProductController@trashed')->name('products.trash');
Route::get('product/back/from/trash/{id}','App\Http\Controllers\ProductController@backFromtrash')->name('product.back.trash');
Route::get('product/delete/from/trash/{id}','App\Http\Controllers\ProductController@backForEver')->name('product.delete.trash');
