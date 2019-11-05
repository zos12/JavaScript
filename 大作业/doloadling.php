<?php
require_once "connet.php";
require_once 'mysqlconfig.php';
$id=$_POST['uid'];
session_start();
$_SESSION["uid"]=$id;
$password=$_POST['password'];
$ma1=new DB();
   $link=$ma1->connect();
   $sql = "select * from tbl_ms where username='$id' and password='$password'";  
   $res = $ma1->CheckUser($link,$sql);
   if($res){
            echo '<script language="javascript">location.href="index.php";</script>';
            exit();
   };
   if(!$res){
      unset($_SESSION["uid"]);
   		echo "<script>alert('登陆失败');location.href='login-cn.php'</script>";
         exit();
   };

?>