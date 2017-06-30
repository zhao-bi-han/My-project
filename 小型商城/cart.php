<?php
 require("include/include_top.php");
  require("head.php");
  @session_start();
$username=$_SESSION['name'];
   //分页
 $page=@$_GET['page']?$_GET['page']:1;
  $pagesize=10;
 $sql_count="select count(*)  as count from mz_cart where cart_username='$username'";
  $count=my_query($sql_count);
  $count_max=$count[0]['count'];
  if($count_max%$pagesize==0)
  {
	  $maxpage=$count_max/$pagesize;
	 }
  else
  {
	  $maxpage=intval($count_max/$pagesize)+1;
	 }
 
 if($page<1)
 { 
    $page=1;
	 }
  if($page>$maxpage)
  {
	  $page=$maxpage;
	 }
 $maxarray=array();
 for($i=1;$i<=$maxpage;$i++)
 $maxarray[$i]=$i;
 $sql="select * from mz_cart where cart_username='$username' limit ".($page-1)*$pagesize.",$pagesize";
  $rec=my_query($sql);


 $smarty->assign("currentPage",$page);
  $smarty->assign("maxpage",$maxpage);
  $smarty->assign("maxarray",$maxarray);
  $smarty->assign("cartgood",$rec);
  $smarty->display("templates/cart.html");
?>