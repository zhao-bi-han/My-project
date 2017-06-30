<?php
require ("include/include_top.php");
$check=$_POST['check'];
$name=$_POST['name'];
$phone=$_POST['phone'];
$texta=$_POST['texta'];
$pic_str=$_POST['pic_str'];
$user_phone= $_SESSION['user'];
$time=date("Y-m-d h:i");
$sql="insert into look_sth (user_phone,look_name,look_describe,look_phone,look_pic,look_way,look_state,look_time) values ('$user_phone','$name','$texta','$phone','$pic_str','$check','0','$time')";
mysql_query($sql);
$num=mysql_affected_rows();
if($num){
	echo 1;
}else{
	echo 0;
}
?>