<?php
 require("include/include_top.php");
 $username=$_POST['aduser_name'];
 $userpassword=$_POST['aduser_password'];
 $usersex=$_POST['name'];
 $userphone=$_POST['aduser_phone'];
 $userarea=$_POST['aduser_area'];
 if($username==''||$userpassword==''||$usersex==''||$userphone==''||$userarea==''){
     echo "<script>alert('信息要填完整哟！');parent.location.href='aduser_add.php'; </script>";


 }else{
$sql="INSERT INTO mz_aduser ( aduser_id , aduser_name , aduser_password ,aduser_sex ,aduser_phone , aduser_area) VALUES ( '', '$username', '$userpassword', '$usersex', '$userphone', '$userarea')";
mysql_query($sql);
$num=mysql_affected_rows();
if(!$num){
	message('添加失败','aduser_add.php');
	
	}else{
		message('添加成功','aduser_add.php');
		}
		}
?>