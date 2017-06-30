<?php
 require("include/include_top.php");
 $styleno=$_POST['style_no'];
 $stylename=$_POST['style_name'];
 $stylesex=$_POST['style_sex'];
 if($styleno==''||$stylename==''||$stylesex==''){
 echo "<script>alert('信息要填完整哟！');parent.location.href='style_add.php'; </script>";
 }else{
$sql="INSERT INTO mz_style ( style_id , style_no , style_name ,style_sex) VALUES ( '', '$styleno', '$stylename', '$stylesex')";
mysql_query($sql);
$num=mysql_affected_rows();
if(!$num){
	message('添加失败','style_add.php');
	
	}else{
		message('添加成功','style_add.php');
		}
		}
?>