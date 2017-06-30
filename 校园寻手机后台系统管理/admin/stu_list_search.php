<?php
require("include/include_top.php");
$search=$_POST['search'];
//查找学生
$sql="select * from p_student where stu_no=$search";
$student=my_query($sql);
$sql_1="select p_phone,p_card from p_phone where stu_no=$search";
$pho=my_query($sql_1);
$student[0]['p_phone']=$pho[0]['p_phone'];
$student[0]['p_card']=$pho[0]['p_card'];
$num=mysql_affected_rows();
if($num){
  echo json_encode($student); 
}
else{
	echo 0;
}



?>