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

Route::get('/','FrontEnd\IndexController@index')->name('index');
Route::get('/admin','BackEnd\IndexController@dashboard')->name('backend');
Route::resource('product', 'BackEnd\ProductController');
Route::resource('category', 'BackEnd\CategoryController');
//Route::group(['middleware' => ['web']], function () {
//    Route::get('lang/{lang}','LangController@changeLang')->name('lang');
//});
