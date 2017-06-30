<?php
require ("include/include_top.php");
$id=$_GET['id'];

	$sql="select * from p_user where id=$id";
    //print_r($sql);
    $res=my_query($sql);
    $smarty->assign("userlist",$res);
    $smarty->display("templates/user_update.html");
?>