<?php if (!defined('THINK_PATH')) exit();?>		<div class="content">
			<div class="intro-index" style="text-align: center;">
				<a href="<?php echo U('admin/intro/edit');?>" style="border: 0;color: #fff;background: #3ca9f4;width: 120px;line-height: 36px;font-size: 14px;margin-top: 10px;display: inline-block;text-align: center;border-radius: 4px;">编辑</a>
				<div id="ue-html">
					<?php echo ($intro["content"]); ?>
				</div>
			</div>
		</div>
		
	</body>
</html>