<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Comment;
use App\Zan;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    //文章列表页面
    public function index() {
        $articles = Article::orderBy('created_at', 'desc')->withCount(['comments', 'zans'])->paginate(6);
        return view('article/index',compact('articles'));
    }

    /* 文章详情页面 */
    public function show(Article $article) {

        $article->load('comments');
        return view('article/show',compact("article"));
    }

    /* 文章创建页面 */
    public function create() {
        return view('article/create');
    }

    /* 文章创建逻辑 */
    public function store() {
        /*$article = new Article();
        $article->title = request('title');
        $article->content = request('content');
        $article->save();*/

        /*$params = ['title' => request('title'), 'content' => request('content')];*/
        /*$params = request(['title', 'content']);*/

        /* 验证操作 */
        $this->validate(request(), [
            'title'     => 'required|string|max:100|min:5',
            'content'   => 'required|string|min:10'
        ]);

        /* 逻辑 */
        $params = array_merge(request(['title', 'content']), ['user_id' => \Auth::id()]);
        Article::create($params);

        /* 渲染 */
        return redirect('/article');
    }

    /* 文章编辑页面 */
    public function edit(Article $article) {

        return view('/article/edit', compact('article'));
    }

    /* 文章编辑逻辑 */
    public function update(Article $article) {

        /* 验证 */
        $this->validate(request(),[
            'title'     => 'required|string|max:100|min:5',
            'content'   => 'required|string|min:10'
        ]);

        $this->authorize('update', $article);

        /* 逻辑 */
        $article->title = request('title');
        $article->content = request('content');
        $article->save();

        /* 渲染 */
        return redirect('/article/{$article->id}/show');
    }

    /* 文章删除逻辑 */
    public function delete(Article $article) {
        /* 用户权限验证 */
        $this->authorize('delete', $article);
        $article->delete();
        return redirect('/article');
    }

    /* 文章搜索逻辑 */
    public function search() {

    }

    /* 富文本图片上传 */
    public function imageUpload(Request $request) {
        $path = $request->file('wangEditorH5File')->storePublicly(md5(time()));
        return asset('storage/'.$path);
    }

    /* 文章点赞逻辑 */
    public function zan(Article $article) {
        $param = [
            'user_id'   => Auth::id(),
            'article_id'=> $article->id,
        ];

        Zan::firstOrCreate($param);
        return back();
    }

    /* 文章取消赞逻辑 */
    public function unzan(Article $article) {
        $article->zan(\Auth::id())->delete();
        return back();
    }

    public function comment(Article $article) {

        /* 验证 */
        $this->validate(request(), [
            'content'       => 'min:3'
        ]);

        /* 逻辑 */
        $comment = new Comment();
        $comment->user_id = Auth::id();
        $comment->content = request('content');
        $article->comments()->save($comment);

        /* 渲染 */
        return back();
    }
}
