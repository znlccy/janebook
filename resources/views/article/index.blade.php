@extends("layout.main")

@section("content")
    <div class="clo-sm-8 blog-main">
        {{--@include("article.carousel")--}}
        <div style="height: 20px;">

        </div>
        <div>
            @foreach($articles as $article)
            <div class="blog-post">
                <h3 class="blog-post-title">
                    <a href="/article/{{$article->id}}/show">{{$article->title}}</a>
                </h3>
                <p class="blog-post-meta">
                    {{$article->created_at->toFormattedDateString()}} by
                    <a href="/user/{{ $article->user_id }}">{{ $article->user->name }}</a>
                </p>
                {!! str_limit($article->content, 100, '...') !!}
                <p class="blog-post-meta">赞 {{ $article->zans_count }}  | 评论 {{$article->comments_count}}</p>
            </div>
            @endforeach

            {{-- 分页 --}}
            {{$articles->links()}}
        </div>
    </div>
@endsection