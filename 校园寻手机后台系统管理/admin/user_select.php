<?php
require ("include/include_top.php");

$search=$_POST['search'];
//查找本人报警记录
$sql="select * from p_user where user_name='$search' or user_num='$search'";
$res=my_query($sql);
$num=mysql_affected_rows();
if($num){
  echo json_encode($res); 
}else{
	echo 0;
}



		

?>