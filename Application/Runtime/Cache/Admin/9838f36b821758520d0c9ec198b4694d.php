<?php if (!defined('THINK_PATH')) exit();?>	<div class="content product-edit">
		<form action="<?php echo U('admin/example/save');?>" method="post" enctype="multipart/form-data">
			<h1>编辑</h1>
			<input type="hidden" name="id" value="<?php echo ($example["id"]); ?>">
			<div class="ipt-group">
				<label>产品标题:</label>
				<input name="title" type="text" placeholder="请输入标题" value="<?php echo ($example["title"]); ?>">
			</div>
			<div class="ipt-group">
				<label>产品简介:</label>
				<textarea name="brief" type="text" placeholder="简介"><?php echo ($example["brief"]); ?></textarea>
			</div>
			<div class="ipt-group">
				<label>上架下架:</label>
				<?php if($example["active"] == 1): ?><input type="radio" name="online" value="1" id="online1" style="width: 16px;height: 16px;" checked>上架
					<input type="radio" name="online" value="0" id="online1" style="width: 16px;height: 16px;">下架
				<?php else: ?>
					<input type="radio" name="online" value="1" id="online1" style="width: 16px;height: 16px;">上架
					<input type="radio" name="online" value="0" id="online1" style="width: 16px;height: 16px;" checked>下架<?php endif; ?>
			</div>
			<div class="ipt-group">
				<label>列表图片:</label>
				<input type='file'  name='pic' accept="image/*" multiple="multiple" style="display: none;">
				<span class="addpic" style="display: inline-block;width: 60px;height: 60px;background: rgba(0,0,0,0.2);text-align: center;line-height: 60px;color: #fff;font-size: 24px;cursor: pointer;">+</span>
			</div>
			<?php if($product.banner): ?><input type="hidden" name="banner" value="<?php echo ($example["banner"]); ?>"><?php endif; ?>
			<div class="upload-img">
				<img id="imgshow" src="<?php echo ($example["banner"]); ?>">
			</div>
			<h3>正文内容</h3>
        	<div id="prod" name="prod" style="height:320px; "></div>
        	<input type="submit" name="提交" id="submit">
        </form>
    </div>
    <script type="text/javascript" charset="utf-8">  
	    window.UEDITOR_HOME_URL = "/Public/ueditor/";  
	    $(document).ready(function () {  
			var ue = UE.getEditor('prod');
		    //异步回调
		    ue.ready(function() {
		        UE.getEditor('prod').execCommand('insertHtml', '<?php echo ($example["content"]); ?>');
		        ue.setHeight(680);
		    });
		    $('input[name="pic"]').change(function(){
				$("#imgshow").attr("src",URL.createObjectURL($(this)[0].files[0]));
				$('input[name="banner"]').val('');
		    });
		    $('.addpic').on('click',function(){
		    	$('input[name="pic"]').trigger('click');
		    })
		 });  
    </script>
</body>
</html>