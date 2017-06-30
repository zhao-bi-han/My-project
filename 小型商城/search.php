<?php
 require("include/include_top.php");
  require("head.php");
  //分页
  if(isset($_POST['submit'])||isset($_GET['search'])){
  	$search=@$_POST['search']?@$_POST['search']:@$_GET['search'];
  	// echo $search;
  	// exit();
  $page=@$_GET['page']?$_GET['page']:1;
  $pagesize=32;
 $sql_count="select count(*)  as count from mz_goods where goods_name LIKE '%$search%' or goods_content LIKE '%$search%'";
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
 $sql="select * from mz_goods where goods_name LIKE '%$search%' or goods_content LIKE '%$search%' limit ".($page-1)*$pagesize.",$pagesize";
 $sgoods=my_query($sql);
 $smarty->assign("currentPage",$page);
  $smarty->assign("maxpage",$maxpage);
  $smarty->assign("maxarray",$maxarray);
 $smarty->assign('sgoods',$sgoods);
  $smarty->assign('search',$search);
  }
  $smarty->display("templates/search.html");
?>