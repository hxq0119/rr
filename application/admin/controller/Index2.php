<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace app\admin\controller;
use think\Controller;
//use think\Request;
//use think\Db;
//use think\css;
//use think\img;
//use think\js;
class Index2 extends Controller{
    public function index(){
        return $this->fetch('Index2');
    }
}