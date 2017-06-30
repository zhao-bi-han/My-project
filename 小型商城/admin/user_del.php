<?php
require("include/include_top.php");
$id=$_GET['id'];
$sql="delete from mz_user where user_id=$id";
mysql_query($sql);
$num=mysql_affected_rows();
if(!$num){
	message('删除失败','user_list.php');
	
	}else{
     message('删除成功','user_list.php');
}
?>