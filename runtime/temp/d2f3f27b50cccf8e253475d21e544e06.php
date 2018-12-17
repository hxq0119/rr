<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:89:"C:\Users\HP\Desktop\PHP5.0\public/../application/admin\view\supervise\Administrators.html";i:1544758434;}*/ ?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>后台管理系统-课程分类</title>
    <link rel="stylesheet" href="http://www.tp5.com/static/admin/assets/bootstrap/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="http://www.tp5.com/static/admin/assets/bootstrap-validator/css/bootstrapValidator.min.css"/>
    <link rel="stylesheet" href="http://www.tp5.com/static/admin/assets/nprogress/nprogress.css"/>
    <link rel="stylesheet" href="http://www.tp5.com/static/admin/css/admin.css"/>
</head>
<body>
<!--侧边栏-->
<aside class="ad_aside">
    <!--商标-->
    <div class="brand"><a href="http://www.tp5.com/admin/index.html">ITCAST</a></div>
    <!--用户-->
    <div class="user">
        <img src="http://www.tp5.com/static/admin/images/default.png" alt=""/>
        <span>超级管理员</span>
    </div>
    <!--菜单-->
    <div class="menu">
            <ul>
                <li class="now"><a href="http://www.tp5.com/admin/Supervise/Administrators.html"><span class="glyphicon glyphicon-user"></span> 管理员权限</a></li> 
                <li>
                    <a href="javascript:;"><span class="glyphicon glyphicon-list"></span> 用户管理</a>
                    <div class="child" style="display: none">
                        <a href="http://www.tp5.com/admin/Supervise/Certificate.html">用户进度</a>
                    </div>
                </li>
            </ul>
        </div>
</aside>
<!--内容-->
<section class="ad_section">
    <!--顶部导航-->
    <nav class="ad_nav">
        <a data-menu href="javascript:;"><span class="glyphicon glyphicon-align-justify"></span></a>
        <a data-logout href="javascript:;"><span class="glyphicon glyphicon-log-out"></span></a>
    </nav>
    <div class="container-fluid">
        <!--路径导航-->
        <ol class="breadcrumb">
            <li><a href="http://www.tp5.com/admin/index.html">管理系统</a></li>
            <li class="active">课程管理</li>
        </ol>
        <div class="ad_content">
            <button id="addBtn" class="btn btn-default mb_15">添加分类</button>
            <table class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th width="15%">序号</th>
                    <th width="25%">管理员账号</th>
                    <th width="20%">身份</th>
                    <th width="25%">管理员密码</th>
                    <th width="15%">操作</th>
                </tr>
                </thead>
                <tbody>
                    <th>adfadsfa</th>
                    <th>adfadsfa</th>
                    <th>adfadsfa</th>
                    <th>adfadsfa</th>
                    <th><button class="btn btn-default mb_15">编辑</button>    <button class="btn btn-default mb_15">删除</button></th>
                </tbody>
            </table>
            <div class="page">
                <ul class="pagination"></ul>
            </div>
        </div>
    </div>
</section>
<div class="modal fade" id="addModal">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                <h4 class="modal-title">添加分类</h4>
            </div>
            <div class="modal-body">
                <form action="#" id="form">
                    <div class="form-group">
                        <input name="categoryName" type="text" class="form-control" placeholder="请输入课程名称">
                    </div>
                    <div class="form-group">
                        <select class="form-control">
                            <option value="客服">客服</option>
                            <option value="运维">运维</option>
                            <option value="财务">财务</option>
                            <option value="监管">监管</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input name="categoryName" type="password" class="form-control" placeholder="请输入管理员密码">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                <button type="submit" class="btn btn-primary" form="form">确定</button>
            </div>
        </div>
    </div>
</div>
<script type="text/template" id="template">
    <% for(var i = 0 ; i < rows.length ; i ++){ %>
    <tr>
        <td><%=(page-1)*size+i+1%></td>
        <td><%=rows[i].categoryName%></td>
    </tr>
    <% } %>
</script>
<script src="http://www.tp5.com/static/admin/assets/jquery/jquery.min.js"></script>
<script src="http://www.tp5.com/static/admin/assets/bootstrap/js/bootstrap.min.js"></script>
<script src="http://www.tp5.com/static/admin/assets/bootstrap-validator/js/bootstrapValidator.min.js"></script>
<script src="http://www.tp5.com/static/admin/assets/nprogress/nprogress.js"></script>
<script src="http://www.tp5.com/static/admin/assets/artTemplate/template-native.js"></script>
<script src="http://www.tp5.com/static/admin/assets/bootstrap-paginator/bootstrap-paginator.min.js"></script>
<script src="http://www.tp5.com/static/admin/js/admin.js"></script>
<script src="http://www.tp5.com/static/admin/js/categoryFirst.js"></script>
</body>
</html>