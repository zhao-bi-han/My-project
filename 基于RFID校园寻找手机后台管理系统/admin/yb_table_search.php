<?php
require ("include/include_top.php");
$search=$_POST['search'];
//查找本人报警记录
$sql="select * from p_call where lose_no=$search or call_no=$search and p_way=0";
$y_call=my_query($sql);
foreach ($y_call as $key => $val) {
	if($val['p_state']==0){
		$y_call[$key]['p_state']='找到'; 
	}else if($val['p_state']==1){
		$y_call[$key]['p_state']='丢失'; 
	}
}

$lose_no=$y_call[0]['lose_no'];
$call_no=$y_call[0]['call_no'];
//查找学生
$sql="select stu_name from p_student where stu_no=$lose_no or stu_no=$call_no";
$stu=my_query($sql);
$y_call[0]['lose_name']=$stu[0]['stu_name'];
$y_call[0]['call_name']=$stu[1]['stu_name'];
$num=mysql_affected_rows();

if($num){
 echo json_encode( $y_call); 
}else{
	echo 0;
}

?>