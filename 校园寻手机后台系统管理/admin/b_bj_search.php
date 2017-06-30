<?php
require ("include/include_top.php");
//查询信息
if($_POST['way']==1){
	$lose_no=$_POST['search'];

//查找学生信息
	$sql="select * from p_student where stu_no=$lose_no";
	$lose_stu=my_query($sql);
	$num=mysql_affected_rows();
	if($num){
// //查找手机号，卡号
	$sql="select p_phone,p_card from p_phone where stu_no=$lose_no";
	$pho=my_query($sql);
	$lose_stu[0]['p_phone']=$pho[0]['p_phone'];
	$lose_stu[0]['p_card']=$pho[0]['p_card'];
	echo json_encode($lose_stu);
	}else{
		echo 0;
	}
//报警
}
if($_POST['way']==0){
	$stu_no=$_POST['stu_no'];
	$phone=$_POST['p_phone'];
	//判断是否已经报警
	$sql="select * from p_call where lose_no=$stu_no and p_state=1";
	$rec=my_query($sql);

	$n=mysql_affected_rows();
	if($n){
		$p_way=$rec[0]['p_way'];
		//如果已经报警在判断是通过什么方式报的警
		if($p_way==1){
            echo 11;
		}else if($p_way==0){
           echo 10;
		}
		
	}else{
		$sql="INSERT INTO p_call (call_no,lose_no,p_time,p_state, p_way,p_phone) VALUES ('0','$stu_no',now(),'1','1','$phone')";
		mysql_query($sql);
		//修改手机表手机的状态
		$sql="update p_phone set p_state=1 where stu_no=$stu_no";
		mysql_query($sql);
		$num=mysql_affected_rows();
		if($num!=-1){
			echo 1;
		}else{
			echo 2;
		}
	}
	
}

?>