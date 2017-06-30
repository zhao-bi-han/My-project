<?php /* Smarty version Smarty-3.1.14, created on 2016-11-25 16:29:03
         compiled from "templates\adminuser_add.html" */ ?>
<?php /*%%SmartyHeaderCode:97035837f64f5c6e45-92449600%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2423fc4a9dd6e6d64b818df53cd15912fe224e60' => 
    array (
      0 => 'templates\\adminuser_add.html',
      1 => 1480062387,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '97035837f64f5c6e45-92449600',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5837f64f60ca44_37160183',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5837f64f60ca44_37160183')) {function content_5837f64f60ca44_37160183($_smarty_tpl) {?><!DOCTYPE html>
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
  <li><a href="http://www.baidu.com" target="_blank" class="website_icon">站点首页</a></li>
  <li><a href="#" class="admin_icon">DeathGhost</a></li>
  <li><a href="#" class="set_icon">账号设置</a></li>
  <li><a href="login.php" class="quit_icon">安全退出</a></li>
 </ul>
</header>

<!--aside nav-->
<?php echo $_smarty_tpl->getSubTemplate ("menu.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<form name="form" action="#" method="post">
<section class="rt_wrap content mCustomScrollbar">

    <section>
      <h2><strong style="color:grey;">添加管理员</strong></h2>
      <ul class="ulColumn2">
       <li>
        <span class="item_name" style="width:120px;">用户名：</span>
        <input type="text" class="textbox" placeholder="请输入用户名" name=""/>
       </li>
       <li>
         <span class="item_name" style="width:120px;">密码：</span>
        <input type="password" class="textbox" placeholder="请输入密码" name=""/>
       </li>
       <li>
        <span class="item_name" style="width:120px;">性别：</span>
        <label class="single_selection"><input type="radio" name="name"/>男</label>
        <label class="single_selection"><input type="radio" name="name"/>女</label>
       </li>
        <li>
        <span class="item_name" style="width:120px;">手机号：</span>
        <input type="text" class="textbox" placeholder="请输入手机号" name=""/>
       </li>
        <li>
        <span class="item_name" style="width:120px;">地区：</span>
        <select class="select" style="width: 140px">
         <option>选择地区</option>
        </select>
       </li>
       <li>
        <span class="item_name" style="width:120px;"></span>
        <input type="submit" class="link_btn" value="确认添加" />
       </li>
      </ul>
     </section>
</section>
</form>
</body>
</html>
<?php }} ?>