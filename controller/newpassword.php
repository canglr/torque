<?php

require_once ('../helper/global.php');
require_once ('../model/auth.php');
$authmanage->loginCheck();
$smarty->compile_check = true;
$smarty->debugging = false;

if (!empty($_POST))
{
   	$auth = new Auth();
	$result = $auth->newpassword($authmanage->getUser()->id,$_POST['mevcutsifre'],$_POST['yenisifre']);
	if($result)
    {
    	$result = 'Şifre değiştirildi';
    }else{
    	$result = 'Şifre değiştirilemedi';
    }
	
	echo $result;
}

?>