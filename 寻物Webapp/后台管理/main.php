<?php
require("include/include_top.php");
$page=@$_GET['page']?$_GET['page']:1;
$pagesize=10;
$sql_count="select count(*)  as count from look_sth where look_way=0";
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
$sql="select * from look_sth where look_way=0 order by id desc limit ".($page-1)*$pagesize.",$pagesize";
$rec=my_query($sql);

$sql="select * from p_student ";
$stu=my_query($sql);
foreach ($rec as $key => $val) {
	//判断物品的状态
	if($val['look_state']==0){
		$rec[$key]['look_state']='未找到'; 
	}else if($val['look_state']==1){
		$rec[$key]['look_state']='已找到'; 
	}
	//通过手机号查找昵称
	$sql="select * from look_user where user_phone=".$val['user_phone']; 
	$user_name=my_query($sql)[0]['user_name'];	
	$rec[$key]['user_phone']=$user_name;

}
$smarty->assign('rec',$rec);
$smarty->display("templates/main.html");
?>