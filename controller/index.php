<?php

require_once ('../helper/global.php');
require_once ('../model/users.php');
$authmanage->loginCheck();
$smarty->compile_check = true;
$smarty->debugging = false;

$smarty->display('index.tpl');

?>
