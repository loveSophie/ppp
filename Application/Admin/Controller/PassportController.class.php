<?php
namespace Admin\Controller;
use Think\Controller;
class PassportController extends Controller {
    public function login(){
        $this->title = '会员登录';
        $this->display();
    }
    public function do_login(){
        if(IS_POST){
            $data['username']=I('post.uname');
            $data['pwd']=I('post.password');
            $info=M('admin')->where($data)->find();
            if($info){
                session('username',$info['username']);  //角色编号
                $res['success'] = '登录成功';
                $res['redirect'] = U('Index/index');
                $this->ajaxReturn($res);
            }else{
                $res['error'] = '登录失败,用户名或密码不正确!';
                $this->ajaxReturn($res);
            }
        }
    }
    public function logout(){
    	session(null);
        /*$this->redirect('passport/login', array(), 3, '退出登录成功');*/
        $this->success('退出登录成功', U('passport/login'), 3);
    }
}