<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php
     function unhtml($content){
			 $content=str_replace("&","&amp;",$content);
			 $content=str_replace("<","&lt;",$content);
			 $content=str_replace(">","&gt;",$content);
			 $content=str_replace(" ","&nbsp;",$content);
			 $content=str_replace(chr(13),"<br>",$content);
 			 $content=str_replace("\\","\\\\",$content);
 			 $content=str_replace(chr(34),"&quot;",$content);

			 return $content;
			}
?>
</body>
</html>