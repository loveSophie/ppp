<?php if (!defined('THINK_PATH')) exit();?>	<div class="content intro-edit">
		<form style="text-align: center;width: 1024px;margin: 0 auto;padding-top: 10px;" action="<?php echo U('admin/intro/save');?>" method="post">
        	<!-- <textarea name="intro" id="intro" style="width:800px;height:500px;text-align: center;"></textarea>  -->
        	<div id="intro" name="intro" style="height: 500px;"></div>
        	<input type="submit" name="提交" style="border: 0;color: #fff;background: #3ca9f4;width: 120px;line-height: 36px;font-size: 14px;margin-top: 10px;">
        </form>
    </div>
    <script type="text/javascript" charset="utf-8">  
	    window.UEDITOR_HOME_URL = "/Public/ueditor/";  
	    $(document).ready(function () {  
			/*UE.getEditor('intro', {  
			  	initialFrameHeight: 500,  
			  	initialFrameWidth: 800,  
			  	serverUrl: "<?php echo U('admin/intro/save_info');?>"  
			}); */
			var ue = UE.getEditor('intro');
		    //异步回调
		    ue.ready(function() {
		        UE.getEditor('intro').execCommand('insertHtml', '<?php echo ($intro["content"]); ?>');
		        ue.setHeight(680);
		    });
			
		 });  
    </script>
</body>
</html>