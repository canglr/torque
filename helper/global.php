<?php 
require_once ('smarty.php');
require_once ('authmanage.php');
require_once ('email.php');
require_once ('excel.php');
try {
	$smarty = SM::getInstance();
	$authmanage = new AuthManage();
	$email = new Email();
	$excel = new Excel();
} catch (Exception $e) {
	print $e->getMessage();
}

?>