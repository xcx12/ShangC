<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>找回密码</title>
<link rel="stylesheet" type="text/css" href="css/font.css">
</head>
<?php
 include("conn/conn.php");
 $nc=$_POST[nc];
 $da=$_POST[da];
 $sql=mysql_query("select * from tb_user where name='".$nc."'",$conn);
 $info=mysql_fetch_array($sql);
 if($info[huida]!=$da)
 {
   echo "<script>alert('提示答案输入错误!');history.back();</script>";
  exit;
 }
 else
 {
?>
<body topmargin="0" leftmargin="0" bottommargin="0">
<table width="200" height="100" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr bgcolor="#FFEDBF">
    <td height="25" colspan="2" bgcolor="#F0F0F0"><div align="center">找回密码</div></td>
  </tr>
  <tr bgcolor="#FFFFFF">
    <td width="76" height="25"><div align="center">昵称：</div></td>
    <td width="124"><div align="left"><?php echo $nc;?></div></td>
  </tr>
  <tr bgcolor="#FFFFFF">
    <td height="25"><div align="center">密码：</div></td>
    <td height="25"><div align="left"><?php echo $info[pwd1];?></div></td>
  </tr>
  <tr bgcolor="#FFFFFF">
    <td height="25" colspan="2"><div align="center"><input name="submit" type="button" id="submit" onClick="window.close()"  value="确定">
    </div></td>
  </tr>
</table>
<?php
  }
?>
</body>
</html>