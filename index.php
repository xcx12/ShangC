<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<link href="css/font.css" rel="stylesheet">
<table width="766" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><?php
 include("top.php");
?>
</td>
  </tr>
  <tr>
    <td bgcolor="#F5F5F5"><table width="766" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td width="209" valign="top" bgcolor="#F5F5F5"><?php include("left_menu.php");?></td>
        <td width="557" height="438" align="center" valign="top" bgcolor="#F5F5F5"><table width="557"  border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="553" bgcolor="#FFFFFF"><table width="548" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  <td width="557"  height="50">　推荐品牌：　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　<a href="showtuijian.php">更多..</a></td>
                </tr>
              </table>
                <table width="550" border="00" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="555" height="110"><table width="530" height="110" border="0" align="center" cellpadding="0" cellspacing="0">
                        <tr>
                          <td width="265">
               <?php
			  $sql=mysql_query("select * from tb_shangpin where tuijian=1 order by addtime desc limit 0,1");
			  $info=mysql_fetch_array($sql);
			  if($info==false){
			   echo "本站暂无推荐商品!";
			  }
			  else{
			  ?>
                            <table width="270"  border="0" cellspacing="0" cellpadding="0">
                              <tr>
                                <td width="130" rowspan="5"><div align="center">
                                    <?php
				    if(trim($info[tupian]=="")){
					  echo "暂无图片";
					}
					else{
				  ?>
                                    <img src="<?php echo $info[tupian];?>" width="90" height="120" border="0">
                                    <?php
				     }
				  ?>
                                </div></td>
                                <td width="11" height="16">&nbsp;</td>
                                <td width="124"><font color="FF6501"><img src="images1/circle.jpg" width="10" height="10">&nbsp;<?php echo $info[mingcheng];?></font></td>
                              </tr>
                              <tr>
                                <td height="16">&nbsp;</td>
                                <td><font color="#000000">市场价：</font><font color="FF6501"><?php echo $info[shichangjia];?></font></td>
                              </tr>
                              <tr>
                                <td height="16">&nbsp;</td>
                                <td><font color="#000000">会员价：</font><font color="FF6501"><?php echo $info[huiyuanjia];?></font></td>
                              </tr>
                              <tr>
                                <td height="16">&nbsp;</td>
                                <td><font color="#000000">剩余数量：</font><font color="13589B">                                  <?php 
				  if($info[shuliang]>0)
				  {
				     echo $info[shuliang];
				  }
				  else
				  {
				     echo "已售完";
				  }
				  ?>
</font></td>
                              </tr>
                              <tr>
                                <td height="30" colspan="2"><a href="lookinfo.php?id=<?php echo $info[id];?>"><img src="images1/b3.jpg" width="34" height="15" border="0"></a> <a href="addgouwuche.php?id=<?php echo $info[id];?>"><img src="images1/b1.jpg" width="50" height="15" border="0"></a>                                 </td>
                              </tr>
                            </table>
                            <?php
			   }
			  ?>
                          </td>
                          <td width="265">
                            <?php
			  $sql=mysql_query("select * from tb_shangpin where tuijian=1 order by addtime desc limit 1,1");
			  $info=mysql_fetch_array($sql);
			  if($info==true)
			  {
			  ?>
                            <table width="270"  border="0" cellspacing="0" cellpadding="0">
                              <tr>
                                <td width="130" rowspan="5"><div align="center">
                                    <?php
				    if(trim($info[tupian]=="")){
					  echo "暂无图片";
					}
					else{
				  ?>
                                    <img src="<?php echo $info[tupian];?>" width="90" height="120" border="0">
                                    <?php
				     }
				  ?>
                                </div></td>
                                <td width="11" height="16">&nbsp;</td>
                                <td width="124"><font color="FF6501"><img src="images1/circle.jpg" width="10" height="10">&nbsp;<?php echo $info[mingcheng];?></font></td>
                              </tr>
                              <tr>
                                <td height="16">&nbsp;</td>
                                <td><font color="#000000">市场价：</font><font color="FF6501"><?php echo $info[shichangjia];?></font></td>
                              </tr>
                              <tr>
                                <td height="16">&nbsp;</td>
                                <td><font color="#000000">会员价：</font><font color="FF6501"><?php echo $info[huiyuanjia];?></font></td>
                              </tr>
                              <tr>
                                <td height="16">&nbsp;</td>
                                <td><font color="#000000">剩余数量：</font><font color="13589B">
                                  <?php 
				  if($info[shuliang]>0)
				  {
				     echo $info[shuliang];
				  }
				  else
				  {
				     echo "已售完";
				  }
				  ?>
                                </font></td>
                              </tr>
                              <tr>
                                <td height="30" colspan="2"><a href="lookinfo.php?id=<?php echo $info[id];?>"><img src="images1/b3.jpg" width="34" height="15" border="0"></a> <a href="addgouwuche.php?id=<?php echo $info[id];?>"><img src="images1/b1.jpg" width="50" height="15" border="0"></a> </td>
                              </tr>
                            </table>
                            <?php
			    }
			   ?>
                          </td>
                        </tr>
                    </table></td>
                  </tr>
                  <tr>
                    <td height="10" background="images1/line1.jpg"></td>
                  </tr>
                </table>
                <table width="548" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="46">　最新婚纱：　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　<a href="shownewpr.php">更多..</a></td>
                  </tr>
                </table>
                <table width="543" border="00" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="543" height="110"><table width="540" height="110" border="0" align="center" cellpadding="0" cellspacing="0">
                        <tr>
                          <td width="265">
                            <?php
			  $sql=mysql_query("select * from tb_shangpin order by addtime desc limit 0,1");
			  $info=mysql_fetch_array($sql);
			  if($info==false){
			   echo "本站暂无推荐产品!";
			  }
			  else{
			  ?>
                            <table width="270"  border="0" cellspacing="0" cellpadding="0">
                              <tr>
                                <td width="130" rowspan="5"><div align="center">
                                    <?php
				    if(trim($info[tupian]=="")){
					  echo "暂无图片";
					}
					else{
				  ?>
                                    <img src="<?php echo $info[tupian];?>" width="90" height="120" border="0">
                                    <?php
				     }
				  ?>
                                </div></td>
                                <td width="11" height="16">&nbsp;</td>
                                <td width="124"><font color="FF6501"><img src="images1/circle.jpg" width="10" height="10">&nbsp;<?php echo $info[mingcheng];?></font></td>
                              </tr>
                              <tr>
                                <td height="16">&nbsp;</td>
                                <td><font color="#000000">市场价：</font><font color="FF6501"><?php echo $info[shichangjia];?></font></td>
                              </tr>
                              <tr>
                                <td height="16">&nbsp;</td>
                                <td><font color="#000000">会员价：</font><font color="FF6501"><?php echo $info[huiyuanjia];?></font></td>
                              </tr>
                              <tr>
                                <td height="16">&nbsp;</td>
                                <td><font color="#000000">剩余数量：</font><font color="13589B">
                                  <?php 
				  if($info[shuliang]>0)
				  {
				     echo $info[shuliang];
				  }
				  else
				  {
				     echo "已售完";
				  }
				  ?>
                                </font></td>
                              </tr>
                              <tr>
                                <td height="30" colspan="2"><a href="lookinfo.php?id=<?php echo $info[id];?>"><img src="images1/b3.jpg" width="34" height="15" border="0"></a> <a href="addgouwuche.php?id=<?php echo $info[id];?>"><img src="images1/b1.jpg" width="50" height="15" border="0"></a> </td>
                              </tr>
                            </table>
                            <?php
						   }
						  ?>
                          </td>
                          <td width="265">
                            <?php
			  $sql=mysql_query("select * from tb_shangpin order by addtime desc limit 1,1");
			  $info=mysql_fetch_array($sql);
			  if($info==true)
		
			  {
			  ?>
                            <table width="270"  border="0" cellspacing="0" cellpadding="0">
                              <tr>
                                <td width="130" rowspan="5"><div align="center">
                                    <?php
				    if(trim($info[tupian]=="")){
					  echo "暂无图片";
					}
					else{
				  ?>
                                    <img src="<?php echo $info[tupian];?>" width="90" height="120" border="0">
                                    <?php
				     }
				  ?>
                                </div></td>
                                <td width="11" height="16">&nbsp;</td>
                                <td width="124"><font color="FF6501"><img src="images1/circle.jpg" width="10" height="10">&nbsp;<?php echo $info[mingcheng];?></font></td>
                              </tr>
                              <tr>
                                <td height="16">&nbsp;</td>
                                <td><font color="#000000">市场价：</font><font color="FF6501"><?php echo $info[shichangjia];?></font></td>
                              </tr>
                              <tr>
                                <td height="16">&nbsp;</td>
                                <td><font color="#000000">会员价：</font><font color="FF6501"><?php echo $info[huiyuanjia];?></font></td>
                              </tr>
                              <tr>
                                <td height="16">&nbsp;</td>
                                <td><font color="#000000">剩余数量：</font><font color="13589B">
                                  <?php 
				  if($info[shuliang]>0)
				  {
				     echo $info[shuliang];
				  }
				  else
				  {
				     echo "已售完";
				  }
				  ?>
                                </font></td>
                              </tr>
                              <tr>
                                <td height="30" colspan="2"><a href="lookinfo.php?id=<?php echo $info[id];?>"><img src="images1/b3.jpg" width="34" height="15" border="0"></a> <a href="addgouwuche.php?id=<?php echo $info[id];?>"><img src="images1/b1.jpg" width="50" height="15" border="0"></a> </td>
                              </tr>
                            </table>
                            <?php
			   }
			  ?>
                          </td>
                        </tr>
                    </table></td>
                  </tr>
                  <tr>
                    <td height="10" background="images1/line1.jpg"></td>
                  </tr>
                </table>
                <table width="548" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="46">　热门品牌：　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　<a href="showhot.php">更多..</a></td>
                  </tr>
                </table>
                <table width="553" border="00" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="553" height="110"><table width="540" height="110" border="0" align="center" cellpadding="0" cellspacing="0">
                        <tr>
                          <td width="275">
                            <?php
			  $sql=mysql_query("select * from tb_shangpin order by cishu desc limit 0,1");
			  $info=mysql_fetch_array($sql);
			  if($info==false){
			   echo "本站暂无推荐产品!";
			  }
			  else {
			  ?>
                            <table width="270"  border="0" cellspacing="0" cellpadding="0">
                              <tr>
                                <td width="130" rowspan="5"><div align="center">
                                    <?php
				    if(trim($info[tupian]=="")){
					  echo "暂无图片";
					}
					else{
				  ?>
                                    <img src="<?php echo $info[tupian];?>" width="90" height="120" border="0">
                                    <?php
				     }
				  ?>
                                </div></td>
                                <td width="11" height="16">&nbsp;</td>
                                <td width="124"><font color="FF6501"><img src="images1/circle.jpg" width="10" height="10">&nbsp;<?php echo $info[mingcheng];?></font></td>
                              </tr>
                              <tr>
                                <td height="16">&nbsp;</td>
                                <td><font color="#000000">市场价：</font><font color="FF6501"><?php echo $info[shichangjia];?></font></td>
                              </tr>
                              <tr>
                                <td height="16">&nbsp;</td>
                                <td><font color="#000000">会员价：</font><font color="FF6501"><?php echo $info[huiyuanjia];?></font></td>
                              </tr>
                              <tr>
                                <td height="16">&nbsp;</td>
                                <td><font color="#000000">剩余数量：</font><font color="13589B">
                                  <?php 
				  if($info[shuliang]>0)
				  {
				     echo $info[shuliang];
				  }
				  else
				  {
				     echo "已售完";
				  }
				  ?>
                                </font></td>
                              </tr>
                              <tr>
                                <td height="30" colspan="2"><a href="lookinfo.php?id=<?php echo $info[id];?>"><img src="images1/b3.jpg" width="34" height="15" border="0"></a> <a href="addgouwuche.php?id=<?php echo $info[id];?>"><img src="images1/b1.jpg" width="50" height="15" border="0"></a> </td>
                              </tr>
                            </table>
                            <?php
			   }
			  ?>
                          </td>
                          <td width="255">
                            <?php
			  $sql=mysql_query("select * from tb_shangpin order by cishu desc limit 1,1 ");
			  $info=mysql_fetch_array($sql);
			  if($info==true){
			  ?>
                            <table width="270"  border="0" cellspacing="0" cellpadding="0">
                              <tr>
                                <td width="130" rowspan="5"><div align="center">
                                    <?php
				    if(trim($info[tupian]=="")){
					  echo "暂无图片";
					}
					else{
				  ?>
                                    <img src="<?php echo $info[tupian];?>" width="90" height="120" border="0">
                                    <?php
				     }
				  ?>
                                </div></td>
                                <td width="11" height="16">&nbsp;</td>
                                <td width="124"><font color="FF6501"><img src="images1/circle.jpg" width="10" height="10">&nbsp;<?php echo $info[mingcheng];?></font></td>
                              </tr>
                              <tr>
                                <td height="16">&nbsp;</td>
                                <td><font color="#000000">市场价：</font><font color="FF6501"><?php echo $info[shichangjia];?></font></td>
                              </tr>
                              <tr>
                                <td height="16">&nbsp;</td>
                                <td><font color="#000000">会员价：</font><font color="FF6501"><?php echo $info[huiyuanjia];?></font></td>
                              </tr>
                              <tr>
                                <td height="16">&nbsp;</td>
                                <td><font color="#000000">剩余数量：</font><font color="13589B">
                                  <?php 
				  if($info[shuliang]>0)
				  {
				     echo $info[shuliang];
				  }
				  else
				  {
				     echo "已售完";
				  }
				  ?>
                                </font></td>
                              </tr>
                              <tr>
                                <td height="30" colspan="2"><a href="lookinfo.php?id=<?php echo $info[id];?>"><img src="images1/b3.jpg" width="34" height="15" border="0"></a> <a href="addgouwuche.php?id=<?php echo $info[id];?>"><img src="images1/b1.jpg" width="50" height="15" border="0"></a> </td>
                              </tr>
                            </table>
                            <?php
			   }
			  ?></td>
                        </tr>
                    </table></td>
                  </tr>
                  <tr>
                    <td height="10"></td>
                  </tr>
              </table></td>
          </tr>
        </table></td>
      </tr>
    </table>    </td>
</tr>
  <tr>
<td>
<?php
 include("bottom.php");
?></td>
  </tr>
</table>
</body>
</html>