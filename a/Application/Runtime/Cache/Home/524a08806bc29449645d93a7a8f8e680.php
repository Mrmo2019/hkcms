<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>新用户注册</title>
<!-- Tell the browser to be responsive to screen width -->
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<!-- Bootstrap 3.3.4 -->
<link href="/a/Public/adminlte/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<!-- Font Awesome Icons -->
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<!-- Theme style -->
<link href="/a/Public/adminlte/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
<!-- iCheck -->
<link href="/a/Public/adminlte/plugins/iCheck/square/blue.css" rel="stylesheet" type="text/css" />
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<style type="text/css">
body{font-family:"Microsoft Yahei",verdana, helvetica, arial, sans-serif;}
.verify{position:absolute;top:0px;right:0px;cursor:pointer;}
</style>
<body class="register-page">
<div class="register-box">
    <div class="register-logo">
        <a href="../../index2.html"><b>注册</b>系统</a>
    </div>

    <div class="register-box-body">
        <p class="login-box-msg">注册一个新用户</p>
        <form action="/a/index.php/Home/Login/register.html" method="post">
            
            <div class="form-group has-feedback">
                <input type="text" name="username" class="form-control" placeholder="用户名" />
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="password" name="password" class="form-control" placeholder="密码" />
                <span class="glyphicon glyphicon-credit-card form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="password" name="repassword" class="form-control" placeholder="确认密码" />
                <span class="glyphicon glyphicon-check form-control-feedback"></span>
            </div>
            
            <div class="row">
                <div class="col-xs-8">
                    <div class="checkbox icheck">
                        <label>
                            <input type="checkbox" name="agree" value="1"> 我同意 <a href="#">网站安全协议</a>
                        </label>
                    </div>
                </div><!-- /.col -->
                <div class="col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">点击注册</button>
                </div><!-- /.col -->
            </div>
        </form>
        <a href="login.html" class="text-center">我已经注册了账户</a>
    </div><!-- /.form-box -->
</div><!-- /.register-box -->

<!-- jQuery 2.1.4 -->
<script src="/a/Public/adminlte/plugins/jQuery/jQuery-2.1.4.min.js" type="text/javascript"></script>
<!-- Bootstrap 3.3.2 JS -->
<script src="/a/Public/adminlte/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<!-- iCheck -->
<script src="/a/Public/adminlte/plugins/iCheck/icheck.min.js" type="text/javascript"></script>
<script>
    $(function () {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' // optional
        });
    });
</script>
</body>
</html>