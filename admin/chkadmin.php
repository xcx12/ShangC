<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php
 class chkinput{
   var $name;
   var $pwd;
   function chkinput($x,$y)
    {
     $this->name=$x;
     $this->pwd=$y;
    }
   function checkinput()
   {
     include("conn/conn.php");
     $sql=mysql_query("select * from tb_admin where name='".$this->name."'",$conn);
     $info=mysql_fetch_array($sql);
     if($info==false)
       {
          echo "<script language='javascript'>alert('不存在此管理员！');history.back();</script>";
          exit;
       }
      else
       {
          if($info[pwd]==$this->pwd){
               header("location:default.php");
            }
          else
           {
             echo "<script language='javascript'>alert('密码输入错误！');history.back();</script>";
             exit;
           }
      }    
   }
 }
    $obj=new chkinput(trim($_POST[name]),md5(trim($_POST[pwd])));
    $obj->checkinput();
?>
</body>
</html>