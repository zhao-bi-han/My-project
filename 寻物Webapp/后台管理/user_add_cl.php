<?php
require ("include/include_top.php");


$name=$_POST['name'];
$phone=$_POST['phone'];
$intro=$_POST['area'];
$pass=$_POST['pass'];


	$sql="insert into look_user (user_phone,user_password,user_name,user_pic,user_intro) values('$phone','$pass','$name','logo.png','$intro')";
	mysql_query($sql);
$num=mysql_affected_rows();
if($num){
	echo 1;
	
}else{
	echo 0;
}


?>