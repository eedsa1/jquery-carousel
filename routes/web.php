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

Route::get('/index', 'CarouselController@index');

Route::get('/index2', 'CarouselController@index2');

Route::get('/index3', 'CarouselController@index3');

Route::get('/index4', 'CarouselController@index4');

Route::get('/index5', 'CarouselController@index5');

Route::get('/index6', 'CarouselController@index6');

Route::get('/index7', 'CarouselController@index7');

Route::get('/index8', 'CarouselController@index8');

Route::get('/index9', 'CarouselController@index9');

Route::get('/index10', 'CarouselController@index10');

Route::get('/index11', 'CarouselController@index11');

Route::get('/index12', 'CarouselController@index12');