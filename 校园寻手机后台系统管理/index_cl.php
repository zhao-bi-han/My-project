<?php
require("include/include_top.php");
@session_start();
$lose_no=$_SESSION['no'];
$sql="select lose_no from p_call where lose_no=$lose_no and  p_state=1";
my_query($sql);
$num=mysql_affected_rows();
if($num){
	echo 0;
}else{
	$pho=$_POST['ypho'];
	$sql_1="INSERT INTO p_call (call_no,lose_no,p_time,p_state, p_way,p_phone) VALUES ('0','$lose_no',now(),'1','1','$pho')";
	mysql_query($sql_1);
	
	$row=mysql_affected_rows();
	if($row)
	{
		//修改手机表 手机状态
    $sql="update p_phone set p_state=1 where stu_no=$lose_no";
		mysql_query($sql);
		echo 1;
	}
	else{
		echo 2;
	}
}



?>