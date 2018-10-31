<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>用户登录</title>

    {{-- Website Icon --}}
    <link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon">

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="http://v3.bootcss.com/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="http://v3.bootcss.com/examples/signin/signin.css" rel="stylesheet">
</head>
<body>
    <div class="container">

        <form action="/user/login" method="POST" class="form-signin">
            <h3 class="form-signin-heading">请登录</h3>
            {{ csrf_field() }}
            <label for="email" class="sr-only">邮箱</label>
            <input type="text" name="email" id="email" placeholder="邮箱" class="form-control" required autofocus>
            <label for="password" class="sr-only">密码</label>
            <input type="password" name="password" id="password" placeholder="密码" class="form-control" required autofocus>
            <div class="checkbox">
                <label>
                    <input type="checkbox" value="1" name="is_remember">记住我
                </label>
            </div>
            @include("layout.error")
            <button class="btn btn-block btn-primary">登录</button>
            <a href="/user/register" class="btn btn-primary btn-block" type="submit">去注册>></a>
        </form>
    </div>
</body>
</html>