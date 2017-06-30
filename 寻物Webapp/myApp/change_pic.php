<?php
require ("include/include_top.php");
//$user_phone= $_SESSION['user'];
$id=$_POST['id'];
$img=$_POST['img'];

$sql="update look_user set user_pic='$img' where id=$id";
mysql_query($sql);

?>