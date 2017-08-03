<?php
require ("include/include_top.php");
$no=$_GET['no'];
//从学生表查找
$sql="select * from p_student where stu_no=$no";
$stu=my_query($sql);
//从手机表查找
$sql="select * from p_phone where stu_no=$no";
$pho=my_query($sql);

$smarty->assign('stu',$stu);
$smarty->assign('pho',$pho);
$smarty->display("templates/renling.html");
?>