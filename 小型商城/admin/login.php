<?php
require("include/include_top.php");
  unset($_SESSION['user']);
//验证码
$string='1234567890qertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM';
$code='<span style="color:rgb('.mt_rand(0,255).','.mt_rand(0,255).','.mt_rand(0,255).','.mt_rand(0,255).')">'.$string{mt_rand(0,strlen($string)-1)}.'</span>';
$code.='<span style="color:rgb('.mt_rand(0,255).','.mt_rand(0,255).','.mt_rand(0,255).','.mt_rand(0,255).')">'.$string{mt_rand(0,strlen($string)-1)}.'</span>';
$code.='<span style="color:rgb('.mt_rand(0,255).','.mt_rand(0,255).','.mt_rand(0,255).','.mt_rand(0,255).')">'.$string{mt_rand(0,strlen($string)-1)}.'</span>';
$code.='<span style="color:rgb('.mt_rand(0,255).','.mt_rand(0,255).','.mt_rand(0,255).','.mt_rand(0,255).')">'.$string{mt_rand(0,strlen($string)-1)}.'</span>';
// echo $code;
// exit();
$smarty->assign('code',strip_tags($code));

$smarty->display("templates/login.html");
if(isset($_POST['sub'])){
	$logname=$_POST['name'];
	$logpass=$_POST['pass'];
	$logyz=$_POST['yz'];
	$logyzc=$_POST['yzc'];
	//session_start();
	$_SESSION['user']=$logname;
	if($logname==''&&$logpass==''){	
		echo "<script>alert('用户和密码不能为空')</script>";
	}
	elseif ($logname==''&&$logpass!='') {
		echo "<script>alert('用户名不能为空')</script>";
	}
	elseif ($logpass==''&&$logname!='') {
		echo "<script>alert('密码不能为空')</script>";	
	}
	elseif($logyz==''){
		echo "<script>alert('请输入验证码')</script>";
	}
	elseif(strtolower($logyz)!=strtolower($logyzc)){
		echo "<script>alert('验证码不正确')</script>";
	}
	else {
		$sql="select * from mz_aduser where aduser_name='$logname' and aduser_password='$logpass'";
		$rec=mysql_query($sql);
		$row=mysql_num_rows($rec);
		if($row){   
			echo "<script>alert('登录成功');parent.location.href='index.php'; </script>";
			// header("Location: ./goods_list.php");
			
		}else{
			echo "<script>alert('用户名和密码不匹配')</script>";
		}
	}
}


// echo $code;


?>