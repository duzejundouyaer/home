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
Route::get('course','WelcomeController@course');//精选课程    
Route::get('index','WelcomeController@index');//直播回首页
Route::get('morer','WelcomeController@morer');//首页更多
Route::get('selected','WelcomeController@selected');//精选系列课程
Route::get('recommend','WelcomeController@recommend');//热门推荐

Route::get('center','CenterController@center');//个人中心
Route::get('myinfo','CenterController@myinfo');//个人资料

Route::get('market','MarketController@market');//全部课程分类
Route::get('curr','MarketController@curr');//全部课程分类

Route::get('shopcart','MarketController@shopcart');//购物车

Route::get('more','MoreController@more');//更多





Route::get('login','LoginController@login');//登录
Route::get('login_out','LoginController@login_out');//退出登录
Route::get('regist','LoginController@regist');//注册
