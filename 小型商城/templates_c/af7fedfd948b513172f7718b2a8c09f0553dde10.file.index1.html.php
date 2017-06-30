<?php /* Smarty version Smarty-3.1.14, created on 2016-12-05 22:44:50
         compiled from "templates\index1.html" */ ?>
<?php /*%%SmartyHeaderCode:112255845649d24cdc5-62917127%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'af7fedfd948b513172f7718b2a8c09f0553dde10' => 
    array (
      0 => 'templates\\index1.html',
      1 => 1480949086,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '112255845649d24cdc5-62917127',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5845649d3aba08_28904840',
  'variables' => 
  array (
    'wgoods' => 0,
    'wgood' => 0,
    'namearray' => 0,
    'mgoods' => 0,
    'mgood' => 0,
    'ogoods' => 0,
    'ogood' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5845649d3aba08_28904840')) {function content_5845649d3aba08_28904840($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
	<title>帽子小铺</title>
	<link rel="stylesheet" type="text/css" href="style/css/conn.css">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style/css/common.css">
	<script type="text/javascript" src="style/js/jquery-1.8.0.min.js"></script>
	<script type="text/javascript" src="style/js/common.js"></script>
</head>
<body>
	<?php echo $_smarty_tpl->getSubTemplate ("head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<div class="middle">
		<div class="mid" style="width: 100%;height: 400px; ">
			<div id="img_1" class="img">
				<div class="img1_cont">
					<b>韩国版可爱尖尖顶奶嘴针织帽卷边粗线麻花帽子女秋冬天女巫毛线帽</b>
				</div>
				<div class="img1_title">
					毛线帽
				</div>
				<div class="img1_img" >
					<img src="style/img/index_hat1.png">
				</div>
			</div>
			<div id="img_2" class="img" >
				<div class="img2_cont">
					<b>YTK实拍/高质量秋冬学生帽子小清新画家帽女南瓜八角蓓蕾帽子</b>
				</div>
				<div class="img2_title">
					贝雷帽
				</div>
				<div class="img2_img">
					<img src="style/img/index_hat2.jpg">
				</div>
			</div>
			<div id="img_3" class="img">
				<div class="img3_cont">
					<b>2016新款韩版可折叠休闲米奇字母盆帽学院风黑色显瘦渔夫帽子</b>

				</div>
				<div class="img3_title">
					渔夫帽

				</div>
				<div class="img3_img">
					<img src="style/img/index_hat3.jpg">
				</div>
			</div>
		</div>
		<div class="quan">
			<ul >
				<li class="lii"></li>
				<li class="lii"></li>
				<li class="lii"></li>
			</ul>
		</div>
	</div>
	<div class="goods" >
		<div class="goods_nav1">
			<div class="triangle-up1"><span class="f1"><b>F1</b></span></div>
			<div class="triangle-up"><span class="f1_woman1"><b> 女</b></span><span class="f1_woman2"><b>士</b></span></div>
			<div class="triangle-up2"></div>
		</div>
		<hr class="hr_1">
		<div class="goods_woman">
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
						<a href="login.php"  onClick="return confirm('亲，你还没有登录呦！');"><img src="style/img/collect.png" ></a>
					</div>
					<div class="gw_cart">
						<a href="login.php"  onClick="return confirm('亲，你还没有登录呦！');"><img src="style/img/cart.png"></a>
					</div>
					<?php }elseif($_smarty_tpl->tpl_vars['namearray']->value[1]==1){?>				
					<div class="gw_celloct">
						<a href="#" onclick="javascript:location='incollectcl.php?id=<?php echo $_smarty_tpl->tpl_vars['wgood']->value['goods_id'];?>
'" >
						<img src="<?php echo $_smarty_tpl->tpl_vars['wgood']->value['col'];?>
">
                        <!--  <img src="style/img/collecth.png"> -->
						</a>
					</div>
					<div class="gw_cart">
						<a href="#"onclick="javascript:location='incartcl.php?id=<?php echo $_smarty_tpl->tpl_vars['wgood']->value['goods_id'];?>
'"><img src="style/img/cart.png"></a>
					</div>
					<?php }?>
				</li>
				
				<?php } ?>
			</ul>
		</div>
		<div class="goods_nav2">
			<div class="triangle-up1"><span class="f1"><b>F2</b></span></div>
			<div class="triangle-up"><span class="f1_woman1"><b> 男</b></span><span class="f1_woman2"><b>士</b></span></div>
			<div class="triangle-up2"></div>
		</div>
		<hr class="hr_2">
		<div class="goods_man">
			<ul>
			<?php  $_smarty_tpl->tpl_vars['mgood'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['mgood']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mgoods']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['mgood']->key => $_smarty_tpl->tpl_vars['mgood']->value){
$_smarty_tpl->tpl_vars['mgood']->_loop = true;
?>
				<li>
					<div class="gm_img">
						<img src="<?php echo $_smarty_tpl->tpl_vars['mgood']->value['goods_img'];?>
">
					</div>
					<div class="gm_content">
						<a href="#"><?php echo $_smarty_tpl->tpl_vars['mgood']->value['goods_content'];?>
</a>
					</div>
					<div class="gm_price"><b>￥<?php echo $_smarty_tpl->tpl_vars['mgood']->value['goods_price'];?>
</b></div>
					<?php if ($_smarty_tpl->tpl_vars['namearray']->value[1]==0){?>
					<div class="gm_celloct">
						<a href="login.php" onClick="return confirm('亲，你还没有登录呦！');" ><img src="style/img/collect.png"></a>
					</div>
					<div class="gm_cart">
						<a href="login.php"  onClick="return confirm('亲，你还没有登录呦！');"><img src="style/img/cart.png"></a>
					</div>
					<?php }elseif($_smarty_tpl->tpl_vars['namearray']->value[1]==1){?>
					<div class="gm_celloct">
						<a href="#"
onclick="javascript:location='incollectcl.php?id=<?php echo $_smarty_tpl->tpl_vars['mgood']->value['goods_id'];?>
'" ><img src="<?php echo $_smarty_tpl->tpl_vars['mgood']->value['col'];?>
"></a>
					</div>
					<div class="gm_cart">
						<a href="#"onclick="javascript:location='incartcl.php?id=<?php echo $_smarty_tpl->tpl_vars['mgood']->value['goods_id'];?>
'"><img src="style/img/cart.png"></a>
					</div>
					<?php }?>
				</li>
				<?php } ?>
			</ul>
		</div>

		<div class="goods_nav3">
			<div class="triangle-up1"><span class="f1"><b>F3</b></span></div>
			<div class="triangle-up"><span class="f1_woman1"><b> 其</b></span><span class="f1_woman2"><b>他</b></span></div>
			<div class="triangle-up2"></div>
		</div>
		<hr class="hr_3">
		<div class="goods_other">
			<ul>
			<?php  $_smarty_tpl->tpl_vars['ogood'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ogood']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ogoods']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ogood']->key => $_smarty_tpl->tpl_vars['ogood']->value){
$_smarty_tpl->tpl_vars['ogood']->_loop = true;
?>
				<li>
					<div class="go_img">
						<img src="<?php echo $_smarty_tpl->tpl_vars['ogood']->value['goods_img'];?>
">
					</div>
					<div class="go_content">
						<a href="#"><?php echo $_smarty_tpl->tpl_vars['ogood']->value['goods_content'];?>
</a>
					</div>
					<div class="go_price"><b>￥<?php echo $_smarty_tpl->tpl_vars['ogood']->value['goods_price'];?>
</b></div>
					<?php if ($_smarty_tpl->tpl_vars['namearray']->value[1]==0){?>
					<div class="go_celloct">
						<a href="login.php"  onClick="return confirm('亲，你还没有登录呦！');"><img src="style/img/collect.png"></a>
					</div>
					<div class="go_cart">
						<a href="login.php"  onClick="return confirm('亲，你还没有登录呦！');"><img src="style/img/cart.png"></a>
					</div>
					<?php }elseif($_smarty_tpl->tpl_vars['namearray']->value[1]==1){?>
					<div class="go_celloct">
						<a href="#" onclick="javascript:location='incollectcl.php?id=<?php echo $_smarty_tpl->tpl_vars['ogood']->value['goods_id'];?>
'"><img src="<?php echo $_smarty_tpl->tpl_vars['ogood']->value['col'];?>
"></a>
					</div>
					<div class="go_cart">
						<a href="#"onclick="javascript:location='incartcl.php?id=<?php echo $_smarty_tpl->tpl_vars['ogood']->value['goods_id'];?>
'"><img src="style/img/cart.png"></a>
					</div>
					<?php }?>
				</li>
				<?php } ?>
			</ul>
		</div>
	</div>
	<div style="clear: both;"></div>
	<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
 

</body>
</html><?php }} ?>