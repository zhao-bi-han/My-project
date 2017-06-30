<?php
 require("include/include_top.php");
  require("head.php");
 //分页
  $page=@$_GET['page']?$_GET['page']:1;
  $pagesize=32;
 $sql_count="select count(*)  as count from mz_goods where goods_sex=1";
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
 $sql="select * from mz_goods where goods_sex=1 limit ".($page-1)*$pagesize.",$pagesize";
 $wgoods=my_query($sql);
//收藏夹商品
 if(isset($_SESSION['name'])){
  $cname=$_SESSION['name'];
  foreach ($wgoods as $key=>$v)
  {
    $sql="select * from mz_collect where collect_username='$cname' and collect_id=".$v['goods_id'];
    $rec=my_query($sql);
    if(count($rec))
    {
     $wgoods[$key]['col']='style/img/collecth.png';
   }
   else
   {
    $wgoods[$key]['col']='style/img/collect.png';
  }

}
}

 $smarty->assign("currentPage",$page);
  $smarty->assign("maxpage",$maxpage);
  $smarty->assign("maxarray",$maxarray);
 $smarty->assign('wgoods',$wgoods);
  $smarty->display("templates/woman.html");
?>