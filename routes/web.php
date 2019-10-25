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


Route::get('/serve/index','ServeController@index');
//综合查询
Route::get('/search/index','SearchController@index');
//注册登录
Route::get('/login/register','LoginController@register');//显示注册视图
Route::post('/login/registerdo','LoginController@registerdo');//执行注册
Route::get('/login/login','LoginController@login');//显示登录视图
Route::get('/login/logindo','LoginController@logindo');//执行登录
