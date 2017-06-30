<?php
require ("include/include_top.php");
$id=$_POST['id'];
$sql="delete from p_user where Id=$id";
mysql_query($sql);
$num=mysql_affected_rows();

if($num){
	echo 1;
	}else{
		echo 0;
		}
		
		

?>