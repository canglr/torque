<?php

require_once ('../helper/global.php');
require_once ('../model/users.php');
$authmanage->loginCheck();
$smarty->compile_check = true;
$smarty->debugging = false;

$user = new Users();
$getuser = $user->getLogs($userid);
$excel->create($getuser);

?>
