<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php
     $conn=mysql_connect("localhost","root","12345678") or die("数据库服务器连接错误".mysql_error());
     mysql_select_db("db_shop",$conn) or die("数据库访问错误".mysql_error());
 	 mysql_query("set character set utf-8");
     mysql_query("set names utf-8");
?>
</body>
</html>
