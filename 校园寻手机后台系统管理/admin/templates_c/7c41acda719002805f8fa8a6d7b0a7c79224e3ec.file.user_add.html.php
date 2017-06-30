<?php /* Smarty version Smarty-3.1.14, created on 2017-05-02 09:03:42
         compiled from "templates\user_add.html" */ ?>
<?php /*%%SmartyHeaderCode:2203858fc23e9135e43-22597452%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7c41acda719002805f8fa8a6d7b0a7c79224e3ec' => 
    array (
      0 => 'templates\\user_add.html',
      1 => 1493351508,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2203858fc23e9135e43-22597452',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_58fc23e91f0c89_90166882',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58fc23e91f0c89_90166882')) {function content_58fc23e91f0c89_90166882($_smarty_tpl) {?><!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" href="plugins/layui/css/layui.css" media="all" />
	<link rel="stylesheet" href="css/main.css" />
	<script type="text/javascript" src="js/jquery-1.8.0.min.js"></script>
	<style type="text/css">
		.layui-btn{
			margin-left: 111px;
		}
	</style>
	<script type="text/javascript">
		$(function(){
			$(".layui-btn").click(function(event) {
				var num=$("#number").val();
				var name=$("#name").val();
				var phone=$("#phone").val();
				var username=$("#username").val();
				var pass=$("#pass").val();
				var cpass=$("#cpass").val();
				if(num==''||name==''||phone==''||username==''||pass==''){
					layer.msg("请填写完整的信息");
				}else if(cpass==''){
					layer.msg("请确认密码");
				}else if(pass!=cpass){
					layer.msg("两次密码不一致");
				}else{
					$.ajax({
						url: 'useradd.php',
						type: 'POST',
						data: {
							'num':num ,
							'name':name,
							'phone':phone,
							'username':username,
							'pass':pass,
						},
						success: function(text){
							if(text==0){
								layer.msg("添加失败");
							}else{
								layer.msg("添加成功");
								location.href="user_list.php";
							}
						}
					})
				}
			});
		});
	</script>
</head>

<body>
	<div class="admin-main">
		<fieldset class="layui-elem-field">
			<legend>管理员添加</legend>
			<div class="layui-field-box">
				<form class="layui-form" method="post">
					<div class="layui-form-item">
						<label class="layui-form-label">编&nbsp;&nbsp;&nbsp;号</label>
						<div class="layui-input-block">
							<input type="text" name="number" autocomplete="off" placeholder="请输入编号" class="layui-input" id="number">
						</div>
					</div>
					<div class="layui-form-item">
						<label class="layui-form-label">姓&nbsp;&nbsp;&nbsp;名</label>
						<div class="layui-input-block">
							<input type="text" name="name" autocomplete="off" placeholder="请输入姓名" class="layui-input" id="name">
						</div>
					</div>
					<div class="layui-form-item">
						<label class="layui-form-label">手机号</label>
						<div class="layui-input-inline">
							<input type="tel" name="phone" lay-verify="phone" autocomplete="off" class="layui-input" placeholder="请输入手机号" id="phone" maxlength="11">
						</div>
					</div>
					<div class="layui-form-item">
						<label class="layui-form-label">用户名</label>
						<div class="layui-input-block">
							<input type="text" name="username" autocomplete="off" placeholder="请输入用户名" class="layui-input" id="username">
						</div>
					</div>
					<div class="layui-form-item">
						<label class="layui-form-label">密&nbsp;&nbsp;&nbsp;码</label>
						<div class="layui-input-block">
							<input type="password" name="pass" autocomplete="off" placeholder="请输入密码" class="layui-input" id="pass">
						</div>
					</div>
					<div class="layui-form-item">
						<label class="layui-form-label">确认密码</label>
						<div class="layui-input-block">
							<input type="password" name="repass" autocomplete="off" placeholder="请确认密码" class="layui-input" id="cpass">
						</div>
					</div>
				</form>
				<div class="layui-form-item">
					<button class="layui-btn">确认添加</button>				
				</div>

			</div>
		</fieldset>
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