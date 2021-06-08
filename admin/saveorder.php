<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php  
$ysk=$_POST[ysk]."&nbsp;";
$yfh=$_POST[yfh]."&nbsp;";
$ysh=$_POST[ysh]."&nbsp;";
$zt="";
if($ysk!="&nbsp;"){
   $zt.=$ysk;
 }
if($yfh!="&nbsp;"){
   $zt.=$yfh;
 }
 if($ysh!="&nbsp;"){
   $zt.=$ysh;
 }
 if(($ysk=="&nbsp;")&&($yfh=="&nbsp;")&&($ysh=="&nbsp;")){
    echo "<script>alert('请选择处理状态!');history.back();</script>";
	exit;
  }
 include("conn/conn.php");
 $sql3=mysql_query("select * from tb_dingdan where id='".$_GET[id]."'",$conn);
 $info3=mysql_fetch_array($sql3);
 if(trim($info3[zt])=="未作任何处理"){
 $sql=mysql_query("select * from tb_dingdan where id='".$_GET[id]."'",$conn);
 $info=mysql_fetch_array($sql);
 $array=explode("@",$info[spc]);
 $arraysl=explode("@",$info[slc]);
 
 for($i=0;$i<count($array);$i++){
	 $id=$array[$i];
     $num=$arraysl[$i];
      mysql_query("update tb_shangpin set cishu=cishu+'".$num."' ,shuliang=shuliang-'".$num."' where id='".$id."'",$conn);
    }
  }
 mysql_query("update tb_dingdan set zt='".$zt."'where id='".$_GET[id]."'",$conn);
 header("location:lookdd.php");
?>
</body>
</html>