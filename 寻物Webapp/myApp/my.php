<?php
require ("include/include_top.php");
$user_phone= $_SESSION['user'];
//$user_phone='15512235853';
$sql="select * from look_user where user_phone='$user_phone'";
$rec=mysql_query($sql);

//查询我的寻找记录数
$sql="select count(*) as count  from look_sth where look_way=0 and user_phone='$user_phone'";
$my_search=my_query($sql)[0]['count'];
//查询我的招领记录数
$sql="select count(*) as count  from look_sth where look_way=1 and user_phone='$user_phone'";
$my_claim=my_query($sql)[0]['count'];
//查询我的好友记录数
$sql="select count(*) as count  from look_friend where user_phone='$user_phone' ";
$my_friend=my_query($sql)[0]['count'];

$rw='';
while(@$row=mysql_fetch_array($rec,MYSQL_BOTH)){
	if ($rw != "") {$rw .= ",";} 
	$rw .= '{"id":"'  . $row["id"] . '",'; 
	$rw .= '"my_search":"'   . $my_search        . '",';
	$rw .= '"my_claim":"'   . $my_claim        . '",';
	$rw .= '"my_friend":"'   . $my_friend        . '",'; 
    $rw .= '"user_intro":"'   . $row["user_intro"]        . '",';  
	$rw .= '"user_name":"'   . $row["user_name"]        . '",'; 
    $rw.= '"user_pic":"'. $row["user_pic"]     . '"}'; 
	  
}
$outp ='{"records":['.$rw.']}';
   echo $outp;
?>