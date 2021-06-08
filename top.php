<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
	session_start();
	include("conn/conn.php");
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>婚纱电子商城网站</title>
<link rel="stylesheet" type="text/css" href="CSS/font.css" />
</head>

<body>
<table width="766" border="0" align="center" cellspacing="0" cellpadding="0" background="images1/bannerdi.jpg">
 <tr>
    <td colspan="3" valign="bottom"><table width="766" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
  <td width="224" height="83">&nbsp;</td>
  <td align="right"><p>&nbsp;</p>
  <table height="20" border="0" align="center" cellpadding="0" cellspacing="0">
 </table></td>
  </tr>
  </table></td>
  </tr>
  <tr>

    <td width="568" height="32" bgcolor="#FFFFFF">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <a href="index.php">首&nbsp;&nbsp;&nbsp;页</a>|
  <a href="shownewpr.php">最新婚纱</a>&nbsp;|
  <a href="shoutuijian.php">推荐品牌</a>&nbsp;|
  <a href="showhot.php">热门品牌</a>&nbsp;|
  <a href="showfenlei.php">婚纱分类</a>&nbsp;|
  <a href="usercenter.php">会员中心</a>&nbsp;|
  <a href="finddd.php">订单查询</a>&nbsp;|
  <a href="gouwuche.php">购物车</a>
  </td>
    <td width="160" align="center" bgcolor="#FFFFFF">
    <?php
	if($_SESSION[username]!=""){
		echo "用户:$_SESSION[username]&nbsp;欢迎您!";
	}
	?>
    </td>
    <td width="80" align="center" bgcolor="#FFFFFF">
    <?php
	if($_SESSION[username]!=""){
		echo "<a href='logout.php'>退出账号</a>";
	}
	?>
    </td>
  </tr>
</table>

</body>
</html>