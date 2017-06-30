<?php
require ("include/include_top.php");
//分页
$page=@$_GET['page']?$_GET['page']:1;
   $pagesize=8;
   $sql_count="select count(*)  as count from p_student";
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
  $sql_dx="select * from p_student order by id desc limit ".($page-1)*$pagesize.",$pagesize";
  $rec=my_query($sql_dx);
$res=array();
  //从手机信息表查询
$sql="select * from p_phone";
$stu=my_query($sql);
foreach ($rec as $key => $val) {
	//通过学号查找姓名
	foreach ($stu as $k => $v){
		if($v['stu_no']==$val['stu_no']){
			$res[$key]['stu_name']=$val['stu_name'];
			$res[$key]['stu_no']=$val['stu_no'];
			$res[$key]['stu_grade']=$val['stu_grade'];
			$res[$key]['stu_major']=$val['stu_major'];
			$res[$key]['p_phone']=$v['p_phone'];
			$res[$key]['p_card']=$v['p_card'];
			$res[$key]['stu_pass']=$val['stu_pass'];
		}
}}
  $smarty->assign("currentPage",$page);
  $smarty->assign("maxpage",$maxpage);
  $smarty->assign("maxarray",$maxarray);

$smarty->assign('studentlist',$res);
$smarty->display("templates/student_list.html");
?>