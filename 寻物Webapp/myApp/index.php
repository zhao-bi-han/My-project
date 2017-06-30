<?php
require ("include/include_top.php");
$user_phone= $_SESSION['user'];
//查询未读消息数
  $sql="select count(*) as count from look_news where  news_state=1 and user_phone='$user_phone'";
  $rec=my_query($sql);
  $count=$rec[0]['count'];
echo $count;

?>