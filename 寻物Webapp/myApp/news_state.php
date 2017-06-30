<?php
require ("include/include_top.php");
$id=$_POST['id'];
$user_phone= $_SESSION['user'];

//在look_sth表中 查询该条记录  获取发布消息的user_phone
$sql="select * from look_sth where id='$id'";
$rec=my_query($sql);
$look_phone=$rec[0]['user_phone'];
$look_time=$rec[0]['look_time'];
//得到发布消息的用户手机号 再在news_state 表中修改 信息的状态
$sql="update look_news set news_state=0 where user_phone='$user_phone' and look_phone='$look_phone' and news_time='$look_time'";
mysql_query($sql);
$num=mysql_affected_rows();

?>