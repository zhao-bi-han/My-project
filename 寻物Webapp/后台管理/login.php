<?php
require ("include/include_top.php");
unset($_SESSION['user']);
$smarty->display("templates/login.html");
?>