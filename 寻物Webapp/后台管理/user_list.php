<?php
require ("include/include_top.php");
$page=@$_GET['page']?$_GET['page']:1;
$pagesize=10;
$sql_count="select count(*)  as count from look_user";
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
$sql="select * from look_user order by id desc limit ".($page-1)*$pagesize.",$pagesize";
$res=my_query($sql);

$smarty->assign("currentPage",$page);
$smarty->assign("maxpage",$maxpage);
$smarty->assign("maxarray",$maxarray);
$smarty->assign('userlist',$res);
$smarty->display("templates/user_list.html");
?>