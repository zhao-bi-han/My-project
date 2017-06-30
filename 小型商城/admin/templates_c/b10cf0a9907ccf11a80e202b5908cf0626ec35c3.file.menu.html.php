<?php /* Smarty version Smarty-3.1.14, created on 2016-12-01 17:31:26
         compiled from ".\templates\menu.html" */ ?>
<?php /*%%SmartyHeaderCode:264055836a27e8e47b0-70865021%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b10cf0a9907ccf11a80e202b5908cf0626ec35c3' => 
    array (
      0 => '.\\templates\\menu.html',
      1 => 1480584661,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '264055836a27e8e47b0-70865021',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5836a27e8e77f4_63833132',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5836a27e8e77f4_63833132')) {function content_5836a27e8e77f4_63833132($_smarty_tpl) {?><aside class="lt_aside_nav content mCustomScrollbar">
 <h2><a href="index.php">起始页</a></h2>
 <ul>
  <li>
   <dl>
    <dt>商品信息</dt>
    <!--当前链接则添加class:active-->
    <dd><a href="goods_list.php">商品列表</a></dd>
    <dd><a href="goods_add.php">添加商品</a></dd>
    <dd><a href="class_list.php">商品分类</a></dd>
    <dd><a href="class_add.php">添加分类</a></dd>
    <dd><a href="style_list.php">商品风格</a></dd>
    <dd><a href="style_add.php">添加风格</a></dd>
   </dl>
  </li>
  <li>
   <dl>
    <dt>用户管理</dt>
    <dd><a href="user_list.php">用户列表</a></dd>
    <dd><a href="user_add.php">添加用户</a></dd>
   </dl>
  </li>
  <li>
   <dl>
    <dt>管理员管理</dt>
    <dd><a href="aduser_list.php">管理员列表</a></dd>
    <dd><a href="aduser_add.php">添加管理员</a></dd>
    <dd></dd> 
    <dd></dd> 
   </dl>
  </li>
  <li style="height:20px">
   <p class="btm_infor">© 小菡菡 版权所有</p>
  </li>
 </ul>
</aside><?php }} ?>