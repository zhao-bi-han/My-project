<?php
require ("include/include_top.php");
$user_phone= $_SESSION['user'];
   //删除好友
   $id=$_POST['id'];
   $sql="delete from look_sth where user_phone='$user_phone' and id='$id' and look_way=0";
   mysql_query($sql);
   $num=mysql_affected_rows();
   echo $num;
?>