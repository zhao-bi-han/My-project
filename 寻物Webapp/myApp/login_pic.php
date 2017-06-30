<?php
require ("include/include_top.php");
	
$user=$_POST['user'];
$_SESSION['user']=$user;
$sql="select * from look_user where user_phone='$user'";
$rec=my_query($sql);
$num=mysql_affected_rows();
if($num==1){
	echo   json_encode($rec[0]['user_pic'])  ;
	
}else{
	echo 0;
}
?>