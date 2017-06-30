<?php
 require("include/include_top.php");
 if(isset($_SESSION['user'])){
 $page=@$_GET['page']?$_GET['page']:1;
  $pagesize=11;
 $sql_count="select count(*)  as count from mz_style";
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
 $sql="select * from mz_style order by style_id desc limit ".($page-1)*$pagesize.",$pagesize";
  $rec=my_query($sql);

  //男性 女性

 foreach($rec as $key=>$v)
{
  if($v['style_sex']==0)
  {
    $rec[$key]['style_sex']="男性";   
  }
  else{
    $rec[$key]['style_sex']="女性";
    }
}
//
  $smarty->assign("currentPage",$page);
  $smarty->assign("maxpage",$maxpage);
  $smarty->assign("maxarray",$maxarray);
 $smarty->assign('stylelist',$rec);
 $smarty->display("templates/style_list.html");
}else{
   echo "<script>alert('你还没有登录！');parent.location.href='login.php'; </script>";
}
?>