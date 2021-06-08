<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php
session_start();
include("conn/conn.php");
if($_SESSION[username]==""){
  echo "<script>alert('请先登录后购物。');history.back();</script>"; 
  exit;
 }
$id=strval($_GET[id]);
$sql=mysql_query("select * from tb_shangpin where id='".$id."'",$conn); 
$info=mysql_fetch_array($sql);
if($info[shuliang]<=0){
   echo "<script>alert('抱歉，该商品已经售完。');history.back();</script>";
   exit;
 }
  $array=explode("@",$_SESSION[producelist]);
  for($i=0;$i<count($array)-1;$i++){
	 if($array[$i]==$id){
	     echo "<script>alert('该商品已经在您的购物车中。');history.back();</script>";
		 exit;
	  }
	}
  $_SESSION[producelist]=$_SESSION[producelist].$id."@";
  $_SESSION[quatity]=$_SESSION[quatity]."1@";
  header("location:gouwuche.php");
?> 
</body>
</html>