<?php
$file = $_FILES['file'];
	$name = $file['name'];
	$upFilePath = "F:/wamp/www/myApp/picture".date("YmdHis").rand(0,9999).$name;
	@move_uploaded_file($_FILES['file']['tmp_name'],$upFilePath);
	 echo json_encode($upFilePath);
?>