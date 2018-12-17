<?php
namespace app\index\controller;
use think\Controller;
use think\Request;
use think\Db;
use think\Model;
class Profile extends Model{
    public function index(){
        return $this->hasMany('user','username','name');
    }
}


