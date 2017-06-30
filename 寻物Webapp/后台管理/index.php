<?php
require("include/include_top.php");
 // $user=$_SESSION['user'];
if(isset($_SESSION['user'])){
	$user=$_SESSION['user'];
	$userarray=array();
	$userarray[0]=$user;
	$userarray[1]=1;
	$smarty->assign('userarray',$userarray);
}else{
	// $userarray=array();
	// $userarray[0]='';
	// $userarray[1]=0;
	// $smarty->assign('userarray',$userarray);
	 echo "<script>alert('您还没有登录！');parent.location.href='login.php'; </script>";
}
$smarty->display("templates/index.html");
?>