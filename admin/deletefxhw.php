<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php
 include("conn/conn.php");
 while(list($name,$value)=each($_POST))
  {
      $sql=mysql_query("select tupian from tb_shangpin where id='".$value."'",$conn);
	  $info=mysql_fetch_array($sql);
	  if($info[tupian]!="")
	  {
	     @unlink(substr($info[tupian],6,(strlen($info[tupian])-6)));
		
	  }
	  $sql1=mysql_query("select * from tb_dingdan ",$conn);
	  while($info1=mysql_fetch_array($sql1))
	  {  $id1=$info1[id];
	     $array=explode("@",$info1[spc]);
	     for($i=0;$i<count($array);$i++){
	        if($array[$i]==$value)
			 {
			   mysql_query("delete from tb_dingdan where id='".$id1."'",$conn);
			 }
	      }
	  }
      mysql_query("delete from tb_shangpin where id='".$value."'",$conn);
	  mysql_query("delete from tb_pingjia where spid='".$value."'",$conn);
  }
 header("location:editgoods.php"); 
?>
</body>
</html>