<?php
require ("include/include_top.php");

$usernum=$_POST['num'];
$username=$_POST['name'];
$userphone=$_POST['phone'];
$userusername=$_POST['username'];
$userpass=$_POST['pass'];


$sql="INSERT INTO p_user (user_num,user_name,user_phone,user_username,user_pass) VALUES ('$usernum','$username','$userphone','$userusername','$userpass')";
mysql_query($sql);
$num=mysql_affected_rows();
echo $num;
// if($num){
// 	echo 1;
	
// }else{
// 	echo 0;
// }


?>