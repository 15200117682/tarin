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
Route::get('/info', function () {
    phpinfo();
});
Route::get("/user/add","UserController@useradd");        //测试用户添加
Route::get("/test/redis","UserController@testRedis");        //测试扩展

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
