<?php
require ("include/include_top.php");
//刷卡查找学生  通过卡号
$card=$_POST['card'];
$sql="select stu_no,p_phone from p_phone where p_card='$card'";
$res=my_query($sql);
// print_r($res);
if($res){
	$card_no=$res[0]['stu_no'];
	//在学生表查找
$sql="select * from p_student where stu_no=$card_no";
$card_stu=my_query($sql);
$card_stu[0]['p_phone']=$res[0]['p_phone'];
	echo json_encode($card_stu);
}else{
		echo 0;
}
?>