<?php
session_start();
?>
<!DOCTYPE HTML>
<html class="">
  
  <head>
    <meta http-equiv=”Content-Type” content=”text/html; charset=utf-8″> 


    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="format-detection" content="telephone=no">
    
    <title>中国女排-中国女排</title>
    <link rel="stylesheet" type="text/css" href="css/basic.css">
    <link rel="stylesheet" type="text/css" href="css/common.css">
    <style>body{ background-color: !important;font-family: !important;} h1,h2,h3,h4,h5,h6{font-family: !important;} 
  </style>

   </head>
  
  <body>
    <header class='met-head' m-id='met_head' m-type="head_nav">
      <nav class="navbar navbar-default box-shadow-none met-nav">
        <div class="container">
          <div class="row">
            <div class='met-nav-btn'>
              <h1 hidden="">中国女排</h1>
              <div class="navbar-header pull-xs-left">
                <a href="" class="met-logo vertical-align block pull-xs-left" title="中国女排">
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
                  <a href="ftp://10.5.168.10" target="_blank" class="met_navbtn">ftp专区</a>
                </li>
              </ul>
             
              <div class="metlang m-l-15 pull-md-right text-xs-center"></div>
            </div>
            <div class="collapse navbar-collapse navbar-collapse-toolbar pull-md-right p-0" id="met-nav-collapse">
              <ul class="nav navbar-nav navlist">
                <li class='nav-item'>
                  <a href="" title="首页" class="nav-link
                  active
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
    <div class="met-banner carousel slide" id="exampleCarouselDefault" data-ride="carousel" m-id='banner' m-type='banner'>
      <ol class="carousel-indicators carousel-indicators-fall">
        <li data-slide-to="0" data-target="#exampleCarouselDefault" class="    active"></li>
        <li data-slide-to="1" data-target="#exampleCarouselDefault" class="    "></li>
      </ol>
      <div class="carousel-inner     " role="listbox">
        <div class="carousel-item     active">
          <img class="w-full" src="images/1570790649.jpg" srcset='images/1570790649.jpg 767w,images/1570790649.jpg' sizes="(max-width: 767px) 767px" alt="中国女排" pch="0" adh="0" iph="0">
          <div class="met-banner-text" met-imgmask="">
            <div class='container'>
              <div class='met-banner-text-con p-1'>
                <div>
                  <h3 class="animation-slide-top animation-delay-300 font-weight-500" style="color:#ffffff">中国女排</h3>
                  <p class="animation-slide-bottom animation-delay-600" style='color:#ffffff'>Chinese Women’s Volleyball</p></div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item     ">
          <img class="w-full" src="images/1570791145.jpg" srcset='images/1570791145.jpg 767w,images/1570791145.jpg' sizes="(max-width: 767px) 767px" alt="有一种冠军，叫中国女排" pch="0" adh="0" iph="0">
          <div class="met-banner-text" met-imgmask="">
            <div class='container'>
              <div class='met-banner-text-con p-4'>
                <div>
                  <h3 class="animation-slide-top animation-delay-300 font-weight-500" style="color:#ffffff">有一种冠军，叫中国女排</h3>
                  <p class="animation-slide-bottom animation-delay-600" style='color:#ffffff'>说了会赢，就一定会赢</p></div>
              </div>
            </div>
          </div>
        </div>
        <a class="left carousel-control" href="#exampleCarouselDefault" role="button" data-slide="prev">
          <span class="icon" aria-hidden="true">
            <</span>
              <span class="sr-only">Previous</span></a>
        <a class="right carousel-control" href="#exampleCarouselDefault" role="button" data-slide="next">
          <span class="icon" aria-hidden="true">></span>
          <span class="sr-only">Next</span></a>
      </div>
    </div>
    <main>
      <div class="met-index-product met-index-body text-xs-center" m-id="met_index_product">
        <div class="container">
          <h2 class=" invisible animation-slide-top animation-delay-300" >图集</h2>
          <p class=" invisible font-weight-300  animation-slide-top animation-delay-300" >picture</p>
          <div class='nav-tabs-horizontal nav-tabs-inverse nav-tabs-animate' data-plugin="tabs">
            <ul class="nav nav-tabs nav-tabs-solid flex flex-center">
              <li class="nav-item" role="presentation">
                <a class="nav-link active radius0" href="#">
                  <h3 class='font-weight-300'>全部</h3></a>
              </li>
            </ul>
          </div>
          <div class="tab-content">
            <ul class="
            blocks-xs-2                                        blocks-md-2 blocks-lg-4 blocks-xxl-4 no-space imagesize index-product-list tab-pane active animation-scale-up" id="all38" role="tabpanel" data-scale='300X300'>
              <li class='p-r-10 m-b-10' data-type="list_0">
                <div class="card card-shadow">
                  <figure class="card-header cover">
                    <a href="showimg-6.php" title="东京资格赛 北仑 中国女排3-0捷克 朱琳摄">
                      <img class="cover-image lazy" src="images/1570788313.jpg" alt="东京资格赛 北仑 中国女排3-0捷克 朱琳摄"></a>
                  </figure>
                  <h4 class="card-title m-0 p-x-10 text-shadow-none font-szie-16 font-weight-300">
                    <a href="showimg-6.php" title="东京资格赛 北仑 中国女排3-0捷克 朱琳摄" class="block text-truncate">东京资格赛 北仑 中国女排3-0捷克 朱琳摄</a></h4>
                </div>
              </li>
              <li class='p-r-10 m-b-10' data-type="list_0">
                <div class="card card-shadow">
                  <figure class="card-header cover">
                    <a href="" title="18-19   女排超级联赛总决赛2-朱琳摄">
                      <img class="cover-image lazy" src="images/1570789034.jpg" alt="18-19   女排超级联赛总决赛2-朱琳摄"></a>
                  </figure>
                  <h4 class="card-title m-0 p-x-10 text-shadow-none font-szie-16 font-weight-300">
                    <a href="" title="18-19   女排超级联赛总决赛2-朱琳摄" class="block text-truncate">18-19 女排超级联赛总决赛2-朱琳摄</a></h4>
                </div>
              </li>
              <li class='p-r-10 m-b-10' data-type="list_0">
                <div class="card card-shadow">
                  <figure class="card-header cover">
                    <a href="" title="东京资格赛 北仑 中国女排3-1德国 朱琳摄">
                      <img class="cover-image lazy" src="images/1570788603.jpg" alt="东京资格赛 北仑 中国女排3-1德国 朱琳摄"></a>
                  </figure>
                  <h4 class="card-title m-0 p-x-10 text-shadow-none font-szie-16 font-weight-300">
                    <a href="" title="东京资格赛 北仑 中国女排3-1德国 朱琳摄" class="block text-truncate">东京资格赛 北仑 中国女排3-1德国 朱琳摄</a></h4>
                </div>
              </li>
              <li class='p-r-10 m-b-10' data-type="list_0">
                <div class="card card-shadow">
                  <figure class="card-header cover">
                    <a href="" title="北仑 中国女排3-0土耳其喜提资格赛三战全胜夺奥运门票 朱琳摄">
                      <img class="cover-image lazy" src="images/1570788738.jpg" alt="北仑 中国女排3-0土耳其喜提资格赛三战全胜夺奥运门票 朱琳摄"></a>
                  </figure>
                  <h4 class="card-title m-0 p-x-10 text-shadow-none font-szie-16 font-weight-300">
                    <a href="" title="北仑 中国女排3-0土耳其喜提资格赛三战全胜夺奥运门票 朱琳摄" class="block text-truncate">北仑 中国女排3-0土耳其喜提资格赛三战全胜夺奥运门票 朱琳摄</a></h4>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="met-index-news met-index-body text-xs-center" m-id="met_index_news">
        <div class="container">
          <h2 class="m-t-0 invisible animation-slide-top animation-delay-300" >新闻资讯</h2>
          <p class="desc m-b-0 font-weight-300 invisible animation-slide-top animation-delay-300" >news</p>
          <div class="row text-xs-left m-t-30 index-news-list">
            <div class="col-lg-4 col-md-4 col-xs-12">
              <ul class="list-group">
                <li class="list-group-item active clearfix">
                  <h4 class="pull-xs-left m-y-0">新闻</h4>
                  <a href="index3.php" class="pull-xs-right">MORE</a></li>
                <li class="list-group-item news-li clearfix">
                  <span>2019-10-11</span>
                  <a href="shownews-2.php" title="中国女排王者凯旋 用金牌的光辉为国旗添彩" target="_self">中国女排王者凯旋 用金牌的光辉为国旗添彩</a></li>
                <li class="list-group-item news-li clearfix">
                  <span>2019-10-11</span>
                  <a href="shownews-1.php" title="习近平会见中国女排代表" target="_self">习近平会见中国女排代表</a></li>
              </ul>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-12">
              <ul class="list-group">
                <li class="list-group-item active clearfix">
                  <h4 class="pull-xs-left m-y-0">新闻</h4>
                  <a href="index3.php" class="pull-xs-right">MORE</a></li>
                <li class="list-group-item news-li clearfix">
                  <span>2019-10-11</span>
                  <a href="shownews-2.php" title="中国女排王者凯旋 用金牌的光辉为国旗添彩" target="_self">中国女排王者凯旋 用金牌的光辉为国旗添彩</a></li>
                <li class="list-group-item news-li clearfix">
                  <span>2019-10-11</span>
                  <a href="shownews-1.php" title="习近平会见中国女排代表" target="_self">习近平会见中国女排代表</a></li>
              </ul>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-12">
              <ul class="list-group">
                <li class="list-group-item active clearfix">
                  <h4 class="pull-xs-left m-y-0">新闻</h4>
                  <a href="index3.php" class="pull-xs-right">MORE</a></li>
                <li class="list-group-item news-li clearfix">
                  <span>2019-10-11</span>
                  <a href="shownews-2.php" title="中国女排王者凯旋 用金牌的光辉为国旗添彩" target="_self">中国女排王者凯旋 用金牌的光辉为国旗添彩</a></li>
                <li class="list-group-item news-li clearfix">
                  <span>2019-10-11</span>
                  <a href="shownews-1.php" title="习近平会见中国女排代表" target="_self">习近平会见中国女排代表</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </main>
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
        
               <form action="comment.php" method ="POST" >

                <div id="post">
                    <p>评论内容：</p>
                    <p><textarea class="input" name="txt" style="width:100%; height:80px"></textarea></p>
                    <p><input type="submit" class='btn'value="发表" id="add" style="background-color: #1A94E6;" /></p>
                    <div id="message"></div>
                </div>
                </form>
            </div>
        </div>
    </footer>
    <input type="hidden" name="met_lazyloadbg" value="">
    <script src="js/basic.js" ></script>
    <script src="js/lang_json_cn.js"></script>
  </body>

</html>