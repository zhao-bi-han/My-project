<?php /* Smarty version Smarty-3.1.14, created on 2017-05-02 15:15:34
         compiled from "templates\login.html" */ ?>
<?php /*%%SmartyHeaderCode:522258f805f1bcc7a6-77396725%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '73c8520d99106c46b85785275a880443b3cb31e8' => 
    array (
      0 => 'templates\\login.html',
      1 => 1493709320,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '522258f805f1bcc7a6-77396725',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_58f805f1c17f51_02382733',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58f805f1c17f51_02382733')) {function content_58f805f1c17f51_02382733($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>保定学院手机寻找平台</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/templatemo-style.css">
    <link rel="stylesheet" href="css/style2.css" media="screen" type="text/css" />
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <script src="js/vendor/modernizr-2.6.2.min.js"></script>
<script type="text/javascript" src="admin/js/jquery-1.8.0.min.js"></script>
    <style type="text/css">
        body{
          overflow:hidden;
      }
      .form{
        margin-top:140px;
    }
    #btn {
      background: rgba(0, 188, 212, 0.54);
      color:#fff;
      padding:10px 20px;
      border:none;
      outline:none;
      cursor:pointer;
      margin-top:49px;
      transition: 0.5s all;
      webkit-transition: 0.5s all;
      -moz-transition: 0.5s all;
      -o-transition: 0.5s all;
      -ms-transition: 0.5s all;
      width:100%;
      font-size:16px;
      font-family: 'Open Sans', sans-serif;
  }
</style>
<script type="text/javascript">
$(function(){
 $("#btn").click(function(event) {
       var name=$("#name").val();
       var pass=$("#pass").val();
       if(name==''){
            layer.msg("请输入学号");
       }else if(pass==''){
            layer.msg("请填写密码");
       }else{
        $.ajax({
                url: 'login_cl.php',
                type: 'POST',
                dataType:"json",
                data: {
                    'name': name,
                    'pass':pass
                },
                success: function(text){
                    if(text==0){
                        layer.msg("学号或密码错误"); 

                    }else{
                        layer.msg("登录成功");
                         location.href="index.php";
                    }
                }
            })
       }
   });

});
  
</script>
</head>

<body>
    <div class="site-bg"></div>
    <div class="site-bg-overlay"></div>
    <div class="container"> 
        <div class="sign-in-w3ls">    
            <h3>校园寻</h3>
            <form >         
                <input type="text" class="name" name="number" placeholder="请输入学号" id="name" autocomplete="off">
                <input type="password" class="password" name="password" placeholder="请输入密码" id="pass" autocomplete="off">
                <input type="button" value="立即登录" name="sub" id="btn">
            </form>
            <div class="footer-agilew3">
                <p> © 2017 保定学院 信息技术系 物联网工程 </p>
            </div>
        </div>
    </div>
</div>
</div>
<script type="text/javascript" src="admin/plugins/layui/layui.js"></script>
<script>
    layui.config({
      base: 'admin/plugins/layui/modules/'
  });

    layui.use(['icheck', 'laypage','layer'], function() {
      var $ = layui.jquery,
      laypage = layui.laypage,
      layer = parent.layer === undefined ? layui.layer : parent.layer;
      $('input').iCheck({
        checkboxClass: 'icheckbox_flat-green'
    });
  });
</script>
</body>
</html>
<?php }} ?>