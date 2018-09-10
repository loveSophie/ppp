<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html lang="zh-CN">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="format-detection" content="telephone=no">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <title><?php echo ($title); ?></title>
    <script src="https://cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
    <link href="/Public/css/themes.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="https://cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all"/>
<body>
	<div class="container login">
        <h1 class="title">管理员登录</h1>
        <form action="/index.php/Home/Passport/do_login" method="post">
            <div class="ipt-group">
                <span class="label">用户名：</span>
                <input type="text" name="uname" placeholder="请输入用户名">
            </div>
            <div class="ipt-group">
                <span class="label">密码：</span>
                <input type="password" name="password" placeholder="请输入密码">
            </div>
            <button type="submit">登录</button>
        </form>   
    </div>
    <script type="text/javascript">
        $('button[type="submit"]').on('click',function(e){
            e.preventDefault();
            $.post($('form').attr('action'),$('form').serialize(),function(re){
                if(re.redirect){
                    location.href = re.redirect;
                }else if(re.error){
                    alert(re.error);
                };
            })
        })
    </script>
</body>
</html>