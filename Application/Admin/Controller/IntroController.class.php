<?php
namespace Admin\Controller;
use Think\Controller;
class IntroController extends Controller {
    public function edit(){
    	if(!session('username')){
            $this->success('未登录', U('passport/login'), 3);
            exit();
        }else{
            $this->username = session('username');
        }; 
        $this->title = '公司简介-编辑';
        $intro=M('cpintro')->select();
    	$this->intro = $intro[0];
        $this->display('Menu/index');
        $this->display();
    }
    public function index(){
    	$this->title = '公司简介';
    	$intro=M('cpintro')->select();
    	$this->intro = $intro[0];
        $this->display('Menu/index');
        $this->display();
    }
    public function save(){
    	if(IS_POST){
            $data['content'] = I('post.intro','',false);
            if(get_magic_quotes_gpc()){
                $data['content']=stripslashes($data['content']);//将字符串进行处理
            }
            if(!$data['content']){
            	$this->success('请输入内容', U('intro/edit'), 3);
            	exit();
            };
            $intro=M('cpintro');
            $result = $intro->where('id=1')->save($data);
            if($result){
            	$this->success('保存成功', U('intro/index'), 3);
            }else{
            	$this->success('保存失败', U('intro/edit'), 3);
            }
        }
    }
    public function save_info(){  
        $ueditor_config = json_decode(preg_replace("/\/\*[\s\S]+?\*\//", "", file_get_contents("./Public/Ueditor/php/config.json")), true);  
        $action = $_GET['action'];  
        switch ($action) {  
            case 'config':  
                $result = json_encode($ueditor_config);  
                break;  
                /* 上传图片 */  
            case 'uploadimage':  
                /* 上传涂鸦 */  
            case 'uploadscrawl':  
                /* 上传视频 */  
            case 'uploadvideo':  
                /* 上传文件 */  
            case 'uploadfile':  
                $upload = new \Think\Upload();  
                $upload->maxSize = 3145728;  
                $upload->rootPath = './Public/Uploads/';  
                $upload->exts = array('jpg', 'gif', 'png', 'jpeg');  
                $info = $upload->upload();  
                if (!$info) {  
                    $result = json_encode(array(  
                            'state' => $upload->getError(),  
                    ));  
                } else {  
                    $url = __ROOT__ . "/Public/Uploads/" . $info["upfile"]["savepath"] . $info["upfile"]['savename'];  
                    $result = json_encode(array(  
                            'url' => $url,  
                            'title' => htmlspecialchars($_POST['pictitle'], ENT_QUOTES),  
                            'original' => $info["upfile"]['name'],  
                            'state' => 'SUCCESS'  
                    ));  
                }  
                break;  
            default:  
                $result = json_encode(array(  
                'state' => '请求地址出错'  
                        ));  
                        break;  
        }  
        /* 输出结果 */  
        if (isset($_GET["callback"])) {  
            if (preg_match("/^[\w_]+$/", $_GET["callback"])) {  
                echo htmlspecialchars($_GET["callback"]) . '(' . $result . ')';  
            } else {  
                echo json_encode(array(  
                        'state' => 'callback参数不合法'  
                ));  
            }  
        } else {  
            echo $result;  
        }  
    }  
}