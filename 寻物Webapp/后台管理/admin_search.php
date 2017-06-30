<?php
require ("include/include_top.php");
$search=$_POST['search'];
$sql="select * from look_admin where admin_name='$search'";
$res=my_query($sql);
$num=mysql_affected_rows();
if($num){
  echo json_encode($res); 
}else{
	echo 0;
}

?>