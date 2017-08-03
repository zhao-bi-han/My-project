<?php
require("include/include_top.php");
	$stuno=$_POST['no'];
	$stuname=$_POST['name'];
	$stugrade=$_POST['grade'];
	$stumajor=$_POST['major'];
	$stuphone=$_POST['phone'];
	$stucard=$_POST['card'];
	$stupass=$_POST['pass'];
    $stupic=$_POST['pic'];
	$sql="INSERT INTO  p_student (stu_no,stu_name,stu_grade,stu_major,stu_pass,stu_picture) VALUES('$stuno','$stuname','$stugrade','$stumajor','$stupass','$stupic')";
	mysql_query($sql);
	$row_1=mysql_affected_rows();
	$sql_2="INSERT INTO  p_phone(stu_no,p_phone,p_card,p_state) VALUES('$stuno','$stuphone','$stucard','0')";
	$pho=mysql_query($sql_2);
	$row_2=mysql_affected_rows();

	if($row_1&&$row_2){
		echo 1;
	}else{
		echo 0;
	}








?>