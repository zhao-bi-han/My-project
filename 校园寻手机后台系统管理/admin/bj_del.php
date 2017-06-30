<?php
require ("include/include_top.php");
$id=$_POST['id'];
$sql="delete from p_call where id=$id";
mysql_query($sql);
$num=mysql_affected_rows();
 if($num){ 
   echo 1;
 }else{
 	echo 0;
 }
//echo $id;
?>