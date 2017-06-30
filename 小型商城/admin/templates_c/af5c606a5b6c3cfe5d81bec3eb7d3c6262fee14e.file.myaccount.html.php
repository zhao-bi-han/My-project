<?php /* Smarty version Smarty-3.1.14, created on 2016-11-22 21:30:24
         compiled from "templates\myaccount.html" */ ?>
<?php /*%%SmartyHeaderCode:133345832ee4407c6f8-80305376%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'af5c606a5b6c3cfe5d81bec3eb7d3c6262fee14e' => 
    array (
      0 => 'templates\\myaccount.html',
      1 => 1479821422,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '133345832ee4407c6f8-80305376',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5832ee440d2fb8_72636947',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5832ee440d2fb8_72636947')) {function content_5832ee440d2fb8_72636947($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style/css/common.css">
	<link rel="stylesheet" type="text/css" href="style/css/conn.css">
	<script type="text/javascript" src="style/js/jquery-1.8.0.min.js"></script>
	<script type="text/javascript" src="style/js/common.js"></script>
</head>
<body>
 <?php echo $_smarty_tpl->getSubTemplate ("head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

 <hr class="account_hr">
 <div class="account">
 	<div class="account_left" style="background-image: url(style/img/accountbg.png);">
 		<div class="account_left_top">
 			<img src="style/img/touxiang.png">
 		</div>
 		<div class="account_left_bottom">
 			<ul>
 				<li><a href="collect.php"> 我的收藏 > </a></li>
 				<li><a href="cart.php">我的购物车 ></a></li>
 				<li><a href="order.php">我的订单 ></a></li>
 				<li></li>
 			</ul>
 		</div>
 	</div>
 	<div class="account_right">
 		<div class="jbzl">基本资料</div>
 		<div class="jbzl_content">
 			<table  cellpadding="0" cellspacing="0" width="300px" height="150px">
 				<tr>
 					<td>昵称</td>
 					<td><input type="text" name="name" class="input"></td>
 				</tr>
 				<tr>
 					<td>性别</td>
 					<td>男<input type="checkbox" name="nan">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;女<input type="checkbox" name="nv"></td>
 				</tr>
 				<tr>
 					<td>手机号</td>
 					<td><input type="text" name="phone" class="input"></td>
 				</tr>
 				<tr>
 					<td>地区</td>
 					<td><select>
 						<option>选择地区</option>
 						<option>北京</option>
 						<option>天津</option>
 					    </select>
 					</td>
 				</tr>
 			</table>
 		</div>
 		<div class="qtxx">其他信息</div>
 		<div class="qtxx_content">
 		<span>自我介绍 <b>：</b></span>
 			<textarea placeholder="随便写点什么，让大家了解你把！"></textarea>
 		</div>
 		<div class="account_sub">
 			<input type="submit" name="sub" value="修改完成">
 		</div>
 	</div>
 </div>
</body>
</html><?php }} ?>