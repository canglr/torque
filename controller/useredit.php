<?php

require_once ('../helper/global.php');
require_once ('../model/users.php');
$authmanage->loginCheck();
$smarty->compile_check = true;
$smarty->debugging = false;

$user = new Users();
$getuser = $user->get($userid);
$smarty->assign('getuser', $getuser);

if (!empty($_POST))
{
	
	$userobj = (object) $_POST;
	$user = new Users();
	$result = $user->update($userid,$userobj);
	$getuser = $user->get($userid);
	$smarty->assign('getuser', $getuser);
	$smarty->assign('result', $result);
}


$smarty->display('useredit.tpl');

?>
