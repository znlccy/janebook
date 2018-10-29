<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    //文章列表页面
    public function index() {
        return view('article/index');
    }

    /* 文章详情页面 */
    public function show() {
        return view('article/show');
    }

    /* 文章创建页面 */
    public function create() {
        return view('article/create');
    }

    /* 文章创建逻辑 */
    public function store() {

    }

    /* 文章编辑页面 */
    public function edit() {
        return view('article/edit');
    }

    /* 文章编辑逻辑 */
    public function update() {

    }

    /* 文章删除逻辑 */
    public function delete() {

    }
}
