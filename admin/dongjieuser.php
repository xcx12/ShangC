<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php
include("conn/conn.php");
$id=$_GET[id];
$sql=mysql_query("select * from tb_user where id=".$id."",$conn);
$info=mysql_fetch_array($sql);
if($info[dongjie]==0)
   {
     mysql_query("update tb_user set dongjie=1 where id='".$id."'",$conn);
   }
 else
  {
     mysql_query("update tb_user set dongjie=0 where id='".$id."'",$conn); 
  }
 header("location:lookuserinfo.php?id=".$id."");   
?>
</body>
</html>