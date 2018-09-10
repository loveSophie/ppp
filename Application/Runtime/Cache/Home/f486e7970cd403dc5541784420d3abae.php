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
	<div class="topline">当前登录账户:<?php echo ($username); ?><a href="/index.php/Home/Passport/logout" class="logout">退出登录</a></div>
	<ul class="sidebar lists">
		<li class="item">
			<a href="<?php echo U('admin/intro/edit');?>">公司简介</a>
		</li>
		<li class="item">
			<a href="">服务产品</a>
			<ul class="sublists">
				<li class="subitem">
					<a href="">充值</a>
					<a href="">充值基本信息</a>
				</li>
			</ul>
		</li>
		<li class="item">
			<a href="">成功案例</a>
			<ul class="sublists">
				<li class="subitem">
					<a href="">卡片格式化</a>
					<a href="">清除格式化</a>
				</li>
			</ul>
		</li>
		<li class="item">
			<a href="">留言管理</a>
			<ul class="sublists">
				<li class="subitem">
					<a href="">数据库备份</a>
					<a href="">数据库导入</a>
					<a href="">系统日志</a>
				</li>
			</ul>
		</li>
	</ul>
	<script type="text/javascript">
		(function(){
			/*$('.sidebar .item>a').on('click',function(e){
				e.preventDefault();
				$(this).parent().find('.sublists').toggle();
			})*/
		})()
	</script>