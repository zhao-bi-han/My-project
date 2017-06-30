<?php /* Smarty version Smarty-3.1.14, created on 2017-01-29 15:09:33
         compiled from ".\templates\head.html" */ ?>
<?php /*%%SmartyHeaderCode:5505838e3ebd56869-14914374%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '592b2a1e838edede7c923dbf289aa007c23afda9' => 
    array (
      0 => '.\\templates\\head.html',
      1 => 1485673768,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5505838e3ebd56869-14914374',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5838e3ebd86750_54525655',
  'variables' => 
  array (
    'namearray' => 0,
    'wclas' => 0,
    'wcla' => 0,
    'wstyl' => 0,
    'wsty' => 0,
    'mclas' => 0,
    'mcla' => 0,
    'mstyl' => 0,
    'msty' => 0,
    'num' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5838e3ebd86750_54525655')) {function content_5838e3ebd86750_54525655($_smarty_tpl) {?>   <div class="head_top">
    <div class="head_top_left">
     <ul>
      <li>欢迎来到 帽子小铺 ！&nbsp;&nbsp;&nbsp;&nbsp;</li>
      <?php if ($_smarty_tpl->tpl_vars['namearray']->value[1]==0){?>
      <li><a href="login.php">登录</a>&nbsp;&nbsp;|</li>
      <li><a href="register.php"> 注册</a></li>
      <?php }elseif($_smarty_tpl->tpl_vars['namearray']->value[1]==1){?>
      <li><?php echo $_smarty_tpl->tpl_vars['namearray']->value[0];?>
</li><img src="style\img\xj.png" style="position: relative;top: -4px;left: -6px;">
      <?php }?>
    </ul>
  </div>
  <div class="head_top_right">
   <ul>
     <?php if ($_smarty_tpl->tpl_vars['namearray']->value[1]==0){?>
     <li><a href="login.php"  onClick="return confirm('亲，你还没有登录呦！');">我的账户</a>&nbsp;&nbsp;&nbsp;|</li>
     <li><a href="login.php"  onClick="return confirm('亲，你还没有登录呦！');">收藏夹</a>&nbsp;&nbsp;&nbsp;|</li>
     <li><a href="login.php"  onClick="return confirm('亲，你还没有登录呦！');">购物车</a>&nbsp;&nbsp;&nbsp;|</li>
     <li><a href="#">联系我们</a></li>
     <?php }elseif($_smarty_tpl->tpl_vars['namearray']->value[1]==1){?>
     <li><a href="myaccount.php">我的账户</a>&nbsp;&nbsp;&nbsp;|</li>
     <li><a href="collect.php">收藏夹</a>&nbsp;&nbsp;&nbsp;|</li>
     <li><a href="cart.php">购物车</a>&nbsp;&nbsp;&nbsp;|</li>
     <li><a href="#">联系我们</a></li>
     <li><a href="login.php">退出</a></li>
     <?php }?>
   </ul>
 </div>
</div>
<!-- 导航 -->
<div class="head">
 <div class="logo">
  <img src="style/img/logo.png">
</div>
<div class="nav">
  <ul>
   <li><a href="index.php" id="nav_a">首页</a></li>
   <li class="woman" id="woman"><a href="woman.php" class="index_w" id="nav_a">女性</a>
    <!-- 女性下拉框 -->
    <div class="nav_woman" >

     <div class="woman_class">
       <span >分类 ：</span>
       <ul>
         <?php  $_smarty_tpl->tpl_vars['wcla'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['wcla']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['wclas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['wcla']->key => $_smarty_tpl->tpl_vars['wcla']->value){
$_smarty_tpl->tpl_vars['wcla']->_loop = true;
?>
         <li><a href="wclass.php?id=<?php echo $_smarty_tpl->tpl_vars['wcla']->value['class_no'];?>
"><?php echo $_smarty_tpl->tpl_vars['wcla']->value['class_name'];?>
</a></li>
         <?php } ?>
       </ul>
     </div>
     <hr>
     <div class="woman_style">
       <span>风格 ：</span>
       <ul>
         <?php  $_smarty_tpl->tpl_vars['wsty'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['wsty']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['wstyl']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['wsty']->key => $_smarty_tpl->tpl_vars['wsty']->value){
$_smarty_tpl->tpl_vars['wsty']->_loop = true;
?>
         <li><a href="wstyle.php?id=<?php echo $_smarty_tpl->tpl_vars['wsty']->value['style_no'];?>
"><?php echo $_smarty_tpl->tpl_vars['wsty']->value['style_name'];?>
</a></li>
         <?php } ?>
       </ul>
     </div>
   </div>

 </li>
 <li class="man" id="man"><a href="man.php" class="index_m" id="nav_a">男性</a>
  <!-- 男性下拉框 -->
  <div class="nav_man" >
   <div class="man_class">
     <span >分类 ：</span>
     <ul>
       <?php  $_smarty_tpl->tpl_vars['mcla'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['mcla']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mclas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['mcla']->key => $_smarty_tpl->tpl_vars['mcla']->value){
$_smarty_tpl->tpl_vars['mcla']->_loop = true;
?>
       <li><a href="mclass.php?id=<?php echo $_smarty_tpl->tpl_vars['mcla']->value['class_no'];?>
"><?php echo $_smarty_tpl->tpl_vars['mcla']->value['class_name'];?>
</a></li>
       <?php } ?>
       
     </ul>
   </div>
   <hr>
   <div class="man_style">
     <span>风格 ：</span>
     <ul>
       <?php  $_smarty_tpl->tpl_vars['msty'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['msty']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mstyl']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['msty']->key => $_smarty_tpl->tpl_vars['msty']->value){
$_smarty_tpl->tpl_vars['msty']->_loop = true;
?>
       <li><a href="mstyle.php?id=<?php echo $_smarty_tpl->tpl_vars['msty']->value['style_no'];?>
"><?php echo $_smarty_tpl->tpl_vars['msty']->value['style_name'];?>
</a></li>
       <?php } ?>
     </ul>
   </div>
 </div>

</li>
<li><a href="other.php" id="nav_a">其他</a></li>
</ul>
</div>
<!-- 搜素框 -->
<div class="search">
  <form action="search.php" method="post">
    <input type="text" name="search"  class="search_search" placeholder="Search">
    <input type="submit" name="submit" class="search_submit" value="">
  </form>
</div>
<!-- 收藏 购物车 -->
<?php if ($_smarty_tpl->tpl_vars['namearray']->value[1]==0){?>
<div class="head_right">
  <div class="head_right_collect">
   <a href="login.php" onClick="return confirm('亲，你还没有登录呦！');"> <img src="style/img/collect.png"></a>
 </div>
 <div class="head_right_cart">
   <a href="login.php" onClick="return confirm('亲，你还没有登录呦！');"><img src="style/img/cart.png"></a>
 </div>
</div>
<?php }elseif($_smarty_tpl->tpl_vars['namearray']->value[1]==1){?>
<div class="head_right">
  <div class="head_right_collect">
   <a href="collect.php"> <img src="style/img/collect.png"></a>
 </div>
 <div class="head_right_cart">
   <a href="cart.php"><img src="style/img/cart.png"></a>
 </div>
 <div class="num" style="width: 20px;height: 20px;background-color: red;border-radius: 100%;z-index: 99;position: absolute;left: 74px;top: -4px;text-align: center;color: #fff;font-size: 12px;line-height: 20px"><?php echo $_smarty_tpl->tpl_vars['num']->value;?>
</div>
</div>
<?php }?>
</div>

<?php }} ?>