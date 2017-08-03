<?php
 require("include/include_top.php");
 $no=$_POST['no'];
 $sql_1="delete from p_student where stu_no=$no";
 my_query($sql_1);
 $row_1=mysql_affected_rows();
 $sql_2="delete from p_phone where stu_no=$no";
 my_query($sql_2);
 $row_2=mysql_affected_rows();
 if($row_1==1&&$row_2==1)
 {
 	echo 1;
 }else{
 	echo 0;
 }

?>