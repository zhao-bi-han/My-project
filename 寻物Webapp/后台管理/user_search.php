<?php
require ("include/include_top.php");
$search=$_POST['search'];
$sql="select * from look_user where user_phone='$search'";
$res=my_query($sql);
$num=mysql_affected_rows();
if($num){
  echo json_encode($res); 
}else{
	echo 0;
}

?>