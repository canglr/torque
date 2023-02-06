<?php

require_once ('../helper/global.php');

$authmanage->loginCheck();
$smarty->compile_check = true;
$smarty->debugging = false;

$authmanage->logout();
header("Location: /account/login");
die();

?>
