<?php

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
Route::pattern('id', '[0-9]+');
//建立商品及詳細的路由
Route::get('/', 'ProductController@index')->name('index');
Route::get('/product', 'ProductController@index')->name('product.index');
Route::get('/product/{id}', 'ProductController@show')->name('product.show');
//建立新增至購物車的路由
Route::post('/cart/store', 'CartController@store')->name('cart.store');
//觀看購物車內容
Route::get('/cart', 'CartController@index')->name('cart.index');
//購物車移除
Route::delete('/cart/{id}', 'CartController@destroy')->name('cart.destroy');

//添加訂單
Route::post('/order/store', 'OrderController@store')->name('order.store');

//訂單列表
Route::get('/order', 'OrderController@index')->name('order.index');

Auth::routes();

Route::get('/home', 'ProductController@index')->name('home');
