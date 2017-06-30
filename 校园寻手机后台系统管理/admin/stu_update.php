<?php
require ("include/include_top.php");
$num=$_GET['num'];
 $sql_1="select * from p_student where stu_no=$num";
 $res_1=my_query($sql_1);
 $smarty->assign('stu',$res_1);
 $sql_2="select * from p_phone where stu_no=$num";
 $res_2=my_query($sql_2);
 $smarty->assign('stu_1',$res_2);
 $smarty->display("templates/stu_update.html");
?>