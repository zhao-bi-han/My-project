<?php /* Smarty version Smarty-3.1.14, created on 2016-11-23 17:58:10
         compiled from ".\templates\head.html" */ ?>
<?php /*%%SmartyHeaderCode:324325832ebdf262684-15896666%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '592b2a1e838edede7c923dbf289aa007c23afda9' => 
    array (
      0 => '.\\templates\\head.html',
      1 => 1479895087,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '324325832ebdf262684-15896666',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5832ebdf268923_88262146',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5832ebdf268923_88262146')) {function content_5832ebdf268923_88262146($_smarty_tpl) {?>   <div class="head_top">
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
         <li><a href="#">毛线帽</a></li>
         <li><a href="#">棒球帽</a></li>
         <li><a href="#">贝雷帽</a></li>
         <li><a href="#">渔夫帽</a></li>
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
       <li><a href="#">贝雷帽</a></li>
       <li><a href="#">渔夫帽</a></li>
     </ul>
   </div>
   <hr>
   <div class="man_style">
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