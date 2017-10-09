<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <title><?php echo $site_name; ?></title> 
    <!-- CSS fonts.cat.net -->
    <link href="//fonts.cat.net/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://cdn.bootcss.com/materialize/0.97.8/css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="asset/materialize/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
<nav class="light-blue lighten-1" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="/" class="brand-logo"><?php echo $site_name; ?></a>
        <ul class="right hide-on-med-and-down">
            <li><a href="index.php">首页</a></li>
            <li><a href="code.php">邀请码</a></li>
            <li><a href="user">用户中心</a></li>
        </ul>

        <ul id="nav-mobile" class="side-nav">
            <li><a href="index.php">首页</a></li>
            <li><a href="code.php">邀请码</a></li>
            <li><a href="user">用户中心</a></li>
        </ul>
    </div>
</nav>

