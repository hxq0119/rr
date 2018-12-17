<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:63:"D:\www\PHP5.0\public/../application/index\view\index\index.html";i:1539235484;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>人人食品安全培训考核网</title>
    <link rel="icon" href="http://www.ceshi.com/static/index/imags/icon.ico" type="image/png"/>
    <link type="text/css" rel="stylesheet" href="http://www.ceshi.com/static/index/css/jquery.fullpage.css">
    <link type="text/css" rel="stylesheet" href="http://www.ceshi.com/static/index/css/lunbo.css">
    <!-- <link rel="stylesheet" href="./js/luobo.js"> -->
    <link rel="stylesheet" href="http://www.ceshi.com/static/index/css/donghua.css">
    <!-- <link type="text/css" rel="stylesheet" href="../jigsaw/jigsaw.css"> -->
    <link rel="stylesheet" href="http://www.ceshi.com/static/index/font_dvzf0c1l41m/iconfont.css">
    <script src="http://www.ceshi.com/static/index/js/jquery.min.js"></script>
    <style>
        *{
    margin: 0;
    padding: 0;
}
.w{
    width: 1280px;
    margin: 0 auto;
}
.Daohang{
    width: 100%;
    background-color: #fff;
}
.beijin{
    overflow: hidden;
}
.logo{
    width: 20%;
    height: 74px;
    background-color: #fff;
    float: left;
    line-height: 7;
}
.Navigation{
    width: 80%;
    height: 74px;
    background-color: #fff;
    float: left;
}
.Navigation li{
    float: left;
    list-style: none;
    margin-right: 5px;
    text-align: center;
    line-height: 74px;
    width: 130px;
    height: 69px;
}
.Navigation li a{
  display: inline-block;
  width: 130px;
  height: 60px;
}
.Navigation li:hover hr{
  animation: move 1s;
  -webkit-animation-fill-mode: both;
}
.Navigation hr{
    position: absolute;
    border: 0;
    /* width: 130px; */
    height: 5px;
    background-color: #349ce4;
    border-radius: 5px;
}
@keyframes move {
  0%{width: 0px}
  100% {width: 130px}
}
.Navigation li:hover{
  color: #349ce4;
}
.Navigation li:hover a {
  color: #349ce3;
}
.Navigation li:hover hr{
  background-color: #349ce4;
}
.Navigation li:nth-child(1){
    margin-left: 200px;
}
.Navigation li:nth-child(6){
    margin-right: 0;
}
.Navigation li a{
    color: #34352c;
    font-size: 18px;
}
/* .Navigation li:nth-child(1) a{
  color: #fff;
} */
.Navigation li a{
  text-decoration: none;
}
.ziti{
  color: #fff;
}
/* .bianhuan{ 
  background-color: #349ce4;
} */
/* .silder {
    position: relative;
    width: 100%;
    height: 663px;
    background-color: #f60;
    position: relative;
}
.img-item{
		position: absolute;
		width: 217px;
		height: 100%;
		background-color: #f10;
		transition: all 1.5s;
		设置子元素在3D空间中呈现
		transform-style: preserve-3d;
	}
  .img{
		width: 100%;
		height: 100%;
		position: absolute;
		background-size: cover;
	}
  .img:nth-child(1){
    background: url(./imags/lunbo_1.png) no-repeat;
    background-size: 1519px 663px;
		transform: rotateX(0deg) translateZ(331.5px);
	}
	.img:nth-child(2){
    background: url(./imags/lunbo_2.png) no-repeat;
    background-size: 1519px 663px;
		transform: rotateX(-90deg) translateZ(331.5px);
	}
	.img:nth-child(3){
    background: url(./imags/lunbo_3.png) no-repeat;
    background-size: 1519px 663px;
		transform: rotateX(-180deg) translateZ(331.5px);
	}
	.img:nth-child(4){
    background: url(../imags/lunbo_1.png) no-repeat;
    background-size: 1519px 663px;
		transform: rotateX(-270deg) translateZ(331.5px);
	}
 */
 .Land{
    width: 300px;
    height: 350px;
    background-color: #ffff;
    position: absolute;
    top: 110px;
    right: 120px;
    background: rgba(255, 255, 255, 0.3);
    border-radius: 15px;
}
.Land span{
    font-size: 14px;
    color: hotpink;
}
.Land table input{
    outline:none;
    background-color: rgba(255,255,255,.6);
    color:rgba(79,79,79);
    height: 34px;
    font-size: 14px;
    width: 250px;
    border: 0px solid #ccc;
    border-radius: 10px;
}
.table{
    width: 250px;
    height: 250px;
    margin-left: 25px;
}
.Userlogin span{
  font-size: 30px;
  color: #000;
}
.title1{
  height: 160px;
  position: relative;
}
.title1 span:nth-child(1){
  font-family:Raleway;
  font-size:40px;
  font-weight:normal;
  font-style:normal;
  color:#333333;
  padding:0 0 3px 0;
  position: absolute;
  bottom: 20%;
  left: 560px;
}
.title1 span:nth-child(2){
  font-family:	Microsoft JhengHei;
  font-size:16px;
  font-weight:normal;
  font-style:normal;
  padding:0 0 3px 0;
  position: absolute;
  bottom: 0;
  right: 0;
}
.title1 span a{
  text-decoration: none;
  background: linear-gradient(to right, red, blue);
  -webkit-background-clip: text;
  color: transparent;
}
.Kecheng{
  height: 610px;
}
.Curriculum{
  overflow: hidden;
  position: relative; 
}
.Curriculum div{
  width: 420px;
  height: 220px;
  background-color: #DDDDDD;
  float: left; 
  margin-right: 10px;
  margin-top: 20px;
}
.Curriculum div:nth-child(3){
  margin-right: 0;
}
.gengduo{
    position:  absolute;
    width: 110px;
    height:  50px;
    bottom: -550px;
    left: 705px;
    border: 1px solid #dddddd;
    line-height:  50px;
    text-align:  center;
    opacity: 0;
}
.gengduo a{
  font-size: 18px;
  text-decoration: none;
  color: #349ce4;
}
.shizi{
  background-color: #f4f4f4;
}

