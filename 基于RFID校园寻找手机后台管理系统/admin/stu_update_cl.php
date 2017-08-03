<?php
require ("include/include_top.php");
 $stuno=$_POST['no'];
 $stuname=$_POST['name'];
 $stugrade=$_POST['grade'];
 $stumajor=$_POST['major'];
 $stuphone=$_POST['phone'];
 $stucard=$_POST['card'];
 $stupic=$_POST['pic'];
 $num=$_POST['num'];
 $sql_3="update p_student set stu_no='$stuno',stu_name='$stuname',stu_grade='$stugrade',stu_major='$stumajor',stu_picture='$stupic'  where stu_no=$num";
 mysql_query($sql_3);
 $row_1=mysql_affected_rows();

 $sql_4="update p_phone set stu_no='$stuno',p_phone='$stuphone',p_card='$stucard' where stu_no=$num";
mysql_query($sql_4);
 $row_2=mysql_affected_rows();
 if($row_1==1||$row_2==1)
 {
 	echo 1;
 }else{
 	echo 0;
 }
 ?>