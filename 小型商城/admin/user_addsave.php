<?php
 require("include/include_top.php");
 $username=$_POST['user_name'];
 $userpassword=$_POST['user_password'];
 $usersex=$_POST['name'];
 $userphone=$_POST['user_phone'];
 $userarea=$_POST['user_area'];
 if($username==''||$userpassword==''||$userphone==''||$usersex==''||$userarea==''){
echo "<script>alert('信息要填完整哟！');parent.location.href='user_add.php'; </script>";
 }else{
$sql="INSERT INTO mz_user ( user_id , user_name , user_password ,user_sex ,user_phone , user_area) VALUES ( '', '$username', '$userpassword', '$usersex', '$userphone', '$userarea')";
mysql_query($sql);
$num=mysql_affected_rows();
if(!$num){
	message('添加失败','user_add.php');
	
	}else{
		message('添加成功','user_add.php');
		}
}
  // $smarty->display("templates/user_add.html");
?>