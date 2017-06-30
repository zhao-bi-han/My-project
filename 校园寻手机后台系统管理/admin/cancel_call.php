<?php
require ("include/include_top.php");
header('content-type:text/html;charset=utf-8');
//判断是否取消报警
$id=$_POST['id'];
$sql="update p_call set  p_state=0 where id=$id";
mysql_query($sql);

//查找学号
$sql="select lose_no from p_call where id=$id";
$rec=my_query($sql);
$stu_no=$rec[0]['lose_no'];
//修改手机表手机的状态
		$sql="update p_phone set p_state=0 where stu_no=$stu_no";
		mysql_query($sql);
$n=mysql_affected_rows();
if($n){
  echo 1;
}else{
	echo 0;
}
//print_r($_POST);
//echo $id;
?>