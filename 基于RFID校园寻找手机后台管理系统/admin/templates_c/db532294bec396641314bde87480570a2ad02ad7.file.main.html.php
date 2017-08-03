<?php /* Smarty version Smarty-3.1.14, created on 2017-05-02 21:42:03
         compiled from "templates\main.html" */ ?>
<?php /*%%SmartyHeaderCode:990158f969b0642c85-63239014%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'db532294bec396641314bde87480570a2ad02ad7' => 
    array (
      0 => 'templates\\main.html',
      1 => 1493732520,
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
    'find' => 0,
    'lose' => 0,
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
		<script type="text/javascript" src="jqplot.js"></script>
	</head>

	<body>
		<div class="admin-main">
			<fieldset class="layui-elem-field" >
				<legend>数据统计显示</legend>
				<div id="chart1" style="margin-top: 50px; margin-bottom: 80px;"></div>
				<div style="text-align:center;clear:both;">
					<script src="/gg_bd_ad_720x90.js" type="text/javascript"></script>
					<script src="/follow.js" type="text/javascript"></script>
				</div>
				<script type="text/javascript">
				var f='<?php echo $_smarty_tpl->tpl_vars['find']->value;?>
';
				var find=f.split(',');
                var l='<?php echo $_smarty_tpl->tpl_vars['lose']->value;?>
';
                var lose=l.split(',');
					var data = [find,lose];
					var data_max = 10; //Y轴最大刻度
					var line_title = ["找回", "丢失"]; //曲线名称
					var y_label = "数量"; //Y轴标题
					var x_label = "天数"; //X轴标题
					var x = [1, 2, 3, 4, 5, 6, 7]; //定义X轴刻度值
					var title = "近七天手机丢失与找回数量统计"; //统计图标标题
					j.jqplot.diagram.base("chart1", data, line_title, title, x, x_label, y_label, data_max, 1);
				</script>
			</fieldset>
		</div>
	</body></html><?php }} ?>