<?php if (!defined('THINK_PATH')) exit();?>	<div class="content msg-list">
		<h1 style="text-align: center;width: 800px;margin: 0 auto;margin-top:20px;margin-bottom:20px;position: relative;">留言列表
		<div class="lists" style="width: 800px;margin: 0 auto;border:1px solid #eee;border-radius: 8px;padding: 12px 0;">
			<?php if(is_array($message)): $i = 0; $__LIST__ = $message;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><div class="item" style="border-bottom:1px solid #ddd;padding:12px;padding-right:80px;position: relative;font-size: 12px;font-weight: 400;text-align: left;">
					姓名：<?php echo ($data["uname"]); ?>&nbsp;&nbsp;
					手机：<?php echo ($data["phone"]); ?>&nbsp;&nbsp;
					邮箱：<?php echo ($data["email"]); ?><br>
					留言内容：<div><?php echo ($data["issue"]); ?></div>
				</div><?php endforeach; endif; else: echo "" ;endif; ?>
		</div>
	</div>
</body>
</html>