<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::get('/','WelcomeController@welcome');//首页

Route::get('center','CenterController@center');//个人中心
Route::get('myinfo','CenterController@myinfo');//个人资料
Route::post('insert_info','CenterController@updateInfo');//修改个人资料
Route::get('mycart','CenterController@cart_info');//修改个人资料

Route::get('market','MarketController@market');//课程详情
Route::get('shopcart','MarketController@shopcart');//购物车

Route::get('more','MoreController@more');//更多





Route::get('login','LoginController@login');//登录
Route::get('login_out','LoginController@login_out');//退出登录
Route::get('regist','LoginController@regist');//注册
