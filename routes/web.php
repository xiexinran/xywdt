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

Route::get('/', 'PagesController@root')->name('root');

//用命令直接生成用户认证路由:包括邮件、密码、记住我、忘记密码
Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

//个人资料展示、更新、编辑路由
Route::resource('users', 'UsersController', ['only' => ['show', 'update', 'edit']]);
Route::resource('topics', 'TopicsController', ['only' => ['index', 'show', 'create', 'store', 'update', 'edit', 'destroy']]);