<?php
 require("include/include_top.php");
 if(isset($_SESSION['user'])){
  $page=@$_GET['page']?$_GET['page']:1;
  $pagesize=11;
 $sql_count="select count(*)  as count from mz_goods";
  $count=my_query($sql_count);
  $count_max=$count[0]['count'];
  if($count_max%$pagesize==0)
  {
	  $maxpage=$count_max/$pagesize;
	 }
  else
  {
	  $maxpage=intval($count_max/$pagesize)+1;
	 }
 
 if($page<1)
 { 
    $page=1;
	 }
  if($page>$maxpage)
  {
	  $page=$maxpage;
	 }
 $maxarray=array();
 for($i=1;$i<=$maxpage;$i++)
 $maxarray[$i]=$i;
 $sql="select * from mz_goods order by goods_id desc limit ".($page-1)*$pagesize.",$pagesize";
  $rec=my_query($sql);
foreach($rec as $key=>$v)
  {
     $sql="select * from mz_class where class_no=".$v['class_no'];
       $class=my_query($sql);
     $rec[$key]['classname']=$class[0]['class_name'];
    }
   foreach($rec as $key=>$v)
   { 
     $sql="select * from mz_style where style_no=".$v['style_no'];
       $style=my_query($sql);
     $rec[$key]['stylename']=$style[0]['style_name'];
 }
//性别
   foreach($rec as $key=>$v)
{
  if($v['goods_sex']==0)
  {
    $rec[$key]['goods_sex']="男";   
  }
  else{
    $rec[$key]['goods_sex']="女";
    }
}

  $smarty->assign("currentPage",$page);
  $smarty->assign("maxpage",$maxpage);
  $smarty->assign("maxarray",$maxarray);

 // $sql="select * from mz_woman";
 // $re=my_query($sql);
 $smarty->assign('goodslist',$rec);
  $smarty->display("templates/goods_list.html");
}else{
  echo "<script>alert('你还没有登录！');parent.location.href='login.php'; </script>";
}
?>