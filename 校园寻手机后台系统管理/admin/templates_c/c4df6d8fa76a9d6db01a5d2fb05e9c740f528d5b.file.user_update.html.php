<?php /* Smarty version Smarty-3.1.14, created on 2017-04-25 16:39:17
         compiled from "templates\user_update.html" */ ?>
<?php /*%%SmartyHeaderCode:324458fdf48e106415-12521606%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c4df6d8fa76a9d6db01a5d2fb05e9c740f528d5b' => 
    array (
      0 => 'templates\\user_update.html',
      1 => 1493109546,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '324458fdf48e106415-12521606',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_58fdf48e1eb0c4_21428786',
  'variables' => 
  array (
    'userlist' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58fdf48e1eb0c4_21428786')) {function content_58fdf48e1eb0c4_21428786($_smarty_tpl) {?><!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" href="plugins/layui/css/layui.css" media="all" />
	<link rel="stylesheet" href="css/main.css" />
	<script type="text/javascript" src="js/jquery-1.8.0.min.js"></script>
	<style type="text/css">
	body{
		 overflow:hidden; 
	}
			.layui-field-box{
   		padding: 10px 68px;
   	}
   	#update{
   		position: relative;
   		left: 56%;
   	}
   	#update button{
   		margin-left: 10px;
   	}
   	.layui-input, .layui-textarea{
         width: 80%;
   	}
   	.admin-main{
   		 position: relative;
   	}  
	</style>
	<script type="text/javascript">
		$(function(){
			$('.update').click(function(){
				var num=$("#number").val();
				var name=$("#name").val();
				var phone=$("#phone").val();
				var username=$("#username").val();
				var pass=$("#pass").val();
				var cpass=$("#cpass").val();
                var id='<?php echo $_smarty_tpl->tpl_vars['userlist']->value[0]['id'];?>
';
				if(num==''||name==''||phone==''||username==''||pass==''){
					layer.msg("请填写完整的信息");
				}else if(cpass==''){
					layer.msg("请确认密码");
				}else if(pass!=cpass){
					layer.msg("两次密码不一致");
				}else{
					$.ajax({
						url: 'user_update_cl.php',
						type: 'POST',
						data: {
							'num':num ,
							'name':name,
							'phone':phone,
							'username':username,
							'pass':pass,
							'id':id
						},
						success: function(text){
							if(text==0){
								layer.msg("修改失败");
							}else{
								layer.msg("修改成功");
								location.href="user_list.php";
							}
						}
					})
				}
			});
//返回
       $("#back").click(function(event) {
       	location.href="user_list.php";
       });
		});
	</script>
</head>
<body>
	<div class="admin-main">
		<fieldset class="layui-elem-field">
			<legend>修改管理员信息</legend>
			<div class="layui-field-box">
				<div class="layui-form-item">
					<label class="layui-form-label">编&nbsp;&nbsp;&nbsp;号</label>
					<div class="layui-input-block">
						<input type="text" name="number" autocomplete="off" value="<?php echo $_smarty_tpl->tpl_vars['userlist']->value[0]['user_num'];?>
" class="layui-input" id="number">
					</div>
				</div>
				<div class="layui-form-item">
					<label class="layui-form-label">姓&nbsp;&nbsp;&nbsp;名</label>
					<div class="layui-input-block">
						<input type="text" name="name" autocomplete="off" value="<?php echo $_smarty_tpl->tpl_vars['userlist']->value[0]['user_name'];?>
" class="layui-input" id="name">
					</div>
				</div>
				<div class="layui-form-item">
					<label class="layui-form-label">手机号</label>
					<div class="layui-input-inline">
						<input type="tel" name="phone" lay-verify="phone" autocomplete="off" class="layui-input" value="<?php echo $_smarty_tpl->tpl_vars['userlist']->value[0]['user_phone'];?>
" id="phone">
					</div>
				</div>
				<div class="layui-form-item">
					<label class="layui-form-label">用户名</label>
					<div class="layui-input-block">
						<input type="text" name="username" autocomplete="off" value="<?php echo $_smarty_tpl->tpl_vars['userlist']->value[0]['user_username'];?>
" class="layui-input" id="username">
					</div>
				</div>
				<div class="layui-form-item">
					<label class="layui-form-label">密&nbsp;&nbsp;&nbsp;码</label>
					<div class="layui-input-block">
						<input type="password" name="pass" autocomplete="off" value="<?php echo $_smarty_tpl->tpl_vars['userlist']->value[0]['user_pass'];?>
" class="layui-input" id="pass">
					</div>
				</div>
				<div class="layui-form-item">
					<label class="layui-form-label">确认密码</label>
					<div class="layui-input-block">
						<input type="password" name="repass" autocomplete="off" placeholder="请确认密码" class="layui-input" id="cpass">
					</div>
				</div>	
				<div class="layui-form-item">
				<div class="layui-input-block" id="update">						
				<button class="layui-btn update" >修改</button>
				<button class="layui-btn" id="back">返回</button>
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