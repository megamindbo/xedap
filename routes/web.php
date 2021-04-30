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

Route::get('/','FrontEnd\IndexController@index')->name('indexsss');
//Route::get('/admin','BackEnd\IndexController@dashboard')->name('backend');
//Route::resource('product', 'BackEnd\ProductController');
//Route::resource('category', 'BackEnd\CategoryController');
//Route::group(['middleware' => ['web']], function () {
//    Route::get('lang/{lang}','LangController@changeLang')->name('lang');
//});

Auth::routes();

//Route::get('/home', 'BackEnd\HomeController@index')->name('home');


//Admin
Route::group(['prefix' => 'admin23', // link url them vao
    'namespace' => 'BackEnd',          //them vao controller
    'as'   => 'admin.',            //ten route
    'middleware' => 'admin'        // phải là middleware admin đăng ký trong middleware
],
    function () {
//        Route::get('/admin','IndexController@dashboard')->name('backend');
        Route::get('/dashboard', 'HomeController@dashboard')->name('dashboard');
        Route::resource('product', 'ProductController');
        Route::resource('category', 'CategoryController');
    });
