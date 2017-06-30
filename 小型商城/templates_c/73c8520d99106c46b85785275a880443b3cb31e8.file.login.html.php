<?php /* Smarty version Smarty-3.1.14, created on 2016-12-01 09:36:49
         compiled from "templates\login.html" */ ?>
<?php /*%%SmartyHeaderCode:56515838e63fa56393-89067232%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '73c8520d99106c46b85785275a880443b3cb31e8' => 
    array (
      0 => 'templates\\login.html',
      1 => 1480554688,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '56515838e63fa56393-89067232',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5838e63fb45775_49218146',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5838e63fb45775_49218146')) {function content_5838e63fb45775_49218146($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style/css/login.css">
	<link rel="stylesheet" type="text/css" href="style/css/common.css">
	<script type="text/javascript" src="style/js/jquery-1.8.0.min.js"></script>
	<script type="text/javascript">
		// $(document).ready(function(){
  //             $(".submit").click(function(){
  //              $.ajax({url:"login.php",success:function(result){
  //       $(".js").html(result);
  //   }});
  //             });
		// });
	</script>
</head>
<body class="login_body">
	<div class="login_logo">
		<img src="style/img/logo.png">
	</div>
	<div class="fhsy"><a href="index.php">返回首页 > </a></div>
	<div class="bg" >
		<!-- <div class="js" style="border: 1px solid red;width: 100px;height: 100px"></div> -->
		<div class="left" style="background-image: url(style/img/loginbg.png);" ></div>
		<div class="loginbg">
			<div class="login"><b>密码登录</b> </div>
			<form action="login.php" method="post">
				<div class="username">
					<img src="style/img/user.png">
					<input type="text" name="log_username" placeholder="用户名" >
				</div>
				<div class="password">
					<img src="style/img/pass.png">
					<input type="password" name="log_password" placeholder="密码"  >
				</div>
				<div class="submit">
					<input type="submit" name="log_sub" value="立即登录">
				</div>
			</form>
			<div class="wjmm">
				<a href="#">忘记密码</a>
			</div>
			<div class="ljzc">
				<a href="register.php">立即注册 </a> </div>
			</div>

		</div>	
		<div class="login_bottom">
			<img src="style/img/loginbot.png">
		</div>
	</body>
	</html><?php }} ?>