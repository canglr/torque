<?php

require_once ('../helper/global.php');
require_once ('../model/auth.php');
$smarty->compile_check = true;
$smarty->debugging = false;

if (!empty($_POST))
{
   	$auth = new Auth();
	$result = $auth->passwordChange($shareid,$_POST['password']);
	$smarty->assign('result', $result);
	
}

$smarty->assign('shareid', $shareid);
$smarty->display('password.tpl');


?>