<?php /* Smarty version Smarty-3.1.14, created on 2016-12-12 18:10:43
         compiled from "templates\class_add.html" */ ?>
<?php /*%%SmartyHeaderCode:141565836cb5698d322-51925658%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5a2dde6eeaefd65a04821e15ef4f22fdfe565577' => 
    array (
      0 => 'templates\\class_add.html',
      1 => 1481537377,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '141565836cb5698d322-51925658',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5836cb5698ec15_48292191',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5836cb5698ec15_48292191')) {function content_5836cb5698ec15_48292191($_smarty_tpl) {?><!DOCTYPE html>
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
    <!-- <li><a href="#" class="admin_icon">DeathGhost</a></li>
    <li><a href="#" class="set_icon">账号设置</a></li> -->
    <li><a href="login.php" class="quit_icon">安全退出</a></li>
  </ul>
</header>

<!--aside nav-->
<?php echo $_smarty_tpl->getSubTemplate ("menu.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<form name="form" action="class_addsave.php" method="post">
  <section class="rt_wrap content mCustomScrollbar">

    <section>
      <h2><strong style="color:grey;">添加分类</strong></h2>
      <ul class="ulColumn2">
      <li>
        <span class="item_name" style="width:120px;">编号：</span>
        <input type="text" class="textbox" placeholder="请输入编号" name="class_no"/>
        <span class="item_name" style="width:120px;">名称：</span>
       <input type="text" class="textbox" placeholder="请输入名称" name="class_name"/>
       <span class="item_name" style="width:120px;">性别：</span>
      <select class="select" style="width: 140px" name="class_sex">
       <option>选择性别</option>
        <option value="0">男性</option>
         <option value="1">女性</option>
     </select>

      </li>
      
   <li>
    <span class="item_name" style="width:120px;"></span>
    <input type="submit" class="link_btn" value="确认添加" style=" margin-top: 21px" />
  </li>
</ul>
</section>
</section>
</form>
</body>
</html>
<?php }} ?>