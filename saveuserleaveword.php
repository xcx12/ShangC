<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php
session_start();
$title=$_POST[title];
$content=$_POST[content];
$time=date("Y-m-j");
include("conn/conn.php");

$sql=mysql_query("select * from tb_user where name='".$_SESSION[username]."'",$conn);
$info=mysql_fetch_array($sql);
$userid=$info[id];
mysql_query("insert into tb_leaveword (title,content,time,userid) values ('$title','$content','$time','$userid')",$conn);
header("location:userleaveword.php");
?>
</body>
</html>