.TeacherStrength{
  overflow: hidden;
}
.TeacherStrength li{
  width: 410px;
  height: 290px;
  background-color: #f4f4f4;
  float: left;
  margin-right: 20px;
  margin-bottom: 90px;
  margin-top: 70px;
  opacity: 0;
  list-style: none;
}
.TeacherStrength div{
  text-align: center;
}
.TeacherStrength div a{
 
  width: 410px;
  height: 220px;
}
.TeacherStrength div a img{
  display: inline-block;
}
.TeacherStrength li:nth-child(3){
  margin-right: 0;
}
.xinwen{
  height: 784px;
  background-color: #fff;
}
.Journalism{
  overflow: hidden;
}
.Journalism div img{
  width: 410px;
}
.Journalism div:nth-child(1){
  /* float: left; */
  margin-top: 140px;
}
.Journalism div:nth-child(2){
  /* float: left; */
  margin-top: 0;
}
.Journalism div:nth-child(3){
  /* float: left; */
  margin-right: 0;
  margin-top:140px;
}
/* .Dibu{
  width: 100%;
  background-color: #f4f4f4;
} */
/* .Division{
  width: 200px;
  height: 5px;
  background-color: hotpink;
} */
.Division{
  width: 100%;
  height: 20px;
  /* background-color: #000; */
  position: relative;
}
.Division div{
  width: 80px;
  height: 4px;
  background-color: hotpink;
  border-radius: 5px;
  position: absolute;
  top: 40px;
  left: 724px;
}
.anniu span{
  font-size: 13px;
  color: #000;
  position: absolute;
}
.anniu a {
  font-size: 13px;
  text-decoration: none;
  color: #000;
  float: right;
}
.anniu input{
  width: 13px;
  height: 13px;
}
.Denglu{
  margin-top: 40px;
}
.Denglu input{
  display: inline-block;
  width: 120px;
  height: 30px;
  float: left;
  margin-right: 10px;
  border: none;
  background-color: #349ce4;
  border-radius: 10px;  
  outline: none;
  opacity: 0.8;
}
.Denglu input:nth-child(2){
  margin-right: 0;
}
.SideNavigation{
  width: 54px;
  height: 216px;
  position: fixed;
  top: 40%;
  right: 0;
}
.SideNavigation li{
  width: 54px;
  height: 54px;
  background-color: #349ce4;
  list-style: none;
  text-align: center;
  line-height: 54px;
}
.SideNavigation li:nth-child(4){
  margin-top: 10px;
}
.SideNavigation li a{
  text-decoration: none;
  color: #000;
}
.SideNavigation li i{
  width: 54px;
  height: 54px;
}
/* 
.ditu{
  border: 5px solid #fff;
  border-radius: 10px;
}*/
.Grandson{
  overflow: hidden;
  margin-top: 60px;
}
.erweima img{
  width: 40%;
  margin-top: 30px;
} 
/* 底部css */
.Dibu{
  background-color: #50bce7;
}
.Grandson li{
  float: left;
  width: 33.33%;
  list-style: none;
  color: #fff;
}
.Grandson li:nth-child(2){
  text-align: center;
}
.Grandson li p:nth-child(1){
    width: 500px;
    height: 60px;
    font: bold 30px/60px 微软雅黑;
}
.Grandson li p:nth-child(2){
  padding-bottom: 30px;
    font: bold 20px/40px 微软雅黑;
}
.Grandson li p:nth-child(3){
  font: 16px/40px 微软雅黑;
  margin-top: 10px;
}
.Grandson li p:nth-child(4){
  font: 16px/40px 微软雅黑;
  margin-top: 10px;
}
.Grandson li p:nth-child(5){
  font: 16px/40px 微软雅黑;
  margin-top: 10px;
}
.Content hr{
  width: 100%;
  height: 1px;
  background-color: #fff;
  border: 0;
  margin-top: 10px;
}
.Content_1{
  width: 100%;
  background-color: #50bce7;
  color: #fff;
}
.Content_1 P{
  padding-top: 50px;
  padding-bottom:30px;
  font-size: 18px;
}
.Content_1 a{
  font-size: 12px;
  color: #fff;
  text-decoration: none;
}
.Content_2{
  width: 100%;
  height: 300px;
  background-color: #50bce7;
}
.logo_1 img{
  width: 300px;
  margin-top: 30px;
  margin-left: 80px;
}
.son_2{
  text-align: center;
  height: 35px;
  background-color: #f4f4f4;
  line-height: 3;
  font-size: 12px;
  margin-top: 40px;
}
/* 滑动组件css */
/* .container {
      width: 310px;
      margin: 100px auto;
    }
    #msg {
      width: 100%;
      line-height: 40px;
      font-size: 14px;
      text-align: center;
    }
    a:link,a:visited,a:hover,a:active {
      margin-left: 100px;
      color: #0366D6;
    } */
    /* 滑动组件css */
    /* 动画开始 */
    .Curriculum div{
      opacity: 0;
      margin-top: 180px;
    }      
    /* 动画结束 */
    /* .gengduo{
      position: absolute;
      bottom: 0;
      left: 100px;
    } */
    .jiange{
      width: 100%;
      height: 15px;
    }
    .xiantiao{
      width: 130px;
      height: 10px;
      background-color: #349ce4;
      z-index: 999;
    }
    .r{
      transition: all 1s ease;
      width: 410px;
      height: 380px;
      background-color: #fff;
      float: left;
      margin-right: 20px;
      margin-bottom: 90px;
      margin-top: 70px;  
      opacity: 0;
    }
    .r a{
      text-decoration: none;
      text-align: center;
    }
    .r:hover{
      margin-top: 60px;
      box-shadow: 0 0 0, 5px 5px 5px #ccc, 5px 5px 5px #ccc,0 0 0;
      
    }
    .r:hover hr{
      width: 100%;
      opacity: 1;
    }
    .ImagesOfPeople{
      display: inline-block;
      text-align: center;
      border: 1px solid #ccc;
      margin-top: 5px;
    }
    .ImagesOfPeople img{
      padding: 6px;
    }
    .Introduce{
      width: 246px;
      color: black;
      text-align: center;
      display: inline-block;
    }
    .Introduce p:nth-child(1){
      font-size: 18px;
      margin-top: 20px;
    }
    .Introduce p:nth-child(2){
      font-size: 15px;
      margin-top: 15px;
    }
    .Introduce p{
      margin-top: 20px;
      font-size: 12px;
      font-family: '微软雅黑';
      font-weight: normal;
      font-style: normal;
    }
    .gengduo_2{
      display: inline-block;
      width: 112px;
      height: 52px; 
      border: 1px solid #ddd;
      line-height: 53px;
      text-align: center;
      margin-left: 702.5px;
      margin-bottom: 20px;
    }
    .gengduo_2 a{
      text-decoration: none;
      color: #349ce4;
    }
    .xinwen_son{
      width: 410px;
      color: black;
    }
    .xinwen_son p{
      margin-top: 20px;
    }
    .xinwen_son p:nth-child(1){
      font-size: 14px;
    }
    .xinwen_son .p2{
      font-size: 12px;
    }
    .xinwen_son hr{
      width: 0;
      opacity: 0;
      margin-top: 10px;
      background-color: black;
      transition: all 1s ease;
    }
    .fenge{
      width: 100%;
      height: 663px;
      background-color: #127ee2;
      background: url(http://www.ceshi.com/static/index/imags/lunbo6.png) no-repeat;
    }
</style>
</head>
<script>

</script>
<body id=fullpage"">
    <!-- 动画开始 -->
    <div id="fullpage">
              <!-- 头部导航栏开始 -->
    <div id="mk1" class="Daohang mk w s1">
      <div class="beijin w">
          <div class="logo">
              <a href="#"><img src="http://www.ceshi.com/static/index/imags/logo2.png"></a>
          </div>
          <div class="Navigation">
              <ul>
                  <li id="Navigation_1" class="bianhuan"><a href="#" class="">网站首页</a>
                    <hr>
                  </li>
                  <li id="Navigation_2"><a href="http://www.ceshi.com/index/Study">学习指南</a>
                  <hr></li>
                  <li id="Navigation_3"><a href="#">课程中心</a>
                  <hr></li>
                  <li id="Navigation_4"><a href="http://www.ceshi.com/index/Certificate">证书查询</a>
                  <hr></li>
                  <li id="Navigation_5"><a href="http://www.ceshi.com/index/Journalism">新闻资讯</a>
                  <hr></li>
                  <li id="Navigation_6"><a href="http://www.ceshi.com/index/Enterprise">关于我们</a>
                  <hr></li>
              </ul>
          </div>
      </div>
  </div>
  <!-- 头部导航栏结束 -->
  <div class="jiange">

  </div>
  <!-- 轮播图开始 -->
  <div class="slider" id="slider">
    <!-- 炫酷轮播图开始 -->
    <!-- <div class="img-item">
      <div class="img"></div>
      <div class="img"></div>
      <div class="img"></div>
      <div class="img"></div>
    </div>
    <div class="img-item">
      <div class="img"></div>
      <div class="img"></div>
      <div class="img"></div>
      <div class="img"></div>
    </div>
    <div class="img-item">
      <div class="img"></div>
      <div class="img"></div>
      <div class="img"></div>
      <div class="img"></div>
    </div>
    <div class="img-item">
      <div class="img"></div>
      <div class="img"></div>
      <div class="img"></div>
      <div class="img"></div>
    </div>
    <div class="img-item">
      <div class="img"></div>
      <div class="img"></div>
      <div class="img"></div>
      <div class="img"></div>
    </div>
    <div class="img-item">
      <div class="img"></div>
      <div class="img"></div>
      <div class="img"></div>
      <div class="img"></div>
    </div>
    <div class="img-item">
      <div class="img"></div>
      <div class="img"></div>
      <div class="img"></div>
      <div class="img"></div>
    </div>
    <div class="btns" data-num="0">
      <div class="prev"><</div>
      <div class="next">></div>
    </div>   -->
    <!-- 炫酷轮播图结束 -->
    <div class="slider-inner">
        <div class="item">
        <img class="img" style="background: url('http://www.ceshi.com/static/index/imags/lunbo4.png');background-size:1519px;">
        </div>
        <div class="item">
        <img class="img" style="background: url('http://www.ceshi.com/static/index/imags/lunbo6.png');background-size:1519px;">
        </div>
        <div class="item">
        <img class="img" style="background: url('http://www.ceshi.com/static/index/imags/lunbo7.png');background-size:1519px;">
        </div>
  </div>
      <!-- 登陆组件开始 -->
      <div class="Land">
          <!-- <span>为了方便我们与您联系，请填写您的手机号码</span> -->
          <div class="table">
              <table>
                  <tr style="height:10px;"></tr>
                  <tr class="Userlogin" style="text-align:center;">
                    <td><span>登录</span></td>
                  </tr>
                  <tr style="height:20px;" class="shurukuang"></tr>
                  <tr>
                      <td><input class="shurukuang1" type="text" placeholder="请输入您的账号"></td>
                  </tr>
                  <tr style="height:20px"></tr>
                  <tr>
                      <td><input type="password" placeholder="请输入您的密码"></td>                        
                  </tr>
                  <tr style="height:20px"></tr>
              </table>
              <div class="anniu">
                <input type="checkbox" style="outline:none;" ><span>七天免登录</span>
                <a href="#">忘记密码？</a>
              </div>
              <div class="Denglu">
                <input type="button" value="登录">
                <input type="button" value="注册">
              </div>
              <div class="container">
                  <div id="captcha" style="position: relative"></div>
                  <div id="msg"></div>
              </div>
          </div>
      </div>
      <!-- 登陆组件结束 -->
  </div>
  <!-- 轮播图结束 -->
  <div class="jiange">

  </div>
  <div class="Division">
  </div>
  <!-- 课程中心开始 -->
  <div class="Kecheng section s2">
    <div class="title1 w">
      <span>课程中心</span>
    </div>
    <div class="Curriculum w">
      <div class="Curriculum_1"><a href="#"><img src="http://www.ceshi.com/static/index/imags/kecheng1.png" alt=""></a></div>
      <div class="Curriculum_2"><a href="#"><img src="http://www.ceshi.com/static/index/imags/kecheng1.png" alt=""></a></div>
      <div class="Curriculum_3"><a href="#"><img src="http://www.ceshi.com/static/index/imags/kecheng1.png" alt=""></a></div>
    </div>
    <div class="gengduo w">
      <a href="#">更多资讯</a>
    </div>
  </div>
  <!-- 课程中心结束 -->
  <!-- 分割图片开始 -->
  <div class="fenge">
  </div>
  <!-- 分割图片结束 -->
  <!-- 师资力量开始 -->
  <div class="shizi section s3">
        <div class="title1 w">
          <span>师资力量</span>
        </div>
    <div class="TeacherStrength w">
     <li  class="TeacherStrength_1 r">
      <div>
        <a href="#">
          <div class="ImagesOfPeople">
              <img src="http://www.ceshi.com/static/index/imags/shizi3.png" alt="">
          </div>
          
          <div class="Introduce">
            <p>宫智勇 教授</p>
            <p>武汉轻工大学食品科学与工程学院食品营养与安全系主任</p>
          </div>
        </a>
      </div>
     </li>
      <li  class="TeacherStrength_2 r">
        <div>
          <a href="#">
              <div class="ImagesOfPeople">
                  <img src="http://www.ceshi.com/static/index/imags/shizi1.png" alt="">
              </div>
              
              <div class="Introduce">
                <p>詹明胜 主任医师</p>
                <p>武汉市食品药品执法总队原队长</p>
              </div>
          </a>
        </div>
      </li>
      <li class="TeacherStrength_3 r">
        <div>
          <a href="#">
              <div class="ImagesOfPeople">
                  <img src="http://www.ceshi.com/static/index/imags/shizi2.png" alt="">
              </div>
              
              <div class="Introduce">
                <p>曹崇运  总工程师</p>
                <p>原武汉食品研究所</p>
              </div>
          </a>
        </div>
      </li>
    </div>
    <div class="gengduo_2 w">
        <a href="#">更多资讯</a>
      </div>
  </div>
  <!-- 师资力量结束 -->
  <!-- 新闻开始 -->
  <div class="xinwen section s4">
      <div class="title1 w">
          <span>新闻资讯</span>
        </div>
    <div class="Journalism w">
      <div class="Journalism_1 r">
        <a href="#">
          <img src="http://www.ceshi.com/static/index/imags/xinwen1.png" alt="">
          <div class="xinwen_son">
            <p>2018年江汉区食品安全管理员集中培训班</p>
            <hr>
            <p class="p2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;为学习贯彻《食品安全法》内容，落实省市食品药品监督管理局关于加强食品安全管理人员培训工作要求......</p>
          </div>
        </a>
      </div>
      <div class="Journalism_2 r">
        <a href="#">
          <img src="http://www.ceshi.com/static/index/imags/xinwen1.png" alt="">
          <div class="xinwen_son">
            <p>江岸区大中型食品经营企业及校园食堂食品安全管理员培训班</p>
            <hr>
            <p class="p2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2017年6月30日，受江岸区食品药品监督管理局委托，我机构在武汉轻工大学常青花园校区科教大楼举办了江岸区大中型食品经营企业及校园食堂食品安全管理员培训......</p>
          </div>
        </a>
      </div>
      <div class="Journalism_3 r">
        <a href="#">
          <img src="http://www.ceshi.com/static/index/imags/xinwen1.png" alt="">
          <div class="xinwen_son">
            <p>江岸区学校及幼儿园食品安全管理员食品安全培训班</p>
            <hr>
            <p class="p2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2017年6月15-16日，由江岸区体育卫生与艺术教育工作站主办，我机构承办的......</p>
          </div>
        </a>
      </div>
    </div>
    <div class="gengduo_2 w">
        <a href="#">更多资讯</a>
      </div>
  </div>
  <!-- 新闻结束 -->
  <!-- 底部开始 -->
  <div class="Dibu">
    <div class="Content w">
      <div class="Content_1">
        <p>相关链接</p>
        <a href="">湖北省食品药品监督管理局</a>&nbsp;&nbsp;|&nbsp;&nbsp;
        <a href="">武汉市食品药品监督管理局</a>&nbsp;&nbsp;|&nbsp;&nbsp;
        <a href="">湖北省团餐快餐协会</a>&nbsp;&nbsp;|&nbsp;&nbsp;
        <a href="">武汉轻工大学</a>&nbsp;&nbsp;|&nbsp;&nbsp;
        <a href="">湖北工业大学</a>&nbsp;&nbsp;|&nbsp;&nbsp;
        <a href="">华中农业大学</a>
      </div>
      <hr>
      <div class="Content_2">
        <ul class="Grandson">
          <li>
            <p>Content Us</p>
            <p>联系我们</p>
            <p>电话：153-7760-5193</p>
            <p>邮箱：whsax2017</p>
            <p>地址：湖北省武汉市江岸区江大路30号工程科学技术研究院</p>
          </li>
          <li class="erweima">
            <img src="http://www.ceshi.com/static/index/imags/erweima.png" alt="">
          </li>
          <li class="logo_1">
            <img src="http://www.ceshi.com/static/index/imags/logo3.png" alt="">
          </li>
        </ul>
      </div>
        <!-- <div class="son_1">
          <img src="./imags/logo.png" width="25%" height="25%" style="margin-left:35%; margin-top:50px;margin-bottom:50px;">
          <hr>
          <ul class="Grandson">
            <li>
              <p>Contact Us</p>
              <p>联系我们</p>
              <p>电话：153-7760-5193</p>
              <p>邮箱：whsax2017@163.com</p>
              <p>地址：湖北省武汉市江岸区江大路30号工程科学技术研究院</p>
            </li>
            <li class="erweima">
              <img src="./imags/erweima.png" alt="">
            </li>
            <li>
                <div class="ditu">
                  <img src="./imags/ditu2.png" width="100%" height="100%">  
            </div>
            </li>
          </ul>
        </div>
    </div>
    --> 
  </div>
  <!-- 底部结束 -->
  <div class="son_2">
      Copyright © 武汉食安信科技股份有限公司 版权所有 备案号：鄂ICP备17002334号-1
  </div>
    </div>
    <!-- 动画结束 -->
    <!-- 返回栏按钮开始 -->
    <div id="container">
    </div>
    <!-- 返回栏按钮结束 -->
    <!-- 侧边导航栏开始 -->
    <div class="SideNavigation">
      <ul>
        <li id="side_1"><a href="#"><i class="android iconfont icon-telephone"></i></a></li>
        <li id="side_2"><a href="#"><i class="android iconfont icon-QQ"></i></a></li>
        <li id="side_3"><a href="#"><i class="android iconfont icon-weixin"></i></a></li>
        <li id="side_4"><a href="#"><i class="android iconfont icon-shangjiantouxi"></i></a></li>
      </ul>
    </div>
    <!-- 侧边导航栏结束 -->
</body>
<script src="http://www.ceshi.com/static/index/js/jquery.min.js"></script>
<script>

</script>
<!-- <script src="http://www.jq22.com/jquery/1.8.3/jquery.min.js"></script> -->
<!-- <script src="./jquery-3d-spiral-slider/jquery-1.11.3.min.js"></script> -->
<script type="text/javascript">
// 炫酷轮播图开始
	// $(function (){
	// 	var num = 0;
	// 	$("#j_silder_outer .img-item").each(function(index, el) {
	// 		$(this).css({
	// 			"left":$(this).width() * index + "px",
	// 			/*让每个img-item延时一定时间执行动画*/
	// 			"transitionDelay": index * 0.3 + "s"
	// 		});
	// 		$(this).find(".img").css({
	// 			"backgroundPosition": -$(this).width() * index + "px"
	// 		});;
  //   });		
	// 	var timejg=4000;//轮播间隔时间
	// 	var time = setInterval(move,timejg);
	// 	function move(){
	// 		$("#j_silder_outer .img-item").css("transform", "rotateX(" + (--num * 90) + "deg)");
	// 	}
	// 	$('.silder').hover(function(){
	// 		clearInterval(time);
	// 	},function(){
	// 		time = setInterval(move,timejg);
	// 	});
  // })
  // 炫酷轮播图结束
  /**
 * Author         : CheneyLiu
 * Date           : date
 * isAuto:        true, 自动播放
 * transTime:     3000, 自动播放间隔
 * animateSpeed:  1000,  动画速度
 * sliderMode:    'slide', 类型//'slide | fade',
 * pointerControl: true, 指示器开关
 * pointerEvent:  'click', 指示器类型//'hover' | 'click',
 * arrowControl:  true, 左右控制
 */
;(function($) {
$.fn.Slider = function(options) {
  "use strict";

  var settings = $.extend({
    isAuto: true,
    transTime: 4000,
    animateSpeed: 1000,  
    sliderMode: 'slide', //'slide | fade',
    pointerControl: true,
    pointerEvent: 'click',//'hover' | 'click',
    arrowControl: true,
  }, options);
  var interval;
  var isAnimating     = false;
  var $slider         = $(this);
  var $sliderWrap     = $slider.find('.slider-inner');
  var sliderCount     = $sliderWrap.find('> .item').length;
  var sliderWidth     = $slider.width();
  var currentIndex    = 0;

  var sliderFun = {
    controlInit: function() {
      // pointerControl
      if (settings.pointerControl) {
        
        var html = '';
        html += '<ol class="slider-pointer">';
        for (var i = 0; i < sliderCount; i++) {
          if (i == 0) {
            html += '<li class="active"></li>'
          }else{
            html += '<li></li>'
          }
        }
        html += '</ol>'
        $slider.append(html);
          // 指示器居中
        var $pointer = $slider.find('.slider-pointer');
        $pointer.css({
          left: '50%',
          marginLeft: - $pointer.width()/2
        });
      }
      // pointerControl
      $slider.on('click', '.slider-control.prev', function(event) {
        sliderFun.toggleSlide('prev');
      });
      $slider.on('click', '.slider-control.next', function(event) {
        sliderFun.toggleSlide('next');
      });
    },
    // slider
    sliderInit: function() {
      sliderFun.controlInit();
      // 模式选择
      if (settings.sliderMode == 'slide') {
        // slide 模式
        $sliderWrap.width(sliderWidth * sliderCount);
        $sliderWrap.children().width(sliderWidth);
      }else{
        // mode 模式
        $sliderWrap.children().css({
          'position': 'absolute',
          'left': 0,
          'top': 0
        });
        $sliderWrap.children().first().siblings().hide();
      }
      // 控制事件
      if (settings.pointerEvent == 'hover') {
        $slider.find('.slider-pointer > li').mouseenter(function(event) {
          sliderFun.sliderPlay($(this).index());
        });
      }else{
        $slider.find('.slider-pointer > li').click(function(event) {
          if (currentIndex != $(this).index()) {
				sliderFun.sliderPlay($(this).index())
			}
        });
      }
      // 自动播放
      sliderFun.autoPlay();
    },
    // slidePlay
    sliderPlay: function(index) {
      sliderFun.stop();
      isAnimating = true;
      $sliderWrap.children().first().stop(true, true);
      $sliderWrap.children().stop(true, true);
      $slider.find('.slider-pointer').children()
        .eq(index).addClass('active')
        .siblings().removeClass('active');
      if (settings.sliderMode == "slide") {
        // slide
        if (index > currentIndex) {
          $sliderWrap.animate({
        left: '-=' + Math.abs(index - currentIndex) * sliderWidth + 'px'
    }, settings.animateSpeed, function() {
        sliderFun.stop();
        isAnimating = false;
        sliderFun.autoPlay()
    });
        } else if (index < currentIndex) {
          $sliderWrap.animate({
            left: '+=' + Math.abs(index - currentIndex) * sliderWidth + 'px'
          }, settings.animateSpeed, function() {
            isAnimating = false;
            sliderFun.autoPlay();
          });
        } else {
          return;
        }
      }else{
        // fade
        if ($sliderWrap.children(':visible').index() == index) return;
        $sliderWrap.children().fadeOut(settings.animateSpeed)
          .eq(index).fadeIn(settings.animateSpeed, function() {
            isAnimating = false;
            sliderFun.autoPlay();
          });
      }
      currentIndex = index;
    },
    // toggleSlide
    toggleSlide: function(arrow) {
      if (isAnimating) {
        return;
      }
      var index;
      if (arrow == 'prev') {
        index = (currentIndex == 0) ? sliderCount - 1 : currentIndex - 1;
        sliderFun.sliderPlay(index);
      }else if(arrow =='next'){
        index = (currentIndex == sliderCount - 1) ? 0 : currentIndex + 1;
        sliderFun.sliderPlay(index);
      }
    },
    // autoPlay
    autoPlay: function() {
      if (settings.isAuto) {
        interval = setInterval(function () {
          var index = currentIndex;
          (currentIndex == sliderCount - 1) ? index = 0: index = currentIndex + 1;
          sliderFun.sliderPlay(index);
        }, settings.transTime);
      }else{
        return;
      }
    },
    //stop
    stop: function() {
      clearInterval(interval);
    },
  };
  sliderFun.sliderInit();
}
})(jQuery);
jQuery(document).ready(function($) {
  $('#slider').Slider();
});

</script>
<!-- 滑动验证开始 -->
<!-- <script src="../jigsaw/jigsaw.js"></script>
<script>
    jigsaw.init(document.getElementById('captcha'), function () {
    document.getElementById('msg').innerHTML = '登录成功！'
  })
</script> -->
<!-- 滑动验证结束 -->
<!-- 动画js开始 -->
<script src="http://www.ceshi.com/static/index/js/donghua.js">
//    function getTop(clsName){ 
//     var obj = document.getElementsByClassName(clsName)[0];
//     return obj.getBoundingClientRect().top;
// }

// function getDom(clsName){
//     var obj=document.getElementsByClassName(clsName)[0];
//     return obj;
// }

// window.addEventListener('scroll',function(){
//     var scrollT=document.documentElement.scrollTop||document.body.scrollTop;

//     /*第二页动画的触发*/
//     if(getTop('Curriculum')<300){
//         getDom('Curriculum_1').classList.add('animated');
//         getDom('Curriculum_1').classList.add('xuanzhuan');
//     }
// })
</script>
<!-- 动画js结束 -->
</html>