<?php
require ("include/include_top.php");
$user_phone= $_SESSION['user'];
//$user_phone='15512235853';
//查询该用户所有好友
$sql="select * from look_friend where user_phone='$user_phone' order by id desc";
$res=my_query($sql);
$rw='';
foreach($res as $key => $val){
	$sql="select * from look_user where user_phone=".$val['friend_phone'];
	$rec=my_query($sql);
	if ($rw != "") {$rw .= ",";} 
	$rw .= '{"id":"'  . $rec[0]["id"] . '",';  
    $rw .= '"user_name":"'   . $rec[0]['user_name']        . '",'; 
	 $rw .= '"user_pic":"'   . $rec[0]['user_pic']        . '",'; 
	$rw .= '"friend_phone":"'   . $val['friend_phone']        . '",'; 
    $rw.= '"user_intro":"'. $rec[0]["user_intro"]     . '"}'; 
}
$outp ='{"records":['.$rw.']}';
   echo $outp;
   

?>