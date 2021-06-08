<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>最新婚纱</title>
</head>

<body>

<?php
include("top.php");
?>
<table width="766" height="438" cellpadding="0" cellspacing="0" align="center">
	<tr>
		<td width="209" height="438" valign="top" bgcolor="#F0F0F0">
		<?php
		include("Left_menu.php");
		?>
	</td>
	<td width="557" align="center" valign="top" bgcolor="#FFFFFF">
<table width="550" height="25" border="0" align="center" cellpadding="0" cellspacing="0">
	<tr>
    	<td height="50">最新婚纱：</td>
    </tr>
	</table>
<table width="550" height="10" border="0" align="center" cellpadding="0" cellspacing="0">
	<tr>
    	<td background="images/line1.jpg"></td>
    </tr>	
	</table>
<table width="550" height="10" border="0" align="center" cellpadding="0" cellspacing="0">
	<?php
	$sql=mysql_query("select * from tb_shangpin order by addtime desc limit 0,4",$conn);
	$info=mysql_fetch_array($sql);
	if($info=false){
		echo "本站暂无最新产品！";
		}
	else{
		do{
	?>
     <tr>
          <td width="89"  rowspan="6"><div align="center">
              <?php
			 if($info[tupian]==""){
			   echo "暂无图片!";
			 }
			 else{
			?>
		<a href="lookinfo.php?id=<?php echo $info[id];?>">
        <img border="0" src="<?php echo $info[tupian];?>" width="90" height="120" ></a>
         <?php
			 }
		?>
         </div></td>
  <td width="93" height="20"><div align="center" style="color: #000000">商品名称：</div></td>
          <td colspan="5"><div align="left"><a href="lookinfo.php?id=<?php echo $info[id];?>"><?php echo $info[mingcheng];?></a></div></td>
        </tr>
        <tr>
          <td width="93" height="20"><div align="center" style="color: #000000">商品品牌：</div></td>
          <td width="101" height="20"><div align="left"><?php echo $info[pinpai];?></div></td>
          <td width="62"><div align="center" style="color: #000000">商品型号：</div></td>
          <td colspan="3"><div align="left"><?php echo $info[xinghao];?></div></td>
        </tr>
        <tr>
          <td width="93" height="20"><div align="center" style="color: #000000">商品简介：</div></td>
          <td height="20" colspan="5"><div align="left"><?php echo $info[jianjie];?></div></td>
        </tr>
        <tr>
          <td height="20"><div align="center" style="color: #000000">上市日期：</div></td>
          <td height="20"><div align="left"><?php echo $info[addtime];?></div></td>
          <td height="20"><div align="center" style="color: #000000">剩余数量：</div></td>
          <td width="69" height="20"><div align="left"><?php echo $info[shuliang];?></div></td>
          <td width="63"><div align="center" style="color: #000000">商品等级：</div></td>
          <td width="73"><div align="left"><?php echo $info[dengji];?></div></td>
        </tr>
        <tr>
          <td height="20"><div align="center" style="color: #000000">商场价：</div></td>
          <td height="20"><div align="left"><?php echo $info[shichangjia];?>元</div></td>
          <td height="20"><div align="center" style="color: #000000">会员价：</div></td>
          <td height="20"><div align="left"><?php echo $info[huiyuanjia];?>元</div></td>
          <td height="20"><div align="center" style="color: #000000">折扣：</div></td>
          <td height="20"><div align="left"><?php echo (@ceil(($info[huiyuanjia]/$info[shichangjia])*100))."%";?></div></td>
        </tr>
        <tr>
          <td height="20" colspan="6" width="461"><div align="center">&nbsp;&nbsp;&nbsp;&nbsp;<a href="addgouwuche.php?id=<?php echo $info[id];?>"><img src="images1/b1.jpg" width="50" height="15" border="0" style=" cursor:hand"></a></div></td>
        </tr>
        <tr>
          <td height="10" colspan="7" background="images1/line1.jpg"></td>
        </tr>
        <?php
	    	}while($info=mysql_fetch_array($sql));
		 }
		?>
      </table></td>
  </tr>
</table>
<?php include("bottom.php");?>
</body>
</html>