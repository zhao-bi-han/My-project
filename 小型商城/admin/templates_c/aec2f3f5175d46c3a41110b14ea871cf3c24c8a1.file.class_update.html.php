<?php /* Smarty version Smarty-3.1.14, created on 2016-12-12 21:09:32
         compiled from "templates\class_update.html" */ ?>
<?php /*%%SmartyHeaderCode:2950583961032f7cf1-88835956%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aec2f3f5175d46c3a41110b14ea871cf3c24c8a1' => 
    array (
      0 => 'templates\\class_update.html',
      1 => 1481548168,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2950583961032f7cf1-88835956',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_58396103375213_55282679',
  'variables' => 
  array (
    'upclass' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58396103375213_55282679')) {function content_58396103375213_55282679($_smarty_tpl) {?><!DOCTYPE html>
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

<form name="form" action="#" method="post">
  <section class="rt_wrap content mCustomScrollbar">

    <section>
      <h2><strong style="color:grey;">修改分类信息</strong></h2>
      <ul class="ulColumn2">
      <li>
        <span class="item_name" style="width:120px;">编号：</span>
        <input type="text" class="textbox" placeholder="请输入编号" name="class_no" value="<?php echo $_smarty_tpl->tpl_vars['upclass']->value[0]['class_no'];?>
" />
        <span class="item_name" style="width:120px;">名称：</span>
       <input type="text" class="textbox" placeholder="请输入名称" name="class_name" value="<?php echo $_smarty_tpl->tpl_vars['upclass']->value[0]['class_name'];?>
"/>
       <span class="item_name" style="width:120px;">性别：</span>
      <select class="select" style="width: 140px" name="class_sex">
        <option value="0" <?php if ($_smarty_tpl->tpl_vars['upclass']->value[0]['class_sex']==0){?>selected<?php }?>>男性</option>
         <option value="1" <?php if ($_smarty_tpl->tpl_vars['upclass']->value[0]['class_sex']==1){?>selected<?php }?>>女性</option>
     </select>
      </li>
   <li>
    <span class="item_name" style="width:120px;"></span>
    <input type="submit" class="link_btn" value="确认修改" style=" margin-top: 21px" name="sub" />
  </li>
</ul>
</section>
</section>
</form>
</body>
</html>
<?php }} ?>