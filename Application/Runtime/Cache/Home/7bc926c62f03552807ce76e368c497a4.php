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
    <body class="home-index home-message">
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
        <div class="message-content">
            <div class="container">
                <div class="title">意见反馈</div>
                <div class="desc">欢迎对我们的工作作出评价，同时也希望给出宝贵意见！</div>
                <form action="<?php echo U('home/index/msgsave');?>" method="post">
                    <div class="ipt-group">
                        <label>你的名字</label>
                        <input type="text" name="uname">
                    </div>
                    <div class="ipt-group">
                        <label>手机号码</label>
                        <input type="text" name="phone">
                    </div>
                    <div class="ipt-group">
                        <label>邮箱</label>
                        <input type="text" name="email">
                    </div>
                    <div class="ipt-group">
                        <label style="vertical-align: top;line-height: 28px;">您的需求</label>
                        <textarea name="issue"></textarea>
                    </div>
                    <div>
                        <span class="btn-submit">提交</span>
                    </div>
                </form>
            </div>
        </div>
        <div class="part4">
            <div class="container">
                <img src="/Public/images/Dataism.png">
                <div class="words">你的商业智能服务供应商<a href="<?php echo U('home/index/message');?>" class="contact">联系我们</a></div>
            </div>
        </div>
        <footer class=""></footer>
        <a href="<?php echo U('home/index/message');?>" class="onlinemsg"></a>
        <script type="text/javascript">
            (function(){
                $('.btn-submit').on('click',function(e){
                    e.preventDefault();
                    e.stopPropagation();
                    var _url =  $('form').attr("action");
                    $.post(_url,$('form').serialize(),function(re){
                        console.log(re);
                        if(re.error){
                            alert(re.error);
                        };
                        if(re.success){
                            alert(re.success);
                        };
                        if(re.redirect){
                            location.href = re.redirect;
                        }
                    })
                })
            })()
        </script>
    </body>
</html>