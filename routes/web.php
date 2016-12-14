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

Route::get('/', function () {
    return view('welcome');
});


Route::group(['prefix' => 'admin'], function () {
    Route::get('/', 'adminController@index');
    Route::get('/dashboard', 'adminController@dashboard');
    Route::get('/categories', 'categoryController@index');
    Route::get('/category/add', 'categoryController@add');
    Route::post('/category/postadd', 'categoryController@postadd');
    Route::get('/category/edit/{id}', 'categoryController@edit');
    Route::post('/category/postedit/{id}', 'categoryController@postedit');
    Route::get('/category/delete/{id}', 'categoryController@delete');
    
   
    Route::get('/news', 'newsController@index');
    Route::get('/news/add', 'newsController@add');
    Route::post('/news/postadd', 'newsController@postadd');
    Route::get('/news/edit/{id}', 'newsController@edit');
    Route::post('/news/postedit/{id}', 'newsController@postedit');
    Route::get('/news/delete/{id}', 'newsController@delete');
    Route::get('/news/featured', 'newsController@featured');
    
});

// Logging in and out
//get('/auth/login', 'Auth\AuthController@getLogin');
//post('/auth/login', 'Auth\AuthController@postLogin');
//get('/auth/logout', 'Auth\AuthController@getLogout');
Auth::routes();

Route::get('/home', 'HomeController@index');
