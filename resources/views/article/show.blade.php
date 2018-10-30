@extends("layout.main")

@section("content")
    <div class="col-sm-8 blog-main">
        <div class="blog-post">
            <div style="display: inline-flex">
                <h3 class="blog-post-title">{{$article->title}}</h3>

                <a style="margin:auto" href="/article/{{ $article->id }}/edit">
                    <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                </a>

                <a style="margin:auto" href="/article/{{ $article->id }}/delete">
                    <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                </a>
            </div>
            <p class="blog-post-meta">
                {{$article->created_at->toFormattedDateString()}} by znlccy
            </p>
            <p>{!! $article->content !!}</p>
            <div>
                <a href="/article/{{ $article->id }}/unzan" type="button" class="btn btn-danger">取消赞</a>
                <a href="/article/{{ $article->id }}/zan" type="button" class="btn btn-primary">赞</a>
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading">评论</div>
            <ul class="list-group">
                <li class="list-group-item">1</li>
                <li class="list-group-item">2</li>
                <li class="list-group-item">3</li>
                <li class="list-group-item">4</li>
                <li class="list-group-item">5</li>
                <li class="list-group-item">6</li>
            </ul>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading">发表评论</div>

            <ul class="list-group">
                <form action="/article/comment" method="post">
                    <input type="hidden" name="article_id" value="article_id">
                    <li class="list-group-item">
                        <textarea name="content" class="form-control" rows="10"></textarea>
                        <button class="btn btn-default" type="submit">提交</button>
                    </li>
                </form>
            </ul>
        </div>
    </div>
@endsection