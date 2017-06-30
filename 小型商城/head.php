<?php
 // require("include/include_top.php");
  
  @session_start();
  if(isset($_SESSION['name'])){
$name=$_SESSION['name'];
$namearray=array();
$namearray[0]=$name;
$namearray[1]=1;
//查询购物车宝贝的数量
$sql="select count(*) as count from mz_cart where cart_username='$name'";
$sql_count=my_query($sql);
$num=$sql_count[0]['count'];
$smarty->assign('num',$num);
$smarty->assign('namearray',$namearray);
 }else{
 	// $name=$_SESSION['name'];
 $namearray=array();
$namearray[0]='';
$namearray[1]=0;
$smarty->assign('namearray',$namearray);
 }

$sql="select * from mz_class where class_sex=1";
 $wclas=my_query($sql);
  $sql="select * from mz_style where style_sex=1";
 $wstyl=my_query($sql);
 $sql="select * from mz_class where class_sex=0";
 $mclas=my_query($sql);
  $sql="select * from mz_style where style_sex=0";
 $mstyl=my_query($sql);

//

 $smarty->assign('wstyl',$wstyl);
 $smarty->assign('wclas',$wclas);
 $smarty->assign('mstyl',$mstyl);
 $smarty->assign('mclas',$mclas);
 // $smarty->display("templates/head.html");
?>