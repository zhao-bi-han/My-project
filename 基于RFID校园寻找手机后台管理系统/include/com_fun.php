<?php
function my_query($sql,$page_num=0,$pagecount=10)
{
  $rs=mysql_query($sql);
  $rw=array();
  $i=0;
  while(@$row=mysql_fetch_array($rs,MYSQL_BOTH))
   {
	  $rw[$i++]=$row;
   }
   return $rw;
   
}

function message($text,$url="#")
{
    echo "<script>alert('".$text."');location='".$url."';</script>";
}
function gx_tree($id)
{
	
}
?>