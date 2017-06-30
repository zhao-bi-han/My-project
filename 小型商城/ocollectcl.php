<?php
require("include/include_top.php");
//加入收藏夹
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
$sql="select * from mz_collect where collect_username='$username' and collect_id=$row_id";
$rec=mysql_query($sql);
$res=mysql_num_rows($rec);
if(!$res){
$sql="INSERT INTO mz_collect (collect_id,collect_img,collect_content,collect_price,collect_username) VALUES ('$row_id','$row_img','$row_content','$row_price','$username') ";
// $sql="INSERT INTO mz_collect (collect_id,collect_img,collect_content,collect_price,collect_username) VALUES ('$rec[0]['goods_id']','$rec[0]['goods_img']','$rec[0]['goods_content']','$rec[0]['goods_price']','') ";
mysql_query($sql);
$num=mysql_affected_rows();
if(!$num){
	message('收藏失败','other.php');
	
	}else{
     message('收藏成功','other.php');
}
}else{
	echo "<script>alert('宝贝已经在收藏夹了啦！');parent.location.href='other.php'; </script>";
}
?>