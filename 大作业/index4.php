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
    <title>荣誉-中国女排</title>
    <link rel="stylesheet" type="text/css" href="css/basic.css">
    <link rel="stylesheet" type="text/css" href="css/common.css">
    <style>body{ background-color: !important;font-family: !important;} h1,h2,h3,h4,h5,h6{font-family: !important;}
  table, th, td
{
    border: 1px solid black;
}</style>
   </head>
  <body>
    <header class='met-head' m-id='met_head' m-type="head_nav">
      <nav class="navbar navbar-default box-shadow-none met-nav">
        <div class="container">
          <div class="row">
            <div class='met-nav-btn'>
              <h1 hidden="">荣誉</h1>
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
                    <a href="index1.php" target='_self' title="简介" class='dropdown-item '>简介</a></div>
                </li>
                <li class='nav-item'>
                  <a href="index2.php" target='_self' title="赛事" class="nav-link ">赛事</a></li>
                <li class='nav-item'>
                  <a href="index3.php" target='_self' title="新闻" class="nav-link ">新闻</a></li>
                <li class='nav-item'>
                  <a href="" target='_self' title="荣誉" class="nav-link active">荣誉</a></li>
                <li class='nav-item'>
                  <a href="index5.php" target='_self' title="图集" class="nav-link ">图集</a></li>
              </ul>
            </div>
          </div>
        </div>
      </nav>
    </header>
    <div class="met-banner-ny vertical-align text-center" m-id="banner">
      <h2 class="vertical-align-middle">荣誉</h2></div>
    <section class="met-crumbs hidden-sm-down" m-id='met_position' m-type='nocontent'>
      <div class="container">
        <div class="row">
          <div class="border-bottom clearfix">
            <ol class="breadcrumb m-b-0 subcolumn-crumbs breadcrumb-arrow">
              <li class='breadcrumb-item'>你的位置</li>
              <li class='breadcrumb-item'>
                <a href="index.php" title="首页" class='icon wb-home'>首页</a></li>
              <li class='breadcrumb-item'>
                <a href="" title="荣誉" class=''>荣誉</a></li>
            </ol>
          </div>
        </div>
      </div>
    </section>
    <section class="met-show-body" m-id="noset">
      <div class="container">
        <div class="met-editor clearfix m-y-30">
          <p>
            <strong>
              <span style="font-family: inherit; font-size: 24px;">赛场荣誉</span></strong>
          </p>
          <table log-set-param="table_view" class="table-view log-set-param" data-sort="sortDisabled">
            <tbody>
              <tr class="firstRow">
                <th width="58" style="padding-top: 2px; padding-bottom: 2px; font-size: 12px; line-height: 22px; height: 23px; border-color: rgb(230, 230, 230); background-color: rgb(248, 248, 248);">冠军类别</th>
                <th width="120" style="padding-top: 2px; padding-bottom: 2px; font-size: 12px; line-height: 22px; height: 23px; border-color: rgb(230, 230, 230); background-color: rgb(248, 248, 248);">赛事</th>
                <th width="436" style="padding-top: 2px; padding-bottom: 2px; font-size: 12px; line-height: 22px; height: 23px; border-color: rgb(230, 230, 230); background-color: rgb(248, 248, 248);">夺冠年份</th></tr>
              <tr>
                <td width="29" height="22" align="center" valign="middle" rowspan="4" style="margin: 0px; padding-top: 2px; padding-bottom: 2px; font-size: 12px; line-height: 22px; border-color: rgb(230, 230, 230);">
                  <div class="para" label-module="para" style="font-size: 12px; word-wrap: break-word; margin: 0px; line-height: 24px; zoom: 1; height: auto;">世界冠军</div></td>
                <td width="120" align="center" valign="middle" style="margin: 0px; padding-top: 2px; padding-bottom: 2px; font-size: 12px; line-height: 22px; border-color: rgb(230, 230, 230);" height="22">
                  <div class="para" label-module="para" style="font-size: 12px; word-wrap: break-word; margin: 0px; line-height: 24px; zoom: 1; height: auto;">奥林匹克运动会</div></td>
                <td valign="top" align="left" width="436" style="margin: 0px; padding-top: 2px; padding-bottom: 2px; font-size: 12px; line-height: 22px; border-color: rgb(230, 230, 230);" height="22">
                  <div class="para" label-module="para" style="font-size: 12px; word-wrap: break-word; margin: 0px; line-height: 24px; zoom: 1; height: auto;">1984年、2004年、2016年</div></td>
              </tr>
              <tr>
                <td width="29" align="center" valign="middle" style="margin: 0px; padding-top: 2px; padding-bottom: 2px; font-size: 12px; line-height: 22px; border-color: rgb(230, 230, 230);" height="22">
                  <div class="para" label-module="para" style="font-size: 12px; word-wrap: break-word; margin: 0px; line-height: 24px; zoom: 1; height: auto;">世界女子排球锦标赛</div></td>
                <td valign="top" align="left" width="451" style="margin: 0px; padding-top: 2px; padding-bottom: 2px; font-size: 12px; line-height: 22px; border-color: rgb(230, 230, 230);" height="22">
                  <div class="para" label-module="para" style="font-size: 12px; word-wrap: break-word; margin: 0px; line-height: 24px; zoom: 1; height: auto;">1982年、1986年</div></td>
              </tr>
              <tr>
                <td width="29" align="center" valign="middle" style="margin: 0px; padding-top: 2px; padding-bottom: 2px; font-size: 12px; line-height: 22px; border-color: rgb(230, 230, 230);" height="22">
                  <div class="para" label-module="para" style="font-size: 12px; word-wrap: break-word; margin: 0px; line-height: 24px; zoom: 1; height: auto;">女排世界杯</div></td>
                <td valign="top" align="left" width="451" style="margin: 0px; padding-top: 2px; padding-bottom: 2px; font-size: 12px; line-height: 22px; border-color: rgb(230, 230, 230);" height="22">
                  <div class="para" label-module="para" style="font-size: 12px; word-wrap: break-word; margin: 0px; line-height: 24px; zoom: 1; height: auto;">1981年、1985年、2003年、2015年、2019年</div></td>
              </tr>
              <tr>
                <td width="29" align="center" valign="middle" style="margin: 0px; padding-top: 2px; padding-bottom: 2px; font-size: 12px; line-height: 22px; border-color: rgb(230, 230, 230);" height="22">
                  <div class="para" label-module="para" style="font-size: 12px; word-wrap: break-word; margin: 0px; line-height: 24px; zoom: 1; height: auto;">国际排联大冠军杯</div></td>
                <td valign="top" align="left" width="451" style="margin: 0px; padding-top: 2px; padding-bottom: 2px; font-size: 12px; line-height: 22px; border-color: rgb(230, 230, 230);" height="22">
                  <div class="para" label-module="para" style="font-size: 12px; word-wrap: break-word; margin: 0px; line-height: 24px; zoom: 1; height: auto;">2001年、2017年</div></td>
              </tr>
              <tr>
                <td width="29" height="22" align="center" valign="middle" rowspan="3" style="margin: 0px; padding-top: 2px; padding-bottom: 2px; font-size: 12px; line-height: 22px; border-color: rgb(230, 230, 230);">
                  <div class="para" label-module="para" style="font-size: 12px; word-wrap: break-word; margin: 0px; line-height: 24px; zoom: 1; height: auto;">洲际冠军</div></td>
                <td width="120" align="center" valign="middle" style="margin: 0px; padding-top: 2px; padding-bottom: 2px; font-size: 12px; line-height: 22px; border-color: rgb(230, 230, 230);" height="22">
                  <div class="para" label-module="para" style="font-size: 12px; word-wrap: break-word; margin: 0px; line-height: 24px; zoom: 1; height: auto;">亚洲女排锦标赛</div></td>
                <td valign="top" align="left" width="436" style="margin: 0px; padding-top: 2px; padding-bottom: 2px; font-size: 12px; line-height: 22px; border-color: rgb(230, 230, 230);" height="22">
                  <div class="para" label-module="para" style="font-size: 12px; word-wrap: break-word; margin: 0px; line-height: 24px; zoom: 1; height: auto;">1979年、1987年、1989年、1991年、1993年、1995年、1997年、1999年、2001年、2003年、2005年、2011年、2015年</div></td>
              </tr>
              <tr>
                <td width="29" align="center" valign="middle" style="margin: 0px; padding-top: 2px; padding-bottom: 2px; font-size: 12px; line-height: 22px; border-color: rgb(230, 230, 230);" height="22">
                  <div class="para" label-module="para" style="font-size: 12px; word-wrap: break-word; margin: 0px; line-height: 24px; zoom: 1; height: auto;">亚洲运动会</div></td>
                <td valign="top" align="left" width="451" style="margin: 0px; padding-top: 2px; padding-bottom: 2px; font-size: 12px; line-height: 22px; border-color: rgb(230, 230, 230);" height="22">
                  <div class="para" label-module="para" style="font-size: 12px; word-wrap: break-word; margin: 0px; line-height: 24px; zoom: 1; height: auto;">1982年、1986年、1990年、1998年、2002年、2006年、2010年</div></td>
              </tr>
              <tr>
                <td width="29" align="center" valign="middle" style="margin: 0px; padding-top: 2px; padding-bottom: 2px; font-size: 12px; line-height: 22px; border-color: rgb(230, 230, 230);" height="22">
                  <div class="para" label-module="para" style="font-size: 12px; word-wrap: break-word; margin: 0px; line-height: 24px; zoom: 1; height: auto;">女排亚洲杯</div></td>
                <td valign="top" align="left" width="451" style="margin: 0px; padding-top: 2px; padding-bottom: 2px; font-size: 12px; line-height: 22px; border-color: rgb(230, 230, 230); word-break: break-all;" height="22">
                  <div class="para" label-module="para" style="font-size: 12px; word-wrap: break-word; margin: 0px; line-height: 24px; zoom: 1; height: auto;">2008年、2010年、2014年&nbsp; 、2016年&nbsp;、2018年
                    <span class="sup--normal" data-sup="74" data-ctrmap=":74," style="font-size: 12px; line-height: 0; position: relative; vertical-align: baseline; top: -0.5em; margin-left: 2px; color: rgb(51, 102, 204); cursor: pointer; padding: 0px 2px;">&nbsp;</span></div>
                </td>
              </tr>
              <tr>
                <td width="29" height="22" align="center" valign="middle" rowspan="4" style="margin: 0px; padding-top: 2px; padding-bottom: 2px; font-size: 12px; line-height: 22px; border-color: rgb(230, 230, 230);">
                  <div class="para" label-module="para" style="font-size: 12px; word-wrap: break-word; margin: 0px; line-height: 24px; zoom: 1; height: auto;">其他赛事</div></td>
                <td width="120" align="center" valign="middle" style="margin: 0px; padding-top: 2px; padding-bottom: 2px; font-size: 12px; line-height: 22px; border-color: rgb(230, 230, 230);" height="22">
                  <div class="para" label-module="para" style="font-size: 12px; word-wrap: break-word; margin: 0px; line-height: 24px; zoom: 1; height: auto;">世界女排大奖赛</div></td>
                <td valign="top" align="left" width="436" style="margin: 0px; padding-top: 2px; padding-bottom: 2px; font-size: 12px; line-height: 22px; border-color: rgb(230, 230, 230);" height="22">
                  <div class="para" label-module="para" style="font-size: 12px; word-wrap: break-word; margin: 0px; line-height: 24px; zoom: 1; height: auto;">2003年</div></td>
              </tr>
              <tr>
                <td width="29" align="center" valign="middle" style="margin: 0px; padding-top: 2px; padding-bottom: 2px; font-size: 12px; line-height: 22px; border-color: rgb(230, 230, 230);" height="22">
                  <div class="para" label-module="para" style="font-size: 12px; word-wrap: break-word; margin: 0px; line-height: 24px; zoom: 1; height: auto;">瑞士女排精英赛</div></td>
                <td valign="top" align="left" width="460" style="margin: 0px; padding-top: 2px; padding-bottom: 2px; font-size: 12px; line-height: 22px; border-color: rgb(230, 230, 230);" height="22">
                  <div class="para" label-module="para" style="font-size: 12px; word-wrap: break-word; margin: 0px; line-height: 24px; zoom: 1; height: auto;">1990年、2000年、2003年、2007年、2010年、2016年</div></td>
              </tr>
              <tr>
                <td width="29" align="center" valign="middle" style="margin: 0px; padding-top: 2px; padding-bottom: 2px; font-size: 12px; line-height: 22px; border-color: rgb(230, 230, 230);" height="22">
                  <div class="para" label-module="para" style="font-size: 12px; word-wrap: break-word; margin: 0px; line-height: 24px; zoom: 1; height: auto;">俄罗斯总统杯</div></td>
                <td valign="top" align="left" width="460" style="margin: 0px; padding-top: 2px; padding-bottom: 2px; font-size: 12px; line-height: 22px; border-color: rgb(230, 230, 230);" height="22">
                  <div class="para" label-module="para" style="font-size: 12px; word-wrap: break-word; margin: 0px; line-height: 24px; zoom: 1; height: auto;">2006年、2007年、2011年</div></td>
              </tr>
              <tr>
                <td width="29" align="center" valign="middle" style="margin: 0px; padding-top: 2px; padding-bottom: 2px; font-size: 12px; line-height: 22px; border-color: rgb(230, 230, 230);" height="22">
                  <div class="para" label-module="para" style="font-size: 12px; word-wrap: break-word; margin: 0px; line-height: 24px; zoom: 1; height: auto;">东亚运动会</div></td>
                <td valign="top" align="left" width="460" style="margin: 0px; padding-top: 2px; padding-bottom: 2px; font-size: 12px; line-height: 22px; border-color: rgb(230, 230, 230);" height="22">
                  <div class="para" label-module="para" style="font-size: 12px; word-wrap: break-word; margin: 0px; line-height: 24px; zoom: 1; height: auto;">2001年、2009年</div></td>
              </tr>
            </tbody>
          </table>
          <p>
            <br></p>
          <p>
            <span style="font-size: 24px;">
              <strong>社会荣誉</strong></span>
          </p>
          <p>2005年12月7日，2004年“感动中国”人物颁奖典礼中，中国女排获得此项殊荣，成为唯一获得这个奖项的集体 。</p>
          <p>2012年1月15日，“2011年CCTV体坛风云人物年度评选”揭晓暨颁奖盛典在国家体育馆举行，在年度最佳团队奖评选中，在世界杯赛上获得第三名、收获伦敦奥运会入场券的中国女排最终获得这一荣誉&nbsp; &nbsp;。</p>
          <p>2015年2月1日，中国女子排球队获得2014年体坛风云人物最佳团队奖&nbsp; 。</p>
          <p>2016年1月24日，蝉联获得2015年CCTV体坛风云人物最佳团队奖 。3月25日，“影响世界华人盛典”在北京清华大学举行，中国女子排球队获得“影响世界华人大奖”&nbsp; 。8月30日，中华全国总工会授予</p>
          <p>中国国家女子排球队全国五一劳动奖状 。12月15日，获得2016年CCTV体坛风云人物年度最佳团队奖提名奖 。</p>
          <p>2017年2月8日，获得“感动中国2016年度人物”致敬奖。</p>
          <p>2017年12月5日，中国国家女子排球队入选2017CCTV体坛风云人物年度最佳团队奖候选名单。</p>
          <p>
            <br></p>
          <p>
            <br></p>
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
                    <p><input type="submit" class='btn'value="发表" id="add"  style="background-color: #1A94E6;" /></p>
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