<?php
require ("include/include_top.php");
$phone=$_POST['phone'];
$pass=$_POST['pass'];
$name=$_POST['name'];
$intro="说点什么介绍一下自己";

$sql="select * from look_user where user_phone='$phone'";
$rec=my_query($sql);
$num=mysql_affected_rows();
if($num){
	echo 0;
}else{
	$sql="insert into look_user (user_phone,user_password,user_name,user_pic,user_intro) values('$phone','$pass','$name','logo.png','$intro')";
	mysql_query($sql);
	echo 1;
}
?>