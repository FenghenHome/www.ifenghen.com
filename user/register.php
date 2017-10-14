<?php
require_once '../lib/config.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title><?php echo $site_name;  ?></title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="https://cdn.bootcss.com/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://cdn.bootcss.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="../asset/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.bootcss.com/iCheck/1.0.1/skins/square/blue.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://cdn.bootcss.com/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://cdn.bootcss.com/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
<body class="register-page">
<div class="register-box">
    <div class="register-logo">
        <a href="../"><b><?php echo $site_name;  ?></b></a>
    </div>

    <div class="register-box-body">
        <p class="login-box-msg"><a href="../code.php">获取邀请码</a></p>

            <div class="form-group has-feedback">
                <input type="text" id="name" class="form-control" placeholder="昵称"/>
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="text" id="email" class="form-control" placeholder="邮箱"/>
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="password" id="passwd" class="form-control" placeholder="密码"/>
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="password" id="repasswd" class="form-control" placeholder="重复密码"/>
                <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="text" id="code" class="form-control" placeholder="邀请码"/>
                <span class="glyphicon glyphicon-send form-control-feedback"></span>
            </div>


            <div class="form-group has-feedback">
                <button type="submit" id="reg" class="btn btn-primary btn-block btn-flat">同意服务条款并提交注册</button>
            </div>
            
            <div id="msg-success" class="alert alert-info alert-dismissable" style="display: none;">
                <button type="button" class="close" id="ok-close" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-info"></i> 成功!</h4>
                <p id="msg-success-p"></p>
            </div>
    
            <div id="msg-error" class="alert alert-warning alert-dismissable" style="display: none;">
                <button type="button" class="close" id="error-close" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-warning"></i> 出错了!</h4>
                <p id="msg-error-p"></p>
            </div>

        <a href="login.php" class="text-center">已经注册？请登录</a>
    </div><!-- /.form-box -->
</div><!-- /.register-box -->

<!-- jQuery 2.1.3 -->
<script src="https://cdn.bootcss.com/jquery/3.1.1/jquery.min.js"></script>
<!-- Bootstrap 3.3.2 JS -->
<script src="https://cdn.bootcss.com/twitter-bootstrap/3.3.7/js/bootstrap.min.js" type="text/javascript"></script>
<!-- iCheck -->
<script src="https://cdn.bootcss.com/iCheck/1.0.2/icheck.min.js" type="text/javascript"></script>
<script>
    $(function () {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' // optional
        });
        // $("#msg-error").hide(100);
        // $("#msg-success").hide(100);

    });
</script>
<script>
    $(document).ready(function(){
         function register(){
            $.ajax({
                type:"POST",
                url:"_reg.php",
                dataType:"json",
                data:{
                    email: $("#email").val(),
                    name: $("#name").val(),
                    passwd: $("#passwd").val(),
                    repasswd: $("#repasswd").val(),
                    code: $("#code").val(),
                    agree: $("#agree").val()
                },
                success:function(data){
                    if(data.ok){
                        $("#msg-error").hide(10);
                        $("#msg-success").show(100);
                        $("#msg-success-p").html(data.msg);
                        window.setTimeout("location.href='login.php'", 2000);
                    }else{
                        $("#msg-error").hide(10);
                        $("#msg-error").show(100);
                        $("#msg-error-p").html(data.msg);
                    }
                },
                error:function(jqXHR){
                    $("#msg-error").hide(10);
                    $("#msg-error").show(100);
                    $("#msg-error-p").html("发生错误："+jqXHR.status);
                    // 在控制台输出错误信息
                    console.log(removeHTMLTag(jqXHR.responseText));
                }
            });
        }
        $("html").keydown(function(event){
            if(event.keyCode==13){
                register();
            }
        });
        $("#reg").click(function(){
            register();
        });
        $("#ok-close").click(function(){
            $("#msg-success").hide(100);
        });
        $("#error-close").click(function(){
            $("#msg-error").hide(100);
        });
    })
</script>
<script type="text/javascript">
            // 过滤HTML标签以及&nbsp 来自：http://www.cnblogs.com/liszt/archive/2011/08/16/2140007.html
            function removeHTMLTag(str) {
                    str = str.replace(/<\/?[^>]*>/g,''); //去除HTML tag
                    str = str.replace(/[ | ]*\n/g,'\n'); //去除行尾空白
                    str = str.replace(/\n[\s| | ]*\r/g,'\n'); //去除多余空行
                    str = str.replace(/&nbsp;/ig,'');//去掉&nbsp;
                    return str;
            }
</script>
</body>
</html>
