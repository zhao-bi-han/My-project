<?php
require ("include/include_top.php");
$search=$_POST['search'];
//查找本人报警记录
$sql="select * from p_call where lose_no=$search and p_way=1";
$b_call=my_query($sql);

foreach ($b_call as $key => $val) {
	if($val['p_state']==0){
		$b_call[$key]['p_state']='找到'; 
	}else if($val['p_state']==1){
		$b_call[$key]['p_state']='丢失'; 
	}
}
//查找学生
$sql="select stu_name from p_student where stu_no=$search";
$stu=my_query($sql);
$b_call[0]['lose_name']=$stu[0]['stu_name'];

$num=mysql_affected_rows();
if($num){
  echo json_encode( $b_call); 
}else{
	echo 0;
}

?>