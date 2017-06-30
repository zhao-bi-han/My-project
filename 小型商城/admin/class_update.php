<?php
 require("include/include_top.php");
$id=$_GET['id'];
if(!isset($_POST['sub'])){
$sql="select * from mz_class where class_id=$id ";
$rec=my_query($sql);
$smarty->assign('upclass',$rec);
$smarty->display("templates/class_update.html");
}else{
    $classno=$_POST['class_no'];
 $classname=$_POST['class_name'];
 $classsex=$_POST['class_sex'];
$sql="update mz_class set  class_no='$classno' , class_name='$classname' ,class_sex='$classsex' where class_id=$id";
mysql_query($sql);
$num=mysql_affected_rows();
if(!$num){
	message('修改失败','class_update.php');
	
	}else{
		message('修改成功','class_update.php');
		}
}

  
?>
