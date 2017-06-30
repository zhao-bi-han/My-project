<?php
require ("include/include_top.php");
$user_phone= $_SESSION['user'];
//$user_phone='15512235853';
//查询自己发布的寻物信息  得到物品名称 和时间
 $sql="select * from look_sth where  look_state=0 and look_way=0 and user_phone='$user_phone' ";
 $res=my_query($sql);
   $rw='';
foreach($res as $key => $val){
	$look_name=$val['look_name'];
	$look_time=$val['look_time'];
	//查询招领记录
	$sql="select * from look_sth where look_way=1 and look_state=0 and look_time>='$look_time'  and look_name LIKE '%$look_name%'";
	$rec=mysql_query($sql);
	while(@$row=mysql_fetch_array($rec,MYSQL_BOTH))
   {
   	//把当前用户 寻找用户 插入到look_news 表中
   	$look_user=$row['user_phone'];
	$news_time=$row['look_time'];
	$id=$row['id'];
   	//先判断是否已经插入
   	$sql="select * from look_news where user_phone='$user_phone' and look_phone='$look_user' and news_time='$news_time'";
	mysql_query($sql);
	$num=mysql_affected_rows();
	//look_news 表中没有当前数据  则插入
	if($num!=1){
	  $sql="insert into look_news (id,user_phone,look_phone,news_time,news_state,news_del) values ('$id','$user_phone','$look_user','$news_time','1','1')";
	  mysql_query($sql);
	}
}
}
// 在look_news 表中查询信息 
$sql="select * from look_news where user_phone='$user_phone' and news_del='1'";
$rec=my_query($sql);
foreach($rec as $k => $v){
	$id=$v['id'];
	$look_phone=$v['look_phone'];
	$look_time=$v['news_time'];
	$news_state=$v['news_state'];
	//通过手机号查找昵称
	$sql="select * from look_user where user_phone=".$look_phone ;
	$name=my_query($sql);
	
	//在look_sth 表中查询
	$sql="select * from look_sth where user_phone='$look_phone' and look_time='$look_time'";
	$res=mysql_query($sql);
	while(@$row=mysql_fetch_array($res,MYSQL_BOTH))
   {
   	if ($rw != "") {$rw .= ",";} 
	$rw .= '{"id":"'  . $id . '",';  
    $rw .= '"user_name":"'   . $name[0]['user_name']        . '",'; 
	$rw .= '"user_pic":"'   . $name[0]['user_pic']        . '",'; 
	$rw .= '"look_name":"'   . $row['look_name']        . '",'; 
	$rw .= '"look_time":"'   . $look_time        . '",'; 
	$rw .= '"look_describe":"'   . $row["look_describe"]      . '",'; 
    $rw.= '"news_state":"'. $news_state       . '"}';
   }
}
$outp ='{"records":['.$rw.']}';
   echo $outp;
?>