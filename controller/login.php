<?php

require_once ('../helper/global.php');
require_once ('../model/auth.php');

$smarty->compile_check = true;
$smarty->debugging = false;

if (!empty($_POST))
{
	$email = $_POST['email'];
	$password = $_POST['password'];
   	$auth = new Auth();
	$user = $auth->login($email,$password);
	$result = $authmanage->auth($user);
	if($result)
    {
    	$auth->logs($user->id,$_SERVER["REMOTE_ADDR"]);
    	header("Location: /account/dashboard");
		die();
    }else{
    	$smarty->assign('result', 'Kullanıcı Adı veya Şifre Hatalı');
    }
}


$smarty->display('login.tpl');

?>
