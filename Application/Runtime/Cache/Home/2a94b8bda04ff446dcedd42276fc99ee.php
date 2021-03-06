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
    <body class="home-index">
        <header>
            <div class="container">
                <a href="<?php echo U('home/index/index');?>" class="logo">Dataism</a>
                <ul class="nav">
                    <li>
                        <a href="<?php echo U('home/index/example');?>">成功案例</a>
                    </li>
                    <li>
                        <a href="<?php echo U('home/index/product');?>">服务产品</a>
                    </li>
                    <li>
                        <a href="<?php echo U('home/index/intro');?>">公司简介</a>
                    </li>
                    <li>
                        <a href="<?php echo U('home/index/index');?>" class="active">首页</a>
                    </li>
                </ul>
                <div class="banner-info">
                    <span class="name">百黑信息您值得信赖的软件外包企业</span><br>
                    <span class="desc">致力于为客户提供世界领先的信息技术、研发和业务流程外包服务。</span><br>
                    <a href="<?php echo U('home/index/product');?>" class="product">服务产品</a>
                </div>
            </div>
        </header>
        <div class="part1">
            <div class="container">
                <h1>你是否经常为此苦恼？</h1>
                <h4>企业经常遇到的问题</h4>
                <ul>
                    <li>
                        <i class="icon"></i>
                        <div class="title">数据无法整合</div>
                        <div class="line1">CRM、ERP等业务系统数据无法打通各部门线<br>数据完全独立<br>形成“数据孤岛”,管理者无法全局分析</div>
                    </li>
                    <li>
                        <i class="icon"></i>
                        <div class="title">依赖低效手工数据</div>
                        <div class="line1">业务快速增长数据分析需求旺盛<br>团队手工“跑”表，效率低下，错过业务最佳决策时机<br>部门的分析手段和工具不专业</div>
                    </li>
                    <li>
                        <i class="icon"></i>
                        <div class="title">系统和业务需求不匹配</div>
                        <div class="line1">数据分析人员导出的报表、元数据和业务人员的需求存在脱节<br>懂“技术”的人员不懂“业务”懂“业务”的人员又不懂“技术” </div>
                    </li>
                    <li>
                        <i class="icon"></i>
                        <div class="title">数据安全无法保证 </div>
                        <div class="line1">体系性差，可泄密环节多<br>公司的重要数据和信息无法保证 <br>系统对于安全管理的设计较为薄弱，容易受到黑客和木马的攻击。</div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="part2">
            <div class="container">
                <h1>为你解决，更挖掘商业潜能</h1>
                <h4>大数据挖掘商业潜能</h4>
                <ul>
                    <li>
                        <i class="icon"></i>
                        <div class="title">数据整合</div>
                        <div class="line1">破除各个部门间的数据孤岛，将分散的数据收集整合，纳入统一的技术平台。当数据孤岛的局限性被打破，大数据的价值、统一性、同步性等特点才能真正得以体现
                        </div>
                    </li>
                    <li>
                        <i class="icon"></i>
                        <div class="title">精准营销</div>
                        <div class="line1">通过对用户的浏览、分享、购买等行为进行分析，根据消费行为、习惯绘制“用户画像” 。对不同的用户分类进行精准营销。进而降低的营销推广成本，获得较高的消费者满意度和销量</div>
                    </li>
                    <li>
                        <i class="icon"></i>
                        <div class="title">降低成本</div>
                        <div class="line1">通过预测和监控的方式，使得采购、生产、仓储、物流等等环节的损耗和支出降低到最小值，从而通过预先干涉降低成本</div>
                    </li>
                    <li>
                        <i class="icon"></i>
                        <div class="title">提升收入</div>
                        <div class="line1">通过大数据寻找新的市场和商机、推动用户的重复销售、缩短对客户和产品的研究时间时间、迅速制定、调优策略以进行市场营销，在活动发布以前对活动效果进行预测</div>
                    </li>
                    <div class="progress"></div>
                    <span class="product-btn">服务产品</span>
                </ul>
            </div>
        </div>
        <div class="part3">
            <div class="container">
                <h1>在你的行业，专为你打造</h1>
                <h4>深刻理解客户的需求，增进商业智能化程度</h4>
                <ul>
                    <li>
                        <div class="title">成熟的BMP框架</div>
                        <div class="line1">
                            兼容多平台、多数据格式的数据管理平台。无论是Excel、SQL、ERP、SAP皆可以兼容。并且高效，利用最先进的Hadoop、Spark解决方案，实现高速存储、高速运算。从而实现破除数据孤岛、打通各个业务部门，贯穿整个公司。
                        </div>
                    </li>
                    <li>
                        <div class="title">高度灵活的数据可视化平台</div>
                        <div class="line1">
                            多种数据可视化软件并行的平台，直联数据仓库，使用整合清晰后的标准数据，省去了以往手工调整格式、数据清晰、人工加载的过程。快速、稳定的实现数据展现、完胜Excel等传统软件
                        </div>
                    </li>
                    <li>
                        <div class="title">专业资深的分析能力 </div>
                        <div class="line1">
                            基于跨行业、多领域、长时间累积的业务知识和经验，提炼出了有效的“数据分析方法论”和“行业数据模型”，能够在整个项目实施过程中严格把控数据的高效性、安全性和严整性。探知和挖掘客户的业务诉求，解决实际的业务难题，帮助客户提升商业智能。进而提升企业的数据决策能力。
                        </div>
                    </li>
                    <li>
                        <div class="title">系统化规避风险 </div>
                        <div class="line1">
                            整个数据平台部署在客户的服务器上，任何操作都需要授权。系统高度集成，避免了多环节造成的外漏风险。严格把控数据的出入口，并进行机密。对数据的可视化进行数据管控，监控账户的登录情况，并且禁止外网接入。多重手段保障了数据的安全性，防止信息泄密。
                        </div>
                    </li>
                    <span class="example-btn">成功案例</span>
                    <img src="/Public/images/adv.png" style="width: 100%;">
                </ul>
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
    </body>
</html>