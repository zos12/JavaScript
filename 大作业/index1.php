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
    <title>简介-中国女排</title>
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
              <h1 hidden="">简介</h1>
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
                  <a href="" title="中国女排" target='_self' class="nav-link dropdown-toggle active" data-toggle="dropdown" data-hover="dropdown">中国女排
                    <span class="fa fa-angle-down p-l-5"></span></a>
                  <div class="dropdown-menu dropdown-menu-right dropdown-menu-bullet animate animate-reverse">
                    <a href="index1.php" target='_self' title="简介" class='dropdown-item active'>简介</a></div>
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
      </ol>
      <div class="carousel-inner     " role="listbox">
        <div class="carousel-item     active">
          <img class="w-full" src="images/1570791872.jpg" srcset='images/1570791872.jpg 767w,images/1570791872.jpg' sizes="(max-width: 767px) 767px" alt="" pch="0" adh="0" iph="0"></div>
        <a class="left carousel-control" href="#exampleCarouselDefault" role="button" data-slide="prev">
          <span class="icon" aria-hidden="true">
            <</span>
              <span class="sr-only">Previous</span></a>
        <a class="right carousel-control" href="#exampleCarouselDefault" role="button" data-slide="next">
          <span class="icon" aria-hidden="true">></span>
          <span class="sr-only">Next</span></a>
      </div>
    </div>
    <section class="met-crumbs hidden-sm-down" m-id='met_position' m-type='nocontent'>
      <div class="container">
        <div class="row">
          <div class="border-bottom clearfix">
            <ol class="breadcrumb m-b-0 subcolumn-crumbs breadcrumb-arrow">
              <li class='breadcrumb-item'>你的位置</li>
              <li class='breadcrumb-item'>
                <a href="index.php" title="首页" class='icon wb-home'>首页</a></li>
              <li class='breadcrumb-item'>
                <a href="" title="中国女排" class=''>中国女排</a></li>
              <li class='breadcrumb-item'>
                <a href="index1.php" title="简介" class=''>简介</a></li>
            </ol>
          </div>
        </div>
      </div>
    </section>
    <section class="met-column-nav" m-id="subcolumn_nav" m-type="nocontent">
      <div class="container">
        <div class="row">
          <ul class="clearfix met-column-nav-ul">
            <li>
              <a href="index1.php" title="简介" class='active'>简介</a></li>
           
          </ul>
        </div>
      </div>
    </section>
    <section class="met-show-body" m-id="noset">
      <div class="container">
        <div class="met-editor clearfix m-y-30">
          <div class="header" style="color: rgb(34, 34, 34); font-family: sf; font-size: 18px; letter-spacing: 1.34px; white-space: normal; padding: 80px 0px 50px; margin: 0px;">
            <h3 style="text-align: center;" lucida="" microsoft="" droid="" wenquanyi="" micro="" hiragino="" sans="" gb="" font-weight:="" line-height:="" color:="" margin-top:="" margin-bottom:="" text-shadow:="" text-align:="">
              <strong>
                <span style="font-family: 微软雅黑, " microsoft="" font-size:="">简介/
                  <span style="font-family: 微软雅黑, " microsoft="" color:="">about us</span></span>
              </strong>
            </h3>
          </div>
          <div class="fw postbody" style="font-family: sf; letter-spacing: 1.34px; white-space: normal; padding: 0px; margin: 0px auto; width: 1180px; line-height: 24px; font-size: 13px; color: rgb(106, 106, 106);">
            <p>
              <span style="font-family: 微软雅黑, " microsoft="" font-size:=""></span>
            </p>
            <div style="font-family: " microsoft="" white-space:="">
              <p>中国国家女子排球队（简称中国女排）隶属于中国排球协会，是中国各体育团队中成绩突出的体育团队之一。曾在1981年和1985年世界杯、1982年和1986年世锦赛、1984年洛杉矶奥运会上夺得冠军，成为世界上第一个“五连冠”，并又在2003年世界杯、2004年奥运会、2015年世界杯、2016年奥运会、2019年世界杯五度夺冠，共十度成为世界冠军（包括世界杯、世锦赛和奥运会三大赛）。 中国女排是中国三大球中唯一一个拿到冠军奖杯的队伍。</p>
              <p>2015年9月6日，第12届女排世界杯最后一轮，中国女排以3-1战胜日本队，第四次将世界杯冠军的奖杯收入囊中，同时也获得了2016年里约奥运会的参赛资格。2016年8月21日，里约奥运会女排决赛，中国女排在先失一局的情况下连扳三局，以3-1逆转战胜塞尔维亚女排，这是中国女排时隔12年再次获得奥运冠军，也是她们第三次获得奥运会金牌。2017年1月15日，获得2016年CCTV体坛风云人物最佳团队奖、评委会大奖。2017年9月9日，在女排大冠军杯第四轮比赛中，提前一轮夺冠，也是时隔16年再夺大冠军杯冠军。2018年9月23日，夺得第六届女排亚洲杯冠军。2018年10月20日，夺得2018女排世锦赛季军。2019年6月12日，在广东江门举行的2019年世界女排联赛分站赛中，中国女排3比0完胜土耳其队。2019年7月7日，在南京奥林匹克体育中心体育馆举行的2019世界女排联赛总决赛中，中国女排3比1完胜土耳其队，捧得季军。 10月4日，在国际排联最新一期的世界排名中，中国女排以320分重返榜首</p>
            </div>&nbsp;
            <br>
            <p style="text-align: center;">
              <span style="letter-spacing: 1.34px; font-family: 微软雅黑, " microsoft="" font-size:="">
                <span style="letter-spacing: 1.34px;">
                  <img src="images/1570789240464514.jpg" title="图片关键词" alt="图片关键词">&nbsp; &nbsp;</span></span>
            </p>
            <span style="color: rgb(106, 106, 106); font-family: sf; font-size: 13px; letter-spacing: 1.34px; line-height: 2;">&nbsp; &nbsp; &nbsp;</span>
            <span style="color: rgb(106, 106, 106); font-family: sf; font-size: 13px; letter-spacing: 1.34px;">中国女排夺得2019年女排世界杯冠军，成功卫冕。这是中国女排赢得的第十个世界大赛冠军，也是她们为新中国70华诞送上的一份特殊的生日礼物。习近平总书记致电祝贺，勉励大家继续保持昂扬斗志，不骄不躁，再创佳绩。作为三大球中唯一一支夺取过世界冠军的运动队，中国女排的影响力早已超越体育本身的意义，不仅是时代的集体记忆，更是激励国人继续奋斗、自强不息的精神符号。尽管成绩有起伏，但团结协作、顽强拼搏的女排精神始终代代相传，极大地激发了中国人的自豪、自尊和自信，为我们在新征程上奋进提供了强大的精神力量。</span>
            <hr style="height: 1px; margin: 22px 0px; border-right-width: initial; border-style: dotted none none; border-bottom-width: initial; border-left-width: initial; border-top-color: rgb(211, 211, 211); padding: 0px; font-family: Arial, 微软雅黑;">
            <p style="margin-bottom: 0px; padding: 0px; word-wrap: break-word; word-break: normal; font-family: Arial, 微软雅黑;">
              <span style="color: rgb(106, 106, 106); letter-spacing: 1.34px; font-family: 微软雅黑, " microsoft="" font-size:=""></span>
            </p>
            <span style="line-height: 2;">&nbsp; &nbsp; &nbsp;</span></div>
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