<?php /* Smarty version Smarty-3.1.14, created on 2016-12-26 21:22:52
         compiled from "templates\goods_show.html" */ ?>
<?php /*%%SmartyHeaderCode:258375860dc29881134-17946673%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5a3e8243a59d2bc61d5142d8ac0406fd762790d6' => 
    array (
      0 => 'templates\\goods_show.html',
      1 => 1482747045,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '258375860dc29881134-17946673',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5860dc29a8dcf1_05582038',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5860dc29a8dcf1_05582038')) {function content_5860dc29a8dcf1_05582038($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style/css/common.css">
	<link rel="stylesheet" type="text/css" href="style/css/conn.css">
	<link rel="stylesheet" type="text/css" href="style/css/goods.css">
	<script type="text/javascript" src="style/js/jquery-1.8.0.min.js"></script>
	<script type="text/javascript" src="style/js/common.js"></script>
	<style type="text/css">
  .goods_da{
	position: relative;
	width: 300px;
	height: 300px;
	border: 1px solid red;
	left: 20%;
	top:80px;

}
.goods_xiao{
	position: relative;
	height: 50px;
	width: 300px;
	border: 1px solid red;
	left:20%;
	top:100px;
}
.goods_xiao ul{
	position: absolute;
	margin: 0;
	padding: 0;
	left: -10px;
}
.goods_xiao li{
  list-style: none;
  float: left;
  border: 1px solid blue;
  width: 50px;
  height: 50px;
  margin-left: 10px;
}
.title{
 position: relative;
 width: 500px;
 height: 50px;
 border: 1px solid red;
 left: 43%;
 top:-274px;
}
.price{
	position: relative;
	width: 500px;
	height: 60px;
	border: 1px solid red;
	left: 43%;
	top:-250px;
}
</style>
</head>
<body>
<?php echo $_smarty_tpl->getSubTemplate ("head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<hr class="wm_hr" id="wm_hr" style="top:150px">
   <div class="goods_da"></div>
   <div class="goods_xiao">
   	 <ul>
   	 	<li></li>
   	 	<li></li>
   	 	<li></li>
   	 </ul>
   </div>
   <div class="title"></div>
   <div class="price"></div>
   <div class="ljgm"></div>
   <div class="gwc"></div>
</body>
</html><?php }} ?>