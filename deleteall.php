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
$username=$_SESSION[username];
$sql=mysql_query("select * from tb_user where name='".$username."'",$conn);
$info=mysql_fetch_array($sql);
$id=$info[id];
mysql_query("delete from tb_gowuche where userid=".$id."",$conn);
header("location:gouwuche.php");
?>
</body>
</html>