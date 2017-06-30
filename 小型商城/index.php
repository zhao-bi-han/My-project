<?php
require("include/include_top.php");
require("head.php");

$sql="select * from mz_goods where goods_id=32 or goods_id=33 or goods_id=16 or goods_id=19 or goods_id=53 or goods_id=54 or goods_id=56 or goods_id=72  ";
$wgoods=my_query($sql);
$sql="select * from mz_goods where goods_id=358 or goods_id=381 or goods_id=382 or goods_id=384 or goods_id=385 or goods_id=386 or goods_id=323 or goods_id=428  ";
$mgoods=my_query($sql);
$sql="select * from mz_goods where goods_id=115 or goods_id=116 or goods_id=119 or goods_id=120 or goods_id=473 or goods_id=475 or goods_id=357 or goods_id=456  ";
$ogoods=my_query($sql);
 //导航  商品分类 风格
$sql="select * from mz_class where class_sex=1";
$wclas=my_query($sql);
$sql="select * from mz_style where style_sex=1";
$wstyl=my_query($sql);
$sql="select * from mz_class where class_sex=0";
$mclas=my_query($sql);
$sql="select * from mz_style where style_sex=0";
$mstyl=my_query($sql);


//首页女性收藏夹商品
if(isset($_SESSION['name'])){
  $cname=$_SESSION['name'];
  foreach ($wgoods as $key=>$v)
  {
    $sql="select * from mz_collect where collect_username='$cname' and collect_id=".$v['goods_id'];
    $rec=my_query($sql);
    if(count($rec))
    {
     $wgoods[$key]['col']='style/img/collecth.png';
   }
   else
   {
    $wgoods[$key]['col']='style/img/collect.png';
  }

}
}
//首页男性商品收藏
if(isset($_SESSION['name'])){
  $cname=$_SESSION['name'];
  foreach ($mgoods as $key=>$v)
  {
    $sql="select * from mz_collect where collect_username='$cname' and collect_id=".$v['goods_id'];
    $rec=my_query($sql);
    if(count($rec))
    {
     $mgoods[$key]['col']='style/img/collecth.png';
   }
   else
   {
    $mgoods[$key]['col']='style/img/collect.png';
  }

}
}
//首页其他商品收藏
if(isset($_SESSION['name'])){
  $cname=$_SESSION['name'];
  foreach ($ogoods as $key=>$v)
  {
    $sql="select * from mz_collect where collect_username='$cname' and collect_id=".$v['goods_id'];
    $rec=my_query($sql);
    if(count($rec))
    {
     $ogoods[$key]['col']='style/img/collecth.png';
   }
   else
   {
    $ogoods[$key]['col']='style/img/collect.png';
  }

}
}

$smarty->assign('wstyl',$wstyl);
$smarty->assign('wclas',$wclas);
$smarty->assign('mstyl',$mstyl);
$smarty->assign('mclas',$mclas);
$smarty->assign('wgoods',$wgoods);
$smarty->assign('mgoods',$mgoods);
$smarty->assign('ogoods',$ogoods);
$smarty->display("templates/index1.html");
?>