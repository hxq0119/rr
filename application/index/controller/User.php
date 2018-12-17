<?php
namespace app\index\controller;
use think\Controller;
use think\Request;
use think\Db;
use think\Model;
class User extends Model{
    public function profile(){
        return $this->hasOne('rr_user',"username",'name');
    }
    public static function getUser($name){
        return self::with('profile')->find($name);
    }
}