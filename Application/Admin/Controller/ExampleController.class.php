<?php
namespace Admin\Controller;
use Think\Controller;
class ExampleController extends Controller {
    protected function _initialize(){
        if(!session('username')){
            $this->success('未登录', U('passport/login'), 3);
            exit();
        }else{
            $this->username = session('username');
        }; 
    }
    public function edit($id=''){
        $this->title = '案例-编辑';
        $example=M('example')->select();
        if($id){
            $example=M('example')->where('id='.$id)->select();
            $this->example = $example[0];
        }else{
            $this->example = '';
        }
        $this->display('Menu/index');
        $this->display();
    }
    public function index(){
        $this->title = '产品服务-列表';
        $example=M('example')->select();
        $this->example = $example;
        $this->display('Menu/index');
        $this->display();
    }
    public function save(){
    	if(IS_POST){
            $data['content'] = I('post.prod','',false);
            if(get_magic_quotes_gpc()){
                $data['content']=stripslashes($data['content']);//将字符串进行处理
            }
            $data['title'] = I('post.title');
            $data['brief'] = I('post.brief');
            $data['active'] = I('post.online');
            $data['id'] = I('post.id');
            if(!$data['content']||!$data['title']||!$data['title']||!$data['brief']){
                $this->success('信息未填写完整', U('example/edit'), 3);
                exit();
            };
            if(I('post.banner')){
                $data['banner'] = I('post.banner');
            }else{
                if($_FILES['pic']){
                    $upload = new \Think\Upload();  
                    $upload->maxSize = 3145728;  
                    $upload->rootPath = './Public/Uploads/';  
                    $upload->exts = array('jpg', 'gif', 'png', 'jpeg');  
                    $info = $upload->upload();  
                    if (!$info) {  
                        $result = array(  
                                'state' => $upload->getError(),  
                        );  
                    } else {  
                        $url = __ROOT__ . "/Public/Uploads/" . $info["pic"]["savepath"] . $info["pic"]['savename'];  
                        $result =array(  
                                'url' => $url,  
                                'title' => htmlspecialchars($_POST['pictitle'], ENT_QUOTES),  
                                'original' => $info["pic"]['name'],  
                                'state' => 'SUCCESS'  
                        );  
                    } 
                }else{
                    $this->success('请上传图片', U('example/edit'), 3);
                    exit();
                };
                $data['banner'] =  $result['url'];
            }
            $example=M('example');
            if($data['id']){
                $result = $example->where('id='.$data['id'])->save($data);
            }else{
                $result = $example->add($data);
            }
            if($result){
                $this->success('保存成功', U('example/index'), 3);
            }else{
                $this->success('保存失败', U('example/edit'), 3);
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