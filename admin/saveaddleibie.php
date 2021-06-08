<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php
$leibie=$_POST[leibie];
include("conn/conn.php");
$sql=mysql_query("select * from tb_type where typename='".$leibie."'",$conn);
$info=mysql_fetch_array($sql);
if($info!=false){
 echo"<script>alert('该类别已经存在!');window.location.href='addleibie.php';</script>";
exit;
}
mysql_query("insert into tb_type(typename) values ('$leibie')",$conn);
echo"<script>alert('新类别添加成功!');window.location.href='addleibie.php';</script>";
?>
</body>
</html>