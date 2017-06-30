<?php
require("include/include_top.php");
  // $smarty->display("templates/index.html");
//加入购物车
$id=$_GET['id'];
@session_start();
$username=$_SESSION['name'];
$sql="select * from mz_goods where goods_id=$id";
$rec=my_query($sql);
$row_id=$rec[0]['goods_id'];
$row_img=$rec[0]['goods_img'];
$row_content=$rec[0]['goods_content'];
$row_price=$rec[0]['goods_price'];
// var_dump($rec);
//exit();
$sql="select * from mz_cart where cart_username='$username' and cart_id=$row_id";
$rec=mysql_query($sql);
$res=@mysql_num_rows($rec);
if(!$res){
$sql="INSERT INTO mz_cart (cart_id,cart_img,cart_content,cart_price,cart_username) VALUES ('$row_id','$row_img','$row_content','$row_price','$username') ";
mysql_query($sql);
$num=mysql_affected_rows();
if(!$num){
	message('添加失败','index.php');
	
	}else{
     message('添加成功','index.php');
}
}else{
	echo "<script>alert('宝贝已经在购物车等你啦！');parent.location.href='index.php'; </script>";
}
?>