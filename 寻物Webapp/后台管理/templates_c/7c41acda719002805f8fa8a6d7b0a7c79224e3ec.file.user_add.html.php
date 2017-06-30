<?php /* Smarty version Smarty-3.1.14, created on 2017-06-01 16:50:53
         compiled from "templates\user_add.html" */ ?>
<?php /*%%SmartyHeaderCode:2203858fc23e9135e43-22597452%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7c41acda719002805f8fa8a6d7b0a7c79224e3ec' => 
    array (
      0 => 'templates\\user_add.html',
      1 => 1496307049,
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
		textarea{
			width: 300px;
			height: 100px
		}
	</style>
	<script type="text/javascript">
		$(function(){
			$(".layui-btn").click(function(event) {
				var name=$("#name").val();
				var phone=$("#phone").val();
				var area=$(".area").val();
				var pass=$("#pass").val();
				var cpass=$("#cpass").val();
				if(name==''||phone==''||area==''||pass==''){
					layer.msg("请填写完整的信息");
				}else if(cpass==''){
					layer.msg("请确认密码");
				}else if(pass!=cpass){
					layer.msg("两次密码不一致");
				}else{
					$.ajax({
						url: 'user_add_cl.php',
						type: 'POST',
						data: {
							'name':name,
							'phone':phone,
							'area':area,
							'pass':pass
						},
						success: function(text){
							if(text==0){
								layer.msg("添加失败");
							}else{
								layer.msg("添加成功");
								setTimeout(function(){
									location.href="user_list.php";
								}, 1000); 
								
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
			<legend>用户添加</legend>
			<div class="layui-field-box">
				<form class="layui-form" method="post">
					<div class="layui-form-item" style="margin-top: 30px">
					<label class="layui-form-label">昵&nbsp;&nbsp;&nbsp;称</label>
						<div class="layui-input-block">
							<input type="text" name="name" autocomplete="off" placeholder="请输入昵称" class="layui-input" id="name">
						</div>
					</div>
					<div class="layui-form-item">
					<label class="layui-form-label">手机号</label>
						<div class="layui-input-inline">
							<input type="tel" name="phone" lay-verify="phone" autocomplete="off" class="layui-input" placeholder="请输入手机号" id="phone" maxlength="11">
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
					<div class="layui-form-item">
						<label class="layui-form-label">介&nbsp;&nbsp;&nbsp;绍</label>
						<div class="layui-input-block">
							<textarea class="area"></textarea>
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