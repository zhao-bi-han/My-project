<?php /* Smarty version Smarty-3.1.14, created on 2016-12-07 19:07:48
         compiled from "templates\myaccount.html" */ ?>
<?php /*%%SmartyHeaderCode:137545838e414c69a20-78368507%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'af5c606a5b6c3cfe5d81bec3eb7d3c6262fee14e' => 
    array (
      0 => 'templates\\myaccount.html',
      1 => 1481108866,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '137545838e414c69a20-78368507',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5838e414d07358_10144684',
  'variables' => 
  array (
    'user' => 0,
    'sf' => 0,
    'sfen' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5838e414d07358_10144684')) {function content_5838e414d07358_10144684($_smarty_tpl) {?><!DOCTYPE html>
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
					<li><a href="">我的订单 ></a></li>
					<li></li>
				</ul>
			</div>
		</div>
		<form action="#" method="post">
			<div class="account_right">
				<div class="jbzl">基本资料</div>
				<div class="jbzl_content">
					<table  cellpadding="0" cellspacing="0" width="300px" height="150px">
						<tr>
							<td>昵称</td>
							<td><input type="text" name="user_name" class="input" value="<?php echo $_smarty_tpl->tpl_vars['user']->value[0]['user_name'];?>
"></td>
						</tr>
						<tr>
							<td>性别</td>
							<td><label class="single_selection"><input type="radio" name="name" value="0" <?php if ($_smarty_tpl->tpl_vars['user']->value[0]['user_sex']==0){?> checked<?php }?>/>男</label>
								<label class="single_selection"><input type="radio" name="name" value="1" <?php if ($_smarty_tpl->tpl_vars['user']->value[0]['user_sex']==1){?> checked<?php }?>/>女</label></td>
							</tr>
							<tr>
								<td>手机号</td>
								<td><input type="text" name="user_phone" class="input" value="<?php echo $_smarty_tpl->tpl_vars['user']->value[0]['user_phone'];?>
"></td>
							</tr>
							<tr>
				<td>地区</td>
			<td><select name="user_area">
		<?php  $_smarty_tpl->tpl_vars['sfen'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sfen']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sf']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sfen']->key => $_smarty_tpl->tpl_vars['sfen']->value){
$_smarty_tpl->tpl_vars['sfen']->_loop = true;
?>
         <option <?php if ($_smarty_tpl->tpl_vars['user']->value[0]['user_area']==$_smarty_tpl->tpl_vars['sfen']->value['area_name']){?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['sfen']->value['area_name'];?>
</option>
         <?php } ?>
								</select>
							</td>
						</tr>
					</table>
				</div>
				<div class="qtxx">其他信息</div>
				<div class="qtxx_content">
					<span>自我介绍 <b>：</b></span>
					<textarea placeholder="随便写点什么，让大家了解你把！" name="user_contnet"><?php echo $_smarty_tpl->tpl_vars['user']->value[0]['user_content'];?>
</textarea>
				</div>
				<div class="account_sub">
					<input type="submit" name="sub" value="修改完成">
				</div>
			</div>
		</form>
	</div>
</body>
</html><?php }} ?>