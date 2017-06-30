<?php
$file = $_FILES['file'];
	$name = $file['name'];
	$type='.'.strtolower(substr($name, strrpos($name, '.')+1));
	$upFilePath = "F:/wamp/www/myApp/picture/".date("YmdHis").rand(0,9999).$type;
	@move_uploaded_file($_FILES['file']['tmp_name'],$upFilePath);
	 echo json_encode($upFilePath);

?>