<?php
 require("include/include_top.php");
 if(isset($_SESSION['user'])){
  $page=@$_GET['page']?$_GET['page']:1;
  $pagesize=11;
 $sql_count="select count(*)  as count from mz_class";
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
 $sql="select * from mz_class order by class_id desc limit ".($page-1)*$pagesize.",$pagesize";
  $rec=my_query($sql);
//男性 女性
  foreach($rec as $key=>$v)
{
  if($v['class_sex']==0)
  {
    $rec[$key]['class_sex']="男性";   
  }
  else{
    $rec[$key]['class_sex']="女性";
    }
}

  $smarty->assign("currentPage",$page);
  $smarty->assign("maxpage",$maxpage);
  $smarty->assign("maxarray",$maxarray);

 // $sql="select * from mz_woman";
 // $re=my_query($sql);
 $smarty->assign('classlist',$rec);
 $smarty->display("templates/class_list.html");
}else{
  echo "<script>alert('你还没有登录！');parent.location.href='login.php'; </script>";
}
?>