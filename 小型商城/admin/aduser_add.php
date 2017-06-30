<?php
 require("include/include_top.php");
 if(isset($_SESSION['user'])){
  $sql="select * from mz_area";
  $sf=my_query($sql);
$smarty->assign('sf',$sf);
  $smarty->display("templates/aduser_add.html");
}else{
	echo "<script>alert('你还没有登录！');parent.location.href='login.php'; </script>";
}
?>