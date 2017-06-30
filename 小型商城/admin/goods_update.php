<?php
require("include/include_top.php");
$id=$_GET['id'];
 // 男性分类
$sql="select * from mz_class where class_sex=0";
$mclass=my_query($sql);
// 女性分类
$sql="select * from mz_class where class_sex=1";
$wclass=my_query($sql);
// 男性风格
$sql="select * from mz_style where style_sex=0";
$mstyle=my_query($sql);
// 女性风格
$sql="select * from mz_style where style_sex=1";
$wstyle=my_query($sql);

if(!isset($_POST['sub'])){
	$sql="select * from mz_goods where goods_id=$id";
	$rec=my_query($sql);
 // var_dump($rec);
 // exit();

	$smarty->assign('upgoods',$rec);
	$smarty->assign('mclass',$mclass);
	$smarty->assign('wclass',$wclass);
	$smarty->assign('mstyle',$mstyle);
	$smarty->assign('wstyle',$wstyle);
	$smarty->display("templates/goods_update.html");
}else{
	$goodsname=$_POST['goods_name'];
	$goodsprice=$_POST['goods_price'];
	$goodsex=$_POST['sex'];
	$goodscontent=$_POST['goods_content'];
	$mgoodsclass=$_POST['mgoods_class'];
	$mgoodsstyle=$_POST['mgoods_style'];
	$wgoodsclass=$_POST['wgoods_class'];
	$wgoodsstyle=$_POST['wgoods_style'];
	$goodsimg=$_POST['goods_img'];
	if($goodsimg==''){
		$sql="select * from mz_goods where goods_id=$id";
		$rec=my_query($sql);
		$img=$rec[0]['goods_img'];
		$goodsimage=$img;
		if($goodsex==0){
			$sql="update mz_goods set goods_name='$goodsname' ,goods_img='$goodsimage',goods_content='$goodscontent',goods_price='$goodsprice',class_no='$mgoodsclass',style_no='$mgoodsstyle',goods_sex='$goodsex' where goods_id=$id";
			mysql_query($sql);
			$num=mysql_affected_rows();
			if(!$num){
				message('修改失败','goods_list.php');

			}else{
				message('修改成功','goods_list.php');
			}
		}elseif ($goodsex==1) {
			$sql="update mz_goods set goods_name='$goodsname' ,goods_img='$goodsimage',goods_content='$goodscontent',goods_price='$goodsprice',class_no='$wgoodsclass',style_no='$wgoodsstyle',goods_sex='$goodsex' where goods_id=$id";
			mysql_query($sql);
			$num=mysql_affected_rows();
			if(!$num){
				message('修改失败','goods_list.php');

			}else{
				message('修改成功','goods_list.php');
			}
		}
	}else{
		$goodsimage="style/image/".$goodsimg;
		if($goodsex==0){
			$sql="update mz_goods set goods_name='$goodsname' ,goods_img='$goodsimage',goods_content='$goodscontent',goods_price='$goodsprice',class_no='$mgoodsclass',style_no='$mgoodsstyle',goods_sex='$goodsex' where goods_id=$id";
			mysql_query($sql);
			$num=mysql_affected_rows();
			if(!$num){
				message('修改失败','goods_list.php');

			}else{
				message('修改成功','goods_list.php');
			}
		}elseif ($goodsex==1) {
			$sql="update mz_goods set goods_name='$goodsname' ,goods_img='$goodsimage',goods_content='$goodscontent',goods_price='$goodsprice',class_no='$wgoodsclass',style_no='$wgoodsstyle',goods_sex='$goodsex' where goods_id=$id";
			mysql_query($sql);
			$num=mysql_affected_rows();
			if(!$num){
				message('修改失败','goods_list.php');

			}else{
				message('修改成功','goods_list.php');
			}
		}
	}
	
}









?>