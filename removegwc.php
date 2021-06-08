<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php
session_start();
$id=$_GET[id];
$arraysp=explode("@",$_SESSION[producelist]);
$arraysl=explode("@",$_SESSION[quatity]);
for($i=0;$i<count($arraysp);$i++){
   if($arraysp[$i]==$id){
	  $arraysp[$i]="";
	  $arraysl[$i]="";
	}
 }
$_SESSION[producelist]=implode("@",$arraysp);
$_SESSION[quatity]=implode("@",$arraysl);
header("location:gouwuche.php");
?>

</body>
</html>