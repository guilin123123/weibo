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

Route::get('/','StaticPagesController@home')->name('home');
Route::get('/help','StaticPagesController@help')->name('help');
Route::get('/about','StaticPagesController@about')->name('about');
Route::get('/signUp','UsersController@create')->name('signUp');
Route::resource('/users','UsersController');
Route::get('/login','SessionController@create')->name('login');
Route::post('/login','SessionController@store')->name('login');
Route::delete('/logout','SessionController@destroy')->name('logout');
//确认邮箱激活
Route::get('/signUp/confirmtion/{token}','UsersController@confirmEmail')->name('confirm_email');
//用户重置密码
Route::get('/password/reset','Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('/password/email','Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('/password/reset/{token}','Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('/password/reset','Auth\ResetPasswordController@reset')->name('password.update');
//微博的创建和删除
Route::resource('/statuses',StatusesController::class)->only('store','destroy');
//粉丝列表 关注列表
Route::get('/users/{user}/followings','UsersController@followings')->name('users.followings');
Route::get('/users/{user}/followers','UsersController@followers')->name('users.followers');

