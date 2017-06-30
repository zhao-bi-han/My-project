<?php
 require("include/include_top.php");
 $classno=$_POST['class_no'];
 $classname=$_POST['class_name'];
 $classsex=$_POST['class_sex'];
 if($classno==''||$classname==''||$classsex==''){
 echo "<script>alert('信息要填完整哟！');parent.location.href='class_add.php'; </script>";
 }else{
$sql="INSERT INTO mz_class ( class_id , class_no , class_name ,class_sex) VALUES ( '', '$classno', '$classname', '$classsex')";
mysql_query($sql);
$num=mysql_affected_rows();
if(!$num){
	message('添加失败','class_add.php');
	
	}else{
		message('添加成功','class_add.php');
		}
}
?>