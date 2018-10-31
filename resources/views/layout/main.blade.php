<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge,chrome=1">
    <meta name="description" content=""/>
    <meta name="author" content="" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>简书文章</title>

    {{-- Website Icon --}}
    <link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon">
    
    {{-- Bootstrap core CSS --}}
    <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css">

    {{-- Blog core CSS --}}
    <link rel="stylesheet" href="/css/blog.css">

    {{-- Editor core CSS --}}
    <link rel="stylesheet" href="/css/wangEditor.min.css" type="text/css">
</head>
<body>
    @include("layout.nav")
    <div class="container">
        <div class="blog-head">

        </div>

        <div class="row">
            @yield("content")
            @include("layout.sidebar")
        </div>
    </div>
    @include("layout.footer")

    @yield("pagejs")

    <script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="/js/wangEditor.min.js"></script>
    <script src="/js/ylaravel.js"></script>
</body>
</html>