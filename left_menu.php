<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php include("Conn/conn.php");?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<style type="text/css">
.style1{
	text-align:center;
	}
</style>
</head>

<body>
<table width="209" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td height="153" ><table width="209" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td height="20" colspan="3">　用户系统：</td>
            </tr>
            <tr>
              <td width="15">&nbsp;</td>
              <td width="177"><table width="180" height="10" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  <td valign="top"><table width="100%" height="100" border="0" align="center" cellpadding="0" cellspacing="1">
                      <tr>
                        <td><table width="180" height="100" border="0" align="center" cellpadding="0" cellspacing="0">
                            <tr>
                              <td><table width="180" border="0" cellpadding="0" cellspacing="0">
                           <script language="javascript">
							 function chkuserinput(form){
							   if(form.username.value==""){
								  alert("请输入用户名!");
								  form.username.select();
								  return(false);
								}		
								if(form.userpwd.value==""){
								  alert("请输入用户密码!");
								  form.userpwd.select();
								  return(false);
								}	
								if(form.yz.value==""){
								  alert("请输入验证码!");
								  form.yz.select();
								  return(false);
								}	
							   return(true);				 
							 }
						  </script>
                                  <script language="javascript">
						    function openfindpwd(){
							window.open("openfindpwd.php","newframe","left=200,top=200,width=200,height=100,menubar=no,toolbar=no,location=no,scrollbars=no,location=no");
							   }
						</script>
                                  <form name="form2" method="post" action="chkuser.php" onSubmit="return chkuserinput(this)">
                                    <tr>
                                      <td height="10" colspan="3">&nbsp;</td>
                                    </tr>
                                    <tr>
                                      <td width="50" height="20"><div align="right">用户：</div></td>
                                      <td height="20" colspan="2"><div align="left">
                                          <input type="text" name="username" size="19" class="inputcss" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'">
                                      </div></td>
                                    </tr>
                                    <tr>
                                      <td height="20"><div align="right">密码：</div></td>
                                      <td colspan="2"><div align="left">
                                          <input type="password" name="userpwd" size="19" class="inputcss" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'">
                                      </div></td>
                                    </tr>
                                    <tr>
                                      <td height="20"><div align="right">验证：</div></td>
                                      <td width="66" height="20"><div align="left">
                                          <input type="text" name="yz" size="10" class="inputcss" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'">
                                      </div></td>
                                      <td width="64"><div align="left"> &nbsp;
                                              <?php
									   $num=intval(mt_rand(1000,9999));
									   for($i=0;$i<4;$i++){
										echo "<img src=images1/code/".substr(strval($num),$i,1).".jpg>";
									   }
									?>
                                      </div></td>
                                    </tr>
                                    <tr>
                                      <td height="20" colspan="3">                                        <div align="right">
                                          <input type="hidden" value="<?php echo $num;?>" name="num">
                                          <input name="submit" type="submit" class="buttoncss" value="提 交">
<a href="agreereg.php">注册</a>&nbsp;<a href="javascript:openfindpwd()">找回密码</a>&nbsp;</div></td>
                                    </tr>
                                  </form>
                              </table></td>
                            </tr>
                        </table></td>
                      </tr>
                  </table></td>
                </tr>
              </table></td>
              <td width="17">&nbsp;</td>
            </tr>
            <tr>
              <td colspan="3">&nbsp;</td>
            </tr>
          </table></td>
        </tr>
        <tr>
          <td height="20">　品牌公告：　　　　　<a href="gonggaolist.php">更多&gt;&gt;</a></td>
        </tr>
        <tr>
          <td height="40" ><table width="180"  border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td><table width="180"  border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="5"></td>
                  </tr>
                  <?php
								 $sql=mysql_query("select * from tb_gonggao order by time desc limit 0,5",$conn);
								 $info=mysql_fetch_array($sql);
								 if($info==false){
				  ?>
                  <tr>
                    <td height="20" align="center">暂无新闻公告!</td>
                  </tr>
                  <?php
								 }
								 else{
								   do{
				  ?>
                  <tr>
                    <td height="20"><div align="center">
                      <table width="180"  border="0" align="center" cellpadding="0" cellspacing="0">
                        <tr>
                          <td width="16" height="5"><div align="center"><img src="images/circle.gif" width="11" height="12"></div></td>
                          <td width="164" height="24"><div align="left"> <a href="gonggao.php?id=<?php echo $info[id];?>">
                              <?php 
								 echo substr($info[title],0,24);
								  if(strlen($info[title])>24){
									echo "...";
								  } 
							   ?>
                          </a> </div></td>
                        </tr>
                      </table> 
                      </div></td>
                  </tr>
                  <?php
									 }
								   while($info=mysql_fetch_array($sql));
								 }
								?>
              </table></td>
            </tr>
          </table></td>
        </tr>
        <tr>
          <td height="6"></td>
        </tr>
        <tr>
          <form name="form" method="post" action="serchorder.php">
                <tr>              
                  <td width="500" height="30" valign="middle">
                  <div align="left">&nbsp;<span class="style1">&nbsp;站内搜索：<br />
                  </span>
           <input type="text" name="name" size="12" class="inputcss" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'">
                          <span class="style1"></span>
                          <input type="hidden" name="jdcz" value="jdcz">
                          <input name="submit" type="submit" class="buttoncss" value="搜索">
                          <input name="button" type="button" class="buttoncss" onClick="javascript:window.location='highsearch.php';" value="高级">
</div></td>
                </tr>
              </form>
        </tr>
        <tr>
          <td valign="top" >&nbsp;</td>
        </tr>
        <tr>
          <td height="6"></td>
        </tr>
      </table>
</body>
</html>