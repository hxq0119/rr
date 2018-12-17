<?php
namespace app\index\controller;
use think\Controller;
use think\Request;
use think\Db;
class Index2 extends Controller{
    public function index(){
        return $this->fetch('index');
    }
    public function doLogin2()
    {
        $param2 = input('post.');
        if(empty($param['username'])){
            $this->error('用户名不能为空');
        }
        if(empty($param['password'])){
            $this->error('密码不能为空');
        }
        // 验证用户名
        $has2 = db('user')->where('username', $param['username'])->find();
        if(empty($has)){
            $this->error('用户名错误');      
        }
        // dump(session('username'));
        // die;
        
        // 验证密码
        if($has2['password'] != ($param2['password'])){
            $this->error('密码错误');
        }
            
        // dump($has);
        // die;
        // 记录用户登录信息
        
          // 一个小时有效期
        
        session("id", $has2['id']);
        session('username', $has2['username']);
        session('name',$has2['name']);
       
        $this->redirect(url('Personal/index'));
    }
}


