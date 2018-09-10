<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $this->title = '首页';
        $this->display();
    }
    public function intro(){
        $this->title = '公司简介';
        $intro=M('cpintro')->select();
    	$this->intro = $intro[0];
        $this->display();
    }
    public function product(){
        $this->title = '产品服务';
        $product=M('product')->where('active=1')->select();
        $this->product = $product;
        $this->display();
    }
    public function example(){
        $this->title = '成功案例';
        $example=M('example')->where('active=1')->select();
        $this->example = $example;
        $this->display();
    }
    public function pdetail($id=''){
        $this->title = '产品详情';
        if($id){
            $product=M('product')->where('id='.$id)->select();
            if($product[0]){
                $this->product = $product[0];
            }else{
                $this->success('页面不存在', U('index/index'), 3);
                exit();
            }
        }else{
            $this->success('页面不存在', U('index/index'), 3);
            exit();
        }
        $this->display();
    }
    public function edetail($id=''){
        $this->title = '成功案例详情';
        if($id){
            $example=M('example')->where('id='.$id)->select();
            if($example[0]){
                $this->example = $example[0];
            }else{
                $this->success('页面不存在', U('index/index'), 3);
                exit();
            }
        }else{
            $this->success('页面不存在', U('index/index'), 3);
            exit();
        }
        $this->display();
    }
    public function message(){
    	$this->title = '在线留言';
    	$this->display();
    }
    public function msgsave(){
    	if(IS_POST){
            $data['uname'] = I('post.uname');
            $data['phone'] = I('post.phone');
            $data['email'] = I('post.email');
            $data['issue'] = I('post.issue');
            if(!$data['uname']||!$data['phone']||!$data['email']||!$data['issue']){
                $re['error']  = "信息不完整";
                $this->ajaxReturn($re);
            };
            $message=M('msg');
            $result = $message->add($data);
            if($result){
            	$re['success']  = "留言成功";
            	$re['redirect']  = U('index/index');
                $this->ajaxReturn($re);
            }else{
                $re['error']  = "留言失败，请稍后重试";
                $this->ajaxReturn($re);
            }
        }
    }
}