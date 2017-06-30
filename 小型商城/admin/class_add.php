<?php
 require("include/include_top.php");
 if(isset($_SESSION['user'])){
  $smarty->display("templates/class_add.html");
}else{
	 echo "<script>alert('你还没有登录！');parent.location.href='login.php'; </script>";
}
?>