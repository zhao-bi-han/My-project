<?php /* Smarty version Smarty-3.1.14, created on 2016-12-14 14:56:41
         compiled from "templates\login.html" */ ?>
<?php /*%%SmartyHeaderCode:211735832edfc2f7530-77779222%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '73c8520d99106c46b85785275a880443b3cb31e8' => 
    array (
      0 => 'templates\\login.html',
      1 => 1481629300,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '211735832edfc2f7530-77779222',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5832edfc322f44_07160577',
  'variables' => 
  array (
    'code' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5832edfc322f44_07160577')) {function content_5832edfc322f44_07160577($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
	<title>后台管理系统</title>
	<link rel="stylesheet" type="text/css" href="style/css/login.css">
</head>
<body>
<!--  <div class="fhh" style="position: absolute;left: 82%;top:20px;font-size: 12px;"><a href="index.php" style="color: #dddddd;text-decoration: none;">返回> </a></div> -->
   <form action="" method="post">
      <div class="bg">
         <div class="login"><b>后台管理系统</b></div>
         <div class="name">
            <img src="style/images/user.png">
            <input type="text" name="name" placeholder="用户名">
         </div>
         <div class="pass">
          <img src="style/images/pass.png">
          <input type="password" name="pass" placeholder="密码">
       </div>
       <div class="yzl">
         <img src="style/images/yz.png">
         <input type="text" name="yz" placeholder="验证码">
      </div>
      <div class="yzr">
        <input type="text" name="yzc" value="<?php echo $_smarty_tpl->tpl_vars['code']->value;?>
" readonly="readonly" style="width: 73px;height: 27px;border: none;background:none;text-align: center;font-size: 22px ;margin-top: 3px" >  
     </div>
     <div class="sub">
        <input type="submit" name="sub" value="登录">
     </div>
  </div>
</form>
</body>
</html><?php }} ?>