<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>后台管理</title>
<link rel="stylesheet" type="text/css" href="css/font.css">
</head>
<script language="javascript">
  function openspgl(){
    if(document.all.spgl.style.display=="none"){
	   document.all.spgl.style.display="";
	   document.all.d1.src="images/point3.jpg";
	 }
	 else{
	  document.all.spgl.style.display="none";
	  document.all.d1.src="images/point1.jpg";
	 }  
  }
  function openyhgl(){
    if(document.all.yhgl.style.display=="none"){
	   document.all.yhgl.style.display="";
	   document.all.d2.src="images/point3.jpg";
	 }
	 else{
	  document.all.yhgl.style.display="none";
	  document.all.d2.src="images/point1.jpg";
	 }  
  }
  function openddgl(){
    if(document.all.ddgl.style.display=="none"){
	   document.all.ddgl.style.display="";
	   document.all.d3.src="images/point3.jpg";
	 }
	 else{
	  document.all.ddgl.style.display="none";
	  document.all.d3.src="images/point1.jpg";
	 }  
  }
  function opengggl(){
    if(document.all.gggl.style.display=="none"){
	   document.all.gggl.style.display="";
	   document.all.d4.src="images/point3.jpg";
	 }
	 else{
	  document.all.gggl.style.display="none";
	  document.all.d4.src="images/point1.jpg";
	 }  
  }
</script>
<body topmargin="0" leftmargin="0" bottommargin="0">
<table width="212" border="0" cellpadding="0" cellspacing="0" background="left_bg.jpg">
  <tr>
    <td height="425" valign="top" background="images/left_bg.jpg"><div align="center">
      <table width="212" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td><table width="212" height="20" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td width="212" height="32" background="images/default_09.jpg" onClick="javascript:openspgl()"><div align="center"><a href="#"><img id="d1" border="0"src="images/point1.jpg" width="10" height="10">&nbsp;&nbsp; 商品管理</a></div></td>
            </tr>
          </table>
            <table width="212" border="0" cellpadding="0" cellspacing="0" id="spgl" style="display:">
              <tr>
                <td height="20" background="images/default_10.jpg">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                  <a href="addgoods.php" target="main">增加商品</a></td>
              </tr>
              <tr>
                <td height="22" background="images/default_10.jpg">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                  <a href="editgoods.php" target="main">修改商品</a></td>
              </tr>
              <tr>
                <td height="22" background="images/default_10.jpg">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                  <a href="showleibie.php" target="main">类别管理</a></td>
              </tr>
              <tr>
                <td height="26" background="images/default_10.jpg">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                  <a href="addleibie.php" target="main">添加类别</a></td>
              </tr>
            </table>
            <table width="212" height="20" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td height="32" background="images/default_09.jpg" onClick="javascript:openyhgl()"><div align="center"><a href="#"><img id="d2" border="0"src="images/point1.jpg" width="10" height="10"> &nbsp;&nbsp;用户管理</a></div></td>
              </tr>
            </table>
            <table width="212" border="0" cellpadding="0" cellspacing="0" id="yhgl" style="display:">
              <tr>
                <td height="22" background="images/default_10.jpg">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="edituser.php" target="main">会员管理</a></td>
              </tr>
              <tr>
                <td height="22" background="images/default_10.jpg">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="lookleaveword.php"  target="main">留言管理</a></td>
              </tr>
              <tr>
                <td height="26" background="images/default_10.jpg">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="changeadmin.php"  target="main">更改管理员</a></td>
              </tr>
            </table>
            <table width="212" height="20" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td height="32" align="center" background="images/default_09.jpg" onClick="javascript:openddgl()"><a href="#"><img id="d3" border="0"src="images/point1.jpg" width="10" height="10">&nbsp; &nbsp;订单管理</a></td>
              </tr>
            </table>
            <table width="212" border="0" cellpadding="0" cellspacing="0" id="ddgl" style="display:">
              <tr>
                <td height="22" background="images/default_10.jpg">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="lookdd.php" target="main">编辑订单</a></td>
              </tr>
              <tr>
                <td height="26" background="images/default_10.jpg">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="finddd.php" target="main">查询订单</a></td>
              </tr>
            </table>
            <table width="212" height="20" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td height="32" background="images/default_09.jpg" onClick="javascript:opengggl()"><div align="center"><a href="#"><img id="d4" border="0"src="images/point1.jpg" width="10" height="10">&nbsp; &nbsp;信息管理</a></div></td>
              </tr>
            </table>
            <table width="212" border="0" cellpadding="0" cellspacing="0" id="gggl" style="display:">
              <tr>
                <td height="22" background="images/default_10.jpg">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="admingonggao.php " target="main">管理公告</a></td>
              </tr>
              <tr background="images/default_10.jpg">
                <td height="22" background="images/default_10.jpg">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                
                  <a href="addgonggao.php " target="main">发布公告</a></td>
              </tr>
              <tr>
                <td height="26" background="images/default_10.jpg">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="editpinglun.php " target="main">管理</a><a href="editpinglun.php " target="main">评价</a></td>
              </tr>
			<tr><td height="100" >&nbsp;</td>
			</tr>
			<tr><td height="3" ></td>
			<tr><td height="100">&nbsp;</td>
			</tr>
            </table>
			</td>
        </tr>
      </table>
      </div></td>
  </tr>
</table>
</body>
</html>