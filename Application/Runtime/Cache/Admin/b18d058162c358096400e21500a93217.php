<?php if (!defined('THINK_PATH')) exit();?>	<div class="content product-list">
		<h1 style="text-align: center;width: 800px;margin: 0 auto;margin-top:20px;margin-bottom:20px;position: relative;">成功案例列表
		<a href="<?php echo U('admin/example/edit');?>" style="padding: 5px 8px;background:#9bb7f6;color: #fff;display: inline-block;width: 60px;text-align: center;text-decoration: none;border-radius: 4px;position: absolute;font-size: 16px;right: 12px;top: 5px;">新增</a></h1>
		<div class="lists" style="width: 800px;margin: 0 auto;border:1px solid #eee;border-radius: 8px;padding: 12px 0;">
			<?php if(is_array($example)): $i = 0; $__LIST__ = $example;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><div class="item" style="border-bottom:1px solid #ddd;padding: 0 12px;padding-right:80px;position: relative;">
					<?php echo ($data["title"]); ?><br/>
					<?php echo ($data["brief"]); ?><br>
					<img src="<?php echo ($data["banner"]); ?>" style="width: 60px;">
					<div style="position: absolute;right: 12px;top: 12px;">
						<a href="<?php echo U('admin/example/edit',array('id'=>$data['id']));?>" style="padding: 5px 8px;background:#9bb7f6;color: #fff;display: inline-block;width: 60px;text-align: center;text-decoration: none;border-radius: 4px;">编辑</a>
					</div>
				</div><?php endforeach; endif; else: echo "" ;endif; ?>
		</div>
	</div>
</body>
</html>