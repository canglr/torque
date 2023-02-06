<?php

require_once ('../helper/global.php');
require_once ('../model/auth.php');
$smarty->compile_check = true;
$smarty->debugging = false;

if (!empty($_POST))
{
   	$auth = new Auth();
	$result = $auth->lostpassword($_POST['email']);
	if($result->status){
        $user = $auth->userCheck($_POST['email']);
    	$content = "Sayın {$user->name} {$user->surname}, <br> Şifrenizi sıfırlamak için <a href='https://torque.canguler.me/account/password/{$result->shareid}'>tıklayınız.</a> <br>20 dakika geçerlidir.";
    	$email->send('Şifre Sıfırlama',$content,$user->email);
    }
	$result = json_encode($result->text);
	echo $result;
}


?>
