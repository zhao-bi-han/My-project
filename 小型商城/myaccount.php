<?php
 require("include/include_top.php");
 require("head.php");
 @session_start();
$username=$_SESSION['name'];
 $sql="select * from mz_area";
  $sf=my_query($sql);
  // var_dump($sf);
  // exit();

 if(!isset($_POST['sub'])){	
    $sql="select * from mz_user where user_name='$username' ";
    $rec=my_query($sql);
    $smarty->assign('user',$rec);
    $smarty->assign('sf',$sf);
    $smarty->display("templates/myaccount.html");
 }
   else{
  	$username=$_POST['user_name'];
 $usersex=$_POST['name'];
 $userphone=$_POST['user_phone'];
 $userarea=$_POST['user_area'];
 $sql="update mz_user set user_name='$username',user_sex='$usersex',user_phone='$userphone',user_area='$userarea' where user_name='$username'";
 mysql_query($sql);
 $num=mysql_affected_rows();
 if(!$num){
			message('你还没修改呢！','myaccount.php');

		}else{
			message('修改成功','myaccount.php');
		}
	}
 
?>