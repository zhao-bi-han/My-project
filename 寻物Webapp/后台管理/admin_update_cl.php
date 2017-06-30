<?php
require ("include/include_top.php");
    $id=$_POST['id'];
	$name=$_POST['name'];
	$phone=$_POST['phone'];
	$pass=$_POST['pass'];
$sql="update look_admin set admin_name='$name',admin_phone='$phone',admin_pass='$pass' where id=$id";
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