<?php
require("include/include_top.php");
unset($_SESSION['name']);
if(isset($_POST['log_sub'])){
	$logname=$_POST['log_username'];
	$logpass=$_POST['log_password'];
	@session_start();
	$_SESSION['name']=$logname;
	// echo $_session['name'];
	// exit();

	if($logname==''&&$logpass==''){
		?>
		<div class="tishi1">
			<img src="style/img/ts.png">
			用户和密码不能为空
		</div>
		<?php
	}

	elseif ($logname==''&&$logpass!='') {
		?>
		<div class="tishi2">
			<img src="style/img/ts.png">
			用户名不能为空
		</div>
		<?php
	}
	elseif ($logpass==''&&$logname!='') {
		?>
		<div class="tishi3">
			<img src="style/img/ts.png">
			密码不能为空
		</div>
		<?php
	}
	else {
		$sql="select * from mz_user where user_name='$logname' and user_password='$logpass'";
		$rec=mysql_query($sql);
		$row=mysql_num_rows($rec);
		if($row){   
			header("Location: ./index.php");
;
		}else{
			?>
	 		<div class="tishi4" >
	 			<img src="style/img/ts.png" >
	 			用户名和密码不匹配
			</div>
			<?php	
		}

	 }
}
$smarty->display("templates/login.html");
?>