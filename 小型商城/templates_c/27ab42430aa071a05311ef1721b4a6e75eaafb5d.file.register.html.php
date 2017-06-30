<?php /* Smarty version Smarty-3.1.14, created on 2016-11-29 10:08:55
         compiled from "templates\register.html" */ ?>
<?php /*%%SmartyHeaderCode:20636583c2b58752cf0-82588386%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '27ab42430aa071a05311ef1721b4a6e75eaafb5d' => 
    array (
      0 => 'templates\\register.html',
      1 => 1480385330,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20636583c2b58752cf0-82588386',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_583c2b587c0742_43442391',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_583c2b587c0742_43442391')) {function content_583c2b587c0742_43442391($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><meta name="viewport" content="width=device-width,initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style/css/login.css">
  <link rel="stylesheet" type="text/css" href="style/css/common.css">
</head>
<body class="login_body">
<div class="login_logo">
    <img src="style/img/logo.png">
   </div>
   <div class="fhsy"><a href="index.php">返回首页 > </a></div>
  <div class="bg" >
    
    <div class="left" style="background-image: url(style/img/loginbg.png);" ></div>
    <div class="loginbg">
     <div class="login"><b>用户注册</b> </div>
     <form action="register.php" method="post">
      <div class="username" id="username">
        <img src="style/img/user.png">
        <input type="text" name="reg_username" placeholder="用户名">
      </div>
      <div class="password" id="password">
        <img src="style/img/pass.png">
        <input type="password" name="reg_password" placeholder="密码">
      </div>
      <div class="password" id="cpassword">
        <img src="style/img/cpass.png" style="width: 27px;height: auto;">
        <input type="password" name="reg_cpassword" placeholder="确认密码">
      </div>
      <div class="submit" id="submit">
        <input type="submit" name="reg_sub" value="立即注册">
      </div>
    </form>
    <div class="wjmm">
      已经注册 <b>，</b>
    </div>
    <div class="ljzc">
      <a href="login.php">立即登录 </a> </div>
    </div>
    
  </div>  
  <div class="login_bottom">
      <img src="style/img/loginbot.png">
    </div>
</body>
</html><?php }} ?>