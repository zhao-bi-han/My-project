<?php
require ("include/include_top.php");
//echo date("Y-m-d H:i:s");
$nowtime=date("Y-m-d",time()+86400);
// $now_nuix=strtotime($nowtime);
// $end_nuix=strtotime($nowtime)-86400*7;
// $endtime=date("Y-m-d",$end_nuix);
//所有报警记录
 // $sql="SELECT DATE_FORMAT(p_time,'%Y-%m-%d') as time, count(*) as count FROM p_call WHERE p_time<'$nowtime' and p_time>'$endtime' group by time";
$sql="SELECT DATE_FORMAT(p_time,'%Y-%m-%d') as time, count(*) as count FROM p_call WHERE p_time<'$nowtime' group by time limit 0,7";

$rec=my_query($sql);
//print_r($rec);
//$lose_count=new array();
foreach ($rec as $key => $val) {
   $lose_count[$key]=$rec[$key]['count'];
   $lose_time[$key]=$rec[$key]['time'];
}
//print_r($lose_count);
//找的手机的记录
foreach ($lose_time as $k =>$v)
{
	$sql="SELECT  count(*) as count FROM p_call WHERE p_state=0 and  p_time>'$v 00:00:00' and p_time<'$v 23:59:59' ";
	//echo $sql."<br>";
     $res=my_query($sql);
     // print_r($res);
	$find_count[$k]=$res[0]['count'];
}

// print_r($res);
// //$find_count=[];
// foreach ($res as $k => $v) {
   
// }

$lose=implode(',',$lose_count);
$find=implode(',',$find_count);
$smarty->assign('lose',$lose);
$smarty->assign('find',$find);
//print_r($find_count);

$smarty->display("templates/main.html");
?>