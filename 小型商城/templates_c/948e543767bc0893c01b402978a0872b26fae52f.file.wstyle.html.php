<?php /* Smarty version Smarty-3.1.14, created on 2016-12-22 10:52:26
         compiled from "templates\wstyle.html" */ ?>
<?php /*%%SmartyHeaderCode:8047583ab7a18b9d85-18705637%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '948e543767bc0893c01b402978a0872b26fae52f' => 
    array (
      0 => 'templates\\wstyle.html',
      1 => 1482375144,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8047583ab7a18b9d85-18705637',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_583ab7a19dab83_65439528',
  'variables' => 
  array (
    'wgoods' => 0,
    'wgood' => 0,
    'namearray' => 0,
    'id' => 0,
    'maxpage' => 0,
    'maxarray' => 0,
    'index' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_583ab7a19dab83_65439528')) {function content_583ab7a19dab83_65439528($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style/css/common.css">
	<link rel="stylesheet" type="text/css" href="style/css/conn.css">
	<link rel="stylesheet" type="text/css" href="style/css/goods.css">
	<script type="text/javascript" src="style/js/jquery-1.8.0.min.js"></script>
	<script type="text/javascript" src="style/js/common.js"></script>
</head>
<body>
<?php echo $_smarty_tpl->getSubTemplate ("head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<hr class="wm_hr">
<div class="body_goods">
   <div class="woman_head">
      <div class="woman_head_l">女性 /</div>
      <div class="woman_head_r"><?php echo $_smarty_tpl->tpl_vars['wgoods']->value[0]['stylename'];?>
</div>
   </div>
   <div class="wm_mid">
   	 <ul>
   	 	<li>综合排序</li>
   	 	<li>销量</li>
   	 	<li>人气</li>
   	 	<li>信用</li>
   	 	<li>价格</li>
   	 	<li>新品</li>
   	 </ul>
   </div>
   <div class="wgoods_list">
   	    <ul>
          <?php  $_smarty_tpl->tpl_vars['wgood'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['wgood']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['wgoods']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['wgood']->key => $_smarty_tpl->tpl_vars['wgood']->value){
$_smarty_tpl->tpl_vars['wgood']->_loop = true;
?>
   	    	<li>
   	    		<div class="gw_img">
						<img src="<?php echo $_smarty_tpl->tpl_vars['wgood']->value['goods_img'];?>
">
					</div>
					<div class="gw_content">
						<a href="#"><?php echo $_smarty_tpl->tpl_vars['wgood']->value['goods_content'];?>
</a>
					</div>
					<div class="gw_price"><b>￥<?php echo $_smarty_tpl->tpl_vars['wgood']->value['goods_price'];?>
</b></div>
					 <?php if ($_smarty_tpl->tpl_vars['namearray']->value[1]==0){?>
          <div class="gw_celloct">
            <a href="login.php"  onClick="return confirm('亲，你还没有登录呦！');"><img src="style/img/collect.png"></a>
          </div>
          <div class="gw_cart">
            <a href="login.php"  onClick="return confirm('亲，你还没有登录呦！');" ><img src="style/img/cart.png"></a>
          </div>
          <?php }elseif($_smarty_tpl->tpl_vars['namearray']->value[1]==1){?>
            <div class="gw_celloct">
            <a href="#"onclick="javascript:location='wstyle_collectcl.php?id=<?php echo $_smarty_tpl->tpl_vars['wgood']->value['goods_id'];?>
'"><img src="<?php echo $_smarty_tpl->tpl_vars['wgood']->value['col'];?>
"></a>
          </div>
          <div class="gw_cart">
            <a href="#" onclick="javascript:location='wstyle_cartcl.php?id=<?php echo $_smarty_tpl->tpl_vars['wgood']->value['goods_id'];?>
'"><img src="style/img/cart.png"></a>
          </div>
          <?php }?>
   	    	</li>
            <?php } ?>
   	    </ul>
   </div>
   </div>
   <div class="fenye">
      <ul>
         <li><a href="wstyle.php?page=1&id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">第一页</a></li>
          <?php if ($_smarty_tpl->tpl_vars['maxpage']->value>3){?>
         <li><a href="wstyle.php?page=1&id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">1</a></li>
         <li><a href="wstyle.php?page=2&id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">2</a></li>
         <li><a href="wstyle.php?page=3&id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">3</a></li>
         <li><a href="#">....</a></li>
         <li><a href="wstyle.php?page=<?php echo $_smarty_tpl->tpl_vars['maxpage']->value;?>
&id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['maxpage']->value;?>
</a></li>
          <?php }else{ ?>
        <?php  $_smarty_tpl->tpl_vars['index'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['index']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['maxarray']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['index']->key => $_smarty_tpl->tpl_vars['index']->value){
$_smarty_tpl->tpl_vars['index']->_loop = true;
?>
         <li><a href="wstyle.php?page=<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
&id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['index']->value;?>
</a></li>
        <?php } ?>
       <?php }?>
         <li><a href="wstyle.php?page=<?php echo $_smarty_tpl->tpl_vars['maxpage']->value;?>
&id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">最后一页</a></li>
      </ul>
   </div>
   <?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</body>
</html><?php }} ?>