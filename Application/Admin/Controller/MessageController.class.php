<?php
namespace Admin\Controller;
use Think\Controller;
class MessageController extends Controller {
    protected function _initialize(){
        if(!session('username')){
            $this->success('未登录', U('passport/login'), 3);
            exit();
        }else{
            $this->username = session('username');
        }; 
    }
    public function index(){
        $this->title = '留言管理-列表';
        $message=M('msg')->select();
        $this->message = $message;
        $this->display('Menu/index');
        $this->display();
    }
    
}