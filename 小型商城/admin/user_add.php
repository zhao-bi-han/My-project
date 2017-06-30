<?php
 require("include/include_top.php");
 if(isset($_SESSION['user'])){
 //省份查询
  $sql="select * from mz_area";
  $sf=my_query($sql);
$smarty->assign('sf',$sf);
  $smarty->display("templates/user_add.html");
}else{
	 echo "<script>alert('你还没有登录！');parent.location.href='login.php'; </script>";
}
?>