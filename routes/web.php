<?php

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
/**
 * get()传递了两个参数，第一个参数指明了URL 第二个参数指明了处理该 URL 的控制器动作
 * get 表明这个路由将会响应 GET 请求，并将请求映射到指定的控制器动作上
 */
Route::get('/','StaticPagesController@home')->name('home');
Route::get('/help','StaticPagesController@help')->name('help');
Route::get('/about','StaticPagesController@about')->name('about');

Route::get('signup','UsersController@create')->name('signup');
