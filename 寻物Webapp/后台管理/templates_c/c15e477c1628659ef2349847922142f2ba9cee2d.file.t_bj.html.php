<?php /* Smarty version Smarty-3.1.14, created on 2017-06-01 10:49:21
         compiled from "templates\t_bj.html" */ ?>
<?php /*%%SmartyHeaderCode:2082458fb1ea3701fe1-70113672%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c15e477c1628659ef2349847922142f2ba9cee2d' => 
    array (
      0 => 'templates\\t_bj.html',
      1 => 1493719071,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2082458fb1ea3701fe1-70113672',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_58fb1ea377fd60_10337792',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58fb1ea377fd60_10337792')) {function content_58fb1ea377fd60_10337792($_smarty_tpl) {?><!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" href="plugins/layui/css/layui.css" media="all" />
	<link rel="stylesheet" href="css/main.css" />
	<link rel="stylesheet" href="css/my.css" />
	<script type="text/javascript" src="js/jquery-1.8.0.min.js"></script>
  <style type="text/css">
    .baojing{
      position: absolute;
      top: 471px;
      left: 1026px;
    }
    .pic{
      overflow: hidden;
      text-align: center;
    }
    .pic img{
      width: 200px;
      height: auto;
    }

  </style>
  <script type="text/javascript">
    $(function(){
				//报警人
				$(".search1").click(function(){
					var value=$(".search_no1").val();
					if(value==''){
						layer.msg("请输入学号");
					}else{
						$.ajax({
							url: 't_bj_search.php',
							type: 'POST',
							dataType:"json",
							data: {
								'search': $(".search_no1").val(),
                'way':1
              },
              success: function(text){
                if(text==0){
                 layer.msg("没查到该学生的信息");
               }else{
                 $("#call_no").val(text[0]['stu_no']);
                 $("#call_name").val(text[0]['stu_name']);
                 $("#call_grade").val(text[0]['stu_grade']);
                 $("#call_major").val(text[0]['stu_major']);
                 $("#call_phone").val(text[0]['p_phone']);
                 $("#call_card").val(text[0]['p_card']);
                 $(".call img").attr('src','picture/'+text[0]['stu_picture']);
               }
             }
           })
					}

				});
                //丢失人
                $(".search2").click(function(){
                	var value=$(".search_no2").val();
                	if(value==''){
                		layer.msg("请输入学号");
                	}else{
                		$.ajax({
                			url: 't_bj_search.php',
                			type: 'POST',
                			dataType:"json",
                			data: {
                				'search': $(".search_no2").val(),
                        'way':1
                      },
                      success: function(text){
                        if(text==0){
                         layer.msg("没查到该学生的信息");
                       }else{
                         $("#lose_no").val(text[0]['stu_no']);
                         $("#lose_name").val(text[0]['stu_name']);
                         $("#lose_grade").val(text[0]['stu_grade']);
                         $("#lose_major").val(text[0]['stu_major']);
                         $("#lose_phone").val(text[0]['p_phone']);
                         $("#lose_card").val(text[0]['p_card']);
                         $(".lose img").attr('src','picture/'+text[0]['stu_picture']);
                       }
                     }
                   })
                	}
                });

                //报警
                $(".baojing").click(function() {
                  var call_no=$("#call_no").val();
                  var lose_no=$("#lose_no").val();
                  if(call_no==''||lose_no==''){
                    layer.msg("请填写完整信息");
                  }else{
                   $.ajax({
                    url: 't_bj_search.php',
                    type: 'POST',
                    dataType:"json",
                    data: {
                      'call_no': $("#call_no").val(),
                      'lose_no':$("#lose_no").val(),
                      'call_phone':$("#call_phone").val(),
                    //判断是在查询1还是报警0
                    'way':0
                  },
                  success: function(text){
                    if(text==11){
                      layer.msg("您已经报过警啦");
                      setTimeout(function(){
                       location.href='b_table.php';
                      }, 1000);        
                    }else if(text==10){
                      layer.msg("您已经报过警啦");
                      setTimeout(function(){
                       location.href='yb_table.php';
                      }, 1000); 
                      
                    }
                    else if(text==1){
                      layer.msg("报警成功");
                      
                     setTimeout(function(){
                       location.href='yb_table.php';
                      }, 1000); 
                   }else if(text==2){
                     layer.msg("报警失败");
                   }
                 }
               })
                 }
               });
              });
            </script>
          </head>

          <body>
           <div class="admin-main">
            <fieldset class="layui-elem-field bj_other">
             <legend>报警人</legend>
             <form class="layui-form" action="">
              <div class="layui-form-item">
               <div class="layui-input-block search">
                <input type="text" name="title" lay-verify="title" autocomplete="off" placeholder="请输入学号" class="layui-input search_no1">
                <a href="javascript:;" class="layui-btn layui-btn-small search1" id="search">
                 <i class="layui-icon">&#xe615;</i> 搜索
               </a>
             </div>
           </div>

         </form>
         <div class="layui-field-box">
           <div class="layui-form-item xx">
            <label class="layui-form-label">学号</label>
            <div class="layui-input-block">
             <input type="text" name="number" autocomplete="off" disabled="disabled" class="layui-input bj" id="call_no">
           </div>
         </div>
         <div class="layui-form-item xx">
          <label class="layui-form-label">姓名</label>
          <div class="layui-input-block">
           <input type="text" name="name" autocomplete="off" class="layui-input bj" disabled="disabled" id="call_name">
         </div>
       </div>
       <div class="layui-form-item xx">
        <label class="layui-form-label">年级</label>
        <div class="layui-input-block">
         <input type="text" name="number" disabled="disabled" autocomplete="off" class="layui-input bj" id="call_grade">
       </div>
     </div>
     <div class="layui-form-item xx">
      <label class="layui-form-label">专业</label>
      <div class="layui-input-block">
       <input type="text" name="name"  disabled="disabled" autocomplete="off" class="layui-input bj" id="call_major">
     </div>
   </div>
   <div class="layui-form-item xx">
    <label class="layui-form-label">手机号</label>
    <div class="layui-input-inline">
     <input type="tel" name="phone" lay-verify="phone"  disabled="disabled" autocomplete="off" class="layui-input bj" id="call_phone">
   </div>
 </div>
 <div class="layui-form-item xx">
  <label class="layui-form-label">卡号 </label>
  <div class="layui-input-block">
   <input type="text" name="username" disabled="disabled" autocomplete="off" class="layui-input bj" id="call_card">
 </div>
</div>

<div class="pic call">
  <img src="">
</div>
</div>

</fieldset>
</div>

<div class="admin-main">
  <fieldset class="layui-elem-field ds_other">
   <legend>丢失人</legend>
   <div class="layui-form-item">
     <div class="layui-input-block search">
      <input type="text" name="title" lay-verify="title" autocomplete="off" placeholder="请输入学号" class="layui-input search_no2">
      <a href="javascript:;" class="layui-btn layui-btn-small search2" id="search">
       <i class="layui-icon">&#xe615;</i> 搜索
     </a>
   </div>
 </div>
</form>
<div class="layui-field-box">
 <div class="layui-form-item xx">
  <label class="layui-form-label">学号</label>
  <div class="layui-input-block">
   <input type="text" name="number" autocomplete="off"  disabled="disabled" class="layui-input bj" id="lose_no">
 </div>
</div>
<div class="layui-form-item xx">
  <label class="layui-form-label">姓名</label>
  <div class="layui-input-block">
   <input type="text" name="name" autocomplete="off" class="layui-input bj" disabled="disabled" id="lose_name">
 </div>
</div>
<div class="layui-form-item xx">
  <label class="layui-form-label">年级</label>
  <div class="layui-input-block">
   <input type="text" name="number" autocomplete="off" disabled="disabled" class="layui-input bj" id="lose_grade">
 </div>
</div>
<div class="layui-form-item xx">
  <label class="layui-form-label">专业</label>
  <div class="layui-input-block">
   <input type="text" name="name" autocomplete="off" disabled="disabled" class="layui-input bj" id="lose_major">
 </div>
</div>
<div class="layui-form-item xx">
  <label class="layui-form-label">手机号</label>
  <div class="layui-input-inline">
   <input type="tel" name="phone" lay-verify="phone" autocomplete="off" class="layui-input bj" disabled="disabled" id="lose_phone">
 </div>
</div>
<div class="layui-form-item xx">
  <label class="layui-form-label">卡号 </label>
  <div class="layui-input-block">
   <input type="text" name="username" autocomplete="off" disabled="disabled" class="layui-input bj" id="lose_card">
 </div>
</div>

<div class="pic lose">
  <img src="">
</div>

</div>
</fieldset>
<button class="layui-btn baojing">预报警</button>
</div>

<script type="text/javascript" src="plugins/layui/layui.js"></script>
<script>
  layui.config({
    base: 'plugins/layui/modules/'
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

</html><?php }} ?>