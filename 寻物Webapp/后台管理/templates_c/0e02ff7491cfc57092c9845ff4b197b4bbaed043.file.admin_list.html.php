<?php /* Smarty version Smarty-3.1.14, created on 2017-06-01 12:51:38
         compiled from "templates\admin_list.html" */ ?>
<?php /*%%SmartyHeaderCode:18062592f8c0fd9b9a3-21982171%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0e02ff7491cfc57092c9845ff4b197b4bbaed043' => 
    array (
      0 => 'templates\\admin_list.html',
      1 => 1496292695,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18062592f8c0fd9b9a3-21982171',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_592f8c0ff19b73_19190300',
  'variables' => 
  array (
    'list' => 0,
    'admin' => 0,
    'maxpage' => 0,
    'currentPage' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_592f8c0ff19b73_19190300')) {function content_592f8c0ff19b73_19190300($_smarty_tpl) {?><!DOCTYPE html>
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
               alert("请输入用户名");
       	}else{
       		$.ajax({
     			url: 'admin_search.php',
     			type: 'POST',
     			dataType:"json",
     			data: {
     				'search': $(".layui-input").val()
     			},
     			success: function(text){
     				if(text==0){
                     alert("没查到该管理员的信息");
     				}else{
     				  $(".site-table tbody").empty();
     				   $(".back2").css('display','none');
     				  $(".back1").css('display','block');
     				  var html='';
     				  html+="<tr>";
     				  html+="<td><input type='checkbox'></td>";
     				  html+="<td>"+text[0]['admin_name']+"</td>";
     				  html+="<td>"+text[0]['admin_phone']+"</td>";
     				  html+="<td>"+text[0]['admin_pass']+"</td>";
     				  html+="<td>";
     				  html+="<a href='admin_update.php?num="+text[0]['id']+"' >修改</a>&nbsp;&nbsp;|&nbsp;&nbsp;";
     				  html+="<a href='javascript:;' onclick='rem("+text[0]['id']+",this)'>删除</a>";

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
       	location.href="admin_list.php";
       });

})
      	   //删除
		function rem(id,obj){
			var flag=confirm("确定删除?");
			if(flag==true){
				$.ajax({
					url: 'admin_del.php',
					type: 'POST',
					data: {
						'id': id
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
				<legend>管理员列表</legend>
				<form class="layui-form" action="">
			   <div class="layui-form-item">
					<div class="layui-input-block search">
						<input type="text" name="title" lay-verify="title" autocomplete="off" placeholder="请输入用户名" class="layui-input">
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
								<th>用户名</th>
								<th>手机号</th>
								<th>密码</th>
								<th>操作</th>	
							</tr>
						</thead>
						<tbody>
						 <?php  $_smarty_tpl->tpl_vars['admin'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['admin']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['admin']->key => $_smarty_tpl->tpl_vars['admin']->value){
$_smarty_tpl->tpl_vars['admin']->_loop = true;
?>
							<tr>
								<td><input type="checkbox"></td>
								<td><?php echo $_smarty_tpl->tpl_vars['admin']->value['admin_name'];?>
</td>
								<td><?php echo $_smarty_tpl->tpl_vars['admin']->value['admin_phone'];?>
</td>
								<td><?php echo $_smarty_tpl->tpl_vars['admin']->value['admin_pass'];?>
</td>
								<td>
									<a href="admin_update.php?id=<?php echo $_smarty_tpl->tpl_vars['admin']->value['id'];?>

									">修改</a>&nbsp;&nbsp;|
								<a href="javascript:;" onclick="rem(<?php echo $_smarty_tpl->tpl_vars['admin']->value['id'];?>
,this)">删除</a>
								</td>
							</tr>
							<?php }
if (!$_smarty_tpl->tpl_vars['admin']->_loop) {
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