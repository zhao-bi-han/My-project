<?php
require ("include/include_top.php");
    $id=$_POST['id'];
	$username=$_POST['name'];
	$userphone=$_POST['phone'];
	$intro=$_POST['area'];
	$password=$_POST['pass'];
$sql="update look_user set user_name='$username',user_phone='$userphone',user_intro='$intro',user_password='$password' where id=$id";
    mysql_query($sql); 
    $rec=mysql_affected_rows();
    if($rec)
	{
	echo 1;
	}
	else
	{
	echo 0;
	}

?>