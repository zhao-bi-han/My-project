<?php /* Smarty version Smarty-3.1.14, created on 2016-11-27 17:17:19
         compiled from "templates\head.html" */ ?>
<?php /*%%SmartyHeaderCode:13645583aa01c9fc038-52007818%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0099f954a89d08270bc0ba65c32fd4bf4bbe3d88' => 
    array (
      0 => 'templates\\head.html',
      1 => 1480238235,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13645583aa01c9fc038-52007818',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_583aa01ca56259_24106113',
  'variables' => 
  array (
    'clas' => 0,
    'cla' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_583aa01ca56259_24106113')) {function content_583aa01ca56259_24106113($_smarty_tpl) {?>   <div class="head_top">
    <div class="head_top_left">
     <ul>
      <li>欢迎来到 帽子小铺 ！&nbsp;&nbsp;&nbsp;&nbsp;</li>
      <li><a href="login.php">登录</a>&nbsp;&nbsp;|</li>
      <li><a href="register.php"> 注册</a></li>
    </ul>
  </div>
  <div class="head_top_right">
   <ul>
     <li><a href="myaccount.php">我的账户</a>&nbsp;&nbsp;&nbsp;|</li>
     <li><a href="collect.php">收藏夹</a>&nbsp;&nbsp;&nbsp;|</li>
     <li><a href="cart.php">购物车</a>&nbsp;&nbsp;&nbsp;|</li>
     <li><a href="#">联系我们</a>&nbsp;&nbsp;&nbsp;</li>
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
       <?php  $_smarty_tpl->tpl_vars['cla'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cla']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['clas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cla']->key => $_smarty_tpl->tpl_vars['cla']->value){
$_smarty_tpl->tpl_vars['cla']->_loop = true;
?>
         <li><a href="#"><?php echo $_smarty_tpl->tpl_vars['cla']->value['class_name'];?>
</a></li>
        <?php } ?>
       </ul>
     </div>
     <hr>
     <div class="woman_style">
       <span>风格 ：</span>
       <ul>
        <li><a href="#">休闲</a></li>
        <li><a href="#">复古</a></li>
        <li><a href="#">时尚</a></li>
        <li><a href="#">学院风</a></li>
        <li><a href="#">潮流</a></li>
        <li><a href="#">韩版新款</a></li>
        <li><a href="#">2016</a></li>
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
       <li><a href="#">毛线帽</a></li>
       <li><a href="#">棒球帽</a></li>
       <li><a href="#">嘻哈帽</a></li>
       <li><a href="#">鸭舌帽</a></li>
     </ul>
   </div>
   <hr>
   <div class="man_style">
     <span>风格 ：</span>
     <ul>
      <li><a href="#">休闲</a></li>
      <li><a href="#">字母</a></li>
      <li><a href="#">时尚</a></li>
      <li><a href="#">学院风</a></li>
      <li><a href="#">潮流</a></li>
      <li><a href="#">韩版新款</a></li>
      <li><a href="#">2016</a></li>
    </ul>
  </div>
</div>

</li>
<li><a href="other.php" id="nav_a">其他</a></li>
</ul>
</div>
<!-- 搜素框 -->
<div class="search">
  <form action="#" method="post">
    <input type="text" name="search"  class="search_search"  value="Search" onfocus="this.value = '';"onblur="if (this.value == ''){this.value = 'Search';}">
    <input type="submit" name="submit" class="search_submit" value="">
  </form>
</div>
<!-- 收藏 购物车 -->
<div class="head_right">
  <div class="head_right_collect">
   <a href="collect.php"> <img src="style/img/collect.png"></a>
 </div>
 <div class="head_right_cart">
   <a href="cart.php"><img src="style/img/cart.png"></a>
 </div>
</div>
</div>

<?php }} ?>