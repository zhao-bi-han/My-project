<?php
require ("include/include_top.php");
$sql="select * from look_sth where look_way=0 order by id desc";
$rec=mysql_query($sql);

$rw='';
// 是否有照片
$img_or='';
 while(@$row=mysql_fetch_array($rec,MYSQL_BOTH))
   {
   	$img='';
	 if ($rw != "") {$rw .= ",";} 
	 //通过用户手机号 查询用户的昵称 
	  $sql="select * from look_user where user_phone=".$row['user_phone']; 
	  $res=my_query($sql);
	//
	//物品的状态
	  if($row["look_state"]==0){
	  	$row["look_state"]="未找到";
	  }else if($row["look_state"]==1){
	  	$row["look_state"]="已找到";
	  }
	//
	//拆分图片
	
	$img_str=$row["look_pic"] ;
	//判断是否有照片
	if($img_str==''){
		$img_or=0;
	}else{
		$img_or=1;
	}
	$img_array= explode(",", $img_str);
	$count= count($img_array); 
	
	for($i=0;$i<$count;$i++){
		$img .= '{"look_img'.'":"' . $img_array[$i] . '"},'; 
		
	}
	$img.='}';
	 //把最后一个 逗号截掉
	$img=substr($img,0,strlen($img)-1); 
	
	$img=substr($img,0,strlen($img)-1);
	$img='['.$img.']';
	//
    $rw .= '{"id":"'  . $row["id"] . '",';  
    $rw .= '"user_name":"'   . $res[0]['user_name']        . '",'; 
	$rw .= '"user_pic":"'   . $res[0]['user_pic']        . '",';
	$rw .= '"look_name":"'   . $row["look_name"]        . '",'; 
	$rw .= '"look_describe":"'   . $row["look_describe"]        . '",'; 
    $rw .= '"look_phone":"'   . $row["look_phone"]        . '",';  
	$rw .= '"look_state":"'   . $row["look_state"]        . '",'; 
	$rw .= '"look_picture":'   . $img        . ','; 
    $rw .= '"img_or":'   . $img_or        . ','; 
    $rw.= '"look_time":"'. $row["look_time"]     . '"}'; 
	  
   }
//$img=substr($img,0,strlen($img)-1);
 //  $outp ='{"records":['.$rw.'],"picture":['.$img.']}';
 $outp ='{"records":['.$rw.']}';
   echo $outp;

?>