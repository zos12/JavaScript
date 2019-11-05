<?php
require_once "connet.php";
require_once 'mysqlconfig.php';
session_start();
session_destroy();
unset($_SESSION["uid"]);
echo "<script>location.href='index.php';</script>";
?>