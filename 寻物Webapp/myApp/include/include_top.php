<?php
session_start();
require("com_fun.php");
header("Content-type: text/html; charset=utf-8"); 
error_reporting(E_ALL ^ E_DEPRECATED);
// 连接数据库
mysql_connect('localhost','root','')or die("连接失败：".mysql_error());  
  //echo "连接成功";
mysql_select_db('look');
 mysql_query("set names utf8");

?>