<?php /* Smarty version Smarty-3.1.14, created on 2017-06-01 16:46:23
         compiled from "templates\admin_add.html" */ ?>
<?php /*%%SmartyHeaderCode:329592f8cac0a0278-00964697%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '014431a814d2b56835a270ab3225d413a96c0856' => 
    array (
      0 => 'templates\\admin_add.html',
      1 => 1496306779,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '329592f8cac0a0278-00964697',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_592f8cac0ecd22_25321185',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_592f8cac0ecd22_25321185')) {function content_592f8cac0ecd22_25321185($_smarty_tpl) {?><!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" href="plugins/layui/css/layui.css" media="all" />
	<link rel="stylesheet" href="css/main.css" />
	<script type="text/javascript" src="js/jquery-1.8.0.min.js"></script>
	<script type="text/javascript" src="js/ajaxfileupload.js"></script>
	<style type="text/css">
		#img{
			position: absolute;
			width: 200px;
			height: 300px;
			left: 522px;
		}
		#img .layui-form-item{
			top: 217px;
			position: absolute;
			left: -74px;
		}
		.img{
			position: absolute;
			width: 200px;
			height: 200px;
			border: 1px solid #E6E6E6;
			overflow:hidden; 
		}
		.img img{
			width: 200px;
			height: auto;
		}
		.layui-input{
			width: 300px;
		}
		#btn{
			margin-left: 0px;
			margin-top: 16px;
		}
	</style>
	<script type="text/javascript">
		$(function(){
			$("#btn").click(function(event) {
				var name=$("#name").val();
				var phone=$("#phone").val();
				var pass=$("#pass").val();
				var cpass=$("#cpass").val();
				if(name==''||phone==''||pass==''){
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
							'pass':pass
						},
						success: function(text){
							if(text==0){
								layer.msg("添加失败");
							}else{
								layer.msg("添加成功");
								setTimeout(function(){
									location.href="admin_list.php";
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
			<legend>管理员添加</legend>
			<div class="layui-field-box">
				<form class="layui-form" action="student_add_cl.php" method="post"  enctype="multipart/form-data">
					<div class="layui-form-item" style="margin-top: 50px">
						<label class="layui-form-label">用户名</label>
						<div class="layui-input-block add-stu">
							<input type="text" id="name" autocomplete="off" placeholder="请输入用户名" class="layui-input" name="name">
						</div>
					</div>
					<div class="layui-form-item">
						<label class="layui-form-label">手机号</label>
						<div class="layui-input-inline">
							<input type="tel" id="phone" lay-verify="phone" autocomplete="off" class="layui-input" placeholder="请输入手机号" name="phone" maxlength="11">
						</div>
					</div>
				
					<div class="layui-form-item">
						<label class="layui-form-label">密&nbsp;&nbsp;&nbsp;码</label>
						<div class="layui-input-block">
							<input type="password" id="pass" autocomplete="off" placeholder="请输入密码" class="layui-input" name="pass">
						</div>
					</div>
					<div class="layui-form-item">
						<label class="layui-form-label">确认密码</label>
						<div class="layui-input-block">
							<input type="password" id="cpass" autocomplete="off" placeholder="请输入确认密码" class="layui-input"  >
						</div>
					</div>
				</form>	
				<div class="layui-form-item">
					<div class="layui-input-block">
						<button class="layui-btn" name="sub" id="btn"onclick="return ajaxFileUpload();">确认添加</button>
					</div>
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