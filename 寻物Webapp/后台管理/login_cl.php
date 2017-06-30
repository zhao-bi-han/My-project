<?php
require ("include/include_top.php");
@session_start();

$name=$_POST['user'];
$pass=$_POST['pass'];
$_SESSION['user']=$name;
$sql="select * from look_admin where look_name='$name' and look_pass='$pass'";
$res=my_query($sql);

$row=mysql_affected_rows();
if($row)
{ 
echo 1;
}
else{
	echo 0;
}


?>