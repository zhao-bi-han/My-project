<?php
require("include/include_top.php");
$id=$_GET['id'];
$sql="delete from mz_cart where cart_id=$id";
mysql_query($sql);
echo "<script>parent.location.href='cart.php'; </script>";
// $num=mysql_affected_rows();
// if(!$num){
// 	message('删除失败','cart.php');
	
// 	}else{
//      message('删除成功','cart.php');
// }
?>