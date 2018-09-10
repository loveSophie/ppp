<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
    <html>
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
    </head>
    <body class="home-index home-example">
        <header>
            <div class="container">
                <a href="<?php echo U('home/index/index');?>" class="logo">Dataism</a>
                <ul class="nav">
                    <li>
                        <a href="<?php echo U('home/index/example');?>" class="active">成功案例</a>
                    </li>
                    <li>
                        <a href="<?php echo U('home/index/product');?>">服务产品</a>
                    </li>
                    <li>
                        <a href="<?php echo U('home/index/intro');?>">公司简介</a>
                    </li>
                    <li>
                        <a href="<?php echo U('home/index/index');?>">首页</a>
                    </li>
                </ul>
            </div>
        </header>
        <div class="product-content">
            <div class="product-lists">
                <?php if(is_array($example)): $i = 0; $__LIST__ = $example;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><a href="<?php echo U('home/index/edetail',array('id'=>$data['id']));?>" class="item">
                        <table>
                            <td width="50%" style="vertical-align: middle;">
                                <span class="title"><?php echo ($data["title"]); ?></span><br/>
                                <span class="brief"><?php echo ($data["brief"]); ?></span><br>
                            </td>
                            <td width="50%" style="text-align: right;vertical-align: middle;">
                                <img src="<?php echo ($data["banner"]); ?>" style="height:200px;max-width: 580px">
                            </td>
                        </table>
                    </a><?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
        </div>
        <div class="part4">
            <div class="container">
                <img src="/Public/images/Dataism.png">
                <div class="words">你的商业智能服务供应商<a href="#" class="contact">联系我们</a></div>
            </div>
        </div>
        <footer class=""></footer>
        <div class="onlinemsg"></div>
    </body>
</html>