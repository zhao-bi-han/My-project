<?php
 require("include/include_top.php");
 @session_start();
 $stuno=$_POST['name'];
 $stupass=$_POST['pass'];
 $sql="select * from p_student where stu_no='$stuno' and stu_pass='$stupass'";
 $res=my_query($sql);
 $row=mysql_affected_rows();
  if($row)
  { 
  	
  	$_SESSION['user']=$res[0]['stu_name'];
  	$_SESSION['no']=$stuno;
  	//echo $_SESSION['user'];
  	echo 1;

 }
  else{
  	 echo 0;
  }

 ?>