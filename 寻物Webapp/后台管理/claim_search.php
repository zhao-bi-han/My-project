<?php
require ("include/include_top.php");
$search=$_POST['search'];
//查找本人报警记录
$sql="select * from look_sth where look_name LIKE '%$search%' and look_way=1";
$res=my_query($sql);

foreach ($res as $key => $val) {
	if($val['look_state']==0){
		$res[$key]['look_state']='未找到'; 
	}else if($val['look_state']==1){
		$res[$key]['look_state']='已找到'; 
	}

	//通过手机号查找昵称
	$sql="select * from look_user where user_phone=".$val['user_phone']; 
	$user_name=my_query($sql)[0]['user_name'];	
	$res[$key]['user_phone']=$user_name;
}
$num=mysql_affected_rows();
if($num){
  echo json_encode($res); 
}else{
	echo 0;
}

?>