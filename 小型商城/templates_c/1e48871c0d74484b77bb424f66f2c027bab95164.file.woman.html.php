<?php /* Smarty version Smarty-3.1.14, created on 2016-12-26 17:18:55
         compiled from "templates\woman.html" */ ?>
<?php /*%%SmartyHeaderCode:190235838e408719211-29560796%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1e48871c0d74484b77bb424f66f2c027bab95164' => 
    array (
      0 => 'templates\\woman.html',
      1 => 1482743921,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '190235838e408719211-29560796',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5838e4087fe0a6_29197053',
  'variables' => 
  array (
    'wgood' => 0,
    'wgoods' => 0,
    'namearray' => 0,
    'maxpage' => 0,
    'maxarray' => 0,
    'index' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5838e4087fe0a6_29197053')) {function content_5838e4087fe0a6_29197053($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style/css/common.css">
	<link rel="stylesheet" type="text/css" href="style/css/conn.css">
	<link rel="stylesheet" type="text/css" href="style/css/goods.css">
	<script type="text/javascript" src="style/js/jquery-1.8.0.min.js"></script>
	<script type="text/javascript" src="style/js/common.js"></script>
  <!-- <script type="text/javascript">
     $(document).ready(function(){
             $("#collect").click(function(){
              $.ajax({type:"GET",url:"wcollect.php?id=<?php echo $_smarty_tpl->tpl_vars['wgood']->value['goods_id'];?>
",success:function(result){
      alert('成功');
  }});
             });
     });
  </script> -->
</head>
<body>
<?php echo $_smarty_tpl->getSubTemplate ("head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<hr class="wm_hr">
<div class="body_goods">
   <div class="woman_head">
      <div class="woman_head_l">女性 </div>
 <!--      <div class="woman_head_r">毛线帽</div> -->
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
						<a href="goods_show.php" onclick="javascript:location='goods_show.php?id=<?php echo $_smarty_tpl->tpl_vars['wgood']->value['goods_id'];?>
'"><img src="<?php echo $_smarty_tpl->tpl_vars['wgood']->value['goods_img'];?>
"></a>
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
            <a href="login.php"  onClick="return confirm('亲，你还没有登录呦！');"><img src="style/img/cart.png"></a>
          </div>
          <?php }elseif($_smarty_tpl->tpl_vars['namearray']->value[1]==1){?>
            <div class="gw_celloct">
            <a href="#" id="collect" onclick="javascript:location='wcollectcl.php?id=<?php echo $_smarty_tpl->tpl_vars['wgood']->value['goods_id'];?>
'"
><img src="<?php echo $_smarty_tpl->tpl_vars['wgood']->value['col'];?>
"></a>
          </div>
          <div class="gw_cart">
            <a href="#" onclick="javascript:location='wcartcl.php?id=<?php echo $_smarty_tpl->tpl_vars['wgood']->value['goods_id'];?>
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
         <li><a href="woman.php?page=1">第一页</a></li>
          <?php if ($_smarty_tpl->tpl_vars['maxpage']->value>6){?>
         <li><a href="woman.php?page=1">1</a></li>
         <li><a href="woman.php?page=2">2</a></li>
         <li><a href="woman.php?page=3">3</a></li>
         <li><a href="woman.php?page=4">4</a></li>
         <li><a href="woman.php?page=5">5</a></li>
         <li><a href="#">....</a></li>
         <li><a href="woman.php?page=<?php echo $_smarty_tpl->tpl_vars['maxpage']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['maxpage']->value;?>
</a></li>
          <?php }else{ ?>
        <?php  $_smarty_tpl->tpl_vars['index'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['index']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['maxarray']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['index']->key => $_smarty_tpl->tpl_vars['index']->value){
$_smarty_tpl->tpl_vars['index']->_loop = true;
?>
         <a href="woman.php?page=<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['index']->value;?>
</a>
        <?php } ?>
       <?php }?>
         <li><a href="woman.php?page=<?php echo $_smarty_tpl->tpl_vars['maxpage']->value;?>
">最后一页</a></li>
      </ul>
   </div>
   <?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</body>
</html><?php }} ?>