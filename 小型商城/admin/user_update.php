<?php
  require("include/include_top.php");
   $sql="select * from mz_area";
  $sf=my_query($sql);
  $id=$_GET['id'];
  if(!isset($_POST['sub'])){
    $sql="select * from mz_user where user_id=$id";
    $rec=my_query($sql);
    $smarty->assign('upuser',$rec);
    $smarty->assign('sf',$sf);
  $smarty->display("templates/user_update.html");
  }else{
  	$username=$_POST['user_name'];
 $userpassword=$_POST['user_password'];
 $usersex=$_POST['name'];
 $userphone=$_POST['user_phone'];
 $userarea=$_POST['user_area'];
 $sql="update mz_user set user_name='$username',user_password='$userpassword',user_sex='$usersex',user_phone='$userphone',user_area='$userarea' where user_id=$id";
 mysql_query($sql);
 $num=mysql_affected_rows();
 if(!$num){
			message('修改失败','user_list.php');

		}else{
			message('修改成功','user_list.php');
		}
	}
?>