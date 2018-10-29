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

/*Route::get('/', function () {
    return view('welcome');
});*/

/*Route::get('/', '[控制器]@行为');*/

/*Route::get('/', 'App\Http\Controllers\IndexController@index');*/

/* 文章列表页 */
Route::get('/article', 'ArticleController@index');

/* 文章详情页 */
Route::get('/article/{article}', 'ArticleController@show');

/* 创建文章页 */
Route::get('/article/create', 'ArticleController@create');

/* 提交文章页 */
Route::post('/article', 'ArticleController@store');

/* 编辑文章页 */
Route::get('/article/{article}/edit', 'ArticleController@edit');

/* 更新文章页 */
Route::put('/article/{article}', 'ArticleController@update');

/* 删除文章页 */
Route::get('article/delete', 'AArticleController@delete');

