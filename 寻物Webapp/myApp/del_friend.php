<?php
require ("include/include_top.php");
$user_phone= $_SESSION['user'];
   //删除好友
   $phone=$_POST['phone'];
   $sql="delete from look_friend where user_phone='$user_phone' and friend_phone='$phone'";
   mysql_query($sql);
   $num=mysql_affected_rows();
   echo $num;
?>