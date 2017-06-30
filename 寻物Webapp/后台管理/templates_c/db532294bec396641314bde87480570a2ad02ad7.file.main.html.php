<?php /* Smarty version Smarty-3.1.14, created on 2017-06-01 12:19:08
         compiled from "templates\main.html" */ ?>
<?php /*%%SmartyHeaderCode:990158f969b0642c85-63239014%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'db532294bec396641314bde87480570a2ad02ad7' => 
    array (
      0 => 'templates\\main.html',
      1 => 1496290746,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '990158f969b0642c85-63239014',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_58f969b06d4496_25355386',
  'variables' => 
  array (
    'rec' => 0,
    'info' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58f969b06d4496_25355386')) {function content_58f969b06d4496_25355386($_smarty_tpl) {?><!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<title></title>
		<link rel="stylesheet" href="plugins/layui/css/layui.css" media="all" />
		<link rel="stylesheet" href="css/main.css" />
		<link rel="stylesheet" href="css/global.css" media="all">
		<link rel="stylesheet" href="plugins/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/table.css" />
		<script type="text/javascript" src="js/jQuery.js"></script>
	</head>

	<body>
		<div class="admin-main">
			<fieldset class="layui-elem-field" >
				<legend>寻物列表</legend>
				<div class="layui-field-box">
				<table class="site-table table-hover">
					<thead>
						<tr>
							<th><input type="checkbox" id="selected-all"></th>
							<th>用户</th>
							<th>物品名称</th>
							<th>描述</th>
							<th>联系电话</th>
							<th>状态</th>
							<th>时间</th>
						</tr>
					</thead>
					<tbody>
						<?php  $_smarty_tpl->tpl_vars['info'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['info']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rec']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['info']->key => $_smarty_tpl->tpl_vars['info']->value){
$_smarty_tpl->tpl_vars['info']->_loop = true;
?>
						<tr >
							<td><input type="checkbox"></td>
							<td ><?php echo $_smarty_tpl->tpl_vars['info']->value['user_phone'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['info']->value['look_name'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['info']->value['look_describe'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['info']->value['look_phone'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['info']->value['look_state'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['info']->value['look_time'];?>
</td>
						</tr>
						<?php } ?>

					</tbody>
				</table>

			</div>
			</fieldset>
		</div>
	</body></html><?php }} ?>