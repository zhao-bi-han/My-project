<?php
require("include/include_top.php");
$page=@$_GET['page']?$_GET['page']:1;
$pagesize=10;
$sql_count="select count(*)  as count from p_call where p_way=1";
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
$sql="select * from p_call where p_way=1 order by id desc limit ".($page-1)*$pagesize.",$pagesize";
$rec=my_query($sql);
//从学生信息表查询学生信息
$sql="select * from p_student ";
$stu=my_query($sql);
foreach ($rec as $key => $val) {
	//判断手机的状态
	if($val['p_state']==0){
		$rec[$key]['p_state']='找到'; 
	}else if($val['p_state']==1){
		$rec[$key]['p_state']='丢失'; 
	}
		//通过学号查找姓名
		foreach ($stu as $k => $v){
			if($v['stu_no']==$val['lose_no']){
				$rec[$key]['stu_name']=$v['stu_name'];
			}
	
	}
	

}
$smarty->assign("currentPage",$page);
$smarty->assign("maxpage",$maxpage);
$smarty->assign("maxarray",$maxarray);
$smarty->assign('rec',$rec);
$smarty->display("templates/b_table.html");
?>