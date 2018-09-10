<?php if (!defined('THINK_PATH')) exit();?>
	<div class="content index">
        <h1>欢迎进入网站管理后台</h1>
        <div id="load"></div>
    </div>
    <script type="text/javascript">
        var shk3_url = "http://api.jisuapi.com/caipiao/history?appkey=5c805d14e9218506&caipiaoid=105&issueno=&start=&num=1";
        var loadshk3data = function(){
            $.ajax(shk3_url, {
                data: {
                },
                dataType: 'jsonp',
                crossDomain: true,
                success: function(re) {
                    console.log(re);
                    var issueno1 = re.result.list[0].issueno.substring(2,re.result.list[0].issueno.length).split('-')[0];
                    var issueno2 = re.result.list[0].issueno.substring(2,re.result.list[0].issueno.length).split('-')[1];
                    var issueno = issueno1 +issueno2;
                    var numArray = re.result.list[0].number.split(' ');
                    var num1 = numArray[0];
                    var num2 = numArray[1];
                    var num3 = numArray[2];
                    $.post('../../Home/game/shk3',{'issueno':issueno,'num1':num1,'num2':num2,'num3':num3},function(data){
                        console.log(data);
                    })
                }
            });
        }
        var _init = function(){
            setInterval(loadshk3data,10*60*1000);
        };
        loadshk3data();
        _init();
        
    </script>
</body>
</html>