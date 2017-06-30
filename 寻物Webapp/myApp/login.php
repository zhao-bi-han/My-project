<?php
require ("include/include_top.php");
 unset($_SESSION['user']);

$user=$_POST['user'];
$pass=$_POST['pass'];

$sql="select * from look_user where user_phone='$user' and user_password='$pass'";
$rec=my_query($sql);
$num=mysql_affected_rows();
if($num){
	$_SESSION['user']=$user;
	echo 1;
}else{
	echo 0;
}
?>