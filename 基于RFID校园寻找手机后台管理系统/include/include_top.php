<?php
//session_start();
require("com_fun.php");
require("libs/Smarty.class.php");
header("Content-type: text/html; charset=utf-8"); 
error_reporting(E_ALL ^ E_DEPRECATED);
// 连接数据库
mysql_connect('mysql.sql162.eznowdata.com','sq_chepin','Chenpin123')or die("连接失败：".mysql_error());  
  //echo "连接成功";
mysql_select_db('sq_chepin');
 mysql_query("set names utf8");
 //
$smarty = new Smarty;
$smarty->caching = false;
$smarty->cache_lifetime = 120;
//$smarty->debugging=true;
set_time_limit(0);
date_default_timezone_set('Asia/Hong_Kong');

?>