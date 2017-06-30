<?php /* Smarty version Smarty-3.1.14, created on 2016-12-12 21:06:17
         compiled from "templates\aduser_update.html" */ ?>
<?php /*%%SmartyHeaderCode:3212858397c1a16f8f0-84252817%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'efc91ecbbc8dbba967e7bd2ae3786172ec66c548' => 
    array (
      0 => 'templates\\aduser_update.html',
      1 => 1481547773,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3212858397c1a16f8f0-84252817',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_58397c1a222022_96378761',
  'variables' => 
  array (
    'upaduser' => 0,
    'sf' => 0,
    'sfen' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58397c1a222022_96378761')) {function content_58397c1a222022_96378761($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<title>后台管理系统</title>
<meta name="author" content="DeathGhost" />
<link rel="stylesheet" type="text/css" href="style/css/style.css" />
<!--[if lt IE 9]>
<script src="js/html5.js"></script>
<![endif]-->
<script src="style/js/jquery.js"></script>
<script src="style/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script>
	(function($){
		$(window).load(function(){
			
			$("a[rel='load-content']").click(function(e){
				e.preventDefault();
				var url=$(this).attr("href");
				$.get(url,function(data){
					$(".content .mCSB_container").append(data); //load new content inside .mCSB_container
					//scroll-to appended content 
					$(".content").mCustomScrollbar("scrollTo","h2:last");
				});
			});
			
			$(".content").delegate("a[href='top']","click",function(e){
				e.preventDefault();
				$(".content").mCustomScrollbar("scrollTo",$(this).attr("href"));
			});
			
		});
	})(jQuery);
</script>
</head>
<body>
<!--header-->
<header>
 <h1><img src="style/images/logo.png"/></h1>
 <ul class="rt_nav">
  <li><a href="../index.php" target="_blank" class="website_icon">站点首页</a></li>
 <!--  <li><a href="#" class="admin_icon">DeathGhost</a></li>
  <li><a href="#" class="set_icon">账号设置</a></li> -->
  <li><a href="login.php" class="quit_icon">安全退出</a></li>
 </ul>
</header>

<!--aside nav-->
<?php echo $_smarty_tpl->getSubTemplate ("menu.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<form name="form" action="#" method="post">
<section class="rt_wrap content mCustomScrollbar">

    <section>
      <h2><strong style="color:grey;">修改管理员信息</strong></h2>
      <ul class="ulColumn2">
       <li>
        <span class="item_name" style="width:120px;">用户名：</span>
        <input type="text" class="textbox" placeholder="请输入用户名" name="aduser_name" value="<?php echo $_smarty_tpl->tpl_vars['upaduser']->value[0]['aduser_name'];?>
" />
       </li>
       <li>
         <span class="item_name" style="width:120px;">密码：</span>
        <input type="password" class="textbox" placeholder="请输入密码" name="aduser_password" value="<?php echo $_smarty_tpl->tpl_vars['upaduser']->value[0]['aduser_password'];?>
" />
       </li>
       <li>
        <span class="item_name" style="width:120px;">性别：</span>
        <label class="single_selection"><input type="radio" name="name" value="0" <?php if ($_smarty_tpl->tpl_vars['upaduser']->value[0]['aduser_sex']==0){?> checked<?php }?>/>男</label>
        <label class="single_selection"><input type="radio" name="name" value="1" <?php if ($_smarty_tpl->tpl_vars['upaduser']->value[0]['aduser_sex']==1){?> checked<?php }?>/>女</label>
       </li>
        <li>
        <span class="item_name" style="width:120px;">手机号：</span>
        <input type="text" class="textbox" placeholder="请输入手机号" name="aduser_phone" value="<?php echo $_smarty_tpl->tpl_vars['upaduser']->value[0]['aduser_phone'];?>
" />
       </li>
        <li>
        <span class="item_name" style="width:120px;">地区：</span>
        <select class="select" style="width: 140px" name="aduser_area">
         <?php  $_smarty_tpl->tpl_vars['sfen'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sfen']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sf']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sfen']->key => $_smarty_tpl->tpl_vars['sfen']->value){
$_smarty_tpl->tpl_vars['sfen']->_loop = true;
?>
         <option <?php if ($_smarty_tpl->tpl_vars['upaduser']->value[0]['aduser_area']==$_smarty_tpl->tpl_vars['sfen']->value['area_name']){?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['sfen']->value['area_name'];?>
</option>
         <?php } ?>
        </select>
       </li>
       <li>
        <span class="item_name" style="width:120px;"></span>
        <input type="submit" class="link_btn" value="确认修改" name="sub" />
       </li>
      </ul>
     </section>
</section>
</form>
</body>
</html>
<?php }} ?>