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
    <script type="text/javascript" src="/Public/ueditor/ueditor.config.js"></script>  
    <script type="text/javascript" src="/Public/ueditor/ueditor.all.min.js"></script>  
    <!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->  
    <!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->  
    <script type="text/javascript" src="/Public/ueditor/lang/zh-cn/zh-cn.js"></script>  
    <link href="/Public/css/themes.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="https://cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all"/>
<body>
	<div class="topline">当前登录账户:<?php echo ($username); ?><a href="<?php echo U('admin/passport/logout');?>" class="logout">退出登录</a><a href="<?php echo U('home/index/index');?>" class="home">浏览前台</a></div>
	<ul class="sidebar lists">
		<li class="item">
			<a href="<?php echo U('admin/intro/index');?>">公司简介</a>
		</li>
		<li class="item">
			<a href="<?php echo U('admin/product/index');?>">服务产品</a>
			<ul class="sublists">
				<li class="subitem">
					<a href="">充值</a>
					<a href="">充值基本信息</a>
				</li>
			</ul>
		</li>
		<li class="item">
			<a href="<?php echo U('admin/example/index');?>">成功案例</a>
			<ul class="sublists">
				<li class="subitem">
					<a href="">卡片格式化</a>
					<a href="">清除格式化</a>
				</li>
			</ul>
		</li>
		<li class="item">
			<a href="<?php echo U('admin/message/index');?>">留言管理</a>
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