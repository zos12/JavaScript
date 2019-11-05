<?php
    header('Content-type: text/html; charset=UTF8');
include_once("connet.php");
include_once("mysqlconfig.php");
session_start();
$txt = $_POST['txt'];
$user=$_SESSION["uid"];
$ma1=new DB();
    $link=$ma1->connect();
    $sql = "insert into comments(user,comment)values('$user','$txt')";
if($_SESSION["uid"] == ""){
	echo '<script>alert("请先登录");location.href="login-cn.php";</script>';
}else{
if($txt == ""){
   echo '<script language="javascript">alert("内容不能为空");</script>';
    echo "<script> window.location.href='$_SERVER[HTTP_REFERER]';</script>";
   exit();
}
$query = mysqli_query($link, $sql);

if($query) {
  echo "<script> alert('成功发表评论！');</script>";
    echo "<script> window.location.href='$_SERVER[HTTP_REFERER]';</script>";
	exit();
}
    else{
      echo '<script>alert("error");</script>';
     echo "<script> window.location.href='$_SERVER[HTTP_REFERER]';</script>";
    
            }
}	
?>