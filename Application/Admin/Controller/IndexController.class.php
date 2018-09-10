<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        if(!session('username')){
            $this->success('未登录', U('passport/login'), 3);
            exit();
        }else{
            $this->username = session('username');
        }; 
        $this->title = '后台管理首页';
        $this->welcome = 'hello tp';
        $this->display('Menu/index');
        $this->display();
    }
    public function hello(){
        echo 'hello';

    }
    public function a(){
    	$data['status']  = 1;
		$data['content'] = 'content';
		$this->ajaxReturn($data);
    }
}