<?php /* Smarty version Smarty-3.1.14, created on 2017-05-02 09:03:33
         compiled from "templates\student_list.html" */ ?>
<?php /*%%SmartyHeaderCode:1310458f96fb2092156-43403902%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c4ae45739faeec17e7075ea3351d74cbf6fb8980' => 
    array (
      0 => 'templates\\student_list.html',
      1 => 1493350914,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1310458f96fb2092156-43403902',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_58f96fb210cd87_70856394',
  'variables' => 
  array (
    'studentlist' => 0,
    'student' => 0,
    'maxpage' => 0,
    'currentPage' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58f96fb210cd87_70856394')) {function content_58f96fb210cd87_70856394($_smarty_tpl) {?><!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<title>Table</title>
		<link rel="stylesheet" href="plugins/layui/css/layui.css" media="all" />
		<link rel="stylesheet" href="css/global.css" media="all">
		<link rel="stylesheet" href="plugins/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/table.css" />
        <link rel="stylesheet" href="css/my.css" />
        <script type="text/javascript" src="js/jquery-1.8.0.min.js"></script>
	</head>
	<style type="text/css">
        	.back{
			position: absolute;
			left: 94%;
			top:83px;
			color:#909090;
		}
		.layui-elem-field{
			margin-bottom: 50px;
		}
		.back.back1{
			display: none;
		}
        </style>

      <script type="text/javascript">
      	   $(function(){
    //搜素
       $("#search").click(function(event) {
       	var value=$(".layui-input").val();
       	if(value==''){
               alert("请输入学号");
       	}else{
       		$.ajax({
     			url: 'stu_list_search.php',
     			type: 'POST',
     			dataType:"json",
     			data: {
     				'search': $(".layui-input").val()
     			},
     			success: function(text){
     				if(text==0){
                     alert("没查到该学生的信息");
     				}else{
     				  $(".site-table tbody").empty();
     				   $(".back2").css('display','none');
     				  $(".back1").css('display','block');
     				  var html='';
     				  html+="<tr>";
     				  html+="<td><input type='checkbox'></td>";
     				  html+="<td>"+text[0]['stu_no']+"</td>";
     				  html+="<td>"+text[0]['stu_name']+"</td>";
     				  html+="<td>"+text[0]['stu_grade']+"</td>";
     				  html+="<td>"+text[0]['stu_major']+"</td>";
     				  html+="<td>"+text[0]['p_phone']+"</td>";
     				   html+="<td>"+text[0]['p_card']+"</td>";
     				    html+="<td>"+text[0]['stu_pass']+"</td>";
     				  html+="<td>";
     				  html+="<a href='stu_update.php?num="+text[0]['stu_no']+"' >修改</a>&nbsp;&nbsp;|&nbsp;&nbsp;";
     				  html+="<a href='javascript:;' onclick='rem("+text[0]['stu_no']+",this)'>删除</a>";

     				  html+="</td>";
     				  html+="</tr>";
     				   $(".site-table tbody").html(html);

     				}
     			}
     		})
       	}
        	
     });
       //返回
       $(".back").click(function(event) {
       	location.href="student_list.php";
       });

})
      	   //删除
		function rem(no,obj){
			var flag=confirm("确定删除?");
			if(flag==true){
				$.ajax({
					url: 'student_del.php',
					type: 'POST',
					data: {
						'no': no
					},
					success: function(text){
						if(text==1){
							$(obj).parents('tr').remove();
							layer.msg("删除成功"); 
						}
					}
				})
			}
		}
      </script>
	<body>
		<div class="admin-main">
				
			<fieldset class="layui-elem-field">
				<legend>学生列表</legend>
				<form class="layui-form" action="">
			   <div class="layui-form-item">
					<div class="layui-input-block search">
						<input type="text" name="title" lay-verify="title" autocomplete="off" placeholder="请输入学号" class="layui-input">
					<a href="javascript:;" class="layui-btn layui-btn-small" id="search">
					<i class="layui-icon">&#xe615;</i> 搜索
				</a>
					</div>
				<a href="javascript:;" class="back back1">返回</a>
				<a href="javascript:history.go(-1);" class="back back2">返回</a>
				</div>
				
				</form>
				<div class="layui-field-box">
					<table class="site-table table-hover">
						<thead>
							<tr>
								<th><input type="checkbox" id="selected-all"></th>
								<th>学号</th>
								<th>姓名</th>
								<th>年级</th>
								<th>专业</th>
								<th>手机号</th>
								<th>卡号</th>
								<th>密码</th>
								<th>操作</th>
							</tr>
						</thead>
						<tbody>
						 <?php  $_smarty_tpl->tpl_vars['student'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['student']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['studentlist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['student']->key => $_smarty_tpl->tpl_vars['student']->value){
$_smarty_tpl->tpl_vars['student']->_loop = true;
?>
							<tr>
								<td><input type="checkbox"></td>
								<td><?php echo $_smarty_tpl->tpl_vars['student']->value['stu_no'];?>
</td>
								<td><?php echo $_smarty_tpl->tpl_vars['student']->value['stu_name'];?>
</td>
								<td><?php echo $_smarty_tpl->tpl_vars['student']->value['stu_grade'];?>
</td>
								<td><?php echo $_smarty_tpl->tpl_vars['student']->value['stu_major'];?>
</td>
								<td><?php echo $_smarty_tpl->tpl_vars['student']->value['p_phone'];?>
</td>
								<td><?php echo $_smarty_tpl->tpl_vars['student']->value['p_card'];?>
</td>
								<td><?php echo $_smarty_tpl->tpl_vars['student']->value['stu_pass'];?>
</td>
								<td>
									<a href="stu_update.php?num=<?php echo $_smarty_tpl->tpl_vars['student']->value['stu_no'];?>

									">修改</a>&nbsp;&nbsp;|
								<a href="javascript:;" onclick="rem(<?php echo $_smarty_tpl->tpl_vars['student']->value['stu_no'];?>
,this)">删除</a>
								</td>
							</tr>
							<?php }
if (!$_smarty_tpl->tpl_vars['student']->_loop) {
?>

							<tr>
								<td>暂无消息</td>
							</tr>
								
       <?php } ?>
					
						</tbody>
					</table>

				</div>
			</fieldset>
			<div class="admin-table-page">
				<div id="page" class="page" name="page">
				</div>
			</div>
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

				//page
			laypage({
					cont: 'page',
					pages: '<?php echo $_smarty_tpl->tpl_vars['maxpage']->value;?>
' //总页数
						,
					groups:5//连续显示分页数
						,
					curr:'<?php echo $_smarty_tpl->tpl_vars['currentPage']->value;?>
' //当前页数
					,
					jump: function(obj, first) {
						//得到了当前页，用于向服务端请求对应数据
						var curr = obj.curr;
						if(!first) {
							//layer.msg('第 '+ obj.curr +' 页');
							window.location.href='student_list.php?page='+curr;
						}
					}
				});
;

		

			});
		</script>
	</body>

</html><?php }} ?>