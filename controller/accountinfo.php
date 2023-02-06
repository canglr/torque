<?php

require_once ('../helper/global.php');
require_once ('../model/users.php');
$authmanage->loginCheck();
$smarty->compile_check = true;
$smarty->debugging = false;

$user = new Users();
$userdata = $authmanage->getUser();
$getuser = $user->get($userdata->id);
$smarty->assign('getuser', $getuser);

if (!empty($_POST))
{
	
	$userobj = (object) $_POST;
	$user = new Users();
	$result = $user->update($userdata->id,$userobj);
	$getuser = $user->get($userdata->id);
	$smarty->assign('getuser', $getuser);
	$smarty->assign('result', $result);
}


$smarty->display('accountinfo.tpl');

?>
