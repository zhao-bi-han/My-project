<?php
  require("include/include_top.php");
  if(isset($_SESSION['user'])){
   $sql="select * from mz_area";
  
  $sf=my_query($sql);
  $id=$_GET['id'];
  if(!isset($_POST['sub'])){
    $sql="select * from mz_aduser where aduser_id=$id";
    $rec=my_query($sql);
    $smarty->assign('upaduser',$rec);
    $smarty->assign('sf',$sf);
  $smarty->display("templates/aduser_update.html");
  }else{
  	$adusername=$_POST['aduser_name'];
 $aduserpassword=$_POST['aduser_password'];
 $adusersex=$_POST['name'];
 $aduserphone=$_POST['aduser_phone'];
 $aduserarea=$_POST['aduser_area'];
 $sql="update mz_aduser set aduser_name='$adusername',aduser_password='$aduserpassword',aduser_sex='$adusersex',aduser_phone='$aduserphone',aduser_area='$aduserarea' where aduser_id=$id";
 mysql_query($sql);
 $num=mysql_affected_rows();
 if(!$num){
			message('修改失败','aduser_list.php');

		}else{
			message('修改成功','aduser_list.php');
		}
	}

}else{
  echo "<script>alert('你还没有登录！');parent.location.href='login.php'; </script>";
}
?>