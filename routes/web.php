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

/* 文章列表页 */

use Illuminate\Support\Facades\Route;

Route::get('/article', '\App\Http\Controllers\ArticleController@index');

/* 文章详情页 */
Route::get('/article/{article}/show', '\App\Http\Controllers\ArticleController@show');

/* 创建文章页 */
Route::get('/article/create', '\App\Http\Controllers\ArticleController@create');

/* 提交文章页 */
Route::post('/article/store', '\App\Http\Controllers\ArticleController@store');

/* 编辑文章页 */
Route::get('/article/{article}/edit', '\App\Http\Controllers\ArticleController@edit');

/* 更新文章页 */
Route::put('/article/{article}', '\App\Http\Controllers\ArticleController@update');

/* 删除文章页 */
Route::get('/article/{article}/delete', '\App\Http\Controllers\ArticleController@delete');

/* 富文本图片上传 */
Route::post('/article/image/upload', '\App\Http\Controllers\ArticleController@imageUpload');

Route::get('/', function () {
    return view('welcome');
});

/* 注册界面 */
Route::get('/user/register', 'RegisterController@register');

/* 注册行为 */
Route::post('/user/register', 'RegisterController@registerHandle');

/* 登录界面 */
Route::get('/user/login', 'LoginController@login');

/* 登录行为 */
Route::post('/user/login', 'LoginController@loginHandle');

/* 登出行为 */
Route::get('/user/logout', 'LoginController@logout');

/* 个人设置页面 */
Route::get('/user/setting', 'UserController@setting');

/* 个人设置逻辑 */
Route::post('/user/setting', 'UserController@settingHandle');
