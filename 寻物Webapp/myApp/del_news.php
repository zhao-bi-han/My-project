<?php
require ("include/include_top.php");
$id=$_POST['id'];
$sql="update  look_news set news_del=0  where id='$id'";
   mysql_query($sql);
   $num=mysql_affected_rows();
   echo $num;
?>