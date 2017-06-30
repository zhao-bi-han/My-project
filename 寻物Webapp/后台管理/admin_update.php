<?php
require ("include/include_top.php");
$id=$_GET['id'];

	$sql="select * from look_admin where id=$id";
    //print_r($sql);
    $res=my_query($sql);
    $smarty->assign("list",$res);
    $smarty->display("templates/admin_update.html");
?>