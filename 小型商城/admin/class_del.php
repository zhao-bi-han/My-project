<?php
require("include/include_top.php");
$id=$_GET['id'];
$sql="delete from mz_class where class_id=$id";
mysql_query($sql);
$num=mysql_affected_rows();
if(!$num){
	message('删除失败','class_list.php');
	
	}else{
     message('删除成功','class_list.php');
}
?>