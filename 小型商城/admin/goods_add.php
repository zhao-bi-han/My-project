<?php
 require("include/include_top.php");
 if(isset($_SESSION['user'])){
 // 男性分类
 $sql="select * from mz_class where class_sex=0";
$mclass=my_query($sql);
// 女性分类
$sql="select * from mz_class where class_sex=1";
$wclass=my_query($sql);
// 男性风格
$sql="select * from mz_style where style_sex=0";
$mstyle=my_query($sql);
// 女性风格
$sql="select * from mz_style where style_sex=1";
$wstyle=my_query($sql);

$smarty->assign('mclass',$mclass);
$smarty->assign('wclass',$wclass);
$smarty->assign('mstyle',$mstyle);
$smarty->assign('wstyle',$wstyle);
  $smarty->display("templates/goods_add.html");
}else{
	echo "<script>alert('你还没有登录！');parent.location.href='login.php'; </script>";
}

?>