<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
 $nc=trim($_GET[nc]);
?>
<?php
 include("conn/conn.php");
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>
昵称重用检测
</title>
<link rel="stylesheet" type="text/css" href="css/font.css">
</head>

<body>
<?php
 $nc=trim($_GET[nc]);
?>
<?php
 include("conn/conn.php");
?>
<html>

<body topmargin="0" leftmargin="0" bottommargin="0">
<table width="200" height="100" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#eeeeee">
  <tr>
    <td height="50"><div align="center">
	
	<?php
	  if($nc=="")
	  {
	    echo "请输入昵称!";
	  
	  }
	  else
	  {
	    $sql=mysql_query("select * from tb_user where name='".$nc."'",$conn);  
	    $info=mysql_fetch_array($sql);
		if($info==true)
		{
		  echo "对不起,该昵称已被占用!";
		}
		else
		{
		   echo "恭喜,该昵称没被占用!";
		} 
	  }
	?>
	</div></td>
  </tr>
  <tr>
    <td height="50"><div align="center"><input type="button" value="确定" class="buttoncss" onClick="window.close()"></div></td>
  </tr>
</table>
</body>
</html>