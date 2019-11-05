<?php
  session_start();
?>
<!DOCTYPE HTML>
<html class="">
  
  <head>
    <meta charset="utf-8">
    <meta name="robots" content="noindex,nofllow">
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="format-detection" content="telephone=no">
    <title>会员注册-会员中心-中国女排</title>
    <link rel="stylesheet" type="text/css" href="css/basic.css">
    <link rel="stylesheet" type="text/css" href="css/common.css">
    <style>body{ background-color: !important;font-family: !important;} h1,h2,h3,h4,h5,h6{font-family: !important;}</style>
   </head>
  <body>
    <header class='met-head' m-id='met_head' m-type="head_nav">
      <nav class="navbar navbar-default box-shadow-none met-nav">
        <div class="container">
          <div class="row">
            <div class='met-nav-btn'>
              <h1 hidden="">会员中心</h1>
              <h3 hidden="">中国女排</h3>
              <div class="navbar-header pull-xs-left">
                <a href="index.php" class="met-logo vertical-align block pull-xs-left" title="中国女排">
                  <div class="vertical-align-middle">
                    <img src="images/1570791850.jpg" alt="中国女排"></div>
                </a>
              </div>
              <button type="button" class="navbar-toggler hamburger hamburger-close collapsed p-x-5 p-y-0 met-nav-toggler" data-target="#met-nav-collapse" data-toggle="collapse">
                <span class="sr-only"></span>
                <span class="hamburger-bar"></span>
              </button>
              <button type="button" class="navbar-toggler collapsed m-0 p-x-5 p-y-0 met-head-user-toggler" data-target="#met-head-user-collapse" data-toggle="collapse">
                <i class="icon wb-user-circle" aria-hidden="true"></i>
              </button>
            </div>
            <div class="collapse navbar-collapse navbar-collapse-toolbar pull-md-right p-0" id='met-head-user-collapse'>
              <ul class="navbar-nav pull-md-right vertical-align p-l-0 m-b-0 met-head-user no-login text-xs-center" m-id="member" m-type="member">
                <li class=" text-xs-center vertical-align-middle animation-slide-top">
                  <?php
                    if(isset($_SESSION["uid"]) && !empty($_SESSION["uid"]))
                      echo '欢迎',$_SESSION["uid"],'<a href="logout.php" class="met_navbtn">退出</a>';
                    else{
                      echo ' <a href="login-cn.php" class="met_navbtn">登录</a>
                  <a href="register_include-cn.php" class="met_navbtn">注册</a>';
                    }

                  ?>
                   <a href="ftp://10.5.168.10"  target="_blank" class="met_navbtn">ftp专区</a>
                </li>
              </ul>
              <div class="metlang m-l-15 pull-md-right text-xs-center"></div>
            </div>
            <div class="collapse navbar-collapse navbar-collapse-toolbar pull-md-right p-0" id="met-nav-collapse">
              <ul class="nav navbar-nav navlist">
                <li class='nav-item'>
                  <a href="index.php" title="首页" class="nav-link
                  ">首页</a>
                </li>
                <li class="nav-item dropdown m-l-10">
                  <a href="index1.php" title="中国女排" target='_self' class="nav-link dropdown-toggle " data-toggle="dropdown" data-hover="dropdown">中国女排
                    <span class="fa fa-angle-down p-l-5"></span></a>
                  <div class="dropdown-menu dropdown-menu-right dropdown-menu-bullet animate animate-reverse">
                    <a href="index1.php" target='_self' title="简介" class='dropdown-item '>简介</a>
                  </div>
                </li>
                <li class='nav-item'>
                  <a href="index2.php" target='_self' title="赛事" class="nav-link ">赛事</a></li>
                <li class='nav-item'>
                  <a href="index3.php" target='_self' title="新闻" class="nav-link ">新闻</a></li>
                <li class='nav-item'>
                  <a href="index4.php" target='_self' title="荣誉" class="nav-link ">荣誉</a></li>
                <li class='nav-item'>
                  <a href="index5.php" target='_self' title="图集" class="nav-link ">图集</a></li>
              </ul>
            </div>
          </div>
        </div>
      </nav>
    </header>
    <div class="met-banner-ny vertical-align text-center" m-id="banner">
      <h3 class="vertical-align-middle">会员中心</h3></div>
    <section class="met-crumbs hidden-sm-down" m-id='met_position' m-type='nocontent'>
      <div class="container">
        <div class="row">
          <div class="border-bottom clearfix">
            <ol class="breadcrumb m-b-0 subcolumn-crumbs breadcrumb-arrow">
              <li class='breadcrumb-item'>你的位置</li>
              <li class='breadcrumb-item'>
                <a href="index.php" title="首页" class='icon wb-home'>首页</a></li>
              <li class='breadcrumb-item'>
                <a href="register_include-cn.php" title="会员中心" class=''>会员中心</a></li>
            </ol>
          </div>
        </div>
      </div>
    </section>
    <link href="css/metinfo.css" rel='stylesheet' type='text/css'>
    <div class="index_01" > 
<table style="width: 100%;height:100%;" >
  <tr>
    <td align="center" >
      <form action="doregister.php " name="dl" method="post">
        <table  align="center" width=350 height=230; style="font-family:宋体; font-size:25px;">
      <tr align="center"> 
          <td colspan="2" style="font-size:35px;">注册用户</td>
      </tr>
      <tr>
          <td align="center">用户名</td>
          <td>
          <input type="name" maxlength="20" name="id" placeholder="用户名" style="width:180px;font-size:20px;border-radius: 8px; ">
          </td>
      </tr>
      <tr>
          <td align="center">密   码</td>
          <td >
          <input name="password" type="password" maxlength="16" placeholder="请输入密码" style="width:180px;font-size:20px;border-radius: 8px; ">
      </td>
      </tr>
      <tr>
          <td align="center">Again</td>
          <td>
          <input name="confirmPassword" type="password" maxlength="16" placeholder="请再次输入密码" style="width:180px;font-size:20px;border-radius: 8px; ">
          </td>
      </tr>
      <tr>
        <td colspan="2" align="center">
<input type="button" name="zu" value="登陆" class="btn" onclick="window.location.href='login-cn.php'" style="font-size: 17px;border-radius: 12px;background-color: orange;">
        <input type="reset" name="zu" value="重置" style="font-size:17px;border-radius: 12px;background-color: orange;" class="btn"> 
        <input type="submit" name="zu" value="注册" style="font-size:17px;border-radius:12px;background-color: orange;" class="btn"/ >
        </td>
      </tr>
   </table>
   </form>
    </td>
  </tr>
</table>
</div>
    <input type="hidden" name="met_lazyloadbg" value="">
    <script src="js/basic.js" ></script>
    <script src="js/lang_json_cn.js"></script>
  </body>

</html>
<script src="js/app.js"></script>
<script src="js/own.js"></script>