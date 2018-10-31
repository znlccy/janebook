<div class="blog-masthead">
    <div class="container">
        <form action="/article/search" method="GET">
            <ul class="nav navbar-nav navbar-left">
                <li>
                    <a class="blog-nav-item " href="/article">首页</a>
                </li>
                <li>
                    <a class="blog-nav-item" href="/article/create">写文章</a>
                </li>
                <li>
                    <a class="blog-nav-item" href="/notices">通知</a>
                </li>
                <li>
                    <input name="query" type="text" value="@if(!empty($query)){{$query}}@endif" class="form-control" style="margin-top:10px" placeholder="搜索词">
                </li>
                <li>
                    <button class="btn btn-default glyphicon glyphicon-search" style="margin-top:10px" type="submit">搜索</button>
                </li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <div>
                        <img src="/images/favicon.icon" alt="" class="img-rounded" style="border-radius:500px; height: 30px">
                        <a href="#" class="blog-nav-item dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">znlccy <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="/user/1">我的主页</a></li>
                            <li><a href="/user/1/setting">个人设置</a></li>
                            <li><a href="/user/logout">登出</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </form>
    </div>
</div>