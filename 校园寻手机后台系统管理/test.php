<?php
/**
 * Created by PhpStorm.
 * User: lichao
 * Date: 2017/4/23
 * Time: 15:58
 */
require("include/include_top.php");
$id=$_GET['id'];
$sql="select * from p_phone where p_card='$id'";
$rs=my_query($sql);
if(count($rs) && $rs[0]['p_state']==1)
	echo 1;
else
	echo 0;

?>