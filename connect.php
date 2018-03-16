<?php  
$host="127.0.0.1:3306";  
$db_user="siyuanxi_admin";  
$db_pass="xsy20040719";  
$db_name="siyuanxi_MsgBoard";  
$timezone="Asia/Shanghai";  
  
$link=mysqli_connect($host,$db_user,$db_pass);//连接数据库主机  
mysqli_select_db($link,$db_name);//选择数据库  
mysqli_query($link,"SET names UTF8");//设置数据库编码格式  
  
header("Content-Type: text/html; charset=utf-8");//设置头部样式  
date_default_timezone_set($timezone); //北京时间