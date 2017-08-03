<?php /* Smarty version Smarty-3.1.14, created on 2017-05-20 10:40:32
         compiled from "templates\b_table.html" */ ?>
<?php /*%%SmartyHeaderCode:16958f96a3a943591-10256854%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '425f24bb0ac810c28f74361359738da7a7b6cafe' => 
    array (
      0 => 'templates\\b_table.html',
      1 => 1495248003,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16958f96a3a943591-10256854',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_58f96a3a9d3a03_77909874',
  'variables' => 
  array (
    'rec' => 0,
    'binfo' => 0,
    'maxpage' => 0,
    'currentPage' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58f96a3a9d3a03_77909874')) {function content_58f96a3a9d3a03_77909874($_smarty_tpl) {?><!DOCTYPE html>
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
	<style type="text/css">
		.back{
			position: absolute;
			left:94%;
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
     //本人报警取消
     function cancel(id){
     	var flag=confirm("确定取消?");
     	if(flag==true){
     		$.ajax({
     			url: 'cancel_call.php',
     			type: 'POST',
     			data: {
     				'id': id,
     			},
     			success: function(text){
     				if(text==1){
     					layer.msg("取消成功");
     					$("#"+id).html('找到');
     				}else{
     					layer.msg("取消失败");
     				}
     			}
     		})
     	}
     }
     //删除
     function rem(id,obj){
     	var flag=confirm("确定删除?");
     	if(flag==true){
     		$.ajax({
     			url: 'bj_del.php',
     			type: 'POST',
     			data: {
     				'id': id
     			},
     			success: function(text){
     				if(text==1){
     					$(obj).parents("tr").remove();   
     					layer.msg("删除成功"); 

     				}
     			}
     		})
     	}
     }
     $(function(){
    //搜素
       $("#search").click(function(event) {
       	var value=$(".layui-input").val();
       	if(value==''){
               layer.msg("请输入学号");
       	}else{
       		$.ajax({
     			url: 'b_table_search.php',
     			type: 'POST',
     			dataType:"json",
     			data: {
     				'search': $(".layui-input").val()
     			},
     			success: function(text){
     				alert(text);
     				if(text==0){
                     layer.msg("没查到该学生的信息");
     				}else{
     				  $(".site-table tbody").empty();
     				  $(".back2").css('display','none');
     				  $(".back1").css('display','block');
     				  var html='';
     				  html+="<tr>";
     				  html+="<td><input type='checkbox'></td>";
     				  html+="<td>"+text[0]['lose_no']+"</td>";
     				  html+="<td>"+text[0]['lose_name']+"</td>";
     				  html+="<td>"+text[0]['p_time']+"</td>";
     				  html+="<td>"+text[0]['p_phone']+"</td>";
     				  html+="<td>"+text[0]['p_state']+"</td>";
     				  html+="<td>";
     				  html+="<a href='renling.php?no="+text[0]['lose_no']+"' >认领</a>&nbsp;&nbsp;|&nbsp;&nbsp;";
     				  html+="<a href='javascript:;' onclick='cancel("+text[0]['id']+")' >取消</a>&nbsp;&nbsp;|&nbsp;&nbsp;";
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
       	location.href="b_table.php";
       });
});
</script>
</head>
<body>
	<div class="admin-main">
		<fieldset class="layui-elem-field">
			<legend>报警人员列表</legend>
			<form class="layui-form" action="">
				<div class="layui-form-item">
					<div class="layui-input-block search">
						<input type="text" name="title" autocomplete="off" placeholder="请输入学号" class="layui-input">
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
							<th>报警时间</th>
							<th>预留手机号</th>
							<th>状态</th>
							<th>操作</th>
						</tr>
					</thead>
					<tbody>
						<?php  $_smarty_tpl->tpl_vars['binfo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['binfo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rec']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['binfo']->key => $_smarty_tpl->tpl_vars['binfo']->value){
$_smarty_tpl->tpl_vars['binfo']->_loop = true;
?>
						<tr >
							<td><input type="checkbox"></td>
							<td ><?php echo $_smarty_tpl->tpl_vars['binfo']->value['lose_no'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['binfo']->value['stu_name'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['binfo']->value['p_time'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['binfo']->value['p_phone'];?>
</td>
							<td id="<?php echo $_smarty_tpl->tpl_vars['binfo']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['binfo']->value['p_state'];?>
</td>
							<td>
								<a href="renling.php?no=<?php echo $_smarty_tpl->tpl_vars['binfo']->value['lose_no'];?>
">认领</a>&nbsp;&nbsp;|
								<a href="javascript:;" onclick="cancel(<?php echo $_smarty_tpl->tpl_vars['binfo']->value['id'];?>
)">取消</a>&nbsp;&nbsp;|
								<a href="javascript:;" onclick="rem(<?php echo $_smarty_tpl->tpl_vars['binfo']->value['id'];?>
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

		layui.use(['icheck', 'laypage','layer'], function() {
			var $ = layui.jquery,
			laypage = layui.laypage,
			layer = parent.layer === undefined ? layui.layer : parent.layer;
			$('input').iCheck({
				checkboxClass: 'icheckbox_flat-green'
			});
//分页

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
							window.location.href='b_table.php?page='+curr;
						}
					}
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