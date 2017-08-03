<?php
require("include/include_top.php");
$id=$_POST['id'];
//插入新的 删除旧的
$sql="select * from p_call where id=$id";
$res=my_query($sql);
$lose_no=$res[0]['lose_no'];
$p_phone=$res[0]['p_phone'];
$sql="INSERT INTO p_call (call_no,lose_no,p_time,p_state, p_way,p_phone) VALUES ('0','$lose_no',now(),'1','1','$p_phone')";
mysql_query($sql);
$sql="delete from p_call where id=$id";
mysql_query($sql);
$num=mysql_affected_rows();
if($num){
 echo 1;
}else{
	echo 0;
}
?>