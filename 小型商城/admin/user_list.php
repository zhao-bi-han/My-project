<?php
 require("include/include_top.php");
 if(isset($_SESSION['user'])){
 // 分页
 $page=@$_GET['page']?$_GET['page']:1;
  $pagesize=11;
 $sql_count="select count(*)  as count from mz_user";
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
 $sql="select * from mz_user order by user_id desc limit ".($page-1)*$pagesize.",$pagesize";
  $rec=my_query($sql);
  // 性别
  foreach($rec as $key=>$v)
{
  if($v['user_sex']==0)
  {
    $rec[$key]['user_sex']="男";   
  }
  else{
    $rec[$key]['user_sex']="女";
    }
}
//

  $smarty->assign("currentPage",$page);
  $smarty->assign("maxpage",$maxpage);
  $smarty->assign("maxarray",$maxarray);
 $smarty->assign('userlist',$rec);
  $smarty->display("templates/user_list.html");
}else{
  echo "<script>alert('你还没有登录！');parent.location.href='login.php'; </script>";
}
?>