<?php
 require("include/include_top.php");
 $id=$_POST['id'];
 $sql="delete from look_admin where id=$id";
 my_query($sql);
 $row=mysql_affected_rows();
 if($row)
 {
 	echo 1;
 }else{
 	echo 0;
 }

?>