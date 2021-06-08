<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>找回密码</title>
<script language="javascript">
 function chkinput(form)
 {
   if(form.nc.value=="")
   {
    alert("请输入您的昵称!");
	form.nc.select();
	return(false);
   
   }
  return(true);
 }
</script>
<link rel="stylesheet" type="text/css" href="css/font.css">
</head>
<body topmargin="0" leftmargin="0" bottommargin="0">
<table width="200" height="100" border="0" align="center" cellpadding="0" cellspacing="0">

<form name="form1" method="post" action="findpwd.php" onSubmit="return chkinput(this)">
  <tr>
    <td height="30" bgcolor="#F0F0F0"><div align="center">找回密码</div></td>
  </tr>
  <tr>
    <td height="30" bgcolor="#FFFFFF"><div align="left">&nbsp;您的昵称:
        <input type="text" name="nc" size="20" class="inputcss">
    </div></td>
  </tr>
  <tr>
    <td height="35" bgcolor="#FFFFFF"><div align="center"><input name="submit" type="submit" class="buttoncss" id="submit" value="确定"></div></td>
  </tr>
</form>
</table>
</body>
</html>