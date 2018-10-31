<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>用户注册</title>

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
        <form class="form-signin" action="/user/register" method="POST" style="line-height: 200px">
            {{ csrf_field() }}
            <h3 class="form-signin-heading">请注册</h3>
            <label for="name" class="sr-only">名字</label>
            <input type="text" name="name" id="name" class="form-control" placeholder="名字" required autofocus>
            <label for="email" class="sr-only">邮箱</label>
            <input type="text" name="email" id="email" class="form-control" placeholder="邮箱" required autofocus>
            <label for="password" class="sr-only">密码</label>
            <input type="password" name="password" id="password" class="form-control" placeholder="请输入密码" required>
            <label for="confirmPassword" class="sr-only">确认密码</label>
            <input type="password" name="confirmPassword" class="form-control" placeholder="请输入确认密码" required>

            @include("layout.error")
            <button class="btn btn-primary btn-block" type="submit">注册</button>
        </form>
    </div>
</body>
</html>