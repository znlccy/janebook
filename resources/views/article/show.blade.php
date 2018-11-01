@extends("layout.main")

@section("content")
    <div class="col-sm-8 blog-main">
        <div class="blog-post">
            <div style="display: inline-flex">
                <h3 class="blog-post-title">{{$article->title}}</h3>
                @can('update', $article)
                <a style="margin:auto" href="/article/{{ $article->id }}/edit">
                    <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                </a>
                @endcan
                @can('delete', $article)
                <a style="margin:auto" href="/article/{{ $article->id }}/delete">
                    <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                </a>
                @endcan
            </div>
            <p class="blog-post-meta">
                {{$article->created_at->toFormattedDateString()}} by {{ $article->user->name }}
            </p>
            <p>{!! $article->content !!}</p>
            <div>
                @if($article->zan(\Auth::id())->exists())
                <a href="/article/{{ $article->id }}/unzan" type="button" class="btn btn-danger">取消赞</a>
                @else
                <a href="/article/{{ $article->id }}/zan" type="button" class="btn btn-primary">赞</a>
                @endif
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading">评论</div>
            <ul class="list-group">
                @foreach($article->comments as $comment)
                    <li class="list-group-item">
                        <h5>{{ $comment->created_at }} by {{ $comment->user->name }}</h5>
                        <div>
                            {{ $comment->content }}
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading">发表评论</div>

            <ul class="list-group">
                <form action="/article/{{ $article->id }}/comment" method="POST">
                    {{ csrf_field() }}
                    <input type="hidden" name="article_id" value="article_id">
                    <li class="list-group-item">
                        <textarea name="content" class="form-control" rows="10"></textarea>
                        @include('layout.error')
                        <button class="btn btn-default" type="submit">提交</button>
                    </li>
                </form>
            </ul>
        </div>
    </div>
@endsection