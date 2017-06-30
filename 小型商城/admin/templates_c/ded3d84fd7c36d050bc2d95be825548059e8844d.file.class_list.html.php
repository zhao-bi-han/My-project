<?php /* Smarty version Smarty-3.1.14, created on 2016-12-12 18:10:39
         compiled from "templates\class_list.html" */ ?>
<?php /*%%SmartyHeaderCode:294015836c8006f8d45-93651080%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ded3d84fd7c36d050bc2d95be825548059e8844d' => 
    array (
      0 => 'templates\\class_list.html',
      1 => 1481537382,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '294015836c8006f8d45-93651080',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5836c8006fa2b7_02997333',
  'variables' => 
  array (
    'classlist' => 0,
    'class' => 0,
    'maxpage' => 0,
    'maxarray' => 0,
    'index' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5836c8006fa2b7_02997333')) {function content_5836c8006fa2b7_02997333($_smarty_tpl) {?><!DOCTYPE html>
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

<section class="rt_wrap content mCustomScrollbar">

  <section>
    <h2><strong style="color:grey;">商品分类</strong></h2>
    <table class="table" >
     <tr>
      <th>编号</th>
      <th>名称</th>
      <th>性别</th>
      <th style="width: 120px">操作</th>
    </tr>
    <?php  $_smarty_tpl->tpl_vars['class'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['class']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['classlist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['class']->key => $_smarty_tpl->tpl_vars['class']->value){
$_smarty_tpl->tpl_vars['class']->_loop = true;
?>
    <tr>
      <td><?php echo $_smarty_tpl->tpl_vars['class']->value['class_no'];?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['class']->value['class_name'];?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['class']->value['class_sex'];?>
</td>
      <td>
        <a href="class_update.php?id=<?php echo $_smarty_tpl->tpl_vars['class']->value['class_id'];?>
">修改</a>
        <a href="#" onclick="javascript:if(confirm('确定删除？')) location='class_del.php?id=<?php echo $_smarty_tpl->tpl_vars['class']->value['class_id'];?>
'">删除</a>
      </td>
    </tr>
    <?php }
if (!$_smarty_tpl->tpl_vars['class']->_loop) {
?>
   <tr>
    <td colspan="4">暂无信息</td>
 </tr>
 <?php } ?>
</table>
<aside class="paging" style="margin:  8px 300px;">
 <a href="class_list.php?page=1">第一页</a>
 <?php if ($_smarty_tpl->tpl_vars['maxpage']->value>4){?>
 <a href="class_list.php?page=1">1</a>
 <a href="class_list.php?page=2">2</a>
 <a href="class_list.php?page=3">3</a>
 <a>…</a>
 <a href="class_list.php?page=<?php echo $_smarty_tpl->tpl_vars['maxpage']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['maxpage']->value;?>
</a>
 <?php }else{ ?>
 <?php  $_smarty_tpl->tpl_vars['index'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['index']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['maxarray']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['index']->key => $_smarty_tpl->tpl_vars['index']->value){
$_smarty_tpl->tpl_vars['index']->_loop = true;
?>
 <a href="class_list.php?page=<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['index']->value;?>
</a>
   <?php } ?>
   <?php }?>
   <a href="class_list.php?page=<?php echo $_smarty_tpl->tpl_vars['maxpage']->value;?>
">最后一页</a>
 </aside>

</section>
</body>
</html>
<?php }} ?>