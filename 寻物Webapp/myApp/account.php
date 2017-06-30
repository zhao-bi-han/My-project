<?php
require ("include/include_top.php");
$user_phone= $_SESSION['user'];
//$user_phone='15512235853';
$sql="select * from look_user where user_phone='$user_phone'";
$rec=mysql_query($sql);
$rw='';
while(@$row=mysql_fetch_array($rec,MYSQL_BOTH)){
	if ($rw != "") {$rw .= ",";} 
	$rw .= '{"id":"'  . $row["id"] . '",';  
    $rw .= '"user_phone":"'   . $row["user_phone"]        . '",';  
	$rw .= '"user_name":"'   . $row["user_name"]        . '",'; 
    $rw.= '"user_pic":"'. $row["user_pic"]     . '"}'; 
	  
}
$outp ='{"records":['.$rw.']}';
   echo $outp;
?>