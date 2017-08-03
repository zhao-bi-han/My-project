<?php /* Smarty version Smarty-3.1.14, created on 2017-05-02 17:46:08
         compiled from "templates\student_add.html" */ ?>
<?php /*%%SmartyHeaderCode:2453658fc23e6d5c3c3-62981338%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5a0c0fc6e8e4e1170f67130d77111a3b2db05020' => 
    array (
      0 => 'templates\\student_add.html',
      1 => 1493718365,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2453658fc23e6d5c3c3-62981338',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_58fc23e6ebaff4_66200525',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58fc23e6ebaff4_66200525')) {function content_58fc23e6ebaff4_66200525($_smarty_tpl) {?><!DOCTYPE html>
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
			margin-left: 482px;
			margin-top: -89px;
		}
	</style>
	<script type="text/javascript">
		$(function(){
			$("#btn").click(function(event) {               
				var no=$("#no").val();
				var name=$("#name").val();
				var grade=$("#grade").val();
				var major=$("#major").val();
				var phone=$("#phone").val();
				var card=$("#card").val();
				var pass=$("#pass").val();
				var cpass=$("#cpass").val();
				var file=$("#upload").val();
				if(file==''){
					layer.msg("请上传照片");
				}else if(no==''||name==''||grade==''||major==''||phone==''||card==''||pass==''){
					layer.msg("请填写完整的信息");
				}else if(cpass==''){
					layer.msg("请确认密码");
				}else if(pass!=cpass){
					layer.msg("两次密码不一致,请重新输入");
				}else{
					var file_name=file.match(/[\w]+\.(jpg|png|jpeg)$/i);
					var pic=file_name[0];
					$.ajax({
						url: 'student_add_cl.php',
						type:"POST",
						dataType:"json",
						resetForm:true,
						data:{
							'no':no,
							'name':name,
							'grade':grade,
							'major':major,
							'phone':phone,
							'card':card,
							'pass':pass,
							'pic':pic,
							'id':1

						},
						success:function(text){
							if(text==0){
								layer.msg("添加失败");
							}else{
								layer.msg("添加成功");
								setTimeout(function(){
									location.href="student_list.php";
								}, 1000); 
								
							}
						} 

					})
					
				}			
			});
			$("#file").change(function(event) {
				$.ajaxFileUpload({
					url: 'uploadpic.php', 
					secureuri: false, 
					fileElementId: 'file', 
					dataType: 'json', 
					type:"POST",
					data:{
						'id':0
					},
					success : function(data, status) {					
						$("#upload").val(data);
						var fil=$("#upload").val();
						var fil_name=fil.match(/[\w]+\.(jpg|png|jpeg)$/i);
						var picture=fil_name[0];
						$(".img img").attr('src','picture/'+picture);
					} 
				});
			});
		});
	</script>
</head>

<body>
	<div class="admin-main">
		<fieldset class="layui-elem-field">
			<legend>学生添加</legend>
			<div class="layui-field-box">
				<div id="img">
					<div class="img">
						<img src="">
					</div>
					<div class="layui-form-item">
						<!-- <label class="layui-form-label">上传照片</label> -->
						<div class="layui-input-block">
							<input type="file" name="file" accept="image/png, image/jpg,image/jpeg" class="layui-upload-file" style="opacity: 1;" id="file">  
							<input type="hidden" name="upload" id="upload" > 
						</div>
					</div>
				</div>

				<form class="layui-form" action="student_add_cl.php" method="post"  enctype="multipart/form-data">
					<div class="layui-form-item">
						<label class="layui-form-label">学&nbsp;&nbsp;&nbsp;号</label>
						<div class="layui-input-block add-stu">
							<input type="text" id="no" autocomplete="off" placeholder="请输入学号" class="layui-input" name="no">
						</div>
					</div>
					<div class="layui-form-item">
						<label class="layui-form-label">姓&nbsp;&nbsp;&nbsp;名</label>
						<div class="layui-input-block">
							<input type="text" id="name" autocomplete="off" placeholder="请输入姓名" class="layui-input" name="name">
						</div>
					</div>

					<div class="layui-form-item">
						<label class="layui-form-label">年&nbsp;&nbsp;&nbsp;级</label>
						<div class="layui-input-block">
							<input type="text" id="grade" autocomplete="off" placeholder="请输入年级" class="layui-input" name="grade">
						</div>
					</div>
					<div class="layui-form-item">
						<label class="layui-form-label">专&nbsp;&nbsp;&nbsp;业</label>
						<div class="layui-input-block">
							<input type="text" id="major" autocomplete="off" placeholder="请输入专业" class="layui-input" name="major">
						</div>
					</div>
					<div class="layui-form-item">
						<label class="layui-form-label">手机号</label>
						<div class="layui-input-inline">
							<input type="tel" id="phone" lay-verify="phone" autocomplete="off" class="layui-input" placeholder="请输入手机号" name="phone" maxlength="11">
						</div>
					</div>
					<div class="layui-form-item">
						<label class="layui-form-label">卡&nbsp;&nbsp;&nbsp;号</label>
						<div class="layui-input-block">
							<input type="text" id="card" autocomplete="off" placeholder="请输入卡号" class="layui-input" name="card">
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