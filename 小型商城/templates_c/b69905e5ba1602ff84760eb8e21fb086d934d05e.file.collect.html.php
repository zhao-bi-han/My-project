<?php /* Smarty version Smarty-3.1.14, created on 2016-12-07 19:14:53
         compiled from "templates\collect.html" */ ?>
<?php /*%%SmartyHeaderCode:154675838e41e3bba76-64155807%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b69905e5ba1602ff84760eb8e21fb086d934d05e' => 
    array (
      0 => 'templates\\collect.html',
      1 => 1481109286,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '154675838e41e3bba76-64155807',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5838e41e461ac9_93432153',
  'variables' => 
  array (
    'collectgood' => 0,
    'collect' => 0,
    'maxpage' => 0,
    'maxarray' => 0,
    'index' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5838e41e461ac9_93432153')) {function content_5838e41e461ac9_93432153($_smarty_tpl) {?><!DOCTYPE html>
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

    <hr class="wm_hr" id="wm_hr">
  <div style="height: 3060px;" class="body_goods">
  
    <div class="woman_head">
      <div class="woman_head_l" id="cellect">我的收藏</div>
      <div class="woman_head_r" id="woman_head_r">全部宝贝</div>
    </div>
     <div class="wgoods_list" >
      <ul>
      <?php  $_smarty_tpl->tpl_vars['collect'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['collect']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['collectgood']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['collect']->key => $_smarty_tpl->tpl_vars['collect']->value){
$_smarty_tpl->tpl_vars['collect']->_loop = true;
?>
       <li>
        <div class="gw_img">
          <img src="<?php echo $_smarty_tpl->tpl_vars['collect']->value['collect_img'];?>
">
        </div>
        <div class="gw_content">
          <a href="#"><?php echo $_smarty_tpl->tpl_vars['collect']->value['collect_content'];?>
</a>
        </div>
        <div class="gw_price"><b>￥<?php echo $_smarty_tpl->tpl_vars['collect']->value['collect_price'];?>
</b></div>
        <div class="gw_cart" style="top:0px">
          <a href="#" onclick="javescript:if(confirm('确定删除？')) location='collectdel.php?id=<?php echo $_smarty_tpl->tpl_vars['collect']->value['collect_id'];?>
'"><img src="style/img/del.png" ></a>
        </div>
        <div class="gw_celloct" style="top:-26px;">
          <a href="#" onclick="javascript:location='cartcl.php?id=<?php echo $_smarty_tpl->tpl_vars['collect']->value['collect_id'];?>
'"><img src="style/img/cart.png"></a>
        </div>
      </li>
    <?php } ?>
    </ul>
  </div>
</div>
 <div class="fenye">
      <ul>
         <li><a href="collect.php?page=1">第一页</a></li>
          <?php if ($_smarty_tpl->tpl_vars['maxpage']->value>4){?>
         <li><a href="collect.php?page=1">1</a></li>
         <li><a href="collectphp?page=2">2</a></li>
         <li><a href="collect.php?page=3">3</a></li>
         <li><a href="collect.php?page=4">4</a></li>
        <!--  <li><a href="other.php?page=5">5</a></li> -->
         <li><a href="#">....</a></li>
         <li><a href="collect.php?page=<?php echo $_smarty_tpl->tpl_vars['maxpage']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['maxpage']->value;?>
</a></li>
          <?php }else{ ?>
        <?php  $_smarty_tpl->tpl_vars['index'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['index']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['maxarray']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['index']->key => $_smarty_tpl->tpl_vars['index']->value){
$_smarty_tpl->tpl_vars['index']->_loop = true;
?>
         <li><a href="collect.php?page=<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['index']->value;?>
</a></li>
        <?php } ?>
       <?php }?>
         <li><a href="collect.php?page=<?php echo $_smarty_tpl->tpl_vars['maxpage']->value;?>
">最后一页</a></li>
      </ul>
   </div>
<?php echo $_smarty_tpl->getSubTemplate ("footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</body>
</html><?php }} ?>