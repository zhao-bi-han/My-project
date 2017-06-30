<?php /* Smarty version Smarty-3.1.14, created on 2016-12-12 20:16:18
         compiled from "templates\goods_list1.html" */ ?>
<?php /*%%SmartyHeaderCode:6780584e95122f66f9-93068920%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '758dc5526a5b3e04bb79647b192d7007e7d59f90' => 
    array (
      0 => 'templates\\goods_list1.html',
      1 => 1481537400,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6780584e95122f66f9-93068920',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'goodslist' => 0,
    'goods' => 0,
    'maxpage' => 0,
    'maxarray' => 0,
    'index' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_584e95123e9bc6_08068045',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_584e95123e9bc6_08068045')) {function content_584e95123e9bc6_08068045($_smarty_tpl) {?><!DOCTYPE html>
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
<style type="text/css">
  .search{
    position: absolute;
    border: 1px solid #abadb3;
    width: 200px;
    height: 33px;
    left: 65%;
    top: 18px;
  }
  .input_l{
    height: 27px;
    border: none;
    background:none;
    padding-left: 5px;
  }
  .input_r{
    position: absolute;
        height: 33px;
    left: 78%;
    width: 44px;
    border: none;
   background: none;
    background-image: url(style/images/search.png);
    background-repeat: no-repeat;
    background-position: center;
  }
</style>
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
      <h2><strong style="color:grey;">商品列表</strong></h2>
       <div class="search">
       <form action="ad_search.php" method="post">
       <input type="text" name="search" class="input_l" placeholder="Search">
       <input type="submit" name="sub" class="input_r" value="">
       </form>
       </div>
       <table class="table" style="width: 898px" >
       <tr>
        <th>商品名称</th>
        <th>商品信息</th>
        <th>商品分类</th>
        <th>商品风格</th>
        <th>性别</th>
        <th>价格</th>
        <th style="width: 120px">操作</th>
       </tr>
       <?php  $_smarty_tpl->tpl_vars['goods'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['goods']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['goodslist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['goods']->key => $_smarty_tpl->tpl_vars['goods']->value){
$_smarty_tpl->tpl_vars['goods']->_loop = true;
?>
       <tr>       
        <td><?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_name'];?>
</td>
        <td style="width:265px;"><div class="cut_title ellipsis"><?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_content'];?>
</div></td>
        <td><?php echo $_smarty_tpl->tpl_vars['goods']->value['classname'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['goods']->value['stylename'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_sex'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_price'];?>
￥</td>
        <td>
        <a href="goods_update.php?id=<?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_id'];?>
">修改</a>
         <a href="#" onclick="javescript:if(confirm('确定删除？')) location='goods_del.php?id=<?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_id'];?>
'">删除</a>
        </td>
       </tr>
       <?php }
if (!$_smarty_tpl->tpl_vars['goods']->_loop) {
?>
          <tr>
            <td colspan="5">暂无商品信息</td>
          </tr>
    
    <?php } ?>
    
      </table>
     <aside class="paging" style="margin: 7px 197px;">
       <a href="goods_list.php?page=1">第一页</a>
       <?php if ($_smarty_tpl->tpl_vars['maxpage']->value>4){?>
       <a href="goods_list.php?page=1">1</a>
       <a href="goods_list.php?page=2">2</a>
       <a href="goods_list.php?page=3">3</a>
       <a>…</a>
       <a href="goods_list.php?page=<?php echo $_smarty_tpl->tpl_vars['maxpage']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['maxpage']->value;?>
</a>
       <?php }else{ ?>
        <?php  $_smarty_tpl->tpl_vars['index'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['index']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['maxarray']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['index']->key => $_smarty_tpl->tpl_vars['index']->value){
$_smarty_tpl->tpl_vars['index']->_loop = true;
?>
         <a href="goods_list.php?page=<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['index']->value;?>
</a>
        <?php } ?>
       <?php }?>
       <a href="goods_list.php?page=<?php echo $_smarty_tpl->tpl_vars['maxpage']->value;?>
">最后一页</a>
      </aside>

</section>
</body>
</html>
<?php }} ?>