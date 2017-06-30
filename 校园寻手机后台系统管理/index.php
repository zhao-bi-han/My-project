<?php
 require("include/include_top.php");
 @session_start();
 if(!$_SESSION['user']){
	 echo "<script>alert('您还没有登录！');parent.location.href='login.php'; </script>";
}else{
	$stuname=$_SESSION['user'];
    $smarty->assign('stuname',$stuname);
}
 $smarty->display("templates/index.html");

?>t