<?php
require ("include/include_top.php");
$id=$_POST['id'];
//$id=16;
$sql="select * from look_sth where id=$id";
$rec=mysql_query($sql);
$rw='';

 while(@$row=mysql_fetch_array($rec,MYSQL_BOTH))
   {
   	$img='';
	 if ($rw != "") {$rw .= ",";} 
	 //通过用户手机号 查询用户的昵称 
	  $sql="select user_name from look_user where user_phone=".$row['user_phone']; 
	  $res=my_query($sql);
	//
	//拆分图片
	
	$img_str=$row["look_pic"] ;
	$img_array= explode(",", $img_str);
	$count= count($img_array); 
	$img='{';
	for($i=0;$i<$count;$i++){
		$img .= '"look_img'.$i.'":"' . $img_array[$i] . '",'; 
	}
	 //把最后一个 逗号截掉
	$img=substr($img,0,strlen($img)-1); 
	
	//
    $rw .= '{"id":"'  . $row["id"] . '",';  
    $rw .= '"user_name":"'   . $res[0]['user_name']        . '",'; 
	$rw .= '"look_name":"'   . $row["look_name"]        . '",'; 
	$rw .= '"look_describe":"'   . $row["look_describe"]        . '",'; 
    $rw .= '"look_phone":"'   . $row["look_phone"]        . '",';  
	$rw .= '"look_picture":'   . $img        . '},'; 
    $rw.= '"look_time":"'. $row["look_time"]     . '"}'; 	  
   }
 $outp =''.$rw.'';
   echo $outp;

?>