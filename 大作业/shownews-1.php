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
    <title>习近平会见中国女排代表-中国女排</title>
    <meta name="description" content="新华社9月30日电（记者朱基钗）中共中央总书记、国家主席、中央军委主席习近平专门邀请刚刚获得2019年女排世界杯冠军的中国女排队员、教练员代表，参加庆祝中华人民共和国成立70周年招待会，并在会前亲切会见女排代表，同大家合影留念。　　下午4时45分，女排队员、教练员代表步入人民大会堂福建厅，习近平同大家一一握手。在听取了领队和教练员、运动员代表发言后，习近平表示，在举国上下庆祝新中国成立70周年的时">
    <link rel="stylesheet" type="text/css" href="css/basic.css">
    <link rel="stylesheet" type="text/css" href="css/common.css">
    <style>body{ background-color: !important;font-family: !important;} h1,h2,h3,h4,h5,h6{font-family: !important;}</style>
    <!--[if lte IE 9]>
      <script src="static/js/lteie9.js"></script>
    <![endif]--></head>
  <!--[if lte IE 8]>
    <div class="text-xs-center m-b-0 bg-blue-grey-100 alert">
      <button type="button" class="close" aria-label="Close" data-dismiss="alert">
        <span aria-hidden="true">×</span></button>你正在使用一个
      <strong>过时</strong>的浏览器。请
      <a href=https://browsehappy.com/ target=_blank>升级您的浏览器</a>，以提高您的体验。</div>
  <![endif]-->
  
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
                  <a href="index3.php" target='_self' title="新闻" class="nav-link active">新闻</a></li>
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
                <a href="index3.php" title="新闻" class=''>新闻</a></li>
            </ol>
          </div>
        </div>
      </div>
    </section>
    <main class="met-shownews animsition">
      <div class="container">
        <div class="row">
          <div class="col-md-9 met-shownews-body" m-id="noset">
            <div class="row">
              <section class="details-title">
                <h1 class='m-t-10 m-b-5'>习近平会见中国女排代表</h1>
                <div class="info font-weight-300">
                  <span>2019-10-11 18:23:54</span>
                  <span></span>
                  
                </div>
              </section>
              <section class="met-editor clearfix">
                <p style="padding: 0px; margin-top: 7px; margin-bottom: 0px; font-family: &quot;Microsoft YaHei&quot;; line-height: 22px; color: rgb(0, 0, 0); font-size: 14px; white-space: normal;">新华社9月30日电（记者朱基钗）中共中央总书记、国家主席、中央军委主席习近平专门邀请刚刚获得2019年女排世界杯冠军的中国女排队员、教练员代表，参加庆祝中华人民共和国成立70周年招待会，并在会前亲切会见女排代表，同大家合影留念。</p>
                <p style="padding: 0px; margin-top: 7px; margin-bottom: 0px; font-family: &quot;Microsoft YaHei&quot;; line-height: 22px; color: rgb(0, 0, 0); font-size: 14px; white-space: normal;">　　下午4时45分，女排队员、教练员代表步入人民大会堂福建厅，习近平同大家一一握手。在听取了领队和教练员、运动员代表发言后，习近平表示，在举国上下庆祝新中国成立70周年的时刻，我首先欢迎你们凯旋，向你们致以热烈的祝贺。</p>
                <p style="padding: 0px; margin-top: 7px; margin-bottom: 0px; font-family: &quot;Microsoft YaHei&quot;; line-height: 22px; color: rgb(0, 0, 0); font-size: 14px; white-space: normal;">　　习近平强调，在第十三届女排世界杯比赛中，你们以十一连胜的骄人成绩夺得了冠军，成功卫冕，为祖国和人民赢得了荣誉。你们不畏强手、敢打敢拼，打出了风格、赛出了水平。在提前一轮锁定冠军的情况下，你们在最后一场比赛中没有丝毫懈怠，尊重对手，尊重自己，坚持打好每一个球，很好诠释了奥林匹克精神和中华体育精神。中国女排夺得了第五个女排世界杯冠军，第十次荣膺世界排球“三大赛”冠军，激发了全国人民的爱国热情，增强了全国人民的民族自信心和自豪感。</p>
                <p style="padding: 0px; margin-top: 7px; margin-bottom: 0px; font-family: &quot;Microsoft YaHei&quot;; line-height: 22px; color: rgb(0, 0, 0); font-size: 14px; white-space: normal;">　　习近平指出，本届女排世界杯期间，全国人民都在关注你们，每一场比赛都有亿万人民为你们加油。38年前，中国女排首夺世界冠军时，举国上下心潮澎湃，亿万观众热泪盈眶。中国女排“五连冠”，万人空巷看女排。广大人民群众对中国女排的喜爱，不仅是因为你们夺得了冠军，更重要的是你们在赛场上展现了祖国至上、团结协作、顽强拼搏、永不言败的精神面貌。女排精神代表着一个时代的精神，喊出了为中华崛起而拼搏的时代最强音。平凡孕育着伟大。你们天天坚持训练，咬牙克服伤病，默默承受挫折，特别在低谷时仍有一批人默默工作、不计回报。正是因为有这么一批人，才有了中国女排今天的成绩。</p>
                <p style="padding: 0px; margin-top: 7px; margin-bottom: 0px; font-family: &quot;Microsoft YaHei&quot;; line-height: 22px; color: rgb(0, 0, 0); font-size: 14px; white-space: normal;">　　习近平强调，全面建设社会主义现代化强国，需要在各方面都强起来。实现体育强国目标，要大力弘扬新时代的女排精神，把体育健身同人民健康结合起来，把弘扬中华体育精神同坚定文化自信结合起来，坚持举国体制和市场机制相结合，不忘初心，持之以恒，努力开创新时代我国体育事业新局面。希望中国女排继续加油、再接再厉，期待你们在东京奥运会取得优异成绩。</p>
                <p style="padding: 0px; margin-top: 7px; margin-bottom: 0px; font-family: &quot;Microsoft YaHei&quot;; line-height: 22px; color: rgb(0, 0, 0); font-size: 14px; white-space: normal;">　　2019年女排世界杯9月14日至29日在日本举行，中国女排取得十一连胜的优异成绩，成功卫冕世界杯冠军。受到接见并聆听了总书记讲话，中国女排队员、教练员们倍感振奋。大家表示，在庆祝新中国70周年华诞之际，总书记的关心是对中国女排的莫大鼓励。一定要牢记总书记的嘱托，不骄不躁、再接再厉，保持昂扬斗志、不断拼搏奋斗，争创新的更加优异的成绩。</p>
                <p style="padding: 0px; margin-top: 7px; margin-bottom: 0px; font-family: &quot;Microsoft YaHei&quot;; line-height: 22px; color: rgb(0, 0, 0); font-size: 14px; white-space: normal;">　　丁薛祥、孙春兰和国家体育总局负责同志参加会见。</p>
                <p>
                  <br></p>
              </section>
              <div class='met-page met-shownews-footer border-top1'>
                <ul class="pagination block blocks-2 p-t-20">
                  <li class='page-item m-b-0 '>
                    <a href='shownews-2.php' title="中国女排王者凯旋 用金牌的光辉为国旗添彩" class='page-link text-truncate'>上一篇
                      <span aria-hidden="true" class='hidden-xs-down'>: 中国女排王者凯旋 用金牌的光辉为国旗添彩</span></a>
                  </li>
                  <li class='page-item m-b-0 disable'>
                    <a href='javascript:;' title="" class='page-link pull-xs-right text-truncate'>下一篇
                      <span aria-hidden="true" class='hidden-xs-down'>: 没有了</span></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <dv class="col-md-3">
            <div class="row">
              <div class="met-bar" m-id="news_bar" m-type="nocontent">
                <ul class="column list-icons">
                  <li>
                    <a href="index3.php" title="新闻" class="active" target='_self'>
                      <h3 class="font-weight-300">新闻</h3></a>
                  </li>
                </ul>
              </div>
            </div>
          </dv>
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
    <script src="js/basic.js" ></script>
    <script src="js/lang_json_cn.js"></script>
  </body>

</html>