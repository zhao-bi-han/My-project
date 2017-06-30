<?php /* Smarty version Smarty-3.1.14, created on 2017-06-01 13:02:01
         compiled from "templates\admin_update.html" */ ?>
<?php /*%%SmartyHeaderCode:11824592f9da48b7b58-62667311%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '73a1a8987ad3051b061d4251350db59f43db5b2d' => 
    array (
      0 => 'templates\\admin_update.html',
      1 => 1496293314,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11824592f9da48b7b58-62667311',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_592f9da48fa4c5_73885339',
  'variables' => 
  array (
    'list' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_592f9da48fa4c5_73885339')) {function content_592f9da48fa4c5_73885339($_smarty_tpl) {?><!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" href="plugins/layui/css/layui.css" media="all" />
	<link rel="stylesheet" href="css/main.css" />
	<script type="text/javascript" src="js/jquery-1.8.0.min.js"></script>
	<script type="text/javascript" src="js/ajaxfileupload.js"></script>
	<style type="text/css">
		body{
			overflow:hidden; 
		}
		.layui-field-box{
			padding: 10px 43px;
		}
		#update{
			position: relative;
			left: 58%;
		}
		.layui-input, .layui-textarea{
			width: 80%;
		}
	</style>
	<script type="text/javascript">
		$(function(){
			$("#sub").click(function(event) {
				var name=$("#name").val();
				var phone=$("#phone").val();
				var pass=$("#pass").val();
				var cpass=$("#cpass").val();
                var id='<?php echo $_smarty_tpl->tpl_vars['list']->value[0]['id'];?>
';
				if(name==''||phone==''||pass==''){
					layer.msg("请填写完整的信息");
				}else if(cpass==''){
					layer.msg("请确认密码");
				}else if(pass!=cpass){
					layer.msg("两次密码不一致");
				}else{
					$.ajax({
						url: 'admin_update_cl.php',
						type: 'POST',
						data: {
							'name':name,
							'phone':phone,
							'pass':pass,
							'id':id
						},
						success: function(text){
							if(text==0){
								layer.msg("修改失败");
							}else{
								layer.msg("修改成功");
								location.href="admin_list.php";
							}
						}
					})
				}
			});
			

			//返回
			$("#back").click(function(event) {
				location.href="admin_list.php";
			});
		});
	</script>
</head>

<body>
	<div class="admin-main">
		<fieldset class="layui-elem-field">
			<legend>修改管理员信息</legend>
			<div class="layui-field-box">
				<form class="layui-form" action="" method="post">
					<div class="layui-form-item">
						<label class="layui-form-label">用户名</label>
						<div class="layui-input-block add-stu">
							<input type="text" name="name" autocomplete="off"  class="layui-input" value="<?php echo $_smarty_tpl->tpl_vars['list']->value[0]['admin_name'];?>
" id="name">
						</div>
					</div>
					<div class="layui-form-item">
						<label class="layui-form-label">手机号</label>
						<div class="layui-input-inline">
							<input type="tel" name="phone" lay-verify="phone" autocomplete="off" class="layui-input" value="<?php echo $_smarty_tpl->tpl_vars['list']->value[0]['admin_phone'];?>
" id="phone">
						</div>
					</div>
					<div class="layui-form-item">
					<label class="layui-form-label">密&nbsp;&nbsp;&nbsp;码</label>
					<div class="layui-input-block">
						<input type="password" name="pass" autocomplete="off" value="<?php echo $_smarty_tpl->tpl_vars['list']->value[0]['admin_pass'];?>
" class="layui-input" id="pass">
					</div>
				</div>
				<div class="layui-form-item">
					<label class="layui-form-label">确认密码</label>
					<div class="layui-input-block">
						<input type="password" name="repass" autocomplete="off" placeholder="请确认密码" class="layui-input" id="cpass">
					</div>
			
				</form>

				<div class="layui-input-block" id="update">
					<button class="layui-btn" lay-submit="" lay-filter="demo1" id="sub">修改</button>
					<button class="layui-btn" id="back">返回</button>
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