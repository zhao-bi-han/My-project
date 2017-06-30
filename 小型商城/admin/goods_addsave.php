<?php
 require("include/include_top.php");
 $goodsname=$_POST['goods_name'];
 $goodsprice=$_POST['goods_price'];
 $goodsex=$_POST['sex'];
 $goodscontent=$_POST['goods_content'];
 $mgoodsclass=$_POST['mgoods_class'];
 $mgoodsstyle=$_POST['mgoods_style'];
 $wgoodsclass=$_POST['wgoods_class'];
 $wgoodsstyle=$_POST['wgoods_style'];
 $goodsimg=$_POST['goods_img'];
 $goodsimage="style/image/".$goodsimg;
 // echo $mgoodsclass,$mgoodsstyle;
 // exit();
 if($goodsname==''||$goodsprice==''||$goodsex==''||$goodscontent==''||$mgoodsclass==''||$mgoodsstyle==''||$wgoodsclass==''||$wgoodsstyle==''||$goodsimg=''){
 echo "<script>alert('信息要填完整哟！');parent.location.href='goods_add.php'; </script>";
 }else{
if($goodsex==0){
	$sql="INSERT INTO mz_goods ( goods_id , goods_name ,goods_img ,goods_content,goods_price,class_no,style_no,goods_sex) VALUES ( '', '$goodsname', '$goodsimage', '$goodscontent','$goodsprice','$mgoodsclass','$mgoodsstyle','$goodsex')";
mysql_query($sql);
$num=mysql_affected_rows();
if(!$num){
	message('添加失败','goods_add.php');
	
	}else{
		message('添加成功','goods_add.php');
		}
}elseif ($goodsex==1) {
	$sql="INSERT INTO mz_goods ( goods_id , goods_name ,goods_img ,goods_content,goods_price,class_no,style_no,goods_sex) VALUES ( '', '$goodsname', '$goodsimage', '$goodscontent','$goodsprice','$wgoodsclass','$wgoodsstyle','$goodsex')";
mysql_query($sql);
$num=mysql_affected_rows();
if(!$num){
	message('添加失败','goods_add.php');
	
	}else{
		message('添加成功','goods_add.php');
		}
}
}
?>