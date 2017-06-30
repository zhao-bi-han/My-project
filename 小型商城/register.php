<?php
require("include/include_top.php");
$smarty->display("templates/register.html");
if(isset($_POST['reg_sub'])){
	$regname=$_POST['reg_username'];
	$regpass=$_POST['reg_password'];
	$regcpass=$_POST['reg_cpassword'];
	if($regname){
		$sql="select * from mz_user where user_name='$regname'";
		$res=mysql_query($sql);
		$num=@mysql_num_rows($res);
		if(!$num){
			if ($regpass) {
				if($regcpass){

					if ($regpass!=$regcpass) {
						echo "<script>alert('两次密码不一致')</script>";	
					}else{
						$sql="INSERT INTO mz_user (user_id,user_name,user_password,user_sex,user_phone,user_area) VALUES ('','$regname','$regpass','','','') ";
						mysql_query($sql);
echo "<script>alert('注册成功');parent.location.href='login.php'; </script>";
						

					}
				}else{
					echo "<script>alert('请重新输入密码')</script>";
				}
			}else{
				echo "<script>alert('密码不能为空')</script>";
				
			}
		}else{
			echo "<script>alert('用户名已存在')</script>";
		}
	}else{
		echo "<script>alert('用户名不能为空')</script>";
	}
}
// $smarty->display("templates/register.html");
?>