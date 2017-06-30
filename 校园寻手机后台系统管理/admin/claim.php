<?php
require("include/include_top.php");
$stu_no=$_POST['no'];
$sql="update p_call set  p_state=0 where lose_no=$stu_no";
mysql_query($sql);
//修改手机表手机的状态
$sql="update p_phone set p_state=0 where stu_no=$stu_no";
mysql_query($sql);
$num=mysql_affected_rows();
if($num){
	echo 1;
}else{
	echo 0;
}
?>