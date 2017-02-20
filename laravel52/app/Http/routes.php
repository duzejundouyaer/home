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

Route::get('center','CenterController@center');//个人中心
Route::get('myinfo','CenterController@myinfo');//个人资料

Route::get('market','MarketController@market');//全部课程分类
Route::get('curr','MarketController@curr');//全部课程分类
Route::get('cont','MarketController@cont');//课程详情
Route::get('bfang','MarketController@bfang');//课程详情

Route::post('shopcart','MarketController@shopcart');//加入购物车

Route::get('more','MoreController@more');//更多





Route::get('login','LoginController@login');//登录
Route::get('login_out','LoginController@login_out');//退出登录
Route::get('regist','LoginController@regist');//注册

//发短信
Route::get('short','LoginController@short');//注册发送短信
Route::get('contrast','LoginController@contrast');//对比验证码
Route::post('add','LoginController@add');//注册
Route::get('only','LoginController@only');//注册唯一性

//登录
Route::post('checklogin','LoginController@checklogin');//注册唯一性
Route::any('qqlogin','LoginController@qqlogin');//qq登录