<?php
require ("include/include_top.php");
    $id=$_POST['id'];
    $usernum=$_POST['num'];
	$username=$_POST['name'];
	$userphone=$_POST['phone'];
	$userusername=$_POST['username'];
	$userpass=$_POST['pass'];
$sql="update p_user set user_num='$usernum',user_name='$username',user_phone='$userphone',user_username='$userusername',user_pass='$userpass' where id=$id";
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