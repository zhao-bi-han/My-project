<?php /* Smarty version Smarty-3.1.14, created on 2017-06-01 11:45:59
         compiled from "templates\index.html" */ ?>
<?php /*%%SmartyHeaderCode:1427658f969aed71762-43201809%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4168cf2c7dda6b349f352305cbbe4c65600adad2' => 
    array (
      0 => 'templates\\index.html',
      1 => 1496288757,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1427658f969aed71762-43201809',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_58f969aedf8dd5_91265206',
  'variables' => 
  array (
    'userarray' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58f969aedf8dd5_91265206')) {function content_58f969aedf8dd5_91265206($_smarty_tpl) {?><!DOCTYPE html>

<html>

<head>
	<meta charset="utf-8">
	<title>寻物后台管理</title>
	<meta name="renderer" content="webkit">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="format-detection" content="telephone=no">

	<link rel="stylesheet" href="plugins/layui/css/layui.css" media="all" />
	<link rel="stylesheet" href="css/global.css" media="all">
	<link rel="stylesheet" href="plugins/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/iconfont.css" />
	<link rel="stylesheet" href="css/my.css"/>
	<style type="text/css">
		.logo img{
			position: absolute;
			width: 53px;
			height: auto;
			top: -11px;
			left: 10px;
		}
		.logo span{
			display: block;
			position: absolute;
			left: 5px;
			width: 200px;
		}

	</style>
</head>

<body>
	<div class="layui-layout layui-layout-admin">
		<div class="layui-header header header-demo">
			<div class="layui-main">
				<div class="admin-login-box">
					<a class="logo" style="left: 0;">
						<span style="font-size: 27px;">寻物后台管理</span>
					</a>
				</div>
				<ul class="layui-nav admin-header-item">
					<li class="layui-nav-item">
						<a href="javascript:;" class="admin-header-user">
							<img src="images/user.jpg" />
							
							<span><?php echo $_smarty_tpl->tpl_vars['userarray']->value[0];?>
</span>

						</a>
						<dl class="layui-nav-child">
							<dd>
								<a href="login.php"><i class="fa fa-sign-out" aria-hidden="true"></i>退出</a>
							</dd>
						</dl>
					</li>
				</ul>
				<ul class="layui-nav admin-header-item-mobile">
					<li class="layui-nav-item">
						<a href="login.html"><i class="fa fa-sign-out" aria-hidden="true"></i>退出</a>
					</li>
				</ul>
			</div>
		</div>
		<div class="layui-side layui-bg-black" id="admin-side">
			<div class="layui-side-scroll" id="admin-navbar-side" lay-filter="side"></div>
		</div>
		<div class="layui-body" style="bottom: 0;border-left: solid 2px #1AA094;" id="admin-body">
			<div class="layui-tab admin-nav-card layui-tab-brief" lay-filter="admin-tab">
				<ul class="layui-tab-title">
					<li class="layui-this">
						<i class="iconfont icon-shujutongji" aria-hidden="true"></i>
						<!--<cite>控制面板</cite>-->
						寻物列表
					</li>

				</ul>

				<div class="layui-tab-content" style="min-height: 150px; padding: 5px 0 0 0;">
					<div class="layui-tab-item layui-show">
						<iframe src="main.php"></iframe>
					</div>
				</div>
			</div>
		</div>
		<div class="layui-footer footer footer-demo" id="admin-footer">
			<div class="layui-main">
				<p>2017 &copy;
					<a href="http://www.bdu.edu.cn/default.html" target="_blank">保定学院</a> 信息技术系 物联网工程
				</p>
			</div>
		</div>
		<div class="site-tree-mobile layui-hide">
			<i class="layui-icon">&#xe602;</i>
		</div>
		<div class="site-mobile-shade"></div>
		<script type="text/javascript" src="plugins/layui/layui.js"></script>
		<script type="text/javascript" src="datas/nav.js"></script>
		<script src="js/index.js"></script>
	
	</div>
</body>

</html><?php }} ?>