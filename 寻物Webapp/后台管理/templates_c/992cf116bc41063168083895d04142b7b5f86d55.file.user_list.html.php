<?php /* Smarty version Smarty-3.1.14, created on 2017-06-01 16:31:59
         compiled from "templates\user_list.html" */ ?>
<?php /*%%SmartyHeaderCode:2027358fc23e872a386-72620304%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '992cf116bc41063168083895d04142b7b5f86d55' => 
    array (
      0 => 'templates\\user_list.html',
      1 => 1496305515,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2027358fc23e872a386-72620304',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_58fc23e8764a13_03508574',
  'variables' => 
  array (
    'userlist' => 0,
    'user' => 0,
    'maxpage' => 0,
    'currentPage' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58fc23e8764a13_03508574')) {function content_58fc23e8764a13_03508574($_smarty_tpl) {?><!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>Table</title>
	<link rel="stylesheet" href="plugins/layui/css/layui.css" media="all" />
	<link rel="stylesheet" href="css/global.css" media="all">
	<link rel="stylesheet" href="plugins/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/table.css" />
	<link rel="stylesheet" href="css/my.css" />
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
	</style>

	<script type="text/javascript" src="js/jquery-1.8.0.min.js"></script>
	<script type="text/javascript">
		
		$(function(){

    //搜素
    $("#search").click(function(event) {

    	var value=$(".layui-input").val();
    	if(value==''){
    		layer.msg("请输入用户手机号");
    	}else{
    		$.ajax({
    			url: 'user_search.php',
    			type: 'POST',
    			dataType:"json",
    			data: {
    				'search': $(".layui-input").val()
    			},
    			success: function(text){

    				if(text==0){
    					layer.msg("没查到该用户的信息");
    				}else{
    					$(".site-table tbody").empty();
    					var html='';
    					html+="<tr>";
    					html+="<td><input type='checkbox'></td>";
    					html+="<td>"+text[0]['user_name']+"</td>";
    					html+="<td>"+text[0]['user_phone']+"</td>";
    					html+="<td>"+text[0]['user_intro']+"</td>";
    					html+="<td>"+text[0]['user_password']+"</td>";
    					html+="<td>";
    					html+="<a href='user_update.php?id="+text[0]['id']+"' >修改</a>&nbsp;&nbsp;|";
    					html+="<a href='user_delete.php?id="+text[0]['id']+"' >删除</a>";
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
			location.href="user_list.php";
		});
	});
		//删除
		function rem(id,obj){
			var flag=confirm("确定删除?");
			if(flag==true){
				$.ajax({
					url: 'user_delete.php',
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


</head>

<body>
	<div class="admin-main">
		<fieldset class="layui-elem-field">
			<legend>用户列表</legend>
			<form class="layui-form" action="">
				<div class="layui-form-item">
					<div class="layui-input-block search">
						<input type="text" name="title" lay-verify="title" autocomplete="off" placeholder="请输入手机号" class="layui-input">
						<a href="javascript:;" class="layui-btn layui-btn-small" id="search">
							<i class="layui-icon">&#xe615;</i> 搜索
						</a>	
					</div>
					<a href="javascript:;" class="back">返回</a>

				</div>

			</form>
			<div class="layui-field-box">

				<table class="site-table table-hover">
					<thead>

						<tr>
							<th><input type="checkbox" id="selected-all"></th>
							<th>昵称</th>
							<th>电话</th>
							<th>介绍</th>
							<th>密码</th>
							<th>操作</th>
						</tr>
					</thead>

					<tbody>
						<?php  $_smarty_tpl->tpl_vars['user'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['user']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['userlist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['user']->key => $_smarty_tpl->tpl_vars['user']->value){
$_smarty_tpl->tpl_vars['user']->_loop = true;
?>
						<tr>
							<td><input type="checkbox"></td>
							<td><?php echo $_smarty_tpl->tpl_vars['user']->value['user_name'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['user']->value['user_phone'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['user']->value['user_intro'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['user']->value['user_password'];?>
</td>
							<td>


								<a href="#" onClick="javascript:location='user_update.php?id=<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
'">修改</a>&nbsp;&nbsp;|
								<a href="javascript:;" onclick="rem(<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
,this)">删除</a>
							</td>
						</tr>
						<?php } ?>	
					</tbody>
				</table>

			</div>
		</fieldset>
		<div class="admin-table-page">
			<div id="page" class="page">
			</div>
		</div>
	</div>
	<script type="text/javascript" src="plugins/layui/layui.js"></script>
	<script>
		layui.config({
			base: 'plugins/layui/modules/'
		});

		layui.use(['icheck', 'laypage', 'layer'], function() {
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
					groups: 5 //连续显示分页数
						,
					curr:'<?php echo $_smarty_tpl->tpl_vars['currentPage']->value;?>
' //当前页数
					,
					jump: function(obj, first) {
						//得到了当前页，用于向服务端请求对应数据
						var curr = obj.curr;
						if(!first) {
							//layer.msg('第 '+ obj.curr +' 页');
							window.location.href='user_list.php?page='+curr;
						}
					}
				});

				

				$('#add').on('click', function() {
					$.get('temp/edit-form.html', null, function(form) {
						layer.open({
							type: 1,
							title: '添加表单',
							content: form,
							btn: ['保存', '取消'],
							area: ['600px', '400px'],
							maxmin: true,
							yes: function(index) {
								console.log(index);
							},
							full: function(elem) {
								var win = window.top === window.self ? window : parent.window;
								$(win).on('resize', function() {
									var $this = $(this);
									elem.width($this.width()).height($this.height()).css({
										top: 0,
										left: 0
									});
									elem.children('div.layui-layer-content').height($this.height() - 95);
								});
							}
						});
					});
				});

				$('#import').on('click', function() {
					var that = this;
					var index = layer.tips('只想提示地精准些', that, {
						tips: [1, 'white']
					});
					$('#layui-layer' + index).children('div.layui-layer-content').css('color', '#000000');
				});

				$('.site-table tbody tr').on('click', function(event) {
					var $this = $(this);
					var $input = $this.children('td').eq(0).find('input');
					$input.on('ifChecked', function(e) {
						$this.css('background-color', '#EEEEEE');
					});
					$input.on('ifUnchecked', function(e) {
						$this.removeAttr('style');
					});
					$input.iCheck('toggle');
				}).find('input').each(function() {
					var $this = $(this);
					$this.on('ifChecked', function(e) {
						$this.parents('tr').css('background-color', '#EEEEEE');
					});
					$this.on('ifUnchecked', function(e) {
						$this.parents('tr').removeAttr('style');
					});
				});
				$('#selected-all').on('ifChanged', function(event) {
					var $input = $('.site-table tbody tr td').find('input');
					$input.iCheck(event.currentTarget.checked ? 'check' : 'uncheck');
				});
			});
		</script>
	</body>

	</html><?php }} ?>