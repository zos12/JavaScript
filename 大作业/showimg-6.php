<?php
  session_start();
?>
<!DOCTYPE HTML>
<html class="">
  
  <head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="format-detection" content="telephone=no">
    <title>东京资格赛 北仑 中国女排3-0捷克 朱琳摄-中国女排</title>
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
                  <a href="index5.php" target='_self' title="图集" class="nav-link active">图集</a></li>
              </ul>
            </div>
          </div>
        </div>
      </nav>
    </header>
    <div class="met-banner-ny vertical-align text-center" m-id="banner">
      <h3 class="vertical-align-middle">图集</h3></div>
    <section class="met-crumbs hidden-sm-down" m-id='met_position' m-type='nocontent'>
      <div class="container">
        <div class="row">
          <div class="border-bottom clearfix">
            <ol class="breadcrumb m-b-0 subcolumn-crumbs breadcrumb-arrow">
              <li class='breadcrumb-item'>你的位置</li>
              <li class='breadcrumb-item'>
                <a href="index.php" title="首页" class='icon wb-home'>首页</a></li>
              <li class='breadcrumb-item'>
                <a href="index5.php" title="图集" class=''>图集</a></li>
            </ol>
          </div>
        </div>
      </div>
    </section>
    <div class="met-showimg">
      <div class="container">
        <div class="row">
          <div class="met-showimg-body col-md-9" m-id='noset'>
            <div class="row">
              <section class="details-title border-bottom1">
                <h1 class='m-t-10 m-b-5'>东京资格赛 北仑 中国女排3-0捷克 朱琳摄</h1>
                <div class="info">
                  <span>2019-10-11 18:02:54</span>
                  <span>new</span>
                  
                </div>
              </section>
              <section class='met-showimg-con'>
                <div class='met-showimg-list fngallery cover text-xs-center' id="met-imgs-slick" m-id="noset" m-type="displayimgs">
                  <div class='slick-slide'>
                    <a href='files/1570788313.jpg' data-size='undefinedx' data-med='http://106.12.141.76/upload/201910/1570788313.jpg' data-med-size='undefinedx' class='lg-item-box' data-src='http://106.12.141.76/upload/201910/1570788313.jpg' data-exthumbimage="http://106.12.141.76/upload/thumb_src/60_60/1570788313.jpg" data-sub-html='东京资格赛 北仑 中国女排3-0捷克 朱琳摄'>
                      <img src="images/15707883131.jpg" class='img-fluid' alt='东京资格赛 北仑 中国女排3-0捷克 朱琳摄'></a>
                  </div>
                </div>
              </section>
              <section class="met-editor clearfix m-t-20"></section>
              <div class='met-page met-shownews-footer border-top1'>
                <ul class="pagination block blocks-2 p-t-20">
                  <li class='page-item m-b-0 '>
                    <a href='javascript:;' title="" class='page-link text-truncate'>上一篇
                      <span aria-hidden="true" class='hidden-xs-down'>: 没有了</span></a>
                  </li>
                  <li class='page-item m-b-0 '>
                    <a href='#' title="18-19   女排超级联赛总决赛2-朱琳摄" class='page-link pull-xs-right text-truncate'>下一篇
                      <span aria-hidden="true" class='hidden-xs-down'>: 18-19 女排超级联赛总决赛2-朱琳摄</span></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-3" m-id="img_bar" m-type="nocontent">
            <div class="row">
              <div class="met-bar">
      
                <ul class="column list-icons p-l-0">
                  <li>
                    <a href="index5.php" title="图集" class="active" target='_self'>
                      <h3>图集</h3></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
     <footer class="met-foot-info p-y-20 border-top1" m-id="met_foot" m-type="foot">
    <div class="container">
            <div class="demo">
             <?php
            
              $con = @mysqli_connect("localhost","root","123123","my1");  
        if(!$con){  
            die("数据库连接错误".mysqli_connect_error());  
        }  
        mysqli_query($con,"set names 'utf8'"); 
        $query_sql="select * from comments";
        $result = mysqli_query($con,$query_sql); 
        while($res = mysqli_fetch_array($result)){
      echo "
      <p>{$res['user']}:{$res['comment']}</p>
      ";
      
        } 
             ?>
        
               <form action="comment.php" method ="POST">
                <div id="post">
                    <p>评论内容：</p>
                    <p><textarea class="input" name="txt" style="width:100%; height:80px"></textarea></p>
                    <p><input type="submit" class='btn'value="发表" id="add"  style="background-color: #1A94E6;"/></p>
                    <div id="message"></div>
                </div>
                </form>
            </div>
        </div>
    </footer>
    <input type="hidden" name="met_lazyloadbg" value="">
    <script src="js/basic.js"></script>
    <script src="js/lang_json_cn.js"></script>
  </body>

</html>