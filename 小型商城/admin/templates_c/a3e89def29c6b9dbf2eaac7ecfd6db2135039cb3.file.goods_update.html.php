<?php /* Smarty version Smarty-3.1.14, created on 2016-12-12 21:08:43
         compiled from "templates\goods_update.html" */ ?>
<?php /*%%SmartyHeaderCode:279985839444f068a73-75007813%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a3e89def29c6b9dbf2eaac7ecfd6db2135039cb3' => 
    array (
      0 => 'templates\\goods_update.html',
      1 => 1481547781,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '279985839444f068a73-75007813',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5839444f1a0172_82476194',
  'variables' => 
  array (
    'upgoods' => 0,
    'mclass' => 0,
    'mcla' => 0,
    'wclass' => 0,
    'wcla' => 0,
    'mstyle' => 0,
    'msty' => 0,
    'wstyle' => 0,
    'wsty' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5839444f1a0172_82476194')) {function content_5839444f1a0172_82476194($_smarty_tpl) {?><!DOCTYPE html>
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
<script type="text/javascript" src="style/js/jquery-1.8.0.min.js"></script>
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
//性别不同下拉款显示不同的信息
$(function(){
 $("#sex_nan").click(function(){
   $("#se1").show();$("#se3").show();
   $("#se2").hide();$("#se4").hide();
 });
 $("#sex_nv").click(function(){
   $("#se2").show();$("#se4").show();
   $("#se1").hide();$("#se3").hide();
 });
});

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
      <h2><strong style="color:grey;">修改商品信息</strong></h2>
      <ul class="ulColumn2">
       <li>
        <span class="item_name" style="width:120px;">名称：</span>
        <input type="text" class="textbox" placeholder="请输入名称" name="goods_name" value="<?php echo $_smarty_tpl->tpl_vars['upgoods']->value[0]['goods_name'];?>
" />
       
        <span class="item_name" style="width:120px;">价格：</span>
        <input type="text" class="textbox" placeholder="请输入价格" name="goods_price" value="<?php echo $_smarty_tpl->tpl_vars['upgoods']->value[0]['goods_price'];?>
" />
      </li>
      <li>
        <span class="item_name" style="width:120px;">性别：</span>
        <label class="single_selection"><input type="radio" name="sex" value="0" id="sex_nan" <?php if ($_smarty_tpl->tpl_vars['upgoods']->value[0]['goods_sex']==0){?> checked<?php }?>/>男</label>
        <label class="single_selection"><input type="radio" name="sex" value="1" id="sex_nv" <?php if ($_smarty_tpl->tpl_vars['upgoods']->value[0]['goods_sex']==1){?> checked<?php }?>/>女</label>
      </li>

      <li>
        <span class="item_name" style="width:120px;">商品分类：</span>
        <!-- 男性分类 -->
        <select class="select" id="se1" style="width: 140px;" name="mgoods_class">
         <?php  $_smarty_tpl->tpl_vars['mcla'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['mcla']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mclass']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['mcla']->key => $_smarty_tpl->tpl_vars['mcla']->value){
$_smarty_tpl->tpl_vars['mcla']->_loop = true;
?>
         <option value="<?php echo $_smarty_tpl->tpl_vars['mcla']->value['class_no'];?>
"<?php if ($_smarty_tpl->tpl_vars['upgoods']->value[0]['class_no']==$_smarty_tpl->tpl_vars['mcla']->value['class_no']){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['mcla']->value['class_name'];?>
</option>
         <?php } ?>
       </select>
       <!-- 女性分类 -->
       <select class="select" id="se2" style="width: 140px;display:none;" name="wgoods_class">
         <?php  $_smarty_tpl->tpl_vars['wcla'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['wcla']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['wclass']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['wcla']->key => $_smarty_tpl->tpl_vars['wcla']->value){
$_smarty_tpl->tpl_vars['wcla']->_loop = true;
?>
         <option value="<?php echo $_smarty_tpl->tpl_vars['wcla']->value['class_no'];?>
" <?php if ($_smarty_tpl->tpl_vars['upgoods']->value[0]['class_no']==$_smarty_tpl->tpl_vars['wcla']->value['class_no']){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['wcla']->value['class_name'];?>
</option>
         <?php } ?>
       </select>
       <span class="item_name" style="width:120px;">商品风格：</span>
       <!-- 男性风格 -->
       <select class="select" id="se3" style="width: 140px;" name="mgoods_style">
         <?php  $_smarty_tpl->tpl_vars['msty'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['msty']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mstyle']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['msty']->key => $_smarty_tpl->tpl_vars['msty']->value){
$_smarty_tpl->tpl_vars['msty']->_loop = true;
?>
         <option value="<?php echo $_smarty_tpl->tpl_vars['msty']->value['style_no'];?>
" <?php if ($_smarty_tpl->tpl_vars['upgoods']->value[0]['style_no']==$_smarty_tpl->tpl_vars['msty']->value['style_no']){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['msty']->value['style_name'];?>
</option>
         <?php } ?>
       </select>
       <!-- 女性风格 -->
       <select class="select" id="se4" style="width: 140px;display:none" name="wgoods_style">
         <?php  $_smarty_tpl->tpl_vars['wsty'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['wsty']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['wstyle']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['wsty']->key => $_smarty_tpl->tpl_vars['wsty']->value){
$_smarty_tpl->tpl_vars['wsty']->_loop = true;
?>
         <option value="<?php echo $_smarty_tpl->tpl_vars['wsty']->value['style_no'];?>
" <?php if ($_smarty_tpl->tpl_vars['upgoods']->value[0]['style_no']==$_smarty_tpl->tpl_vars['wsty']->value['style_no']){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['wsty']->value['style_name'];?>
</option>
         <?php } ?>
       </select>
     </li>

     <li>
      <span class="item_name" style="width:120px;">商品信息：</span>
      <textarea placeholder="商品信息" class="textarea" style="width:500px;height:100px;" name="goods_content" ><?php echo $_smarty_tpl->tpl_vars['upgoods']->value[0]['goods_content'];?>
</textarea>
    </li>
    <li>
      <span class="item_name" style="width:120px;">上传图片：</span>
      <label class="uploadImg">
        <input type="file" name="goods_img" value="<?php echo $_smarty_tpl->tpl_vars['upgoods']->value[0]['goods_img'];?>
" />
        <span>上传图片</span>
      </label>
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