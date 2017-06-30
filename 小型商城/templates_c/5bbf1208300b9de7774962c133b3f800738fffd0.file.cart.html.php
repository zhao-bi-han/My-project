<?php /* Smarty version Smarty-3.1.14, created on 2017-01-29 16:09:27
         compiled from "templates\cart.html" */ ?>
<?php /*%%SmartyHeaderCode:45245838ecbb873617-80579563%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5bbf1208300b9de7774962c133b3f800738fffd0' => 
    array (
      0 => 'templates\\cart.html',
      1 => 1485677363,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '45245838ecbb873617-80579563',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5838ecbb8c5599_15622524',
  'variables' => 
  array (
    'cartgood' => 0,
    'car' => 0,
    'maxpage' => 0,
    'maxarray' => 0,
    'index' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5838ecbb8c5599_15622524')) {function content_5838ecbb8c5599_15622524($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style/css/common.css">
	<link rel="stylesheet" type="text/css" href="style/css/conn.css">
	<!-- <link rel="stylesheet" type="text/css" href="style/css/goods.css"> -->
	<script type="text/javascript" src="style/js/jquery-1.8.0.min.js"></script>
	<script type="text/javascript" src="style/js/common.js"></script>
	
	<script type="text/javascript">
		window.onload=function(){
			var put1=document.getElementById('quan');
			var odiv=document.getElementById('dan');
            var put2=odiv.getElementsByTagName('input'); 
            put1.onclick=function(){
            	if (put1.checked==true) {
            		for(var i=0;i<put2.length;i++){
                         put2[i].checked=true;
            		}
            	
            	}else if(put1.checked==false){
                 for(var i=0;i<put2.length;i++){
                         put2[i].checked=false;
            		}
            	}
            }
		}
	</script>
</head>
<body >
	<?php echo $_smarty_tpl->getSubTemplate ("head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<hr class="wm_hr" id="wm_hr">
	<div style="height: 2700px;" class="body_goods">
		<div class="woman_head">
			<div class="woman_head_l" id="cellect">我的购物车</div>
			<div class="woman_head_r" id="woman_head_cart">全部宝贝</div>
		</div>
		<div class="cart_nav">
			<div class="cart_qx">
				<input type="checkbox" name="" id="quan">
				<span>全选</span> 
			</div>
			<div class="cart_sp">商品</div>
			<!-- <div class="cart_spxx"></div> -->
			<div class="cart_dj">单价</div>
			<div class="cart_sl">数量</div>
			<div class="cart_je">金额</div>
			<div class="cart_cz">操作</div>
		</div>
		<div class="wgoods_list" id="cart_list" >
			<ul id="dan">
			<?php  $_smarty_tpl->tpl_vars['car'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['car']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cartgood']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['car']->key => $_smarty_tpl->tpl_vars['car']->value){
$_smarty_tpl->tpl_vars['car']->_loop = true;
?>
				<li>
					<div id="cart_qx">
						<input type="checkbox" name="dan">
					</div>
					<div id="cart_sp">
						<div class="cart_sp_img">
							<img src="<?php echo $_smarty_tpl->tpl_vars['car']->value['cart_img'];?>
">
						</div>
						<div class="cart_sp_content">
							<?php echo $_smarty_tpl->tpl_vars['car']->value['cart_content'];?>

						</div>
					</div>
					<div id="cart_dj"><b> <?php echo $_smarty_tpl->tpl_vars['car']->value['cart_price'];?>
 </b></div>
					<div id="cart_sl">1</div>
					<div id="cart_je"><b><?php echo $_smarty_tpl->tpl_vars['car']->value['cart_price'];?>
 </b></div>
					<div id="cart_cz"><a href="#" onclick="javescript:if(confirm('确定删除？')) location='cartdel.php?id=<?php echo $_smarty_tpl->tpl_vars['car']->value['cart_id'];?>
'">删除</a></div>
				</li>
			<?php } ?>	

			</ul>
			<div class="jiesuan">
				<input type="submit" name="cart_sub" value="结算">
			</div>
		</div>

	</div>	
	 <div class="fenye">
      <ul>
         <li><a href="cart.php?page=1">第一页</a></li>
          <?php if ($_smarty_tpl->tpl_vars['maxpage']->value>4){?>
         <li><a href="cart.php?page=1">1</a></li>
         <li><a href="cart.php?page=2">2</a></li>
         <li><a href="cart.php?page=3">3</a></li>
         <li><a href="cart.php?page=4">4</a></li>
        <!--  <li><a href="other.php?page=5">5</a></li> -->
         <li><a href="#">....</a></li>
         <li><a href="cart.php?page=<?php echo $_smarty_tpl->tpl_vars['maxpage']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['maxpage']->value;?>
</a></li>
          <?php }else{ ?>
        <?php  $_smarty_tpl->tpl_vars['index'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['index']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['maxarray']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['index']->key => $_smarty_tpl->tpl_vars['index']->value){
$_smarty_tpl->tpl_vars['index']->_loop = true;
?>
         <li><a href="cart.php?page=<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['index']->value;?>
</a></li>
        <?php } ?>
       <?php }?>
         <li><a href="cart.php?page=<?php echo $_smarty_tpl->tpl_vars['maxpage']->value;?>
">最后一页</a></li>
      </ul>
   </div>
	<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</body>
</html><?php }} ?>