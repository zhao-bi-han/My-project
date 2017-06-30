<?php /* Smarty version Smarty-3.1.14, created on 2017-05-02 08:59:40
         compiled from "templates\login.html" */ ?>
<?php /*%%SmartyHeaderCode:791958feaad7950ba2-90854386%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '73c8520d99106c46b85785275a880443b3cb31e8' => 
    array (
      0 => 'templates\\login.html',
      1 => 1493686778,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '791958feaad7950ba2-90854386',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_58feaad7a4eb21_48398753',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58feaad7a4eb21_48398753')) {function content_58feaad7a4eb21_48398753($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
<title>登录</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/login.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome.css" rel="stylesheet"> 
<script type="text/javascript" src="js/jquery-1.8.0.min.js"></script>
<script src="js/script.js"></script>
<script type="text/javascript">
	$(function(){
			$("#btn").click(function(event) {
				var user=$("#name").val();
				var pass=$("#pass").val();
				if(user==''){
					layer.msg("请输入用户名");
				}else if(pass==''){
					layer.msg("请输入密码");
				}else{
					$.ajax({
						url: 'login_cl.php',
						type: 'POST',
						data: {
							'user':$("#name").val(),
							'pass':$("#pass").val()
						},
						success: function(text){
							if(text==1){
								layer.msg("登录成功");
								location.href="index.php";
							}else{
								layer.msg("用户名或密码不正确");
							}
						}
					})
				}
				
			});
		});
</script> 
</head>
<body>
	<div class="main-agile">
		<div id="w3ls_form" class="signin-form">
			<form id="signin" action="#" method="post">
				<h2>校园寻手机系统</h2>
				<input type="text" name="name" placeholder="用户名"  id="name" />
				<input type="password" name="pass" placeholder="密码"  id="pass" />	 
				<input type="button" value="登录" id="btn">
				</form>
				
		
			
		</div>
		<div class="copyright">
			<p> © 2017 <a href="http://www.bdu.edu.cn/default.html" target="_blank">保定学院</a> 信息技术系 物联网工程</p>
		</div>
	</div>	
	<script type="text/javascript" src="plugins/layui/layui.js"></script>
  <script>
    layui.config({
      base: 'plugins/layui/modules/'
    });

    layui.use(['icheck', 'laypage','layer'], function() {
      var $ = layui.jquery,
      laypage = layui.laypage,
      layer = parent.layer === undefined ? layui.layer : parent.layer;
      $('input').iCheck({
        checkboxClass: 'icheckbox_flat-green'
      });
      });
      </script>
</body>
</html><?php }} ?>