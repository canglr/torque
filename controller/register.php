<?php

require_once ('../helper/global.php');
require_once ('../model/auth.php');
$smarty->compile_check = true;
$smarty->debugging = false;

if (!empty($_POST))
{
   	$auth = new Auth();
	$userobj = (object) $_POST;
	$result = $auth->register($userobj);
	if($result->status){
    	$content = "Sayın {$userobj->name} {$userobj->surname}, <br> Torque hesabınız başarıyla oluşturuldu.";
    	$email->send('Hesabınız Oluşturuldu',$content,$userobj->email);
    }
	$smarty->assign('result', $result);
}


$smarty->display('register.tpl');

?>
