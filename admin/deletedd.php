<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php
  $page=intval($_POST[page_id]);
  include("conn/conn.php");
  while(list($value,$name)=each($_POST))
   {  
     mysql_query("delete from tb_dingdan where id='".$value."'",$conn);
   }
 header("location:lookdd.php?page=".$page."");
?>
</body>
</html>