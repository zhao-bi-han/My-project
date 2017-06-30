<?php
require("include/include_top.php");
$id=$_GET['id'];
if(!isset($_POST['sub'])){
$sql="select * from mz_style where style_id=$id ";
$rec=my_query($sql);
$smarty->assign('upstyle',$rec);
$smarty->display("templates/style_update.html");
}else{
$styleno=$_POST['style_no'];
 $stylename=$_POST['style_name'];
 $stylesex=$_POST['style_sex'];
$sql="update mz_style set  style_no='$styleno' , style_name='$stylename' ,style_sex='$stylesex' where style_id=$id";
mysql_query($sql);
$num=mysql_affected_rows();
if(!$num){
	message('修改失败','style_list.php');
	
	}else{
		message('修改成功','style_list.php');
		}
}
  
?>