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
    <title>新闻-中国女排</title> 
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
              <h1 hidden="">新闻</h1>
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
                   <a href="ftp://10.5.168.10" target="_blank" class="met_navbtn">ftp专区</a>
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
                  <a href="" title="中国女排" target='_self' class="nav-link dropdown-toggle " data-toggle="dropdown" data-hover="dropdown">中国女排
                    <span class="fa fa-angle-down p-l-5"></span></a>
                  <div class="dropdown-menu dropdown-menu-right dropdown-menu-bullet animate animate-reverse">
                    <a href="index1.php" target='_self' title="简介" class='dropdown-item '>简介</a>
                   </div>
                </li>
                <li class='nav-item'>
                  <a href="index2.php" target='_self' title="赛事" class="nav-link ">赛事</a></li>
                <li class='nav-item'>
                  <a href="" target='_self' title="新闻" class="nav-link active">新闻</a></li>
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
      <h3 class="vertical-align-middle">新闻</h3></div>
    <section class="met-crumbs hidden-sm-down" m-id='met_position' m-type='nocontent'>
      <div class="container">
        <div class="row">
          <div class="border-bottom clearfix">
            <ol class="breadcrumb m-b-0 subcolumn-crumbs breadcrumb-arrow">
              <li class='breadcrumb-item'>你的位置</li>
              <li class='breadcrumb-item'>
                <a href="index.php" title="首页" class='icon wb-home'>首页</a></li>
              <li class='breadcrumb-item'>
                <a href="" title="新闻" class=''>新闻</a></li>
            </ol>
          </div>
        </div>
      </div>
    </section>
    <section class="met-news animsition">
      <div class="container">
        <div class="row">
          <div class="col-md-9 met-news-body">
            <div class="row">
              <div class="met-news-list" m-id="noset">
                <ul class="ulstyle met-pager-ajax imagesize" data-scale='400x400'>
                  <li class="media media-lg border-bottom1">
                    <div class="media-left">
                      <a href="shownews-2.php" title="中国女排王者凯旋 用金牌的光辉为国旗添彩">
                        <img class="media-object" src="images/a6a6-ifffquq3323154.jpg" alt="中国女排王者凯旋 用金牌的光辉为国旗添彩" height='100'></a>
                    </div>
                    <div class="media-body">
                      <h4>
                        <a href="shownews-2.php" title="中国女排王者凯旋 用金牌的光辉为国旗添彩" target='_self'>中国女排王者凯旋 用金牌的光辉为国旗添彩</a></h4>
                      <p class="des font-weight-300">2019女排世界杯，中国女排11连胜一举夺魁，这支承载着民族精神和共和国记忆的队伍，用十年如一日的付出和拼搏为爱加冕，在新中国70周年华诞前夕捧下了第十个世界三大赛的冠军奖杯！&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;　　中国女排于30日上午抵达北京。国家体育总局排球运动管理中心党委书记顾国平代表排球中心向中国女排全体队员、教练员献上鲜花，并表示热烈的祝贺和诚挚的问候</p>
                      <p class="info font-weight-300">
                        <span>2019-10-11</span>
                        <span></span>
                        <span>
                          <i class="icon wb-eye m-r-5 font-weight-300" aria-hidden="true"></i>3</span>
                      </p>
                    </div>
                  </li>
                  <li class="media media-lg border-bottom1">
                    <div class="media-left">
                      <a href="shownews-1.php" title="习近平会见中国女排代表">
                        <img class="media-object" src="images/W020190930861454318197.jpg" alt="习近平会见中国女排代表" height='100'></a>
                    </div>
                    <div class="media-body">
                      <h4>
                        <a href="shownews-1.php" title="习近平会见中国女排代表" target='_self'>习近平会见中国女排代表</a></h4>
                      <p class="des font-weight-300">新华社9月30日电（记者朱基钗）中共中央总书记、国家主席、中央军委主席习近平专门邀请刚刚获得2019年女排世界杯冠军的中国女排队员、教练员代表，参加庆祝中华人民共和国成立70周年招待会，并在会前亲切会见女排代表，同大家合影留念。　　下午4时45分，女排队员、教练员代表步入人民大会堂福建厅，习近平同大家一一握手。在听取了领队和教练员、运动员代表发言后，习近平表示，在举国上下庆祝新中国成立70周年的时</p>
                      <p class="info font-weight-300">
                        <span>2019-10-11</span>
                        <span></span>
                        <span>
                          <i class="icon wb-eye m-r-5 font-weight-300" aria-hidden="true"></i>0</span>
                      </p>
                    </div>
                  </li>
                </ul>
                <div class='m-t-20 text-xs-center hidden-sm-down' m-type="nosysdata">
                  <div class='met_pager'>
                    <span class='PreSpan'>上一页</span>
                    <a href='index3.php' class='Ahover'>1</a>
                    <span class='NextSpan'>下一页</span>
                    <span class='PageText'>转至第</span>
                    <input type='text' id='metPageT' data-pageurl='index.php?lang=cn&class1=3&page=||1' value='1'>
                    <input type='button' id='metPageB' value='页'></div>
                </div>
                <div class="met_pager met-pager-ajax-link hidden-md-up" data-plugin="appear" data-animate="slide-bottom" data-repeat="false" m-type="nosysdata">
                  <button type="button" class="btn btn-primary btn-block btn-squared ladda-button" id="met-pager-btn" data-plugin="ladda" data-style="slide-left" data-url="" data-page="1">
                    <i class="icon wb-chevron-down m-r-5" aria-hidden="true"></i>加载更多</button>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="row">
              <div class="met-bar" m-id="news_bar" m-type="nocontent">
                
                <ul class="column list-icons">
                  <li>
                    <a href="" title="新闻" class="active" target='_self'>
                      <h3 class="font-weight-300">新闻</h3></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
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