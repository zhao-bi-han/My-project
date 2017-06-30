<?php
require ("include/include_top.php");
   //删除好友
   $id=$_POST['id'];
   $sql="update look_sth set look_state=1 where id='$id' ";
   mysql_query($sql);
   $num=mysql_affected_rows();
   echo $num;

?>