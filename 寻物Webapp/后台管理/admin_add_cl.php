<?php
require ("include/include_top.php");
$name=$_POST['name'];
$phone=$_POST['phone'];
$pass=$_POST['pass'];


$sql="insert into look_admin (admin_name,admin_phone,admin_pass) values('$name','$phone','$pass')";
	mysql_query($sql);
$num=mysql_affected_rows();
if($num){
	echo 1;
	
}else{
	echo 0;
}


?>